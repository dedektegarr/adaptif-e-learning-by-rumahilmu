<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Kelas;
use App\Models\Materi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\RubrikPenilaian;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\TopikPembahasanKelas;
use App\Models\TugasIndividuMateri;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TugasIndividuMateriController extends Controller
{
    public function index(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi)
    {
        $data = Materi::with(['tugasIndividus' => function ($query) {
            $query->orderBy('created_at', 'desc')
                ->with(['rubrikPenilaians' => function ($query) {
                    $query->whereNull('rubrik_penilaian_tugas_individus.deleted_at');
                }]);
        }, 'topikPembahasanKelas.kelas'])
            ->whereHas('topikPembahasanKelas', function ($query) use ($kelas) {
                $query->whereHas('kelas', function ($query2) use ($kelas) {
                    $query2->where('id', $kelas->id)
                        ->where('pengampu_id', Auth::user()->id);
                });
            })
            ->where('id', $materi->id)
            ->first();

        $rubrikPenilaians = RubrikPenilaian::all();

        $existingRubrikIds = [];
        foreach ($data->tugasIndividus as $tugasIndividu) {
            $existingRubrikIds[$tugasIndividu->id] = $tugasIndividu->rubrikPenilaians->pluck('id')->toArray();
        }

        return view('admin/kelas.topik_pembahasan/materi/tugas_individu.index', compact('data', 'rubrikPenilaians', 'existingRubrikIds'));
    }

    public function post(Request $request, Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi)
    {
        $validator = Validator::make($request->all(), [
            'file_tugas' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'tugas' => 'required|string',
            'jadwal' => 'required|string',
            'status_upload' => 'required|in:0,1',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()], 422);
        }

        DB::beginTransaction();
        try {
            if ($request->hasFile('file_tugas')) {
                $fileMateri = $request->file('file_tugas');

                $originalName = pathinfo($fileMateri->getClientOriginalName(), PATHINFO_FILENAME);
                $extension = $fileMateri->getClientOriginalExtension();

                $uniqueFileName = $originalName . '-' . Str::uuid() . '.' . $extension;
                $path = $fileMateri->storeAs('file_tugas_individu_materi', $uniqueFileName, 'public');

                if ($fileMateri->isValid()) {
                    $jadwal = $request->input('jadwal');
                    list($jadwalMulai, $jadwalSelesai) = explode(' - ', $jadwal);

                    $waktuMulai = Carbon::createFromFormat('m/d/Y h:i A', trim($jadwalMulai))->format('Y-m-d H:i:s');
                    $waktuSelesai = Carbon::createFromFormat('m/d/Y h:i A', trim($jadwalSelesai))->format('Y-m-d H:i:s');

                    $simpan = TugasIndividuMateri::create([
                        'materi_id' =>  $materi->id,
                        'file_tugas' => 'storage/' . $path,
                        'tugas' => $request->tugas,
                        'waktu_mulai' => $waktuMulai,
                        'waktu_selesai' => $waktuSelesai,
                        'status_upload' => $request->status_upload,
                    ]);

                    activity()
                        ->causedBy(Auth::user())
                        ->performedOn($simpan)
                        ->event('admin_created')
                        ->withProperties([
                            'created_fields' => $simpan,
                            'log_name' => 'tugas individu pembahasan kelas'
                        ])
                        ->log(Auth::user()->nama_lengkap . ' menginput data tugas Individu pembahasan baru.');

                    DB::commit();
                    return response()->json([
                        'text'  =>  'Berhasil, penyimpanan data berhasil',
                        'url'   =>  route('kelas.topikPembahasan.materi.tugasIndividu', [$kelas->id, $topikPembahasan->id, $materi->id]),
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
                'text' =>  'Oopps, penyimpanan data gagal'
            ]);
        }
    }

    public function edit(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi, TugasIndividuMateri $tugasIndividu)
    {
        return $tugasIndividu;
    }

    public function update(Request $request, Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi)
    {
        $validator = Validator::make($request->all(), [
            'file_tugas' => 'file|mimes:pdf,doc,docx|max:2048',
            'tugas' => 'required|string',
            'jadwal' => 'required|string',
            'status_upload' => 'required|in:0,1',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 0, 'text' => $validator->errors()->first()], 422);
        }

        DB::beginTransaction();
        try {
            $tugasIndividu = TugasIndividuMateri::where('id', $request->tugas_individu_id)->first();
            $oldData = $tugasIndividu->getOriginal();

            $filePath = $tugasIndividu->file_tugas;

            if ($request->hasFile('file_tugas')) {
                $fileTugas = $request->file('file_tugas');

                $originalName = pathinfo($fileTugas->getClientOriginalName(), PATHINFO_FILENAME);
                $extension = $fileTugas->getClientOriginalExtension();

                $uniqueFileName = $originalName . '-' . Str::uuid() . '.' . $extension;
                $filePath = $fileTugas->storeAs('file_tugas_individu_materi', $uniqueFileName, 'public');

                if (!$fileTugas->isValid()) {
                    return response()->json(['error' => 0, 'text' => 'Gagal, file tidak valid.'], 422);
                }
            }

            $jadwal = $request->jadwal;
            list($waktuMulai, $waktuSelesai) = explode(' - ', $jadwal);

            $waktuMulai = \Carbon\Carbon::createFromFormat('m/d/Y h:i A', $waktuMulai)->format('Y-m-d H:i:s');
            $waktuSelesai = \Carbon\Carbon::createFromFormat('m/d/Y h:i A', $waktuSelesai)->format('Y-m-d H:i:s');

            $tugasIndividu->update([
                'materi_id' =>  $materi->id,
                'file_tugas' => 'storage/' . $filePath,
                'tugas' => $request->tugas,
                'waktu_mulai' => $waktuMulai,
                'waktu_selesai' => $waktuSelesai,
                'status_upload' => $request->status_upload,
            ]);
            $newData = $tugasIndividu->fresh()->toArray();

            activity()
                ->causedBy(Auth::user())
                ->performedOn($tugasIndividu)
                ->event('admin_updated')
                ->withProperties([
                    'old_data' => $oldData, // Data lama
                    'new_data' => $newData, // Data baru
                ])
                ->log(Auth::user()->nama_lengkap . ' memperbarui data tugas Individu.');

            DB::commit();
            return response()->json([
                'text' => 'Berhasil, pembaruan data berhasil',
                'url'  => route('kelas.topikPembahasan.materi.tugasIndividu', [$kelas->id, $topikPembahasan->id, $materi->id]),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['text' => 'Oopps, pembaruan data gagal'], 500);
        }
    }

    public function delete(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi, TugasIndividuMateri $tugasIndividu)
    {
        $oldData = $tugasIndividu->toArray();
        $tugasIndividu->delete();
        activity()
            ->causedBy(Auth::user())
            ->performedOn($tugasIndividu)
            ->event('admin_deleted')
            ->withProperties([
                'old_data' => $oldData, // Data lama
            ])
            ->log(Auth::user()->nama_lengkap . ' menghapus data berhail.');

        $notification = array(
            'message' => 'Data berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('kelas.topikPembahasan.materi.tugasIndividu', [$kelas->id, $topikPembahasan->id, $materi->id])->with($notification);
    }

    public function getRubrikPenilaian(Request $request)
    {
        $tugasIndividuId = $request->input('tugas_individu_id');

        $existingRubrikIds = [];
        $rubrikPenilaians = RubrikPenilaian::whereNull('deleted_at')->get();

        if ($tugasIndividuId) {
            $tugasIndividu = TugasIndividuMateri::with(['rubrikPenilaians' => function ($query) {
                $query->whereNull('rubrik_penilaian_tugas_individus.deleted_at'); // Menyaring rubrik yang tidak dihapus soft delete
            }])->find($tugasIndividuId);
            if ($tugasIndividu) {
                $existingRubrikIds = $tugasIndividu->rubrikPenilaians->pluck('id')->toArray();
            }
        }

        return response()->json([
            'existingRubrikIds' => $existingRubrikIds,
            'rubrikPenilaians' => $rubrikPenilaians
        ]);
    }

    public function tambahRubrikPenilaian(Request $request, Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi)
    {
        $validator = Validator::make($request->all(), [
            'tugas_individu_id' => 'required|exists:tugas_individu_materis,id',
            'rubrik_penilaian_ids' => 'array',
            'rubrik_penilaian_ids.*' => 'exists:rubrik_penilaians,id'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 1, 'text' => $validator->errors()->first()], 422);
        }

        $tugasIndividu = TugasIndividuMateri::with(['rubrikPenilaians' => function ($query) {
            $query->whereNull('rubrik_penilaian_tugas_individus.deleted_at'); // Menyaring berdasarkan soft delete
        }])->find($request->input('tugas_individu_id'));

        if (!$tugasIndividu) {
            return response()->json(['error' => 1, 'text' => 'Tugas individu tidak ditemukan.'], 404);
        }

        // Ambil ID rubrik penilaian yang ada di database untuk tugas individu ini
        $existingRubrikPenilaians = $tugasIndividu->rubrikPenilaians->pluck('id')->toArray();
        // Ambil ID rubrik penilaian yang dikirim dalam permintaan
        $newRubrikPenilaians = $request->input('rubrik_penilaians', []);
        $newRubrikPenilaians = is_array($newRubrikPenilaians) ? $newRubrikPenilaians : [];

        // ID rubrik penilaian yang harus dihapus dari database
        $rubrikPenilaiansToRemove = array_diff($existingRubrikPenilaians, $newRubrikPenilaians);

        // ID rubrik penilaian yang harus ditambahkan ke database
        $rubrikPenilaiansToAdd = array_diff($newRubrikPenilaians, $existingRubrikPenilaians);

        if (!empty($rubrikPenilaiansToRemove)) {
            $tugasIndividu->rubrikPenilaians()->detach($rubrikPenilaiansToRemove);
        }

        if (!empty($rubrikPenilaiansToAdd)) {
            $tugasIndividu->rubrikPenilaians()->attach($rubrikPenilaiansToAdd);
        }

        activity()
            ->causedBy(Auth::user())
            ->performedOn($tugasIndividu)
            ->event('admin_updated')
            ->withProperties([
                'added' => $rubrikPenilaiansToAdd,
                'removed' => $rubrikPenilaiansToRemove
            ])
            ->log(Auth::user()->nama_lengkap . ' mengupdate rubrik penilaian untuk tugas individu dengan ID ' . $tugasIndividu->id . '.');

        return response()->json([
            'text' => 'Berhasil, rubrik penilaian berhasil diperbarui',
            'url'  => route('kelas.topikPembahasan.materi.tugasIndividu', [$kelas->id, $topikPembahasan->id, $materi->id]),
        ]);
    }
}
