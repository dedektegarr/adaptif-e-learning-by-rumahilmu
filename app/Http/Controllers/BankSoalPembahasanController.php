<?php

namespace App\Http\Controllers;

use App\Models\BankSoalPembahasan;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BankSoalPembahasanController extends Controller
{
    public function index(){
        $kelas = Kelas::withCount(['bankSoalPembahasans'])->orderBy('created_at','desc')->get();
        return view('admin/soal_kuis.index',[
            'kelas'   =>  $kelas,
        ]);
    }

    public function detail(Kelas $kelas){
        $soalKuis = BankSoalPembahasan::with(['kelas'])->withCount(['jawabans'])->where('kelas_id',$kelas->id)->orderBy('created_at','desc')->get();
        return view('admin/soal_kuis.detail',[
            'soalKuis'   =>  $soalKuis,
            'kelas'     =>  $kelas,
        ]);
    }

    public function post(Request $request, Kelas $kelas){
        $validator = Validator::make($request->all(), [
            'pertanyaan'   =>  'required',
            'level_berfikir'   =>  'required',
            'pembahasan'   =>  'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()],422);
        }

        DB::beginTransaction();
        try {
            $simpan = BankSoalPembahasan::create([
                'kelas_id'   => $kelas->id,
                'pertanyaan'   => $request->pertanyaan,
                'level_berfikir'   => $request->level_berfikir,
                'pembahasan'   => $request->pembahasan,
            ]);

            activity()
            ->causedBy(Auth::user())
            ->performedOn($simpan)
            ->event('admin_created')
            ->withProperties([
                'created_fields' => $simpan, // Contoh informasi tambahan
                'log_name' => 'Bank Soal Kuis Pembahasan'
            ])
            ->log(Auth::user()->nama_lengkap . ' menginput data bank soal kuis pembahasan baru.');

            DB::commit();
            return response()->json([
                'text'  =>  'Berhasil, penyimpanan data berhasil',
                'url'   =>  route('soalKuis.detail',[$kelas->id]),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'text' =>  'Oopps, penyimpanan data gagal']);
        }
    }

    public function edit(BankSoalPembahasan $soalKuis){
        return $soalKuis;
    }

    public function update(Request $request, Kelas $kelas ){
        $validator = Validator::make($request->all(), [
            'pertanyaan'   =>  'required',
            'level_berfikir'   =>  'required',
            'pembahasan'   =>  'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()],422);
        }

        $soalKuis = BankSoalPembahasan::where('id',$request->soal_kuis_id)->first();
        if (!$soalKuis) {
            return response()->json(['error' => 0, 'text' => 'Bank soal kuis pembahasan tidak ditemukan.'], 404);
        }
        $oldData = $soalKuis->getOriginal();

        DB::beginTransaction();
        try {
            $soalKuis->update([
                'kelas_id'   => $kelas->id,
                'pertanyaan'   => $request->pertanyaan,
                'level_berfikir'   => $request->level_berfikir,
                'pembahasan'   => $request->pembahasan,
            ]);
            $newData = $soalKuis->fresh()->toArray();

            activity()
                ->causedBy(Auth::user())
                ->performedOn($soalKuis)
                ->event('admin_updated')
                ->withProperties([
                    'old_data' => $oldData, // Data lama
                    'new_data' => $newData, // Data baru
                ])
                ->log(Auth::user()->nama_lengkap . ' mengubah data bank soal kuis pembahasan.');

            DB::commit();
            return response()->json([
                'text' => 'Berhasil, pembaruan data berhasil',
                'url'   =>  route('soalKuis.detail',[$kelas->id]),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['text' => 'Oopps, pembaruan data gagal'], 500);
        }
    }

    public function delete(BankSoalPembahasan $soalKuis, Kelas $kelas){
        $oldData = $soalKuis->toArray();
        $soalKuis->delete();
        activity()
            ->causedBy(Auth::user())
            ->performedOn($soalKuis)
            ->event('admin_deleted')
            ->withProperties([
                'old_data' => $oldData, // Data lama
            ])
            ->log(Auth::user()->nama_lengkap . ' menghapus data bank soal kuis pembahasan.');

        $notification = array(
            'message' => 'Data berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('soalKuis.detail',[$kelas->id])->with($notification);
    }
}
