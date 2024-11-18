<?php

namespace App\Http\Controllers;

use App\Models\JenisKuisioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class JenisKuisionerController extends Controller
{
    public function index(){
        $jenisKuisioners = JenisKuisioner::all();
        return view('admin.jenis_kuisioner.index',compact('jenisKuisioners'));
    }

    public function post(Request $request ){
        $validator = Validator::make($request->all(), [
            'jenis_kuisioner'  =>   'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()],422);
        }

        DB::beginTransaction();
        try {
            $simpan = JenisKuisioner::create([
                'jenis_kuisioner'   =>  $request->jenis_kuisioner,
            ]);

            activity()
            ->causedBy(Auth::user())
            ->performedOn($simpan)
            ->event('admin_created')
            ->withProperties([
                'created_fields' => $simpan, // Contoh informasi tambahan
                'log_name' => 'Jenis Kuisioner'
            ])
            ->log(Auth::user()->nama_lengkap . ' menginput data jenis kuisioner baru.');

            DB::commit();
            return response()->json([
                'text'  =>  'Berhasil, penyimpanan data berhasil',
                'url'   =>  route('jenisKuisioner'),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'text' =>  'Oopps, penyimpanan data gagal']);
        }
    }

    public function edit(JenisKuisioner $jenisKuisioner){
        return view('admin/jenis_kuisioner.edit',compact('jenisKuisioner'));
    }

    public function update(Request $request, JenisKuisioner $jenisKuisioner ){

        $validator = Validator::make($request->all(), [
            'jenis_kuisioner'  =>   'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()],422);
        }

        $oldData = $jenisKuisioner->getOriginal();
        $jenisKuisioner->update([
            'jenis_kuisioner'   =>  $request->jenis_kuisioner,
        ]);
        $newData = $jenisKuisioner->fresh()->toArray();

        activity()
            ->causedBy(Auth::user())
            ->performedOn($jenisKuisioner)
            ->event('admin_updated')
            ->withProperties([
                'old_data' => $oldData, // Data lama
                'new_data' => $newData, // Data baru
            ])
            ->log(Auth::user()->nama_lengkap . ' mengubah data jenis kuisioner.');

        $notification = array(
            'message' => 'Berhasil, data berhasil diubah!',
            'alert-type' => 'success'
        );
        return redirect()->route('jenisKuisioner')->with($notification);
    }

    public function delete(JenisKuisioner $jenisKuisioner){
        $oldData = $jenisKuisioner->toArray();
        $jenisKuisioner->delete();
        activity()
            ->causedBy(Auth::user())
            ->performedOn($jenisKuisioner)
            ->event('admin_deleted')
            ->withProperties([
                'old_data' => $oldData, // Data lama
            ])
            ->log(Auth::user()->nama_lengkap . ' menghapus data jenis kuisioner.');

        $notification = array(
            'message' => 'Data berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('jenisKuisioner')->with($notification);
    }
}
