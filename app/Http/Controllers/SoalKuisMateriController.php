<?php

namespace App\Http\Controllers;

use App\Models\BankSoalPembahasan;
use App\Models\Kelas;
use App\Models\KuisMateri;
use App\Models\Materi;
use App\Models\PertanyaanKuisMateri;
use App\Models\TopikPembahasanKelas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SoalKuisMateriController extends Controller
{
    public function index(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi, KuisMateri $kuis)
    {
        $data = KuisMateri::with(['pertanyaans.bankSoalPembahasan', 'materi.topikPembahasanKelas.kelas'])
            ->whereHas('materi.topikPembahasanKelas', function ($query) use ($kelas) {
                $query->whereHas('kelas', function ($query2) use ($kelas) {
                    $query2->where('id', $kelas->id)
                        ->where('pengampu_id', Auth::user()->id);
                });
            })
            ->where('id', $kuis->id)
            ->first();
        $jenis = BankSoalPembahasan::select('level_berfikir')
            ->groupBy('level_berfikir')
            ->get();
        $kelas = Kelas::all();

        return view('admin/kelas.topik_pembahasan/materi/kuis/soal_kuis.index', compact('data', 'jenis', 'kelas'));
    }

    public function post(Request $request, Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi, KuisMateri $kuis)
    {
        $materi_id = $request->input("materi_id");
        $kuis_id = $request->input("kuis_id");

        $validator = Validator::make($request->all(), [
            'cara' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validator->errors()->first()], 422);
        }

        DB::beginTransaction();
        try {
            if ($request->cara == "tidak") {
                PertanyaanKuisMateri::create([
                    'kuis_materi_id' => $kuis->id,
                    'bank_soal_pembahasan_id' => $request->bank_soal_pembahasan_id,
                ]);
            } else {
                $kuisMateri = KuisMateri::where("materi_id", $materi_id)->where("jenis_kuis", $kuis_id)->first();
                $pertanyaan_kuis = PertanyaanKuisMateri::where('kuis_materi_id', $kuisMateri->id)->get();

                foreach ($pertanyaan_kuis as $pertanyaan) {
                    PertanyaanKuisMateri::where('kuis_materi_id', $kuisMateri->id)->where('bank_soal_pembahasan_id', $pertanyaan->id)->delete();
                    PertanyaanKuisMateri::create([
                        'kuis_materi_id' => $kuis->id,
                        'bank_soal_pembahasan_id' =>  $pertanyaan->bank_soal_pembahasan_id,
                    ]);
                }
            }

            activity()
                ->causedBy(Auth::user())
                ->performedOn($kuis)
                ->event('admin_created')
                ->withProperties([
                    'created_fields' => $kuis,
                    'log_name' => 'kuis materi'
                ])
                ->log(Auth::user()->nama_lengkap . ' menginput data kuis materi baru.');

            DB::commit();
            return response()->json([
                'text'  =>  'Berhasil, penyimpanan data berhasil',
                'url'   =>  route('kelas.topikPembahasan.materi.soalKuis', [$kelas->id, $topikPembahasan->id, $materi->id, $kuis->id]),
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'text' => $e->getMessage(),
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

    public function delete(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi, KuisMateri $kuis, PertanyaanKuisMateri $soalKuis)
    {
        $oldData = $soalKuis->toArray();
        $soalKuis->delete();

        activity()
            ->causedBy(Auth::user())
            ->performedOn($soalKuis)
            ->event('admin_deleted')
            ->withProperties([
                'old_data' => $oldData, // Data lama
            ])
            ->log(Auth::user()->nama_lengkap . ' menghapus data berhail.');

        $notification = array(
            'message' => 'Data berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('kelas.topikPembahasan.materi.soalKuis', [$kelas->id, $topikPembahasan->id, $materi->id, $kuis->id])->with($notification);
    }
}
