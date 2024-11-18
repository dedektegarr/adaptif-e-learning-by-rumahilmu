<?php

namespace App\Http\Controllers;

use App\Models\BankKuisioner;
use App\Models\JenisKuisioner;
use App\Models\Kelas;
use App\Models\KelasKuisioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KuisionerKelasController extends Controller
{
    public function index(Kelas $kelas)
    {
        $data = Kelas::with(['kuisioners' => function ($query) {
            $query->with('jenisKuisioner')
                  ->orderBy('jenis_kuisioner_id')
                  ->orderBy('created_at', 'desc');
            }])
            ->whereHas('pengampu', function ($query) {
                $query->where('pengampu_id', Auth::user()->id);
            })
            ->where('id', $kelas->id)
            ->first();

        // Mengambil semua JenisKuisioner
        $jenisKuisioners = JenisKuisioner::all();

        // Menghitung jumlah kuisioner di bank untuk setiap jenisKuisioner
        $bankKuisionerCounts = BankKuisioner::select('jenis_kuisioner_id', DB::raw('count(*) as total'))
            ->groupBy('jenis_kuisioner_id')
            ->pluck('total', 'jenis_kuisioner_id');

        // Menghitung jumlah kuisioner yang sudah digunakan di kelas untuk setiap jenisKuisioner
        $usedKuisionerCounts = $data->kuisioners->groupBy('jenis_kuisioner_id')
            ->map(function ($group) {
                return $group->count();
            });

        // Menentukan jenisKuisioner yang masih memiliki kuisioner yang belum digunakan di kelas
        $unusedJenisKuisioners = $jenisKuisioners->filter(function ($jenisKuisioner) use ($bankKuisionerCounts, $usedKuisionerCounts) {
            $jenisKuisionerId = $jenisKuisioner->id;
            $totalInBank = $bankKuisionerCounts->get($jenisKuisionerId, 0);
            $totalUsed = $usedKuisionerCounts->get($jenisKuisionerId, 0);

            // Jika jumlah kuisioner yang sudah digunakan kurang dari jumlah kuisioner di bank, maka masih ada yang belum digunakan
            return $totalUsed < $totalInBank;
        });

        return view('admin.kelas.kuisioner.index', [
            'data' => $data,
            'jenisKuisionerOptions' => $unusedJenisKuisioners,
        ]);
    }

    public function post(Request $request, Kelas $kelas)
    {
        $validator = Validator::make($request->all(), [
            'jenis_kuisioner_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 0, 'text' => $validator->errors()->first()], 422);
        }

        // Ambil data JenisKuisioner
        $jenisKuisioner = JenisKuisioner::find($request->jenis_kuisioner_id);

        if (!$jenisKuisioner) {
            return response()->json(['error' => 0, 'text' => 'Jenis Kuisioner tidak ditemukan'], 404);
        }

        // Mulai transaksi database
        DB::beginTransaction();
        try {
            // Ambil daftar kuisioner yang sudah ada di kelas untuk jenis kuisioner tersebut
            $existingKuisionerIds = $kelas->kuisioners()
                ->where('jenis_kuisioner_id', $jenisKuisioner->id)
                ->pluck('bank_kuisioner_id')
                ->toArray();

            // Ambil BankKuisioner yang belum digunakan
            $bankKuisionerList = BankKuisioner::where('jenis_kuisioner_id', $jenisKuisioner->id)
                ->whereNotIn('id', $existingKuisionerIds)
                ->get();

            if ($bankKuisionerList->isEmpty()) {
                return response()->json(['error' => 0, 'text' => 'Tidak ada Bank Kuisioner yang tersedia untuk ditambahkan'], 404);
            }

            foreach ($bankKuisionerList as $bankKuisioner) {
                KelasKuisioner::create([
                    'kelas_id' => $kelas->id,
                    'bank_kuisioner_id' => $bankKuisioner->id,
                ]);
            }

            // Log aktivitas
            activity()
                ->causedBy(Auth::user())
                ->performedOn($jenisKuisioner)
                ->event('admin_created')
                ->withProperties([
                    'created_fields' => $bankKuisionerList, // Informasi tambahan
                    'log_name' => 'kelas kuisioner'
                ])
                ->log(Auth::user()->nama_lengkap . ' menginput semua data bank kuisioner yang memiliki id: ' . $request->jenis_kuisioner_id . ' dan memiliki nama jenis kuisioner: ' . $jenisKuisioner->jenis_kuisioner . ' untuk kelas ' . $kelas->nama_kelas . ' sebanyak ' . $bankKuisionerList->count() . ' data.');

            DB::commit();
            return response()->json([
                'text' => 'Berhasil, penyimpanan data berhasil',
                'url' => route('kelas.kuisioner', [$kelas->id]),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'text' => 'Oopps, penyimpanan data gagal'
            ], 500);
        }
    }

    public function delete(Kelas $kelas, BankKuisioner $kuisioner){
        $oldData = KelasKuisioner::where('kelas_id',$kelas->id)->where('bank_kuisioner_id',$kuisioner->id)->first();
        $data = KelasKuisioner::where('kelas_id',$kelas->id)->where('bank_kuisioner_id',$kuisioner->id)->first();
        $data->delete();

        activity()
            ->causedBy(Auth::user())
            ->performedOn($kuisioner)
            ->event('admin_deleted')
            ->withProperties([
                'old_data' => $oldData->toArray(), // Data lama
            ])
            ->log(Auth::user()->nama_lengkap . ' menghapus data berhail.');

        $notification = array(
            'message' => 'Data berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('kelas.kuisioner',[$kelas->id])->with($notification);
    }
}
