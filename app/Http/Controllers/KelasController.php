<?php

namespace App\Http\Controllers;

use App\Models\BankCapaianLulusan;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class KelasController extends Controller
{
    public function index(){
        $kelas = Kelas::withCount(['capaianLulusans', 'topikPembahasanKelas','mahasiswas','kuisioners','kuisionerPenilaianKelompoks'])
                        ->with(['mahasiswas', 'pengampu', 'topikPembahasanKelas', 'capaianLulusans'])
                        ->whereHas('pengampu', function ($query) {
                            $query->where('pengampu_id', Auth::user()->id);
                        })
                        ->groupBy('kelas.id')
                        ->orderBy('kelas.created_at', 'desc')
                        ->get();
        return view('admin/kelas.index',compact('kelas'));
    }

    public function detail(Kelas $kelas){
        $kelas = Kelas::with(['mahasiswas', 'pengampu', 'topikPembahasanKelas', 'capaianLulusans','kuisioners.jenisKuisioner','kuisionerPenilaianKelompoks'])
                ->whereHas('pengampu', function ($query) {
                    $query->where('pengampu_id', Auth::user()->id);
                })
                ->where('id', $kelas->id)
                ->orderBy('kelas.created_at', 'desc')
                ->first();
        return view('admin/kelas.detail',compact('kelas'));
    }

    public function create(){
        return view('admin/kelas.create');
    }

    public function post(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_kelas' => 'required|string|max:255',
            'kode_kelas' => 'required|string|max:50|unique:kelas,kode_kelas',
            'tahun' => 'required|integer|min:2000',
            'semester' => 'required',
            'jumlah_topik' => 'required|integer|min:1',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal_mulai' => 'required|date|before_or_equal:tanggal_selesai',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 0, 'text' => $validator->errors()->first()], 422);
        }

        DB::beginTransaction();
        try {
            if ($request->hasFile('thumbnail')) {
                $thumbnail = $request->file('thumbnail');

                $originalName = pathinfo($thumbnail->getClientOriginalName(), PATHINFO_FILENAME);
                $extension = $thumbnail->getClientOriginalExtension();

                $uniqueFileName = $originalName . '-' . Str::uuid() . '.' . $extension;
                $path = $thumbnail->storeAs('thumbnails', $uniqueFileName, 'public');

                if ($thumbnail->isValid()) {
                    $simpan = Kelas::create([
                        'pengampu_id'   =>  Auth::user()->id,
                        'jenis_kelas'   =>  $request->jenis_kelas,
                        'nama_kelas' => $request->nama_kelas,
                        'kode_kelas' => $request->kode_kelas,
                        'tahun' => $request->tahun,
                        'semester' => $request->semester,
                        'jumlah_topik' => $request->jumlah_topik,
                        'thumbnail' => $path,
                        'waktu_mulai' => $request->tanggal_mulai,
                        'waktu_selesai' => $request->tanggal_selesai,
                    ]);

                    activity()
                    ->causedBy(Auth::user())
                    ->performedOn($simpan)
                    ->event('admin_created')
                    ->withProperties([
                        'created_fields' => $simpan,
                        'log_name' => 'Kelas'
                    ])
                    ->log(Auth::user()->nama_lengkap . ' menginput data baru.');

                    DB::commit();
                    return response()->json([
                        'text'  =>  'Berhasil, penyimpanan data berhasil',
                        'url'   =>  route('kelas'),
                    ]);
                } else {
                    return response()->json(['error' => 0, 'text' => 'Gagal, file tidak valid.'], 422);
                }
            } else {
                return response()->json(['error' => 0, 'text' => 'thumbnail harus diunggah.'], 422);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'text' =>  'Oopps, penyimpanan data gagal']);
        }
    }

    public function edit(kelas $kelas){
        return view('admin/kelas.edit',compact('kelas'));
    }

    public function update(Request $request, Kelas $kelas) {
        $validator = Validator::make($request->all(), [
            'nama_kelas' => 'required|string|max:255',
            'kode_kelas' => 'required|string|max:50|unique:kelas,kode_kelas,' . $kelas->id,
            'tahun' => 'required|integer|min:2000',
            'semester' => 'required',
            'jumlah_topik' => 'required|integer|min:1',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal_mulai' => 'required|date|before_or_equal:tanggal_selesai',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 0, 'text' => $validator->errors()->first()], 422);
        }

        DB::beginTransaction();
        try {

            $oldData = $kelas->getOriginal();
            if ($request->hasFile('thumbnail')) {
                // Hapus file thumbnail lama
                if ($kelas->thumbnail && Storage::disk('public')->exists($kelas->thumbnail)) {
                    Storage::disk('public')->delete($kelas->thumbnail);
                }

                $thumbnail = $request->file('thumbnail');
                $originalName = pathinfo($thumbnail->getClientOriginalName(), PATHINFO_FILENAME);
                $extension = $thumbnail->getClientOriginalExtension();
                $uniqueFileName = $originalName . '-' . Str::uuid() . '.' . $extension;
                $path = $thumbnail->storeAs('thumbnails', $uniqueFileName, 'public');

                if (!$thumbnail->isValid()) {
                    return response()->json(['error' => 0, 'text' => 'Gagal, file tidak valid.'], 422);
                }

                $kelas->thumbnail = $path;
            }

            $kelas->pengampu_id = Auth::user()->id;
            $kelas->jenis_kelas = $request->jenis_kelas;
            $kelas->nama_kelas = $request->nama_kelas;
            $kelas->kode_kelas = $request->kode_kelas;
            $kelas->tahun = $request->tahun;
            $kelas->semester = $request->semester;
            $kelas->jumlah_topik = $request->jumlah_topik;
            $kelas->waktu_mulai = $request->tanggal_mulai;
            $kelas->waktu_selesai = $request->tanggal_selesai;

            $kelas->save();

            $newData = $kelas->fresh()->toArray();

            activity()
                ->causedBy(Auth::user())
                ->performedOn($kelas)
                ->event('admin_updated')
                ->withProperties([
                    'old_data' => $oldData, // Data lama
                    'new_data' => $newData, // Data baru
                ])
                ->log(Auth::user()->nama_lengkap . ' mengubah data kelas.');

            DB::commit();
            return response()->json([
                'text'  =>  'Berhasil, pembaruan data berhasil',
                'url'   =>  route('kelas'),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'text' =>  'Oopps, pembaruan data gagal'
            ]);
        }
    }

    public function delete(Kelas $kelas){
        DB::beginTransaction();
        try {
            $oldData = $kelas->toArray();

            if ($kelas->thumbnail && Storage::disk('public')->exists($kelas->thumbnail)) {
                Storage::disk('public')->delete($kelas->thumbnail);
            }

            $kelas->delete();

            activity()
                ->causedBy(Auth::user())
                ->performedOn($kelas)
                ->event('admin_deleted')
                ->withProperties([
                    'old_data' => $oldData, // Data lama
                ])
                ->log(Auth::user()->nama_lengkap . ' menghapus data kelas.');

            DB::commit();
            return response()->json([
                'text'  =>  'Berhasil, data berhasil dihapus',
                'url'   =>  route('kelas'),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'text' =>  'Oopps, penghapusan data gagal'
            ], 500);
        }
    }
}
