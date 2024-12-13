<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

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

        $mahasiswas = Kelas::find($request->kelas_id)->mahasiswas;
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
}
