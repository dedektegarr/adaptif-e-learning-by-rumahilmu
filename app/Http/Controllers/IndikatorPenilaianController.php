<?php

namespace App\Http\Controllers;

use App\Models\IndikatorPenilaian;
use App\Models\RubrikPenilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class IndikatorPenilaianController extends Controller
{
    public function index(){
        $indikatorPenilaians = IndikatorPenilaian::orderBy('created_at','desc')->get();
        $rubrikPenilaians = RubrikPenilaian::orderBy('created_at','desc')->get();
        return view('admin/indikator_penilaian.index',[
            'indikatorPenilaians'   =>  $indikatorPenilaians,
            'rubrikPenilaians'   =>  $rubrikPenilaians,
        ]);
    }

    public function post(Request $request ){
        $validator = Validator::make($request->all(), [
            'rubrik_penilaian_id'   =>  'required',
            'nama_indikator'  =>   'required',
            'keterangan'  =>   'required',
            'skor_indikator'  =>   'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()],422);
        }

        DB::beginTransaction();
        try {
            $simpan = IndikatorPenilaian::create([
                'rubrik_penilaian_id'   => $request->rubrik_penilaian_id,
                'nama_indikator'        => $request->nama_indikator,
                'keterangan'            => $request->keterangan,
                'skor_indikator'        => $request->skor_indikator,
            ]);

            activity()
            ->causedBy(Auth::user())
            ->performedOn($simpan)
            ->event('admin_created')
            ->withProperties([
                'created_fields' => $simpan, // Contoh informasi tambahan
                'log_name' => 'Indikator Penilaian'
            ])
            ->log(Auth::user()->nama_lengkap . ' menginput data indikator penilaian baru.');

            DB::commit();
            return response()->json([
                'text'  =>  'Berhasil, penyimpanan data berhasil',
                'url'   =>  route('indikatorPenilaian'),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'text' =>  'Oopps, penyimpanan data gagal']);
        }
    }

    public function edit(IndikatorPenilaian $indikatorPenilaian){
        return $indikatorPenilaian;
    }

    public function update(Request $request ){
        $validator = Validator::make($request->all(), [
            'rubrik_penilaian_id'   => 'required|exists:rubrik_penilaians,id',
            'indikator_penilaian_id' => 'required|exists:indikator_penilaians,id',
            'nama_indikator'        => 'required|string|max:255',
            'keterangan'            => 'required|string',
            'skor_indikator'        => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()],422);
        }

        $indikatorPenilaian = IndikatorPenilaian::where('id',$request->indikator_penilaian_id)->first();
        if (!$indikatorPenilaian) {
            return response()->json(['error' => 0, 'text' => 'Indikator penilaian tidak ditemukan.'], 404);
        }
        $oldData = $indikatorPenilaian->getOriginal();

        DB::beginTransaction();
        try {
            $indikatorPenilaian->update([
                'rubrik_penilaian_id'   => $request->rubrik_penilaian_id,
                'nama_indikator'        => $request->nama_indikator,
                'keterangan'            => $request->keterangan,
                'skor_indikator'        => $request->skor_indikator,
            ]);
            $newData = $indikatorPenilaian->fresh()->toArray();

            activity()
                ->causedBy(Auth::user())
                ->performedOn($indikatorPenilaian)
                ->event('admin_updated')
                ->withProperties([
                    'old_data' => $oldData, // Data lama
                    'new_data' => $newData, // Data baru
                ])
                ->log(Auth::user()->nama_lengkap . ' mengubah data indikator penilaian.');

            DB::commit();
            return response()->json([
                'text' => 'Berhasil, pembaruan data berhasil',
                'url'  => route('indikatorPenilaian'),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['text' => 'Oopps, pembaruan data gagal'], 500);
        }
    }

    public function delete(IndikatorPenilaian $indikatorPenilaian){
        $oldData = $indikatorPenilaian->toArray();
        $indikatorPenilaian->delete();
        activity()
            ->causedBy(Auth::user())
            ->performedOn($indikatorPenilaian)
            ->event('admin_deleted')
            ->withProperties([
                'old_data' => $oldData, // Data lama
            ])
            ->log(Auth::user()->nama_lengkap . ' menghapus data indikator penilaian.');

        $notification = array(
            'message' => 'Data berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('indikatorPenilaian')->with($notification);
    }
}
