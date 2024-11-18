<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\SubCpmk;
use App\Models\TopikPembahasanKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SubCpmkController extends Controller
{
    public function index(Kelas $kelas, TopikPembahasanKelas $topikPembahasan)
    {
        $data = TopikPembahasanKelas::with(['subCpmks', 'kelas'])
                ->whereHas('kelas', function ($query) use ($kelas) {
                    $query->where('id', $kelas->id)
                        ->where('pengampu_id', Auth::user()->id);
                })
                ->where('id', $topikPembahasan->id)
                ->first();
        return view('admin/kelas.topik_pembahasan/sub_cpmk.index', compact('data','kelas'));
    }


    public function post(Request $request, Kelas $kelas, TopikPembahasanKelas $topikPembahasan){
        $validator = Validator::make($request->all(), [
            'sub_cpmk'  =>   'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()],422);
        }

        DB::beginTransaction();
        try {
            $simpan = SubCpmk::create([
                'topik_pembahasan_id'  =>  $topikPembahasan->id,
                'sub_cpmk'   =>  $request->sub_cpmk,
            ]);

            activity()
            ->causedBy(Auth::user())
            ->performedOn($simpan)
            ->event('admin_created')
            ->withProperties([
                'created_fields' => $simpan, // Contoh informasi tambahan
                'log_name' => 'sub cpmk topik pembahasan kelas'
            ])
            ->log(Auth::user()->nama_lengkap . ' menginput data sub cpmk topik pembahasan baru.');

            DB::commit();
            return response()->json([
                'text'  =>  'Berhasil, penyimpanan data berhasil',
                'url'   =>  route('kelas.topikPembahasan.subCpmk',[$kelas->id, $topikPembahasan->id]),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'text' =>  'Oopps, penyimpanan data gagal']);
        }
    }

    public function edit(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, SubCpmk $subCpmk){
        return $subCpmk;
    }

    public function update(Request $request, Kelas $kelas, TopikPembahasanKelas $topikPembahasan) {
        $validator = Validator::make($request->all(), [
            'sub_cpmk'  =>   'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 0, 'text' => $validator->errors()->first()], 422);
        }

        DB::beginTransaction();
        try {
            $subCpmk = SubCpmk::where('id',$request->sub_cpmk_id)->first();
            $oldData = $subCpmk->getOriginal();

            $subCpmk->update([
                'sub_cpmk'   =>  $request->sub_cpmk,
            ]);
            $newData = $subCpmk->fresh()->toArray();

            activity()
                ->causedBy(Auth::user())
                ->performedOn($subCpmk)
                ->event('admin_updated')
                ->withProperties([
                    'old_data' => $oldData, // Data lama
                    'new_data' => $newData, // Data baru
                ])
                ->log(Auth::user()->nama_lengkap . ' memperbarui data sub cpmk topik pembahasan.');

            DB::commit();
            return response()->json([
                'text' => 'Berhasil, pembaruan data berhasil',
                'url'  => route('kelas.topikPembahasan.subCpmk', [$kelas->id, $topikPembahasan->id]),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['text' => 'Oopps, pembaruan data gagal'], 500);
        }
    }

    public function delete(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, SubCpmk $subCpmk){
        $oldData = $subCpmk->toArray();
        $subCpmk->delete();
        activity()
            ->causedBy(Auth::user())
            ->performedOn($subCpmk)
            ->event('admin_deleted')
            ->withProperties([
                'old_data' => $oldData, // Data lama
            ])
            ->log(Auth::user()->nama_lengkap . ' menghapus data berhail.');

        $notification = array(
            'message' => 'Data berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('kelas.topikPembahasan.subCpmk',[$kelas->id, $topikPembahasan->id])->with($notification);
    }
}
