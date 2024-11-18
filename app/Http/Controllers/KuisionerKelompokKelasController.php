<?php

namespace App\Http\Controllers;

use App\Models\BankPenilaianKelompok;
use App\Models\Kelas;
use App\Models\KelasKuisionerKelompok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KuisionerKelompokKelasController extends Controller
{
    public function index(Kelas $kelas){
        $data = Kelas::with(['kuisionerPenilaianKelompoks'])
                ->whereHas('pengampu', function ($query) {
                    $query->where('pengampu_id', Auth::user()->id);
                })
                ->where('id', $kelas->id)
                ->orderBy('kelas.created_at', 'desc')
                ->first();

        $existingBankPenilaianKelompokIds = KelasKuisionerKelompok::where('kelas_id', $kelas->id)
            ->pluck('bank_penilaian_kelompok_id')
            ->toArray();

        $kuisionerPenilaianKelompoks = BankPenilaianKelompok::whereNotIn('id', $existingBankPenilaianKelompokIds)
            ->get();

        return view('admin/kelas.kuisioner_penilaian_kelompok.index',compact('data','kuisionerPenilaianKelompoks'));
    }

    public function post(Request $request, Kelas $kelas){
        $validator = Validator::make($request->all(), [
            'bank_penilaian_kelompok_id'  =>   'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()],422);
        }

        DB::beginTransaction();
        try {
            $kelas->kuisionerPenilaianKelompoks()->attach($request->bank_penilaian_kelompok_id, [
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $penilaianKelompok = KelasKuisionerKelompok::where('kelas_id', $kelas->id)
                                    ->where('bank_penilaian_kelompok_id', $request->bank_penilaian_kelompok_id)
                                    ->first();
            activity()
            ->causedBy(Auth::user())
            ->performedOn($penilaianKelompok)
            ->event('admin_created')
            ->withProperties([
                'created_fields' => $penilaianKelompok, // Contoh informasi tambahan
                'log_name' => 'kelas kuisioner kelompok'
            ])
            ->log(Auth::user()->nama_lengkap . ' menginput data capaian lulusan baru untuk kelas: '.$kelas->nama_kelas);

            DB::commit();
            return response()->json([
                'text'  =>  'Berhasil, penyimpanan data berhasil',
                'url'   =>  route('kelas.kuisionerKelompok',[$kelas->id]),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'text' =>  'Oopps, penyimpanan data gagal']);
        }
    }

    public function delete(Kelas $kelas, BankPenilaianKelompok $kuisionerKelompok){
        $oldData = KelasKuisionerKelompok::where('kelas_id',$kelas->id)->where('bank_penilaian_kelompok_id',$kuisionerKelompok->id)->first();
        $data = KelasKuisionerKelompok::where('kelas_id',$kelas->id)->where('bank_penilaian_kelompok_id',$kuisionerKelompok->id)->first();
        $data->delete();

        activity()
            ->causedBy(Auth::user())
            ->performedOn($kuisionerKelompok)
            ->event('admin_deleted')
            ->withProperties([
                'old_data' => $oldData->toArray(), // Data lama
            ])
            ->log(Auth::user()->nama_lengkap . ' menghapus data berhail.');

        $notification = array(
            'message' => 'Data berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('kelas.kuisionerKelompok',[$kelas->id])->with($notification);
    }
}
