<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\KelasMahasiswa;
use App\Models\KelasMahasiswaDetail;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MahasiswaKelasTersediaController extends Controller
{
    public function daftarKelas(Request $request)
    {
        $kelasTersedia = Kelas::with('pengampu')
            ->whereDoesntHave('mahasiswas', function ($query) {
                $query->where('mahasiswa_id', Auth::user()->id);
            })
            ->orderBy('created_at', 'desc')
            ->get();

        activity()
            ->causedBy(Auth::user()->id)
            // ->performedOn($kelas)
            ->event('mengakses')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengakses halaman kelas tersedia.');

        return view('mahasiswa/kelas.daftar_kelas', compact('kelasTersedia'));
    }

    public function detailKelas(Request $request, Kelas $kelas)
    {
        $kelas = Kelas::with(['pengampu', 'topikPembahasanKelas.materis', 'capaianLulusans', 'mahasiswas'])
            ->where('id', $kelas->id)
            ->first();

        $mahasiswa = $kelas->mahasiswas->where('username', Auth::user()->username)->first();
        if ($mahasiswa) {
            return redirect()->route('mahasiswa.kelas_saya.detail_kelas', [$kelas->id]);
        }

        activity()
            ->causedBy(Auth::user()->id)
            ->performedOn($kelas)
            ->event('mengakses')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengakses halaman detail kelas tersedia.');

        return view('mahasiswa/kelas.detail_kelas', compact('kelas'));
    }

    public function ambilKelas(Request $request, Kelas $kelas)
    {
        $kelas = Kelas::with(['kuisioners.jenisKuisioner', 'pengampu'])->where('id', $kelas->id)->first();

        activity()
            ->causedBy(Auth::user()->id)
            ->performedOn($kelas)
            ->event('mengakses')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengakses halaman ambil kelas tersedia.');

        return view('mahasiswa/kelas.ambil_kelas', compact('kelas'));
    }

    public function ambilKelasPost(Request $request, Kelas $kelas)
    {
        $rules = [];
        $messages = [];
        $unansweredQuestions = [];
        $answers = [];
        $dataToUpdate = [];

        foreach ($kelas->kuisioners as $index => $kuisioner) {
            $rules['kuisioner_' . $index] = 'required';

            if ($request->has('kuisioner_' . $index)) {
                $answers[$index] = $request->input('kuisioner_' . $index);
            } else {
                $unansweredQuestions[] = $index + 1;
            }
        }

        if (count($unansweredQuestions) > 0) {
            $messages['required'] = 'Jawaban untuk kuisioner nomor ' . implode(', ', $unansweredQuestions) . ' belum diisi.';
        }

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Validasi gagal.',
                    'errors' => $validator->errors()
                ], 422);
            }
        }

        foreach ($kelas->kuisioners as $index => $kuisioner) {
            if (isset($answers[$index])) {
                $jawaban = $answers[$index];
                $nilai = match ($jawaban) {
                    "Sangat Setuju" => $kuisioner->tipe_kuisioner === "positif" ? 6 : 1,
                    "Setuju" => $kuisioner->tipe_kuisioner === "positif" ? 5 : 2,
                    "Cukup Setuju" => $kuisioner->tipe_kuisioner === "positif" ? 4 : 3,
                    "Cukup Tidak Setuju" => $kuisioner->tipe_kuisioner === "positif" ? 3 : 4,
                    "Tidak Setuju" => $kuisioner->tipe_kuisioner === "positif" ? 2 : 5,
                    "Sangat Tidak Setuju" => $kuisioner->tipe_kuisioner === "positif" ? 1 : 6,
                    default => null,
                };

                $dataToUpdate[] = [
                    'bank_kuisioner_id' => $kuisioner->id,
                    'jawaban' => $jawaban,
                    'nilai' => $nilai
                ];
            }
        }

        $jumlah_nilai = array_sum(array_column($dataToUpdate, 'nilai'));
        $jumlah_pertanyaan =  count($kelas->kuisioners);
        $rata_rata_nilai = $jumlah_nilai / $jumlah_pertanyaan;



        if ($kelas->jenis_kelas == "umum") {
            $critical_status = '0';
        } else {
            $critical_status = match (true) {
                $rata_rata_nilai >= 0 && $rata_rata_nilai <= 3 => '0',
                $rata_rata_nilai > 3 && $rata_rata_nilai <= 4.2 => '1',
                $rata_rata_nilai > 4.2 && $rata_rata_nilai <= 6 => '2',
                default => '0', // Default case jika tidak ada kondisi yang sesuai
            };
        }

        $materi = Materi::with(['topikPembahasanKelas.kelas'])
            ->where('critical_status', $critical_status)
            ->whereHas('topikPembahasanKelas.kelas', function ($query) use ($kelas) {
                $query->where('id', $kelas->id);
            })
            ->first();

        if ($materi) {
            $kelasMahasiswaCreated = KelasMahasiswa::create([
                'mahasiswa_id' => Auth::user()->id,
                'kelas_id' => $kelas->id,
                'status_kelas' => 'belum_lulus',
                'jumlah_nilai' => $jumlah_nilai,
                'rata_rata_nilai' => $rata_rata_nilai,
            ]);

            $kelasMahasiswa = KelasMahasiswa::where('mahasiswa_id', $kelasMahasiswaCreated->mahasiswa_id)->where('kelas_id', $kelasMahasiswaCreated->kelas_id)->first();
            $data = KelasMahasiswaDetail::create([
                'kelas_mahasiswa_id' => $kelasMahasiswa->id,
                'kelas_id' => $kelas->id,
                'topik_id' => $materi->topikPembahasanKelas->id,
                'materi_id' => $materi->id,
                'critical_status' => $critical_status,
                'sumber_materi' => 'kuisioner',
            ]);
        }

        activity()
            ->causedBy(Auth::user()->id)
            ->performedOn($kelas)
            ->event('menyimpan')
            ->withProperties(['url' => $request->fullUrl(), 'properties'   =>  $data])
            ->log(Auth::user()->nama_user . ' menyimpan kuisioner untuk mengambil kelas tersedia.');

        return response()->json([
            'redirect_url' => route('mahasiswa.dashboard.kelas_saya'), // URL redirect setelah berhasil
        ]);
    }
}
