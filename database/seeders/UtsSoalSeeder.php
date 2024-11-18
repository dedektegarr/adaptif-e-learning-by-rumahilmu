<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UtsSoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // SELECT id, midExamId as uts_id, questionSetId as bank_soal_pembahasan_id, created_at, updated_at FROM `mid_exam_quests`;

        $datas = array(
            array('id' => '1','uts_id' => '1','bank_soal_pembahasan_id' => '203','created_at' => '2022-10-04 08:45:15','updated_at' => '2022-10-04 08:45:15'),
            array('id' => '2','uts_id' => '1','bank_soal_pembahasan_id' => '220','created_at' => '2022-10-04 08:46:23','updated_at' => '2022-10-04 08:46:23'),
            array('id' => '3','uts_id' => '1','bank_soal_pembahasan_id' => '209','created_at' => '2022-10-04 08:47:40','updated_at' => '2022-10-04 08:47:40'),
            array('id' => '4','uts_id' => '1','bank_soal_pembahasan_id' => '225','created_at' => '2022-10-04 08:48:10','updated_at' => '2022-10-04 08:48:10'),
            array('id' => '5','uts_id' => '1','bank_soal_pembahasan_id' => '193','created_at' => '2022-10-04 08:48:51','updated_at' => '2022-10-04 08:48:51'),
            array('id' => '6','uts_id' => '1','bank_soal_pembahasan_id' => '195','created_at' => '2022-10-04 08:49:21','updated_at' => '2022-10-04 08:49:21'),
            array('id' => '7','uts_id' => '1','bank_soal_pembahasan_id' => '198','created_at' => '2022-10-04 08:49:43','updated_at' => '2022-10-04 08:49:43'),
            array('id' => '8','uts_id' => '1','bank_soal_pembahasan_id' => '212','created_at' => '2022-10-04 08:50:30','updated_at' => '2022-10-04 08:50:30'),
            array('id' => '9','uts_id' => '1','bank_soal_pembahasan_id' => '215','created_at' => '2022-10-04 08:50:43','updated_at' => '2022-10-04 08:50:43'),
            array('id' => '10','uts_id' => '1','bank_soal_pembahasan_id' => '226','created_at' => '2022-10-04 08:51:15','updated_at' => '2022-10-04 08:51:15'),
            array('id' => '11','uts_id' => '1','bank_soal_pembahasan_id' => '228','created_at' => '2022-10-04 08:51:29','updated_at' => '2022-10-04 08:51:29'),
            array('id' => '12','uts_id' => '1','bank_soal_pembahasan_id' => '159','created_at' => '2022-10-04 08:51:33','updated_at' => '2022-10-04 08:51:33'),
            array('id' => '13','uts_id' => '1','bank_soal_pembahasan_id' => '160','created_at' => '2022-10-04 08:51:35','updated_at' => '2022-10-04 08:51:35'),
            array('id' => '14','uts_id' => '1','bank_soal_pembahasan_id' => '167','created_at' => '2022-10-04 08:51:38','updated_at' => '2022-10-04 08:51:38'),
            array('id' => '15','uts_id' => '1','bank_soal_pembahasan_id' => '168','created_at' => '2022-10-04 08:51:41','updated_at' => '2022-10-04 08:51:41'),
            array('id' => '16','uts_id' => '1','bank_soal_pembahasan_id' => '172','created_at' => '2022-10-04 08:51:45','updated_at' => '2022-10-04 08:51:45'),
            array('id' => '17','uts_id' => '1','bank_soal_pembahasan_id' => '176','created_at' => '2022-10-04 08:51:48','updated_at' => '2022-10-04 08:51:48'),
            array('id' => '18','uts_id' => '1','bank_soal_pembahasan_id' => '180','created_at' => '2022-10-04 08:51:48','updated_at' => '2022-10-04 08:51:48'),
            array('id' => '19','uts_id' => '1','bank_soal_pembahasan_id' => '181','created_at' => '2022-10-04 08:52:03','updated_at' => '2022-10-04 08:52:03'),
            array('id' => '20','uts_id' => '1','bank_soal_pembahasan_id' => '186','created_at' => '2022-10-04 08:52:07','updated_at' => '2022-10-04 08:52:07'),
            array('id' => '21','uts_id' => '3','bank_soal_pembahasan_id' => '159','created_at' => '2022-10-04 08:52:10','updated_at' => '2022-10-04 08:52:10'),
            array('id' => '22','uts_id' => '3','bank_soal_pembahasan_id' => '160','created_at' => '2022-10-04 08:52:14','updated_at' => '2022-10-04 08:52:14'),
            array('id' => '23','uts_id' => '3','bank_soal_pembahasan_id' => '167','created_at' => '2022-10-04 08:52:18','updated_at' => '2022-10-04 08:52:18'),
            array('id' => '24','uts_id' => '3','bank_soal_pembahasan_id' => '168','created_at' => '2022-10-04 08:52:19','updated_at' => '2022-10-04 08:52:19'),
            array('id' => '25','uts_id' => '3','bank_soal_pembahasan_id' => '172','created_at' => '2022-10-04 08:52:23','updated_at' => '2022-10-04 08:52:23'),
            array('id' => '26','uts_id' => '3','bank_soal_pembahasan_id' => '176','created_at' => '2022-10-04 08:52:28','updated_at' => '2022-10-04 08:52:28'),
            array('id' => '27','uts_id' => '3','bank_soal_pembahasan_id' => '180','created_at' => '2022-10-04 08:52:33','updated_at' => '2022-10-04 08:52:33'),
            array('id' => '28','uts_id' => '3','bank_soal_pembahasan_id' => '181','created_at' => '2022-10-04 08:52:38','updated_at' => '2022-10-04 08:52:38'),
            array('id' => '29','uts_id' => '3','bank_soal_pembahasan_id' => '186','created_at' => '2022-10-04 08:52:44','updated_at' => '2022-10-04 08:52:44'),
            array('id' => '30','uts_id' => '3','bank_soal_pembahasan_id' => '193','created_at' => '2022-10-04 08:52:47','updated_at' => '2022-10-04 08:52:47'),
            array('id' => '31','uts_id' => '3','bank_soal_pembahasan_id' => '195','created_at' => '2022-10-04 08:52:52','updated_at' => '2022-10-04 08:52:52'),
            array('id' => '32','uts_id' => '3','bank_soal_pembahasan_id' => '198','created_at' => '2022-10-04 08:52:57','updated_at' => '2022-10-04 08:52:57'),
            array('id' => '33','uts_id' => '3','bank_soal_pembahasan_id' => '203','created_at' => '2022-10-04 08:53:01','updated_at' => '2022-10-04 08:53:01'),
            array('id' => '34','uts_id' => '3','bank_soal_pembahasan_id' => '209','created_at' => '2022-10-04 08:53:06','updated_at' => '2022-10-04 08:53:06'),
            array('id' => '35','uts_id' => '3','bank_soal_pembahasan_id' => '212','created_at' => '2022-10-04 08:53:11','updated_at' => '2022-10-04 08:53:11'),
            array('id' => '36','uts_id' => '3','bank_soal_pembahasan_id' => '215','created_at' => '2022-10-04 08:53:15','updated_at' => '2022-10-04 08:53:15'),
            array('id' => '37','uts_id' => '3','bank_soal_pembahasan_id' => '220','created_at' => '2022-10-04 08:53:19','updated_at' => '2022-10-04 08:53:19'),
            array('id' => '38','uts_id' => '3','bank_soal_pembahasan_id' => '225','created_at' => '2022-10-04 08:53:22','updated_at' => '2022-10-04 08:53:22'),
            array('id' => '39','uts_id' => '3','bank_soal_pembahasan_id' => '226','created_at' => '2022-10-04 08:53:27','updated_at' => '2022-10-04 08:53:27'),
            array('id' => '40','uts_id' => '3','bank_soal_pembahasan_id' => '228','created_at' => '2022-10-04 08:53:29','updated_at' => '2022-10-04 08:53:29'),
            array('id' => '41','uts_id' => '4','bank_soal_pembahasan_id' => '247','created_at' => '2024-10-07 07:26:37','updated_at' => '2024-10-07 07:26:37'),
            array('id' => '42','uts_id' => '4','bank_soal_pembahasan_id' => '244','created_at' => '2024-10-07 07:26:46','updated_at' => '2024-10-07 07:26:46'),
            array('id' => '43','uts_id' => '4','bank_soal_pembahasan_id' => '250','created_at' => '2024-10-07 07:26:54','updated_at' => '2024-10-07 07:26:54'),
            array('id' => '44','uts_id' => '4','bank_soal_pembahasan_id' => '251','created_at' => '2024-10-07 07:27:03','updated_at' => '2024-10-07 07:27:03'),
            array('id' => '45','uts_id' => '4','bank_soal_pembahasan_id' => '248','created_at' => '2024-10-07 07:27:17','updated_at' => '2024-10-07 07:27:17'),
            array('id' => '46','uts_id' => '4','bank_soal_pembahasan_id' => '245','created_at' => '2024-10-07 07:27:33','updated_at' => '2024-10-07 07:27:33'),
            array('id' => '47','uts_id' => '4','bank_soal_pembahasan_id' => '241','created_at' => '2024-10-07 07:27:46','updated_at' => '2024-10-07 07:27:46'),
            array('id' => '48','uts_id' => '4','bank_soal_pembahasan_id' => '240','created_at' => '2024-10-07 07:27:58','updated_at' => '2024-10-07 07:27:58'),
            array('id' => '49','uts_id' => '4','bank_soal_pembahasan_id' => '234','created_at' => '2024-10-07 07:28:18','updated_at' => '2024-10-07 07:28:18'),
            array('id' => '50','uts_id' => '4','bank_soal_pembahasan_id' => '246','created_at' => '2024-10-07 07:29:18','updated_at' => '2024-10-07 07:29:18'),
            array('id' => '53','uts_id' => '4','bank_soal_pembahasan_id' => '252','created_at' => '2024-10-07 07:43:34','updated_at' => '2024-10-07 07:43:34'),
            array('id' => '54','uts_id' => '4','bank_soal_pembahasan_id' => '253','created_at' => '2024-10-07 07:52:00','updated_at' => '2024-10-07 07:52:00'),
            array('id' => '55','uts_id' => '4','bank_soal_pembahasan_id' => '254','created_at' => '2024-10-07 07:53:41','updated_at' => '2024-10-07 07:53:41'),
            array('id' => '56','uts_id' => '4','bank_soal_pembahasan_id' => '255','created_at' => '2024-10-07 08:04:53','updated_at' => '2024-10-07 08:04:53'),
            array('id' => '57','uts_id' => '4','bank_soal_pembahasan_id' => '256','created_at' => '2024-10-07 08:10:53','updated_at' => '2024-10-07 08:10:53'),
            array('id' => '58','uts_id' => '4','bank_soal_pembahasan_id' => '257','created_at' => '2024-10-07 08:25:02','updated_at' => '2024-10-07 08:25:02'),
            array('id' => '59','uts_id' => '4','bank_soal_pembahasan_id' => '243','created_at' => '2024-10-07 08:25:57','updated_at' => '2024-10-07 08:25:57'),
            array('id' => '62','uts_id' => '4','bank_soal_pembahasan_id' => '238','created_at' => '2024-10-07 12:21:01','updated_at' => '2024-10-07 12:21:01'),
            array('id' => '64','uts_id' => '4','bank_soal_pembahasan_id' => '235','created_at' => '2024-10-07 12:42:32','updated_at' => '2024-10-07 12:42:32'),
            array('id' => '65','uts_id' => '4','bank_soal_pembahasan_id' => '236','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05'),
            array('id' => '66','uts_id' => '5','bank_soal_pembahasan_id' => '159','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05'),
            array('id' => '67','uts_id' => '5','bank_soal_pembahasan_id' => '160','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05'),
            array('id' => '68','uts_id' => '5','bank_soal_pembahasan_id' => '167','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05'),
            array('id' => '69','uts_id' => '5','bank_soal_pembahasan_id' => '168','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05'),
            array('id' => '70','uts_id' => '5','bank_soal_pembahasan_id' => '172','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05'),
            array('id' => '71','uts_id' => '5','bank_soal_pembahasan_id' => '176','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05'),
            array('id' => '72','uts_id' => '5','bank_soal_pembahasan_id' => '180','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05'),
            array('id' => '73','uts_id' => '5','bank_soal_pembahasan_id' => '181','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05'),
            array('id' => '74','uts_id' => '5','bank_soal_pembahasan_id' => '186','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05'),
            array('id' => '75','uts_id' => '5','bank_soal_pembahasan_id' => '193','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05'),
            array('id' => '76','uts_id' => '5','bank_soal_pembahasan_id' => '195','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05'),
            array('id' => '77','uts_id' => '5','bank_soal_pembahasan_id' => '198','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05'),
            array('id' => '78','uts_id' => '5','bank_soal_pembahasan_id' => '203','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05'),
            array('id' => '79','uts_id' => '5','bank_soal_pembahasan_id' => '209','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05'),
            array('id' => '80','uts_id' => '5','bank_soal_pembahasan_id' => '212','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05'),
            array('id' => '81','uts_id' => '5','bank_soal_pembahasan_id' => '215','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05'),
            array('id' => '82','uts_id' => '5','bank_soal_pembahasan_id' => '220','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05'),
            array('id' => '83','uts_id' => '5','bank_soal_pembahasan_id' => '225','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05'),
            array('id' => '84','uts_id' => '5','bank_soal_pembahasan_id' => '226','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05'),
            array('id' => '85','uts_id' => '5','bank_soal_pembahasan_id' => '228','created_at' => '2024-10-07 12:43:05','updated_at' => '2024-10-07 12:43:05')
        );

        foreach ($datas as $data) {
            DB::table('uts_soals')->insert($data);
        }
    }
}
