<?php

namespace App\Http\Controllers;

use App\Models\BankPenilaianKelompok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BankPenilaianKelompokController extends Controller
{
    public function index(){
        $penilaianKelompoks = BankPenilaianKelompok::orderBy('created_at','desc')->get();
        return view('admin/penilaian_kelompok.index',[
            'penilaianKelompoks'   =>  $penilaianKelompoks,
        ]);
    }

    public function post(Request $request ){
        $validator = Validator::make($request->all(), [
            'pertanyaan'   =>  'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()],422);
        }

        DB::beginTransaction();
        try {
            $simpan = BankPenilaianKelompok::create([
                'pertanyaan'   => $request->pertanyaan,
            ]);

            activity()
            ->causedBy(Auth::user())
            ->performedOn($simpan)
            ->event('admin_created')
            ->withProperties([
                'created_fields' => $simpan, // Contoh informasi tambahan
                'log_name' => 'Bank Penilaian Kelompok'
            ])
            ->log(Auth::user()->nama_lengkap . ' menginput data bank penilaian kelompok baru.');

            DB::commit();
            return response()->json([
                'text'  =>  'Berhasil, penyimpanan data berhasil',
                'url'   =>  route('penilaianKelompok'),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'text' =>  'Oopps, penyimpanan data gagal']);
        }
    }

    public function edit(BankPenilaianKelompok $penilaianKelompok){
        return $penilaianKelompok;
    }

    public function update(Request $request ){
        $validator = Validator::make($request->all(), [
            'pertanyaan'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()],422);
        }

        $penilaianKelompok = BankPenilaianKelompok::where('id',$request->penilaian_kelompok_id)->first();
        if (!$penilaianKelompok) {
            return response()->json(['error' => 0, 'text' => 'Bank Penilaian Kelompok tidak ditemukan.'], 404);
        }
        $oldData = $penilaianKelompok->getOriginal();

        DB::beginTransaction();
        try {
            $penilaianKelompok->update([
                'pertanyaan'   => $request->pertanyaan,
            ]);
            $newData = $penilaianKelompok->fresh()->toArray();

            activity()
                ->causedBy(Auth::user())
                ->performedOn($penilaianKelompok)
                ->event('admin_updated')
                ->withProperties([
                    'old_data' => $oldData, // Data lama
                    'new_data' => $newData, // Data baru
                ])
                ->log(Auth::user()->nama_lengkap . ' mengubah data bank penilaian kelompok.');

            DB::commit();
            return response()->json([
                'text' => 'Berhasil, pembaruan data berhasil',
                'url'  => route('penilaianKelompok'),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['text' => 'Oopps, pembaruan data gagal'], 500);
        }
    }

    public function delete(BankPenilaianKelompok $penilaianKelompok){
        $oldData = $penilaianKelompok->toArray();
        $penilaianKelompok->delete();
        activity()
            ->causedBy(Auth::user())
            ->performedOn($penilaianKelompok)
            ->event('admin_deleted')
            ->withProperties([
                'old_data' => $oldData, // Data lama
            ])
            ->log(Auth::user()->nama_lengkap . ' menghapus data bank penilaian kelompok.');

        $notification = array(
            'message' => 'Data berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('penilaianKelompok')->with($notification);
    }
}
