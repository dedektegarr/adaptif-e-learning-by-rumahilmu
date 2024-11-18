<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiskusiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // SELECT id, pageId as materi_id, studentId as mahasiswa_id, title as judul, intro as diskusi, created_at, updated_at FROM `forums`;

        $datas = array(
            array('id' => '8','materi_id' => '75','mahasiswa_id' => '7','judul' => 'Perkenalan dan Ekspektasi kelas Pemrograman','diskusi' => '<p>Assalamualaikum,<br />
          Selamat datang mahasiswa Komputer dan Pemrograman<br />
          Saya juga mengucapkan Selamat kepada kalian yang telah berhasil masuk ke Program Studi Informatika.</p>

          <p>Pada forum diskusi ini, silahkan kalian saling berkenalan, bisa dengan menyampaikan salah satu hal berikut:<br />
          - latar belakang pendidikan,<br />
          - motivasi atau ekspektasi mengikuti MK ini,<br />
          - persepsi awal tentang MK pemrograman ini</p>

          <p>Semoga kalian bisa saling belajar bersama mempelajari MK ini sebagai dasar untuk perkuliahan di Informatika yang selanjutnya. Semangat yaaa&nbsp;<img alt="wink" src="https://adaptif.rumahilmu.org/assets/ckeditor/plugins/smiley/images/wink_smile.png" style="height:23px; width:23px" title="wink" /><br />
          &nbsp;</p>

          <p>Salam,<br />
          Endina Putri</p>','created_at' => '2022-08-18 15:19:07','updated_at' => '2022-08-18 15:19:07'),
            array('id' => '9','materi_id' => '73','mahasiswa_id' => '7','judul' => 'Perkenalan dan Ekspektasi Kelas Bahasa Pemrograman','diskusi' => '<p>Assalamualaikum,<br />
          Selamat datang mahasiswa Bahasa Pemrograman<br />
          Saya juga mengucapkan Selamat kepada kalian yang telah berhasil masuk ke Program Studi Sistem Informasi.</p>

          <p>Pada forum diskusi ini, silahkan kalian saling berkenalan, bisa dengan menyampaikan salah satu hal berikut:<br />
          - latar belakang pendidikan,<br />
          - motivasi atau ekspektasi mengikuti MK ini,<br />
          - persepsi awal tentang MK Bahasa Pemrograman ini</p>

          <p>Semoga kalian bisa saling belajar bersama mempelajari MK ini sebagai dasar untuk perkuliahan di Sistem Informasi yang selanjutnya. Semangat yaaa&nbsp;<img alt="wink" src="https://adaptif.rumahilmu.org/assets/ckeditor/plugins/smiley/images/wink_smile.png" style="height:23px; width:23px" title="wink" /><br />
          &nbsp;</p>

          <p>Salam,<br />
          Endina Putri</p>','created_at' => '2022-08-18 15:24:42','updated_at' => '2022-08-18 15:24:42'),
            array('id' => '10','materi_id' => '75','mahasiswa_id' => '89','judul' => 'PRE TEST NO 2 PILIHAN B','diskusi' => '<p>Assalamualaikum Izin bu , temen temen , mau nanya untuk No 2 pada pilihan B PreTest ,Mengapa Hasil print dari System.out.println(s.indexOf(2)); hasilnya -1 walaupun angka nya sudah diubah ubah ?</p>

          <p>Terimakasih.</p>','created_at' => '2022-08-19 18:00:02','updated_at' => '2022-08-19 18:00:02'),
            array('id' => '12','materi_id' => '75','mahasiswa_id' => '7','judul' => 'Pemecahan Masalah Tipe Data','diskusi' => '<p>Halo semua mahasiswa,</p>

          <p>Minggu ini kita sudah mulai mempelajari materi tentang Tipe Data Java.&nbsp;<br />
          Kalian yang sudah eksplorasi menulis kode, bisa membagi hasil eksplorasinya disini.&nbsp;<br />
          Dengan cara</p>

          <ul>
              <li>Tuliskan kode program yang sudah kalian susun kembali</li>
              <li>Berikan argumentasi hasil atau pengetahuan apa yang kalian dapatkan dari permasalahan di program yang berhasil dipecahkan. Misalnya ada error penulisan kode kemudian menemukan sumber masalah errornya.&nbsp;<br />
              Atau jika masih ada masalah error atau potongan kode yang belum dipahami bisa diskusi bersama disini.</li>
          </ul>

          <p>Dengan berbagi pengalaman ke kawan-kawan, ilmu kalian akan bisa bertambah.<br />
          Selamat berkolaborasi dan berproses belajar bersama ya.&nbsp;<img alt="smiley" src="https://adaptif.rumahilmu.org/assets/ckeditor/plugins/smiley/images/regular_smile.png" style="height:23px; width:23px" title="smiley" /><br />
          Semangat&nbsp;</p>

          <p>Salam,</p>

          <p>Endina Putri</p>','created_at' => '2022-08-23 13:07:26','updated_at' => '2022-08-23 13:07:26'),
            array('id' => '13','materi_id' => '75','mahasiswa_id' => '36','judul' => 'Penggunaan eclipse sebagai editor kode','diskusi' => '<p>Assalamualaikum warahmatullahi wabarakatuh. Selamat pagi / siang / malam. Mohon izin Ibu Putri dan abang-abang asisten dosen</p>

          <p>Perkenalkan nama Saya Diodo Arrahman, NPM G1A022027, saya izin bertanya, Bu, Bang, Serta teman-teman sekalian.</p>

          <p>Sebelumnya mohon maaf jika Saya terlalu tertinggal dibandingkan dengan teman-teman sekalian. Saya masih belum paham bagaimana cara memulai project baru menggunakan Editor Kode Eclipse, ketika saya membuat New Java Project, disana ada konfigurasi nya dan saya belum paham cara melakukan konfigurasi awal ketika membuat project baru di eclipse. Kemudian, ketika saya hanya mengikuti konfigurasi yang tersedia, warna tulisan pada kode saya tidak berubah seperti yang ada di video pembelajaran dan tidak bisa dirun. Contoh, ketika saya menuliskan public class, warnanya tidak berubah menjadi oranye seperti di video pembelajaran, code saya juga tidak dapat dirun dengan muncul notifikasi &quot;Unable To Launch, The selection cannot be launched, and there are no recent launches.&quot;. Mungkin itu saja pertanyaan Saya Bu, Bang, Serta teman-teman sekalian. Sebelumnya saya ucapkan terimakasih. Wassalamualaikum warahmatullahi wabarakatuh.</p>','created_at' => '2022-08-23 21:55:46','updated_at' => '2022-08-23 21:55:46'),
            array('id' => '14','materi_id' => '74','mahasiswa_id' => '119','judul' => 'PENGAYAAN 3','diskusi' => '<p>Assalamualaikum warahmatullahi wabarakatuh, mohon izin ibu Putri abang-abang dosen serta teman teman sekalian.</p>

          <p>Mohon maaf, saya ingin bertanya berkaitan dengan pengayaan 3, pada baris kode nomor 32</p>

          <p>System.out.printf( &quot;%-10|&quot;,fmt);</p>

          <p>Kode itu digunakan untuk apa ya ? Karena saat di run, tidak ada tercantum tulisan mengenai baris kode tersebut, demikian pertanyaan saya ajukan, terimakasih wassalamu&#39;alaikum warahmatullahi wabarakatuh&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>','created_at' => '2022-08-23 22:14:45','updated_at' => '2022-08-23 22:14:45'),
            array('id' => '15','materi_id' => '75','mahasiswa_id' => '44','judul' => 'Materi pengayaan no 3','diskusi' => '<p>Assalamualaikum warahmatullahi wabararokatuh, mohon izin Ibuk putri Abang/mbak asdos dan teman-teman semua, jadi tadi saat saya mencari referensi untuk mengerjakan materi pengayaan,&nbsp; &nbsp;saya menemukan sebuah perbedaan pada penulisan tanda&nbsp; kurung siku&nbsp; [ ] pada public static void main. Salah satu website mengatakan bahwa kurung siku [ ] di letakkan sebelum args dan pada salah satu website lainnya kurung siku [ ] diletakkan setelah kata&nbsp; args, nah ibuk, mbak/Abang dan teman-teman, apakah hal tersebut membawa perbedaan terhadap terhadap sebuah program/baris kode, atau hal tersebut tidak mempengaruhi apapun dan hanya untuk kenyamanan orang yg membuat kode saja?</p>

          <p>Itu saja dari saya Buk, Abang/ mbak asdos, dan teman-teman. Terimakasih wassalamu&#39;alaikum warahmatullahi wabararokatuh</p>','created_at' => '2022-08-23 23:01:27','updated_at' => '2022-08-23 23:01:27'),
            array('id' => '16','materi_id' => '75','mahasiswa_id' => '51','judul' => 'Materi tipe data','diskusi' => '<p>Assalamualaikum bu abang/mbak asdos dan teman-teman semuanya, disini saya mau bertanya tentang doal yang nomor&nbsp;4.1. Konstruksikan kode program konversi tipe data pada Latihan 3 ke bentuk tipe data lain yang kompatibel. Itu maksudnya gimana soalnya disini saya masih bingung untuk soal nomor 4.1 , terimakasih wassalamu&#39;alaikum warahmatullahi wabarakatuh&nbsp;</p>','created_at' => '2022-08-24 18:18:41','updated_at' => '2022-08-24 18:18:41'),
            array('id' => '17','materi_id' => '75','mahasiswa_id' => '37','judul' => 'latihan 3','diskusi' => '<p>Assalamualaikum wr wb bu mau bertanya itu yang latihan 3&nbsp; yang mencakup 8 tipe data primitif dan string gimana ya ? apa itu di bagi 2 menjadi 4 tipe data primitif&nbsp; dan 4 tipe string?&nbsp;</p>

          <p>terimakasih Bu</p>','created_at' => '2022-08-24 21:58:23','updated_at' => '2022-08-24 21:58:23'),
            array('id' => '18','materi_id' => '75','mahasiswa_id' => '63','judul' => 'Coba - Coba soal Pre-Test no. 1 & 2.','diskusi' => '<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">[Pre-Test2]</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">1. output diinginkan : versitas ke :</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">1. String S1 = &quot;universitas bengkulu&quot;;</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">2. String S2 = &quot;oke&quot;;</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">3. String Frasa1 = S1.substring(S1.indexOf(&quot;i&quot;), S1.indexOf(&quot;e&quot;));</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">4. String Frasa1 = S1.substring(S1.indexOf(&quot;v&quot;), S1.indexOf(&quot;b&quot;));</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">5. String Frasa2 = S2.substring(1);</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">6. String Frasa2 = S2.substring(2);</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">7. System.out.println(Frasa1 + Frasa2);</span></span></p>

          <p>&nbsp;</p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">//[=Done=]</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">public class UNV {</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp; public static void main(String[] args) {</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; String S1 = &quot;universitas bengkulu&quot;;</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; String S2 = &quot;oke&quot;; </span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; String Frasa1 = S1.substring(S1.indexOf(&quot;v&quot;), S1.indexOf(&quot;b&quot;));</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;//pembuatan String baru dari potongan String lama, dimulai dari V sampai sebelum b.</span></span></p>

          <p>&nbsp;</p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; String Frasa2 = S2.substring(1); </span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">//pembuatan String baru dari potongan string lama, dimulai dari index 1 (k) sampai akhir isi String.</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; System.out.println(Frasa1 + Frasa2); </span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp; }</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">}</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">//[=-=]</span></span></p>

          <p>&nbsp;</p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">+-=-+</span></span></p>

          <p>&nbsp;</p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">2. output diinginkan : angka 2 didalam String :</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">1. public static void main(String [] args) {</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">2. public class data {</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">3. System.out.println(s.charAt(2));</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;//melihat isi karakter/angka di dalam string (index ke-2)</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">4. System.out.println(s(2)); </span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">//belum diketahui fungsinya apa.</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">5. System.out.println(s.indexOf(2));</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">6. int s = 012345;</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">7. String s = &ldquo;012345&rdquo;;</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">8. }&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }</span></span></p>

          <p>&nbsp;</p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">//[=Done=]</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">public class data {</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">public static void main(String [] args) {</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp; String s = &quot;012345&quot;;&nbsp; </span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">//tanda petik dua (&quot; &quot;) yang di soal tidak bisa dibaca oleh intrepeter java</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp; System.out.println(s.charAt(2));</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }</span></span></p>

          <p>&nbsp;</p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">//catatan : no. 5 dapat juga digunakan, akan tetapi, jika langsung dieksekusi kode yang ada di soal, akan mengembalikan angka -1 yang menandakan tidak ditemukan karakter/angka yang cocok akibat dari isi s.indexOf(2)); tidak menggunakan tanda petik satu (&#39; &#39;), contoh yang dicoba dan dapat berjalan = System.out.println(s.indexOf(&#39;2&#39;)); dengan output = 2.</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">//[=-=]</span></span></p>','created_at' => '2022-08-24 22:25:22','updated_at' => '2022-08-24 22:25:22'),
            array('id' => '19','materi_id' => '74','mahasiswa_id' => '80','judul' => 'Latihan 4.1','diskusi' => '<p>Assalammu&#39;alaikum wr wb, mohon izin bertanya ibu, abang, mba, dan kawan-kawan...</p>

          <p>Saya belum paham soal latihan 4.1, soal : &quot;Rekomendasikan konversi tipe data pada Latihan 2 ke bentuk tipe data lain yang kompatibel.&quot; Latihan no.2 di tipe data tingkat menengah, seperti ini:</p>

          <ol>
              <li>5</li>
              <li>&lsquo;L&rsquo;</li>
              <li>&ldquo;mobil&rdquo;</li>
              <li>5.0</li>
              <li>5.0f</li>
              <li>-5</li>
          </ol>

          <p>Apakah tipe data yang awal (yang mau di konversikan) itu, tipe data yang kita buat?</p>

          <p>Atau memakai contoh Latihan 3? yang seperti ini:</p>

          <p>int a = 555555555;<br />
          int b = 444444444;<br />
          float c = 12.345678910f;<br />
          double d = 12.345678910d;<br />
          char e = &#39;a&#39;;</p>

          <p>Karena saat saya mengkonversi byte a = 5 ke int, hasilnya tetap 5, atau memang seperti itu hasilnya?</p>

          <p>Terimakasih wassalammu&#39;alaikum wr wb&hellip;</p>','created_at' => '2022-08-24 23:12:33','updated_at' => '2022-08-24 23:12:33'),
            array('id' => '20','materi_id' => '75','mahasiswa_id' => '30','judul' => 'Latihan3','diskusi' => '<p>Assalamualaikum bu, abang, dan teman teman.&nbsp;</p>

          <p>Saya mencoba mengerjakan latihan3, dan itu saya bingung kenapa ketika run itu hasilnya tidak muncul di declaration apakah karna program saya yang salah atau memang seperti itu?</p>

          <p>ini hasil ex program yang saya kerjakan:</p>

          <p>public class Latihan3 {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String nama = &quot;Deva Marlina&quot;;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String asal_sekolah = &quot;SMK N 3 Mukomuko&quot;;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String kota = &quot;Mukomuko&quot;;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String npm1 = &quot;G1A022039&quot;;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;byte umur1 = &quot;19&quot;;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;short tahun = &quot;2002&quot;;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String bulan = &quot;Oktober&quot;;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;byte tanggal = &quot;19&quot;;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String hobi = &quot;Nonton Drachin dan Donghua&quot;;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String prodi1 = &quot;Informatika&quot;;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String alamat = &quot;Karang Jaya, Teras Terunjam, Mukomuko&quot;;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Assalamualaikum Wr. Wb.&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Perkenalkan, Nama Saya &quot; + nama + &quot; &quot; + &quot;dengan NPM : &quot; + npm1 + &quot; &quot; + &quot;Prodi &quot; + prodi1<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Saya berumur &quot; + umur1 + &quot; &quot; + &quot;tahun&quot; );<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Saya berasal dari &quot; + asal_sekolah);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Saya lahir di &quot; + kota + &quot; &quot; + &quot;pada tanggal &quot; + tanggal + &nbsp;&quot; &quot; + bulan + &nbsp;&quot; &quot; + tahun);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Ngomong ngomong tentang hobi, hobi saya yaitu &quot; + hobi);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Saya beralamat di &quot; + alamat);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} &nbsp; }</p>

          <p>&nbsp;</p>

          <p>kalau ada kesalahan mohon bimbingannya agar program dapat dijalankan sesuai perintah latihan3</p>

          <p>&nbsp;</p>

          <p>terimakasih semuanya:)</p>','created_at' => '2022-08-25 06:47:07','updated_at' => '2022-08-25 06:47:07'),
            array('id' => '21','materi_id' => '75','mahasiswa_id' => '42','judul' => 'Konversi Tipe Data','diskusi' => '<p>Assalamualaikum Wr. Wb.</p>

          <p>Izin bertanya bu, bang dan teman-teman semua.</p>

          <p>Apakah tipe data String dalam bentuk kalimat bisa dikonversikan menjadi bentuk tipe data lainnya?</p>

          <p>Terima kasih bu,bang dan teman-teman semua.</p>

          <p>Wasalamualaikum Wr. Wb.</p>

          <p>&nbsp;</p>','created_at' => '2022-08-25 09:40:38','updated_at' => '2022-08-25 09:40:38'),
            array('id' => '22','materi_id' => '74','mahasiswa_id' => '118','judul' => 'Eclipse tidak bisa di Run','diskusi' => '<p>Assalamualaikum Wr. Wb. Izin bertanya bu, bang dan teman-teman semua. sebelumnya perkenalkan nama saya Muhammad Hisbulah Endima T.<br />
          Npm G1A022034.<br />
          Eclipse tidak bisa di run.<br />
          Berikut codingan saya..<br />
          package Praktikum1;<br />
          public class Main {<br />
          private static void main(String[] args) {<br />
          System.out.println(&quot;Halo Mahasiswa UNIB Perkenalkan Nama Saya Muhammad Hisbulah Endima Tandjung&quot;);<br />
          }<br />
          }.</p>

          <p>pas di run muncul tulisan Unable to launch. The selection cannot be launched and there are no recent launches, mohon solusinya teman teman,bang asdos dan ibu endina..</p>','created_at' => '2022-08-25 12:29:07','updated_at' => '2022-08-25 12:29:07'),
            array('id' => '23','materi_id' => '75','mahasiswa_id' => '7','judul' => 'Refleksi  -  Tipe Data','diskusi' => '<p>Halo semua mahasiswa,</p>

          <p>Kemarin di kelas kita sudah mempelajari Tipe Data Java.</p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Silahkan tuliskan singkat tentang (pilih salah satu) </span></span></p>

          <ul>
              <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">konsep penting apa yang berkesan pada kalian, atau</span></span></li>
              <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">pengalaman belajar, atau</span></span></li>
              <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">pengetahuan yang baru diketahui,&nbsp; atau </span></span></li>
              <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">tantangan yang dihadapi ketika mempelajari Tipe Data. </span></span>&nbsp;</li>
          </ul>

          <p>Saya sangat senang melihat antusias kalian belajar. Pertahankan ya&nbsp;<img alt="yes" src="https://adaptif.rumahilmu.org/assets/ckeditor/plugins/smiley/images/thumbs_up.png" style="height:23px; width:23px" title="yes" /><img alt="laugh" src="https://adaptif.rumahilmu.org/assets/ckeditor/plugins/smiley/images/teeth_smile.png" style="height:23px; width:23px" title="laugh" /></p>

          <p>Salam,&nbsp;</p>

          <p>Endina Putri</p>','created_at' => '2022-08-25 14:43:02','updated_at' => '2022-08-25 14:43:02'),
            array('id' => '24','materi_id' => '74','mahasiswa_id' => '66','judul' => 'Pengenalan Java, Tipe Dat, dan Operasi Aritmetika','diskusi' => '<p>Assalamualaikum warahmatullahi wabarakatuh.</p>

          <p>Saya izin bertanya, Bu, mbak, bang, dan kawan-kawan sekalian. Bagaimana cara untuk mengkonversi tipe data char ke tipe data lainnya?? Terima kasih atas bantuannya, Bu, mbak, bang, dan teman-teman.&nbsp;</p>

          <p>Wassalamu&#39;alaikum warahmatullahi wabarakatuh</p>','created_at' => '2022-08-25 17:41:22','updated_at' => '2022-08-25 17:41:22'),
            array('id' => '25','materi_id' => '75','mahasiswa_id' => '30','judul' => 'Latihan 4','diskusi' => '<p>Assalamualaiku wr. wb.</p>

          <p>Saya Deva Marlina NPM G1A022039 ingin bertanya mengenai&nbsp; perintah di Latihan 4 itu maksudnya bagaimana?&nbsp;</p>

          <p>Perintah di Latihan 4 yaitu :</p>

          <p>4.1&nbsp; konstruksikan kode tipe data pada latihan 3 ke bentuk tipe data lain yang kompatibel</p>

          <p>4.2 simpulkan alasan kode yang disusun, jenis konversi tipe data implisit dan eksplisit!</p>

          <p>Terimakasih:)&nbsp;</p>','created_at' => '2022-08-25 18:21:46','updated_at' => '2022-08-25 18:21:46'),
            array('id' => '26','materi_id' => '75','mahasiswa_id' => '63','judul' => 'Pengayaan 2','diskusi' => '<p>Izin bertanya ibu, bang, mbak, dan teman teman semuanya. Apakah Latihan pengayaan yang dikerjakan cuman pengayaan 1 dan pengayaan 3, dan tidak perlu mengerjakan pengayaan 2 ? Soalnya pengayaan 2 itu tidak ada latihannya ibu, bang, mbak, dan teman teman semuanya.</p>

          <p>Terimakasih ibu, bang, mbak, dan teman teman semuanya.</p>','created_at' => '2022-08-25 19:42:10','updated_at' => '2022-08-25 19:42:10'),
            array('id' => '27','materi_id' => '75','mahasiswa_id' => '51','judul' => 'konversi tipe data','diskusi' => '<p>assalammualaikum wr wb bu, abang/mbak asdos dan teman teman sekalian&nbsp;<br />
          disini saya mau bertanya, saya sudah mencoba mengapa&nbsp; tidak bisa konversi eksplisit?&nbsp; contohnya dari short ke byte slalu eror<br />
          jadi solusinya bagaimana?<br />
          wassalammualaikum wr wb</p>','created_at' => '2022-08-25 20:25:53','updated_at' => '2022-08-25 20:25:53'),
            array('id' => '28','materi_id' => '74','mahasiswa_id' => '35','judul' => 'Latihan 2','diskusi' => '<p>Assalamualaikum Wr. Wb. Izin bertanya bu, bang,mba dan teman-teman semuanya. sebelumnya perkenalkan nama Baim Mudrik Aziz</p>

          <p>Npm G1A022071</p>

          <p>Latihan 1.1</p>

          <p>package kelasa1;</p>

          <p>public class latihan1 {</p>

          <p>public static void main(String[] args) {</p>

          <p>System.out.println(&quot;Halo Mahasiswa UNIB&quot;);</p>

          <p>} }</p>

          <p>Latihan2.1</p>

          <p>public class TipeData {</p>

          <p>public static void main(String args[]) {</p>

          <p>int a = 5;</p>

          <p>byte b = 4;</p>

          <p>float c = 12.345678910f;</p>

          <p>double d = 12.345678910d;</p>

          <p>char e = &#39;a&#39;;</p>

          <p>System.out.println(a);</p>

          <p>System.out.println(b);</p>

          <p>System.out.println(c);</p>

          <p>System.out.println(d);</p>

          <p>System.out.println(e);</p>

          <p>} }}</p>

          <p>Pertanyaannya kenapa kemaren saya coba kurung kurawal yang latihan 2.1 yang akhir 2 eror terus saya coba kurung kurawal nya 3 baru gak eror lagi penyebab nya apa ya?dan kenapa berbeda dari latihan 1.1,soalnya kemaren di tunjuk abang di lab</p>','created_at' => '2022-08-25 21:59:51','updated_at' => '2022-08-25 21:59:51'),
            array('id' => '29','materi_id' => '74','mahasiswa_id' => '33','judul' => 'Mencari solusi kesalahan latihan soal 1','diskusi' => '<p>Assalamualaikum wr wb,maaf mengganggu&#39;waktunya sebentar ibuk dosen dan teman&sup2;ku sekalian.Sebelumnya perkenalkan nama saya weko abbror npm G1A022025,izin untuk bertanya</p>

          <p>Latihan soal 1</p>

          <p>1.package kelasA;</p>

          <p>2.public class SoalNo1 {</p>

          <p>3.&nbsp; &nbsp; &nbsp; &nbsp;public class kelasku {</p>

          <p>4.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;public static void main(string [] args) {</p>

          <p>5.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Halo Mahasiswa UNIB&quot;); }</p>

          <p>6.&nbsp; &nbsp; &nbsp; &nbsp;}</p>

          <p>7.</p>

          <p>8.}</p>

          <p>&nbsp;</p>

          <p>ITU PAS DIRUN KOK EROR Y PADAHAL GD TANDA &quot;X&quot;merah??mohon pencerahannya dong teman teman🙏</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>','created_at' => '2022-08-25 23:54:29','updated_at' => '2022-08-25 23:54:29'),
            array('id' => '30','materi_id' => '74','mahasiswa_id' => '31','judul' => 'Tipe data','diskusi' => '<p>assalamualaikum</p>

          <p>Saya Hanif Abdullah Zuhdi NPM G1A022041 ingin bertanya. Bagaimana&nbsp; cara konversi tipe data string menjadi tipe data lainnya?</p>

          <p>Saya sudah mencoba konversikan ke tipe data int tapi error, ex :</p>

          <p>String kendaraan = &quot;mobil&quot;;<br />
          int c = int.parseInt(&quot;mobil&quot;);<br />
          c = kendaraan;</p>

          <p>Program tersebut tidak dapat dijalankan</p>

          <p>Terimakasih</p>','created_at' => '2022-08-26 11:35:30','updated_at' => '2022-08-26 11:35:30'),
            array('id' => '31','materi_id' => '74','mahasiswa_id' => '104','judul' => 'Latihan 2 Tipe data menengah','diskusi' => '<p>Assalamualaikum Warahmatullahi Wabarakatuh&nbsp; ibu dan abang sekalian, izin Bertanya&nbsp;</p>

          <p>Contoh 2:&nbsp;Apabila diketahui data berikut</p>

          <ol>
              <li>5</li>
              <li>&lsquo;L&rsquo;</li>
              <li>&ldquo;mobil&rdquo;</li>
              <li>5.0</li>
              <li>5.0f</li>
              <li>-5</li>
          </ol>

          <p>Latihan 2:<br />
          2.1.&nbsp;Rekomendasikan tipe data yang tepat dari data Contoh 2.<br />
          2.2.&nbsp;&nbsp;Simpulkan karakteristik penggunaan setiap tipe data!</p>

          <p>&nbsp;</p>

          <p>Maksud dari Karakteristik Penggunaan setiap tipe data Itu apa Ya? Terima kasih sebelumnya buk</p>','created_at' => '2022-08-26 12:39:40','updated_at' => '2022-08-26 12:39:40'),
            array('id' => '32','materi_id' => '74','mahasiswa_id' => '48','judul' => 'Tipe data','diskusi' => '<p>Assalamualaikum ibu,Abang,mbak dan teman2 semua perkenalkan saya Arya Mulahernawan dengan NPM G1A022029</p>

          <p>Izin bertanya kalau ingin membuat angka yang ada koma dan ingin membuat kata atau kalimat itu menggunakan tipe data apa ?</p>

          <p>Terus kalau mau buat lembar kerja individu nya itu menggunakan aplikasi atau tidak ,kalau menggunakan aplikasi nama aplikasinya itu&nbsp; apa? Mohon bantuan nya terimakasih&nbsp;</p>','created_at' => '2022-08-26 14:25:53','updated_at' => '2022-08-26 14:25:53'),
            array('id' => '33','materi_id' => '74','mahasiswa_id' => '41','judul' => 'latihan 4 Tipe Data Menengah','diskusi' => '<p>Assalamualaikum ibu,Abang,mbak dan teman2 semua perkenalkan saya Fanni Ghina Athiyyah dengan NPM G1A022087 &nbsp;Izin bertanya.&nbsp;</p>

          <p>cara untuk mengkonversikan &nbsp;tipe data dari char &nbsp;ke string atau sebaliknya itu bagaimana ya? Mohon bantuannya terima kasih</p>','created_at' => '2022-08-26 18:26:32','updated_at' => '2022-08-26 18:26:32'),
            array('id' => '34','materi_id' => '77','mahasiswa_id' => '72','judul' => 'Tipe-tipe data','diskusi' => '<p>Assalamualaikum&nbsp;</p>

          <p>Sebelum nya perkenalkan Nama saya Rafi afrian Dengan Npm :G1A022033</p>

          <p>Mohon izin Bapak/ibuk ,teman-teman ,abang/emabak sekalin&nbsp;</p>

          <p>Saya ingin bertanya yaitu bagaimana cara membuat sepasi antar baris/paragraf pada hasil codingan kita</p>

          <p>Sekian pertanyaan saya Terimakasih.</p>','created_at' => '2022-08-26 21:33:00','updated_at' => '2022-08-26 21:33:00'),
            array('id' => '35','materi_id' => '75','mahasiswa_id' => '30','judul' => 'Kuis Post Test','diskusi' => '<p>Assalamualaikum</p>

          <p>Saya tadi mencoba untuk mengerjakan kuis post test di soal berikut :</p>

          <ol>
              <li><code>String S1 = &quot;universitas bengkulu&quot;;</code></li>
              <li><code>String S2 = &quot;oke&quot;;</code></li>
              <li><code>String Frasa1 = S1.substring(S1.indexOf(&quot;i&quot;), S1.indexOf(&quot;e&quot;));</code></li>
              <li><code>String Frasa1 = S1.substring(S1.indexOf(&quot;v&quot;), S1.indexOf(&quot;b&quot;));</code></li>
              <li><code>String Frasa2 = S2.substring(1);</code></li>
              <li><code>String Frasa2 = S2.substring(2);</code></li>
              <li><code>System.out.println(Frasa1 + Frasa2);</code></li>
          </ol>

          <p>Apabila ingin membuat luaran teks &ldquo;versitas ke&rdquo; maka susunan kode yang benar adalah...</p>

          <p>setelah saya coba tidak ada pilihan jawaban (a-d) pada soal pilihan ganda yang sesuai untuk menghasilkan sebuah jawaban sesuai perintah yaitu &quot;versitas ke&quot;&nbsp;</p>

          <p>Setelah saya lihat ternyata kesalahannya ada pada program no 3.&nbsp;<code>String Frasa1 = S1.substring(S1.indexOf(&quot;i&quot;), S1.indexOf(&quot;e&quot;)); program ini dihapus dan juga program no.5&nbsp;String Frasa2 = S2.substring(1);</code></p>

          <p>no 6.&nbsp;<code>String Frasa2 = S2.substring(2); maka hasilnya menjadi &quot;versitas e&quot;</code></p>

          <p><code>Karna untuk menciptakan jawaban sesuai perintah yaitu &quot;versitas ke&quot; angka didalam kurung harus diubah menjadi angka 1.&nbsp;</code></p>

          <p><code>ex :&nbsp;String Frasa2 = S2.substring(1); maka setelah di run akan menghasilkan jawaban sesuai perintah yaitu &quot;versitas ke&quot;</code></p>

          <p>&nbsp;</p>

          <p><code>jadi bagaimana solusinya ya?</code></p>

          <p><code>Gomawo:)</code></p>','created_at' => '2022-08-27 00:11:48','updated_at' => '2022-08-27 00:11:48'),
            array('id' => '36','materi_id' => '74','mahasiswa_id' => '87','judul' => 'eror','diskusi' => '<p>Assalamualaikum Wr. Wb.&nbsp;<br />
          permisi ibu, mbak,abang,dan teman teman semuanya.<br />
          izin bertanya, cara membuat enter melalui coding agar jika di run bisa memberi jarak antara data 1 dan data yang lainnya itu bagaimana ya?</p>

          <p>terimakasih<br />
          Wassalamualaikum Wr, Wb.</p>','created_at' => '2022-08-27 10:55:14','updated_at' => '2022-08-27 10:55:14'),
            array('id' => '37','materi_id' => '74','mahasiswa_id' => '87','judul' => 'eror','diskusi' => '<p>Assalamualaikum Wr. Wb.&nbsp;<br />
          permisi ibu, mbak,abang,dan teman teman semuanya.<br />
          izin bertanya, cara membuat enter melalui coding agar jika di run bisa memberi jarak antara data 1 dan data yang lainnya itu bagaimana ya?</p>

          <p>terimakasih<br />
          Wassalamualaikum Wr, Wb.</p>','created_at' => '2022-08-27 10:55:15','updated_at' => '2022-08-27 10:55:15'),
            array('id' => '38','materi_id' => '74','mahasiswa_id' => '45','judul' => 'Error','diskusi' => '<p>Assalamualaikum.</p>

          <p>Maaf mengganggu waktunya Bu, Bang, Mbak, dan teman-teman semua. Izin bertanya.</p>

          <p>Kalau hasil atau kode yang error di luaran tidak mau muncul&nbsp; atau tidak bisa diketahui di console, solusinya bagaimana, ya?</p>

          <p>Terima kasih banyak.</p>

          <p>Wassalamualikum.</p>','created_at' => '2022-08-27 11:46:13','updated_at' => '2022-08-27 11:46:13'),
            array('id' => '39','materi_id' => '74','mahasiswa_id' => '126','judul' => 'Latihan 4 Tipe Data Menengah','diskusi' => '<p>Assalamualaikum.</p>

          <p>Maaf mengganggu waktunya Bu, Bang, Mbak, dan teman-teman semua. Izin bertanya.</p>

          <p>public class KonversiTipeData {<br />
          &nbsp; &nbsp;public static void main(String args[]) {<br />
          &nbsp; &nbsp;byte x;<br />
          &nbsp; &nbsp;int a = 270;<br />
          &nbsp; &nbsp;double b = 128.128;<br />
          &nbsp; &nbsp;System.out.println(&quot;int dikonversi ke byte&quot;);<br />
          &nbsp; &nbsp;x = (byte) a;<br />
          &nbsp; &nbsp;System.out.println(&quot;a dan x &quot; + a + &quot; &quot; + x);<br />
          &nbsp; &nbsp;System.out.println(&quot;double dikonversi ke int&quot;);<br />
          &nbsp; &nbsp;a = (int) b;<br />
          &nbsp; &nbsp;System.out.println(&quot;b dan a &quot; + b + &quot; &quot; + a);<br />
          &nbsp; &nbsp;System.out.println(&quot;double dikonversi ke byte&quot;);<br />
          &nbsp; &nbsp;x = (byte)b;<br />
          &nbsp; &nbsp;System.out.println(&quot;b dan x &quot; + b + &quot; &quot; + x);<br />
          }&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }</p>

          <p>&nbsp;</p>

          <p><strong>Latihan 4:</strong><br />
          4.1.&nbsp;Rekomendasikan konversi tipe data pada Latihan 2 ke bentuk tipe data lain yang kompatibel.<br />
          4.2.&nbsp;Simpulkan alasan jenis konversi tipe data tersebut! &nbsp;</p>

          <p>Ini ngerjain soalnya bagaimana ya? saya sampai sekarang masih belum paham. Terima kasih Bu, Bang, Mbak, dan teman-teman</p>','created_at' => '2022-08-27 14:57:10','updated_at' => '2022-08-27 14:57:10'),
            array('id' => '40','materi_id' => '77','mahasiswa_id' => '110','judul' => 'Perbedaan antara Float dan Double','diskusi' => '<p>Assalamualaikum Bu, Mbak, Abang, dan teman-teman sekalian.</p>

          <p>Sebelumnya saya izin memperkenalkan diri, nama saya Ulfa stevi juliana (G1A022042). Jadi saya masih kebingungan dengan perbedaan dalam menggunakan tipe data float dan double, serta maksud huruf&nbsp; yang terdapat pada angka (contoh :&nbsp;12.345678910f dan&nbsp;12.345678910d). Sebenrnya saya sudah mencari di internet mengnai penjelasannya, namun saya belum menemukan penjelasan yang bisa saya pahami sepenuhnya.&nbsp;</p>

          <p>Ada yang bisa kasih tau penjelasan sederhanya atau sumber apa yang harus saya kunjungi untuk mendapatkan penjelasan tentang itu?</p>

          <p>Terima Kasihh :)</p>','created_at' => '2022-08-28 09:42:23','updated_at' => '2022-08-28 09:42:23'),
            array('id' => '41','materi_id' => '74','mahasiswa_id' => '58','judul' => 'Pembahasan Soal Latihan 4','diskusi' => '<p>Assalamualaikum Bu, Mbak, Abang, dan Teman-Teman</p>

          <p>Sebelumnya maaf mengganggu waktunya untuk latihan nomor 4 apakah benar cara menggkonversi tipe datanya seperti ini&nbsp;&nbsp;</p>

          <p>package kelasa1;</p>

          <p>public class latihan4 {<br />
          &nbsp;&nbsp; &nbsp;public class KonversiTipeData {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; public static void main(String args[]) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; byte a =5;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; int x;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; x = a;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; double b;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; b = x;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; System.out.println(&quot;int dikonversi ke byte&quot; );<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; x = (byte) a;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; System.out.println(&quot;a dan x &quot; + a + &quot; &quot; + x);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; System.out.println(&quot;double dikonversi ke int&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; x = (int) b;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; System.out.println(&quot;b dan a &quot; + b + &quot; &quot; + a);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; System.out.println(&quot;double dikonversi ke byte&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; x = (byte)b;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; System.out.println(&quot;b dan x &quot; + b + &quot; &quot; + x);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} &nbsp; &nbsp; &nbsp;}<br />
          }</p>

          <p>luaran:</p>

          <p>int dikonversi ke byte<br />
          a dan x 5 5<br />
          double dikonversi ke int<br />
          b dan a 5.0 5<br />
          double dikonversi ke byte<br />
          b dan x 5.0 5</p>

          <p>Jika ada kesalahan atau kekliruan mohon untuk koreksinya Bu, Mbak, Abang, dan Teman-teman sekalian&nbsp;</p>

          <p>Terimakasih&nbsp;</p>

          <p>Wassalamualaikum</p>','created_at' => '2022-08-28 10:55:15','updated_at' => '2022-08-28 10:55:15'),
            array('id' => '42','materi_id' => '76','mahasiswa_id' => '157','judul' => 'konversi tipe data','diskusi' => '<p>assalamualaikum wr wb nama saya Muhammad Rifky Ramadani NPM:G1F022039,izin bertanya,ketika kita ingin konversi data implisit itukan kita tidak menggunakan casting atau deklarasi,saya ingin bertanya apa yang terjadi ketika kita mengonversi data implisit tetapi menggunakan casting atau deklarasi ?</p>

          <p>contoh:</p>

          <p>yang tadi nya seperti ini</p>

          <p>short a = 2000;<br />
          int b;<br />
          b = a;</p>

          <p>ketika menggunakan deklarasi atau casting seperti ini:</p>

          <p>short a = 2000;<br />
          int b = (short) a;</p>

          <p>kertika kita konversi tipe data implisit tetapi kita menggunakan casting atau deklarasi apa yang akan terjadi?</p>

          <p>mohon bimbingannya dan pencerahannya terima kasih&nbsp;</p>

          <p>wassalamualaikum wr wb<br />
          &nbsp;</p>','created_at' => '2022-08-29 10:39:04','updated_at' => '2022-08-29 10:39:04'),
            array('id' => '43','materi_id' => '75','mahasiswa_id' => '53','judul' => 'Tugas Kelompok','diskusi' => '<p>Assalamu&#39;alaikum bu</p>

          <p>Untuk tugas kelompok apakah 1 anggota kelompok saja yang mengumpulkan tugas apa semua anggota kelompok harus mengumpul tugas kelompok bu ?</p>','created_at' => '2022-08-29 22:31:16','updated_at' => '2022-08-29 22:31:16'),
            array('id' => '44','materi_id' => '76','mahasiswa_id' => '144','judul' => 'Penginstalisasi java','diskusi' => '<p>Assalamualaikum ...&nbsp;</p>

          <p>Maaf Menganggu, bg, mbak, bu sekalian.&nbsp;</p>

          <p>Perkenalkan nama saya : Muhammad Faishal Makarim&nbsp;</p>

          <p>NPM : G1F022017</p>

          <p>Dari Prodi sistem Informasi</p>

          <p>Izin Bertanya</p>

          <p>Di Platform Java Itu terdapat banyak sekali SE (Standard Edition) . software yang digunakan Eclipse Java SE 18</p>

          <p>Contoh :&nbsp;</p>

          <p>. SE 11,7,8,2,18</p>

          <p>Semisal saya Memakai SE 18. Kemudian berpindah Ke SE 11 apakah akan Ada Pengaruh terhadap Pemograman Saya. Dan Juga Apa Arti Dari Standar Edition itu.&nbsp;</p>

          <p>&nbsp;</p>

          <p>Sekian Dari saya</p>

          <p>Terima kasih.. Bg, mbak, bu sekalian</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>','created_at' => '2022-08-31 13:08:37','updated_at' => '2022-08-31 13:08:37'),
            array('id' => '45','materi_id' => '76','mahasiswa_id' => '7','judul' => 'Perkenalan dan Ekspektasi Kelas Bahasa Pemrograman','diskusi' => '<p>Assalamualaikum,<br />
          Selamat datang mahasiswa Bahasa Pemrograman<br />
          Saya juga mengucapkan Selamat kepada kalian yang telah berhasil masuk ke Program Studi Sistem Informasi.</p>

          <p><br />
          Pada forum diskusi ini, silahkan kalian saling berkenalan, bisa dengan menyampaikan salah satu hal berikut:<br />
          - latar belakang pendidikan,<br />
          - motivasi atau ekspektasi mengikuti MK ini,<br />
          - persepsi awal tentang MK Bahasa Pemrograman ini</p>

          <p>Semoga kalian bisa saling belajar bersama mempelajari MK ini sebagai dasar untuk perkuliahan di Sistem Informasi yang selanjutnya. Semangat yaaa&nbsp;</p>

          <p><br />
          Salam,<br />
          Endina Putri</p>','created_at' => '2022-08-31 14:40:50','updated_at' => '2022-08-31 14:40:50'),
            array('id' => '46','materi_id' => '73','mahasiswa_id' => '128','judul' => 'Konversi tipe data','diskusi' => '<p>Assalamualaikum,</p>

          <p>&nbsp;</p>

          <p>Izin ibu, abng, dan teman teman lainnya</p>

          <p>&nbsp;</p>

          <p>Sebelumnya perkenalkan nama saya Bayu Pamungkas, NPM G1F022029, Kelas A prodi Sistem Informasi</p>

          <p>&nbsp;</p>

          <p>Mau bertanya soal latihan 4 kelas menengah, kemarin kan waktu di kelas itu konversi tipe data yang bahannya dari latian 2, terus itu di ubah ke apa? Contoh yg No 2 itu &#39;L&#39; , berarti tipe data char di ubah ke tipe data apa?.....</p>','created_at' => '2022-09-01 07:49:55','updated_at' => '2022-09-01 07:49:55'),
            array('id' => '47','materi_id' => '75','mahasiswa_id' => '112','judul' => 'Materi Operator','diskusi' => '<p>Assalamualaikum wr wb, izin bertanya bu, bang, mbak, dan teman-teman sekalian. Saya sudah melihat tingkatan dari hasil post test yang saya kerjakan, tetapi saya belum bisa mengakses materi berikutnya, itu memang belum bisa diakses atau gimana ya? Terimakasih, mohon bantuannya. Wassalamualaikum wr wb.</p>','created_at' => '2022-09-01 08:31:58','updated_at' => '2022-09-01 08:31:58'),
            array('id' => '48','materi_id' => '74','mahasiswa_id' => '43','judul' => 'Materi Operator','diskusi' => '<p>Assalamualaikum,bu, bang mbak dan teman teman sekalian.</p>

          <p>izin bertanya bu, bang mbak, setelah saya mengerjakan post test kenapa saya belum bisa mengakses materi operator apa karena belum bisa diakses apa gimana bu bang mbak.</p>

          <p>Terima Kasih</p>','created_at' => '2022-09-01 08:48:35','updated_at' => '2022-09-01 08:48:35'),
            array('id' => '49','materi_id' => '74','mahasiswa_id' => '34','judul' => 'Postest','diskusi' => '<p>Assalamualaikum buk<br />
          Perkenalkan&nbsp;<br />
          Nama saya: Mezi<br />
          Npm: G1A022077<br />
          Izin bertanya kenapa pro test nya belom muncul? terimah kasih buk.</p>','created_at' => '2022-09-01 08:57:05','updated_at' => '2022-09-01 08:57:05'),
            array('id' => '50','materi_id' => '75','mahasiswa_id' => '91','judul' => 'Masalah protest','diskusi' => '<p>Assalamualkum buk,</p>

          <p>izin bertanya buk,bang,teman-teman, kenapa protest saya belum bisa dikerjakan padahal sudah mengumpulkan tugas individu,tugas kelompak,dan sudah berkomentar di forum diskusi. mohon solusinya ?</p>

          <p>terima kasih, Wassalamualaikum wr wb.</p>','created_at' => '2022-09-01 10:25:56','updated_at' => '2022-09-01 10:25:56'),
            array('id' => '51','materi_id' => '75','mahasiswa_id' => '38','judul' => 'Pengenalan Java dan Tipe Java','diskusi' => '<p>Assalamualaikum wr, wb. Izin bertanya bu, mbak, bang, dan teman-teman sekalian</p>

          <p>Saya sudah menyelesaikan kuis postest bu, untuk mengakses materi berikutnya apakah ada syarat tertentu yang harus dipenuhi atau tinggal menunggu waktu saja bu? Terima kasih dan mohon pencerahannya bu. Wassalamualaikum wr, wb.</p>','created_at' => '2022-09-01 12:09:13','updated_at' => '2022-09-01 12:09:13'),
            array('id' => '52','materi_id' => '76','mahasiswa_id' => '138','judul' => 'Konversi tipe data','diskusi' => '<p>Assalamualaikum buk,mbak,bang..perkenalkan&nbsp;</p>

          <p>Saya Herdiansah dengan NPM G1F022057 Izin bertanya..</p>

          <p>Kenapa yang saya jika di konversi dari byte ke short hasilnya min(-)dan berbeda sama teman saya hasilnya tetap(+)..kenapa ya bg?</p>

          <p>Makasih</p>

          <p>&nbsp;</p>','created_at' => '2022-09-02 09:16:43','updated_at' => '2022-09-02 09:16:43'),
            array('id' => '53','materi_id' => '75','mahasiswa_id' => '40','judul' => 'tipe data string','diskusi' => '<p>assalamualaikum wr wb perkenalkan nama saya ade irawan NPM:G1A022083 izin bertanya</p>

          <p>kenapa tipe data string bisa memuat semua komponen di mulai dari huruf,angka dll</p>

          <p>sedangkan tipe data lain tidak</p>

          <p>mohon pencerhaannya🙏</p>

          <p>wasallamualaikum wr wb</p>','created_at' => '2022-09-02 19:31:57','updated_at' => '2022-09-02 19:31:57'),
            array('id' => '54','materi_id' => '76','mahasiswa_id' => '143','judul' => 'Masalah Apk Eclipse','diskusi' => '<p>Assalammualaikum warahmatullahi wabarakatuh.. selamat malam... sebelumnya izinkan saya memperkenalkan diri terlebih dahulu</p>

          <p>Nama : Della Erlina</p>

          <p>NPM : G1F022019</p>

          <p>izin bertanya bu, mbak, abang dan teman2, jadi disini saya ada kendala saat saya ingin memulai membuat codingan, padahal saya sudah mengikuti tata cara seperti yang diajarkan di lab, tapi kenapa saya tidak bisa melakukan proses pencodingan... sebelumnya bisa kok , apakah ada yang saya salah tekan?</p>

          <p><img src="data:image/png;base64,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" /></p>

          <p>makasih atas perhatiannya wasalammualaikum wr wb</p>

          <p>&nbsp;</p>','created_at' => '2022-09-02 21:26:26','updated_at' => '2022-09-02 21:26:26'),
            array('id' => '55','materi_id' => '73','mahasiswa_id' => '145','judul' => 'Bahasa Pemrograman','diskusi' => '<p>Assalamualaikum wr wb&nbsp;</p>

          <p>Perkenalkan nama saya Arief Haris Prasetyo Rizaldi, NPM G1F022073 Fakultas Teknik prodi Sistem informasi</p>

          <p>Izin bertanya bg, mbak ,teman teman serta ibu dosen 🙏</p>

          <p>Apakah bahasa Pemrograman Java cocok digunakan oleh Pemula?&nbsp;</p>

          <p>Bila cocok apa alasan ny dan bila tidak cocok apa alasan ny?</p>

          <p>Sekian terima kasih 🙏</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>','created_at' => '2022-09-03 12:09:36','updated_at' => '2022-09-03 12:09:36'),
            array('id' => '56','materi_id' => '76','mahasiswa_id' => '148','judul' => 'Pemrograman Eclipse','diskusi' => '<p>Assalamualaikum wr wb&nbsp;</p>

          <p>Izin memperkenalkan diri:</p>

          <p>Nama: Muhammad Salman Alfarizi&nbsp;</p>

          <p>NPM: G1F022047</p>

          <p>Prodi: Sistem Informasi (A)</p>

          <p>Izin bertanya Ibu, Bang, Mbak dan Teman-teman. Saya ingin bertanya mengenai pemrograman di Eclipse. Jadi saya disini mengalami kendala saat melakukan coding di Eclipse yaitu tipe data primitif tidak muncul saat di run, yang muncul di luaran hanya tipe data non-primitif. Kira-kira apa ya penyebabnya? Mohon bantuannya jika mengetahui solusi untuk permasalahan yang saya alami. Atas perhatiannya saya ucapkan Terima Kasih.</p>

          <p>Wassalamu&#39;alaikum wr wb</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>','created_at' => '2022-09-03 12:42:58','updated_at' => '2022-09-03 12:42:58'),
            array('id' => '57','materi_id' => '75','mahasiswa_id' => '49','judul' => 'Other Way To Convert Byte To String','diskusi' => '<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Assalamualaikum wr wb</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Izin memperkenalkan diri :</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Nama&nbsp;&nbsp;&nbsp; : David Thimotius Rarung</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">NPM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : G1A022045</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Prodi&nbsp;&nbsp;&nbsp;&nbsp; : Teknik Informatika (A)</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Izin bertanya Ibu, abang, mbak, dan teman-teman, Saat saya searching-searching di internet mengenai konversi tipe data saya menemukan cara koversi tipe data byte menjadi string yang sangat menarik bagi saya. Konversi ini menggunakan import java.nio.charset.StandardCharsets dan kodenya berbentuk seperti ini :</span></span></p>

          <p><em>package latihantipedata;</em></p>

          <p><em>import java.nio.charset.StandardCharsets;</em></p>

          <p><em>public class Test {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;byte[] umur = &quot;18&quot;.getBytes(StandardCharsets.UTF_8);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String u = new String(umur, StandardCharsets.UTF_8);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Umur saya :&quot; + u + &quot; tahun&quot;);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</em></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Dan hasilnya akan terlihat seperti ini :</span></span></p>

          <p><em><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Umur saya :18 tahun</span></span></em></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Mungkin kode seperti terlalu cepat untuk pemula seperti saya pelajari, Namun saya sangat tertarik dengan kode ini. Ada banyak sekali yang saya ingin ketahui dari kode ini, misalnya StandardCharsets itu apa sih?, kenapa menggunakan UTF_8? karna setelah saya lihat juga ada UTF_16 dan yang lainnya, apakah bisa digunakan untuk konversi tipe data lain? dan lain-lain lagi. &nbsp;Saya harap Ibu, abang, mbak dan teman-teman yang tahu bisa membantu saya mempelajari kode yang satu ini, dan saya harap pertanyaan saya mengenai kode ini dapat membantu teman-teman yang lain mempelajari hal-hal baru. sekian pertanyaan dari saya atas perhatiannya saya ucapkan terima kasih.</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Wassalamualaikum wr wb</span></span></p>','created_at' => '2022-09-03 16:10:21','updated_at' => '2022-09-03 16:10:21'),
            array('id' => '58','materi_id' => '76','mahasiswa_id' => '129','judul' => 'Pengenalan Java, Tipe Data','diskusi' => '<p>Assalammualaikum warahmatullahi wabarakatu&nbsp;<br />
          sebelumnya izinkan saya memperkenalkan diri terlebih dahulu perkenalkan nama saya Julia Dwi Azizah , Npm G1F022009</p>

          <p>izin bertanya bu, mbak, abang dan teman2, saya masih bingung kenapa nilai int a = 555555555; pada soal latihan 2 harus diubah dengan cara dikurangi agar ketika di run tidak error.</p>

          <p>terima kasih, Wassalamualaikum wr wb.</p>','created_at' => '2022-09-03 19:37:44','updated_at' => '2022-09-03 19:37:44'),
            array('id' => '59','materi_id' => '73','mahasiswa_id' => '164','judul' => 'Bagaimana cara kita mensetting/mengubah java private ke public tanpa mengulang kembali codingan ?','diskusi' => '<p>Asalamualaikum Warahmatullahi Wabaraktu</p>

          <p>Sebelumnya izinkan saya mempekalkan diri terlebih dahulu, perkenalkan nama saya suryaningsih dengan NPM : G1F022049.</p>

          <p>Izin bertanya bu, bang, mbak dan teman teman, Bagaimana cara kita mensetting/mengubah java private ke public tanpa mengulang kembali codingan ?</p>

          <p>Terimakasih Wassalamualaikum wr. wb</p>','created_at' => '2022-09-03 20:21:09','updated_at' => '2022-09-03 20:21:09'),
            array('id' => '60','materi_id' => '86','mahasiswa_id' => '79','judul' => 'Tugas Presentasi Operator','diskusi' => '<p>Assalamualaikum Bu, Abang-abang asdos serta teman-teman sekalian.</p>

          <p>Pada pertemuan minggu kemarin Ibu ada memberi tugas presentasi mengenai materi operator dan disuruh untuk mempresentasikannya minggu depannya. Untuk tugasnya Ibu menyuruh untuk susun 3 ekspresi operator gabungan, jadi itu maksudnya kami menggabungkan 3 ekspresi dalam 1 kode Bu? dan juga untuk presentasinya apakah kelompok 1-3 maju semua atau salah satu kelompok saja Bu? Terima kasih Bu&nbsp;</p>','created_at' => '2022-09-03 20:29:21','updated_at' => '2022-09-03 20:29:21'),
            array('id' => '61','materi_id' => '73','mahasiswa_id' => '158','judul' => 'Mengkonversi String menjadi Integer','diskusi' => '<p>Selamat malam.</p>

          <p>Izin memperkenalkan diri :</p>

          <p>Nama&nbsp;&nbsp;&nbsp; : F. Yosua P. Habeahan</p>

          <p>NPM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : G1F022025</p>

          <p>Prodi&nbsp;&nbsp;&nbsp;&nbsp; : Sistem Informasi (A)</p>

          <p>Izin bertanya Ibu, abang, mbak, dan teman-teman, Saat saya mencoba di&nbsp; mengenai konversi tipe data saya menemukan cara koversi tipe data String menjadi integer dan kodenya berbentuk seperti ini :</p>

          <p>&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp;String c = &quot;bil&quot;;<br />
          &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; int p;<br />
          &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; p = Integer.parseInt(c);<br />
          &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; System.out.println(p);</p>

          <p>Ketika saya menjalankan kode tersebut hasilnya:&nbsp;</p>

          <p>Exception in thread &quot;main&quot; java.lang.NumberFormatException: For input string: &quot;mobil&quot;<br />
          &nbsp;&nbsp; &nbsp;at java.base/java.lang.NumberFormatException.forInputString(NumberFormatException.java:67)<br />
          &nbsp;&nbsp; &nbsp;at java.base/java.lang.Integer.parseInt(Integer.java:668)<br />
          &nbsp;&nbsp; &nbsp;at java.base/java.lang.Integer.parseInt(Integer.java:786)<br />
          &nbsp;&nbsp; &nbsp;at mn.main(mn.java:6)</p>

          <p>&nbsp;</p>

          <p>Mengapa hasilnya begitu ya Bu,Bang,Mbak, dan kawan kwan? Mohon solusinya&nbsp; Bu,Bang,Mbak, dan kawan kwan</p>','created_at' => '2022-09-03 21:43:49','updated_at' => '2022-09-03 21:43:49'),
            array('id' => '62','materi_id' => '73','mahasiswa_id' => '140','judul' => 'Tipe data','diskusi' => '<p>Assalamualaikum Wr.Wb</p>

          <p>Selamat malam.</p>

          <p>Izin memperkenalkan diri :</p>

          <p>Nama&nbsp;&nbsp;&nbsp; : Muhammad Athaariq</p>

          <p>NPM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : G1F022023</p>

          <p>Prodi&nbsp;&nbsp;&nbsp;&nbsp; : Sistem Informasi (A)</p>

          <p>Izin bertanya Ibu, abang, mba, dan teman - teman sekalian , Apakah kita bisa mengkonversi data dari tipe data primitif ke tipe data non-primitif ??</p>

          <p>Terima kasih. Wasalamualaikum Wr. Wb</p>','created_at' => '2022-09-04 10:20:10','updated_at' => '2022-09-04 10:20:10'),
            array('id' => '63','materi_id' => '76','mahasiswa_id' => '163','judul' => 'Tipe data','diskusi' => '<p>assalamualaikum bu, abang, mbak, dan teman teman.</p>

          <p>maaf mengganggu waktunya, mohon izin untuk memperkenalkan diri,</p>

          <p>nama : citra safira irawan</p>

          <p>npm : G1F022021</p>

          <p>mohon izin untuk bertanya,</p>

          <p>kemaren ketika saya mengerjakan tugas individu, saat mengerjakan javanya muncul tanda lampu dan x, sedangkan pada saat itu datanya sudah benar dan sudah selesai hingga system.out.println, lalu saya bertanya kepada teman saya dan dibantunya dengan cara membuat new class dan akhirnya bisa sedangkan pada new class datanya masih tetap sama dengan yang sebelumnya dan pada new class tidak muncul lagi tanda lampu dan x. jadi apakah yang kira kira bermasalah pada data saya sebelumnya bu, bang, mbak, dan teman teman?&nbsp;</p>

          <p>sebelumnya saya mengucapkan mohon maaf apabila kata kata saya sulit dimengerti ataupun terdapat kesalahan kata dan terimakasih banyak semuanya</p>','created_at' => '2022-09-04 10:53:45','updated_at' => '2022-09-04 10:53:45'),
            array('id' => '64','materi_id' => '73','mahasiswa_id' => '165','judul' => 'Kenapa harus selalu ada tanda titik koma (;)','diskusi' => '<p>Asalamualaikum Warahmatullahi Wabaraktu</p>

          <p>Baik sebelumnya izinkan saya memperkenalkan diri dulu nama saya Muhammad Rafly Alfarizy dengan NPM G1F022067</p>

          <p>Izin bertanya Buk, mbak, abang, teman teman sekalian kenapa ya harus selalu ada tanda titik koma(;) di setiap akhir sintaks</p>

          <p>Terimakasih sebelumnya Wassalamualaikum wr. wb</p>','created_at' => '2022-09-04 11:28:00','updated_at' => '2022-09-04 11:28:00'),
            array('id' => '65','materi_id' => '86','mahasiswa_id' => '7','judul' => 'Jenis operator','diskusi' => '<p>Assalamualaikum, dear all</p>

          <p>Minggu ini kita melanjutkan materi operator pada Java.<br />
          Kalian yang sudah mencoba bereksperimen menggunakan jenis-jenis operator pada Java, bisa sharing disini ya.<br />
          Kalian bisa menceritakan temuan hasil eksperimennya kepada teman-teman.</p>

          <p>Jaga kesehatan ya semuanya</p>

          <p>Semangat&nbsp;<img alt="smiley" src="https://adaptif.rumahilmu.org/assets/ckeditor/plugins/smiley/images/regular_smile.png" style="height:23px; width:23px" title="smiley" /></p>','created_at' => '2022-09-04 20:07:45','updated_at' => '2022-09-04 20:07:45'),
            array('id' => '66','materi_id' => '84','mahasiswa_id' => '7','judul' => 'Jenis Operator','diskusi' => '<p>Assalamualaikum, dear all</p>

          <p>Minggu ini kita melanjutkan materi operator pada Java.<br />
          Kalian yang sudah mencoba bereksperimen menggunakan jenis-jenis operator pada Java, bisa sharing disini ya.<br />
          Kalian bisa menceritakan temuan hasil eksperimennya kepada teman-teman.</p>

          <p>Jaga kesehatan ya semuanya</p>

          <p>Semangat&nbsp;<img alt="smiley" src="https://adaptif.rumahilmu.org/assets/ckeditor/plugins/smiley/images/regular_smile.png" style="height:23px; width:23px" title="smiley" /></p>','created_at' => '2022-09-04 20:08:47','updated_at' => '2022-09-04 20:08:47'),
            array('id' => '67','materi_id' => '86','mahasiswa_id' => '7','judul' => 'Jenis Operator','diskusi' => '<p>Assalamualaikum, dear all</p>

          <p>Minggu ini kita melanjutkan materi operator pada Java.<br />
          Kalian yang sudah mencoba bereksperimen menggunakan jenis-jenis operator pada Java, bisa sharing disini ya.<br />
          Kalian bisa menceritakan temuan hasil eksperimennya kepada teman-teman.</p>

          <p>Jaga kesehatan ya semuanya</p>

          <p>Semangat&nbsp;<img alt="smiley" src="https://adaptif.rumahilmu.org/assets/ckeditor/plugins/smiley/images/regular_smile.png" style="height:23px; width:23px" title="smiley" /></p>','created_at' => '2022-09-04 20:09:23','updated_at' => '2022-09-04 20:09:23'),
            array('id' => '68','materi_id' => '85','mahasiswa_id' => '7','judul' => 'Jenis Operator','diskusi' => '<p>Assalamualaikum, dear all</p>

          <p>Minggu ini kita melanjutkan materi operator pada Java.<br />
          Kalian yang sudah mencoba bereksperimen menggunakan jenis-jenis operator pada Java, bisa sharing disini ya.<br />
          Kalian bisa menceritakan temuan hasil eksperimennya kepada teman-teman.</p>

          <p>Jaga kesehatan ya semuanya</p>

          <p>Semangat&nbsp;<img alt="smiley" src="https://adaptif.rumahilmu.org/assets/ckeditor/plugins/smiley/images/regular_smile.png" style="height:23px; width:23px" title="smiley" /></p>','created_at' => '2022-09-04 20:09:53','updated_at' => '2022-09-04 20:09:53'),
            array('id' => '69','materi_id' => '73','mahasiswa_id' => '147','judul' => 'Arti dari kurung kurawal','diskusi' => '<p>Assalamualaikum ibu,Abang dan teman teman sekalian sebelum saya izin perkenalkan diri</p>

          <p>Nama : Selma Mulkya Nisa</p>

          <p>Npm : G1F022055</p>

          <p>&nbsp; izin bertanya, kenapa di kodingan itu harus ada kurung kurawal {} , jika tidak ada kurung tersebut maka akan eror. Apa fungsi dari kurung kurawal itu sendiri???</p>

          <p>&nbsp;Sebelumnya terimakasih ibuk, Abang, dan teman teman. Wasallamu&#39;alaikum warahmatullahi wabarakatuh&nbsp;</p>','created_at' => '2022-09-04 20:40:17','updated_at' => '2022-09-04 20:40:17'),
            array('id' => '70','materi_id' => '76','mahasiswa_id' => '151','judul' => 'Diskusi tentang pembahasan pemrograman','diskusi' => '<p>Assalammu&#39;alaikum buk bang dan kawan kawan saya izin bertanya apakah suatu tipe data tu bisa di konversikan kesemua tipe data ?&nbsp;</p>','created_at' => '2022-09-04 20:47:05','updated_at' => '2022-09-04 20:47:05'),
            array('id' => '71','materi_id' => '73','mahasiswa_id' => '160','judul' => 'Tipe data','diskusi' => '<p>Assalamualaikum Ibu, Abang, dan teman-teman sekalian.</p>

          <p>Sebelumnya izinkan saya memperkenalkan diri terlebih dahulu.</p>

          <p>Saya Cindy Andira</p>

          <p>NPM G1F022059</p>

          <p>Izinkan saya bertanya kepada kalian semuanya, ini ada sedikit permasalahan yang ingin saya tanyakan adalah mengapa ketika saya sedang menjalankan sebuah program atau mengerjakan tugas codingan dan ketika saya running tidak ada output nya sama sekali, hasilnya tidak ada apakah program yang saya jalankan itu eror atau sudah benar saya tidak tau, mohon bantuannya teman-teman.&nbsp;</p>

          <p>Mungkin itu saja permasalahan yang saya alami sebelumnya, apabila ada kata-kata kurang mengenakkan saya minta maaf.</p>

          <p>Wassalamu&#39;alaikum&nbsp;</p>','created_at' => '2022-09-05 09:46:54','updated_at' => '2022-09-05 09:46:54'),
            array('id' => '72','materi_id' => '86','mahasiswa_id' => '63','judul' => 'Perlu Koreksi dalam kesimpulan penggunaan negasi','diskusi' => '<p>Dari yang kudapatkan dari eksperiment dengan operator negasi, negasi dapat mengubah tipe operator dan nilai operator sekaligus, serta dapat mengubah tanda pertidaksamaan.</p>

          <p>co :</p>

          <p>!(A &amp;&amp; B) akan sama dengan !A || !B</p>

          <p>!(x &gt; 12 &amp;&amp; x &lt;= 13) akan sama dengan x &lt; 12 || x &gt;= 13</p>

          <p>dan lain - lain.</p>

          <p>perlu koreksi, karena aku menyimpulkan murni dari eksperiment dan mencoba mencari error dengan menggunakan kode :</p>

          <p>public class Executor2{<br />
          &nbsp; &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp; &nbsp;int n, z, g, h; //menyimpan angka<br />
          &nbsp; &nbsp; &nbsp;boolean a, b, c, d, e; //menyimpan boolean true atau false<br />
          &nbsp; &nbsp; &nbsp;g = 0; //variable check kalau operator sama<br />
          &nbsp; &nbsp; &nbsp;z = 0; //variable check kalau operator sama<br />
          &nbsp; &nbsp; &nbsp;h = 0; //variable Trigger Error<br />
          &nbsp; &nbsp; &nbsp;for (n = 0; n &lt;= 127; n++) {<br />
          &nbsp; &nbsp; &nbsp;System.out.println(&quot;Loop &quot; + n + &quot; Is Running&quot;); //untuk mengecek apakah kode berjalan dengan sempurna<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a = !(n &gt; 11 &amp;&amp; n &lt;= 22); //Bentuk Operator 1<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b = n &lt; 11 || n &gt;= 22; //Bentuk Operator 2<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c = a == b; //Cek apakah a sama dengan B<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; //System.out.println(&quot;Debug Value = &quot; + c) //Hasil boolean C, hanya untuk debug.<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;g = g++; //menambah 1 variable g<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(c) { //mengecek apakah C true<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;z = z++; } //jika c adalah true, maka akan menambah 1 variable z<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; else { //jika c adalah false<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;h = h++; }} //menambah 1 nilai Trigger Error h<br />
          &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;e = h &gt;= 1; //mengecek apakah Error kena trigger<br />
          &nbsp; &nbsp; &nbsp; &nbsp; d = (g == z); //mengecek apakah g sama dengan z<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Operator A sama dengan Operator B =&quot; + d); //menampilkan nilai d<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Error Check Triggered ? =&quot; + e); //menampilkan boolean Error Check<br />
          &nbsp; &nbsp; }&nbsp;&nbsp; &nbsp;}</p>

          <p>* kalau error checknya false, berarti hasil d adalah valid.</p>

          <p>Sampai sekarang, belum ketemu sumber yang dapat menjadi patokan pasti hasil eksperiment......</p>

          <p>&nbsp;</p>','created_at' => '2022-09-06 00:24:10','updated_at' => '2022-09-06 00:24:10'),
            array('id' => '73','materi_id' => '86','mahasiswa_id' => '63','judul' => 'Perlu Koreksi dalam kesimpulan penggunaan negasi.... V2','diskusi' => '<p>Permisi Ibu, Bang, Mbak, Dan teman - teman sekalian. Saya mau membagikan hasil eksperiment saya hari ini. Dari yang saya dapat dari melakukan eksperiment dengan operator negasi, negasi dapat mengubah tipe operator dan nilai operator sekaligus, serta dapat mengubah tanda pertidaksamaan.</p>

          <p>co :</p>

          <p>!(A &amp;&amp; B) akan sama dengan !A || !B</p>

          <p>!(x &gt; 12 &amp;&amp; x &lt;= 13) akan sama dengan x &lt; 12 || x &gt;= 13</p>

          <p>dan lain - lain.</p>

          <p>Tetapi, ketika saya mencoba menggunakan kode pengecekan kesamaan hasil dua Operator yang saya buat berikut :</p>

          <p>package mainexecutor;</p>

          <p>public class Executor2{<br />
          &nbsp; &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp; &nbsp;int n, z, h, l, v;<br />
          &nbsp; &nbsp; &nbsp;boolean a, b, c, d, e, f;<br />
          &nbsp; &nbsp; &nbsp;n = 0; //variable untuk digunakan di operasi ulang<br />
          &nbsp; &nbsp; &nbsp;z = 0; //variable untuk menjalankan operasi cetak akhir<br />
          &nbsp; &nbsp; &nbsp;h = 0; //variable pengecekan ketidaksamaan operator<br />
          &nbsp; &nbsp; &nbsp;v = 0; //variable banyak operasi ulang<br />
          &nbsp; &nbsp; &nbsp;l = 127; //batas operasi ulang<br />
          &nbsp; &nbsp; &nbsp;for (n = 0 ; n &lt;= l; n++) {<br />
          &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;v++; //menghitung jumlah operasi pengulangan yang dilakukan<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a = !(n &gt; 11 &amp;&amp; n &lt;= 22); //Operator 1<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b = n &lt; 11 || n &gt;= 22; //Operator 2<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c = a == b; //mengecek apakah a sama dengan b<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(c) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;z++; } //menambah variable Z jika c true<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; else {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;h++; //menambah variable h ketika c false<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Ketidaksamaan ditemukan di Loop &quot; + v); //mencetak nomor ditemukan Kesalahan<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Angka Input Operator = &quot; + n); //input yang digunakan operator<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil Operator 1 = &quot; + a); //hasil operator 1<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil Operator 2 = &quot; + b);// hasil operator 2<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil Operator yang sama sementara = &quot; + z); //mencetak hasil operator yang sama<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil Operator yang tidak sama sementara = &quot; + h); //mencetak hasil operator yang tidak sama&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;System.out.println();} //menambah spasi di akhir hasil cetak<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; f = n == l; // mengecek apakah n sama dengan batas loop<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (f) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;e = h &gt;= 1; //mengecek apakah ada error<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;d = (n == z); //mengecek apakah z sama dengan n (angka akhir loop)<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;System.out.println(&quot;Total Operasi Pengulangan = &quot; + v);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;System.out.println(&quot;Total Hasil Operator Yang Sama = &quot; + z); //mencetak total hasil operator yang sama<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;System.out.println(&quot;Operator A sama dengan Operator B = &quot; + d); //mencetak apakah hasil operator A sama dengan operator B<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;if (e) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Jumlah Hasil Operator yang tidak sama = &quot; + h); //jumlah ketidaksamaan hasil operator yang ditemukan<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</p>

          <p>* kalau misal hasil d adalah true, berarti operator A sama dengan operator B</p>

          <p>Hasil yang saya dapatkan adalah sebagai berikut :</p>

          <p>Ketidaksamaan ditemukan di Loop 12<br />
          Angka Input Operator = 11<br />
          Hasil Operator 1 = true<br />
          Hasil Operator 2 = false<br />
          Hasil Operator yang sama sementara = 11<br />
          Hasil Operator yang tidak sama sementara = 1</p>

          <p>Ketidaksamaan ditemukan di Loop 23<br />
          Angka Input Operator = 22<br />
          Hasil Operator 1 = false<br />
          Hasil Operator 2 = true<br />
          Hasil Operator yang sama sementara = 21<br />
          Hasil Operator yang tidak sama sementara = 2</p>

          <p>Total Operasi Pengulangan = 128<br />
          Total Hasil Operator Yang Sama = 126<br />
          Operator A sama dengan Operator B = false<br />
          Jumlah Hasil Operator yang tidak sama = 2</p>

          <p>Sampai sekarang, saya belum menemukan sumber penjelasan mengapa hasil operator negasi yang saya coba bisa tidak sama, ibu, bang, mbak, dan teman - teman.....</p>','created_at' => '2022-09-06 03:08:11','updated_at' => '2022-09-06 03:08:11'),
            array('id' => '74','materi_id' => '84','mahasiswa_id' => '102','judul' => 'Tugas kelompok operator yang di e-learning','diskusi' => '<p>Assalamualaikum wr wb<br />
          Izin memperkenalkan diri&nbsp;<br />
          Nama : Imelda Cyntia</p>

          <p>izin bertanya bu apakah tugas kelompok tenggatnya juga sama dengan tugas individu Bu? Dan juga tugas kelompok yang di e-learning ini berbeda ya bu sama yang di presentasikan?</p>','created_at' => '2022-09-06 12:08:09','updated_at' => '2022-09-06 12:08:09'),
            array('id' => '75','materi_id' => '86','mahasiswa_id' => '89','judul' => 'SOAL NO 3 LATIHAN INDIVIDU MATERI OPERATOR TINGKAT LANJUT','diskusi' => '<p>Assalamualaikum bu , teman teman dan abang , mbak asdos. Izin bertanya , saya masih bingung perintah dari soal no 3 Tugas individu tingkat Lanjut itu disuruh membuat apa ya ? Terimakasih sebelumnya , Wassalamualaikum warahmatulahi wabarakatuh</p>','created_at' => '2022-09-06 14:50:23','updated_at' => '2022-09-06 14:50:23'),
            array('id' => '76','materi_id' => '82','mahasiswa_id' => '81','judul' => 'Operator Penugasan  ( = )','diskusi' => '<p>Assalamualaikum wr wb<br />
          Izin memperkenalkan diri&nbsp;<br />
          Nama : M Satria Halim</p>

          <p>izin bertanya bu serta teman teman sekalian yang bisa menjawab untuk contoh 2 materi operator tipe dasar yang bagian sisa bagi hasilnya 3 itu bagaimana sistem kerjanya ya</p>

          <p>Mungkin itu saja permasalahan yang saya alami sebelumnya, apabila ada kata-kata kurang mengenakkan saya minta maaf.</p>

          <p>Wassalamu&#39;alaikum&nbsp;</p>','created_at' => '2022-09-06 20:27:33','updated_at' => '2022-09-06 20:27:33'),
            array('id' => '77','materi_id' => '84','mahasiswa_id' => '117','judul' => 'SOAL NO 7 LATIHAN INDIVIDU MATERI OPERATOR TINGKAT MENENGAH','diskusi' => '<p>Assalamualaikum bu, bang, mbak, dan teman teman.</p>

          <p>Perkenalkan, nama saya Muhammad Ahdan Hanif,<br />
          dengan NPM G1A022064.<br />
          <br />
          Izin bertanya, untuk luaran hasil contoh 7 yang tertera di halaman materi kok beda ya sama yang dikeluarkan oleh program yang ahdan jalankan? padahal kodenya tidak dirubah sama sekali.<br />
          <br />
          Luaran pada halaman materi :<br />
          Hasil dari a &amp; b : 6<br />
          Hasil dari a | b : 7<br />
          Hasil dari a ^ b : 1<br />
          Hasil dari ~a : -7<br />
          Hasil dari a &gt;&gt; 1 : 3<br />
          Hasil dari b &lt;&lt; 2 : 28<br />
          <br />
          Luaran saat dirun :<br />
          Hasil dari a &amp; b : 2<br />
          Hasil dari a | b : 15<br />
          Hasil dari a ^ b : 13<br />
          Hasil dari ~a : -11<br />
          Hasil dari a &gt;&gt; 1 : 5<br />
          Hasil dari b &lt;&lt; 2 : 28</p>

          <p>Kode Program :<br />
          public class OperatorBitwise {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int a = 10;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int b = 7;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int hasil;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = a &amp; b;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari a &amp; b : &quot; + hasil ); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = a | b;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari a | b : &quot; + hasil ); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = a ^ b;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari a ^ b : &quot; + hasil ); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = ~a;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari ~a : &quot; + hasil ); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = a &gt;&gt; 1;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari a &gt;&gt; 1 : &quot; + hasil ); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = b &lt;&lt; 2;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari b &lt;&lt; 2 : &quot; + hasil );<br />
          } &nbsp; }</p>','created_at' => '2022-09-06 22:05:12','updated_at' => '2022-09-06 22:05:12'),
            array('id' => '78','materi_id' => '82','mahasiswa_id' => '69','judul' => 'Tentang Latihan 1','diskusi' => '<p>Assalamualaikum Wr Wb. Perkenalkan nama saya Revan Averuz Mufid G1A022065<br />
          Izin bertanya Ibu, Abang, Mbak, dan Teman-teman, disini saya kesulitan dalam memahami latihan 1</p>

          <p>&nbsp;</p>

          <p>berikut hasil pengerjaan saya pada eclipse IDE terkait latihan 1</p>

          <p>public class OperatorAritmatika{&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; public static void main(String[] args) &nbsp;{<br />
          &nbsp;&nbsp; &nbsp; &nbsp;// deklarasi nilai<br />
          &nbsp;&nbsp; &nbsp; &nbsp;int a = 20;<br />
          &nbsp;&nbsp; &nbsp; &nbsp;int &nbsp;b = 3;<br />
          &nbsp;&nbsp; &nbsp; &nbsp;//operator aritmatika&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;a + b = &quot; &nbsp;+ (a + b));<br />
          &nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;a: &quot; +a);&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;b: &quot; +b);&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;a + b = &quot; +(a * b));&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;a : b = &quot; &nbsp;+ (a / b));<br />
          &nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;a % b = &quot; &nbsp;+ (a % b));<br />
          &nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;a - b = &quot; &nbsp;+ (a - b));<br />
          &nbsp;&nbsp; &nbsp;} &nbsp; }</p>

          <p>apakah benar atau masih keliru. Mungkin itu saja kesulitan yang saya alami, Mohon koreksinya&nbsp;</p>','created_at' => '2022-09-07 09:44:37','updated_at' => '2022-09-07 09:44:37'),
            array('id' => '79','materi_id' => '86','mahasiswa_id' => '33','judul' => 'solusi','diskusi' => '<p>assalamualaikum wr wb,yang soal nomor 1 ck iko bukan sih,ngp nyo eror?solusinya gmn y?? waassalamualaikum wr wb</p>

          <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAB4AAAAQ4CAYAAADo08FDAAAgAElEQVR4nOzdeXxU1dkH8N+dLTsJCQlBCGuGECDsW4I7bgmoWGusWrW2vonWtgQttYtWrbgVleBSzFSroKLGLSpk0IqyJuxbEAgZwr4v2TP73PePySQzk1nuJDMJ0N+3n1Qyy73POffcO/ncZ85zBFEURRARERERERERERERERER0UVP1t0BEBERERERERERERERERFRcDABTERERERERERERERERER0iWACmIiIiIiIiIiIiIiIiIjoEsEEMBERERERERERERERERHRJULh9RlRhGhphvHYdpw4fBS6ww2oPGTA0TMmmCwiIiPCkZScgNSh/TB+YjriE2KhVHrfHBERERERERERERERERERhZYgiqLY7lFzE6y1B6E/sg1ry3XYtvscqo/qcfSMEWdrrbBYRYSFqRDXMwaX9UtE+ohByLp8FNJHDEJ8Qmw3NIOIiIiIiIiIiIiIiIiIiNongM1NsJ6rQmPlCqxftQGfldlQcUSGJoOXDQgCVColrrp2HHJuuRwTJ49Aj9ioLgidiIiIiIiIiIiIiIiIiIicua4BLIqw1R5A877voCtfjvlfWbBpv+A1+Wt/iwij0YT/Lt+Ar79Yhd27qmGz2UIcNhERERERERERERERERFdqCorK6FWqyEIQrufYcOG4eOPP+7uEDutX78UfPSR/3Z89NHHGDBgYBdEZOeSABbNTbAeXoXKdd/ijRWxONuogNUmSNqQKIrYtP4nfPX5j6g53xCSYLX5AqYu0Ln8Lgj50IZkbxcKHRZMFZB/aTfyguc+9rqdNh/C1AUIWUSt2+/c+Ov6fpMQr4e+s19LnH5C2bcXBHs/BdLOC+l66xpL8K6RF1IbvdEtmOrhj6WpkHKaXUifodp8AYLTQfPcLs/Xj870AREREREREREREXWd8PBw/Pvf/8aPP/7o8rNixQpMnz4dd91110WfBJ43bx4ezMvzmQT+6KOP8WBeHl588cUui0vh/It4ahsaTh3G4Zow7Dkug8ka2MaamvTYrzuGlT9sxu2504IZp0fZRSLEopDvhugCo8OCuRrkPSEiNeTbv3gyKtp8ATka+7/zvL7Kve+0yBdyoMkqRJU4q7U/tfkC1MJulIpFyA5x3H5p8yHMHY6qdbOCd7x1y1CMLGSVFWOZ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','created_at' => '2022-09-07 11:30:13','updated_at' => '2022-09-07 11:30:13'),
            array('id' => '80','materi_id' => '82','mahasiswa_id' => '96','judul' => 'Soal 7','diskusi' => '<p>&nbsp;</p>

          <p>Assalamualaikum buk maaf izin bertanya pada soal nomor 7 Kenapa ya hasil di Di contoh Soal sama hasil run beda ?&nbsp;</p>

          <p>Terimakasih 🙏</p>

          <p>public class operator {</p>

          <p>&nbsp; &nbsp; public static void main(String[] args) {</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; int a = 10;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; int b = 7;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; int hasil;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = a &amp; b;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari a &amp; b : &quot; + hasil );&nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = a | b;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari a | b : &quot; + hasil );&nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = a ^ b;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari a ^ b : &quot; + hasil );&nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = ~a;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari ~a : &quot; + hasil );&nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = a &gt;&gt; 1;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari a &gt;&gt; 1 : &quot; + hasil );&nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = b &lt;&lt; 2;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari b &lt;&lt; 2 : &quot; + hasil );</p>

          <p>} }</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>','created_at' => '2022-09-07 12:54:41','updated_at' => '2022-09-07 12:54:41'),
            array('id' => '81','materi_id' => '81','mahasiswa_id' => '144','judul' => 'Soal Latihan No 7','diskusi' => '<p>Assalamualaikum,bg,mbak,bu sekalian.</p>

          <p>maaf mengganggu waktunya</p>

          <p>izin bertanya..</p>

          <p>disoal no 7 itu kan membahas tentang operator bitwise</p>

          <p>disana terdapat contoh seperti :</p>

          <p><strong>Operator&nbsp;&nbsp; &nbsp;Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Contoh&nbsp;&nbsp; &nbsp;Biner&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Hasil (biner)&nbsp;&nbsp; &nbsp;Hasil (decimal)</strong><br />
          &amp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;AND&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;10 &amp; 12&nbsp;&nbsp; &nbsp;1010 &amp; 1100&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1000&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;8<br />
          |&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; OR&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 10 | 12&nbsp; &nbsp; &nbsp;1010 | 1100&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1110&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;14<br />
          ^&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;XOR&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 10 ^ 12&nbsp;&nbsp; &nbsp;1010 ^ 1100&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 0110&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;6<br />
          ~&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;NOT&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ~10&nbsp;&nbsp; &nbsp;~1010&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;0101&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -11<br />
          &lt;&lt;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Geser kiri&nbsp; &nbsp; &nbsp; &nbsp; 10 &lt;&lt; 1&nbsp;&nbsp; &nbsp;1010 &lt;&lt; 1&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 10100&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;20<br />
          &gt;&gt;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Geser kanan&nbsp; &nbsp;10 &gt;&gt; 1&nbsp;&nbsp; &nbsp;1010 &gt;&gt; 1&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 101&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;5</p>

          <p>Hasil konversi yang tertera di hasil biner itu gimana ya dapetkannya. cara penghitungannya gimana ya?</p>

          <p>sekian dari saya</p>

          <p>wasallamualaikum.wr.wb</p>','created_at' => '2022-09-07 15:47:53','updated_at' => '2022-09-07 15:47:53'),
            array('id' => '82','materi_id' => '84','mahasiswa_id' => '101','judul' => 'Tugas Kelompok','diskusi' => '<p>Assalamu&#39;alakum wr.wb</p>

          <p>Izin bertanya Bu, Bang/Mbak, dan teman teman sekalian pada soal kelompok yang nomor 2 itu katanya Gunakan operator ternary. dan rancanglah kode java untuk menghitung jumlah yang harus di bayar jika kalian bisa selesai 4 tahun atau 5 tahun&nbsp;</p>

          <p>cara pengaplikasian logika pada soal tersebut gimana ya??? mohon bantuannya ibu, bang, mbak dan teman teman sekalian</p>','created_at' => '2022-09-07 16:04:07','updated_at' => '2022-09-07 16:04:07'),
            array('id' => '83','materi_id' => '82','mahasiswa_id' => '30','judul' => 'Operator','diskusi' => '<p>Maksud yang no 4 itu gimana ya? Saya kurang paham dengan soal perintahnya, sedangkan programnya udah bisa di run</p>','created_at' => '2022-09-07 17:48:14','updated_at' => '2022-09-07 17:48:14'),
            array('id' => '84','materi_id' => '86','mahasiswa_id' => '116','judul' => 'Presentasi Kelompok 1 Kelas A','diskusi' => '<p>Assalamualaikum bu, bang, dan teman teman, izin menuliskan tugas kelompok mengenai contoh soal operator dari kelompok 1 kelas A</p>

          <p>Kelompok 1&nbsp;</p>

          <p>G1A022005 Delvi Nur Rofiq Sitepu</p>

          <p>G1A022007 Ayu Anggraini</p>

          <p>G1A022021 Sophina Shafa Salsabila</p>

          <p>&nbsp;</p>

          <p>Contoh 1 (Prioritas Operator)</p>

          <p><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">2*(10-6)/4&lt;4+2*3||11*2==100/5&amp;&amp;!(20&lt;9)</span></span></p>

          <p><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Jawaban : True</span></span></p>

          <p>&nbsp;</p>

          <p><span style="font-size:12px"><span style="font-family:Arial,Helvetica,sans-serif">Contoh 2 (Operator Aritmatika)</span></span></p>

          <p><span style="font-size:12px"><span style="font-family:Arial"><span style="color:black">Dalam</span></span> <span style="font-family:Arial"><span style="color:black">ruang</span></span> <span style="font-family:Arial"><span style="color:black">sidang</span></span> <span style="font-family:Arial"><span style="color:black">terdapat 14 baris kursi, baris paling depan</span></span> <span style="font-family:Arial"><span style="color:black">terdapat</span></span> <span style="font-family:Arial"><span style="color:black">terdapat 23 kursi, baris berikut</span></span> <span style="font-family:Arial"><span style="color:black">nya 2 kursi</span></span>&nbsp; <span style="font-family:Arial"><span style="color:black">lebih</span></span> <span style="font-family:Arial"><span style="color:black">banyak</span></span> <span style="font-family:Arial"><span style="color:black">dari baris di depan</span></span> <span style="font-family:Arial"><span style="color:black">nya . Berapa</span></span> <span style="font-family:Arial"><span style="color:black">jumlah</span></span> <span style="font-family:Arial"><span style="color:black">kursi</span></span> <span style="font-family:Arial"><span style="color:black">dalam</span></span> <span style="font-family:Arial"><span style="color:black">ruangan</span></span> <span style="font-family:Arial"><span style="color:black">tersebut</span></span></span></p>

          <p><span style="font-size:12px"><span style="font-family:Arial"><span style="color:black">Jawaban : 504 kursi</span></span></span></p>

          <p>&nbsp;</p>

          <p><span style="font-size:12px"><span style="font-family:Arial"><span style="color:black">Contoh 3 (Operator Relasional, Logika dan Kondisional)</span></span></span></p>

          <p style="text-align:left"><span style="font-size:12px"><span style="font-family:Arial"><span style="color:black">Sophina, Rofiq, dan Ayu adalah</span></span> <span style="font-family:Arial"><span style="color:black">mahasiswa</span></span> <span style="font-family:Arial"><span style="color:black">baru yang akan</span></span> <span style="font-family:Arial"><span style="color:black">mendaftar</span></span> <span style="font-family:Arial"><span style="color:black">ke science club.. mereka</span></span> <span style="font-family:Arial"><span style="color:black">mempunyai 2 club pilihan</span></span> <span style="font-family:Arial"><span style="color:black">yaitu Club A dan Club B. syarat</span></span> <span style="font-family:Arial"><span style="color:black">masuk Club A yaitu</span></span> <span style="font-family:Arial"><span style="color:black">memiliki</span></span> <span style="font-family:Arial"><span style="color:black">nilai Bahasa inggris dan Matematika</span></span> <span style="font-family:Arial"><span style="color:black">diatas 90 sedangkan</span></span> <span style="font-family:Arial"><span style="color:black">syarat</span></span> <span style="font-family:Arial"><span style="color:black">masuk Club B yaitu</span></span> <span style="font-family:Arial"><span style="color:black">memiliki</span></span> <span style="font-family:Arial"><span style="color:black">nilai</span></span> <span style="font-family:Arial"><span style="color:black">Matematika</span></span> <span style="font-family:Arial"><span style="color:black">atau</span></span> <span style="font-family:Arial"><span style="color:black">Fisika</span></span> <span style="font-family:Arial"><span style="color:black">diatas 94. berikut</span></span> <span style="font-family:Arial"><span style="color:black">adalah</span></span> <span style="font-family:Arial"><span style="color:black">nilai</span></span> <span style="font-family:Arial"><span style="color:black">dari</span></span> <span style="font-family:Arial"><span style="color:black">Rofiq Ayu dan Sophi:</span></span></span></p>

          <p style="text-align:left"><span style="font-size:12px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; B.Ing&nbsp; &nbsp; &nbsp;MTK&nbsp; &nbsp; &nbsp;Fisika</span></p>

          <p style="text-align:left"><span style="font-size:12px">Ayu&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 91&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;93&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 91</span></p>

          <p style="text-align:left"><span style="font-size:12px">Rofiq&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 89&nbsp; &nbsp; &nbsp; &nbsp; 100&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;92</span></p>

          <p style="text-align:left"><span style="font-size:12px">Sophina&nbsp; &nbsp; &nbsp; &nbsp;93&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 95&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 92</span></p>

          <p style="text-align:left"><span style="font-size:12px"><span style="font-family:Arial"><span style="color:black">Tentukan club mana yang cocok</span></span> <span style="font-family:Arial"><span style="color:black">untuk</span></span> <span style="font-family:Arial"><span style="color:black">mereka</span></span> <span style="font-family:Arial"><span style="color:black">bertiga</span></span> <span style="font-family:Arial"><span style="color:black">berdasarkan</span></span> <span style="font-family:Arial"><span style="color:black">nilai dan ketentuan</span></span> <span style="font-family:Arial"><span style="color:black">dari club tersebut !</span></span></span></p>

          <p style="text-align:left"><span style="font-size:12px"><span style="font-family:Arial"><span style="color:black">Jawaban : Ayu Club A, Rofik Club B, Sophina Club A dan Club B</span></span></span></p>

          <p style="text-align:left">&nbsp;</p>

          <p style="text-align:left"><span style="font-size:12px"><span style="font-family:Arial"><span style="color:black">Terima kasih, Wassalamualaikum Wr. Wb.</span></span></span></p>','created_at' => '2022-09-07 18:18:53','updated_at' => '2022-09-07 18:18:53'),
            array('id' => '85','materi_id' => '84','mahasiswa_id' => '100','judul' => 'Tugas Individu Operator','diskusi' => '<p>Selamat malam, maaf mengganggu waktunya bu, bang asdos, dan teman teman sekalian.</p>

          <p>Izin bertanya, untuk soal nomor 4 itu bagaimana ya cara merubah agar nilai a=5 dan b=6? saya masih bingung. kan pengertian dari pre/post increment dan pre/post decrement berbeda, bagaimana cara menyamakan hasil atau luarannya? terimakasih.</p>

          <p>Note: Tugas individu operator, tingkat materi: menengah.</p>','created_at' => '2022-09-07 22:34:44','updated_at' => '2022-09-07 22:34:44'),
            array('id' => '86','materi_id' => '86','mahasiswa_id' => '44','judul' => 'latiahan 6','diskusi' => '<p>assalamu&#39;alaikum buk, abang dan teman- teman semua, selamat malam, jadi gini saya ingin menanyakan tentang soal yang latihan 6 yang mana soalnya adalah sebagai berikut :</p>

          <p>Susun kode program! Dengan informasi berikut:<br />
          Diketahui&nbsp;nama variabel Jam = 12<br />
          Apabila jam &lt; 12 maka tampil &quot;Selamat Pagi&quot;, apabila jam &gt; 12 maka tampil &quot;Selamat Malam&quot;.</p>

          <p>nah pada keterangan di atas nama variabelnya sudah di tentukan 12 yang mana apabila dituliskan sesuai dengan soal yang sudah di tentukan maka luaran yang akan di hasilkan adalah sebagai berikut:</p>

          <p>Untuk &gt; 12 hasilnya selamat malam</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt; 12 hasilnya selamat malam</p>

          <p>apakah teman-teman ada yang menemukan hasil seperti&nbsp; yang di inginkan&nbsp; oleh soal ?&nbsp; &gt; 12 selamat malam&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt; 12 selamat pagi&nbsp;</p>

          <p>kalo ada tolong jawab ada ya, jangan kasih spoiler jawaban saya mau mikir sendiri terimakasih.</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>','created_at' => '2022-09-07 23:01:26','updated_at' => '2022-09-07 23:01:26'),
            array('id' => '87','materi_id' => '86','mahasiswa_id' => '118','judul' => 'Decrement Materi Tingkat Lanjut','diskusi' => '<p>Assalamualaikum, Izin bertanya bu, Bang,mbak dan teman teman</p>

          <p>kan soalnya minta hasil luarannya a=5 dan b =6 dengan Nilai A = 5<br />
          &nbsp;Soal : Susunlah kode program untuk menghasilkan luaran nilai a = 5 dan b = 6 dengan pre/post increment dan pre/post decrement.<br />
          Kalo yang&nbsp; Increment kan tinggal pakai Pre Increment. kalo yang Decrement gimana ya?&nbsp;</p>','created_at' => '2022-09-08 11:49:50','updated_at' => '2022-09-08 11:49:50'),
            array('id' => '88','materi_id' => '82','mahasiswa_id' => '30','judul' => 'Operator Tingkat Dasar','diskusi' => '<p><strong>7.&nbsp;&nbsp; &nbsp;Operator Bitwise: &amp;, |, ^, ~, &lt;&lt;, &gt;&gt;, &gt;&gt;&gt;</strong><br />
          Operator bitwise merupkan operator yang digunakan untuk operasi bit (biner).<br />
          Operator ini berlaku untuk tipe data int, long, short, char, dan byte.<br />
          Operator ini akan menghitung dari bit-ke-bit.</p>

          <p><strong>Operator&nbsp;&nbsp; &nbsp;Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Contoh&nbsp;&nbsp; &nbsp;Biner&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Hasil (biner)&nbsp;&nbsp; &nbsp;Hasil (decimal)</strong><br />
          &amp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;AND&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;10 &amp; 12&nbsp;&nbsp; &nbsp;1010 &amp; 1100&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1000&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;8<br />
          |&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; OR&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 10 | 12&nbsp; &nbsp; &nbsp;1010 | 1100&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1110&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;14<br />
          ^&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;XOR&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 10 ^ 12&nbsp;&nbsp; &nbsp;1010 ^ 1100&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 0110&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;6<br />
          ~&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;NOT&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ~10&nbsp;&nbsp; &nbsp;~1010&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;0101&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -11<br />
          &lt;&lt;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Geser kiri&nbsp; &nbsp; &nbsp; &nbsp; 10 &lt;&lt; 1&nbsp;&nbsp; &nbsp;1010 &lt;&lt; 1&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 10100&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;20<br />
          &gt;&gt;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Geser kanan&nbsp; &nbsp;10 &gt;&gt; 1&nbsp;&nbsp; &nbsp;1010 &gt;&gt; 1&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 101&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;5</p>

          <p><strong>Contoh 7:</strong>&nbsp;Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle<br />
          <code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int a = 10;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int b = 7;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int hasil;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = a &amp; b;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari a &amp; b : &quot; + hasil ); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = a | b;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari a | b : &quot; + hasil ); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = a ^ b;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari a ^ b : &quot; + hasil ); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = ~a;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari ~a : &quot; + hasil ); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = a &gt;&gt; 1;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari a &gt;&gt; 1 : &quot; + hasil ); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = b &lt;&lt; 2;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari b &lt;&lt; 2 : &quot; + hasil );<br />
          } &nbsp; }</code></p>

          <p><br />
          <strong>Luaran:&nbsp;</strong><br />
          <code>Hasil dari a &amp; b : 6<br />
          Hasil dari a | b : 7<br />
          Hasil dari a ^ b : 1<br />
          Hasil dari ~a : -11<br />
          Hasil dari a &gt;&gt; 1 : 3<br />
          Hasil dari b &lt;&lt; 2 : 28</code></p>

          <p><strong>Latihan 7</strong><br />
          Pilihlah 3 perhitungan Contoh 7, kemudian uraikan perhitungan biner! Simpulkan hasilnya!</p>

          <p>&nbsp;</p>

          <p>maksud latihan 7 ini bagaimana ya kenkawan? saya belum paham:(</p>

          <p>&nbsp;</p>','created_at' => '2022-09-08 13:01:32','updated_at' => '2022-09-08 13:01:32'),
            array('id' => '89','materi_id' => '82','mahasiswa_id' => '55','judul' => 'Operator','diskusi' => '<p><span style="font-size:14px"><strong><span style="color:#333333"><span style="font-family:&quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif"><span style="background-color:#ffffff">Latihan 7</span></span></span></strong></span><br />
          <span style="font-size:14px"><span style="color:#333333"><span style="font-family:&quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif"><span style="background-color:#ffffff">Pilihlah 3 perhitungan Contoh 7, kemudian uraikan perhitungan biner! Simpulkan hasilnya!</span></span></span></span></p>

          <div>&nbsp;</div>

          <div><span style="background-color:#ffffff"><span style="color:#333333"><span style="font-family:Source Sans Pro,Helvetica Neue,Helvetica,Arial,sans-serif"><span style="font-size:14px">Untuk latihan no 7 itu bagaimana cara mengubah dari desimal&nbsp;ke biner? Dan untuk pembuatan nya itu dibuat seperti program atau di tulis di buku?&nbsp;</span></span></span></span></div>','created_at' => '2022-09-08 16:24:29','updated_at' => '2022-09-08 16:24:29'),
            array('id' => '90','materi_id' => '85','mahasiswa_id' => '136','judul' => 'Operator data','diskusi' => '<p>kelompok 1 :</p>

          <ul>
              <li>&nbsp;M Hidayat Pahlevi</li>
              <li>Ahmad Afif N</li>
              <li>Yuma Juliana&nbsp;</li>
          </ul>

          <p>kami dari kelompok 1 mempunyai soal untuk teman teman, silahkan untuk teman teman menjawab!</p>

          <p>pertanyaan 1 operator aritmatika&nbsp;</p>

          <p>public class Aritmatika {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// Buat variabel&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int a = 12;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int b = 8;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// Hitung<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int hasil1 = a + b;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// Print&nbsp;<br />
          &nbsp; &nbsp; System.out.println(hasil1);&nbsp;<br />
          &nbsp;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</p>

          <p><br />
          Luaran</p>

          <p>20</p>

          <p>Berikanlah susunan kode untuk menampilkan perhitungan operator aritmatika!</p>

          <p>&nbsp;</p>

          <p>pertanyaan 2 :&nbsp;</p>

          <p>&nbsp;&nbsp;&nbsp;&nbsp;Berikan suatu program untuk mengilustrasikan operator inkremen.</p>

          <p>&nbsp;</p>

          <p>pertanyaan 3&nbsp;</p>

          <p>Apa yang Terjadi jika operasi aritmatika tidak dikerjakan berdasarkan urutan atau prioritas pekerjaan?</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>','created_at' => '2022-09-08 16:44:05','updated_at' => '2022-09-08 16:44:05'),
            array('id' => '91','materi_id' => '81','mahasiswa_id' => '144','judul' => 'Operator Data (Kelompok)','diskusi' => '<p>Assalamu&#39;alaikum bg, mba, ibu sekalian.&nbsp;<br />
          Perkenalkan kami dari Kelompok 3&nbsp;<br />
          Atas Nama</p>

          <p><br />
          Muhammad Faishal Makarim</p>

          <p>(G1F022017)</p>

          <p>Ahmad Dwi Cahyadi</p>

          <p>(G1F022007)<br />
          Suryaningsih</p>

          <p>&nbsp;(G1F022049)</p>

          <p><br />
          Izin menuliskan sebuah tugas kelompok mengenai Contoh soal operator dari kelas A&nbsp;</p>

          <p>Contoh 1 (Operator Aritmatika)&nbsp;</p>

          <p>1. Sebanyak Gelang 225 gelang karet diberikan kepada saudaranya ibu memberi Gilang 270 gelang karet lagi. Berapa banyak gelang karet gilang sekarang?<br />
          Gunakan lah Operator aritmatika.&nbsp;</p>

          <p>Jawaban : 495 karet</p>

          <p>Contoh 2: (Operator Bitwise)</p>

          <p>Konversikan bilangan desimal dibawah ini menjadi bentuk biner :</p>

          <p>15 &amp; 20</p>

          <p>8 || 17</p>

          <p>32 ^ 28</p>

          <p><br />
          Contoh 3: (Operator Logika)</p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="background-color:#fffdfc"><span style="font-family:&quot;Noto Sans&quot;,sans-serif"><span style="color:#08102b">Disini terdapat program java bagian operator Logika Lihat dan perhatikan hasil outputnya. Jelaskan mengapa hasil outputnya seperti itu?</span></span></span></span></span></p>

          <p>&nbsp;</p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">public class Ujicoba2 {</span></span></p>

          <p>&nbsp;</p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; public static void main(String[] args) {</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; boolean a1 = 5 &lt; 10;</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; boolean a2 = 9 &gt; 11; </span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; boolean b3 = !a1;</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; boolean AND1 = a1 &amp; a2; </span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; boolean OR1 = a1 | a2; </span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; boolean OR2 = a1 || a2; </span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; boolean XOR1 = a1 ^ a2; </span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; boolean XOR2 = a1 ^ b3; </span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;AND 1 = &quot; + AND1);</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;OR 1 = &quot; + OR1);</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;OR 2 = &quot; + OR2);</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;XOR 1 = &quot; + XOR1);</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;XOR 2 = &quot; + XOR2);</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">}</span></span></p>

          <p>&nbsp;</p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Hasil Luaran :</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">AND 1 = false</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">OR 1 = true</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">OR 2 = true</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">XOR 1 = true</span></span></p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">XOR 2 = true</span></span></p>

          <p><br />
          Terima kasih bg, mba, bu sekalian</p>

          <p>Sekian contoh soal dari kami<br />
          Wassalamu&#39;alaikum wr.wb</p>','created_at' => '2022-09-08 17:29:39','updated_at' => '2022-09-08 17:29:39'),
            array('id' => '92','materi_id' => '82','mahasiswa_id' => '64','judul' => 'operator dasar','diskusi' => '<p><strong>LATIHAN 7&nbsp;</strong></p>

          <p><code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int a = 10;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int b = 7;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int hasil;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = a &amp; b;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari a &amp; b : &quot; + hasil ); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = a | b;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari a | b : &quot; + hasil ); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = a ^ b;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari a ^ b : &quot; + hasil ); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = ~a;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari ~a : &quot; + hasil ); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = a &gt;&gt; 1;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari a &gt;&gt; 1 : &quot; + hasil ); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = b &lt;&lt; 2;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari b &lt;&lt; 2 : &quot; + hasil );<br />
          } &nbsp; }</code></p>

          <p><br />
          <strong>assalamualaikum buk,abang/mba dan teman teman sekalian izin bertanya maksud dari ~a serta penjumlahan a^b itu apa?</strong></p>

          <p><strong>terima kasih</strong></p>','created_at' => '2022-09-08 18:40:17','updated_at' => '2022-09-08 18:40:17'),
            array('id' => '93','materi_id' => '82','mahasiswa_id' => '80','judul' => 'OPERATOR LOGIKA','diskusi' => '<p>Assalammu&#39;alaikum warhamtullahi wabarakatuh,</p>

          <p>Izin bertanya ibu, abang dan kawan-kawan semuanya.</p>

          <p>Untuk priotitas operator logika XOR, apakah diatas operator AND atau dibawah operator OR?</p>

          <p>Terimakasih</p>

          <p>Wassalammu&#39;alaikum warahmatullahi wabarakatuh</p>','created_at' => '2022-09-08 21:15:43','updated_at' => '2022-09-08 21:15:43'),
            array('id' => '94','materi_id' => '84','mahasiswa_id' => '37','judul' => 'Soal 4 data Operator menengah','diskusi' => '<p>Assalamualaikum wr wb izin mau bertanya Bu/ bang dan teman teman 🙏 bolehkah di soal no 4 tipe data operator menengah itu membuat kreasi dengan menambahkan , deklarasi nilai hasil nya menjadi int B= 5 jadi memilik dua nilai hasil untuk menghasilkan&nbsp;pre/post increment, pre/post decrement)&nbsp; menghasilkan nilai a = 5 dan b = 6 ?</p>

          <p>&nbsp;</p>','created_at' => '2022-09-08 23:52:47','updated_at' => '2022-09-08 23:52:47'),
            array('id' => '95','materi_id' => '82','mahasiswa_id' => '58','judul' => 'cara perhitungan biner','diskusi' => '<p>assalamualaikum bu, bang, mbak dan teman teman pada soal no 7 tingkat dasar bagaimana cara mengerjakan perhitungan biner?</p>

          <p>Terimakasih&nbsp;</p>

          <p>wassalamualaikum wr wb</p>','created_at' => '2022-09-09 16:43:57','updated_at' => '2022-09-09 16:43:57'),
            array('id' => '96','materi_id' => '82','mahasiswa_id' => '53','judul' => 'Soal Contoh nomor 6','diskusi' => '<p>Assalamu&#39;alaikum</p>

          <p>izin bertanya bu, bang, teman - teman</p>

          <p>untuk contoh nomor 6 jika nilai 80 lalu saya masukkan di status nilai &gt; 81 statusnya gagal, kenapa ya ?</p>

          <p>terima kasih bu, bang, teman - teman&nbsp;</p>','created_at' => '2022-09-09 21:48:24','updated_at' => '2022-09-09 21:48:24'),
            array('id' => '97','materi_id' => '81','mahasiswa_id' => '138','judul' => 'Operator data(kelompok)','diskusi' => '<p>Assalamu&#39;alaikum bu,bang,mbak.&nbsp;<br />
          Perkenalkan kami dari Kelompok 2&nbsp;<br />
          Atas Nama</p>

          <p>-Herdiansah</p>

          <p>-bayu pamungkas</p>

          <p>-julia dwi azizah</p>

          <p>Izin berdiskusi..</p>

          <p>Contoh soal:</p>

          <p>public class operator {</p>

          <p>&nbsp; &nbsp; public static void main(String[] args) {</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; int a = 10;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; int b = 7;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; int hasil;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = a &amp; b;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari a &amp; b : &quot; + hasil );&nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = a | b;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari a | b : &quot; + hasil );&nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = a ^ b;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari a ^ b : &quot; + hasil );&nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = ~a;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari ~a : &quot; + hasil );&nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = a &gt;&gt; 1;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari a &gt;&gt; 1 : &quot; + hasil );&nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = b &lt;&lt; 2;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari b &lt;&lt; 2 : &quot; + hasil );</p>

          <p>} }</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>Luaran:&nbsp;</p>

          <p>Hasil dari a &amp; b : 6</p>

          <p>Hasil dari a | b : 7</p>

          <p>Hasil dari a ^ b : 1</p>

          <p>Hasil dari ~a : -11</p>

          <p>Hasil dari a &gt;&gt; 1 : 3</p>

          <p>Hasil dari b &lt;&lt; 2 : 28</p>

          <p>&nbsp;</p>

          <p>Didalam operator bitwise terdapat operator geser kanan...apakah metode tersebut bisa digunakan dalam kode program tersebut jika ada yang bisa, tolong jelaskan bagai mana cara menghitungnya..?</p>','created_at' => '2022-09-09 21:49:13','updated_at' => '2022-09-09 21:49:13'),
            array('id' => '98','materi_id' => '82','mahasiswa_id' => '91','judul' => 'Operator Dasar','diskusi' => '<p>Assalamu&#39;alaikum, izin bertanya buk, abang, mbak, dan teman-teman. Pada soal no 7</p>

          <p>public class operator {</p>

          <p>&nbsp; &nbsp; public static void main(String[] args) {</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; int a = 10;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; int b = 7;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; int hasil;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = a &amp; b;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari a &amp; b : &quot; + hasil );&nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = a | b;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari a | b : &quot; + hasil );&nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = a ^ b;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari a ^ b : &quot; + hasil );&nbsp;&nbsp;</p>

          <p>&nbsp;</p>

          <p>hasil = ~a;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari ~a : &quot; + hasil );&nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = a &gt;&gt; 1;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari a &gt;&gt; 1 : &quot; + hasil );&nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = b &lt;&lt; 2;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari b &lt;&lt; 2 : &quot; + hasil );</p>

          <p>} &nbsp; }</p>

          <p>Hasil luarannya ini&nbsp;</p>

          <p>Hasil dari a &amp; b : 6</p>

          <p>Hasil dari a | b : 7</p>

          <p>Hasil dari a ^ b : 1</p>

          <p>Hasil dari ~a : -11</p>

          <p>Hasil dari a &gt;&gt; 1 : 3</p>

          <p>Hasil dari b &lt;&lt; 2 : 28</p>

          <p>Tapi setelah saya jalankan hasil luarannya berbeda, hasilnya malah jadi seperti ini.&nbsp;</p>

          <p>Hasil dari a &amp; b : 2</p>

          <p>Hasil dari a | b : 15</p>

          <p>Hasil dari a ^ b : 13</p>

          <p>Hasil dari ~a : -11</p>

          <p>Hasil dari a &gt;&gt; 1 : 5</p>

          <p>Hasil dari b &lt;&lt; 2 : 28</p>

          <p>Jadi, yang mana yang benar, mohon solusinya?&nbsp;</p>

          <p>&nbsp;</p>','created_at' => '2022-09-09 23:12:12','updated_at' => '2022-09-09 23:12:12'),
            array('id' => '99','materi_id' => '84','mahasiswa_id' => '50','judul' => 'Soal no 7','diskusi' => '<p>Assalamualaikum warahmatullah wabarakatuh, saya Fiter Ramadansyah NPM G1A022053 sebelumnya permisi bang, bu, dan teman teman semua. Izin bertanya tentang permasalahan yang terdapat pada soal nomor 7 individu tingkat menengah :&nbsp; public class OperatorBitwise {<br />
          &nbsp; &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int a = 10;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int b = 7;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int hasil;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = a &amp; b;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari a &amp; b : &quot; + hasil );&nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = a | b;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari a | b : &quot; + hasil );&nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = a ^ b;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari a ^ b : &quot; + hasil );&nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = ~a;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari ~a : &quot; + hasil );&nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = a &gt;&gt; 1;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari a &gt;&gt; 1 : &quot; + hasil );&nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = b &lt;&lt; 2;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari b &lt;&lt; 2 : &quot; + hasil );<br />
          }&nbsp; &nbsp;}<br />
          Saya masih bingung untuk cara jawabnya, apakah diuraikan atau dioperasikan? Terima kasih sebelumnya</p>','created_at' => '2022-09-09 23:53:45','updated_at' => '2022-09-09 23:53:45'),
            array('id' => '100','materi_id' => '83','mahasiswa_id' => '157','judul' => 'Operator','diskusi' => '<p>Assalamulaikum wr wb perkenalkan nama saya Muhammad Rifky Ramadani G1F022039 Prodi Sistem Informasi izin bertanya</p>

          <p>Misal nya kita mengoperasikan variable 1 dan variable 2</p>

          <p>Contoh:</p>

          <p>public class Operator{</p>

          <p>&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;int a = 10;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int b = 7;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int hasil;</p>

          <p>&nbsp; &nbsp; hasil = a | b;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari a | b : &quot; + hasil ); &nbsp;</p>

          <p>Luaran: Hasil dari a | b : 15</p>

          <p>Pertanyaannya bagaimana kita mengubah hasil dari pengoperasian tersebut menjadi binary terima kasih wassalamualaikum wr wb</p>','created_at' => '2022-09-10 06:42:06','updated_at' => '2022-09-10 06:42:06'),
            array('id' => '101','materi_id' => '84','mahasiswa_id' => '56','judul' => 'Perhitungan biner','diskusi' => '<p>Assalamualaikum warahmatullah wabarakatuh, perkenalkan nama saya R. Charissa Prima Oktavia dengan NPM G1A022015 dari kelas A. Permisi bu, abang,dan teman-teman. Izin bertanya, apa ada yang bisa tolong menjelaskan tentang perhitungan binner? Saya masih kurang mengerti mengenai perhitungan binner. Sebelumnya terima kasih, ya🙏</p>','created_at' => '2022-09-10 10:52:10','updated_at' => '2022-09-10 10:52:10'),
            array('id' => '102','materi_id' => '82','mahasiswa_id' => '69','judul' => 'Operator BitWise','diskusi' => '<p>Assalamualaikum wr wb bang,mbak,bu, dan teman teman</p>

          <p>izin bertanya untuk Operator bitwise</p>

          <p>1. &amp; artinya operasi AND&nbsp;</p>

          <p>2. | artinya operasi OR</p>

          <p>Mohon Penjelasannya tentang And dan Or karna saya kurang paham, jika bisa gunakan bahasa universal yang dapat dimengerti dengan mudah, terimakasih sebelumnya&nbsp;</p>','created_at' => '2022-09-10 14:06:43','updated_at' => '2022-09-10 14:06:43'),
            array('id' => '103','materi_id' => '86','mahasiswa_id' => '35','judul' => 'operator increment dan operator decrement','diskusi' => '<p>assalamualaikum, izin bu, mba, abang, dan teman teman semuanya izin bertanya kenapa saat menggunakan post decrement hasil luarannya ditambah 2 variabel sedangkan menggunakan pre decrement ditambah 1.&nbsp;</p>','created_at' => '2022-09-10 20:06:55','updated_at' => '2022-09-10 20:06:55'),
            array('id' => '104','materi_id' => '81','mahasiswa_id' => '146','judul' => 'Oprator data','diskusi' => '<p>Assalamu&#39;alaikum buk,bang,mbak.&nbsp;<br />
          Izin bertanya....&nbsp;</p>

          <p>Contoh soal:</p>

          <p>public class operator {</p>

          <p>&nbsp; &nbsp; public static void main(String[] args) {</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; int a = 10;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; int b = 7;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; int hasil;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = a &amp; b;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari a &amp; b : &quot; + hasil );&nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = a | b;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari a | b : &quot; + hasil );&nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = a ^ b;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari a ^ b : &quot; + hasil );&nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = ~a;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari ~a : &quot; + hasil );&nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = a &gt;&gt; 1;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari a &gt;&gt; 1 : &quot; + hasil );&nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; hasil = b &lt;&lt; 2;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil dari b &lt;&lt; 2 : &quot; + hasil );</p>

          <p>} }</p>

          <p>Didalam operator bitwise terdapat operator geser kanan...apakah metode tersebut bisa digunakan dalam kode program tersebut jika ada yang bisa, tolong jelaskan bagai mana cara menghitungnya..?</p>','created_at' => '2022-09-10 21:05:26','updated_at' => '2022-09-10 21:05:26'),
            array('id' => '105','materi_id' => '81','mahasiswa_id' => '158','judul' => 'Binary','diskusi' => '<p>Selamat malam,<br />
          Izin memperkenalkan diri<br />
          Nama : F. Yosua P. Habeahan<br />
          NPM : G1F022025<br />
          <br />
          <br />
          Saya ingin bertanya, untuk melihat bentuk dari bilangan binary sebelum dikonversi menjadi bilangan desimal bagaimana ya?, apakah harus dihitung manual atau ada tipe data untuk melihat bentuk dari bilangan binary tersebut?<br />
          Mohon bantuanya Bu,Bang,Kawan kawan.<br />
          Terima Kasih</p>

          <p>&nbsp;</p>','created_at' => '2022-09-10 22:28:08','updated_at' => '2022-09-10 22:28:08'),
            array('id' => '106','materi_id' => '82','mahasiswa_id' => '51','judul' => 'Operator Increment dan Decrement','diskusi' => '<p>Assalamualaikum bu, bang, mbak, dan teman-teman, izin mau bertanya tentang operator increment dan decrement, di operator ini saya belum paham tipe operator tersebut, mohon untuk penjelasannya, kalau bisa dengan bahasa yang mudah di pahami dan dimengerti, terimakasih wassalamu&#39;alaikum warahmatullahi wabarakatuh 🙏</p>','created_at' => '2022-09-10 23:35:06','updated_at' => '2022-09-10 23:35:06'),
            array('id' => '107','materi_id' => '83','mahasiswa_id' => '143','judul' => 'operator','diskusi' => '<p>assalammualaikum wr wb</p>

          <p>Perkenalkan nama saya Della Erlina G1F022019 dari Sistem Informasi (A)&nbsp;</p>

          <p>izin bertanya bu, bang, dan teman-teman...</p>

          <p>Saya ingin bertanya tentang</p>

          <p>public class latihan2 {<br />
          &nbsp;&nbsp; &nbsp; public static void main(String[] args) {</p>

          <p>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int a = 10;</p>

          <p>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int b = 7;</p>

          <p>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int hasil;</p>

          <p>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;hasil = ~a;</p>

          <p>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari ~a : &quot; + hasil ); &nbsp;</p>

          <p>luaran :&nbsp; Hasil dari ~a : -11</p>

          <p>nah hal ini kan disebut dengan two complements, kenapa disebut two complements,&nbsp;</p>

          <p>mohon bantuannya bu ,, bang, teman-teman. Karena saya masih bingung dengan bentuk yang satu ini.</p>

          <p>atas perhatiannya wasalammualaikum wr wb<br />
          &nbsp;</p>','created_at' => '2022-09-11 04:45:32','updated_at' => '2022-09-11 04:45:32'),
            array('id' => '108','materi_id' => '83','mahasiswa_id' => '143','judul' => 'operator','diskusi' => '<p>assalammualaikum wr wb</p>

          <p>Perkenalkan nama saya Della Erlina G1F022019 dari Sistem Informasi (A)&nbsp;</p>

          <p>izin bertanya bu, bang, dan teman-teman...</p>

          <p>Saya ingin bertanya tentang</p>

          <p>public class latihan2 {<br />
          &nbsp;&nbsp; &nbsp; public static void main(String[] args) {</p>

          <p>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int a = 10;</p>

          <p>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int b = 7;</p>

          <p>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int hasil;</p>

          <p>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;hasil = ~a;</p>

          <p>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari ~a : &quot; + hasil ); &nbsp;</p>

          <p>luaran :&nbsp; Hasil dari ~a : -11</p>

          <p>nah hal ini kan disebut dengan two complements, kenapa disebut two complements,&nbsp;</p>

          <p>mohon bantuannya bu ,, bang, teman-teman. Karena saya masih bingung dengan bentuk yang satu ini.</p>

          <p>atas perhatiannya wasalammualaikum wr wb<br />
          &nbsp;</p>','created_at' => '2022-09-11 04:45:32','updated_at' => '2022-09-11 04:45:32'),
            array('id' => '109','materi_id' => '81','mahasiswa_id' => '155','judul' => 'Perbedaan Operator Kondisional (Ternary) dengan Operator Bitwise','diskusi' => '<p>Assalamualaikum wr wb izin memperkenalkan Nama saya Novia Alqodri, Npm G1F022015, izin bertanya bu, mbak/abg.</p>

          <p>apa perbedaan dari operator kondisional (Ternary) dengan Operator Bitwise?&nbsp;</p>

          <p>Baik itu saja yang mau saya tanyakan,jika ada salah kata saya mohon maaf saya akhiri wassalamu&#39;alaikum warahmatullahi wabarakatu 🙏🙏</p>','created_at' => '2022-09-11 08:20:22','updated_at' => '2022-09-11 08:20:22'),
            array('id' => '110','materi_id' => '85','mahasiswa_id' => '148','judul' => 'Operator Bitwise','diskusi' => '<p>Assalamualaikum wr wb&nbsp;</p>

          <p>&nbsp;</p>

          <p>Izin memperkenalkan diri:</p>

          <p>&nbsp;</p>

          <p>Nama: Muhammad Salman Alfarizi&nbsp;</p>

          <p>&nbsp;</p>

          <p>NPM: G1F022047</p>

          <p>&nbsp;</p>

          <p>Prodi: Sistem Informasi (A)</p>

          <p>&nbsp;</p>

          <p>Izin bertanya Ibu, Bang, Mbak dan Teman-teman. Saya ingin bertanya tentang operator bitwise;</p>

          <p>&nbsp;</p>

          <p><strong>Apa kegunaan dari masing-masing operator dari operator bitwise dan digunakan untuk kondisi seperti apakah masing-masing dari operatornya? (saya belum terlalu mengerti untuk perbedaan penggunaan dari masing-masing operatornya digunakan untuk kondisi seperti apa)</strong></p>

          <p>&nbsp;</p>

          <p>Mohon bantuannya jika mengetahui jawaban dari pertanyaan yang saya ajukan🙏🏻 Atas perhatiannya saya ucapkan Terima Kasih.</p>

          <p>&nbsp;</p>

          <p>Wassalamu&#39;alaikum wr wb</p>','created_at' => '2022-09-11 11:43:53','updated_at' => '2022-09-11 11:43:53'),
            array('id' => '111','materi_id' => '81','mahasiswa_id' => '164','judul' => 'operator java','diskusi' => '<p>Assalamualaikum. wr.wb. perkenalkan saya Suryaningsih dengan NPM : GIF022049, Izin bertanya bu Endina, abang/mbak asdos dan kawan kawan.&nbsp;apakah bisa kita&nbsp; membuat program menghitung berat badan ideal menggunakan operator java?, bila bisa tolong jelaskan caranya dan menggunakan operator apa saja?</p>

          <p>Terimakasih&nbsp;</p>

          <p>wassalamualaikum wr.wb</p>','created_at' => '2022-09-11 15:02:26','updated_at' => '2022-09-11 15:02:26'),
            array('id' => '112','materi_id' => '86','mahasiswa_id' => '45','judul' => 'Decrement dan Increment','diskusi' => '<p>Assalamualaikum, Bu, Mba, Abang, dan teman-teman semua. Izin bertanya. Maksud dari operator increment dan decrement itu secara mudahnya bagaimana, ya? Dan sebenarnya operator decrement dan increment sendiri digunakan untuk menyusun pemograman seperti apa?. Terima kasih. Wassalamualaikum.</p>','created_at' => '2022-09-11 15:59:12','updated_at' => '2022-09-11 15:59:12'),
            array('id' => '113','materi_id' => '82','mahasiswa_id' => '41','judul' => 'cara mencari biner','diskusi' => '<p>Assalamualaikum warahmatullahi wabarokatuh,</p>

          <p>Izin bertanya ibu, abang, dan kawan-kawan semuanya.</p>

          <p>mengenai soal no 7, bagaimana cara mencari nilai biner&nbsp; dan kenapa nilai biner selalu bernilai 1 dan 0?</p>

          <p>terima kasih</p>

          <p>wassalamualaikum wr.wb</p>','created_at' => '2022-09-11 16:21:51','updated_at' => '2022-09-11 16:21:51'),
            array('id' => '114','materi_id' => '84','mahasiswa_id' => '94','judul' => 'Presentasi','diskusi' => '<p>Selamat sore buk, bang dan teman-teman semua</p>

          <p>Izin bertanya buk untuk materi presentasi besok, apakah ppt ny langsung di kirim ke e-learning atau tidak usah buk?&nbsp;</p>','created_at' => '2022-09-11 16:39:32','updated_at' => '2022-09-11 16:39:32'),
            array('id' => '115','materi_id' => '83','mahasiswa_id' => '128','judul' => 'Operator','diskusi' => '<p>Assalamualaikum</p>

          <p>Izin bang, ibu dan temen temen</p>

          <p>Saya Bayu Pamungkas</p>

          <p>NPM G1F022029</p>

          <p>Mau bertanya Apa perbedaan dari operator mod dan operator div..?</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>','created_at' => '2022-09-11 17:06:23','updated_at' => '2022-09-11 17:06:23'),
            array('id' => '116','materi_id' => '86','mahasiswa_id' => '84','judul' => 'Latihan 6','diskusi' => '<p>Assalamualaikum warahmatullahi wabarakatu.</p>

          <p>izin Bu dan teman teman sekalian mau tanya dari program ini apa kesalahannya,karena hasil luaranya kedua2nya selamat malam publicclass OperatorKondisi{</p>

          <p>&nbsp; &nbsp;public static void main( String[] args ){<br />
          &nbsp; &nbsp; &nbsp; String status = &quot;&quot;;<br />
          &nbsp; &nbsp; &nbsp; int jam = 12 ;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; status = (jam &gt; 12)?&quot;selamat pagi&quot;:&quot;selamat malam&quot;;<br />
          &nbsp; &nbsp; &nbsp; status = ( jam &lt; 12)?&quot;selamat pagi&quot;:&quot;selamat malam&quot;;<br />
          &nbsp; &nbsp; &nbsp; System.out.println( status );<br />
          &nbsp; &nbsp; &nbsp; System.out.println( status );<br />
          &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp; &nbsp;}&nbsp;&nbsp;<br />
          &nbsp; &nbsp;}<br />
          &nbsp; Mohon bantuannya 🙏&nbsp;</p>','created_at' => '2022-09-11 17:52:49','updated_at' => '2022-09-11 17:52:49'),
            array('id' => '117','materi_id' => '81','mahasiswa_id' => '149','judul' => 'Operator Kondisional','diskusi' => '<p>Assalamu&#39;alaikum warahmatullahi wabarakatuh<br />
          perkenalkan Nama saya Lola Citra Tama dengan Npm G1F022061.<br />
          disini saya mau bertanya buk,mbak, abang dan teman2 sekalian</p>

          <p>Tolong jelaskan yang dimaksud dengan operator kondisional dan apa contoh dari operator kondisional?</p>

          <p>Baik itu saja yang ingin saya sampaikan,jika ada salah kata saya mohon maaf saya akhiri🙏🏻<br />
          waalaikum salam warahmatullahi wabarakatuh</p>','created_at' => '2022-09-11 17:59:42','updated_at' => '2022-09-11 17:59:42'),
            array('id' => '118','materi_id' => '84','mahasiswa_id' => '60','judul' => 'Prioritas operator','diskusi' => '<p>Assalamualaikum wr.wb selamat malam ibuk, abang dan teman&rdquo; saya Lola Yashinta Dewi dari kelas A dengan NPM G1A022009 izin bertanya, 5.2. &nbsp;Apabila diketahui pernyataan a || b &amp;&amp; a || !b. Uraikan urutan logika yang akan dikerjakan! Analisa luaran true atau false dari pernyataan tersebut! Saya masih belum paham mengenai prioritas operator apakah bisa d jelaskan kembali ibuk, abang dan teman&rdquo; sekalian, terimakasih atas waktunya Wassalamualaikum wr.wb🙏</p>','created_at' => '2022-09-11 18:54:33','updated_at' => '2022-09-11 18:54:33'),
            array('id' => '119','materi_id' => '83','mahasiswa_id' => '153','judul' => 'Operator','diskusi' => '<p>Assalamualaikum wr wb.</p>

          <p>Perkenalkan nama saya Muhammad Faaturrahman Atallah G1F022053 Sistem Informasi (A)</p>

          <p>Izin bertanya, bang, bu dan teman teman</p>

          <p>Saya ingin bertanya tentang perbedaan antara operator aritmatika dan operator penugasan</p>

          <p>mungkin itu saja dari saya</p>

          <p>Wassalamualaikum wr wb.</p>','created_at' => '2022-09-11 19:13:13','updated_at' => '2022-09-11 19:13:13'),
            array('id' => '120','materi_id' => '84','mahasiswa_id' => '48','judul' => 'Operator Bitwise','diskusi' => '<p>Assalamualaikum wr.wb ibu,bang dan teman-teman izin bertanya cara menentukan nilai not ~ itu bagaimana terimakasih wassalamu&#39;alaikum wr.wb</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>','created_at' => '2022-09-11 19:26:36','updated_at' => '2022-09-11 19:26:36'),
            array('id' => '121','materi_id' => '82','mahasiswa_id' => '72','judul' => 'Operator','diskusi' => '<p>Assalamualaikum ,teman2 dan mbak/Abang izin bertanya sebelum nya</p>

          <p>&bull;cara mengoperasikan dan perhitungan&nbsp; Operator Bitwise: &amp;, |, ^, ~, &lt;&lt;, &gt;&gt;, &gt;&gt;&gt; itu gimana ya kok hasil nya selalu 0 dan 1 ?</p>

          <p>Terimakasih&nbsp;</p>','created_at' => '2022-09-11 19:37:13','updated_at' => '2022-09-11 19:37:13'),
            array('id' => '122','materi_id' => '82','mahasiswa_id' => '80','judul' => 'PENGAYAAN 2','diskusi' => '<p>Assalamualaikum warahmatullahi wabarakatuh, izin bertanya Bu, bang, kawan-kawan...</p>

          <p>Terkait pengayaan 2 :</p>

          <p>public class operator {</p>

          <p>&nbsp; &nbsp; public static void main(String[] args) {</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(3+4*4&gt;1+5*(4-2)||5&lt;7);</p>

          <p>&nbsp; &nbsp; }</p>

          <p>}</p>

          <p>Luaran:</p>

          <p>True</p>

          <p>1.&nbsp; &nbsp; Uraikan ekspresi tersebut hingga mendapatkan kesimpulan TRUE!</p>

          <p>Luaran yang dihasilkan dari program adalah True, lalu maksud dari nomor satu uraikan ekspresi hingga mendapat kesimpulan true itu gimana ya? Sedangkan luaran nya sudah True ..</p>

          <p>Terimakasih bu, bang, kawan-kawan...</p>

          <p>&nbsp;</p>','created_at' => '2022-09-11 19:41:09','updated_at' => '2022-09-11 19:41:09'),
            array('id' => '123','materi_id' => '81','mahasiswa_id' => '156','judul' => 'Operator','diskusi' => '<p>Assalamu&#39;alaikum wr.wb<br />
          Perkenalkan nama saya Diamond panca lady<br />
          NPM : G1F022027</p>

          <p><br />
          Izin bertanya bu, bang,mbak dan teman teman, disoal latihan no 7 kemarin mengenai operator bitwise, bagaimana cara menghitung hasil biner serta bagaimana mengubah biner menjadi bilangan desimal?<br />
          Terimakasih, maaf jika ada salah kata bu, bang,mbak dan teman teman.<br />
          Wassalamualaikum wr.wb</p>','created_at' => '2022-09-11 19:53:03','updated_at' => '2022-09-11 19:53:03'),
            array('id' => '124','materi_id' => '82','mahasiswa_id' => '125','judul' => 'operator','diskusi' => '<p>Assalamualaikum teman-teman, bu, abang/mbak izin bertanya</p>

          <p>apa perbedaan ekspresi,operator,dan operand</p>

          <p>Terimakasih wasalamualaikum wr.wb</p>','created_at' => '2022-09-11 20:05:13','updated_at' => '2022-09-11 20:05:13'),
            array('id' => '125','materi_id' => '81','mahasiswa_id' => '145','judul' => 'Operator','diskusi' => '<p>Assalamualaikum</p>

          <p>saya Arief Haris Prasetyo Rizaldi</p>

          <p>Npm G1F022073</p>

          <p>&nbsp;</p>

          <p>Izin bertanya Ibuk dosen, abang,mbak, dan teman teman semua🙏</p>

          <p>&nbsp;</p>

          <p>Apakah ada perbedaan dan persamaan di Operator java dengan Operator C++?</p>

          <p>Jika ada, apa penjelasan nya.</p>

          <p>&nbsp;</p>

          <p>Sekian terima kasih 🙏</p>','created_at' => '2022-09-11 20:07:14','updated_at' => '2022-09-11 20:07:14'),
            array('id' => '126','materi_id' => '81','mahasiswa_id' => '145','judul' => 'Operator','diskusi' => '<p>Assalamualaikum</p>

          <p>saya Arief Haris Prasetyo Rizaldi</p>

          <p>Npm G1F022073</p>

          <p>&nbsp;</p>

          <p>Izin bertanya Ibuk dosen, abang,mbak, dan teman teman semua🙏</p>

          <p>&nbsp;</p>

          <p>Apakah ada perbedaan dan persamaan di Operator java dengan Operator C++?</p>

          <p>Jika ada, apa penjelasan nya.</p>

          <p>&nbsp;</p>

          <p>Sekian terima kasih 🙏</p>','created_at' => '2022-09-11 20:07:14','updated_at' => '2022-09-11 20:07:14'),
            array('id' => '127','materi_id' => '82','mahasiswa_id' => '88','judul' => 'operator','diskusi' => '<p>assalamualikum ibu, mbak, abang dan teman teman sekalian izin bertanya tentang pengamplikasian operator ternary</p>

          <p>terimakasih</p>','created_at' => '2022-09-11 20:08:43','updated_at' => '2022-09-11 20:08:43'),
            array('id' => '128','materi_id' => '82','mahasiswa_id' => '90','judul' => 'Operator Logika','diskusi' => '<p dir="ltr">Assalamualaikum wr.wb. perkenalkan nama saya Kevin Taqwa Abdiansyah dengan NPM&nbsp; <u>GIA</u><u><a href="tel:022078">022078</a></u>, Izin bertanya bu Endina, abang/mbak asdos dan kawan kawan.&nbsp; Tentang soal operator tingkat dasar latihan 5 bagian c itu maksudnya gimana dan cara menyelesaikannya gimana? Saya kurang paham dengan soalnya.</p>

          <p dir="ltr"><br />
          Terimakasih, maaf jika ada salah kata bu, bang,mbak dan teman teman.<br />
          Wassalamualaikum wr.wb.</p>','created_at' => '2022-09-11 20:13:37','updated_at' => '2022-09-11 20:13:37'),
            array('id' => '129','materi_id' => '82','mahasiswa_id' => '34','judul' => 'Operator','diskusi' => '<p>Assalamualaikum ibu, abang, mbak dan teman teman pada soal no 7 tingkat dasar bagaimana cara mengerjakan perhitungan biner?</p>

          <p>Terimakasih&nbsp;</p>

          <p>wassalamualaikum wr wb</p>','created_at' => '2022-09-11 20:16:46','updated_at' => '2022-09-11 20:16:46'),
            array('id' => '130','materi_id' => '82','mahasiswa_id' => '93','judul' => 'Operator bitwise','diskusi' => '<p>Assalamualaikum wr.wb<br />
          Selamat malam semuanya,semoga malam ini kita semua bisa tidur nyenyak agas siap mengawali hari Senin dengan ceria.<br />
          Izin buk sebelumnya,untuk kawan-kawan disini saya ada sedikit pertanyaan.Terkait materi operator, maksud dari Soal nomor 7 itu apa ya, Saya kurang paham maksud Dari uraikan perhitungan biner?<br />
          Mungkin ada kawan-kawan yang bisa menjawab sangat diperbolehkan.mari kita diskusi bersama-sama tentunya dengan tatakrama yang seharusnya.<br />
          Mungkin cuma itu pertanyaan saya waalaikumsalam wr.wb</p>','created_at' => '2022-09-11 20:16:53','updated_at' => '2022-09-11 20:16:53'),
            array('id' => '131','materi_id' => '84','mahasiswa_id' => '39','judul' => 'Operator','diskusi' => '<p>Assalamu&#39;alaikum warahmatullahi wabarakatuh</p>

          <p>Perkenalkan nama saya Aisyah Amelia Zarah Juaita dengan NPM G1A022075 dari kelas A, izin bertanya Bu, bang, mbak, dan teman2 sekalian, apakah dalam operator relasional harus menghasilkan tipe data boolean?</p>

          <p>Terimakasih</p>

          <p>Waalaikumsalam warahmatullahi wabarakatuh&nbsp;</p>','created_at' => '2022-09-11 20:32:00','updated_at' => '2022-09-11 20:32:00'),
            array('id' => '132','materi_id' => '82','mahasiswa_id' => '81','judul' => 'Operator Ternary','diskusi' => '<p>Assalammualaikum Wr Wb, Izin memperkenalkan diri bu, bang, serta teman-teman perkenalkan Nama : M. Satria Halim Npm : G1A022080&nbsp;</p>

          <p>Izin bertanya bu,bang,serta teman teman sekalian pada Operator Ternary mengapa harus memakai tipe data String untuk bagian &quot;String status = &quot; &quot;; Apakah tidak bisa memakai tipe data lain dan jika tidak membuat baris kode tersebut apakah operasi tetap berjalan?</p>

          <p>Demikian, pertanyaan dari saya terimakasih bu, bang, serta teman-teman</p>','created_at' => '2022-09-11 21:17:36','updated_at' => '2022-09-11 21:17:36'),
            array('id' => '133','materi_id' => '81','mahasiswa_id' => '165','judul' => 'Operator','diskusi' => '<p>Asalamualaikum Warahmatullahi Wabarakatu</p>

          <p>sebelumnya Selamat malam buk, mbak, abang, teman-teman sekalian</p>

          <p>Baik izinkan saya memperkenalkan diri dulu nama saya Muhammad Rafly Alfarizy dengan NPM G1F022067</p>

          <p>Izin bertanya Buk, mbak, abang, teman-teman sekalian apakah operator ternary dan operator relasional bisa disamakan? karna keduanya sama sama menghasilkan true dan false</p>

          <p>Terimakasih sebelumnya Wassalamualaikum wr. wb</p>','created_at' => '2022-09-11 21:30:49','updated_at' => '2022-09-11 21:30:49'),
            array('id' => '134','materi_id' => '82','mahasiswa_id' => '115','judul' => 'Operator Bit wise','diskusi' => '<p>Assalamualaikum teman teman semua,abang&sup2;/mbak&sup2; saya oki cahaya putra dengan NPM G1A022095 izin bertanya&nbsp;</p>

          <p>Maksudnya operasi &quot;!&quot; apa ya, mohon penjelasannya</p>

          <p>terimakasih</p>','created_at' => '2022-09-11 21:44:59','updated_at' => '2022-09-11 21:44:59'),
            array('id' => '135','materi_id' => '82','mahasiswa_id' => '121','judul' => 'operator dan perhitungan bitwise','diskusi' => '<p>Assalamualaikum perkenalkan nama saya Amirah Putri Nabilah dengan Npm G1A022090, izin bertanya ibu, abang, mbak dan teman teman sekaliann. saya masih belum memahami maksud dari operator logika dan agak bingung diperhitungan bitwise, itu saja pertanyaan dari saya, ibu, bang dan teman&rdquo;&nbsp; sekiranya bisa dijelaskan ulang. terimakasih atas waktunyaa. wassalamualaikum</p>','created_at' => '2022-09-11 22:23:28','updated_at' => '2022-09-11 22:23:28'),
            array('id' => '136','materi_id' => '82','mahasiswa_id' => '97','judul' => 'Operator','diskusi' => '<p>Assalamualaikum perkenalkan nama saya Dimas Fahrozy dengan Npm G1A022018, izin bertanya ibu, abang, mbak dan teman teman sekaliann. saya masih belum memahami maksud dari operator logika dan agak bingung diperhitungan biner, itu saja pertanyaan dari saya, ibu, bang dan teman&rdquo; sekiranya bisa dijelaskan ulang. terimakasih atas waktunyaa. wassalamualaikum</p>

          <p>Materi : Operator</p>

          <p>Dosen Pengampu : Endina Putri Purwandari , S.T., M.Kom.</p>','created_at' => '2022-09-12 05:41:03','updated_at' => '2022-09-12 05:41:03'),
            array('id' => '137','materi_id' => '87','mahasiswa_id' => '69','judul' => 'Latihan 1','diskusi' => '<p>Assalamualaikum Ibu, Bang, Mbak, dan teman teman perkenalkan nama saya Revan Averuz Mufid dengan NPM G1A022065, izin bertanya</p>

          <p><code>public class Manusia { &nbsp;// deklarasi kelas<br />
          &nbsp;&nbsp; &nbsp;// deklarasi variabel<br />
          &nbsp; &nbsp; String nama;<br />
          &nbsp;&nbsp; &nbsp;String rambut;</code></p>

          <p><code>&nbsp;&nbsp;&nbsp; &nbsp;// deklarasi constructor tanpa parameter<br />
          &nbsp;&nbsp;&nbsp; &nbsp;public Manusia() {<br />
          &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Kelas Manusia tanpa nama&quot;);<br />
          &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp; }</code></p>

          <p><br />
          <strong>Latihan 1:</strong><br />
          1.1.&nbsp;&nbsp; &nbsp; Analisa ciri-ciri umum Kelas Manusia yang dapat menjadi<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;a.&nbsp;atribut variabel, dan<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;b. perilaku/ behavior untuk method!</p>

          <p>Maksud dari latihan 1 tsb apakah kita tambah method seperti&nbsp;</p>

          <p>public static void main( String[] args) {<br />
          &nbsp;Manusia1 satu = new Manusia1 (&quot;Revan&quot;, &quot;Hitam&quot;);</p>

          <p>dan menambahkan&nbsp;</p>

          <p>System.out.println(&quot; Nama Manusia ini = &quot;+ nama +<br />
          &nbsp;&quot;\\n Warna Rambut = &quot; + rambut);</p>

          <p>pada deklarasi variabel, apakah benar latihannya seperti itu, mohon penjelasannya</p>','created_at' => '2022-09-12 12:16:53','updated_at' => '2022-09-12 12:16:53'),
            array('id' => '138','materi_id' => '82','mahasiswa_id' => '71','judul' => 'Operator Bitwise','diskusi' => '<p>Assalamualaikum wr.wb perkenalkan nama saya Alfikram Hadi Putra dengan NPM G1A022093, Izin bertanya Bu,&nbsp; Abang, mbak dan kawan kawan sekalian,saya disini masih kesulitan dan bingung diperhitungan bitwise ,kiranya bisa di jelaskan lagi..<br />
          Mungkin itu saja wassalamu&#39;alaikum</p>','created_at' => '2022-09-12 23:07:56','updated_at' => '2022-09-12 23:07:56'),
            array('id' => '139','materi_id' => '90','mahasiswa_id' => '157','judul' => 'Kelas,Objek,Method','diskusi' => '<p>Assalamualaikum wr wb Nama saya Muhammad.Rifky.Ramadani NPM:G1F022039</p>

          <p>izin bertanya</p>

          <p>jadi saya masih bingung</p>

          <p>-perbedaan constructor overloading dan constructor overriding</p>

          <p>-merhod over loading dan method overidding</p>

          <p>Sekira nya teman teman bisa membantu dikarenakan saya masih bingung dengan perbedaan nya&nbsp;</p>

          <p>wassalamualaikum wr wb</p>','created_at' => '2022-09-13 19:54:27','updated_at' => '2022-09-13 19:54:27'),
            array('id' => '140','materi_id' => '91','mahasiswa_id' => '113','judul' => 'Kelas,Objek,Method','diskusi' => '<p>Assalamualaikum Warahmatullahi Wabarakatuh saya Keysa Maqfirah dengan NPM G1A022012</p>

          <p>izin bertanya bu, bang, mbak, dan teman-teman sekalian</p>

          <p>jadi saya masih bingung mengenai method dengan return value dan method tanpa return value.</p>

          <p>Waalaikumsalam warahmatullahi wabarakatuh</p>','created_at' => '2022-09-13 22:36:31','updated_at' => '2022-09-13 22:36:31'),
            array('id' => '141','materi_id' => '91','mahasiswa_id' => '42','judul' => 'Latihan 4','diskusi' => '<p>Assalamualaikum Wr. Wb.</p>

          <p>Izin bertanya bu, bang asdos, dan teman-teman semua.</p>

          <p><strong>Latihan 4:</strong><br />
          4.1. Evaluasi method yang dimiliki Contoh 4&nbsp; pada&nbsp;<code>class Anak extends Ortu&nbsp;</code>dengan method di&nbsp;<code>class Ortu</code>.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Simpulkan hasil evaluasi Anda agar method ini menjadi efisien!<br />
          4.2. Setelah dirunning di JDoodle, catat waktu eksekusinya.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode program yang dapat mengefisienkan waktu eksekusi!</p>

          <p>Untuk Latihan 4 pada tingkat lanjut ini maksudnya apa ya? apakah teman-teman disini ada yang paham maksud dari soal latihannya? apabila ada yang paham mohon penjelasannya.</p>

          <p>Terima kasih sebelumnya</p>

          <p>Wasalamualaikum&nbsp; Wr. Wb.</p>','created_at' => '2022-09-13 23:46:36','updated_at' => '2022-09-13 23:46:36'),
            array('id' => '142','materi_id' => '83','mahasiswa_id' => '160','judul' => 'Operator','diskusi' => '<p>Assalamualaikum wr.wb ibu, abang, dan teman-teman</p>

          <p>sebelumnya izinkan saya memperkenalkan diri</p>

          <p>saya Cindy Andira dengan NPM G1F022059</p>

          <p>izinkan saya bertanya kepada kalian, apa perbedaan&nbsp;operasi Pre Increment dan Post Increment dengan&nbsp;operasi Pre Decrement dan Post Decrement&nbsp;</p>

          <p>mohon bantuannya teman-teman</p>

          <p>terimakasih, Wassalamualaikum wr.wb</p>','created_at' => '2022-09-14 00:47:03','updated_at' => '2022-09-14 00:47:03'),
            array('id' => '143','materi_id' => '89','mahasiswa_id' => '33','judul' => 'menperbaiki codingan yg salah','diskusi' => '<p>assalamualaikum wr wb,iziin untuk bertanya tentang mencari solusi dari codingan yang salah,dari:</p>

          <p><span style="font-size:9px"><span class="marker"><code>public class Manusia {<br />
          &nbsp;&nbsp; &nbsp;//deklarasi atribut Manusia dalam variabel<br />
          &nbsp;&nbsp; &nbsp;String nama, rambut;<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;//deklarasi constructor<br />
          &nbsp;&nbsp; &nbsp;public Manusia1(String nama, String rambut) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot; Nama saya : &quot;+ nama +&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&quot;\\n Warna Rambut : &quot; + rambut);&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;//deklarasi method<br />
          &nbsp;&nbsp; &nbsp;void sukaNonton &nbsp;{<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot; Hobi Menonton : &quot; + film);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;int sukaNonton {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;episode*durasi;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;//deklarasi method utama<br />
          &nbsp;&nbsp; &nbsp;public static void main( String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Manusia satu = new Manusia(&quot;Putri&quot;, &quot;hitam&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;satu.sukaNonton(&quot;Drakor&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int jumlahJam = satu.sukaNonton(2, 2);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Jam nonton = &quot; +jumlahJam + &quot; jam&quot;);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></span></span></p>

          <p>saya akhiri wassalamualaikum wrb wb</p>','created_at' => '2022-09-14 22:20:34','updated_at' => '2022-09-14 22:20:34'),
            array('id' => '144','materi_id' => '87','mahasiswa_id' => '30','judul' => 'Kasar Dasar','diskusi' => '<p>public class Manusia3 {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;//deklarasi atribut Manusia dalam variabel<br />
          &nbsp; &nbsp; String nama, rambut;<br />
          &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; //deklarasi constructor<br />
          &nbsp; &nbsp; public Manusia3(String nama, String rambut) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot; Nama saya : &quot; + nama +&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;\\n Warna Rambut : &quot; + rambut); &nbsp; &nbsp;<br />
          &nbsp; &nbsp; }<br />
          &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; //deklarasi method<br />
          &nbsp; &nbsp; void sukaNonton(String film) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot; Hobi Menonton : &quot; + film);<br />
          &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; //deklarasi method utama<br />
          &nbsp; &nbsp; public static void main( String[] args) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Manusia3 tiga = new Manusia (&quot;Deva&quot; + nama + &quot;hitam&quot; + rambut);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; tiga.sukaNonton(&quot;film&quot;);<br />
          &nbsp; &nbsp; }<br />
          }</p>

          <p>&nbsp;</p>

          <p>Izin bertanya kenkawan, iko apo kesalahannyo yo? kenapa&nbsp; tidak bisa di run? erornya itu di bagian&nbsp; &quot;tiga.sukaNonton(&quot;film&quot;);&quot;</p>','created_at' => '2022-09-14 22:30:26','updated_at' => '2022-09-14 22:30:26'),
            array('id' => '145','materi_id' => '87','mahasiswa_id' => '51','judul' => 'Kelas objek nmr 3 tingkat dasar','diskusi' => '<p>Assalamualaikum wr wb Bu,Bang dan Mba izin bertanya, untuk soal nmr 3 tingkat dasar itu perbedaan overloading dan method overidding itu apa ya saya sudah membaca tpi masih kurang paham sekian terimakasih&nbsp;</p>','created_at' => '2022-09-15 10:22:48','updated_at' => '2022-09-15 10:22:48'),
            array('id' => '146','materi_id' => '89','mahasiswa_id' => '102','judul' => 'Presentasi Kelompok 4','diskusi' => '<p>Assalamualaikum teman-teman, kalau saya punya kelas induknya Binatang, kira-kira apa yang bisa menjadi kelas turunannya ya? Mohon bantuannya teman-teman.</p>','created_at' => '2022-09-15 15:07:54','updated_at' => '2022-09-15 15:07:54'),
            array('id' => '147','materi_id' => '87','mahasiswa_id' => '100','judul' => 'Tugas kelompok','diskusi' => '<p>Assalamualaikum. izin bertanya bu, bang, dan teman teman sekalian. Kami masih bingung membuat codingan constructor, karena luaran yang ditampilkan masih error. mohon bantuannya. terimakasih sebelumnya</p>','created_at' => '2022-09-15 16:15:27','updated_at' => '2022-09-15 16:15:27'),
            array('id' => '148','materi_id' => '91','mahasiswa_id' => '85','judul' => 'Presentasi Kelompok 6 Informatika-B','diskusi' => '<p>Assalamualaikum teman-teman, kalau saya punya kelas induknya Kendaraan, kira-kira apa ya yang bisa jadi kelas turunannya? Mohon bantuannya teman-teman, silahkan jawab di komentar yaa...</p>','created_at' => '2022-09-15 16:33:21','updated_at' => '2022-09-15 16:33:21'),
            array('id' => '149','materi_id' => '91','mahasiswa_id' => '116','judul' => 'Constructors dan Extends','diskusi' => '<p>Assalamualaikum, izin bertanya bu, bang, dan teman teman semuanya. kenapa deklarasi membuat kelas anak dengan &#39;class Anak extends Ortu&#39; hanya dapat berjalan pada program yang tidak mempunya constructor. Saat saya coba pada program yang terdapat constructor, luarannya akan error &quot;implicit super constructor Ortu() is undefined for default constructor. Must define an explicit constructor&quot;.&nbsp;</p>

          <p>Jadi, apakah deklarasi membuat kelas anak tersebut hanya berlaku pada program tanpa constructor? jika begitu, maka deklarasi seperti apa jika kita membuat kelas anak pada program dengan constructor?</p>

          <p>Mohon bantuannya bu, bang, dan teman teman, terimakasih</p>','created_at' => '2022-09-15 16:36:11','updated_at' => '2022-09-15 16:36:11'),
            array('id' => '150','materi_id' => '89','mahasiswa_id' => '94','judul' => 'Presentasi Kelompok 5','diskusi' => '<p>Selamat sore teman-teman, kalau saya punya kelas induknya Adat, kira-kira apa ya yang bisa jadi kelas turununanya? Mohon bantuannya teman-teman, silakan di jawab di komentar ya...</p>','created_at' => '2022-09-15 16:53:52','updated_at' => '2022-09-15 16:53:52'),
            array('id' => '151','materi_id' => '87','mahasiswa_id' => '69','judul' => 'Tentang Constructor','diskusi' => '<p>Assalamualaikum wr wb Ibu, Mbak, Bang, dan teman-teman, izin bertanya, untuk Variabel constructor itu memang maksimal nya 3 ya? soalnya pas saya tambahkan String lagi dia error, maka dari itu saya buat seperti ini</p>

          <p>public class Ortu {<br />
          &nbsp; &nbsp; //deklarasi constructor<br />
          &nbsp; &nbsp; public Ortu(String nama, String rambut, String jeniskel) &nbsp;{ &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//nama dan rambut adalah variabel constructor<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot; Nama saya : &quot;+ nama +&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&quot;\\n Warna Rambut : &quot; + rambut +<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&quot;\\n Jenis Kelamin :&quot; +jeniskel); &nbsp; &nbsp;}<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//deklarasi constructor tambahan karena satu constructor maksimal 3 string<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;public Ortu(String tb) &nbsp;{&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot; Nama saya : &quot;+ tb);<br />
          }<br />
          &nbsp; &nbsp; public static void main (String[] args) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Ortu satu = new Ortu(&quot;Revan Averuz Mufid&quot;, &quot;Hitam&quot;, &quot;Laki Laki&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Ortu dua = new Ortu(&quot;170&quot;);<br />
          &nbsp; &nbsp; &nbsp;}<br />
          }</p>

          <p>&nbsp;apakah benar seperti ini? jika saya run tidak terjadi error</p>','created_at' => '2022-09-15 21:54:04','updated_at' => '2022-09-15 21:54:04'),
            array('id' => '152','materi_id' => '87','mahasiswa_id' => '69','judul' => 'Tentang String char dan int','diskusi' => '<p>Assalamualaikum wr wb ibu, mbak, bang, dan teman-teman. Izin bertanya, untuk variabel constructor apakah harus menggunakan String? soalnya ketika saya menggunakan int dan char terjadi error, mohon penjelasannya</p>','created_at' => '2022-09-15 21:56:46','updated_at' => '2022-09-15 21:56:46'),
            array('id' => '153','materi_id' => '91','mahasiswa_id' => '59','judul' => 'Presentasi Kelompok 8 - Kelas A','diskusi' => '<p>Assalamualaikum teman-teman, Jika saya punya kelas induknya Kantor, dan memiliki kelas turunan karyawan dan manager. kira-kira apakah kita bisa menambahkan beberapa kelas turunan yang lain lagi? dan apa saja method yang bisa kita tambahkan? Mohon dijawab ya teman-teman, terimakasih.</p>','created_at' => '2022-09-15 22:22:24','updated_at' => '2022-09-15 22:22:24'),
            array('id' => '154','materi_id' => '91','mahasiswa_id' => '33','judul' => 'Tugas contoh soal studi kasus mengenai materi Kelas, Objek, Method. Kelompok 5 kelas A','diskusi' => '<p>Teman-teman mengenai kelas, saya masih bingung mengenai penggunaan modify private dan protected apakah ada yang bisa bantu saya untuk menjelaskan nya?</p>','created_at' => '2022-09-15 22:55:29','updated_at' => '2022-09-15 22:55:29'),
            array('id' => '155','materi_id' => '90','mahasiswa_id' => '143','judul' => 'PRESENTASI KEL 4','diskusi' => '<p>Assalammualaikum wr wb, sebelumnya perkenalkan&nbsp;</p>

          <p>Nama : DELLA ERLINA</p>

          <p>NPM : G1F022019&nbsp;</p>

          <p>(Studi Kasus )</p>

          <p>Di sebuah perguruan tinggi(PT) yaitu Universitas Bengkulu ( UNIB)&nbsp;</p>

          <p>terdapat banyak fakultas, salah satunya&nbsp; fakultas teknik, yang mana terdapat bermacam-macam&nbsp; prodi.</p>

          <p>Nah, teman-teman, Jika saya akan membuat program Java dan saya punya kelas induknya Mahasiswa, kira-kira apa yang bisa menjadi kelas turunannya ya?</p>','created_at' => '2022-09-16 00:05:23','updated_at' => '2022-09-16 00:05:23'),
            array('id' => '156','materi_id' => '90','mahasiswa_id' => '148','judul' => 'Diskusi Kelompok 5 Sistem Informasi A (Pengganti Presentasi)','diskusi' => '<p>Assalamualaikum wr. wb.</p>

          <p>&nbsp;</p>

          <p>Perkenalkan saya Muhammad Salman Alfarizi (G1F022047) sebagai ketua kelompok 5</p>

          <p>&nbsp;</p>

          <p>Kami kelompok 5 akan membuka forum diskusi kelompok sebagai pengganti presentasi. Sekarang saya sudah membuka forum diskusi untuk kita semua saling berpendapat dan bertukar pikiran mengenai materi kita minggu ini yaitu Kelas dan Method.</p>

          <p>&nbsp;</p>

          <p>Untuk memulai diskusi kita, saya akan mengawalinya dengan mengajukan sebuah pertanyaan;</p>

          <p>Apabila saya ingin membuat kelas yang objeknya nanti akan berupa benda mati, apakah tetap dapat dibuat methodnya? berikan alasannya!</p>','created_at' => '2022-09-16 07:37:47','updated_at' => '2022-09-16 07:37:47'),
            array('id' => '157','materi_id' => '87','mahasiswa_id' => '60','judul' => 'Constructor dan method','diskusi' => '<p>Assalamualaikum wr.wb selamat pagi ibuk abang dan teman-teman perkenalkan nama saya Lola Yashinta Dewi dari prodi informatika kelas A izin bertanya ibuk abang dan teman-teman &nbsp;</p>

          <p><code>public class Manusia {<br />
          &nbsp;&nbsp; &nbsp;//deklarasi atribut Manusia dalam variabel<br />
          &nbsp;&nbsp; &nbsp;String nama, rambut;<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;//deklarasi constructor<br />
          &nbsp;&nbsp; &nbsp;public Manusia1(String nama, String rambut) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot; Nama saya : &quot;+ nama +&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&quot;\\n Warna Rambut : &quot; + rambut);&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;//deklarasi method<br />
          &nbsp;&nbsp; &nbsp;void sukaNonton(String film) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot; Hobi Menonton : &quot; + film);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;//deklarasi method utama<br />
          &nbsp;&nbsp; &nbsp;public static void main( String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Manusia satu = new Manusia(&quot;Putri&quot;, &quot;hitam&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;satu.sukaNonton(&quot;Drakor&quot;);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran 3:</strong><br />
          <code>&nbsp;Nama saya : Putri<br />
          &nbsp;Warna Rambut : hitam<br />
          &nbsp;Hobi Menonton : Drakor</code></p>

          <p>&nbsp;kapan Kita perlu menggunakan constructor dan method?</p>

          <p>terimakasih atas perhatiannya ibuk abang dan teman tema 🙏</p>','created_at' => '2022-09-16 08:40:34','updated_at' => '2022-09-16 08:40:34'),
            array('id' => '158','materi_id' => '91','mahasiswa_id' => '29','judul' => 'Studi Kasus Kelompok 4 Kelas A','diskusi' => '<p>1.&nbsp; &nbsp; &nbsp; &nbsp;Jika saya mempunyai kebun bunga, dimana disana terdapat berbagai macam jenis bunga seperti bunga mawar, bunga krisan, bunga tulip, dan bunga daisy. Maka variabel jenis-jenis bunganya dapat kita jadikan sebagai constructor pada kelas kebun bunga. Nah, pada masing-masing jenis bunga tersebut tentunya memiliki karakteristik yang berbeda. Pertanyaannya, apakah karakteristik dari bunga tersebut dapat dijadikan sebagai kelas turunan? Jika iya, apa saja yang dapat kita tuliskan untuk kelas turunannya?</p>

          <p>Mari dijawab teman-teman</p>','created_at' => '2022-09-16 09:11:22','updated_at' => '2022-09-16 09:11:22'),
            array('id' => '159','materi_id' => '91','mahasiswa_id' => '36','judul' => 'Class dalam Class','diskusi' => '<p>Saya punya kode program yang berisi konstruktor, karena konstruktor tidak bisa diextend. Saya membuat class baru di bawahnya yang berisi method. Untuk kemudian method tersebut saya extend. Namun, ketika dirun, class kedua tidak tampil di luaran. Hanya class pertama saja yang tampil di luaran 2. Kode ini sendiri merupakan gabungan dari kode pada latihan 1 dan latihan 4. Menurut teman-teman, kesalahan saya apa ya? Apakah ada aturan tertentu mengenai kelas di dalam kelas pada java? Ini lampiran kode saya</p>

          <p>package Materi3;<br />
          public class Mahasiswa1 {</p>

          <p>&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;// deklarasi Kelas Induk<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; //deklarasi atribut Manusia dalam variabel<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp;//deklarasi constructor<br />
          &nbsp;&nbsp; &nbsp; &nbsp;Mahasiswa1 (char no, String nama, String fakultas, char jenisKelamin, int ukt, char nilai ) {&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(no+&quot; &nbsp;&nbsp; &nbsp;&quot;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;+nama+&quot; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &quot;+<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; fakultas+&quot; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &quot;+<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; jenisKelamin+&quot; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &quot;+<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;ukt+&quot; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &quot;+<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;nilai);<br />
          &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;//deklarasi method utama<br />
          &nbsp;&nbsp; &nbsp; &nbsp;public static void main( String[] args) { //Method Utama<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;No&nbsp;&nbsp; &nbsp;&quot;+<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &quot;Nama&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &quot;+&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &quot;Fakultas&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &quot;+&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &quot;Jenis Kelamin &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &quot;+&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &quot;UKT &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&quot;+<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &quot;Nilai&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Mahasiswa1 satu = new Mahasiswa1(&#39;1&#39;,&quot;Weko&quot;, &quot;Teknik&quot;, &#39;L&#39;, 300000,&#39;A&#39; );<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Mahasiswa1 dua = new Mahasiswa1(&#39;2&#39;,&quot;Diodo&quot;, &quot;Teknik&quot;, &#39;L&#39;, 300000,&#39;A&#39; );<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Mahasiswa1 tiga = new Mahasiswa1(&#39;3&#39;,&quot;Weko&quot;, &quot;Teknik&quot;, &#39;L&#39;, 300000,&#39;A&#39; );<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Mahasiswa1 empat = new Mahasiswa1(&#39;4&#39;,&quot;Weko&quot;, &quot;Teknik&quot;, &#39;L&#39;, 300000,&#39;A&#39; );<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}<br />
          }<br />
          &nbsp;&nbsp; &nbsp; &nbsp; class Mahasiswa2 {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;void sukaMenonton(String a) { //method induk spesifik<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Nonton &quot; + a);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;void sukaMembaca(String a)&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;{ //method induk umum bisa diubah Mahasiswa3<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Suka Baca &quot; + a);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;public static void main(String [] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Sifat Mahasiswa :&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;Mahasiswa2 objekO = new Mahasiswa2(); //memanggil objek induk<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;objekO.sukaMenonton(&quot;Berita&quot;); //memanggil sifat spesifik induk<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;objekO.sukaMembaca(&quot;Koran&quot;); //memanggil method dengan variabel dapat diubah<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;\\n Sifat Siswa :&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;Mahasiswa3 objekA = new Mahasiswa3(); //memanggil objek Mahasiswa3<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;objekA.sukaMenonton(9, &quot;Film Drakor&quot;); //memanggil sifat spesifik Mahasiswa3 yang diturunkan induk<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;objekA.sukaMembaca(&quot;Komik One Piece&quot;); //memanggil method induk otomatis diturunkan ke Mahasiswa3<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;} }<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;class Mahasiswa3 extends Mahasiswa2 { //membuat kelas Mahasiswa3<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;void sukaMenonton(int a, String b) { //method kelas Mahasiswa3<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Nonton Jam &quot; + a + &quot; Malam &quot; + b);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}}</p>','created_at' => '2022-09-16 11:57:04','updated_at' => '2022-09-16 11:57:04'),
            array('id' => '160','materi_id' => '87','mahasiswa_id' => '60','judul' => 'Extands dan class anak','diskusi' => '<p>Assalamualaikum wr.wb selamat siang ibuk, abang dan teman-teman perkenalkan nama saya Lola Yashinta Dewi dari prodi informatika izin bertanya ibuk, abang dan teman-teman&nbsp;</p>

          <p><code>public class Ortu { &nbsp; &nbsp;&nbsp; &nbsp;// membuat kelas induk<br />
          &nbsp; void sukaMenonton(String a) {&nbsp;&nbsp; &nbsp;// method induk spesifik<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Nonton &quot; + a);<br />
          &nbsp; }<br />
          &nbsp; void sukaMembaca(String a) { &nbsp;&nbsp; &nbsp;// method induk umum bisa diubah anak<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Suka Baca &quot; + a);<br />
          &nbsp; }</code></p>

          <p><code>public static void main(String [] args) {<br />
          &nbsp; &nbsp; System.out.println(&quot;Sifat Orang Tua :&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;Ortu objekO = new Ortu(); &nbsp;&nbsp; &nbsp;// memanggil objek induk<br />
          &nbsp;&nbsp; &nbsp;objekO.sukaMenonton(&quot;Berita&quot;);&nbsp;&nbsp; &nbsp;// memanggil sifat spesifik induk<br />
          &nbsp;&nbsp; &nbsp;objekO.sukaMembaca(&quot;Koran&quot;); &nbsp;&nbsp; &nbsp;// memanggil method dengan variabel dapat diubah<br />
          <br />
          &nbsp; &nbsp;&nbsp;System.out.println(&quot;\\n Sifat Anak :&quot;);&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;Anak objekA = new Anak();&nbsp;&nbsp; &nbsp;//memanggil objek anak<br />
          &nbsp;&nbsp; &nbsp;objekA.sukaMenonton(9, &quot;Film Drakor&quot;);&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//memanggil sifat spesifik anak yang diturunkan induk<br />
          &nbsp;&nbsp; &nbsp;objekA.sukaMembaca(&quot;Komik One Piece&quot;); //memanggil method ke induk yang otomatis diturunkan tanpa deklarasi ulang di anak<br />
          }&nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>class Anak extends Ortu {<br />
          &nbsp; void sukaMenonton(int a, String b) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Nonton Jam &quot; + a + &quot; Malam &quot; + b);<br />
          &nbsp; }&nbsp;&nbsp; &nbsp;<br />
          &nbsp; void sukaMenonton(String a) {&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// method induk spesifik<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Nonton &quot; + a);<br />
          &nbsp; }<br />
          &nbsp; void sukaMembaca(String a) { &nbsp;&nbsp; &nbsp;// method induk umum bisa diubah anak<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Suka Baca &quot; + a);<br />
          &nbsp; }<br />
          <br />
          public static void main(String [] args) {<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Sifat Orang Tua :&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;Ortu objekO = new Ortu(); &nbsp;&nbsp; &nbsp;// memanggil objek induk<br />
          &nbsp;&nbsp; &nbsp;objekO.sukaMenonton(&quot;Berita&quot;);&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// memanggil sifat spesifik induk<br />
          &nbsp;&nbsp; &nbsp;objekO.sukaMembaca(&quot;Koran&quot;); &nbsp;&nbsp; &nbsp;// memanggil method dengan variabel dapat diubah<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;\\n Sifat Anak :&quot;);&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;Anak objekA = new Anak();&nbsp;&nbsp; &nbsp;//memanggil objek anak<br />
          &nbsp;&nbsp; &nbsp;objekA.sukaMenonton(9, &quot;Film Drakor&quot;);&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//memanggil sifat spesifik anak yang diturunkan induk<br />
          &nbsp;&nbsp; &nbsp;objekA.sukaMembaca(&quot;Komik One Piece&quot;); //memanggil method ke induk yang otomatis diturunkan tanpa deklarasi ulang di anak<br />
          &nbsp; &nbsp; }<br />
          }</code></p>

          <p>Luaran 4:<br />
          Sifat Orang Tua :<br />
          Nonton Berita<br />
          Suka Baca Koran</p>

          <p>&nbsp;Sifat Anak :<br />
          Nonton Jam 9 Malam Film Drakor<br />
          Suka Baca Komik One Piece</p>

          <p><br />
          Apa perbandingan method yang dimiliki&nbsp;<code>class Anak extends Ortu</code>&nbsp;dengan method di&nbsp;<code>class Ortu</code>!</p>

          <p>terimakasih atas perhatiannya ibuk, abang dan teman-teman Wassalamualaikum wr.wb🙏</p>','created_at' => '2022-09-16 12:42:09','updated_at' => '2022-09-16 12:42:09'),
            array('id' => '161','materi_id' => '88','mahasiswa_id' => '160','judul' => 'method','diskusi' => '<p>Assalamualaikum ibu, abang, dan teman-teman</p>

          <p>sebelumnya perkenalkan saya Cindy Andira dengan NPM G1F022059.</p>

          <p>Izinkan saya bertanya apa perbedaan antara method dengan method utama?</p>

          <p>Terimakasih, Wassalamualaikum</p>','created_at' => '2022-09-16 14:49:37','updated_at' => '2022-09-16 14:49:37'),
            array('id' => '162','materi_id' => '91','mahasiswa_id' => '110','judul' => 'studi kasus kelompok 7','diskusi' => '<p>Teman-teman, kalau saya punya kelas laptop dan kelas lenovo(merek) yang mana yang paling tepat untuk menjadi kelas induk ya?</p>','created_at' => '2022-09-16 20:47:08','updated_at' => '2022-09-16 20:47:08'),
            array('id' => '163','materi_id' => '87','mahasiswa_id' => '125','judul' => 'Studi Kasus kelompok 7 kelas A','diskusi' => '<p>Assalamualaikum teman teman, izin bu, bang/mbak</p>

          <p>saya ingin bertanya kalau misalnya kalau saya punya kelas induknya motor, maka apa yang bisa jadi kelas turunannya?</p>

          <p>mohon dijawab teman-teman sekalian</p>','created_at' => '2022-09-16 21:10:36','updated_at' => '2022-09-16 21:10:36'),
            array('id' => '164','materi_id' => '91','mahasiswa_id' => '118','judul' => 'Constructor Overloading','diskusi' => '<p>Assalamualaikum wr wb. bu,bang,mbak dan teman teman sekalian</p>

          <p>izin bertanya</p>

          <p>ada yang bisa jelasin tentang constructor overloading dengan bahasa yang mudah dimengerti? dan contoh kodingnya kalo boleh</p>

          <p>Terimakasih</p>','created_at' => '2022-09-16 23:28:14','updated_at' => '2022-09-16 23:28:14'),
            array('id' => '165','materi_id' => '91','mahasiswa_id' => '109','judul' => 'Method Overloading','diskusi' => '<p>Assalamualaikum bu, bang, dan teman-teman sekalian</p>

          <p>izin bertanya</p>

          <p>mengenai method overloading. dari pemahaman saya mengenai materi kita kali ini yaitu Kelas, Objek, Method. ada yang namanya constructor overloading dan method overloading, yang mana constructor overloading sendiri ialah banyaknya constructor dalam satu kelas yang mana constructornya memiliki nama yang sama namun tipedata dan jumlah parameter yang berbeda. apakah dalam method overloading juga berlaku demikian? dan adakah perbedaan antara constructor overloading dan method overloading? jika ada apasaja yang membedakannya?</p>

          <p>mohon bantuannya teman-teman, terimakasih&nbsp;</p>','created_at' => '2022-09-17 00:37:19','updated_at' => '2022-09-17 00:37:19'),
            array('id' => '166','materi_id' => '92','mahasiswa_id' => '143','judul' => 'materi pengayaan','diskusi' => '<p>assalammualaikum warahmatullahi wabarakatuh...</p>

          <p>Perkenalkan saya&nbsp;</p>

          <p>Della Erlina NPM G1F022019</p>

          <p>izin bertanya bu, bang, dan teman-teman&nbsp;</p>

          <p>jadi sini saya ingin bertanya mengenai</p>

          <p>Polimorfisme</p>

          <p>Polimorfisme mempunyai makna sesuatu yang memiliki banyak bentuk, yaitu memiliki nama sama, tetapi memiliki kelakuan (behaviour) yang berbeda.&nbsp;&nbsp;</p>

          <p>dapatkah teman-teman memberikan contoh lainnya selain&nbsp; bentuk kelas hewan....</p>

          <p>&nbsp;</p>

          <p>terima kasih wasalammualaikum wr wb</p>','created_at' => '2022-09-17 21:37:55','updated_at' => '2022-09-17 21:37:55'),
            array('id' => '167','materi_id' => '90','mahasiswa_id' => '134','judul' => 'kelas,objek,method','diskusi' => '<p>FORUM DISKUSI KELOMOK 6 SISTEMINFORMASI A&nbsp; (PENGGGANTI PRESENTASI)</p>

          <p>ASSALAMUALAIKUM WARAHMATULLAHI WABAROHKATU.</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>mohon izin.perkenalkan nama saya annas zam zam (G1F022013), baiklah disini saya sebagai ketua kelompok 6.&nbsp;&nbsp;</p>

          <p>kami disini akan membuka forum diskusi kelompok sebagai pengganti presntasi.jadi sekarang saya sudah membuka forum diskusi bagi teman-teman yang silahkan berpendapat dan bertanya mengenai materi yang kami sampaikan apapun itu selagi kami bisa menjawab kami akan menjawabnya apa bila kami tidak dapat menjawab bagi teman-teman dari kelompok lain yang bisa menjawab silahkan menjawab.</p>

          <p>baiklah untuk memulai forum diskusinya saya akan terlebih dahulu mengajukan sebuah pertanyaan.</p>

          <p>pada kelas induk manusia kita dapat menggunakan parameter seperti String nama, warna rambut, warna mata, char jenis kelamin.. Bila kami kelompok 6 membuat kelas induk hewan, kami akan menambah parameter String nama, int umur... apakah teman&quot; yang lain bisa menambah parameter untuk hewan? atau mungkin bisa membantu kami untuk menentukan turunannya?</p>

          <p>baiklah segitu saja dari saya saya akhiri wasalamualaikum wr.wb</p>

          <p>&nbsp;</p>','created_at' => '2022-09-18 01:03:16','updated_at' => '2022-09-18 01:03:16'),
            array('id' => '168','materi_id' => '90','mahasiswa_id' => '131','judul' => 'method overloading','diskusi' => '<p>assalamualaikum wr wb&nbsp;</p>

          <p>Sebelumnya perkenalkan&nbsp;</p>

          <p>Nama : M Hidayat Pahlevi&nbsp;</p>

          <p>NPM : G1F022031&nbsp;</p>

          <p>izin ibu, abang abang , dan teman teman&nbsp; saya ingin bertanya seputar method overloading&nbsp;</p>

          <p><strong>kapan method overloading diperlukan?&nbsp;</strong></p>

          <p>Terimakasih</p>

          <p>&nbsp;</p>','created_at' => '2022-09-18 17:21:50','updated_at' => '2022-09-18 17:21:50'),
            array('id' => '169','materi_id' => '91','mahasiswa_id' => '64','judul' => 'Extand','diskusi' => '<p>public class test1 { &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;void sukaBermain(String a) { &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;main &quot; + a);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;void sukaMembaca(String a) { &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Suka Baca &quot; + a);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}</p>

          <p>&nbsp;&nbsp; &nbsp;public static void main(String [] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Manusia A :&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;test1 objekO = new test1(); &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;objekO.sukaBermain(&quot;Game&quot;); &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;objekO.sukaMembaca(&quot;Komik&quot;); &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;\\n Manusia B :&quot;); &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;test2 objekA = new test2(); &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;objekA.sukaBermain( &quot;Bola&quot;); &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;objekA.sukaMembaca(&quot;Novel&quot;);<br />
          &nbsp;&nbsp; &nbsp;} &nbsp; &nbsp;}</p>

          <p>&nbsp;&nbsp; &nbsp;class test2 extends test1 {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;void sukaBermain( int b,String a) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Suka Bermain &quot;+a + &quot;Setiap jam &quot;+b);<br />
          &nbsp;&nbsp; &nbsp; &nbsp;} &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp;void sukaBermain(String b) { &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;main &quot; + b);<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;void sukaMembaca(String a) { &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Suka Membaca &quot; + a);<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;public static void main(String [] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Manusia A :&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;test1 objekO = new test1(); &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;objekO.sukaBermain(&quot;Game&quot;); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;objekO.sukaMembaca(&quot;Koran&quot;); &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;\\n Manusia B :&quot;); &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;test2 objekA = new test2(); &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;objekA.sukaBermain(&quot;Bola&quot;); &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;objekA.sukaMembaca(&quot;Novel&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;} &nbsp; &nbsp;<br />
          }</p>

          <p>Luaran =</p>

          <p>Manusia A :<br />
          main Game<br />
          Suka Baca Komik</p>

          <p>&nbsp;Manusia B :<br />
          main Bola<br />
          Suka Membaca Novel<br />
          &nbsp;</p>

          <p>&nbsp;</p>

          <p>Assalamualaikum buk,mba/bg dan teman2 semua,izin bertanya kenapa saat saya run pada luaran tertulis &quot;main bola&quot; padahal diextand saya tulis &quot;suka bermain (variable) setiap jam (variable)&quot; jadi bagaimana solusi nya?</p>

          <p>terima kasih</p>','created_at' => '2022-09-18 18:09:32','updated_at' => '2022-09-18 18:09:32'),
            array('id' => '170','materi_id' => '87','mahasiswa_id' => '69','judul' => '.','diskusi' => '<p>Assalamualaikum wr wb, izin bertanya bang,mbak,dan teman teman, mengapa pada saat saya run kode, yang muncul bukan yang kita kerjakan tetapi yang muncul kelas yang lain. mohon penjelasaannya</p>','created_at' => '2022-09-18 18:23:03','updated_at' => '2022-09-18 18:23:03'),
            array('id' => '171','materi_id' => '98','mahasiswa_id' => '113','judul' => 'IF dan SWITCH','diskusi' => '<p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>Assalamualaikum Warahmatullahi Wabarakatuh, saya Keysa Maqfirah dengan NPM G1A022012 dari kelas B. Izin bertanya bu, bang, mbak, dan teman-teman.</p>

          <p>Saya ingin bertanya mengenai kapan saat kita menggunakan If else dan kapan kita pakai switch? mungkin ada ketentuan atau syarat-syarat&nbsp; yang&nbsp; mewajibkan atau mengharuskan kita untuk&nbsp; menggunakan salah satunya atau keduanya?&nbsp;Dan mengapa perintah switch tidak bisa digunakan untuk ekspresi string dan kondisi boolean?</p>

          <p><code>Wa&#39;alaikumsalam Warahmatullahi Wabarakatuh.&nbsp; &nbsp;</code>.&nbsp;</p>','created_at' => '2022-09-19 21:05:34','updated_at' => '2022-09-19 21:05:34'),
            array('id' => '172','materi_id' => '98','mahasiswa_id' => '65','judul' => 'IF DAN  SWITCH','diskusi' => '<p>Assalamualaikum wr. wb. izin bertanya bu, bang, dan teman-teman sekalian&nbsp;<br />
          Jadi ini kan di dalam soal kelompok nomor satu kan disuruh buat kode program tetapi tidak disebutkan menggunakan if atau switch. jadi nomor satu kelompok itu menggunakan if atau switch bu/bang&nbsp;<br />
          Maaf mengganggu waktunya dan terima kasih sebelumnya&nbsp;</p>','created_at' => '2022-09-19 21:56:51','updated_at' => '2022-09-19 21:56:51'),
            array('id' => '173','materi_id' => '98','mahasiswa_id' => '80','judul' => 'Import','diskusi' => '<p>Assalammu&#39;alaikum wr wb,</p>

          <p>Saya Zahrah Hafizah Fakhri, NPM G1A022046, Kelas B</p>

          <p>Izin bertanya ibu, abang, dan kawan-kawan.</p>

          <p>Terkait kode Import, apakah kode import masih memerlukan package? Lalu jika tidak menggunakan package, bagaimana cara membuat projek barunya?</p>

          <p>Terimakasih ibu, abang-abang, dan kawan-kawan.</p>

          <p>Wassalammu&#39;alaikum wr wb.</p>','created_at' => '2022-09-20 19:40:12','updated_at' => '2022-09-20 19:40:12'),
            array('id' => '174','materi_id' => '98','mahasiswa_id' => '95','judul' => 'Luaran','diskusi' => '<p>Assalamu&#39;alaikum kawan kawan bu, Putri dan abang asdos</p>

          <p>Nama saya Pandu Rizki Mulyanto</p>

          <p>Npm G1A022076</p>

          <p>izin bertanya perihal input nilai pada luaran, di sana kita bisa meninput nilai&nbsp; dan membuktikan programnya, tetapi saat saya input angka tau huruf program nya tidak dapat memeberi jawaban nya, kira kira bagaimana ya solusinya?&nbsp;</p>

          <p>&nbsp;</p>','created_at' => '2022-09-21 00:16:39','updated_at' => '2022-09-21 00:16:39'),
            array('id' => '175','materi_id' => '95','mahasiswa_id' => '30','judul' => 'Tidak sinkron antara kode program dan luaran pada contoh 1','diskusi' => '<p>izin tanya teman teman pada soal tingkat menengah.</p>

          <p><strong>Contoh 1:</strong>&nbsp;Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner; //memanggil impor package yang membaca masukan pengguna</code></p>

          <p><code>public class PercabanganIf {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          Scanner masuk = new Scanner(System.in); &nbsp;// membaca teks yang dimasukkan pengguna<br />
          System.out.print(&quot;Masukkan Angka Anda : &quot;); &nbsp;//pengguna memasukkan data<br />
          &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;int nilai = &nbsp;masuk.nextByte(); &nbsp;//menyimpan masukan pengguna ke tipe data<br />
          &nbsp;&nbsp; &nbsp;&nbsp;<br />
          if (nilai == 10) { &nbsp;//percabangan yang memeriksa kondisi<br />
          System.out.println(&quot;Sepuluh&quot;); &nbsp;//baris kode yang dieksekusi bila benar<br />
          &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;}<br />
          else &nbsp;{ &nbsp;//baris kode yang dieksekusi bila kondisi tidak terpenuhi dan salah<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Nilai Bukan Sepuluh&quot;);<br />
          }&nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh 1:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;Cannot invoke nextByte() on the primitive type int<br />
          &nbsp;&nbsp; &nbsp;Type mismatch: cannot convert from Scanner to boolean<br />
          &nbsp;&nbsp; &nbsp;Type mismatch: cannot convert from int to Scanner</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;at IfBersarang.main(IfBersarang.java:7)</code></p>

          <p><strong>Luaran Contoh 1:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;Cannot invoke nextByte() on the primitive type int<br />
          &nbsp;&nbsp; &nbsp;Type mismatch: cannot convert from Scanner to boolean<br />
          &nbsp;&nbsp; &nbsp;Type mismatch: cannot convert from int to Scanner</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;at IfBersarang.main(IfBersarang.java:7)</code></p>

          <p>setelah saya pindahkan pada apikasi eclipse, kode program tersebut sudah bisa dijalankan tanpa ada pesan kesalahan. jadi apakah ini ada kesalahan pada contoh tersebut, atau adakah tindakan saya yang membuat kode tersebut menjadi benar?</p>

          <p>terimakasih:)</p>','created_at' => '2022-09-21 06:19:34','updated_at' => '2022-09-21 06:19:34'),
            array('id' => '176','materi_id' => '98','mahasiswa_id' => '44','judul' => 'PERTANYAAN KELOMPOK 9','diskusi' => '<p>Assalamualaikum buk, saya perwakilan dari kelompok 9 ingin menyampaikan pertanyaan untuk forum diskusi tugas kelompok kami, Nama anggota kelompok:<br />
          1. M. FEBRI ARDIANSYAH<br />
          2. FADLAN DWI FEBRIO<br />
          3. DAFFA&nbsp;FADHIL&nbsp;APRIZA</p>

          <p>Berikut bebrapa pertanyaan dari kelompok kami:</p>

          <p>Soal-soal:<br />
          1.Apabila sebuah data di definisikan sebagai berikut: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          Bayi = 0-1 tahun<br />
          Batita = 1-3 tahun<br />
          Balita = 3-5 tahun<br />
          Anak-Anak = 5-12 tahun<br />
          Remaja = 12-17 tahun<br />
          Pemuda = 17-30 tahun<br />
          Dewasa = 30-60 tahun<br />
          Lansia = &gt;60 tahun</p>

          <p>apabila andi adalah seorang anak balita yang berumur 3 bulan..</p>

          <p>Maka tentukanlah apa yang sebaiknya di gunakan apabila ingin membuat data tersebut menjadi sebuah program? mengapa?<br />
          Susunlah alogaritma untuk kode program tersebut baik menggunakan if ataupun switch!!!<br />
          2.Apabila sebuah data di definisikan sebagai berikut:<br />
          Diketahui nilai mahasiswa : 87</p>

          <p>nilai A : 85-100<br />
          bilai A- : 80-84<br />
          nilai B+ : 75-79<br />
          nilai B : 70-74<br />
          nilai B- : 65-69<br />
          nilai C+ : 60-64<br />
          nilai C : 55-59<br />
          nilai C- : 50-54<br />
          nilai D : 40-50<br />
          nilai E :&nbsp;</p>

          <p>Maka tentukanlah apa yang sebaiknya di gunakan apabila ingin membuat data tersebut menjadi sebuah program?<br />
          Susunlah alogaritma untuk kode program tersebut baik menggunakan if ataupun switch!!!<br />
          3.Terdapat sebuah data sebagai berikut.&nbsp;<br />
          Dalam sebuah kelas kendaraan terdapat bbrp tipe kendaraan</p>

          <p>1.Mobil &nbsp;memiliki roda 4<br />
          2. motor memiliki roda 2<br />
          3. Bajaj memiliki roda 3&nbsp;</p>

          <p>Jika ketiga variabel salah maka akan menampilkan tidak memiliki roda .</p>

          <p>luaran yang ingin di hasilkan<br />
          &bull; hanya menghasilkan &quot;mobil memiliki 4 roda&quot; saja<br />
          &bull; hanya menghasilkan &quot;tidak memiliki roda &quot; saja<br />
          &bull;dan menghasilkan keempat luaran dari mobil sampai ke tidak memiliki roda.</p>

          <p>menurut kalian untuk menginput data tersebut menjadi sebuah kode program maka yang mana yang harus kita gunakan apakah IF atau SWITCH? jelaskan!!</p>

          <p>Sekian dari kelompok kami terima kasih, wassalamu&#39;alaikum warahmatullahi&nbsp;wabararokatuh</p>','created_at' => '2022-09-21 17:29:17','updated_at' => '2022-09-21 17:29:17'),
            array('id' => '177','materi_id' => '98','mahasiswa_id' => '50','judul' => 'help dong','diskusi' => '<p>Assalamualaikum ibuk&nbsp; mbak abang maaf mengganggu waktunya saya Fiter Ramadansyah G1A022053 mau bertanya ini tadi saya mencoba mengerjakan latihan soal no 1.3 setelah selesai memebuat program setelah di running kok console ngga muncul yahh?</p>

          <p>package praktikum4;<br />
          import java.util.Scanner;<br />
          public class Percabanganif2 {<br />
          public static void main (String []args) {<br />
          &nbsp;&nbsp; &nbsp;int nilaiF = 80 ;<br />
          &nbsp;&nbsp; &nbsp;int nilaiI = 80 ;<br />
          &nbsp;&nbsp; &nbsp;int nilaiT = 80 ;<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp; if(nilaiT == 100 &amp;&amp; nilaiI == 100 &amp;&amp; nilaiT == 100) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;System.out.println (&quot;Mendapatkan Nilai Sangat Baik&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;else if (nilaiT == 100 &amp;&amp; nilaiI == 100 || nilaiT == 100) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println (&quot;Mendapatkan Nilai Baik&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;else if (nilaiT == 100 || nilaiI == 100 || nilaiT == 100) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println (&quot;Mendapatkan Nilai Belajar Lagi Deck&quot;);&nbsp;<br />
          &nbsp; }<br />
          &nbsp;&nbsp; &nbsp; &nbsp;else {<br />
          }<br />
          }<br />
          }<br />
          &nbsp;mohon jawaban nyaa dong teman temannn&nbsp;</p>

          <p>&nbsp;</p>','created_at' => '2022-09-21 20:30:26','updated_at' => '2022-09-21 20:30:26'),
            array('id' => '178','materi_id' => '98','mahasiswa_id' => '36','judul' => 'Butuh pendapat teman-teman','diskusi' => '<p>Assalamualaikum warahmatullahi wabarakatuh, Mohon izin bertanya Bu, Bang, dan Teman-teman.</p>

          <p>Saya membuat kode program sebagai berikut.</p>

          <p>package materi4;<br />
          import java.util.Scanner; //memanggil impor package yang membaca masukan pengguna</p>

          <p>public class satuTiga {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;Scanner varS = new Scanner(System.in);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Masukkan Jumlah SKS Anda : &quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int jumlahSKS = &nbsp;varS.nextInt();<br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Scanner varT = new Scanner(System.in);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Masukkan Nilai Toefl Anda : &quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int nilaiToefl = &nbsp;varT.nextInt();<br />
          &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Scanner varU = new Scanner(System.in);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Masukkan Hasil Ujian Skripsi(Lulus/Tidak Lulus : &quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; String ujianSkripsi = &nbsp;varU.nextLine();<br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Scanner varA = new Scanner(System.in);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Masukkan Status Artikel ilmiah anda : &quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; String artikel= &nbsp;varA.nextLine();<br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; if (jumlahSKS &gt;= 144)&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;if (nilaiToefl &gt;= 430)<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;if(ujianSkripsi.equals(&quot;Lulus&quot;))&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;{<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;if(artikel.equals(&quot;submitted&quot;)) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;System.out.println(&quot;layak lulus dengan gelar S.Kom.&quot;);&nbsp;&nbsp; &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;}<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;else {System.out.println(&quot;Persyaratan belum terpenuhi&quot;);}<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;}<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;else {System.out.println(&quot;Perlu Ujian Ulang&quot;);}<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;}<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;else {System.out.println(&quot;Ulangi tes Toefl maksimal 3x&quot;);}<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;}<br />
          &nbsp; &nbsp; &nbsp; &nbsp; else {System.out.println(&quot;Mengulang mata kuliah hingga memenuhi SKS&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;}<br />
          &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp;</p>

          <p>Kemudian Saya memberikan input semuanya False (tidak memenuhi syarat pada if). Sebagai berikut</p>

          <p>Masukkan Jumlah SKS Anda : 120<br />
          Masukkan Nilai Toefl Anda : 300<br />
          Masukkan Hasil Ujian Skripsi(Lulus/Tidak Lulus : Tidak Lulus<br />
          Masukkan Status Artikel ilmiah anda : not submitted<br />
          Mengulang mata kuliah hingga memenuhi<br />
          &nbsp;</p>

          <p>Kemudian saya coba lagi membuat input dengan nilai SKS true, menghasilkan luaran sebagai berikut</p>

          <p>Masukkan Jumlah SKS Anda : 144<br />
          Masukkan Nilai Toefl Anda : 400<br />
          Masukkan Hasil Ujian Skripsi(Lulus/Tidak Lulus : Tidak Lulus<br />
          Masukkan Status Artikel ilmiah anda : Not Submitted<br />
          Ulangi tes Toefl maksimal 3x<br />
          &nbsp;</p>

          <p>Nah, jadi dapat kita lihat, program saya mengevaluasi if pertama, jika gagal luaran yang dihasilkan adalah else pertama. Walaupun if selanjutnya gagal.</p>

          <p>Jika if pertama berhasil mengevaluasi if kedua, jika gagal luaran yang diberikan else kedua. Walaupun if selanjutnya gagal.</p>

          <p>Saya penasaran, jika misalnya if pertama berhasil if kedua gagal if ketika berhasil dan if keempat gagal, dengan kode saya sekarang, luaran nya adalah else kedua. Apakah teman-teman punya ide supaya luaran nya adalah semua yang gagal, dalam contoh ini adalah else kedua dan else keempat (bukan hanya else kedua). Terimakasih sebelumnya</p>','created_at' => '2022-09-21 21:16:15','updated_at' => '2022-09-21 21:16:15'),
            array('id' => '179','materi_id' => '98','mahasiswa_id' => '65','judul' => 'IF DAN SWITCH','diskusi' => '<p>Assalamualaikum wr. wb.<br />
          Izin bertanya kan di nomor contoh 3 kan itu switch biasa dan kita diminta untuk mengubah ke IF menurut teman-teman lebih relevan menggunakan IF biasa, IF, bertingkat, dan IF bersarang&nbsp;<br />
          Sekian terima kasih&nbsp;</p>','created_at' => '2022-09-21 22:28:33','updated_at' => '2022-09-21 22:28:33'),
            array('id' => '180','materi_id' => '98','mahasiswa_id' => '50','judul' => 'latihan 1.2','diskusi' => '<p>Assalamualaikum izin buk bang mbak teman teman maaf mengganggu waktunya saya Fiter Ramadansyah G1A022053 izin bertanya ini kenapa eror yaa teman teman</p>

          <p>package praktikum4;<br />
          &nbsp;&nbsp; &nbsp;import java.util.Scanner;<br />
          public class Percabangansoal13 {<br />
          &nbsp;&nbsp; &nbsp;public static void main (String []args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner varSks = new Scanner (System.in);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;masukkan nilai Sks : &quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int sks = varSks.nextInt();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner varToefl = new Scanner (System.in);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;masukkan nilai Toefl : &quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int toefl = varToefl.nextInt();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner varSkripsi = new Scanner (System.in);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;masukkan nilai Skripsi : &quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;boolean skripsi = varSkripsi.nextBoolean();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner varArtikel = new Scanner (System.in);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;masukkan nilai Artikel : &quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int artikel = varArtikel.nextInt();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (sks &gt;= 144 &amp;&amp; toefl &gt;= 430 &amp;&amp; skripsi &nbsp;== true &amp;&amp; artikel == true) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;lulus&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;<br />
          }<br />
          }</p>

          <p>mohon jawaban ny teman teman hmm</p>','created_at' => '2022-09-21 23:20:39','updated_at' => '2022-09-21 23:20:39'),
            array('id' => '181','materi_id' => '98','mahasiswa_id' => '35','judul' => 'contoh1','diskusi' => '<p>assalammualikum izin bertanya bu,bang,mbak,dan teman teman semuanya,kenapa saat saya menggunakan tipe data byte pada contoh1 eror dan saya cek erornya pada if dan menyebabkan no suggestions available.apakah&nbsp; karena byte cuma bisa menampung range -128 sampai 127.</p>

          <p>package LATIHAN1_1;<br />
          import java.util.Scanner; //memanggil impor package yang membaca masukan pengguna</p>

          <p>public class PercabanganIf {<br />
          &nbsp; &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;byte nilai;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Scanner input = new Scanner(System.in); &nbsp;// membaca teks yang dimasukkan pengguna<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Masukkan Angka Anda : &quot;); &nbsp;//pengguna memasukkan data<br />
          &nbsp; &nbsp; &nbsp; &nbsp; nilai = &nbsp;input.nextByte(); &nbsp;//menyimpan masukan pengguna ke tipe data<br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; if (nilai = 1000) { &nbsp;//percabangan yang memeriksa kondisi<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Seribu&quot;); &nbsp;//baris kode yang dieksekusi bila benar<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; else &nbsp;{ &nbsp;//baris kode yang dieksekusi bila kondisi tidak terpenuhi dan salah<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Nilai Bukan Seribu&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; } &nbsp; &nbsp;}<br />
          }<br />
          &nbsp;</p>','created_at' => '2022-09-21 23:22:10','updated_at' => '2022-09-21 23:22:10'),
            array('id' => '182','materi_id' => '95','mahasiswa_id' => '30','judul' => 'ubah switch menjadi if','diskusi' => '<p>Tingkat&nbsp; Menengah</p>

          <p>- soal :</p>

          <p>2.3.&nbsp; Cermati permasalahan yang dipecahkan pada Contoh 3.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Apakah masalah ini bisa diubah menjadi perintah&nbsp;<code>IF</code>?&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Jika bisa, rekomendasikan bentuk perintah&nbsp;<code>IF&nbsp;</code>dari Contoh 3!&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Simpulkan perbandingan masalah yang dapat diselesaikan percabangan dengan&nbsp;<code>IF&nbsp;</code>atau&nbsp;<code>SWITCH&nbsp;</code>!</p>

          <p>- contoh 3 (switch) :</p>

          <p>import java.util.Scanner;<br />
          public class contoh3 {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner masukData = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;// mengambil input<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Pilih A atau B : &nbsp;&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;char data = masukData.next().charAt(0); //Ubah variabel data menjadi masukData<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;switch(data) { //tanda : diubah menjadi tanda {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case &#39;A&#39; : //tambahkan tanda petik satu dan tanda : karna menggunakan tipe data char&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Anda sudah rajin belajar&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break; // baris 1<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case &#39;B&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot; &nbsp;Anda perlu kurangi main game&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break; // baris 2<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;default : //tambahkan tanda :<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot; &nbsp;Pilihan anda diluar A atau B &quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp;} &nbsp; &nbsp;}<br />
          }<br />
          - percobaan penyelesaian :</p>

          <p>import java.util.Scanner;</p>

          <p>public class contoh3_ubahjadiIF {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner varA = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan nilai Anda : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int nilaiA = &nbsp;varA.nextByte();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner varB = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Nilai Anda : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int nilaiB = &nbsp;varB.nextByte();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;if (nilaiA &gt;= 80) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;if(nilaiA &gt;= 80) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Anda Sudah Rajin Belajar&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;else{<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Anda Perlu Kurangi Main Game&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          }</p>

          <p>pertanyaannya : bagaimana cara mengubah luaran untuk input nilai A atau B. Karna pada kode program yang saya buat tersebut hanya bisa input nilai &gt;=80. ketika saya mencoba untuk mengganti variabelnya menjadi A maka terjadi eror. bisakah teman teman menunjukkan letak kesalahan pada kode program yang saya buat? atau mungkin teman teman bisa memberikan contoh kode program yang benar</p>

          <p>terimakasih:)</p>','created_at' => '2022-09-22 07:26:19','updated_at' => '2022-09-22 07:26:19'),
            array('id' => '183','materi_id' => '98','mahasiswa_id' => '84','judul' => 'Latihan1.3','diskusi' => '<p>Assalamualaikum warahmatullahi wabarakatu teman-teman</p>

          <p>&nbsp;apa yang salah dari program ini mohon bantuannya import java.util.Scanner;</p>

          <p>&nbsp;</p>

          <p>public class SyaratLulus {&nbsp;</p>

          <p>&nbsp; public static void main(String[] args) {</p>

          <p>&nbsp;</p>

          <p>int sks, toefl;</p>

          <p>String ujian, artikel;</p>

          <p>&nbsp;</p>

          <p>Scanner input_sks = new scanner(System.in);</p>

          <p>Scanner input_toefl = new scanner(System.in);</p>

          <p>Scanner input_ujian = new scanner(System.in);</p>

          <p>Scanner input_artikel= new scanner(System.in);</p>

          <p>&nbsp;</p>

          <p>int sks=input_sksInt();</p>

          <p>int toefl=input_toeflInt();</p>

          <p>String ujian=input_ujianLine();</p>

          <p>String artikel=input_artikelLine();</p>

          <p>&nbsp;</p>

          <p>if(sks &gt;= 80 &amp;&amp; toefl &gt;= 80 &amp;&amp; ujian.equals(&quot;Lulus &quot;));</p>

          <p>System.out.print(&quot;Lulus&quot;);</p>

          <p>}else {</p>

          <p>System.out.println(&quot;Tidak Lulus&quot;);</p>

          <p>}</p>

          <p>}</p>

          <p>&nbsp;</p>','created_at' => '2022-09-22 07:56:39','updated_at' => '2022-09-22 07:56:39'),
            array('id' => '184','materi_id' => '95','mahasiswa_id' => '87','judul' => 'if bersarang','diskusi' => '<p>Assalamualaikum Wr. Wb.&nbsp;</p>

          <p>izin bertanya bu,bang, dan teman teman semuanya</p>

          <p>package tugas3;</p>

          <p>&nbsp;&nbsp; &nbsp;import java.util.Scanner;</p>

          <p>&nbsp;&nbsp; &nbsp;public class IfBersarang {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner varT = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Tugas Anda : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int nilaiT = &nbsp;varT.nextByte();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner varQ = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Quiz Anda : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int nilaiQ = &nbsp;varQ.nextByte();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner varU = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka UTS Anda : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int nilaiU = &nbsp;varU.nextByte();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;if (nilaiQ &gt;= 80) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;if(nilaiT &gt;= 80) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(nilaiU &gt;= 80) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Anda mendapatkan nilai A&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;else{<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Anda TIDAK mendapatkan nilai A&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}}<br />
          &nbsp; &nbsp; luaran :</p>

          <p>Masukkan Angka Tugas Anda : 70<br />
          Masukkan Angka Quiz Anda : 70<br />
          Masukkan Angka UTS Anda : 70<br />
          &nbsp;</p>

          <p>pertanyaanya: kenapa ketika saya memasukkan nilai yang false semua tidak ada luaran &quot;Anda TIDAK mendapatkan nilai A&quot;?, apakah ada kesalahan pada penulisan saya ?tolong penjelasannya. terimaksih</p>

          <p>&nbsp;</p>','created_at' => '2022-09-22 09:31:44','updated_at' => '2022-09-22 09:31:44'),
            array('id' => '185','materi_id' => '98','mahasiswa_id' => '94','judul' => 'Soal 2.3','diskusi' => '<p>Selamat pagi buk, bang, dan teman- teman semua</p>

          <p>Izin bertannya buk, bang, dan teman-teman.</p>

          <p>Saya masih bingung apakah bisa mengkonversi switch-case menjadi if-else. kalau bisa,bagaimana caranya?</p>

          <p>Sebelumnya Terimakasih</p>

          <p>&nbsp;</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner masukData = new Scanner(System.in);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; // mengambil input<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Pilih A atau B : &nbsp;&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; char data = data.next().charAt(0);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;switch(data): &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case A&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.print(&quot;Anda sudah rajin belajar&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;break; // baris 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;B&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.print(&quot; &nbsp;Anda perlu kurangi main game&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;default<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.print(&quot; &nbsp;Pilihan anda diluar A atau B &quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break;<br />
          }&nbsp;&nbsp; &nbsp;}</code></p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>','created_at' => '2022-09-22 11:24:07','updated_at' => '2022-09-22 11:24:07'),
            array('id' => '186','materi_id' => '94','mahasiswa_id' => '70','judul' => 'Pertanyaan kelompok 11','diskusi' => '<p>Assalamualaikum buk, saya perwakilan dari kelompok 11 ingin menyampaikan pertanyaan untuk forum diskusi tugas kelompok kami, Nama anggota kelompok:<br />
          1. Yebi Depriansyah&nbsp;<br />
          2. Ridho herta<br />
          3. Mezi</p>

          <p>Berikut bebrapa pertanyaan dari kelompok kami:</p>

          <p>Soal-soal:<br />
          1.Teman teman di tempat foto copy saya lihat kalo :<br />
          A. Print diatas 20 maka akan dapat diskon 5%<br />
          B. Fotocopy diatas 30 maka akan dapat diskon 5%<br />
          Saya akan print modul sebanyak 34 lembar dan saya ingin mengetahui saya sudah dapat diskon atau belum.<br />
          Kira-kira jika terdapat data seperti diatas harus menggunakan if atau switch?<br />
          Dan susunlah kode program yang harus di tulis berdasarkan data diatas&nbsp;</p>

          <p>2.Teman teman disini saya mau menghitung IP batas umur usia seseorang&nbsp;</p>

          <p>Untuk usia 0-1 tahun itu masih disebut dengan bayi, 1-3 tahun itu di sebut batita, 3-5 tahun di sebut balita, 5-12 di sebut anak- anak, 12-17 di sebut remaja, 17-30 disebut pemuda, 30-60 di sebut dewasa, 60 tahun di sebut lansia. Saya ingin menghitung batas usia remaja saya lalu saya harus menggunakan if atau switch?</p>

          <p>Dan susunlah kode program yang harus ditulis berdasarkan data seperti diatas!</p>

          <p>&nbsp;</p>

          <p>3.Teman - teman, disini saya punya data tahun kelahiran dari 1946 sampai 2012. Nah untuk tahun kelahiran 1946 - 1964 dikenal sebagai generasi baby boomers, lalu kelahiran tahun 1965 - 1980 disebut generasi X, kemudian kelahiran tahun 1981 - 1996 itu generasi millenial, terakhir kelahiran tahun 1997 - 2012 dikenal sebagai generasi Z. Jika saya punya adik sepupu yang lahir di tahun 2009 dan kakak sepupu yang lahir di tahun 1992 masuk ke generasi mana mereka, lalu lebih efektif dan tepat menggunakan if atau switch ?</p>

          <p>Dan susunlah kode program yang harus ditulis berdasarkan data diatas!</p>

          <p>Sekian dari kelompok 11 terima kasih, wassalamu&#39;alaikum warahmatullahi&nbsp;wabararokatuh</p>','created_at' => '2022-09-22 12:10:42','updated_at' => '2022-09-22 12:10:42'),
            array('id' => '187','materi_id' => '94','mahasiswa_id' => '34','judul' => 'IF','diskusi' => '<p>Assalamualaikum buk, bang, dan teman- teman semua</p>

          <p>Izin bertannya buk, bang, dan teman-teman.</p>

          <p>Saya masih bingung dengan cara mengerjakan latihan 1.1 tingkat dasar. kalau bisa, berikan contoh nya?</p>

          <p>Sebelumnya Terimakasih</p>','created_at' => '2022-09-22 13:39:15','updated_at' => '2022-09-22 13:39:15'),
            array('id' => '188','materi_id' => '98','mahasiswa_id' => '77','judul' => 'Pertanyaan Kelompok 11 (B)','diskusi' => '<p>Assalamualaikum ibu, abang, dan teman-teman semua. Saya perwakilan dari kelompok 11 kelas B, ingin menyampaikan pertanyaan untuk forum diskusi tugas kami dengan materi percabangan If dan Switch.&nbsp;</p>

          <p>Sebelumnya perkenalkan Anggota kelompok kami :</p>

          <p>1. Akbar Agpranata</p>

          <p>2. Muhammad Ahdan Hanif</p>

          <p>3. Ferdy Fitriansyah Rowi</p>

          <p>&nbsp;</p>

          <p>Pertanyaannya sebagai berikut :</p>

          <p>(1). Kelompok kami memiliki data seperti ini:</p>

          <p>A. Mahasiswa ingin mencari buku/jurnal</p>

          <p>B. Mahasiswa ingin praktikum</p>

          <p>C. Mahasiswa ingin makan</p>

          <p>&nbsp;</p>

          <p>Untuk mahasiswa A akan diarahkan ke Perpustakaan, mahasiswa B akan diarahkan ke Laboratorium, dan mahasiswa nomor C akan diarahkan ke Kantin.&nbsp;</p>

          <p>Dari data di atas tentukan program yang digunakan percabangan IF atau Switch!</p>

          <p>Dan apakah syntax Break perlu dipakai atau tidak?</p>

          <p>&nbsp;</p>

          <p>(2). Pada ruangan perpustakaan Universitas Bengkulu terdapat komputer pencari data buku. Untuk program pencarian buku apa percabangan yang bisa kita pakai pada komputer tersebut, IF atau Switch? Jelaskan!</p>

          <p>&nbsp;</p>

          <p>Sekian dari kelompok kami, Terimakasih</p>

          <p>Wassalamu&#39;alaikum wr.wb</p>','created_at' => '2022-09-23 10:54:40','updated_at' => '2022-09-23 10:54:40'),
            array('id' => '189','materi_id' => '95','mahasiswa_id' => '107','judul' => 'Tugas Kelompok Pengganti presentasi','diskusi' => '<p>Assalamualaikum buk, saya perwakilan dari kelompok 9 B ingin menyampaikan pertanyaan untuk forum diskusi tugas kelompok kami, Nama anggota kelompok:<br />
          1. Carli Margareta<br />
          2. Rizki Ramadani D.<br />
          3. Torang Four Yones M.</p>

          <p>Berikut bebrapa pertanyaan dari kelompok kami:</p>

          <p>Soal-soal:<br />
          1.Apabila sebuah data di definisikan sebagai berikut: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <ol>
              <li>Baby boomer, kelahiran 1944 s.d 1964</li>
              <li>Generasi X, kelahiran 1965 s.d 1979</li>
              <li>Generasi Y (<em>Millenials</em>), kelahiran 1980 s.d 1994</li>
              <li>Generasi Z, kelahiran 1995 s.d 2015</li>
          </ol>

          <p>apabila esta adalah seseorang yang lahir pada tahun kelahiraan 2003..</p>

          <p>Maka apa yang sebaiknya di gunakan apabila kita ingin membuat data tersebut menjadi sebuah program? dan mengapa alasannya kita mengambil keputusan tersebut?<br />
          Susunlah alogaritma untuk kode program tersebut baik menggunakan if ataupun switch!!!<br />
          2.Apabila sebuah data &nbsp;predikat di definisikan sebagai berikut:</p>

          <ul>
              <li>3.80 dan 3.80 keatas: Summa&nbsp;<strong>Cum Laude</strong>.</li>
              <li>3.60 s/d 3.79: Magna&nbsp;<strong>Cum Laude</strong>.</li>
              <li>3.40 s/d 3.59:&nbsp;<strong>Cum Laude</strong>.</li>
              <li>3.20 s/d 3.39: High Merit.</li>
              <li>3.00 s/d 3.19: Merit.</li>
          </ul>

          <p>buatlah kodingan menggunakan if atau swicth dari data tersebut? dan tentukan yang mana paling efisien</p>

          <p>3. Program Menghitung Total Harga Barang<br />
          &bull; Jika Jumlah barang yang dibeli &lt; 100 buah, maka harga perbarang yang<br />
          dibeli adalah Rp 10.000,-<br />
          &bull; Jika jumlah barang yang dibeli lebih besar dari atau sama dengan 100 dan<br />
          kurang daari 150, maka harga perbarang adalah Rp 9.500<br />
          &bull; Jika jumlah barang yang dibeli lebih dari atau sama dengan 150, maka<br />
          harga perbarang adalah RP 9.000,-<br />
          Jika kami ingin membeli barang sebanyak 158 luran apa yang akan dihasilkan?</p>

          <p>Sekian dari kelompok kami terima kasih, wassalamu&#39;alaikum warahmatullahi wabararokatuh</p>','created_at' => '2022-09-23 11:24:51','updated_at' => '2022-09-23 11:24:51'),
            array('id' => '190','materi_id' => '95','mahasiswa_id' => '107','judul' => 'Tugas Kelompok Pengganti presentasi','diskusi' => '<p>Assalamualaikum buk, saya perwakilan dari kelompok 9 B ingin menyampaikan pertanyaan untuk forum diskusi tugas kelompok kami, Nama anggota kelompok:<br />
          1. Carli Margareta<br />
          2. Rizki Ramadani D.<br />
          3. Torang Four Yones M.</p>

          <p>Berikut bebrapa pertanyaan dari kelompok kami:</p>

          <p>Soal-soal:<br />
          1.Apabila sebuah data di definisikan sebagai berikut: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <ol>
              <li>Baby boomer, kelahiran 1944 s.d 1964</li>
              <li>Generasi X, kelahiran 1965 s.d 1979</li>
              <li>Generasi Y (<em>Millenials</em>), kelahiran 1980 s.d 1994</li>
              <li>Generasi Z, kelahiran 1995 s.d 2015</li>
          </ol>

          <p>apabila esta adalah seseorang yang lahir pada tahun kelahiraan 2003..</p>

          <p>Maka apa yang sebaiknya di gunakan apabila kita ingin membuat data tersebut menjadi sebuah program? dan mengapa alasannya kita mengambil keputusan tersebut?<br />
          Susunlah alogaritma untuk kode program tersebut baik menggunakan if ataupun switch!!!<br />
          2.Apabila sebuah data &nbsp;predikat di definisikan sebagai berikut:</p>

          <ul>
              <li>3.80 dan 3.80 keatas: Summa&nbsp;<strong>Cum Laude</strong>.</li>
              <li>3.60 s/d 3.79: Magna&nbsp;<strong>Cum Laude</strong>.</li>
              <li>3.40 s/d 3.59:&nbsp;<strong>Cum Laude</strong>.</li>
              <li>3.20 s/d 3.39: High Merit.</li>
              <li>3.00 s/d 3.19: Merit.</li>
          </ul>

          <p>buatlah kodingan menggunakan if atau swicth dari data tersebut? dan tentukan yang mana paling efisien</p>

          <p>3. Program Menghitung Total Harga Barang<br />
          &bull; Jika Jumlah barang yang dibeli &lt; 100 buah, maka harga perbarang yang<br />
          dibeli adalah Rp 10.000,-<br />
          &bull; Jika jumlah barang yang dibeli lebih besar dari atau sama dengan 100 dan<br />
          kurang daari 150, maka harga perbarang adalah Rp 9.500<br />
          &bull; Jika jumlah barang yang dibeli lebih dari atau sama dengan 150, maka<br />
          harga perbarang adalah RP 9.000,-<br />
          Jika kami ingin membeli barang sebanyak 158 luran apa yang akan dihasilkan?</p>

          <p>Sekian dari kelompok kami terima kasih, wassalamu&#39;alaikum warahmatullahi wabararokatuh</p>','created_at' => '2022-09-23 11:24:52','updated_at' => '2022-09-23 11:24:52'),
            array('id' => '191','materi_id' => '94','mahasiswa_id' => '60','judul' => 'SWITCH bersarang','diskusi' => '<p>Assalamualaikum ibuk, abang dan teman-teman perkenalkan nama saya Lola Yashinta Dewi dari prodi informatika dengan NPM G1A022009. Izin bertanya ibuk abang dan teman-teman&nbsp;</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner masukData = new Scanner(System.in);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; // mengambil input<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Pilih A atau B : &nbsp;&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; char data = masukData.next().charAt(0);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;switch(data) {&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;A&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.print(&quot;Anda sudah rajin belajar&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;B&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.print(&quot; &nbsp;Anda perlu kurangi main game&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;default:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.print(&quot; &nbsp;Pilihan anda diluar A atau B &quot;);&nbsp;<br />
          } &nbsp;&nbsp;&nbsp; &nbsp;} &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>Apa perbedaan hasil luaran ketika kode menggunakan break, ketika kode break baris 1 dihapus, dan ketika kode break baris 2 dihapus!&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Dan kegunaan baris kode dengan break dan kata kunci default!</code></p>

          <p><code>eksekusi juga jika kode break 1 di hapus dan eksekusi Jika kode break 2 di hapus</code></p>

          <p><code>makasih atas perhatianya Wassalamualaikum wr.wb🙏</code></p>

          <p>&nbsp;</p>','created_at' => '2022-09-23 12:22:46','updated_at' => '2022-09-23 12:22:46'),
            array('id' => '192','materi_id' => '94','mahasiswa_id' => '51','judul' => 'Studi Kasus Kelompok 12 kelas A','diskusi' => '<p>Assalamualaikum bu, bang, dan teman-teman semuanya</p>

          <p>Perkenalkan Saya Rengga Anggarah Saya dari kelompok 12 kelas A, disini saya akan memberikan studi kasus tentang percabangan IF dan SWITCH</p>

          <p>&nbsp;</p>

          <p>1. Jika Seorang guru membuat sebuah program untuk menentukan apakah siswanya lulus uts atau tidak lulus uts&nbsp; dengan menggunakan sebuah operasi percabangan.</p>

          <p>Misalnya, muridnya memiliki nilai UTS sebagai berikut :&nbsp;</p>

          <p>1. Rengga : 90</p>

          <p>2. Revan : 80</p>

          <p>3. Hafidz : 70</p>

          <p>Jika nilai &gt;80, maka mahasiswa dinyatakan lulus UTS jika &lt;80 maka dinyatakan tidak lulus UTS&nbsp;</p>

          <p>menurut kalian untuk menginput data tersebut menjadi sebuah kode program maka yang mana yang harus kita gunakan apakah IF atau SWITCH? Sekalian di jelaskan ya teman teman&nbsp;</p>

          <p>Wassalamu&#39;alaikum warahmatullahi wabarakatuh 🙏</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>','created_at' => '2022-09-23 12:24:17','updated_at' => '2022-09-23 12:24:17'),
            array('id' => '193','materi_id' => '96','mahasiswa_id' => '163','judul' => 'IF contoh 1','diskusi' => '<p>assalamualaikum bu, abang, dan teman teman.. selamat siang, saya citra safira irawan npm G1F022021 mohon izin untuk bertanya..</p>

          <p>pada penugasan individu terdapat 2 soal dengan 1 soal terdapat 2 contoh jadi jumlah semuanya ada 4 contoh..</p>

          <p>pada contoh 1 itu apakah angka 1000nya dibuah harus di ubah menjadi 10 atau 100? soalnya pada saat praktikum di lab, hasil screenshot contoh 1 yang saya buat berubah dari 1000 menjadi 10, namun sekarang saya lupa apakah itu wajib diubah ataukah tidak.. maaf apabila ada kesalahan kata yang saya tuliskan, mohon bantuan dan jawabannya bu, abang, dan teman teman, terimakasih banyak.....</p>','created_at' => '2022-09-23 12:38:52','updated_at' => '2022-09-23 12:38:52'),
            array('id' => '194','materi_id' => '98','mahasiswa_id' => '42','judul' => 'Studi Kasus Kelompok 10 kelas A1','diskusi' => '<p>Assalamualaikum warahmatullahi wabarakatuh</p>

          <p>Izin sebelumnya bu, bang, dan teman2 semua.</p>

          <p>&nbsp;Pada hari libur saya pergi ke supermarket ingin membeli buah . Kebetulan di supermarket tersebut ada promo untuk pembelian semua jenis buah, jika saya membeli buah dengan harga diatas 100.000 maka saya akan mendapatkan potongan harga sebesar 5.000, apabila saya membeli buah dengan harga 200.000 saya akan mendapatkan potongan harga sebesar 10.000, dan apabila saya membeli buah dengan harga 300.000 saya akan mendapatkan potongan harga sebesar 20.000.</p>

          <p>Jika saya ingin membuat programnya, apakah saya harus menggunakan percabangan IF bersarang? Atau boleh menggunakan percabangan IF yang lain?</p>

          <p>Terima kasih</p>

          <p>Wasalamualaikum warahmatullahi wabarakatuh</p>

          <p>&nbsp;</p>','created_at' => '2022-09-23 13:35:12','updated_at' => '2022-09-23 13:35:12'),
            array('id' => '195','materi_id' => '94','mahasiswa_id' => '69','judul' => 'STUDI KASUS KEL 12 KELAS A','diskusi' => '<p>Assalamualaikum bu, bang, dan teman teman</p>

          <p>Perkenalkan Saya Revan Averuz Mufid Saya dari kelompok 12 kelas A, disini saya akan memberikan studi kasus tentang percabangan IF dan SWITCH</p>

          <p>&nbsp;</p>

          <p>1. Jika Seorang guru membuat sebuah program untuk menentukan apakah siswanya mendapatkan nilai A atau tidak mendapatkan nilai A &nbsp;dengan menggunakan sebuah operasi percabangan.</p>

          <p>Misalnya, muridnya memiliki nilai ulangan sebagai berikut :&nbsp;</p>

          <p>1. A : 80</p>

          <p>2. B : 70</p>

          <p>3. C : 70</p>

          <p>4. D : 60</p>

          <p>5. E : 50</p>

          <p>Jika nilai &gt;80, maka Siswa mendapatkan predikat A jika &lt;80 maka tidak mendapatkan predikat A</p>

          <p>bagaimana penyusunan kode program agar tidak terjadi error saat running</p>

          <p><br />
          Wassalamu&#39;alaikum warahmatullahi wabarakatuh 🙏</p>','created_at' => '2022-09-23 13:37:49','updated_at' => '2022-09-23 13:37:49'),
            array('id' => '196','materi_id' => '94','mahasiswa_id' => '43','judul' => 'STUDI KASUS KEL 12 KELAS A','diskusi' => '<p>Assalamualaikum bu, bang dan teman teman</p>

          <p>Perkenalkan saya M.Hafidz Ashshidiqi dari Kelompok 12 Kelas A, disini saya memberikan studi kasus tentang percabangan IF dan SWITCH</p>

          <p>Jika seorang guru membuat sebuah program untuk menentukan apakah muridnya lulus KKM atau tidak lulus KKM dengan menggunakan sebuah operasi percabangan.</p>

          <p>Misalnya seorang murid memiliki sebuah nilai ujian mata pelajarannya&nbsp;<br />
          Fisika : 75<br />
          Kimia : 80<br />
          Biologi : 80<br />
          Matematika : 95<br />
          Bahasa inggris : 85</p>

          <p>jika nilai &gt; 80, nilai murid dinyatakan lulus KKM dan jika &lt; 80 maka nilai murid dinyatakan tidak lulus KKM.</p>

          <p>Pada kasus tersebut untuk menginput data tersebut menjadi sebuah kode pemograman maka menurut kalian sebaiknya menggunakan IF atau SWITCH? dan hasil output kode program?</p>

          <p>Wassalamualaikum warahmatullahi wabarakatuh</p>','created_at' => '2022-09-23 13:57:42','updated_at' => '2022-09-23 13:57:42'),
            array('id' => '197','materi_id' => '98','mahasiswa_id' => '37','judul' => '1.4','diskusi' => '<p>Izin bertanya Bu,Bang dan kawan kawan saya kurang mengerti cara pembuatan flowchart itu juga kurung yg di gunakan tidak sesuai apakah jawaban nya akan salah dan itu berpengaruh atau tidak terimakasih&nbsp;</p>','created_at' => '2022-09-23 14:08:26','updated_at' => '2022-09-23 14:08:26'),
            array('id' => '198','materi_id' => '94','mahasiswa_id' => '64','judul' => 'Studi kasus Kelompok 10 kelas A1','diskusi' => '<p>Assalamualaikum,izin bu,bang,dan teman teman semua saya Muhammad Kevin Rinalid mempunyai pertanyaan dari hasil pembahsan materi if dan switch kelompok kami</p>

          <p>yaitu :&nbsp;</p>

          <ol>
              <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span dir="ltr" lang="EN-US" style="font-size:14.0pt">Saya &nbsp;pergi ke showroom untuk membeli mobil dan dana yang saya punya yaitu 620 juta. Untuk jenis mobil dishowroomnya yaitu mobil Sedan dengan harga 701 &ndash; 900 juta,mobil SUV dengan harga 501 &ndash; 700 juta,mobil MPV dengan harga 200 &ndash; 500 juta. Jadi percabangan apakah yang bisa saya gunakan apabila saya ingin membuat sebuah program dari cerita &nbsp;tersebut dan jika saya ingin membeli mobil dengan seluruh dana yang saya miliki mobil apa yang akan saya dapatkan ?</span></span></span></li>
          </ol>','created_at' => '2022-09-23 14:34:14','updated_at' => '2022-09-23 14:34:14'),
            array('id' => '199','materi_id' => '97','mahasiswa_id' => '157','judul' => 'if else','diskusi' => '<p>assalamualaikum nama saya Muhammad.Rifky.Ramadani NPM:G1F022039 izin bertanya</p>

          <p>apakah ada import selain :</p>

          <p>import java.util.Scanner&nbsp;</p>

          <p>apakah library ada selain Scanner?</p>

          <p>apa contohnya dan apa fungsi nyaaa?</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>','created_at' => '2022-09-23 18:31:00','updated_at' => '2022-09-23 18:31:00'),
            array('id' => '200','materi_id' => '95','mahasiswa_id' => '74','judul' => 'SOAL PERTANYAAN PRESENTASI','diskusi' => '<p>Selamat sore ibu, abang dan teman teman sekalian</p>

          <p>Kami dari kelompok 10 yang beranggotakan</p>

          <p>1. Wahyu Ozorah Manurung</p>

          <p>2. Revo Pratama&nbsp;</p>

          <p>3. Kevin taqwa Abdiansyah&nbsp;</p>

          <p>Disini kami memberikan pertanyaan sebagai tugas presentasi kami yang mana sebagai berikut</p>

          <p>Pertanyaan&nbsp;</p>

          <p>1. Kami adalah mahasiswa baru Universitas Bengkulu yang sedang dalam fase adaptasi terutama mengenai keuangan sehari hari. Saati ini kami ingin membeli peralatan sehari hari di salah satu toko yang sama yang mana di toko ini terdapat diskon sebagai berikut&nbsp;</p>

          <p>1. Jika belanja &gt; 15 barang akan mendapatkan diskon 10% dengan total harga ke 15 barang &gt; 100.000&nbsp;</p>

          <p>2. Jika belanja di atas &gt;25 barang maka akan mendapatkan diskon 35% dengan total harga ke 25 barang &gt; 250.000&nbsp;</p>

          <p>&nbsp;</p>

          <p>Jika kmi bertiga membawa uang sebesar 150.000, 250.000, 50.000</p>

          <p>&nbsp;</p>

          <p>&nbsp;maka diskon yang mana yang akan kami dapatkan dan jelaskan permasalahan diatas dapat diselesaikan dengan if atau switch?</p>

          <p>&nbsp;</p>

          <p>2. Kelompok kami memiliki sekumpulan data di bawah ini</p>

          <p>1. Ikan</p>

          <p>2. Ubur-ubur&nbsp;</p>

          <p>3. Ayam</p>

          <p>4. Sapi</p>

          <p>5. Katak</p>

          <p>Dari data hewan tersebut, boleean apa yang bisa dibuat?, dan tetukan apakah data tersebut akan menjadi If atau Switch?</p>

          <p>3. Data tinggi badan anak kelas 5 pada salah satu Sekolah Dasar di Kota Bengkulu seperti berikut :</p>

          <p>1. &gt;=145 akan termasuk ke dalam kategori tinggi</p>

          <p>2. &gt;=138 &lt;=144 akan termasuk ke dalam kategori ideal</p>

          <p>3. &gt;=132 &lt;=137 akan termasuk ke dalam kategori pendek</p>

          <p>4. &lt;=131 akan termasuk ke dalam kategori stunting</p>

          <p>Sarankanlah kode tersebut ke dalam IF atau Switch, lalu buatlah kode program sederhananya!</p>

          <p>&nbsp;</p>

          <p>Sekian dari kelompok kami terimakasih</p>','created_at' => '2022-09-23 19:50:45','updated_at' => '2022-09-23 19:50:45'),
            array('id' => '201','materi_id' => '98','mahasiswa_id' => '50','judul' => 'Study Kasus kelompok 10 kelas A','diskusi' => '<p>Assalamualaikum bu, bang, dan teman teman</p>

          <p>Saya Fiter Ramadansyah Saya dari kelompok 10 kelas A, disini saya akan memberikan studi kasus tentang percabangan IF dan SWITCH</p>

          <p>&nbsp;</p>

          <p>1. Jika seorang marko ingin mendata nilai anak anak murid nya dengan data sebgai berikut&nbsp;</p>

          <p>Misalnya, muridnya memiliki nilai ulangan sebagai berikut :&nbsp;</p>

          <p>1. Rontok : 80</p>

          <p>2. Revan : 70</p>

          <p>3. Oki : 70</p>

          <p>4. APIP: 60</p>

          <p>5. WEKO : 50</p>

          <p>6, Hanip : 40</p>

          <p>Jika nilai &gt;80, maka Siswa marko mendapatkan predikat A jika &lt;80 maka tidak mendapatkan predikat A.&nbsp;</p>

          <p>menurut teman teman data diatas cocok menggunakan IF atauu switch</p>

          <p>bagaimana penyusunan kode program agar tidak terjadi error saat runni</p>

          <p>terimakasih semangat teman teman</p>','created_at' => '2022-09-23 21:29:47','updated_at' => '2022-09-23 21:29:47'),
            array('id' => '202','materi_id' => '95','mahasiswa_id' => '66','judul' => 'Program Error','diskusi' => '<p>Assalamu&#39;alaikum, Bu, Mbak, Bang, dan teman-teman sekalian. Selamat malam. Saya izin bertanya. Kenapa ya kode program yang saya buat error saat dirunning?? Mohon bantuannya semua</p>

          <p>package Latihan;</p>

          <p>import java.util.Scanner;</p>

          <p>public class IfBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner varT = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Tugas Anda : &quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int nilaiT = varT.nextByte();</p>

          <p>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner varQ = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Quiz Anda : &quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int nilaiQ = varQ.nextByte();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner varU = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.print(&quot;Masukkan Angka UTS Anda : &quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int nilaiU = varU.nextByte();</p>

          <p>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (nilaiU &gt;= 80 &amp;&amp; nilaiT &gt;= 80 &amp;&amp; nilaiQ &gt;= 80)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// Bila kondisi If semuanya true<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Anda mendapatkan nilai A&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// Bila kondisi If false<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;else {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Anda TIDAK mendapatkan nilai A&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</p>','created_at' => '2022-09-23 22:20:31','updated_at' => '2022-09-23 22:20:31'),
            array('id' => '203','materi_id' => '93','mahasiswa_id' => '160','judul' => 'if dan switch','diskusi' => '<p>Assalamualaikum Bu, Abang, dan teman-teman.</p>

          <p>Sebelum nya perkenalkan saya Cindy Andira dengan NPM G1F022059.</p>

          <p>Izinkan saya bertanya kepada kalian</p>

          <p>Apa perbedaan maupun kegunaan dari IF, ELSE IF, dan ELSE?&nbsp;</p>

          <p>Mungkin itu saya yang perlu saya tanyakan, semoga teman-teman bisa membantu saya</p>

          <p>Wassalamu&#39;alaikum&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>','created_at' => '2022-09-23 23:10:35','updated_at' => '2022-09-23 23:10:35'),
            array('id' => '204','materi_id' => '98','mahasiswa_id' => '50','judul' => 'Study kasus kelompok 10 kelas A','diskusi' => '<ol>
              <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span dir="ltr" lang="EN-US" style="font-size:14.0pt">Saya ingin membuat sebuah program menggunakan percabangan switch dengan 3 case yaitu case A,case B,case C. pada program ini saya ingin menampilkan nilai dari case B tetapi saat saya jalan program tersebut luarannya menampilkan semua nilai case.Bagaimana cara mengatasi permasalahan tersebut ?</span></span></span></li>
          </ol>','created_at' => '2022-09-23 23:41:53','updated_at' => '2022-09-23 23:41:53'),
            array('id' => '205','materi_id' => '96','mahasiswa_id' => '145','judul' => 'IF dan Switch','diskusi' => '<p>Assalamualaikum semua</p>

          <p>Saya Arief Haris Prasetyo Rizaldi</p>

          <p>Izin bertanya</p>

          <p>Mana yang unggul, if atau switch, atau mungkin if dan switch memiliki perbedaan yang signifikan</p>

          <p>Sekian dari saya, Terima kasih 🙏</p>','created_at' => '2022-09-24 20:38:30','updated_at' => '2022-09-24 20:38:30'),
            array('id' => '206','materi_id' => '97','mahasiswa_id' => '158','judul' => 'Percabangan If dan Switch','diskusi' => '<p>Selamat Malam Bu, Bang, Teman teman.<br />
          Saya F. Yosua P. Habeahan Izin mau bertanya, apakah boleh pada tipe if percabangan, pada else if boleh ditambahkan switch?<br />
          <br />
          Kalau boleh contohnya bagaimana ya?<br />
          Terima Kasih</p>','created_at' => '2022-09-24 20:39:21','updated_at' => '2022-09-24 20:39:21'),
            array('id' => '207','materi_id' => '95','mahasiswa_id' => '30','judul' => 'Luaran eror','diskusi' => '<p>teman teman izin tanya kenapa pas saya buat codingan di class baru luaran yang dihasilkan adalah dari class lain. codingan tersebut sudah tidak ada pesan kode kesalahan. mohon bantuannya kawan:)</p>','created_at' => '2022-09-24 21:16:21','updated_at' => '2022-09-24 21:16:21'),
            array('id' => '208','materi_id' => '93','mahasiswa_id' => '133','judul' => 'Flowchart','diskusi' => '<p>Assalamualaikum wr.wb&nbsp;</p>

          <p>Sebelumnya perkenalkan saya IDZNII SHOLEKHAH NPM G1F022001&nbsp; izin bertanya ibu, abang , dan teman -teman.&nbsp;&nbsp;</p>

          <p>IF dan SWITCH ada flowchartnya , apakah ada perbedaan flowchart IF dengan SWITCH? Dan berikan&nbsp; contoh beserta penjelasanya, karena saya kurang paham tentang materi ini.&nbsp;</p>

          <p>Sekian dari saya mohon maaf jika ada kesalahan dalam penulisanya,&nbsp; wassalamu&#39;alaikum wr.wb</p>

          <p>&nbsp;</p>','created_at' => '2022-09-25 00:52:35','updated_at' => '2022-09-25 00:52:35'),
            array('id' => '209','materi_id' => '95','mahasiswa_id' => '98','judul' => 'Percabangan: IF dan SWITCH','diskusi' => '<p>Assalamualaikum wr.wb buk dan teman-teman, saya perwakilan kelompok 8 ingin menyampaikan pertanyaan dari kelompok kami untuk forum diskusi.</p>

          <p>Kelompok 8 yang beranggotakan:</p>

          <p>1. Neli Agustin</p>

          <p>2. Apri Agriansyah</p>

          <p>3. Anugrah Herianto&nbsp;</p>

          <p>Berikut ini adalah pertanyaan dari presentasi Kelompok kami, yaitu:</p>

          <p>Pertanyaan</p>

          <p>1). Pada sebuah sekolah menengah atas, seorang guru olahraga akan melakukan sebuah penilaian test fisik anak laki-laki di mana dalam ketentuan:</p>

          <p>1. Tinggi lompatan &gt;=60 cm&nbsp;</p>

          <p>2. Lompat jauh &gt; = 150 cm&nbsp;</p>

          <p>3. Push up &gt;= 15 kali</p>

          <p>Jika memenuhi 3 test di atas akan lulus ujian, jika hanya 2 memenuhi mendapat nilai B, jika hanya 1 yang memenuhi mendapat nilai C dan jika tidak ada yang memenuhi maka anak tidak lulus ujian test fisik.</p>

          <p>Tentukan susunan program tersebut, apakah menggunakan if bercabang, if bersarang atau switch</p>

          <p>2). Di suatau universitas terdapat pengelompokan ukt pada setiap golongan, ukt 1.200.000 &ndash; 2.400.000 adalah golongan 1, ukt 2.400.000 &ndash; 3.600.000 adalah golongan 2, ukt 3.600.000 &ndash; 4.500.00 adalah golongan 3, ukt 4.500.000 &ndash; 5.500.000 adalah golongan 4.</p>

          <p>Jika pada saat pembayaran ukt si asep membayar ukt sebesar 3.830.000, maka asep termasuk golongan ukt yang mana?</p>

          <p>Bagaimanakah susunan kode program tersebut, apa bentuk if atau switch yang akan di gunakan?</p>

          <p>3). Jika sutau sekolah memiliki jadwal seragam sebagai berikut. Hari senin dan selasa memakai seragam baju putih abu, rabu dan kamis memakai seragam baju batik, jumat memakai seragam bajuolahraga, sabtu memakai seragam baju kokoh.</p>

          <p>Pada suatu hari asep ingin berangkat ke sekolah pada hari kamis, seragam apa yang harus dia pakai? Susunlah kode program berdasrakan data di atas, apakah menggunakan percabangan if atau switch?.</p>','created_at' => '2022-09-25 10:59:58','updated_at' => '2022-09-25 10:59:58'),
            array('id' => '210','materi_id' => '96','mahasiswa_id' => '162','judul' => 'tentang Switch','diskusi' => '<p>Assalamualaikum , iizin bertanya. Sebelumnya perkenalkan saya Dewi Margiani NPM G1F022037.</p>

          <p>Seperti yang kita tahu pada switch terdapat fungsi break, nah fungsi dari break sendiri itu apa??</p>

          <p>mohon diberi penjelasannya buk, bang, dan teman teman sekalian. Wassalamualaikum.</p>

          <p>&nbsp;</p>','created_at' => '2022-09-25 11:18:49','updated_at' => '2022-09-25 11:18:49'),
            array('id' => '211','materi_id' => '98','mahasiswa_id' => '35','judul' => 'latihan2_2','diskusi' => '<p>assalammualikum izin bertanya bu,bang,mbak,dan teman teman semuanya,izin bertanya jadi jika break nya di case B apakah bisa case A tidak ikut berjalan atau dikasih juga break pada case A?&nbsp;</p>

          <p>package praktikumIfSwtich;<br />
          &nbsp;&nbsp; &nbsp;import java.util.Scanner;<br />
          public class latihan2_2 {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {// menggunakan string paada method utama<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner data1 = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;// mengambil input<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Pilih A atau B : &nbsp;&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;char data = data1.next().charAt(0);&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;switch(data) {// menggunakan switch pada method data<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case &#39;A&#39; :<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Anda sudah rajin belajar&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case &#39;B&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot; &nbsp;Anda perlu kurangi main game&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;default :<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot; &nbsp;Pilihan anda diluar A atau B &quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;&nbsp;</p>','created_at' => '2022-09-25 15:30:07','updated_at' => '2022-09-25 15:30:07'),
            array('id' => '212','materi_id' => '96','mahasiswa_id' => '131','judul' => 'SWITCH','diskusi' => '<p>Assalamualaikum wr.wb&nbsp;&nbsp;</p>

          <p>izin ibu, abang abang, dan teman teman, perkenalkan :</p>

          <p>nama : M Hidayat Pahlevi&nbsp;</p>

          <p>NPM : G1F022031&nbsp;</p>

          <p>Seperti yang kita tau,&nbsp;Kondisi SWITCH CASE adalah percabangan kode program dimana kita membandingkan isi sebuah variabel dengan beberapa nilai. saya ingin bertanya, berapa jumlah batasan CASE yang ada pada switch?</p>

          <p>terimakasih.</p>','created_at' => '2022-09-25 20:38:37','updated_at' => '2022-09-25 20:38:37'),
            array('id' => '213','materi_id' => '102','mahasiswa_id' => '121','judul' => 'masih belum mendapatkan tingkatan','diskusi' => '<p>assalamualaikum ibu, abang dan teman-teman izin bertanya, saya sudah mengisi forum diskusi dan sudah mengerjakan post tes sebelum jam 10 malam tadi, tetapi sampai sekarang tingkatan saya (materi selanjutnya) belum keluar masih tertulis &ldquo;materi berikutnya belum dapat ditampilkan&rdquo; mohon bantuannya ibu, abang. terimakasih sebelumnya🙏🏻</p>','created_at' => '2022-09-26 09:02:55','updated_at' => '2022-09-26 09:02:55'),
            array('id' => '214','materi_id' => '103','mahasiswa_id' => '157','judul' => 'TUGAS PRESENTASI KELOMPOK 10','diskusi' => '<p><strong>STUDI KASUS:</strong></p>

          <p>Assalamulaikum wr wb Kami dari kelompok 10 ingin membuka forum diskusi studi kasus&nbsp;</p>

          <p>&nbsp;</p>','created_at' => '2022-09-27 07:55:23','updated_at' => '2022-09-27 07:55:23'),
            array('id' => '215','materi_id' => '103','mahasiswa_id' => '157','judul' => 'TUGAS PRESENTASI KELOMPOK 10','diskusi' => '<p><strong>STUDI KASUS:</strong></p>

          <p>Assalamulaikum wr wb Kami dari kelompok 10 ingin membuka forum diskusi studi kasus untuk menghitung jumlah biaya hidup selama di kosan<br />
          Nama Kelompok:<br />
          1.Muhammad.Rifky.Ramadani (G1F022039)<br />
          2.Muhammad.Athaariq (G1F022023)<br />
          3.Farhan Nero Pratama (G1F022063)</p>

          <p>Dik biaya hidup di kosan perbulan&nbsp;<br />
          bulan 1. 1.000.000<br />
          bulan 2. 1.200.000<br />
          bulan 3. 1.000.000<br />
          bulan 4. 1.980.000</p>

          <p>susunlah kode program for atau while berdasarkan data di atas</p>

          <p>terima kasih wassalamualaikum wr wb</p>','created_at' => '2022-09-27 08:00:54','updated_at' => '2022-09-27 08:00:54'),
            array('id' => '216','materi_id' => '96','mahasiswa_id' => '135','judul' => 'Membuat Program','diskusi' => '<p>Assalamualaikum Warahmatullahi Wabarakatuh ...<br />
          Kami dari kelompok 9<br />
          1.Thesa Febriani<br />
          2.Selma Mulkya Nisa<br />
          3.Cindy Andira</p>

          <p>Disini kami mempunyai sebuah kasus&nbsp;<br />
          Misalnya ada sebuah tokoh perbelanjaan akan menanyakan kartu member saat membayar di kasir, biasanya ditanya kartu member untuk mendapatkan diskon dan sebagainya.</p>

          <p>Apakah teman teman bisa membantu kami untuk membuat programnya?<br />
          Dengan syarat/luaran=</p>

          <p><strong>Apakah anda punya kartu member?<br />
          -ya<br />
          &nbsp;jika ya, untuk belanjaan &gt;200000 akan mendapatkan diskon 20000<br />
          jika ya, untuk belanjaan &gt;150000 akan mendapatkan diskon 15000<br />
          -Tidak&nbsp;<br />
          jika tidak anda tidak mendaptkan diskon<br />
          hitung total yang harus dibayar jika mendpatkan diskon.</strong></p>

          <p><em><strong>note: gunakan scanner untuk mengambil input</strong></em></p>

          <p><em><strong>Baik apakah disini ada teman teman yang bisa membuat programnya?<br />
          sekian terimakasih</strong></em></p>

          <p><br />
          &nbsp;</p>','created_at' => '2022-09-27 13:00:13','updated_at' => '2022-09-27 13:00:13'),
            array('id' => '217','materi_id' => '96','mahasiswa_id' => '162','judul' => 'If dan Switch Diskusi','diskusi' => '<p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">Assalamualaikum Warahmatullahi Wabarakatuh...</span></span></p>

          <p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">Kami dari kelompok 8 ingin membuat diskusi studi kasus</span></span></p>

          <p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">anggota kelompok :</span></span></p>

          <p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">- Dewi Margiani G1F02237</span></span></p>

          <p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">- Novia Al Qodri G1F022015</span></span></p>

          <p>&nbsp;</p>

          <p style="margin-left:48px"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="background-color:white"><span style="color:#424242">Kami memiliki studi kasus mengenai tata cara penerimaan mahasiswa baru disebuah universitas.</span></span></span></span></p>

          <p style="margin-left:48px"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="background-color:white"><span style="color:#424242">Seorang mahasiswa akan diterima secara langsung (Jalur tanpa tes) di sebuah program studi di sebuah perguruan tinggi, dengan syarat nilai Fisika, Matematika, Bahasa Inggris pada Ujian Akhir Nasional bernilai minimal 8. Dengan demikian,</span></span></span></span></p>

          <ol>
              <li style="list-style-type:none">
              <ol style="list-style-type:lower-alpha">
                  <li><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="background-color:white"><span style="color:#424242">Jika Naura memiliki nilai Fisika = 8,2, Matematika = 8, dan Bahasa Inggris = 9, ia akan diterima secara langsung.</span></span></span></span></li>
                  <li><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="background-color:white"><span style="color:#424242">Jika Nando memiliki nilai Fisika = 9,2, Matematika = 7,9, dan Bahasa Inggris = 9,5, ia tidak akan diterima secara langsung.</span></span></span></span></li>
              </ol>
              </li>
          </ol>

          <p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="background-color:white"><span style="color:#424242">Tolong berikan rekomendasi studi kasus diatas menggunakan if atau switch dan tolong buatkan kode program dan penjelasan kode program tersebut.</span></span></span></span></p>

          <p>Mungkin itu saja teman teman sekalian. Wassalamualaikum Warahmatullahi Wabarakatuh..</p>','created_at' => '2022-09-27 17:25:46','updated_at' => '2022-09-27 17:25:46'),
            array('id' => '218','materi_id' => '103','mahasiswa_id' => '158','judul' => 'Tugas Kelompok 12 Studi Kasus','diskusi' => '<p>Selamat siang bagi kita semua, pada kali ini kami dari klompok 12 yang beranggotakan<br />
          - F. Yosua P. Habeahan (G1F022025)<br />
          - Chindy Feby Amara (G1F022045)<br />
          - Idznii Solekha (G1F022001)<br />
          <br />
          Disini kami ingin membuat Studi Kasus dari materi perulangan While dan Do While.<br />
          While<br />
          =<br />
          int i = 6;<br />
          while (i &lt; 5) {<br />
          System.out.println (&quot;Belajar Java Itu Mudah&quot;);<br />
          i++;<br />
          }<br />
          Pada contoh diatas, blok pengulangan while tidak akan dieksekusi. Hal ini disebabkan?<br />
          <br />
          <strong>Source Code Do-While:</strong><br />
          int i = 6;<br />
          do {<br />
          System.out.println (&quot;Belajar Java itu Mudah&quot;);<br />
          i++;<br />
          } while (i &lt; 5);<br />
          <br />
          Mengapa Do-While ini menjalankan program walaupun kondisi loop salah?<br />
          Coba simpulkan apa perbedaan while dan do-while.<br />
          <br />
          Sekian Terima Kasih</p>','created_at' => '2022-09-28 12:35:26','updated_at' => '2022-09-28 12:35:26'),
            array('id' => '219','materi_id' => '104','mahasiswa_id' => '51','judul' => 'kelas lanjut','diskusi' => '<p>assalammualaikum wr. wb, bu, bang dan teman teman semuanya&nbsp;<br />
          disini saya mau bertanya untuk latihan&nbsp;2.3. Bila diketahui kendaraan bermotor roda dua yang memiliki kapasitas dibawah 250 CC bisa menggunakan Pertalite.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Sedangkan untuk kendaraan beroda dua mulai dari 250 CC ke atas menggunakan Pertamax.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun kode untuk menampilkan perhitungan setiap liter (Pertalite atau Pertamax) yang dibeli pengguna sesuai kategori kapasitas CC kendaraan dan jumlah liter yang dimasukkan Pengguna!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;(Catatan: Gunakan IF dan While)</p>

          <p>&nbsp;</p>

          <p>kan ada catatn gunakan if dan while itu gunakan salah satunya atau keduanya di gunakan ?</p>

          <p>wassalammualaikum wr wb&nbsp;</p>','created_at' => '2022-09-28 20:20:12','updated_at' => '2022-09-28 20:20:12'),
            array('id' => '220','materi_id' => '99','mahasiswa_id' => '156','judul' => 'Tugas Kelompok 11 Studi Kasus','diskusi' => '<p>Tugas Kelompok 11<br />
          anggota :<br />
          Diamond Panca Lady (G1F022027)<br />
          Dwi Saputra (G1F022069)<br />
          M. Rafly Alfarizi (G1F022067)<br />
          <br />
          Assalamu&#39;alaikum wr.wb.<br />
          Kami dari kelompok 11 mempunyai kasus yaitu<br />
          Apabila teman - teman di berikan soal dengan hasil luaran seperti di bawah ini :<br />
          * * * *<br />
          *&nbsp; &nbsp; &nbsp; &nbsp;*<br />
          *&nbsp; &nbsp; &nbsp; &nbsp;*<br />
          * * * *<br />
          <br />
          Untuk menyusun kode pemrograman dengan hasil luaran di atas, metode apa yang teman-teman akan gunakan, apakah menggunakan for atau while ?<br />
          Berikan alasan teman - teman menggunakan metode tersebut dan susun lah programnya.<br />
          Sekian dan terimakasih<br />
          Wassalamu&#39;alaikum wr.wb.<!--/data/user/0/com.samsung.android.app.notes/files/share/clipdata_220929_193647_115.sdoc--></p>','created_at' => '2022-09-29 19:42:19','updated_at' => '2022-09-29 19:42:19'),
            array('id' => '221','materi_id' => '104','mahasiswa_id' => '95','judul' => 'STUDI KASUS KELOMPOK 13','diskusi' => '<p>Assalamu&#39;alaikum wr. wb<br />
          selamat malam bu bang dan kawan-kawan, pada kesempatan ini kami ingin mengirimkan studi kasus sebagai pengganti presentasi.</p>

          <p>Kami dari kelompok 13:<br />
          1. Pandu Rizki Mulyanto (G1A022076)<br />
          2. M Satria Halim (G1A022080)<br />
          3. Amirah Putri Nabilah (G1A022090)</p>

          <p>soal:</p>

          <p>Di sebuah&nbsp; warung makanan sehat&nbsp; ada sebuah stand yang menyediakan makanan untuk mecukupi kebutuhan makanan&nbsp; harian, disana&nbsp;&nbsp; terdapat paket&nbsp; porsi makanan&nbsp; yaitu ada hightcalori dan lowcalori<br />
          hightcalori Rp25.000/ porsi dan&nbsp; lowcalori Rp 20.000/porsi. Untuk menentukan orang yang mengonsumsinya berdasarkan berat badan&nbsp; yang dimiliki orang, berat badan di atas 70 kg mengonsumsi lowcalori dibawahnya mengonsumsi makanan hightcalori</p>

          <p>Bagaimana susunan kode program untuk menentukan makanan yang dipilih untuk diet, dan makanan manakah yang cocok untuk orang dengan berat badan pengguna. Jika orang tersebut makan 3 kali sehari berapakah biaya yang harus disediakan orang tersebut dalam 3 hari? Tentukan bentuk Perulangan For Atau While Yang akan digunakan!</p>

          <p>terimakasih&nbsp; semangat kawan kawan</p>','created_at' => '2022-09-29 22:12:24','updated_at' => '2022-09-29 22:12:24'),
            array('id' => '222','materi_id' => '104','mahasiswa_id' => '68','judul' => 'For and While','diskusi' => '<p>Assalamualaikum wr.wb buk dan teman-teman, saya perwakilan kelompok 14 ingin menyampaikan pertanyaan dari kelompok kami untuk forum diskusi.</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>Kelompok 14 yang beranggotakan:</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>1. Rino Alfaridzi Hutomo_G1A022085</p>

          <p>&nbsp;</p>

          <p>2. Saniyyah Zhafirah_G1A022081</p>

          <p>&nbsp;</p>

          <p>3. Aisyah Amelia Zarah Juaita_G1A022075</p>

          <p>Berikut ini adalah pertanyaan dari presentasi Kelompok kami, yaitu:</p>

          <p>&nbsp;</p>

          <p>Pertanyaan:</p>

          <p>1). public static void main(String[] args) {</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; for (int y = 0; y &lt;= 15; y++) {&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (y % 2 == 1) { //kondisi 1&nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else if (y == 6) { //kondisi 2&nbsp; &nbsp;&nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;continue;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(y + &quot; &quot;);</p>

          <p>&nbsp; &nbsp; } } }</p>

          <p>&nbsp;</p>

          <p>- pada program diatas program tersebut menghasilkan luaran 1,3,5.</p>

          <p>Ubah data ini agar menjadi luaran 1.0 ,3.0 ,5.0</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>2). public static void main(String[] args) {</p>

          <p>&nbsp; &nbsp; &nbsp;int i=0;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(i&lt;=15){</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(i % 5 == 0)</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(i);</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;i++;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(i==16){&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;&nbsp; &nbsp; &nbsp; &nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}}}</p>

          <p>}</p>

          <p>&nbsp;</p>

          <p>public static void main(String[] args) {</p>

          <p>&nbsp; &nbsp; &nbsp;int i=0;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; while(i&lt;=15){</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(i % 5 == 0)</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(i);</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;i++;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(i==16){&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;&nbsp; &nbsp; &nbsp; &nbsp;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}}}</p>

          <p>}</p>

          <p>&nbsp;</p>

          <p>&nbsp;Pada kedua program di atas terdapat masing - masing menggunakan tipe data &quot;FOR&quot; dan &quot;WHILE&quot;.</p>

          <p>Carilah salah satu yang benar apakah yang benar itu tipe data &quot;For&quot; atau &quot;While&quot;??</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>','created_at' => '2022-09-29 22:20:17','updated_at' => '2022-09-29 22:20:17'),
            array('id' => '223','materi_id' => '104','mahasiswa_id' => '95','judul' => 'STUDI KASUS KELOMPOK 13 B','diskusi' => '<p>Assalamu&#39;alaikum wr. wb<br />
          selamat malam bu bang dan kawan-kawan pada kesempatan ini kami ingin mengirimkan studi kasus sebagai pengganti dari presentasi.</p>

          <p>Kami dari kelompok 13 B<br />
          1. Pandu Rizki Mulyanto (G1A022076)<br />
          2. M Satria Halim (G1A022080)<br />
          3. Amirah Putri Nabilah (G1A022090)</p>

          <p>soal 1</p>

          <p>Di sebuah&nbsp; warung makanan sehat&nbsp; ada sebuah stand yang menyediakan makanan untuk mecukupi kebutuhan makanan&nbsp; harian, disana&nbsp;&nbsp; terdapat paket&nbsp; porsi makanan&nbsp; yaitu ada hightcalori dan lowcalori<br />
          hightcalori Rp25.000/ porsi dan&nbsp; lowcalori Rp 20.000/porsi. Untuk menentukan orang yang mengonsumsinya berdasarkan berat badan&nbsp; yang dimiliki orang, berat badan di atas 70 kg mengonsumsi lowcalori dibawahnya mengonsumsi makanan hightcalori</p>

          <p>Bagaimana susunan kode program untuk menentukan makanan yang dipilih untuk diet, dan makanan manakah yang cocok untuk orang dengan berat badan pengguna. Jika orang tersebut makan 3 kali sehari berapakah biaya yang harus disediakan orang tersebut dalam 3 hari? Tentukan bentuk Perulangan For Atau While Yang akan digunakan!</p>

          <p>soal 2<br />
          Disuatu pertamina terdapat pengelompokkan bahan bakar yaitu ada pertalite dan pertamax,&nbsp; harga Pertalite Rp. 10.000/Liter dan Pertamax Rp. 16.000/Liter. Untuk menentukan kendaraan roda dua memakai jenis bahan bakar apa ditentukan dengan CC yang dimiliki, CC diatas 250 memakai bahan bakar pertamax dan dibawahnya memakai pertalite.</p>

          <p>Bagaimana susunan kode program untuk menentukan kendaraan yang dimiliki memakai jenis bahan bakar apa dan jika bahan bakar diisi sebanyak 7 Liter berapa biaya yang akan dikeluarkan?. Tentukan bentuk Perulangan For Atau While Yang akan digunakan!</p>

          <p>terimakasih semangat kawan kawan</p>','created_at' => '2022-09-29 22:31:08','updated_at' => '2022-09-29 22:31:08'),
            array('id' => '224','materi_id' => '104','mahasiswa_id' => '77','judul' => 'Flowchart','diskusi' => '<p>Assalamualaikum wr.wb. Ibu,abang dan teman-teman sekalian.</p>

          <p>Izin bertanya, saya belum paham alur flowchart pada latihan pada latihan 1 dan 2, jad tolong jelaskan alur flowchartnya🙏</p>

          <p>Terimakasih, Waassalamualaikum wr.wb</p>','created_at' => '2022-09-30 01:09:25','updated_at' => '2022-09-30 01:09:25'),
            array('id' => '225','materi_id' => '104','mahasiswa_id' => '65','judul' => 'Studi kasus kelompok 13 A','diskusi' => '<p>Assalamualaikum temen-temen jadi kami dari kelompok 13 kelas A dengan beranggotakan :<br />
          1. Alif Nurhidayat (G1A022073)</p>

          <p>2. Ba&#39;im Mudrik Aziz (G1A022071)<br />
          3. Davi Sulaiman (G1A022001)<br />
          Pada kesempatan kali ini kami memiliki beberapa pertanyaan yang bisa kalian pahami dan bisa kalian jawab juga di forum kami :)<br />
          &nbsp;</p>

          <p>1. apakah kalian tahu bahwa metode pengulangan for dan while dapat digunakan untuk menyusun sebuah program yang berfungsi untuk menampilkan nilai biner dari sebuah bilangan desimal ? Coba susunkan kodenya !</p>

          <p>2. Buatlah program dengan menggunakan bahasa pemrograman java untuk menginput 1 buah<br />
          bilangan bulat positif dan menampilkan angka berapa saja yang dapat membagi angka<br />
          tersebut tanpa sisa (gunakan perulangan do-while ya teman-teman biar sama-sama paham:) )<br />
          <br />
          Inilah dari kelompok kami dan terima kasih&nbsp;</p>','created_at' => '2022-09-30 11:32:15','updated_at' => '2022-09-30 11:32:15'),
            array('id' => '226','materi_id' => '104','mahasiswa_id' => '119','judul' => 'Studi kasus kelompok 12 B','diskusi' => '<p>Assallamualaikum</p>

          <p>Selamat siang buk, bang serta teman teman sekalian. kami dari anggota kelompok 12 B yang beranggotakan :</p>

          <p>1. Ahmad Zul Zhafran (G1A022088)</p>

          <p>2. Yuda Reyvandra Herman (G1A022072)</p>

          <p>3. Shalaudin Muhammad Sah (G1A022070)</p>

          <p>Sebagai ganti dari presentasi kelompok kami, kami menyediakan beberapa pertanyaan yang dapat teman-teman kerjakan, untuk memperdalam pemahaman teman-teman sekalian tentang materi yang dibahas kali ini yaitu materi perulangan pada Java.</p>

          <p>&nbsp;</p>

          <p>Soal 1 :</p>

          <p>public class soal1 {<br />
          &nbsp; &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp; &nbsp;int a = 0;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; for (int i &lt;=5; &nbsp;i = 1; i++) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a+=i;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(++a);<br />
          }<br />
          }</p>

          <p>Pada kode program yang diberikan di atas terdapat error pada baris kode ke 4 kode program. Perbaiki error tersebut dan jelaskanlah secara singkat mengapa error tersebut dapat terjadi !</p>

          <p>&nbsp;</p>

          <p>Soal 2 :</p>

          <p>import java.util.Scanner;</p>

          <p>public class soal2 {<br />
          &nbsp; &nbsp; public static void main(String[] args){<br />
          &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Scanner input = new Scanner(System.in);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Masukan Nilai Input : &quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int tinggi = input.nextInt();<br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println();<br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; for(int t=1; t&lt;=tinggi; t++){ // kondisi 1<br />
          &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;for(int s=t; s&lt;=tinggi-1; s++){ // kondisi 2<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.print(&quot; &quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;}<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;for(int u=0; u&lt;=(t*2)-2; u++){ // kondisi 3<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;*&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println();<br />
          &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; }<br />
          }</p>

          <p>Luaran :</p>

          <p>Masukan Nilai Input : 7</p>

          <p>&nbsp; &nbsp; &nbsp; *<br />
          &nbsp; &nbsp; &nbsp;***<br />
          &nbsp; &nbsp; *****<br />
          &nbsp; &nbsp;*******<br />
          &nbsp; *********<br />
          &nbsp;***********<br />
          *************</p>

          <p><br />
          Pada kode program yang telah di berikan di atas, bila dijalankan maka akan membuat sebuah segitiga sama kaki (pola piramida) dengan jumlah baris sesuai dengan input pengguna. Pada kode program tersebut, Uraikan cara kerja dari kondisi 1, kondisi 2 &amp; kondisi 3 sehingga kode program tersebut dapat menghasilkan luaran hasil yang sedemikian rupa !</p>

          <p>Demikian dari kelompok kami, kami ucapkan Terimakasih !</p>','created_at' => '2022-09-30 13:18:11','updated_at' => '2022-09-30 13:18:11'),
            array('id' => '227','materi_id' => '104','mahasiswa_id' => '112','judul' => 'Studi Kasus Kelompok 14 kelas B','diskusi' => '<p>Assalamualaikum Wr.Wb, selamat sore bu, bang, dan teman-teman.<br />
          Saya perwakilan dari kelompok 14 kelas B, yang beranggotakan :<br />
          1. Ari Setiawan (G1A022092)<br />
          2. Ahmad Radesta (G1A022086)<br />
          3. Dian Ardiyanti Saputri (G1A022084)</p>

          <p>Disini kami ingin memberikan studi kasus dari kelompok kami :</p>

          <p>1).Seorang mahasiswa ingin pergi makan siang ke suatu kedai,yang dimana menu kedai tersebut adalah&nbsp;<br />
          Daftar menu :<br />
          1. ayam geprek<br />
          2. ayam bakar<br />
          3. ayam penyet<br />
          4. es teh<br />
          5. es jeruk<br />
          Disini terdapat 5 pilihan menu. Lalu kode program akan berhenti menunggu user memilih salah satu menu. Dari data diatas tentukan kode perulangan/percabangan yang digunakan!!<br />
          Dan tentukan program tersebut akan berhenti atau tidak, apakah akan tampil pertanyaan kedua, yaitu apakah user masih ingin memilih menu lain atau keluar.</p>

          <p>2) Akan dicetak sebuah bilangan genap mulai dari 0 dengan batas akhir merupakan nilai yang diinputkan dengan menggunakan perulangan for.</p>

          <p>Sekian dari kelompok kami, terimakasih. Wassalamualaikum wr wb.</p>','created_at' => '2022-09-30 15:11:50','updated_at' => '2022-09-30 15:11:50'),
            array('id' => '228','materi_id' => '104','mahasiswa_id' => '100','judul' => 'FOR and WHILE','diskusi' => '<p>Assalamualaikum wr wb, selamat siang bu, bang asdos, dan teman teman sekalian.</p>

          <p>izin bertanya, di dalam for atau do while apakah boleh memakai percabangan if?</p>

          <p>terimakasih sebelumnya</p>','created_at' => '2022-09-30 15:36:31','updated_at' => '2022-09-30 15:36:31'),
            array('id' => '229','materi_id' => '104','mahasiswa_id' => '96','judul' => 'Perulangan for dan while','diskusi' => '<p>Assalamualaikum wr.wb izin bertanya buk, saat kita menggunakan perulangan for dan while apakan tidak bisa buk ekpresi nya kita menggunakan operasi operator ?&nbsp;</p>

          <p>Terimakasihh.&nbsp;</p>','created_at' => '2022-09-30 19:18:41','updated_at' => '2022-09-30 19:18:41'),
            array('id' => '230','materi_id' => '104','mahasiswa_id' => '79','judul' => 'Kesalahan menginput nama anggota kelompok','diskusi' => '<p>Assalamuaikum Bu, Bang dan Teman-teman semuanya. Saya ingin bertanya jika salah menginput nama anggota kelompok itu bagaimana ya? Saya salah mengklik Atika Oktavianti sebagai anggota saya sedangkan Atika adalah Kelompok 2 dan Saya adalah kelompok 3. Mohon bantuaannya dan maaf atas kelalaian saya terima kasih.</p>','created_at' => '2022-09-30 22:34:06','updated_at' => '2022-09-30 22:34:06'),
            array('id' => '231','materi_id' => '104','mahasiswa_id' => '37','judul' => 'For and while','diskusi' => '<p>Assalamualaikum wr wb mau bertanya kawan kawan setelah laporan kmarin itu yg jalan dulu baru mikir apa ya kawan kawan lupa soalnya</p>','created_at' => '2022-10-01 22:51:40','updated_at' => '2022-10-01 22:51:40'),
            array('id' => '232','materi_id' => '103','mahasiswa_id' => '158','judul' => 'Penggunaan FOR','diskusi' => '<p>Selamat pagi. Izin Bertanya Bu, Bang, Teman Teman sekalian.<br />
          saya ingin bertanya untuk penggunaan for apakah boleh seperti contoh dibawah ini&nbsp;<br />
          for(int var = 0; var &lt;= 15;){}<br />
          Apakah boleh dalam penggunaan for untuk kondisinya boleh 2, atau harus 3?<br />
          Terimakasih</p>','created_at' => '2022-10-02 06:39:49','updated_at' => '2022-10-02 06:39:49'),
            array('id' => '233','materi_id' => '100','mahasiswa_id' => '75','judul' => 'STUDI KASUS KELOMPOK 15 B','diskusi' => '<p>assalamualaikum&nbsp;</p>

          <p>selamat sore buk ,abang dan mbak serta teman teman sekalian .kami dari kelompok 15 kelas B yang beranggotakan&nbsp;<br />
          1. khairul hafif ( G1A022066)<br />
          2. dimas fahrozy (G1A022018)<br />
          3. reyvano arya (G1A022094)</p>

          <p>1.&nbsp;public static void main(String[] args) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; for (int y = 0; y &lt;= 10; ++y) { &nbsp; &nbsp; &nbsp; &nbsp;//ubah 1<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (y % 2 == 1) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; //ubah 2<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; continue; &nbsp; &nbsp; &nbsp;//baris 1<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; else if (y == 8) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; //ubah 3<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//baris 2<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; else<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(y + &quot; &quot;);<br />
          &nbsp; &nbsp; } &nbsp; &nbsp;} &nbsp; &nbsp;}</p>

          <p>analisa tujuan dari penulisa kata countinue dan break<br />
          &nbsp;</p>

          <p>2.&nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int i=1;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;while(i&lt;=10){&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(i%2==1)&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(i);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;i++; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}}}<br />
          <br />
          luaran :<br />
          1<br />
          3<br />
          5<br />
          7<br />
          9<br />
          analisa kode diatas apa terdapat masih kesalahan atau tidak, lalu ubah luaran menjadi&nbsp;<br />
          2<br />
          4<br />
          6<br />
          8<br />
          10<br />
          12<br />
          14<br />
          16<br />
          18<br />
          20<br />
          <br />
          demikian dari kelompok kami,kami ucapkan terima kasih</p>','created_at' => '2022-10-02 16:08:24','updated_at' => '2022-10-02 16:08:24'),
            array('id' => '234','materi_id' => '101','mahasiswa_id' => '23','judul' => 'Diskusi kelompok','diskusi' => '<p>Kelompok yang bertugas menuliskan forum diskusi soal studi kasus untuk For dan While, soal dapat diakses dimana?</p>','created_at' => '2022-10-04 10:13:38','updated_at' => '2022-10-04 10:13:38'),
            array('id' => '235','materi_id' => '74','mahasiswa_id' => '328','judul' => 'Tugas latihan nomor 4 tentang konversi data','diskusi' => '<p>Assalamualaikum perkenalkan saya</p>

          <p>Nama : Iqbal Tri Agustian<br />
          Kelas : A<br />
          Npm : G1F024043</p>

          <p>Saya ingin menanyakan maksut dari tugas latihan nomor 4 tentang konversi tipe data, bagi kawan kawan yang mengerti dan sudah mengerjakan mohon bantuannya, Terima kasih</p>','created_at' => '2024-08-25 19:17:01','updated_at' => '2024-08-25 19:17:01'),
            array('id' => '236','materi_id' => '106','mahasiswa_id' => '328','judul' => 'Tugas latihan individu, latihan bagian 4','diskusi' => '<hr />
          <p>Nama : Iqbal Tri Agustian<br />
          Npm : G1F024043<br />
          Kelas : A</p>

          <hr />
          <p>Permisi teman teman sekalian, untuk yang sudah soal latihan bagian 4, boleh tolong ajarin ngga ya maksutnya gimana</p>','created_at' => '2024-08-29 17:21:16','updated_at' => '2024-08-29 17:21:16'),
            array('id' => '237','materi_id' => '105','mahasiswa_id' => '412','judul' => 'Tugas individu, nomor 4','diskusi' => '<p>Nama: Zahra Sari Fhadilah</p>

          <p>NPM: G1F024025</p>

          <p>Kelas: A</p>

          <p>Selamat malam teman-teman, saya ingin bertanya mengenai tugas individu nomor 4. Mengapa output dari codingan saya masih error? Kira-kira kesalahannya di mana ya? Terima kasih sebelumnya.</p>

          <p>&nbsp;</p>

          <p>kode program</p>

          <p>public class KonversiTipeData {<br />
          &nbsp; &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; // 1. Konversi dari int<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int intValue = 5;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; long longValue = intValue;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; float floatValueFromInt = intValue;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; double doubleValueFromInt = intValue;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;int ke long: &quot; + longValue);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;int ke float: &quot; + floatValueFromInt);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;int ke double: &quot; + doubleValueFromInt);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; // 2. Konversi dari char<br />
          &nbsp; &nbsp; &nbsp; &nbsp; char charValue = &#39;L&#39;;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int intValueFromChar = charValue;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; String stringValueFromChar = Character.toString(charValue);</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;char ke int (nilai ASCII/Unicode): &quot; + intValueFromChar);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;char ke String: &quot; + stringValueFromChar);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n&quot;);</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; // 3. Konversi dari String<br />
          &nbsp; &nbsp; &nbsp; &nbsp; String stringValue = &quot;mobil&quot;;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; char[] charArray = stringValue.toCharArray();<br />
          &nbsp; &nbsp; &nbsp; &nbsp; StringBuilder stringBuilder = new StringBuilder(stringValue);</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;String ke char[]: &quot; + new String(charArray));<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;String ke StringBuilder: &quot; + stringBuilder.toString());<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n&quot;);</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; // 4. Konversi dari double<br />
          &nbsp; &nbsp; &nbsp; &nbsp; double doubleValue = 5.0;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; float floatValueFromDouble = (float) doubleValue;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int intValueFromDouble = (int) doubleValue;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;double ke float: &quot; + floatValueFromDouble);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;double ke int: &quot; + intValueFromDouble);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n&quot;);</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; // 5. Konversi dari float<br />
          &nbsp; &nbsp; &nbsp; &nbsp; float floatValue = 5.0f;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; double doubleValueFromFloat = floatValue;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int intValueFromFloat = (int) floatValue;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;float ke double: &quot; + doubleValueFromloat);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;float ke int: &quot; + intValueFromFloat);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n&quot;);</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; // 6. Konversi dari int (negatif)<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int negativeIntValue = -5;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; long longValueFromNegativeInt = negativeIntValue;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; float floatValueFromNegativeInt = negativeIntValue;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; double doubleValueFromNegativeInt = negativeIntValue;</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;int (negatif) ke long: &quot; + longValueFromNegativeInt);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;int (negatif) ke float: &quot; + floatValueFromNegativeInt);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;int (negatif) ke double: &quot; + doubleValueFromNegativeInt);</p>

          <p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp; &nbsp; }<br />
          }</p>','created_at' => '2024-08-29 20:24:35','updated_at' => '2024-08-29 20:24:35'),
            array('id' => '238','materi_id' => '106','mahasiswa_id' => '492','judul' => 'Panduan konversi tipe data','diskusi' => '<p>Nama : Muhammad Hovid Arman</p>

          <p>NPM&nbsp; : G1F024034</p>

          <p>Izin bertanya, mengenai pengonversian tipe data pada tugas no.4, apakah boleh mengonversi tipe `int` ke `double`</p>

          <p>Terima kasih.</p>','created_at' => '2024-08-29 21:05:24','updated_at' => '2024-08-29 21:05:24'),
            array('id' => '239','materi_id' => '106','mahasiswa_id' => '334','judul' => 'Tipe Data','diskusi' => '<p>Nama: Dewangga Nugroho Anwar</p>

          <p>Npm&nbsp; : G1F024045</p>

          <p>Izin bertanya kawan&quot; mengenai tugas no 4 itu apakah harus menkonversi lebih dari 1 tipe data EXPLISIT DAN EMPLISIT?</p>','created_at' => '2024-08-30 12:57:55','updated_at' => '2024-08-30 12:57:55'),
            array('id' => '240','materi_id' => '106','mahasiswa_id' => '439','judul' => 'Pengenalan java dan tipe data','diskusi' => '<p>Izin bertanya teman teman&nbsp;</p>

          <p>Bagaimana cara mengonversi antara tipe data yang berbeda,seperti dari string ke integer ?&nbsp;</p>','created_at' => '2024-08-30 22:19:35','updated_at' => '2024-08-30 22:19:35'),
            array('id' => '241','materi_id' => '106','mahasiswa_id' => '398','judul' => 'Konversi data','diskusi' => '<p>Nama: Ghania Putri Humayra</p>

          <p>NPM: G1F024041</p>

          <p>Saya izin bertanya..., apakah bisa mengkonversikan float ke integer?</p>','created_at' => '2024-08-30 22:19:50','updated_at' => '2024-08-30 22:19:50'),
            array('id' => '242','materi_id' => '105','mahasiswa_id' => '429','judul' => 'Tugas Individu nomor 3','diskusi' => '<p>Assalamualaikum,permisi perkenalan saya</p>

          <p>Nama : Anisa Jayanti</p>

          <p>NPM : G1F024046</p>

          <p>Kelas : B</p>

          <p>saya izin bertanya temen temen mengenai tugas 3,ini kira kira codingannya bener ga ya temen temen? apa ada yang bisa membantu?public class tipeData {<br />
          &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp; &nbsp; &nbsp;String nama = &ldquo;UNIB&rdquo;;<br />
          &nbsp; &nbsp; &nbsp;System.out.println(nama);<br />
          &nbsp; &nbsp; &nbsp;int tahun = 2022;<br />
          &nbsp; &nbsp; &nbsp;System.out.println(tahun);<br />
          &nbsp; &nbsp; &nbsp;tahun = 2023;<br />
          &nbsp; &nbsp; &nbsp;System.out.println(tahun);<br />
          &nbsp; &nbsp; &nbsp;long range -42342231L;<br />
          &nbsp; &nbsp; &nbsp;System.out.println(range);<br />
          &nbsp; &nbsp; &nbsp;char jKelamin = &lsquo;P&rsquo;;<br />
          &nbsp; &nbsp; &nbsp;System.out.println(jKelamin);<br />
          &nbsp; &nbsp; &nbsp;float pecahan = 5.99f;<br />
          &nbsp; &nbsp; &nbsp;System.out.println(pecahan);<br />
          &nbsp; &nbsp; &nbsp;boolean lulus = true;<br />
          &nbsp; &nbsp; &nbsp;System.out.println(lulus);<br />
          }&nbsp; &nbsp;}</p>','created_at' => '2024-09-02 10:22:04','updated_at' => '2024-09-02 10:22:04'),
            array('id' => '243','materi_id' => '106','mahasiswa_id' => '487','judul' => 'Operator Increment dan Decrement','diskusi' => '<p>Nama : Donna Zelvia Gizella Alvera Deadora</p>

          <p>NPM : G1F024018</p>

          <p>Izin bertanya teman-teman semuanya, untuk materi minggu lalu mengenai operator increment dan decrement, pada contoh soal pre-decrement itu ada x=3 dan &nbsp;y=5 lalu hasil nya x=1 dan y=7,&nbsp;&nbsp;pertanyaannya, bisa mendapatkan hasil&nbsp;&nbsp;x=1 dan y=7 itu langkah-langkah nya bagaimana ya?</p>','created_at' => '2024-09-03 16:19:32','updated_at' => '2024-09-03 16:19:32'),
            array('id' => '244','materi_id' => '109','mahasiswa_id' => '487','judul' => 'Operator Decrement','diskusi' => '<p>Nama : Donna Zelvia Gizella Alvera Deadora</p>

          <p>NPM : G1F024018</p>

          <p>Izin bertanya teman-teman semuanya, untuk materi minggu lalu mengenai operator increment dan decrement, pada contoh soal pre-decrement itu ada x=3 dan &nbsp;y=5 lalu hasil nya x=1 dan y=7,&nbsp;&nbsp;pertanyaannya, bisa mendapatkan hasil&nbsp;&nbsp;x=1 dan y=7 itu langkah-langkah nya bagaimana ya?</p>','created_at' => '2024-09-03 16:52:48','updated_at' => '2024-09-03 16:52:48'),
            array('id' => '245','materi_id' => '120','mahasiswa_id' => '37','judul' => 'Kepikiran Dengan Soal nomor 4','diskusi' => '<p>izin Bertanya Ibu saya Kepikiran dengan Soal Nomor 4&nbsp;</p>

          <p>Iizn bertanya Ibu Bagaimana cara menentukan secara optimal titik tengah pada fungsi keanggotaan segitiga untuk permintaan, persediaan, dan produksi jika data historis menunjukkan adanya outlier atau pola yang tidak konsisten? Adakah metode yang lebih efektif dibandingkan metode manual untuk menentukan parameter ini? untuk Nomor 4 Ibu&nbsp;</p>','created_at' => '2024-09-04 10:06:39','updated_at' => '2024-09-04 10:06:39'),
            array('id' => '246','materi_id' => '107','mahasiswa_id' => '411','judul' => 'Media belajar','diskusi' => '<p>Saya masih memiliki strugle dalam belajar, apakah ada saran yt lain yang dapat membantu saya untuk mempelajari nya?</p>','created_at' => '2024-09-04 18:48:02','updated_at' => '2024-09-04 18:48:02'),
            array('id' => '247','materi_id' => '109','mahasiswa_id' => '402','judul' => 'OPERATOR ARITMATIKA','diskusi' => '<p>NAMA : AISYA WARDATUL HADI</p>

          <p>NPM : G1F024012</p>

          <p>izin bertanya, untuk operator aritmatika yang melakukan perhitungan dengan memprioritaskan operator sebelah kiri&nbsp; terlebih dahulu jika memiliki proritas yang sama, bagaimana jika kita ingin memprioritaskan untuk mengubah urutan pengerjaannya?</p>

          <p>terimakasih</p>','created_at' => '2024-09-04 19:38:39','updated_at' => '2024-09-04 19:38:39'),
            array('id' => '248','materi_id' => '111','mahasiswa_id' => '440','judul' => 'Menghitung luas dan keliling dari sebuah benda','diskusi' => '<p>nama : Ariansyah Putra Ramadhan</p>

          <p>NPM : G1F024080</p>

          <p>&nbsp;</p>

          <p>izin bertanya, bagaimana cara untuk membuat sebuah program sederhana untuk menghitung luas dan keliling berbagai bentuk benda?</p>','created_at' => '2024-09-04 20:18:46','updated_at' => '2024-09-04 20:18:46'),
            array('id' => '249','materi_id' => '106','mahasiswa_id' => '440','judul' => 'Cara menghitung luas dan keliling dari suatu benda','diskusi' => '<p>nama : Ariansyah Putra Ramadhan</p>

          <p>NPM : G1F024080</p>

          <p>izin bertanya, bagaimana cara untuk membuat sebuah program sederhana untuk menghitung luas dan keliling berbagai bentuk benda?</p>','created_at' => '2024-09-04 20:21:22','updated_at' => '2024-09-04 20:21:22'),
            array('id' => '250','materi_id' => '106','mahasiswa_id' => '586','judul' => 'cara mengkonversikan tipe tipe data','diskusi' => '<p>nama: cindy aurora</p>

          <p>npm: G1F024066</p>

          <p>izin bertanya, bagaimana cara mengkonversikan data sesuai rumus&nbsp;</p>','created_at' => '2024-09-04 20:39:29','updated_at' => '2024-09-04 20:39:29'),
            array('id' => '251','materi_id' => '106','mahasiswa_id' => '445','judul' => 'Pengenalan Java Dan Tipe Data','diskusi' => '<p>Nama: Risneliya Elisa<br />
          Npm: G1F024005</p>

          <p>Izin bertanya&nbsp;<br />
          1. Apakah nilai yang disimpan oleh variabel primitif adalah nilai asli?&nbsp;<br />
          2. Apakah variabel primitif memiliki byte yang sama setiap perangkat kerasnya?<br />
          Materi: Pengenalan Java dan Tipe Data<br />
          Topik: Pengenalan Java dan Tipe Data<br />
          Kelas: 2024 Komputer Dan Pemograman<br />
          Dosen Pengampu: Endina Putri Purwandari, S.T.,M.Kom.</p>','created_at' => '2024-09-04 21:12:07','updated_at' => '2024-09-04 21:12:07'),
            array('id' => '252','materi_id' => '106','mahasiswa_id' => '609','judul' => 'TIPE DATA','diskusi' => '<p>Bagiamana cara menentukan tipe data yang relevan??</p>','created_at' => '2024-09-05 10:32:59','updated_at' => '2024-09-05 10:32:59'),
            array('id' => '253','materi_id' => '106','mahasiswa_id' => '401','judul' => 'TIPE DATA','diskusi' => '<p>bagaimana cara menyimpan data pada tipe data dengan variabel</p>','created_at' => '2024-09-05 10:44:47','updated_at' => '2024-09-05 10:44:47'),
            array('id' => '254','materi_id' => '109','mahasiswa_id' => '328','judul' => 'Menghitung biner','diskusi' => '<hr />
          <p><span style="font-family:Times New Roman,Times,serif"><code>Permisi, sebelumnya perkenalkan saya<br />
          Nama : Iqbal Tri Agustian<br />
          Npm&nbsp; : G1F024043</code></span></p>

          <hr />
          <p><span style="font-family:Courier New,Courier,monospace"><code>public class OperatorBitwise {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int a = 10;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int b = 7;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int hasil;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = a &amp; b;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari a &amp; b : &quot; + hasil ); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = a | b;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari a | b : &quot; + hasil ); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = a ^ b;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari a ^ b : &quot; + hasil ); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = ~a;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari ~a : &quot; + hasil ); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = a &gt;&gt; 1;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari a &gt;&gt; 1 : &quot; + hasil ); &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;hasil = b &lt;&lt; 2;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari b &lt;&lt; 2 : &quot; + hasil );<br />
          } &nbsp; }</code></span></p>

          <p><span style="font-family:Courier New,Courier,monospace"><strong>Luaran:</strong>&nbsp;<br />
          <code>Hasil dari a &amp; b : 2<br />
          Hasil dari a | b : 15<br />
          Hasil dari a ^ b : 13<br />
          Hasil dari ~a : -11<br />
          Hasil dari a &gt;&gt; 1 : 5<br />
          Hasil dari b &lt;&lt; 2 : 28</code></span></p>

          <p><span style="font-family:Times New Roman,Times,serif"><strong>Latihan 7</strong><br />
          Evaluasi penyebab hasil ~a = -11 ? Buktikan jawaban Anda dalam perhitungan biner!</span></p>

          <p>&nbsp;</p>

          <p><span style="font-family:Times New Roman,Times,serif">Saya ingin menanyakan perihal soal latihan 7 tentang pembuktian hasil biner, bagi teman teman yang sudah paham dan sudah mengerti tentang bilangan biner, tolong berikan penjelasan dikolom komentar<br />
          Terima kasih<img alt="smiley" src="https://adaptif.rumahilmu.org/assets/ckeditor/plugins/smiley/images/regular_smile.png" style="height:23px; width:23px" title="smiley" /></span></p>

          <p>&nbsp;</p>','created_at' => '2024-09-06 13:19:17','updated_at' => '2024-09-06 13:19:17'),
            array('id' => '255','materi_id' => '120','mahasiswa_id' => '40','judul' => 'Pertanyaan','diskusi' => '<p>Fuzzy logic ini pasti sangat banyak ditemukan dalam kehidupan kita, seperti pada soal nomor 1 kita diminta untuk mencari bidang yang berkaitan dengan fuzzy logic. Nah, saya ingin bertanya bagaimana mengintegrasikan fuzzy logic ini ke dalam kecerdasan buatan, terutama machine learning?&nbsp;</p>','created_at' => '2024-09-07 19:53:56','updated_at' => '2024-09-07 19:53:56'),
            array('id' => '256','materi_id' => '120','mahasiswa_id' => '59','judul' => 'Pertanyaan Tentang Fungsi Keanggotaan Himpunan Fuzzy','diskusi' => '<p>Assalamualaikum perkenalkan saya</p>

          <p>Nama : Riolan Pratama</p>

          <p>Npm : G1A022047</p>

          <p>&nbsp;</p>

          <p>Saya ingin bertanya kepada teman-teman, berdasarkan materi yang telah diberikan terdapat berbagai jenis fungsi keanggotaan himpunan fuzzy yaitu fungsi linear, fungsi segitiga, fungsi trapezium, fungsi sigmoid, dan fungsi phi. Dari beberapa fungsi keanggotaan tersebut, manakah fungsi yang cocok untuk saya gunakan dalam sistem penghitungan kadar air dan mengapa fungsi tersebut bisa cocok untuk digunakan?</p>

          <p>Mohon dijawab ya teman-teman, terimakasih.</p>','created_at' => '2024-09-08 12:27:11','updated_at' => '2024-09-08 12:27:11'),
            array('id' => '257','materi_id' => '120','mahasiswa_id' => '49','judul' => 'Perbedaan Penggunaan Fungsi Keanggotaan Himpunan Fuzzy','diskusi' => '<p>Perkenalkan saya David Thimotius Rarung dengan NPM G1A022045<br />
          Saya ingin bertanya kepada teman-teman mengenai perbedaan penggunaan fungsi keanggotaan.&nbsp;Berdasarkan pengalaman saya dalam mengerjakan suatu kasus, saya menggunakan fungsi keanggotaan segitiga untuk kasus tersebut, tetapi setelah saya lihat lagi ternyata kasus ini juga bisa menggunakan fungsi keanggotaan trapesium. Kira-kira adakah perbedaan yang besar saat menggunakan fungsi keanggotaan segitiga&nbsp;dibandingkan trapesium (atau sebaliknya) dalam sistem fuzzy?<br />
          Pada saat kapan kalian lebih memilih salah satu dibanding yang lain?</p>','created_at' => '2024-09-08 13:42:27','updated_at' => '2024-09-08 13:42:27'),
            array('id' => '258','materi_id' => '109','mahasiswa_id' => '437','judul' => 'Pre-decrement & Post-decrement','diskusi' => '<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,&quot;sans-serif&quot;"><strong>Pre-decrement:</strong> Digunakan ketika ingin menggunakan nilai yang sudah dikurangi 1 dalam ekspresi yang sama.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span></span><span style="font-size:11pt"><span style="font-family:Calibri,&quot;sans-serif&quot;"><strong>Post-decrement:</strong> Digunakan ketika ingin menggunakan nilai yang lama terlebih dahulu, baru kemudian menguranginya.</span></span></p>

          <p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,&quot;sans-serif&quot;">Adakah teman-teman yang bisa menjelaskan dengan lebih sederhana atau memberikan analogi yang lebih jelas kepada saya?&nbsp;</span></span></p>

          <p style="text-align:justify">&nbsp;</p>','created_at' => '2024-09-10 19:48:06','updated_at' => '2024-09-10 19:48:06'),
            array('id' => '259','materi_id' => '120','mahasiswa_id' => '125','judul' => 'Waktu yang tepat untuk menggunakan jenis fungsi keanggotaan fuzy','diskusi' => '<p>Permisi teman-teman sekalian, disini saya ada pertanyaan yang ada dipikiran saya, dan saya masih bingung jawaban apa yang tepat. Disini saya ingin bertanya mengenai bagaimana cara kita menentukan fungsi keanggotaan apa yang cocok digunakan pada suatu kasus atau project. Barangkali disini teman-teman bisa membantu menjawab pertanyaan saya</p>','created_at' => '2024-09-11 17:41:37','updated_at' => '2024-09-11 17:41:37'),
            array('id' => '260','materi_id' => '108','mahasiswa_id' => '213','judul' => 'Operator Bitwise','diskusi' => '<p>Assalamualaikum, perkenalkan saya Keisha Azzahra Anindya dengan NPM G1F023040. Bagaimana cara menghitung angka biner untuk melanjutkan operasi menggunakan operator bitwise?</p>','created_at' => '2024-09-11 22:13:49','updated_at' => '2024-09-11 22:13:49'),
            array('id' => '261','materi_id' => '108','mahasiswa_id' => '445','judul' => 'cara mengonversi bilangan desimal ke biner','diskusi' => '<p>nama; Risneliya Elisa</p>

          <p>npm; G1F024005</p>

          <p>izin bertanya bagaimana cara mengonversi bilangan desimal ke bilangan binner</p>

          <p>dan apakah mengonversi bilangan binner berbeda dengan menghitung bilangan binner</p>','created_at' => '2024-09-12 06:04:48','updated_at' => '2024-09-12 06:04:48'),
            array('id' => '262','materi_id' => '109','mahasiswa_id' => '407','judul' => 'Assalamualaikum bu,teman \'\'   nama : winda dwi salistianna  npm : G1F024004  izin bertanya untuk latihan no 7 itu maksudnya gimana ya bisa tolong bantu jelaskan ?  sekian terimakasihh','diskusi' => '<p>Assalamualaikum bu,teman &#39;&#39;&nbsp;</p>

          <p>nama : winda dwi salistianna</p>

          <p>npm : G1F024004</p>

          <p>izin bertanya untuk latihan no 7 itu maksudnya gimana ya bisa tolong bantu jelaskan ?</p>

          <p>sekian terimakasihh</p>','created_at' => '2024-09-12 09:22:19','updated_at' => '2024-09-12 09:22:19'),
            array('id' => '263','materi_id' => '110','mahasiswa_id' => '334','judul' => 'Operator','diskusi' => '<p>Nama : Dewangga Nugroho Anwar&nbsp;</p>

          <p>NPM : G1F024045</p>

          <p>Assalamualaikum teman&quot; izin bertanya, untuk soal no 7 apakah operasi bitwise shift left (&lt;&lt;) dan shift right (&gt;&gt;) pada variabel a dengan nilai 10 dan b dengan nilai 7, harus dijelaskan melalui perhitungan manual bilangan biner?&quot;</p>

          <p>Terimakasih.</p>','created_at' => '2024-09-12 14:00:33','updated_at' => '2024-09-12 14:00:33'),
            array('id' => '264','materi_id' => '110','mahasiswa_id' => '492','judul' => 'Panduan Perhitungan Biner','diskusi' => '<p>Izin bertanya ibu dan teman-teman sekalian, untuk perhitungan operasi biner itu bagaimana ya? Bagaimana bisa dapat biner 1010+0111=0010</p>

          <p>Terimakasih semuanya, maaf.</p>','created_at' => '2024-09-12 16:38:30','updated_at' => '2024-09-12 16:38:30'),
            array('id' => '265','materi_id' => '120','mahasiswa_id' => '723','judul' => 'Pertanyaan tentang Pemilihan Bentuk Fungsi Keanggotaan Fuzzy','diskusi' => '<p>Saya ingin bertanya mengenai pemilihan bentuk fungsi keanggotaan dalam fuzzy logic. Dari yang kita pelajari, terdapat beberapa opsi seperti fungsi segitiga, trapezium, sigmoid, dan Gaussian. Dalam aplikasi pengendalian kelembaban udara, menurut kalian, bentuk fungsi keanggotaan mana yang paling efektif dalam menangani perubahan nilai yang cenderung fluktuatif? Dan apa alasan di balik pemilihan tersebut?</p>','created_at' => '2024-09-13 05:58:14','updated_at' => '2024-09-13 05:58:14'),
            array('id' => '266','materi_id' => '106','mahasiswa_id' => '720','judul' => 'TIPE DATA','diskusi' => '<h3>Apa yang dimaksud dengan Loop tak terbatas? Bagaimana loop tak terbatas dideklarasikan?</h3>','created_at' => '2024-09-13 14:44:27','updated_at' => '2024-09-13 14:44:27'),
            array('id' => '267','materi_id' => '110','mahasiswa_id' => '442','judul' => 'Operator java','diskusi' => '<p>IZIN BERTANYA</p>

          <p>Nama: Muhammad Ariq Hafidl Fatanah</p>

          <p>Npm: G1F024014</p>

          <p>Mengapa pada operator java, operasi penugasan dibuat padahal konsep perhitungan hampir sama dengan operasi aritmatika?</p>','created_at' => '2024-09-15 08:56:39','updated_at' => '2024-09-15 08:56:39'),
            array('id' => '268','materi_id' => '108','mahasiswa_id' => '414','judul' => 'Operator ternary','diskusi' => '<p>nama ; Naufal Wafiq Syafri&nbsp;</p>

          <p>Npm : G1F024054&nbsp;</p>

          <p>assalamulaikum saya mau nanya, Kenapa pada operator ternary pada bagian true berada pada bagian sebelah kiri dan false berada pada bagian kanan? Terimakasih</p>','created_at' => '2024-09-15 22:53:26','updated_at' => '2024-09-15 22:53:26'),
            array('id' => '269','materi_id' => '108','mahasiswa_id' => '590','judul' => 'Operator Bitwise','diskusi' => '<ul>
              <li>Apa perbedaan antara operator bitwise <code>&amp;</code>, <code>|</code>, <code>^</code>, <code>~</code>, <code>&lt;&lt;</code>, <code>&gt;&gt;</code>, dan <code>&gt;&gt;&gt;</code>?</li>
              <li>Bagaimana cara kerja operasi bitwise pada angka negatif?</li>
          </ul>','created_at' => '2024-09-16 13:31:15','updated_at' => '2024-09-16 13:31:15'),
            array('id' => '270','materi_id' => '111','mahasiswa_id' => '334','judul' => 'Unit Class Java.','diskusi' => '<p>Nama : Dewangga Nurgoho Anwar</p>

          <p>NPM&nbsp; &nbsp;: G1F024045</p>

          <p>Assalamuallaikum teman-teman izin bertanya untuk materi unit class java.</p>

          <p>pada line kode pemograman unit 1 (kelas) .</p>

          <p>int sukaNonton {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;episode*durasi;<br />
          &nbsp;&nbsp; &nbsp;}</p>

          <p>apakah harus menambahkan statement return ya?, terimakasih.</p>','created_at' => '2024-09-17 17:01:34','updated_at' => '2024-09-17 17:01:34'),
            array('id' => '271','materi_id' => '112','mahasiswa_id' => '445','judul' => 'kompleksitas','diskusi' => '<p>Nama : Risneliya Elisa</p>

          <p>NPM : G1F024005</p>

          <p>Izin bertanya, Apa yang dimaksud dengan kompeksitas waktu dalam konteks algoritma, dan bagaimana agar dapat mengurangi kompleksitas waktu dari sebuah method?</p>','created_at' => '2024-09-18 07:04:32','updated_at' => '2024-09-18 07:04:32'),
            array('id' => '272','materi_id' => '112','mahasiswa_id' => '445','judul' => 'kompleksitas','diskusi' => '<p>Nama : Risneliya Elisa</p>

          <p>NPM : G1F024005</p>

          <p>Izin bertanya, Apa yang dimaksud dengan kompeksitas waktu dalam konteks algoritma, dan bagaimana agar dapat mengurangi kompleksitas waktu dari sebuah method?</p>','created_at' => '2024-09-18 07:04:34','updated_at' => '2024-09-18 07:04:34'),
            array('id' => '273','materi_id' => '113','mahasiswa_id' => '402','judul' => 'KELAS, OBJEK, DAN METHOD','diskusi' => '<p>NAMA : AISYA WARDATUL HADI</p>

          <p>NPM : G1F024012</p>

          <p>izin bertanya, apa perbedaan dari method overloading dan method overriding? serta constructor overloading dan overriding</p>

          <p>terimakasih</p>','created_at' => '2024-09-18 20:27:40','updated_at' => '2024-09-18 20:27:40'),
            array('id' => '274','materi_id' => '89','mahasiswa_id' => '407','judul' => 'Assalamualaikum bu,teman \'\'   nama : winda dwi salistianna  npm : G1F024004  izin bertanya untuk latihan no 7 itu maksudnya gimana ya bisa tolong bantu jelaskan ?  sekian terimakasihh','diskusi' => '<p>Assalamualaikum wr.wb&nbsp;</p>

          <p>saya :</p>

          <p>Winda dwi salistianna</p>

          <p>Npm: G1F024004</p>

          <p>izin bertanya untuk unit 4 extends itu maksudnya gimana yaa?&nbsp;</p>','created_at' => '2024-09-18 21:41:36','updated_at' => '2024-09-18 21:41:36'),
            array('id' => '275','materi_id' => '113','mahasiswa_id' => '502','judul' => 'Kelas, Objek Method','diskusi' => '<p>Nama: Yulinda Samosir</p>

          <p>G1F024020</p>

          <p>&nbsp;</p>

          <p>Izin bertanya teman teman, apakah mungkin untuk mengeksekusi program tanpa adanya &#39;main method&#39; ?Izin bertanya teman teman, apakah mungkin untuk mengeksekusi program tanpa adanya &#39;main method&#39; ?</p>','created_at' => '2024-09-18 22:29:44','updated_at' => '2024-09-18 22:29:44'),
            array('id' => '276','materi_id' => '113','mahasiswa_id' => '492','judul' => 'CONSTRUCTOR','diskusi' => '<p>Nama : Muhammad Hovid Arman</p>

          <p>NPM&nbsp; : G1F024034</p>

          <p>Izin bertanya, mengenai constructor, mengapa tidak ada constructor overriding?&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mohon maaf dan terima kasih.</p>','created_at' => '2024-09-18 23:27:55','updated_at' => '2024-09-18 23:27:55'),
            array('id' => '277','materi_id' => '113','mahasiswa_id' => '422','judul' => 'Method','diskusi' => '<p><strong>Nama:&nbsp;</strong>Muhammad Nabiil Musyaffa&#39;<br />
          <strong>NPM:&nbsp;</strong>G1F024030<br />
          Izin bertanya, untuk metode sendiri apa yang membedakan method overloaded dan method duplicated, sekian dari saya mohon bantuannya.</p>','created_at' => '2024-09-19 08:04:17','updated_at' => '2024-09-19 08:04:17'),
            array('id' => '278','materi_id' => '109','mahasiswa_id' => '586','judul' => 'increment decrement','diskusi' => '<p>nama:cindy aurora</p>

          <p>NPM:G1F024066</p>

          <p>&nbsp;</p>

          <p>apa bedanya ini ya pre/post increment, pre/post decrement?terimakasih</p>','created_at' => '2024-09-19 08:32:42','updated_at' => '2024-09-19 08:32:42'),
            array('id' => '279','materi_id' => '112','mahasiswa_id' => '483','judul' => 'Kelas Java','diskusi' => '<p>Nama: Moza Violetha Salsabilla</p>

          <p>Npm : G1F024028</p>

          <p>Izin bertanya, apa perbedaan kontruktor dengan&nbsp; parameter dan konstruktor tanpa parameter?</p>','created_at' => '2024-09-19 10:09:35','updated_at' => '2024-09-19 10:09:35'),
            array('id' => '280','materi_id' => '114','mahasiswa_id' => '331','judul' => 'IF ELSE & SWITCH','diskusi' => '<p><strong>Assalamualaikum, izin bertanya ibu,abang,mbak dan teman teman.</strong></p>

          <p><strong>Perkernalkan nama saya : <span class="bg-primary-subtle">RIVAN ALFATONI</span>NPM:<span class:"bg-primary-subtle">G1F024047</span></strong></p>
          <hr>
          Izin bertanya, apakah boleh membuat flowchart menggunakan tools online seperti <a href="https://miro.com/">https://miro.com/ </a> atau harus menggunakan word?','created_at' => '2024-09-21 13:50:05','updated_at' => '2024-09-21 13:50:05'),
            array('id' => '281','materi_id' => '115','mahasiswa_id' => '393','judul' => 'Nama : Dini Ramadona  NPM : G1F024050','diskusi' => '<p>Assalamualaikum wr wb.</p>

          <p>Izin bertanya teman-teman maksud dari materi latihan 1 Unit IF bagian 1.1 Uraikan gambar diagram flowchart dari Latihan 1.2!. Apakah flowchart nya harus diuraikan apa hanya dalam bentuk gambar?</p>

          <p>Terimakasih..</p>','created_at' => '2024-09-23 19:30:19','updated_at' => '2024-09-23 19:30:19'),
            array('id' => '282','materi_id' => '116','mahasiswa_id' => '407','judul' => 'UNIT 1','diskusi' => '<p>Assalamualaikum wr.wb</p>

          <p>saya winda dwi salistianna&nbsp; dengan NPM G1f024004&nbsp;</p>

          <p>izin bertanya untuk Unit 1 IF bagian 1.3 itu maksudnya gimanaa ya apakah masih memakai kodingan 1.1-1.2 apa buat kodingan baru ?</p>

          <p>sekian terimakasih man temannn mohon jawabannyaa :0</p>','created_at' => '2024-09-24 20:52:09','updated_at' => '2024-09-24 20:52:09'),
            array('id' => '283','materi_id' => '112','mahasiswa_id' => '417','judul' => 'For Dan While','diskusi' => '<p>Nama : Muhammad Nabil</p>

          <p>Npm : G1F024068</p>

          <p>Apa yang dimaksud dengan FOR dan WHILE</p>','created_at' => '2024-09-25 20:40:03','updated_at' => '2024-09-25 20:40:03'),
            array('id' => '284','materi_id' => '114','mahasiswa_id' => '502','judul' => 'If dan switch','diskusi' => '<p>Nama: Yulinda Samosir&nbsp;</p>

          <p>NPM: G1F024020</p>

          <p>&nbsp;</p>

          <p>apa yang akan terjadi jika break tidak ditulis untuk case di Switch case?</p>','created_at' => '2024-09-26 01:07:05','updated_at' => '2024-09-26 01:07:05'),
            array('id' => '285','materi_id' => '114','mahasiswa_id' => '492','judul' => 'SWITCH CASE','diskusi' => '<p>Nama : Muhammad Hovid Arman</p>

          <p>&nbsp;</p>

          <p>NPM : G1F024034</p>

          <p>&nbsp;</p>

          <p>Izin bertanya, mengenai switch case, adakah cara agar ketika kita menginput huruf &#39;a&#39; kecil sistem akan tetap menampilkan hasil untuk case &#39;A&#39;</p>

          <p>Terimakasih&nbsp;</p>','created_at' => '2024-09-26 08:04:58','updated_at' => '2024-09-26 08:04:58'),
            array('id' => '286','materi_id' => '114','mahasiswa_id' => '429','judul' => 'penggunaan default dan break','diskusi' => '<p>assalamuaikum,mohon izin saya</p>

          <p>Nama: Anisa jayanti&nbsp;</p>

          <p>NPM: G1F024046</p>

          <p>untuk penggunaan default dan break tersendiri mana yang lebih penting? apakah mereka berbeda jenis atau sama?&nbsp;</p>

          <p>&nbsp;</p>','created_at' => '2024-09-28 14:56:05','updated_at' => '2024-09-28 14:56:05'),
            array('id' => '287','materi_id' => '123','mahasiswa_id' => '37','judul' => 'SOAL PRE TEST NO 6 dan 7','diskusi' => '<p>Dalam kasus sistem fuzzy yang lebih kompleks dengan lebih dari dua aturan, bagaimana cara menyesuaikan pembobotan agar hasil yang diinginkan tercapai? Apakah ada batasan tertentu dalam jumlah aturan dan bobot yang digunakan?</p>

          <p>&nbsp;</p>','created_at' => '2024-10-07 10:14:46','updated_at' => '2024-10-07 10:14:46'),
            array('id' => '288','materi_id' => '123','mahasiswa_id' => '37','judul' => 'Soal Pretest No 6 dan 7','diskusi' => '<p>Mengapa pada aturan pertama digunakan bobot 0.4 dan pada aturan kedua digunakan bobot 0.6? Bagaimana pengaruh bobot tersebut terhadap hasil akhir dari sistem fuzzy?</p>','created_at' => '2024-10-07 10:17:25','updated_at' => '2024-10-07 10:17:25'),
            array('id' => '289','materi_id' => '123','mahasiswa_id' => '723','judul' => 'proses fuzzifikasi dan defuzzifikasi dalam sistem inferensi fuzzy','diskusi' => '<p>Bagaimana peran proses fuzzifikasi dan defuzzifikasi dalam sistem inferensi fuzzy serta bagaimana kedua proses ini saling melengkapi untuk menghasilkan keputusan dalam sistem fuzzy. Mengapa penting untuk memastikan bahwa proses fuzzifikasi dan defuzzifikasi dilakukan secara optimal, dan bagaimana pilihan metode defuzzifikasi dapat mempengaruhi hasil akhir dari sistem?</p>','created_at' => '2024-10-07 10:21:17','updated_at' => '2024-10-07 10:21:17'),
            array('id' => '290','materi_id' => '122','mahasiswa_id' => '64','judul' => 'Perbedaan Metode FIS Mamdani dan Sugeno','diskusi' => '<p>permisi teman2 saya ingin bertanya terkait metode fis sugeno dan mamdani nah pertanyaanya yaitu mengapa dalam metode Mamdani diperlukan proses defuzzifikasi, sedangkan pada metode Sugeno tidak??</p>','created_at' => '2024-10-07 10:33:29','updated_at' => '2024-10-07 10:33:29'),
            array('id' => '291','materi_id' => '123','mahasiswa_id' => '599','judul' => 'Fuzzy Inference System','diskusi' => '<p>Apa yang menjadi keunggulan metode Mamdani dalam sistem inferensi fuzzy jika dibandingkan dengan metode Sugeno, terutama dalam hal penanganan ketidakpastian dan kompleksitas? Lalu, dalam situasi atau aplikasi apa kita sebaiknya memilih Mamdani daripada Sugeno? Selain itu, apakah ada potensi kelemahan dari Mamdani yang perlu diperhatikan saat mengimplementasikannya dalam sistem nyata?</p>','created_at' => '2024-10-07 11:33:55','updated_at' => '2024-10-07 11:33:55'),
            array('id' => '292','materi_id' => '118','mahasiswa_id' => '393','judul' => 'Nama : Dini Ramadona NPM : G1F024050','diskusi' => '<p>Assalamualikum wr wb.</p>

          <p>Izin bertanya teman-teman, mbak, dan abang sekalian,&nbsp;Dalam contoh piramida bintang (Latihan 1.3), kita menggunakan nested loops. Bagaimana cara mengoptimalkan kode tersebut untuk mengurangi kompleksitas waktu?. Bisakah mengimplementasikan solusi yang hanya menggunakan satu loop?, Terimakasih..</p>','created_at' => '2024-10-07 14:35:49','updated_at' => '2024-10-07 14:35:49'),
            array('id' => '293','materi_id' => '117','mahasiswa_id' => '407','judul' => 'Assalamualaikum wr.wb  Nama : winda dwi salistianna  Npm : G1F024004  izin bertanya, apakah break dan continue itu penting dalam pemograman for dan while ?','diskusi' => '<p>Assalamualaikum wr.wb</p>

          <p>Nama : winda dwi salistianna</p>

          <p>Npm : G1F024004</p>

          <p>izin bertanya, apakah break dan continue itu penting dalam pemograman for dan while ?</p>','created_at' => '2024-10-09 08:54:27','updated_at' => '2024-10-09 08:54:27'),
            array('id' => '294','materi_id' => '118','mahasiswa_id' => '492','judul' => 'For While','diskusi' => '<p>Nama : Muhammad Hovid Arman&nbsp;</p>

          <p>NPM. : G1F024034</p>

          <p>Saya ingin bertanya, apa perbedaan paling mendasar antara for dan while?</p>','created_at' => '2024-10-10 06:05:37','updated_at' => '2024-10-10 06:05:37'),
            array('id' => '295','materi_id' => '117','mahasiswa_id' => '439','judul' => 'Perulangan:  for and while','diskusi' => '<p>Assalamualaikum warahmatullahi wabarakatuh&nbsp;</p>

          <p>Izin bertanya Bu,teman&quot;</p>

          <p>Dalam situasi apa sebaiknya menghindari penggunaan continue dalam kode pemrograman?</p>

          <p>Terima kasih&nbsp;</p>','created_at' => '2024-10-10 08:34:09','updated_at' => '2024-10-10 08:34:09'),
            array('id' => '296','materi_id' => '117','mahasiswa_id' => '439','judul' => 'Perulangan: for and while','diskusi' => '<p>Assalamualaikum warahmatullahi wabarakatuh&nbsp;</p>

          <p>Nama : Elyza silalahi&nbsp;</p>

          <p>NPM : G1F024007</p>

          <p>Izin bertanya Bu,teman&quot;</p>

          <p>Dalam situasi apa sebaiknya menghindari penggunaan continue dalam kode pemrograman?</p>

          <p>Terima kasih&nbsp;</p>','created_at' => '2024-10-10 08:40:43','updated_at' => '2024-10-10 08:40:43'),
          array('id' => '297','materi_id' => '106','mahasiswa_id' => '720','judul' => 'Operator Aritmetika','diskusi' => '<p>Operator aritmetika adalah simbol yang digunakan untuk melakukan operasi matematika pada variabel dan nilai dalam program.</p>','created_at' => '2024-10-10 16:47:40','updated_at' => '2024-10-10 16:47:40'),
  array('id' => '298','materi_id' => '117','mahasiswa_id' => '329','judul' => 'While dan do while','diskusi' => '<p>Assalamualaikum&nbsp;</p>

<p>Nama: Cut Fitriani&nbsp;</p>

<p>Npm: G1F024079&nbsp;</p>

<p>Izin bertanya,&nbsp; kapan sebaiknya menggunakan while dan do while?</p>','created_at' => '2024-10-10 22:47:01','updated_at' => '2024-10-10 22:47:01'),
  array('id' => '299','materi_id' => '118','mahasiswa_id' => '420','judul' => 'FOR dan WHILE Java','diskusi' => '<p>assalamu&#39;alaikum</p>

<p>izin bertanya teman-teman semua</p>

<p>saya sudah selesai mengerjakan sebelum tenggat waktu, tetapi website error dan setelah sudah tenggat waktu website baru bisa dibuka, namun jawaban sudah tidak bisa dikirim</p>

<p>bagaimana ya cara mengirimnya?</p>','created_at' => '2024-10-11 00:29:44','updated_at' => '2024-10-11 00:29:44'),
  array('id' => '300','materi_id' => '120','mahasiswa_id' => '703','judul' => 'himpunan fuzzy','diskusi' => '<p>Bagaimana cara menentukan fungsi keanggotaan yang tepat untuk suatu himpunan fuzzy tertentu?dan yang paling menguntungkan ?</p>','created_at' => '2024-10-11 16:17:24','updated_at' => '2024-10-11 16:17:24'),
  array('id' => '301','materi_id' => '106','mahasiswa_id' => '720','judul' => 'tipe data','diskusi' => '<p>Apakah yang dimaksus dengan tipe data?</p>','created_at' => '2024-10-12 14:07:56','updated_at' => '2024-10-12 14:07:56'),
  array('id' => '302','materi_id' => '121','mahasiswa_id' => '607','judul' => 'Fuzzy Inference System','diskusi' => '<p>Dalam konteks pengendalian, bagaimana FIS dapat digunakan untuk mengatur suhu ruangan?</p>','created_at' => '2024-10-12 16:06:06','updated_at' => '2024-10-12 16:06:06')
        );


        foreach ($datas as $data) {
            DB::table('diskusis')->insert($data);
        }
    }
}
