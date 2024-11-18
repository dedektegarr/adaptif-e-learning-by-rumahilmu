<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopikPembahasanKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //topics
        DB::table('topik_pembahasan_kelas')->insert([
            [
                'id' => 50,
                'kelas_id' => 25,
                'nama_topik' => 'Pengenalan Java dan Tipe Data',
                'cpmk' => '<p>Mahasiswa mampu menganalisis tipe data, menganalisis operator, memberikan rekomendasi penggunaan ekspresi dan operator untuk penyelesaian masalah dengan Java</p>',
                'topik_ke' => 1,
                'created_at' => '2022-08-01 02:37:27',
                'updated_at' => '2022-10-21 03:43:43',
            ],
            [
                'id' => 51,
                'kelas_id' => 18,
                'nama_topik' => 'Pengenalan Java, Tipe Data',
                'cpmk' => '<p>&nbsp;Mahasiswa mampu menganalisis tipe data, menganalisis operator, memberikan rekomendasi penggunaan ekspresi dan operator untuk penyelesaian masalah dengan Java</p>',
                'topik_ke' => 1,
                'created_at' => '2022-08-09 03:21:04',
                'updated_at' => '2022-09-07 04:01:57',
            ],
            [
                'id' => 54,
                'kelas_id' => 25,
                'nama_topik' => 'Operator',
                'cpmk' => '<p>&nbsp;Mahasiswa mampu menganalisis tipe data, menganalisis operator, memberikan rekomendasi penggunaan ekspresi dan operator untuk penyelesaian masalah dengan Java</p>',
                'topik_ke' => 2,
                'created_at' => '2022-08-27 14:09:53',
                'updated_at' => '2022-08-27 14:09:53',
            ],
            [
                'id' => 55,
                'kelas_id' => 18,
                'nama_topik' => 'Operator',
                'cpmk' => '<p>&nbsp;Mahasiswa mampu menganalisis tipe data, menganalisis operator, memberikan rekomendasi penggunaan ekspresi dan operator untuk penyelesaian masalah dengan Java</p>',
                'topik_ke' => 2,
                'created_at' => '2022-08-27 14:37:14',
                'updated_at' => '2022-08-27 14:37:14',
            ],
            [
                'id' => 56,
                'kelas_id' => 25,
                'nama_topik' => 'Kelas, Objek, Method',
                'cpmk' => '<p>Mahasiswa mampu menganalisis mekanisme pemanggilan kelas, objek, dan method, mengevaluasi deklarasi kelas dan method pada Java, menyusun kembali kelas dan method, merancang kelas dan objek sederhana berdasarkan permasalahan yang diberikan.</p>',
                'topik_ke' => 3,
                'created_at' => '2022-09-07 04:17:59',
                'updated_at' => '2022-09-07 04:17:59',
            ],
            [
                'id' => 57,
                'kelas_id' => 18,
                'nama_topik' => 'Kelas, Objek, Method',
                'cpmk' => '<p>Mahasiswa mampu menganalisis mekanisme pemanggilan kelas, objek, dan method, mengevaluasi deklarasi kelas dan method pada Java, menyusun kembali kelas dan method, merancang kelas dan objek sederhana berdasarkan permasalahan yang diberikan.</p>',
                'topik_ke' => 3,
                'created_at' => '2022-09-07 04:19:23',
                'updated_at' => '2022-09-07 04:19:23',
            ],
            [
                'id' => 59,
                'kelas_id' => 18,
                'nama_topik' => 'Percabangan: IF dan SWITCH',
                'cpmk' => '<p>Mahasiswa mampu menganalisis beragam pernyataan percabangan dan perulangan (if, switch, for, while), merancang operasi iterasi control berdasarkan permasalahan, mengevaluasi operasi kontrol iterasi yang tepat, mengimplementasikan percabangan dan perula',
                'topik_ke' => 4,
                'created_at' => '2022-09-17 05:48:26',
                'updated_at' => '2022-09-17 05:51:09',
            ],
            [
                'id' => 60,
                'kelas_id' => 25,
                'nama_topik' => 'Percabangan: IF dan SWITCH',
                'cpmk' => '<p>Mahasiswa mampu menganalisis beragam pernyataan percabangan dan perulangan (if, switch, for, while) merancang operasi iterasi control berdasarkan permasalahan, mengevaluasi operasi kontrol iterasi yang tepat, mengimplementasikan percabangan dan perulan',
                'topik_ke' => 4,
                'created_at' => '2022-09-17 05:48:55',
                'updated_at' => '2022-09-17 05:51:20',
            ],
            [
                'id' => 61,
                'kelas_id' => 18,
                'nama_topik' => 'Perulangan: FOR dan WHILE',
                'cpmk' => '<p>Mahasiswa mampu menganalisis beragam pernyataan percabangan dan perulangan (if, switch, for, while) merancang operasi iterasi control berdasarkan permasalahan, mengevaluasi operasi kontrol iterasi yang tepat, mengimplementasikan percabangan dan perulan',
                'topik_ke' => 5,
                'created_at' => '2022-09-17 05:52:34',
                'updated_at' => '2022-09-17 05:52:34',
            ],
            [
                'id' => 62,
                'kelas_id' => 25,
                'nama_topik' => 'Perulangan: FOR dan WHILE',
                'cpmk' => '<p>Mahasiswa mampu menganalisis beragam pernyataan percabangan dan perulangan (if, switch, for, while) merancang operasi iterasi control berdasarkan permasalahan, mengevaluasi operasi kontrol iterasi yang tepat, mengimplementasikan percabangan dan perulan',
                'topik_ke' => 5,
                'created_at' => '2022-09-17 05:53:07',
                'updated_at' => '2022-09-17 05:53:07',
            ],
            [
                'id' => 63,
                'kelas_id' => 28,
                'nama_topik' => 'Facts or opinion',
                'cpmk' => '<p>Mahasiswa mampu memahami, mengidentifikasi, dan menuliskan kembali kalimat fakta dan opini</p>',
                'topik_ke'  =>  1,
                'created_at' => '2024-04-01 00:22:24',
                'updated_at' => '2024-04-01 00:33:12',
            ],
            [
                'id' => 64,
                'kelas_id' => 31,
                'nama_topik' => 'Pengenalan Java dan Tipe Data',
                'cpmk' => '<p><span dir="ltr" lang="IN" style="font-size:11.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Mampu memahami berbagai metodologi pengembangan sistem</span></span></p>',
                'topik_ke' => 1,
                'created_at' => '2024-08-16 13:03:14',
                'updated_at' => '2024-08-16 13:03:59',
            ],
            [
                'id' => 65,
                'kelas_id' => 31,
                'nama_topik' => 'Operator',
                'cpmk' => '<p><span dir="ltr" lang="IN" style="font-size:11.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Mampu memahami berbagai metodologi pengembangan sistem</span></span></p>',
                'topik_ke' => 2,
                'created_at' => '2024-08-16 13:05:15',
                'updated_at' => '2024-08-16 13:05:15',
            ],
            [
                'id' => 66,
                'kelas_id' => 31,
                'nama_topik' => 'Kelas, Objek, Method',
                'cpmk' => '<p><span dir="ltr" lang="IN" style="font-size:11.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Mampu memahami berbagai metodologi pengembangan sistem</span></span></p>',
                'topik_ke' => 3,
                'created_at' => '2024-08-16 13:14:20',
                'updated_at' => '2024-08-16 13:14:20',
            ],
            [
                'id' => 67,
                'kelas_id' => 31,
                'nama_topik' => 'Percabangan: IF dan SWITCH',
                'cpmk' => '<p><span dir="ltr" lang="IN" style="font-size:11.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Mampu memahami berbagai metodologi pengembangan sistem</span></span></p>',
                'topik_ke' => 4,
                'created_at' => '2024-08-16 13:14:58',
                'updated_at' => '2024-08-16 13:14:58',
            ],
            [
                'id' => 68,
                'kelas_id' => 31,
                'nama_topik' => 'Perulangan: FOR dan WHILE',
                'cpmk' => '<p><span dir="ltr" lang="IN" style="font-size:11.0pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Mampu memahami berbagai metodologi pengembangan sistem</span></span></p>',
                'topik_ke' => 5,
                'created_at' => '2024-08-16 13:15:23',
                'updated_at' => '2024-08-16 13:15:23',
            ],
            [
                'id' => 69,
                'kelas_id' => 32,
                'nama_topik' => 'Himpunan dan Fungsi Keanggotaan Fuzzy',
                'cpmk' => '<p>Mampu memahami dan menjelaskan konsep logika <em>fuzzy </em>serta langkah kerja dari metode <em>fuzzy </em>[S8,S9, P2];</p><p>Mampu menganalisis permasalahan dan mengaplikasikan metode <em>fuzzy </em>yang sesuai untuk studi kasus tertentu [S8, P7,',
                'topik_ke' => 1,
                'created_at' => '2024-08-25 16:37:00',
                'updated_at' => '2024-08-25 16:37:00',
            ],
            [
                'id' => 70,
                'kelas_id' => 32,
                'nama_topik' => 'Fuzzy Inference System',
                'cpmk' => '<p>Mahasiswa mampu mendesain Fuzzy Inference System</p>',
                'topik_ke' => 2,
                'created_at' => '2024-09-09 11:40:21',
                'updated_at' => '2024-09-09 11:40:21',
            ],
        ]);
    }
}
