<?php

namespace App\Http\Controllers;

use App\Models\RubrikPenilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RubrikPenilaianController extends Controller
{
    public function index(){
        $rubrikPenilaians = RubrikPenilaian::orderBy('created_at','desc')->get();
        return view('admin/rubrik_penilaian.index',[
            'rubrikPenilaians'   =>  $rubrikPenilaians,
        ]);
    }

    public function post(Request $request ){
        $validator = Validator::make($request->all(), [
            'rubrik_penilaian'  =>   'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()],422);
        }

        DB::beginTransaction();
        try {
            $simpan = RubrikPenilaian::create([
                'rubrik_penilaian'   =>  $request->rubrik_penilaian,
            ]);

            activity()
            ->causedBy(Auth::user())
            ->performedOn($simpan)
            ->event('admin_created')
            ->withProperties([
                'created_fields' => $simpan, // Contoh informasi tambahan
                'log_name' => 'Rubrik Penilaian'
            ])
            ->log(Auth::user()->nama_lengkap . ' menginput data rubrik penilaian baru.');

            DB::commit();
            return response()->json([
                'text'  =>  'Berhasil, penyimpanan data berhasil',
                'url'   =>  route('rubrikPenilaian'),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'text' =>  'Oopps, penyimpanan data gagal']);
        }
    }

    public function edit(RubrikPenilaian $rubrikPenilaian){
        return $rubrikPenilaian;
    }

    public function update(Request $request ){
        $validator = Validator::make($request->all(), [
            'rubrik_penilaian'  =>   'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()],422);
        }
        $rubrikPenilaian = RubrikPenilaian::where('id',$request->rubrik_penilaian_id)->first();
        $oldData = $rubrikPenilaian->getOriginal();
        $simpan = $rubrikPenilaian->update([
            'rubrik_penilaian'   =>  $request->rubrik_penilaian,
        ]);
        $newData = $rubrikPenilaian->fresh()->toArray();

        activity()
            ->causedBy(Auth::user())
            ->performedOn($rubrikPenilaian)
            ->event('admin_updated')
            ->withProperties([
                'old_data' => $oldData, // Data lama
                'new_data' => $newData, // Data baru
            ])
            ->log(Auth::user()->nama_lengkap . ' mengubah data rubrik penilaian.');

        return response()->json([
            'text'  =>  'Berhasil, penyimpanan data berhasil',
            'url'   =>  route('rubrikPenilaian'),
        ]);
    }

    public function delete(rubrikPenilaian $rubrikPenilaian){
        $oldData = $rubrikPenilaian->toArray();
        $rubrikPenilaian->delete();
        activity()
            ->causedBy(Auth::user())
            ->performedOn($rubrikPenilaian)
            ->event('admin_deleted')
            ->withProperties([
                'old_data' => $oldData, // Data lama
            ])
            ->log(Auth::user()->nama_lengkap . ' menghapus data rubrik penilaian.');

        $notification = array(
            'message' => 'Data berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('rubrikPenilaian')->with($notification);
    }
}
