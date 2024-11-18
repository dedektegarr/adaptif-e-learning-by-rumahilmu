<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndikatorPenilaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // indikator_penilaians
        $indikator_penilaians = array(
            array('id' => '26','rubrik_penilaian_id' => '30','nama_indikator' => 'Mahasiswa menyusun masalah, fakta, dan tujuan permasalahan dengan tepat.  Mahasiswa mendesain strategi penyelesaian dan solusi permasalahan dengan alur logika yang jelas.','keterangan' => 'Kreasi','skor_indikator' => '3','created_at' => '2022-08-19 17:23:55','updated_at' => '2022-08-19 17:25:50'),
            array('id' => '27','rubrik_penilaian_id' => '30','nama_indikator' => 'Mahasiswa mengevaluasi sebagian masalah, fakta, dan seluruh tujuan permasalahan, Mahasiswa merekomendasikan strategi penyelesaian dan solusi permasalahan dengan alur logika yang jelas.','keterangan' => 'Evaluasi','skor_indikator' => '2','created_at' => '2022-08-19 17:24:18','updated_at' => '2022-08-19 17:25:59'),
            array('id' => '28','rubrik_penilaian_id' => '30','nama_indikator' => 'Mahasiswa menguraikan sebagian penyelesaian masalah, dan beberapa fakta. Mahasiswa menganalisis strategi penyelesaian dan solusi permasalahan dengan alur logika yang jelas.','keterangan' => 'Analisis','skor_indikator' => '1','created_at' => '2022-08-19 17:24:41','updated_at' => '2022-08-19 17:26:08'),
            array('id' => '29','rubrik_penilaian_id' => '31','nama_indikator' => 'Mahasiswa mengkonstruksi algoritma mengikuti prinsip pemprograman.  Mahasiswa mengkode program yang mempunyai semua kelengkapan elemen kode yang dibutuhkan dengan tepat dan hierarki','keterangan' => 'Kreasi','skor_indikator' => '3','created_at' => '2022-08-19 17:25:04','updated_at' => '2022-08-19 17:26:30'),
            array('id' => '30','rubrik_penilaian_id' => '31','nama_indikator' => 'Mahasiswa merekomendasikan solusi dengan sebagian prinsip pemprograman,  Mahasiswa mengkode dengan sebagian besar elemen tersusun dalam urutan yang tepat dan hierarki.','keterangan' => 'Evaluasi','skor_indikator' => '2','created_at' => '2022-08-19 17:25:39','updated_at' => '2022-08-19 17:26:39'),
            array('id' => '31','rubrik_penilaian_id' => '31','nama_indikator' => 'Mahasiswa merincikan solusi dengan beberapa prinsip pemprograman.  Mahasiswa mengkode hanya beberapa elemen tersusun dalam urutan yang tepat, dan kurang hierarki.','keterangan' => 'Analisis','skor_indikator' => '1','created_at' => '2022-08-19 17:29:51','updated_at' => '2022-08-19 17:29:51'),
            array('id' => '32','rubrik_penilaian_id' => '32','nama_indikator' => 'Mahasiswa menyusun sintaks dan semantic dengan tepat, menyelesaikan masalah secara koheren, dan makna yang tepat dari tujuan permasalahan.','keterangan' => 'Kreasi','skor_indikator' => '3','created_at' => '2022-08-19 17:30:12','updated_at' => '2022-08-19 17:30:12'),
            array('id' => '33','rubrik_penilaian_id' => '32','nama_indikator' => 'Mahasiswa mengkombinasikan sebagian sintaks dan semantic dengan tepat. menyelesaikan masalah secara koheren, dan ada sedikit kesalahan namun tidak signifikan.','keterangan' => 'Evaluasi','skor_indikator' => '2','created_at' => '2022-08-19 17:30:29','updated_at' => '2022-08-19 17:30:29'),
            array('id' => '34','rubrik_penilaian_id' => '32','nama_indikator' => 'Mahasiswa memilih beberapa sintaks dan semantic dengan tepat. Namun, kurang koheren ada sedikit masalah pada semantic/ sintaks/ alur program.','keterangan' => 'Analisis','skor_indikator' => '1','created_at' => '2022-08-19 17:30:45','updated_at' => '2022-08-19 17:30:45'),
            array('id' => '35','rubrik_penilaian_id' => '33','nama_indikator' => 'Mahasiswa menyusun kode dan komentar dengan tepat, desain struktur program yang logis. Kesimpulan disusun dengan tepat, memenuhi kebutuhan kompleksitas secara efektif dan efisien. Mahasiswa mengkonstruksi rekomendasi untuk perbaikan solusi lebih baik.','keterangan' => 'Kreasi','skor_indikator' => '3','created_at' => '2022-08-19 17:33:48','updated_at' => '2022-08-19 17:33:48'),
            array('id' => '36','rubrik_penilaian_id' => '33','nama_indikator' => 'Mahasiswa menyusun sebagian kode dan sebagian komentar dengan tepat, desain struktur program yang logis. Mahasiswa menyimpulkan sebagian hasil solusi, ada kesalahan minor, namun program masih dapat berjalan dengan efektif.','keterangan' => 'Evaluasi','skor_indikator' => '2','created_at' => '2022-08-19 17:34:05','updated_at' => '2022-08-19 17:34:05'),
            array('id' => '37','rubrik_penilaian_id' => '33','nama_indikator' => 'Mahasiswa menguraikan sedikit kode dan sedikit komentar dengan tepat.  Mahasiswa menyimpulkan sebagian hasil solusi, algoritma benar, namun belum memenuhi kebutuhan kompleksitas.','keterangan' => 'Analisis','skor_indikator' => '1','created_at' => '2022-08-19 17:34:21','updated_at' => '2022-08-19 17:34:21'),
            array('id' => '38','rubrik_penilaian_id' => '34','nama_indikator' => 'Kelompok telah mengumpulkan data dan informasi, mengkombinasikan sumber yang relevan, dan menyusun kembali seluruh masalah sesuai dengan fakta','keterangan' => 'Kreasi','skor_indikator' => '3','created_at' => '2022-08-19 17:35:16','updated_at' => '2022-08-19 17:35:16'),
            array('id' => '39','rubrik_penilaian_id' => '34','nama_indikator' => 'Kelompok telah membandingkan data dan informasi yang diperoleh, menguraikan permasalahan.','keterangan' => 'Evaluasi','skor_indikator' => '2','created_at' => '2022-08-19 17:35:29','updated_at' => '2022-08-19 17:35:29'),
            array('id' => '40','rubrik_penilaian_id' => '34','nama_indikator' => 'Kelompok telah memerinci data dan informasi yang diperoleh, menganalisis permasalahan.','keterangan' => 'Analisis','skor_indikator' => '1','created_at' => '2022-08-19 17:35:44','updated_at' => '2022-08-19 17:35:44'),
            array('id' => '41','rubrik_penilaian_id' => '35','nama_indikator' => 'Kelompok telah dapat merangkaikan masalah dengan rancangan solusi, menyusun ide kompleks dari berbagai perspektif','keterangan' => 'Kreasi','skor_indikator' => '3','created_at' => '2022-08-19 17:36:04','updated_at' => '2022-08-19 17:36:04'),
            array('id' => '42','rubrik_penilaian_id' => '35','nama_indikator' => 'Kelompok mengevaluasi masalah utama dengan alternatif solusi, mempertimbangkan solusi','keterangan' => 'Evaluasi','skor_indikator' => '2','created_at' => '2022-08-19 17:36:22','updated_at' => '2022-08-19 17:36:42'),
            array('id' => '43','rubrik_penilaian_id' => '35','nama_indikator' => 'Kelompok menganalisis, sebagian masalah utama, menguraikan solusi masalah dengan cukup teliti, cermat, dan objektif.','keterangan' => 'Analisis','skor_indikator' => '1','created_at' => '2022-08-19 17:36:58','updated_at' => '2022-08-19 17:36:58'),
            array('id' => '44','rubrik_penilaian_id' => '36','nama_indikator' => 'Kelompok mendesain algoritma, mengkonstruksi kode dengan  mengikuti prinsip pemprograman dilengkapi penjelasan yang tepat.','keterangan' => 'Kreasi','skor_indikator' => '3','created_at' => '2022-08-19 17:37:12','updated_at' => '2022-08-19 17:37:12'),
            array('id' => '45','rubrik_penilaian_id' => '36','nama_indikator' => 'Kelompok merekomendasikan solusi dengan sebagian prinsip pemprograman, mengevaluasi susunan algoritma dengan desain kode dengan tepat.','keterangan' => 'Evaluasi','skor_indikator' => '2','created_at' => '2022-08-19 17:37:27','updated_at' => '2022-08-19 17:37:27'),
            array('id' => '46','rubrik_penilaian_id' => '36','nama_indikator' => 'Kelompok merincikan prinsip algoritma untuk menyelesaikan permasalahan, dan menguraikan solusi dengan penjelasan yang tepat.','keterangan' => 'Analisis','skor_indikator' => '1','created_at' => '2022-08-19 17:37:42','updated_at' => '2022-08-19 17:37:42'),
            array('id' => '47','rubrik_penilaian_id' => '37','nama_indikator' => 'Kelompok menyimpulkan masalah, kode, dan solusi luaran secara tepat.  Konstruksi mulai uraian jawaban, analisis, program, saran, sampai kesimpulan saling terkait.','keterangan' => 'Kreasi','skor_indikator' => '3','created_at' => '2022-08-19 17:38:13','updated_at' => '2022-08-19 17:38:13'),
            array('id' => '48','rubrik_penilaian_id' => '37','nama_indikator' => 'Kelompok mengevaluasi kesimpulan yang disusun mempunyai sebagian konsep yang tepat, Rekomendasi uraian jawaban analisis, program, saran, dan kesimpulan, sebagian saling terkait.','keterangan' => 'Evaluasi','skor_indikator' => '2','created_at' => '2022-08-19 17:38:29','updated_at' => '2022-08-19 17:38:29'),
            array('id' => '49','rubrik_penilaian_id' => '37','nama_indikator' => 'Kelompok merincikan kesimpulan yang disusun mempunyai cukup konsep yang benar, jelas, dan spesifik. Analisis uraian jawaban analisis, program, dan kesimpulan cukup saling terkait.','keterangan' => 'Analisis','skor_indikator' => '1','created_at' => '2022-08-19 17:38:43','updated_at' => '2022-08-19 17:38:43')
        );

        foreach ($indikator_penilaians as $indikator_penilaian) {
            DB::table('indikator_penilaians')->insert($indikator_penilaian);
        }
    }
}
