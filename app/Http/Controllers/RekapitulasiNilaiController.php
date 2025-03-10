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

        $mahasiswa_nilai = $mahasiswas->map(function ($mhs) use ($request) {
            $mhs->pretest = $mhs->nilaiKuisMateris
                ->where("kuisMateri.jenis_kuis", "==", "pretest")
                ->where("kuisMateri.materi.topikPembahasanKelas.kelas.id", $request->kelas_id)
                ->sum("nilai");

            $mhs->posttest = $mhs->nilaiKuisMateris
                ->where("kuisMateri.jenis_kuis", "==", "posttest")
                ->where("kuisMateri.materi.topikPembahasanKelas.kelas.id", $request->kelas_id)
                ->sum("nilai");

            $mhs->jumlah_nilai_kuis = $mhs->pretest + $mhs->posttest;

            $mhs->tugasIndividu = $mhs->tugasIndividus
                ->where("tugasIndividu.materi.topikPembahasanKelas.kelas.id", $request->kelas_id)
                ->avg("rata_rata");

            $mhs->tugasKelompok = $mhs->tugasKelompokDetail
                ->where("pengumpulanTugasKelompok.tugasKelompok.materi.topikPembahasanKelas.kelas.id", $request->kelas_id)
                ->avg("rata_rata");

            $mhs->penilaianKelompok = $mhs->penilaianKelompok
                ->where("topikPembahasanKelas.kelas.id", $request->kelas_id)
                ->avg("rata_rata");

            $mhs->uts = $mhs->utsNilai
                ->where("uts.kelas.id", $request->kelas_id)
                ->avg("nilai");

            $mhs->uas = $mhs->uasNilai
                ->where("uas.kelas.id", $request->kelas_id)
                ->avg("nilai");

            return $mhs;
        });

        $selectedKelas = Kelas::find($request->kelas_id);

        return view("admin.rekapitulasi.index", compact("kelas", "mahasiswas", "selectedKelas"));
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
            $mhs->pretest = $mhs->nilaiKuisMateris
                ->where("kuisMateri.jenis_kuis", "==", "pretest")
                ->where("kuisMateri.materi.topikPembahasanKelas.kelas.id", $kelas->id)
                ->sum("nilai");

            $mhs->posttest = $mhs->nilaiKuisMateris
                ->where("kuisMateri.jenis_kuis", "==", "posttest")
                ->where("kuisMateri.materi.topikPembahasanKelas.kelas.id", $kelas->id)
                ->sum("nilai");

            $mhs->jumlah_nilai_kuis = $mhs->pretest + $mhs->posttest;

            $mhs->tugasIndividu = $mhs->tugasIndividus
                ->where("tugasIndividu.materi.topikPembahasanKelas.kelas.id", $kelas->id)
                ->avg("rata_rata");

            $mhs->tugasKelompok = $mhs->tugasKelompokDetail
                ->where("pengumpulanTugasKelompok.tugasKelompok.materi.topikPembahasanKelas.kelas.id", $kelas->id)
                ->avg("rata_rata");

            $mhs->penilaianKelompok = $mhs->penilaianKelompok
                ->where("topikPembahasanKelas.kelas.id", $kelas->id)
                ->avg("rata_rata");

            $mhs->uts = $mhs->utsNilai
                ->where("uts.kelas.id", $kelas->id)
                ->avg("nilai");

            $mhs->uas = $mhs->uasNilai
                ->where("uas.kelas.id", $kelas->id)
                ->avg("nilai");

            return $mhs;
        });

        return Excel::download(new RekapNilaiExport($mahasiswa_nilai, $topikKelas), "test.xlsx");
    }
}
