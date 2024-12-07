<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Materi;
use App\Models\RubrikPenilaian;
use App\Models\TopikPembahasanKelas;
use App\Models\TugasKelompokMateri;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TugasKelompokMateriController extends Controller
{
    public function index(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi)
    {
        $data = Materi::with(['tugasKelompoks' => function ($query) {
            $query->orderBy('created_at', 'desc')
                ->with(['rubrikPenilaians' => function ($query) {
                    $query->whereNull('rubrik_penilaian_tugas_kelompoks.deleted_at');
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
        foreach ($data->tugasKelompoks as $tugasKelompok) {
            $existingRubrikIds[$tugasKelompok->id] = $tugasKelompok->rubrikPenilaians->pluck('id')->toArray();
        }

        return view('admin/kelas.topik_pembahasan/materi/tugas_kelompok.index', compact('data', 'rubrikPenilaians', 'existingRubrikIds'));
    }

    public function detail(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi)
    {
        $materi = Materi::with(['topikPembahasanKelas.kelas'])
            ->where('id', $materi->id)
            ->first();
        return view('admin/kelas/topik_pembahasan/materi.detail', compact('materi'));
    }


    public function post(Request $request, Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi)
    {
        $validator = Validator::make($request->all(), [
            'judul_tugas' => 'required|string|max:255',
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
                $path = $fileMateri->storeAs('file_tugas_kelompok_materi', $uniqueFileName, 'public');

                if ($fileMateri->isValid()) {
                    $jadwal = $request->input('jadwal');
                    list($jadwalMulai, $jadwalSelesai) = explode(' - ', $jadwal);

                    $waktuMulai = Carbon::createFromFormat('m/d/Y h:i A', trim($jadwalMulai))->format('Y-m-d H:i:s');
                    $waktuSelesai = Carbon::createFromFormat('m/d/Y h:i A', trim($jadwalSelesai))->format('Y-m-d H:i:s');

                    $simpan = TugasKelompokMateri::create([
                        'materi_id' =>  $materi->id,
                        'judul_tugas' => $request->judul_tugas,
                        'file_tugas' => $path,
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
                            'log_name' => 'tugas kelompok pembahasan kelas'
                        ])
                        ->log(Auth::user()->nama_lengkap . ' menginput data tugas kelompok pembahasan baru.');

                    DB::commit();
                    return response()->json([
                        'text'  =>  'Berhasil, penyimpanan data berhasil',
                        'url'   =>  route('kelas.topikPembahasan.materi.tugasKelompok', [$kelas->id, $topikPembahasan->id, $materi->id]),
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

    public function edit(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi, TugasKelompokMateri $tugasKelompok)
    {
        return $tugasKelompok;
    }

    public function update(Request $request, Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi)
    {
        $validator = Validator::make($request->all(), [
            'judul_tugas' => 'required|string|max:255',
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
            $tugasKelompok = TugasKelompokMateri::where('id', $request->tugas_kelompok_id)->first();
            $oldData = $tugasKelompok->getOriginal();

            $filePath = $tugasKelompok->file_tugas;

            if ($request->hasFile('file_tugas')) {
                $fileTugas = $request->file('file_tugas');

                $originalName = pathinfo($fileTugas->getClientOriginalName(), PATHINFO_FILENAME);
                $extension = $fileTugas->getClientOriginalExtension();

                $uniqueFileName = $originalName . '-' . Str::uuid() . '.' . $extension;
                $filePath = $fileTugas->storeAs('file_tugas_kelompok_materi', $uniqueFileName, 'public');

                if (!$fileTugas->isValid()) {
                    return response()->json(['error' => 0, 'text' => 'Gagal, file tidak valid.'], 422);
                }
            }

            $jadwal = $request->jadwal;
            list($waktuMulai, $waktuSelesai) = explode(' - ', $jadwal);

            $waktuMulai = \Carbon\Carbon::createFromFormat('m/d/Y h:i A', $waktuMulai)->format('Y-m-d H:i:s');
            $waktuSelesai = \Carbon\Carbon::createFromFormat('m/d/Y h:i A', $waktuSelesai)->format('Y-m-d H:i:s');

            $tugasKelompok->update([
                'materi_id' =>  $materi->id,
                'judul_tugas' => $request->judul_tugas,
                'file_tugas' => $filePath,
                'tugas' => $request->tugas,
                'waktu_mulai' => $waktuMulai,
                'waktu_selesai' => $waktuSelesai,
                'status_upload' => $request->status_upload,
            ]);
            $newData = $tugasKelompok->fresh()->toArray();

            activity()
                ->causedBy(Auth::user())
                ->performedOn($tugasKelompok)
                ->event('admin_updated')
                ->withProperties([
                    'old_data' => $oldData, // Data lama
                    'new_data' => $newData, // Data baru
                ])
                ->log(Auth::user()->nama_lengkap . ' memperbarui data tugas kelompok.');

            DB::commit();
            return response()->json([
                'text' => 'Berhasil, pembaruan data berhasil',
                'url'  => route('kelas.topikPembahasan.materi.tugasKelompok', [$kelas->id, $topikPembahasan->id, $materi->id]),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['text' => 'Oopps, pembaruan data gagal'], 500);
        }
    }

    public function delete(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi, TugasKelompokMateri $tugasKelompok)
    {
        $oldData = $tugasKelompok->toArray();
        $tugasKelompok->delete();
        activity()
            ->causedBy(Auth::user())
            ->performedOn($tugasKelompok)
            ->event('admin_deleted')
            ->withProperties([
                'old_data' => $oldData, // Data lama
            ])
            ->log(Auth::user()->nama_lengkap . ' menghapus data berhail.');

        $notification = array(
            'message' => 'Data berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('kelas.topikPembahasan.materi.tugasKelompok', [$kelas->id, $topikPembahasan->id, $materi->id])->with($notification);
    }

    public function tambahRubrikPenilaian(Request $request, Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi)
    {
        $validator = Validator::make($request->all(), [
            'tugas_kelompok_id' => 'required|exists:tugas_kelompok_materis,id',
            'rubrik_penilaian_ids' => 'array',
            'rubrik_penilaian_ids.*' => 'exists:rubrik_penilaians,id'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 1, 'text' => $validator->errors()->first()], 422);
        }

        $tugasKelompok = TugasKelompokMateri::with(['rubrikPenilaians' => function ($query) {
            $query->whereNull('rubrik_penilaian_tugas_kelompoks.deleted_at'); // Menyaring berdasarkan soft delete
        }])->find($request->input('tugas_kelompok_id'));

        if (!$tugasKelompok) {
            return response()->json(['error' => 1, 'text' => 'Tugas kelompok tidak ditemukan.'], 404);
        }

        // Ambil ID rubrik penilaian yang ada di database untuk tugas kelompok ini
        $existingRubrikPenilaians = $tugasKelompok->rubrikPenilaians->pluck('id')->toArray();
        // Ambil ID rubrik penilaian yang dikirim dalam permintaan
        $newRubrikPenilaians = $request->input('rubrik_penilaians', []);
        $newRubrikPenilaians = is_array($newRubrikPenilaians) ? $newRubrikPenilaians : [];

        // ID rubrik penilaian yang harus dihapus dari database
        $rubrikPenilaiansToRemove = array_diff($existingRubrikPenilaians, $newRubrikPenilaians);

        // ID rubrik penilaian yang harus ditambahkan ke database
        $rubrikPenilaiansToAdd = array_diff($newRubrikPenilaians, $existingRubrikPenilaians);

        if (!empty($rubrikPenilaiansToRemove)) {
            $tugasKelompok->rubrikPenilaians()->detach($rubrikPenilaiansToRemove);
        }

        if (!empty($rubrikPenilaiansToAdd)) {
            $tugasKelompok->rubrikPenilaians()->attach($rubrikPenilaiansToAdd);
        }

        activity()
            ->causedBy(Auth::user())
            ->performedOn($tugasKelompok)
            ->event('admin_updated')
            ->withProperties([
                'added' => $rubrikPenilaiansToAdd,
                'removed' => $rubrikPenilaiansToRemove
            ])
            ->log(Auth::user()->nama_lengkap . ' mengupdate rubrik penilaian untuk tugas kelompok dengan ID ' . $tugasKelompok->id . '.');

        return response()->json([
            'text' => 'Berhasil, rubrik penilaian berhasil diperbarui',
            'url'  => route('kelas.topikPembahasan.materi.tugasKelompok', [$kelas->id, $topikPembahasan->id, $materi->id]),
        ]);
    }


    public function getRubrikPenilaian(Request $request)
    {
        $tugasKelompokId = $request->input('tugas_kelompok_id');

        $existingRubrikIds = [];
        $rubrikPenilaians = RubrikPenilaian::whereNull('deleted_at')->get();

        if ($tugasKelompokId) {
            $tugasKelompok = TugasKelompokMateri::with(['rubrikPenilaians' => function ($query) {
                $query->whereNull('rubrik_penilaian_tugas_kelompoks.deleted_at'); // Menyaring rubrik yang tidak dihapus soft delete
            }])->find($tugasKelompokId);
            if ($tugasKelompok) {
                $existingRubrikIds = $tugasKelompok->rubrikPenilaians->pluck('id')->toArray();
            }
        }

        return response()->json([
            'existingRubrikIds' => $existingRubrikIds,
            'rubrikPenilaians' => $rubrikPenilaians
        ]);
    }
}
