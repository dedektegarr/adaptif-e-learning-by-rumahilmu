<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RubrikPenilaianUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // rubrik_penilaians
        $rubrik_penilaians = array(
            array('id' => '30','rubrik_penilaian' => 'Individu - Identifikasi masalah, strategi pemecahan masalah, dan alur logika','created_at' => '2022-08-19 17:15:52','updated_at' => '2024-04-29 18:59:54'),
            array('id' => '31','rubrik_penilaian' => 'Individu - Algoritma, desain dan implementasi','created_at' => '2022-08-19 17:16:17','updated_at' => '2022-08-19 17:16:17'),
            array('id' => '32','rubrik_penilaian' => 'Individu - Integrasi Sintaks dan Semantik','created_at' => '2022-08-19 17:16:37','updated_at' => '2022-08-19 17:16:37'),
            array('id' => '33','rubrik_penilaian' => 'Individu - Kesimpulan solusi','created_at' => '2022-08-19 17:16:56','updated_at' => '2022-08-19 17:16:56'),
            array('id' => '34','rubrik_penilaian' => 'Kelompok - Identifikasi masalah dan pengumpulan data','created_at' => '2022-08-19 17:22:00','updated_at' => '2022-08-19 17:22:00'),
            array('id' => '35','rubrik_penilaian' => 'Kelompok - Analisis dan argumentasi','created_at' => '2022-08-19 17:22:15','updated_at' => '2022-08-19 17:22:15'),
            array('id' => '36','rubrik_penilaian' => 'Kelompok - Penyusunan algoritma dan kode program','created_at' => '2022-08-19 17:22:32','updated_at' => '2022-08-19 17:22:32'),
            array('id' => '37','rubrik_penilaian' => 'Kelompok - Kesimpulan solusi','created_at' => '2022-08-19 17:23:01','updated_at' => '2022-08-19 17:23:01')
        );

        foreach ($rubrik_penilaians as $rubrik_penilaian) {
            DB::table('rubrik_penilaians')->insert($rubrik_penilaian);
        }
    }
}
