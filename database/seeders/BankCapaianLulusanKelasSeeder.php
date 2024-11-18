<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class   BankCapaianLulusanKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //course_cpls
        $data = [
            [8, 25, 7, '2022-08-20 11:20:23', '2022-08-20 11:20:23'],
            [9, 18, 7, '2022-08-20 11:20:39', '2022-08-20 11:20:39'],
            [10, 25, 8, '2022-08-26 03:18:05', '2022-08-26 03:18:05'],
            [11, 25, 9, '2022-08-26 03:18:12', '2022-08-26 03:18:12'],
            [12, 18, 8, '2022-08-26 03:18:57', '2022-08-26 03:18:57'],
            [13, 18, 9, '2022-08-26 03:19:02', '2022-08-26 03:19:02'],
            // [14, 30, 10, '2024-04-01 00:46:49', '2024-04-01 00:46:49'],
            // [15, 28, 10, '2024-04-01 00:47:44', '2024-04-01 00:47:44'],
            // [16, 28, 11, '2024-04-01 00:50:21', '2024-04-01 00:50:21'],
            [17, 25, 6, '2024-04-01 00:50:21', '2024-04-01 00:50:21'],
            [18, 31, 12, '2024-04-01 00:50:21', '2024-04-01 00:50:21'],
        ];

        foreach ($data as $item) {
            DB::table('bank_capaian_lulusan_kelas')->insert([
                'id' => $item[0],
                'bank_capaian_lulusan_id' => $item[2],
                'kelas_id' => $item[1],
                'created_at' => $item[3],
                'updated_at' => $item[4],
            ]);
        }
    }
}
