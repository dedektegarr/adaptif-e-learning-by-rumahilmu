<?php

namespace Database\Seeders;

use App\Models\BankPenilaianKelompok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankPenilaianKelompokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // assesment_sheet_questions
        $bankPenilaianKelompoks = array(
            array('id' => '1','pertanyaan' => 'Dia selalu hadir di pertemuan kelompok tepat waktu','created_at' => '2022-10-07 10:40:42','updated_at' => '2022-10-07 10:40:42'),
            array('id' => '2','pertanyaan' => 'Dia selalu membawa informasi relevan, sumber bacaan, dan solusi pemecahan masalah di setiap pertemuan kelompok','created_at' => '2022-10-07 10:40:48','updated_at' => '2022-10-07 10:40:48'),
            array('id' => '3','pertanyaan' => 'Dia aktif berbicara menyampaikan pendapat dan aktif menanggapi ketika mendengarkan pendapat','created_at' => '2022-10-07 10:40:55','updated_at' => '2022-10-07 10:40:55'),
            array('id' => '4','pertanyaan' => 'Dia berpartisipasi di kelompok dengan ikut menyusun tugas, dan memastikan setiap teman memiliki porsi kerja yang merata/ seimbang (tidak membebani teman mengerjakan porsi kerja Dia)','created_at' => '2022-10-07 10:41:02','updated_at' => '2022-10-07 10:41:02'),
            array('id' => '5','pertanyaan' => 'Dia aktif berinisiatif memberikan ide solusi pemecahan masalah','created_at' => '2022-10-07 10:41:10','updated_at' => '2022-10-07 10:41:10'),
            array('id' => '6','pertanyaan' => 'Dia aktif membantu teman dengan memberikan solusi dan mengarahkan teman untuk menjalankan tanggung jawabnya','created_at' => '2022-10-07 10:41:15','updated_at' => '2022-10-07 10:41:15'),
            array('id' => '7','pertanyaan' => 'Dia menebarkan sikap positif dan optimis untuk menyelesaikan tugas dan menghargai teman yang sudah berusaha','created_at' => '2022-10-07 10:41:21','updated_at' => '2022-10-07 10:41:21'),
            array('id' => '8','pertanyaan' => 'Dia bertanggung jawab menyelesaikan porsi tugas yang sudah dibagikan kepada Dia dan peduli dengan pencapaian tenggat waktu (deadline) pengumpulan tugas','created_at' => '2022-10-07 10:41:28','updated_at' => '2022-10-07 10:41:28'),
            array('id' => '9','pertanyaan' => 'tes','created_at' => '2024-03-19 14:58:33','updated_at' => '2024-03-19 14:58:33')
          );

        foreach ($bankPenilaianKelompoks as $bankPenilaianKelompok) {
            BankPenilaianKelompok::insert($bankPenilaianKelompok);
        }
    }
}
