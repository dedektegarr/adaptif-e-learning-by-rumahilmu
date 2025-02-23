<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\KuisMateri;
use App\Models\Materi;
use App\Models\TopikPembahasanKelas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KuisMateriController extends Controller
{
    public function index(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi)
    {
        $data = Materi::with(['kuis', 'topikPembahasanKelas.kelas'])
            ->whereHas('topikPembahasanKelas', function ($query) use ($kelas) {
                $query->whereHas('kelas', function ($query2) use ($kelas) {
                    $query2->where('id', $kelas->id)
                        ->where('pengampu_id', Auth::user()->id);
                });
            })
            ->where('id', $materi->id)
            ->first();

        if ($data) {
            $data->kuis->each(function ($kuis) {
                $kuis->pertanyaan_count = $kuis->pertanyaans()->count();
            });
        }
        $pretestExists = $data->kuis->contains('jenis_kuis', 'pretest');
        $posttestExists = $data->kuis->contains('jenis_kuis', 'posttest');

        return view('admin/kelas.topik_pembahasan/materi/kuis.index', compact('data', 'pretestExists', 'posttestExists'));
    }

    public function post(Request $request, Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi)
    {
        $validator = Validator::make($request->all(), [
            'jenis_kuis' => 'required',
            'jadwal' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()], 422);
        }

        DB::beginTransaction();
        try {
            $jadwal = $request->input('jadwal');
            list($waktu_mulai, $waktu_selesai) = explode(' - ', $jadwal);

            $waktu_mulai = Carbon::createFromFormat('m/d/Y h:i A', trim($waktu_mulai))->format('Y-m-d H:i:s');
            $waktu_selesai = Carbon::createFromFormat('m/d/Y h:i A', trim($waktu_selesai))->format('Y-m-d H:i:s');

            $simpan = KuisMateri::create([
                'materi_id' =>  $materi->id,
                'waktu_mulai' => $waktu_mulai,
                'waktu_selesai' => $waktu_selesai,
                'jenis_kuis' => $request->jenis_kuis,
            ]);

            activity()
                ->causedBy(Auth::user())
                ->performedOn($simpan)
                ->event('admin_created')
                ->withProperties([
                    'created_fields' => $simpan,
                    'log_name' => 'kuis materi'
                ])
                ->log(Auth::user()->nama_lengkap . ' menginput data kuis materi baru.');

            DB::commit();
            return response()->json([
                'text'  =>  'Berhasil, penyimpanan data berhasil',
                'url'   =>  route('kelas.topikPembahasan.materi.kuis', [$kelas->id, $topikPembahasan->id, $materi->id]),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'text' =>  'Oopps, penyimpanan data gagal'
            ]);
        }
    }

    public function edit(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi, KuisMateri $kuis)
    {
        // Cek apakah pretest sudah ada di materi ini
        $pretestExists = KuisMateri::where('materi_id', $materi->id)
            ->where('jenis_kuis', 'pretest')
            ->exists();

        // Cek apakah posttest sudah ada di materi ini
        $posttestExists = KuisMateri::where('materi_id', $materi->id)
            ->where('jenis_kuis', 'posttest')
            ->exists();

        // Mengembalikan data kuis beserta status pretest dan posttest
        return response()->json([
            'id' => $kuis->id,
            'waktu_mulai' => $kuis->waktu_mulai,
            'waktu_selesai' => $kuis->waktu_selesai,
            'jenis_kuis' => $kuis->jenis_kuis,
            'pretestExists' => $pretestExists,
            'posttestExists' => $posttestExists
        ]);
    }

    public function update(Request $request, Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi)
    {
        $validator = Validator::make($request->all(), [
            'jenis_kuis' => 'required',
            'jadwal' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 0, 'text' => $validator->errors()->first()], 422);
        }

        DB::beginTransaction();
        try {
            $kuis = KuisMateri::where('id', $request->kuis_id)->first();
            $oldData = $kuis->getOriginal();

            $jadwal = $request->jadwal;
            list($waktu_mulai, $waktu_selesai) = explode(' - ', $jadwal);

            $waktu_mulai = \Carbon\Carbon::createFromFormat('m/d/Y h:i A', $waktu_mulai)->format('Y-m-d H:i:s');
            $waktu_selesai = \Carbon\Carbon::createFromFormat('m/d/Y h:i A', $waktu_selesai)->format('Y-m-d H:i:s');

            $kuis->update([
                'materi_id' =>  $materi->id,
                'waktu_mulai' => $waktu_mulai,
                'waktu_selesai' => $waktu_selesai,
                'jenis_kuis' => $request->jenis_kuis,
            ]);
            $newData = $kuis->fresh()->toArray();

            activity()
                ->causedBy(Auth::user())
                ->performedOn($kuis)
                ->event('admin_updated')
                ->withProperties([
                    'old_data' => $oldData, // Data lama
                    'new_data' => $newData, // Data baru
                ])
                ->log(Auth::user()->nama_lengkap . ' memperbarui data tugas kelompok.');

            DB::commit();
            return response()->json([
                'text' => 'Berhasil, pembaruan data berhasil',
                'url'  => route('kelas.topikPembahasan.materi.kuis', [$kelas->id, $topikPembahasan->id, $materi->id]),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['text' => 'Oopps, pembaruan data gagal'], 500);
        }
    }

    public function delete(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi, KuisMateri $kuis)
    {
        $oldData = $kuis->toArray();
        $kuis->delete();
        activity()
            ->causedBy(Auth::user())
            ->performedOn($kuis)
            ->event('admin_deleted')
            ->withProperties([
                'old_data' => $oldData, // Data lama
            ])
            ->log(Auth::user()->nama_lengkap . ' menghapus data berhail.');

        $notification = array(
            'message' => 'Data berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('kelas.topikPembahasan.materi.kuis', [$kelas->id, $topikPembahasan->id, $materi->id])->with($notification);
    }
}
