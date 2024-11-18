<?php

namespace App\Http\Controllers;

use App\Models\BankCapaianLulusan;
use App\Models\BankCapaianLulusanKelas;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CapaianLulusanKelasController extends Controller
{
    public function index(Kelas $kelas){
        $data = Kelas::with(['capaianLulusans'])
                ->whereHas('pengampu', function ($query) {
                    $query->where('pengampu_id', Auth::user()->id);
                })
                ->where('id', $kelas->id)
                ->orderBy('kelas.created_at', 'desc')
                ->first();
        $capaianLulusanOptions = BankCapaianLulusan::whereDoesntHave('kelas', function ($query) use ($kelas) {
                                    $query->where('kelas_id', $kelas->id);
                                })->get();
        return view('admin/kelas.capaian_lulusan.index',compact('data','capaianLulusanOptions'));
    }

    public function post(Request $request, Kelas $kelas){
        $validator = Validator::make($request->all(), [
            'capaian_lulusan_id'  =>   'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()],422);
        }

        DB::beginTransaction();
        try {
            $kelas->capaianLulusans()->attach($request->capaian_lulusan_id, [
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $capaianLulusanKelas = BankCapaianLulusanKelas::where('kelas_id', $kelas->id)
                                    ->where('bank_capaian_lulusan_id', $request->capaian_lulusan_id)
                                    ->first();
            activity()
            ->causedBy(Auth::user())
            ->performedOn($capaianLulusanKelas)
            ->event('admin_created')
            ->withProperties([
                'created_fields' => $capaianLulusanKelas, // Contoh informasi tambahan
                'log_name' => 'capaian lulusan kelas'
            ])
            ->log(Auth::user()->nama_lengkap . ' menginput data capaian lulusan baru untuk kelas'.$kelas->nama_kelas);

            DB::commit();
            return response()->json([
                'text'  =>  'Berhasil, penyimpanan data berhasil',
                'url'   =>  route('kelas.capaianLulusan',[$kelas->id]),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'text' =>  'Oopps, penyimpanan data gagal']);
        }
    }

    public function delete(Kelas $kelas, BankCapaianLulusan $capaianLulusan){
        $oldData = BankCapaianLulusanKelas::where('kelas_id',$kelas->id)->where('bank_capaian_lulusan_id',$capaianLulusan->id)->first();
        $data = BankCapaianLulusanKelas::where('kelas_id',$kelas->id)->where('bank_capaian_lulusan_id',$capaianLulusan->id)->first();
        $data->delete();

        activity()
            ->causedBy(Auth::user())
            ->performedOn($capaianLulusan)
            ->event('admin_deleted')
            ->withProperties([
                'old_data' => $oldData->toArray(), // Data lama
            ])
            ->log(Auth::user()->nama_lengkap . ' menghapus data berhail.');

        $notification = array(
            'message' => 'Data berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('kelas.capaianLulusan',[$kelas->id])->with($notification);
    }
}
