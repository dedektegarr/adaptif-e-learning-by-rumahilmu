<?php

namespace App\Http\Controllers;

use App\Models\BankCapaianLulusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BankCapaianLulusanController extends Controller
{
    public function index(){
        $bankCapaianLulusans = BankCapaianLulusan::all();
        return view('admin.bank_capaian_lulusan.index',compact('bankCapaianLulusans'));
    }

    public function post(Request $request ){
        $validator = Validator::make($request->all(), [
            'capaian_lulusan'  =>   'required',
            'keterangan'  =>   'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()],422);
        }

        DB::beginTransaction();
        try {
            $simpan = BankCapaianLulusan::create([
                'capaian_lulusan'   =>  $request->capaian_lulusan,
                'keterangan'   =>  $request->keterangan,
            ]);

            activity()
            ->causedBy(Auth::user())
            ->performedOn($simpan)
            ->event('admin_created')
            ->withProperties([
                'created_fields' => $simpan, // Contoh informasi tambahan
                'log_name' => 'bank capaian lulusan'
            ])
            ->log(Auth::user()->nama_lengkap . ' menginput data bank capaian lulusan baru.');

            DB::commit();
            return response()->json([
                'text'  =>  'Berhasil, penyimpanan data berhasil',
                'url'   =>  route('bankCapaianLulusan'),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'text' =>  'Oopps, penyimpanan data gagal']);
        }
    }

    public function edit(BankCapaianLulusan $bankCapaianLulusan){
        return view('admin/bank_capaian_lulusan.edit',compact('bankCapaianLulusan'));
    }

    public function update(Request $request, BankCapaianLulusan $bankCapaianLulusan ){

        $validator = Validator::make($request->all(), [
            'capaian_lulusan'  =>   'required',
            'keterangan'  =>   'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()],422);
        }

        $oldData = $bankCapaianLulusan->getOriginal();
        $bankCapaianLulusan->update([
            'capaian_lulusan'   =>  $request->capaian_lulusan,
            'keterangan'   =>  $request->keterangan,
        ]);
        $newData = $bankCapaianLulusan->fresh()->toArray();

        activity()
            ->causedBy(Auth::user())
            ->performedOn($bankCapaianLulusan)
            ->event('admin_updated')
            ->withProperties([
                'old_data' => $oldData, // Data lama
                'new_data' => $newData, // Data baru
            ])
            ->log(Auth::user()->nama_lengkap . ' mengubah data bank capaian lulusan.');

        $notification = array(
            'message' => 'Berhasil, data berhasil diubah!',
            'alert-type' => 'success'
        );
        return redirect()->route('bankCapaianLulusan')->with($notification);
    }

    public function delete(BankCapaianLulusan $bankCapaianLulusan){
        $oldData = $bankCapaianLulusan->toArray();
        $bankCapaianLulusan->delete();
        activity()
            ->causedBy(Auth::user())
            ->performedOn($bankCapaianLulusan)
            ->event('admin_deleted')
            ->withProperties([
                'old_data' => $oldData, // Data lama
            ])
            ->log(Auth::user()->nama_lengkap . ' menghapus data bank capaian lulusan.');

        $notification = array(
            'message' => 'Data berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('bankCapaianLulusan')->with($notification);
    }
}
