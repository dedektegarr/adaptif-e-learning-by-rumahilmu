<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UtsSesiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // SELECT id, midExamId as uts_id, sessionName as nama_sesi, startDate as tanggal_dilaksanakan, timeBegin as waktu_mulai, timeEnd as waktu_selesai, created_at, updated_at FROM `mid_exam_sessions`;

        $datas = array(
            array('id' => '1','uts_id' => '1','nama_sesi' => 'Informatika Kelas A Sesi 1','tanggal_dilaksanakan' => '2022-10-10','waktu_mulai' => '08:50 AM','waktu_selesai' => '09:50 AM','created_at' => '2022-10-04 08:32:05','updated_at' => '2022-10-04 08:32:05'),
            array('id' => '2','uts_id' => '1','nama_sesi' => 'Informatika Kelas A Sesi 2','tanggal_dilaksanakan' => '2022-10-10','waktu_mulai' => '10:00 AM','waktu_selesai' => '11:00 AM','created_at' => '2022-10-04 08:32:37','updated_at' => '2022-10-04 08:32:37'),
            array('id' => '3','uts_id' => '1','nama_sesi' => 'Informatika Kelas B Sesi 1','tanggal_dilaksanakan' => '2022-10-10','waktu_mulai' => '11:00 AM','waktu_selesai' => '12:00 PM','created_at' => '2022-10-04 08:33:07','updated_at' => '2022-10-04 08:33:07'),
            array('id' => '4','uts_id' => '3','nama_sesi' => 'Sistem Informasi Sesi 1','tanggal_dilaksanakan' => '2022-10-05','waktu_mulai' => '10:00 AM','waktu_selesai' => '11:00 AM','created_at' => '2022-10-04 08:58:49','updated_at' => '2022-10-04 08:58:49'),
            array('id' => '5','uts_id' => '3','nama_sesi' => 'Sesi 2','tanggal_dilaksanakan' => '2022-10-05','waktu_mulai' => '11:15 AM','waktu_selesai' => '12:15 PM','created_at' => '2022-10-05 11:12:09','updated_at' => '2022-10-05 11:12:09'),
            array('id' => '6','uts_id' => '1','nama_sesi' => 'Informatika Kelas B Sesi 2','tanggal_dilaksanakan' => '2022-10-10','waktu_mulai' => '11:25 AM','waktu_selesai' => '12:25 PM','created_at' => '2022-10-10 11:22:15','updated_at' => '2022-10-10 11:22:15'),
            array('id' => '9','uts_id' => '1','nama_sesi' => 'coba','tanggal_dilaksanakan' => '2023-10-15','waktu_mulai' => '11:00 AM','waktu_selesai' => '11:30 AM','created_at' => '2023-10-15 11:05:10','updated_at' => '2023-10-15 11:05:10'),
            array('id' => '10','uts_id' => '3','nama_sesi' => 'coba','tanggal_dilaksanakan' => '2023-10-15','waktu_mulai' => '11:00 AM','waktu_selesai' => '11:30 AM','created_at' => '2023-10-15 11:06:00','updated_at' => '2023-10-15 11:06:00'),
            array('id' => '15','uts_id' => '4','nama_sesi' => 'sesi 1','tanggal_dilaksanakan' => '2024-10-07','waktu_mulai' => '11:10 AM','waktu_selesai' => '11:50 AM','created_at' => '2024-10-07 09:05:17','updated_at' => '2024-10-07 09:05:17'),
            array('id' => '16','uts_id' => '5','nama_sesi' => 'Kelas B','tanggal_dilaksanakan' => '2024-10-11','waktu_mulai' => '01:00 PM','waktu_selesai' => '02:00 PM','created_at' => '2024-10-11 12:12:31','updated_at' => '2024-10-11 12:12:31'),
            array('id' => '17','uts_id' => '5','nama_sesi' => 'Kelas A','tanggal_dilaksanakan' => '2024-10-11','waktu_mulai' => '02:00 PM','waktu_selesai' => '03:30 PM','created_at' => '2024-10-11 12:19:33','updated_at' => '2024-10-11 12:19:33')
        );

        foreach ($datas as $data) {
            DB::table('uts_sesis')->insert($data);
        }
    }
}
