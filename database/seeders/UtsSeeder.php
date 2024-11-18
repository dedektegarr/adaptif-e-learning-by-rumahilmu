<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UtsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // SELECT id, courseId as kelas_id, startDate as tanggal_dilaksanakan, timeBegin as waktu_mulai, timeEnd as waktu_selesai, created_at, updated_at FROM `mid_exams`

        $datas = array(
            array('id' => '1','kelas_id' => '25','tanggal_dilaksanakan' => '2022-10-10','waktu_mulai' => '08:00 AM','waktu_selesai' => '12:00 AM','created_at' => '2022-09-16 19:33:16','updated_at' => '2022-10-04 08:30:02'),
            array('id' => '3','kelas_id' => '18','tanggal_dilaksanakan' => '2022-10-05','waktu_mulai' => '10:00 AM','waktu_selesai' => '11:00 AM','created_at' => '2022-09-16 19:37:22','updated_at' => '2022-10-04 13:32:51'),
            array('id' => '4','kelas_id' => '32','tanggal_dilaksanakan' => '2024-10-07','waktu_mulai' => '11:00 AM','waktu_selesai' => '02:00 PM','created_at' => '2024-10-07 07:26:20','updated_at' => '2024-10-07 08:28:51'),
            array('id' => '5','kelas_id' => '31','tanggal_dilaksanakan' => '2024-10-11','waktu_mulai' => '01:00 PM','waktu_selesai' => '04:00 PM','created_at' => '2024-10-11 12:02:14','updated_at' => '2024-10-11 12:02:14')
        );

        foreach ($datas as $data) {
            DB::table('uts')->insert($data);
        }
    }
}
