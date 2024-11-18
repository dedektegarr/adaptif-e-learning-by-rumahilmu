<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasKuisionerPenilaianKelompokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // kuisioner_kelompok_kelas
        $KuisionerPenilaianKelompokKelas = array(
            // array('id' => '1','kelas_id' => '28','bank_penilaian_kelompok_id' => '1','created_at' => '2024-04-01 08:05:17','updated_at' => '2024-04-01 08:05:17'),
            // array('id' => '2','kelas_id' => '28','bank_penilaian_kelompok_id' => '2','created_at' => '2024-04-01 08:05:20','updated_at' => '2024-04-01 08:05:20'),
            // array('id' => '3','kelas_id' => '28','bank_penilaian_kelompok_id' => '3','created_at' => '2024-04-01 08:05:24','updated_at' => '2024-04-01 08:05:24'),
            // array('id' => '4','kelas_id' => '28','bank_penilaian_kelompok_id' => '4','created_at' => '2024-04-01 08:05:28','updated_at' => '2024-04-01 08:05:28'),
            // array('id' => '5','kelas_id' => '28','bank_penilaian_kelompok_id' => '5','created_at' => '2024-04-01 08:05:31','updated_at' => '2024-04-01 08:05:31'),
            // array('id' => '6','kelas_id' => '28','bank_penilaian_kelompok_id' => '6','created_at' => '2024-04-01 08:05:35','updated_at' => '2024-04-01 08:05:35'),
            // array('id' => '7','kelas_id' => '28','bank_penilaian_kelompok_id' => '7','created_at' => '2024-04-01 08:05:38','updated_at' => '2024-04-01 08:05:38'),
            // array('id' => '8','kelas_id' => '28','bank_penilaian_kelompok_id' => '8','created_at' => '2024-04-01 08:05:42','updated_at' => '2024-04-01 08:05:42'),
            // array('id' => '9','kelas_id' => '30','bank_penilaian_kelompok_id' => '1','created_at' => '2024-04-18 13:50:58','updated_at' => '2024-04-18 13:50:58'),
            array('id' => '10','kelas_id' => '31','bank_penilaian_kelompok_id' => '1','created_at' => '2024-08-16 12:16:16','updated_at' => '2024-08-16 12:16:16'),
            array('id' => '11','kelas_id' => '31','bank_penilaian_kelompok_id' => '2','created_at' => '2024-08-16 12:16:19','updated_at' => '2024-08-16 12:16:19'),
            array('id' => '12','kelas_id' => '31','bank_penilaian_kelompok_id' => '3','created_at' => '2024-08-16 12:16:22','updated_at' => '2024-08-16 12:16:22'),
            array('id' => '13','kelas_id' => '31','bank_penilaian_kelompok_id' => '4','created_at' => '2024-08-16 12:16:25','updated_at' => '2024-08-16 12:16:25'),
            array('id' => '14','kelas_id' => '31','bank_penilaian_kelompok_id' => '5','created_at' => '2024-08-16 12:16:28','updated_at' => '2024-08-16 12:16:28'),
            array('id' => '15','kelas_id' => '31','bank_penilaian_kelompok_id' => '6','created_at' => '2024-08-16 12:16:31','updated_at' => '2024-08-16 12:16:31'),
            array('id' => '16','kelas_id' => '31','bank_penilaian_kelompok_id' => '7','created_at' => '2024-08-16 12:16:33','updated_at' => '2024-08-16 12:16:33'),
            array('id' => '17','kelas_id' => '31','bank_penilaian_kelompok_id' => '8','created_at' => '2024-08-16 12:16:36','updated_at' => '2024-08-16 12:16:36'),
            array('id' => '18','kelas_id' => '32','bank_penilaian_kelompok_id' => '1','created_at' => '2024-08-25 16:33:56','updated_at' => '2024-08-25 16:33:56'),
            array('id' => '19','kelas_id' => '32','bank_penilaian_kelompok_id' => '2','created_at' => '2024-08-25 16:34:00','updated_at' => '2024-08-25 16:34:00'),
            array('id' => '20','kelas_id' => '32','bank_penilaian_kelompok_id' => '3','created_at' => '2024-08-25 16:34:05','updated_at' => '2024-08-25 16:34:05'),
            array('id' => '21','kelas_id' => '32','bank_penilaian_kelompok_id' => '4','created_at' => '2024-08-25 16:34:08','updated_at' => '2024-08-25 16:34:08'),
            array('id' => '22','kelas_id' => '32','bank_penilaian_kelompok_id' => '5','created_at' => '2024-08-25 16:34:12','updated_at' => '2024-08-25 16:34:12'),
            array('id' => '23','kelas_id' => '32','bank_penilaian_kelompok_id' => '6','created_at' => '2024-08-25 16:34:15','updated_at' => '2024-08-25 16:34:15'),
            array('id' => '24','kelas_id' => '32','bank_penilaian_kelompok_id' => '7','created_at' => '2024-08-25 16:34:19','updated_at' => '2024-08-25 16:34:19'),
            array('id' => '25','kelas_id' => '32','bank_penilaian_kelompok_id' => '8','created_at' => '2024-08-25 16:34:23','updated_at' => '2024-08-25 16:34:23')
        );

        foreach ($KuisionerPenilaianKelompokKelas as $KuisionerPenilaianKelompokKela) {
            DB::table('kelas_kuisioner_kelompok')->insert($KuisionerPenilaianKelompokKela);
        }
    }
}
