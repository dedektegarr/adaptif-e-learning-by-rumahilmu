<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Materi;
use App\Models\TopikPembahasanKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class MateriKelasController extends Controller
{
    public function index(Kelas $kelas, TopikPembahasanKelas $topikPembahasan)
    {
        $data = TopikPembahasanKelas::with(['materis', 'kelas'])
                ->whereHas('kelas', function ($query) use ($kelas) {
                    $query->where('id', $kelas->id)
                        ->where('pengampu_id', Auth::user()->id);
                })
                ->where('id', $topikPembahasan->id)
                ->first();

        $existingLevels = Materi::where('topik_pembahasan_id', $topikPembahasan->id)
                ->pluck('critical_status')
                ->toArray();

        $options = [0, 1, 2];

        if (in_array(0, $existingLevels)) {
            $options = array_diff($options, [0]);
        }

        $allLevelsAdded = count(array_intersect($options, $existingLevels)) === count($options);

        if (!$allLevelsAdded) {
            if (in_array(0, $existingLevels)) {
                $options = array_diff($options, [0]);
            }

            if (in_array(1, $existingLevels)) {
                $options = array_diff($options, [1]);
            }

            if (in_array(2, $existingLevels)) {
                $options = array_diff($options, [2]);
            }

            $options = array_values($options);
        } else {
            $options = [];
        }

        $options = array_values($options);

        $labels = [
            0 => 'Rendah',
            1 => 'Sedang',
            2 => 'Tinggi',
        ];

        return view('admin/kelas.topik_pembahasan/materi.index', compact('data', 'kelas', 'options', 'labels', 'allLevelsAdded'));
    }

    public function detail(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi){
        $materi = Materi::with(['topikPembahasanKelas.kelas'])
                ->where('id', $materi->id)
                ->first();
        return view('admin/kelas/topik_pembahasan/materi.detail',compact('materi'));
    }


    public function post(Request $request, Kelas $kelas, TopikPembahasanKelas $topikPembahasan){
        $validator = Validator::make($request->all(), [
            'isi_materi'  => 'required',
            'nama_materi' => 'required|string|max:255',
            'file_materi' => 'required|file|mimes:pdf|max:2048',
            'url_materi'  => 'required',
            'url_kedua_materi' => 'required',
            'critical_status' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()],422);
        }

        DB::beginTransaction();
        try {
            if ($request->hasFile('file_materi')) {
                $fileMateri = $request->file('file_materi');

                $originalName = pathinfo($fileMateri->getClientOriginalName(), PATHINFO_FILENAME);
                $extension = $fileMateri->getClientOriginalExtension();

                $uniqueFileName = $originalName . '-' . Str::uuid() . '.' . $extension;
                $path = $fileMateri->storeAs('file_materi', $uniqueFileName, 'public');

                if ($fileMateri->isValid()) {
                    $simpan = Materi::create([
                        'topik_pembahasan_id' => $topikPembahasan->id,
                        'isi_materi' => $request->isi_materi,
                        'nama_materi' => $request->nama_materi,
                        'url_materi' => $request->url_materi,
                        'url_kedua_materi' => $request->url_kedua_materi,
                        'critical_status' => $request->critical_status,
                        'file_materi'   =>  $path,
                    ]);

                    activity()
                    ->causedBy(Auth::user())
                    ->performedOn($simpan)
                    ->event('admin_created')
                    ->withProperties([
                        'created_fields' => $simpan,
                        'log_name' => 'materi topik pembahasan kelas'
                    ])
                    ->log(Auth::user()->nama_lengkap . ' menginput data materi topik pembahasan baru.');

                    DB::commit();
                    return response()->json([
                        'text'  =>  'Berhasil, penyimpanan data berhasil',
                        'url'   =>  route('kelas.topikPembahasan.materi',[$kelas->id, $topikPembahasan->id]),
                    ]);
                } else {
                    return response()->json(['error' => 0, 'text' => 'Gagal, file tidak valid.'], 422);
                }
            } else {
                return response()->json(['error' => 0, 'text' => 'File materi harus diunggah.'], 422);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'text' =>  'Oopps, penyimpanan data gagal']);
        }
    }

    public function edit(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi){
        return $materi;
    }

    public function update(Request $request, Kelas $kelas, TopikPembahasanKelas $topikPembahasan) {
        $validator = Validator::make($request->all(), [
            'isi_materi'  =>   'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 0, 'text' => $validator->errors()->first()], 422);
        }

        DB::beginTransaction();
        try {
            $materi = Materi::where('id',$request->materi_id)->first();
            $filePath = $materi->file_materi;

            if ($request->hasFile('file_materi')) {
                $fileMateri = $request->file('file_materi');

                $originalName = pathinfo($fileMateri->getClientOriginalName(), PATHINFO_FILENAME);
                $extension = $fileMateri->getClientOriginalExtension();

                $uniqueFileName = $originalName . '-' . Str::uuid() . '.' . $extension;
                $filePath = $fileMateri->storeAs('file_materi', $uniqueFileName, 'public');

                if (!$fileMateri->isValid()) {
                    return response()->json(['error' => 0, 'text' => 'Gagal, file tidak valid.'], 422);
                }
            }

            $materi->update([
                'topik_pembahasan_id' => $topikPembahasan->id,
                'isi_materi' => $request->isi_materi,
                'nama_materi' => $request->nama_materi,
                'url_materi' => $request->url_materi,
                'url_kedua_materi' => $request->url_kedua_materi,
                'critical_status' => $request->critical_status,
                'file_materi' => $filePath,
            ]);

            activity()
                ->causedBy(Auth::user())
                ->performedOn($materi)
                ->event('admin_updated')
                ->withProperties([
                    'updated_fields' => $materi,
                    'log_name' => 'materi topik pembahasan kelas'
                ])
                ->log(Auth::user()->nama_lengkap . ' memperbarui data materi topik pembahasan.');

            DB::commit();
            return response()->json([
                'text' => 'Berhasil, pembaruan data berhasil',
                'url'  => route('kelas.topikPembahasan.materi', [$kelas->id, $topikPembahasan->id]),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['text' => 'Oopps, pembaruan data gagal'], 500);
        }
    }

    public function delete(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi){
        $oldData = $materi->toArray();
        $materi->delete();
        activity()
            ->causedBy(Auth::user())
            ->performedOn($materi)
            ->event('admin_deleted')
            ->withProperties([
                'old_data' => $oldData, // Data lama
            ])
            ->log(Auth::user()->nama_lengkap . ' menghapus data berhail.');

        $notification = array(
            'message' => 'Data berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('kelas.topikPembahasan.materi',[$kelas->id, $topikPembahasan->id])->with($notification);
    }
}
