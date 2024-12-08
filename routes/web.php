<?php

use App\Models\User;
use App\Models\Kelas;
use App\Models\Materi;
use Illuminate\Http\Request;
use App\Models\BankKuisioner;
use App\Models\JenisKuisioner;
use App\Models\RubrikPenilaian;
use App\Models\BankSoalPembahasan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UasController;
use App\Http\Controllers\UtsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCpmkController;
use App\Http\Controllers\PencarianController;
use App\Http\Controllers\KuisMateriController;
use App\Http\Controllers\MateriKelasController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\BankKuisionerController;
use App\Http\Controllers\JenisKuisionerController;
use App\Http\Controllers\KuisionerKelasController;
use App\Http\Controllers\MahasiswaKelasController;
use App\Http\Controllers\SoalKuisMateriController;
use App\Http\Controllers\MahasiswaProfilController;
use App\Http\Controllers\RubrikPenilaianController;
use App\Http\Controllers\BankCapaianLulusanController;
use App\Http\Controllers\BankSoalPembahasanController;
use App\Http\Controllers\IndikatorPenilaianController;
use App\Http\Controllers\MahasiswaKelasSayaController;
use App\Http\Controllers\CapaianLulusanKelasController;
use App\Http\Controllers\TugasIndividuMateriController;
use App\Http\Controllers\TugasKelompokMateriController;
use App\Http\Controllers\TopikPembahasanKelasController;
use App\Http\Controllers\BankPenilaianKelompokController;
use App\Http\Controllers\KuisionerKelompokKelasController;
use App\Http\Controllers\MahasiswaKelasTersediaController;
use App\Http\Controllers\PengumpulanTugasIndividuController;
use App\Http\Controllers\JawabanBankSoalPembahasanController;
use App\Http\Controllers\PengumpulanTugasKelompokController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/csrf-token', function () {
    return response()->json(['token' => csrf_token()]);
});

Route::get('/tes', function () {
    return view('mahasiswa/daftar_kelas');
})->name('daftar_kelas');

Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::post('/registration', [RegistrationController::class, 'registrationPost'])->name('registrationPost');
Route::get('/testing_duls', function () {
    return "OK DERR";
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth', 'isAdmin')->group(function () {
    Route::group(['prefix' => "/admin"], function () {
        Route::get('/dashboard', function (Request $request) {
            $jumlahMahasiswa = User::where('role', 'mahasiswa')->count();
            $jumlahKelas = Kelas::count();
            $jumlahBankSoal = BankSoalPembahasan::count();
            $jumlahMahasiswaAktif = User::where('role', 'mahasiswa')->count();
            $jumlahMateri = Materi::count();
            $jumlahRubrikPenilaian = RubrikPenilaian::count();
            $jumlahKuisioner = BankKuisioner::count();
            $jumlahJenisKuisioner = JenisKuisioner::count();

            activity()
                ->causedBy(Auth::user()->id)
                ->event('mengakses')
                ->withProperties(['url' => $request->fullUrl()])
                ->log(Auth::user()->nama_user . ' mengakses halaman dashboard admin');

            return view('administrator/dashboard', compact(
                'jumlahMahasiswa',
                'jumlahKelas',
                'jumlahBankSoal',
                'jumlahMahasiswaAktif',
                'jumlahMateri',
                'jumlahRubrikPenilaian',
                'jumlahKuisioner',
                'jumlahJenisKuisioner'
            ));
        })->middleware(['auth', 'verified'])->name('admin.dashboard');

        Route::group(['prefix'  => 'administrator'], function () {
            Route::get('/', [AdminController::class, 'indexAdministrator'])->name('administrator.administrator');
            Route::get('/add', [AdminController::class, 'addAdministrator'])->name('administrator.administrator.add');
            Route::post('/', [AdminController::class, 'postAdministrator'])->name('administrator.administrator.post');
            Route::get('{id}/edit', [AdminController::class, 'editAdministrator'])->name('administrator.administrator.edit');
            Route::patch('{id}/update', [AdminController::class, 'updateAdministrator'])->name('administrator.administrator.update');
            Route::delete('{id}/delete', [AdminController::class, 'deleteAdministrator'])->name('administrator.administrator.delete');
            Route::patch('/ubah_password', [AdminController::class, 'ubahPassword'])->name('administrator.ubah_password');
        });

        Route::group(['prefix'  => 'teacher'], function () {
            Route::get('/', [AdminController::class, 'indexTeacher'])->name('administrator.teacher');
            Route::get('/add', [AdminController::class, 'addTeacher'])->name('administrator.teacher.add');
            Route::post('/', [AdminController::class, 'postTeacher'])->name('administrator.teacher.post');
            Route::get('{id}/edit', [AdminController::class, 'editTeacher'])->name('administrator.teacher.edit');
            Route::patch('{id}/update', [AdminController::class, 'updateTeacher'])->name('administrator.teacher.update');
            Route::delete('{id}/delete', [AdminController::class, 'deleteTeacher'])->name('administrator.teacher.delete');
        });

        Route::group(['prefix'  => 'student'], function () {
            Route::get('/', [AdminController::class, 'indexStudent'])->name('administrator.student');
            Route::get('/add', [AdminController::class, 'addStudent'])->name('administrator.student.add');
            Route::post('/', [AdminController::class, 'postStudent'])->name('administrator.student.post');
            Route::get('{id}/edit', [AdminController::class, 'editStudent'])->name('administrator.student.edit');
            Route::patch('{id}/update', [AdminController::class, 'updateStudent'])->name('administrator.student.update');
            Route::delete('{id}/delete', [AdminController::class, 'deleteStudent'])->name('administrator.student.delete');
        });
    });
});

Route::middleware('auth', 'isMahasiswa')->group(function () {
    Route::get('/mahasiswa/dashboard', [MahasiswaProfilController::class, 'dashboard'])->name('mahasiswa.dashboard');
    Route::get('/mahasiswa/pengaturan_profil', [MahasiswaProfilController::class, 'pengaturanProfil'])->name('mahasiswa.dashboard.pengaturan_profil');
    Route::put('/mahasiswa/pengaturan_profil', [MahasiswaProfilController::class, 'pengaturanProfilUpdate'])->name('mahasiswa.dashboard.pengaturan_profil.update');
    Route::get('/mahasiswa/catatan_aktivitas', [MahasiswaProfilController::class, 'logAktivitas'])->name('mahasiswa.dashboard.aktivitas');

    Route::get('/mahasiswa/kelas', [MahasiswaKelasTersediaController::class, 'daftarKelas'])->name('mahasiswa.kelas');
    Route::get('/mahasiswa/kelas/{kelas}/detail', [MahasiswaKelasTersediaController::class, 'detailKelas'])->name('mahasiswa.kelas.detail_kelas');
    Route::get('/mahasiswa/kelas/{kelas}/ambil_kelas', [MahasiswaKelasTersediaController::class, 'ambilKelas'])->name('mahasiswa.kelas.ambil_kelas');
    Route::post('/mahasiswa/kelas/{kelas}/ambil_kelas', [MahasiswaKelasTersediaController::class, 'ambilKelasPost'])->name('mahasiswa.kelas.ambil_kelas_post');

    Route::group(['prefix'  => '/mahasiswa'], function () {
        Route::get('/kelas_saya', [MahasiswaKelasSayaController::class, 'daftarKelasSaya'])->name('mahasiswa.dashboard.kelas_saya');
        Route::get('/kelas_saya/{kelas}/detail', [MahasiswaKelasSayaController::class, 'detailKelas'])->name('mahasiswa.kelas_saya.detail_kelas');

        Route::get('/kelas_saya/{kelas}/uts', [MahasiswaKelasSayaController::class, 'utsKelas'])->name('mahasiswa.kelas_saya.uts');
        Route::post('/kelas_saya/{kelas}/uts', [MahasiswaKelasSayaController::class, 'utsKelasPost'])->name('mahasiswa.kelas_saya.uts_post');

        Route::get('/kelas_saya/{kelas}/uas', [MahasiswaKelasSayaController::class, 'uasKelas'])->name('mahasiswa.kelas_saya.uas');
        Route::post('/kelas_saya/{kelas}/uas', [MahasiswaKelasSayaController::class, 'uasKelasPost'])->name('mahasiswa.kelas_saya.uas_post');

        Route::get('/kelas_saya/{kelas}/detail_materi/{materi}', [MahasiswaKelasSayaController::class, 'detailMateri'])->name('mahasiswa.kelas_saya.detail_materi');

        Route::post('/kelas_saya/{kelas}/detail_materi/{materi}/simpan_kuis', [MahasiswaKelasSayaController::class, 'simpanKuis'])->name('mahasiswa.kelas_saya.simpan_kuis');

        Route::get('/kelas_saya/{kelas}/detail_materi/{materi}/tugas_kelompok', [MahasiswaKelasSayaController::class, 'tugasKelompok'])->name('mahasiswa.kelas_saya.tugas_kelompok');
        Route::post('/kelas_saya/{kelas}/detail_materi/{materi}/upload_tugas_kelompok/{tugasKelompok}', [MahasiswaKelasSayaController::class, 'uploadTugasKelompok'])->name('mahasiswa.kelas_saya.upload_tugas_kelompok');
        Route::delete('/kelas_saya/{kelas}/detail_materi/{materi}/hapus_file_tugas_kelompok/{tugasKelompok}', [MahasiswaKelasSayaController::class, 'hapusFileTugasKelompok'])->name('mahasiswa.kelas_saya.hapusFile_tugas_kelompok');
        Route::post('/kelas_saya/{kelas}/detail_materi/{materi}/tugas/{tugasKelompok}/anggota/simpan', [MahasiswaKelasSayaController::class, 'simpanAnggota'])->name('mahasiswa.kelas_saya.simpan_anggota');
        Route::delete('/kelas_saya/{kelas}/detail_materi/{materi}/tugas/{tugasKelompok}/anggota/{anggota}/hapus/', [MahasiswaKelasSayaController::class, 'hapusAnggota'])->name('mahasiswa.kelas_saya.hapus_anggota');
        // Route::delete('/kelas_saya/{kelas}/detail_materi/{materi}/tugas/{tugasKelompok}/anggota/{anggota}/pengumpulan_tugas_detail/{pengumpulanTugasDetail}/hapus', [MahasiswaKelasSayaController::class, 'hapusAnggota'])->name('mahasiswa.kelas_saya.hapus_anggota');
        Route::post('/kelas_saya/{kelas}/detail_materi/{materi}/tugas/{tugasKelompok}/anggota/penilaian', [MahasiswaKelasSayaController::class, 'simpanPenilaian'])->name('mahasiswa.kelas_saya.simpan_penilaian');

        Route::get('/kelas_saya/{kelas}/detail_materi/{materi}/tugas_individu', [MahasiswaKelasSayaController::class, 'tugasIndividu'])->name('mahasiswa.kelas_saya.tugas_individu');
        Route::post('/kelas_saya/{kelas}/detail_materi/{materi}/upload_tugas_individu/{tugasIndividu}', [MahasiswaKelasSayaController::class, 'uploadTugasIndividu'])->name('mahasiswa.kelas_saya.upload_tugas_individu');
        Route::delete('/kelas_saya/{kelas}/detail_materi/{materi}/hapus_file_tugas_individu/{tugasIndividu}', [MahasiswaKelasSayaController::class, 'hapusFileTugasIndividu'])->name('mahasiswa.kelas_saya.hapusFile_tugas_individu');

        Route::get('/kelas_saya/{kelas}/detail_materi/{materi}/materi_pengayaan', [MahasiswaKelasSayaController::class, 'materiPengayaan'])->name('mahasiswa.kelas_saya.materi_pengayaan');

        Route::get('/kelas_saya/{kelas}/detail_materi/{materi}/materi_pengayaan', [MahasiswaKelasSayaController::class, 'materiPengayaan'])->name('mahasiswa.kelas_saya.materi_pengayaan');

        Route::get('/kelas_saya/{kelas}/detail_materi/{materi}/forum_diskusi', [MahasiswaKelasSayaController::class, 'forumDiskusi'])->name('mahasiswa.kelas_saya.diskusi');
        Route::post('/kelas_saya/{kelas}/detail_materi/{materi}/forum_diskusi', [MahasiswaKelasSayaController::class, 'forumDiskusiPost'])->name('mahasiswa.kelas_saya.diskusi.post');
        Route::post('/kelas_saya/{kelas}/detail_materi/{materi}/forum_diskusi/{diskusi}/balas', [MahasiswaKelasSayaController::class, 'forumDiskusiBalas'])->name('mahasiswa.kelas_saya.diskusi.balas');
        Route::post('/kelas_saya/{kelas}/detail_materi/{materi}/forum_diskusi/{respon}/update', [MahasiswaKelasSayaController::class, 'forumDiskusiUpdate'])->name('mahasiswa.kelas_saya.diskusi.update');

        Route::get('/kelas_saya/{kelas}/detail_materi/{materi}/post_test', [MahasiswaKelasSayaController::class, 'postTest'])->name('mahasiswa.kelas_saya.post_test');
        Route::post('/kelas_saya/{kelas}/detail_materi/{materi}/simpan_kuis_posttest', [MahasiswaKelasSayaController::class, 'simpanKuisPosttest'])->name('mahasiswa.kelas_saya.simpan_kuis_posttest');

        Route::post('/kelas_saya/{kelas}/detail_materi/{materi}/generate_fuzzy', [MahasiswaKelasSayaController::class, 'generateFuzzy'])->name('mahasiswa.kelas_saya.generate_fuzzy');
    });
});

Route::middleware('auth', 'isDosen')->group(function () {
    // API
    Route::get("/bank_soal", function (Request $request) {
        $levelBerfikir = $request->query('level_berfikir');
        $kelasId = $request->query('kelasId');

        $soal = BankSoalPembahasan::when($levelBerfikir ?? false, function ($query, $levelBerfikir) {
            return $query->where('level_berfikir', $levelBerfikir);
        })->when($kelasId ?? false, function ($query, $kelasId) {
            return $query->where('kelas_id', $kelasId);
        })->get();

        return response()->json($soal);
    });

    Route::get('/bank_soal/{id}', function ($id) {
        $soal = BankSoalPembahasan::findOrFail($id);

        return response()->json($soal);
    });

    Route::get('/dashboard', function () {
        $jumlahMahasiswa = User::where('role', 'mahasiswa')->count();
        $jumlahKelas = Kelas::count();
        $jumlahBankSoal = BankSoalPembahasan::count();
        $jumlahMahasiswaAktif = User::where('role', 'mahasiswa')->count();
        $jumlahMateri = Materi::count();
        $jumlahRubrikPenilaian = RubrikPenilaian::count();
        $jumlahKuisioner = BankKuisioner::count();
        $jumlahJenisKuisioner = JenisKuisioner::count();

        return view('admin/dashboard', compact(
            'jumlahMahasiswa',
            'jumlahKelas',
            'jumlahBankSoal',
            'jumlahMahasiswaAktif',
            'jumlahMateri',
            'jumlahRubrikPenilaian',
            'jumlahKuisioner',
            'jumlahJenisKuisioner'
        ));
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::group(['prefix'  => 'pencarian'], function () {
        Route::get('/cari_capaian_lulusan_id', [PencarianController::class, 'cariCapaianLulusanId'])->name('cariCapaianLulusanId');
        Route::get('/getRubrikPenilaian', [TugasKelompokMateriController::class, 'getRubrikPenilaian'])->name('kelas.topikPembahasan.materi.tugasKelompok.getRubrikPenilaian');
        Route::get('/getRubrikPenilaianIndividu', [TugasIndividuMateriController::class, 'getRubrikPenilaian'])->name('kelas.topikPembahasan.materi.tugasIndividu.getRubrikPenilaian');
        Route::get('/cari_topik', [PencarianController::class, 'cariTopik'])->name('cariTopik');
        Route::get('/cari_materi', [PencarianController::class, 'cariMateri'])->name('cariMateri');
    });

    Route::group(['prefix'  => 'jenis_kuesioner'], function () {
        Route::get('', [JenisKuisionerController::class, 'index'])->name('jenisKuisioner');
        Route::post('/post', [JenisKuisionerController::class, 'post'])->name('jenisKuisioner.post');
        Route::get('/{jenisKuisioner}/edit', [JenisKuisionerController::class, 'edit'])->name('jenisKuisioner.edit');
        Route::patch('/{jenisKuisioner}/update', [JenisKuisionerController::class, 'update'])->name('jenisKuisioner.update');
        Route::delete('{jenisKuisioner}/delete', [JenisKuisionerController::class, 'delete'])->name('jenisKuisioner.delete');
    });

    Route::group(['prefix'  => 'bank_kuisioner'], function () {
        Route::get('', [BankKuisionerController::class, 'index'])->name('bankKuisioner');
        Route::post('/post', [BankKuisionerController::class, 'post'])->name('bankKuisioner.post');
        Route::get('{bankKuisioner}/edit', [BankKuisionerController::class, 'edit'])->name('bankKuisioner.edit');
        Route::patch('/{bankKuisioner}/update', [BankKuisionerController::class, 'update'])->name('bankKuisioner.update');
        Route::delete('{bankKuisioner}/delete', [BankKuisionerController::class, 'delete'])->name('bankKuisioner.delete');
    });

    Route::group(['prefix'  => 'bank_capaian_lulusan'], function () {
        Route::get('/', [BankCapaianLulusanController::class, 'index'])->name('bankCapaianLulusan');
        Route::get('/add', [BankCapaianLulusanController::class, 'add'])->name('bankCapaianLulusan.add');
        Route::post('/', [BankCapaianLulusanController::class, 'post'])->name('bankCapaianLulusan.post');
        Route::get('{bankCapaianLulusan}/edit', [BankCapaianLulusanController::class, 'edit'])->name('bankCapaianLulusan.edit');
        Route::patch('/{bankCapaianLulusan}/update', [BankCapaianLulusanController::class, 'update'])->name('bankCapaianLulusan.update');
        Route::delete('{bankCapaianLulusan}/delete', [BankCapaianLulusanController::class, 'delete'])->name('bankCapaianLulusan.delete');
    });

    // Bank Soal & Penilaian
    Route::group(['prefix'  => 'soal_kuis'], function () {
        Route::get('/', [BankSoalPembahasanController::class, 'index'])->name('soalKuis');
        Route::get('/{kelas}/detail', [BankSoalPembahasanController::class, 'detail'])->name('soalKuis.detail');
        Route::post('/{kelas}/post', [BankSoalPembahasanController::class, 'post'])->name('soalKuis.post');
        Route::get('/{soalKuis}/kelas/{kelas}/edit', [BankSoalPembahasanController::class, 'edit'])->name('soalKuis.edit');
        Route::patch('/{kelas}/update', [BankSoalPembahasanController::class, 'update'])->name('soalKuis.update');
        Route::delete('/{soalKuis}/kelas/{kelas}/delete', [BankSoalPembahasanController::class, 'delete'])->name('soalKuis.delete');

        Route::group(['prefix'  => '/kelas/{kelas}/jawaban'], function () {
            Route::get('/{soalKuis}/', [JawabanBankSoalPembahasanController::class, 'index'])->name('soalKuis.jawaban');
            Route::post('/{soalKuis}/post', [JawabanBankSoalPembahasanController::class, 'post'])->name('soalKuis.jawaban.post');
            Route::delete('/{soalKuis}/soalKuis/{jawaban}/delete', [JawabanBankSoalPembahasanController::class, 'delete'])->name('soalKuis.jawaban.delete');
        });
    });

    Route::group(['prefix'  => 'rubrik_penilaian'], function () {
        Route::get('', [RubrikPenilaianController::class, 'index'])->name('rubrikPenilaian');
        Route::post('/post', [RubrikPenilaianController::class, 'post'])->name('rubrikPenilaian.post');
        Route::get('{rubrikPenilaian}/edit', [RubrikPenilaianController::class, 'edit'])->name('rubrikPenilaian.edit');
        Route::patch('/update', [RubrikPenilaianController::class, 'update'])->name('rubrikPenilaian.update');
        Route::delete('{rubrikPenilaian}/delete', [RubrikPenilaianController::class, 'delete'])->name('rubrikPenilaian.delete');
    });

    Route::group(['prefix'  => 'indikator_penilaian'], function () {
        Route::get('', [IndikatorPenilaianController::class, 'index'])->name('indikatorPenilaian');
        Route::post('/post', [IndikatorPenilaianController::class, 'post'])->name('indikatorPenilaian.post');
        Route::get('{indikatorPenilaian}/edit', [IndikatorPenilaianController::class, 'edit'])->name('indikatorPenilaian.edit');
        Route::patch('/update', [IndikatorPenilaianController::class, 'update'])->name('indikatorPenilaian.update');
        Route::delete('{indikatorPenilaian}/delete', [IndikatorPenilaianController::class, 'delete'])->name('indikatorPenilaian.delete');
    });

    Route::group(['prefix'  => 'penilaian_kelompok'], function () {
        Route::get('', [BankPenilaianKelompokController::class, 'index'])->name('penilaianKelompok');
        Route::post('/post', [BankPenilaianKelompokController::class, 'post'])->name('penilaianKelompok.post');
        Route::get('{penilaianKelompok}/edit', [BankPenilaianKelompokController::class, 'edit'])->name('penilaianKelompok.edit');
        Route::patch('/update', [BankPenilaianKelompokController::class, 'update'])->name('penilaianKelompok.update');
        Route::delete('{penilaianKelompok}/delete', [BankPenilaianKelompokController::class, 'delete'])->name('penilaianKelompok.delete');
    });
    // End  Bank Soal & Penilaian

    Route::group(['prefix'  => 'manajemen_kelas'], function () {
        Route::get('/', [KelasController::class, 'index'])->name('kelas');
        Route::get('{kelas}/detail', [KelasController::class, 'detail'])->name('kelas.detail');
        Route::get('/create', [KelasController::class, 'create'])->name('kelas.create');
        Route::post('/', [KelasController::class, 'post'])->name('kelas.post');
        Route::get('/{kelas}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
        Route::patch('{kelas}/update', [KelasController::class, 'update'])->name('kelas.update');
        Route::delete('{kelas}/delete', [KelasController::class, 'delete'])->name('kelas.delete');
        Route::get('{kelas}/siswa_detail', [KelasController::class, 'siswaDetail'])->name('kelas.siswa_detail');
        Route::get('{userkelas}/riwayat_siswa', [KelasController::class, 'riwayatDetail'])->name('kelas.riwayat_siswa');
        Route::get('{studentkelas}/riwayat_pretest', [KelasController::class, 'pretestDetail'])->name('kelas.riwayat_pretest');

        Route::group(['prefix'  => '/{kelas}/topik_pembahasan_kelas'], function () {
            Route::get('/', [TopikPembahasanKelasController::class, 'index'])->name('kelas.topikPembahasan');
            Route::post('/', [TopikPembahasanKelasController::class, 'post'])->name('kelas.topikPembahasan.post');
            Route::get('/{topikPembahasan}/edit', [TopikPembahasanKelasController::class, 'edit'])->name('kelas.topikPembahasan.edit');
            Route::patch('/update', [TopikPembahasanKelasController::class, 'update'])->name('kelas.topikPembahasan.update');
            Route::delete('{topikPembahasan}/delete', [TopikPembahasanKelasController::class, 'delete'])->name('kelas.topikPembahasan.delete');

            Route::group(['prefix'  => '/{topikPembahasan}/sub_cpmk'], function () {
                Route::get('/', [SubCpmkController::class, 'index'])->name('kelas.topikPembahasan.subCpmk');
                Route::post('/', [SubCpmkController::class, 'post'])->name('kelas.topikPembahasan.subCpmk.post');
                Route::get('/{subCpmk}/edit', [SubCpmkController::class, 'edit'])->name('kelas.subCpmk.subCpmk.edit');
                Route::patch('/update', [SubCpmkController::class, 'update'])->name('kelas.topikPembahasan.subCpmk.update');
                Route::delete('{subCpmk}/delete', [SubCpmkController::class, 'delete'])->name('kelas.topikPembahasan.subCpmk.delete');
            });

            Route::group(['prefix'  => '/{topikPembahasan}/manajemen_materi'], function () {
                Route::get('/', [MateriKelasController::class, 'index'])->name('kelas.topikPembahasan.materi');
                Route::post('/', [MateriKelasController::class, 'post'])->name('kelas.topikPembahasan.materi.post');
                Route::get('/{materi}/edit', [MateriKelasController::class, 'edit'])->name('kelas.materi.materi.edit');
                Route::patch('/update', [MateriKelasController::class, 'update'])->name('kelas.topikPembahasan.materi.update');
                Route::delete('{materi}/delete', [MateriKelasController::class, 'delete'])->name('kelas.topikPembahasan.materi.delete');
                Route::get('{materi}/detail', [MateriKelasController::class, 'detail'])->name('kelas.topikPembahasan.materi.detail');

                Route::group(['prefix'  => '/{materi}/tugas_individu'], function () {
                    Route::get('/', [TugasIndividuMateriController::class, 'index'])->name('kelas.topikPembahasan.materi.tugasIndividu');
                    Route::post('/', [TugasIndividuMateriController::class, 'post'])->name('kelas.topikPembahasan.materi.tugasIndividu.post');
                    Route::get('/{tugasIndividu}/edit', [TugasIndividuMateriController::class, 'edit'])->name('kelas.materi.tugasIndividu.materi.tugasIndividu.edit');
                    Route::patch('/update', [TugasIndividuMateriController::class, 'update'])->name('kelas.topikPembahasan.materi.tugasIndividu.update');
                    Route::delete('{tugasIndividu}/delete', [TugasIndividuMateriController::class, 'delete'])->name('kelas.topikPembahasan.materi.tugasIndividu.delete');
                    Route::post('/tambah_rubrik_penilaian', [TugasIndividuMateriController::class, 'tambahRubrikPenilaian'])->name('kelas.topikPembahasan.materi.tugasIndividu.tambahRubrikPenilaian');

                    Route::group(['prefix' => '/{tugasIndividu}/penilaian'], function () {
                        Route::get('', [PengumpulanTugasIndividuController::class, 'index'])->name('kelas.topikPembahasan.materi.tugasIndividu.penilaian');
                        Route::get('/{pengumpulanTugasIndividu}', [PengumpulanTugasIndividuController::class, 'detail'])->name('kelas.topikPembahasan.materi.tugasIndividu.penilaian.detail');
                        Route::post('/{pengumpulanTugasIndividu}', [PengumpulanTugasIndividuController::class, 'post'])->name('kelas.topikPembahasan.materi.tugasIndividu.penilaian.post');
                        Route::get('/{pengumpulanTugasIndividu}/edit', [PengumpulanTugasIndividuController::class, 'edit'])->name('kelas.topikPembahasan.materi.tugasIndividu.penilaian.edit');
                        Route::patch('/{pengumpulanTugasIndividu}/update', [PengumpulanTugasIndividuController::class, 'update'])->name('kelas.topikPembahasan.materi.tugasIndividu.penilaian.update');
                    });
                });

                Route::group(['prefix'  => '/{materi}/tugas_kelompok'], function () {
                    Route::get('/', [TugasKelompokMateriController::class, 'index'])->name('kelas.topikPembahasan.materi.tugasKelompok');
                    Route::post('/', [TugasKelompokMateriController::class, 'post'])->name('kelas.topikPembahasan.materi.tugasKelompok.post');
                    Route::get('/{tugasKelompok}/edit', [TugasKelompokMateriController::class, 'edit'])->name('kelas.materi.tugasKelompok.materi.tugasKelompok.edit');
                    Route::patch('/update', [TugasKelompokMateriController::class, 'update'])->name('kelas.topikPembahasan.materi.tugasKelompok.update');
                    Route::delete('{tugasKelompok}/delete', [TugasKelompokMateriController::class, 'delete'])->name('kelas.topikPembahasan.materi.tugasKelompok.delete');
                    Route::post('/tambah_rubrik_penilaian', [TugasKelompokMateriController::class, 'tambahRubrikPenilaian'])->name('kelas.topikPembahasan.materi.tugasKelompok.tambahRubrikPenilaian');

                    Route::group(['prefix' => '/{tugasKelompok}/penilaian'], function () {
                        Route::get('', [PengumpulanTugasKelompokController::class, 'index'])->name('kelas.topikPembahasan.materi.tugasKelompok.penilaian');
                        Route::get('/{pengumpulanTugasKelompok}', [PengumpulanTugasKelompokController::class, 'detail'])->name('kelas.topikPembahasan.materi.tugasKelompok.penilaian.detail');
                        Route::post('/{pengumpulanTugasKelompok}', [PengumpulanTugasKelompokController::class, 'post'])->name('kelas.topikPembahasan.materi.tugasKelompok.penilaian.post');
                        Route::get('/{pengumpulanTugasKelompok}/hasil', [PengumpulanTugasKelompokController::class, 'hasil'])->name('kelas.topikPembahasan.materi.tugasKelompok.penilaian.hasil');
                        Route::get('/{pengumpulanTugasKelompok}/edit', [PengumpulanTugasKelompokController::class, 'edit'])->name('kelas.topikPembahasan.materi.tugasKelompok.penilaian.edit');
                        Route::patch('/{pengumpulanTugasKelompok}/update', [PengumpulanTugasKelompokController::class, 'update'])->name('kelas.topikPembahasan.materi.tugasKelompok.penilaian.update');
                    });
                });

                Route::group(['prefix'  => '/{materi}/kuis'], function () {
                    Route::get('/', [KuisMateriController::class, 'index'])->name('kelas.topikPembahasan.materi.kuis');
                    Route::post('/', [KuisMateriController::class, 'post'])->name('kelas.topikPembahasan.materi.kuis.post');
                    Route::get('/{kuis}/edit', [KuisMateriController::class, 'edit'])->name('kelas.materi.kuis.materi.kuis.edit');
                    Route::patch('/update', [KuisMateriController::class, 'update'])->name('kelas.topikPembahasan.materi.kuis.update');
                    Route::delete('{kuis}/delete', [KuisMateriController::class, 'delete'])->name('kelas.topikPembahasan.materi.kuis.delete');
                    Route::post('/tambah_rubrik_penilaian', [KuisMateriController::class, 'tambahRubrikPenilaian'])->name('kelas.topikPembahasan.materi.kuis.tambahRubrikPenilaian');

                    Route::group(['prefix'  => '/{kuis}/soal_kuis'], function () {
                        Route::get('/', [SoalKuisMateriController::class, 'index'])->name('kelas.topikPembahasan.materi.soalKuis');
                        Route::post('/', [SoalKuisMateriController::class, 'post'])->name('kelas.topikPembahasan.materi.soalKuis.post');
                        Route::get('/{soalKuis}/edit', [SoalKuisMateriController::class, 'edit'])->name('kelas.materi.soalKuis.materi.soalKuis.edit');
                        Route::patch('/update', [SoalKuisMateriController::class, 'update'])->name('kelas.topikPembahasan.materi.soalKuis.update');
                        Route::delete('{soalKuis}/delete', [SoalKuisMateriController::class, 'delete'])->name('kelas.topikPembahasan.materi.soalKuis.delete');
                        Route::post('/tambah_rubrik_penilaian', [SoalKuisMateriController::class, 'tambahRubrikPenilaian'])->name('kelas.topikPembahasan.materi.soalKuis.tambahRubrikPenilaian');
                    });
                });
            });
        });

        Route::group(['prefix'  => '/{kelas}/data_mahasiswa'], function () {
            Route::get('/', [MahasiswaKelasController::class, 'index'])->name('kelas.mahasiswa');
            Route::get('/{mahasiswa}/aktivitas', [MahasiswaKelasController::class, 'aktivitas'])->name('kelas.mahasiswa.aktivitas');
            Route::get('/{mahasiswa}/riwayat_belajar', [MahasiswaKelasController::class, 'riwayatBelajar'])->name('kelas.mahasiswa.riwayatBelajar');
        });

        Route::group(['prefix'  => '/{kelas}/capaian_lulusan/'], function () {
            Route::get('/', [CapaianLulusanKelasController::class, 'index'])->name('kelas.capaianLulusan');
            Route::post('/', [CapaianLulusanKelasController::class, 'post'])->name('kelas.capaianLulusan.post');
            Route::get('/{capaianLulusan}/edit', [CapaianLulusanKelasController::class, 'edit'])->name('kelas.capaianLulusan.edit');
            Route::delete('{capaianLulusan}/delete', [CapaianLulusanKelasController::class, 'delete'])->name('kelas.capaianLulusan.delete');
        });

        Route::group(['prefix'  => '/{kelas}/kuisioner_kelas/'], function () {
            Route::get('/', [KuisionerKelasController::class, 'index'])->name('kelas.kuisioner');
            Route::post('/', [KuisionerKelasController::class, 'post'])->name('kelas.kuisioner.post');
            Route::get('/{kuisioner}/edit', [KuisionerKelasController::class, 'edit'])->name('kelas.kuisioner.edit');
            Route::patch('/{kuisioner}/update', [KuisionerKelasController::class, 'update'])->name('kelas.kuisioner.update');
            Route::delete('{kuisioner}/delete', [KuisionerKelasController::class, 'delete'])->name('kelas.kuisioner.delete');
        });

        Route::group(['prefix'  => '/{kelas}/kuisioner_penilaian_kelompok/'], function () {
            Route::get('/', [KuisionerKelompokKelasController::class, 'index'])->name('kelas.kuisionerKelompok');
            Route::post('/', [KuisionerKelompokKelasController::class, 'post'])->name('kelas.kuisionerKelompok.post');
            Route::get('/{kuisionerKelompok}/edit', [KuisionerKelompokKelasController::class, 'edit'])->name('kelas.kuisionerKelompok.edit');
            Route::patch('/{kuisionerKelompok}/update', [KuisionerKelompokKelasController::class, 'update'])->name('kelas.kuisionerKelompok.update');
            Route::delete('{kuisionerKelompok}/delete', [KuisionerKelompokKelasController::class, 'delete'])->name('kelas.kuisionerKelompok.delete');
        });
    });

    Route::group(['prefix'  => 'ujian_tengah_semester'], function () {
        Route::get('/', [UtsController::class, 'index'])->name('dosen.uts');
        Route::get('/add', [UtsController::class, 'add'])->name('dosen.uts.add');
        Route::post('/', [UtsController::class, 'post'])->name('dosen.uts.post');
        Route::get('/{id}/edit', [UtsController::class, 'edit'])->name('dosen.uts.edit');
        Route::patch('{id}/update', [UtsController::class, 'update'])->name('dosen.uts.update');
        Route::delete('{id}/delete', [UtsController::class, 'delete'])->name('dosen.uts.delete');

        Route::group(['prefix'  => 'tambah_soal'], function () {
            Route::get('/{midId}', [UtsController::class, 'soalIndex'])->name('dosen.uts.soal');
            Route::post('{midId}/', [UtsController::class, 'soalPost'])->name('dosen.uts.soal.post');
            Route::delete('{midId}/delete/{soalId}', [UtsController::class, 'soalDelete'])->name('dosen.uts.soal.delete');
        });

        Route::group(['prefix'  => 'tambah_sesi_ujian'], function () {
            Route::get('/{midId}', [UtsController::class, 'sesiIndex'])->name('dosen.uts.sesi');
            Route::post('{midId}/', [UtsController::class, 'sesiPost'])->name('dosen.uts.sesi.post');
            Route::delete('{midId}/delete/{sesiId}', [UtsController::class, 'sesiDelete'])->name('dosen.uts.sesi.delete');

            Route::group(['prefix'  => 'tambah_peserta'], function () {
                Route::get('{midId}/sesi/{sesiId}', [UtsController::class, 'pesertaIndex'])->name('dosen.uts.sesi.peserta');
                Route::post('{midId}/{sesiId}', [UtsController::class, 'pesertaPost'])->name('dosen.uts.sesi.peserta.post');
                Route::delete('{midId}/delete/{sesiId}/{pesertaId}', [UtsController::class, 'pesertaDelete'])->name('dosen.uts.sesi.peserta.delete');
            });
        });
    });

    Route::group(['prefix'  => 'ujian_akhir_semester'], function () {
        Route::get('/', [UasController::class, 'index'])->name('dosen.uas');
        Route::get('/add', [UasController::class, 'add'])->name('dosen.uas.add');
        Route::post('/', [UasController::class, 'post'])->name('dosen.uas.post');
        Route::get('/{id}/edit', [UasController::class, 'edit'])->name('dosen.uas.edit');
        Route::patch('{id}/update', [UasController::class, 'update'])->name('dosen.uas.update');
        Route::delete('{id}/delete', [UasController::class, 'delete'])->name('dosen.uas.delete');

        Route::group(['prefix'  => 'tambah_soal'], function () {
            Route::get('/{midId}', [UasController::class, 'soalIndex'])->name('dosen.uas.soal');
            Route::post('{midId}/', [UasController::class, 'soalPost'])->name('dosen.uas.soal.post');
            Route::delete('{midId}/delete/{soalId}', [UasController::class, 'soalDelete'])->name('dosen.uas.soal.delete');
        });

        Route::group(['prefix'  => 'tambah_sesi_ujian'], function () {
            Route::get('/{midId}', [UasController::class, 'sesiIndex'])->name('dosen.uas.sesi');
            Route::post('{midId}/', [UasController::class, 'sesiPost'])->name('dosen.uas.sesi.post');
            Route::delete('{midId}/delete/{sesiId}', [UasController::class, 'sesiDelete'])->name('dosen.uas.sesi.delete');

            Route::group(['prefix'  => 'tambah_peserta'], function () {
                Route::get('{midId}/sesi/{sesiId}', [UasController::class, 'pesertaIndex'])->name('dosen.uas.sesi.peserta');
                Route::post('{midId}/{sesiId}', [UasController::class, 'pesertaPost'])->name('dosen.uas.sesi.peserta.post');
                Route::delete('{midId}/delete/{sesiId}/{pesertaId}', [UasController::class, 'pesertaDelete'])->name('dosen.uas.sesi.peserta.delete');
            });
        });
    });
});

require __DIR__ . '/auth.php';
