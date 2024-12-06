<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Materi;
use App\Models\PengumpulanTugasIndividu;
use App\Models\PengumpulanTugasIndividuDetail;
use Illuminate\Http\Request;
use App\Models\TugasIndividuMateri;
use App\Models\TopikPembahasanKelas;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        return view('admin/kelas/topik_pembahasan/materi/tugas_individu/pengumpulan.detail', compact('tugas', 'rubrikPenilaian', 'kelas', 'materi', 'topikPembahasan', 'tugasIndividu'));
    }

    public function post(Kelas $kelas, TopikPembahasanKelas $topikPembahasan, Materi $materi, TugasIndividuMateri $tugasIndividu, PengumpulanTugasIndividu $pengumpulanTugasIndividu, Request $request)
    {
        $rubrikPenilaian = $tugasIndividu->rubrikPenilaians()->get();
        $nilai_details = [];

        foreach ($rubrikPenilaian as $rubrik) {
            $nilai_details[] = [
                'pengumpulan_tugas_individu_id' => $pengumpulanTugasIndividu->id,
                'rubrik_penilaian_id' => $rubrik->id,
                'nilai' => (int)$request['rubrik' . $rubrik->id],
                'created_at'    =>  Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at'    =>  Carbon::now()->format("Y-m-d H:i:s")
            ];
        }

        $totalNilai = array_sum(array_column($nilai_details, 'nilai'));
        $rerataNilai = $totalNilai / $rubrikPenilaian->count();

        $pengumpulanTugasIndividu->update([
            'nilai' => $totalNilai,
            'rata_rata' => $rerataNilai,
            'waktu_dinilai' => Carbon::now()->format("Y-m-d H:i:s")
        ]);

        PengumpulanTugasIndividuDetail::insert($nilai_details);

        activity()
            ->causedBy(Auth::user())
            ->performedOn($pengumpulanTugasIndividu)
            ->event('admin_updated')
            ->withProperties([
                'added' => $nilai_details,
            ])
            ->log(Auth::user()->nama_lengkap . ' menginput nilai untuk tugas individu mahasiswa dengan ID ' . $pengumpulanTugasIndividu->id . '.');

        DB::commit();
        $notification = array(
            'message' => 'Berhasil memberikan penilaian tugas individu',
            'alert-type' => 'success'
        );
        return redirect()->route('kelas.topikPembahasan.materi.tugasIndividu.penilaian', [$kelas->id, $topikPembahasan->id, $materi->id, $tugasIndividu->id, $pengumpulanTugasIndividu->id])->with($notification);
    }
}
