<?php

namespace App\Http\Controllers;

use App\Models\Diskusi;
use App\Models\DiskusiRespon;
use App\Models\IndikatorPenilaian;
use App\Models\JawabanKuisMateri;
use App\Models\Kelas;
use App\Models\KelasKuisionerKelompok;
use App\Models\KelasMahasiswa;
use App\Models\KelasMahasiswaDetail;
use App\Models\KuisMateri;
use App\Models\Materi;
use App\Models\MateriPengayaan;
use App\Models\NilaiKuisMateri;
use App\Models\PengumpulanTugasIndividu;
use App\Models\PengumpulanTugasIndividuDetail;
use App\Models\PengumpulanTugasKelompok;
use App\Models\PengumpulanTugasKelompokDetail;
use App\Models\PengumpulanTugasKelompokDetailNilai;
use App\Models\PenilaianKelompok;
use App\Models\PenilaianKelompokDetail;
use App\Models\PertanyaanKuisMateri;
use App\Models\RiwayatFuzzy;
use App\Models\TopikPembahasanKelas;
use App\Models\TugasIndividuMateri;
use App\Models\TugasKelompokMateri;
use App\Models\Uas;
use App\Models\UasNilai;
use App\Models\UasPeserta;
use App\Models\User;
use App\Models\Uts;
use App\Models\UtsNilai;
use App\Models\UtsPeserta;
use App\Models\UtsSoal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Termwind\Components\Raw;

class MahasiswaKelasSayaController extends Controller
{
    public function daftarKelasSaya(Request $request)
    {
        activity()
            ->causedBy(Auth::user()->id)
            ->event('mengakses')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengakses halaman kelas mahasiswa.');

        $daftarKelasSaya = User::with(['kelas'])->where('id', Auth::user()->id)->first();
        return view('mahasiswa/kelas_saya/index', compact('daftarKelasSaya'));
    }

    public function detailKelas(Request $request, Kelas $kelas)
    {
        activity()
            ->causedBy(Auth::user()->id)
            ->performedOn($kelas)
            ->event('mengakses')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengakses halaman kelas mahasiswa detail.');

        $kelas = Kelas::with([
            'pengampu',
            'topikPembahasanKelas.materis' => function ($query) {
                $query->orderBy('critical_status');
            },
            'capaianLulusans',
            'mahasiswas'
        ])->where('id', $kelas->id)->first();

        return view('mahasiswa/kelas_saya.detail_kelas', compact('kelas'));
    }

    public function utsKelas(Request $request, Kelas $kelas)
    {
        $peserta = UtsPeserta::with(['utsSesi.uts' => function ($query) use ($kelas) {
            $query->where('kelas_id', $kelas->id)
                ->with('bankSoalPembahasans.jawabans');
        }])
            ->where('mahasiswa_id', Auth::user()->id)
            ->whereHas('utsSesi.uts', function ($query) use ($kelas) {
                $query->where('kelas_id', $kelas->id);
            })
            ->first();
        if (!$peserta) {
            return redirect()->route('mahasiswa.kelas_saya.detail_kelas', [$kelas->id])
                ->with('error', 'Anda tidak terdaftar dalam sesi UTS manapun.');
        }

        $sudah = UtsNilai::where('mahasiswa_id', Auth::user()->id)->where('uts_id', $peserta->utsSesi->uts->id)->count();
        if ($sudah) {
            return redirect()->route('mahasiswa.kelas_saya.detail_kelas', [$kelas->id])
                ->with('success', 'Anda sudah mengerjakan UTS');
        }

        $tanggalSekarang = Carbon::now()->toDateString(); // Menghasilkan format "YYYY-MM-DD"
        $tanggalUts = Carbon::parse($peserta->utsSesi->tanggal_dilaksanakan)->toDateString(); // Menghasilkan format "YYYY-MM-DD"

        // Parsing waktu mulai dan selesai dari format AM/PM ke Carbon
        $waktuMulai = Carbon::createFromFormat('h:i A', $peserta->utsSesi->waktu_mulai);
        $waktuSelesai = Carbon::createFromFormat('h:i A', $peserta->utsSesi->waktu_selesai);

        $jamSekarang = Carbon::now('Asia/Jakarta')->format('H:i'); // Ganti 'Asia/Jakarta' dengan timezone yang sesuai

        // Menghitung batas waktu masuk: 10 menit sebelum UTS dimulai dan 1 menit setelah dimulai
        $batasWaktuMasuk = $waktuMulai->copy()->subMinutes(10);
        $batasWaktuTerakhir = $waktuSelesai->copy()->addMinute(2);

        // Jika ingin tetap dalam format 24 jam, cukup format pada saat diperlukan
        $waktuMulaiFormatted = $waktuMulai->format('H:i');
        $waktuSelesaiFormatted = $waktuSelesai->format('H:i');
        $batasWaktuMasukFormatted = $batasWaktuMasuk->format('H:i');
        $batasWaktuTerakhirFormatted = $batasWaktuTerakhir->format('H:i');
        function buatPesan($tanggalUts, $waktuMulaiFormatted, $waktuSelesaiFormatted)
        {
            return 'UTS akan dilaksanakan pada tanggal ' . Carbon::parse($tanggalUts)->translatedFormat('l, d F Y') .
                ' dari pukul ' . $waktuMulaiFormatted . ' sampai ' . $waktuSelesaiFormatted . '.';
        }
        if ($tanggalSekarang < $tanggalUts) {
            // Jika tanggal sekarang kurang dari tanggal UTS
            return redirect()->route('mahasiswa.kelas_saya.detail_kelas', [$kelas->id])
                ->with('error', buatPesan($tanggalUts, $waktuMulaiFormatted, $waktuSelesaiFormatted) . '</br>' .
                    'Anda hanya bisa masuk ke halaman UTS 10 menit sebelum dimulai.');
        } elseif ($tanggalSekarang > $tanggalUts) {
            // Jika tanggal sekarang lebih dari tanggal UTS
            return redirect()->route('mahasiswa.kelas_saya.detail_kelas', [$kelas->id])
                ->with('error', 'UTS sudah dilaksanakan pada hari ' . Carbon::parse($tanggalUts)->translatedFormat('l, d F Y') .
                    ' dari pukul ' . Carbon::parse($waktuMulai)->format('H:i') . ' sampai ' . Carbon::parse($waktuSelesai)->format('H:i') . '.');
        } else {
            if ($jamSekarang >= $batasWaktuMasukFormatted && $jamSekarang <= $waktuSelesaiFormatted) {
                // Jika jam sekarang ada di antara batas waktu masuk dan waktu selesai
                activity()
                    ->causedBy(Auth::user()->id)
                    ->performedOn($kelas)
                    ->event('mengakses')
                    ->withProperties(['url' => $request->fullUrl()])
                    ->log(Auth::user()->nama_user . ' mengakses halaman uts kelas.');
                return view('mahasiswa/kelas_saya/ujian.uts', compact('kelas', 'peserta'));
            } elseif ($jamSekarang < $batasWaktuMasukFormatted) {
                // Jika jam sekarang masih di bawah batas waktu masuk
                return redirect()->route('mahasiswa.kelas_saya.detail_kelas', [$kelas->id])
                    ->with('error', buatPesan($tanggalUts, $waktuMulaiFormatted, $waktuSelesaiFormatted) .
                        '<br>Anda hanya bisa masuk ke halaman UTS 10 menit sebelum dimulai.');
            } elseif ($jamSekarang > $waktuSelesaiFormatted) {
                // Jika jam sekarang masih di bawah batas waktu masuk
                return redirect()->route('mahasiswa.kelas_saya.detail_kelas', [$kelas->id])
                    ->with('error', 'UTS sudah dilaksanakan pada hari ' . Carbon::parse($tanggalUts)->translatedFormat('l, d F Y') .
                        ' dari pukul ' . Carbon::parse($waktuMulai)->format('H:i') . ' sampai ' . Carbon::parse($waktuSelesai)->format('H:i') . '.');
            }
        }

        // return view('mahasiswa/kelas_saya/ujian.uts',compact('kelas','peserta'));
    }

    public function utsKelasPost(Request $request, Kelas $kelas)
    {
        $soalUts = Uts::with(['bankSoalPembahasans.jawabans'])
            ->where('kelas_id', $kelas->id)
            ->first();

        if (!$soalUts) {
            return response()->json([
                'success' => false,
                'message' => 'Soal UTS tidak ditemukan atau waktu ujian telah berakhir.',
            ], 404);
        }

        $nilais = [];
        $isTimeUp = $request->input('is_time_up') === 'true';

        foreach ($soalUts->bankSoalPembahasans as $index => $soalPembahasan) {
            $jawaban_id = $request->input("jawaban_{$index}");
            $alasan = $request->input("alasan_{$index}");

            // Jika waktu habis dan jawaban tidak diisi, isi dengan nilai default
            if ($isTimeUp && !$jawaban_id) {
                $jawaban_id = null;
                $nilai = 0;
            } else {
                $jawabanBenar = JawabanKuisMateri::where('bank_soal_pembahasan_id', $soalPembahasan->id)
                    ->where('status_jawaban', true)
                    ->first();

                $nilai = ($jawaban_id == $jawabanBenar->id) ? 1 : 0;
            }

            $nilais[] = [
                'uts_id' => $soalUts->id,
                'mahasiswa_id' => Auth::user()->id,
                'bank_soal_pembahasan_id' => $soalPembahasan->id,
                'jawaban_id' => $jawaban_id,
                'nilai' => $nilai,
                'alasan' => $alasan,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        activity()
            ->causedBy(Auth::user()->id)
            ->performedOn($kelas)
            ->event('menyimpan')
            ->withProperties(['url' => $request->fullUrl(), 'properties' =>    $nilais])
            ->log(Auth::user()->nama_user . ' menyimpan jawaban uts kelas.');


        UtsNilai::insert($nilais);

        return response()->json([
            'success' => true,
            'message' => 'Jawaban UTS berhasil disimpan!',
            'redirect_url' => route('mahasiswa.kelas_saya.detail_kelas', [$kelas->id]),
        ]);
    }

    public function uasKelas(Request $request, Kelas $kelas)
    {
        $peserta = UasPeserta::with(['uasSesi.uas' => function ($query) use ($kelas) {
            $query->where('kelas_id', $kelas->id)
                ->with('bankSoalPembahasans.jawabans');
        }])
            ->where('mahasiswa_id', Auth::user()->id)
            ->whereHas('uasSesi.uas', function ($query) use ($kelas) {
                $query->where('kelas_id', $kelas->id);
            })
            ->first();
        if (!$peserta) {
            return redirect()->route('mahasiswa.kelas_saya.detail_kelas', [$kelas->id])
                ->with('error', 'Anda tidak terdaftar dalam sesi UAS manapun.');
        }

        $sudah = UasNilai::where('mahasiswa_id', Auth::user()->id)->where('uas_id', $peserta->uasSesi->uas->id)->count();
        if ($sudah) {
            return redirect()->route('mahasiswa.kelas_saya.detail_kelas', [$kelas->id])
                ->with('success', 'Anda sudah mengerjakan UAS');
        }

        $tanggalSekarang = Carbon::now()->toDateString(); // Menghasilkan format "YYYY-MM-DD"
        $tanggalUas = Carbon::parse($peserta->uasSesi->tanggal_dilaksanakan)->toDateString(); // Menghasilkan format "YYYY-MM-DD"

        // Parsing waktu mulai dan selesai dari format AM/PM ke Carbon
        $waktuMulai = Carbon::createFromFormat('h:i A', $peserta->uasSesi->waktu_mulai);
        $waktuSelesai = Carbon::createFromFormat('h:i A', $peserta->uasSesi->waktu_selesai);

        $jamSekarang = Carbon::now('Asia/Jakarta')->format('H:i'); // Ganti 'Asia/Jakarta' dengan timezone yang sesuai

        // Menghitung batas waktu masuk: 10 menit sebelum UAS dimulai dan 1 menit setelah dimulai
        $batasWaktuMasuk = $waktuMulai->copy()->subMinutes(10);
        $batasWaktuTerakhir = $waktuSelesai->copy()->addMinute(2);

        // Jika ingin tetap dalam format 24 jam, cukup format pada saat diperlukan
        $waktuMulaiFormatted = $waktuMulai->format('H:i');
        $waktuSelesaiFormatted = $waktuSelesai->format('H:i');
        $batasWaktuMasukFormatted = $batasWaktuMasuk->format('H:i');
        $batasWaktuTerakhirFormatted = $batasWaktuTerakhir->format('H:i');
        function buatPesanUas($tanggalUas, $waktuMulaiFormatted, $waktuSelesaiFormatted)
        {
            return 'UAS akan dilaksanakan pada tanggal ' . Carbon::parse($tanggalUas)->translatedFormat('l, d F Y') .
                ' dari pukul ' . $waktuMulaiFormatted . ' sampai ' . $waktuSelesaiFormatted . '.';
        }
        if ($tanggalSekarang < $tanggalUas) {
            // Jika tanggal sekarang kurang dari tanggal UAS
            return redirect()->route('mahasiswa.kelas_saya.detail_kelas', [$kelas->id])
                ->with('error', buatPesanUas($tanggalUas, $waktuMulaiFormatted, $waktuSelesaiFormatted) . '</br>' .
                    'Anda hanya bisa masuk ke halaman UAS 10 menit sebelum dimulai.');
        } elseif ($tanggalSekarang > $tanggalUas) {
            // Jika tanggal sekarang lebih dari tanggal UAS
            return redirect()->route('mahasiswa.kelas_saya.detail_kelas', [$kelas->id])
                ->with('error', 'UAS sudah dilaksanakan pada hari ' . Carbon::parse($tanggalUas)->translatedFormat('l, d F Y') .
                    ' dari pukul ' . Carbon::parse($waktuMulai)->format('H:i') . ' sampai ' . Carbon::parse($waktuSelesai)->format('H:i') . '.');
        } else {
            if ($jamSekarang >= $batasWaktuMasukFormatted && $jamSekarang <= $waktuSelesaiFormatted) {
                // Jika jam sekarang ada di antara batas waktu masuk dan waktu selesai
                activity()
                    ->causedBy(Auth::user()->id)
                    ->performedOn($kelas)
                    ->event('mengakses')
                    ->withProperties(['url' => $request->fullUrl()])
                    ->log(Auth::user()->nama_user . ' mengakses halaman uas kelas.');
                return view('mahasiswa/kelas_saya/ujian.uas', compact('kelas', 'peserta'));
            } elseif ($jamSekarang < $batasWaktuMasukFormatted) {
                // Jika jam sekarang masih di bawah batas waktu masuk
                return redirect()->route('mahasiswa.kelas_saya.detail_kelas', [$kelas->id])
                    ->with('error', buatPesan($tanggalUas, $waktuMulaiFormatted, $waktuSelesaiFormatted) .
                        '<br>Anda hanya bisa masuk ke halaman UAS 10 menit sebelum dimulai.');
            } elseif ($jamSekarang > $waktuSelesaiFormatted) {
                // Jika jam sekarang masih di bawah batas waktu masuk
                return redirect()->route('mahasiswa.kelas_saya.detail_kelas', [$kelas->id])
                    ->with('error', 'UAS sudah dilaksanakan pada hari ' . Carbon::parse($tanggalUas)->translatedFormat('l, d F Y') .
                        ' dari pukul ' . Carbon::parse($waktuMulai)->format('H:i') . ' sampai ' . Carbon::parse($waktuSelesai)->format('H:i') . '.');
            }
        }

        // return view('mahasiswa/kelas_saya/ujian.uts',compact('kelas','peserta'));
    }

    public function uasKelasPost(Request $request, Kelas $kelas)
    {
        $soalUas = Uas::with(['bankSoalPembahasans.jawabans'])
            ->where('kelas_id', $kelas->id)
            ->first();

        if (!$soalUas) {
            return response()->json([
                'success' => false,
                'message' => 'Soal UAS tidak ditemukan atau waktu ujian telah berakhir.',
            ], 404);
        }

        $nilais = [];
        $isTimeUp = $request->input('is_time_up') === 'true';

        foreach ($soalUas->bankSoalPembahasans as $index => $soalPembahasan) {
            $jawaban_id = $request->input("jawaban_{$index}");
            $alasan = $request->input("alasan_{$index}");

            // Jika waktu habis dan jawaban tidak diisi, isi dengan nilai default
            if ($isTimeUp && !$jawaban_id) {
                $jawaban_id = null;
                $nilai = 0;
            } else {
                $jawabanBenar = JawabanKuisMateri::where('bank_soal_pembahasan_id', $soalPembahasan->id)
                    ->where('status_jawaban', true)
                    ->first();

                $nilai = ($jawaban_id == $jawabanBenar->id) ? 1 : 0;
            }

            $nilais[] = [
                'uas_id' => $soalUas->id,
                'mahasiswa_id' => Auth::user()->id,
                'bank_soal_pembahasan_id' => $soalPembahasan->id,
                'jawaban_id' => $jawaban_id,
                'nilai' => $nilai,
                'alasan' => $alasan,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        activity()
            ->causedBy(Auth::user()->id)
            ->performedOn($kelas)
            ->event('menyimpan')
            ->withProperties(['url' => $request->fullUrl(), 'properties' =>    $nilais])
            ->log(Auth::user()->nama_user . ' menyimpan jawaban uas kelas.');


        UasNilai::insert($nilais);

        return response()->json([
            'success' => true,
            'message' => 'Jawaban UAS berhasil disimpan!',
            'redirect_url' => route('mahasiswa.kelas_saya.detail_kelas', [$kelas->id]),
        ]);
    }

    public function detailMateri(Request $request, Kelas $kelas, Materi $materi)
    {
        // Ambil data materi dan relasinya
        $materi = Materi::with(['topikPembahasanKelas.kelas.pengampu'])
            ->where('id', $materi->id)
            ->first();

        // Cek apakah pretest ada
        $preTest = KuisMateri::where('materi_id', $materi->id)
            ->select('id')
            ->where('jenis_kuis', 'pretest')
            ->first();
        // Redirect jika pretest belum ditambahkan
        if (!$preTest) {
            return redirect()->route('mahasiswa.kelas_saya.detail_kelas', $kelas->id)
                ->with('error', 'Pre Test belum ditambahkan!');
        }

        // Cek apakah user sudah mengerjakan pretest
        $sudahPreTest = NilaiKuisMateri::where('kuis_materi_id', $preTest->id)
            ->where('mahasiswa_id', Auth::user()->id)
            ->first();
        if ($sudahPreTest) {
            // Return view detail materi jika pretest sudah dikerjakan
            activity()
                ->causedBy(Auth::user()->id)
                ->performedOn($kelas)
                ->event('megakses')
                ->withProperties(['url' => $request->fullUrl()])
                ->log(Auth::user()->nama_user . ' mengakses halaman detail materi kelas.');
            return view('mahasiswa/kelas_saya.detail_materi', compact('kelas', 'materi'));
        } else {
            // Ambil soal pretest dan acak jawabannya
            $kuis = PertanyaanKuisMateri::with('bankSoalPembahasan.jawabans')
                ->where('kuis_materi_id', $preTest->id)
                ->get();

            // Acak jawaban
            $kuis->each(function ($pertanyaan) {
                if ($pertanyaan->bankSoalPembahasan && $pertanyaan->bankSoalPembahasan->jawabans) {
                    $pertanyaan->bankSoalPembahasan->jawabans = $pertanyaan->bankSoalPembahasan->jawabans->shuffle();
                }
            });
            activity()
                ->causedBy(Auth::user()->id)
                ->performedOn($kelas)
                ->event('megakses')
                ->withProperties(['url' => $request->fullUrl()])
                ->log(Auth::user()->nama_user . ' mengakses halaman kuis pretest kelas.');
            return view('mahasiswa/kelas_saya.kuis', compact('kuis', 'preTest', 'materi', 'kelas'));
        }
    }

    public function simpanKuis(Request $request, Kelas $kelas, Materi $materi)
    {
        $preTest = KuisMateri::where('materi_id', $materi->id)
            ->where('jenis_kuis', 'pretest')
            ->first();
        // return $preTest;
        $kuis = PertanyaanKuisMateri::with('bankSoalPembahasan.jawabans')
            ->where('kuis_materi_id', $preTest->id)
            ->get();

        $rules = [];
        $messages = [];

        foreach ($kuis as $index => $pertanyaanKuis) {
            $rules["jawaban_{$index}"] = 'required';
            $messages["jawaban_{$index}.required"] = "Pertanyaan nomor " . ($index + 1) . " harus dijawab.";
        }

        $validatedData = $request->validate($rules, $messages);

        $nilais = [];

        foreach ($kuis as $index => $pertanyaanKuis) {
            $kuis_id = $request->input("kuis_{$index}");
            $jawaban_id = $request->input("jawaban_{$index}");
            $alasan = $request->input("alasan_{$index}");

            $jawabanBenar = JawabanKuisMateri::where('bank_soal_pembahasan_id', $kuis_id)
                ->where('status_jawaban', true)
                ->first();

            $nilai = $jawaban_id == $jawabanBenar->id ? 1 : 0;

            $nilais[] = [
                'kuis_materi_id' => $preTest->id,
                'mahasiswa_id' => Auth::user()->id,
                'bank_soal_pembahasan_id'   =>  $kuis_id,
                'jawaban_kuis_materi_id' => $jawaban_id,
                'nilai' => $nilai,
                'alasan' => $alasan,
                'created_at' => now(),  // Menambahkan created_at dengan waktu sekarang
                'updated_at' => now(),  // Menambahkan updated_at dengan waktu sekarang
            ];
        }

        // Simpan nilai ke database
        NilaiKuisMateri::insert($nilais);

        activity()
            ->causedBy(Auth::user()->id)
            ->performedOn($kelas)
            ->event('menyimpan')
            ->withProperties(['url' => $request->fullUrl(), 'properties'   =>  $nilais])
            ->log(Auth::user()->nama_user . ' menyimpan jawaban kuis pretest kelas.');

        session()->flash('success', 'Jawaban kuis berhasil disimpan!');
        return redirect()->route('mahasiswa.kelas_saya.detail_materi', [$kelas->id, $materi->id]);
    }

    public function tugasKelompok(Request $request, Kelas $kelas, Materi $materi)
    {
        $materi = Materi::where('id', $materi->id)
            ->whereHas('topikPembahasanKelas.kelas', function ($query) use ($kelas) {
                $query->where('id', $kelas->id);
            })
            ->with([
                'tugasKelompoks.pengumpulanTugas.pengumpulanTugasDetails' => function ($query) {
                    $query->where('mahasiswa_id', Auth::user()->id);
                },
                'tugasKelompoks.pengumpulanTugas.pengumpulanTugasDetails.mahasiswa'
            ])
            ->first();

        $soals = KelasKuisionerKelompok::with('bankPenilaianKelompok')->where('kelas_id', $kelas->id)->get();

        $tugasKelompoks = TugasKelompokMateri::with(['pengumpulanTugas.pengumpulanTugasDetails.mahasiswa', 'materi.topikPembahasanKelas'])
            ->where('materi_id', $materi->id)->get();

        $materi2 = Materi::with([
            'tugasKelompoks.pengumpulanTugas.pengumpulanTugasDetails' // Include PengumpulanTugasDetails within pengumpulanTugas
        ])
            ->where('id', $materi->id)
            ->whereHas('topikPembahasanKelas.kelas', function ($query) use ($kelas) {
                $query->where('id', $kelas->id);
            })
            ->first();
        // return $materi2;

        $submittedMahasiswaIds = $materi2->tugasKelompoks->flatMap(function ($tugasKelompok) {
            return $tugasKelompok->pengumpulanTugas->flatMap(function ($pengumpulanTugas) {
                return $pengumpulanTugas->pengumpulanTugasDetails->pluck('mahasiswa_id');
            });
        })->toArray();

        $mahasiswas = KelasMahasiswa::with('mahasiswa')
            ->where('kelas_id', $kelas->id) // Where kelas_id sama dengan id kelas saat ini
            ->whereNotIn('mahasiswa_id', $submittedMahasiswaIds) // Kecualikan mahasiswa yang sudah submit tugas
            ->get();

        activity()
            ->causedBy(Auth::user()->id)
            ->performedOn($kelas)
            ->event('mengakses')
            ->withProperties(['url' => $request->fullUrl(), 'properties'   =>  'materi : ' . $materi])
            ->log(Auth::user()->nama_user . ' mengakses halaman tugas kelompok materi.');

        return view('mahasiswa/kelas_saya.tugas_kelompok', compact('kelas', 'materi', 'mahasiswas', 'soals'));
    }

    public function uploadTugasKelompok(Request $request, Kelas $kelas, Materi $materi, TugasKelompokMateri $tugasKelompok)
    {
        // Validasi file
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx|max:1024', // Maksimal ukuran 1MB dan jenis file
        ]);

        // Format nama path
        $kelasNama = str_replace(' ', '_', strtolower($kelas->nama_kelas));
        $materiNama = str_replace(' ', '_', strtolower($materi->nama_materi));
        $path = 'mahasiswa/pengumpulan_tugas_kelompok/' . $kelasNama . '/' . $materiNama;

        // Simpan file ke storage
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs($path, $filename, 'public');

            // Mendapatkan nomor kelompok berikutnya
            $kelompok = PengumpulanTugasKelompok::max('kelompok');
            $kelompok = $kelompok ? $kelompok + 1 : 1;

            // Simpan informasi ke database
            $pengumpulanTugasKelompok = PengumpulanTugasKelompok::create([
                'tugas_kelompok_id' => $tugasKelompok->id,
                'ketua_kelompok_id' => Auth::user()->id,
                'file_tugas' => $filePath,
                'kelompok' => $kelompok,
            ]);

            $data = PengumpulanTugasKelompokDetail::create([
                'pengumpulan_tugas_kelompok_id' => $pengumpulanTugasKelompok->id,
                'mahasiswa_id'   =>  Auth::user()->id,
                'status_anggota'    =>  'ketua',
                'kelompok'  =>  $kelompok,
            ]);

            activity()
                ->causedBy(Auth::user()->id)
                ->performedOn($kelas)
                ->event('menyimpan')
                ->withProperties(['url' => $request->fullUrl(), 'properties'   =>  'data : ' . $data])
                ->log(Auth::user()->nama_user . ' mengumpulkan file tugas kelompok .');

            session()->flash('success', 'File berhasil diupload!');
            return redirect()->route('mahasiswa.kelas_saya.tugas_kelompok', [$kelas->id, $materi->id, $tugasKelompok->id]);
        }

        session()->flash('error', 'File gagal diupload!');
        return redirect()->route('mahasiswa.kelas_saya.tugas_kelompok', [$kelas->id, $materi->id, $tugasKelompok->id]);
    }

    public function hapusFileTugasKelompok(Request $request, Kelas $kelas, Materi $materi, TugasKelompokMateri $tugasKelompok)
    {
        $fileRecord = PengumpulanTugasKelompok::with(['pengumpulanTugasDetails'])->where('tugas_kelompok_id', $tugasKelompok->id)
            ->where('ketua_kelompok_id', Auth::user()->id)
            ->first();

        if ($fileRecord) {
            Storage::disk('public')->delete($fileRecord->file_tugas);

            foreach ($fileRecord->pengumpulanTugasDetails as $detail) {
                $detail->delete();
            }

            activity()
                ->causedBy(Auth::user()->id)
                ->performedOn($kelas)
                ->event('menghapus')
                ->withProperties(['url' => $request->fullUrl(), 'properties'   =>  'data : ' . $fileRecord])
                ->log(Auth::user()->nama_user . ' menghapus file tugas kelompok .');

            $fileRecord->delete();

            session()->flash('success', 'File berhasil dihapus!');
            return redirect()->route('mahasiswa.kelas_saya.tugas_kelompok', [$kelas->id, $materi->id, $tugasKelompok->id]);
        }

        session()->flash('error', 'File tidak ditemukan!');
        return redirect()->route('mahasiswa.kelas_saya.tugas_kelompok', [$kelas->id, $materi->id, $tugasKelompok->id]);
    }

    public function simpanAnggota(Request $request, Kelas $kelas, Materi $materi, TugasKelompokMateri $tugasKelompok)
    {
        $validator = Validator::make($request->all(), [
            'anggota_id' => 'required|array|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        if (!empty($invalidStudents)) {
            return response()->json([
                'success' => false,
                'message' => 'Beberapa mahasiswa tidak terdaftar dalam kelas ini.',
                'invalid_students' => $invalidStudents
            ], 422);
        }

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        foreach ($request->anggota_id as $anggotaId) {
            $exists = DB::table('pengumpulan_tugas_kelompok_details')
                ->join('pengumpulan_tugas_kelompoks', 'pengumpulan_tugas_kelompok_details.pengumpulan_tugas_kelompok_id', 'pengumpulan_tugas_kelompoks.id')
                ->where('tugas_kelompok_id', $tugasKelompok->id)
                ->where('mahasiswa_id', $anggotaId)
                ->exists();
            if ($exists) {
                return response()->json([
                    'success' => false,
                    'message' => "Mahasiswa dengan ID $anggotaId sudah terdaftar dalam kelompok lain untuk tugas $tugasKelompok->id."
                ], 400);
            }
        }

        try {
            // Simpan anggota ke kelompok

            $pengumpulanTugas = PengumpulanTugasKelompok::where('tugas_kelompok_id', $tugasKelompok->id)
                ->where('ketua_kelompok_id', Auth::user()->id)->first();

            foreach ($request->anggota_id as $anggotaId) {
                PengumpulanTugasKelompokDetail::create([
                    'pengumpulan_tugas_kelompok_id' => $pengumpulanTugas->id,
                    'mahasiswa_id' => $anggotaId,
                    'status_anggota' => 'anggota',
                    'kelompok' => $pengumpulanTugas->kelompok,
                ]);

                activity()
                    ->causedBy(Auth::user()->id)
                    ->performedOn($kelas)
                    ->event('menyimpan')
                    ->withProperties(['url' => $request->fullUrl(), 'properties'   =>  'anggota_id : ' . $anggotaId])
                    ->log(Auth::user()->nama_user . ' menambahkan anggota kelompok .');
            }

            return response()->json([
                'success' => true,
                'message' => 'Anggota kelompok berhasil ditambahkan'
            ], 200);
        } catch (\Exception $e) {
            Log::error('Error in simpanAnggota: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }

    public function hapusAnggota(Request $request, Kelas $kelas, Materi $materi, TugasKelompokMateri $tugasKelompok, User $anggota, PengumpulanTugasKelompokDetail $pengumpulanTugasDetail)
    {
        activity()
            ->causedBy(Auth::user()->id)
            ->performedOn($kelas)
            ->event('menghapus')
            ->withProperties(['url' => $request->fullUrl(), 'properties'   =>  'anggota_id : ' . $anggota->id])
            ->log(Auth::user()->nama_user . ' menghapu anggota kelompok .');

        $deleted = PengumpulanTugasKelompokDetail::join('pengumpulan_tugas_kelompoks', 'pengumpulan_tugas_kelompoks.id', 'pengumpulan_tugas_kelompok_details.pengumpulan_tugas_kelompok_id')
            ->where('pengumpulan_tugas_kelompok_id', $pengumpulanTugasDetail->pengumpulan_tugas_kelompok_id)
            ->where('mahasiswa_id', $anggota->id)
            ->delete();

        if ($deleted) {
            return response()->json([
                'success' => true,
                'message' => 'Anggota kelompok berhasil dihapus.'
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Anggota tidak ditemukan dalam kelompok ini.'
            ], 404);
        }
    }

    public function simpanPenilaian(Request $request, Kelas $kelas, Materi $materi, TugasKelompokMateri $tugasKelompok)
    {
        try {
            // Ambil semua soal terkait kelas
            $soals = KelasKuisionerKelompok::with('bankPenilaianKelompok')
                ->where('kelas_id', $kelas->id)
                ->get();

            // Membuat array dinamis untuk validasi
            $rules = [
                'tugas_id' => 'required|exists:tugas_kelompok_materis,id',
                'mahasiswa_id' => 'required|exists:users,id',
                'pengalaman' => 'required',
                'jumlah_pertanyaan' => 'required|integer',
                'kelompok' => 'required',
            ];

            // Membuat array untuk pesan error dinamis
            $customMessages = [];

            // Tambahkan validasi dan pesan error untuk setiap soal
            foreach ($soals as $index => $soal) {
                // Validasi required untuk setiap soal
                $rules['nilai_' . $soal->bankPenilaianKelompok->id] = 'required';

                // Buat pesan error yang spesifik untuk setiap soal
                $customMessages['nilai_' . $soal->bankPenilaianKelompok->id . '.required'] = 'Soal nomor ' . ($index + 1) . ' harus diisi.';
            }

            // Validasi request berdasarkan aturan dan custom messages
            $validated = $request->validate($rules, $customMessages);

            $skor = array();
            $skor_detail = array();

            $detail = array();

            $skor_detail = collect($soals)->map(function ($pertanyaan) use ($request) {
                return [
                    'bank_penilaian_kelompok_id' => $pertanyaan->bankPenilaianKelompok->id,
                    'nilai' => $request->input('nilai_' . $pertanyaan->bankPenilaianKelompok->id),
                ];
            });

            $total_skor = $skor_detail->sum('nilai');
            $rata_rata = $total_skor / $request->jumlah_pertanyaan;

            $penilaianKelompok = PenilaianKelompok::create([
                'topik_pembahasan_kelas_id'  => $materi->topik_pembahasan_id,
                'penilai_id'                 => Auth::user()->id,
                'mahasiswa_id'               => $request->mahasiswa_id,
                'pengalaman'                 => $request->pengalaman,
                'kelompok'                   => $request->kelompok,
                'total_skor'                 => $total_skor,
                'rata_rata'                  => $rata_rata,
            ]);

            activity()
                ->causedBy(Auth::user()->id)
                ->performedOn($kelas)
                ->event('menyimpan')
                ->withProperties(['url' => $request->fullUrl(), 'properties'   =>  'data : ' . $penilaianKelompok])
                ->log(Auth::user()->nama_user . ' menyimpan penilaian anggota kelompok.');

            $detail = $skor_detail->map(function ($item) use ($penilaianKelompok) {
                return [
                    'penilaian_kelompok_id' => $penilaianKelompok->id,
                    'bank_penilaian_kelompok_id' => $item['bank_penilaian_kelompok_id'],
                    'nilai' => $item['nilai'],
                ];
            })->toArray();

            $data = PenilaianKelompokDetail::insert($detail);

            activity()
                ->causedBy(Auth::user()->id)
                ->performedOn($kelas)
                ->event('menyimpan')
                ->withProperties(['url' => $request->fullUrl(), 'properties'   =>  'data : ' . $data])
                ->log(Auth::user()->nama_user . ' menyimpan penilaian anggota kelompok detail.');

            return response()->json([
                'success' => true,
                'rata_rata' => $rata_rata,
                'message' => 'Penilaian berhasil disimpan!'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'errors' => $e->errors(),
            ], 422); // Mengirim error validasi dengan status 422
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Terjadi kesalahan saat menyimpan penilaian: ' . $e->getMessage(), // Ambil pesan exception
            ], 500);
        }
    }

    public function tugasIndividu(Request $request, Kelas $kelas, Materi $materi)
    {
        $materi = Materi::with([
            'tugasIndividus.pengumpulanTugasIndividus' => function ($query) {
                $query->whereHas('pengumpulanTugasIndividuDetails', function ($query) {
                    $query->where('mahasiswa_id', Auth::user()->id);
                });
            },
            'tugasIndividus.pengumpulanTugasIndividus.pengumpulanTugasIndividuDetails.mahasiswa'
        ])
            ->where('id', $materi->id)
            ->whereHas('topikPembahasanKelas.kelas', function ($query) use ($kelas) {
                $query->where('id', $kelas->id);
            })
            ->first();

        activity()
            ->causedBy(Auth::user()->id)
            ->performedOn($kelas)
            ->event('mengakses')
            ->withProperties(['url' => $request->fullUrl(), 'properties'   =>  'materi : ' . $materi])
            ->log(Auth::user()->nama_user . ' mengakses halaman tugas individu materi.');

        return view('mahasiswa/kelas_saya.tugas_individu.index', compact('kelas', 'materi'));
    }

    public function uploadTugasIndividu(Request $request, Kelas $kelas, Materi $materi, TugasIndividuMateri $tugasIndividu)
    {
        // Validasi file
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx|max:1024', // Maksimal ukuran 1MB dan jenis file
        ]);

        // Format nama path
        $kelasNama = str_replace(' ', '_', strtolower($kelas->nama_kelas));
        $materiNama = str_replace(' ', '_', strtolower($materi->nama_materi));
        $path = 'mahasiswa/pengumpulan_tugas_individu/' . $kelasNama . '/' . $materiNama;

        // Simpan file ke storage
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs($path, $filename, 'public');

            // Simpan informasi ke database
            $pengumpulanTugasIndividu = PengumpulanTugasIndividu::create([
                'tugas_individu_id' => $tugasIndividu->id,
                'mahasiswa_id' => Auth::user()->id,
                'file_tugas' => $filePath,
            ]);

            activity()
                ->causedBy(Auth::user()->id)
                ->performedOn($kelas)
                ->event('menyimpan')
                ->withProperties(['url' => $request->fullUrl(), 'properties'   =>  'data : ' . $pengumpulanTugasIndividu])
                ->log(Auth::user()->nama_user . ' mengupload file tugas individu materi.');

            session()->flash('success', 'File berhasil diupload!');
            return redirect()->route('mahasiswa.kelas_saya.tugas_individu', [$kelas->id, $materi->id, $tugasIndividu->id]);
        }

        session()->flash('error', 'File gagal diupload!');
        return redirect()->route('mahasiswa.kelas_saya.tugas_individu', [$kelas->id, $materi->id, $tugasIndividu->id]);
    }

    public function hapusFileTugasIndividu(Request $request, Kelas $kelas, Materi $materi, TugasIndividuMateri $tugasIndividu)
    {
        $fileRecord = PengumpulanTugasIndividu::where('tugas_individu_id', $tugasIndividu->id)
            ->where('mahasiswa_id', Auth::user()->id)
            ->first();

        activity()
            ->causedBy(Auth::user()->id)
            ->performedOn($kelas)
            ->event('menghapus')
            ->withProperties(['url' => $request->fullUrl(), 'properties'   =>  'data : ' . $fileRecord])
            ->log(Auth::user()->nama_user . ' menghapu file tugas individu materi.');
        if ($fileRecord) {
            Storage::disk('public')->delete($fileRecord->file_tugas);

            $fileRecord->delete();

            session()->flash('success', 'File berhasil dihapus!');
            return redirect()->route('mahasiswa.kelas_saya.tugas_individu', [$kelas->id, $materi->id, $tugasIndividu->id]);
        }

        session()->flash('error', 'File tidak ditemukan!');
        return redirect()->route('mahasiswa.kelas_saya.tugas_individu', [$kelas->id, $materi->id, $tugasIndividu->id]);
    }

    public function materiPengayaan(Request $request, Kelas $kelas, Materi $materi)
    {
        $pengayaans = MateriPengayaan::where('materi_id', $materi->id)->get();
        activity()
            ->causedBy(Auth::user()->id)
            ->performedOn($kelas)
            ->event('mengakses')
            ->withProperties(['url' => $request->fullUrl(), 'properties'   =>  'data : ' . $pengayaans])
            ->log(Auth::user()->nama_user . ' mengakses materi pengayaan.');
        return view('mahasiswa.kelas_saya.materi_pengayaan.index', compact('kelas', 'materi', 'pengayaans'));
    }

    public function forumDiskusi(Request $request, Kelas $kelas, Materi $materi)
    {
        $diskusis = Diskusi::with(['mahasiswa', 'diskusiRespons.responden'])->withCount(['diskusiRespons'])->where('materi_id', $materi->id)->orderBy('created_at', 'desc')->get();
        // Tambahkan flag "canDelete" pada setiap responden
        $diskusis->each(function ($diskusi) {
            $diskusi->diskusiRespons->each(function ($respon) {
                // Jika responden adalah user yang sedang login, set "canDelete" menjadi true
                if ($respon->responden->id == Auth::id()) {
                    $respon->canDelete = true;
                } else {
                    $respon->canDelete = false;
                }
            });
        });

        activity()
            ->causedBy(Auth::user()->id)
            ->performedOn($kelas)
            ->event('mengakses')
            ->withProperties(['url' => $request->fullUrl(), 'properties'   =>  'materi : ' . $materi])
            ->log(Auth::user()->nama_user . ' mengakses halaman diskusi.');

        return view('mahasiswa.kelas_saya.forum_diskusi.index', compact('kelas', 'materi', 'diskusis'));
    }

    public function forumDiskusiPost(Request $request, Kelas $kelas, Materi $materi)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:255',
            'diskusi' => 'required|string',
        ], [
            'judul.required' => 'Judul diskusi harus diisi.',
            'judul.max' => 'Judul diskusi maksimal 255 karakter.',
            'diskusi.required' => 'Konten diskusi harus diisi.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Buat diskusi baru
            $diskusi = new Diskusi();
            $diskusi->materi_id = $materi->id;
            $diskusi->mahasiswa_id = Auth::user()->id;
            $diskusi->judul = $request->judul;
            $diskusi->diskusi = $request->diskusi;
            $diskusi->save();

            activity()
                ->causedBy(Auth::user()->id)
                ->performedOn($kelas)
                ->event('menyimpan')
                ->withProperties(['url' => $request->fullUrl(), 'properties'   =>  'data : ' . $diskusi])
                ->log(Auth::user()->nama_user . ' membuat diskusi baru .');

            return response()->json([
                'success' => true,
                'message' => 'Diskusi berhasil dikirim!',
                'data' => $diskusi
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menyimpan diskusi.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function forumDiskusiBalas(Request $request, Kelas $kelas, Materi $materi, Diskusi $diskusi)
    {
        $validator = Validator::make($request->all(), [
            'respon' => 'required|string',
        ], [
            'respon.required' => 'Balasan harus diisi.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 422);
        }
        try {
            $maxKomentarId = DiskusiRespon::max('komentar_id');
            $diskusiId = $diskusi->id;
            $diskusi = new DiskusiRespon();
            $diskusi->komentar_id = $maxKomentarId ? $maxKomentarId + 1 : 1;
            $diskusi->diskusi_id = $diskusiId;
            $diskusi->mahasiswa_id = Auth::user()->id;
            $diskusi->subjek = $request->subjek;
            $diskusi->pesan = $request->respon;
            $diskusi->tanggal_dinilai = now();
            $diskusi->save();

            activity()
                ->causedBy(Auth::user()->id)
                ->performedOn($kelas)
                ->event('menyimpan')
                ->withProperties(['url' => $request->fullUrl(), 'properties'   =>  'data : ' . $diskusi])
                ->log(Auth::user()->nama_user . ' memberi komentar pada diskusi .');

            return response()->json([
                'success' => true,
                'message' => 'Balasan berhasil dikirim!',
                'data' => $diskusi
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menyimpan balasan.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function forumDiskusiUpdate(Request $request, Kelas $kelas, $materiId, $responId)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'pesan' => 'required|string|max:5000',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422); // Status kode 422 untuk kesalahan validasi
        }

        // Cari respon berdasarkan respon ID
        $respon = DiskusiRespon::find($responId);

        // Jika respon tidak ditemukan
        if (!$respon) {
            return response()->json([
                'success' => false,
                'message' => 'Respon tidak ditemukan.'
            ], 404); // Status kode 404 untuk tidak ditemukan
        }

        // Proses update respon
        $respon->pesan = $request->pesan;
        $respon->save();

        activity()
            ->causedBy(Auth::user()->id)
            ->performedOn($kelas)
            ->event('menyimpan')
            ->withProperties(['url' => $request->fullUrl(), 'properties'   =>  'data : ' . $respon])
            ->log(Auth::user()->nama_user . ' mengedit komentar pada diskusi .');

        // Jika berhasil
        return response()->json([
            'success' => true,
            'message' => 'Respon berhasil diupdate.'
        ]);
    }

    public function postTest(Request $request, Kelas $kelas, Materi $materi)
    {
        $cekTugasKelompok = PengumpulanTugasKelompokDetail::with(['pengumpulanTugasKelompok.tugasKelompok.materi'])
            ->where('mahasiswa_id', Auth::user()->id)
            ->whereHas('pengumpulanTugasKelompok.tugasKelompok.materi', function ($query) use ($materi) {
                $query->where('topik_pembahasan_id', function ($subQuery) use ($materi) {
                    // Mengambil topik_pembahasan_id dari Materi
                    $subQuery->select('topik_pembahasan_id')
                        ->from('materis')
                        ->where('id', $materi->id)
                        ->limit(1); // Ambil satu record, walaupun ini opsional karena where('id', $materi->id) akan selalu mengembalikan satu record
                });
            })
            ->count();
        $cekTugasIndividu = PengumpulanTugasIndividu::with(['tugasIndividu'])
            ->where('mahasiswa_id', Auth::user()->id)
            ->whereHas('tugasIndividu', function ($query) use ($materi) {
                $query->where('materi_id', $materi->id);
            })
            ->count();

        $cekDiskusi = DiskusiRespon::with(['diskusi.materi'])
            ->where('mahasiswa_id', Auth::user()->id)
            ->whereHas('diskusi.materi', function ($query) use ($materi) {
                $query->where('topik_pembahasan_id', $materi->topik_pembahasan_id);
            })
            ->count();

        $alertDiskusi = $cekDiskusi == 0;
        $alertTugasKelompok = $cekTugasKelompok == 0;
        $alertTugasIndividu = $cekTugasIndividu == 0;

        $alertKuis = false;
        $isSelesai = false;
        $soalKuis = null;
        $kuisPostTest = null;

        if (!$alertDiskusi && !$alertTugasIndividu && !$alertTugasKelompok) {
            $kuisPostTest = KuisMateri::where('materi_id', $materi->id)->where('jenis_kuis', 'posttest')->first();
            if ($kuisPostTest) {
                $nilaiKuisPostTest = NilaiKuisMateri::where('mahasiswa_id', Auth::user()->id)
                    ->where('kuis_materi_id', $kuisPostTest->id)
                    ->first();

                $isSelesai = $nilaiKuisPostTest != null;

                $soalKuis = PertanyaanKuisMateri::with(['bankSoalPembahasan.jawabans'])
                    ->where('kuis_materi_id', $kuisPostTest->id)
                    ->get();
            } else {
                $alertKuis = true;
            }
        }

        $topikKe = TopikPembahasanKelas::where('id', $materi->topik_pembahasan_id)->pluck('topik_ke')->first();

        $isLast = ($topikKe < $kelas->jumlah_topik) ? false : true;

        $isCreated = RiwayatFuzzy::where('mahasiswa_id', Auth::user()->id)
            ->where('materi_id_sebelumnya', $materi->id)
            ->first();
        $isEnrolled = KelasMahasiswa::with(['details' => function ($query) use ($materi) {
            $query->where('materi_id', $materi->id); // Hanya ambil details yang sesuai dengan materi_id dari $topikBaru
        }])
            ->where('mahasiswa_id', Auth::user()->id)
            ->where('kelas_id', $kelas->id)
            ->whereHas('details', function ($query) use ($materi) {
                $query->where('materi_id', $materi->id);
            })
            ->get();
        $isGenerated = false;
        if (!$isCreated && !$isEnrolled) {
            $isGenerated == false;
        } else {
            $isGenerated == true;
        }

        activity()
            ->causedBy(Auth::user()->id)
            ->performedOn($kelas)
            ->event('mengakses')
            ->withProperties(['url' => $request->fullUrl(), 'properties'   =>  'materi : ' . $materi])
            ->log(Auth::user()->nama_user . ' mengakses halaman post test.');

        return view('mahasiswa/kelas_saya/post_test.index', compact(
            'kelas',
            'materi',
            'alertDiskusi',
            'alertTugasKelompok',
            'alertTugasIndividu',
            'alertKuis',
            'isSelesai',
            'soalKuis',
            'kuisPostTest',
            'isLast',
            'isGenerated',
        ));
    }

    public function simpanKuisPosttest(Request $request, Kelas $kelas, Materi $materi)
    {
        $postTest = KuisMateri::where('materi_id', $materi->id)
            ->where('jenis_kuis', 'postTest')
            ->first();
        $kuis = PertanyaanKuisMateri::with('bankSoalPembahasan.jawabans')
            ->where('kuis_materi_id', $postTest->id)
            ->get();

        $rules = [];
        $messages = [];

        foreach ($kuis as $index => $pertanyaanKuis) {
            $rules["jawaban_{$index}"] = 'required';
            $messages["jawaban_{$index}.required"] = "Pertanyaan nomor " . ($index + 1) . " harus dijawab.";
        }

        $validatedData = $request->validate($rules, $messages);
        $nilais = [];

        foreach ($kuis as $index => $pertanyaanKuis) {
            $kuis_id = $request->input("kuis_{$index}");
            $jawaban_id = $request->input("jawaban_{$index}");
            $alasan = $request->input("alasan_{$index}");

            $jawabanBenar = JawabanKuisMateri::where('bank_soal_pembahasan_id', $kuis_id)
                ->where('status_jawaban', true)
                ->first();

            $nilai = ($jawaban_id == $jawabanBenar->id) ? 1 : 0;

            $nilais[] = [
                'kuis_materi_id' => $postTest->id,
                'mahasiswa_id' => Auth::user()->id,
                'bank_soal_pembahasan_id' => $kuis_id,
                'jawaban_kuis_materi_id' => $jawaban_id,
                'alasan' => $alasan,
                'nilai' => $nilai,
                'created_at' => now(),  // Menambahkan created_at dengan waktu sekarang
                'updated_at' => now(),  // Menambahkan updated_at dengan waktu sekarang
            ];
        }

        // Simpan nilai ke database
        NilaiKuisMateri::insert($nilais);

        activity()
            ->causedBy(Auth::user()->id)
            ->performedOn($kelas)
            ->event('menyimpan')
            ->withProperties([
                'url' => $request->fullUrl(),
                'properties' => 'data : ' . json_encode($nilais) // Konversi array ke JSON
            ])
            ->log(Auth::user()->nama_user . ' menyimpan jawaban post test.');

        session()->flash('success', 'Jawaban post test berhasil disimpan!');
        return redirect()->route('mahasiswa.kelas_saya.post_test', [$kelas->id, $materi->id]);
    }

    public function generateFuzzy(Request $request, Kelas $kelas, Materi $materi)
    {
        try {
            $topikPembahasanId = $materi->topik_pembahasan_id; // Ambil topik_pembahasan_id dari materi

            $indikatorTertinggi = IndikatorPenilaian::max('skor_indikator');

            // Cek Tugas Individu
            // $cekTugasIndividu = PengumpulanTugasIndividu::with(['tugasIndividu'])
            //     ->where('mahasiswa_id', Auth::user()->id)
            //     ->whereHas('tugasIndividu', function ($query) use ($materi) {
            //         $query->where('materi_id', $materi->id);
            //     })
            //     ->value('rata_rata') ?? 0; // Berikan default 0 jika null
            // Cek Tugas Kelompok
            // $cekTugasKelompok = PengumpulanTugasKelompokDetail::with(['pengumpulanTugasKelompok.tugasKelompok.materi'])
            //     ->where('mahasiswa_id', Auth::user()->id)
            //     ->whereHas('pengumpulanTugasKelompok.tugasKelompok.materi', function ($query) use ($topikPembahasanId) {
            //         $query->where('topik_pembahasan_id', $topikPembahasanId);
            //     })
            //     ->value('rata_rata') ?? 0; // Berikan default 0 jika null

            // Cek Jumlah Komentar
            // $cekJumlahKomentar = DiskusiRespon::where('mahasiswa_id', Auth::user()->id)
            //     ->whereHas('diskusi.materi', function ($query) use ($topikPembahasanId) {
            //         $query->where('topik_pembahasan_id', $topikPembahasanId);
            //     })
            //     ->count();

            // Cek Nilai Komentar
            // $cekNilaiKomentar = DiskusiRespon::where('mahasiswa_id', Auth::user()->id)
            //     ->whereHas('diskusi.materi', function ($query) use ($topikPembahasanId) {
            //         $query->where('topik_pembahasan_id', $topikPembahasanId);
            //     })
            //     ->sum('nilai') ?? 0; // Berikan default 0 jika null

            // Menentukan skor dan kategori individu
            // $skorIndividu = 0;
            // $kategoriIndividu = 'Tidak Diketahui';

            // if ($cekTugasIndividu > 2.1 && $cekTugasIndividu <= 3) {
            //     $skorIndividu = 3;
            //     $kategoriIndividu = "Kreasi";
            // } elseif ($cekTugasIndividu >= 1.3 && $cekTugasIndividu <= 2.1) {
            //     $skorIndividu = 2;
            //     $kategoriIndividu = "Evaluasi";
            // } elseif ($cekTugasIndividu >= 0 && $cekTugasIndividu <= 1.29) {
            //     $skorIndividu = 1;
            //     $kategoriIndividu = "Analisis";
            // }

            // Menentukan skor dan kategori kelompok
            // $skorKelompok = 0;
            // $kategoriKelompok = 'Tidak Diketahui';

            // if ($cekTugasKelompok > 2.1 && $cekTugasKelompok <= 3) {
            //     $skorKelompok = 3;
            //     $kategoriKelompok = "Kreasi";
            // } elseif ($cekTugasKelompok >= 1.3 && $cekTugasKelompok <= 2.1) {
            //     $skorKelompok = 2;
            //     $kategoriKelompok = "Evaluasi";
            // } elseif ($cekTugasKelompok >= 0 && $cekTugasKelompok <= 1.29) {
            //     $skorKelompok = 1;
            //     $kategoriKelompok = "Analisis";
            // }



            // if ($cekTugasIndividu == 0) {
            //     $skorIndividu = $skorPostTest;
            // }

            // if ($cekTugasKelompok == 0) {
            //     $skorKelompok = $skorPostTest;
            // }

            // $cekNilaiKomentar; // Nilai komentar sudah dipastikan ada defaultnya 0
            // if ($cekNilaiKomentar == 0) {
            //     $skorDiskusi = $skorPostTest;
            //     if ($skorDiskusi == 1) {
            //         $kategoriDiskusi = "Resolusi";
            //     } elseif ($skorDiskusi == 1) {
            //         $kategoriDiskusi = "Integrasi";
            //     } elseif ($skorDiskusi == 3) {
            //         $kategoriDiskusi = "Eksplorasi";
            //     } elseif ($skorDiskusi == 4) {
            //         $kategoriDiskusi = "Resolusi";
            //     }
            // } else {
            //     $rataNilaiKomentar = $cekNilaiKomentar / $cekJumlahKomentar;

            //     if ($rataNilaiKomentar >= 3.1 && $rataNilaiKomentar <= 4) {
            //         $skorDiskusi = 4;
            //         $kategoriDiskusi = "Resolusi";
            //     } elseif ($rataNilaiKomentar >= 2.1 && $rataNilaiKomentar <= 3.09) {
            //         $skorDiskusi = 3;
            //         $kategoriDiskusi = "Eksplorasi";
            //     } elseif ($rataNilaiKomentar >= 1.1 && $rataNilaiKomentar <= 2.09) {
            //         $skorDiskusi = 2;
            //         $kategoriDiskusi = "Integrasi"; // Perbaikan nilai skor, seharusnya 2, bukan 3
            //     } elseif ($rataNilaiKomentar >= 0 && $rataNilaiKomentar <= 1.09) {
            //         $skorDiskusi = 1;
            //         $kategoriDiskusi = "Resolusi";
            //     }
            // }

            // return response()->json(array([
            //     'post'  =>  $skorPostTest,
            //     'individu'  =>  $skorIndividu,
            //     'kelompok'  =>  $skorKelompok,
            //     'diskusi'  =>  $skorDiskusi,
            // ]));

            // if ($skorPostTest == 1 && $skorIndividu == 1 && $skorKelompok == 1 && $skorDiskusi == 1) {
            //     $bk = 1;
            //     $kode_aturan = 1111;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 2 && $skorKelompok == 1 && $skorDiskusi == 2) {
            //     $bk = 1;
            //     $kode_aturan = 1212;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 3 && $skorKelompok == 3 && $skorDiskusi == 3) {
            //     $bk = 3;
            //     $kode_aturan = 1333;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 1 && $skorKelompok == 1 && $skorDiskusi == 1) {
            //     $bk = 1;
            //     $kode_aturan = 2111;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 2 && $skorKelompok == 2 && $skorDiskusi == 2) {
            //     $bk = 2;
            //     $kode_aturan = 2222;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 3 && $skorKelompok == 3 && $skorDiskusi == 3) {
            //     $bk = 3;
            //     $kode_aturan = 2333;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 1 && $skorKelompok == 1 && $skorDiskusi == 1) {
            //     $bk = 1;
            //     $kode_aturan = 3111;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 2 && $skorKelompok == 2 && $skorDiskusi == 2) {
            //     $bk = 2;
            //     $kode_aturan = 3222;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 3 && $skorKelompok == 1 && $skorDiskusi == 3) {
            //     $bk = 3;
            //     $kode_aturan = 3313;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 2 && $skorKelompok == 1 && $skorDiskusi == 1) {
            //     $bk = 1;
            //     $kode_aturan = 1211;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 3 && $skorKelompok == 2 && $skorDiskusi == 3) {
            //     $bk = 2;
            //     $kode_aturan = 1323;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 1 && $skorKelompok == 3 && $skorDiskusi == 3) {
            //     $bk = 2;
            //     $kode_aturan = 1133;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 2 && $skorKelompok == 2 && $skorDiskusi == 1) {
            //     $bk = 1;
            //     $kode_aturan = 1221;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 3 && $skorKelompok == 2 && $skorDiskusi == 2) {
            //     $bk = 2;
            //     $kode_aturan = 1322;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 1 && $skorKelompok == 2 && $skorDiskusi == 3) {
            //     $bk = 1;
            //     $kode_aturan = 1123;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 3 && $skorKelompok == 2 && $skorDiskusi == 1) {
            //     $bk = 1;
            //     $kode_aturan = 1321;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 2 && $skorKelompok == 3 && $skorDiskusi == 2) {
            //     $bk = 2;
            //     $kode_aturan = 1232;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 2 && $skorKelompok == 3 && $skorDiskusi == 3) {
            //     $bk = 2;
            //     $kode_aturan = 1233;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 3 && $skorKelompok == 3 && $skorDiskusi == 1) {
            //     $bk = 2;
            //     $kode_aturan = 1331;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 3 && $skorKelompok == 3 && $skorDiskusi == 1) {
            //     $bk = 2;
            //     $kode_aturan = 1331;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 2 && $skorKelompok == 2 && $skorDiskusi == 2) {
            //     $bk = 1;
            //     $kode_aturan = 1222;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 1 && $skorKelompok == 3 && $skorDiskusi == 1) {
            //     $bk = 1;
            //     $kode_aturan = 1131;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 3 && $skorKelompok == 3 && $skorDiskusi == 2) {
            //     $bk = 2;
            //     $kode_aturan = 1332;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 2 && $skorKelompok == 2 && $skorDiskusi == 3) {
            //     $bk = 2;
            //     $kode_aturan = 1223;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 1 && $skorKelompok == 1 && $skorDiskusi == 3) {
            //     $bk = 1;
            //     $kode_aturan = 2113;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 2 && $skorKelompok == 2 && $skorDiskusi == 3) {
            //     $bk = 2;
            //     $kode_aturan = 2223;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 1 && $skorKelompok == 3 && $skorDiskusi == 3) {
            //     $bk = 2;
            //     $kode_aturan = 2133;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 1 && $skorKelompok == 3 && $skorDiskusi == 2) {
            //     $bk = 2;
            //     $kode_aturan = 2132;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 3 && $skorKelompok == 2 && $skorDiskusi == 3) {
            //     $bk = 3;
            //     $kode_aturan = 2323;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 1 && $skorKelompok == 2 && $skorDiskusi == 2) {
            //     $bk = 1;
            //     $kode_aturan = 2122;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 2 && $skorKelompok == 3 && $skorDiskusi == 3) {
            //     $bk = 3;
            //     $kode_aturan = 2233;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 1 && $skorKelompok == 3 && $skorDiskusi == 1) {
            //     $bk = 2;
            //     $kode_aturan = 3131;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 1 && $skorKelompok == 1 && $skorDiskusi == 2) {
            //     $bk = 1;
            //     $kode_aturan = 2112;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 3 && $skorKelompok == 1 && $skorDiskusi == 2) {
            //     $bk = 2;
            //     $kode_aturan = 2312;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 3 && $skorKelompok == 1 && $skorDiskusi == 3) {
            //     $bk = 2;
            //     $kode_aturan = 2313;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 1 && $skorKelompok == 2 && $skorDiskusi == 3) {
            //     $bk = 2;
            //     $kode_aturan = 2123;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 3 && $skorKelompok == 1 && $skorDiskusi == 1) {
            //     $bk = 1;
            //     $kode_aturan = 2311;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 2 && $skorKelompok == 3 && $skorDiskusi == 1) {
            //     $bk = 2;
            //     $kode_aturan = 2231;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 3 && $skorKelompok == 3 && $skorDiskusi == 1) {
            //     $bk = 2;
            //     $kode_aturan = 2331;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 1 && $skorKelompok == 2 && $skorDiskusi == 1) {
            //     $bk = 1;
            //     $kode_aturan = 2121;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 2 && $skorKelompok == 3 && $skorDiskusi == 3) {
            //     $bk = 3;
            //     $kode_aturan = 3233;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 2 && $skorKelompok == 1 && $skorDiskusi == 2) {
            //     $bk = 1;
            //     $kode_aturan = 2212;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 1 && $skorKelompok == 3 && $skorDiskusi == 2) {
            //     $bk = 2;
            //     $kode_aturan = 3132;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 2 && $skorKelompok == 3 && $skorDiskusi == 1) {
            //     $bk = 2;
            //     $kode_aturan = 3231;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 3 && $skorKelompok == 3 && $skorDiskusi == 1) {
            //     $bk = 3;
            //     $kode_aturan = 3331;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 1 && $skorKelompok == 3 && $skorDiskusi == 1) {
            //     $bk = 1;
            //     $kode_aturan = 2131;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 2 && $skorKelompok == 1 && $skorDiskusi == 3) {
            //     $bk = 2;
            //     $kode_aturan = 3213;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 2 && $skorKelompok == 3 && $skorDiskusi == 2) {
            //     $bk = 3;
            //     $kode_aturan = 3232;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 3 && $skorKelompok == 2 && $skorDiskusi == 1) {
            //     $bk = 2;
            //     $kode_aturan = 3321;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 1 && $skorKelompok == 2 && $skorDiskusi == 1) {
            //     $bk = 1;
            //     $kode_aturan = 3121;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 1 && $skorKelompok == 1 && $skorDiskusi == 3) {
            //     $bk = 2;
            //     $kode_aturan = 3113;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 3 && $skorKelompok == 2 && $skorDiskusi == 2) {
            //     $bk = 3;
            //     $kode_aturan = 3322;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 3 && $skorKelompok == 2 && $skorDiskusi == 3) {
            //     $bk = 3;
            //     $kode_aturan = 3323;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 2 && $skorKelompok == 2 && $skorDiskusi == 1) {
            //     $bk = 2;
            //     $kode_aturan = 3221;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 2 && $skorKelompok == 1 && $skorDiskusi == 1) {
            //     $bk = 1;
            //     $kode_aturan = 3211;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 2 && $skorKelompok == 1 && $skorDiskusi == 2) {
            //     $bk = 2;
            //     $kode_aturan = 3212;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 3 && $skorKelompok == 1 && $skorDiskusi == 1) {
            //     $bk = 2;
            //     $kode_aturan = 3311;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 2 && $skorKelompok == 2 && $skorDiskusi == 3) {
            //     $bk = 3;
            //     $kode_aturan = 3223;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 3 && $skorKelompok == 1 && $skorDiskusi == 2) {
            //     $bk = 2;
            //     $kode_aturan = 3312;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 1 && $skorKelompok == 3 && $skorDiskusi == 3) {
            //     $bk = 3;
            //     $kode_aturan = 3133;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 3 && $skorKelompok == 2 && $skorDiskusi == 1) {
            //     $bk = 2;
            //     $kode_aturan = 2321;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 2 && $skorKelompok == 1 && $skorDiskusi == 3) {
            //     $bk = 1;
            //     $kode_aturan = 1213;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 1 && $skorKelompok == 2 && $skorDiskusi == 3) {
            //     $bk = 2;
            //     $kode_aturan = 3123;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 1 && $skorKelompok == 3 && $skorDiskusi == 2) {
            //     $bk = 1;
            //     $kode_aturan = 1132;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 1 && $skorKelompok == 2 && $skorDiskusi == 1) {
            //     $bk = 1;
            //     $kode_aturan = 1121;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 3 && $skorKelompok == 1 && $skorDiskusi == 1) {
            //     $bk = 1;
            //     $kode_aturan = 1311;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 2 && $skorKelompok == 1 && $skorDiskusi == 3) {
            //     $bk = 2;
            //     $kode_aturan = 2213;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 1 && $skorKelompok == 1 && $skorDiskusi == 2) {
            //     $bk = 1;
            //     $kode_aturan = 3112;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 2 && $skorKelompok == 2 && $skorDiskusi == 1) {
            //     $bk = 1;
            //     $kode_aturan = 2221;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 1 && $skorKelompok == 1 && $skorDiskusi == 2) {
            //     $bk = 1;
            //     $kode_aturan = 1112;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 1 && $skorKelompok == 2 && $skorDiskusi == 2) {
            //     $bk = 2;
            //     $kode_aturan = 3122;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 3 && $skorKelompok == 3 && $skorDiskusi == 3) {
            //     $bk = 3;
            //     $kode_aturan = 3333;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 3 && $skorKelompok == 3 && $skorDiskusi == 2) {
            //     $bk = 3;
            //     $kode_aturan = 2332;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 3 && $skorKelompok == 2 && $skorDiskusi == 2) {
            //     $bk = 2;
            //     $kode_aturan = 2322;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 3 && $skorKelompok == 1 && $skorDiskusi == 3) {
            //     $bk = 2;
            //     $kode_aturan = 1313;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 2 && $skorKelompok == 3 && $skorDiskusi == 1) {
            //     $bk = 1;
            //     $kode_aturan = 1231;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 3 && $skorKelompok == 1 && $skorDiskusi == 2) {
            //     $bk = 1;
            //     $kode_aturan = 1312;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 2 && $skorKelompok == 3 && $skorDiskusi == 2) {
            //     $bk = 2;
            //     $kode_aturan = 2232;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 1 && $skorKelompok == 1 && $skorDiskusi == 3) {
            //     $bk = 1;
            //     $kode_aturan = 1113;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 2 && $skorKelompok == 1 && $skorDiskusi == 1) {
            //     $bk = 1;
            //     $kode_aturan = 2211;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 1 && $skorKelompok == 2 && $skorDiskusi == 2) {
            //     $bk = 1;
            //     $kode_aturan = 1122;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 3 && $skorKelompok == 3 && $skorDiskusi == 2) {
            //     $bk = 3;
            //     $kode_aturan = 3332;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 1 && $skorKelompok == 1 && $skorDiskusi == 4) {
            //     $bk = 1;
            //     $kode_aturan = 1114;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 2 && $skorKelompok == 3 && $skorDiskusi == 4) {
            //     $bk = 3;
            //     $kode_aturan = 1234;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 2 && $skorKelompok == 2 && $skorDiskusi == 4) {
            //     $bk = 2;
            //     $kode_aturan = 1224;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 3 && $skorKelompok == 3 && $skorDiskusi == 4) {
            //     $bk = 3;
            //     $kode_aturan = 1334;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 1 && $skorKelompok == 1 && $skorDiskusi == 4) {
            //     $bk = 2;
            //     $kode_aturan = 2114;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 1 && $skorKelompok == 1 && $skorDiskusi == 4) {
            //     $bk = 2;
            //     $kode_aturan = 3114;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 1 && $skorKelompok == 3 && $skorDiskusi == 4) {
            //     $bk = 3;
            //     $kode_aturan = 2134;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 1 && $skorKelompok == 2 && $skorDiskusi == 4) {
            //     $bk = 2;
            //     $kode_aturan = 2124;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 2 && $skorKelompok == 2 && $skorDiskusi == 4) {
            //     $bk = 3;
            //     $kode_aturan = 2224;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 3 && $skorKelompok == 2 && $skorDiskusi == 4) {
            //     $bk = 3;
            //     $kode_aturan = 2324;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 3 && $skorKelompok == 2 && $skorDiskusi == 4) {
            //     $bk = 3;
            //     $kode_aturan = 3324;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 1 && $skorKelompok == 3 && $skorDiskusi == 4) {
            //     $bk = 3;
            //     $kode_aturan = 3134;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 2 && $skorKelompok == 2 && $skorDiskusi == 4) {
            //     $bk = 3;
            //     $kode_aturan = 3224;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 3 && $skorKelompok == 3 && $skorDiskusi == 4) {
            //     $bk = 3;
            //     $kode_aturan = 3334;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 1 && $skorKelompok == 2 && $skorDiskusi == 4) {
            //     $bk = 3;
            //     $kode_aturan = 3124;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 2 && $skorKelompok == 3 && $skorDiskusi == 4) {
            //     $bk = 3;
            //     $kode_aturan = 3234;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 3 && $skorKelompok == 2 && $skorDiskusi == 4) {
            //     $bk = 3;
            //     $kode_aturan = 1324;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 3 && $skorKelompok == 1 && $skorDiskusi == 4) {
            //     $bk = 2;
            //     $kode_aturan = 1314;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 3 && $skorKelompok == 1 && $skorDiskusi == 4) {
            //     $bk = 3;
            //     $kode_aturan = 2314;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 3 && $skorKelompok == 3 && $skorDiskusi == 4) {
            //     $bk = 3;
            //     $kode_aturan = 2334;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 3 && $skorKelompok == 1 && $skorDiskusi == 4) {
            //     $bk = 3;
            //     $kode_aturan = 3314;
            // } elseif ($skorPostTest == 3 && $skorIndividu == 2 && $skorKelompok == 1 && $skorDiskusi == 4) {
            //     $bk = 3;
            //     $kode_aturan = 3214;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 1 && $skorKelompok == 2 && $skorDiskusi == 4) {
            //     $bk = 2;
            //     $kode_aturan = 1124;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 1 && $skorKelompok == 3 && $skorDiskusi == 4) {
            //     $bk = 2;
            //     $kode_aturan = 1134;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 2 && $skorKelompok == 3 && $skorDiskusi == 4) {
            //     $bk = 3;
            //     $kode_aturan = 2234;
            // } elseif ($skorPostTest == 2 && $skorIndividu == 2 && $skorKelompok == 1 && $skorDiskusi == 4) {
            //     $bk = 3;
            //     $kode_aturan = 2214;
            // } elseif ($skorPostTest == 1 && $skorIndividu == 2 && $skorKelompok == 1 && $skorDiskusi == 4) {
            //     $bk = 2;
            //     $kode_aturan = 1214;
            // }

            // Cek Post Test
            $cekPostTest = NilaiKuisMateri::with(['kuisMateri'])
                ->where('mahasiswa_id', Auth::user()->id)
                ->whereHas('kuisMateri', function ($query) use ($materi) {
                    $query->where('materi_id', $materi->id)
                        ->where('jenis_kuis', 'posttest');
                })
                ->sum('nilai'); // Nilai defaultnya akan 0 jika tidak ada

            // Menentukan skor dan kategori Post Test
            $skorPostTest = 0;
            $kategoriPostTest = 'Tidak Diketahui';

            if ($cekPostTest >= 8 && $cekPostTest <= 10) {
                $skorPostTest = 3;
                $bk = 3;
                $kategoriPostTest = "Tinggi";
            } elseif ($cekPostTest >= 4 && $cekPostTest <= 7) {
                $skorPostTest = 2;
                $bk = 2;
                $kategoriPostTest = "Sedang";
            } elseif ($cekPostTest >= 0 && $cekPostTest <= 3) {
                $skorPostTest = 1;
                $bk = 1;
                $kategoriPostTest = "Rendah";
            }

            if ($bk == 1) {
                $critical = '0';
                $status = "Dasar";
            } elseif ($bk == 2) {
                $critical = '1';
                $status = "Menengah";
            } else {
                $critical = '2';
                $status = "Lanjut";
            }

            $topikLama = Materi::with(['topikPembahasanKelas'])
                ->where('id', $materi->id)
                ->first();

            if ($topikLama && $topikLama->topikPembahasanKelas) {
                $urutan = $topikLama->topikPembahasanKelas->topik_ke + 1;
            } else {
                $urutan = 1; // Nilai default jika tidak ada topikPembahasanKelas
            }

            if ($kelas->jenis_kelas == "umum") {
                $topikBaru = Materi::with(['topikPembahasanKelas'])
                    ->whereHas('topikPembahasanKelas', function ($query) use ($urutan, $kelas) {
                        $query->where('topik_ke', $urutan)
                            ->where('kelas_id', $kelas->id);
                    })
                    ->first();
            } else {
                $topikBaru = Materi::with(['topikPembahasanKelas'])
                    ->whereHas('topikPembahasanKelas', function ($query) use ($urutan, $kelas) {
                        $query->where('topik_ke', $urutan)
                            ->where('kelas_id', $kelas->id);
                    })
                    ->where('critical_status', $critical)
                    ->first();
            }

            $kelasMahasiswa = KelasMahasiswa::where('kelas_id', $kelas->id)->where('mahasiswa_id', Auth::user()->id)->first();

            $isCreated = RiwayatFuzzy::where('mahasiswa_id', Auth::user()->id)
                ->where('materi_id_sebelumnya', $topikLama->id)
                ->where('materi_id_setelahnya', $topikBaru->id)
                ->first();

            $isEnrolled = KelasMahasiswa::with(['details' => function ($query) use ($topikBaru) {
                $query->where('materi_id', $topikBaru->id); // Hanya ambil details yang sesuai dengan materi_id dari $topikBaru
            }])
                ->where('mahasiswa_id', Auth::user()->id)
                ->where('kelas_id', $kelas->id)
                ->whereHas('details', function ($query) use ($topikBaru) {
                    $query->where('materi_id', $topikBaru->id);
                })
                ->first();
            if (!$isCreated && !$isEnrolled) {
                try {
                    DB::beginTransaction();

                    // Buat entri baru di RiwayatFuzzy
                    $riwayatFuzzy = RiwayatFuzzy::create([
                        'mahasiswa_id' => Auth::user()->id,
                        'materi_id_sebelumnya' => $topikLama->id,
                        'materi_id_setelahnya' => $topikBaru->id,
                        'skor_posttest' => $skorPostTest,
                        'skor_tugas_individu' => 0,
                        'skor_tugas_kelompok' => 0,
                        'skor_diskusi' => 0,
                        'skor_berfikir_kritis' => $bk,
                        'kode_aturan' => 1,
                    ]);

                    // Buat entri baru di KelasMahasiswaDetail
                    $kelasMahasiswaDetail = KelasMahasiswaDetail::create([
                        'kelas_mahasiswa_id' => $kelasMahasiswa ? $kelasMahasiswa->id : null,
                        'kelas_id' => $kelas->id,
                        'topik_id' => $topikBaru->topik_pembahasan_id,
                        'materi_id' => $topikBaru->id,
                        'critical_status' => $critical,
                        'sumber_materi' => 'fuzzy',
                    ]);

                    DB::commit();

                    activity()
                        ->causedBy(Auth::user()->id)
                        ->performedOn($kelas)
                        ->event('menyimpan')
                        ->withProperties(['url' => $request->fullUrl(), 'properties'   =>  'data : ' . $riwayatFuzzy])
                        ->log(Auth::user()->nama_user . ' generate fuzzy.');

                    // Jika sukses, kembalikan response JSON dengan URL redirect
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Fuzzy berhasil digenerate.',
                        'redirect' => route('mahasiswa.kelas_saya.detail_kelas', $kelas->id)
                    ]);
                } catch (\Exception $e) {
                    DB::rollBack();
                    Log::error('Fuzzy generation failed: ' . $e->getMessage());
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Terjadi kesalahan saat generate fuzzy. Silakan coba lagi.'
                    ], 500);
                }
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Sudah pernah generate fuzzy atau mahasiswa sudah terdaftar.'
                ], 400);
            }
        } catch (\Exception $e) {
            // Menangkap error dan mengembalikan respons JSON dengan status gagal
            return response()->json([
                'status' => 'error',
                'message' => 'Gagal generate fuzzy: ' . $e->getMessage()
            ], 500);
        }
    }
}
