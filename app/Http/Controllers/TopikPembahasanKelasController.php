<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\TopikPembahasanKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TopikPembahasanKelasController extends Controller
{
    public function index(Kelas $kelas){
        $data = Kelas::with(['topikPembahasanKelas' => function($query) {
                    $query->withCount('subCpmks', 'materis');
                }])
                ->whereHas('pengampu', function ($query) {
                    $query->where('pengampu_id', Auth::user()->id);
                })
                ->where('id', $kelas->id)
                ->orderBy('created_at', 'desc')
                ->first();

        return view('admin/kelas.topik_pembahasan.index',compact('data'));
    }

    public function post(Request $request, Kelas $kelas){
        $validator = Validator::make($request->all(), [
            'nama_topik'  =>   'required',
            'topik_ke'  =>   'required|numeric',
            'cpmk'  =>   'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()],422);
        }

        DB::beginTransaction();
        try {
            $simpan = TopikPembahasanKelas::create([
                'kelas_id'  =>  $kelas->id,
                'nama_topik'   =>  $request->nama_topik,
                'topik_ke'   =>  $request->topik_ke,
                'cpmk'   =>  $request->cpmk,
            ]);

            activity()
            ->causedBy(Auth::user())
            ->performedOn($simpan)
            ->event('admin_created')
            ->withProperties([
                'created_fields' => $simpan, // Contoh informasi tambahan
                'log_name' => 'topik pembahasan kelas'
            ])
            ->log(Auth::user()->nama_lengkap . ' menginput data topik pembahasan baru.');

            DB::commit();
            return response()->json([
                'text'  =>  'Berhasil, penyimpanan data berhasil',
                'url'   =>  route('kelas.topikPembahasan',[$kelas->id]),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'text' =>  'Oopps, penyimpanan data gagal']);
        }
    }

    public function edit(Kelas $kelas, TopikPembahasanKelas $topikPembahasan){
        return $topikPembahasan;
    }

    public function update(Request $request, Kelas $kelas) {
        $validator = Validator::make($request->all(), [
            'nama_topik'  => 'required',
            'topik_ke'    => 'required|numeric',
            'cpmk'        => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 0, 'text' => $validator->errors()->first()], 422);
        }

        DB::beginTransaction();
        try {
            $topikPembahasan = TopikPembahasanKelas::where('id',$request->topik_pembahasan_id)->first();
            $oldData = $topikPembahasan->getOriginal();

            $topikPembahasan->update([
                'nama_topik' => $request->nama_topik,
                'topik_ke'   => $request->topik_ke,
                'cpmk'       => $request->cpmk,
            ]);
            $newData = $topikPembahasan->fresh()->toArray();

            activity()
                ->causedBy(Auth::user())
                ->performedOn($topikPembahasan)
                ->event('admin_updated')
                ->withProperties([
                    'old_data' => $oldData, // Data lama
                    'new_data' => $newData, // Data baru
                ])
                ->log(Auth::user()->nama_lengkap . ' memperbarui data topik pembahasan.');

            DB::commit();
            return response()->json([
                'text' => 'Berhasil, pembaruan data berhasil',
                'url'  => route('kelas.topikPembahasan', [$kelas->id]),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['text' => 'Oopps, pembaruan data gagal'], 500);
        }
    }

    public function delete(Kelas $kelas, TopikPembahasanKelas $topikPembahasan){
        $oldData = $topikPembahasan->toArray();
        $topikPembahasan->delete();
        activity()
            ->causedBy(Auth::user())
            ->performedOn($topikPembahasan)
            ->event('admin_deleted')
            ->withProperties([
                'old_data' => $oldData, // Data lama
            ])
            ->log(Auth::user()->nama_lengkap . ' menghapus data berhail.');

        $notification = array(
            'message' => 'Data berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('kelas.topikPembahasan',[$kelas->id])->with($notification);
    }
}
