<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TugasKelompokMateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // assignments
        $materis = array(
            array('id' => '6','materi_id' => '71','judul_tugas' => 'Tugas  Kelompok Tipe Data','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-198701272012122001-820224.docx','tugas' => '<p><samp><span style="font-family:Times New Roman,Times,serif"><span style="font-size:11pt"><span dir="ltr" lang="EN-US" style="font-size:12.0pt">1. Diketahui: Data yang diolah: Nama, Tanggal Lahir, Tanggal mulai kuliah, Biaya uang pangkal, Biaya SPP<br />
          1.1.&nbsp; Susunlah kode program yang berisi informasi setiap anggota kelompok, beserta tipe datanya!<br />
          1.2. Simpulkan alasan pemilihan tipe data untuk setiap item data pribadi tersebut!</span></span></span></samp></p>','waktu_mulai' => '2022-08-18 13:29:26','waktu_selesai' => '2022/09/02','status_upload' => '0'),
            array('id' => '9','materi_id' => '77','judul_tugas' => 'Tugas  Kelompok Tipe Data','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-198701272012122001-820245.docx','tugas' => '<p>1. Diketahui: Data yang diolah: Nama, Tanggal Lahir, Tanggal mulai kuliah, Biaya uang pangkal, Biaya SPP&nbsp;<br />
          1.1. &nbsp;Susunlah kode program yang berisi informasi setiap anggota kelompok, beserta tipe datanya!<br />
          1.2. Simpulkan alasan pemilihan tipe data untuk setiap item data pribadi tersebut!<br />
          &nbsp;</p>','waktu_mulai' => '2024/08/21','waktu_selesai' => '2024/08/30','status_upload' => '1'),
            array('id' => '11','materi_id' => '74','judul_tugas' => 'Tugas  Kelompok Tipe Data','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-tipe-data-7462fb2e7776572.docx','tugas' => '<p>1. Diketahui: Data yang diolah: Nama, Tanggal Lahir, Tanggal mulai kuliah, Biaya uang pangkal, Biaya SPP&nbsp;<br />
          1.1. &nbsp;Susunlah kode program yang berisi informasi setiap anggota kelompok, beserta tipe datanya!<br />
          1.2. Simpulkan alasan pemilihan tipe data untuk setiap item data pribadi tersebut!</p>','waktu_mulai' => '2022-08-16 00:00:00','waktu_selesai' => '2022-08-31 00:00:00','status_upload' => '0'),
            array('id' => '12','materi_id' => '75','judul_tugas' => 'Tugas  Kelompok Tipe Data','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-tipe-data-7562fb2e99a1b92.docx','tugas' => '<p>1. Diketahui: Data yang diolah: Nama, Tanggal Lahir, Tanggal mulai kuliah, Biaya uang pangkal, Biaya SPP&nbsp;<br />
          1.1. &nbsp;Susunlah kode program yang berisi informasi setiap anggota kelompok, beserta tipe datanya!<br />
          1.2. Simpulkan alasan pemilihan tipe data untuk setiap item data pribadi tersebut!</p>','waktu_mulai' => '2022-08-16 00:00:00','waktu_selesai' => '2022/08/31','status_upload' => '0'),
            array('id' => '13','materi_id' => '73','judul_tugas' => 'Tugas  Kelompok Tipe Data','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-198701272012122001-820223.docx','tugas' => '<p>1. Diketahui: Data yang diolah: Nama, Tanggal Lahir, Tanggal mulai kuliah, Biaya uang pangkal, Biaya SPP&nbsp;<br />
          1.1. &nbsp;Susunlah kode program yang berisi informasi setiap anggota kelompok, beserta tipe datanya!<br />
          1.2. Simpulkan alasan pemilihan tipe data untuk setiap item data pribadi tersebut!<br />
          &nbsp;</p>','waktu_mulai' => '2022-08-16 00:00:00','waktu_selesai' => '2022/09/03','status_upload' => '0'),
            array('id' => '14','materi_id' => '76','judul_tugas' => 'Tugas  Kelompok Tipe Data','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-198701272012122001-820223.docx','tugas' => '<p>1. Diketahui: Data yang diolah: Nama, Tanggal Lahir, Tanggal mulai kuliah, Biaya uang pangkal, Biaya SPP&nbsp;<br />
          1.1. &nbsp;Susunlah kode program yang berisi informasi setiap anggota kelompok, beserta tipe datanya!<br />
          1.2. Simpulkan alasan pemilihan tipe data untuk setiap item data pribadi tersebut!</p>','waktu_mulai' => '2022-08-16 00:00:00','waktu_selesai' => '2022/09/03','status_upload' => '0'),
            array('id' => '21','materi_id' => '81','judul_tugas' => 'Tugas  Kelompok Operator','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-operator-8163071e7b43102.docx','tugas' => '<p>Minggu lalu, kelompok kalian telah mengolah data informasi pribadi.<br />
          Selanjutnya olah data tersebut menggunakan operator dengan mengikuti informasi berikut:</p>

          <ol>
              <li>Bila kalian kuliah selama 4 tahun.<br />
              Susunlah kode java untuk menghitung jumlah yang harus dibayar selama kuliah untuk setiap anggota kelompok!<br />
              (Asumsi:&nbsp;setiap orang memiliki jumlah yang dibayarkan berbeda karena perbedaan jalur masuk, UKT, SPP)<br />
              &nbsp;</li>
              <li>Gunakan operator ternary.<br />
              Rancanglah kode Java untuk menghitung jumlah yang harus dibayar jika kalian bisa selesai 4 tahun atau jika selesai lebih dari 4 tahun!</li>
          </ol>','waktu_mulai' => '2022-08-29 00:00:00','waktu_selesai' => '2022/09/09','status_upload' => '0'),
            array('id' => '22','materi_id' => '83','judul_tugas' => 'Tugas  Kelompok Operator','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-operator-8363071e9ce4045.docx','tugas' => '<p>Minggu lalu, kelompok kalian telah mengolah data informasi pribadi.<br />
          Selanjutnya olah data tersebut menggunakan operator dengan mengikuti informasi berikut:</p>

          <ol>
              <li>Bila kalian kuliah selama 4 tahun.<br />
              Susunlah kode java untuk menghitung jumlah yang harus dibayar selama kuliah untuk setiap anggota kelompok!<br />
              (Asumsi:&nbsp;setiap orang memiliki jumlah yang dibayarkan berbeda karena perbedaan jalur masuk, UKT, SPP)<br />
              &nbsp;</li>
              <li>Gunakan operator ternary.<br />
              Rancanglah kode Java untuk menghitung jumlah yang harus dibayar jika kalian bisa selesai 4 tahun atau jika selesai lebih dari 4 tahun!</li>
          </ol>','waktu_mulai' => '2022-08-28 00:00:00','waktu_selesai' => '2022/09/09','status_upload' => '0'),
            array('id' => '23','materi_id' => '85','judul_tugas' => 'Tugas  Kelompok Operator','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-operator-8563071ec0502a9.docx','tugas' => '<p>Minggu lalu, kelompok kalian telah mengolah data informasi pribadi.<br />
          Selanjutnya olah data tersebut menggunakan operator dengan mengikuti informasi berikut:</p>

          <ol>
              <li>Bila kalian kuliah selama 4 tahun.<br />
              Susunlah kode java untuk menghitung jumlah yang harus dibayar selama kuliah untuk setiap anggota kelompok!<br />
              (Asumsi:&nbsp;setiap orang memiliki jumlah yang dibayarkan berbeda karena perbedaan jalur masuk, UKT, SPP)<br />
              &nbsp;</li>
              <li>Gunakan operator ternary.<br />
              Rancanglah kode Java untuk menghitung jumlah yang harus dibayar jika kalian bisa selesai 4 tahun atau jika selesai lebih dari 4 tahun!</li>
          </ol>','waktu_mulai' => '2022-08-28 00:00:00','waktu_selesai' => '2022/09/09','status_upload' => '0'),
            array('id' => '24','materi_id' => '82','judul_tugas' => 'Tugas  Kelompok Operator','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-198701272012122001-820223.docx','tugas' => '<p>Minggu lalu, kelompok kalian telah mengolah data informasi pribadi.<br />
          Selanjutnya olah data tersebut menggunakan operator dengan mengikuti informasi berikut:</p>

          <ol>
              <li>Bila kalian kuliah selama 4 tahun.<br />
              Susunlah kode java untuk menghitung jumlah yang harus dibayar selama kuliah untuk setiap anggota kelompok!<br />
              (Asumsi:&nbsp;setiap orang memiliki jumlah yang dibayarkan berbeda karena perbedaan jalur masuk, UKT, SPP)<br />
              &nbsp;</li>
              <li>Gunakan operator ternary.<br />
              Rancanglah kode Java untuk menghitung jumlah yang harus dibayar jika kalian bisa selesai 4 tahun atau jika selesai 5 tahun!</li>
          </ol>','waktu_mulai' => '2022-08-28 00:00:00','waktu_selesai' => '2022/09/09','status_upload' => '0'),
            array('id' => '25','materi_id' => '84','judul_tugas' => 'Tugas  Kelompok Operator','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-198701272012122001-820223.docx','tugas' => '<p>Minggu lalu, kelompok kalian telah mengolah data informasi pribadi.<br />
          Selanjutnya olah data tersebut menggunakan operator dengan mengikuti informasi berikut:</p>

          <ol>
              <li>Bila kalian kuliah selama 4 tahun.<br />
              Susunlah kode java untuk menghitung jumlah yang harus dibayar selama kuliah untuk setiap anggota kelompok!<br />
              (Asumsi:&nbsp;setiap orang memiliki jumlah yang dibayarkan berbeda karena perbedaan jalur masuk, UKT, SPP)<br />
              &nbsp;</li>
              <li>Gunakan operator ternary.<br />
              Rancanglah kode Java untuk menghitung jumlah yang harus dibayar jika kalian bisa selesai 4 tahun atau jika selesai 5 tahun!</li>
          </ol>','waktu_mulai' => '2022-08-28 00:00:00','waktu_selesai' => '2022-09-09 00:00:00','status_upload' => '0'),
            array('id' => '26','materi_id' => '86','judul_tugas' => 'Tugas  Kelompok Operator','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-198701272012122001-820223.docx','tugas' => '<p>Minggu lalu, kelompok kalian telah mengolah data informasi pribadi.<br />
          Selanjutnya olah data tersebut menggunakan operator dengan mengikuti informasi berikut:</p>

          <ol>
              <li>Bila kalian kuliah selama 4 tahun.<br />
              Susunlah kode java untuk menghitung jumlah yang harus dibayar selama kuliah untuk setiap anggota kelompok!<br />
              (Asumsi:&nbsp;setiap orang memiliki jumlah yang dibayarkan berbeda karena perbedaan jalur masuk, UKT, SPP)<br />
              &nbsp;</li>
              <li>Gunakan operator ternary.<br />
              Rancanglah kode Java untuk menghitung jumlah yang harus dibayar jika kalian bisa selesai 4 tahun atau jika selesai 5 tahun!</li>
          </ol>','waktu_mulai' => '2022-08-28 00:00:00','waktu_selesai' => '2022-09-09 00:00:00','status_upload' => '0'),
            array('id' => '27','materi_id' => '87','judul_tugas' => 'Tugas Kelompok Kelas','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-kelas-87631b5479cc1c7.docx','tugas' => '<ol>
              <li>Apabila diketahui kelas induk adalah Mahasiswa dan Kelas anak adalah turunan dari mahasiswa maka:</li>
          </ol>

          <ul>
              <li>(a)&nbsp; Analisa atribut, method, dan constructor dari kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!</li>
              <li>(b)&nbsp; Evaluasi perbedaan kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!</li>
              <li>(c)&nbsp; Rekomendasi atribut, method, dan constructor yang bisa digunakan bersama kelas induk dan kelas anak!</li>
              <li>(d)&nbsp; Desain kode program Java yang berisi atribut, method, dan constructor dari kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!<br />
              &nbsp;</li>
          </ul>','waktu_mulai' => '2022-09-11 00:00:00','waktu_selesai' => '2022/09/17','status_upload' => '0'),
            array('id' => '28','materi_id' => '89','judul_tugas' => 'Tugas Kelompok Kelas','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-kelas-89631b54acee27d.docx','tugas' => '<ol>
              <li>Apabila diketahui kelas induk adalah Mahasiswa dan Kelas anak adalah turunan dari mahasiswa maka:</li>
          </ol>

          <ul>
              <li>(a)&nbsp; Analisa atribut, method, dan constructor dari kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!</li>
              <li>(b)&nbsp; Evaluasi perbedaan kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!</li>
              <li>(c)&nbsp; Rekomendasi atribut, method, dan constructor yang bisa digunakan bersama kelas induk dan kelas anak!</li>
              <li>(d)&nbsp; Desain kode program Java yang berisi atribut, method, dan constructor dari kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!<br />
              &nbsp;</li>
          </ul>','waktu_mulai' => '2022-09-11 00:00:00','waktu_selesai' => '2022/09/17','status_upload' => '0'),
            array('id' => '29','materi_id' => '91','judul_tugas' => 'Tugas Kelompok Kelas','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-kelas-91631b54c58fad4.docx','tugas' => '<ol>
              <li>Apabila diketahui kelas induk adalah Mahasiswa dan Kelas anak adalah turunan dari mahasiswa maka:</li>
          </ol>

          <ul>
              <li>(a)&nbsp; Analisa atribut, method, dan constructor dari kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!</li>
              <li>(b)&nbsp; Evaluasi perbedaan kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!</li>
              <li>(c)&nbsp; Rekomendasi atribut, method, dan constructor yang bisa digunakan bersama kelas induk dan kelas anak!</li>
              <li>(d)&nbsp; Desain kode program Java yang berisi atribut, method, dan constructor dari kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!<br />
              &nbsp;</li>
          </ul>','waktu_mulai' => '2022-09-11 00:00:00','waktu_selesai' => '2022/09/17','status_upload' => '0'),
            array('id' => '30','materi_id' => '88','judul_tugas' => 'Tugas Kelompok Kelas','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-kelas-88631b5548af2f5.docx','tugas' => '<ol>
              <li>Apabila diketahui kelas induk adalah Mahasiswa dan Kelas anak adalah turunan dari mahasiswa maka:</li>
          </ol>

          <ul>
              <li>(a)&nbsp; Analisa atribut, method, dan constructor dari kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!</li>
              <li>(b)&nbsp; Evaluasi perbedaan kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!</li>
              <li>(c)&nbsp; Rekomendasi atribut, method, dan constructor yang bisa digunakan bersama kelas induk dan kelas anak!</li>
              <li>(d)&nbsp; Desain kode program Java yang berisi atribut, method, dan constructor dari kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!<br />
              &nbsp;</li>
          </ul>','waktu_mulai' => '2022-09-11 00:00:00','waktu_selesai' => '2022/09/18','status_upload' => '0'),
            array('id' => '31','materi_id' => '90','judul_tugas' => 'Tugas Kelompok Kelas','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-kelas-90631b5569e18de.docx','tugas' => '<ol>
              <li>Apabila diketahui kelas induk adalah Mahasiswa dan Kelas anak adalah turunan dari mahasiswa maka:</li>
          </ol>

          <ul>
              <li>(a)&nbsp; Analisa atribut, method, dan constructor dari kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!</li>
              <li>(b)&nbsp; Evaluasi perbedaan kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!</li>
              <li>(c)&nbsp; Rekomendasi atribut, method, dan constructor yang bisa digunakan bersama kelas induk dan kelas anak!</li>
              <li>(d)&nbsp; Desain kode program Java yang berisi atribut, method, dan constructor dari kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!<br />
              &nbsp;</li>
          </ul>','waktu_mulai' => '2022-09-11 00:00:00','waktu_selesai' => '2022/09/17','status_upload' => '0'),
            array('id' => '32','materi_id' => '92','judul_tugas' => 'Tugas Kelompok Kelas','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-kelas-92631b5581ae756.docx','tugas' => '<ol>
              <li>Apabila diketahui kelas induk adalah Mahasiswa dan Kelas anak adalah turunan dari mahasiswa maka:</li>
          </ol>

          <ul>
              <li>(a)&nbsp; Analisa atribut, method, dan constructor dari kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!</li>
              <li>(b)&nbsp; Evaluasi perbedaan kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!</li>
              <li>(c)&nbsp; Rekomendasi atribut, method, dan constructor yang bisa digunakan bersama kelas induk dan kelas anak!</li>
              <li>(d)&nbsp; Desain kode program Java yang berisi atribut, method, dan constructor dari kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!<br />
              &nbsp;</li>
          </ul>','waktu_mulai' => '2022-09-11 00:00:00','waktu_selesai' => '2022/09/17','status_upload' => '0'),
            array('id' => '33','materi_id' => '94','judul_tugas' => 'Tugas Kelompok IF dan SWITCH','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-if-dan-switch-946325efdb73cfb.docx','tugas' => '<p>1.&nbsp;&nbsp; &nbsp;<strong>Diketahui data penilaian mata kuliah di Universitas Bengkulu sebagai berikut:</strong></p>

          <table cellspacing="0" class="Table" style="border-collapse:collapse; border:none; height:10px; margin-left:111px; width:30px">
              <tbody>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:10px; vertical-align:top; width:20px">
                      <p style="text-align:center">Nilai Abjad</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:17px; vertical-align:top; width:20px">
                      <p style="text-align:center">Nilai angka Mutu</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:17px; vertical-align:top; width:20px">
                      <p style="text-align:center">Rentang Nilai</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">&nbsp;A</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">4</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">85-100</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">A-</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">3,75</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">80-84</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">B+</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">3,5</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">75-79</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">B</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">3</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">70-74</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">B-</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">2,75</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:61px">
                      <p style="text-align:center">65-69</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">C+</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">2,5</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:61px">
                      <p style="text-align:center">60-64</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">&nbsp;C</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">2</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:61px">
                      <ol>
                          <li style="list-style-type:none">
                          <ol start="59">
                              <li style="text-align:center">&nbsp;</li>
                          </ol>
                          </li>
                      </ol>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>1.1.&nbsp;&nbsp; &nbsp; Rekomendasikan langkah kerja dan flowchart susunan percabangan sesuai dengan data tersebut.</p>

          <p>1.2.&nbsp;&nbsp; &nbsp;Desain susunan kode program untuk memeriksa nilai angka yang dimasukkan oleh pengguna ke dalam nilai abjad tertentu.&nbsp;</p>

          <p>&nbsp;</p>

          <p><strong>2.&nbsp;&nbsp; &nbsp; Konstruksikan kode program dengan IF yang menghitung nilai IPK anda untuk data mata kuliah di semester 1 (gunakan data pada tabel dibawah),<br />
          &nbsp; &nbsp; &nbsp; &nbsp; dengan variasi nilai abjad yang diinput setiap anggota kelompok harus berbeda dan bervariasi (dalam range A hingga C)<br />
          Contoh MK (kalian dapat mengubah kolom nilai sesuai keinginan masing-masing):</strong></p>

          <table cellspacing="0" class="Table" style="border-collapse:collapse; border:none; margin-left:7px; width:586px">
              <tbody>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:22px; width:321px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Nama MK</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">SKS</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Nilai</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Contoh Hitung</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Pengantar Teknologi Informasi dan Komunikasi</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">2 </span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">A-</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3.75 * 2 = 7.5</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Sistem Digital</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3 </span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">C+</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">2.5 *3 = 7.5</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Komputer dan Pemrograman</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3 </span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">A</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">4*3 = 12</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Pengantar Sistem multimedia</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">2</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">B+</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3.5*2 = 7</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">IPK</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">10</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center">&nbsp;</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">(7.5 + 7.5 + 12 + 7) / 10 </span></span></span></span></p>

                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="color:black">IPK = 3.4</span></span></strong></span></span></p>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>Petunjuk:<br />
          Rumus perhitungan IPK = ( total jumlah (sks * nilai)) / jumlah sks &nbsp;</p>','waktu_mulai' => '2022-09-18 00:00:00','waktu_selesai' => '2022/09/23','status_upload' => '0'),
            array('id' => '34','materi_id' => '93','judul_tugas' => 'Tugas Kelompok IF dan SWITCH','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-if-dan-switch-936325eff68aff7.docx','tugas' => '<p>1.&nbsp;&nbsp; &nbsp;<strong>Diketahui data penilaian mata kuliah di Universitas Bengkulu sebagai berikut:</strong></p>

          <table cellspacing="0" class="Table" style="border-collapse:collapse; border:none; height:10px; margin-left:111px; width:30px">
              <tbody>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:10px; vertical-align:top; width:20px">
                      <p style="text-align:center">Nilai Abjad</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:17px; vertical-align:top; width:20px">
                      <p style="text-align:center">Nilai angka Mutu</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:17px; vertical-align:top; width:20px">
                      <p style="text-align:center">Rentang Nilai</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">&nbsp;A</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">4</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">85-100</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">A-</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">3,75</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">80-84</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">B+</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">3,5</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">75-79</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">B</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">3</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">70-74</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">B-</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">2,75</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:61px">
                      <p style="text-align:center">65-69</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">C+</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">2,5</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:61px">
                      <p style="text-align:center">60-64</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">&nbsp;C</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">2</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:61px">
                      <ol>
                          <li style="list-style-type:none">
                          <ol start="59">
                              <li style="text-align:center">&nbsp;</li>
                          </ol>
                          </li>
                      </ol>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>1.1.&nbsp;&nbsp; &nbsp; Rekomendasikan langkah kerja dan flowchart susunan percabangan sesuai dengan data tersebut.</p>

          <p>1.2.&nbsp;&nbsp; &nbsp;Desain susunan kode program untuk memeriksa nilai angka yang dimasukkan oleh pengguna ke dalam nilai abjad tertentu.&nbsp;</p>

          <p>&nbsp;</p>

          <p><strong>2.&nbsp;&nbsp; &nbsp; Konstruksikan kode program dengan IF yang menghitung nilai IPK anda untuk data mata kuliah di semester 1 (gunakan data pada tabel dibawah),<br />
          &nbsp; &nbsp; &nbsp; &nbsp; dengan variasi nilai abjad yang diinput setiap anggota kelompok harus berbeda dan bervariasi (dalam range A hingga C)<br />
          Contoh MK (kalian dapat mengubah kolom nilai sesuai keinginan masing-masing):</strong></p>

          <p>&nbsp;</p>

          <table cellspacing="0" class="Table" style="border-collapse:collapse; border:none; margin-left:7px; width:586px">
              <tbody>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:22px; width:321px">
                      <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Nama MK</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">SKS</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Nilai</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Contoh Hitung</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Manajemen &amp; Organisasi</span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">2 </span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">A-</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3.75 * 2 = 7.5</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Bahasa Pemrograman </span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">4</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">C+</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">2.5 *4 = 10</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Komputer dan Pemrograman</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3 </span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">A</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">4*3 = 12</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Sistem dan Teknologi Informasi</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">2</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">B+</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3.5*2 = 7</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">IPK</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">11</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center">&nbsp;</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">(7.5 + 10 + 12 + 7) / 11 </span></span></span></span></p>

                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="color:black">IPK = 3.3</span></span></strong></span></span></p>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>Petunjuk:<br />
          Rumus perhitungan IPK = ( total jumlah (sks * nilai)) / jumlah sks &nbsp;</p>','waktu_mulai' => '2022-09-18 00:00:00','waktu_selesai' => '2022/09/24','status_upload' => '0'),
            array('id' => '35','materi_id' => '95','judul_tugas' => 'Tugas Kelompok IF dan SWITCH','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-if-dan-switch-956325f00f87657.docx','tugas' => '<p>1.&nbsp;&nbsp; &nbsp;<strong>Diketahui data penilaian mata kuliah di Universitas Bengkulu sebagai berikut:</strong></p>

          <table cellspacing="0" class="Table" style="border-collapse:collapse; border:none; height:10px; margin-left:111px; width:30px">
              <tbody>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:10px; vertical-align:top; width:20px">
                      <p style="text-align:center">Nilai Abjad</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:17px; vertical-align:top; width:20px">
                      <p style="text-align:center">Nilai angka Mutu</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:17px; vertical-align:top; width:20px">
                      <p style="text-align:center">Rentang Nilai</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">&nbsp;A</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">4</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">85-100</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">A-</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">3,75</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">80-84</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">B+</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">3,5</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">75-79</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">B</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">3</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">70-74</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">B-</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">2,75</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:61px">
                      <p style="text-align:center">65-69</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">C+</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">2,5</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:61px">
                      <p style="text-align:center">60-64</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">&nbsp;C</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">2</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:61px">
                      <ol>
                          <li style="list-style-type:none">
                          <ol start="59">
                              <li style="text-align:center">&nbsp;</li>
                          </ol>
                          </li>
                      </ol>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>1.1.&nbsp;&nbsp; &nbsp; Rekomendasikan langkah kerja dan flowchart susunan percabangan sesuai dengan data tersebut.</p>

          <p>1.2.&nbsp;&nbsp; &nbsp;Desain susunan kode program untuk memeriksa nilai angka yang dimasukkan oleh pengguna ke dalam nilai abjad tertentu.&nbsp;</p>

          <p>&nbsp;</p>

          <p><strong>2.&nbsp;&nbsp; &nbsp; Konstruksikan kode program dengan IF yang menghitung nilai IPK anda untuk data mata kuliah di semester 1 (gunakan data pada tabel dibawah),<br />
          &nbsp; &nbsp; &nbsp; &nbsp; dengan variasi nilai abjad yang diinput setiap anggota kelompok harus berbeda dan bervariasi (dalam range A hingga C)<br />
          Contoh MK (kalian dapat mengubah kolom nilai sesuai keinginan masing-masing):</strong></p>

          <table cellspacing="0" class="Table" style="border-collapse:collapse; border:none; margin-left:7px; width:586px">
              <tbody>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:22px; width:321px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Nama MK</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">SKS</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Nilai</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Contoh Hitung</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Pengantar Teknologi Informasi dan Komunikasi</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">2 </span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">A-</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3.75 * 2 = 7.5</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Sistem Digital</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3 </span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">C+</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">2.5 *3 = 7.5</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Komputer dan Pemrograman</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3 </span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">A</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">4*3 = 12</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Pengantar Sistem multimedia</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">2</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">B+</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3.5*2 = 7</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">IPK</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">10</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center">&nbsp;</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">(7.5 + 7.5 + 12 + 7) / 10 </span></span></span></span></p>

                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="color:black">IPK = 3.4</span></span></strong></span></span></p>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>Petunjuk:<br />
          Rumus perhitungan IPK = ( total jumlah (sks * nilai)) / jumlah sks &nbsp;</p>','waktu_mulai' => '2022-09-18 00:00:00','waktu_selesai' => '2022-09-23 00:00:00','status_upload' => '0'),
            array('id' => '36','materi_id' => '96','judul_tugas' => 'Tugas Kelompok IF dan SWITCH','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-if-dan-switch-966325f038014d0.docx','tugas' => '<p>1.&nbsp;&nbsp; &nbsp;<strong>Diketahui data penilaian mata kuliah di Universitas Bengkulu sebagai berikut:</strong></p>

          <table cellspacing="0" class="Table" style="border-collapse:collapse; border:none; height:10px; margin-left:111px; width:30px">
              <tbody>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:10px; vertical-align:top; width:20px">
                      <p style="text-align:center">Nilai Abjad</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:17px; vertical-align:top; width:20px">
                      <p style="text-align:center">Nilai angka Mutu</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:17px; vertical-align:top; width:20px">
                      <p style="text-align:center">Rentang Nilai</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">&nbsp;A</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">4</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">85-100</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">A-</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">3,75</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">80-84</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">B+</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">3,5</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">75-79</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">B</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">3</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">70-74</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">B-</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">2,75</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:61px">
                      <p style="text-align:center">65-69</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">C+</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">2,5</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:61px">
                      <p style="text-align:center">60-64</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">&nbsp;C</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">2</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:61px">
                      <ol>
                          <li style="list-style-type:none">
                          <ol start="59">
                              <li style="text-align:center">&nbsp;</li>
                          </ol>
                          </li>
                      </ol>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>1.1.&nbsp;&nbsp; &nbsp; Rekomendasikan langkah kerja dan flowchart susunan percabangan sesuai dengan data tersebut.</p>

          <p>1.2.&nbsp;&nbsp; &nbsp;Desain susunan kode program untuk memeriksa nilai angka yang dimasukkan oleh pengguna ke dalam nilai abjad tertentu.&nbsp;</p>

          <p>&nbsp;</p>

          <p><strong>2.&nbsp;&nbsp; &nbsp; Konstruksikan kode program dengan IF yang menghitung nilai IPK anda untuk data mata kuliah di semester 1 (gunakan data pada tabel dibawah),<br />
          &nbsp; &nbsp; &nbsp; &nbsp; dengan variasi nilai abjad yang diinput setiap anggota kelompok harus berbeda dan bervariasi (dalam range A hingga C)<br />
          Contoh MK (kalian dapat mengubah kolom nilai sesuai keinginan masing-masing):</strong></p>

          <p>&nbsp;</p>

          <table cellspacing="0" class="Table" style="border-collapse:collapse; border:none; margin-left:7px; width:586px">
              <tbody>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:22px; width:321px">
                      <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Nama MK</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">SKS</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Nilai</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Contoh Hitung</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Manajemen &amp; Organisasi</span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">2 </span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">A-</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3.75 * 2 = 7.5</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Bahasa Pemrograman </span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">4</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">C+</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">2.5 *4 = 10</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Komputer dan Pemrograman</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3 </span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">A</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">4*3 = 12</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Sistem dan Teknologi Informasi</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">2</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">B+</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3.5*2 = 7</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">IPK</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">11</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center">&nbsp;</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">(7.5 + 10 + 12 + 7) / 11 </span></span></span></span></p>

                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="color:black">IPK = 3.3</span></span></strong></span></span></p>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>Petunjuk:<br />
          Rumus perhitungan IPK = ( total jumlah (sks * nilai)) / jumlah sks &nbsp;</p>','waktu_mulai' => '2022-09-18 00:00:00','waktu_selesai' => '2022/09/23','status_upload' => '0'),
            array('id' => '37','materi_id' => '97','judul_tugas' => 'Tugas Kelompok IF dan SWITCH','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-if-dan-switch-976325f059695a7.docx','tugas' => '<p>1.&nbsp;&nbsp; &nbsp;<strong>Diketahui data penilaian mata kuliah di Universitas Bengkulu sebagai berikut:</strong></p>

          <table cellspacing="0" class="Table" style="border-collapse:collapse; border:none; height:10px; margin-left:111px; width:30px">
              <tbody>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:10px; vertical-align:top; width:20px">
                      <p style="text-align:center">Nilai Abjad</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:17px; vertical-align:top; width:20px">
                      <p style="text-align:center">Nilai angka Mutu</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:17px; vertical-align:top; width:20px">
                      <p style="text-align:center">Rentang Nilai</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">&nbsp;A</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">4</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">85-100</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">A-</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">3,75</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">80-84</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">B+</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">3,5</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">75-79</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">B</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">3</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">70-74</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">B-</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">2,75</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:61px">
                      <p style="text-align:center">65-69</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">C+</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">2,5</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:61px">
                      <p style="text-align:center">60-64</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">&nbsp;C</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">2</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:61px">
                      <ol>
                          <li style="list-style-type:none">
                          <ol start="59">
                              <li style="text-align:center">&nbsp;</li>
                          </ol>
                          </li>
                      </ol>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>1.1.&nbsp;&nbsp; &nbsp; Rekomendasikan langkah kerja dan flowchart susunan percabangan sesuai dengan data tersebut.</p>

          <p>1.2.&nbsp;&nbsp; &nbsp;Desain susunan kode program untuk memeriksa nilai angka yang dimasukkan oleh pengguna ke dalam nilai abjad tertentu.&nbsp;</p>

          <p>&nbsp;</p>

          <p><strong>2.&nbsp;&nbsp; &nbsp; Konstruksikan kode program dengan IF yang menghitung nilai IPK anda untuk data mata kuliah di semester 1 (gunakan data pada tabel dibawah),<br />
          &nbsp; &nbsp; &nbsp; &nbsp; dengan variasi nilai abjad yang diinput setiap anggota kelompok harus berbeda dan bervariasi (dalam range A hingga C)<br />
          Contoh MK (kalian dapat mengubah kolom nilai sesuai keinginan masing-masing):</strong></p>

          <p>&nbsp;</p>

          <table cellspacing="0" class="Table" style="border-collapse:collapse; border:none; margin-left:7px; width:586px">
              <tbody>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:22px; width:321px">
                      <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Nama MK</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">SKS</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Nilai</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Contoh Hitung</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Manajemen &amp; Organisasi</span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">2 </span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">A-</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3.75 * 2 = 7.5</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Bahasa Pemrograman </span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">4</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">C+</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">2.5 *4 = 10</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Komputer dan Pemrograman</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3 </span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">A</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">4*3 = 12</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Sistem dan Teknologi Informasi</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">2</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">B+</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3.5*2 = 7</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">IPK</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">11</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center">&nbsp;</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">(7.5 + 10 + 12 + 7) / 11 </span></span></span></span></p>

                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="color:black">IPK = 3.3</span></span></strong></span></span></p>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>Petunjuk:<br />
          Rumus perhitungan IPK = ( total jumlah (sks * nilai)) / jumlah sks &nbsp;</p>','waktu_mulai' => '2022-09-18 00:00:00','waktu_selesai' => '2022/09/24','status_upload' => '0'),
            array('id' => '38','materi_id' => '98','judul_tugas' => 'Tugas Kelompok IF dan SWITCH','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-if-dan-switch-986325f0713a772.docx','tugas' => '<p>1.&nbsp;&nbsp; &nbsp;<strong>Diketahui data penilaian mata kuliah di Universitas Bengkulu sebagai berikut:</strong></p>

          <table cellspacing="0" class="Table" style="border-collapse:collapse; border:none; height:10px; margin-left:111px; width:30px">
              <tbody>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:10px; vertical-align:top; width:20px">
                      <p style="text-align:center">Nilai Abjad</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:17px; vertical-align:top; width:20px">
                      <p style="text-align:center">Nilai angka Mutu</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:17px; vertical-align:top; width:20px">
                      <p style="text-align:center">Rentang Nilai</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">&nbsp;A</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">4</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">85-100</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">A-</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">3,75</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">80-84</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">B+</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">3,5</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">75-79</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">B</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">3</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:20px">
                      <p style="text-align:center">70-74</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">B-</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">2,75</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:61px">
                      <p style="text-align:center">65-69</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">C+</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">2,5</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:61px">
                      <p style="text-align:center">60-64</p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">&nbsp;C</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:49px">
                      <p style="text-align:center">2</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:61px">
                      <ol>
                          <li style="list-style-type:none">
                          <ol start="59">
                              <li style="text-align:center">&nbsp;</li>
                          </ol>
                          </li>
                      </ol>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>1.1.&nbsp;&nbsp; &nbsp; Rekomendasikan langkah kerja dan flowchart susunan percabangan sesuai dengan data tersebut.</p>

          <p>1.2.&nbsp;&nbsp; &nbsp;Desain susunan kode program untuk memeriksa nilai angka yang dimasukkan oleh pengguna ke dalam nilai abjad tertentu.&nbsp;</p>

          <p>&nbsp;</p>

          <p><strong>2.&nbsp;&nbsp; &nbsp; Konstruksikan kode program dengan IF yang menghitung nilai IPK anda untuk data mata kuliah di semester 1 (gunakan data pada tabel dibawah),<br />
          &nbsp; &nbsp; &nbsp; &nbsp; dengan variasi nilai abjad yang diinput setiap anggota kelompok harus berbeda dan bervariasi (dalam range A hingga C)<br />
          Contoh MK (kalian dapat mengubah kolom nilai sesuai keinginan masing-masing):</strong></p>

          <table cellspacing="0" class="Table" style="border-collapse:collapse; border:none; margin-left:7px; width:586px">
              <tbody>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:22px; width:321px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Nama MK</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">SKS</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Nilai</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Contoh Hitung</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Pengantar Teknologi Informasi dan Komunikasi</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">2 </span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">A-</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3.75 * 2 = 7.5</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Sistem Digital</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3 </span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">C+</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">2.5 *3 = 7.5</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Komputer dan Pemrograman</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3 </span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">A</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">4*3 = 12</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Pengantar Sistem multimedia</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">2</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">B+</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">3.5*2 = 7</span></span></span></span></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:22px; width:321px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">IPK</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; width:47px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">10</span></span></span></span></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:57px">
                      <p style="text-align:center">&nbsp;</p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:22px; vertical-align:top; width:161px">
                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">(7.5 + 7.5 + 12 + 7) / 10 </span></span></span></span></p>

                      <p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="color:black">IPK = 3.4</span></span></strong></span></span></p>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>Petunjuk:<br />
          Rumus perhitungan IPK = ( total jumlah (sks * nilai)) / jumlah sks &nbsp;</p>','waktu_mulai' => '2022-09-18 00:00:00','waktu_selesai' => '2022/09/23','status_upload' => '0'),
            array('id' => '39','materi_id' => '100','judul_tugas' => 'Tugas Kelompok FOR dan WHILE','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-for-dan-while-100632f1f30c2c8d.docx','tugas' => '<p>1.&nbsp;&nbsp; &nbsp;Pada minggu materi Percabangan<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Kelompok Anda telah menghitung IPK menggunakan IF dan Case.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode menghitung IPK tersebut menjadi salah satu dengan FOR atau WHILE!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun diagram Flowchart dari kode ini.<br />
          &nbsp; &nbsp; &nbsp; (Asumsi: Masukan dilakukan dengan memasukkan informasi setiap anggota kelompok<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Masukan mengabaikan nama mata kuliah)</p>

          <p>2.&nbsp;&nbsp; &nbsp;Pada minggu materi Operator<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Kelompok Anda telah menghitung besarnya UKT &nbsp;dan SPP setiap semester.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode menghitung jumlah UKT dan SPP di setiap semester menggunakan FOR atau WHILE!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun diagram Flowchart dari kode ini.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;(Masukan dengan memasukkan informasi setiap anggota kelompok dan memasukkan jumlah semester<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Luaran dengan menampilkan iuran UKT atau SPP setiap semesternya)</p>','waktu_mulai' => '2022-09-26 00:00:00','waktu_selesai' => '2022/09/30','status_upload' => '0'),
            array('id' => '40','materi_id' => '102','judul_tugas' => 'Tugas Kelompok FOR dan WHILE','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-for-dan-while-102632f1f505719f.docx','tugas' => '<p>1.&nbsp;&nbsp; &nbsp;Pada minggu materi Percabangan<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Kelompok Anda telah menghitung IPK menggunakan IF dan Case.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode menghitung IPK tersebut menjadi salah satu dengan FOR atau WHILE!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun diagram Flowchart dari kode ini.<br />
          &nbsp; &nbsp; &nbsp; (Asumsi: Masukan dilakukan dengan memasukkan informasi setiap anggota kelompok<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Masukan mengabaikan nama mata kuliah)</p>

          <p>2.&nbsp;&nbsp; &nbsp;Pada minggu materi Operator<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Kelompok Anda telah menghitung besarnya UKT &nbsp;dan SPP setiap semester.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode menghitung jumlah UKT dan SPP di setiap semester menggunakan FOR atau WHILE!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun diagram Flowchart dari kode ini.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;(Masukan dengan memasukkan informasi setiap anggota kelompok dan memasukkan jumlah semester<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Luaran dengan menampilkan iuran UKT atau SPP setiap semesternya)</p>','waktu_mulai' => '2022-09-26 00:00:00','waktu_selesai' => '2022-09-30 00:00:00','status_upload' => '0'),
            array('id' => '41','materi_id' => '104','judul_tugas' => 'Tugas Kelompok FOR dan WHILE','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-for-dan-while-104632f1f757d99e.docx','tugas' => '<p>1.&nbsp;&nbsp; &nbsp;Pada minggu materi Percabangan<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Kelompok Anda telah menghitung IPK menggunakan IF dan Case.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode menghitung IPK tersebut menjadi salah satu dengan FOR atau WHILE!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun diagram Flowchart dari kode ini.<br />
          &nbsp; &nbsp; &nbsp; (Asumsi: Masukan dilakukan dengan memasukkan informasi setiap anggota kelompok<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Masukan mengabaikan nama mata kuliah)</p>

          <p>2.&nbsp;&nbsp; &nbsp;Pada minggu materi Operator<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Kelompok Anda telah menghitung besarnya UKT &nbsp;dan SPP setiap semester.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode menghitung jumlah UKT dan SPP di setiap semester menggunakan FOR atau WHILE!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun diagram Flowchart dari kode ini.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;(Masukan dengan memasukkan informasi setiap anggota kelompok dan memasukkan jumlah semester<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Luaran dengan menampilkan iuran UKT atau SPP setiap semesternya)</p>','waktu_mulai' => '2022-09-26 00:00:00','waktu_selesai' => '2022/09/30','status_upload' => '0'),
            array('id' => '42','materi_id' => '99','judul_tugas' => 'Tugas Kelompok FOR dan WHILE','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-for-dan-while-99632f1f8d4664e.docx','tugas' => '<p>1.&nbsp;&nbsp; &nbsp;Pada minggu materi Percabangan<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Kelompok Anda telah menghitung IPK menggunakan IF dan Case.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode menghitung IPK tersebut menjadi salah satu dengan FOR atau WHILE!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun diagram Flowchart dari kode ini.<br />
          &nbsp; &nbsp; &nbsp; (Asumsi: Masukan dilakukan dengan memasukkan informasi setiap anggota kelompok<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Masukan mengabaikan nama mata kuliah)</p>

          <p>2.&nbsp;&nbsp; &nbsp;Pada minggu materi Operator<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Kelompok Anda telah menghitung besarnya UKT &nbsp;dan SPP setiap semester.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode menghitung jumlah UKT dan SPP di setiap semester menggunakan FOR atau WHILE!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun diagram Flowchart dari kode ini.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;(Masukan dengan memasukkan informasi setiap anggota kelompok dan memasukkan jumlah semester<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Luaran dengan menampilkan iuran UKT atau SPP setiap semesternya)</p>','waktu_mulai' => '2022-09-26 00:00:00','waktu_selesai' => '2022-09-30 00:00:00','status_upload' => '0'),
            array('id' => '43','materi_id' => '101','judul_tugas' => 'Tugas Kelompok FOR dan WHILE','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-for-dan-while-101632f1fa4481ef.docx','tugas' => '<p>1.&nbsp;&nbsp; &nbsp;Pada minggu materi Percabangan<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Kelompok Anda telah menghitung IPK menggunakan IF dan Case.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode menghitung IPK tersebut menjadi salah satu dengan FOR atau WHILE!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun diagram Flowchart dari kode ini.<br />
          &nbsp; &nbsp; &nbsp; (Asumsi: Masukan dilakukan dengan memasukkan informasi setiap anggota kelompok<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Masukan mengabaikan nama mata kuliah)</p>

          <p>2.&nbsp;&nbsp; &nbsp;Pada minggu materi Operator<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Kelompok Anda telah menghitung besarnya UKT &nbsp;dan SPP setiap semester.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode menghitung jumlah UKT dan SPP di setiap semester menggunakan FOR atau WHILE!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun diagram Flowchart dari kode ini.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;(Masukan dengan memasukkan informasi setiap anggota kelompok dan memasukkan jumlah semester<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Luaran dengan menampilkan iuran UKT atau SPP setiap semesternya)</p>','waktu_mulai' => '2022-09-26 00:00:00','waktu_selesai' => '2022/09/30','status_upload' => '0'),
            array('id' => '44','materi_id' => '103','judul_tugas' => 'Tugas Kelompok FOR dan WHILE','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-for-dan-while-103632f1fb5f2a96.docx','tugas' => '<p>1.&nbsp;&nbsp; &nbsp;Pada minggu materi Percabangan<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Kelompok Anda telah menghitung IPK menggunakan IF dan Case.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode menghitung IPK tersebut menjadi salah satu dengan FOR atau WHILE!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun diagram Flowchart dari kode ini.<br />
          &nbsp; &nbsp; &nbsp; (Asumsi: Masukan dilakukan dengan memasukkan informasi setiap anggota kelompok<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Masukan mengabaikan nama mata kuliah)</p>

          <p>2.&nbsp;&nbsp; &nbsp;Pada minggu materi Operator<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Kelompok Anda telah menghitung besarnya UKT &nbsp;dan SPP setiap semester.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode menghitung jumlah UKT dan SPP di setiap semester menggunakan FOR atau WHILE!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun diagram Flowchart dari kode ini.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;(Masukan dengan memasukkan informasi setiap anggota kelompok dan memasukkan jumlah semester<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Luaran dengan menampilkan iuran UKT atau SPP setiap semesternya)</p>','waktu_mulai' => '2022-09-26 00:00:00','waktu_selesai' => '2022/10/01','status_upload' => '0'),
            array('id' => '45','materi_id' => '105','judul_tugas' => 'Tugas  Kelompok Tipe Data','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-tipe-data-10566bf226b056cf.docx','tugas' => '<p>1. Diketahui: Data yang diolah: Nama, Tanggal Lahir, Tanggal mulai kuliah, Biaya uang pangkal, Biaya SPP&nbsp;<br />
          1.1. &nbsp;Susunlah kode program yang berisi informasi setiap anggota kelompok, beserta tipe datanya!<br />
          1.2. Simpulkan alasan pemilihan tipe data untuk setiap item data pribadi tersebut!<br />
          &nbsp;</p>','waktu_mulai' => '2024-08-19 00:00:00','waktu_selesai' => '2024-08-30 00:00:00','status_upload' => '1'),
            array('id' => '46','materi_id' => '106','judul_tugas' => 'Tugas  Kelompok Tipe Data','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-tipe-data-10666bf24ec07410.docx','tugas' => '<p>1. Diketahui: Data yang diolah: Nama, Tanggal Lahir, Tanggal mulai kuliah, Biaya uang pangkal, Biaya SPP&nbsp;<br />
          1.1. &nbsp;Susunlah kode program yang berisi informasi setiap anggota kelompok, beserta tipe datanya!<br />
          1.2. Simpulkan alasan pemilihan tipe data untuk setiap item data pribadi tersebut!</p>','waktu_mulai' => '2024-08-19 00:00:00','waktu_selesai' => '2024-08-30 00:00:00','status_upload' => '1'),
            array('id' => '47','materi_id' => '107','judul_tugas' => 'Tugas  Kelompok Tipe Data','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-tipe-data-10766bf256a906fe.docx','tugas' => '<p>Tugas &nbsp;Kelompok Tipe Data</p>','waktu_mulai' => '2024-08-19 00:00:00','waktu_selesai' => '2024-08-30 00:00:00','status_upload' => '1'),
            array('id' => '48','materi_id' => '117','judul_tugas' => 'Tugas Kelompok FOR dan WHILE','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-for-dan-while-11766c3fcfb73900.docx','tugas' => '<p>1.&nbsp;&nbsp; &nbsp;Pada minggu materi Percabangan<br />
&nbsp; &nbsp; &nbsp; &nbsp;Kelompok Anda telah menghitung IPK menggunakan IF dan Case.&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode menghitung IPK tersebut menjadi salah satu dengan FOR atau WHILE!<br />
&nbsp; &nbsp; &nbsp; &nbsp;Susun diagram Flowchart dari kode ini.<br />
&nbsp; &nbsp; &nbsp; (Asumsi: Masukan dilakukan dengan memasukkan informasi setiap anggota kelompok<br />
&nbsp; &nbsp; &nbsp; &nbsp;Masukan mengabaikan nama mata kuliah)</p>

<p>2.&nbsp;&nbsp; &nbsp;Pada minggu materi Operator<br />
&nbsp; &nbsp; &nbsp; &nbsp;Kelompok Anda telah menghitung besarnya UKT &nbsp;dan SPP setiap semester.&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode menghitung jumlah UKT dan SPP di setiap semester menggunakan FOR atau WHILE!<br />
&nbsp; &nbsp; &nbsp; &nbsp;Susun diagram Flowchart dari kode ini.<br />
&nbsp; &nbsp; &nbsp; &nbsp;(Masukan dengan memasukkan informasi setiap anggota kelompok dan memasukkan jumlah semester<br />
&nbsp; &nbsp; &nbsp; &nbsp;Luaran dengan menampilkan iuran UKT atau SPP setiap semesternya)</p>','waktu_mulai' => '2024-09-02 00:00:00','waktu_selesai' => '2024/10/04','status_upload' => '1'),
  array('id' => '49','materi_id' => '118','judul_tugas' => 'Tugas Kelompok FOR dan WHILE','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-for-dan-while-11866c3fdfbd27f0.docx','tugas' => '<p>1.&nbsp;&nbsp; &nbsp;Pada minggu materi Percabangan<br />
&nbsp; &nbsp; &nbsp; &nbsp;Kelompok Anda telah menghitung IPK menggunakan IF dan Case.&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode menghitung IPK tersebut menjadi salah satu dengan FOR atau WHILE!<br />
&nbsp; &nbsp; &nbsp; &nbsp;Susun diagram Flowchart dari kode ini.<br />
&nbsp; &nbsp; &nbsp; (Asumsi: Masukan dilakukan dengan memasukkan informasi setiap anggota kelompok<br />
&nbsp; &nbsp; &nbsp; &nbsp;Masukan mengabaikan nama mata kuliah)</p>

<p>2.&nbsp;&nbsp; &nbsp;Pada minggu materi Operator<br />
&nbsp; &nbsp; &nbsp; &nbsp;Kelompok Anda telah menghitung besarnya UKT &nbsp;dan SPP setiap semester.&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode menghitung jumlah UKT dan SPP di setiap semester menggunakan FOR atau WHILE!<br />
&nbsp; &nbsp; &nbsp; &nbsp;Susun diagram Flowchart dari kode ini.<br />
&nbsp; &nbsp; &nbsp; &nbsp;(Masukan dengan memasukkan informasi setiap anggota kelompok dan memasukkan jumlah semester<br />
&nbsp; &nbsp; &nbsp; &nbsp;Luaran dengan menampilkan iuran UKT atau SPP setiap semesternya)</p>','waktu_mulai' => '2024-09-02 00:00:00','waktu_selesai' => '2024-10-04 00:00:00','status_upload' => '1'),
  array('id' => '50','materi_id' => '119','judul_tugas' => 'Tugas Kelompok FOR dan WHILE','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-for-dan-while-11966c3fe5cacbce.docx','tugas' => '<p>1.&nbsp;&nbsp; &nbsp;Pada minggu materi Percabangan<br />
&nbsp; &nbsp; &nbsp; &nbsp;Kelompok Anda telah menghitung IPK menggunakan IF dan Case.&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode menghitung IPK tersebut menjadi salah satu dengan FOR atau WHILE!<br />
&nbsp; &nbsp; &nbsp; &nbsp;Susun diagram Flowchart dari kode ini.<br />
&nbsp; &nbsp; &nbsp; (Asumsi: Masukan dilakukan dengan memasukkan informasi setiap anggota kelompok<br />
&nbsp; &nbsp; &nbsp; &nbsp;Masukan mengabaikan nama mata kuliah)</p>

<p>2.&nbsp;&nbsp; &nbsp;Pada minggu materi Operator<br />
&nbsp; &nbsp; &nbsp; &nbsp;Kelompok Anda telah menghitung besarnya UKT &nbsp;dan SPP setiap semester.&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode menghitung jumlah UKT dan SPP di setiap semester menggunakan FOR atau WHILE!<br />
&nbsp; &nbsp; &nbsp; &nbsp;Susun diagram Flowchart dari kode ini.<br />
&nbsp; &nbsp; &nbsp; &nbsp;(Masukan dengan memasukkan informasi setiap anggota kelompok dan memasukkan jumlah semester<br />
&nbsp; &nbsp; &nbsp; &nbsp;Luaran dengan menampilkan iuran UKT atau SPP setiap semesternya)</p>','waktu_mulai' => '2024-09-02 00:00:00','waktu_selesai' => '2024-10-04 00:00:00','status_upload' => '1'),
  array('id' => '51','materi_id' => '115','judul_tugas' => 'Tugas Kelompok IF dan SWITCH','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-if-dan-switch-11566c3ff70ec638.docx','tugas' => '<p>1.&nbsp;&nbsp; &nbsp;<strong>Diketahui data penilaian mata kuliah di Universitas Bengkulu sebagai berikut:</strong></p>

<table cellspacing="0">
	<tbody>
		<tr>
			<td>
			<p>Nilai Abjad</p>
			</td>
			<td>
			<p>Nilai angka Mutu</p>
			</td>
			<td>
			<p>Rentang Nilai</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>&nbsp;A</p>
			</td>
			<td>
			<p>4</p>
			</td>
			<td>
			<p>85-100</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>A-</p>
			</td>
			<td>
			<p>3,75</p>
			</td>
			<td>
			<p>80-84</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>B+</p>
			</td>
			<td>
			<p>3,5</p>
			</td>
			<td>
			<p>75-79</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>B</p>
			</td>
			<td>
			<p>3</p>
			</td>
			<td>
			<p>70-74</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>B-</p>
			</td>
			<td>
			<p>2,75</p>
			</td>
			<td>
			<p>65-69</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>C+</p>
			</td>
			<td>
			<p>2,5</p>
			</td>
			<td>
			<p>60-64</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>&nbsp;C</p>
			</td>
			<td>
			<p>2</p>
			</td>
			<td>
			<ol>
				<li>
				<ol start="59">
					<li>&nbsp;</li>
				</ol>
				</li>
			</ol>
			</td>
		</tr>
	</tbody>
</table>

<p>1.1.&nbsp;&nbsp; &nbsp; Rekomendasikan langkah kerja dan flowchart susunan percabangan sesuai dengan data tersebut.</p>

<p>1.2.&nbsp;&nbsp; &nbsp;Desain susunan kode program untuk memeriksa nilai angka yang dimasukkan oleh pengguna ke dalam nilai abjad tertentu.&nbsp;</p>

<p>&nbsp;</p>

<p><strong>2.&nbsp;&nbsp; &nbsp; Konstruksikan kode program dengan IF yang menghitung nilai IPK anda untuk data mata kuliah di semester 1 (gunakan data pada tabel dibawah),<br />
&nbsp; &nbsp; &nbsp; &nbsp; dengan variasi nilai abjad yang diinput setiap anggota kelompok harus berbeda dan bervariasi (dalam range A hingga C)<br />
Contoh MK (kalian dapat mengubah kolom nilai sesuai keinginan masing-masing):</strong></p>

<table cellspacing="0">
	<tbody>
		<tr>
			<td>
			<p>Nama MK</p>
			</td>
			<td>
			<p>SKS</p>
			</td>
			<td>
			<p>Nilai</p>
			</td>
			<td>
			<p>Contoh Hitung</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Pengantar Teknologi Informasi dan Komunikasi</p>
			</td>
			<td>
			<p>2</p>
			</td>
			<td>
			<p>A-</p>
			</td>
			<td>
			<p>3.75 * 2 = 7.5</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Sistem Digital</p>
			</td>
			<td>
			<p>3</p>
			</td>
			<td>
			<p>C+</p>
			</td>
			<td>
			<p>2.5 *3 = 7.5</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Komputer dan Pemrograman</p>
			</td>
			<td>
			<p>3</p>
			</td>
			<td>
			<p>A</p>
			</td>
			<td>
			<p>4*3 = 12</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Pengantar Sistem multimedia</p>
			</td>
			<td>
			<p>2</p>
			</td>
			<td>
			<p>B+</p>
			</td>
			<td>
			<p>3.5*2 = 7</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>IPK</p>
			</td>
			<td>
			<p>10</p>
			</td>
			<td>
			<p>&nbsp;</p>
			</td>
			<td>
			<p>(7.5 + 7.5 + 12 + 7) / 10</p>

			<p><strong>IPK = 3.4</strong></p>
			</td>
		</tr>
	</tbody>
</table>

<p>Petunjuk:<br />
Rumus perhitungan IPK = ( total jumlah (sks * nilai)) / jumlah sks &nbsp;</p>','waktu_mulai' => '2024-09-02 00:00:00','waktu_selesai' => '2024-10-04 00:00:00','status_upload' => '1'),
  array('id' => '52','materi_id' => '114','judul_tugas' => 'Tugas Kelompok IF dan SWITCH','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-if-dan-switch-11466c3ff9950bb6.docx','tugas' => '<p>1.&nbsp;&nbsp; &nbsp;<strong>Diketahui data penilaian mata kuliah di Universitas Bengkulu sebagai berikut:</strong></p>

<table cellspacing="0">
	<tbody>
		<tr>
			<td>
			<p>Nilai Abjad</p>
			</td>
			<td>
			<p>Nilai angka Mutu</p>
			</td>
			<td>
			<p>Rentang Nilai</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>&nbsp;A</p>
			</td>
			<td>
			<p>4</p>
			</td>
			<td>
			<p>85-100</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>A-</p>
			</td>
			<td>
			<p>3,75</p>
			</td>
			<td>
			<p>80-84</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>B+</p>
			</td>
			<td>
			<p>3,5</p>
			</td>
			<td>
			<p>75-79</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>B</p>
			</td>
			<td>
			<p>3</p>
			</td>
			<td>
			<p>70-74</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>B-</p>
			</td>
			<td>
			<p>2,75</p>
			</td>
			<td>
			<p>65-69</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>C+</p>
			</td>
			<td>
			<p>2,5</p>
			</td>
			<td>
			<p>60-64</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>&nbsp;C</p>
			</td>
			<td>
			<p>2</p>
			</td>
			<td>
			<ol>
				<li>
				<ol start="59">
					<li>&nbsp;</li>
				</ol>
				</li>
			</ol>
			</td>
		</tr>
	</tbody>
</table>

<p>1.1.&nbsp;&nbsp; &nbsp; Rekomendasikan langkah kerja dan flowchart susunan percabangan sesuai dengan data tersebut.</p>

<p>1.2.&nbsp;&nbsp; &nbsp;Desain susunan kode program untuk memeriksa nilai angka yang dimasukkan oleh pengguna ke dalam nilai abjad tertentu.&nbsp;</p>

<p>&nbsp;</p>

<p><strong>2.&nbsp;&nbsp; &nbsp; Konstruksikan kode program dengan IF yang menghitung nilai IPK anda untuk data mata kuliah di semester 1 (gunakan data pada tabel dibawah),<br />
&nbsp; &nbsp; &nbsp; &nbsp; dengan variasi nilai abjad yang diinput setiap anggota kelompok harus berbeda dan bervariasi (dalam range A hingga C)<br />
Contoh MK (kalian dapat mengubah kolom nilai sesuai keinginan masing-masing):</strong></p>

<table cellspacing="0">
	<tbody>
		<tr>
			<td>
			<p>Nama MK</p>
			</td>
			<td>
			<p>SKS</p>
			</td>
			<td>
			<p>Nilai</p>
			</td>
			<td>
			<p>Contoh Hitung</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Pengantar Teknologi Informasi dan Komunikasi</p>
			</td>
			<td>
			<p>2</p>
			</td>
			<td>
			<p>A-</p>
			</td>
			<td>
			<p>3.75 * 2 = 7.5</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Sistem Digital</p>
			</td>
			<td>
			<p>3</p>
			</td>
			<td>
			<p>C+</p>
			</td>
			<td>
			<p>2.5 *3 = 7.5</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Komputer dan Pemrograman</p>
			</td>
			<td>
			<p>3</p>
			</td>
			<td>
			<p>A</p>
			</td>
			<td>
			<p>4*3 = 12</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Pengantar Sistem multimedia</p>
			</td>
			<td>
			<p>2</p>
			</td>
			<td>
			<p>B+</p>
			</td>
			<td>
			<p>3.5*2 = 7</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>IPK</p>
			</td>
			<td>
			<p>10</p>
			</td>
			<td>
			<p>&nbsp;</p>
			</td>
			<td>
			<p>(7.5 + 7.5 + 12 + 7) / 10</p>

			<p><strong>IPK = 3.4</strong></p>
			</td>
		</tr>
	</tbody>
</table>

<p>Petunjuk:<br />
Rumus perhitungan IPK = ( total jumlah (sks * nilai)) / jumlah sks &nbsp;</p>','waktu_mulai' => '2024-09-02 00:00:00','waktu_selesai' => '2024-10-04 00:00:00','status_upload' => '1'),
  array('id' => '53','materi_id' => '116','judul_tugas' => 'Tugas Kelompok IF dan SWITCH','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-if-dan-switch-11666c3ffb170484.docx','tugas' => '<p>1.&nbsp;&nbsp; &nbsp;<strong>Diketahui data penilaian mata kuliah di Universitas Bengkulu sebagai berikut:</strong></p>

<table cellspacing="0">
	<tbody>
		<tr>
			<td>
			<p>Nilai Abjad</p>
			</td>
			<td>
			<p>Nilai angka Mutu</p>
			</td>
			<td>
			<p>Rentang Nilai</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>&nbsp;A</p>
			</td>
			<td>
			<p>4</p>
			</td>
			<td>
			<p>85-100</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>A-</p>
			</td>
			<td>
			<p>3,75</p>
			</td>
			<td>
			<p>80-84</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>B+</p>
			</td>
			<td>
			<p>3,5</p>
			</td>
			<td>
			<p>75-79</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>B</p>
			</td>
			<td>
			<p>3</p>
			</td>
			<td>
			<p>70-74</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>B-</p>
			</td>
			<td>
			<p>2,75</p>
			</td>
			<td>
			<p>65-69</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>C+</p>
			</td>
			<td>
			<p>2,5</p>
			</td>
			<td>
			<p>60-64</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>&nbsp;C</p>
			</td>
			<td>
			<p>2</p>
			</td>
			<td>
			<ol>
				<li>
				<ol start="59">
					<li>&nbsp;</li>
				</ol>
				</li>
			</ol>
			</td>
		</tr>
	</tbody>
</table>

<p>1.1.&nbsp;&nbsp; &nbsp; Rekomendasikan langkah kerja dan flowchart susunan percabangan sesuai dengan data tersebut.</p>

<p>1.2.&nbsp;&nbsp; &nbsp;Desain susunan kode program untuk memeriksa nilai angka yang dimasukkan oleh pengguna ke dalam nilai abjad tertentu.&nbsp;</p>

<p>&nbsp;</p>

<p><strong>2.&nbsp;&nbsp; &nbsp; Konstruksikan kode program dengan IF yang menghitung nilai IPK anda untuk data mata kuliah di semester 1 (gunakan data pada tabel dibawah),<br />
&nbsp; &nbsp; &nbsp; &nbsp; dengan variasi nilai abjad yang diinput setiap anggota kelompok harus berbeda dan bervariasi (dalam range A hingga C)<br />
Contoh MK (kalian dapat mengubah kolom nilai sesuai keinginan masing-masing):</strong></p>

<table cellspacing="0">
	<tbody>
		<tr>
			<td>
			<p>Nama MK</p>
			</td>
			<td>
			<p>SKS</p>
			</td>
			<td>
			<p>Nilai</p>
			</td>
			<td>
			<p>Contoh Hitung</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Pengantar Teknologi Informasi dan Komunikasi</p>
			</td>
			<td>
			<p>2</p>
			</td>
			<td>
			<p>A-</p>
			</td>
			<td>
			<p>3.75 * 2 = 7.5</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Sistem Digital</p>
			</td>
			<td>
			<p>3</p>
			</td>
			<td>
			<p>C+</p>
			</td>
			<td>
			<p>2.5 *3 = 7.5</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Komputer dan Pemrograman</p>
			</td>
			<td>
			<p>3</p>
			</td>
			<td>
			<p>A</p>
			</td>
			<td>
			<p>4*3 = 12</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Pengantar Sistem multimedia</p>
			</td>
			<td>
			<p>2</p>
			</td>
			<td>
			<p>B+</p>
			</td>
			<td>
			<p>3.5*2 = 7</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>IPK</p>
			</td>
			<td>
			<p>10</p>
			</td>
			<td>
			<p>&nbsp;</p>
			</td>
			<td>
			<p>(7.5 + 7.5 + 12 + 7) / 10</p>

			<p><strong>IPK = 3.4</strong></p>
			</td>
		</tr>
	</tbody>
</table>

<p>Petunjuk:<br />
Rumus perhitungan IPK = ( total jumlah (sks * nilai)) / jumlah sks &nbsp;</p>','waktu_mulai' => '2024-09-02 00:00:00','waktu_selesai' => '2024-10-04 00:00:00','status_upload' => '1'),
  array('id' => '54','materi_id' => '108','judul_tugas' => 'Tugas  Kelompok Operator','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-operator-10866c40072e3dbd.docx','tugas' => '<p>Minggu lalu, kelompok kalian telah mengolah data informasi pribadi.<br />
Selanjutnya olah data tersebut menggunakan operator dengan mengikuti informasi berikut:</p>

<ol>
	<li>Bila kalian kuliah selama 4 tahun.<br />
	Susunlah kode java untuk menghitung jumlah yang harus dibayar selama kuliah untuk setiap anggota kelompok!<br />
	(Asumsi:&nbsp;setiap orang memiliki jumlah yang dibayarkan berbeda karena perbedaan jalur masuk, UKT, SPP)<br />
	&nbsp;</li>
	<li>Gunakan operator ternary.<br />
	Rancanglah kode Java untuk menghitung jumlah yang harus dibayar jika kalian bisa selesai 4 tahun atau jika selesai 5 tahun!</li>
</ol>

<p>&nbsp;</p>','waktu_mulai' => '2024-09-02 00:00:00','waktu_selesai' => '2024-09-30 00:00:00','status_upload' => '1'),
  array('id' => '55','materi_id' => '109','judul_tugas' => 'Tugas  Kelompok Operator','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-operator-10966c400cd0398f.docx','tugas' => '<p>Minggu lalu, kelompok kalian telah mengolah data informasi pribadi.<br />
Selanjutnya olah data tersebut menggunakan operator dengan mengikuti informasi berikut:</p>

<ol>
	<li>Bila kalian kuliah selama 4 tahun.<br />
	Susunlah kode java untuk menghitung jumlah yang harus dibayar selama kuliah untuk setiap anggota kelompok!<br />
	(Asumsi:&nbsp;setiap orang memiliki jumlah yang dibayarkan berbeda karena perbedaan jalur masuk, UKT, SPP)<br />
	&nbsp;</li>
	<li>Gunakan operator ternary.<br />
	Rancanglah kode Java untuk menghitung jumlah yang harus dibayar jika kalian bisa selesai 4 tahun atau jika selesai 5 tahun!</li>
</ol>

<p>&nbsp;</p>','waktu_mulai' => '2024-09-02 00:00:00','waktu_selesai' => '2024-09-27 00:00:00','status_upload' => '1'),
  array('id' => '56','materi_id' => '110','judul_tugas' => 'Tugas  Kelompok Operator','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-operator-11066c400e9a4459.docx','tugas' => '<p>Minggu lalu, kelompok kalian telah mengolah data informasi pribadi.<br />
Selanjutnya olah data tersebut menggunakan operator dengan mengikuti informasi berikut:</p>

<ol>
	<li>Bila kalian kuliah selama 4 tahun.<br />
	Susunlah kode java untuk menghitung jumlah yang harus dibayar selama kuliah untuk setiap anggota kelompok!<br />
	(Asumsi:&nbsp;setiap orang memiliki jumlah yang dibayarkan berbeda karena perbedaan jalur masuk, UKT, SPP)<br />
	&nbsp;</li>
	<li>Gunakan operator ternary.<br />
	Rancanglah kode Java untuk menghitung jumlah yang harus dibayar jika kalian bisa selesai 4 tahun atau jika selesai 5 tahun!</li>
</ol>','waktu_mulai' => '2024-09-02 00:00:00','waktu_selesai' => '2024-09-27 00:00:00','status_upload' => '1'),
  array('id' => '57','materi_id' => '113','judul_tugas' => 'Tugas Kelompok Kelas','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-kelas-11366c4018032677.docx','tugas' => '<p>&nbsp;</p>

<ol>
	<li>Apabila diketahui kelas induk adalah Mahasiswa dan Kelas anak adalah turunan dari mahasiswa maka:</li>
</ol>

<ul>
	<li>(a)&nbsp; Analisa atribut, method, dan constructor dari kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!</li>
	<li>(b)&nbsp; Evaluasi perbedaan kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!</li>
	<li>(c)&nbsp; Rekomendasi atribut, method, dan constructor yang bisa digunakan bersama kelas induk dan kelas anak!</li>
	<li>(d)&nbsp; Desain kode program Java yang berisi atribut, method, dan constructor dari kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!<br />
	&nbsp;</li>
</ul>

<p>&nbsp;</p>','waktu_mulai' => '2024-08-26 00:00:00','waktu_selesai' => '2024-09-20 00:00:00','status_upload' => '1'),
  array('id' => '58','materi_id' => '112','judul_tugas' => 'Tugas Kelompok Kelas','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-kelas-11266c40190171af.docx','tugas' => '<p>&nbsp;</p>

<ol>
	<li>Apabila diketahui kelas induk adalah Mahasiswa dan Kelas anak adalah turunan dari mahasiswa maka:</li>
</ol>

<ul>
	<li>(a)&nbsp; Analisa atribut, method, dan constructor dari kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!</li>
	<li>(b)&nbsp; Evaluasi perbedaan kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!</li>
	<li>(c)&nbsp; Rekomendasi atribut, method, dan constructor yang bisa digunakan bersama kelas induk dan kelas anak!</li>
	<li>(d)&nbsp; Desain kode program Java yang berisi atribut, method, dan constructor dari kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!<br />
	&nbsp;</li>
</ul>

<p>&nbsp;</p>','waktu_mulai' => '2024-08-26 00:00:00','waktu_selesai' => '2024-09-20 00:00:00','status_upload' => '1'),
  array('id' => '59','materi_id' => '111','judul_tugas' => 'Tugas Kelompok Kelas','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-kelas-11166c4019fb7d51.docx','tugas' => '<p>&nbsp;</p>

<ol>
	<li>Apabila diketahui kelas induk adalah Mahasiswa dan Kelas anak adalah turunan dari mahasiswa maka:</li>
</ol>

<ul>
	<li>(a)&nbsp; Analisa atribut, method, dan constructor dari kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!</li>
	<li>(b)&nbsp; Evaluasi perbedaan kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!</li>
	<li>(c)&nbsp; Rekomendasi atribut, method, dan constructor yang bisa digunakan bersama kelas induk dan kelas anak!</li>
	<li>(d)&nbsp; Desain kode program Java yang berisi atribut, method, dan constructor dari kelas induk Mahasiswa dan kelas anak (turunan dari Mahasiswa)!<br />
	&nbsp;</li>
</ul>

<p>&nbsp;</p>','waktu_mulai' => '2024-08-26 00:00:00','waktu_selesai' => '2024-09-20 00:00:00','status_upload' => '1'),
array('id' => '60','materi_id' => '120','judul_tugas' => 'Tugas Kelompok 1 - Studi Kasus','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-1-studi-kasus-12066d6b26319401.pdf','tugas' => '<p>Tugas Kelompok&nbsp;<br />
Deadline: 8 September 2024</p>','waktu_mulai' => '2024-08-26 00:00:00','waktu_selesai' => '2024/09/16','status_upload' => '1'),
  array('id' => '61','materi_id' => '121','judul_tugas' => 'Tugas kelompok ke-2','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-198701272012122001-1020241.pdf','tugas' => '<p>Tugas Kelompok dikumpulkan paling lambat 11 Oktober 2024</p>','waktu_mulai' => '2024-10-01 00:00:00','waktu_selesai' => '2024-10-11 00:00:00','status_upload' => '1'),
  array('id' => '62','materi_id' => '122','judul_tugas' => 'Tugas kelompok ke-2','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-ke-2-12267033cdcbc5c3.pdf','tugas' => '<p>Tugas Kelompok dikumpulkan paling lambat 11 Oktober 2024</p>','waktu_mulai' => '2024-10-01 00:00:00','waktu_selesai' => '2024-10-11 00:00:00','status_upload' => '1'),
  array('id' => '63','materi_id' => '123','judul_tugas' => 'Tugas kelompok ke-2','file_tugas' => 'storage/file_tugas_kelompok_materi/file_lama/198701272012122001-assignmentfile-tugas-kelompok-ke-2-12367033d8ac21ca.pdf','tugas' => '<p>Tugas Kelompok dikumpulkan paling lambat 11 Oktober 2024</p>','waktu_mulai' => '2024-10-01 00:00:00','waktu_selesai' => '2024-10-11 00:00:00','status_upload' => '1')
        );

        foreach ($materis as $materi) {
            DB::table('tugas_kelompok_materis')->insert($materi);
        }
    }
}
