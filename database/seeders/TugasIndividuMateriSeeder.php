<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TugasIndividuMateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // SELECT id, pageId as materi_id, quizCode as tugas, quizCodeFile as file_tugas, timeBegin as waktu_mulai, timeEnd as waktu_selesai, statusCode as status_upload, created_at, updated_at FROM `codes`

        $datas = array(
            array('id' => '10','materi_id' => '77','tugas' => '<p>1. Kerjakan soal latihan dari nomor 1 sampai 4. Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-7762fb7451b12f5.docx','waktu_mulai' => '2022-08-16','waktu_selesai' => '2022-08-31','status_upload' => '0','created_at' => '2022-08-16 17:41:21','updated_at' => '2022-08-29 14:03:16'),
            array('id' => '11','materi_id' => '74','tugas' => '<p>1. Kerjakan soal latihan dari nomor 1 sampai 4. Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-7462fb7534353ae.docx','waktu_mulai' => '2022-08-16','waktu_selesai' => '2022-08-31','status_upload' => '0','created_at' => '2022-08-16 17:45:08','updated_at' => '2022-08-29 14:03:10'),
            array('id' => '12','materi_id' => '71','tugas' => '<p>1. Kerjakan soal latihan dari nomor 1 sampai 4. Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-7162fb755ddcad5.docx','waktu_mulai' => '2022-08-16','waktu_selesai' => '2022-09-02','status_upload' => '0','created_at' => '2022-08-16 17:45:49','updated_at' => '2022-08-30 08:50:24'),
            array('id' => '14','materi_id' => '73','tugas' => '<p>1. Kerjakan soal latihan dari nomor 1 sampai 4. Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-p1-kerjakan-soal-latihan-dari-nomor-1-sampai-4-susun-hasil-latihan-dengan-mengikuti-template-laporan-tugas-individu-yang-sudah-disediakanp-73630edae154ff0.docx','waktu_mulai' => '2022-08-16','waktu_selesai' => '2022-09-03','status_upload' => '0','created_at' => '2022-08-16 17:46:29','updated_at' => '2022-09-02 08:13:53'),
            array('id' => '15','materi_id' => '75','tugas' => '<p>1. Kerjakan soal latihan dari nomor 1 sampai 4. Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-7562fb761e29c00.docx','waktu_mulai' => '2022-08-16','waktu_selesai' => '2022-08-31','status_upload' => '1','created_at' => '2022-08-16 17:49:02','updated_at' => '2024-09-05 08:39:26'),
            array('id' => '16','materi_id' => '76','tugas' => '<p>1. Kerjakan soal latihan dari nomor 1 sampai 4. Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-p1-kerjakan-soal-latihan-dari-nomor-1-sampai-4-susun-hasil-latihan-dengan-mengikuti-template-laporan-tugas-individu-yang-sudah-disediakanp-76630edaa17ea3b.docx','waktu_mulai' => '2022-08-16','waktu_selesai' => '2022-09-03','status_upload' => '0','created_at' => '2022-08-16 18:01:36','updated_at' => '2022-09-02 08:14:11'),
            array('id' => '17','materi_id' => '74','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-pmateri-pengayaan-ini-bersifat-tidak-wajib-dapat-dikerjakan-apabila-anda-sudah-menyelesaikan-materi-utamabr-anda-dapat-mengungah-hasil-latihan-dari-materi-pengayaan-pada-bagian-inip-7462fdda8ed9a1a.docx','waktu_mulai' => '2022-08-16','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-08-18 13:19:19','updated_at' => '2022-10-07 12:14:04'),
            array('id' => '18','materi_id' => '75','tugas' => '<h2><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong></h2>

          <p>Materi Pengayaan ini bersifat <strong>TIDAK WAJIB</strong>, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-7562fdda9aea846.docx','waktu_mulai' => '2022-08-16','waktu_selesai' => '2022-10-17','status_upload' => '1','created_at' => '2022-08-18 13:22:18','updated_at' => '2024-09-05 08:39:31'),
            array('id' => '19','materi_id' => '77','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-7762fddb3c01cb3.docx','waktu_mulai' => '2022-08-16','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-08-18 13:25:00','updated_at' => '2022-10-07 12:13:58'),
            array('id' => '20','materi_id' => '71','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-7162fddb7346b00.docx','waktu_mulai' => '2022-08-15','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-08-18 13:25:55','updated_at' => '2022-10-07 12:17:14'),
            array('id' => '21','materi_id' => '73','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-7362fddb91076a3.docx','waktu_mulai' => '2022-08-16','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-08-18 13:26:25','updated_at' => '2022-10-07 12:17:20'),
            array('id' => '22','materi_id' => '76','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-7662fddbb010000.docx','waktu_mulai' => '2022-08-16','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-08-18 13:26:56','updated_at' => '2022-10-07 12:17:30'),
            array('id' => '23','materi_id' => '81','tugas' => '<p>Kerjakan seluruh soal latihan dari nomor 1 sampai 7.</p>

          <p>Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-8163071f7369c4a.docx','waktu_mulai' => '2022-08-28','waktu_selesai' => '2022-09-14','status_upload' => '0','created_at' => '2022-08-25 14:06:27','updated_at' => '2022-10-07 12:20:28'),
            array('id' => '24','materi_id' => '83','tugas' => '<p>Kerjakan seluruh soal latihan dari nomor 1 sampai 7.</p>

          <p>Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-8363071f90a2948.docx','waktu_mulai' => '2022-08-28','waktu_selesai' => '2022-09-09','status_upload' => '0','created_at' => '2022-08-25 14:06:56','updated_at' => '2022-09-07 10:53:03'),
            array('id' => '25','materi_id' => '85','tugas' => '<p>Kerjakan seluruh soal latihan dari nomor 1 sampai 7.</p>

          <p>Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-8563071fa2bed1b.docx','waktu_mulai' => '2022-08-28','waktu_selesai' => '2022-09-09','status_upload' => '0','created_at' => '2022-08-25 14:07:14','updated_at' => '2022-09-07 10:53:22'),
            array('id' => '26','materi_id' => '82','tugas' => '<p>Kerjakan seluruh soal latihan dari nomor 1 sampai 7.</p>

          <p>Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-pkerjakan-seluruh-soal-latihan-dari-nomor-1-sampai-7p-psusun-hasil-latihan-dengan-mengikuti-template-laporan-tugas-individu-yang-sudah-disediakanp-82630ebf9186238.docx','waktu_mulai' => '2022-08-28','waktu_selesai' => '2022-09-09','status_upload' => '0','created_at' => '2022-08-25 14:07:33','updated_at' => '2022-08-31 08:55:29'),
            array('id' => '27','materi_id' => '84','tugas' => '<p>Kerjakan seluruh soal latihan dari nomor 1 sampai 7.</p>

          <p>Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-pkerjakan-seluruh-soal-latihan-dari-nomor-1-sampai-7p-psusun-hasil-latihan-dengan-mengikuti-template-laporan-tugas-individu-yang-sudah-disediakanp-84630ebf887d7ff.docx','waktu_mulai' => '2022-08-28','waktu_selesai' => '2022-09-09','status_upload' => '0','created_at' => '2022-08-25 14:07:51','updated_at' => '2022-08-31 08:55:20'),
            array('id' => '28','materi_id' => '86','tugas' => '<p>Kerjakan seluruh soal latihan dari nomor 1 sampai 7.</p>

          <p>Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-pkerjakan-seluruh-soal-latihan-dari-nomor-1-sampai-7p-psusun-hasil-latihan-dengan-mengikuti-template-laporan-tugas-individu-yang-sudah-disediakanp-86630ebfcd97b09.docx','waktu_mulai' => '2022-08-28','waktu_selesai' => '2022-09-09','status_upload' => '0','created_at' => '2022-08-25 14:08:11','updated_at' => '2022-08-31 08:56:29'),
            array('id' => '29','materi_id' => '84','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN<span style="color:#c0392b"> (TIDAK WAJIB)</span></strong></p>

          <p>Materi Pengayaan ini bersifat tidak wajib.</p>

          <p>Boleh dikerjakan apabila Anda sudah menyelesaikan Latihan di Materi Utama.\\</p>

          <p>Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-846307205a9fae0.docx','waktu_mulai' => '2022-08-28','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-08-25 14:10:18','updated_at' => '2022-10-07 12:14:44'),
            array('id' => '30','materi_id' => '81','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-816307211a5957d.docx','waktu_mulai' => '2022-08-28','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-08-25 14:13:30','updated_at' => '2022-10-07 12:17:35'),
            array('id' => '31','materi_id' => '83','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-836307212e8f1c5.docx','waktu_mulai' => '2022-08-28','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-08-25 14:13:50','updated_at' => '2022-10-07 12:17:40'),
            array('id' => '32','materi_id' => '85','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-856307213f781c6.docx','waktu_mulai' => '2022-08-28','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-08-25 14:14:07','updated_at' => '2022-10-07 12:17:46'),
            array('id' => '33','materi_id' => '82','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-8263072151776a9.docx','waktu_mulai' => '2022-08-28','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-08-25 14:14:25','updated_at' => '2022-10-07 12:14:14'),
            array('id' => '34','materi_id' => '86','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-8663072172a2ebf.docx','waktu_mulai' => '2022-08-28','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-08-25 14:14:58','updated_at' => '2022-10-07 12:14:50'),
            array('id' => '35','materi_id' => '88','tugas' => '<p>Kerjakan seluruh soal latihan dari nomor 1 sampai 4.</p>

          <p>Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-88631b563b66f2e.docx','waktu_mulai' => '2022-09-11','waktu_selesai' => '2022-09-20','status_upload' => '0','created_at' => '2022-09-09 22:05:31','updated_at' => '2022-09-20 08:14:40'),
            array('id' => '36','materi_id' => '90','tugas' => '<p>Kerjakan seluruh soal latihan dari nomor 1 sampai 4.</p>

          <p>Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-90631b5674dec06.docx','waktu_mulai' => '2022-09-11','waktu_selesai' => '2022-09-17','status_upload' => '0','created_at' => '2022-09-09 22:06:28','updated_at' => '2022-09-17 12:26:20'),
            array('id' => '37','materi_id' => '92','tugas' => '<p>Kerjakan seluruh soal latihan dari nomor 1 sampai 4.</p>

          <p>Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-92631b569dcfa4e.docx','waktu_mulai' => '2022-09-11','waktu_selesai' => '2022-09-17','status_upload' => '0','created_at' => '2022-09-09 22:07:09','updated_at' => '2022-09-17 12:26:58'),
            array('id' => '38','materi_id' => '91','tugas' => '<p>Kerjakan seluruh soal latihan dari nomor 1 sampai 4.</p>

          <p>Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-91631b56f782803.docx','waktu_mulai' => '2022-09-11','waktu_selesai' => '2022-09-17','status_upload' => '0','created_at' => '2022-09-09 22:08:39','updated_at' => '2022-09-17 12:22:11'),
            array('id' => '39','materi_id' => '89','tugas' => '<p>Kerjakan seluruh soal latihan dari nomor 1 sampai 4.</p>

          <p>Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-89631b57108beb5.docx','waktu_mulai' => '2022-09-11','waktu_selesai' => '2022-09-17','status_upload' => '0','created_at' => '2022-09-09 22:09:04','updated_at' => '2022-09-17 12:21:16'),
            array('id' => '40','materi_id' => '87','tugas' => '<p>Kerjakan seluruh soal latihan dari nomor 1 sampai 4.</p>

          <p>Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-87631b57248e861.docx','waktu_mulai' => '2022-09-17','waktu_selesai' => '2022-09-17','status_upload' => '0','created_at' => '2022-09-09 22:09:24','updated_at' => '2022-09-17 12:20:27'),
            array('id' => '41','materi_id' => '87','tugas' => '<h2><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong></h2>

          <p>Materi Pengayaan ini bersifat <strong>TIDAK WAJIB</strong>, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-87631d9e26841f7.docx','waktu_mulai' => '2022-09-11','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-09-11 15:36:54','updated_at' => '2022-10-07 12:14:57'),
            array('id' => '42','materi_id' => '89','tugas' => '<h2><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong></h2>

          <p>Materi Pengayaan ini bersifat <strong>TIDAK WAJIB</strong>, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-89631d9e44b4cb8.docx','waktu_mulai' => '2022-09-11','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-09-11 15:37:24','updated_at' => '2022-10-07 12:16:03'),
            array('id' => '43','materi_id' => '91','tugas' => '<h2><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong></h2>

          <p>Materi Pengayaan ini bersifat <strong>TIDAK WAJIB</strong>, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-91631d9e62a0a70.docx','waktu_mulai' => '2022-09-11','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-09-11 15:37:54','updated_at' => '2022-10-07 12:16:08'),
            array('id' => '44','materi_id' => '88','tugas' => '<h2><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong></h2>

          <p>Materi Pengayaan ini bersifat <strong>TIDAK WAJIB</strong>, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-88632558dc34e6e.docx','waktu_mulai' => '2022-09-11','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-09-17 12:19:24','updated_at' => '2022-10-07 12:17:51'),
            array('id' => '45','materi_id' => '90','tugas' => '<h2><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong></h2>

          <p>Materi Pengayaan ini bersifat <strong>TIDAK WAJIB</strong>, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-9063255a98336f8.docx','waktu_mulai' => '2022-09-11','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-09-17 12:26:48','updated_at' => '2022-10-07 12:17:55'),
            array('id' => '46','materi_id' => '92','tugas' => '<h2><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong></h2>

          <p>Materi Pengayaan ini bersifat <strong>TIDAK WAJIB</strong>, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-9263255ac67619f.docx','waktu_mulai' => '2022-09-11','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-09-17 12:27:34','updated_at' => '2022-10-07 12:18:00'),
            array('id' => '47','materi_id' => '94','tugas' => '<p>Kerjakan soal latihan dari nomor 1 sampai 2.<br />
          Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-946325ea9a4c083.docx','waktu_mulai' => '2022-09-18','waktu_selesai' => '2022-09-23','status_upload' => '0','created_at' => '2022-09-17 22:41:14','updated_at' => '2022-10-04 09:52:14'),
            array('id' => '48','materi_id' => '94','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-946325eb06bc3ec.docx','waktu_mulai' => '2022-09-18','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-09-17 22:43:02','updated_at' => '2022-10-07 12:13:30'),
            array('id' => '49','materi_id' => '93','tugas' => '<p>Kerjakan soal latihan dari nomor 1 sampai 2.<br />
          Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-936325eb2fe76df.docx','waktu_mulai' => '2022-09-18','waktu_selesai' => '2022-09-24','status_upload' => '0','created_at' => '2022-09-17 22:43:43','updated_at' => '2022-09-24 10:27:30'),
            array('id' => '50','materi_id' => '93','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-936325eb668986d.docx','waktu_mulai' => '2022-09-18','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-09-17 22:44:38','updated_at' => '2022-10-07 12:16:28'),
            array('id' => '51','materi_id' => '96','tugas' => '<p>Kerjakan soal latihan dari nomor 1 sampai 2.<br />
          Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-966325eba2a8f85.docx','waktu_mulai' => '2022-09-18','waktu_selesai' => '2022-09-23','status_upload' => '0','created_at' => '2022-09-17 22:45:38','updated_at' => '2022-10-04 10:02:53'),
            array('id' => '52','materi_id' => '96','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-966325ebc2176ad.docx','waktu_mulai' => '2022-09-18','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-09-17 22:46:10','updated_at' => '2022-10-07 12:16:33'),
            array('id' => '54','materi_id' => '95','tugas' => '<p>Kerjakan soal latihan dari nomor 1 sampai 2.<br />
          Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-956325ecc76a632.docx','waktu_mulai' => '2022-09-18','waktu_selesai' => '2022-09-23','status_upload' => '0','created_at' => '2022-09-17 22:50:31','updated_at' => '2022-09-17 22:50:31'),
            array('id' => '55','materi_id' => '95','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-956325ecf28761a.docx','waktu_mulai' => '2022-09-18','waktu_selesai' => '2022-10-09','status_upload' => '1','created_at' => '2022-09-17 22:51:14','updated_at' => '2022-09-17 22:51:14'),
            array('id' => '56','materi_id' => '98','tugas' => '<p>Kerjakan soal latihan dari nomor 1 sampai 2.<br />
          Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-986325ed181afb3.docx','waktu_mulai' => '2022-09-18','waktu_selesai' => '2022-09-23','status_upload' => '0','created_at' => '2022-09-17 22:51:52','updated_at' => '2022-09-17 22:51:52'),
            array('id' => '57','materi_id' => '97','tugas' => '<p>Kerjakan soal latihan dari nomor 1 sampai 2.<br />
          Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-976325ed2ee4a8f.docx','waktu_mulai' => '2022-09-18','waktu_selesai' => '2022-09-24','status_upload' => '0','created_at' => '2022-09-17 22:52:14','updated_at' => '2022-09-24 10:27:12'),
            array('id' => '58','materi_id' => '97','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-976325ed6c317e0.docx','waktu_mulai' => '2022-09-18','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-09-17 22:53:16','updated_at' => '2022-10-07 12:12:35'),
            array('id' => '59','materi_id' => '98','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-98632e9d598d279.docx','waktu_mulai' => '2022-09-19','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-09-24 13:02:01','updated_at' => '2022-10-07 12:13:53'),
            array('id' => '60','materi_id' => '99','tugas' => '<p>Kerjakan soal latihan dari nomor 1 sampai 2.<br />
          Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-99632f20883721a.docx','waktu_mulai' => '2022-09-26','waktu_selesai' => '2022-10-01','status_upload' => '0','created_at' => '2022-09-24 22:21:44','updated_at' => '2022-10-01 08:29:52'),
            array('id' => '61','materi_id' => '101','tugas' => '<p>Kerjakan soal latihan dari nomor 1 sampai 2.<br />
          Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-101632f209eb1910.docx','waktu_mulai' => '2022-09-26','waktu_selesai' => '2022-09-30','status_upload' => '0','created_at' => '2022-09-24 22:22:06','updated_at' => '2022-10-04 15:13:48'),
            array('id' => '62','materi_id' => '103','tugas' => '<p>Kerjakan soal latihan dari nomor 1 sampai 2.<br />
          Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-103632f20b02171d.docx','waktu_mulai' => '2022-09-26','waktu_selesai' => '2022-10-03','status_upload' => '0','created_at' => '2022-09-24 22:22:24','updated_at' => '2022-10-02 23:12:49'),
            array('id' => '63','materi_id' => '100','tugas' => '<p>Kerjakan soal latihan dari nomor 1 sampai 2.<br />
          Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-100632f20bf9c99f.docx','waktu_mulai' => '2022-09-26','waktu_selesai' => '2022-09-30','status_upload' => '0','created_at' => '2022-09-24 22:22:39','updated_at' => '2022-10-04 09:56:41'),
            array('id' => '64','materi_id' => '102','tugas' => '<p>Kerjakan soal latihan dari nomor 1 sampai 2.<br />
          Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-102632f20d0bc843.docx','waktu_mulai' => '2022-09-26','waktu_selesai' => '2022-09-30','status_upload' => '0','created_at' => '2022-09-24 22:22:56','updated_at' => '2022-09-24 22:22:56'),
            array('id' => '65','materi_id' => '104','tugas' => '<p>Kerjakan soal latihan dari nomor 1 sampai 2.<br />
          Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-104632f20df04127.docx','waktu_mulai' => '2022-09-26','waktu_selesai' => '2022-10-02','status_upload' => '0','created_at' => '2022-09-24 22:23:11','updated_at' => '2022-10-02 20:47:23'),
            array('id' => '66','materi_id' => '99','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-99632f21072c298.docx','waktu_mulai' => '2022-09-26','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-09-24 22:23:51','updated_at' => '2022-10-07 12:16:14'),
            array('id' => '67','materi_id' => '101','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-101632f2116700fe.docx','waktu_mulai' => '2022-09-26','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-09-24 22:24:06','updated_at' => '2022-10-07 12:16:18'),
            array('id' => '68','materi_id' => '103','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-103632f2128d62e3.docx','waktu_mulai' => '2022-09-26','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-09-24 22:24:24','updated_at' => '2022-10-07 12:16:23'),
            array('id' => '69','materi_id' => '100','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-100632f2139ce717.docx','waktu_mulai' => '2022-09-26','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-09-24 22:24:41','updated_at' => '2024-08-20 09:17:12'),
            array('id' => '70','materi_id' => '102','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-102632f2149e3cb2.docx','waktu_mulai' => '2022-09-26','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-09-24 22:24:57','updated_at' => '2022-10-07 12:13:19'),
            array('id' => '71','materi_id' => '104','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-104632f2157b8b6f.docx','waktu_mulai' => '2022-09-26','waktu_selesai' => '2022-10-17','status_upload' => '0','created_at' => '2022-09-24 22:25:11','updated_at' => '2022-10-07 12:13:24'),
            array('id' => '72','materi_id' => '105','tugas' => '<p>1. Kerjakan soal latihan dari nomor 1 sampai 4. Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-10566bf23af45b1f.docx','waktu_mulai' => '2024-08-19','waktu_selesai' => '2024-10-03','status_upload' => '1','created_at' => '2024-08-16 17:02:23','updated_at' => '2024-09-18 09:42:41'),
            array('id' => '73','materi_id' => '107','tugas' => '<p>1. Kerjakan soal latihan dari nomor 1 sampai 4. Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-10766bf25c4b2ed9.docx','waktu_mulai' => '2024-08-19','waktu_selesai' => '2024-10-10','status_upload' => '0','created_at' => '2024-08-16 17:11:16','updated_at' => '2024-09-18 09:45:21'),
            array('id' => '74','materi_id' => '106','tugas' => '<p>1. Kerjakan soal latihan dari nomor 1 sampai 4. Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-10666bf25ca683ff.docx','waktu_mulai' => '2024-08-19','waktu_selesai' => '2024-10-10','status_upload' => '1','created_at' => '2024-08-16 17:11:22','updated_at' => '2024-09-18 09:43:16'),
            array('id' => '75','materi_id' => '107','tugas' => '<h2><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong></h2>

          <p>Materi Pengayaan ini bersifat <strong>TIDAK WAJIB</strong>, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-10766c3f0cd3a019.docx','waktu_mulai' => '2024-08-20','waktu_selesai' => '2024-10-10','status_upload' => '0','created_at' => '2024-08-20 08:26:37','updated_at' => '2024-09-18 09:45:32'),
            array('id' => '76','materi_id' => '106','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong></p>

          <p>Materi Pengayaan ini bersifat <strong>TIDAK WAJIB</strong>, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-10666c3f13681a5f.docx','waktu_mulai' => '2024-08-20','waktu_selesai' => '2024-08-30','status_upload' => '1','created_at' => '2024-08-20 08:28:22','updated_at' => '2024-08-20 08:28:22'),
            array('id' => '77','materi_id' => '117','tugas' => '<p>Kerjakan soal latihan dari nomor 1 sampai 2.<br />
          Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-11766c3fbefad562.docx','waktu_mulai' => '2024-09-02','waktu_selesai' => '2024-10-10','status_upload' => '1','created_at' => '2024-08-20 09:14:07','updated_at' => '2024-09-05 08:40:25'),
            array('id' => '78','materi_id' => '117','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-11766c3fc1b6e6e2.docx','waktu_mulai' => '2024-09-02','waktu_selesai' => '2024-10-10','status_upload' => '1','created_at' => '2024-08-20 09:14:51','updated_at' => '2024-09-05 08:40:43'),
            array('id' => '79','materi_id' => '119','tugas' => '<p>Kerjakan soal latihan dari nomor 1 sampai 2.<br />
          Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-11966c3feadb95cc.docx','waktu_mulai' => '2024-09-02','waktu_selesai' => '2024-10-10','status_upload' => '1','created_at' => '2024-08-20 09:25:49','updated_at' => '2024-09-05 08:42:15'),
            array('id' => '80','materi_id' => '118','tugas' => '<p>Kerjakan soal latihan dari nomor 1 sampai 2.<br />
          Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-11866c3fec733bab.docx','waktu_mulai' => '2024-09-02','waktu_selesai' => '2024-10-10','status_upload' => '1','created_at' => '2024-08-20 09:26:15','updated_at' => '2024-09-05 08:41:35'),
            array('id' => '81','materi_id' => '119','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-11966c3fee73615a.docx','waktu_mulai' => '2024-09-02','waktu_selesai' => '2024-10-10','status_upload' => '1','created_at' => '2024-08-20 09:26:47','updated_at' => '2024-09-05 08:42:25'),
            array('id' => '82','materi_id' => '118','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-11866c3ff1354c83.docx','waktu_mulai' => '2024-09-02','waktu_selesai' => '2024-10-10','status_upload' => '1','created_at' => '2024-08-20 09:27:31','updated_at' => '2024-09-05 08:41:45'),
            array('id' => '83','materi_id' => '116','tugas' => '<p>Kerjakan soal latihan dari nomor 1 sampai 2.<br />
          Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-11666c4028745159.docx','waktu_mulai' => '2024-09-30','waktu_selesai' => '2024-10-10','status_upload' => '1','created_at' => '2024-08-20 09:42:15','updated_at' => '2024-09-05 08:45:09'),
            array('id' => '84','materi_id' => '114','tugas' => '<p>Kerjakan soal latihan dari nomor 1 sampai 2.<br />
          Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-11466c402a4368bd.docx','waktu_mulai' => '2024-09-02','waktu_selesai' => '2024-10-10','status_upload' => '1','created_at' => '2024-08-20 09:42:44','updated_at' => '2024-09-05 08:43:04'),
            array('id' => '86','materi_id' => '116','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-11666c402ee27a0a.docx','waktu_mulai' => '2024-09-02','waktu_selesai' => '2024-10-10','status_upload' => '1','created_at' => '2024-08-20 09:43:58','updated_at' => '2024-09-05 08:45:18'),
            array('id' => '87','materi_id' => '114','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-11466c40306ad0ef.docx','waktu_mulai' => '2024-09-02','waktu_selesai' => '2024-10-10','status_upload' => '1','created_at' => '2024-08-20 09:44:22','updated_at' => '2024-09-05 08:43:35'),
            array('id' => '89','materi_id' => '115','tugas' => '<p>Kerjakan soal latihan dari nomor 1 sampai 2.<br />
          Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-11566c4037b7f311.docx','waktu_mulai' => '2024-09-02','waktu_selesai' => '2024-10-10','status_upload' => '1','created_at' => '2024-08-20 09:46:19','updated_at' => '2024-09-05 08:44:14'),
            array('id' => '90','materi_id' => '115','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-11566c403a2cc8f0.docx','waktu_mulai' => '2024-09-01','waktu_selesai' => '2024-10-10','status_upload' => '1','created_at' => '2024-08-20 09:46:58','updated_at' => '2024-09-05 08:44:21'),
            array('id' => '91','materi_id' => '113','tugas' => '<p>Kerjakan seluruh soal latihan dari nomor 1 sampai 4.</p>

          <p>Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-11366c404e22cd71.docx','waktu_mulai' => '2024-09-01','waktu_selesai' => '2024-10-10','status_upload' => '0','created_at' => '2024-08-20 09:52:18','updated_at' => '2024-09-18 09:49:45'),
            array('id' => '92','materi_id' => '112','tugas' => '<p>Kerjakan seluruh soal latihan dari nomor 1 sampai 4.</p>

          <p>Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-11266c4050136467.docx','waktu_mulai' => '2024-09-01','waktu_selesai' => '2024-10-10','status_upload' => '0','created_at' => '2024-08-20 09:52:49','updated_at' => '2024-09-18 09:49:00'),
            array('id' => '93','materi_id' => '111','tugas' => '<p>Kerjakan seluruh soal latihan dari nomor 1 sampai 4.</p>

          <p>Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-11166c4051433aa4.docx','waktu_mulai' => '2024-09-01','waktu_selesai' => '2024-10-10','status_upload' => '0','created_at' => '2024-08-20 09:53:08','updated_at' => '2024-09-18 09:48:44'),
            array('id' => '94','materi_id' => '113','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong></p>

          <p>Materi Pengayaan ini bersifat <strong>TIDAK WAJIB</strong>, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-11366c4054499470.docx','waktu_mulai' => '2024-09-01','waktu_selesai' => '2024-10-10','status_upload' => '0','created_at' => '2024-08-20 09:53:56','updated_at' => '2024-09-18 09:49:54'),
            array('id' => '95','materi_id' => '112','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong></p>

          <p>Materi Pengayaan ini bersifat <strong>TIDAK WAJIB</strong>, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-11266c40555245f3.docx','waktu_mulai' => '2024-09-01','waktu_selesai' => '2024-10-10','status_upload' => '0','created_at' => '2024-08-20 09:54:13','updated_at' => '2024-09-18 09:49:20'),
            array('id' => '96','materi_id' => '111','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong></p>

          <p>Materi Pengayaan ini bersifat <strong>TIDAK WAJIB</strong>, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-11166c405633cd81.docx','waktu_mulai' => '2024-09-01','waktu_selesai' => '2024-10-10','status_upload' => '0','created_at' => '2024-08-20 09:54:27','updated_at' => '2024-09-18 09:49:12'),
            array('id' => '97','materi_id' => '108','tugas' => '<p>Kerjakan seluruh soal latihan dari nomor 1 sampai 7.</p>

          <p>Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-10866c4063332223.docx','waktu_mulai' => '2024-08-26','waktu_selesai' => '2024-10-10','status_upload' => '0','created_at' => '2024-08-20 09:57:55','updated_at' => '2024-09-18 09:45:42'),
            array('id' => '98','materi_id' => '109','tugas' => '<p>Kerjakan seluruh soal latihan dari nomor 1 sampai 7.</p>

          <p>Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-10966c406498938b.docx','waktu_mulai' => '2024-08-26','waktu_selesai' => '2024-10-10','status_upload' => '0','created_at' => '2024-08-20 09:58:17','updated_at' => '2024-09-18 09:46:47'),
            array('id' => '99','materi_id' => '110','tugas' => '<p>Kerjakan seluruh soal latihan dari nomor 1 sampai 7.</p>

          <p>Susun hasil Latihan dengan mengikuti template laporan tugas individu yang sudah disediakan</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-11066c406583b671.docx','waktu_mulai' => '2024-08-26','waktu_selesai' => '2024-10-10','status_upload' => '0','created_at' => '2024-08-20 09:58:32','updated_at' => '2024-09-18 09:47:05'),
            array('id' => '100','materi_id' => '108','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-10866c4067b57204.docx','waktu_mulai' => '2024-08-26','waktu_selesai' => '2024-10-10','status_upload' => '0','created_at' => '2024-08-20 09:59:07','updated_at' => '2024-09-18 09:45:53'),
            array('id' => '101','materi_id' => '109','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-10966c4068a7dd74.docx','waktu_mulai' => '2024-08-26','waktu_selesai' => '2024-10-10','status_upload' => '0','created_at' => '2024-08-20 09:59:22','updated_at' => '2024-09-18 09:46:58'),
            array('id' => '102','materi_id' => '110','tugas' => '<p><strong>TUGAS INDIVIDU UNTUK MATERI PENGAYAAN</strong><br />
          Materi Pengayaan ini bersifat tidak wajib, dapat dikerjakan apabila Anda sudah menyelesaikan Materi Utama.<br />
          Anda dapat mengungah hasil latihan dari Materi Pengayaan pada bagian ini.</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-11066c40699b9890.docx','waktu_mulai' => '2024-08-26','waktu_selesai' => '2024-10-10','status_upload' => '0','created_at' => '2024-08-20 09:59:37','updated_at' => '2024-09-18 09:47:14'),
            array('id' => '103','materi_id' => '120','tugas' => '<p>Pengumpulan Tugas Individu&nbsp;<br />
          Deadline: 6 September 2024</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-12066d6ac6ecf244.pdf','waktu_mulai' => '2024-08-26','waktu_selesai' => '2024-09-06','status_upload' => '0','created_at' => '2024-09-03 13:27:58','updated_at' => '2024-09-03 13:27:58'),
            array('id' => '104','materi_id' => '121','tugas' => '<p>Tugas Individu dikumpulkan paling lambat 24 September &nbsp;2024&nbsp;</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-12166deff39da218.pdf','waktu_mulai' => '2024-09-09','waktu_selesai' => '2024-09-30','status_upload' => '1','created_at' => '2024-09-09 20:59:21','updated_at' => '2024-09-17 13:52:32'),
            array('id' => '105','materi_id' => '122','tugas' => '<p>Tugas dikumpulkan paling lambat 11 Oktober 2024</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-12267033cf61fadc.pdf','waktu_mulai' => '2024-10-01','waktu_selesai' => '2024-10-11','status_upload' => '1','created_at' => '2024-10-07 08:44:22','updated_at' => '2024-10-07 08:44:22'),
  array('id' => '106','materi_id' => '123','tugas' => '<p>Tugas dikumpulkan paling lambat 11 Oktober 2024</p>','file_tugas' => 'storage/file_tugas_individu_materi/file_lama/198701272012122001-quizcodefile-198701272012122001-12367033d9dcf4fc.pdf','waktu_mulai' => '2024-10-01','waktu_selesai' => '2024-10-11','status_upload' => '1','created_at' => '2024-10-07 08:47:09','updated_at' => '2024-10-07 08:47:09')
        );

        foreach ($datas as $data) {
            DB::table('tugas_individu_materis')->insert($data);
        }
    }
}
