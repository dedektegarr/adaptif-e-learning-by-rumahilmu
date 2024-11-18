<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // courses
        $courses = [
            [
                'id' => 18,
                'pengampu_id' => 7,
                'nama_kelas' => 'Bahasa Pemrograman',
                'jenis_kelas'   =>  'adaptif',
                'kode_kelas' => 'SI 1103',
                'waktu_mulai' => '2022-08-01',
                'waktu_selesai' => '2022-12-30',
                'tahun' => '2022',
                'semester' => '1',
                'jumlah_topik' => 7,
                'url_latihan' => null,
                'thumbnail' =>  'thumbnails/bahasapemrograman2022.png',
                'created_at' => '2022-06-23 06:59:04',
                'updated_at' => '2024-04-01 00:32:01',
            ],
            [
                'id' => 25,
                'pengampu_id' => 7,
                'nama_kelas' => 'Komputer dan Pemrograman',
                'jenis_kelas'   =>  'adaptif',
                'kode_kelas' => 'MKU',
                'waktu_mulai' => '2022-07-19',
                'waktu_selesai' => '2022-12-30',
                'tahun' => '2022',
                'semester' => '1',
                'jumlah_topik' => 8,
                'url_latihan' => null,
                'thumbnail' =>  'thumbnails/komputerdanpemrograman2022.png',
                'created_at' => '2022-07-19 01:12:20',
                'updated_at' => '2024-04-01 00:31:59',
            ],
            [
                'id' => 31,
                'pengampu_id' => 7,
                'nama_kelas' => '2024 Komputer dan Pemrograman',
                'jenis_kelas'   =>  'adaptif',
                'kode_kelas' => 'MWU-106    ',
                'waktu_mulai' => '2024-08-12',
                'waktu_selesai' => '2024-12-31',
                'tahun' => '2024',
                'semester' => '1',
                'jumlah_topik' => 5,
                'url_latihan' => null,
                'thumbnail' =>  'thumbnails/komputerdanpemrograman2024.png',
                'created_at' => '2024-08-16 00:18:59',
                'updated_at' => '2024-08-16 00:18:59',
            ],
            [
                'id' => 32,
                'pengampu_id' => 7,
                'nama_kelas' => 'Logika Fuzzy',
                'jenis_kelas'   =>  'umum',
                'kode_kelas' => 'IKC-4152',
                'waktu_mulai' => '2024-08-19',
                'waktu_selesai' => '2024-10-21',
                'tahun' => '2024',
                'semester' => '5',
                'jumlah_topik' => 3,
                'url_latihan' => null,
                'thumbnail' =>  'thumbnails/logikafuzzy2024.png',
                'created_at' => '2024-08-25 14:20:33',
                'updated_at' => '2024-08-25 16:50:30    ',
            ]
        ];

        foreach ($courses as $course) {
            Kelas::create($course);
        }
    }
}
