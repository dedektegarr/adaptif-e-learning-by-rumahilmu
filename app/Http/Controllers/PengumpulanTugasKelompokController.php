<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Materi;
use App\Models\PengumpulanTugasKelompok;
use App\Models\PengumpulanTugasKelompokDetail;
use App\Models\PengumpulanTugasKelompokDetailNilai;
use Illuminate\Http\Request;
use App\Models\TopikPembahasanKelas;
use App\Models\TugasKelompokMateri;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PengumpulanTugasKelompokController extends Controller
{
    public function index(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi, TugasKelompokMateri $tugasKelompok)
    {
        $pengumpulanTugas = $tugasKelompok->pengumpulanTugas()->get();
        $pengumpulanTugas->map(function ($tugas) {
            $tugas->anggota = $tugas->pengumpulanTugasDetails()->get();
            $tugas->hasNilai = $tugas->anggota->whereNull('nilai')->count() < $tugas->anggota->count();

            return $tugas;
        });

        return view('admin/kelas/topik_pembahasan/materi/tugas_kelompok/pengumpulan.index', compact('tugasKelompok', 'pengumpulanTugas', 'topikPembahasan', 'materi', 'kelas'));
    }

    public function detail(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi, TugasKelompokMateri $tugasKelompok, PengumpulanTugasKelompok $pengumpulanTugasKelompok)
    {
        $rubrikPenilaian = $tugasKelompok->rubrikPenilaians()->get();
        $tugas = $pengumpulanTugasKelompok;

        return view('admin/kelas/topik_pembahasan/materi/tugas_kelompok/pengumpulan.detail', compact('tugas', 'rubrikPenilaian', 'kelas', 'materi', 'topikPembahasan', 'tugasKelompok'));
    }

    public function hasil(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi, TugasKelompokMateri $tugasKelompok, PengumpulanTugasKelompok $pengumpulanTugasKelompok)
    {
        $rubrikPenilaian = $tugasKelompok->rubrikPenilaians()->get();
        $tugas = $pengumpulanTugasKelompok;
        $detail_tugas = $tugas->pengumpulanTugasDetails()->get();
        $detail_nilai = $tugas->pengumpulanTugasDetailNilais()->get();

        return view('admin/kelas/topik_pembahasan/materi/tugas_kelompok/pengumpulan.hasil', compact('tugas', 'rubrikPenilaian', 'detail_nilai', 'detail_tugas', 'kelas', 'materi', 'topikPembahasan', 'tugasKelompok'));
    }

    public function edit(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi, TugasKelompokMateri $tugasKelompok, PengumpulanTugasKelompok $pengumpulanTugasKelompok)
    {
        $rubrikPenilaian = $tugasKelompok->rubrikPenilaians()->get();
        $tugas = $pengumpulanTugasKelompok;
        $detail_tugas = $tugas->pengumpulanTugasDetails()->get();
        $detail_nilai = $tugas->pengumpulanTugasDetailNilais()->get();

        return view('admin/kelas/topik_pembahasan/materi/tugas_kelompok/pengumpulan.edit_nilai', compact('tugas', 'detail_tugas', 'detail_nilai', 'rubrikPenilaian', 'kelas', 'materi', 'topikPembahasan', 'tugasKelompok'));
    }

    public function update(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi, TugasKelompokMateri $tugasKelompok, PengumpulanTugasKelompok $pengumpulanTugasKelompok, Request $request)
    {
        $rubrikPenilaian = $tugasKelompok->rubrikPenilaians()->get();
        $nilai_details = [];

        foreach ($rubrikPenilaian as $rubrik) {
            $nilai_details[] = [
                'pengumpulan_tugas_kelompok_id' => $pengumpulanTugasKelompok->id,
                'rubrik_penilaian_id' => $rubrik->id,
                'kelompok' => $pengumpulanTugasKelompok->kelomopk,
                'nilai' => (int)$request['rubrik' . $rubrik->id],
                'created_at'    =>  Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at'    =>  Carbon::now()->format("Y-m-d H:i:s")
            ];
        }

        $totalNilai = array_sum(array_column($nilai_details, 'nilai'));
        $rerataNilai = $totalNilai / $rubrikPenilaian->count();

        // input nilai keseluruhan anggota
        $pengumpulanTugasKelompok->pengumpulanTugasDetails()->update([
            'nilai' => $totalNilai,
            'rata_rata' => $rerataNilai
        ]);

        $pengumpulanTugasKelompok->pengumpulanTugasDetailNilais()->delete();
        PengumpulanTugasKelompokDetailNilai::insert($nilai_details);

        activity()
            ->causedBy(Auth::user())
            ->performedOn($pengumpulanTugasKelompok)
            ->event('admin_updated')
            ->withProperties([
                'added' => $nilai_details,
            ])
            ->log(Auth::user()->nama_lengkap . ' mengubah nilai untuk tugas kelompok mahasiswa dengan ID ' . $pengumpulanTugasKelompok->id . '.');

        DB::commit();
        $notification = array(
            'message' => 'Berhasil mengubah penilaian tugas kelompok',
            'alert-type' => 'success'
        );

        return redirect()->route('kelas.topikPembahasan.materi.tugasKelompok.penilaian.hasil', [$kelas->id, $topikPembahasan->id, $materi->id, $tugasKelompok->id, $pengumpulanTugasKelompok->id])->with($notification);
    }

    public function post(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi, TugasKelompokMateri $tugasKelompok, PengumpulanTugasKelompok $pengumpulanTugasKelompok, Request $request)
    {
        $rubrikPenilaian = $tugasKelompok->rubrikPenilaians()->get();
        $nilai_details = [];

        foreach ($rubrikPenilaian as $rubrik) {
            $nilai_details[] = [
                'pengumpulan_tugas_kelompok_id' => $pengumpulanTugasKelompok->id,
                'rubrik_penilaian_id' => $rubrik->id,
                'kelompok' => $pengumpulanTugasKelompok->kelomopk,
                'nilai' => (int)$request['rubrik' . $rubrik->id],
                'created_at'    =>  Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at'    =>  Carbon::now()->format("Y-m-d H:i:s")
            ];
        }

        $totalNilai = array_sum(array_column($nilai_details, 'nilai'));
        $rerataNilai = $totalNilai / $rubrikPenilaian->count();

        // input nilai keseluruhan anggota
        $pengumpulanTugasKelompok->pengumpulanTugasDetails()->update([
            'nilai' => $totalNilai,
            'rata_rata' => $rerataNilai
        ]);

        PengumpulanTugasKelompokDetailNilai::insert($nilai_details);

        activity()
            ->causedBy(Auth::user())
            ->performedOn($pengumpulanTugasKelompok)
            ->event('admin_updated')
            ->withProperties([
                'added' => $nilai_details,
            ])
            ->log(Auth::user()->nama_lengkap . ' menginput nilai untuk tugas kelompok mahasiswa dengan ID ' . $pengumpulanTugasKelompok->id . '.');

        DB::commit();
        $notification = array(
            'message' => 'Berhasil memberikan penilaian tugas kelompok',
            'alert-type' => 'success'
        );
        return redirect()->route('kelas.topikPembahasan.materi.tugasKelompok.penilaian', [$kelas->id, $topikPembahasan->id, $materi->id, $tugasKelompok->id, $pengumpulanTugasKelompok->id])->with($notification);
    }
}
