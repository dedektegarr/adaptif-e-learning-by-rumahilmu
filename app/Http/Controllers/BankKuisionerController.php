<?php

namespace App\Http\Controllers;

use App\Models\BankKuisioner;
use App\Models\JenisKuisioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BankKuisionerController extends Controller
{
    public $jenisKuisioners = [];

    public function __construct()
    {
        $this->jenisKuisioners = JenisKuisioner::all();
    }
    public function index(){
        $bankKuisioners = BankKuisioner::with('jenisKuisioner')->orderBy('created_at','desc')->get();

        return view('admin/bank_kuisioner.index',[
            'jenisKuisioners'   =>  $this->jenisKuisioners,
            'bankKuisioners'   =>  $bankKuisioners,
        ]);
    }

    public function post(Request $request ){
        $validator = Validator::make($request->all(), [
            'jenis_kuisioner_id'  =>   'required',
            'pertanyaan'  =>   'required',
            'tipe_kuisioner'  =>   'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()],422);
        }

        DB::beginTransaction();
        try {
            $simpan = BankKuisioner::create([
                'jenis_kuisioner_id'   =>  $request->jenis_kuisioner_id,
                'pertanyaan'   =>  $request->pertanyaan,
                'tipe_kuisioner'   =>  $request->tipe_kuisioner,
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
                'url'   =>  route('bankKuisioner'),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'text' =>  'Oopps, penyimpanan data gagal']);
        }
    }

    public function edit(BankKuisioner $bankKuisioner){
        return view('admin/bank_kuisioner.edit',[
            'jenisKuisioners'   =>  $this->jenisKuisioners,
            'bankKuisioner'   =>  $bankKuisioner,
        ]);
    }

    public function update(Request $request, BankKuisioner $bankKuisioner ){

        $validator = Validator::make($request->all(), [
            'jenis_kuisioner_id'  =>   'required',
            'pertanyaan'  =>   'required',
            'tipe_kuisioner'  =>   'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()],422);
        }

        $oldData = $bankKuisioner->getOriginal();
        $simpan = $bankKuisioner->update([
            'jenis_kuisioner_id'   =>  $request->jenis_kuisioner_id,
            'pertanyaan'   =>  $request->pertanyaan,
            'tipe_kuisioner'   =>  $request->tipe_kuisioner,
        ]);
        $newData = $bankKuisioner->fresh()->toArray();

        activity()
            ->causedBy(Auth::user())
            ->performedOn($bankKuisioner)
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
        return redirect()->route('bankKuisioner')->with($notification);
    }

    public function delete(BankKuisioner $bankKuisioner){
        $oldData = $bankKuisioner->toArray();
        $bankKuisioner->delete();
        activity()
            ->causedBy(Auth::user())
            ->performedOn($bankKuisioner)
            ->event('admin_deleted')
            ->withProperties([
                'old_data' => $oldData, // Data lama
            ])
            ->log(Auth::user()->nama_lengkap . ' menghapus data jenis kuisioner.');

        $notification = array(
            'message' => 'Data berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('bankKuisioner')->with($notification);
    }
}
