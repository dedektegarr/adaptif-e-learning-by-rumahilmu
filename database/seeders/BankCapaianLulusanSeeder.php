<?php

namespace Database\Seeders;

use App\Models\BankCapaianLulusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankCapaianLulusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //capaian_lulusans
        $data = [
            [
                'id' => 6,
                'capaian_lulusan' => 'admin cpl',
                'keterangan' => '<p>menguji coba cpl</p>',
                'created_at' => '2022-08-16 05:43:07',
                'updated_at' => '2022-08-16 05:43:07',
            ],
            [
                'id' => 7,
                'capaian_lulusan' => 'Komputer dan Pemrograman',
                'keterangan' => '<p>Mahasiswa mampu menganalisis tipe data, memecahkan masalah operasi aritmetik, memberikan rekomendasi penggunaan ekspresi dan operator untuk penyelesaian masalah dengan Java</p>',
                'created_at' => '2022-08-20 11:20:12',
                'updated_at' => '2022-08-26 03:17:12',
            ],
            [
                'id' => 8,
                'capaian_lulusan' => 'Komputer dan Pemrograman',
                'keterangan' => '<p>Mahasiswa mampu menganalisis mekanisme pemanggilan kelas, objek, dan method, mengevaluasi deklarasi kelas dan method pada Java, menyusun kembali kelas dan method berdasarkan permasalahan yang diberikan, menganalisis struktur algoritma, flowchart, dan pseudocode pada Java, dan merancang algoritma sederhana berdasarkan permasalahan yang diberikan.</p>',
                'created_at' => '2022-08-26 03:17:31',
                'updated_at' => '2022-08-26 03:17:31',
            ],
            [
                'id' => 9,
                'capaian_lulusan' => 'Komputer dan Pemrograman',
                'keterangan' => '<p>Mahasiswa mampu menganalisis beragam pernyataan kondisi dan perulangan yaitu if, while, break, dan switch, merancang operasi iterasi kontrol berdasarkan permasalahan, mengevaluasi operasi kontrol iterasi yang tepat, mengembangkan implementasi pernyataan kondisi yang bersarang.</p>',
                'created_at' => '2022-08-26 03:17:36',
                'updated_at' => '2022-08-26 03:17:36',
            ],
            [
                'id' => 10,
                'capaian_lulusan' => 'Bahasa Inggris Teknik',
                'keterangan' => '<p>Mahasiswa mampu menguasai penulisan karya ilmiah bidang informatika dan sistem informasi dalam bahasa inggris</p>',
                'created_at' => '2024-04-01 00:46:09',
                'updated_at' => '2024-04-01 00:46:30',
            ],
            [
                'id' => 11,
                'capaian_lulusan' => 'Bahasa Inggris Teknik',
                'keterangan' => '<p>Mahasiswa mampu menganalisis suatu wacana (teks) dengan menyebutkan gagasan utamanya dan gagasan pendukungnya, dan mampu menulis laporan teknis (report writing) dengan mempergunakan Bahasa Inggris terutama yang menyangkut bidang sistem informasi dan&nbsp;&nbsp;mampu meyampaikan pendapat secara tulisan dan lisan untuk bidang yang sama.</p>',
                'created_at' => '2024-04-01 00:50:04',
                'updated_at' => '2024-04-01 00:50:04',
            ],
            [
                'id' => '12',
                'capaian_lulusan' => '2024 Komputer dan Pemrograman',
                'keterangan' => '<p>CPL-03: Mampu memahami dan menggunakan berbagai metodologi pengembangan sistem beserta alat pemodelan sistem dan menganalisa kebutuhan pengguna dalam membangun sistem informasi untuk mencapai tujuan organisasi<br />CPMK-10 :&nbsp;Mampu memahami berbagai metodologi pengembangan sistem<br />CPMK-11:&nbsp;Mampu menggunakan berbagai alat pengembangan sistem&nbsp;​​​​​​​</p>',
                'created_at' => '2024-08-19 16:27:58',
                'updated_at' => '2024-08-19 16:27:58',
            ]
        ];

        foreach ($data as $item) {
            BankCapaianLulusan::create($item);
        }
    }
}
