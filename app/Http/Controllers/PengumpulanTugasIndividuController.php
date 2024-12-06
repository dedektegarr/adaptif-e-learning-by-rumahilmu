<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Materi;
use App\Models\PengumpulanTugasIndividu;
use Illuminate\Http\Request;
use App\Models\TugasIndividuMateri;
use App\Models\TopikPembahasanKelas;

class PengumpulanTugasIndividuController extends Controller
{
    public function index(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi, TugasIndividuMateri $tugasIndividu)
    {
        $pengumpulanTugas = $tugasIndividu->pengumpulanTugasIndividus()->get();

        return view('admin/kelas/topik_pembahasan/materi/tugas_individu/pengumpulan.index', compact('tugasIndividu', 'pengumpulanTugas', 'topikPembahasan', 'materi', 'kelas'));
    }

    public function detail(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi, TugasIndividuMateri $tugasIndividu, PengumpulanTugasIndividu $pengumpulanTugasIndividu)
    {
        $rubrikPenilaian = $tugasIndividu->rubrikPenilaians()->get();
        $tugas = $pengumpulanTugasIndividu;

        return view('admin/kelas/topik_pembahasan/materi/tugas_individu/pengumpulan.detail', compact('tugas', 'rubrikPenilaian'));
    }
}
