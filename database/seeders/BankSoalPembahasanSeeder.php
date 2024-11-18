<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSoalPembahasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // question_sets
        // SELECT id, question as pertanyaan, courseId as kelas_id, fileReviewType as level_berfikir, questionReviewText as pembahasan, created_at, updated_at FROM `question_sets` WHERE id > 241;
        $bankSoals = array(
            array('id' => '155','pertanyaan' => '<p>Diketahui nama identifier berikut:<br />
          <code>&nbsp; &nbsp;I.&nbsp; &nbsp;3nilai<br />
          &nbsp; &nbsp;II.&nbsp; INI_IDENTIFIER<br />
          &nbsp; &nbsp;III.&nbsp;a_b_<br />
          &nbsp; &nbsp;IV.&nbsp; identifier123empat</code><br />
          Pilihan penulisan identifier yang benar adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 11:22:50','updated_at' => '2022-08-09 11:43:49','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Penulisan identifier tidak memperbolehkan menggunakan angka di depan. Pilihan yang benar adalah pilihan II, III, dan IV dengan <code>INI_IDENTIFIER, a_b_, dan identifier123empat</code>.</p>'),
            array('id' => '156','pertanyaan' => '<p>Analisa<strong> </strong>pernyataan berikut mengenai variabel primitif<br />
          &nbsp; &nbsp; &nbsp;&nbsp;I.&nbsp; &nbsp;Variabel primitif mendekati kode mesin<br />
          &nbsp; &nbsp; &nbsp; II.&nbsp;&nbsp;Nilai yang disimpan dalam variabel primitif adalah nilai sebenarnya<br />
          &nbsp; &nbsp; &nbsp; III.&nbsp;Selama eksekusi program, akses variabel primitif lebih lambat daripada mengakses objek variabel non-primitif.<br />
          &nbsp; &nbsp; &nbsp; IV.&nbsp;Variabel primitif memiliki ukuran byte berbeda pada perangkat keras yang berbeda juga.<br />
          Seleksi pilihan yang benar adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 11:35:49','updated_at' => '2022-08-09 11:36:27','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pembahasan: Pilihan yang benar adalah I dan IV. Variabel primitif mendekati kode mesin, sehingga memiliki ukuran byte yang berbeda pada platform perangkat keras yang berbeda.</p>'),
            array('id' => '157','pertanyaan' => '<p>Diketahui deklarasi berikut</p>

          <p><code>int nilai = 8;</code></p>

          <p>Analisa kode berikut yang dapat mengubah nilai integer menjadi string dengan bilangan biner adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 11:43:26','updated_at' => '2022-08-22 15:40:02','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah <code>String str = Integer.toString(nilai, 2)</code>; karena perintah method <code>toString()</code> method akan mengembalikan nilai ke dalam tipe <code>String</code>.</p>'),
            array('id' => '158','pertanyaan' => '<p>Bila ingin mendefinisikan sebuah kelas untuk mewakili Balkon. Balkon tidak memiliki ketinggian karena berada di luar sehingga tingginya selalu sama (tak berhingga). Analisa jumlah minimum variabel/properti yang dapat Anda tentukan untuk mewakili dimensi Balkon.</p>','kelas_id' => NULL,'created_at' => '2022-08-09 11:46:36','updated_at' => '2022-08-09 11:46:36','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah lebar dan panjang. Karena balkon memiliki lebar dan panjang, dengan mengabaikan ketinggian yang tidak berhingga sehingga dua properti ini yang menjadi dimensi.</p>'),
            array('id' => '159','pertanyaan' => '<p>Perhatikan perintah berikut<br />
          <code>&nbsp; &nbsp; &nbsp;double x = (4.0f + (3.0)/(int)1.5) * (3/(int)4.0);</code></p>

          <p>Pilihlah hasil yang dihasilkan dari ekspresi Java tersebut!</p>','kelas_id' => NULL,'created_at' => '2022-08-09 11:49:47','updated_at' => '2022-08-09 11:49:47','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah 0.0 karena hasil perhitungan (3/(int)4.0) = 0 maka nilai yang dibagi dengan 0 akan menghasilkan nilai 0.0 dalam tipe data double.</p>'),
            array('id' => '160','pertanyaan' => '<p>Cermati pernyataan berikut:</p>

          <ol>
              <li>Konversi implisit mengkonversi secara otomatis tipe data kecil ke tipe data besar</li>
              <li>Konversi implisit mengkonversi secara otomatis tipe data besar ke tipe data kecil</li>
              <li>Konversi eksplisit menggunakan kata kunci cast untuk mengubah tipe data kecil ke tipe data besar</li>
              <li>Konversi eksplisit menggunakan kata kunci cast untuk mengubah data besar ke tipe data kecil</li>
          </ol>

          <p>Rekomendasi pilihan yang tepat adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 11:51:50','updated_at' => '2022-08-09 11:51:50','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Jawaban yang benar adalah pernyataan 1 Konversi implisit mengkonversi secara otomatis tipe data kecil ke tipe data besar dan pernyataan 4 Konversi eksplisit menggunakan kata kunci cast untuk mengubah data besar ke tipe data kecil.</p>'),
            array('id' => '161','pertanyaan' => '<p>Perhatikan potongan kode berikut</p>

          <ol>
              <li><code>integer = (int) 3.5;</code></li>
              <li><code>byte = 129;</code></li>
              <li><code>char var1 = &#39;L&#39;;</code></li>
              <li><code>short = 123456;</code></li>
          </ol>

          <p>Evaluasi deklarasi tipe data yang tepat adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 11:56:53','updated_at' => '2022-08-22 14:19:56','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Jawaban yang benar adalah pernyataan 1 <code>integer = (int) 3.5;</code> merupakan bentuk konversi eksplisit. Pilihan 3 <code>char var1 = &#39;\\u00B5&#39;;</code> benar menunjukkan karakter &micro;. Pilihan 2,&nbsp; <code>byte = 128</code>, salah karena maksimal tipe data byte adalah 127. Pilihan 4, <code>short = 123456</code>, salah karena maksimal tipe data <code>short </code>menyimpan data sampai 5 digit.</p>'),
            array('id' => '162','pertanyaan' => '<p>Perhatikan potongan kode berikut:<br />
          <code>&nbsp;&nbsp;I. (int) (5+ 5.0)<br />
          &nbsp;II. (double) 5+ 6</code></p>

          <p>Maka akan menghasilkan<br />
          &nbsp; &nbsp; A. Kode<code> I</code>&nbsp;menghasilkan 10.0 karena penjumlahan <code>INTEGER </code>dan <code>FLOAT</code><br />
          &nbsp; &nbsp; B. Kode&nbsp;<code>I</code> menghasilkan 10 karena penjumlahan dikonversi menjadi <code>INTEGER</code><br />
          &nbsp; &nbsp; C. Kode&nbsp;<code>II </code>menghasilkan 11.0 karena penjumlahan dikonversi menjadi <code>DOUBLE</code><br />
          &nbsp; &nbsp; D. Kode&nbsp;<code>II</code> menghasilkan &ldquo;5.06&rdquo; karena hasil dalam tipe <code>STRING</code></p>

          <p>Evaluasi hasil dari kode tersebut yang tepat adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 12:03:49','updated_at' => '2022-08-22 13:44:01','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah B dan D. Kode&nbsp; <code>I</code> menghasilkan 10 karena penjumlahan dikonversi menjadi <code>INTEGER</code>. Kode <code>II</code> menghasilkan 11.0 karena hasil dalam tipe <code>DOUBLE</code></p>'),
            array('id' => '163','pertanyaan' => '<p>Bandingkan pernyataan berikut<br />
          &nbsp;<code>&nbsp; I. Nama kelas Java harus sama dengan nama file</code><br />
          <code>&nbsp; II. Setiap kelas harus memiliki method utama</code><br />
          &nbsp;<code>III. Nama method Java harus sama dengan nama kelas</code><br />
          &nbsp; &nbsp;<code>IV.&nbsp;</code>&nbsp;Setiap method harus memiliki variabel</p>

          <p>Simpulan pilihan yang paling akurat, adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 12:09:55','updated_at' => '2022-08-22 14:34:06','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah <code>I dan II&nbsp;Nama kelas Java harus sama dengan nama file dan&nbsp;Setiap kelas harus memiliki method utama. Nama method tidak harus sama dengan nama kelas, dan setiap method tidak harus memiliki variabel.</code></p>'),
            array('id' => '164','pertanyaan' => '<p>Bacalah pernyataan berikut:</p>

          <ol>
              <li>Nama kelas yang bersifat <code>public</code>, tidak dapat diakses langsung dari dalam kelas lainnya</li>
              <li>Nama kelas yang bersifat <code>public</code>, dapat diakses langsung di kelas lain</li>
              <li>Variabel yang bersifat <code>private</code>, tidak dapat diakses langsung dari kelas lain.</li>
              <li>Variabel yang bersifat <code>private</code>, dapat diakses langsung di kelas lain</li>
          </ol>

          <p>Simpulan pernyataan yang paling benar adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 12:17:57','updated_at' => '2022-08-09 12:19:53','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan 2 dan 3 yang benar karena nama kelas yang bersifat public, maka dapat mengaksesnya langsung di kelas lain. Pilihan yang salah adalah nama kelas yang bersifat <code>public</code>, maka dapat mengaksesnya langsung dari dalam kelas lainnya. Pilihan variabel yang bersifat <code>private</code>, maka tidak dapat mengaksesnya langsung dari kelas lain.</p>'),
            array('id' => '165','pertanyaan' => '<p>Cermati tipe data berikut:</p>

          <ol>
              <li><code>int&nbsp;w&nbsp;=&nbsp;(long)888.8;</code></li>
              <li><code>byte&nbsp;x&nbsp;=&nbsp;(int)100L;</code></li>
              <li><code>long&nbsp;y&nbsp;=&nbsp;(byte)100;</code></li>
              <li><code>byte&nbsp;z&nbsp;=&nbsp;(byte)100L;</code></li>
          </ol>

          <p>Kombinasi konversi tipe data yang tepat adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 12:23:47','updated_at' => '2022-08-09 12:23:47','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pernyataan (3), dan (4) adalah pilihan yang tepat. Pernyataan (1) salah karena ketika angka <code>floating-point</code> (dalam kasus ini <code>double</code>) tidak dapat menggunakan <code>long</code>, akan menyederhanakan nilai setelah decimal. Pernyataan (3) dan (4) benar karena <code>long </code>dapat menjadi <code>byte</code>. Jika panjangnya melebihi 127, maka akan kehilangan bit yang paling signifikan (paling kiri). Pernyataan (2) tidak akan bekerja, karena dari <code>byte </code>yang lebih rendah tidak dapat menjadi <code>int</code>.</p>'),
            array('id' => '166','pertanyaan' => '<p>Cermati ekspresi tipe data berikut:<br />
          <code>&nbsp; I.&nbsp;int x = 3<br />
          &nbsp;II.&nbsp;double x = 4.66f;<br />
          III.&nbsp;long x = (byte) 4;<br />
          &nbsp;IV. float x = 3.5;</code></p>

          <p>Pilihan ekspresi yang tepat adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 12:27:36','updated_at' => '2022-08-09 12:27:36','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah <code>float x = 3.5</code> dan <code>int x = 3</code>. Tipe data <code>float </code>adalah a adalah 32-bit, angka <code>floating point </code>memiliki presisi tunggal.&nbsp;Nilai <code>float min = ~1.4E-45</code> dan&nbsp;Nilai<code> float max = ~3.4028235E38.</code></p>'),
            array('id' => '167','pertanyaan' => '<p>Perhatikan pernyataan berikut</p>

          <ol>
              <li>Ekspresi&nbsp;&nbsp;<code>(int) (5 + 5.0) </code>&nbsp;akan menghasilkan nilai 10 dengan tipe data <code>int</code></li>
              <li>Ekspresi<code> (7/2) </code>akan menghasilkan nilai 3 dengan tipe data <code>float</code></li>
              <li>Ekspresi<code> (2.5f +3.0 &ndash; 1.5f) </code>akan menghasilkan nilai 4.0 dengan tipe data <code>int</code></li>
              <li>Ekspresi&nbsp;&nbsp;<code>(9+ double(4)) </code>akan menghasilkan nilai 13.0 dengan tipe data <code>double</code></li>
          </ol>

          <p>Susunan pernyataan ekspresi dan alasan tipe data yang benar adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 12:32:41','updated_at' => '2022-08-09 12:32:41','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pernyataan 1 benar karena ekspresi <code>(int) (5 + 5.0) </code>&nbsp;akan menghasilkan nilai 10 dengan tipe data <code>int</code>. Pernyataan 2 salah, <code>(7/2) </code>akan menghasilkan nilai 3 dengan tipe data <code>float</code>. Pernyataan 3 salah karena <code>(2.5f +3.0 &ndash; 1.5f) </code>akan menghasilkan nilai 4.0 dengan tipe data double bukan&nbsp;<code>int</code>. Pernyataan 4 benar, karena <code>(9+ double(4)) </code>akan menghasilkan nilai 13.0 dengan tipe data <code>double</code></p>'),
            array('id' => '168','pertanyaan' => '<p>Perhatikan potongan kode berikut</p>

          <ol>
              <li><code>public static void main(String [] args) {</code></li>
              <li><code>public class data {</code></li>
              <li><code>System.out.println(s.charAt(2));</code></li>
              <li><code>System.out.println(s(2));</code></li>
              <li><code>System.out.println(s.indexOf(2));</code></li>
              <li><code>int s = 012345;</code></li>
              <li><code>String s = &ldquo;012345&rdquo;;</code></li>
              <li><code>} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }</code></li>
          </ol>

          <p>Susunan kode untuk mengambil nilai angka 2 dari teks &ldquo;012345&rdquo; adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 12:35:28','updated_at' => '2022-08-09 12:35:28','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah</p>

          <p><code>public class data {<br />
          &nbsp; &nbsp;public static void main(String [] args) {<br />
          &nbsp; &nbsp; &nbsp;&nbsp;String s = &ldquo;012345&rdquo;;<br />
          &nbsp; &nbsp; &nbsp;&nbsp;System.out.println(s.charAt(2));<br />
          }&nbsp; &nbsp; }</code></p>

          <p>Karena karakter 2 pada teks berada pada indeks ke 2 maka outputnya adalah 2.</p>'),
            array('id' => '169','pertanyaan' => '<p>Cermati potongan kode berikut</p>

          <ol>
              <li><code>String S1 = &quot;universitas bengkulu&quot;; </code></li>
              <li><code>String S2 = &quot;oke&quot;;</code></li>
              <li><code>String Frasa1 = S1.substring(S1.indexOf(&quot;i&quot;), S1.indexOf(&quot;e&quot;));</code></li>
              <li><code>String Frasa1 = S1.substring(S1.indexOf(&quot;v&quot;), S1.indexOf(&quot;b&quot;));</code></li>
              <li><code>String Frasa2 = S2.substring(1);</code></li>
              <li><code>String Frasa2 = S2.substring(2);</code></li>
              <li><code>System.out.println(Frasa1 + Frasa2);</code></li>
          </ol>

          <p>Apabila ingin membuat luaran teks &ldquo;versitas ke&rdquo; maka susunan kode yang benar adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 12:37:36','updated_at' => '2022-08-09 12:37:36','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah I &ndash; II &ndash; III &ndash; IV &ndash; V &nbsp;karena</p>

          <p><code>S1.substring(S1.indexOf(&quot;v&quot;), S1.indexOf(&quot;b&quot;)) </code>= mengambil teks S1 dari indeks huruf v sampai dengan indeks huruf b = versitas</p>

          <p><code>S2.substring(1)</code> = mengambil teks S2 dari indeks ke 1 sampai akhir = ke<br />
          Sehingga hasil dari Frasa = &rdquo;versitas ke&rdquo;</p>'),
            array('id' => '170','pertanyaan' => '<p>Cermati pernyataan berikut:<br />
          <code>x = x + y;<br />
          y = x - y;<br />
          x = x - y;</code><br />
          Analisa pernyataan yang paling menggambarkan pengaruh pernyataan-pernyataan ini terhadap variabel <code>x</code> dan <code>y</code>!</p>','kelas_id' => NULL,'created_at' => '2022-08-27 21:48:31','updated_at' => '2022-08-27 21:48:31','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang paling benar adalah nilai variabel dapat ditukar. Nilai <code>x</code> dan <code>y</code> tidak memiliki nilai awal sehingga dapat ditukar tanpa mempengaruhi variabel lainnya.&nbsp;</p>'),
            array('id' => '171','pertanyaan' => '<p>Cermati pernyataan berikut:<br />
          &nbsp; &nbsp;I.&nbsp;&nbsp; &nbsp;<code>x || !x</code><br />
          &nbsp; II.&nbsp;&nbsp; &nbsp;<code>x &amp;&amp; x</code><br />
          &nbsp;III.&nbsp;&nbsp; &nbsp;<code>x || x</code><br />
          &nbsp;IV.&nbsp;&nbsp;<code>&nbsp;x &amp;&amp; !x</code><br />
          Bila <code>x = true</code>, maka analisa ekspresi logika yang selalu menghasilkan nilai <code>true</code>, adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:29:37','updated_at' => '2022-08-27 22:29:37','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah II yaitu &nbsp;<code>x &amp;&amp; x</code> dan III pernyataan <code>x || x</code></p>'),
            array('id' => '172','pertanyaan' => '<p>Bila diketahui ekspresi berikut:<br />
          <code>I. &nbsp; &nbsp;0 &lt; 10 &nbsp; &amp;&amp; &nbsp; 20 &lt; 10<br />
          II. &nbsp; 50 &lt; 10 &nbsp; || &nbsp; 10 &lt; 20</code><br />
          &nbsp; &nbsp; Analisalah luaran dari ekspresi tersebut!</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:32:15','updated_at' => '2022-08-29 16:54:42','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah Ekspresi I bernilai <code>false</code>, ekspresi II bernilai <code>true</code></p>'),
            array('id' => '173','pertanyaan' => '<p>Apabila diketahui ekspresi <code>A= 2*10-2/2+3.</code> Analisa urutan prioritas yang tepat dan hasil dari A!</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:34:53','updated_at' => '2022-08-29 16:55:15','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang tepat adalah urutan prioritas ekspresi<code> A = ( (2*10) &ndash; (2/2) &nbsp;)+ 3</code> diperoleh hasil 22. Pada ekspresi <code>A= 2*10-2/2+3 </code>tidak memiliki tanda () maka urutan pengerjaan dimulai dari prioritas * dan / dimulai dari kiri, kemudian tanda &ndash; dan + dan dimulai dari kiri.&nbsp;</p>'),
            array('id' => '174','pertanyaan' => '<p>Evaluasi ekspresi Logika boolean berikut untuk menguji count adalah bilangan prima antara 1 dan 10<br />
          <code>count == 1 &amp;&amp; count == 2 &amp;&amp; count == 3 &amp;&amp; count == 5 &amp;&amp; count == 7</code><br />
          Pilihlah pernyataan berikut yang paling menggambarkan kode ini</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:38:41','updated_at' => '2022-08-27 22:38:41','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah hasilnya selalu salah, dan tanda <code>&amp;&amp;</code> harus diubah menjadi <code>||</code>. &nbsp;Ekspresi Boolean <code>||</code> bermakna atau&nbsp;</p>'),
            array('id' => '175','pertanyaan' => '<p>Evaluasi ekspresi Logika Boolean berikut yang selalu <code>true </code>yaitu</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:40:17','updated_at' => '2022-08-27 22:40:25','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar yaitu<code> 10 &lt;= x || !( x &gt;= 10 )</code> karena <code>!(x &gt;= 10)</code> maknanya sama dengan <code>&nbsp;10 &lt;= x.</code></p>'),
            array('id' => '176','pertanyaan' => '<p>Apabila diketahui ekspresi program <code>A &amp;&amp; !D || C</code> akan dievaluasi dengan cara<br />
          &nbsp; I.&nbsp;&nbsp; &nbsp;<code>A &amp;&amp; !D</code><br />
          &nbsp;II.&nbsp;&nbsp; <code>!D</code><br />
          III.&nbsp;&nbsp; <code>!D || C</code><br />
          &nbsp;&nbsp; &nbsp;Susunan urutan evaluasi berurutan dari pertama hingga terakhir adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:43:38','updated_at' => '2022-08-27 22:43:38','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah<code> II &ndash; I &ndash; III.&nbsp;</code><br />
          Urutan evaluasi dalam program Java yaitu &nbsp;<code>! , &amp;&amp;</code> dan kemudian<code> ||</code>&nbsp;<br />
          Apabila diketahui ekspresi program yaitu <code>&nbsp;A &amp;&amp; !D || C</code> maka pilihan !D adalah yang pertama dievaluasi dari ekspresi yang diberikan.</p>'),
            array('id' => '177','pertanyaan' => '<p>Evaluasi ekspresi Logika Boolean <code>! (A || B) </code>yang ekivalen dengan ekspresi berikut</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:45:33','updated_at' => '2022-08-27 22:45:33','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Jika kita memasukkan empat opsi untuk pasangan terurut (A, B) dari (Benar, Benar), (Benar, Salah), (Salah, Benar) dan (Salah, Salah), kita melihat bahwa ekspresi yang diberikan HANYA benar untuk (Salah, Salah). Dari yang diberikan, hanya pilihan<code> !A &amp;&amp; !B </code>yang HANYA benar untuk (Salah, Salah), karena ini adalah AND. Jadi, yang benar jawabannya adalah pilihan <code>!A &amp;&amp; !B</code>. (Catatan: Ini adalah aplikasi dari Hukum DeMorgan.)</p>'),
            array('id' => '178','pertanyaan' => '<p>Perhatikan ekspresi aritmatika berikut<br />
          (Asumsikan bahwa <code>x</code> dan <code>y</code> adalah bilangan bulat variabel yang telah diinisialisasi dengan nilai yang diinginkan.)<br />
          &nbsp; I.&nbsp; &nbsp;<code>((x &gt; 0) &amp;&amp; (y &gt; 0)) || ((x &gt; 0) &amp;&amp; (y &lt; 0))</code><br />
          &nbsp;II.&nbsp; &nbsp;&nbsp;<code>x != y</code><br />
          III.&nbsp;&nbsp; <code>(x &gt; 0) &amp;&amp; (y != 0)</code><br />
          IV.&nbsp; &nbsp;<code>(x &gt; 0) &amp;&amp; (x + y != x)</code><br />
          Evaluasi ekspresi Logika Boolean berikut yang bernilai ekivalen adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:47:43','updated_at' => '2022-08-27 22:48:19','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Ketika kita melihat ekspresi pertama, kita melihat bahwa x &gt; 0 adalah persyaratan, karena ini pasti benar untuk memenuhi salah satu dari klausa yang lebih besar. Perhatikan bahwa setelah kita memaksa x &gt; 0, selama y bukan 0, yang pertama ekspresi benar, karena atau memungkinkan salah satu opsi. Setelah kita memilikinya, kita dapat melihat pilihan lain. Pilihan kedua tidak setara karena bisa saja menggunakan <code>x = -3, y = 4 </code>untuk menunjukkan bahwa (i) dan (ii) berbeda. Dalam hal ini, (i) adalah salah sedangkan (ii) benar. Perhatikan bahwa (iii) persis seperti yang kita tentukan (i). Terakhir, perhatikan bahwa <code>x + y != x</code> ekivalen dengan <code>y != 0</code>, yang dapat kita tunjukkan dengan mengurangkan x dari kedua sisi cek. Pilihan jawaban yang benar adalah i, iii, iv.<br />
          &nbsp;</p>'),
            array('id' => '179','pertanyaan' => '<p>Perhatikan ekspresi Logika Boolean berikut.<br />
          &nbsp;I.&nbsp; &nbsp;<code>A &amp;&amp; B</code><br />
          II.<code> !A &amp;&amp; !B</code><br />
          Evaluasilah pernyataan yang paling menggambarkan hubungan antara nilai yang dihasilkan ekspresi I dan ekspresi II!</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:50:49','updated_at' => '2022-08-29 16:46:12','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah jika nilai A = true dan nilai B = true maka hasil ekspresi I = true dan hasil ekspresi II = false.</p>'),
            array('id' => '180','pertanyaan' => '<p>Diketahui variabel berikut<br />
          <code>int tahun &nbsp;= 2000:<br />
          int bulan = 11;<br />
          int hari &nbsp; = 1;</code><br />
          Susunlah kembali dari ekspresi Logika boolean berikut yang tidak menghasilkan pengembalian nilai karena ekspresi tidak lengkap?</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:53:42','updated_at' => '2022-08-27 22:53:42','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah <code>tahun == 2000 &amp;&amp; bulan == 11 &amp;&amp; hari == 22&nbsp;</code>karena kondisi ekspresi memiliki tiga bagian dan ketiga bagian benar berarti seluruh ekspresi benar. Pada pilihan <code>tahun == 1999 || tahun == 2000 || tahun == 2001, year==1999,</code> salah sehingga eksekusi lebih lanjut akan dihentikan dan akan mengembalikan <code>False</code>. Pilihan tahun &gt; 2001 &amp;&amp; tahun &lt; 2020, setengah dari ekspresi adalah Benar dan setengah lainnya adalah pernyataan atau. Pilihan <code>bulan == 11 &amp;&amp; hari == 1 || bulan == 12 &amp;&amp; hari == 1</code>, ekspresi memiliki tiga bagian yang digabungkan menggunakan <code>&amp;&amp;</code>. Namun bagian pertama benar dan bagian kedua salah sehingga tidak ada lagi eksekusi lebih lanjut sehingga ekspresi kembali salah.</p>'),
            array('id' => '181','pertanyaan' => '<p>Perhatikan ekspresi berikut:<br />
          !(n &gt; 11 &amp;&amp; n &lt;= 22)<br />
          Diketahui nilai n = 11.<br />
          Rancanglah ekspresi di bawah ini yang sama bernilai true dengan ekspresi di atas!</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:55:39','updated_at' => '2022-08-29 16:24:38','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Ekspresi Boolean a &amp;&amp; b setara dengan ekspresi ! (!a || !b). Pilihan yang benar adalah <code>n &lt;= 11 || n &gt; 22</code></p>'),
            array('id' => '182','pertanyaan' => '<p>Desainlah pernyataan berikut ini yang akan bernilai <code>true </code>hanya jika ekspresi <code>boolean A, B, dan C</code> semuanya <code>false</code>!</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:58:49','updated_at' => '2022-08-27 22:58:49','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah <code>!(A || B || C)</code>. Agar <code>!(A || B || C)</code> benar, <code>(A || B || C) </code>harus bernilai false. Hal ini hanya akan terjadi jika A, B, dan C semuanya false. Pilihan<code> !A &amp;&amp; !(B &amp;&amp; !C) </code>bernilai true jika A dan B true dan C true. Dalam pilihan<code> !A || !B || !C,</code> jika salah satu dari A, B, atau C salah, ekspresi boolean bernilai true. Dalam pilihan <code>!(A &amp;&amp; B &amp;&amp; C)</code>, jika salah satu dari A, B, atau C false, ekspresi boolean bernilai true karena kita memiliki <code>!(false)</code>. Semua yang diperlukan agar pilihan E bernilai true adalah agar A salah. Karena <code>true||(any)</code> bernilai benar, baik B dan C dapat bernilai true atau false.</p>'),
            array('id' => '183','pertanyaan' => '<p>Diketahui variabel berikut ini mewakili jam dan menit dalam jangkauan nilai yang valid:<br />
          <code>int jam; // jangkauan: 0 - 23<br />
          int menit; // jangkauan: 0 &ndash; 59</code><br />
          Rancanglah pernyataan dari berikut ini yang menyatakan interval dari pukul 7:15 hingga pukul 9:15!</p>','kelas_id' => NULL,'created_at' => '2022-08-27 23:00:52','updated_at' => '2022-08-27 23:00:52','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah<code> jam == 7 &amp;&amp; menit &gt;= 15 || jam == 8 || jam == 9 &amp;&amp; menit &lt;= 15</code>. Ekspresi Boolean ini bermakna dimulai dari jam 7.15 sampai dengan jam 9.15 termasuk jam 8 didalamnya.</p>'),
            array('id' => '184','pertanyaan' => '<p>Diketahui bahwa variabel Logika <code>boolean a</code> dan <code>b</code> telah dideklarasikan dan diinisialisasi. Perhatikan ekspresi berikut.<br />
          <code>! (!(a &amp;&amp; b) || (c || !d) )</code><br />
          Rancanglah pernyataan ekspresi yang paling menggambarkan kondisi di mana ekspresi akan dievaluasi menjadi benar!</p>','kelas_id' => NULL,'created_at' => '2022-08-27 23:02:34','updated_at' => '2022-08-29 16:27:01','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah<code> ( a &amp;&amp; b) &amp;&amp; ( !c &amp;&amp; d )</code></p>'),
            array('id' => '185','pertanyaan' => '<p>Bacalah pernyataan berikut<br />
          &nbsp; I. &nbsp;Nama kelas yang <code>public</code>, dapat diakses langsung dari kelas lain<br />
          &nbsp;II.&nbsp; Nama kelas yang <code>public</code>, tidak dapat diakses langsung dari kelas lain<br />
          III.&nbsp; Nama kelas yang <code>private</code>, tidak dapat diakses langsung dari kelas lain.<br />
          Pernyataan berikut yang benar yakni</p>','kelas_id' => NULL,'created_at' => '2022-09-09 22:14:44','updated_at' => '2022-09-09 22:14:44','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah I, III semua yang bersifat public dapat diakses langsung dari kelas lain. Pilihan III benar, karena nama kelas yang bersifat private, tidak dapat diakses langsung dari kelas lain.</p>'),
            array('id' => '186','pertanyaan' => '<p>Bila diketahui potongan kode berikut:</p>

          <p><code>public class Kelas {<br />
          &nbsp; &nbsp;public static void main (String args []) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; B objek = new B();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; objek.i =1;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; objek.j =2;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; objek. tampil();<br />
          &nbsp; &nbsp;} &nbsp; }</code></p>

          <p><code>class A{&nbsp;<br />
          &nbsp;&nbsp; &nbsp;int i;<br />
          }</code></p>

          <p><code>class B extends A{<br />
          &nbsp;&nbsp; &nbsp;int j;<br />
          &nbsp;&nbsp; &nbsp;void tampil() {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;super.i = j+1;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(j + &quot; &quot; +i);<br />
          } &nbsp; }</code><br />
          Analisis luaran dari potongan kode tersebut</p>','kelas_id' => NULL,'created_at' => '2022-09-09 22:17:13','updated_at' => '2022-09-09 22:17:13','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah 2 &nbsp;3. Karena class B akan mengambil objek 1 dan objek 2 dengan nilai j = 2 dan i = 3.&nbsp;</p>'),
            array('id' => '187','pertanyaan' => '<p>Cermati pernyataan berikut:<br />
          &nbsp; I.&nbsp;&nbsp; &nbsp;Setiap <code>class </code>hanya boleh memiliki satu <code>constructor</code><br />
          &nbsp;II.&nbsp;&nbsp; &nbsp;Setiap <code>class </code>boleh memiliki lebih dari satu <code>constructor</code><br />
          III.&nbsp;&nbsp; &nbsp;Konstuktor boleh memiliki nilai <code>return </code>maka tidak boleh menggunakan <code>void</code><br />
          IV.&nbsp;&nbsp; &nbsp;Konstruktor tidak memiliki nilai <code>return </code>maka boleh menggunakan <code>void</code><br />
          Analisis pernyataan <code>constructor </code>yang tepat dari sebuah <code>class </code>! &nbsp;</p>','kelas_id' => NULL,'created_at' => '2022-09-09 22:20:47','updated_at' => '2022-09-09 22:20:47','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah setiap kelas boleh memiliki lebih dari satu konstruktor dan konstruktor tidak memiliki nilai return maka boleh menggunakan void.&nbsp;</p>'),
            array('id' => '188','pertanyaan' => '<p>Bacalah potongan kode berikut ini</p>

          <p><code>public class MainClass<br />
          {<br />
          &nbsp; &nbsp;&nbsp;void hitung(int a)<br />
          &nbsp;&nbsp; &nbsp;{<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(1);<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void hitung(int a, int b)<br />
          &nbsp;&nbsp; &nbsp;{<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(2);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code><br />
          Analisa kode tersebut termasuk dalam</p>','kelas_id' => '25','created_at' => '2022-09-09 22:22:51','updated_at' => '2022-09-17 23:27:25','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah method overloaded, karena memiliki nama method hitung yang sama. Namun dengan isi variabel yang berbeda sehingga overloaded. Sedangkan method duplicated memiliki nama method yang sama dan nama variabel yang sama juga seperti array.</p>'),
            array('id' => '189','pertanyaan' => '<p>Perhatikan kode Java berikut</p>

          <p><code>public class A{<br />
          &nbsp; private static int x = 0;<br />
          &nbsp; private static void ubah(int x) {<br />
          &nbsp; x = 3;<br />
          }<br />
          public static void main (String[] args) {<br />
          &nbsp; ubah(3);<br />
          &nbsp; System.out.println(x); &nbsp; }<br />
          }</code><br />
          Pilihlah nilai mana yang dicetak ketika metode main dijalankan?</p>','kelas_id' => '25','created_at' => '2022-09-09 22:25:07','updated_at' => '2022-09-17 23:27:07','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Jawaban yang benar adalah 0, karena program akan memanggil nilai x = 0 dengan bentuk variabel private static int x = 0;. Sedangkan private static void ubah(int x) tidak dapat mengembalikan luaran ubah karena berbentuk private method.&nbsp;<br />
          &nbsp;</p>'),
            array('id' => '190','pertanyaan' => '<p>Bila kelas A menjadi subkelas dari kelas B. A() dan B() adalah konstruktor untuk kelas-kelas.<br />
          Bila m() menjadi method <code>public </code>yang didefinisikan di kelas A dan m() menjadi method <code>public </code>yang didefinisikan di kelas B juga (jadi metode m() di kelas A menggantikan method m() di kelas B).<br />
          Perhatikan potongan kode berikut:<br />
          <code>A objekA = new A();<br />
          B objekB = (B) objekA;<br />
          objekB.m();</code><br />
          Kesimpulan pernyataan yang benar adalah&nbsp;</p>','kelas_id' => '25','created_at' => '2022-09-09 22:27:00','updated_at' => '2022-09-17 23:26:54','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah tidak ada kesalahan dan dalam pernyataan terakhir, metode m() dari kelas A dipanggil. Hal ini karena m() mengambil dari kelas A yang bersifat public.</p>'),
            array('id' => '191','pertanyaan' => '<p>Perhatikan potongan kode berikut</p>

          <p><code>public class A {<br />
          &nbsp; &nbsp; static void m1() { System.out.println(&quot;m1&quot;); }<br />
          &nbsp; &nbsp;static void m2() { System.out.println(&quot;m2&quot;); }<br />
          public static void main (String[] args) {<br />
          &nbsp; m1(); // Baris 1<br />
          &nbsp; m2(); // Baris 2<br />
          }&nbsp;&nbsp;}</code></p>

          <p>Evaluasi baris mana yang memiliki kesalahan ketika dikompilasi!</p>','kelas_id' => '25','created_at' => '2022-09-09 22:29:05','updated_at' => '2022-09-17 23:26:33','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah Baris 1 and Baris 2. Pemanggilan kompilasi sebaiknya memanggil kelasnya juga A.m1(); atau A.m2();</p>'),
            array('id' => '192','pertanyaan' => '<p>Perhatikan potongan kode berikut</p>

          <p><code>public class Kelas {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; private void m1() { System.out.println(&quot;M1&quot;); &nbsp;}<br />
          &nbsp; &nbsp; &nbsp; &nbsp; public void m2() { System.out.println(&quot;M2&quot;); }<br />
          &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; public class A extends Kelas { }<br />
          &nbsp;&nbsp; &nbsp; &nbsp; public void A() {}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Kelas objekB = new Kelas();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;objekB.m1(); // Baris 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;objekB.m2(); // Baris 2<br />
          &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          }</code></p>

          <p>Evaluasi baris mana yang memiliki kesalahan ketika dikompilasi!</p>','kelas_id' => '25','created_at' => '2022-09-09 22:31:29','updated_at' => '2022-09-17 23:26:25','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah baris 1 karena tipe variabel private sehingga tidak dapat diakses dari luar kelas.&nbsp;</p>'),
            array('id' => '193','pertanyaan' => '<p>Perhatikan kelas berikut</p>

          <p><code>public class Kelas<br />
          {<br />
          public void MethodSatu(int satu)<br />
          &nbsp; &nbsp; { / implementasi tidak ditampilkan / }<br />
          publics void MethodSatu (int satu, int dua)<br />
          &nbsp; &nbsp; &nbsp;{ / implementasi tidak ditampilkan / }<br />
          public void MethodSatu (int satu, String dua)<br />
          &nbsp; &nbsp; { / implementasi tidak ditampilkan / }<br />
          }</code></p>

          <p>Bila diketahui method berikut:<br />
          &nbsp; I. <code>public void MethodSatu (int nilai)</code><br />
          &nbsp;II. <code>public void MethodSatu (String satu, int dua)</code><br />
          III. <code>public void MethodSatu (int satu, int dua, int tiga)</code></p>

          <p>Rekomendasikan method yang dapat ditambahkan ke kelas MethodSatu tanpa menyebabkan kesalahan kompilasi!</p>','kelas_id' => '25','created_at' => '2022-09-09 22:34:58','updated_at' => '2022-09-17 23:26:18','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah II dan III saja. di kelas: MethodSatu {}. Informasi public void MethodSatu (int satu){} dan public void MethodSatu (int nilai){}. Kedua metode ini dikatakan duplikat dan akan menyebabkan kesalahan kompilasi. Jadi, void MethodSatu (int nilai){} tidak bisa menjadi bagian dari kelas SuatuMethod {}. Apabila seluruh method tidak duplikat maka public void MethodSatu (int satu, String dua){} dan public void MethodSatu (String satu, int dua){} &nbsp;hampir sama tetapi urutan parameternya berbeda sehingga tidak duplikat.</p>'),
            array('id' => '194','pertanyaan' => '<p>Apabila diketahui potongan kode berikut:</p>

          <p><code>class NPMMahasiswa {<br />
          private String id;<br />
          &nbsp; public NPMMahasiswa( String newid) {&nbsp;<br />
          &nbsp; &nbsp; id = newid;<br />
          &nbsp; }</code></p>

          <p><code>&nbsp; public String getID() { return id; }<br />
          &nbsp; public boolean equals(NPMMahasiswa otherid) {<br />
          &nbsp; &nbsp; &nbsp;return id.equals(otherid.getID());<br />
          }&nbsp;}</code></p>

          <p><code>Luaran dari kode:<br />
          NPMMahasiswa s1 = new NPMMahasiswa(&quot;G1A004003&quot;);<br />
          NPMMahasiswa s2 = new NPMMahasiswa(&quot;G1A004003&quot;);<br />
          boolean result1 = s1 == s2;<br />
          boolean result2 = s1.equals(s2);<br />
          System.out.println(result1);<br />
          System.out.println(result2);</code></p>

          <p>Evaluasi luaran kode yang benar adalah</p>','kelas_id' => '25','created_at' => '2022-09-09 22:37:55','updated_at' => '2022-09-17 23:26:11','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah false true. String s1.equals(s2) adalah fungsi yang mengembalikan nilai boolean (true atau false). Fungsi ini akan menghasilkan true jika s2 sama dengan s1, dan salah jika tidak. Kesamaan yang diuji adalah kesamaan persis baik kapitalnya maupun urutan huruf-hurufnya.&nbsp;<br />
          Operator == fungsinya untuk membandingkan nilai dua referensi objek untuk melihat apakah merujuk ke contoh String yang sama &nbsp;Jika nilai kedua referensi objek &quot;merujuk ke&quot; contoh String yang sama maka hasil dari ekspresi boolean akan menjadi true. Jika, di sisi lain, nilai dari kedua referensi objek &quot;merujuk ke&quot; instance String yang berbeda (meskipun kedua instance String memiliki &quot;nilai&quot; yang identik, yaitu, isi array karakter dari setiap instance String adalah sama) hasil dari ekspresi boolean akan menjadi false.&nbsp;<br />
          &nbsp;</p>'),
            array('id' => '195','pertanyaan' => '<p>Kendaraan memiliki beragam jenis, seperti kendaraan beroda dua (motor) dan beroda empat (mobil). Semua kendaraan dapat berjalan dan menggunakan bahan bakar bensin. Namun, kendaraan beroda dua hanya dapat mengangkut dua orang penumpang. Kendaraan beroda empat dapat mengangkut empat orang penumpang.&nbsp;</p>

          <p>Diketahui potongan kode berikut:<br />
          &nbsp; &nbsp; I.&nbsp;&nbsp; &nbsp;<code>class Kendaraan</code>&nbsp;<br />
          &nbsp; &nbsp;II.&nbsp;&nbsp; &nbsp;<code>class Motor</code> &nbsp;<br />
          &nbsp; III.&nbsp;&nbsp; &nbsp;<code>class Mobil</code> &nbsp;<br />
          &nbsp; IV.&nbsp; &nbsp;&nbsp;<code>class Kendaraan extends Motor</code><br />
          &nbsp; &nbsp;V.&nbsp;&nbsp; &nbsp;<code>class Motor extends Kendaraan</code><br />
          &nbsp; VI.&nbsp;&nbsp; &nbsp;<code>class Motor extends Mobil</code><br />
          &nbsp;VII.&nbsp;&nbsp; &nbsp;<code>void berjalan ()</code><br />
          VIII.&nbsp;&nbsp; &nbsp;<code>void penumpang()</code></p>

          <p>Desain kode yang tepat berdasarkan informasi yang diberikan adalah</p>','kelas_id' => '25','created_at' => '2022-09-10 08:57:18','updated_at' => '2022-09-17 23:26:05','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah I &ndash; VII &ndash; V &ndash; VIII. Karena kelas paling umum menjadi super class atau induk kelas yaitu class Kendaraan. Kelas yang lebih spesifik menjadi anak atau turunan dari kelas induk, sehingga kelas anak adalah class Motor dan class Mobil. Kelas induk memiliki method umum yang dapat diakses oleh seluruh kelas turunannya yaitu <code>void berjalan()</code>. Kelas anak memiliki method yang spesifik hanya dimiliki oleh objek itu sendiri yaitu <code>void penumpang() </code>dengan jumlah penumpang motor dan mobil yang berbeda.</p>'),
            array('id' => '196','pertanyaan' => '<p>Rekonstruksi deklarasi dari katakanHalo() dari kelas utama berikut ini tidak benar.&nbsp;</p>

          <p><code>public static void main (String[] args) {<br />
          &nbsp;&nbsp; &nbsp;katakanHalo();<br />
          }<br />
          private void katakanHalo(){<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&ldquo;Halo semua, semangat!&rdquo;);&nbsp;<br />
          }&nbsp;</code></p>

          <p>Pilih susunan deklarasi <code>katakanHalo() </code>yang benar dari potongan kode berikut:</p>','kelas_id' => '25','created_at' => '2022-09-10 08:59:21','updated_at' => '2022-09-17 23:25:59','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah <code>private void static katakanHalo()</code> karena method <code>static </code>hanya dapat memanggil method <code>static </code>lainnya</p>'),
            array('id' => '197','pertanyaan' => '<p>Cermati potongan kode method:<br />
          <code>public static void fun(String x)</code></p>

          <p>Apabila kita memiliki pilihan deklarasi pemanggilan method berikut<br />
          &nbsp; I. &nbsp; <code>fun((String)3);</code><br />
          &nbsp;II. &nbsp; <code>fun(3 + &quot;&quot;);</code><br />
          III. &nbsp;<code>fun(&quot;3&quot;);</code></p>

          <p>Desain kode yang tepat untuk memanggil method fun adalah&nbsp;</p>','kelas_id' => '25','created_at' => '2022-09-10 09:01:25','updated_at' => '2022-09-17 23:25:53','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah fun(3 + &quot;&quot;); dan fun(&quot;3&quot;);. Pemanggilan method secara legal disesuaikan dengan tipe data berupa String yaitu dengan tanda (&ldquo;&rdquo;)</p>'),
            array('id' => '198','pertanyaan' => '<p>Perhatikan kode berikut:</p>

          <p><code>public class Kelas {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;B ObjekB = new B();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;ObjekB.nilai(5);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Nilai = &quot; + ObjekB.i);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} &nbsp; }</code></p>

          <p><code>class A {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int i;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public void nilai(int i) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;this.i = i;&nbsp;<br />
          }&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>class B extends A {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public void nilai(String s) { }&nbsp;&nbsp; &nbsp;<br />
          }</code></p>

          <p>Hubungan yang tepat sesuai dengan potongan kode tersebut adalah</p>','kelas_id' => '25','created_at' => '2022-09-10 09:03:33','updated_at' => '2022-09-17 23:25:38','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah Metode m tidak ditimpa di B. B mewarisi metode m dari A dan mendefinisikan metode kelebihan beban m di B. Kata kunci <code>extends </code>menunjukkan pembuatan kelas baru yang berasal dari kelas yang sudah ada. Arti &ldquo;<code>extends</code>&rdquo; adalah meningkatkan fungsionalitas. Dalam terminologi Java, kelas yang diwarisi disebut induk atau superclass, dan kelas baru disebut anak atau subkelas. Program ini menghasilkan luaran Nilai = 5.</p>'),
            array('id' => '199','pertanyaan' => '<p>Rancangan algoritma yang paling efisien untuk menentukan dan menampilkan penjumlahan dari dua angka (asumsi: mengambil nilai dari pengguna)</p>

          <p>&nbsp; &nbsp; I.&nbsp;&nbsp; &nbsp;Mulai<br />
          &nbsp; &nbsp;II.&nbsp;&nbsp; &nbsp;Deklarasikan dua variabel a dan b<br />
          &nbsp; III.&nbsp;&nbsp; &nbsp;Baca dua nilai dari pengguna<br />
          &nbsp; IV.&nbsp;&nbsp; &nbsp;Tentukan dua nilai<br />
          &nbsp; &nbsp;V.&nbsp;&nbsp; &nbsp;Hitung nilai (a + b)<br />
          &nbsp; VI.&nbsp;&nbsp; &nbsp;Tampilkan nilai a<br />
          &nbsp;VII.&nbsp;&nbsp; &nbsp;Tampilkan nilai b<br />
          VIII.&nbsp;&nbsp; &nbsp;Tampilkan nilai (a + b)<br />
          &nbsp; IX.&nbsp;&nbsp; &nbsp;Selesai</p>

          <p>Pilihan urutan yang tepat adalah&nbsp;</p>','kelas_id' => '25','created_at' => '2022-09-10 09:10:50','updated_at' => '2022-09-17 23:25:30','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah I &ndash; II &ndash; III &ndash; VIII &ndash; IX. Pilihan ini efisien karena telah sesuai dengan analisa pertanyaan dan tidak mengulangi langkah yang tidak diperlukan dengan urutan Mulai &ndash; Deklarasikan dua variabel a dan b &ndash; Baca dua nilai dari pengguna &ndash; Tampilkan nilai (a + b) &ndash; Selesai. Pilihan IV Tentukan dua nilai, kurang tepat karena dalam pertanyaan, nilai diambil dari input pengguna, bukan ditentukan dalam sistem. Pilihan V Hitung nilai (a + b) menjadi opsional namun memperpanjang alur program. Pilihan VI Tampilkan nilai a dan VII Tampilkan nilai b, periksa pertanyaan, perintah menampilkan nilai tidak diminta.</p>'),
            array('id' => '200','pertanyaan' => '<p>Rancangan satu baris kondisi perulangan untuk menggantikan kondisi perulangan bersarang berikut:<br />
          <code>if (a &gt; b){<br />
          &nbsp;&nbsp; &nbsp;if ( a &gt; c) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&ldquo;X&rdquo;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          } else {<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&ldquo;Y&rdquo;);<br />
          }</code></p>','kelas_id' => '25','created_at' => '2022-09-17 23:31:03','updated_at' => '2022-09-17 23:31:03','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar yaitu <code>&nbsp;if (a &gt; b &amp;&amp; a &gt; c) </code>memiliki kondisi<code> if (a &gt; b){ if ( a &gt; c) { </code>memiliki makna <code>( a &gt; c) </code>akan dijalankan apabila<code> (a &gt; b)</code> bernilai benar, maka menggunakan operator <code>&amp;&amp;</code><br />
          &nbsp;</p>'),
            array('id' => '201','pertanyaan' => '<p>Diketahui:</p>

          <p><code>a = -1, b = -2, c = -4, d = 2, e = -1.&nbsp;</code></p>

          <p><code>if (a &lt; 0)<br />
          if (b &lt; 0)<br />
          if (c &lt; 0)<br />
          if (!(d &lt; 0 &amp;&amp; e &lt; 0 ) )<br />
          &nbsp; &nbsp;System.out.println(&quot;Satu&quot;);<br />
          else<br />
          &nbsp; &nbsp;System.out.println(&quot;Dua&quot;);<br />
          if (a == e)<br />
          &nbsp; &nbsp;System.out.println(&quot;Tiga&quot;);<br />
          else<br />
          &nbsp; &nbsp;System.out.println(&quot;Empat&quot;);</code></p>

          <p>Analisa yang menjadi luaran dari potongan kode tersebut adalah</p>','kelas_id' => '25','created_at' => '2022-09-17 23:35:01','updated_at' => '2022-09-17 23:35:01','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar yaitu<br />
          Satu&nbsp;<br />
          Tiga<br />
          Memenuhi kondisi <code>if (!(d &lt; 0 &amp;&amp; e &lt; 0 )) </code>tanda ! sama dengan <code>(d &gt; 0 || e &gt; 0 )</code> maka <code>( 2 &gt; 0 || -1 &gt; 0)</code> terpenuhi dan<code> if (a == e)</code> terpenuhi<code> if (-1 == -1)</code></p>'),
            array('id' => '202','pertanyaan' => '<p>Jika kita ingin menulis pernyataan <code>if </code>yang dieksekusi setiap angka riil x antara 10.0 dan 20.0. Bagaimana seharusnya kondisi <code>IF </code>ditulis?</p>','kelas_id' => '25','created_at' => '2022-09-17 23:37:09','updated_at' => '2022-09-17 23:37:09','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah <code>10.0 &lt; x &amp;&amp; x &lt; 20.0.</code> Pilihan <code>10.0 &lt; x || x &gt; 20.0 </code>dan <code>10.0 &lt; x || x &lt; 20.0</code> salah karena operator || atau akan memilih salah satu bukan keduanya yang benar. Pilihan <code>10.0 &lt; x &amp;&amp; x &gt; 20.0 </code>salah karena operator <code>&amp;&amp; </code>akan memilih keduanya yang benar, namun nilai<code> x &gt; 20.0 </code>artinya lebih dari 20.0 bukan antara 10.0 dan 20.0. Pilihan &nbsp;<code>10.0 &lt; x &amp;&amp; x &lt; 20.0</code> benar karena seleksi operator tepat.&nbsp;</p>'),
            array('id' => '203','pertanyaan' => '<p>Cermati bagian program berikut:</p>

          <p><code>&nbsp; int kelasSI = 2;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;switch(kelasSI) &nbsp;{<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 1: System.out.print(&quot;Dua &quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 2: System.out.print(&quot;Dua lagi &quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;default: System.out.print(&quot;Dua terus &quot;);&nbsp;&nbsp; &nbsp;}</code></p>

          <p>Analisa luaran dari program tersebut adalah&nbsp; &nbsp;&nbsp;</p>','kelas_id' => '25','created_at' => '2022-09-17 23:39:25','updated_at' => '2022-09-17 23:39:25','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah <code>Dua lagi &nbsp;Dua terus </code>karena memeriksa pilihan dari nomor kedua dan default.&nbsp;<br />
          &nbsp;</p>'),
            array('id' => '204','pertanyaan' => '<p>Cermati bagian program berikut:</p>

          <p><code>switch(15)&nbsp;&nbsp; &nbsp;{<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 5*2: System.out.println(&quot;Satu &quot;);break;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 5*4-5:System.out.println(&quot;Dua &quot;);<br />
          &nbsp;&nbsp; &nbsp;case 60/4+5: System.out.println(&quot;Tiga &quot;);&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;</code></p>

          <p>Analisa luaran dari program tersebut adalah&nbsp;&nbsp; &nbsp;}</p>','kelas_id' => '25','created_at' => '2022-09-17 23:41:50','updated_at' => '2022-09-17 23:41:50','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah <code>Dua Tiga,</code> karena hasil 5*4-5 adalah 15 maka eksekusi <code>Dua</code>, serta tidak ada <code>break </code>maka menampilkan <code>Tiga</code>.</p>'),
            array('id' => '205','pertanyaan' => '<p>Asumsikan <code>c1 </code>dan <code>c2 </code>adalah dua bentuk dari mobil di kelas java.</p>

          <p>&nbsp; &nbsp; <code>if (c1 == c2)</code></p>

          <p>Evaluasi apa yang akan terjadi ketika mengeksekusi kode tersebut (anggap tidak ada sintaks dan kesalahan kompilasi)</p>','kelas_id' => '25','created_at' => '2022-09-17 23:43:52','updated_at' => '2022-09-17 23:43:52','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah bernilai benar hanya jika c1 dan c2 menunjuk ke objek yang sama.&nbsp;</p>'),
            array('id' => '206','pertanyaan' => '<p>Pernyataan 1: <code>Switch </code>menggunakan satu ekspresi untuk beragam pilihan</p>

          <p>Pernyataan 2: <code>Switch </code>lebih stabil daripada <code>IF </code>bersarang untuk kondisi yang lebih dari 3 atau 4.</p>

          <p>Evaluasi kedua pernyataan tersebut&nbsp;</p>','kelas_id' => '25','created_at' => '2022-09-17 23:45:12','updated_at' => '2022-09-17 23:45:12','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah pernyataan 1 benar, pernyataan 2 benar, dan keduanya saling terkait.</p>'),
            array('id' => '207','pertanyaan' => '<p>Cermati pernyataan berikut:</p>

          <p>&nbsp; &nbsp;I.&nbsp; Deklarasi <code>if</code> akan dieksekusi jika memenuhi kondisional<br />
          &nbsp; II.&nbsp; Deklarasi <code>switch </code>akan dieksekusi jika memenuhi kondisional<br />
          &nbsp;III.&nbsp; Deklarasi <code>if </code>akan diekseskusi sesuai masukan dari pengguna.<br />
          IV.&nbsp; &nbsp;Deklarasi <code>switch </code>akan dieksekusi sesuai masukan dari pengguna<br />
          &nbsp;V.&nbsp; &nbsp;Jika kondisi tidak benar maka deklarasi <code>if </code>akan mengeksekusi else.<br />
          VI.&nbsp; &nbsp;Jika kondisi tidak benar maka deklarasi <code>switch </code>akan mengeksekusi default.<br />
          VII.&nbsp; Deklarasi <code>if </code>dapat mengevaluasi semua tipe data<br />
          VIII. Deklarasi <code>switch </code>dapat mengevaluasi semua tipe data</p>

          <p>Evaluasi pernyataan yang tepat mengenai <code>if </code>dan <code>switch </code>adalah</p>','kelas_id' => '25','created_at' => '2022-09-17 23:48:14','updated_at' => '2022-09-17 23:48:14','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah I &ndash; IV &ndash; V &ndash; VII</p>'),
            array('id' => '208','pertanyaan' => '<p>Pernyataan 1: <code>Switch </code>dengan variabel <code>boolean </code>menghasilkan <code>true</code>.</p>

          <p>Pernyataan 2: <code>Case </code>akan menjalankan perintah kondisi yang sudah terpenuhi.&nbsp;</p>

          <p>Evaluasi kedua pernyataan tersebut&nbsp;</p>','kelas_id' => '25','created_at' => '2022-09-17 23:49:43','updated_at' => '2022-09-17 23:49:43','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah Pernyataan 1 salah, pernyataan 2 benar, dan keduanya saling terkait sebab akibat. Namun, Switch tidak dapat melalukan pemeriksaan boolean.&nbsp;</p>'),
            array('id' => '209','pertanyaan' => '<p>Cermati bagian program berikut:</p>

          <p><code>int age = 8;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;switch(age){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 4: case 5:{<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String group = &quot;Sistem Informasi&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 6: case 7:case 8:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String group = &quot;Informatika&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(group);</code></p>

          <p>Ketika dieksekusi terjadi kesalahan kompilasi, rekomendasi perbaikan program yang tepat adalah</p>','kelas_id' => '25','created_at' => '2022-09-18 06:24:01','updated_at' => '2022-09-18 06:24:01','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah menambah deklarasi variabel group. Pesan kesalahan yang muncul adalah &ldquo;<code>group cannot be resolved to a variable</code>&rdquo;. Sehingga perlu mendeklarasikan variabel group ini.</p>'),
            array('id' => '210','pertanyaan' => '<p>Perhatikan potongan kode berikut<br />
          <code>switch( grade ) {<br />
          case 5:&nbsp;case 4:<br />
          &nbsp; &nbsp; a = 1;<br />
          &nbsp; &nbsp; b = 2;<br />
          &nbsp; &nbsp; break;<br />
          case 3:<br />
          &nbsp; &nbsp;a = 5;<br />
          &nbsp; &nbsp;break;<br />
          default:<br />
          &nbsp; &nbsp;a = 2;<br />
          &nbsp; &nbsp;break;<br />
          }</code><br />
          Rancangan program if yang ekuivalen dengan pernyataan switch tersebut adalah</p>','kelas_id' => '25','created_at' => '2022-09-18 06:27:40','updated_at' => '2022-09-18 06:27:40','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar yaitu &nbsp;<br />
          if (grade == 4 || grade == 5 ) { //bermakna sama dengan case 4 dan case 5<br />
          a = 1;&nbsp;<br />
          b = 2;<br />
          } else if (grade == 3) { //bermakna sama dengan case 3<br />
          a = 5;<br />
          } else {&nbsp;<br />
          a = 2;<br />
          }</p>'),
            array('id' => '212','pertanyaan' => '<p>Cermati potongan kode berikut:</p>

          <p><code>class kampus {<br />
          &nbsp; &nbsp;public static void main(String args[]) {<br />
          &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String string = &quot;UNIB&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//percabangan 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (string == &quot;UNIB&quot;) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;1. Sama &quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} else {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;1. Tidak Sama &quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//percabangan 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (&quot;UNIB&quot;.equals(&quot;UNIB&quot;)) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;2. Sama &quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} else {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;2. Tidak Sama &quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//percabangan 3<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (&quot;UNIB&quot; == new String(&quot;UNIB&quot;)) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;3. Sama &quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} else {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;3. Tidak Sama &quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}&nbsp;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p>Susunlah luaran dari potongan kode tersebut adalah</p>','kelas_id' => '25','created_at' => '2022-09-18 07:07:44','updated_at' => '2022-09-18 07:08:58','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah Sama, Sama, Tidak Sama. Perintah &quot;UNIB&quot; == new String(&quot;UNIB&quot;) adalah tidak sama.&nbsp;</p>'),
            array('id' => '213','pertanyaan' => '<p>Apabila diketahui usia lebih dari 6 tahun dapat masuk SD, dan usia lebih dari 12 tahun dapat masuk SMP. Susunlah program berdasarkan informasi tersebut!</p>','kelas_id' => '25','created_at' => '2022-09-18 07:09:54','updated_at' => '2022-09-18 07:09:54','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah&nbsp;<br />
          <code>switch (usia)<br />
          case (6): System.out.println(&ldquo;SD&rdquo;); break;<br />
          case (12): System.out.println(&ldquo;SMP&rdquo;); break; &nbsp;}</code><br />
          &nbsp;</p>'),
            array('id' => '214','pertanyaan' => '<p>Diketahui perulangan IF berikut:</p>

          <p><code>if (pilih == M)<br />
          &nbsp; &nbsp;System.out.println(&ldquo;Merah&rdquo;);<br />
          if(pilih == K)<br />
          &nbsp; &nbsp;System.out.println(&ldquo;Kuning&rdquo;);<br />
          else&nbsp;<br />
          &nbsp; &nbsp;System.out.println(&ldquo;Hijau&rdquo;);</code></p>

          <p>Apabila ingin diubah menjadi pernyataan Switch dengan pernyataan berikut<br />
          [1]&nbsp;&nbsp; &nbsp;<code>char pilih;</code><br />
          [2]&nbsp;&nbsp; &nbsp;<code>String pilih;</code><br />
          [3]&nbsp;&nbsp; &nbsp;<code>switch (pilih) {</code><br />
          [4]&nbsp;&nbsp; &nbsp;<code>case M: System.out.println(&ldquo;Merah&rdquo;);</code><br />
          [5]&nbsp;&nbsp;<code>&nbsp;case K: System.out.println(&ldquo;Kuning&rdquo;);</code><br />
          [6]&nbsp;&nbsp; &nbsp;<code>default: System.out.println(&ldquo;Hijau&rdquo;);</code><br />
          [7]&nbsp;&nbsp; &nbsp;<code>break;</code><br />
          [8]&nbsp;&nbsp; <code>&nbsp;}</code></p>

          <p>Susunan program yang tepat adalah</p>','kelas_id' => '25','created_at' => '2022-09-18 07:14:29','updated_at' => '2022-09-18 07:14:29','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah pernyataan 1 &ndash; 3 &ndash; 4 &ndash; 7 &ndash; 5 &ndash; 7 &ndash; 6 &ndash; 8</p>'),
            array('id' => '215','pertanyaan' => '<p>Mahasiswa bidang komputer, pada semester satu akan belajar Java. Sedangkan pada semester dua ada pilihan kelas Phyton dan PHP.&nbsp;</p>

          <p>Apabila terdapat pilihan pernyataan program berikut:</p>

          <p>[1]&nbsp; <code>switch (kelas) {</code><br />
          [2]&nbsp; <code>switch (semester) {</code><br />
          [3]&nbsp; <code>break;</code><br />
          [4]&nbsp; <code>case 1:</code><br />
          [5]&nbsp; <code>case 2:</code><br />
          [6]&nbsp; <code>System.out.println(&ldquo;Java&rdquo;);</code><br />
          [7]&nbsp; <code>System.out.println(&ldquo;Phyton&rdquo;);</code><br />
          [8]&nbsp; <code>System.out.println(&ldquo;PHP&rdquo;);</code><br />
          [9]&nbsp; &nbsp;} &nbsp;}</p>

          <p>Susunlah program yang tepat berdasarkan informasi yang diberikan, yaitu</p>','kelas_id' => '25','created_at' => '2022-09-18 07:17:24','updated_at' => '2022-12-05 10:49:25','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar 2 &ndash; 4 &ndash; 6 &ndash; 3 &ndash; 5 &ndash; 1 &ndash; 4 &ndash; 7 &ndash; 3 &ndash; 5 &ndash; 8 - 9</p>

          <p>[2]&nbsp;&nbsp;<code>switch (semester) {</code><br />
          [4]&nbsp;&nbsp;<code>case 1:</code><br />
          [6]&nbsp;&nbsp;<code>System.out.println(&ldquo;Java&rdquo;);</code><br />
          [3]&nbsp;&nbsp;<code>break;</code><br />
          [5]&nbsp;&nbsp;<code>case 2:</code><br />
          [1]&nbsp;&nbsp;<code>switch (kelas) {</code><br />
          [4]&nbsp;&nbsp;<code>case 1:</code><br />
          [7]&nbsp;&nbsp;<code>System.out.println(&ldquo;Phyton&rdquo;);</code><br />
          [3]&nbsp;&nbsp;<code>break;</code><br />
          [5]&nbsp;&nbsp;<code>case 2:</code><br />
          [8]&nbsp;&nbsp;<code>System.out.println(&ldquo;PHP&rdquo;);</code><br />
          [9]&nbsp; &nbsp;} &nbsp;}</p>'),
            array('id' => '216','pertanyaan' => '<p>Diketahui potongan kode berikut:&nbsp;<br />
          <code>public static int forloop(int b) &nbsp;{<br />
          for (int a = 10; a &gt; -10; a = a - 5)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (a % 2 == 0)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;b = b + a;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; else b = b * 2;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;return b;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int x;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;x = forloop(2);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; System.out.println(x);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}</code><br />
          Analisa nilai yang dikembalikan oleh <code>forloop(2) </code>adalah</p>','kelas_id' => '25','created_at' => '2022-09-23 23:08:54','updated_at' => '2022-09-23 23:08:54','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Jawaban yang benar adalah 48&nbsp;<br />
          <code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static int forloop(int b) &nbsp;{<br />
          for (int a = 10; a &gt; -10; a = a - 5)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; if (a % 2 == 0)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; b = b + a;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; else b = b * 2;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;return b;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int x;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;x = forloop(2);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; System.out.println(x);<br />
          }&nbsp;&nbsp; &nbsp;}</code></p>'),
            array('id' => '217','pertanyaan' => '<p>Cermati kode program berikut:<br />
          <code>public class Main {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;for (int y = 0; y &lt; 10; ++y) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (y % 2 == 0)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;continue;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;else if (y == 8)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;else<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(y + &quot; &quot;);<br />
          }&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code></p>

          <p>Analisa luaran program tersebut</p>','kelas_id' => '25','created_at' => '2022-09-23 23:11:09','updated_at' => '2022-09-23 23:11:09','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah 1 &nbsp;3 &nbsp;5 &nbsp;7 &nbsp;9. Program dimulai dari 1 karena 0/2 = 0 maka dilewati. Kemudian angka 4 6 8 juga dilewati karena habis dibagi dengan 2. Perintah else if ( y==8) tidak dieksekusi sehingga program berjalan sampai angka 9</p>'),
            array('id' => '218','pertanyaan' => '<p>Cermati potongan program berikut:<br />
          &nbsp;<code>&nbsp; &nbsp;int count = 0;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while (count &lt; 3) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; System.out.println(&quot;UNIB&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; count++;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}</code><br />
          Simpulkan luaran dari program tersebut</p>','kelas_id' => '25','created_at' => '2022-09-23 23:12:26','updated_at' => '2022-09-23 23:12:26','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah UNIB &nbsp; UNIB &nbsp; UNIB</p>'),
            array('id' => '219','pertanyaan' => '<p>Perhatikan potongan kode berikut:<br />
          &nbsp;&nbsp; &nbsp;<code>int i=1;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while(i&lt;=6){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(i);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;i++;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(i==4){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}</code><br />
          Analisa luaran dari potongan kode ini ketika dieksekusi yaitu</p>','kelas_id' => '25','created_at' => '2022-09-23 23:13:45','updated_at' => '2022-09-23 23:13:45','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah 1 &ndash; 2 &ndash; 3. Perintah break menghentikan perulangan pada i = 4.<br />
          &nbsp;</p>'),
            array('id' => '220','pertanyaan' => '<p>Cermati potongan program berikut:<br />
          <code>int p=0;<br />
          while (p&lt;2)<br />
          &nbsp; &nbsp;{<br />
          &nbsp; &nbsp;System.out.println(&ldquo;Universitas&rdquo;);<br />
          &nbsp; &nbsp;p++;<br />
          &nbsp; &nbsp;}<br />
          System.out.print(&ldquo;Bengkulu&rdquo;);</code><br />
          Analisa luaran dari program tersebut adalah</p>','kelas_id' => '25','created_at' => '2022-09-23 23:15:12','updated_at' => '2022-09-23 23:15:12','level_berfikir' => 'Menganalisis','pembahasan' => '<p>&nbsp;Pilihan yang benar adalah Universitas &nbsp;Universitas &nbsp;Bengkulu. String yang berada dalam perulangan adalah kata Universitas, sedangkan Bengkulu ada di luar perulangan.</p>'),
            array('id' => '221','pertanyaan' => '<p>Cermati potongan kode berikut:<br />
          <code>public class main {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; pertama:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for( int i = 1; i &lt; 5; i++) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;kedua:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int j = 1; j &lt; 3; j ++ ) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;i = &quot; + i + &quot;; j = &quot; +j);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if ( i == 2) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // kode yang hilang &nbsp; }&nbsp;&nbsp; &nbsp;<br />
          } &nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code><br />
          Apabila ingin menghasilkan luaran berikut:<br />
          <code>i = 1; j = 1<br />
          i = 1; j = 2<br />
          i = 2; j = 1<br />
          i = 2; j = 2</code><br />
          Berikan rekomendasi perintah yang tepat untuk kode yang hilang</p>','kelas_id' => '25','created_at' => '2022-09-23 23:16:52','updated_at' => '2022-09-23 23:16:52','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah pernyataan break pertama. Program akan menghentikan perulangan yang pertama.</p>'),
            array('id' => '222','pertanyaan' => '<p>Apabila diketahui potongan kode berikut:<br />
          <code>public class mainFor {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int[] numbers = {10, 20, 30, 40, 50, 60, 70, 80, 90};<br />
          &nbsp; &nbsp; &nbsp; &nbsp; for (int x : numbers){ &nbsp; &nbsp; &nbsp;<br />
          if (x == 30 || x == 60 || x == 90 || x == 120) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; continue; // baris 1<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } &nbsp;System.out.print(x + &quot; &quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; continue; &nbsp; &nbsp;// baris 2<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break; &nbsp; &nbsp; &nbsp; &nbsp;// baris 3<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; continue; &nbsp; &nbsp;// baris 4<br />
          }&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code><br />
          Simpulkan luaran dari kode tersebut</p>','kelas_id' => '25','created_at' => '2022-09-23 23:18:14','updated_at' => '2022-09-23 23:18:14','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah pernyataan Kesalahan kompilasi pada baris 3 dan baris 4. Setelah perintah continue, tidak boleh menggunakan break dan continue maka terjadi kesalahan kompilasi. Sedangkan continue pada baris 1 benar karena berada dalam perulangan if, setiap perulangan sebaiknya memiliki satu perintah continue atau break.</p>'),
            array('id' => '223','pertanyaan' => '<p>Diketahui potongan program berikut:<br />
          <code>[1] &nbsp;&nbsp; &nbsp;int a = 1;<br />
          [2]&nbsp;&nbsp; &nbsp;while ( a &lt; 3);<br />
          [3]&nbsp;&nbsp; &nbsp;{<br />
          [4]&nbsp;&nbsp; &nbsp;System.out.println(&#39;UB&#39;);<br />
          [5]&nbsp;&nbsp; &nbsp;a+=1;</code><br />
          &nbsp;&nbsp; &nbsp;Apabila dieksekusi menghasilkan luaran:<br />
          &nbsp;&nbsp;<code> &nbsp;Invalid character constant<br />
          &nbsp;&nbsp; &nbsp;Syntax error, insert &quot;}&quot;</code><br />
          &nbsp;&nbsp; &nbsp;Baca pernyataan dibawah ini:<br />
          a.&nbsp;&nbsp; &nbsp;baris [2] tanda titik koma dihapus&nbsp;<br />
          b.&nbsp;&nbsp; &nbsp;baris [2] ubah while menjadi do<br />
          c.&nbsp;&nbsp; &nbsp;baris [3] ditambah a++;<br />
          d.&nbsp;&nbsp; &nbsp;baris [4] ubah tanda &lsquo;UB&rsquo; menjadi &ldquo;UB&rdquo;<br />
          e.&nbsp;&nbsp; &nbsp;baris [4] tambahkan tanda } setelah System.out.println(&#39;UB&#39;);<br />
          f.&nbsp;&nbsp; &nbsp;baris [5] ubah operator a +=1; menjadi a++;<br />
          g.&nbsp;&nbsp; &nbsp;baris [5] tambahkan tanda } setelah a+=1;<br />
          &nbsp;&nbsp; &nbsp;Rekomendasikan perbaikan yang tepat untuk potongan kode ini adalah</p>','kelas_id' => '25','created_at' => '2022-09-23 23:19:49','updated_at' => '2022-09-23 23:19:49','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah a &ndash; d &ndash; g. Pernyataan a yaitu baris [2] tanda titik koma dihapus. Pilihan d yaitu baris [4] ubah tanda &lsquo;UB&rsquo; menjadi &ldquo;UB&rdquo;. Pernyataan g.&nbsp;&nbsp; &nbsp;baris [5] tambahkan tanda } setelah a+=1. Apabila penyataan e yaitu baris [4] tambahkan tanda } setelah System.out.println(&#39;UB&#39;); dipilih maka perulangan akan berlanjut tanpa henti karena tidak ada Batasan.<br />
          &nbsp;&nbsp; <code>&nbsp;int a = 1;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while ( a &lt; 3)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;{ &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;UB&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; a+=1; &nbsp;&nbsp;&nbsp; &nbsp;}</code></p>'),
            array('id' => '224','pertanyaan' => '<p>Diketahui kedua potongan program berikut:<br />
          [1]&nbsp;&nbsp; &nbsp;<code>int i=1;</code><br />
          [2]&nbsp;&nbsp; <code>&nbsp;do</code><br />
          [3]&nbsp;&nbsp; &nbsp;<code>{</code><br />
          [4]&nbsp;&nbsp; <code>&nbsp;System.out.println(i);</code><br />
          [5]&nbsp;&nbsp; &nbsp;<code>}&nbsp;</code><br />
          [6]&nbsp;&nbsp; &nbsp;<code>while(i&lt;= 3);&nbsp;</code><br />
          Evaluasi peletakkan kode <code>(i++ )</code> untuk menghasilkan luaran 2 dan 3 yaitu</p>','kelas_id' => '25','created_at' => '2022-09-23 23:21:25','updated_at' => '2022-09-23 23:21:25','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah Kode i++ diletakkan pada baris ke-3 setelah {. Kode ini akan menambahkan i = 1 + 1 = 2 kemudian melakukan iterasi menghasilkan 2 dan 3. Pilihan Kode i++ diletakkan pada baris ke-1 &nbsp;setelah int i =1; dan Kode i++ diletakkan pada baris ke-6 sebelum while(i&lt;= 3); akan menyebabkan infinite loop atau perulangan tak berhingga. Pilihan Kode i++ diletakkan pada baris ke-5 sebelum } akan menghasilkan perulangan 1 dan 2</p>'),
            array('id' => '225','pertanyaan' => '<p>Pernyataan 1: Perulangan tidak terbatas merupakan kondisi ketika perulangan tidak bisa berhenti<br />
          Pernyataan 2: Kondisi perulangan dapat bernilai true dan false<br />
          Evaluasi kedua pernyataan tersebut:</p>','kelas_id' => '25','created_at' => '2022-09-23 23:22:43','updated_at' => '2022-09-23 23:22:43','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah Pernyataan 1 benar, pernyataan 2 benar, dan keduanya tidak saling terkait. Kesalahan pemrograman yang umum terjadi adalah loop tidak bisa berhenti atau yang biasa disebut dengan infinite loop. Yaitu kesalahan yang mengakibatkan program tidak bisa menghentikan loop karena kondisi loop selalu bernilai true.</p>'),
            array('id' => '226','pertanyaan' => '<p>Cermati kode berikut:<br />
          &nbsp;&nbsp;<code> &nbsp;for (int a = 2; a &lt;=30; ++a){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (a % 7! = 0)<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;/* Masukkan kode disini */<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(a % 14 == 0)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(a)<br />
          &nbsp;&nbsp; &nbsp;}</code><br />
          Buat kode yang perlu dimasukkan ke dalam baris tersebut, agar menampilkan angka yang habis dibagi 14!</p>','kelas_id' => '25','created_at' => '2022-09-23 23:24:08','updated_at' => '2022-09-23 23:24:08','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Jawaban yang benar adalah pilihan continue. Perintah continue perulangan hanya melewati 1 kali proses iterasi saja.</p>'),
            array('id' => '227','pertanyaan' => '<p>Cermati baris kode berikut:<br />
          <code>[1]&nbsp;&nbsp; &nbsp;public class main {<br />
          [2]&nbsp;&nbsp; &nbsp;public static void main(String [] args) {<br />
          [3]&nbsp;&nbsp; &nbsp;for (int i =1; i &lt;=10; i++) {<br />
          [4]&nbsp;&nbsp; &nbsp;for (int i = 1; i &lt; 11; ++i) &nbsp;{ &nbsp;<br />
          [5]&nbsp;&nbsp; &nbsp;if (i == 6)<br />
          [6]&nbsp;&nbsp; &nbsp;if (i % 6)<br />
          [7]&nbsp;&nbsp; &nbsp;continue;<br />
          [8]&nbsp;&nbsp; &nbsp;break;<br />
          [9]&nbsp;&nbsp; &nbsp;else<br />
          [10]&nbsp;&nbsp; &nbsp;System.out.println(i);<br />
          [11]&nbsp;&nbsp; &nbsp;} &nbsp;&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code><br />
          Susun kembali kode tersebut untuk menampilkan angka dari 1 sampai 10 namun melewatkan angka 6!</p>','kelas_id' => '25','created_at' => '2022-09-23 23:25:32','updated_at' => '2022-09-23 23:25:32','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Jawaban yang benar adalah urutan 1 &ndash; 2 &ndash; 3 &ndash; 5 &ndash; 7 &ndash; &nbsp;9 &ndash; 10 &ndash; 11.&nbsp;<br />
          <code>public class Main {<br />
          &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; for (int i=1;i&lt;=10;i++) //iterate loop from 1 to 10 {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;if (i==6)<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;continue; &nbsp; &nbsp;//if i is 6 skip the iteration<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;else<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(i); &nbsp;//print the i value<br />
          } &nbsp;&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code></p>'),
            array('id' => '228','pertanyaan' => '<p>Perhatikan potongan kode berikut<br />
          <code>public class kode1 {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;for( /* kode A */ ) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; if (/* kode B */ ) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;continue; }<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; else if (/* kode C */ ) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break; }<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(i);<br />
          }&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code><br />
          Apabila ingin menghasilkan luaran&nbsp;<br />
          <code>0<br />
          1<br />
          2<br />
          4</code><br />
          Maka susunan kode untuk mengisi Kode A, Kode B, dan Kode C adalah</p>','kelas_id' => '25','created_at' => '2022-09-23 23:26:57','updated_at' => '2022-09-23 23:26:57','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Jawaban yang benar adalah pilihan &nbsp;(kode A : &nbsp;int i=0;i&lt;6;i++), (kode B : i == 3), &nbsp;(kode C : i == 5) karena perintah continue berarti melanjutkan dengan melewatkan angka 3, dan perintah break berarti berhenti di nilai =5 tidak dilanjutkan.</p>'),
            array('id' => '229','pertanyaan' => '<p>Diketahui potongan program dengan for untuk menampilkan angka dari 0 sampai 9 berikut:<br />
          <code>for(int i=0; i&lt;10; i++) {<br />
          &nbsp; &nbsp;System.out.println(i);<br />
          }</code><br />
          Apabila ingin diubah menjadi while loop<br />
          <code>1)&nbsp;&nbsp; &nbsp;int i = 0;<br />
          2)&nbsp;&nbsp; &nbsp;while (i &lt; 10)&nbsp;<br />
          3)&nbsp;&nbsp; &nbsp;{<br />
          4)&nbsp;&nbsp; &nbsp;do {<br />
          5)&nbsp;&nbsp; &nbsp;i++;<br />
          6)&nbsp;&nbsp; &nbsp;System.out.println(i)<br />
          7)&nbsp;&nbsp; &nbsp;}</code><br />
          Susunan kode yang tepat adalah</p>','kelas_id' => '25','created_at' => '2022-09-23 23:28:47','updated_at' => '2022-09-23 23:28:47','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah1 &ndash; 2 &ndash; 3 &ndash; 6 &ndash; 5 &ndash; 7. Apabila dituliskan menjadi&nbsp;<br />
          &nbsp;<code>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int i=0;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while(i!&lt;10)&nbsp;&nbsp; &nbsp;{&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(i);<br />
          i++; &nbsp; }&nbsp;&nbsp; &nbsp;</code><br />
          &nbsp;</p>'),
            array('id' => '230','pertanyaan' => '<p>Cermati potongan program berikut:<br />
          <code>[1]&nbsp;&nbsp; &nbsp;int count = 0;<br />
          [2]&nbsp;&nbsp; &nbsp;while (count &lt; 20)&nbsp;<br />
          [3]&nbsp;&nbsp; &nbsp;if (count % 5 == 0)<br />
          [4]&nbsp;&nbsp; &nbsp;{<br />
          [5]&nbsp;&nbsp; &nbsp;count++;<br />
          [6]&nbsp;&nbsp; &nbsp;System.out.println(count);<br />
          [7]&nbsp;&nbsp; &nbsp;}</code><br />
          Apabila ingin menghasilkan luaran&nbsp;<br />
          <code>0<br />
          5<br />
          10<br />
          15</code><br />
          Susunan rangkaian kode yang benar adalah</p>','kelas_id' => '25','created_at' => '2022-09-23 23:30:33','updated_at' => '2022-09-23 23:30:33','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah 1 &ndash; 2 &ndash; 4 &ndash; 3 &ndash; 6 &ndash; 5 &ndash; 7, dengan program<br />
          <code>int count = 0;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while (count &lt; 20) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (count % 5 == 0)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(count);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;count++;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}</code></p>'),

          array('id' => '232','pertanyaan' => '<p>Apa bentuk logika dari Fuzzy?</p>','kelas_id' => '32','created_at' => '2024-08-25 16:39:58','updated_at' => '2024-08-25 16:39:58','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Dengan logika fuzzy, keanggotaan himpunan ditentukan oleh nilai tertentu, sehingga memungkinkan adanya banyak nilai dalam himpunan tersebut.</p>'),
  array('id' => '233','pertanyaan' => '<p>Teori tradisional juga dikenal sebagai teori himpunan tegas</p>','kelas_id' => '32','created_at' => '2024-08-25 16:42:55','updated_at' => '2024-08-25 16:42:55','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Dalam teori himpunan tradisional, keanggotaan himpunan bersifat tetap atau pasti&mdash;entah anggota tersebut ada dalam himpunan atau tidak. Hanya ada dua nilai yang jelas: benar atau salah. Dalam logika fuzzy, ada banyak nilai, dengan penyertaan anggota dalam himpunan ditentukan oleh bobot, misalnya x.</p>'),
  array('id' => '234','pertanyaan' => '<p>Pernyataan 1: Nilai kebenaran pada teori tradisional / klasik adalah salah satu nilai dari 0 atau 1</p>

<p>Pernyataan 2: Nilai kebenaran pada teori Fuzzy adalah nilai diantara 0 dan 1</p>','kelas_id' => '32','created_at' => '2024-08-25 16:47:40','updated_at' => '2024-08-25 16:47:40','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Di mana&nbsp;logika klasik&nbsp;menyatakan bahwa segala hal dapat diekspresikan dalam istilah binary (0 atau 1, hitam atau putih, ya atau tidak) yaitu salah satu nilai dari 0 atau 1,&nbsp;<strong>logika fuzzy</strong>&nbsp;menggantikan kebenaran boolean dengan tingkat kebenaran yaitu nilai diantara 0 dan 1.</p>'),
  array('id' => '235','pertanyaan' => '<p>Pernyataan berikut:</p>

<p>Suhu ruangannya panas.</p>

<p>Istilah &ldquo;panas&rdquo; (penggunaan variabel bahasa) dapat direpresentasikan menjadi</p>','kelas_id' => '32','created_at' => '2024-08-25 16:50:15','updated_at' => '2024-08-25 16:50:15','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Logika fuzzy berurusan dengan variabel linguistik atau bahasa.</p>'),
  array('id' => '236','pertanyaan' => '<p>Nilai keanggotaan himpunan direpresentasikan oleh</p>','kelas_id' => '32','created_at' => '2024-08-25 16:51:23','updated_at' => '2024-08-25 16:51:23','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Dalam logika fuzzy, suatu elemen termasuk dalam suatu himpunan dengan derajat tertentu, yang mewakili derajat kebenaran. Konsep keanggotaan tidak memiliki nilai benar atau salah (1 atau 0) tetapi berkisar antara 0 &ndash; 1.</p>'),
  array('id' => '237','pertanyaan' => '<p>Teori Fuzzy Set mendefinisikan operator fuzzy. Pilih operator fuzzy dari yang berikut ini</p>','kelas_id' => '32','created_at' => '2024-08-25 16:53:20','updated_at' => '2024-08-25 16:53:20','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Operator AND, OR, dan NOT dari logika Boolean ada dalam logika fuzzy, biasanya didefinisikan sebagai minimum, maksimum, dan komplemen. Semua jawaban benar.</p>'),
  array('id' => '238','pertanyaan' => '<p>Aturan logika fuzzy biasanya dapat dituliskan dengan alur berikut</p>','kelas_id' => '32','created_at' => '2024-08-25 16:54:57','updated_at' => '2024-08-25 16:54:57','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Teori himpunan fuzzy mendefinisikan operator fuzzy pada himpunan fuzzy. Masalah dalam penerapannya adalah operator fuzzy yang tepat mungkin tidak diketahui. Karena alasan ini, logika fuzzy biasanya menggunakan aturan IF-THEN atau konstruksi yang ekuivalen, seperti matriks asosiatif fuzzy. Aturan biasanya dinyatakan dalam bentuk: IF variabel IS properti THEN tindakan</p>'),
  array('id' => '239','pertanyaan' => '<p>Kita dapat menggunakan fungsi keanggotaan untuk memecahkan masalah empiris berdasarkan</p>','kelas_id' => '32','created_at' => '2024-08-25 16:57:33','updated_at' => '2024-08-25 16:57:33','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pengalaman</p>'),
  array('id' => '240','pertanyaan' => '<p>Operasi fuzzy &quot;Union&quot; dalam himpunan fuzzy setara dengan operasi mana dalam logika klasik</p>','kelas_id' => '32','created_at' => '2024-08-25 16:58:36','updated_at' => '2024-08-25 16:58:36','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Dalam logika fuzzy, operasi &quot;Union&quot; setara dengan operasi &quot;OR&quot; dalam logika klasik, di mana elemen termasuk dalam himpunan fuzzy jika termasuk dalam salah satu dari dua himpunan fuzzy yang diunion.</p>'),
  array('id' => '241','kelas_id' => '32','pertanyaan' => '<p>Diketahui nilai keanggotaan untuk variabel UMUR secara grafis seperti gambar berikut</p>

<p><img src="data:image/png;base64,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" /></p>

<p>Seseorang yang berumur 40 tahun mempunyai nilai&nbsp;&micro;Muda [40] dan&nbsp;&micro;Dewasa[40] , maka derajat keanggotaannya adalah</p>','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Jadi seseorang yang berumur 40 tahun mempunyai nilai &micro;Muda [40] =0,25 dan&nbsp;&micro;Dewasa[40] =0,5</p>','created_at' => '2024-08-25 17:04:53','updated_at' => '2024-08-25 17:04:53'),
array('id' => '242','pertanyaan' => '<p>Apa yang membedakan Metode Sugeno dengan Metode Mamdani dalam hal output?</p>','kelas_id' => '32','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Metode Sugeno menghasilkan output crisp atau nilai eksak, sedangkan Metode<br />
Mamdani menghasilkan output fuzzy.</p>','created_at' => '2024-09-09 11:52:14','updated_at' => '2024-09-09 11:52:14'),
  array('id' => '243','pertanyaan' => '<p>Dalam Fuzzy Inference System Sugeno, metode apa yang digunakan untuk<br />
menggabungkan output dari setiap aturan?</p>','kelas_id' => '32','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Metode yang digunakan untuk menggabungkan output dari setiap aturan dalam<br />
Metode Sugeno adalah rata-rata tertimbang.</p>','created_at' => '2024-09-09 11:54:00','updated_at' => '2024-09-09 11:54:00'),
  array('id' => '244','pertanyaan' => '<p>Jika sebuah sistem fuzzy memiliki dua aturan dengan output fuzzy sebagai berikut:</p>','kelas_id' => '32','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Untuk menentukan output akhir dari sistem fuzzy dengan aturan Sugeno, kita<br />
melakukan langkah-langkah berikut:<br />
1. Substitusi Input ke dalam Aturan<br />
Aturan 1: Jika x adalah &quot;rendah&quot;, output y = x+1<br />
Dengan x=4, output = 4+1=5<br />
Aturan 2: Jika x adalah &quot;tinggi&quot;, output y = 2x<br />
Dengan x=4, output = 2*4=8<br />
2. Penggunaan Bobot Keanggotaan:<br />
- Bobot keanggotaan &quot;rendah&quot; = 0.4<br />
- Bobot keanggotaan &quot;tinggi&quot; = 0.6<br />
3. Perhitungan Output Akhir:<br />
- Output akhir dihitung dengan menggunakan rata-rata tertimbang dari output aturan:</p>

<p>Output Akhir=(0.4&sdot;5)+(0.6&sdot;8)</p>

<p>- Menghitung:<br />
0.4*5=2<br />
0.6*8=4.8<br />
Output Akhir=2+4.8=6.8</p>','created_at' => '2024-09-09 11:55:22','updated_at' => '2024-09-09 11:55:22'),
  array('id' => '245','pertanyaan' => '<p>Untuk suatu sistem fuzzy, jika output crisp dari fungsi keanggotaan adalah 4 dan 6 dengan bobot keanggotaan masing-masing 0.5 dan 0.5, maka output akhir setelah defuzzifikasi adalah?</p>','kelas_id' => '32','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pembahasan: Output akhir defuzzifikasi menggunakan rata-rata tertimbang adalah :<br />
0.5 * 4 + 0.5 * 6</p>','created_at' => '2024-09-09 12:00:48','updated_at' => '2024-09-09 12:00:48'),
  array('id' => '246','pertanyaan' => '<p>Apakah jenis fungsi keanggotaan berikut:&nbsp;<br />
<img src="data:image/png;base64,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" /></p>','kelas_id' => '32','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Fungsi ini adalah fungsi keanggotaan segitiga yang sering digunakan dalam<br />
Fuzzy Logic.</p>','created_at' => '2024-09-09 12:03:15','updated_at' => '2024-09-09 12:03:15'),
  array('id' => '247','pertanyaan' => '<p>Jika aturan fuzzy adalah:<br />
- Aturan 1: Jika x tinggi, maka y =2x<br />
- Aturan 2: Jika x rendah, maka y = x+1<br />
- Dan bobot keanggotaan 0.4 dan untuk tinggi 0.6 untuk rendah, dan input x = 3, maka<br />
output akhir adalah?</p>','kelas_id' => '32','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Output akhir dihitung dengan rata-rata tertimbang dari masing-masing output<br />
aturan.</p>','created_at' => '2024-09-09 15:56:26','updated_at' => '2024-09-09 15:56:26'),
  array('id' => '248','pertanyaan' => '<p>Apa perbedaan utama antara metode Sugeno dan metode Mamdani dalam fuzzy inference<br />
systems<br />
I. Metode Sugeno menggunakan fungsi keanggotaan linier<br />
II.&nbsp; Mamdani menggunakan fungsi keanggotaan non-linier.<br />
III. Metode Sugeno menghasilkan output berupa fungsi linier dari input<br />
IV.&nbsp;Mamdani menghasilkan output berupa fungsi keanggotaan.<br />
V.&nbsp;Metode Sugeno lebih kompleks dibandingkan Mamdani.</p>','kelas_id' => '32','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Perbedaan utama adalah bahwa metode Sugeno menghasilkan output berupa<br />
fungsi linier dari input, sementara Mamdani menghasilkan output berupa fungsi keanggotaan.</p>','created_at' => '2024-09-09 16:00:55','updated_at' => '2024-09-09 16:00:55'),
  array('id' => '249','pertanyaan' => '<p>Dalam fuzzy clustering, ukuran kesamaan digunakan untuk&nbsp;</p>','kelas_id' => '32','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Ukuran kesamaan mengukur seberapa mirip dua data, yang penting dalam<br />
menentukan kedekatan data dalam cluster.</p>','created_at' => '2024-09-09 16:05:09','updated_at' => '2024-09-09 16:05:09'),
  array('id' => '250','pertanyaan' => '<p>Dalam metode Mamdani, apa yang dimaksud dengan &quot;fuzzy implication&quot; dan<br />
bagaimana cara kerjanya?</p>','kelas_id' => '32','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Aturan yang mendefinisikan hubungan antara antecedent (syarat) dan consequent (akibat) dengan menghubungkan nilai keanggotaan</p>','created_at' => '2024-09-09 16:07:35','updated_at' => '2024-09-09 16:07:35'),
  array('id' => '251','pertanyaan' => '<p>Manakah pilihan pernyataan yang tepat<br />
I.&nbsp;&quot;rule evaluation&quot;&nbsp;menjadi proses menilai dan menghitung hasil dari aturan fuzzy berdasarkan input</p>

<p>II.&nbsp;rule evaluation&quot;&nbsp;menjadi proses mengubah output fuzzy menjadi nilai numerik</p>

<p>III.&nbsp;&quot;input fuzzification&quot; menjadi proses mengubah nilai numerik menjadi nilai fuzzy</p>

<p>IV.&nbsp;&quot;input fuzzification&quot; menjadi proses menggabungkan hasil dari aturan fuzzy</p>','kelas_id' => '32','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>&nbsp;&quot;input fuzzification&quot; menjadi proses mengubah nilai numerik menjadi nilai fuzzy dan &quot;rule evaluation&quot;&nbsp;menjadi proses menilai dan menghitung hasil dari aturan fuzzy berdasarkan input</p>','created_at' => '2024-09-09 16:23:02','updated_at' => '2024-09-09 16:23:02'),
array('id' => '252','pertanyaan' => '<p style="text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Jika sebuah sistem fuzzy memiliki dua aturan dengan output fuzzy sebagai berikut:</span></span></span></p>

<ul>
	<li style="list-style-type:disc"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Aturan 1: 𝑓</span></span></span><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000"><sub>1</sub></span></span></span><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">(𝑥) =2𝑥 + 1</span></span></span></li>
	<li style="list-style-type:disc"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Aturan 2: 𝑓</span></span></span><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000"><sub>2</sub></span></span></span><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">(𝑥) = 𝑥</span></span></span><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000"><sup>2</sup></span></span></span></li>
</ul>

<p style="text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Dan bobot keanggotaan untuk aturan 1 adalah 0.6 dan untuk aturan 2 adalah 0.4, maka output akhir menggunakan metode weighted averange adalah?</span></span></span></p>','kelas_id' => '32','level_berfikir' => 'Menciptakan','pembahasan' => '<p style="text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Untuk menentukan output akhir dari sistem fuzzy dengan aturan Sugeno, kita melakukan langkah-langkah berikut:</span></span></span></p>

<ol>
	<li style="list-style-type:decimal"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Substitusi Input ke dalam Aturan</span></span></span></li>
</ol>

<p style="margin-left:48px; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Aturan 1: Jika x adalah &quot;rendah&quot;, output y = x+1</span></span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Dengan x=4, output = 4+1=5</span></span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000"><strong>Aturan 2:</strong></span></span></span><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000"> Jika x adalah &quot;tinggi&quot;, output y = 2x</span></span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Dengan x=4, output = 2*4=8</span></span></span></p>

<ol start="2">
	<li style="list-style-type:decimal"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Penggunaan Bobot Keanggotaan:</span></span></span></li>
</ol>

<ul>
	<li style="list-style-type:disc"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Bobot keanggotaan &quot;rendah&quot; = 0.4</span></span></span></li>
	<li style="list-style-type:disc"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Bobot keanggotaan &quot;tinggi&quot; = 0.6</span></span></span></li>
</ul>

<ol start="3">
	<li style="list-style-type:decimal"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Perhitungan Output Akhir:</span></span></span></li>
</ol>

<ul>
	<li style="list-style-type:disc"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Output akhir dihitung dengan menggunakan rata-rata tertimbang dari output aturan:</span></span></span></li>
</ul>

<p style="text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Output Akhir=(0.4&sdot;5)+(0.6&sdot;8)</span></span></span></p>

<ul>
	<li style="list-style-type:disc"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Menghitung:&nbsp;</span></span></span></li>
</ul>

<p style="margin-left:48px; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">0.4*5=2&nbsp;</span></span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">0.6*8=4.8</span></span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Output Akhir=2+4.8=6.8</span></span></span></p>','created_at' => '2024-10-07 07:37:08','updated_at' => '2024-10-07 07:38:50'),
  array('id' => '253','pertanyaan' => '<p>Pilihlah pernyataan yang tepat dari Metode TSUKAMOTO dari pilihan berikut dan berikan penjelasannya di kolom alasan</p>

<p>A. input dengan derajat keanggotaan rendah, kontribusi nilai crisp yang dihasilkan akan lebih kecil&nbsp;</p>

<p>B. aturan akan memberikan hasil crisp yang sangat berbeda dengan menggunakan hasil yang memiliki bobot tertinggi&nbsp;</p>

<p>C. input dengan derajat keanggotaan rendah, maka input dapat digabungkan dengan input lainnya</p>

<p>D. aturan akan memberikan hasil crisp yang terbaik dengan menggabungkan semua hasil crisp&nbsp;</p>','kelas_id' => '32','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Metode Tsukamoto menangani aturan yang memberikan hasil crisp yang sangat berbeda dengan memilih hasil crisp yang memiliki bobot tertinggi, sehingga hasil akhir lebih sesuai dengan kondisi input.</span></span></span></p>

<p style="text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Dalam metode Tsukamoto, meskipun input memiliki derajat keanggotaan yang sangat rendah, nilai crisp tetap dihasilkan namun kontribusinya terhadap hasil akhir akan lebih kecil.</span></span></span></p>','created_at' => '2024-10-07 07:50:04','updated_at' => '2024-10-07 07:50:04'),
  array('id' => '254','pertanyaan' => '<p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span style="color:#000000">Dalam contoh kasus penggunaan FCM, bagaimana kita dapat mengevaluasi keberhasilan clustering</span></span></span></p>','kelas_id' => '32','level_berfikir' => 'Menganalisis','pembahasan' => '<p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span style="color:#000000">Keberhasilan clustering dapat dievaluasi dengan menganalisis kualitas cluster dan derajat keanggotaan yang dihasilkan oleh FCM</span></span></span></p>','created_at' => '2024-10-07 07:52:50','updated_at' => '2024-10-07 07:52:50'),
  array('id' => '255','pertanyaan' => '<p>Berikan analisis anda, tentang a<span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span style="color:#000000">pa yang menjadi fokus utama dalam evaluasi hasil clustering menggunakan FCM !</span></span></span></p>','kelas_id' => '32','level_berfikir' => 'Menganalisis','pembahasan' => '<p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span style="color:#000000">&nbsp;Evaluasi hasil clustering fokus pada kualitas derajat keanggotaan dan seberapa baik centroid merepresentasikan data.</span></span></span></p>','created_at' => '2024-10-07 07:55:05','updated_at' => '2024-10-07 07:55:05'),
  array('id' => '256','pertanyaan' => '<p>Evaluasi ukuran fuzzy dan indeks kekaburan dalam fuzzy clustering!&nbsp;</p>','kelas_id' => '32','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Ukuran fuzzy menentukan tingkat keanggotaan suatu data dalam cluster, yang merupakan konsep dasar dalam fuzzy clustering. Indeks kekaburan mengukur tingkat kekaburan dalam pengelompokan data, menunjukkan seberapa jelas data dikelompokkan dalam cluster</span></span></span></p>','created_at' => '2024-10-07 08:07:34','updated_at' => '2024-10-07 08:07:34'),
  array('id' => '257','pertanyaan' => '<p><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Dalam metode Mamdani, bagaimana cara menggabungkan hasil dari berbagai aturan fuzzy menjadi satu output</span></span></span></p>','kelas_id' => '32','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#000000">Menggunakan metode agregasi fuzzy seperti operator maksimum atau rata-rata</span></span></span></p>','created_at' => '2024-10-07 08:24:06','updated_at' => '2024-10-07 08:24:06')
        );

        foreach ($bankSoals as $bankSoal) {
            DB::table('bank_soal_pembahasans')->insert($bankSoal);
        }
    }
}
