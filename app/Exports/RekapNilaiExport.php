<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RekapNilaiExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    protected $mahasiswa_nilai;
    protected $topikKelas;

    public function __construct($mahasiswa_nilai, $topikKelas)
    {
        $this->mahasiswa_nilai = $mahasiswa_nilai;
        $this->topikKelas = $topikKelas;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return collect($this->mahasiswa_nilai->map(function ($mhs, $index) {
            $totalPretest = 0;
            $totalPosttest = 0;

            $data = [
                $index + 1,
                $mhs->nama_lengkap,
                $mhs->username,
            ];

            foreach ($mhs->topikPretest->values() as $key => $topik) {
                if ($key < $this->topikKelas->count()) {
                    $nilai = $topik->sum("nilai") ?? 0;
                    $data[] = $nilai;
                    $totalPretest += $nilai;
                }
            }

            foreach ($mhs->topikPosttest->values() as $key => $topik) {
                if ($key < $this->topikKelas->count()) {
                    $nilai = $topik->sum("nilai") ?? 0;
                    $data[] = $nilai;
                    $totalPosttest += $nilai;
                }
            }

            // $data[] = $totalPretest + $totalPosttest;

            return $data;

            // return [
            //     $index + 1,
            //     $mhs->nama_lengkap,
            //     $mhs->username,
            //     $mhs->pretest,
            //     number_format($mhs->posttest ?? 0, 2, ','),
            //     number_format($mhs->jumlah_nilai_kuis ?? 0, 2, ','),
            //     number_format($mhs->jumlah_nilai_kuis / 2 ?? 0, 2, ','),
            //     number_format($mhs->tugasIndividu ?? 0, 2, ','),
            //     number_format($mhs->tugasKelompok ?? 0, 2, ','),
            //     number_format($mhs->penilaianKelompok ?? 0, 2, ','),
            //     number_format($mhs->uts * 100 ?? 0, 2, ','),
            //     number_format($mhs->uas * 100 ?? 0, 2, ',')
            // ];
        }));
    }

    public function headings(): array
    {
        $headings = [
            'No',
            'Nama Mahasiswa',
            'NPM',
        ];

        $pretestSubheadings = [];
        foreach ($this->topikKelas as $key => $value) {
            $pretestSubheadings[] = 'Pretest ' . ($key + 1);
        }

        $posttestSubheadings = [];
        foreach ($this->topikKelas as $key => $value) {
            $posttestSubheadings[] = 'Pretest ' . ($key + 1);
        }

        return array_merge(
            $headings,
            $pretestSubheadings,
            $posttestSubheadings,
            // [
            //     "Jumlah"
            // ]
        );

        // return [
        //     'No',
        //     'Nama Mahasiswa',
        //     'NPM',
        //     'Nilai Pretest',
        //     'Pretest 1',
        //     'Pretest 2',
        //     'Pretest 1',
        //     'Nilai Posttest',
        //     'Jumlah',
        //     'Rata-rata Kuis',
        //     'Rata-rata Tugas Individu',
        //     'Rata-rata Tugas Kelompok',
        //     'Rata-rata Kinerja Kelompok',
        //     'Nilai UTS',
        //     'Nilai UAS'
        // ];
    }
}
