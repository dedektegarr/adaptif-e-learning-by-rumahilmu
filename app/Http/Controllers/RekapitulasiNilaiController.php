<?php

namespace App\Http\Controllers;

use App\Exports\RekapNilaiExport;
use App\Models\Kelas;
use App\Models\KelasMahasiswa;
use App\Models\KelasMahasiswaDetail;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RekapitulasiNilaiController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();

        return view("admin.rekapitulasi.index", compact("kelas"));
    }

    public function filter(Request $request)
    {
        $request->validate([
            "kelas_id" => "required"
        ]);

        $mahasiswas = Kelas::find($request->kelas_id)->mahasiswas()
            ->with([
                'nilaiKuisMateris',
                'tugasIndividus',
                'tugasKelompokDetail',
                'penilaianKelompok',
                'utsNilai',
                'uasNilai'
            ])
            ->get();

        $kelas = Kelas::all();

        $mahasiswa_nilai = $mahasiswas->map(function ($mhs) {
            $mhs->pretest = $mhs->nilaiKuisMateris->where("kuisMateri.jenis_kuis", "==", "pretest")->sum("nilai");
            $mhs->posttest = $mhs->nilaiKuisMateris->where("kuisMateri.jenis_kuis", "==", "posttest")->sum("nilai");
            $mhs->jumlah_nilai_kuis = $mhs->pretest + $mhs->posttest;

            $mhs->tugasIndividu = $mhs->tugasIndividus->avg("rata_rata");
            $mhs->tugasKelompok = $mhs->tugasKelompokDetail->avg("rata_rata");
            $mhs->penilaianKelompok = $mhs->penilaianKelompok->avg("rata_rata");

            $mhs->uts = $mhs->utsNilai->avg("nilai");
            $mhs->uas = $mhs->uasNilai->avg("nilai");

            return $mhs;
        });

        return view("admin.rekapitulasi.index", compact("kelas", "mahasiswas"));
    }

    public function export(Kelas $kelas)
    {
        $mahasiswas = $kelas->mahasiswas()
            ->with([
                'nilaiKuisMateris',
                'tugasIndividus',
                'tugasKelompokDetail',
                'penilaianKelompok',
                'utsNilai',
                'uasNilai'
            ])
            ->get();

        $topikKelas = $kelas->topikPembahasanKelas;

        $mahasiswa_nilai = $mahasiswas->map(function ($mhs) use ($kelas) {
            $mhs->pretest = $mhs->nilaiKuisMateris->where("kuisMateri.jenis_kuis", "==", "pretest");
            $mhs->topikPretest = $mhs->pretest->groupBy("kuis_materi_id");

            $mhs->posttest = $mhs->nilaiKuisMateris->where("kuisMateri.jenis_kuis", "==", "posttest");
            $mhs->topikPosttest = $mhs->posttest->groupBy("kuis_materi_id");

            $mhs->tugasIndividu = $mhs->tugasIndividus->avg("rata_rata");
            $mhs->tugasKelompok = $mhs->tugasKelompokDetail->avg("rata_rata");
            $mhs->penilaianKelompok = $mhs->penilaianKelompok->avg("rata_rata");

            $mhs->uts = $mhs->utsNilai->avg("nilai");
            $mhs->uas = $mhs->uasNilai->avg("nilai");

            return $mhs;
        });

        return Excel::download(new RekapNilaiExport($mahasiswa_nilai, $topikKelas), "test.xlsx");
    }
}
