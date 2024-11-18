<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // pages
        $materis = array(
            array('id' => '71','topik_pembahasan_id' => '51','nama_materi' => 'Tipe Data','isi_materi' => '<p>Java adalah salah satu bahasa pemrograman yang bersifat <em>opensource</em> yang merupakan produk dari <em>Sun Microsystem</em> dan sekarang dipegang oleh Oracle. Java adalah salah satu bahasa pemrogaman <em>multiplatform</em> (dapat berjalan di berbagai sistem operasi) karena mempunyai JRE (Java Runtime Environment). Untuk bisa bekerja dengan Java, maka kita perlu melakukan instalasi Java Development Kit (JDK) dan Eclipse sebagai editor kode.</p>

          <p>File instalasi JDK dan Eclipse dapat diunduh pada <a href="https://bit.ly/3bswtxK">https://bit.ly/3bswtxK</a> atau dapat menggunakan kompiler daring pada alamat <a href="https://www.jdoodle.com/online-java-compiler/">https://www.jdoodle.com/online-java-compiler/</a>.</p>

          <p>Video penjelasan pembelajaran dapat diakses pada Chanel <strong>Youtube Rumah Ilmu Raflesia</strong><br />
          <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

          <p><a href="http://youtu.be/OjY8ByJE_bA" target="_blank">Video Bagian 1 &ndash; Pengenalan dan Struktur Program Java</a> &nbsp;&nbsp;&nbsp;<a href="https://youtu.be/OjY8ByJE_bA">https://youtu.be/OjY8ByJE_bA</a></p>

          <p><a href="https://youtu.be/at27jZTFWe8">Video Bagian 2 &ndash; Tipe Data dan Konversi Java</a> &nbsp;&nbsp;&nbsp;<a href="https://youtu.be/at27jZTFWe8">https://youtu.be/at27jZTFWe8</a></p>

          <p><strong>Unit 1: Deklarasi dasar Java</strong></p>

          <p>Java adalah bahasa berorientasi objek (OOP) setiap objek pada Java disebut &quot;class&quot;. Di Java, ketika mengkompilasi sebuah program, setiap kelas diubah menjadi file .class disebut kode byte. JVM <em>(Java virtual machine</em>) digunakan untuk menjalankan kode byte. Mari coba potongan program Halo Mahasiswa UNIB, yang hanya mencetak &quot;Halo Mahasiswa UNIB &quot; ke layar.</p>

          <p><strong>Contoh 1:&nbsp; </strong>Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.<br />
          <code>public class KelasKu {<br />
          &nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp; &nbsp; &nbsp;System.out.println(&quot;Halo Mahasiswa UNIB &quot;);<br />
          }&nbsp; }</code></p>

          <p>Luaran: <code>Halo Mahasiswa UNIB</code></p>

          <p>Penjelasan:<br />
          Baris pertama mendefinisikan kelas yang bernama iniKelas</p>

          <p><code>public class KelasKu {</code></p>

          <p>Pada Java, setiap baris kode yang akan dijalankan harus berada di dalam <code><strong>class </strong></code>yang diawali dan diakhiri kurung kurawal { }. Baris ini mendeklarasikan sebuah kelas bernama KelasKu, yang bersifat <strong>public</strong>, artinya setiap kelas lain dapat mengaksesnya. Perhatikan bahwa ketika mendeklarasikan kelas public, kita harus mendeklarasikannya di dalam file dengan nama yang sama (KelasKu.java), jika tidak, kita akan mendapatkan kesalahan saat kompilasi.<br />
          Catatan: Penamaan pada Java bersifat case sensitive, artinya KelasKu dan kelasku memiliki makna kelas yang berbeda. Nama dokumen *.java dan *.class harus sama.</p>

          <p>Baris berikutnya adalah:</p>

          <p><code>public static void main(String[] args) {</code><br />
          Berdasarkan video pembelajaran yang telah Anda simak. Baris ini adalah metode utama untuk menjalankan program.</p>

          <ul>
              <li><code>public </code>lagi berarti siapa pun dapat mengaksesnya.</li>
              <li><code>static </code>berarti Anda dapat menjalankan metode ini tanpa membuat instance dari iniKelas.</li>
              <li><code>void </code>berarti metode ini tidak mengembalikan nilai apa pun.</li>
              <li><code>Main () </code>adalah nama metode yang harus ada dan dibutuhkan disetiap program Java.</li>
              <li><code>String[] args</code> adalah argumen yang akan kita dapatkan saat menjalankan program dengan parameter dalam array string.</li>
          </ul>

          <p>Baris berikutnya:<br />
          <code>System.out.println(&quot;Halo Mahasiswa UNIB &quot;);</code></p>

          <ul>
              <li>System adalah kelas yang telah disediakan Java dan memiliki beberapa metode dan variabel yang berguna.</li>
              <li>out adalah objek yang mewakili output dari program Anda.</li>
              <li>println adalah metode untuk menampilkan luaran. Pernyataan baris kode Java diakhiri dengan tanda titik koma ( ; ).</li>
          </ul>

          <p><strong>Cara Memanggil Method dalam Java</strong></p>

          <p>Method membantu dalam penggunaan ulang kode. Method terdiri dari rangkaian pernyataan, dan method ini dapat dipanggil melalui pernyataan yang lain. Saat dipanggil, semua pernyataan yang merupakan bagian dari method akan dieksekusi. Misalnya, perhatikan method ini: &quot;public static void method Contoh() {}&quot;. Saat ini tidak ada kode di dalamnya, tetapi ada tiga kata kunci sebelum nama method. Ada public, static, dan void.</p>

          <p>Kata <em>public</em> sebelum nama <em>method</em> berarti bahwa method itu sendiri bisa dipanggil dari tempat mana pun yang menyertakan <em>class</em> lain, meskipun dari paket (berkas) yang berbeda asalkan Anda mengimpor <em>class</em> tersebut. Ada kata lain yang bisa menggantikan <em>public</em>. Kata tersebut adalah <em>protected</em> dan <em>private</em>.</p>

          <p><em>Method</em> <em>protected</em>, maka hanya <em>class</em> dan <em>subclasses</em> (class yang menggunakan ini sebagai basis untuk menyusun kode) ini yang bisa memanggil method tersebut.</p>

          <p><em>Method</em> <em>private</em> hanya bisa dipanggil di dalam <em>class</em> tersebut. Kata kunci terakhir bukan benar-benar sebuah kata. Kata tersebut hanya digunakan apabila Anda tidak memiliki pengganti <em>public</em>, <em>protected</em>, atau <em>private</em>. Kata ini disebut default, atau <em>package</em>-<em>private</em>. Ini artinya hanya class dalam paket yang sama yang bisa memanggil method tersebut.</p>

          <p>Latihan 1:</p>

          <ol>
              <li>
              <ol>
                  <li>Ubah teks yang ditampilkan program Contoh 1 menjadi nama lengkap Anda.</li>
                  <li>Tambahkan baris System.out.println(&ldquo;&rdquo;}; untuk diisi dengan data alamat, dan jenis kelamin.</li>
                  <li>Tambahkan komentar keterangan maksud setiap baris kode dengan dua macam perintah (//satu baris dan /* multi baris */)</li>
              </ol>
              </li>
          </ol>

          <p><strong>Unit 2: Variabel dan tipe data</strong></p>

          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Java memiliki 8 tipe data primitif yang harus didefinisikan dahulu, sebelum dapat digunakan. Deklarasi variabel pada Java harus menuliskan tipe dan nilai yang ditugaskan. tipe adalah salah satu tipe data di Java (baca slide atau video materi).<br />
          Sintaks: tipe namaVariabel = nilai;</p>

          <p><strong>Contoh 2: </strong>Apabila diketahui bentuk data berikut</p>

          <ol>
              <li>&frac12;</li>
              <li>6.0%9</li>
              <li>1.5f+3</li>
              <li>9F + 3D</li>
              <li>1.0* 1/1</li>
              <li>9 + (double) 4</li>
              <li>(int) 5.0 + 5.0</li>
              <li>(int) (5 + 5.0)</li>
              <li>(double) 5 + &ldquo;6&rdquo;</li>
          </ol>

          <p>Selanjutnya, bentuk tipe data dari data tersebut adalah</p>

          <ol>
              <li>1/2 akan memiliki tipe data INTEGER baik 1 dan 2, keduanya bertipe integer, maka luarannya adalah 0</li>
              <li>6.0%9 akan memiliki tipe data DOUBLE luarannya adalah 6.0</li>
              <li>1.5f+3 akan memiliki tipe data FLOAT penambahan float dan integer akan menghasilkan float. luarannya adalah 4.5</li>
              <li>9F+3D akan memiliki tipe data DOUBLE maka double &gt;float, luarannya adalah 12.0</li>
              <li>1.0*1/1 akan memiliki tipe data DOUBLE luarannya adalah 1.0</li>
              <li>9+(double)4 akan memiliki tipe data DOUBLE dengan double&gt;integer. luarannya adalah 13.0</li>
              <li>(int)5.0 +5.0 akan memiliki tipe data DOUBLE luarannya adalah 10.0</li>
              <li>(int)(5+5.0) akan memiliki tipe data INTEGER nilai 5+5.0 akan dikonversi menjadi integer setelah perhitungan, luarannya adalah 10</li>
              <li>(double)5+&quot;6&quot; akan memiliki tipe data STRING luarannya adalah &quot;5.06&quot;</li>
          </ol>

          <p><strong>Latihan 2:</strong></p>

          <p>2.1. Uraikan karakteristik tipe data setiap butir Contoh 2! Susun analisa Anda!<br />
          2.2. Kaitkan penggunaan tipe data dengan hasil luarannya!</p>

          <p><strong>Contoh 3</strong>: Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle</p>

          <p><code>public class tipeData {<br />
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
          }&nbsp; &nbsp;}</code></p>

          <p>Luaran:</p>

          <p><code>UNIB<br />
          2022<br />
          2023<br />
          P<br />
          5.99</code></p>

          <p><strong><span style="color:#0782c1">Latihan 3</span></strong><br />
          3.1.&nbsp;Identifikasi data pribadi Anda (Contohnya nama, umur, jenis kelamin (L / P), rata-rata NEM, dan lainnya) yang mencakup 8 tipe data primitif dan String.<br />
          3.2.&nbsp;Analisa pemilihan tipe data Java yang sesuai dengan data tersebut.<br />
          3.3.&nbsp;Analisa besarnya memori yang digunakan pada komentar keterangan setiap baris kode.</p>

          <p><strong>Unit 3 Konversi Tipe Data</strong></p>

          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sebuah variabel dapat diubah menjadi variabel lainnya dengan dua kasus yaitu:</p>

          <ol>
              <li><em>Widening Type Casting</em> atau Implisit yaitu variabel dari kapasitas yang kecil diubah menjadi variabel dengan kapasitas yang lebih besar</li>
              <li><em>Narrowing Type Casting</em> atau Eksplisit yaitu variabel dari kapasitas yang besar diubah menjadi variabel dengan kapasitas yang lebih kecil menggunakan operator cast. Apabila tidak menyebutkan operator maka kompiler akan menampilkan pesan kesalahan.</li>
          </ol>

          <p>Contoh 4: Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle</p>

          <p><code>public class KonversiTipeData {<br />
          &nbsp; public static void main(String args[]) {<br />
          &nbsp; &nbsp;&nbsp;double floatpt;<br />
          &nbsp; &nbsp;&nbsp;int integer = 35;<br />
          &nbsp; &nbsp;&nbsp;floatpt = integer;<br />
          &nbsp; &nbsp;&nbsp;System.out.println(&quot;Angka pertama = &quot; + integer);<br />
          &nbsp; &nbsp;&nbsp;System.out.println(&quot;Setelah konversi = &quot; + floatpt);<br />
          &nbsp; &nbsp;&nbsp;floatpt = 3.5;<br />
          &nbsp; &nbsp;&nbsp;integer = (int) floatpt;<br />
          &nbsp; &nbsp;&nbsp;System.out.println(&quot;\\nAngka kedua = &quot; + floatpt);<br />
          &nbsp; &nbsp;&nbsp;System.out.println(&quot;Setelah konversi = &quot; + integer);<br />
          }&nbsp;&nbsp; }</code></p>

          <pre>
          Luaran:</pre>

          <p><code>Angka pertama = 35<br />
          Setelah konversi = 35.0<br />
          <br />
          Angka kedua = 3.5<br />
          Setelah konversi = 3</code></p>

          <p><strong>Latihan 4:</strong></p>

          <p>4.1. Baris kode ke-3 sampai ke-7 merupakan contoh konversi tipe data dengan cara implisit. Tipe ini terjadi karena mengkonversi dari tipe data lebih kecil ke tipe data lebih besar. Berikan analisa mengapa tipe data int dan double dianggap sebagai tipe data yang lebih besar!<br />
          4.2. Baris kode ke-8 sampai ke-11 merupakan bentuk konversi tipe data dengan cara apa? Berikan analisa mengapa ini bisa terjadi?</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-tipe-data-5162f1d7460c8e2.pdf','url_materi' => 'https://www.youtube.com/watch?v=OjY8ByJE_bA','url_kedua_materi' => 'https://www.youtube.com/watch?v=at27jZTFWe8','critical_status' => '0','created_at' => '2022-08-09 10:40:54','updated_at' => '2022-08-25 13:08:40'),

            array('id' => '73','topik_pembahasan_id' => '51','nama_materi' => 'Tipe Data','isi_materi' => '<p>Java adalah salah satu bahasa pemrograman yang bersifat <em>opensource</em> yang merupakan produk dari <em>Sun Microsystem</em> dan sekarang dipegang oleh Oracle. Java adalah salah satu bahasa pemrogaman <em>multiplatform</em> (dapat berjalan di berbagai sistem operasi) karena mempunyai JRE (Java Runtime Environment). Untuk bisa bekerja dengan Java, maka kita perlu melakukan instalasi Java Development Kit (JDK) dan Eclipse sebagai editor kode.</p>

          <p>File instalasi JDK dan Eclipse dapat diunduh pada <a href="https://bit.ly/3bswtxK">https://bit.ly/3bswtxK</a> atau dapat menggunakan kompiler daring pada alamat <a href="https://www.jdoodle.com/online-java-compiler/">https://www.jdoodle.com/online-java-compiler/</a>.</p>

          <p>Video penjelasan pembelajaran dapat diakses pada Chanel <strong>Youtube Rumah Ilmu Raflesia</strong><br />
          <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

          <p><a href="http://youtu.be/OjY8ByJE_bA" target="_blank">Video Bagian 1 &ndash; Pengenalan dan Struktur Program Java</a> &nbsp;&nbsp;&nbsp;<a href="https://youtu.be/OjY8ByJE_bA">https://youtu.be/OjY8ByJE_bA</a></p>

          <p><a href="https://youtu.be/at27jZTFWe8">Video Bagian 2 &ndash; Tipe Data dan Konversi Java</a> &nbsp;&nbsp;&nbsp;<a href="https://youtu.be/at27jZTFWe8">https://youtu.be/at27jZTFWe8</a></p>

          <p><br />
          <strong>Unit 1: Deklarasi dasar Java</strong></p>

          <p><strong>Contoh 1</strong>:&nbsp; Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle</p>

          <p><code>public class KelasKu { //perhatikan nama kelas <strong>harus sama </strong>dengan nama file Java<br />
          &nbsp; private static void main(String[] args) {&nbsp; //deklarasi method main utama<br />
          &nbsp; &nbsp;&nbsp;System.out.println(&quot;Halo Mahasiswa UNIB)&nbsp; &nbsp;//menampilkan teks&nbsp;<br />
          }&nbsp; &nbsp;}</code></p>

          <p>Luaran:<br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problem:<br />
          &nbsp; &nbsp;String literal is not properly closed by a double-quote<br />
          &nbsp; &nbsp;Syntax error, insert &quot;;&quot; to complete BlockStatements</code></p>

          <p><strong>Latihan 1:</strong></p>

          <p>1.1&nbsp; Evaluasi penyebab kesalahan terjadi dan perbaiki agar program dapat berjalan!<br />
          1.2.&nbsp;Ubah teks yang ditampilkan program menjadi nama lengkap Anda.<br />
          1.3. Tambahkan baris System.out.println(&ldquo;&rdquo;}; untuk diisi dengan data alamat, dan jenis kelamin.</p>

          <p>&nbsp;</p>

          <p><strong>Unit 2: Variabel dan tipe data</strong></p>

          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Java memiliki 8 tipe data primitif dan non-primitif (baca slide atau video materi).</p>

          <p><strong>Contoh 2: </strong>Apabila diketahui data berikut</p>

          <ol>
              <li>5</li>
              <li>&lsquo;L&rsquo;</li>
              <li>&ldquo;mobil&rdquo;</li>
              <li>5.0</li>
              <li>5.0f</li>
              <li>-5</li>
          </ol>

          <p><strong>Latihan 2:</strong><br />
          2.1.&nbsp;Rekomendasikan tipe data yang tepat dari data Contoh 2.<br />
          2.2.&nbsp;&nbsp;Simpulkan karakteristik penggunaan setiap tipe data!</p>

          <p>&nbsp;</p>

          <p><strong>Contoh 3</strong>: Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle</p>

          <p><code>public class TipeData {</code></p>

          <p><code>public static void main(String args[]) {<br />
          int a = 55555555555;<br />
          byte b = 4444444444;<br />
          float c = 12.345678910f;<br />
          double d = 12.345678910d;<br />
          char e = &#39;abc&#39;;<br />
          <br />
          System.out.println(a);<br />
          System.out.println(b);<br />
          System.out.println(c);<br />
          System.out.println(d);<br />
          System.out.println(e);<br />
          }&nbsp;&nbsp;&nbsp; }</code></p>

          <p>Luaran:</p>

          <p><code>/TipeData.java:3: error: integer number too large<br />
          &nbsp; int a = 55555555555;</code></p>

          <p><code>/TipeData.java:4: error: integer number too large<br />
          &nbsp; &nbsp;byte b = 4444444444;</code></p>

          <p><code>/TipeData.java:7: error: unclosed character literal<br />
          &nbsp; &nbsp;char e = abc&#39;;</code><br />
          <code>3 errors</code></p>

          <p><strong>Latihan 3:</strong></p>

          <p>3.1. Berikan argumentasi alasan penyebab kesalahan pada Contoh 3!<br />
          3.2.&nbsp;Rekomendasikan tipe data yang sesuai untuk perbaikan data tersebut!</p>

          <p>&nbsp;</p>

          <p><strong>Unit 3 Konversi Tipe Data</strong></p>

          <p><strong>Contoh 4:</strong> Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle</p>

          <p><code>public class KonversiTipeData {<br />
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
          }&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }</code></p>

          <pre>
          <code>Luaran:
          int dikonversi ke byte
          a dan x 270 14
          double dikonversi ke int
          b dan a 128.128 128
          double dikonversi ke byte
          b dan x 128.128 -128</code></pre>

          <p>&nbsp;</p>

          <p><strong>Latihan 4:</strong><br />
          4.1.&nbsp;Rekomendasikan konversi tipe data pada Latihan 2 ke bentuk tipe data lain yang kompatibel.<br />
          4.2.&nbsp;Simpulkan alasan jenis konversi tipe data tersebut! &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-tipe-data-5162f2167572920.pdf','url_materi' => 'https://www.youtube.com/watch?v=OjY8ByJE_bA','url_kedua_materi' => 'https://www.youtube.com/watch?v=at27jZTFWe8','critical_status' => '1','created_at' => '2022-08-09 15:10:29','updated_at' => '2022-08-25 13:11:18'),
            array('id' => '74','topik_pembahasan_id' => '50','nama_materi' => 'Tipe Data','isi_materi' => '<p>Java adalah salah satu bahasa pemrograman yang bersifat <em>open source</em> yang merupakan produk dari <em>Sun Microsystem</em> dan sekarang dipegang oleh Oracle. Java adalah salah satu bahasa pemrogaman <em>multiplatform</em> (dapat berjalan di berbagai sistem operasi) karena mempunyai JRE (Java Runtime Environment). Untuk bisa bekerja dengan Java, maka kita perlu melakukan instalasi Java Development Kit (JDK) dan Eclipse sebagai editor kode.</p>

          <p>File instalasi JDK dan Eclipse dapat diunduh pada <a href="https://bit.ly/3bswtxK">https://bit.ly/3bswtxK</a> atau dapat menggunakan kompiler daring pada alamat <a href="https://www.jdoodle.com/online-java-compiler/">https://www.jdoodle.com/online-java-compiler/</a>.</p>

          <p>Video penjelasan pembelajaran dapat diakses pada Chanel <strong>Youtube Rumah Ilmu Raflesia</strong><br />
          <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

          <p><a href="http://youtu.be/OjY8ByJE_bA" target="_blank">Video Bagian 1 &ndash; Pengenalan dan Struktur Program Java</a> &nbsp;&nbsp;&nbsp;<a href="https://youtu.be/OjY8ByJE_bA">https://youtu.be/OjY8ByJE_bA</a></p>

          <p><a href="https://youtu.be/at27jZTFWe8">Video Bagian 2 &ndash; Tipe Data dan Konversi Java</a> &nbsp;&nbsp;&nbsp;<a href="https://youtu.be/at27jZTFWe8">https://youtu.be/at27jZTFWe8</a></p>

          <p><br />
          <strong>Unit 1: Deklarasi dasar Java</strong></p>

          <p><strong>Contoh 1</strong>:&nbsp; Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p><code>public class KelasKu {<br />
          &nbsp; private static void main(String[] args) {<br />
          &nbsp; &nbsp;&nbsp;System.out.println(&quot;Halo Mahasiswa UNIB)<br />
          }&nbsp; &nbsp;}</code></p>

          <p>Luaran:<br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problem:<br />
          &nbsp; &nbsp;String literal is not properly closed by a double-quote<br />
          &nbsp; &nbsp;Syntax error, insert &quot;;&quot; to complete BlockStatements</code></p>

          <p><strong>Latihan 1:</strong></p>

          <p>1.1&nbsp; Evaluasi penyebab kesalahan terjadi dan perbaiki agar program dapat berjalan!<br />
          1.2.&nbsp;Ubah teks yang ditampilkan program menjadi nama lengkap Anda.<br />
          1.3. Tambahkan baris System.out.println(&ldquo;&rdquo;}; untuk diisi dengan data alamat, dan jenis kelamin.</p>

          <p>&nbsp;</p>

          <p><strong>Unit 2: Variabel dan tipe data</strong></p>

          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Java memiliki 8 tipe data primitif dan non-primitif (baca slide atau video materi).</p>

          <p><strong>Contoh 2: </strong>Apabila diketahui data berikut</p>

          <ol>
              <li>5</li>
              <li>&lsquo;L&rsquo;</li>
              <li>&ldquo;mobil&rdquo;</li>
              <li>5.0</li>
              <li>5.0f</li>
              <li>-5</li>
          </ol>

          <p><strong>Latihan 2:</strong><br />
          2.1.&nbsp;Rekomendasikan tipe data yang tepat dari data Contoh 2.<br />
          2.2.&nbsp;&nbsp;Simpulkan karakteristik penggunaan setiap tipe data!</p>

          <p>&nbsp;</p>

          <p><strong>Contoh 3</strong>: Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle</p>

          <p><code>public class TipeData {</code></p>

          <p><code>public static void main(String args[]) {<br />
          int a = 55555555555;<br />
          byte b = 4444444444;<br />
          float c = 12.345678910f;<br />
          double d = 12.345678910d;<br />
          char e = &#39;abc&#39;;<br />
          <br />
          System.out.println(a);<br />
          System.out.println(b);<br />
          System.out.println(c);<br />
          System.out.println(d);<br />
          System.out.println(e);<br />
          }&nbsp;&nbsp;&nbsp; }</code></p>

          <p>Luaran:</p>

          <p><code>/TipeData.java:3: error: integer number too large<br />
          &nbsp; int a = 55555555555;</code></p>

          <p><code>/TipeData.java:4: error: integer number too large<br />
          &nbsp; &nbsp;byte b = 4444444444;</code></p>

          <p><code>/TipeData.java:7: error: unclosed character literal<br />
          &nbsp; &nbsp;char e = abc&#39;;</code><br />
          <code>3 errors</code></p>

          <p><strong>Latihan 3:</strong></p>

          <p>3.1. Evaluasi penyebab kesalahan pada Contoh 3!<br />
          3.2.&nbsp;Rekomendasikan tipe data yang sesuai untuk data tersebut!</p>

          <p>&nbsp;</p>

          <p><strong>Unit 3 Konversi Tipe Data</strong></p>

          <p><strong>Contoh 4:</strong> Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle</p>

          <p><code>public class KonversiTipeData {<br />
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
          }&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }</code></p>

          <pre>
          <code>Luaran:
          int dikonversi ke byte
          a dan x 270 14
          double dikonversi ke int
          b dan a 128.128 128
          double dikonversi ke byte
          b dan x 128.128 -128</code></pre>

          <p>&nbsp;</p>

          <p><strong>Latihan 4:</strong><br />
          4.1.&nbsp;Rekomendasikan konversi tipe data pada Latihan 2 ke bentuk tipe data lain yang kompatibel.<br />
          4.2.&nbsp;Simpulkan alasan jenis konversi tipe data tersebut! &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-tipe-data-5062f216ff1598c.pdf','url_materi' => 'https://www.youtube.com/watch?v=OjY8ByJE_bA','url_kedua_materi' => 'https://youtu.be/watch?v=at27jZTFWe8','critical_status' => '1','created_at' => '2022-08-09 15:12:47','updated_at' => '2022-08-25 12:40:07'),
            array('id' => '75','topik_pembahasan_id' => '50','nama_materi' => 'Tipe Data','isi_materi' => '<p>Java adalah salah satu bahasa pemrograman yang bersifat <em>opensource</em> yang merupakan produk dari <em>Sun Microsystem</em> dan sekarang dipegang oleh Oracle. Java adalah salah satu bahasa pemrogaman <em>multiplatform</em> (dapat berjalan di berbagai sistem operasi) karena mempunyai JRE (<em>Java Runtime Environment</em>). Untuk bisa bekerja dengan Java, maka kita perlu melakukan instalasi <em>Java Development Kit</em> (JDK) dan Eclipse sebagai editor kode.</p>

          <p>File instalasi JDK dan Eclipse dapat diunduh pada <a href="https://bit.ly/3bswtxK">https://bit.ly/3bswtxK</a> atau dapat menggunakan kompiler daring pada alamat <a href="https://www.jdoodle.com/online-java-compiler/">https://www.jdoodle.com/online-java-compiler/</a>.</p>

          <p>Video penjelasan pembelajaran dapat diakses pada Chanel <strong>Youtube Rumah Ilmu Raflesia</strong><br />
          <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

          <p><a href="http://youtu.be/OjY8ByJE_bA" target="_blank">Video Bagian 1 &ndash; Pengenalan dan Struktur Program Java</a> &nbsp;&nbsp;&nbsp;<a href="https://youtu.be/OjY8ByJE_bA">https://youtu.be/OjY8ByJE_bA</a></p>

          <p><a href="https://youtu.be/at27jZTFWe8">Video Bagian 2 &ndash; Tipe Data dan Konversi Java</a> &nbsp;&nbsp;&nbsp;<a href="https://youtu.be/at27jZTFWe8">https://youtu.be/at27jZTFWe8</a></p>

          <p><br />
          <strong>Unit 1: Deklarasi dasar Java</strong></p>

          <p><strong>Contoh 1:&nbsp; </strong>Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p><code>public class KelasKu {<br />
          &nbsp;&nbsp;&nbsp;&nbsp; private static void main(String[] args) {<br />
          &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;System.out.println(&quot;Halo Mahasiswa UNIB<br />
          } &nbsp;&nbsp;}</code></p>

          <p>Luaran:<br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problem:<br />
          &nbsp; &nbsp;String literal is not properly closed by a double-quote<br />
          &nbsp; &nbsp;Syntax error, insert &quot;;&quot; to complete BlockStatements</code></p>

          <p><strong>Latihan 1</strong><br />
          1.1. Evaluasi penyebab kesalahan terjadi dan perbaiki agar program dapat berjalan!<br />
          1.2. Susun kode program Java yang menampilkan data pribadi Anda! (min. 5 informasi data diri)</p>

          <p>&nbsp;</p>

          <p><strong>Unit 2: Variabel dan tipe data</strong></p>

          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Java memiliki 8 tipe data primitif dan non-primitif (baca slide atau video materi).</p>

          <p>Contoh 2: Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p><code>public class TipeData {<br />
          &nbsp; public static void main(String args[]) {<br />
          &nbsp;&nbsp;&nbsp; int a = 55555555555;<br />
          &nbsp;&nbsp;&nbsp; byte b = 4444444444;<br />
          &nbsp;&nbsp;&nbsp; float c = 12.345678910f;<br />
          &nbsp;&nbsp;&nbsp; double d = 12.345678910d;<br />
          &nbsp;&nbsp;&nbsp; char e = &#39;abc&#39;;<br />
          <br />
          &nbsp;&nbsp;&nbsp; System.out.println(a);<br />
          &nbsp;&nbsp;&nbsp; System.out.println(b);<br />
          &nbsp;&nbsp;&nbsp; System.out.println(c);<br />
          &nbsp;&nbsp;&nbsp; System.out.println(d);<br />
          &nbsp;&nbsp; &nbsp;System.out.println(e);<br />
          }&nbsp;&nbsp;&nbsp; }</code></p>

          <p>Luaran:<br />
          <code>/TipeData.java:3: error: integer number too large<br />
          &nbsp;&nbsp; int a = 55555555555;<br />
          /TipeData.java:4: error: integer number too large<br />
          &nbsp;&nbsp;&nbsp; byte b = 4444444444;<br />
          /TipeData.java:7: error: unclosed character literal<br />
          &nbsp;&nbsp;&nbsp; char e = abc&#39;;<br />
          3 errors</code></p>

          <p><strong>Latihan 2:</strong><br />
          2.1. Susun kembali sintaks kode untuk memperbaiki pesan kesalahan tersebut! Berikan kesimpulan!</p>

          <p><strong>Latihan 3:</strong><br />
          3.1. Identifikasi data pribadi Anda (Contohnya nama, umur, jenis kelamin (L / P), rata-rata NEM, dan lainnya) yang mencakup 8 tipe data primitif dan String.<br />
          3.2. Susunlah kode program Java berdasarkan tipe data pribadi Anda!</p>

          <p>&nbsp;</p>

          <p><strong>Unit 3 Konversi Tipe Data</strong></p>

          <p><strong>Contoh 3:</strong> Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p><code>public class KonversiTipeData {<br />
          &nbsp; public static void main(String args[]) {<br />
          &nbsp;&nbsp;&nbsp;&nbsp; byte x;<br />
          &nbsp;&nbsp;&nbsp;&nbsp; int a = 270;<br />
          &nbsp;&nbsp;&nbsp; &nbsp;double b = 128.128;<br />
          &nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;int dikonversi ke byte&quot;);<br />
          &nbsp;&nbsp;&nbsp;&nbsp; x = (byte) a;<br />
          &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;a dan x &quot; + a + &quot; &quot; + x);<br />
          &nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;double dikonversi ke int&quot;);<br />
          &nbsp;&nbsp;&nbsp;&nbsp; a = (int) b;<br />
          &nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;b dan a &quot; + b + &quot; &quot; + a);<br />
          &nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;double dikonversi ke byte&quot;);<br />
          &nbsp;&nbsp;&nbsp;&nbsp; x = (byte)b;<br />
          &nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;b dan x &quot; + b + &quot; &quot; + x);<br />
          }&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }</code></p>

          <pre>
          Luaran:</pre>

          <p><code>int dikonversi ke byte<br />
          a dan x 270 14<br />
          double dikonversi ke int<br />
          b dan a 128.128 128<br />
          double dikonversi ke byte<br />
          b dan x 128.128 -128</code></p>

          <p><strong>Latihan 4:</strong></p>

          <p>4.1. Konstruksikan kode program konversi tipe data pada Latihan 3 ke bentuk tipe data lain yang kompatibel.<br />
          4.2. Simpulkan alasan kode yang disusun, jenis konversi tipe data implisit dan eksplisit!&nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-tipe-data-5062f21a86a402f.pdf','url_materi' => 'https://www.youtube.com/watch?v=OjY8ByJE_bA','url_kedua_materi' => 'https://youtu.be/watch?v=at27jZTFWe8','critical_status' => '2','created_at' => '2022-08-09 15:27:50','updated_at' => '2022-08-25 12:56:52'),
            array('id' => '76','topik_pembahasan_id' => '51','nama_materi' => 'Tipe Data','isi_materi' => '<p>Java adalah salah satu bahasa pemrograman yang bersifat <em>opensource</em> yang merupakan produk dari <em>Sun Microsystem</em> dan sekarang dipegang oleh Oracle. Java adalah salah satu bahasa pemrogaman <em>multiplatform</em> (dapat berjalan di berbagai sistem operasi) karena mempunyai JRE (<em>Java Runtime Environment</em>). Untuk bisa bekerja dengan Java, maka kita perlu melakukan instalasi <em>Java Development Kit</em> (JDK) dan Eclipse sebagai editor kode.</p>

          <p>File instalasi JDK dan Eclipse dapat diunduh pada <a href="https://bit.ly/3bswtxK">https://bit.ly/3bswtxK</a> atau dapat menggunakan kompiler daring pada alamat <a href="https://www.jdoodle.com/online-java-compiler/">https://www.jdoodle.com/online-java-compiler/</a>.</p>

          <p>Video penjelasan pembelajaran dapat diakses pada Chanel <strong>Youtube Rumah Ilmu Raflesia</strong><br />
          <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

          <p><a href="http://youtu.be/OjY8ByJE_bA" target="_blank">Video Bagian 1 &ndash; Pengenalan dan Struktur Program Java</a> &nbsp;&nbsp;&nbsp;<a href="https://youtu.be/OjY8ByJE_bA">https://youtu.be/OjY8ByJE_bA</a></p>

          <p><a href="https://youtu.be/at27jZTFWe8">Video Bagian 2 &ndash; Tipe Data dan Konversi Java</a> &nbsp;&nbsp;&nbsp;<a href="https://youtu.be/at27jZTFWe8">https://youtu.be/at27jZTFWe8</a></p>

          <p><br />
          <strong>Unit 1: Deklarasi dasar Java</strong></p>

          <p><strong>Contoh 1:&nbsp; </strong>Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle</p>

          <p><code>public class KelasKu {<br />
          &nbsp;&nbsp;&nbsp;&nbsp; private static void main(String[] args) {<br />
          &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;System.out.println(&quot;Halo Mahasiswa UNIB<br />
          } &nbsp;&nbsp;}</code></p>

          <p>Luaran:<br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problem:<br />
          &nbsp; &nbsp;String literal is not properly closed by a double-quote<br />
          &nbsp; &nbsp;Syntax error, insert &quot;;&quot; to complete BlockStatements</code></p>

          <p><strong>Latihan 1</strong><br />
          1.1. Evaluasi penyebab kesalahan terjadi dan perbaiki agar program dapat berjalan!<br />
          1.2. Susun kode program Java yang menampilkan data pribadi Anda! (min. 5 informasi data diri)</p>

          <p>&nbsp;</p>

          <p><strong>Unit 2: Variabel dan tipe data</strong></p>

          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Java memiliki 8 tipe data primitif dan non-primitif (baca slide atau video materi).</p>

          <p>Contoh 2: Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p><code>public class TipeData {<br />
          &nbsp; public static void main(String args[]) {<br />
          &nbsp;&nbsp;&nbsp; int a = 55555555555;<br />
          &nbsp;&nbsp;&nbsp; byte b = 4444444444;<br />
          &nbsp;&nbsp;&nbsp; float c = 12.345678910f;<br />
          &nbsp;&nbsp;&nbsp; double d = 12.345678910d;<br />
          &nbsp;&nbsp;&nbsp; char e = &#39;abc&#39;;<br />
          <br />
          &nbsp;&nbsp;&nbsp; System.out.println(a);<br />
          &nbsp;&nbsp;&nbsp; System.out.println(b);<br />
          &nbsp;&nbsp;&nbsp; System.out.println(c);<br />
          &nbsp;&nbsp;&nbsp; System.out.println(d);<br />
          &nbsp;&nbsp; &nbsp;System.out.println(e);<br />
          }&nbsp;&nbsp;&nbsp; }</code></p>

          <p>Luaran:<br />
          <code>/TipeData.java:3: error: integer number too large<br />
          &nbsp;&nbsp; int a = 55555555555;<br />
          /TipeData.java:4: error: integer number too large<br />
          &nbsp;&nbsp;&nbsp; byte b = 4444444444;<br />
          /TipeData.java:7: error: unclosed character literal<br />
          &nbsp;&nbsp;&nbsp; char e = abc&#39;;<br />
          3 errors</code></p>

          <p><strong>Latihan 2:</strong><br />
          2.1. Susun kembali sintaks kode untuk memperbaiki pesan kesalahan tersebut! Berikan kesimpulan!</p>

          <p><strong>Latihan 3:</strong><br />
          3.1. Identifikasi data pribadi Anda (Contohnya nama, umur, jenis kelamin (L / P), rata-rata NEM, dan lainnya) yang mencakup tipe data primitif dan String.<br />
          3.2. Susunlah kode program Java berdasarkan tipe data pribadi Anda!</p>

          <p>&nbsp;</p>

          <p><strong>Unit 3 Konversi Tipe Data</strong></p>

          <p><strong>Contoh 3:</strong> Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle</p>

          <p><code>public class KonversiTipeData {<br />
          &nbsp; public static void main(String args[]) {<br />
          &nbsp;&nbsp;&nbsp;&nbsp; byte x;<br />
          &nbsp;&nbsp;&nbsp;&nbsp; int a = 270;<br />
          &nbsp;&nbsp;&nbsp; &nbsp;double b = 128.128;<br />
          &nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;int dikonversi ke byte&quot;);<br />
          &nbsp;&nbsp;&nbsp;&nbsp; x = (byte) a;<br />
          &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;a dan x &quot; + a + &quot; &quot; + x);<br />
          &nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;double dikonversi ke int&quot;);<br />
          &nbsp;&nbsp;&nbsp;&nbsp; a = (int) b;<br />
          &nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;b dan a &quot; + b + &quot; &quot; + a);<br />
          &nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;double dikonversi ke byte&quot;);<br />
          &nbsp;&nbsp;&nbsp;&nbsp; x = (byte)b;<br />
          &nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;b dan x &quot; + b + &quot; &quot; + x);<br />
          }&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }</code></p>

          <pre>
          Luaran:</pre>

          <p><code>int dikonversi ke byte<br />
          a dan x 270 14<br />
          double dikonversi ke int<br />
          b dan a 128.128 128<br />
          double dikonversi ke byte<br />
          b dan x 128.128 -128</code></p>

          <p><strong>Latihan 4:</strong></p>

          <p>4.1. Rangkailah kode program konversi tipe data pada Latihan 3 ke bentuk tipe data lain.<br />
          4.2. Simpulkan alasan kode yang disusun, jenis konversi tipe data implisit dan eksplisit!&nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-tipe-data-5162f21acc45b16.pdf','url_materi' => 'https://www.youtube.com/watch?v=OjY8ByJE_bA','url_kedua_materi' => 'https://www.youtube.com/watch?v=at27jZTFWe8','critical_status' => '2','created_at' => '2022-08-09 15:29:00','updated_at' => '2022-08-25 13:12:23'),
            array('id' => '77','topik_pembahasan_id' => '50','nama_materi' => 'Tipe Data','isi_materi' => '<p>Java adalah salah satu bahasa pemrograman yang bersifat <em>opensource</em> yang merupakan produk dari <em>Sun Microsystem</em> dan sekarang dipegang oleh Oracle. Java adalah salah satu bahasa pemrogaman <em>multiplatform</em> (dapat berjalan di berbagai sistem operasi) karena mempunyai JRE (Java Runtime Environment). Untuk bisa bekerja dengan Java, maka kita perlu melakukan instalasi Java Development Kit (JDK) dan Eclipse sebagai editor kode.</p>

          <p>File instalasi JDK dan Eclipse dapat diunduh pada <a href="https://bit.ly/3bswtxK">https://bit.ly/3bswtxK</a> atau dapat menggunakan kompiler daring pada alamat <a href="https://www.jdoodle.com/online-java-compiler/">https://www.jdoodle.com/online-java-compiler/</a>.</p>

          <p>Video penjelasan pembelajaran dapat diakses pada Chanel <strong>Youtube Rumah Ilmu Raflesia</strong><br />
          <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

          <p><a href="http://youtu.be/OjY8ByJE_bA" target="_blank">Video Bagian 1 &ndash; Pengenalan dan Struktur Program Java</a> &nbsp;&nbsp;&nbsp;<a href="https://youtu.be/OjY8ByJE_bA">https://youtu.be/OjY8ByJE_bA</a></p>

          <p><a href="https://youtu.be/at27jZTFWe8">Video Bagian 2 &ndash; Tipe Data dan Konversi Java</a> &nbsp;&nbsp;&nbsp;<a href="https://youtu.be/at27jZTFWe8">https://youtu.be/at27jZTFWe8</a></p>

          <p><strong>Unit 1: Deklarasi dasar Java</strong></p>

          <p>Java adalah bahasa berorientasi objek (OOP) setiap objek pada Java disebut &quot;class&quot;. Di Java, ketika mengkompilasi sebuah program, setiap kelas diubah menjadi file .class disebut kode byte. JVM <em>(Java virtual machine</em>) digunakan untuk menjalankan kode byte. Mari coba potongan program Halo Mahasiswa UNIB, yang hanya mencetak &quot;Halo Mahasiswa UNIB &quot; ke layar.</p>

          <p><strong>Contoh 1:&nbsp; </strong>Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.<br />
          <code>public class KelasKu {<br />
          &nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp; &nbsp; &nbsp;System.out.println(&quot;Halo Mahasiswa UNIB &quot;);<br />
          }&nbsp; }</code></p>

          <p>Luaran: <code>Halo Mahasiswa UNIB</code></p>

          <p>Penjelasan:<br />
          Baris pertama mendefinisikan kelas yang bernama iniKelas</p>

          <p><code>public class KelasKu {</code></p>

          <p>Pada Java, setiap baris kode yang akan dijalankan harus berada di dalam <code><strong>class </strong></code>yang diawali dan diakhiri kurung kurawal { }. Baris ini mendeklarasikan sebuah kelas bernama KelasKu, yang bersifat <strong>public</strong>, artinya setiap kelas lain dapat mengaksesnya. Perhatikan bahwa ketika mendeklarasikan kelas public, kita harus mendeklarasikannya di dalam file dengan nama yang sama (KelasKu.java), jika tidak, kita akan mendapatkan kesalahan saat kompilasi.<br />
          Catatan: Penamaan pada Java bersifat case sensitive, artinya KelasKu dan kelasku memiliki makna kelas yang berbeda. Nama dokumen *.java dan *.class harus sama.</p>

          <p>Baris berikutnya adalah:</p>

          <p><code>public static void main(String[] args) {</code><br />
          Berdasarkan video pembelajaran yang telah Anda simak. Baris ini adalah metode utama untuk menjalankan program.</p>

          <ul>
              <li><code>public </code>lagi berarti siapa pun dapat mengaksesnya.</li>
              <li><code>static </code>berarti Anda dapat menjalankan metode ini tanpa membuat instance dari iniKelas.</li>
              <li><code>void </code>berarti metode ini tidak mengembalikan nilai apa pun.</li>
              <li><code>Main () </code>adalah nama metode yang harus ada dan dibutuhkan disetiap program Java.</li>
              <li><code>String[] args</code> adalah argumen yang akan kita dapatkan saat menjalankan program dengan parameter dalam array string.</li>
          </ul>

          <p>Baris berikutnya:<br />
          <code>System.out.println(&quot;Halo Mahasiswa UNIB &quot;);</code></p>

          <ul>
              <li>System adalah kelas yang telah disediakan Java dan memiliki beberapa metode dan variabel yang berguna.</li>
              <li>out adalah objek yang mewakili output dari program Anda.</li>
              <li>println adalah metode untuk menampilkan luaran. Pernyataan baris kode Java diakhiri dengan tanda titik koma ( ; ).</li>
          </ul>

          <p><strong>Cara Memanggil Method dalam Java</strong></p>

          <p>Method membantu dalam penggunaan ulang kode. Method terdiri dari rangkaian pernyataan, dan method ini dapat dipanggil melalui pernyataan yang lain. Saat dipanggil, semua pernyataan yang merupakan bagian dari method akan dieksekusi. Misalnya, perhatikan method ini: &quot;public static void method Contoh() {}&quot;. Saat ini tidak ada kode di dalamnya, tetapi ada tiga kata kunci sebelum nama method. Ada public, static, dan void.</p>

          <p>Kata <em>public</em> sebelum nama <em>method</em> berarti bahwa method itu sendiri bisa dipanggil dari tempat mana pun yang menyertakan <em>class</em> lain, meskipun dari paket (berkas) yang berbeda asalkan Anda mengimpor <em>class</em> tersebut. Ada kata lain yang bisa menggantikan <em>public</em>. Kata tersebut adalah <em>protected</em> dan <em>private</em>.</p>

          <p><em>Method</em> <em>protected</em>, maka hanya <em>class</em> dan <em>subclasses</em> (class yang menggunakan ini sebagai basis untuk menyusun kode) ini yang bisa memanggil method tersebut.</p>

          <p><em>Method</em> <em>private</em> hanya bisa dipanggil di dalam <em>class</em> tersebut. Kata kunci terakhir bukan benar-benar sebuah kata. Kata tersebut hanya digunakan apabila Anda tidak memiliki pengganti <em>public</em>, <em>protected</em>, atau <em>private</em>. Kata ini disebut default, atau <em>package</em>-<em>private</em>. Ini artinya hanya class dalam paket yang sama yang bisa memanggil method tersebut.</p>

          <p>Latihan 1:</p>

          <ol>
              <li>
              <ol>
                  <li>Ubah teks yang ditampilkan program Contoh 1 menjadi nama lengkap Anda.</li>
                  <li>Tambahkan baris System.out.println(&ldquo;&rdquo;}; untuk diisi dengan data alamat, dan jenis kelamin.</li>
                  <li>Tambahkan komentar keterangan maksud setiap baris kode dengan dua macam perintah (//satu baris dan /* multi baris */)</li>
              </ol>
              </li>
          </ol>

          <p><strong>Unit 2: Variabel dan tipe data</strong></p>

          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Java memiliki 8 tipe data primitif yang harus didefinisikan dahulu, sebelum dapat digunakan. Deklarasi variabel pada Java harus menuliskan tipe dan nilai yang ditugaskan. tipe adalah salah satu tipe data di Java (baca slide atau video materi).<br />
          Sintaks: tipe namaVariabel = nilai;</p>

          <p><strong>Contoh 2: </strong>Apabila diketahui bentuk data berikut</p>

          <ol>
              <li>&frac12;</li>
              <li>6.0%9</li>
              <li>1.5f+3</li>
              <li>9F + 3D</li>
              <li>1.0* 1/1</li>
              <li>9 + (double) 4</li>
              <li>(int) 5.0 + 5.0</li>
              <li>(int) (5 + 5.0)</li>
              <li>(double) 5 + &ldquo;6&rdquo;</li>
          </ol>

          <p>Selanjutnya, bentuk tipe data dari data tersebut adalah</p>

          <ol>
              <li>1/2 akan memiliki tipe data INTEGER baik 1 dan 2, keduanya bertipe integer, maka luarannya adalah 0</li>
              <li>6.0%9 akan memiliki tipe data DOUBLE luarannya adalah 6.0</li>
              <li>1.5f+3 akan memiliki tipe data FLOAT penambahan float dan integer akan menghasilkan float. luarannya adalah 4.5</li>
              <li>9F+3D akan memiliki tipe data DOUBLE maka double &gt;float, luarannya adalah 12.0</li>
              <li>1.0*1/1 akan memiliki tipe data DOUBLE luarannya adalah 1.0</li>
              <li>9+(double)4 akan memiliki tipe data DOUBLE dengan double&gt;integer. luarannya adalah 13.0</li>
              <li>(int)5.0 +5.0 akan memiliki tipe data DOUBLE luarannya adalah 10.0</li>
              <li>(int)(5+5.0) akan memiliki tipe data INTEGER nilai 5+5.0 akan dikonversi menjadi integer setelah perhitungan, luarannya adalah 10</li>
              <li>(double)5+&quot;6&quot; akan memiliki tipe data STRING luarannya adalah &quot;5.06&quot;</li>
          </ol>

          <p><strong>Latihan 2:</strong></p>

          <p>2.1. Uraikan karakteristik tipe data setiap butir Contoh 2! Susun analisa Anda!<br />
          2.2. Kaitkan penggunaan tipe data dengan hasil luarannya!</p>

          <p>Contoh 3: Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p><code>public class tipeData {<br />
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
          }&nbsp; &nbsp;}</code></p>

          <p>Luaran:</p>

          <p><code>UNIB<br />
          2022<br />
          2023<br />
          P<br />
          5.99</code></p>

          <p><strong><span style="color:#0782c1">Latihan 3</span></strong><br />
          3.1.&nbsp;Identifikasi data pribadi Anda (Contohnya nama, umur, jenis kelamin (L / P), rata-rata NEM, dan lainnya) yang mencakup 8 tipe data primitif dan String.<br />
          3.2.&nbsp;Analisa pemilihan tipe data Java yang sesuai dengan data tersebut.<br />
          3.3.&nbsp;Analisa besarnya memori yang digunakan pada komentar keterangan setiap baris kode.</p>

          <p><strong>Unit 3 Konversi Tipe Data</strong></p>

          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sebuah variabel dapat diubah menjadi variabel lainnya dengan dua kasus yaitu:</p>

          <ol>
              <li><em>Widening Type Casting</em> atau Implisit yaitu variabel dari kapasitas yang kecil diubah menjadi variabel dengan kapasitas yang lebih besar</li>
              <li><em>Narrowing Type Casting</em> atau Eksplisit yaitu variabel dari kapasitas yang besar diubah menjadi variabel dengan kapasitas yang lebih kecil menggunakan operator cast. Apabila tidak menyebutkan operator maka kompiler akan menampilkan pesan kesalahan.</li>
          </ol>

          <p>Contoh 4: Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p><code>public class KonversiTipeData {<br />
          &nbsp; public static void main(String args[]) {<br />
          &nbsp; &nbsp;&nbsp;double floatpt;<br />
          &nbsp; &nbsp;&nbsp;int integer = 35;<br />
          &nbsp; &nbsp;&nbsp;floatpt = integer;<br />
          &nbsp; &nbsp;&nbsp;System.out.println(&quot;Angka pertama = &quot; + integer);<br />
          &nbsp; &nbsp;&nbsp;System.out.println(&quot;Setelah konversi = &quot; + floatpt);<br />
          &nbsp; &nbsp;&nbsp;floatpt = 3.5;<br />
          &nbsp; &nbsp;&nbsp;integer = (int) floatpt;<br />
          &nbsp; &nbsp;&nbsp;System.out.println(&quot;\\nAngka kedua = &quot; + floatpt);<br />
          &nbsp; &nbsp;&nbsp;System.out.println(&quot;Setelah konversi = &quot; + integer);<br />
          }&nbsp;&nbsp; }</code></p>

          <pre>
          Luaran:</pre>

          <p><code>Angka pertama = 35<br />
          Setelah konversi = 35.0<br />
          <br />
          Angka kedua = 3.5<br />
          Setelah konversi = 3</code></p>

          <p><strong>Latihan 4:</strong></p>

          <p>4.1. Baris kode ke-3 sampai ke-7 merupakan contoh konversi tipe data dengan cara implisit. Tipe ini terjadi karena mengkonversi dari tipe data lebih kecil ke tipe data lebih besar. Berikan analisa mengapa tipe data int dan double dianggap sebagai tipe data yang lebih besar!<br />
          4.2. Baris kode ke-8 sampai ke-11 merupakan bentuk konversi tipe data dengan cara apa? Berikan analisa mengapa ini bisa terjadi?</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-tipe-data-5062f4f9d2a4071.pdf','url_materi' => 'https://www.youtube.com/watch?v=OjY8ByJE_bA','url_kedua_materi' => 'https://youtu.be/watch?v=at27jZTFWe8','critical_status' => '0','created_at' => '2022-08-11 19:45:06','updated_at' => '2022-08-25 12:56:34'),
            array('id' => '81','topik_pembahasan_id' => '55','nama_materi' => 'Operator','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada Chanel Youtube Rumah Ilmu Raflesia<br />
          <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw" target="_blank">https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a>&nbsp;<br />
          <a href="https://www.youtube.com/watch?v=PzCMZObexZM">Video Materi 1 &ndash; Definisi operator, unary, binary, ternary, operasi aritmatika, penugasan, relasional, increment/decrement pada laman</a>&nbsp; &nbsp;<a href="https://www.youtube.com/watch?v=PzCMZObexZM">https://www.youtube.com/watch?v=PzCMZObexZM</a>&nbsp;<br />
          <a href="https://www.youtube.com/watch?v=LcFgl0yrKEw">Video Materi 2 &ndash; Operator Logika, Kondisional, Bitwise, dan contoh pembahasan soal pada laman</a> <a href="https://www.youtube.com/watch?v=LcFgl0yrKEw">https://www.youtube.com/watch?v=LcFgl0yrKEw</a>&nbsp;<br />
          &nbsp;</p>

          <h3><strong>Unit 1 Operator</strong></h3>

          <p>Operator merupakan simbol dalam program untuk melakukan suatu operasi atau memproses data hingga memberikan hasil.<br />
          Contoh : a + b&nbsp;&nbsp; &nbsp;<br />
          simbol &ldquo; + &ldquo; merupakan operand untuk melakukan penjumlahan dari a dan b. Operator penjumlahan tergolong sebagai operator binary karena melibatkan dua operand,.<br />
          Contoh lain : -c<br />
          simbol &ldquo; &ndash; &ldquo; (minus) merupakan unary, karena hanya memiliki satu operand (yaitu c).</p>

          <p>Ekspresi adalah pernyataan yang melibatkan variabel, data, dan konstanta. Ekspresi sangat penting dalam pemrograman karena perhitungan banyak menggunakan ekspresi. Penyusunan ekspresi memakai lambang-lambang tertentu yang disebut operator.&nbsp;</p>

          <h3><strong>Unit 2 Jenis Operator</strong></h3>

          <h3><strong>1.&nbsp;&nbsp; &nbsp;Operator Aritmatika: +, -, *, /</strong></h3>

          <p>Operator aritmatika digunakan untuk melakukan perhitungan matematika. Jika operator memiliki prioritas yang sama, operator sebelah kiri akan diutamakan untuk dikerjakan terlebih dahulu. Tanda kurung biasa digunakan untuk mengubah urutan pengerjaan.&nbsp;<br />
          Misalnya: &nbsp; &nbsp;x = (2 + 3) * 2 ;&nbsp;&nbsp; &nbsp;<br />
          Menghasilkan x = 10, sebab 2 + 3 dahulu dan hasilnya dikalikan dengan 2.</p>

          <p><br />
          <strong>Contoh 1: </strong>Silahkan salin dan tempel kode program berikut ke Eclipse atau JDoodle<br />
          <code>public class OperatorAritmatika{&nbsp;<br />
          &nbsp; &nbsp;public static void main(String[] args) &nbsp;{<br />
          &nbsp; // deklarasi nilai<br />
          &nbsp; int a = 20, b = 3;<br />
          &nbsp; //operator aritmatika&nbsp;<br />
          &nbsp; System.out.println(&quot;a: &quot; +a);&nbsp;<br />
          &nbsp; System.out.println(&quot;b: &quot; +b);&nbsp;<br />
          &nbsp; System.out.println(&quot;a + b = &quot; + (a - b));&nbsp;<br />
          } &nbsp; }</code><br />
          Luaran:<br />
          <code>a: 20&nbsp;<br />
          b: 3&nbsp;<br />
          a - b = 17</code></p>

          <p><strong>Latihan 1.</strong><br />
          1.1. &nbsp;Tambahkan baris <code>System.out.println(&quot;a + b = &quot;&nbsp; + (a + b));</code> &nbsp;Ubahlah operator ( + ) dengan tanda ( -, *, /, %)<br />
          1.2. &nbsp;Analisa perhitungan matematika yang terjadi!</p>

          <p>&nbsp;</p>

          <h3><strong>2.&nbsp;&nbsp; &nbsp;Operator Penugasan&nbsp; ( = )</strong></h3>

          <p>Operator Penugasan adalah operator yang digunakan untuk memberikan nilai ke dalam variabel tertentu.&nbsp;</p>

          <p><strong>Contoh 2</strong>: Silahkan salin dan tempel kode program berikut ke Eclipse atau JDoodle<br />
          <code>public class OperatorPenugasan {<br />
          &nbsp; &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp; &nbsp; // deklarasi nilai<br />
          &nbsp; &nbsp; &nbsp; &nbsp;int a = 20, b = 3;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;//operator penugasan&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; b += a;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Penambahan : &quot; + b);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // pengurangan<br />
          &nbsp; &nbsp; &nbsp; &nbsp; b -= a;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Pengurangan : &quot; + b);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // perkalian<br />
          &nbsp; &nbsp; &nbsp; &nbsp; b *= a;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Perkalian : &quot; + b);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // Pembagian<br />
          &nbsp; &nbsp; &nbsp; &nbsp; b /= a;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Pembagian : &quot; + b);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // Sisa bagi<br />
          &nbsp; &nbsp; &nbsp; &nbsp; b %= a;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; // sekarang b=0<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Sisa Bagi: &quot; + b);<br />
          &nbsp; &nbsp; }<br />
          }</code></p>

          <p><strong>Luaran:</strong><br />
          <code>Penambahan : 23<br />
          Pengurangan : 3<br />
          Perkalian : 60<br />
          Pembagian : 3<br />
          Sisa Bagi: 3</code></p>

          <p><strong>Latihan 2.</strong><br />
          2.1. &nbsp;Bandingkan hasil Contoh 1 dengan Contoh 2!&nbsp;</p>

          <p>&nbsp;</p>

          <h3><strong>3.&nbsp;&nbsp; &nbsp;Operator Relasional: &nbsp; &lt;, &gt;, &lt;=, &gt;=, =, ==, !=&nbsp;</strong></h3>

          <p>Operator Relasi untuk menguji hubungan antara nilai dan atau variabel dan selalu menghasilkan nilai true atau false.&nbsp;</p>

          <p><strong>Contoh 3:</strong> Silahkan salin dan tempel kode program berikut ke Eclipse atau JDoodle<br />
          <code><tt>public class OperatorRealasional {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int nilaiA = 12;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int nilaiB = 4;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; boolean hasil;</tt></code></p>

          <p><code><tt>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot; A = &quot; + nilaiA + &quot;\\n B = &quot; + nilaiB);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih besar dari B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &gt; nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil A &gt; B = &quot;+ hasil);</tt></code></p>

          <p><code><tt>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih kecil dari B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &lt; nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil A &lt; B = &quot;+ hasil);</tt></code></p>

          <p><code><tt>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih besar samadengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &gt;= nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil A &gt;= B = &quot;+ hasil);</tt></code></p>

          <p><code><tt>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih kecil samadengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &lt;= nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil A &lt;= B = &quot;+ hasil);</tt></code></p>

          <p><code><tt>&nbsp; &nbsp; &nbsp; &nbsp; // apakah nilai A sama dengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA == nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil A == B = &quot;+ hasil);</tt></code></p>

          <p><code><tt>&nbsp; &nbsp; &nbsp; &nbsp; // apakah nilai A tidak samadengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA != nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil A != B = &quot;+ hasil);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</tt></code></p>

          <p><strong>Luaran:</strong>&nbsp;<br />
          <code>A = 12<br />
          B = 4</code></p>

          <p><code>Hasil A &gt; B = true<br />
          Hasil A &lt; B = false<br />
          Hasil A &gt;= B = true<br />
          Hasil A &lt;= B = false<br />
          Hasil A == B = false<br />
          Hasil A != B = true</code></p>

          <p><strong>Latihan 3</strong><br />
          3.1.&nbsp;&nbsp;Ubahlah nilai A = 4 dan B = 4. Analisa perubahan yang terjadi!&nbsp;<br />
          3.2&nbsp; &nbsp;Bandingkan bagaimana perbedaan nilai A dan B mempengaruhi nilai luaran!</p>

          <h3><strong>4.&nbsp;&nbsp; &nbsp;Operator Increment dan Decrement: ++, --</strong></h3>

          <p>Kedua operator ini digunakan pada operand bertipe bilangan bulat. Operator penaikan digunakan untuk menaikan nilai variabel sebesar satu, sedangkan operator penurunan dipakai untuk menurunkan nilai variabel sebesar satu.&nbsp;</p>

          <p><strong>Contoh 4: </strong>Silahkan salin dan tempel kode program berikut ke Eclipse atau JDoodle<br />
          <code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int a = 10;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;# Post Increment #&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;==================&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel a: &quot; + a);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel a: &quot; + a++);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel a: &quot; + a);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;int b = 10;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;# Pre Increment #&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;==================&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel b: &quot; + b);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel b: &quot; + ++b);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel b: &quot; + b);&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;int c = 10;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;# Post Decrement #&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;==================&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel c: &quot; + c);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel c: &quot; + c--);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel c: &quot; + c);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;int d = 10;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;# Pre Decrement #&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;==================&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel d: &quot; + d);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel d: &quot; + --d);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel d: &quot; + d);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code><br />
          <strong>Luaran:</strong><br />
          <code># Post Increment #<br />
          ==================<br />
          Isi variabel a: 10<br />
          Isi variabel a: 10<br />
          Isi variabel a: 11</code></p>

          <p><code># Pre Increment #<br />
          ==================<br />
          Isi variabel b: 10<br />
          Isi variabel b: 11<br />
          Isi variabel b: 11</code></p>

          <p><code># Post Decrement #<br />
          ==================<br />
          Isi variabel c: 10<br />
          Isi variabel c: 10<br />
          Isi variabel c: 9</code></p>

          <p><code># Pre Decrement #<br />
          ==================<br />
          Isi variabel d: 10<br />
          Isi variabel d: 9<br />
          Isi variabel d: 9</code></p>

          <p><strong>Latihan 4.</strong><br />
          4.1.&nbsp; Berdasarkan luaran program Contoh 4, bandingkan hasil Post dan Pre untuk Increment dan Decrement!</p>

          <h3><strong>5.&nbsp;&nbsp; &nbsp;Operator Logika: &nbsp;&amp;&amp;, ||, !&nbsp;</strong></h3>

          <p>Operator Logika untuk membandingkan dua nilai variabel atau lebih, hasilnya boolean true atau false. Asumsikan variabel a bernilai true, b bernilai false dan c bernilai true. Perbedaan dasar antara operator &amp;&amp; dan &amp; adalah &amp;&amp; mensupports evaluasi per bagian, sementara operator &amp; tidak. Misal pernyataan: exp1 AND exp2 Dengan operator &amp;&amp; akan mengevaluasi pernyataan exp1, dan segera mengembalikan nilai false dan menyatakan bahwa exp1 bernilai false. Jika exp1 bernilai false, operator tidak akan pernah mengevaluasi exp2 karena hasil operasi operator akan menjadi false tanpa memperhatikan nilai dari exp2. Dengan operator &amp; selalu mengevaluasi kedua nilai dari exp1 danexp2 sebelum mengembalikan suatu nilai jawaban. Demikian juga antara operator || dan |.<br />
          Tanda &amp;&amp; dan &amp; serta || dan | memiliki arti berbeda. &amp; dan | akan tetap mengevaluasi kondisi apa pun yang terjadi. &amp;&amp; akan menghentikan evaluasi kondisi jika salah satu ekspresi bernilai salah. Jika salah satu kondisi ekspresi salah, dipastikan hasil operasi logika bernilai salah. Sedangkan || akan menghentikan evaluasi kondisi jika salah satu ekspresi bernilai benar. Jika salah satu kondisi ekspresi benar, dipastikan hasil operasi logika bernilai benar.</p>

          <p><br />
          <strong>Contoh 5</strong>: Salin dan tempel kode berikut:<br />
          <code>&nbsp;public class OperatorLogika {<br />
          &nbsp; &nbsp; &nbsp;public static void main (String [] args) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; boolean a = true;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; boolean b = false;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; boolean c;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c = a &amp;&amp; b;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;true &amp;&amp; false = &quot; +c);<br />
          }&nbsp; &nbsp; &nbsp; }</code><br />
          <br />
          <strong>Luaran:</strong><br />
          <code>true &amp;&amp; false = false</code><br />
          &nbsp;</p>

          <p><strong>Latihan 5&nbsp;</strong><br />
          5.1.&nbsp; Tambahkan baris kode untuk memeriksa a || b.<br />
          5.2.&nbsp; Ubahlah nilai a = false dan b = false. Analisa perubahan dan perbedaan boolean yang terjadi!<br />
          5.2. &nbsp;Apabila diketahui pernyataan a || b &amp;&amp; a || !b. Uraikan urutan logika yang akan dikerjakan! Analisa luaran true atau false dari pernyataan tersebut!&nbsp;</p>

          <h3><strong>6.&nbsp;&nbsp; &nbsp;Operator Kondisional (Ternary): &nbsp;?:</strong></h3>

          <p>Operator Kondisi merupakan penyederhanaan dari bentuk if..else yang setiap blok dari if dan else hanya terdiri dari satu statement/perintah.<br />
          Bentuk umum: &nbsp;(ekspresi) ? (jika benar) : (jika salah);<br />
          <strong>Contoh 6:&nbsp;</strong><br />
          <code>public class OperatorKondisi{<br />
          &nbsp; &nbsp;public static void main( String[] args ){<br />
          &nbsp; &nbsp; &nbsp; String status = &quot;&quot;;<br />
          &nbsp; &nbsp; &nbsp; int nilai = 80;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; status = (nilai &gt; 60)?&quot;Lulus&quot;:&quot;Gagal&quot;;<br />
          &nbsp; &nbsp; &nbsp; System.out.println( status );<br />
          }&nbsp;&nbsp; &nbsp;}</code><br />
          <strong>Luaran: &nbsp;</strong><br />
          <code>Lulus</code><br />
          <strong>Latihan 6</strong><br />
          Berdasarkan Contoh 6, ubahlah nilai = 60. Analisis hasil dan proses yang terjadi!</p>

          <h3><br />
          <strong>7.&nbsp;&nbsp; &nbsp;Operator Bitwise: &amp;, |, ^, ~, &lt;&lt;, &gt;&gt;, &gt;&gt;&gt;</strong></h3>

          <p>Operator bitwise merupkan operator yang digunakan untuk operasi bit (biner).<br />
          Operator ini berlaku untuk tipe data int, long, short, char, dan byte.<br />
          Operator ini akan menghitung dari bit-ke-bit.</p>

          <p><strong>Operator&nbsp;&nbsp; &nbsp;Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Contoh&nbsp;&nbsp; &nbsp;Biner&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Hasil (biner)&nbsp;&nbsp; &nbsp;Hasil (decimal)</strong><br />
          &amp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;AND&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;10 &amp; 12&nbsp;&nbsp; &nbsp;1010 &amp; 1100&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1000&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;8<br />
          |&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; OR&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 10 | 12&nbsp; &nbsp; &nbsp;1010 | 1100&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1110&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;14<br />
          ^&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;XOR&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 10 ^ 12&nbsp;&nbsp; &nbsp;1010 ^ 1100&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 0110&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;6<br />
          ~&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;NOT&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ~10&nbsp;&nbsp; &nbsp;~1010&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;0101&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -11<br />
          &lt;&lt;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Geser kiri&nbsp; &nbsp; &nbsp; &nbsp; 10 &lt;&lt; 1&nbsp;&nbsp; &nbsp;1010 &lt;&lt; 1&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 10100&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;20<br />
          &gt;&gt;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Geser kanan&nbsp; &nbsp;10 &gt;&gt; 1&nbsp;&nbsp; &nbsp;1010 &gt;&gt; 1&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 101&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;5</p>

          <p><strong>Contoh 7:</strong> Silahkan salin dan tempel kode program berikut ke Eclipse atau JDoodle<br />
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
          <code>Hasil dari a &amp; b : 2<br />
          Hasil dari a | b : 15<br />
          Hasil dari a ^ b : 13<br />
          Hasil dari ~a : -11<br />
          Hasil dari a &gt;&gt; 1 : 5<br />
          Hasil dari b &lt;&lt; 2 : 28</code></p>

          <p><strong>Latihan 7</strong><br />
          Pilihlah 3 perhitungan Contoh 7, kemudian uraikan perhitungan biner! Simpulkan hasilnya!<br />
          &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-operator-506306372d5592f.pdf','url_materi' => 'https://www.youtube.com/watch?v=PzCMZObexZM','url_kedua_materi' => 'https://www.youtube.com/watch?v=LcFgl0yrKEw','critical_status' => '0','created_at' => '2022-08-24 21:35:25','updated_at' => '2022-09-10 10:08:19'),
            array('id' => '82','topik_pembahasan_id' => '54','nama_materi' => 'Operator','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada Chanel Youtube Rumah Ilmu Raflesia<br />
          <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw" target="_blank">https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a>&nbsp;<br />
          <a href="https://www.youtube.com/watch?v=PzCMZObexZM">Video Materi 1 &ndash; Definisi operator, unary, binary, ternary, operasi aritmatika, penugasan, relasional, increment/decrement pada laman</a>&nbsp; &nbsp;<a href="https://www.youtube.com/watch?v=PzCMZObexZM">https://www.youtube.com/watch?v=PzCMZObexZM</a>&nbsp;<br />
          <a href="https://www.youtube.com/watch?v=LcFgl0yrKEw">Video Materi 2 &ndash; Operator Logika, Kondisional, Bitwise, dan contoh pembahasan soal pada laman</a> <a href="https://www.youtube.com/watch?v=LcFgl0yrKEw">https://www.youtube.com/watch?v=LcFgl0yrKEw</a>&nbsp;<br />
          &nbsp;</p>

          <p><strong>Unit 1 Operator</strong><br />
          Operator merupakan simbol dalam program untuk melakukan suatu operasi atau memproses data hingga memberikan hasil.<br />
          Contoh : a + b&nbsp;&nbsp; &nbsp;<br />
          simbol &ldquo; + &ldquo; merupakan operand untuk melakukan penjumlahan dari a dan b. Operator penjumlahan tergolong sebagai operator binary karena melibatkan dua operand,.<br />
          Contoh lain : -c<br />
          simbol &ldquo; &ndash; &ldquo; (minus) merupakan unary, karena hanya memiliki satu operand (yaitu c).</p>

          <p>Ekspresi adalah pernyataan yang melibatkan variabel, data, dan konstanta. Ekspresi sangat penting dalam pemrograman karena perhitungan banyak menggunakan ekspresi. Penyusunan ekspresi memakai lambang-lambang tertentu yang disebut operator.&nbsp;</p>

          <p><strong>Unit 2 Jenis Operator</strong><br />
          <strong>1.&nbsp;&nbsp; &nbsp;Operator Aritmatika: +, -, *, /</strong><br />
          Operator aritmatika digunakan untuk melakukan perhitungan matematika. Jika operator memiliki prioritas yang sama, operator sebelah kiri akan diutamakan untuk dikerjakan terlebih dahulu. Tanda kurung biasa digunakan untuk mengubah urutan pengerjaan.&nbsp;<br />
          Misalnya: &nbsp; &nbsp;x = (2 + 3) * 2 ;&nbsp;&nbsp; &nbsp;<br />
          Menghasilkan x = 10, sebab 2 + 3 dahulu dan hasilnya dikalikan dengan 2.</p>

          <p><br />
          <strong>Contoh 1: </strong>Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle<br />
          <code>public class OperatorAritmatika{&nbsp;<br />
          &nbsp; &nbsp;public static void main(String[] args) &nbsp;{<br />
          &nbsp; // deklarasi nilai<br />
          &nbsp; int a = 20, b = 3;<br />
          &nbsp; //operator aritmatika&nbsp;<br />
          &nbsp; System.out.println(&quot;a: &quot; +a);&nbsp;<br />
          &nbsp; System.out.println(&quot;b: &quot; +b);&nbsp;<br />
          &nbsp; System.out.println(&quot;a + b = &quot; + (a - b));&nbsp;<br />
          } &nbsp; }</code><br />
          Luaran:<br />
          <code>a: 20&nbsp;<br />
          b: 3&nbsp;<br />
          a - b = 17</code></p>

          <p><strong>Latihan 1.</strong><br />
          1.1. &nbsp;Tambahkan baris <code>System.out.println(&quot;a + b = &quot;&nbsp; + (a + b));</code> &nbsp;Ubahlah operator ( + ) dengan tanda ( -, *, /, %)<br />
          1.2. &nbsp;Analisa perhitungan matematika yang terjadi!</p>

          <p>&nbsp;</p>

          <p><strong>2.&nbsp;&nbsp; &nbsp;Operator Penugasan&nbsp; ( = )</strong><br />
          Operator Penugasan adalah operator yang digunakan untuk memberikan nilai ke dalam variabel tertentu.&nbsp;</p>

          <p><strong>Contoh 2</strong>: Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle<br />
          <code>public class OperatorPenugasan {<br />
          &nbsp; &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp; &nbsp; // deklarasi nilai<br />
          &nbsp; &nbsp; &nbsp; &nbsp;int a = 20, b = 3;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;//operator penugasan&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; b += a;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Penambahan : &quot; + b);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // pengurangan<br />
          &nbsp; &nbsp; &nbsp; &nbsp; b -= a;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Pengurangan : &quot; + b);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // perkalian<br />
          &nbsp; &nbsp; &nbsp; &nbsp; b *= a;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Perkalian : &quot; + b);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // Pembagian<br />
          &nbsp; &nbsp; &nbsp; &nbsp; b /= a;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Pembagian : &quot; + b);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // Sisa bagi<br />
          &nbsp; &nbsp; &nbsp; &nbsp; b %= a;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; // sekarang b=0<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Sisa Bagi: &quot; + b);<br />
          &nbsp; &nbsp; }<br />
          }</code></p>

          <p><strong>Luaran:</strong><br />
          <code>Penambahan : 23<br />
          Pengurangan : 3<br />
          Perkalian : 60<br />
          Pembagian : 3<br />
          Sisa Bagi: 3</code></p>

          <p><strong>Latihan 2.</strong><br />
          2.1. &nbsp;Bandingkan hasil Contoh 1 dengan Contoh 2!&nbsp;</p>

          <p>&nbsp;</p>

          <p><strong>3.&nbsp;&nbsp; &nbsp;Operator Relasional: &nbsp; &lt;, &gt;, &lt;=, &gt;=, =, ==, !=&nbsp;</strong></p>

          <p>Operator Relasi untuk menguji hubungan antara nilai dan atau variabel dan selalu menghasilkan nilai true atau false.&nbsp;</p>

          <p><strong>Contoh 3:</strong> Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle<br />
          <code><tt>public class OperatorRealasional {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int nilaiA = 12;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int nilaiB = 4;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; boolean hasil;</tt></code></p>

          <p><code><tt>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot; A = &quot; + nilaiA + &quot;\\n B = &quot; + nilaiB);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih besar dari B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &gt; nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil A &gt; B = &quot;+ hasil);</tt></code></p>

          <p><code><tt>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih kecil dari B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &lt; nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil A &lt; B = &quot;+ hasil);</tt></code></p>

          <p><code><tt>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih besar samadengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &gt;= nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil A &gt;= B = &quot;+ hasil);</tt></code></p>

          <p><code><tt>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih kecil samadengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &lt;= nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil A &lt;= B = &quot;+ hasil);</tt></code></p>

          <p><code><tt>&nbsp; &nbsp; &nbsp; &nbsp; // apakah nilai A sama dengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA == nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil A == B = &quot;+ hasil);</tt></code></p>

          <p><code><tt>&nbsp; &nbsp; &nbsp; &nbsp; // apakah nilai A tidak samadengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA != nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil A != B = &quot;+ hasil);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</tt></code></p>

          <p><strong>Luaran:</strong>&nbsp;<br />
          <code>A = 12<br />
          B = 4</code></p>

          <p><code>Hasil A &gt; B = true<br />
          Hasil A &lt; B = false<br />
          Hasil A &gt;= B = true<br />
          Hasil A &lt;= B = false<br />
          Hasil A == B = false<br />
          Hasil A != B = true</code></p>

          <p><strong>Latihan 3</strong><br />
          3.1.&nbsp;&nbsp;Ubahlah nilai A = 4 dan B = 4. Analisa perubahan yang terjadi!&nbsp;<br />
          3.2&nbsp; &nbsp;Bandingkan bagaimana perbedaan nilai A dan B mempengaruhi nilai luaran!<br />
          &nbsp;</p>

          <p><strong>4.&nbsp;&nbsp; &nbsp;Operator Increment dan Decrement: ++, --</strong><br />
          Kedua operator ini digunakan pada operand bertipe bilangan bulat. Operator penaikan digunakan untuk menaikan nilai variabel sebesar satu, sedangkan operator penurunan dipakai untuk menurunkan nilai variabel sebesar satu.&nbsp;</p>

          <p><strong>Contoh 4: </strong>Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle<br />
          <code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int a = 10;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;# Post Increment #&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;==================&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel a: &quot; + a);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel a: &quot; + a++);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel a: &quot; + a);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;int b = 10;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;# Pre Increment #&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;==================&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel b: &quot; + b);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel b: &quot; + ++b);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel b: &quot; + b);&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;int c = 10;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;# Post Decrement #&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;==================&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel c: &quot; + c);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel c: &quot; + c--);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel c: &quot; + c);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;int d = 10;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;# Pre Decrement #&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;==================&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel d: &quot; + d);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel d: &quot; + --d);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel d: &quot; + d);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code><br />
          <strong>Luaran:</strong><br />
          <code># Post Increment #<br />
          ==================<br />
          Isi variabel a: 10<br />
          Isi variabel a: 10<br />
          Isi variabel a: 11</code></p>

          <p><code># Pre Increment #<br />
          ==================<br />
          Isi variabel b: 10<br />
          Isi variabel b: 11<br />
          Isi variabel b: 11</code></p>

          <p><code># Post Decrement #<br />
          ==================<br />
          Isi variabel c: 10<br />
          Isi variabel c: 10<br />
          Isi variabel c: 9</code></p>

          <p><code># Pre Decrement #<br />
          ==================<br />
          Isi variabel d: 10<br />
          Isi variabel d: 9<br />
          Isi variabel d: 9</code></p>

          <p><strong>Latihan 4.</strong><br />
          4.1.&nbsp; Berdasarkan luaran program Contoh 4, bandingkan hasil Post dan Pre untuk Increment dan Decrement!</p>

          <p><strong>5.&nbsp;&nbsp; &nbsp;Operator Logika: &nbsp;&amp;&amp;, ||, !&nbsp;</strong><br />
          Operator Logika untuk membandingkan dua nilai variabel atau lebih, hasilnya boolean true atau false. Asumsikan variabel a bernilai true, b bernilai false dan c bernilai true. Perbedaan dasar antara operator &amp;&amp; dan &amp; adalah &amp;&amp; mensupports evaluasi per bagian, sementara operator &amp; tidak. Misal pernyataan: exp1 AND exp2 Dengan operator &amp;&amp; akan mengevaluasi pernyataan exp1, dan segera mengembalikan nilai false dan menyatakan bahwa exp1 bernilai false. Jika exp1 bernilai false, operator tidak akan pernah mengevaluasi exp2 karena hasil operasi operator akan menjadi false tanpa memperhatikan nilai dari exp2. Dengan operator &amp; selalu mengevaluasi kedua nilai dari exp1 danexp2 sebelum mengembalikan suatu nilai jawaban. Demikian juga antara operator || dan |.<br />
          Tanda &amp;&amp; dan &amp; serta || dan | memiliki arti berbeda. &amp; dan | akan tetap mengevaluasi kondisi apa pun yang terjadi. &amp;&amp; akan menghentikan evaluasi kondisi jika salah satu ekspresi bernilai salah. Jika salah satu kondisi ekspresi salah, dipastikan hasil operasi logika bernilai salah. Sedangkan || akan menghentikan evaluasi kondisi jika salah satu ekspresi bernilai benar. Jika salah satu kondisi ekspresi benar, dipastikan hasil operasi logika bernilai benar.</p>

          <p><br />
          <strong>Contoh 5</strong>: Salin dan tempel kode berikut:<br />
          <code>&nbsp;public class OperatorLogika {<br />
          &nbsp; &nbsp; &nbsp;public static void main (String [] args) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; boolean a = true;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; boolean b = false;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; boolean c;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c = a &amp;&amp; b;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;true &amp;&amp; false = &quot; +c);<br />
          }&nbsp; &nbsp; &nbsp; }</code><br />
          <br />
          <strong>Luaran:</strong><br />
          <code>true &amp;&amp; false = false</code><br />
          &nbsp;</p>

          <p><strong>Latihan 5&nbsp;</strong><br />
          5.1.&nbsp; Tambahkan baris kode untuk memeriksa a || b.<br />
          5.2.&nbsp; Ubahlah nilai a = false dan b = false. Analisa perubahan dan perbedaan boolean yang terjadi!<br />
          5.2. &nbsp;Apabila diketahui pernyataan a || b &amp;&amp; a || !b. Uraikan urutan logika yang akan dikerjakan! Analisa luaran true atau false dari pernyataan tersebut!&nbsp;</p>

          <p><strong>6.&nbsp;&nbsp; &nbsp;Operator Kondisional (Ternary): &nbsp;?:</strong><br />
          Operator Kondisi merupakan penyederhanaan dari bentuk if..else yang setiap blok dari if dan else hanya terdiri dari satu statement/perintah.<br />
          Bentuk umum: &nbsp;(ekspresi) ? (jika benar) : (jika salah);<br />
          <strong>Contoh 6:&nbsp;</strong><br />
          <code>public class OperatorKondisi{<br />
          &nbsp; &nbsp;public static void main( String[] args ){<br />
          &nbsp; &nbsp; &nbsp; String status = &quot;&quot;;<br />
          &nbsp; &nbsp; &nbsp; int nilai = 80;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; status = (nilai &gt; 60)?&quot;Lulus&quot;:&quot;Gagal&quot;;<br />
          &nbsp; &nbsp; &nbsp; System.out.println( status );<br />
          }&nbsp;&nbsp; &nbsp;}</code><br />
          <strong>Luaran: &nbsp;</strong><br />
          <code>Lulus</code><br />
          <strong>Latihan 6</strong><br />
          Berdasarkan Contoh 6, ubahlah nilai = 60. Analisis hasil dan proses yang terjadi!</p>

          <p><br />
          <strong>7.&nbsp;&nbsp; &nbsp;Operator Bitwise: &amp;, |, ^, ~, &lt;&lt;, &gt;&gt;, &gt;&gt;&gt;</strong><br />
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

          <p><strong>Contoh 7:</strong> Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle<br />
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
          <code>Hasil dari a &amp; b : 2<br />
          Hasil dari a | b : 15<br />
          Hasil dari a ^ b : 13<br />
          Hasil dari ~a : -11<br />
          Hasil dari a &gt;&gt; 1 : 5<br />
          Hasil dari b &lt;&lt; 2 : 28</code></p>

          <p><strong>Latihan 7</strong><br />
          Pilihlah 3 perhitungan Contoh 7, kemudian uraikan perhitungan biner! Simpulkan hasilnya!<br />
          &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-operator-51630637bec811a.pdf','url_materi' => 'https://www.youtube.com/watch?v=PzCMZObexZM','url_kedua_materi' => 'https://www.youtube.com/watch?v=LcFgl0yrKEw','critical_status' => '0','created_at' => '2022-08-24 21:37:50','updated_at' => '2022-09-10 10:08:43'),
            array('id' => '83','topik_pembahasan_id' => '55','nama_materi' => 'Operator','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada Chanel Youtube <strong>Rumah Ilmu Raflesia</strong><br />
          <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw" target="_blank">https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a>&nbsp;<br />
          <strong>Video Materi 1</strong> &ndash; Definisi operator, unary, binary, ternary, operasi aritmatika, penugasan, relasional, increment/decrement pada laman&nbsp; &nbsp;<a href="https://www.youtube.com/watch?v=PzCMZObexZM">https://www.youtube.com/watch?v=PzCMZObexZM</a>&nbsp;<br />
          <strong>Video Materi 2</strong> &ndash; Operator Logika, Kondisional, Bitwise, dan contoh pembahasan soal pada laman <a href="https://www.youtube.com/watch?v=LcFgl0yrKEw">https://www.youtube.com/watch?v=LcFgl0yrKEw</a>&nbsp;</p>

          <h3><strong>Unit 1 Operator</strong></h3>

          <p>Operator merupakan simbol dalam program untuk melakukan suatu operasi atau memproses data hingga memberikan hasil.<br />
          Contoh :<br />
          <code>a + b&nbsp;&nbsp; &nbsp;</code><br />
          simbol &ldquo; + &ldquo; merupakan operand untuk melakukan penjumlahan dari a dan b. Operator penjumlahan tergolong sebagai operator binary karena melibatkan dua operand,.</p>

          <p>Contoh lain :<br />
          -c<br />
          simbol &ldquo; &ndash; &ldquo; (minus) merupakan unary, karena hanya memiliki satu operand (yaitu c).</p>

          <p><strong>Ekspresi </strong>adalah pernyataan yang melibatkan variabel, data, dan konstanta. Ekspresi sangat penting dalam pemrograman karena perhitungan banyak menggunakan ekspresi. Penyusunan ekspresi memakai lambang-lambang tertentu yang disebut operator.&nbsp;</p>

          <h3><strong>Unit 2 Jenis Operator</strong></h3>

          <h3><strong>1.&nbsp;&nbsp; &nbsp;Operator Aritmatika: +, -, *, /</strong></h3>

          <p>Operator aritmatika digunakan untuk melakukan perhitungan matematika. Jika operator memiliki prioritas yang sama, operator sebelah kiri akan diutamakan untuk dikerjakan terlebih dahulu. Tanda kurung biasa digunakan untuk mengubah urutan pengerjaan.&nbsp;</p>

          <p>Misalnya: &nbsp; &nbsp;<br />
          <code>x = (2 + 3) * 2 ;&nbsp;&nbsp; &nbsp;</code><br />
          Menghasilkan x = 10, sebab 2 + 3 dahulu dan hasilnya dikalikan dengan 2.</p>

          <p><strong>Contoh 1: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle<br />
          <code>public class OperatorAritmatika{&nbsp;<br />
          &nbsp; &nbsp;public static void main(String[] args) &nbsp;{<br />
          &nbsp; &nbsp; &nbsp;// deklarasi nilai<br />
          &nbsp; &nbsp; &nbsp; int a = 20, b = 3;<br />
          <br />
          &nbsp; &nbsp; &nbsp; //operator aritmatika&nbsp;<br />
          &nbsp; &nbsp; &nbsp; System.out.println(&quot;a: &quot; +a);&nbsp;<br />
          &nbsp; &nbsp; &nbsp; System.out.println(&quot;b: &quot; +b);&nbsp;<br />
          &nbsp; &nbsp; &nbsp; System.out.println(&quot;a + b = &quot; &nbsp;(a + b));&nbsp; //menampilkan hasil penjumlahan<br />
          } &nbsp; }</code></p>

          <p><strong>Luaran:</strong><br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;Syntax error on token &quot;&quot;a + b = &quot;&quot;, AssignmentOperator expected after this token<br />
          &nbsp;&nbsp; &nbsp;The left-hand side of an assignment must be a variable</code></p>

          <p><strong>Latihan 1</strong><br />
          1.1. Rekomendasikan perbaikan kode agar program Contoh 1 dapat berjalan!<br />
          1.2. Tambahkan baris untuk menampilkan perhitungan dengan operator ( -, *, /, %) pada Contoh 1!</p>

          <p>&nbsp;</p>

          <h3><strong>2.&nbsp;&nbsp; &nbsp;Operator Penugasan: &nbsp;=</strong></h3>

          <p>Operator Penugasan adalah operator yang digunakan untuk memberikan nilai ke dalam variabel tertentu.&nbsp;</p>

          <p><strong>Contoh 2: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle<br />
          <code>public class OperatorPenugasan {<br />
          &nbsp; &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp; &nbsp; // deklarasi nilai<br />
          &nbsp; &nbsp; &nbsp; &nbsp;int a = 20, b = 3;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;//operator penugasan&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; b += a;&nbsp; //melakukan perhitungan penjumlahan<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Penambahan : &quot; + b);&nbsp; // menampilkan hasil perhitungan&nbsp;penjumlahan<br />
          &nbsp; &nbsp; }<br />
          }</code></p>

          <p><strong>Luaran:</strong><br />
          <code>Penambahan : 23</code></p>

          <p><strong>Latihan 2.</strong><br />
          2.1. &nbsp;Tambahkan baris Contoh 2 untuk menampilkan perhitungan dengan operator ( -=, *=, &nbsp;/=, %=)!<br />
          2.2. &nbsp;Berikan argumentasi tentang perbedaan luaran dan waktu eksekusi Contoh 1 dan Contoh 2!&nbsp;<br />
          &nbsp;</p>

          <h3><strong>3.&nbsp;&nbsp; &nbsp;Operator Relasional: &nbsp; &lt;, &gt;, &lt;=, &gt;=, =, ==, !=&nbsp;</strong></h3>

          <p>Operator Relasi untuk menguji hubungan antara nilai dan atau variabel dan selalu menghasilkan nilai true atau false.&nbsp;</p>

          <p><strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle<br />
          <code>public class OperatorRelasional {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int nilaiA = 12;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int nilaiB = 4;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; boolean hasil;</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot; A = &quot; + nilaiA + &quot;\\n B = &quot; + nilaiB);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih besar dari B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &gt; nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &gt; B = &quot;+ hasil);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih kecil dari B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &lt; nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &lt; B = &quot;+ hasil);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih besar samadengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &gt;= nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &gt;= B = &quot;+ hasil);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih kecil samadengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &lt;= nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &lt;= B = &quot;+ hasil);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah nilai A sama dengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA == nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A == B = &quot;+ hasil);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah nilai A tidak samadengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA != nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A != B = &quot;+ hasil);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:&nbsp;</strong><br />
          <code>&nbsp;A = 12<br />
          &nbsp;B = 4</code></p>

          <p><code>&nbsp;Hasil A &gt; B = true<br />
          &nbsp;Hasil A &lt; B = false<br />
          &nbsp;Hasil A &gt;= B = true<br />
          &nbsp;Hasil A &lt;= B = false<br />
          &nbsp;Hasil A == B = false<br />
          &nbsp;Hasil A != B = true</code></p>

          <p><strong>Latihan 3</strong><br />
          3.1. &nbsp;Ubahlah nilai A = 4 dan B = 4 pada Contoh 3. Simpulkan perubahan yang terjadi!&nbsp;</p>

          <h3><br />
          <strong>4.&nbsp;&nbsp; &nbsp;Operator Increment dan Decrement: ++, --</strong></h3>

          <p>Kedua operator ini digunakan pada operand bertipe bilangan bulat. Operator penaikan digunakan untuk menaikan nilai variabel sebesar satu, sedangkan operator penurunan dipakai untuk menurunkan nilai variabel sebesar satu.&nbsp;</p>

          <p><strong>Contoh 4: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle<br />
          <code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// deklarasi nilai<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;int a = 5;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;a: &quot; +a);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;b: &quot; + (a++));&nbsp;&nbsp; &nbsp;<br />
          }&nbsp;&nbsp; &nbsp;}</code><br />
          <strong>Luaran:</strong><br />
          <code>a: 5<br />
          b: 5</code></p>

          <p><strong>Latihan 4.</strong><br />
          4.1. Berikan saran operasi apa yang diperlukan (pre/post increment, pre/post decrement) agar&nbsp;Contoh 4 menghasilkan nilai a = 5 dan b = 6?&nbsp;<br />
          4.2. Simpulkan hasil eksperimen Anda!</p>

          <h3><strong>5.&nbsp;&nbsp; &nbsp;Operator Logika: &nbsp;&amp;&amp;, ||, !&nbsp;</strong></h3>

          <p>Operator Logika untuk membandingkan dua nilai variabel atau lebih, hasilnya boolean true atau false. Asumsikan variabel a bernilai true, b bernilai false dan c bernilai true. Perbedaan dasar antara operator &amp;&amp; dan &amp; adalah &amp;&amp; mensupports evaluasi per bagian, sementara operator &amp; tidak.<br />
          Misal pernyataan: exp1 AND exp2 Dengan operator &amp;&amp; akan mengevaluasi pernyataan exp1, dan segera mengembalikan nilai false dan menyatakan bahwa exp1 bernilai false. Jika exp1 bernilai false, operator tidak akan pernah mengevaluasi exp2 karena hasil operasi operator akan menjadi false tanpa memperhatikan nilai dari exp2. Dengan operator &amp; selalu mengevaluasi kedua nilai dari exp1 danexp2 sebelum mengembalikan suatu nilai jawaban. Demikian juga antara operator || dan |.<br />
          Tanda &amp;&amp; dan &amp; serta || dan | memiliki arti berbeda. &amp; dan | akan tetap mengevaluasi kondisi apa pun yang terjadi. &amp;&amp; akan menghentikan evaluasi kondisi jika salah satu ekspresi bernilai salah. Jika salah satu kondisi ekspresi salah, dipastikan hasil operasi logika bernilai salah. Sedangkan || akan menghentikan evaluasi kondisi jika salah satu ekspresi bernilai benar. Jika salah satu kondisi ekspresi benar, dipastikan hasil operasi logika bernilai benar.</p>

          <p><strong>Contoh 5:</strong> Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

          <p><code>public class OperatorLogika {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// deklarasi nilai<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;boolean a = true;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;boolean b = false;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Hasil logika (a &amp;&amp; b) : &quot; + (a &amp;&amp; b));&nbsp; //menampilkan hasil logika AND<br />
          }&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          <code>Hasil logika (a &amp;&amp; b) : false</code></p>

          <p><strong>Latihan 5&nbsp;</strong><br />
          5.1. &nbsp;Rekomendasikan berapa nilai a dan b apabila ingin menghasilkan luaran <em>true </em>dengan operator &amp;&amp; dan &nbsp;operator | | ?&nbsp;&nbsp;<br />
          5.2. &nbsp;Berikan kesimpulan dari latihan 5.1.&nbsp;<br />
          &nbsp;</p>

          <h3><strong>6.&nbsp;&nbsp; &nbsp;Operator Kondisional (Ternary): &nbsp;?:</strong></h3>

          <p>Operator Kondisi merupakan penyederhanaan dari bentuk if.else yang setiap blok dari if dan else hanya terdiri dari satu statement/perintah.</p>

          <p><strong>Bentuk umum: &nbsp;(ekspresi) ? (jika benar) : (jika salah);</strong></p>

          <p><strong>Contoh 6:&nbsp;</strong><br />
          <code>public class OperatorKondisi{<br />
          &nbsp; &nbsp;public static void main( String[] args ){<br />
          &nbsp; &nbsp; &nbsp; String status = &quot;&quot;;<br />
          &nbsp; &nbsp; &nbsp; int nilai = 80;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; status = (nilai &gt; 60)?&quot;Lulus&quot;:&quot;Gagal&quot;;<br />
          &nbsp; &nbsp; &nbsp; System.out.println( status );<br />
          }&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran: &nbsp;</strong><br />
          <code>Lulus</code></p>

          <p><strong>Latihan 6</strong><br />
          Rekomendasikan apa bentuk tanda operator agar nilai = 60 memenuhi untuk Lulus !<br />
          &nbsp;</p>

          <h3><strong>7.&nbsp;&nbsp; &nbsp;Operator Bitwise: &amp;, |, ^, ~, &lt;&lt;, &gt;&gt;, &gt;&gt;&gt;</strong></h3>

          <p>Operator bitwise merupakan operator untuk operasi bit (biner) dan berlaku untuk tipe data int, long, short, char, dan byte, karena akan menghitung dari bit-ke-bit.</p>

          <p><strong>Contoh 7: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle<br />
          <code>public class OperatorBitwise {<br />
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

          <p><strong>Luaran:</strong>&nbsp;<br />
          <code>Hasil dari a &amp; b : 2<br />
          Hasil dari a | b : 15<br />
          Hasil dari a ^ b : 13<br />
          Hasil dari ~a : -11<br />
          Hasil dari a &gt;&gt; 1 : 5<br />
          Hasil dari b &lt;&lt; 2 : 28</code></p>

          <p><strong>Latihan 7</strong><br />
          Evaluasi penyebab hasil ~a = -11 ? Buktikan jawaban Anda dalam perhitungan biner!<br />
          &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-operator-5063070ac1d88d9.pdf','url_materi' => 'https://www.youtube.com/watch?v=PzCMZObexZM','url_kedua_materi' => 'https://www.youtube.com/watch?v=LcFgl0yrKEw','critical_status' => '1','created_at' => '2022-08-25 12:38:09','updated_at' => '2022-09-10 10:07:43'),
            array('id' => '84','topik_pembahasan_id' => '54','nama_materi' => 'Operator','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada Chanel Youtube <strong>Rumah Ilmu Raflesia</strong><br />
          <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw" target="_blank">https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a>&nbsp;<br />
          <strong>Video Materi 1</strong> &ndash; Definisi operator, unary, binary, ternary, operasi aritmatika, penugasan, relasional, increment/decrement pada laman&nbsp; &nbsp;<a href="https://www.youtube.com/watch?v=PzCMZObexZM">https://www.youtube.com/watch?v=PzCMZObexZM</a>&nbsp;<br />
          <strong>Video Materi 2</strong> &ndash; Operator Logika, Kondisional, Bitwise, dan contoh pembahasan soal pada laman <a href="https://www.youtube.com/watch?v=LcFgl0yrKEw">https://www.youtube.com/watch?v=LcFgl0yrKEw</a>&nbsp;</p>

          <h3><strong>Unit 1 Operator</strong></h3>

          <p>Operator merupakan simbol dalam program untuk melakukan suatu operasi atau memproses data hingga memberikan hasil.<br />
          Contoh :<br />
          <code>a + b&nbsp;&nbsp; &nbsp;</code><br />
          simbol &ldquo; + &ldquo; merupakan operand untuk melakukan penjumlahan dari a dan b. Operator penjumlahan tergolong sebagai operator binary karena melibatkan dua operand,.</p>

          <p>Contoh lain :<br />
          -c<br />
          simbol &ldquo; &ndash; &ldquo; (minus) merupakan unary, karena hanya memiliki satu operand (yaitu c).</p>

          <p><strong>Ekspresi </strong>adalah pernyataan yang melibatkan variabel, data, dan konstanta. Ekspresi sangat penting dalam pemrograman karena perhitungan banyak menggunakan ekspresi. Penyusunan ekspresi memakai lambang-lambang tertentu yang disebut operator.&nbsp;</p>

          <h3><strong>Unit 2 Jenis Operator</strong></h3>

          <h3><strong>1.&nbsp;&nbsp; &nbsp;Operator Aritmatika: +, -, *, /</strong></h3>

          <p>Operator aritmatika digunakan untuk melakukan perhitungan matematika. Jika operator memiliki prioritas yang sama, operator sebelah kiri akan diutamakan untuk dikerjakan terlebih dahulu. Tanda kurung biasa digunakan untuk mengubah urutan pengerjaan.&nbsp;</p>

          <p>Misalnya: &nbsp; &nbsp;<br />
          <code>x = (2 + 3) * 2 ;&nbsp;&nbsp; &nbsp;</code><br />
          Menghasilkan x = 10, sebab 2 + 3 dahulu dan hasilnya dikalikan dengan 2.</p>

          <p><strong>Contoh 1: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle<br />
          <code>public class OperatorAritmatika{&nbsp;<br />
          &nbsp; &nbsp;public static void main(String[] args) &nbsp;{<br />
          &nbsp; &nbsp; &nbsp;// deklarasi nilai<br />
          &nbsp; &nbsp; &nbsp; int a = 20, b = 3;<br />
          <br />
          &nbsp; &nbsp; &nbsp; //operator aritmatika&nbsp;<br />
          &nbsp; &nbsp; &nbsp; System.out.println(&quot;a: &quot; +a);&nbsp;<br />
          &nbsp; &nbsp; &nbsp; System.out.println(&quot;b: &quot; +b);&nbsp;<br />
          &nbsp; &nbsp; &nbsp; System.out.println(&quot;a + b = &quot; &nbsp;(a + b));&nbsp; //menampilkan hasil penjumlahan<br />
          } &nbsp; }</code></p>

          <p><strong>Luaran:</strong><br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;Syntax error on token &quot;&quot;a + b = &quot;&quot;, AssignmentOperator expected after this token<br />
          &nbsp;&nbsp; &nbsp;The left-hand side of an assignment must be a variable</code></p>

          <p><strong>Latihan 1</strong><br />
          1.1. Rekomendasikan perbaikan kode agar program Contoh 1 dapat berjalan!<br />
          1.2. Tambahkan baris untuk menampilkan perhitungan dengan operator ( -, *, /, %) pada Contoh 1!</p>

          <p>&nbsp;</p>

          <h3><strong>2.&nbsp;&nbsp; &nbsp;Operator Penugasan: &nbsp;=</strong></h3>

          <p>Operator Penugasan adalah operator yang digunakan untuk memberikan nilai ke dalam variabel tertentu.&nbsp;</p>

          <p><strong>Contoh 2: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle<br />
          <code>public class OperatorPenugasan {<br />
          &nbsp; &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp; &nbsp; // deklarasi nilai<br />
          &nbsp; &nbsp; &nbsp; &nbsp;int a = 20, b = 3;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;//operator penugasan&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; b += a;&nbsp; //melakukan perhitungan penjumlahan<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Penambahan : &quot; + b);&nbsp; // menampilkan hasil perhitungan&nbsp;penjumlahan<br />
          &nbsp; &nbsp; }<br />
          }</code></p>

          <p><strong>Luaran:</strong><br />
          <code>Penambahan : 23</code></p>

          <p><strong>Latihan 2.</strong><br />
          2.1. &nbsp;Tambahkan baris Contoh 2 untuk menampilkan perhitungan dengan operator ( -=, *=, &nbsp;/=, %=)!<br />
          2.2. &nbsp;Berikan argumentasi tentang perbedaan luaran dan waktu eksekusi Contoh 1 dan Contoh 2!&nbsp;<br />
          &nbsp;</p>

          <h3><strong>3.&nbsp;&nbsp; &nbsp;Operator Relasional: &nbsp; &lt;, &gt;, &lt;=, &gt;=, =, ==, !=&nbsp;</strong></h3>

          <p>Operator Relasi untuk menguji hubungan antara nilai dan atau variabel dan selalu menghasilkan nilai true atau false.&nbsp;</p>

          <p><strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle<br />
          <code>public class OperatorRelasional {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int nilaiA = 12;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int nilaiB = 4;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; boolean hasil;</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot; A = &quot; + nilaiA + &quot;\\n B = &quot; + nilaiB);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih besar dari B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &gt; nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &gt; B = &quot;+ hasil);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih kecil dari B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &lt; nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &lt; B = &quot;+ hasil);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih besar samadengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &gt;= nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &gt;= B = &quot;+ hasil);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih kecil samadengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &lt;= nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &lt;= B = &quot;+ hasil);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah nilai A sama dengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA == nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A == B = &quot;+ hasil);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah nilai A tidak samadengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA != nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A != B = &quot;+ hasil);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:&nbsp;</strong><br />
          <code>&nbsp;A = 12<br />
          &nbsp;B = 4</code></p>

          <p><code>&nbsp;Hasil A &gt; B = true<br />
          &nbsp;Hasil A &lt; B = false<br />
          &nbsp;Hasil A &gt;= B = true<br />
          &nbsp;Hasil A &lt;= B = false<br />
          &nbsp;Hasil A == B = false<br />
          &nbsp;Hasil A != B = true</code></p>

          <p><strong>Latihan 3</strong><br />
          3.1. &nbsp;Ubahlah nilai A = 4 dan B = 4 pada Contoh 3. Simpulkan perubahan yang terjadi!&nbsp;</p>

          <h3><br />
          <strong>4.&nbsp;&nbsp; &nbsp;Operator Increment dan Decrement: ++, --</strong></h3>

          <p>Kedua operator ini digunakan pada operand bertipe bilangan bulat. Operator penaikan digunakan untuk menaikan nilai variabel sebesar satu, sedangkan operator penurunan dipakai untuk menurunkan nilai variabel sebesar satu.&nbsp;</p>

          <p><strong>Contoh 4: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle<br />
          <code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// deklarasi nilai<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;int a = 5;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;a: &quot; +a);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;b: &quot; + (a++));&nbsp;&nbsp; &nbsp;<br />
          }&nbsp;&nbsp; &nbsp;}</code><br />
          <strong>Luaran:</strong><br />
          <code>a: 5<br />
          b: 5</code></p>

          <p><strong>Latihan 4.</strong><br />
          4.1. Berikan saran operasi apa yang diperlukan (pre/post increment, pre/post decrement) agar&nbsp;Contoh 4 menghasilkan nilai a = 5 dan b = 6?&nbsp;<br />
          4.2. Simpulkan hasil eksperimen Anda!</p>

          <h3><strong>5.&nbsp;&nbsp; &nbsp;Operator Logika: &nbsp;&amp;&amp;, ||, !&nbsp;</strong></h3>

          <p>Operator Logika untuk membandingkan dua nilai variabel atau lebih, hasilnya boolean true atau false. Asumsikan variabel a bernilai true, b bernilai false dan c bernilai true. Perbedaan dasar antara operator &amp;&amp; dan &amp; adalah &amp;&amp; mensupports evaluasi per bagian, sementara operator &amp; tidak.<br />
          Misal pernyataan: exp1 AND exp2 Dengan operator &amp;&amp; akan mengevaluasi pernyataan exp1, dan segera mengembalikan nilai false dan menyatakan bahwa exp1 bernilai false. Jika exp1 bernilai false, operator tidak akan pernah mengevaluasi exp2 karena hasil operasi operator akan menjadi false tanpa memperhatikan nilai dari exp2. Dengan operator &amp; selalu mengevaluasi kedua nilai dari exp1 danexp2 sebelum mengembalikan suatu nilai jawaban. Demikian juga antara operator || dan |.<br />
          Tanda &amp;&amp; dan &amp; serta || dan | memiliki arti berbeda. &amp; dan | akan tetap mengevaluasi kondisi apa pun yang terjadi. &amp;&amp; akan menghentikan evaluasi kondisi jika salah satu ekspresi bernilai salah. Jika salah satu kondisi ekspresi salah, dipastikan hasil operasi logika bernilai salah. Sedangkan || akan menghentikan evaluasi kondisi jika salah satu ekspresi bernilai benar. Jika salah satu kondisi ekspresi benar, dipastikan hasil operasi logika bernilai benar.</p>

          <p><strong>Contoh 5:</strong> Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

          <p><code>public class OperatorLogika {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// deklarasi nilai<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;boolean a = true;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;boolean b = false;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Hasil logika (a &amp;&amp; b) : &quot; + (a &amp;&amp; b));&nbsp; //menampilkan hasil logika AND<br />
          }&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          <code>Hasil logika (a &amp;&amp; b) : false</code></p>

          <p><strong>Latihan 5&nbsp;</strong><br />
          5.1. &nbsp;Rekomendasikan berapa nilai a dan b apabila ingin menghasilkan luaran <em>true </em>dengan operator &amp;&amp; dan &nbsp;operator | | ?&nbsp;&nbsp;<br />
          5.2. &nbsp;Berikan kesimpulan dari latihan 5.1.&nbsp;<br />
          &nbsp;</p>

          <h3><strong>6.&nbsp;&nbsp; &nbsp;Operator Kondisional (Ternary): &nbsp;?:</strong></h3>

          <p>Operator Kondisi merupakan penyederhanaan dari bentuk if.else yang setiap blok dari if dan else hanya terdiri dari satu statement/perintah.</p>

          <p><strong>Bentuk umum: &nbsp;(ekspresi) ? (jika benar) : (jika salah);</strong></p>

          <p><strong>Contoh 6:&nbsp;</strong><br />
          <code>public class OperatorKondisi{<br />
          &nbsp; &nbsp;public static void main( String[] args ){<br />
          &nbsp; &nbsp; &nbsp; String status = &quot;&quot;;<br />
          &nbsp; &nbsp; &nbsp; int nilai = 80;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; status = (nilai &gt; 60)?&quot;Lulus&quot;:&quot;Gagal&quot;;<br />
          &nbsp; &nbsp; &nbsp; System.out.println( status );<br />
          }&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran: &nbsp;</strong><br />
          <code>Lulus</code></p>

          <p><strong>Latihan 6</strong><br />
          Rekomendasikan apa bentuk tanda operator agar nilai = 60 memenuhi untuk Lulus !<br />
          &nbsp;</p>

          <h3><strong>7.&nbsp;&nbsp; &nbsp;Operator Bitwise: &amp;, |, ^, ~, &lt;&lt;, &gt;&gt;, &gt;&gt;&gt;</strong></h3>

          <p>Operator bitwise merupakan operator untuk operasi bit (biner) dan berlaku untuk tipe data int, long, short, char, dan byte, karena akan menghitung dari bit-ke-bit.</p>

          <p><strong>Contoh 7: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle<br />
          <code>public class OperatorBitwise {<br />
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

          <p><strong>Luaran:</strong>&nbsp;<br />
          <code>Hasil dari a &amp; b : 2<br />
          Hasil dari a | b : 15<br />
          Hasil dari a ^ b : 13<br />
          Hasil dari ~a : -11<br />
          Hasil dari a &gt;&gt; 1 : 5<br />
          Hasil dari b &lt;&lt; 2 : 28</code></p>

          <p><strong>Latihan 7</strong><br />
          Evaluasi penyebab hasil ~a = -11 ? Buktikan jawaban Anda dalam perhitungan biner!<br />
          &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-operator-5163070b03cee5d.pdf','url_materi' => 'https://www.youtube.com/watch?v=PzCMZObexZM','url_kedua_materi' => 'https://www.youtube.com/watch?v=LcFgl0yrKEw','critical_status' => '1','created_at' => '2022-08-25 12:39:15','updated_at' => '2022-09-10 10:06:39'),
            array('id' => '85','topik_pembahasan_id' => '55','nama_materi' => 'Operator','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada Chanel Youtube <strong>Rumah Ilmu Raflesia</strong><br />
          <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

          <p><strong>Video Materi 1 </strong>&ndash; Definisi operator, unary, binary, ternary, operasi aritmatika, penugasan, relasional, increment/decrement pada laman &nbsp; <a href="https://www.youtube.com/watch?v=PzCMZObexZM">https://www.youtube.com/watch?v=PzCMZObexZM</a>&nbsp;</p>

          <p><strong>Video Materi 2</strong> &ndash; Operator Logika, Kondisional, Bitwise, dan contoh pembahasan soal pada laman <a href="https://www.youtube.com/watch?v=LcFgl0yrKEw">https://www.youtube.com/watch?v=LcFgl0yrKEw</a>&nbsp;</p>

          <h3><br />
          <strong>Unit 1 Operator</strong></h3>

          <p>Operator merupakan simbol dalam program untuk melakukan suatu operasi atau memproses data hingga memberikan hasil. Ekspresi adalah pernyataan yang melibatkan variabel, data, dan konstanta Penyusunan ekspresi memakai lambang-lambang tertentu yang disebut operator.&nbsp;<br />
          &nbsp;</p>

          <h3><strong>Unit 2 Jenis Operator</strong></h3>

          <h3><strong>1.&nbsp;&nbsp; &nbsp;Operator Aritmatika: +, -, *, /</strong></h3>

          <p><strong>Contoh 1: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

          <p><code>public class OperatorAritmatika{&nbsp;<br />
          &nbsp; &nbsp;public static void main(String[] args) &nbsp;{<br />
          &nbsp; &nbsp; &nbsp;// deklarasi nilai<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int a = 20, b = 3;<br />
          &nbsp; &nbsp; &nbsp;//operator aritmatika&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;a: &quot; +a);&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;b: &quot; +b);&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;a + b = &quot; &nbsp;+ (a + b));&nbsp;<br />
          } &nbsp; }</code><br />
          <strong>Luaran:</strong><br />
          <code>a: 20<br />
          b: 3<br />
          a + b = 23</code></p>

          <p><strong>Latihan 1</strong><br />
          Susun kode Java untuk perhitungan dengan ekspresi <code>(2*3 + 6 / 2 - &nbsp;4).</code> Simpulkan urutan prioritas operator yang dijalankan ekspresi tersebut!<br />
          &nbsp;</p>

          <h3><strong>2.&nbsp;&nbsp; &nbsp;Operator Penugasan: &nbsp;=</strong></h3>

          <p>Operator Penugasan adalah operator yang digunakan untuk memberikan nilai ke dalam variabel tertentu.&nbsp;</p>

          <p><strong>Contoh 2: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

          <p><code>public class OperatorPenugasan {<br />
          &nbsp; &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp; &nbsp; // deklarasi nilai<br />
          &nbsp; &nbsp; &nbsp; &nbsp;int a = 20, b = 3;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;//operator penugasan&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; b += a;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Penambahan : &quot; + b);<br />
          &nbsp; &nbsp; }<br />
          }</code></p>

          <p><strong>Luaran:</strong><br />
          <code>Penambahan : 23</code></p>

          <p><strong>Latihan 2.</strong><br />
          Susun kode untuk menampilkan perhitungan dengan operator ( -=, *=, &nbsp;/=, %=)! Simpulkan hasilnya!<br />
          &nbsp;</p>

          <h3><strong>3.&nbsp;&nbsp; &nbsp;Operator Relasional: &nbsp; &lt;, &gt;, &lt;=, &gt;=, =, ==, !=&nbsp;</strong></h3>

          <p>Operator Relasi untuk menguji hubungan antara nilai dan atau variabel dan selalu menghasilkan nilai true atau false.&nbsp;</p>

          <p><strong>Contoh 3:</strong> Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

          <p><code>public class OperatorRelasional {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int nilaiA = 12;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int nilaiB = 4;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; boolean hasil;</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot; A = &quot; + nilaiA + &quot;\\n B = &quot; + nilaiB);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih besar dari B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &gt; nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &gt; B = &quot;+ hasil);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih kecil dari B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &lt; nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &lt; B = &quot;+ hasil);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih besar samadengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &gt;= nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &gt;= B = &quot;+ hasil);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih kecil samadengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &lt;= nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &lt;= B = &quot;+ hasil);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah nilai A sama dengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA == nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A == B = &quot;+ hasil);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah nilai A tidak samadengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA != nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A != B = &quot;+ hasil);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:&nbsp;</strong><br />
          <code>A = 12<br />
          B = 4</code></p>

          <p><code>Hasil A &gt; B = true<br />
          Hasil A &lt; B = false<br />
          Hasil A &gt;= B = true<br />
          Hasil A &lt;= B = false<br />
          Hasil A == B = false<br />
          Hasil A != B = true</code></p>

          <p><strong>Latihan 3</strong><br />
          Susunlah perintah kode dengan operator relasional <code>(&lt;, &gt;, &lt;=, &gt;=, =, ==, !=) </code>untuk nilai a dan b yang menghasilkan luaran TRUE!<br />
          &nbsp;</p>

          <h3><strong>4.&nbsp;&nbsp; &nbsp;Operator Increment dan Decrement: ++, --</strong></h3>

          <p>Kedua operator ini digunakan pada operand bertipe bilangan bulat. Operator penaikan digunakan untuk menaikan nilai variabel sebesar satu, sedangkan operator penurunan dipakai untuk menurunkan nilai variabel sebesar satu.&nbsp;</p>

          <p><strong>Contoh 4: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

          <p><code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// deklarasi nilai<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;int a = 5;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;a: &quot; +a);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;b: &quot; + (a++));&nbsp;&nbsp; &nbsp;<br />
          }&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          <code>a: 5<br />
          b: 5</code></p>

          <p><strong>Latihan 4.</strong><br />
          4.1. &nbsp;Susunlah kode program untuk menghasilkan luaran nilai a = 5 dan b = 6 dengan pre/post increment dan pre/post decrement.&nbsp;<br />
          4.2.&nbsp; Simpulkan hasil perbandingan Anda (pre/post increment, pre/post decrement)!<br />
          &nbsp;</p>

          <h3><strong>5.&nbsp;&nbsp; &nbsp;Operator Boolean Logika: &nbsp;&amp;&amp;, ||, !&nbsp;</strong></h3>

          <p>Operator Logika untuk membandingkan dua nilai variabel atau lebih, hasilnya boolean true atau false. Asumsikan variabel a bernilai true, b bernilai false dan c bernilai true. Perbedaan dasar antara operator &amp;&amp; dan &amp; adalah &amp;&amp; mensupports evaluasi per bagian, sementara operator &amp; tidak. Misal pernyataan: exp1 AND exp2 Dengan operator &amp;&amp; akan mengevaluasi pernyataan exp1, dan segera mengembalikan nilai false dan menyatakan bahwa exp1 bernilai false. Jika exp1 bernilai false, operator tidak akan pernah mengevaluasi exp2 karena hasil operasi operator akan menjadi false tanpa memperhatikan nilai dari exp2. Dengan operator &amp; selalu mengevaluasi kedua nilai dari exp1 danexp2 sebelum mengembalikan suatu nilai jawaban. Demikian juga antara operator || dan |.<br />
          Tanda &amp;&amp; dan &amp; serta || dan | memiliki arti berbeda. &amp; dan | akan tetap mengevaluasi kondisi apa pun yang terjadi. &amp;&amp; akan menghentikan evaluasi kondisi jika salah satu ekspresi bernilai salah. Jika salah satu kondisi ekspresi salah, dipastikan hasil operasi logika bernilai salah. Sedangkan || akan menghentikan evaluasi kondisi jika salah satu ekspresi bernilai benar. Jika salah satu kondisi ekspresi benar, dipastikan hasil operasi logika bernilai benar.</p>

          <p>Contoh 5: Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

          <p><code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// deklarasi nilai<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;boolean a = true;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;boolean b = false;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Hasil logika (a &amp;&amp; b) : &quot; + (a &amp;&amp; b));<br />
          }&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          <code>Hasil logika (a &amp;&amp; b) : false</code></p>

          <p><strong>Latihan 5&nbsp;</strong><br />
          Susun kode program dengan mengubah nilai <code>a</code> dan <code>b</code> untuk menghasilkan luaran <code>true </code>dengan operator <code>&amp;&amp;</code> dan &nbsp;operator <code>| |</code>. &nbsp;Beri kesimpulan!</p>

          <h3>&emsp;<br />
          <strong>6.&nbsp;&nbsp; &nbsp;Operator Kondisional (Ternary): &nbsp;?:</strong></h3>

          <p>Operator Kondisi merupakan penyederhanaan dari bentuk if.else yang setiap blok dari if dan else hanya terdiri dari satu statement/perintah.</p>

          <p><strong>Bentuk umum: &nbsp;(ekspresi) ? (jika benar) : (jika salah);</strong></p>

          <p>Contoh 6:&nbsp;<br />
          <code>public class OperatorKondisi{<br />
          &nbsp; &nbsp;public static void main( String[] args ){<br />
          &nbsp; &nbsp; &nbsp; String status = &quot;&quot;;<br />
          &nbsp; &nbsp; &nbsp; int nilai = 80;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; status = (nilai &gt; 60)?&quot;Lulus&quot;:&quot;Gagal&quot;;<br />
          &nbsp; &nbsp; &nbsp; System.out.println( status );<br />
          }&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran: &nbsp;</strong><br />
          <code>Lulus</code></p>

          <p><strong>Latihan 6</strong><br />
          Susun kode program! Dengan informasi berikut:<br />
          Diketahui&nbsp;nama variabel Jam = 12<br />
          Apabila jam &lt; 12 maka tampil &quot;Selamat Pagi&quot;, apabila jam &gt; 12 maka tampil &quot;Selamat Malam&quot;.<br />
          &nbsp;</p>

          <h3><strong>7.&nbsp;&nbsp; &nbsp;Operator Bitwise: &amp;, |, ^, ~, &lt;&lt;, &gt;&gt;, &gt;&gt;&gt;</strong></h3>

          <p>Operator bitwise merupakan operator untuk operasi bit (biner) dan berlaku untuk tipe data int, long, short, char, dan byte, karena akan menghitung dari bit-ke-bit.</p>

          <p><strong>Contoh 7: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

          <p><code>public class operatorBitwise {<br />
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
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari a ^ b : &quot; + hasil ); &nbsp;&nbsp;<br />
          } &nbsp; }</code></p>

          <p><br />
          <strong>Luaran:&nbsp;</strong><br />
          <code>Hasil dari a &amp; b : 6<br />
          Hasil dari a | b : 7<br />
          Hasil dari a ^ b : 1</code></p>

          <p><strong>Latihan 7</strong><br />
          Susun kode tambahan dari Contoh 7 untuk melakukan perhitungan dengan operator (<code>&gt;&gt;, &lt;&lt;</code>). Hubungkan hasil luaran dengan perhitungan manual bilangan biner!<br />
          &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-operator-5063071b55e0f62.pdf','url_materi' => 'https://www.youtube.com/watch?v=PzCMZObexZM','url_kedua_materi' => 'https://www.youtube.com/watch?v=LcFgl0yrKEw','critical_status' => '2','created_at' => '2022-08-25 13:48:53','updated_at' => '2022-08-25 13:48:53'),
            array('id' => '86','topik_pembahasan_id' => '54','nama_materi' => 'Operator','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada Chanel Youtube <strong>Rumah Ilmu Raflesia</strong><br />
          <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

          <p><strong>Video Materi 1 </strong>&ndash; Definisi operator, unary, binary, ternary, operasi aritmatika, penugasan, relasional, increment/decrement pada laman &nbsp; <a href="https://www.youtube.com/watch?v=PzCMZObexZM">https://www.youtube.com/watch?v=PzCMZObexZM</a>&nbsp;</p>

          <p><strong>Video Materi 2</strong> &ndash; Operator Logika, Kondisional, Bitwise, dan contoh pembahasan soal pada laman <a href="https://www.youtube.com/watch?v=LcFgl0yrKEw">https://www.youtube.com/watch?v=LcFgl0yrKEw</a>&nbsp;</p>

          <h3><br />
          <strong>Unit 1 Operator</strong></h3>

          <p>Operator merupakan simbol dalam program untuk melakukan suatu operasi atau memproses data hingga memberikan hasil. Ekspresi adalah pernyataan yang melibatkan variabel, data, dan konstanta Penyusunan ekspresi memakai lambang-lambang tertentu yang disebut operator.&nbsp;</p>

          <h3><strong>Unit 2 Jenis Operator</strong></h3>

          <h3><strong>1.&nbsp;&nbsp; &nbsp;Operator Aritmatika: +, -, *, /</strong></h3>

          <p><strong>Contoh 1: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

          <p><code>public class OperatorAritmatika{&nbsp;<br />
          &nbsp; &nbsp;public static void main(String[] args) &nbsp;{<br />
          &nbsp; &nbsp; &nbsp;// deklarasi nilai<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int a = 20, b = 3;<br />
          &nbsp; &nbsp; &nbsp;//operator aritmatika&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;a: &quot; +a);&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;b: &quot; +b);&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;a + b = &quot; &nbsp;+ (a + b));&nbsp;<br />
          } &nbsp; }</code><br />
          <strong>Luaran:</strong><br />
          <code>a: 20<br />
          b: 3<br />
          a + b = 23</code></p>

          <p><strong>Latihan 1</strong><br />
          Susun kode Java untuk perhitungan dengan ekspresi <code>(2*3 + 6 / 2 - &nbsp;4).</code> Simpulkan urutan prioritas operator yang dijalankan ekspresi tersebut!<br />
          &nbsp;</p>

          <h3><strong>2.&nbsp;&nbsp; &nbsp;Operator Penugasan: &nbsp;=</strong></h3>

          <p>Operator Penugasan adalah operator yang digunakan untuk memberikan nilai ke dalam variabel tertentu.&nbsp;</p>

          <p><strong>Contoh 2: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

          <p><code>public class OperatorPenugasan {<br />
          &nbsp; &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp; &nbsp; // deklarasi nilai<br />
          &nbsp; &nbsp; &nbsp; &nbsp;int a = 20, b = 3;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;//operator penugasan&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; b += a;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Penambahan : &quot; + b);<br />
          &nbsp; &nbsp; }<br />
          }</code></p>

          <p><strong>Luaran:</strong><br />
          <code>Penambahan : 23</code></p>

          <p><strong>Latihan 2.</strong><br />
          Susun kode untuk menampilkan perhitungan dengan operator ( -=, *=, &nbsp;/=, %=)! Simpulkan hasilnya!<br />
          &nbsp;</p>

          <h3><strong>3.&nbsp;&nbsp; &nbsp;Operator Relasional: &nbsp; &lt;, &gt;, &lt;=, &gt;=, =, ==, !=&nbsp;</strong></h3>

          <p>Operator Relasi untuk menguji hubungan antara nilai dan atau variabel dan selalu menghasilkan nilai true atau false.&nbsp;</p>

          <p><strong>Contoh 3:</strong> Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

          <p><code>public class OperatorRelasional {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int nilaiA = 12;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int nilaiB = 4;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; boolean hasil;</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot; A = &quot; + nilaiA + &quot;\\n B = &quot; + nilaiB);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih besar dari B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &gt; nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &gt; B = &quot;+ hasil);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih kecil dari B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &lt; nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &lt; B = &quot;+ hasil);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih besar samadengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &gt;= nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &gt;= B = &quot;+ hasil);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih kecil samadengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &lt;= nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &lt;= B = &quot;+ hasil);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah nilai A sama dengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA == nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A == B = &quot;+ hasil);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah nilai A tidak samadengan B?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA != nilaiB;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A != B = &quot;+ hasil);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:&nbsp;</strong><br />
          <code>A = 12<br />
          B = 4</code></p>

          <p><code>Hasil A &gt; B = true<br />
          Hasil A &lt; B = false<br />
          Hasil A &gt;= B = true<br />
          Hasil A &lt;= B = false<br />
          Hasil A == B = false<br />
          Hasil A != B = true</code></p>

          <p><strong>Latihan 3</strong><br />
          Susunlah perintah kode dengan operator relasional <code>(&lt;, &gt;, &lt;=, &gt;=, =, ==, !=) </code>untuk nilai a dan b yang menghasilkan luaran TRUE!<br />
          &nbsp;</p>

          <h3><strong>4.&nbsp;&nbsp; &nbsp;Operator Increment dan Decrement: ++, --</strong></h3>

          <p>Kedua operator ini digunakan pada operand bertipe bilangan bulat. Operator penaikan digunakan untuk menaikan nilai variabel sebesar satu, sedangkan operator penurunan dipakai untuk menurunkan nilai variabel sebesar satu.&nbsp;</p>

          <p><strong>Contoh 4: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

          <p><code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// deklarasi nilai<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;int a = 5;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;a: &quot; +a);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;b: &quot; + (a++));&nbsp;&nbsp; &nbsp;<br />
          }&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          <code>a: 5<br />
          b: 5</code></p>

          <p><strong>Latihan 4.</strong><br />
          4.1. &nbsp;Susunlah kode program untuk menghasilkan luaran nilai a = 5 dan b = 6 dengan pre/post increment dan pre/post decrement.&nbsp;<br />
          4.2.&nbsp; Simpulkan hasil perbandingan Anda (pre/post increment, pre/post decrement)!<br />
          &nbsp;</p>

          <h3><strong>5.&nbsp;&nbsp; &nbsp;Operator Boolean Logika: &nbsp;&amp;&amp;, ||, !&nbsp;</strong></h3>

          <p>Operator Logika untuk membandingkan dua nilai variabel atau lebih, hasilnya boolean true atau false. Asumsikan variabel a bernilai true, b bernilai false dan c bernilai true. Perbedaan dasar antara operator &amp;&amp; dan &amp; adalah &amp;&amp; mensupports evaluasi per bagian, sementara operator &amp; tidak. Misal pernyataan: exp1 AND exp2 Dengan operator &amp;&amp; akan mengevaluasi pernyataan exp1, dan segera mengembalikan nilai false dan menyatakan bahwa exp1 bernilai false. Jika exp1 bernilai false, operator tidak akan pernah mengevaluasi exp2 karena hasil operasi operator akan menjadi false tanpa memperhatikan nilai dari exp2. Dengan operator &amp; selalu mengevaluasi kedua nilai dari exp1 danexp2 sebelum mengembalikan suatu nilai jawaban. Demikian juga antara operator || dan |.<br />
          Tanda &amp;&amp; dan &amp; serta || dan | memiliki arti berbeda. &amp; dan | akan tetap mengevaluasi kondisi apa pun yang terjadi. &amp;&amp; akan menghentikan evaluasi kondisi jika salah satu ekspresi bernilai salah. Jika salah satu kondisi ekspresi salah, dipastikan hasil operasi logika bernilai salah. Sedangkan || akan menghentikan evaluasi kondisi jika salah satu ekspresi bernilai benar. Jika salah satu kondisi ekspresi benar, dipastikan hasil operasi logika bernilai benar.</p>

          <p>Contoh 5: Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

          <p><code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// deklarasi nilai<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;boolean a = true;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;boolean b = false;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Hasil logika (a &amp;&amp; b) : &quot; + (a &amp;&amp; b));<br />
          }&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          <code>Hasil logika (a &amp;&amp; b) : false</code></p>

          <p><strong>Latihan 5&nbsp;</strong><br />
          Susun kode program dengan mengubah nilai <code>a</code> dan <code>b</code> untuk menghasilkan luaran <code>true </code>dengan operator <code>&amp;&amp;</code> dan &nbsp;operator <code>| |</code>. &nbsp;Beri kesimpulan!</p>

          <h3>&emsp;<br />
          <strong>6.&nbsp;&nbsp; &nbsp;Operator Kondisional (Ternary): &nbsp;?:</strong></h3>

          <p>Operator Kondisi merupakan penyederhanaan dari bentuk if.else yang setiap blok dari if dan else hanya terdiri dari satu statement/perintah.</p>

          <p><strong>Bentuk umum: &nbsp;(ekspresi) ? (jika benar) : (jika salah);</strong></p>

          <p>Contoh 6:&nbsp;<br />
          <code>public class OperatorKondisi{<br />
          &nbsp; &nbsp;public static void main( String[] args ){<br />
          &nbsp; &nbsp; &nbsp; String status = &quot;&quot;;<br />
          &nbsp; &nbsp; &nbsp; int nilai = 80;&nbsp;<br />
          &nbsp; &nbsp; &nbsp; status = (nilai &gt; 60)?&quot;Lulus&quot;:&quot;Gagal&quot;;<br />
          &nbsp; &nbsp; &nbsp; System.out.println( status );<br />
          }&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran: &nbsp;</strong><br />
          <code>Lulus</code></p>

          <p><strong>Latihan 6</strong><br />
          Susun kode program! Dengan informasi berikut:<br />
          Diketahui&nbsp;nama variabel Jam = 12<br />
          Apabila jam &lt; 12 maka tampil &quot;Selamat Pagi&quot;, apabila jam &gt; 12 maka tampil &quot;Selamat Malam&quot;.<br />
          &nbsp;</p>

          <h3><strong>7.&nbsp;&nbsp; &nbsp;Operator Bitwise: &amp;, |, ^, ~, &lt;&lt;, &gt;&gt;, &gt;&gt;&gt;</strong></h3>

          <p>Operator bitwise merupakan operator untuk operasi bit (biner) dan berlaku untuk tipe data int, long, short, char, dan byte, karena akan menghitung dari bit-ke-bit.</p>

          <p><strong>Contoh 7: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

          <p><code>public class operatorBitwise {<br />
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
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari a ^ b : &quot; + hasil ); &nbsp;&nbsp;<br />
          } &nbsp; }</code></p>

          <p><br />
          <strong>Luaran:&nbsp;</strong><br />
          <code>Hasil dari a &amp; b : 6<br />
          Hasil dari a | b : 7<br />
          Hasil dari a ^ b : 1</code></p>

          <p><strong>Latihan 7</strong><br />
          Susun kode tambahan dari Contoh 7 untuk melakukan perhitungan dengan operator (<code>&gt;&gt;, &lt;&lt;</code>). Hubungkan hasil luaran dengan perhitungan manual bilangan biner!<br />
          &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-operator-5163071b8eb2c1d.pdf','url_materi' => 'https://www.youtube.com/watch?v=PzCMZObexZM','url_kedua_materi' => 'https://www.youtube.com/watch?v=LcFgl0yrKEw','critical_status' => '2','created_at' => '2022-08-25 13:49:50','updated_at' => '2022-08-25 13:49:50'),
            array('id' => '87','topik_pembahasan_id' => '56','nama_materi' => 'Kelas','isi_materi' => '<h3>Video penjelasan pembelajaran dapat diakses pada <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw"><strong>Chanel Youtube Rumah Ilmu Raflesia</strong><br />
          https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></h3>

          <h3><a href="https://www.youtube.com/watch?v=60IdOc8m8Es "><strong>Video Materi 1 tentang Kelas, Objek, Method &ndash; https://www.youtube.com/watch?v=60IdOc8m8Es&nbsp;</strong></a></h3>

          <h3><strong><a href="https://www.youtube.com/watch?v=6qULMlcv-eg">Video Materi 2 tentang &ndash; https://www.youtube.com/watch?v=6qULMlcv-eg</a>&nbsp;</strong></h3>

          <p>&nbsp;</p>

          <h2><strong>Unit 1 Kelas (Class)</strong></h2>

          <p>Class adalah entitas yang menggambarkan keadaan dan perilaku dari objek. Sehingga, kelas memiliki kumpulan objek dengan sifat yang umum.<br />
          Contohnya class kendaraan yang memiliki objek seperti mobil, motor, pesawat, dan lainnya. Class akan menjalankan data baru sesuai model dari objek yang dibuat berdasarkan karakter objek tersebut.&nbsp;</p>

          <p>Contoh deklarasi:<br />
          <code>class KelasKu{<br />
          &nbsp; &nbsp; &nbsp;//deklarasi field,konstruktor dan method<br />
          }</code></p>

          <p><br />
          Secara umum, deklarasi kelas dapat termasuk komponen-komponen<br />
          1.&nbsp;&nbsp; &nbsp;Modifier seperti public, private dan protected.<br />
          2.&nbsp;&nbsp; &nbsp;Nama kelas,dengan diawali huruf besar ikuti aturan identifier.<br />
          3.&nbsp;&nbsp; &nbsp;Nama dari induk kelasnya (superclass), jika ada, diawali dengan kata kunci extends. Sebuah kelas hanya boleh mempunyai satu induk<br />
          4.&nbsp;&nbsp; &nbsp;Setiap kelas memiliki behavior sebagai perilaku (kata kerja) program dalam bentuk method dan memiliki keadaan atau atribut dalam bentuk variabel.<br />
          5.&nbsp;&nbsp; &nbsp;Isi dari kelas yang diawali dan diakhiri dengan tanda kurung kurawal buka dan tutup { }</p>

          <p><strong>Contoh 1:</strong><br />
          <code>public class Manusia { &nbsp;// deklarasi kelas<br />
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

          <h2><br />
          <strong>Unit 2 Objek</strong></h2>

          <p>Objek adalah bentuk keturunan dari kelas, sehingga otomatis memiliki atribut dan method dari kelas.&nbsp;<br />
          Deklarasi objek: <code>NamaKelas &nbsp;NamaObjek = new NamaKelas(parameter);</code></p>

          <p><strong>Contoh 2:</strong> Salin dan tempel kode program berikut ke Eclipse atau JDoodle.</p>

          <p><code>public class Ortu {<br />
          &nbsp;&nbsp; &nbsp;//deklarasi constructor<br />
          &nbsp;&nbsp; &nbsp;public Ortu(String nama, String rambut) &nbsp;{ &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//nama dan rambut adalah variabel constructor<br />
          &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot; Nama saya : &quot;+ nama +&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&quot;\\n Warna Rambut : &quot; + rambut);&nbsp;&nbsp; &nbsp;<br />
          }<br />
          &nbsp;&nbsp; &nbsp;public static void main (String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Ortu satu = new Ortu(&quot;Putri&quot;, &quot;hitam&quot;);<br />
          &nbsp;&nbsp; &nbsp; }<br />
          }</code></p>

          <p><strong>Luaran 2:</strong><br />
          <code>Nama saya : Putri<br />
          Warna Rambut : hitam</code></p>

          <p><strong>Latihan 2:</strong><br />
          2.1. Susun kembali kode di contoh 2 dengan menambahkan data ciri-ciri Anda di dalam variabel constructor!<br />
          2.2. Apabila nanti Anda akan memiliki keturunan, analisa sifat (atribut), constructor, dan perilaku positif (behavior) apa yang akan diturunkan?</p>

          <h2><br />
          <strong>Unit 3 Method</strong></h2>

          <p>Method adalah perilaku yang dilakukan objek.&nbsp;<br />
          Deklarasi method: <code>void/tipeData NamaMethod (tipedata namaVariabel) { &hellip; }</code></p>

          <p><strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle.<br />
          <code>public class Manusia {<br />
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

          <p><strong>Latihan 3:</strong><br />
          3.1. &nbsp;Analisa perbedaan deklarasi constructor, method, dan method utama!<br />
          3.2. &nbsp;Tentukan kapan Anda perlu menggunakan constructor dan method?<br />
          3.3. &nbsp;Uraikan perbedaan berikut:<br />
          &nbsp; &nbsp; &nbsp; &nbsp; a) constructor overloading dan overriding<br />
          &nbsp; &nbsp; &nbsp; &nbsp; b) method overloading, dan method overriding<br />
          &nbsp; &nbsp; &nbsp; &nbsp; c) method yang mengembalikan nilai dan method tidak mengembalikan nilai</p>

          <p>&nbsp;</p>

          <h2><strong>Unit 4 Extends</strong></h2>

          <p>Extends adalah kata kerja dari keturunan yang merujuk ke kelas induk, sehingga otomatis memiliki atribut dan method dari kelas induk.&nbsp;</p>

          <p>Deklarasi objek: <code>class NamaAnak extends NamaInduk { &hellip; }</code></p>

          <p>Contoh 4: Salin dan tempel kode program berikut ke JDoodle. Kemudian catat waktu eksekusinya.</p>

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

          <p><strong>Latihan 4:</strong><br />
          4.1. Bandingkan method yang dimiliki <code>class Anak extends Ortu</code> dengan method di <code>class Ortu</code>!<br />
          4.2. Ubahlah Contoh 4 dengan menambahkan objek anak dengan method yang berbeda!<br />
          &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-operator-56631b4b30e25fc.pdf','url_materi' => 'https://www.youtube.com/watch?v=60IdOc8m8Es','url_kedua_materi' => 'https://www.youtube.com/watch?v=6qULMlcv-eg','critical_status' => '0','created_at' => '2022-09-09 21:18:24','updated_at' => '2022-09-09 21:23:16'),
            array('id' => '88','topik_pembahasan_id' => '57','nama_materi' => 'Kelas','isi_materi' => '<h3>Video penjelasan pembelajaran dapat diakses pada <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw"><strong>Chanel Youtube Rumah Ilmu Raflesia</strong><br />
          https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></h3>

          <h3><a href="https://www.youtube.com/watch?v=60IdOc8m8Es "><strong>Video Materi 1 tentang Kelas, Objek, Method &ndash; https://www.youtube.com/watch?v=60IdOc8m8Es&nbsp;</strong></a></h3>

          <h3><strong><a href="https://www.youtube.com/watch?v=6qULMlcv-eg">Video Materi 2 tentang &ndash; https://www.youtube.com/watch?v=6qULMlcv-eg</a>&nbsp;</strong></h3>

          <p>&nbsp;</p>

          <h2><strong>Unit 1 Kelas (Class)</strong></h2>

          <p>Class adalah entitas yang menggambarkan keadaan dan perilaku dari objek. Sehingga, kelas memiliki kumpulan objek dengan sifat yang umum.<br />
          Contohnya class kendaraan yang memiliki objek seperti mobil, motor, pesawat, dan lainnya. Class akan menjalankan data baru sesuai model dari objek yang dibuat berdasarkan karakter objek tersebut.&nbsp;</p>

          <p>Contoh deklarasi:<br />
          <code>class KelasKu{<br />
          &nbsp; &nbsp; &nbsp;//deklarasi field,konstruktor dan method<br />
          }</code></p>

          <p><br />
          Secara umum, deklarasi kelas dapat termasuk komponen-komponen<br />
          1.&nbsp;&nbsp; &nbsp;Modifier seperti public, private dan protected.<br />
          2.&nbsp;&nbsp; &nbsp;Nama kelas,dengan diawali huruf besar ikuti aturan identifier.<br />
          3.&nbsp;&nbsp; &nbsp;Nama dari induk kelasnya (superclass), jika ada, diawali dengan kata kunci extends. Sebuah kelas hanya boleh mempunyai satu induk<br />
          4.&nbsp;&nbsp; &nbsp;Setiap kelas memiliki behavior sebagai perilaku (kata kerja) program dalam bentuk method dan memiliki keadaan atau atribut dalam bentuk variabel.<br />
          5.&nbsp;&nbsp; &nbsp;Isi dari kelas yang diawali dan diakhiri dengan tanda kurung kurawal buka dan tutup { }</p>

          <p><strong>Contoh 1:</strong><br />
          <code>public class Manusia { &nbsp;// deklarasi kelas<br />
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

          <h2><br />
          <strong>Unit 2 Objek</strong></h2>

          <p>Objek adalah bentuk keturunan dari kelas, sehingga otomatis memiliki atribut dan method dari kelas.&nbsp;<br />
          Deklarasi objek: <code>NamaKelas &nbsp;NamaObjek = new NamaKelas(parameter);</code></p>

          <p><strong>Contoh 2:</strong> Salin dan tempel kode program berikut ke Eclipse atau JDoodle.</p>

          <p><code>public class Ortu {<br />
          &nbsp;&nbsp; &nbsp;//deklarasi constructor<br />
          &nbsp;&nbsp; &nbsp;public Ortu(String nama, String rambut) &nbsp;{ &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//nama dan rambut adalah variabel constructor<br />
          &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot; Nama saya : &quot;+ nama +&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&quot;\\n Warna Rambut : &quot; + rambut);&nbsp;&nbsp; &nbsp;<br />
          }<br />
          &nbsp;&nbsp; &nbsp;public static void main (String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Ortu satu = new Ortu(&quot;Putri&quot;, &quot;hitam&quot;);<br />
          &nbsp;&nbsp; &nbsp; }<br />
          }</code></p>

          <p><strong>Luaran 2:</strong><br />
          <code>Nama saya : Putri<br />
          Warna Rambut : hitam</code></p>

          <p><strong>Latihan 2:</strong><br />
          2.1. Susun kembali kode di contoh 2 dengan menambahkan data ciri-ciri Anda di dalam variabel constructor!<br />
          2.2. Apabila nanti Anda akan memiliki keturunan, analisa sifat (atribut), constructor, dan perilaku positif (behavior) apa yang akan diturunkan?</p>

          <h2><br />
          <strong>Unit 3 Method</strong></h2>

          <p>Method adalah perilaku yang dilakukan objek.&nbsp;<br />
          Deklarasi method: <code>void/tipeData NamaMethod (tipedata namaVariabel) { &hellip; }</code></p>

          <p><strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle.<br />
          <code>public class Manusia {<br />
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

          <p><strong>Latihan 3:</strong><br />
          3.1. &nbsp;Analisa perbedaan deklarasi constructor, method, dan method utama!<br />
          3.2. &nbsp;Tentukan kapan Anda perlu menggunakan constructor dan method?<br />
          3.3. &nbsp;Uraikan perbedaan berikut:<br />
          &nbsp; &nbsp; &nbsp; &nbsp; a) constructor overloading dan overriding<br />
          &nbsp; &nbsp; &nbsp; &nbsp; b) method overloading, dan method overriding<br />
          &nbsp; &nbsp; &nbsp; &nbsp; c) method yang mengembalikan nilai dan method tidak mengembalikan nilai</p>

          <p>&nbsp;</p>

          <h2><strong>Unit 4 Extends</strong></h2>

          <p>Extends adalah kata kerja dari keturunan yang merujuk ke kelas induk, sehingga otomatis memiliki atribut dan method dari kelas induk.&nbsp;</p>

          <p>Deklarasi objek: <code>class NamaAnak extends NamaInduk { &hellip; }</code></p>

          <p>Contoh 4: Salin dan tempel kode program berikut ke JDoodle. Kemudian catat waktu eksekusinya.</p>

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

          <p><strong>Latihan 4:</strong><br />
          4.1. Bandingkan method yang dimiliki <code>class Anak extends Ortu</code> dengan method di <code>class Ortu</code>!<br />
          4.2. Ubahlah Contoh 4 dengan menambahkan objek anak dengan method yang berbeda!<br />
          &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-operator-57631b4b5dc6c7e.pdf','url_materi' => 'https://www.youtube.com/watch?v=60IdOc8m8Es','url_kedua_materi' => 'https://www.youtube.com/watch?v=6qULMlcv-eg','critical_status' => '0','created_at' => '2022-09-09 21:19:09','updated_at' => '2022-09-09 21:23:32'),
            array('id' => '89','topik_pembahasan_id' => '56','nama_materi' => 'Kelas','isi_materi' => '<h3>Video penjelasan pembelajaran dapat diakses pada <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw"><strong>Chanel Youtube Rumah Ilmu Raflesia</strong><br />
          https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></h3>

          <h3><a href="https://www.youtube.com/watch?v=60IdOc8m8Es "><strong>Video Materi 1 tentang Kelas, Objek, Method &ndash; https://www.youtube.com/watch?v=60IdOc8m8Es&nbsp;</strong></a></h3>

          <h3><strong><a href="https://www.youtube.com/watch?v=6qULMlcv-eg">Video Materi 2 tentang &ndash; https://www.youtube.com/watch?v=6qULMlcv-eg</a>&nbsp;</strong></h3>

          <p>&nbsp;</p>

          <h2><strong>Unit 1 Kelas (Class)</strong></h2>

          <p>Class adalah entitas yang menggambarkan keadaan dan perilaku dari objek. Sehingga, kelas memiliki kumpulan objek dengan sifat yang umum. Class akan menjalankan data baru sesuai model dari objek yang dibuat berdasarkan karakter objek tersebut.&nbsp;</p>

          <p>Contoh deklarasi:<br />
          <code>classKelasKu{<br />
          &nbsp; &nbsp;//deklarasi field,konstruktor dan method<br />
          }</code></p>

          <p><strong>Contoh 1:</strong><br />
          <code>public class Manusia { &nbsp;// deklarasi kelas<br />
          &nbsp;&nbsp; &nbsp;//deklarasi atribut Manusia dalam variabel<br />
          &nbsp;&nbsp; &nbsp;String nama, rambut;<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;//deklarasi constructor<br />
          &nbsp;&nbsp; &nbsp;public Manusia1 (String nama) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot; Nama saya : &quot;+ nama +&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&quot;\\n Warna Rambut : &quot; + rambut);&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;//deklarasi method utama<br />
          &nbsp;&nbsp; &nbsp;public static void main( String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Manusia1 satu = new Manusia1(&quot;Putri&quot;, &quot;hitam&quot;);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp; }</code></p>

          <p><br />
          <strong>Luaran 1:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problem:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;The constructor Manusia1(String, String) is undefined<br />
          &nbsp;&nbsp; &nbsp;at Manusia1.main(Manusia1.java:13)</code></p>

          <p><strong>Latihan 1:</strong><br />
          1.1.&nbsp;&nbsp; &nbsp; Perbaiki pesan kesalahan Contoh 1!<br />
          1.2.&nbsp;&nbsp; &nbsp; Analisa ciri-ciri lain Kelas Manusia yang dapat menjadi<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;a.&nbsp;atribut variabel, dan<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;b. perilaku/ behavior!</p>

          <p>&nbsp;</p>

          <h2><strong>Unit 2 Objek</strong></h2>

          <p>Objek adalah bentuk keturunan dari kelas, sehingga otomatis memiliki atribut dan method dari kelas.&nbsp;</p>

          <p>Deklarasi objek: <code>NamaKelas &nbsp;NamaObjek = new NamaKelas(parameter);</code></p>

          <p><strong>Contoh 2</strong>: Salin dan tempel kode program berikut ke Eclipse atau JDoodle.</p>

          <p><code>public class Ortu {<br />
          &nbsp;&nbsp; &nbsp;//deklarasi constructor &nbsp;(variabel constructor)<br />
          &nbsp;&nbsp; &nbsp;public ortu &nbsp; { &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; //nama dan rambut adalah variabel constructor<br />
          &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot; Nama saya : &quot;+ nama +&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&quot;\\n Warna Rambut : &quot; + rambut);&nbsp;&nbsp; &nbsp;<br />
          }<br />
          &nbsp;&nbsp; &nbsp;public static void main (String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Ortu satu = new Ortu(&quot;Putri&quot;, &quot;hitam&quot;);<br />
          &nbsp;&nbsp; &nbsp; }<br />
          }</code></p>

          <p><strong>Luaran 2:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problem:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;The constructor Ortu(String, String) is undefined</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;at Ortu.main(Ortu.java:9)</code></p>

          <p><strong>Latihan 2:</strong><br />
          2.1. &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!<br />
          2.2. Apabila Ortu memiliki data variabel umur = 25 dan jenis kelamin = P (untuk Perempuan), rekomendasikan constructor dengan parameter yang baru untuk ditambahkan dalam program!</p>

          <h2><br />
          <strong>Unit 3 Method</strong></h2>

          <p>Method adalah perilaku yang dilakukan objek.&nbsp;</p>

          <p>Deklarasi method: <code>void/tipeData NamaMethod (tipedata namaVariabel) { &hellip; }</code></p>

          <p><strong>Contoh 3:</strong> Salin dan tempel kode program berikut ke Eclipse atau JDoodle.<br />
          <code>public class Manusia {<br />
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
          }</code></p>

          <p><br />
          <strong>Luaran 3:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;The method sukaNonton(String) is undefined for the type Manusia1<br />
          &nbsp;&nbsp; &nbsp;The method sukaNonton(int, int) is undefined for the type Manusia1<br />
          &nbsp;&nbsp; &nbsp;at Manusia1.main(Manusia1.java:23)</code></p>

          <p><strong>Latihan 3:</strong><br />
          3.1. &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!<br />
          3.2. &nbsp;Ubahlah method dan constructor Contoh 3 sesuai dengan perilaku/ behavior anda<br />
          3.3. &nbsp;Berdasarkan Contoh 3 dan Latihan 3.2. simpulkan perbedaan:<br />
          &nbsp; &nbsp; &nbsp; &nbsp; a) constructor overloading dan overriding<br />
          &nbsp; &nbsp; &nbsp; &nbsp; b) method overloading, dan method overriding<br />
          &nbsp; &nbsp; &nbsp; &nbsp; c) method yang mengembalikan nilai dan method tidak mengembalikan nilai</p>

          <h2><br />
          <strong>Unit 4 Extends</strong></h2>

          <p>Extends adalah kata kerja dari keturunan yang merujuk ke kelas induk, sehingga otomatis memiliki atribut dan method dari kelas induk.&nbsp;</p>

          <p>Deklarasi objek: <code>class NamaAnak extends NamaInduk { &hellip; }</code></p>

          <p><strong>Contoh 4:</strong> Salin dan tempel kode program berikut ke JDoodle. Kemudian catat waktu eksekusinya.</p>

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
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp; &nbsp;&nbsp;System.out.println(&quot;\\n Sifat Anak :&quot;);&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;Anak objekA = new Anak();&nbsp;&nbsp; &nbsp;//memanggil objek anak<br />
          &nbsp;&nbsp; &nbsp;objekA.sukaMenonton(9, &quot;Film Drakor&quot;);&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//memanggil sifat spesifik anak yang diturunkan induk<br />
          &nbsp;&nbsp; &nbsp;objekA.sukaMembaca(&quot;Komik One Piece&quot;); //memanggil method ke induk yang otomatis diturunkan tanpa deklarasi ulang di anak<br />
          }&nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>class Anak extends Ortu {<br />
          &nbsp; void sukaMenonton(int a, String b) {<br />
          &nbsp; &nbsp; &nbsp; System.out.println(&quot;Nonton Jam &quot; + a + &quot; Malam &quot; + b);<br />
          &nbsp; }&nbsp;&nbsp; &nbsp;<br />
          &nbsp; void sukaMenonton(String a) {&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// method induk spesifik<br />
          &nbsp; &nbsp; &nbsp; System.out.println(&quot;Nonton &quot; + a);<br />
          &nbsp; }<br />
          &nbsp; void sukaMembaca(String a) { &nbsp;&nbsp; &nbsp;// method induk umum bisa diubah anak<br />
          &nbsp; &nbsp; &nbsp;System.out.println(&quot;Suka Baca &quot; + a);<br />
          &nbsp; }<br />
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
          }&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran 4:</strong><br />
          <code>Sifat Orang Tua :<br />
          Nonton Berita<br />
          Suka Baca Koran</code></p>

          <p><code>&nbsp;Sifat Anak :<br />
          Nonton Jam 9 Malam Film Drakor<br />
          Suka Baca Komik One Piece</code></p>

          <p><strong>Latihan 4:</strong><br />
          4.1. Evaluasi method yang dimiliki <code>class Anak extends Ortu </code>dengan method di <code>class Ortu</code>!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Apakah penulisan method ini sudah efisien?<br />
          4.2. Setelah dirunning di JDoodle, catat waktu eksekusinya.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Rekomendasikan perbaikan penulisan kode method untuk dapat mengefisienkan waktu eksekusi!<br />
          &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-kelas-56631b4e601ac29.pdf','url_materi' => 'https://www.youtube.com/watch?v=60IdOc8m8Es','url_kedua_materi' => 'https://www.youtube.com/watch?v=6qULMlcv-eg','critical_status' => '1','created_at' => '2022-09-09 21:32:00','updated_at' => '2022-09-09 21:36:56'),
            array('id' => '90','topik_pembahasan_id' => '57','nama_materi' => 'Kelas','isi_materi' => '<h3>Video penjelasan pembelajaran dapat diakses pada <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw"><strong>Chanel Youtube Rumah Ilmu Raflesia</strong><br />
          https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></h3>

          <h3><a href="https://www.youtube.com/watch?v=60IdOc8m8Es "><strong>Video Materi 1 tentang Kelas, Objek, Method &ndash; https://www.youtube.com/watch?v=60IdOc8m8Es&nbsp;</strong></a></h3>

          <h3><strong><a href="https://www.youtube.com/watch?v=6qULMlcv-eg">Video Materi 2 tentang &ndash; https://www.youtube.com/watch?v=6qULMlcv-eg</a>&nbsp;</strong></h3>

          <p>&nbsp;</p>

          <h2><strong>Unit 1 Kelas (Class)</strong></h2>

          <p>Class adalah entitas yang menggambarkan keadaan dan perilaku dari objek. Sehingga, kelas memiliki kumpulan objek dengan sifat yang umum. Class akan menjalankan data baru sesuai model dari objek yang dibuat berdasarkan karakter objek tersebut.&nbsp;</p>

          <p>Contoh deklarasi:<br />
          <code>classKelasKu{<br />
          &nbsp; &nbsp;//deklarasi field,konstruktor dan method<br />
          }</code></p>

          <p><strong>Contoh 1:</strong><br />
          <code>public class Manusia { &nbsp;// deklarasi kelas<br />
          &nbsp;&nbsp; &nbsp;//deklarasi atribut Manusia dalam variabel<br />
          &nbsp;&nbsp; &nbsp;String nama, rambut;<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;//deklarasi constructor<br />
          &nbsp;&nbsp; &nbsp;public Manusia1 (String nama) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot; Nama saya : &quot;+ nama +&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&quot;\\n Warna Rambut : &quot; + rambut);&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;//deklarasi method utama<br />
          &nbsp;&nbsp; &nbsp;public static void main( String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Manusia1 satu = new Manusia1(&quot;Putri&quot;, &quot;hitam&quot;);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp; }</code></p>

          <p><br />
          <strong>Luaran 1:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problem:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;The constructor Manusia1(String, String) is undefined<br />
          &nbsp;&nbsp; &nbsp;at Manusia1.main(Manusia1.java:13)</code></p>

          <p><strong>Latihan 1:</strong><br />
          1.1.&nbsp;&nbsp; &nbsp; Perbaiki pesan kesalahan Contoh 1!<br />
          1.2.&nbsp;&nbsp; &nbsp; Analisa ciri-ciri lain Kelas Manusia yang dapat menjadi<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;a.&nbsp;atribut variabel, dan<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;b. perilaku/ behavior !</p>

          <p>&nbsp;</p>

          <h2><strong>Unit 2 Objek</strong></h2>

          <p>Objek adalah bentuk keturunan dari kelas, sehingga otomatis memiliki atribut dan method dari kelas.&nbsp;</p>

          <p>Deklarasi objek: <code>NamaKelas &nbsp;NamaObjek = new NamaKelas(parameter);</code></p>

          <p><strong>Contoh 2</strong>: Salin dan tempel kode program berikut ke Eclipse atau JDoodle.</p>

          <p><code>public class Ortu {<br />
          &nbsp;&nbsp; &nbsp;//deklarasi constructor &nbsp;(variabel constructor)<br />
          &nbsp;&nbsp; &nbsp;public ortu &nbsp; { &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; //nama dan rambut adalah variabel constructor<br />
          &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot; Nama saya : &quot;+ nama +&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&quot;\\n Warna Rambut : &quot; + rambut);&nbsp;&nbsp; &nbsp;<br />
          }<br />
          &nbsp;&nbsp; &nbsp;public static void main (String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Ortu satu = new Ortu(&quot;Putri&quot;, &quot;hitam&quot;);<br />
          &nbsp;&nbsp; &nbsp; }<br />
          }</code></p>

          <p><strong>Luaran 2:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problem:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;The constructor Ortu(String, String) is undefined</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;at Ortu.main(Ortu.java:9)</code></p>

          <p><strong>Latihan 2:</strong><br />
          2.1. &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!<br />
          2.2. Apabila Ortu memiliki data variabel umur = 25 dan jenis kelamin = P (untuk Perempuan), rekomendasikan constructor dengan parameter yang baru untuk ditambahkan dalam program!</p>

          <h2><br />
          <strong>Unit 3 Method</strong></h2>

          <p>Method adalah perilaku yang dilakukan objek.&nbsp;</p>

          <p>Deklarasi method: <code>void/tipeData NamaMethod (tipedata namaVariabel) { &hellip; }</code></p>

          <p><strong>Contoh 3:</strong> Salin dan tempel kode program berikut ke Eclipse atau JDoodle.<br />
          <code>public class Manusia {<br />
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
          }</code></p>

          <p><br />
          <strong>Luaran 3:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;The method sukaNonton(String) is undefined for the type Manusia1<br />
          &nbsp;&nbsp; &nbsp;The method sukaNonton(int, int) is undefined for the type Manusia1<br />
          &nbsp;&nbsp; &nbsp;at Manusia1.main(Manusia1.java:23)</code></p>

          <p><strong>Latihan 3:</strong><br />
          3.1. &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!<br />
          3.2. &nbsp;Ubahlah method dan constructor Contoh 3 sesuai dengan perilaku/ behavior anda<br />
          3.3. &nbsp;Berdasarkan Contoh 3 dan Latihan 3.2. simpulkan perbedaan:<br />
          &nbsp; &nbsp; &nbsp; &nbsp; a) constructor overloading dan overriding<br />
          &nbsp; &nbsp; &nbsp; &nbsp; b) method overloading, dan method overriding<br />
          &nbsp; &nbsp; &nbsp; &nbsp; c) method yang mengembalikan nilai dan method tidak mengembalikan nilai</p>

          <h2><br />
          <strong>Unit 4 Extends</strong></h2>

          <p>Extends adalah kata kerja dari keturunan yang merujuk ke kelas induk, sehingga otomatis memiliki atribut dan method dari kelas induk.&nbsp;</p>

          <p>Deklarasi objek: <code>class NamaAnak extends NamaInduk { &hellip; }</code></p>

          <p><strong>Contoh 4:</strong> Salin dan tempel kode program berikut ke JDoodle. Kemudian catat waktu eksekusinya.</p>

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
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp; &nbsp;&nbsp;System.out.println(&quot;\\n Sifat Anak :&quot;);&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;Anak objekA = new Anak();&nbsp;&nbsp; &nbsp;//memanggil objek anak<br />
          &nbsp;&nbsp; &nbsp;objekA.sukaMenonton(9, &quot;Film Drakor&quot;);&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//memanggil sifat spesifik anak yang diturunkan induk<br />
          &nbsp;&nbsp; &nbsp;objekA.sukaMembaca(&quot;Komik One Piece&quot;); //memanggil method ke induk yang otomatis diturunkan tanpa deklarasi ulang di anak<br />
          }&nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>class Anak extends Ortu {<br />
          &nbsp; void sukaMenonton(int a, String b) {<br />
          &nbsp; &nbsp; &nbsp; System.out.println(&quot;Nonton Jam &quot; + a + &quot; Malam &quot; + b);<br />
          &nbsp; }&nbsp;&nbsp; &nbsp;<br />
          &nbsp; void sukaMenonton(String a) {&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// method induk spesifik<br />
          &nbsp; &nbsp; &nbsp; System.out.println(&quot;Nonton &quot; + a);<br />
          &nbsp; }<br />
          &nbsp; void sukaMembaca(String a) { &nbsp;&nbsp; &nbsp;// method induk umum bisa diubah anak<br />
          &nbsp; &nbsp; &nbsp;System.out.println(&quot;Suka Baca &quot; + a);<br />
          &nbsp; }<br />
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
          }&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran 4:</strong><br />
          <code>Sifat Orang Tua :<br />
          Nonton Berita<br />
          Suka Baca Koran</code></p>

          <p><code>&nbsp;Sifat Anak :<br />
          Nonton Jam 9 Malam Film Drakor<br />
          Suka Baca Komik One Piece</code></p>

          <p><strong>Latihan 4:</strong><br />
          4.1. Evaluasi method yang dimiliki <code>class Anak extends Ortu </code>dengan method di <code>class Ortu</code>!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Apakah penulisan method ini sudah efisien?<br />
          4.2. Setelah dirunning di JDoodle, catat waktu eksekusinya.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Rekomendasikan perbaikan penulisan kode method untuk dapat mengefisienkan waktu eksekusi!<br />
          &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-kelas-57631b4e838ac48.pdf','url_materi' => 'https://www.youtube.com/watch?v=60IdOc8m8Es','url_kedua_materi' => 'https://www.youtube.com/watch?v=6qULMlcv-eg','critical_status' => '1','created_at' => '2022-09-09 21:32:35','updated_at' => '2022-09-09 21:37:12'),
            array('id' => '91','topik_pembahasan_id' => '56','nama_materi' => 'Kelas','isi_materi' => '<h3>Video penjelasan pembelajaran dapat diakses pada <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw"><strong>Chanel Youtube Rumah Ilmu Raflesia</strong><br />
          https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></h3>

          <h3><a href="https://www.youtube.com/watch?v=60IdOc8m8Es "><strong>Video Materi 1 tentang Kelas, Objek, Method &ndash; https://www.youtube.com/watch?v=60IdOc8m8Es&nbsp;</strong></a></h3>

          <h3><strong><a href="https://www.youtube.com/watch?v=6qULMlcv-eg">Video Materi 2 tentang &ndash; https://www.youtube.com/watch?v=6qULMlcv-eg</a>&nbsp;</strong></h3>

          <p>&nbsp;</p>

          <h2><strong>Unit 1 Kelas (Class)</strong></h2>

          <p>Class adalah entitas yang menggambarkan keadaan dan perilaku dari objek. Sehingga, kelas memiliki kumpulan objek dengan sifat yang umum. Class akan menjalankan data baru sesuai model dari objek yang dibuat berdasarkan karakter objek tersebut.&nbsp;</p>

          <p>Contoh deklarasi:<br />
          <code>classKelasKu{<br />
          &nbsp; &nbsp;//deklarasi field,konstruktor dan method<br />
          }</code></p>

          <p><strong>Contoh 1:</strong><br />
          <code>public class Manusia { &nbsp;// deklarasi kelas<br />
          &nbsp;&nbsp; &nbsp;//deklarasi atribut Manusia dalam variabel<br />
          &nbsp;&nbsp; &nbsp;String nama, rambut;<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;//deklarasi constructor<br />
          &nbsp;&nbsp; &nbsp;public Manusia1 (String nama) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot; Nama saya : &quot;+ nama +&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&quot;\\n Warna Rambut : &quot; + rambut);&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;//deklarasi method utama<br />
          &nbsp;&nbsp; &nbsp;public static void main( String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Manusia1 satu = new Manusia1(&quot;Putri&quot;, &quot;hitam&quot;);<br />
          }&nbsp; }</code></p>

          <p><br />
          <strong>Luaran 1:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problem:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;The constructor Manusia1(String, String) is undefined<br />
          &nbsp;&nbsp; &nbsp;at Manusia1.main(Manusia1.java:13)</code></p>

          <p><strong>Latihan 1:</strong><br />
          1.1.&nbsp;&nbsp; &nbsp; Perbaiki pesan kesalahan Contoh 1!<br />
          1.2.&nbsp;&nbsp; &nbsp; Cermati contoh 1. susun kode menggunakan constructor dengan parameter data pribadi anda!</p>

          <p>&nbsp;</p>

          <h2><strong>Unit 2 Objek</strong></h2>

          <p>Objek adalah bentuk keturunan dari kelas, sehingga otomatis memiliki atribut dan method dari kelas.&nbsp;</p>

          <p>Deklarasi objek: <code>NamaKelas &nbsp;NamaObjek = new NamaKelas(parameter);</code></p>

          <p><strong>Contoh 2: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle.</p>

          <p><code>public class Ortu {<br />
          &nbsp;&nbsp; &nbsp;//deklarasi constructor &nbsp;(variabel constructor)<br />
          &nbsp;&nbsp; &nbsp;public ortu &nbsp; { &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; //nama dan rambut adalah variabel constructor<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot; Nama saya : &quot;+ nama +&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&quot;\\n Warna Rambut : &quot; + rambut);&nbsp;&nbsp; &nbsp;<br />
          }<br />
          &nbsp;&nbsp; &nbsp;public static void main (String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Ortu satu = new Ortu(&quot;Putri&quot;, &quot;hitam&quot;);<br />
          }&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran 2:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problem:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;The constructor Ortu(String, String) is undefined</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;at Ortu.main(Ortu.java:9)</code></p>

          <p><strong>Latihan 2:</strong><br />
          2.1. &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!<br />
          2.2. &nbsp;Apabila nanti Anda akan memiliki keturunan, analisa sifat (atribut) dan constructor sebagai Ortu apa yang akan diturunkan (gunakan data karakter pribadi anda) ?<br />
          2.3.&nbsp; Rancanglah kode program untuk sifat (atribut) dan constructor overloaded dari Latihan 2.2!</p>

          <h2><br />
          <strong>Unit 3 Method</strong></h2>

          <p>Method adalah perilaku yang dilakukan objek.&nbsp;</p>

          <p>Deklarasi method: <code>void/tipeData NamaMethod (tipedata namaVariabel) { &hellip; }</code></p>

          <p><strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle.</p>

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
          }&nbsp; }</code></p>

          <p><strong>Luaran 3:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;The method sukaNonton(String) is undefined for the type Manusia1<br />
          &nbsp;&nbsp; &nbsp;The method sukaNonton(int, int) is undefined for the type Manusia1<br />
          &nbsp;&nbsp; &nbsp;at Manusia1.main(Manusia1.java:23)</code></p>

          <p><strong>Latihan 3:</strong><br />
          3.1. &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!<br />
          3.2. &nbsp;Berdasarkan Latihan 2.2. Anda sudah punya kode program untuk atribut dan constructor sebagai Ortu.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Kembangkanlah kode program untuk method dari Ortu dengan data perilaku pribadi Anda yang menggunakan:<br />
          &nbsp; &nbsp; &nbsp; &nbsp; a)&nbsp;method overloading,<br />
          &nbsp; &nbsp; &nbsp; &nbsp; b) method dengan return value<br />
          &nbsp; &nbsp; &nbsp; &nbsp; c) method tanpa return value&nbsp;</p>

          <h2><br />
          <strong>Unit 4 Extends</strong></h2>

          <p>Extends adalah kata kerja dari keturunan yang merujuk ke kelas induk, sehingga otomatis memiliki atribut dan method dari kelas induk.&nbsp;</p>

          <p>Deklarasi objek: <code>class NamaAnak extends NamaInduk { &hellip; }</code></p>

          <p><strong>Contoh 4: </strong>Salin dan tempel kode program berikut ke JDoodle. Kemudian catat waktu eksekusinya.</p>

          <p><code>public class Ortu { &nbsp; &nbsp;&nbsp; &nbsp;// membuat kelas induk<br />
          &nbsp; &nbsp; void sukaMenonton(String a) {&nbsp;&nbsp; &nbsp;// method induk spesifik<br />
          &nbsp; &nbsp; &nbsp; System.out.println(&quot;Nonton &quot; + a);<br />
          &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; void sukaMembaca(String a) { &nbsp;&nbsp; &nbsp;// method induk umum bisa diubah anak<br />
          &nbsp; &nbsp; &nbsp; System.out.println(&quot;Suka Baca &quot; + a);<br />
          &nbsp; &nbsp; }</code></p>

          <p><code>public static void main(String [] args) {<br />
          &nbsp; &nbsp; System.out.println(&quot;Sifat Orang Tua :&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;Ortu objekO = new Ortu(); &nbsp;&nbsp; &nbsp;// memanggil objek induk<br />
          &nbsp;&nbsp; &nbsp;objekO.sukaMenonton(&quot;Berita&quot;);&nbsp;&nbsp; &nbsp;// memanggil sifat spesifik induk<br />
          &nbsp;&nbsp; &nbsp;objekO.sukaMembaca(&quot;Koran&quot;); &nbsp;&nbsp; &nbsp;// memanggil method dengan variabel dapat diubah<br />
          &nbsp;&nbsp; &nbsp;<br />
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
          }&nbsp; &nbsp; }</code></p>

          <p><strong>Luaran 4:</strong><br />
          <code>Sifat Orang Tua :<br />
          Nonton Berita<br />
          Suka Baca Koran</code></p>

          <p><code>Sifat Anak :<br />
          Nonton Jam 9 Malam Film Drakor<br />
          Suka Baca Komik One Piece</code></p>

          <p><strong>Latihan 4:</strong><br />
          4.1. Evaluasi method yang dimiliki Contoh 4&nbsp; pada <code>class Anak extends Ortu </code>dengan method di <code>class Ortu</code>.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Simpulkan hasil evaluasi Anda agar method ini menjadi efisien!<br />
          4.2. Setelah dirunning di JDoodle, catat waktu eksekusinya.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode program yang dapat mengefisienkan waktu eksekusi!</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-kelas-56631b52f7f205a.pdf','url_materi' => 'https://www.youtube.com/watch?v=60IdOc8m8Es','url_kedua_materi' => 'https://www.youtube.com/watch?v=6qULMlcv-eg','critical_status' => '2','created_at' => '2022-09-09 21:51:35','updated_at' => '2022-09-09 21:51:35'),
            array('id' => '92','topik_pembahasan_id' => '57','nama_materi' => 'Kelas','isi_materi' => '<h3>Video penjelasan pembelajaran dapat diakses pada <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw"><strong>Chanel Youtube Rumah Ilmu Raflesia</strong><br />
          https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></h3>

          <h3><a href="https://www.youtube.com/watch?v=60IdOc8m8Es "><strong>Video Materi 1 tentang Kelas, Objek, Method &ndash; https://www.youtube.com/watch?v=60IdOc8m8Es&nbsp;</strong></a></h3>

          <h3><strong><a href="https://www.youtube.com/watch?v=6qULMlcv-eg">Video Materi 2 tentang &ndash; https://www.youtube.com/watch?v=6qULMlcv-eg</a>&nbsp;</strong></h3>

          <p>&nbsp;</p>

          <h2><strong>Unit 1 Kelas (Class)</strong></h2>

          <p>Class adalah entitas yang menggambarkan keadaan dan perilaku dari objek. Sehingga, kelas memiliki kumpulan objek dengan sifat yang umum. Class akan menjalankan data baru sesuai model dari objek yang dibuat berdasarkan karakter objek tersebut.&nbsp;</p>

          <p>Contoh deklarasi:<br />
          <code>classKelasKu{<br />
          &nbsp; &nbsp;//deklarasi field,konstruktor dan method<br />
          }</code></p>

          <p><strong>Contoh 1:</strong><br />
          <code>public class Manusia { &nbsp;// deklarasi kelas<br />
          &nbsp;&nbsp; &nbsp;//deklarasi atribut Manusia dalam variabel<br />
          &nbsp;&nbsp; &nbsp;String nama, rambut;<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;//deklarasi constructor<br />
          &nbsp;&nbsp; &nbsp;public Manusia1 (String nama) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot; Nama saya : &quot;+ nama +&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&quot;\\n Warna Rambut : &quot; + rambut);&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;//deklarasi method utama<br />
          &nbsp;&nbsp; &nbsp;public static void main( String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Manusia1 satu = new Manusia1(&quot;Putri&quot;, &quot;hitam&quot;);<br />
          }&nbsp; }</code></p>

          <p><br />
          <strong>Luaran 1:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problem:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;The constructor Manusia1(String, String) is undefined<br />
          &nbsp;&nbsp; &nbsp;at Manusia1.main(Manusia1.java:13)</code></p>

          <p><strong>Latihan 1:</strong><br />
          1.1.&nbsp;&nbsp; &nbsp; Perbaiki pesan kesalahan Contoh 1!<br />
          1.2.&nbsp;&nbsp; &nbsp; Cermati contoh 1. susun kode menggunakan constructor dengan parameter data pribadi anda!</p>

          <p>&nbsp;</p>

          <h2><strong>Unit 2 Objek</strong></h2>

          <p>Objek adalah bentuk keturunan dari kelas, sehingga otomatis memiliki atribut dan method dari kelas.&nbsp;</p>

          <p>Deklarasi objek: <code>NamaKelas &nbsp;NamaObjek = new NamaKelas(parameter);</code></p>

          <p><strong>Contoh 2: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle.</p>

          <p><code>public class Ortu {<br />
          &nbsp;&nbsp; &nbsp;//deklarasi constructor &nbsp;(variabel constructor)<br />
          &nbsp;&nbsp; &nbsp;public ortu &nbsp; { &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; //nama dan rambut adalah variabel constructor<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot; Nama saya : &quot;+ nama +&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&quot;\\n Warna Rambut : &quot; + rambut);&nbsp;&nbsp; &nbsp;<br />
          }<br />
          &nbsp;&nbsp; &nbsp;public static void main (String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Ortu satu = new Ortu(&quot;Putri&quot;, &quot;hitam&quot;);<br />
          }&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran 2:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problem:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;The constructor Ortu(String, String) is undefined</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;at Ortu.main(Ortu.java:9)</code></p>

          <p><strong>Latihan 2:</strong><br />
          2.1. &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!<br />
          2.2. &nbsp;Apabila nanti Anda akan memiliki keturunan, analisa sifat (atribut) dan constructor sebagai Ortu apa yang akan diturunkan (gunakan data karakter pribadi anda) ?<br />
          2.3.&nbsp; Rancanglah kode program untuk sifat (atribut) dan constructor overloaded dari Latihan 2.2!</p>

          <h2><br />
          <strong>Unit 3 Method</strong></h2>

          <p>Method adalah perilaku yang dilakukan objek.&nbsp;</p>

          <p>Deklarasi method: <code>void/tipeData NamaMethod (tipedata namaVariabel) { &hellip; }</code></p>

          <p><strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle.</p>

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
          }&nbsp; }</code></p>

          <p><strong>Luaran 3:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;The method sukaNonton(String) is undefined for the type Manusia1<br />
          &nbsp;&nbsp; &nbsp;The method sukaNonton(int, int) is undefined for the type Manusia1<br />
          &nbsp;&nbsp; &nbsp;at Manusia1.main(Manusia1.java:23)</code></p>

          <p><strong>Latihan 3:</strong><br />
          3.1. &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!<br />
          3.2. &nbsp;Berdasarkan Latihan 2.2. Anda sudah punya kode program untuk atribut dan constructor sebagai Ortu.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Kembangkanlah kode program untuk method dari Ortu dengan data perilaku pribadi Anda yang menggunakan:<br />
          &nbsp; &nbsp; &nbsp; &nbsp; a)&nbsp;method overloading,<br />
          &nbsp; &nbsp; &nbsp; &nbsp; b) method dengan return value<br />
          &nbsp; &nbsp; &nbsp; &nbsp; c) method tanpa return value&nbsp;</p>

          <h2><br />
          <strong>Unit 4 Extends</strong></h2>

          <p>Extends adalah kata kerja dari keturunan yang merujuk ke kelas induk, sehingga otomatis memiliki atribut dan method dari kelas induk.&nbsp;</p>

          <p>Deklarasi objek: <code>class NamaAnak extends NamaInduk { &hellip; }</code></p>

          <p><strong>Contoh 4: </strong>Salin dan tempel kode program berikut ke JDoodle. Kemudian catat waktu eksekusinya.</p>

          <p><code>public class Ortu { &nbsp; &nbsp;&nbsp; &nbsp;// membuat kelas induk<br />
          &nbsp; &nbsp; void sukaMenonton(String a) {&nbsp;&nbsp; &nbsp;// method induk spesifik<br />
          &nbsp; &nbsp; &nbsp; System.out.println(&quot;Nonton &quot; + a);<br />
          &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; void sukaMembaca(String a) { &nbsp;&nbsp; &nbsp;// method induk umum bisa diubah anak<br />
          &nbsp; &nbsp; &nbsp; System.out.println(&quot;Suka Baca &quot; + a);<br />
          &nbsp; &nbsp; }</code></p>

          <p><code>public static void main(String [] args) {<br />
          &nbsp; &nbsp; System.out.println(&quot;Sifat Orang Tua :&quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;Ortu objekO = new Ortu(); &nbsp;&nbsp; &nbsp;// memanggil objek induk<br />
          &nbsp;&nbsp; &nbsp;objekO.sukaMenonton(&quot;Berita&quot;);&nbsp;&nbsp; &nbsp;// memanggil sifat spesifik induk<br />
          &nbsp;&nbsp; &nbsp;objekO.sukaMembaca(&quot;Koran&quot;); &nbsp;&nbsp; &nbsp;// memanggil method dengan variabel dapat diubah<br />
          &nbsp;&nbsp; &nbsp;<br />
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
          }&nbsp; &nbsp; }</code></p>

          <p><strong>Luaran 4:</strong><br />
          <code>Sifat Orang Tua :<br />
          Nonton Berita<br />
          Suka Baca Koran</code></p>

          <p><code>Sifat Anak :<br />
          Nonton Jam 9 Malam Film Drakor<br />
          Suka Baca Komik One Piece</code></p>

          <p><strong>Latihan 4:</strong><br />
          4.1. Evaluasi method yang dimiliki Contoh 4&nbsp; pada <code>class Anak extends Ortu </code>dengan method di <code>class Ortu</code>.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Simpulkan hasil evaluasi Anda agar method ini menjadi efisien!<br />
          4.2. Setelah dirunning di JDoodle, catat waktu eksekusinya.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode program yang dapat mengefisienkan waktu eksekusi!</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-kelas-57631b531af1c68.pdf','url_materi' => 'https://www.youtube.com/watch?v=60IdOc8m8Es','url_kedua_materi' => 'https://www.youtube.com/watch?v=6qULMlcv-eg','critical_status' => '2','created_at' => '2022-09-09 21:52:10','updated_at' => '2022-09-09 21:52:10'),
            array('id' => '93','topik_pembahasan_id' => '59','nama_materi' => 'IF dan SWITCH','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada <strong>Chanel Youtube Rumah Ilmu Raflesia</strong><br />
          https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</p>

          <h4><strong>Video Materi 1 tentang IF&nbsp; &ndash; <a href="https://www.youtube.com/watch?v=G0dfdAFa9iM">https://www.youtube.com/watch?v=G0dfdAFa9iM</a></strong></h4>

          <h4><strong>Video Materi 2 tentang SWITCH &ndash;<a href="http://https://www.youtube.com/watch?v=RB4nz4xkisM"> https://www.youtube.com/watch?v=RB4nz4xkisM</a></strong></h4>

          <p>&nbsp;</p>

          <h2><strong>Unit 1 IF&nbsp;</strong></h2>

          <p>Pada suatu program tidak mungkin hanya membuat pernyatan&ndash; pernyataan yang dijalankan secara urut dari baris pertama sampai terakhir secara bergantian. Program yang baik memerlukan suatu syarat khusus untuk menjalankan suatu pernyataan yang dinamakan percabangan atau branching.<br />
          Secara analogi dalam kehidupan sehari &ndash; hari percabangan dapat kita lihat pada saat kita berjalan saat tiba di persimpangan kita akan memilih jalan kemana yang akan kita lewati untuk mencapai tujuankita apakah lurus, belok kekiri, atau belok ke kanan. Apabila tujuan kita lurus maka kita tidak akan mungkin sampai ke tujuan apabila kita belok kiri atau kanan, sama dengan program untuk memperoleh hasil sesuai yang kita inginkan maka harus dilakukan suatu seleksi terhadap kondisi tertentu.&nbsp;<br />
          Operasi dasar algoritma percabangan seperti if sederhana (if tunggal), if majemuk (if..else), if dengan dua kondisi if &ndash; else if, dan percabangan switch case. Percabangan if merupakan pernyataan yang digunakan untuk pengambilan keputusan terhadap dua buah kemungkinan. If bisa berdiri sendiri atau dengan menggunakan Else</p>

          <p>Contoh Deklarasi:<br />
          <code>if(kondisi)<br />
          &nbsp;&nbsp; &nbsp;//blok pernyataan yang dijalankan, bila kondisi benar<br />
          }</code></p>

          <p>Blok instruksi yang terletak setelah if akan dikerjakan jika hasil logika dari kondisi di belakangnya bernilai benar. Hasil logika ini bisa dibentuk dari satu kondisi atau lebih. Sebuah instruksi if hanya bisa mengerjakan satu instruksi saja. Jika Anda menginginkan lebih banyak instruksi, Anda harus menggunakan kurung kurawal.&nbsp;</p>

          <p><strong>Contoh 1:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

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

          <p><strong>Luaran&nbsp; Contoh 1:</strong><br />
          <code>Masukkan Angka Anda : 8<br />
          Nilai Bukan Sepuluh</code></p>

          <p>&nbsp;</p>

          <p><strong>Contoh 2:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class IfBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner varT = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Tugas Anda : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int nilaiT = &nbsp;varT.nextByte();<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Scanner varQ = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Quiz Anda : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int nilaiQ = &nbsp;varQ.nextByte();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;if (nilaiU &gt;= 80) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(nilaiT &gt;= 80) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Anda mendapatkan nilai A&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;else{<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Anda TIDAK mendapatkan nilai A&quot;);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh 2:</strong><br />
          Masukkan Angka Tugas Anda : 70<br />
          Masukkan Angka Quiz Anda : 70<br />
          Masukkan Angka UTS Anda : 70<br />
          Anda TIDAK mendapatkan nilai A</p>

          <p><strong>Latihan 1:</strong></p>

          <p>1.1.&nbsp;&nbsp; &nbsp;Bilangan genap merupakan bilangan yang habis dibagi 2. Bilangan ganjil adalah bilangan yang tidak habis dibagi 2. Analisa kode program yang tepat untuk menghitung masukan pengguna termasuk bilangan genap atau bilangan ganjil (lihat Contoh 1)?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (Petunjuk: hitung = nilai % 2 jika hitung = 0 maka bilangan genap, jika hitung = 1 maka bilangan ganjil)</p>

          <p>1.2.&nbsp;&nbsp; &nbsp;Cermati contoh 2, analisa kondisi pada <code>IF </code>bersarang! &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tambahkan satu kondisi <code>IF </code>dengan satu nilai input Quiz (nilaiQ). Jika nilai UTS, Tugas, dan Quiz lebih besar sama dengan 80 maka siswa mendapat nilai A.</p>

          <p>1.3.&nbsp;&nbsp; &nbsp;Apakah ketiga kondisi <code>IF </code>pada Contoh 1.2. dapat diringkas menjadi satu kondisi?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Periksa satu kondisi mana yang paling tepat menggantikan &nbsp;ketiga kondisi itu!<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a.&nbsp;&nbsp; <code>&nbsp;IF (nilaiU &gt;= 80 || nilaiT &gt;= 80 || nilaiQ &gt;= 80)</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b.&nbsp;&nbsp; &nbsp;<code>IF (nilaiU &gt;= 80 || nilaiT &gt;= 80 &amp;&amp; nilaiQ &gt;= 80)</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c.&nbsp;&nbsp; &nbsp;<code>IF (nilaiU &gt;= 80 &amp;&amp; nilaiT &gt;= 80 || nilaiQ &gt;= 80)</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; d.&nbsp;&nbsp; <code>&nbsp;IF (nilaiU &gt;= 80 &amp;&amp; nilaiT &gt;= 80 &amp;&amp; nilaiQ &gt;= 80)</code></p>

          <p>1.4.&nbsp;&nbsp; &nbsp;Uraikan gambar diagram flowchart dari Latihan 1.2!</p>

          <h2><br />
          <strong>Unit 2 SWITCH</strong></h2>

          <p>Perintah switch dapat melakukan sejumlah pilihan berbeda terhadap sejumlah kemungkinan nilai. Pada perintah switch terdapat pernyataan break, untukmenghentikan eksekusi ke akhir pernyataan switch. Perintah switch tidak bisa digunakan untuk ekspresi string dan kondisi boolean&nbsp;&nbsp; &nbsp;.&nbsp;</p>

          <p>Bentuk umum perintah ini:</p>

          <p><code>switch(ekspresi){<br />
          case nilaiSatu:<br />
          Pernyataan 1<br />
          break;<br />
          case nilaiDua:<br />
          &nbsp;&nbsp;&nbsp; &nbsp;Pernyataan2<br />
          break;<br />
          default: PernyataanN;</code></p>

          <p><code>}</code></p>

          <p><strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

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

          <p><strong>Luaran Contoh 3:</strong></p>

          <p><code>Pilih A atau B : &nbsp;A<br />
          Anda sudah rajin belajar</code></p>

          <p>&nbsp;</p>

          <p><strong>Contoh 4: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class SwitchBersarang {</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;byte bulan;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int tahun = 2022;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int jumlahHari = 0;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan data bulan (dalam angka): &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner masukData = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;bulan = masukData.nextByte();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;switch (bulan) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case 1: case 3: &nbsp; //baris 1<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;jumlahHari = 31;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case 4: //baris 2<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;jumlahHari = 30;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case 2:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;if (tahun % 4 == 0)<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;jumlahHari = 29;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;else<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;jumlahHari = 28;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;default:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Maaf bulan hanya sampai 12.&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Jumlah hari = &quot; + jumlahHari);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh 4:&nbsp;</strong><br />
          <code>Masukkan data bulan (dalam angka): 7<br />
          Jumlah hari = 31</code></p>

          <p><strong>Latihan 2:</strong></p>

          <p>2.1.&nbsp;&nbsp; &nbsp;Cermati kode pada Contoh 3.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Hapuslah kode <code>break</code>; pada //baris 1, eksekusi kembali.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Kemudian hapuslah kode <code>break</code>; pada //baris 2, eksekusi kembali.<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Analisis perbedaan hasil luaran ketika kode menggunakan <code>break</code>, ketika kode <code>break </code>baris 1 dihapus, dan ketika kode <code>break </code>baris 2 dihapus!&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Analisa kegunaan baris kode dengan <code>break </code>dan kata kunci <code>default</code>!&nbsp;</p>

          <p>2.2.&nbsp; &nbsp; Cermati kode pada Contoh 4 yang menampilkan jumlah hari sesuai dengan bulannya. Namun kode tersebut baru sampai bulan ke-4. Tambahkan sampai bulan ke-12 pada baris ke-1 dan baris ke-2.&nbsp;</p>

          <p>2.3.&nbsp; &nbsp; Cermati permasalahan yang dipecahkan pada Contoh 3.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Apakah masalah ini bisa diubah menjadi perintah <code>IF</code>?&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Jika bisa, rincikan analisa Anda!&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Bandingkan masalah yang dapat diselesaikan percabangan dengan <code>IF</code> atau <code>SWITCH </code>!</p>

          <p>2.4.&nbsp; &nbsp; Buatlah dokumentasi gambar flowchart dari Latihan 2.1. dan Latihan 2.2!<br />
          &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-if-dan-switch-59632566407adfa.pdf','url_materi' => 'https://www.youtube.com/watch?v=G0dfdAFa9iM','url_kedua_materi' => 'https://www.youtube.com/watch?v=RB4nz4xkisM','critical_status' => '0','created_at' => '2022-09-17 13:16:32','updated_at' => '2022-09-18 23:21:41'),
            array('id' => '94','topik_pembahasan_id' => '60','nama_materi' => 'IF dan SWITCH','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada <strong>Chanel Youtube Rumah Ilmu Raflesia</strong><br />
          https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</p>

          <h4><strong>Video Materi 1 tentang IF&nbsp; &ndash; <a href="https://www.youtube.com/watch?v=G0dfdAFa9iM">https://www.youtube.com/watch?v=G0dfdAFa9iM</a></strong></h4>

          <h4><strong>Video Materi 2 tentang SWITCH &ndash;<a href="http://https://www.youtube.com/watch?v=RB4nz4xkisM"> https://www.youtube.com/watch?v=RB4nz4xkisM</a></strong></h4>

          <p>&nbsp;</p>

          <h2><strong>Unit 1 IF&nbsp;</strong></h2>

          <p>Pada suatu program tidak mungkin hanya membuat pernyatan&ndash; pernyataan yang dijalankan secara urut dari baris pertama sampai terakhir secara bergantian. Program yang baik memerlukan suatu syarat khusus untuk menjalankan suatu pernyataan yang dinamakan percabangan atau branching.<br />
          Secara analogi dalam kehidupan sehari &ndash; hari percabangan dapat kita lihat pada saat kita berjalan saat tiba di persimpangan kita akan memilih jalan kemana yang akan kita lewati untuk mencapai tujuankita apakah lurus, belok kekiri, atau belok ke kanan. Apabila tujuan kita lurus maka kita tidak akan mungkin sampai ke tujuan apabila kita belok kiri atau kanan, sama dengan program untuk memperoleh hasil sesuai yang kita inginkan maka harus dilakukan suatu seleksi terhadap kondisi tertentu.&nbsp;<br />
          Operasi dasar algoritma percabangan seperti if sederhana (if tunggal), if majemuk (if..else), if dengan dua kondisi if &ndash; else if, dan percabangan switch case. Percabangan if merupakan pernyataan yang digunakan untuk pengambilan keputusan terhadap dua buah kemungkinan. If bisa berdiri sendiri atau dengan menggunakan Else</p>

          <p>Contoh Deklarasi:<br />
          <code>if(kondisi)<br />
          &nbsp;&nbsp; &nbsp;//blok pernyataan yang dijalankan, bila kondisi benar<br />
          }</code></p>

          <p>Blok instruksi yang terletak setelah if akan dikerjakan jika hasil logika dari kondisi di belakangnya bernilai benar. Hasil logika ini bisa dibentuk dari satu kondisi atau lebih. Sebuah instruksi if hanya bisa mengerjakan satu instruksi saja. Jika Anda menginginkan lebih banyak instruksi, Anda harus menggunakan kurung kurawal.&nbsp;</p>

          <p><strong>Contoh 1:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

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

          <p><strong>Luaran&nbsp; Contoh 1:</strong><br />
          <code>Masukkan Angka Anda : 8<br />
          Nilai Bukan Sepuluh</code></p>

          <p>&nbsp;</p>

          <p><strong>Contoh 2:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class IfBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner varT = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Tugas Anda : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int nilaiT = &nbsp;varT.nextByte();<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Scanner varQ = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Quiz Anda : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int nilaiQ = &nbsp;varQ.nextByte();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;if (nilaiU &gt;= 80) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(nilaiT &gt;= 80) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Anda mendapatkan nilai A&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;else{<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Anda TIDAK mendapatkan nilai A&quot;);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh 2:</strong><br />
          Masukkan Angka Tugas Anda : 70<br />
          Masukkan Angka Quiz Anda : 70<br />
          Masukkan Angka UTS Anda : 70<br />
          Anda TIDAK mendapatkan nilai A</p>

          <p><strong>Latihan 1:</strong></p>

          <p>1.1.&nbsp;&nbsp; &nbsp;Bilangan genap merupakan bilangan yang habis dibagi 2. Bilangan ganjil adalah bilangan yang tidak habis dibagi 2. Analisa kode program yang tepat untuk menghitung masukan pengguna termasuk bilangan genap atau bilangan ganjil (lihat Contoh 1)?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (Petunjuk: hitung = nilai % 2 jika hitung = 0 maka bilangan genap, jika hitung = 1 maka bilangan ganjil)</p>

          <p>1.2.&nbsp;&nbsp; &nbsp;Cermati contoh 2, analisa kondisi pada <code>IF </code>bersarang! &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tambahkan satu kondisi <code>IF </code>dengan satu nilai input Quiz (nilaiQ). Jika nilai UTS, Tugas, dan Quiz lebih besar sama dengan 80 maka siswa mendapat nilai A.</p>

          <p>1.3.&nbsp;&nbsp; &nbsp;Apakah ketiga kondisi <code>IF </code>pada Contoh 1.2. dapat diringkas menjadi satu kondisi?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Periksa satu kondisi mana yang paling tepat menggantikan &nbsp;ketiga kondisi itu!<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a.&nbsp;&nbsp; <code>&nbsp;IF (nilaiU &gt;= 80 || nilaiT &gt;= 80 || nilaiQ &gt;= 80)</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b.&nbsp;&nbsp; &nbsp;<code>IF (nilaiU &gt;= 80 || nilaiT &gt;= 80 &amp;&amp; nilaiQ &gt;= 80)</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c.&nbsp;&nbsp; &nbsp;<code>IF (nilaiU &gt;= 80 &amp;&amp; nilaiT &gt;= 80 || nilaiQ &gt;= 80)</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; d.&nbsp;&nbsp; <code>&nbsp;IF (nilaiU &gt;= 80 &amp;&amp; nilaiT &gt;= 80 &amp;&amp; nilaiQ &gt;= 80)</code></p>

          <p>1.4.&nbsp;&nbsp; &nbsp;Uraikan gambar diagram flowchart dari Latihan 1.2!</p>

          <h2><br />
          <strong>Unit 2 SWITCH</strong></h2>

          <p>Perintah switch dapat melakukan sejumlah pilihan berbeda terhadap sejumlah kemungkinan nilai. Pada perintah switch terdapat pernyataan break, untukmenghentikan eksekusi ke akhir pernyataan switch. Perintah switch tidak bisa digunakan untuk ekspresi string dan kondisi boolean&nbsp;&nbsp; &nbsp;.&nbsp;</p>

          <p>Bentuk umum perintah ini:</p>

          <p><code>switch(ekspresi){<br />
          case nilaiSatu:<br />
          Pernyataan 1<br />
          break;<br />
          case nilaiDua:<br />
          &nbsp;&nbsp;&nbsp; &nbsp;Pernyataan2<br />
          break;<br />
          default: PernyataanN;</code></p>

          <p><code>}</code></p>

          <p><strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

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

          <p><strong>Luaran Contoh 3:</strong></p>

          <p><code>Pilih A atau B : &nbsp;A<br />
          Anda sudah rajin belajar</code></p>

          <p>&nbsp;</p>

          <p><strong>Contoh 4: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class SwitchBersarang {</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;byte bulan;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int tahun = 2022;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int jumlahHari = 0;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan data bulan (dalam angka): &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner masukData = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;bulan = masukData.nextByte();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;switch (bulan) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case 1: case 3: &nbsp; //baris 1<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;jumlahHari = 31;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case 4: //baris 2<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;jumlahHari = 30;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case 2:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;if (tahun % 4 == 0)<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;jumlahHari = 29;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;else<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;jumlahHari = 28;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;default:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Maaf bulan hanya sampai 12.&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Jumlah hari = &quot; + jumlahHari);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh 4:&nbsp;</strong><br />
          <code>Masukkan data bulan (dalam angka): 7<br />
          Jumlah hari = 31</code></p>

          <p><strong>Latihan 2:</strong></p>

          <p>2.1.&nbsp;&nbsp; &nbsp;Cermati kode pada Contoh 3.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Hapuslah kode <code>break</code>; pada //baris 1, eksekusi kembali.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Kemudian hapuslah kode <code>break</code>; pada //baris 2, eksekusi kembali.<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Analisis perbedaan hasil luaran ketika kode menggunakan <code>break</code>, ketika kode <code>break </code>baris 1 dihapus, dan ketika kode <code>break </code>baris 2 dihapus!&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Analisa kegunaan baris kode dengan <code>break </code>dan kata kunci <code>default</code>!&nbsp;</p>

          <p>2.2.&nbsp; &nbsp; Cermati kode pada Contoh 4 yang menampilkan jumlah hari sesuai dengan bulannya. Namun kode tersebut baru sampai bulan ke-4. Tambahkan sampai bulan ke-12 pada baris ke-1 dan baris ke-2.&nbsp;</p>

          <p>2.3.&nbsp; &nbsp; Cermati permasalahan yang dipecahkan pada Contoh 3.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Apakah masalah ini bisa diubah menjadi perintah <code>IF</code>?&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Jika bisa, rincikan analisa Anda!&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Bandingkan masalah yang dapat diselesaikan percabangan dengan <code>IF</code> atau <code>SWITCH </code>!</p>

          <p>2.4.&nbsp; &nbsp; Buatlah dokumentasi gambar flowchart dari Latihan 2.1. dan Latihan 2.2!<br />
          &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-if-dan-switch-60632566578159d.pdf','url_materi' => 'https://www.youtube.com/watch?v=G0dfdAFa9iM','url_kedua_materi' => 'https://www.youtube.com/watch?v=RB4nz4xkisM','critical_status' => '0','created_at' => '2022-09-17 13:16:55','updated_at' => '2022-09-18 23:19:58'),
            array('id' => '95','topik_pembahasan_id' => '60','nama_materi' => 'IF dan SWITCH','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada<strong> <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">Chanel Youtube Rumah Ilmu Raflesia</a></strong><br />
          https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</p>

          <h4><strong>Video Materi 1 tentang IF&nbsp; &ndash; <a href="https://www.youtube.com/watch?v=G0dfdAFa9iM">https://www.youtube.com/watch?v=G0dfdAFa9iM</a></strong></h4>

          <h4><strong>Video Materi 2 tentang SWITCH &ndash;<a href="http://https://www.youtube.com/watch?v=RB4nz4xkisM"> https://www.youtube.com/watch?v=RB4nz4xkisM</a></strong></h4>

          <p>&nbsp;</p>

          <h2><strong>Unit 1 IF&nbsp;</strong></h2>

          <p>Blok instruksi yang terletak setelah if akan dikerjakan jika hasil logika dari kondisi di belakangnya bernilai benar. Hasil logika ini bisa dibentuk dari satu kondisi atau lebih. Sebuah instruksi if hanya bisa mengerjakan satu instruksi saja.</p>

          <p>Bentuknya seperti:</p>

          <p><code>if (ekspresi_boolean1) {<br />
          //blok pernyataan yang dijalankan, bila kondisi benar<br />
          }<br />
          &nbsp;else if (ekspresi_boolean2) {<br />
          //blok pernyataan yang dijalankan, bila kondisi benar<br />
          }</code></p>

          <p>Ketika ekspresi_boolean bernilai <code>false</code>, maka alur program akan menuju ke bagian <code>else</code>. Selanjutnya Pernyataan2 diatas akan dikerjakan kalau ekspresi_boolean2 bernilai <code>true</code>.&nbsp;&nbsp; &nbsp;</p>

          <p><strong>Contoh 1:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner; //memanggil impor package yang membaca masukan pengguna</code></p>

          <p><code>public class PercabanganIf {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner input = new Scanner(System.in); &nbsp;// membaca teks yang dimasukkan pengguna<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Anda : &quot;); &nbsp;//pengguna memasukkan data<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;nilai = &nbsp;masuk.nextByte(); &nbsp;//menyimpan masukan pengguna ke tipe data<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (nilai = 1000) { &nbsp;//percabangan yang memeriksa kondisi<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Seribu&quot;); &nbsp;//baris kode yang dieksekusi bila benar<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;else &nbsp;{ &nbsp;//baris kode yang dieksekusi bila kondisi tidak terpenuhi dan salah<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Nilai Bukan Seribu&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} &nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh 1:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp; &nbsp; nilai cannot be resolved to a variable<br />
          &nbsp;&nbsp; &nbsp;masuk cannot be resolved<br />
          &nbsp;&nbsp; &nbsp;nilai cannot be resolved to a variable</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;at PercabanganIf.main(PercabanganIf.java:7)</code></p>

          <p>&nbsp;</p>

          <p><strong>Contoh 2:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class IfBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner varT = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Tugas Anda : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int nilaiT = &nbsp;varT.nextByte();<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Scanner varQ = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Quiz Anda : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int nilaiQ = &nbsp;varQ.nextByte();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;if (nilaiU &gt;= 80) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(nilaiT &gt;= 80) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Anda mendapatkan nilai A&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;else{<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Anda TIDAK mendapatkan nilai A&quot;);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh 2:</strong><br />
          <code>Masukkan Angka Tugas Anda : 70<br />
          Masukkan Angka Quiz Anda : 70<br />
          Masukkan Angka UTS Anda : 70<br />
          Anda TIDAK mendapatkan nilai A</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan 1:</strong></p>

          <p>1.1.&nbsp;&nbsp; &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!</p>

          <p>1.2.&nbsp;&nbsp; &nbsp;Cermati contoh 2, analisa kondisi pada IF bersarang! &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tambahkan satu kondisi IF dengan satu nilai input Quiz (nilaiQ). Jika nilai UTS, Tugas, dan Quiz lebih besar sama dengan 80 maka siswa mendapat nilai A.</p>

          <p>1.3.&nbsp;&nbsp; &nbsp;Apakah ketiga kondisi IF pada Contoh 1.2. dapat diringkas menjadi satu kondisi?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Periksa satu kondisi mana yang paling tepat menggantikan &nbsp;ketiga kondisi itu!<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a.&nbsp;&nbsp; <code>IF (nilaiU &gt;= 80 || nilaiT &gt;= 80 || nilaiQ &gt;= 80)</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b.&nbsp;&nbsp; <code>IF (nilaiU &gt;= 80 || nilaiT &gt;= 80 &amp;&amp; nilaiQ &gt;= 80)</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c.&nbsp;&nbsp; &nbsp;<code>IF (nilaiU &gt;= 80 &amp;&amp; nilaiT &gt;= 80 || nilaiQ &gt;= 80)</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; d.&nbsp;&nbsp; <code>IF (nilaiU &gt;= 80 &amp;&amp; nilaiT &gt;= 80 &amp;&amp; nilaiQ &gt;= 80)</code></p>

          <p>1.4.&nbsp;&nbsp; &nbsp;Uraikan gambar diagram flowchart dari Latihan 1.2!</p>

          <h2><br />
          <strong>Unit 2 SWITCH</strong></h2>

          <p>Perintah <code>switch </code>memungkinkan untuk melakukan sejumlah pilihan berbeda terhadap sejumlah kemungkinan nilai. Pada perintah <code>switch </code>terdapat pernyataan break, untukmenghentikan eksekusi ke akhir pernyataan <code>switch</code>. Perintah <code>switch </code>tidak bisa digunakan untuk ekspresi string dan kondisi boolean&nbsp;&nbsp; &nbsp;.&nbsp;</p>

          <p>Bentuk umum perintah ini:</p>

          <p><code>switch(ekspresi){<br />
          case nilaiSatu:<br />
          Pernyataan 1<br />
          break;<br />
          case nilaiDua:<br />
          &nbsp;&nbsp;&nbsp; &nbsp;Pernyataan2<br />
          break;<br />
          default: PernyataanN;}</code></p>

          <p><br />
          <strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

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

          <p><strong>Luaran Contoh 3:</strong><br />
          <tt>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;Cannot invoke next() on the primitive type char<br />
          &nbsp;&nbsp; &nbsp;Syntax error on token &quot;:&quot;, { expected<br />
          &nbsp;&nbsp; &nbsp;Syntax error, insert &quot;:: IdentifierOrNew&quot; to complete ReferenceExpression<br />
          &nbsp;&nbsp; &nbsp;Syntax error, insert &quot;:&quot; to complete SwitchLabel<br />
          &nbsp;&nbsp; &nbsp;A cannot be resolved to a variable<br />
          &nbsp;&nbsp; &nbsp;Syntax error on token &quot;default&quot;, } expected</tt></p>

          <p><tt>&nbsp;&nbsp; &nbsp;at SwitchBersarang.main(SwitchBersarang.java:8)</tt></p>

          <p><br />
          <strong>Contoh 4: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;byte bulan;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int tahun = 2022;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int jumlahHari = 0;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan data bulan (dalam angka): &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner masukData = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;bulan = masukData.nextByte();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;switch (bulan) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 1: jumlahHari = 31; break;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 2: if (tahun % 4 == 0) { &nbsp;jumlahHari = 29; }<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;else { jumlahHari = 28; }<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          case 3: jumlahHari = 31; break;<br />
          case 4: jumlahHari = 30; break;<br />
          case 5: jumlahHari = 31; break;<br />
          case 6: jumlahHari = 30; break;<br />
          case 7: jumlahHari = 31; break;<br />
          case 8: jumlahHari = 31; break;<br />
          case 9: jumlahHari = 30; break;<br />
          case 10: jumlahHari = 31; break;<br />
          case 11: jumlahHari = 30; break;<br />
          case 12: jumlahHari = 31; break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;default: System.out.println(&quot;Maaf bulan hanya sampai 12.&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Jumlah hari = &quot; + jumlahHari);<br />
          }&nbsp;&nbsp; &nbsp;}</code></p>

          <p><br />
          <strong>Luaran Contoh 4:&nbsp;</strong></p>

          <p>Masukkan data bulan (dalam angka): 7<br />
          Jumlah hari = 31</p>

          <p><strong>Latihan 2:</strong><br />
          2.1. Cermati kode pada Contoh 3.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Hapuslah kode <code>break</code>; pada //baris 1, lalu eksekusi kembali.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Kemudian hapuslah kode <code>break</code>; pada //baris 2, lalu eksekusi kembali.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Simpulkan kegunaan <code>break </code>pada <code>switch</code>!</p>

          <p>2.2. Cermati kode pada Contoh 4. Evaluasi apakah penulisan kode tersebut sudah efisien?&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Apakah ada penulisan informasi yang diulangi?&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Jika ada, rekomendasikan penulisan yang lebih tepat!</p>

          <p>2.3.&nbsp; Cermati permasalahan yang dipecahkan pada Contoh 3.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Apakah masalah ini bisa diubah menjadi perintah <code>IF</code>?&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Jika bisa, rekomendasikan bentuk perintah <code>IF </code>dari Contoh 3!&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Simpulkan perbandingan masalah yang dapat diselesaikan percabangan dengan <code>IF </code>atau&nbsp;<code>SWITCH </code>!</p>

          <p>2.4.&nbsp; Desain gambar flowchart dari Latihan 2.2. dan Latihan 2.3!<br />
          &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-if-dan-switch-606325e21fa2dd2.pdf','url_materi' => 'https://www.youtube.com/watch?v=G0dfdAFa9iM','url_kedua_materi' => 'https://www.youtube.com/watch?v=RB4nz4xkisM','critical_status' => '1','created_at' => '2022-09-17 22:05:03','updated_at' => '2022-09-24 15:34:12'),
            array('id' => '96','topik_pembahasan_id' => '59','nama_materi' => 'IF dan SWITCH','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada<strong> <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">Chanel Youtube Rumah Ilmu Raflesia</a></strong><br />
          https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</p>

          <h4><strong>Video Materi 1 tentang IF&nbsp; &ndash; <a href="https://www.youtube.com/watch?v=G0dfdAFa9iM">https://www.youtube.com/watch?v=G0dfdAFa9iM</a></strong></h4>

          <h4><strong>Video Materi 2 tentang SWITCH &ndash;<a href="http://https://www.youtube.com/watch?v=RB4nz4xkisM"> https://www.youtube.com/watch?v=RB4nz4xkisM</a></strong></h4>

          <p>&nbsp;</p>

          <h2><strong>Unit 1 IF&nbsp;</strong></h2>

          <p>Blok instruksi yang terletak setelah if akan dikerjakan jika hasil logika dari kondisi di belakangnya bernilai benar. Hasil logika ini bisa dibentuk dari satu kondisi atau lebih. Sebuah instruksi if hanya bisa mengerjakan satu instruksi saja.</p>

          <p>Bentuknya seperti:</p>

          <p><code>if (ekspresi_boolean1) {<br />
          //blok pernyataan yang dijalankan, bila kondisi benar<br />
          }<br />
          &nbsp;else if (ekspresi_boolean2) {<br />
          //blok pernyataan yang dijalankan, bila kondisi benar<br />
          }</code></p>

          <p>Ketika ekspresi_boolean bernilai <code>false</code>, maka alur program akan menuju ke bagian <code>else</code>. Selanjutnya Pernyataan2 diatas akan dikerjakan kalau ekspresi_boolean2 bernilai <code>true</code>.&nbsp;&nbsp; &nbsp;</p>

          <p><strong>Contoh 1:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner; //memanggil impor package yang membaca masukan pengguna</code></p>

          <p><code>public class PercabanganIf {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner input = new Scanner(System.in); &nbsp;// membaca teks yang dimasukkan pengguna<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Anda : &quot;); &nbsp;//pengguna memasukkan data<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;nilai = &nbsp;masuk.nextByte(); &nbsp;//menyimpan masukan pengguna ke tipe data<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (nilai = 1000) { &nbsp;//percabangan yang memeriksa kondisi<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Seribu&quot;); &nbsp;//baris kode yang dieksekusi bila benar<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;else &nbsp;{ &nbsp;//baris kode yang dieksekusi bila kondisi tidak terpenuhi dan salah<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Nilai Bukan Seribu&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} &nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh 1:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp; &nbsp; nilai cannot be resolved to a variable<br />
          &nbsp;&nbsp; &nbsp;masuk cannot be resolved<br />
          &nbsp;&nbsp; &nbsp;nilai cannot be resolved to a variable</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;at PercabanganIf.main(PercabanganIf.java:7)</code></p>

          <p>&nbsp;</p>

          <p><strong>Contoh 2:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class IfBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner varT = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Tugas Anda : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int nilaiT = &nbsp;varT.nextByte();<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Scanner varQ = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Quiz Anda : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int nilaiQ = &nbsp;varQ.nextByte();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;if (nilaiU &gt;= 80) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(nilaiT &gt;= 80) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Anda mendapatkan nilai A&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;else{<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Anda TIDAK mendapatkan nilai A&quot;);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh 2:</strong><br />
          <code>Masukkan Angka Tugas Anda : 70<br />
          Masukkan Angka Quiz Anda : 70<br />
          Masukkan Angka UTS Anda : 70<br />
          Anda TIDAK mendapatkan nilai A</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan 1:</strong></p>

          <p>1.1.&nbsp;&nbsp; &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!</p>

          <p>1.2.&nbsp;&nbsp; &nbsp;Cermati contoh 2, analisa kondisi pada IF bersarang! &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tambahkan satu kondisi IF dengan satu nilai input Quiz (nilaiQ). Jika nilai UTS, Tugas, dan Quiz lebih besar sama dengan 80 maka siswa mendapat nilai A.</p>

          <p>1.3.&nbsp;&nbsp; &nbsp;Apakah ketiga kondisi IF pada Contoh 1.2. dapat diringkas menjadi satu kondisi?<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Periksa satu kondisi mana yang paling tepat menggantikan &nbsp;ketiga kondisi itu!<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a.&nbsp;&nbsp; <code>IF (nilaiU &gt;= 80 || nilaiT &gt;= 80 || nilaiQ &gt;= 80)</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b.&nbsp;&nbsp; <code>IF (nilaiU &gt;= 80 || nilaiT &gt;= 80 &amp;&amp; nilaiQ &gt;= 80)</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c.&nbsp;&nbsp; &nbsp;<code>IF (nilaiU &gt;= 80 &amp;&amp; nilaiT &gt;= 80 || nilaiQ &gt;= 80)</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; d.&nbsp;&nbsp; <code>IF (nilaiU &gt;= 80 &amp;&amp; nilaiT &gt;= 80 &amp;&amp; nilaiQ &gt;= 80)</code></p>

          <p>1.4.&nbsp;&nbsp; &nbsp;Uraikan gambar diagram flowchart dari Latihan 1.2!</p>

          <h2><br />
          <strong>Unit 2 SWITCH</strong></h2>

          <p>Perintah <code>switch </code>memungkinkan untuk melakukan sejumlah pilihan berbeda terhadap sejumlah kemungkinan nilai. Pada perintah <code>switch </code>terdapat pernyataan break, untukmenghentikan eksekusi ke akhir pernyataan <code>switch</code>. Perintah <code>switch </code>tidak bisa digunakan untuk ekspresi string dan kondisi boolean&nbsp;&nbsp; &nbsp;.&nbsp;</p>

          <p>Bentuk umum perintah ini:</p>

          <p><code>switch(ekspresi){<br />
          case nilaiSatu:<br />
          Pernyataan 1<br />
          break;<br />
          case nilaiDua:<br />
          &nbsp;&nbsp;&nbsp; &nbsp;Pernyataan2<br />
          break;<br />
          default: PernyataanN;}</code></p>

          <p><br />
          <strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

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

          <p><strong>Luaran Contoh 3:</strong><br />
          <tt>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;Cannot invoke next() on the primitive type char<br />
          &nbsp;&nbsp; &nbsp;Syntax error on token &quot;:&quot;, { expected<br />
          &nbsp;&nbsp; &nbsp;Syntax error, insert &quot;:: IdentifierOrNew&quot; to complete ReferenceExpression<br />
          &nbsp;&nbsp; &nbsp;Syntax error, insert &quot;:&quot; to complete SwitchLabel<br />
          &nbsp;&nbsp; &nbsp;A cannot be resolved to a variable<br />
          &nbsp;&nbsp; &nbsp;Syntax error on token &quot;default&quot;, } expected</tt></p>

          <p><tt>&nbsp;&nbsp; &nbsp;at SwitchBersarang.main(SwitchBersarang.java:8)</tt></p>

          <p><br />
          <strong>Contoh 4: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;byte bulan;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int tahun = 2022;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int jumlahHari = 0;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan data bulan (dalam angka): &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner masukData = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;bulan = masukData.nextByte();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;switch (bulan) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 1: jumlahHari = 31; break;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 2: if (tahun % 4 == 0) { &nbsp;jumlahHari = 29; }<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;else { jumlahHari = 28; }<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          case 3: jumlahHari = 31; break;<br />
          case 4: jumlahHari = 30; break;<br />
          case 5: jumlahHari = 31; break;<br />
          case 6: jumlahHari = 30; break;<br />
          case 7: jumlahHari = 31; break;<br />
          case 8: jumlahHari = 31; break;<br />
          case 9: jumlahHari = 30; break;<br />
          case 10: jumlahHari = 31; break;<br />
          case 11: jumlahHari = 30; break;<br />
          case 12: jumlahHari = 31; break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;default: System.out.println(&quot;Maaf bulan hanya sampai 12.&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Jumlah hari = &quot; + jumlahHari);<br />
          }&nbsp;&nbsp; &nbsp;}</code></p>

          <p><br />
          <strong>Luaran Contoh 4:&nbsp;</strong></p>

          <p>Masukkan data bulan (dalam angka): 7<br />
          Jumlah hari = 31</p>

          <p><strong>Latihan 2:</strong><br />
          2.1. Cermati kode pada Contoh 3.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Hapuslah kode <code>break</code>; pada //baris 1, lalu eksekusi kembali.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Kemudian hapuslah kode <code>break</code>; pada //baris 2, lalu eksekusi kembali.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Simpulkan kegunaan <code>break </code>pada <code>switch</code>!</p>

          <p>2.2. Cermati kode pada Contoh 4. Evaluasi apakah penulisan kode tersebut sudah efisien?&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Apakah ada penulisan informasi yang diulangi?&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Jika ada, rekomendasikan penulisan yang lebih tepat!</p>

          <p>2.3.&nbsp; Cermati permasalahan yang dipecahkan pada Contoh 3.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Apakah masalah ini bisa diubah menjadi perintah <code>IF</code>?&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Jika bisa, rekomendasikan bentuk perintah <code>IF </code>dari Contoh 3!&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Simpulkan perbandingan masalah yang dapat diselesaikan percabangan dengan <code>IF </code>atau&nbsp;<code>SWITCH </code>!</p>

          <p>2.4.&nbsp; Desain gambar flowchart dari Latihan 2.2. dan Latihan 2.3!<br />
          &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-if-dan-switch-596325e2360f253.pdf','url_materi' => 'https://www.youtube.com/watch?v=G0dfdAFa9iM','url_kedua_materi' => 'https://www.youtube.com/watch?v=RB4nz4xkisM','critical_status' => '1','created_at' => '2022-09-17 22:05:26','updated_at' => '2022-09-21 10:43:26'),
            array('id' => '97','topik_pembahasan_id' => '59','nama_materi' => 'IF dan SWITCH','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada<strong> <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">Chanel Youtube Rumah Ilmu Raflesia</a></strong><br />
          https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</p>

          <h4><strong>Video Materi 1 tentang IF&nbsp; &ndash; <a href="https://www.youtube.com/watch?v=G0dfdAFa9iM">https://www.youtube.com/watch?v=G0dfdAFa9iM</a></strong></h4>

          <h4><strong>Video Materi 2 tentang SWITCH &ndash;<a href="http://https://www.youtube.com/watch?v=RB4nz4xkisM"> https://www.youtube.com/watch?v=RB4nz4xkisM</a></strong></h4>

          <h4>&nbsp;</h4>

          <h2><strong>Unit 1 IF&nbsp;</strong></h2>

          <p>Blok instruksi yang terletak setelah if akan dikerjakan jika hasil logika dari kondisi di belakangnya bernilai benar. Hasil logika ini bisa dibentuk dari satu kondisi atau lebih. Sebuah instruksi if hanya bisa mengerjakan satu instruksi saja.</p>

          <p>Bentuknya seperti:</p>

          <p><code>if (ekspresi_boolean1) {<br />
          //blok pernyataan yang dijalankan, bila kondisi benar<br />
          }<br />
          &nbsp;else if (ekspresi_boolean2) {<br />
          //blok pernyataan yang dijalankan, bila kondisi benar<br />
          }</code></p>

          <p>Ketika ekspresi_boolean bernilai <code>false</code>, maka alur program akan menuju ke bagian <code>else</code>. Selanjutnya Pernyataan2 diatas akan dikerjakan kalau ekspresi_boolean2 bernilai <code>true</code>.&nbsp;&nbsp; &nbsp;</p>

          <p><strong>Contoh 1: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner; //memanggil impor package yang membaca masukan pengguna</code></p>

          <p><code>public class PercabanganIf {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {</code><br />
          &nbsp;</p>

          <p><strong>Contoh 1:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner; //memanggil impor package yang membaca masukan pengguna</code></p>

          <p><code>public class PercabanganIf {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner input = new Scanner(System.in); &nbsp;// membaca teks yang dimasukkan pengguna<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Anda : &quot;); &nbsp;//pengguna memasukkan data<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;nilai = &nbsp;masuk.nextByte(); &nbsp;//menyimpan masukan pengguna ke tipe data<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (nilai = 1000) { &nbsp;//percabangan yang memeriksa kondisi<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Seribu&quot;); &nbsp;//baris kode yang dieksekusi bila benar<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;else &nbsp;{ &nbsp;//baris kode yang dieksekusi bila kondisi tidak terpenuhi dan salah<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Nilai Bukan Seribu&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} &nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh 1:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp; &nbsp; nilai cannot be resolved to a variable<br />
          &nbsp;&nbsp; &nbsp;masuk cannot be resolved<br />
          &nbsp;&nbsp; &nbsp;nilai cannot be resolved to a variable</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;at PercabanganIf.main(PercabanganIf.java:7)</code></p>

          <p>&nbsp;</p>

          <p><strong>Contoh 2:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class IfBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner varT = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Tugas Anda : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int nilaiT = &nbsp;varT.nextByte();<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Scanner varQ = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Quiz Anda : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int nilaiQ = &nbsp;varQ.nextByte();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;if (nilaiU &gt;= 80) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(nilaiT &gt;= 80) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Anda mendapatkan nilai A&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;else{<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Anda TIDAK mendapatkan nilai A&quot;);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh 2:</strong></p>

          <p><code>Masukkan Angka Tugas Anda : 70<br />
          Masukkan Angka Quiz Anda : 70<br />
          Masukkan Angka UTS Anda : 70<br />
          Anda TIDAK mendapatkan nilai A</code></p>

          <p><br />
          <strong>Latihan 1:</strong></p>

          <p>1.1. Evaluasi penyebab kesalahan dan perbaiki kode tersebut!</p>

          <p>1.2. Cermati contoh 2, analisa kondisi pada <code>IF </code>bersarang! &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Tambahkan satu kondisi <code>IF </code>dengan satu nilai input Quiz (nilaiQ). Jika nilai UTS, Tugas, dan Quiz lebih besar sama dengan 80<br />
          &nbsp; &nbsp; &nbsp; &nbsp;maka siswa mendapat nilai A.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Apakah ketiga kondisi <code>IF </code>pada Contoh 1.2. dapat diringkas menjadi satu kondisi?<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Rancanglah kode yang dapat menggantikan ketiga kondisi tersebut menggunakan &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;operator boolen ( &amp;&amp; atau ||) !</p>

          <p>1.3.&nbsp; Konstruksikan kode program untuk menghasilkan luaran berdasarkan informasi berikut!<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Persyaratan kelulusan bagi mahasiswa Informatika dan Sistem Informasi Universitas Bengkulu yaitu:<br />
          &nbsp; &nbsp; &nbsp; &nbsp;a)&nbsp;&nbsp; &nbsp;Jumlah sks yang lulus minimum = 144 sks. Jika kurang dari 144 maka perlu mengulang mengambil mata kuliah hingga memenuhi<br />
          &nbsp; &nbsp; &nbsp; &nbsp;b)&nbsp;&nbsp; &nbsp;Nilai tes toefl minimum = 430. Jika skor belum mencapai maka ulangi tes toefl maksimal 3x atau hingga skor tercapai<br />
          &nbsp; &nbsp; &nbsp; &nbsp;c)&nbsp;&nbsp; &nbsp;Ujian skripsi = Lulus, jika belum lulus maka perlu ujian ulang.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;d)&nbsp;&nbsp; &nbsp;Menulis artikel ilmiah dari skripsi yang dibuat dalam status = submitted. Jika bukti penerimaan submitted tidak dilampirkan<br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;maka persyaratan belum terpenuhi.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Jika keempat syarat ini terpenuhi maka Mahasiswa layak lulus dengan gelar S.Kom. (Sarjana Komputer).</p>

          <p>1.4.&nbsp;&nbsp; &nbsp;Desain gambar diagram flowchart dari Latihan 1.3!</p>

          <h2><br />
          <strong>Unit 2 SWITCH</strong></h2>

          <p>Perintah <code>switch </code>memungkinkan untuk melakukan sejumlah pilihan berbeda terhadap sejumlah kemungkinan nilai. Pada perintah <code>switch </code>terdapat pernyataan <code>break</code>, untukmenghentikan eksekusi ke akhir pernyataan <code>switch</code>. Perintah switch tidak bisa digunakan untuk ekspresi string dan kondisi <code>boolean&nbsp;&nbsp; &nbsp;</code>.&nbsp;</p>

          <p>Bentuk umum perintah ini:</p>

          <p><code>switch(ekspresi){<br />
          case nilaiSatu:<br />
          Pernyataan 1<br />
          break;<br />
          case nilaiDua:<br />
          &nbsp;&nbsp;&nbsp; &nbsp;Pernyataan2<br />
          break;<br />
          default: PernyataanN;}</code></p>

          <p><br />
          <strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

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

          <p><br />
          <strong>Luaran Contoh 3:</strong></p>

          <p><code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;Cannot invoke next() on the primitive type char<br />
          &nbsp;&nbsp; &nbsp;Syntax error on token &quot;:&quot;, { expected<br />
          &nbsp;&nbsp; &nbsp;Syntax error, insert &quot;:: IdentifierOrNew&quot; to complete ReferenceExpression<br />
          &nbsp;&nbsp; &nbsp;Syntax error, insert &quot;:&quot; to complete SwitchLabel<br />
          &nbsp;&nbsp; &nbsp;A cannot be resolved to a variable<br />
          &nbsp;&nbsp; &nbsp;Syntax error on token &quot;default&quot;, } expected</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;at SwitchBersarang.main(SwitchBersarang.java:8)</code></p>

          <p><br />
          <strong>Contoh 4:</strong> Salin dan tempel kode program berikut ke Eclipse.</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;byte bulan;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int tahun = 2022;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int jumlahHari = 0;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan data bulan (dalam angka): &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner masukData = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;bulan = masukData.nextByte();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;switch (bulan) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 1: jumlahHari = 31; break;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 2: if (tahun % 4 == 0) { &nbsp;jumlahHari = 29; }<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;else { jumlahHari = 28; }<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          case 3: jumlahHari = 31; break;<br />
          case 4: jumlahHari = 30; break;<br />
          case 5: jumlahHari = 31; break;<br />
          case 6: jumlahHari = 30; break;<br />
          case 7: jumlahHari = 31; break;<br />
          case 8: jumlahHari = 31; break;<br />
          case 9: jumlahHari = 30; break;<br />
          case 10: jumlahHari = 31; break;<br />
          case 11: jumlahHari = 30; break;<br />
          case 12: jumlahHari = 31; break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;default: System.out.println(&quot;Maaf bulan hanya sampai 12.&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Jumlah hari = &quot; + jumlahHari);<br />
          }&nbsp;&nbsp; &nbsp;}</code><br />
          &nbsp;</p>

          <p><strong>Luaran Contoh 4:&nbsp;</strong></p>

          <p><code>Masukkan data bulan (dalam angka): 7<br />
          Jumlah hari = 31</code><br />
          &nbsp;</p>

          <p><strong>Latihan 2:</strong></p>

          <p>2.1. Cermati kode pada Contoh 3.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Hapuslah kode <code>break</code>; pada //baris 1, lalu eksekusi kembali.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Kemudian hapuslah kode <code>break</code>; pada //baris 2, lalu eksekusi kembali.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Simpulkan kegunaan break pada <code>switch</code>!</p>

          <p>2.2. Cermati kode pada Contoh 4. Evaluasi apakah penulisan kode tersebut sudah efisien?&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Apakah ada penulisan informasi yang diulangi?&nbsp;<br />
          &nbsp; &nbsp; &nbsp; Jika ada, susun kembali penulisan kode yang tepat!&nbsp;<br />
          &nbsp; &nbsp; &nbsp; Simpulkan perbedaan antara kode Contoh 4 dengan kode yang kalian susun!&nbsp;</p>

          <p>2.3. Cermati permasalahan yang dipecahkan pada Contoh 3.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Apakah masalah ini bisa diubah menjadi perintah <code>IF</code>?&nbsp;<br />
          &nbsp; &nbsp; &nbsp; Jika bisa, susun kembali kode Contoh 3 dari perintah <code>SWITCH </code>menjadi <code>IF</code>!<br />
          &nbsp; &nbsp; &nbsp; Simpulkan perbandingan masalah dan kode program yang dapat diselesaikan percabangan dengan <code>IF </code>atau &nbsp;<code>SWITCH </code>!</p>

          <p>2.4. Desain gambar flowchart dari Latihan 2.1. dan Latihan 2.3!<br />
          &nbsp;</p>

          <p><br />
          &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-if-dan-switch-596325e8ce89fd2.pdf','url_materi' => 'https://www.youtube.com/watch?v=G0dfdAFa9iM','url_kedua_materi' => 'https://www.youtube.com/watch?v=RB4nz4xkisM','critical_status' => '2','created_at' => '2022-09-17 22:33:34','updated_at' => '2022-09-21 10:50:35'),
            array('id' => '98','topik_pembahasan_id' => '60','nama_materi' => 'IF dan SWITCH','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada<strong> <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">Chanel Youtube Rumah Ilmu Raflesia</a></strong><br />
          https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</p>

          <h4><strong>Video Materi 1 tentang IF&nbsp; &ndash; <a href="https://www.youtube.com/watch?v=G0dfdAFa9iM">https://www.youtube.com/watch?v=G0dfdAFa9iM</a></strong></h4>

          <h4><strong>Video Materi 2 tentang SWITCH &ndash;<a href="http://https://www.youtube.com/watch?v=RB4nz4xkisM"> https://www.youtube.com/watch?v=RB4nz4xkisM</a></strong></h4>

          <h4>&nbsp;</h4>

          <h4>&nbsp;</h4>

          <h2><strong>Unit 1 IF&nbsp;</strong></h2>

          <p>Blok instruksi yang terletak setelah if akan dikerjakan jika hasil logika dari kondisi di belakangnya bernilai benar. Hasil logika ini bisa dibentuk dari satu kondisi atau lebih. Sebuah instruksi if hanya bisa mengerjakan satu instruksi saja.</p>

          <p>Bentuknya seperti:</p>

          <p><code>if (ekspresi_boolean1) {<br />
          //blok pernyataan yang dijalankan, bila kondisi benar<br />
          }<br />
          &nbsp;else if (ekspresi_boolean2) {<br />
          //blok pernyataan yang dijalankan, bila kondisi benar<br />
          }</code></p>

          <p>Ketika ekspresi_boolean bernilai <code>false</code>, maka alur program akan menuju ke bagian <code>else</code>. Selanjutnya Pernyataan2 diatas akan dikerjakan kalau ekspresi_boolean2 bernilai <code>true</code>.&nbsp;&nbsp; &nbsp;</p>

          <p><strong>Contoh 1:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner; //memanggil impor package yang membaca masukan pengguna</code></p>

          <p><code>public class PercabanganIf {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner input = new Scanner(System.in); &nbsp;// membaca teks yang dimasukkan pengguna<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Anda : &quot;); &nbsp;//pengguna memasukkan data<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;nilai = &nbsp;masuk.nextByte(); &nbsp;//menyimpan masukan pengguna ke tipe data<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (nilai = 1000) { &nbsp;//percabangan yang memeriksa kondisi<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Seribu&quot;); &nbsp;//baris kode yang dieksekusi bila benar<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;else &nbsp;{ &nbsp;//baris kode yang dieksekusi bila kondisi tidak terpenuhi dan salah<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Nilai Bukan Seribu&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} &nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh 1:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp; &nbsp; nilai cannot be resolved to a variable<br />
          &nbsp;&nbsp; &nbsp;masuk cannot be resolved<br />
          &nbsp;&nbsp; &nbsp;nilai cannot be resolved to a variable</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;at PercabanganIf.main(PercabanganIf.java:7)</code></p>

          <p>&nbsp;</p>

          <p><strong>Contoh 2:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class IfBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner varT = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Tugas Anda : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int nilaiT = &nbsp;varT.nextByte();<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Scanner varQ = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Quiz Anda : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int nilaiQ = &nbsp;varQ.nextByte();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;if (nilaiU &gt;= 80) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(nilaiT &gt;= 80) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Anda mendapatkan nilai A&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;else{<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Anda TIDAK mendapatkan nilai A&quot;);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh 2:</strong></p>

          <p><code>Masukkan Angka Tugas Anda : 70<br />
          Masukkan Angka Quiz Anda : 70<br />
          Masukkan Angka UTS Anda : 70<br />
          Anda TIDAK mendapatkan nilai A</code></p>

          <p><br />
          <strong>Latihan 1:</strong></p>

          <p>1.1. Evaluasi penyebab kesalahan dan perbaiki kode tersebut!</p>

          <p>1.2. Cermati contoh 2, analisa kondisi pada <code>IF </code>bersarang! &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Tambahkan satu kondisi <code>IF </code>dengan satu nilai input Quiz (nilaiQ). Jika nilai UTS, Tugas, dan Quiz lebih besar sama dengan 80<br />
          &nbsp; &nbsp; &nbsp; &nbsp;maka siswa mendapat nilai A.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Apakah ketiga kondisi <code>IF </code>pada Contoh 1.2. dapat diringkas menjadi satu kondisi?<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Rancanglah kode yang dapat menggantikan ketiga kondisi tersebut menggunakan &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;operator boolen ( &amp;&amp; atau ||) !</p>

          <p>1.3.&nbsp; Konstruksikan kode program untuk menghasilkan luaran berdasarkan informasi berikut!<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Persyaratan kelulusan bagi mahasiswa Informatika dan Sistem Informasi Universitas Bengkulu yaitu:<br />
          &nbsp; &nbsp; &nbsp; &nbsp;a)&nbsp;&nbsp; &nbsp;Jumlah sks yang lulus minimum = 144 sks. Jika kurang dari 144 maka perlu mengulang mengambil mata kuliah hingga memenuhi<br />
          &nbsp; &nbsp; &nbsp; &nbsp;b)&nbsp;&nbsp; &nbsp;Nilai tes toefl minimum = 430. Jika skor belum mencapai maka ulangi tes toefl maksimal 3x atau hingga skor tercapai<br />
          &nbsp; &nbsp; &nbsp; &nbsp;c)&nbsp;&nbsp; &nbsp;Ujian skripsi = Lulus, jika belum lulus maka perlu ujian ulang.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;d)&nbsp;&nbsp; &nbsp;Menulis artikel ilmiah dari skripsi yang dibuat dalam status = submitted. Jika bukti penerimaan submitted tidak dilampirkan<br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;maka persyaratan belum terpenuhi.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Jika keempat syarat ini terpenuhi maka Mahasiswa layak lulus dengan gelar S.Kom. (Sarjana Komputer).</p>

          <p>1.4.&nbsp;&nbsp; &nbsp;Desain gambar diagram flowchart dari Latihan 1.3!</p>

          <h2><br />
          <strong>Unit 2 SWITCH</strong></h2>

          <p>Perintah <code>switch </code>memungkinkan untuk melakukan sejumlah pilihan berbeda terhadap sejumlah kemungkinan nilai. Pada perintah <code>switch </code>terdapat pernyataan <code>break</code>, untukmenghentikan eksekusi ke akhir pernyataan <code>switch</code>. Perintah switch tidak bisa digunakan untuk ekspresi string dan kondisi <code>boolean&nbsp;&nbsp; &nbsp;</code>.&nbsp;</p>

          <p>Bentuk umum perintah ini:</p>

          <p><code>switch(ekspresi){<br />
          case nilaiSatu:<br />
          Pernyataan 1<br />
          break;<br />
          case nilaiDua:<br />
          &nbsp;&nbsp;&nbsp; &nbsp;Pernyataan2<br />
          break;<br />
          default: PernyataanN;}</code></p>

          <p><br />
          <strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

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

          <p><br />
          <strong>Luaran Contoh 3:</strong></p>

          <p><code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;Cannot invoke next() on the primitive type char<br />
          &nbsp;&nbsp; &nbsp;Syntax error on token &quot;:&quot;, { expected<br />
          &nbsp;&nbsp; &nbsp;Syntax error, insert &quot;:: IdentifierOrNew&quot; to complete ReferenceExpression<br />
          &nbsp;&nbsp; &nbsp;Syntax error, insert &quot;:&quot; to complete SwitchLabel<br />
          &nbsp;&nbsp; &nbsp;A cannot be resolved to a variable<br />
          &nbsp;&nbsp; &nbsp;Syntax error on token &quot;default&quot;, } expected</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;at SwitchBersarang.main(SwitchBersarang.java:8)</code></p>

          <p><br />
          <strong>Contoh 4:</strong> Salin dan tempel kode program berikut ke Eclipse.</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;byte bulan;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int tahun = 2022;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int jumlahHari = 0;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan data bulan (dalam angka): &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner masukData = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;bulan = masukData.nextByte();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;switch (bulan) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 1: jumlahHari = 31; break;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 2: if (tahun % 4 == 0) { &nbsp;jumlahHari = 29; }<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;else { jumlahHari = 28; }<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          case 3: jumlahHari = 31; break;<br />
          case 4: jumlahHari = 30; break;<br />
          case 5: jumlahHari = 31; break;<br />
          case 6: jumlahHari = 30; break;<br />
          case 7: jumlahHari = 31; break;<br />
          case 8: jumlahHari = 31; break;<br />
          case 9: jumlahHari = 30; break;<br />
          case 10: jumlahHari = 31; break;<br />
          case 11: jumlahHari = 30; break;<br />
          case 12: jumlahHari = 31; break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;default: System.out.println(&quot;Maaf bulan hanya sampai 12.&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Jumlah hari = &quot; + jumlahHari);<br />
          }&nbsp;&nbsp; &nbsp;}</code><br />
          &nbsp;</p>

          <p><strong>Luaran Contoh 4:&nbsp;</strong></p>

          <p><code>Masukkan data bulan (dalam angka): 7<br />
          Jumlah hari = 31</code><br />
          &nbsp;</p>

          <p><strong>Latihan 2:</strong></p>

          <p>2.1. Cermati kode pada Contoh 3.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Hapuslah kode <code>break</code>; pada //baris 1, lalu eksekusi kembali.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Kemudian hapuslah kode <code>break</code>; pada //baris 2, lalu eksekusi kembali.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Simpulkan kegunaan break pada <code>switch</code>!</p>

          <p>2.2. Cermati kode pada Contoh 4. Evaluasi apakah penulisan kode tersebut sudah efisien?&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Apakah ada penulisan informasi yang diulangi?&nbsp;<br />
          &nbsp; &nbsp; &nbsp; Jika ada, susun kembali penulisan kode yang tepat!&nbsp;<br />
          &nbsp; &nbsp; &nbsp; Simpulkan perbedaan antara kode Contoh 4 dengan kode yang kalian susun!&nbsp;</p>

          <p>2.3. Cermati permasalahan yang dipecahkan pada Contoh 3.&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Apakah masalah ini bisa diubah menjadi perintah <code>IF</code>?&nbsp;<br />
          &nbsp; &nbsp; &nbsp; Jika bisa, susun kembali kode Contoh 3 dari perintah <code>SWITCH </code>menjadi <code>IF</code>!<br />
          &nbsp; &nbsp; &nbsp; Simpulkan perbandingan masalah dan kode program yang dapat diselesaikan percabangan dengan <code>IF </code>atau &nbsp;<code>SWITCH </code>!</p>

          <p>2.4. Desain gambar flowchart dari Latihan 2.1. dan Latihan 2.3!<br />
          &nbsp;</p>

          <p><br />
          &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-if-dan-switch-606325e8ea54b93.pdf','url_materi' => 'https://www.youtube.com/watch?v=G0dfdAFa9iM','url_kedua_materi' => 'https://www.youtube.com/watch?v=RB4nz4xkisM','critical_status' => '2','created_at' => '2022-09-17 22:34:02','updated_at' => '2022-09-24 15:33:57'),
            array('id' => '99','topik_pembahasan_id' => '61','nama_materi' => 'FOR dan WHILE','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">Chanel Youtube Rumah Ilmu Raflesia<br />
          https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

          <p><a href="https://www.youtube.com/watch?v=Ij9qLLblxEU">Video Materi 1 tentang FOR &ndash; https://www.youtube.com/watch?v=Ij9qLLblxEU&nbsp;</a></p>

          <p><a href="https://www.youtube.com/watch?v=ORA4JyJMFss">Video Materi 2 tentang WHILE &ndash; https://www.youtube.com/watch?v=ORA4JyJMFss</a>&nbsp;</p>

          <p>&nbsp;</p>

          <h2><strong>UNIT 1 FOR</strong></h2>

          <p>Pernyataan for dapat mengendalikan proses berulang dengan jumlah perulangan yang sudah ditentukan.&nbsp;</p>

          <p>Bentuk umum For:</p>

          <p><code>for (inisialisasi; kondisi; iterasi) {<br />
          &nbsp; &nbsp;pernyataan;<br />
          }</code></p>

          <p>Makna bagian <code>for</code>:<br />
          1.&nbsp;&nbsp; &nbsp;inisialisasi untuk memberikan nilai kepada variabel yang digunakan untuk mengontrol pengulangan.&nbsp;<br />
          2.&nbsp;&nbsp; &nbsp;kondisi untuk mengontrol pengulangan untuk dilanjutkan atau diakhiri.&nbsp;<br />
          3.&nbsp;&nbsp; &nbsp;Penaikan (increment) atau penurunan (decrement) untuk menaikkan atau menurunkan nilai variabel perulangan.&nbsp;</p>

          <p><strong>Contoh 1: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>public class ContohFor{&nbsp;<br />
          public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;for (int y = 0; y &lt;= 10; ++y) { &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//ubah 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (y % 2 == 1) &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//ubah 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;continue; &nbsp;&nbsp;&nbsp; &nbsp;//baris 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;else if (y == 8) &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//ubah 3<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;//baris 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;else<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(y + &quot; &quot;);<br />
          &nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran contoh 1:</strong><br />
          <code>0&nbsp;<br />
          2&nbsp;<br />
          4&nbsp;<br />
          6</code></p>

          <p><strong>Contoh 2:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>public class ForBersarang {&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; pertama:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for( int i = 1; i &lt; 5; i++) {&nbsp;&nbsp; &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;kedua:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int j = 1; j &lt; 3; j ++ ) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;i = &quot; + i + &quot;; j = &quot; +j);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if ( i == 2)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break kedua; &nbsp; &nbsp; &nbsp;//ubah1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;} &nbsp; }</code></p>

          <p><strong>Luaran Contoh 2:</strong><br />
          <code>i = 1; j = 1<br />
          i = 1; j = 2<br />
          i = 2; j = 1<br />
          i = 3; j = 1<br />
          i = 3; j = 2<br />
          i = 4; j = 1<br />
          i = 4; j = 2</code></p>

          <p>&nbsp;</p>

          <p><strong>Contoh 3:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class ForBersarang {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;public static void main(String[] args){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Instance Input Scanner<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner input = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukan Input: &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int tinggi = input.nextInt(); //Mendapatkan Input Dari User<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int t=tinggi; t&gt;=1; t--){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Menghitung Jumlah Tinggi Piramida<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int s=tinggi; s&gt;=t; s--){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Menghitung Jumlah Spasi per Baris<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;*&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); //Membuat Baris Baru<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran contoh 3:</strong></p>

          <p><code>Masukan Input: 7</code><br />
          <code>*<br />
          **<br />
          ***<br />
          ****<br />
          *****<br />
          ******<br />
          *******</code></p>

          <p><strong>Latihan 1</strong></p>

          <p>1.1.&nbsp;&nbsp; &nbsp;Analisa tujuan penulisan kata kunci <code>continue </code>dan <code>break </code>pada Contoh 1!&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Buat perubahan nilai angka pada variabel di&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; //Ubah 1 menjadi <code>&nbsp;for (int y = 0; y &lt;= 15; y++)</code> {&nbsp; lalu running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; //Ubah 2 menjadi<code> &nbsp;if (y % 2 == 0)</code> &nbsp;lalu running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; //Ubah 3 menjadi <code>else if (y == 9) &nbsp;</code>lalu running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Analisa dampaknya perubahan ini terhadap luaran setelah running!</p>

          <p>1.2.&nbsp;&nbsp; &nbsp;Buat perubahan kode pada Contoh 2 di baris //Ubah1 menjadi<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a. <code>continue </code>pertama;&nbsp; lalu &nbsp;running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b. <code>break </code>pertama;&nbsp;lalu running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c. <code>continue </code>kedua;&nbsp;lalu running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Analisa perbedaan perubahan kode pada Ubah 1 untuk setiap poin (a), (b), dan (c)!&nbsp;</p>

          <p>1.3.&nbsp;&nbsp; &nbsp;Cermati kode contoh 3. Apabila ingin menghasilkan luaran berikut:<br />
          <code>Luaran:<br />
          Masukan Input: 7<br />
          *******<br />
          ******<br />
          *****<br />
          ****<br />
          ***<br />
          **<br />
          *</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Susunlah analisa kode untuk menghasilkan luaran tersebut!</p>

          <p>1.4.&nbsp;&nbsp; &nbsp; &nbsp;Analisa diagram flowchart dari Latihan 1.2 dan 1.3!</p>

          <h2><br />
          <strong>UNIT 2 WHILE</strong></h2>

          <p>Pernyataan <code>while</code> berguna untuk melakukan proses yang berulang. Pernyataan akan dijalankan terus menerus selama kondisi bernilai true (benar). Oleh karena itu, kita harus membuat kondisi suatu saat ungkapan bernilai salah agar perulangan berakhir.</p>

          <p>Bentuk umum <code>While</code> seperti:</p>

          <p><code>while (kondisi) {&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; pernyataan;<br />
          }</code></p>

          <p><strong>Contoh 4:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>public class ContohWhile{&nbsp;<br />
          public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;int i=1;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while(i&lt;=6){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(i);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;i++;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(i==4){ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; &nbsp; &nbsp; &nbsp; &nbsp;//ubah1&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}}}</code></p>

          <p>Luaran:<br />
          <code>1<br />
          2<br />
          3</code></p>

          <p>&nbsp;</p>

          <p><strong>Contoh 5:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>public class WhileBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int count = 0; &nbsp;//ubah1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while (count &lt; 20) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (count % 3 == 0) &nbsp;//ubah2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(count);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;count++;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p>Luaran:<br />
          <code>0<br />
          3<br />
          6<br />
          9<br />
          12<br />
          15<br />
          18</code></p>

          <p><strong>Latihan 2</strong></p>

          <p>2.1. &nbsp;Buat perubahan nilai angka pada variabel di Contoh 4<br />
          &nbsp; &nbsp; &nbsp; &nbsp; //Ubah 1 menjadi continue;&nbsp; lalu running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Analisa dampaknya perubahan terhadap luaran setelah running dan uraikan kegunaan break dan continue!</p>

          <p>2.2. Buat perubahan nilai angka pada variabel di Contoh 5<br />
          &nbsp; &nbsp; &nbsp; &nbsp;//Ubah2 menjadi <code>if (count % 5 == 0)&nbsp;</code> lalu running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Analisa dampaknya perubahan terhadap luaran setelah running dan uraikan kegunaan % untuk angka yang berbeda&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;pada perintah tersebut!</p>

          <p>2.3. Buat perubahan nilai angka pada variabel di&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;//Ubah1 menjadi <code>while (count &lt; 0) {</code>&nbsp; &nbsp; lalu running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Ubahlah baris kode <code>while </code>pada Contoh 5 menjadi <code>do &hellip; while</code> dengan persyaratan yang sama <code>&nbsp;while (count &lt; 0)</code>.&nbsp; &nbsp;Bandingkan hasil luaran antara menggunakan while dan <code>do &hellip; while</code>!</p>

          <p>2.4.&nbsp; Analisa diagram flowchart dari Latihan 2.1, Contoh 5, dan Latihan 2.3!</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-for-dan-while-61632f14da599fb.pdf','url_materi' => 'https://www.youtube.com/watch?v=Ij9qLLblxEU','url_kedua_materi' => 'https://www.youtube.com/watch?v=ORA4JyJMFss','critical_status' => '0','created_at' => '2022-09-24 21:31:54','updated_at' => '2022-09-24 21:31:54'),
            array('id' => '100','topik_pembahasan_id' => '62','nama_materi' => 'FOR dan WHILE','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">Chanel Youtube Rumah Ilmu Raflesia<br />
          https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

          <p><a href="https://www.youtube.com/watch?v=Ij9qLLblxEU">Video Materi 1 tentang FOR &ndash; https://www.youtube.com/watch?v=Ij9qLLblxEU&nbsp;</a></p>

          <p><a href="https://www.youtube.com/watch?v=ORA4JyJMFss">Video Materi 2 tentang WHILE &ndash; https://www.youtube.com/watch?v=ORA4JyJMFss</a>&nbsp;</p>

          <p>&nbsp;</p>

          <h2><strong>UNIT 1 FOR</strong></h2>

          <p>Pernyataan for dapat mengendalikan proses berulang dengan jumlah perulangan yang sudah ditentukan.&nbsp;</p>

          <p>Bentuk umum For:</p>

          <p><code>for (inisialisasi; kondisi; iterasi) {<br />
          &nbsp; &nbsp;pernyataan;<br />
          }</code></p>

          <p>Makna bagian <code>for</code>:<br />
          1.&nbsp;&nbsp; &nbsp;inisialisasi untuk memberikan nilai kepada variabel yang digunakan untuk mengontrol pengulangan.&nbsp;<br />
          2.&nbsp;&nbsp; &nbsp;kondisi untuk mengontrol pengulangan untuk dilanjutkan atau diakhiri.&nbsp;<br />
          3.&nbsp;&nbsp; &nbsp;Penaikan (increment) atau penurunan (decrement) untuk menaikkan atau menurunkan nilai variabel perulangan.&nbsp;</p>

          <p><strong>Contoh 1: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>public class ContohFor{&nbsp;<br />
          public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;for (int y = 0; y &lt;= 10; ++y) { &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//ubah 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (y % 2 == 1) &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//ubah 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;continue; &nbsp;&nbsp;&nbsp; &nbsp;//baris 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;else if (y == 8) &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//ubah 3<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;//baris 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;else<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(y + &quot; &quot;);<br />
          &nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran contoh 1:</strong><br />
          <code>0&nbsp;<br />
          2&nbsp;<br />
          4&nbsp;<br />
          6</code></p>

          <p><strong>Contoh 2:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>public class ForBersarang {&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; pertama:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for( int i = 1; i &lt; 5; i++) {&nbsp;&nbsp; &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;kedua:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int j = 1; j &lt; 3; j ++ ) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;i = &quot; + i + &quot;; j = &quot; +j);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if ( i == 2)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break kedua; &nbsp; &nbsp; &nbsp;//ubah1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;} &nbsp; }</code></p>

          <p><strong>Luaran Contoh 2:</strong><br />
          <code>i = 1; j = 1<br />
          i = 1; j = 2<br />
          i = 2; j = 1<br />
          i = 3; j = 1<br />
          i = 3; j = 2<br />
          i = 4; j = 1<br />
          i = 4; j = 2</code></p>

          <p>&nbsp;</p>

          <p><strong>Contoh 3:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class ForBersarang {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;public static void main(String[] args){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Instance Input Scanner<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner input = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukan Input: &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int tinggi = input.nextInt(); //Mendapatkan Input Dari User<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int t=tinggi; t&gt;=1; t--){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Menghitung Jumlah Tinggi Piramida<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int s=tinggi; s&gt;=t; s--){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Menghitung Jumlah Spasi per Baris<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;*&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); //Membuat Baris Baru<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran contoh 3:</strong></p>

          <p><code>Masukan Input: 7</code><br />
          <code>*<br />
          **<br />
          ***<br />
          ****<br />
          *****<br />
          ******<br />
          *******</code></p>

          <p><strong>Latihan 1</strong></p>

          <p>1.1.&nbsp;&nbsp; &nbsp;Analisa tujuan penulisan kata kunci <code>continue </code>dan <code>break </code>pada Contoh 1!&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Buat perubahan nilai angka pada variabel di&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; //Ubah 1 menjadi <code>&nbsp;for (int y = 0; y &lt;= 15; y++)</code> {&nbsp; lalu running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; //Ubah 2 menjadi<code> &nbsp;if (y % 2 == 0)</code> &nbsp;lalu running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; //Ubah 3 menjadi <code>else if (y == 9) &nbsp;</code>lalu running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Analisa dampaknya perubahan ini terhadap luaran setelah running!</p>

          <p>1.2.&nbsp;&nbsp; &nbsp;Buat perubahan kode pada Contoh 2 di baris //Ubah1 menjadi<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a. <code>continue </code>pertama;&nbsp; lalu &nbsp;running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b. <code>break </code>pertama;&nbsp;lalu running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c. <code>continue </code>kedua;&nbsp;lalu running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Analisa perbedaan perubahan kode pada Ubah 1 untuk setiap poin (a), (b), dan (c)!&nbsp;</p>

          <p>1.3.&nbsp;&nbsp; &nbsp;Cermati kode contoh 3. Apabila ingin menghasilkan luaran berikut:<br />
          <code>Luaran:<br />
          Masukan Input: 7<br />
          *******<br />
          ******<br />
          *****<br />
          ****<br />
          ***<br />
          **<br />
          *</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Susunlah analisa kode untuk menghasilkan luaran tersebut!</p>

          <p>1.4.&nbsp;&nbsp; &nbsp; &nbsp;Analisa diagram flowchart dari Latihan 1.2 dan 1.3!</p>

          <h2><br />
          <strong>UNIT 2 WHILE</strong></h2>

          <p>Pernyataan <code>while</code> berguna untuk melakukan proses yang berulang. Pernyataan akan dijalankan terus menerus selama kondisi bernilai true (benar). Oleh karena itu, kita harus membuat kondisi suatu saat ungkapan bernilai salah agar perulangan berakhir.</p>

          <p>Bentuk umum <code>While</code> seperti:</p>

          <p><code>while (kondisi) {&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; pernyataan;<br />
          }</code></p>

          <p><strong>Contoh 4:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>public class ContohWhile{&nbsp;<br />
          public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;int i=1;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while(i&lt;=6){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(i);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;i++;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(i==4){ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; &nbsp; &nbsp; &nbsp; &nbsp;//ubah1&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}}}</code></p>

          <p>Luaran:<br />
          <code>1<br />
          2<br />
          3</code></p>

          <p>&nbsp;</p>

          <p><strong>Contoh 5:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>public class WhileBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int count = 0; &nbsp;//ubah1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while (count &lt; 20) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (count % 3 == 0) &nbsp;//ubah2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(count);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;count++;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p>Luaran:<br />
          <code>0<br />
          3<br />
          6<br />
          9<br />
          12<br />
          15<br />
          18</code></p>

          <p><strong>Latihan 2</strong></p>

          <p>2.1. &nbsp;Buat perubahan nilai angka pada variabel di Contoh 4<br />
          &nbsp; &nbsp; &nbsp; &nbsp; //Ubah 1 menjadi continue;&nbsp; lalu running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Analisa dampaknya perubahan terhadap luaran setelah running dan uraikan kegunaan break dan continue!</p>

          <p>2.2. Buat perubahan nilai angka pada variabel di Contoh 5<br />
          &nbsp; &nbsp; &nbsp; &nbsp;//Ubah2 menjadi <code>if (count % 5 == 0)&nbsp;</code> lalu running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Analisa dampaknya perubahan terhadap luaran setelah running dan uraikan kegunaan % untuk angka yang berbeda&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;pada perintah tersebut!</p>

          <p>2.3. Buat perubahan nilai angka pada variabel di&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;//Ubah1 menjadi <code>while (count &lt; 0) {</code>&nbsp; &nbsp; lalu running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Ubahlah baris kode <code>while </code>pada Contoh 5 menjadi <code>do &hellip; while</code> dengan persyaratan yang sama <code>&nbsp;while (count &lt; 0)</code>.&nbsp; &nbsp;Bandingkan hasil luaran antara menggunakan while dan <code>do &hellip; while</code>!</p>

          <p>2.4.&nbsp; Analisa diagram flowchart dari Latihan 2.1, Contoh 5, dan Latihan 2.3!</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-for-dan-while-62632f150d2afb4.pdf','url_materi' => 'https://www.youtube.com/watch?v=Ij9qLLblxEU','url_kedua_materi' => 'https://www.youtube.com/watch?v=Ij9qLLblxEU','critical_status' => '0','created_at' => '2022-09-24 21:32:45','updated_at' => '2022-09-24 21:32:45'),
            array('id' => '101','topik_pembahasan_id' => '61','nama_materi' => 'FOR dan WHILE','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">Chanel Youtube Rumah Ilmu Raflesia<br />
          https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

          <p><a href="https://www.youtube.com/watch?v=Ij9qLLblxEU">Video Materi 1 tentang FOR &ndash; https://www.youtube.com/watch?v=Ij9qLLblxEU&nbsp;</a></p>

          <p><a href="https://www.youtube.com/watch?v=ORA4JyJMFss">Video Materi 2 tentang WHILE &ndash; https://www.youtube.com/watch?v=ORA4JyJMFss</a>&nbsp;</p>

          <p>&nbsp;</p>

          <h2><strong>UNIT 1 FOR</strong></h2>

          <p>Pernyataan for dapat mengendalikan proses berulang dengan jumlah perulangan yang sudah ditentukan.&nbsp;</p>

          <p>Bentuk umum For:</p>

          <p><code>for (inisialisasi; kondisi; iterasi) {<br />
          &nbsp; &nbsp;pernyataan;<br />
          }</code></p>

          <p>Makna bagian <code>for</code>:<br />
          1.&nbsp;&nbsp; &nbsp;inisialisasi untuk memberikan nilai kepada variabel yang digunakan untuk mengontrol pengulangan.&nbsp;<br />
          2.&nbsp;&nbsp; &nbsp;kondisi untuk mengontrol pengulangan untuk dilanjutkan atau diakhiri.&nbsp;<br />
          3.&nbsp;&nbsp; &nbsp;Penaikan (increment) atau penurunan (decrement) untuk menaikkan atau menurunkan nilai variabel perulangan.&nbsp;</p>

          <p><strong>Contoh 1: Salin dan tempel kode program berikut ke Eclipse.&nbsp;</strong></p>

          <p><code>public class ContohFor{&nbsp;<br />
          public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;for (double &nbsp;y &lt;= 15; y = 0; &nbsp;y++) { &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (y % 2 == 1) { &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;//kondisi 1&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// baris kode kosong 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} else if (y == 8) { &nbsp; &nbsp;&nbsp; &nbsp;//kondisi 2&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// baris kode kosong 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} else<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(y + &quot; &quot;);<br />
          &nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;Syntax error on token &quot;&lt;=&quot;, = expected<br />
          &nbsp;&nbsp; &nbsp;Type mismatch: cannot convert from double to boolean</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;at ContohFor.main(ContohFor.java:5)</code></p>

          <p><strong>Contoh 2: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>public class ForBersarang {&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;pertama:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for( int i = 1; i &lt; 5; i++) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;kedua:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int j = 1; j &lt; 3; j ++ ) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;i = &quot; + i + &quot;; j = &quot; +j);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if ( i == 2) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;// kode yang hilang&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} &nbsp;}&nbsp;&nbsp; &nbsp;} &nbsp; }</code></p>

          <p><strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class ForBersarang {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;public static void main(String[] args){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Instance Input Scanner<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner input = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukan Input: &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int tinggi = input.nextInt(); //Mendapatkan Input Dari User<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int t=tinggi; t&gt;=1; t--){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Menghitung Jumlah Tinggi Piramida<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int s=tinggi; s&gt;=t; s--){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Menghitung Jumlah Spasi per Baris<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;*&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); //Membuat Baris Baru<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>Masukan Input: 7</code><br />
          <strong><code>*<br />
          **<br />
          ***<br />
          ****<br />
          *****<br />
          ******<br />
          *******</code></strong></p>

          <p><strong>Latihan 1</strong><br />
          1.1.&nbsp;&nbsp; &nbsp; Evaluasi penyebab kesalahan dan perbaiki kode pada Contoh 1!<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Rekomendasikan kata kunci yang tepat diletakkan pada baris kode yang kosong 1 dan 2 untuk dapat menghasilkan luaran berikut:<br />
          Luaran contoh 1:<br />
          <code>0&nbsp;<br />
          2&nbsp;<br />
          4&nbsp;<br />
          6&nbsp;</code></p>

          <p>1.2.&nbsp;&nbsp; &nbsp;Cermati contoh kode 2 pada kode &nbsp;//baris kode kosong.<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Rekomendasikan kode yang tepat menggunakan break atau continue terhadap pertama atau kedua agar menghasilkan luaran berikut:<br />
          Luaran Contoh 2:<br />
          <code>i = 1; j = 1<br />
          i = 1; j = 2<br />
          i = 2; j = 1<br />
          i = 2; j = 2</code><br />
          &nbsp;<br />
          1.3.&nbsp;&nbsp; &nbsp;Cermati kode contoh 3. Apabila ingin menghasilkan luaran berikut:<br />
          Luaran berbentuk piramida<br />
          <code>Masukan Input: 7<br />
          &nbsp; &nbsp; &nbsp; &nbsp;*<br />
          &nbsp; &nbsp; &nbsp; ***<br />
          &nbsp; &nbsp; &nbsp;*****<br />
          &nbsp; &nbsp; *******<br />
          &nbsp; &nbsp;*********<br />
          &nbsp; ***********<br />
          &nbsp;*************</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp; Rekomendasikan kode untuk menghasilkan luaran tersebut!</p>

          <p>1.4. &nbsp;Analisa diagram flowchart dari Latihan 1.2 dan 1.3!</p>

          <h2><br />
          <strong>UNIT 2 WHILE</strong></h2>

          <p>Pernyataan <code>while</code> berguna untuk melakukan proses yang berulang. Pernyataan akan dijalankan terus menerus selama kondisi bernilai true (benar). Oleh karena itu, kita harus membuat kondisi suatu saat ungkapan bernilai salah agar perulangan berakhir.</p>

          <p>Bentuk umum <code>While</code> seperti:</p>

          <p><code>while (kondisi) {&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; pernyataan;<br />
          }</code></p>

          <p><strong>Contoh 4:</strong> Salin dan tempel kode program berikut ke Eclipse.</p>

          <p><code>public class ContohWhile{&nbsp;<br />
          public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;int i=1;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while(i&lt;=6){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(i);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;i++;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; if(i==4){ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; &nbsp; &nbsp; &nbsp; &nbsp;//ubah1&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}}}</code></p>

          <p><strong>Luaran:</strong><br />
          <code>1<br />
          2<br />
          3</code></p>

          <p><strong>Contoh 5: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class ForBersarang {&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner dataKata = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Kata yang ingin diulang : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;String kata = dataKata.nextLine();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner dataJumlah = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Jumlah ingin diulang : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int jumlah = dataJumlah.nextInt();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int i = 0; //Inisialisasi batas dasar<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;while(i &lt; jumlah){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(kata);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;i++;//Faktor pengulang Increment<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          }&nbsp;</code></p>

          <p><strong>Luaran Contoh 5:</strong><br />
          <code>Masukkan Kata yang ingin diulang : Fakultas Teknik<br />
          Masukkan Jumlah ingin diulang : 5<br />
          Fakultas Teknik<br />
          Fakultas Teknik<br />
          Fakultas Teknik<br />
          Fakultas Teknik<br />
          Fakultas Teknik</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan 2</strong></p>

          <p>2.1. &nbsp;Ubahlah baris kode pada Contoh 4<br />
          &nbsp; &nbsp; &nbsp; &nbsp; //Ubah1 menjadi &nbsp;if(i % 3 == 0){ &nbsp;  running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp; //Ubah2 menjadi continue; &nbsp; running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Evaluasi perbandingan luaran sebelum dan setelah diubah! Simpulkan maksud dari perubahan tersebut!</p>

          <p>2.2. Cermati Contoh 5. Periksa luaran, bila ketika di eksekusi, jumlah yang diulang = 0!&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Evaluasi luaran, bila kode diubah menjadi do &hellip; while dengan masukan sama jumlah yang diulang = 0.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Simpulkan perbedaan while dan do &hellip; while!</p>

          <p>2.3. Bila diketahui pernyataan pseudocode berikut:<br />
          &nbsp; &nbsp; &nbsp; &nbsp;[1]&nbsp;&nbsp; &nbsp;inisiasi idPelajaran<br />
          &nbsp; &nbsp; &nbsp; &nbsp;[2]&nbsp;&nbsp; &nbsp;inisiasi nilai pelajaran<br />
          &nbsp; &nbsp; &nbsp; &nbsp;[3]&nbsp;&nbsp; &nbsp;inisiasi nilai rata-rata<br />
          &nbsp; &nbsp; &nbsp; &nbsp;[4]&nbsp;&nbsp; &nbsp;Minta pengguna untuk menuliskan jumlah pelajaran<br />
          &nbsp; &nbsp; &nbsp; &nbsp;[5]&nbsp;&nbsp; &nbsp;Ketika idPelajaran lebih kecil dari jumlah pelajaran<br />
          &nbsp; &nbsp; &nbsp; &nbsp;[6]&nbsp;&nbsp; &nbsp;Minta pengguna untuk menuliskan nilai pelajaran<br />
          &nbsp; &nbsp; &nbsp; &nbsp;[7]&nbsp;&nbsp; &nbsp;Hitung nilai rata-rata = (nilai pelajaran + nilai rata-rata) / 2&nbsp; &nbsp; &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;[8]&nbsp;&nbsp; &nbsp;Tambah satu ke idPelajaran<br />
          &nbsp; &nbsp; &nbsp; &nbsp;[9]&nbsp;&nbsp; &nbsp;Tampilkan nilai rata-rata<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Rekomendasikan kode untuk menyelesaikan Pseudocode tersebut!</p>

          <p>2.4.&nbsp;&nbsp; &nbsp; Rancang diagram flowchart dari Latihan 2.1, Latihan 2.2, dan Latihan 2.3!<br />
          &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-for-dan-while-61632f18f06f534.pdf','url_materi' => 'https://www.youtube.com/watch?v=Ij9qLLblxEU','url_kedua_materi' => 'https://www.youtube.com/watch?v=ORA4JyJMFss','critical_status' => '1','created_at' => '2022-09-24 21:49:20','updated_at' => '2022-09-24 21:49:20'),
            array('id' => '102','topik_pembahasan_id' => '62','nama_materi' => 'FOR dan WHILE','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">Chanel Youtube Rumah Ilmu Raflesia<br />
          https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

          <p><a href="https://www.youtube.com/watch?v=Ij9qLLblxEU">Video Materi 1 tentang FOR &ndash; https://www.youtube.com/watch?v=Ij9qLLblxEU&nbsp;</a></p>

          <p><a href="https://www.youtube.com/watch?v=ORA4JyJMFss">Video Materi 2 tentang WHILE &ndash; https://www.youtube.com/watch?v=ORA4JyJMFss</a>&nbsp;</p>

          <p>&nbsp;</p>

          <h2><strong>UNIT 1 FOR</strong></h2>

          <p>Pernyataan for dapat mengendalikan proses berulang dengan jumlah perulangan yang sudah ditentukan.&nbsp;</p>

          <p>Bentuk umum For:</p>

          <p><code>for (inisialisasi; kondisi; iterasi) {<br />
          &nbsp; &nbsp;pernyataan;<br />
          }</code></p>

          <p>Makna bagian <code>for</code>:<br />
          1.&nbsp;&nbsp; &nbsp;inisialisasi untuk memberikan nilai kepada variabel yang digunakan untuk mengontrol pengulangan.&nbsp;<br />
          2.&nbsp;&nbsp; &nbsp;kondisi untuk mengontrol pengulangan untuk dilanjutkan atau diakhiri.&nbsp;<br />
          3.&nbsp;&nbsp; &nbsp;Penaikan (increment) atau penurunan (decrement) untuk menaikkan atau menurunkan nilai variabel perulangan.&nbsp;</p>

          <p><strong>Contoh 1: Salin dan tempel kode program berikut ke Eclipse.&nbsp;</strong></p>

          <p><code>public class ContohFor{&nbsp;<br />
          public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;for (double &nbsp;y &lt;= 15; y = 0; &nbsp;y++) { &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (y % 2 == 1) { &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;//kondisi 1&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// baris kode kosong 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} else if (y == 8) { &nbsp; &nbsp;&nbsp; &nbsp;//kondisi 2&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// baris kode kosong 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} else<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(y + &quot; &quot;);<br />
          &nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;Syntax error on token &quot;&lt;=&quot;, = expected<br />
          &nbsp;&nbsp; &nbsp;Type mismatch: cannot convert from double to boolean</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;at ContohFor.main(ContohFor.java:5)</code></p>

          <p><strong>Contoh 2: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>public class ForBersarang {&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;pertama:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for( int i = 1; i &lt; 5; i++) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;kedua:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int j = 1; j &lt; 3; j ++ ) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;i = &quot; + i + &quot;; j = &quot; +j);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if ( i == 2) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;// kode yang hilang&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} &nbsp;}&nbsp;&nbsp; &nbsp;} &nbsp; }</code></p>

          <p><strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class ForBersarang {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;public static void main(String[] args){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Instance Input Scanner<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner input = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukan Input: &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int tinggi = input.nextInt(); //Mendapatkan Input Dari User<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int t=tinggi; t&gt;=1; t--){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Menghitung Jumlah Tinggi Piramida<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int s=tinggi; s&gt;=t; s--){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Menghitung Jumlah Spasi per Baris<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;*&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); //Membuat Baris Baru<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>Masukan Input: 7</code><br />
          <strong><code>*<br />
          **<br />
          ***<br />
          ****<br />
          *****<br />
          ******<br />
          *******</code></strong></p>

          <p><strong>Latihan 1</strong><br />
          1.1.&nbsp;&nbsp; &nbsp; Evaluasi penyebab kesalahan dan perbaiki kode pada Contoh 1!<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Rekomendasikan kata kunci yang tepat diletakkan pada baris kode yang kosong 1 dan 2 untuk dapat menghasilkan luaran berikut:<br />
          Luaran contoh 1:<br />
          <code>0&nbsp;<br />
          2&nbsp;<br />
          4&nbsp;<br />
          6&nbsp;</code></p>

          <p>1.2.&nbsp;&nbsp; &nbsp;Cermati contoh kode 2 pada kode &nbsp;//baris kode kosong.<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Rekomendasikan kode yang tepat menggunakan break atau continue terhadap pertama atau kedua agar menghasilkan luaran berikut:<br />
          Luaran Contoh 2:<br />
          <code>i = 1; j = 1<br />
          i = 1; j = 2<br />
          i = 2; j = 1<br />
          i = 2; j = 2</code><br />
          &nbsp;<br />
          1.3.&nbsp;&nbsp; &nbsp;Cermati kode contoh 3. Apabila ingin menghasilkan luaran berikut:<br />
          Luaran berbentuk piramida<br />
          <code>Masukan Input: 7<br />
          &nbsp; &nbsp; &nbsp; &nbsp;*<br />
          &nbsp; &nbsp; &nbsp; ***<br />
          &nbsp; &nbsp; &nbsp;*****<br />
          &nbsp; &nbsp; *******<br />
          &nbsp; &nbsp;*********<br />
          &nbsp; ***********<br />
          &nbsp;*************</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp; Rekomendasikan kode untuk menghasilkan luaran tersebut!</p>

          <p>1.4. &nbsp;Analisa diagram flowchart dari Latihan 1.2 dan 1.3!</p>

          <h2><br />
          <strong>UNIT 2 WHILE</strong></h2>

          <p>Pernyataan <code>while</code> berguna untuk melakukan proses yang berulang. Pernyataan akan dijalankan terus menerus selama kondisi bernilai true (benar). Oleh karena itu, kita harus membuat kondisi suatu saat ungkapan bernilai salah agar perulangan berakhir.</p>

          <p>Bentuk umum <code>While</code> seperti:</p>

          <p><code>while (kondisi) {&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; pernyataan;<br />
          }</code></p>

          <p><strong>Contoh 4:</strong> Salin dan tempel kode program berikut ke Eclipse.</p>

          <p><code>public class ContohWhile{&nbsp;<br />
          public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;int i=1;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while(i&lt;=6){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(i);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;i++;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; if(i==4){ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; &nbsp; &nbsp; &nbsp; &nbsp;//ubah1&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}}}</code></p>

          <p><strong>Luaran:</strong><br />
          <code>1<br />
          2<br />
          3</code></p>

          <p><strong>Contoh 5: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class ForBersarang {&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner dataKata = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Kata yang ingin diulang : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;String kata = dataKata.nextLine();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner dataJumlah = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Jumlah ingin diulang : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int jumlah = dataJumlah.nextInt();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int i = 0; //Inisialisasi batas dasar<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;while(i &lt; jumlah){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(kata);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;i++;//Faktor pengulang Increment<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          }&nbsp;</code></p>

          <p><strong>Luaran Contoh 5:</strong><br />
          <code>Masukkan Kata yang ingin diulang : Fakultas Teknik<br />
          Masukkan Jumlah ingin diulang : 5<br />
          Fakultas Teknik<br />
          Fakultas Teknik<br />
          Fakultas Teknik<br />
          Fakultas Teknik<br />
          Fakultas Teknik</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan 2</strong></p>

          <p>2.1. &nbsp;Ubahlah baris kode pada Contoh 4<br />
          &nbsp; &nbsp; &nbsp; &nbsp; //Ubah1 menjadi &nbsp;if(i % 3 == 0){ &nbsp;  running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp; //Ubah2 menjadi continue; &nbsp; running, periksa hasilnya<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Evaluasi perbandingan luaran sebelum dan setelah diubah! Simpulkan maksud dari perubahan tersebut!</p>

          <p>2.2. Cermati Contoh 5. Periksa luaran, bila ketika di eksekusi, jumlah yang diulang = 0!&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Evaluasi luaran, bila kode diubah menjadi do &hellip; while dengan masukan sama jumlah yang diulang = 0.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Simpulkan perbedaan while dan do &hellip; while!</p>

          <p>2.3. Bila diketahui pernyataan pseudocode berikut:<br />
          &nbsp; &nbsp; &nbsp; &nbsp;[1]&nbsp;&nbsp; &nbsp;inisiasi idPelajaran<br />
          &nbsp; &nbsp; &nbsp; &nbsp;[2]&nbsp;&nbsp; &nbsp;inisiasi nilai pelajaran<br />
          &nbsp; &nbsp; &nbsp; &nbsp;[3]&nbsp;&nbsp; &nbsp;inisiasi nilai rata-rata<br />
          &nbsp; &nbsp; &nbsp; &nbsp;[4]&nbsp;&nbsp; &nbsp;Minta pengguna untuk menuliskan jumlah pelajaran<br />
          &nbsp; &nbsp; &nbsp; &nbsp;[5]&nbsp;&nbsp; &nbsp;Ketika idPelajaran lebih kecil dari jumlah pelajaran<br />
          &nbsp; &nbsp; &nbsp; &nbsp;[6]&nbsp;&nbsp; &nbsp;Minta pengguna untuk menuliskan nilai pelajaran<br />
          &nbsp; &nbsp; &nbsp; &nbsp;[7]&nbsp;&nbsp; &nbsp;Hitung nilai rata-rata = (nilai pelajaran + nilai rata-rata) / 2&nbsp; &nbsp; &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp;[8]&nbsp;&nbsp; &nbsp;Tambah satu ke idPelajaran<br />
          &nbsp; &nbsp; &nbsp; &nbsp;[9]&nbsp;&nbsp; &nbsp;Tampilkan nilai rata-rata<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Rekomendasikan kode untuk menyelesaikan Pseudocode tersebut!</p>

          <p>2.4.&nbsp;&nbsp; &nbsp; Rancang diagram flowchart dari Latihan 2.1, Latihan 2.2, dan Latihan 2.3!<br />
          &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-for-dan-while-62632f191446ae2.pdf','url_materi' => 'https://www.youtube.com/watch?v=Ij9qLLblxEU','url_kedua_materi' => 'https://www.youtube.com/watch?v=ORA4JyJMFss','critical_status' => '1','created_at' => '2022-09-24 21:49:56','updated_at' => '2022-09-24 21:49:56'),
            array('id' => '103','topik_pembahasan_id' => '61','nama_materi' => 'FOR dan WHILE','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">Chanel Youtube Rumah Ilmu Raflesia<br />
          https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

          <p><a href="https://www.youtube.com/watch?v=Ij9qLLblxEU">Video Materi 1 tentang FOR &ndash; https://www.youtube.com/watch?v=Ij9qLLblxEU&nbsp;</a></p>

          <p><a href="https://www.youtube.com/watch?v=ORA4JyJMFss">Video Materi 2 tentang WHILE &ndash; https://www.youtube.com/watch?v=ORA4JyJMFss</a>&nbsp;</p>

          <p>&nbsp;</p>

          <h2><strong>UNIT 1 FOR</strong></h2>

          <p>Pernyataan for dapat mengendalikan proses berulang dengan jumlah perulangan yang sudah ditentukan.&nbsp;</p>

          <p>Bentuk umum For:</p>

          <p><code>for (inisialisasi; kondisi; iterasi) {<br />
          &nbsp; &nbsp;pernyataan;<br />
          }</code></p>

          <p>Makna bagian <code>for</code>:<br />
          1.&nbsp;&nbsp; &nbsp;inisialisasi untuk memberikan nilai kepada variabel yang digunakan untuk mengontrol pengulangan.&nbsp;<br />
          2.&nbsp;&nbsp; &nbsp;kondisi untuk mengontrol pengulangan untuk dilanjutkan atau diakhiri.&nbsp;<br />
          3.&nbsp;&nbsp; &nbsp;Penaikan (increment) atau penurunan (decrement) untuk menaikkan atau menurunkan nilai variabel perulangan.&nbsp;</p>

          <p><strong>Contoh 1: Salin dan tempel kode program berikut ke Eclipse.&nbsp;</strong></p>

          <p><code>public class ContohFor{&nbsp;<br />
          public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;for (double &nbsp;y &lt;= 15; y = 0; &nbsp;y++) { &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (y % 2 == 1) { &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;//kondisi 1&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// baris kode kosong 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} else if (y == 8) { &nbsp; &nbsp;&nbsp; &nbsp;//kondisi 2&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// baris kode kosong 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} else<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(y + &quot; &quot;);<br />
          &nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;Syntax error on token &quot;&lt;=&quot;, = expected<br />
          &nbsp;&nbsp; &nbsp;Type mismatch: cannot convert from double to boolean</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;at ContohFor.main(ContohFor.java:5)</code></p>

          <p><strong>Contoh 2: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>public class ForBersarang {&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;pertama:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for( /* kondisi */) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;kedua:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(/* kondisi */) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;i = &quot; + i + &quot;; j = &quot; +j);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (/* kondisi */) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;// kode yang hilang break atau continue<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} &nbsp;}&nbsp;&nbsp; &nbsp;} &nbsp; }</code></p>

          <p><strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class ForBersarang {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;public static void main(String[] args){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Instance Input Scanner<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner input = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukan Input: &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int tinggi = input.nextInt(); //Mendapatkan Input Dari User<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int t=tinggi; t&gt;=1; t--){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Menghitung Jumlah Tinggi Piramida<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int s=tinggi; s&gt;=t; s--){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Menghitung Jumlah Spasi per Baris<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;*&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); //Membuat Baris Baru<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>Masukan Input: 7</code><br />
          <strong><code>*<br />
          **<br />
          ***<br />
          ****<br />
          *****<br />
          ******<br />
          *******</code></strong></p>

          <p><strong>Latihan 1</strong><br />
          1.1.&nbsp;&nbsp; &nbsp; Evaluasi penyebab kesalahan dan perbaiki kode pada Contoh 1!<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Susun baris kode Contoh 1 untuk dapat menghasilkan luaran<br />
          <span style="font-family:monospace">1<br />
          3<br />
          5<br />
          7<br />
          9</span></p>

          <p>1.2.&nbsp;&nbsp; &nbsp;Cermati contoh kode 2 pada kode &nbsp;//baris kode kosong.<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode yang tepat untuk menghasilkan luaran berikut:<br />
          Luaran Contoh 2:<br />
          <code>i = 1; j = 1<br />
          i = 1; j = 2<br />
          i = 1; j = 3<br />
          i = 2; j = 1<br />
          i = 2; j = 2<br />
          i = 2; j = 3</code></p>

          <p>1.3.&nbsp;&nbsp; &nbsp;Cermati kode contoh 3.&nbsp; Susun kembali kode Contoh 3 untuk menghasilkan luaran berikut:<br />
          Luaran berbentuk piramida<br />
          <code>Masukan Input: 7<br />
          &nbsp; &nbsp; &nbsp; &nbsp;*<br />
          &nbsp; &nbsp; &nbsp; ***<br />
          &nbsp; &nbsp; &nbsp;*****<br />
          &nbsp; &nbsp; *******<br />
          &nbsp; &nbsp;*********<br />
          &nbsp; ***********<br />
          &nbsp;*************</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp; Rekomendasikan kode untuk menghasilkan luaran tersebut!</p>

          <p>1.4. &nbsp;Analisa diagram flowchart dari Latihan 1.2 dan 1.3!</p>

          <h2><br />
          <strong>UNIT 2 WHILE</strong></h2>

          <p>Pernyataan <code>while</code> berguna untuk melakukan proses yang berulang. Pernyataan akan dijalankan terus menerus selama kondisi bernilai true (benar). Oleh karena itu, kita harus membuat kondisi suatu saat ungkapan bernilai salah agar perulangan berakhir.</p>

          <p>Bentuk umum <code>While</code> seperti:</p>

          <p><code>while (kondisi) {&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; pernyataan;<br />
          }</code></p>

          <p><strong>Contoh 4:</strong> Salin dan tempel kode program berikut ke Eclipse.</p>

          <p><code>public class ContohWhile{&nbsp;<br />
          public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;int i=1;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while(i&lt;=6){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(i);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;i++;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; if(i==4){ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; &nbsp; &nbsp; &nbsp; &nbsp;//ubah1&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}}}</code></p>

          <p><strong>Luaran:</strong><br />
          <code>1<br />
          2<br />
          3</code></p>

          <p><strong>Contoh 5: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class ForBersarang {&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner dataKata = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Kata yang ingin diulang : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;String kata = dataKata.nextLine();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner dataJumlah = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Jumlah ingin diulang : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int jumlah = dataJumlah.nextInt();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int i = 0; //Inisialisasi batas dasar<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;while(i &lt; jumlah){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(kata);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;i++;//Faktor pengulang Increment<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          }&nbsp;</code></p>

          <p><strong>Luaran Contoh 5:</strong><br />
          <code>Masukkan Kata yang ingin diulang : Fakultas Teknik<br />
          Masukkan Jumlah ingin diulang : 5<br />
          Fakultas Teknik<br />
          Fakultas Teknik<br />
          Fakultas Teknik<br />
          Fakultas Teknik<br />
          Fakultas Teknik</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan 2</strong></p>

          <p>2.1. &nbsp;Cermati contoh kode 4. Apabila ingin menghasilkan luaran:<br />
          &nbsp; &nbsp; &nbsp; &nbsp; 0<br />
          &nbsp; &nbsp; &nbsp; &nbsp; 5<br />
          &nbsp; &nbsp; &nbsp; &nbsp; 10<br />
          &nbsp; &nbsp; &nbsp; &nbsp; 15<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Susun kembali kondisi pada kode Contoh 4 untuk menghasilkan luaran tersebut!</p>

          <p>2.2. Cermati Contoh 1.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode dari <code>for </code>menjadi <code>do &ndash; while</code>. &nbsp;Periksa luaran, bila ketika di eksekusi!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Kemudian, ubah jumlah yang ingin diulang = 0, &nbsp;periksa hasil luarannya!<br />
          &nbsp; &nbsp; &nbsp; Simpulkan perulangan for dan do &ndash; while!&nbsp;</p>

          <p>2.5. Bila diketahui kendaraan bermotor roda dua yang memiliki kapasitas dibawah 250 CC bisa menggunakan Pertalite.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Sedangkan kendaraan mulai dari 250 CC ke atas menggunakan Pertamax. Susun kode untuk menampilkan&nbsp; &nbsp; &nbsp; &nbsp;perhitungan setiap liter (Pertalite atau Pertamax) yang dibeli pengguna sesuai jenis kapasitas CC kendaraan dan jumlah liter yang dimasukkan Pengguna!<br />
          (Catatan: Gunakan While dan IF)</p>

          <p>2.6.&nbsp;&nbsp; &nbsp; Rancang diagram flowchart dari Latihan 2.1, Latihan 2.2, dan Latihan 2.3!<br />
          &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-for-dan-while-61632f1c27d2813.pdf','url_materi' => 'https://www.youtube.com/watch?v=Ij9qLLblxEU','url_kedua_materi' => 'https://www.youtube.com/watch?v=ORA4JyJMFss','critical_status' => '2','created_at' => '2022-09-24 22:03:03','updated_at' => '2022-09-24 22:03:03'),
            array('id' => '104','topik_pembahasan_id' => '62','nama_materi' => 'FOR dan WHILE','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">Chanel Youtube Rumah Ilmu Raflesia<br />
          https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

          <p><a href="https://www.youtube.com/watch?v=Ij9qLLblxEU">Video Materi 1 tentang FOR &ndash; https://www.youtube.com/watch?v=Ij9qLLblxEU&nbsp;</a></p>

          <p><a href="https://www.youtube.com/watch?v=ORA4JyJMFss">Video Materi 2 tentang WHILE &ndash; https://www.youtube.com/watch?v=ORA4JyJMFss</a>&nbsp;</p>

          <p>&nbsp;</p>

          <h2><strong>UNIT 1 FOR</strong></h2>

          <p>Pernyataan for dapat mengendalikan proses berulang dengan jumlah perulangan yang sudah ditentukan.&nbsp;</p>

          <p>Bentuk umum For:</p>

          <p><code>for (inisialisasi; kondisi; iterasi) {<br />
          &nbsp; &nbsp;pernyataan;<br />
          }</code></p>

          <p>Makna bagian <code>for</code>:<br />
          1.&nbsp;&nbsp; &nbsp;inisialisasi untuk memberikan nilai kepada variabel yang digunakan untuk mengontrol pengulangan.&nbsp;<br />
          2.&nbsp;&nbsp; &nbsp;kondisi untuk mengontrol pengulangan untuk dilanjutkan atau diakhiri.&nbsp;<br />
          3.&nbsp;&nbsp; &nbsp;Penaikan (increment) atau penurunan (decrement) untuk menaikkan atau menurunkan nilai variabel perulangan.&nbsp;</p>

          <p><strong>Contoh 1: Salin dan tempel kode program berikut ke Eclipse.&nbsp;</strong></p>

          <p><code>public class ContohFor{&nbsp;<br />
          public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;for (double &nbsp;y &lt;= 15; y = 0; &nbsp;y++) { &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (y % 2 == 1) { &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;//kondisi 1&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// baris kode kosong 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} else if (y == 8) { &nbsp; &nbsp;&nbsp; &nbsp;//kondisi 2&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// baris kode kosong 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} else<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(y + &quot; &quot;);<br />
          &nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          <code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;Syntax error on token &quot;&lt;=&quot;, = expected<br />
          &nbsp;&nbsp; &nbsp;Type mismatch: cannot convert from double to boolean</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;at ContohFor.main(ContohFor.java:5)</code></p>

          <p><strong>Contoh 2: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>public class ForBersarang {&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;pertama:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for( /* kondisi */) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;kedua:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(/* kondisi */) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;i = &quot; + i + &quot;; j = &quot; +j);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (/* kondisi */) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;// kode yang hilang break atau continue<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} &nbsp;}&nbsp;&nbsp; &nbsp;} &nbsp; }</code></p>

          <p><strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class ForBersarang {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;public static void main(String[] args){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Instance Input Scanner<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner input = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukan Input: &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int tinggi = input.nextInt(); //Mendapatkan Input Dari User<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int t=tinggi; t&gt;=1; t--){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Menghitung Jumlah Tinggi Piramida<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int s=tinggi; s&gt;=t; s--){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Menghitung Jumlah Spasi per Baris<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;*&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); //Membuat Baris Baru<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>Masukan Input: 7</code><br />
          <strong><code>*<br />
          **<br />
          ***<br />
          ****<br />
          *****<br />
          ******<br />
          *******</code></strong></p>

          <p><strong>Latihan 1</strong><br />
          1.1.&nbsp;&nbsp; &nbsp; Evaluasi penyebab kesalahan dan perbaiki kode pada Contoh 1!<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Susun baris kode Contoh 1 untuk dapat menghasilkan luaran<br />
          <span style="font-family:monospace">1<br />
          3<br />
          5<br />
          7<br />
          9</span></p>

          <p>1.2.&nbsp;&nbsp; &nbsp;Cermati contoh kode 2 pada kode &nbsp;//baris kode kosong.<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode yang tepat untuk menghasilkan luaran berikut:<br />
          Luaran Contoh 2:<br />
          <code>i = 1; j = 1<br />
          i = 1; j = 2<br />
          i = 1; j = 3<br />
          i = 2; j = 1<br />
          i = 2; j = 2<br />
          i = 2; j = 3</code></p>

          <p>1.3.&nbsp;&nbsp; &nbsp;Cermati kode contoh 3.&nbsp; Susun kembali kode Contoh 3 untuk menghasilkan luaran berikut:<br />
          Luaran berbentuk piramida<br />
          <code>Masukan Input: 7<br />
          &nbsp; &nbsp; &nbsp; &nbsp;*<br />
          &nbsp; &nbsp; &nbsp; ***<br />
          &nbsp; &nbsp; &nbsp;*****<br />
          &nbsp; &nbsp; *******<br />
          &nbsp; &nbsp;*********<br />
          &nbsp; ***********<br />
          &nbsp;*************</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp; Rekomendasikan kode untuk menghasilkan luaran tersebut!</p>

          <p>1.4. &nbsp;Analisa diagram flowchart dari Latihan 1.2 dan 1.3!</p>

          <h2><br />
          <strong>UNIT 2 WHILE</strong></h2>

          <p>Pernyataan <code>while</code> berguna untuk melakukan proses yang berulang. Pernyataan akan dijalankan terus menerus selama kondisi bernilai true (benar). Oleh karena itu, kita harus membuat kondisi suatu saat ungkapan bernilai salah agar perulangan berakhir.</p>

          <p>Bentuk umum <code>While</code> seperti:</p>

          <p><code>while (kondisi) {&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; pernyataan;<br />
          }</code></p>

          <p><strong>Contoh 4:</strong> Salin dan tempel kode program berikut ke Eclipse.</p>

          <p><code>public class ContohWhile{&nbsp;<br />
          public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;int i=1;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while(i&lt;=6){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(i);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;i++;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; if(i==4){ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; &nbsp; &nbsp; &nbsp; &nbsp;//ubah1&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}}}</code></p>

          <p><strong>Luaran:</strong><br />
          <code>1<br />
          2<br />
          3</code></p>

          <p><strong>Contoh 5: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class ForBersarang {&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner dataKata = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Kata yang ingin diulang : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;String kata = dataKata.nextLine();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner dataJumlah = new Scanner(System.in);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Jumlah ingin diulang : &quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int jumlah = dataJumlah.nextInt();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int i = 0; //Inisialisasi batas dasar<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;while(i &lt; jumlah){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(kata);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;i++;//Faktor pengulang Increment<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          }&nbsp;</code></p>

          <p><strong>Luaran Contoh 5:</strong><br />
          <code>Masukkan Kata yang ingin diulang : Fakultas Teknik<br />
          Masukkan Jumlah ingin diulang : 5<br />
          Fakultas Teknik<br />
          Fakultas Teknik<br />
          Fakultas Teknik<br />
          Fakultas Teknik<br />
          Fakultas Teknik</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan 2</strong></p>

          <p>2.1. &nbsp;Cermati contoh kode 4. Apabila ingin menghasilkan luaran:<br />
          &nbsp; &nbsp; &nbsp; &nbsp; 0<br />
          &nbsp; &nbsp; &nbsp; &nbsp; 5<br />
          &nbsp; &nbsp; &nbsp; &nbsp; 10<br />
          &nbsp; &nbsp; &nbsp; &nbsp; 15<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Susun kembali kondisi pada kode Contoh 4 untuk menghasilkan luaran tersebut!</p>

          <p>2.2. Cermati Contoh 1.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode dari <code>for </code>menjadi <code>do &ndash; while</code>. &nbsp;Periksa luaran, bila ketika di eksekusi!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Kemudian, ubah jumlah yang ingin diulang = 0, &nbsp;periksa hasil luarannya!<br />
          &nbsp; &nbsp; &nbsp; Simpulkan perulangan for dan do &ndash; while!&nbsp;</p>

          <p>2.3. Bila diketahui kendaraan bermotor roda dua yang memiliki kapasitas dibawah 250 CC bisa menggunakan Pertalite.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Sedangkan untuk kendaraan beroda dua mulai dari 250 CC ke atas menggunakan Pertamax.<br />
          &nbsp; &nbsp; &nbsp; &nbsp;Susun kode untuk menampilkan perhitungan setiap liter (Pertalite atau Pertamax) yang dibeli pengguna sesuai kategori kapasitas CC kendaraan dan jumlah liter yang dimasukkan Pengguna!<br />
          &nbsp; &nbsp; &nbsp; &nbsp;(Catatan: Gunakan IF dan While)</p>

          <p>2.4.&nbsp;&nbsp; &nbsp; Rancang diagram flowchart dari Latihan 2.1, Latihan 2.2, dan Latihan 2.3!<br />
          &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-for-dan-while-62632f1c515e57e.pdf','url_materi' => 'https://www.youtube.com/watch?v=Ij9qLLblxEU','url_kedua_materi' => 'https://www.youtube.com/watch?v=ORA4JyJMFss','critical_status' => '2','created_at' => '2022-09-24 22:03:45','updated_at' => '2022-09-28 15:29:59'),

   array('id' => '105','topik_pembahasan_id' => '64','nama_materi' => 'Pengenalan Java dan Tipe Data','isi_materi' => '<p>Java adalah salah satu bahasa pemrograman yang bersifat <em>opensource</em> yang merupakan produk dari <em>Sun Microsystem</em> dan sekarang dipegang oleh Oracle. Java adalah salah satu bahasa pemrogaman <em>multiplatform</em> (dapat berjalan di berbagai sistem operasi) karena mempunyai JRE (Java Runtime Environment). Untuk bisa bekerja dengan Java, maka kita perlu melakukan instalasi Java Development Kit (JDK) dan Eclipse sebagai editor kode.</p>

<p>File instalasi JDK dan Eclipse dapat diunduh pada <a href="https://bit.ly/3bswtxK">https://bit.ly/3bswtxK</a> atau dapat menggunakan kompiler daring pada alamat <a href="https://www.jdoodle.com/online-java-compiler/">https://www.jdoodle.com/online-java-compiler/</a>.</p>

<p>Video penjelasan pembelajaran dapat diakses pada Chanel <strong>Youtube Rumah Ilmu Raflesia</strong><br />
<a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

<p><a href="http://youtu.be/OjY8ByJE_bA" target="_blank">Video Bagian 1 &ndash; Pengenalan dan Struktur Program Java</a> &nbsp;&nbsp;&nbsp;<a href="https://youtu.be/OjY8ByJE_bA">https://youtu.be/OjY8ByJE_bA</a></p>

<p><a href="https://youtu.be/at27jZTFWe8">Video Bagian 2 &ndash; Tipe Data dan Konversi Java</a> &nbsp;&nbsp;&nbsp;<a href="https://youtu.be/at27jZTFWe8">https://youtu.be/at27jZTFWe8</a></p>

<p><strong>Unit 1: Deklarasi dasar Java</strong></p>

<p>Java adalah bahasa berorientasi objek (OOP) setiap objek pada Java disebut &quot;class&quot;. Di Java, ketika mengkompilasi sebuah program, setiap kelas diubah menjadi file .class disebut kode byte. JVM <em>(Java virtual machine</em>) digunakan untuk menjalankan kode byte. Mari coba potongan program Halo Mahasiswa UNIB, yang hanya mencetak &quot;Halo Mahasiswa UNIB &quot; ke layar.</p>

<p><strong>Contoh 1:&nbsp; </strong>Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.<br />
<code>public class KelasKu {<br />
&nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp; &nbsp; &nbsp;System.out.println(&quot;Halo Mahasiswa UNIB &quot;);<br />
}&nbsp; }</code></p>

<p>Luaran: <code>Halo Mahasiswa UNIB</code></p>

<p>Penjelasan:<br />
Baris pertama mendefinisikan kelas yang bernama iniKelas</p>

<p><code>public class KelasKu {</code></p>

<p>Pada Java, setiap baris kode yang akan dijalankan harus berada di dalam <code><strong>class </strong></code>yang diawali dan diakhiri kurung kurawal { }. Baris ini mendeklarasikan sebuah kelas bernama KelasKu, yang bersifat <strong>public</strong>, artinya setiap kelas lain dapat mengaksesnya. Perhatikan bahwa ketika mendeklarasikan kelas public, kita harus mendeklarasikannya di dalam file dengan nama yang sama (KelasKu.java), jika tidak, kita akan mendapatkan kesalahan saat kompilasi.<br />
Catatan: Penamaan pada Java bersifat case sensitive, artinya KelasKu dan kelasku memiliki makna kelas yang berbeda. Nama dokumen *.java dan *.class harus sama.</p>

<p>Baris berikutnya adalah:</p>

<p><code>public static void main(String[] args) {</code><br />
Berdasarkan video pembelajaran yang telah Anda simak. Baris ini adalah metode utama untuk menjalankan program.</p>

<ul>
	<li><code>public </code>lagi berarti siapa pun dapat mengaksesnya.</li>
	<li><code>static </code>berarti Anda dapat menjalankan metode ini tanpa membuat instance dari iniKelas.</li>
	<li><code>void </code>berarti metode ini tidak mengembalikan nilai apa pun.</li>
	<li><code>Main () </code>adalah nama metode yang harus ada dan dibutuhkan disetiap program Java.</li>
	<li><code>String[] args</code> adalah argumen yang akan kita dapatkan saat menjalankan program dengan parameter dalam array string.</li>
</ul>

<p>Baris berikutnya:<br />
<code>System.out.println(&quot;Halo Mahasiswa UNIB &quot;);</code></p>

<ul>
	<li>System adalah kelas yang telah disediakan Java dan memiliki beberapa metode dan variabel yang berguna.</li>
	<li>out adalah objek yang mewakili output dari program Anda.</li>
	<li>println adalah metode untuk menampilkan luaran. Pernyataan baris kode Java diakhiri dengan tanda titik koma ( ; ).</li>
</ul>

<p><strong>Cara Memanggil Method dalam Java</strong></p>

<p>Method membantu dalam penggunaan ulang kode. Method terdiri dari rangkaian pernyataan, dan method ini dapat dipanggil melalui pernyataan yang lain. Saat dipanggil, semua pernyataan yang merupakan bagian dari method akan dieksekusi. Misalnya, perhatikan method ini: &quot;public static void method Contoh() {}&quot;. Saat ini tidak ada kode di dalamnya, tetapi ada tiga kata kunci sebelum nama method. Ada public, static, dan void.</p>

<p>Kata <em>public</em> sebelum nama <em>method</em> berarti bahwa method itu sendiri bisa dipanggil dari tempat mana pun yang menyertakan <em>class</em> lain, meskipun dari paket (berkas) yang berbeda asalkan Anda mengimpor <em>class</em> tersebut. Ada kata lain yang bisa menggantikan <em>public</em>. Kata tersebut adalah <em>protected</em> dan <em>private</em>.</p>

<p><em>Method</em> <em>protected</em>, maka hanya <em>class</em> dan <em>subclasses</em> (class yang menggunakan ini sebagai basis untuk menyusun kode) ini yang bisa memanggil method tersebut.</p>

<p><em>Method</em> <em>private</em> hanya bisa dipanggil di dalam <em>class</em> tersebut. Kata kunci terakhir bukan benar-benar sebuah kata. Kata tersebut hanya digunakan apabila Anda tidak memiliki pengganti <em>public</em>, <em>protected</em>, atau <em>private</em>. Kata ini disebut default, atau <em>package</em>-<em>private</em>. Ini artinya hanya class dalam paket yang sama yang bisa memanggil method tersebut.</p>

<p>Latihan 1:</p>

<ol>
	<li>
	<ol>
		<li>Ubah teks yang ditampilkan program Contoh 1 menjadi nama lengkap Anda.</li>
		<li>Tambahkan baris System.out.println(&ldquo;&rdquo;}; untuk diisi dengan data alamat, dan jenis kelamin.</li>
		<li>Tambahkan komentar keterangan maksud setiap baris kode dengan dua macam perintah (//satu baris dan /* multi baris */)</li>
	</ol>
	</li>
</ol>

<p><strong>Unit 2: Variabel dan tipe data</strong></p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Java memiliki 8 tipe data primitif yang harus didefinisikan dahulu, sebelum dapat digunakan. Deklarasi variabel pada Java harus menuliskan tipe dan nilai yang ditugaskan. tipe adalah salah satu tipe data di Java (baca slide atau video materi).<br />
Sintaks: tipe namaVariabel = nilai;</p>

<p><strong>Contoh 2: </strong>Apabila diketahui bentuk data berikut</p>

<ol>
	<li>&frac12;</li>
	<li>6.0%9</li>
	<li>1.5f+3</li>
	<li>9F + 3D</li>
	<li>1.0* 1/1</li>
	<li>9 + (double) 4</li>
	<li>(int) 5.0 + 5.0</li>
	<li>(int) (5 + 5.0)</li>
	<li>(double) 5 + &ldquo;6&rdquo;</li>
</ol>

<p>Selanjutnya, bentuk tipe data dari data tersebut adalah</p>

<ol>
	<li>1/2 akan memiliki tipe data INTEGER baik 1 dan 2, keduanya bertipe integer, maka luarannya adalah 0</li>
	<li>6.0%9 akan memiliki tipe data DOUBLE luarannya adalah 6.0</li>
	<li>1.5f+3 akan memiliki tipe data FLOAT penambahan float dan integer akan menghasilkan float. luarannya adalah 4.5</li>
	<li>9F+3D akan memiliki tipe data DOUBLE maka double &gt;float, luarannya adalah 12.0</li>
	<li>1.0*1/1 akan memiliki tipe data DOUBLE luarannya adalah 1.0</li>
	<li>9+(double)4 akan memiliki tipe data DOUBLE dengan double&gt;integer. luarannya adalah 13.0</li>
	<li>(int)5.0 +5.0 akan memiliki tipe data DOUBLE luarannya adalah 10.0</li>
	<li>(int)(5+5.0) akan memiliki tipe data INTEGER nilai 5+5.0 akan dikonversi menjadi integer setelah perhitungan, luarannya adalah 10</li>
	<li>(double)5+&quot;6&quot; akan memiliki tipe data STRING luarannya adalah &quot;5.06&quot;</li>
</ol>

<p><strong>Latihan 2:</strong></p>

<p>2.1. Uraikan karakteristik tipe data setiap butir Contoh 2! Susun analisa Anda!<br />
2.2. Kaitkan penggunaan tipe data dengan hasil luarannya!</p>

<p>Contoh 3: Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

<p><code>public class tipeData {<br />
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
}&nbsp; &nbsp;}</code></p>

<p>Luaran:</p>

<p><code>UNIB<br />
2022<br />
2023<br />
P<br />
5.99</code></p>

<p><strong>Latihan 3</strong><br />
3.1.&nbsp;Identifikasi data pribadi Anda (Contohnya nama, umur, jenis kelamin (L / P), rata-rata NEM, dan lainnya) yang mencakup 8 tipe data primitif dan String.<br />
3.2.&nbsp;Analisa pemilihan tipe data Java yang sesuai dengan data tersebut.<br />
3.3.&nbsp;Analisa besarnya memori yang digunakan pada komentar keterangan setiap baris kode.</p>

<p><strong>Unit 3 Konversi Tipe Data</strong></p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sebuah variabel dapat diubah menjadi variabel lainnya dengan dua kasus yaitu:</p>

<ol>
	<li><em>Widening Type Casting</em> atau Implisit yaitu variabel dari kapasitas yang kecil diubah menjadi variabel dengan kapasitas yang lebih besar</li>
	<li><em>Narrowing Type Casting</em> atau Eksplisit yaitu variabel dari kapasitas yang besar diubah menjadi variabel dengan kapasitas yang lebih kecil menggunakan operator cast. Apabila tidak menyebutkan operator maka kompiler akan menampilkan pesan kesalahan.</li>
</ol>

<p>Contoh 4: Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

<p><code>public class KonversiTipeData {<br />
&nbsp; public static void main(String args[]) {<br />
&nbsp; &nbsp;&nbsp;double floatpt;<br />
&nbsp; &nbsp;&nbsp;int integer = 35;<br />
&nbsp; &nbsp;&nbsp;floatpt = integer;<br />
&nbsp; &nbsp;&nbsp;System.out.println(&quot;Angka pertama = &quot; + integer);<br />
&nbsp; &nbsp;&nbsp;System.out.println(&quot;Setelah konversi = &quot; + floatpt);<br />
&nbsp; &nbsp;&nbsp;floatpt = 3.5;<br />
&nbsp; &nbsp;&nbsp;integer = (int) floatpt;<br />
&nbsp; &nbsp;&nbsp;System.out.println(&quot;\\nAngka kedua = &quot; + floatpt);<br />
&nbsp; &nbsp;&nbsp;System.out.println(&quot;Setelah konversi = &quot; + integer);<br />
}&nbsp;&nbsp; }</code></p>

<pre>
Luaran:</pre>

<p><code>Angka pertama = 35<br />
Setelah konversi = 35.0<br />
<br />
Angka kedua = 3.5<br />
Setelah konversi = 3</code></p>

<p><strong>Latihan 4:</strong></p>

<p>4.1. Baris kode ke-3 sampai ke-7 merupakan contoh konversi tipe data dengan cara implisit. Tipe ini terjadi karena mengkonversi dari tipe data lebih kecil ke tipe data lebih besar. Berikan analisa mengapa tipe data int dan double dianggap sebagai tipe data yang lebih besar!<br />
4.2. Baris kode ke-8 sampai ke-11 merupakan bentuk konversi tipe data dengan cara apa? Berikan analisa mengapa ini bisa terjadi?</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-pengenalan-java-dan-tipe-data-6466bf1ec66611a.pdf','url_materi' => 'https://www.youtube.com/watch?v=OjY8ByJE_bA','url_kedua_materi' => 'https://youtu.be/watch?v=at27jZTFWe8','critical_status' => '0','created_at' => '2024-08-16 16:41:26','updated_at' => '2024-08-16 16:41:26'),
  array('id' => '106','topik_pembahasan_id' => '64','nama_materi' => 'Pengenalan Java dan Tipe Data','isi_materi' => '<p>Java adalah salah satu bahasa pemrograman yang bersifat <em>open source</em> yang merupakan produk dari <em>Sun Microsystem</em> dan sekarang dipegang oleh Oracle. Java adalah salah satu bahasa pemrogaman <em>multiplatform</em> (dapat berjalan di berbagai sistem operasi) karena mempunyai JRE (Java Runtime Environment). Untuk bisa bekerja dengan Java, maka kita perlu melakukan instalasi Java Development Kit (JDK) dan Eclipse sebagai editor kode.</p>

<p>File instalasi JDK dan Eclipse dapat diunduh pada <a href="https://bit.ly/3bswtxK">https://bit.ly/3bswtxK</a> atau dapat menggunakan kompiler daring pada alamat <a href="https://www.jdoodle.com/online-java-compiler/">https://www.jdoodle.com/online-java-compiler/</a>.</p>

<p>Video penjelasan pembelajaran dapat diakses pada Chanel <strong>Youtube Rumah Ilmu Raflesia</strong><br />
<a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

<p><a href="http://youtu.be/OjY8ByJE_bA" target="_blank">Video Bagian 1 &ndash; Pengenalan dan Struktur Program Java</a> &nbsp;&nbsp;&nbsp;<a href="https://youtu.be/OjY8ByJE_bA">https://youtu.be/OjY8ByJE_bA</a></p>

<p><a href="https://youtu.be/at27jZTFWe8">Video Bagian 2 &ndash; Tipe Data dan Konversi Java</a> &nbsp;&nbsp;&nbsp;<a href="https://youtu.be/at27jZTFWe8">https://youtu.be/at27jZTFWe8</a></p>

<p><br />
<strong>Unit 1: Deklarasi dasar Java</strong></p>

<p><strong>Contoh 1</strong>:&nbsp; Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

<p><code>public class KelasKu {<br />
&nbsp; private static void main(String[] args) {<br />
&nbsp; &nbsp;&nbsp;System.out.println(&quot;Halo Mahasiswa UNIB)<br />
}&nbsp; &nbsp;}</code></p>

<p>Luaran:<br />
<code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problem:<br />
&nbsp; &nbsp;String literal is not properly closed by a double-quote<br />
&nbsp; &nbsp;Syntax error, insert &quot;;&quot; to complete BlockStatements</code></p>

<p><strong>Latihan 1:</strong></p>

<p>1.1&nbsp; Evaluasi penyebab kesalahan terjadi dan perbaiki agar program dapat berjalan!<br />
1.2.&nbsp;Ubah teks yang ditampilkan program menjadi nama lengkap Anda.<br />
1.3. Tambahkan baris System.out.println(&ldquo;&rdquo;}; untuk diisi dengan data alamat, dan jenis kelamin.</p>

<p>&nbsp;</p>

<p><strong>Unit 2: Variabel dan tipe data</strong></p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Java memiliki 8 tipe data primitif dan non-primitif (baca slide atau video materi).</p>

<p><strong>Contoh 2: </strong>Apabila diketahui data berikut</p>

<ol>
	<li>5</li>
	<li>&lsquo;L&rsquo;</li>
	<li>&ldquo;mobil&rdquo;</li>
	<li>5.0</li>
	<li>5.0f</li>
	<li>-5</li>
</ol>

<p><strong>Latihan 2:</strong><br />
2.1.&nbsp;Rekomendasikan tipe data yang tepat dari data Contoh 2.<br />
2.2.&nbsp;&nbsp;Simpulkan karakteristik penggunaan setiap tipe data!</p>

<p>&nbsp;</p>

<p><strong>Contoh 3</strong>: Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle</p>

<p><code>public class TipeData {</code></p>

<p><code>public static void main(String args[]) {<br />
int a = 55555555555;<br />
byte b = 4444444444;<br />
float c = 12.345678910f;<br />
double d = 12.345678910d;<br />
char e = &#39;abc&#39;;<br />
<br />
System.out.println(a);<br />
System.out.println(b);<br />
System.out.println(c);<br />
System.out.println(d);<br />
System.out.println(e);<br />
}&nbsp;&nbsp;&nbsp; }</code></p>

<p>Luaran:</p>

<p><code>/TipeData.java:3: error: integer number too large<br />
&nbsp; int a = 55555555555;</code></p>

<p><code>/TipeData.java:4: error: integer number too large<br />
&nbsp; &nbsp;byte b = 4444444444;</code></p>

<p><code>/TipeData.java:7: error: unclosed character literal<br />
&nbsp; &nbsp;char e = abc&#39;;</code><br />
<code>3 errors</code></p>

<p><strong>Latihan 3:</strong></p>

<p>3.1. Evaluasi penyebab kesalahan pada Contoh 3!<br />
3.2.&nbsp;Rekomendasikan tipe data yang sesuai untuk data tersebut!</p>

<p>&nbsp;</p>

<p><strong>Unit 3 Konversi Tipe Data</strong></p>

<p><strong>Contoh 4:</strong> Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle</p>

<p><code>public class KonversiTipeData {<br />
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
}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }</code></p>

<pre>
<code>Luaran:
int dikonversi ke byte
a dan x 270 14
double dikonversi ke int
b dan a 128.128 128
double dikonversi ke byte
b dan x 128.128 -128</code></pre>

<p>&nbsp;</p>

<p><strong>Latihan 4:</strong><br />
4.1.&nbsp;Rekomendasikan konversi tipe data pada Latihan 2 ke bentuk tipe data lain yang kompatibel.<br />
4.2.&nbsp;Simpulkan alasan jenis konversi tipe data tersebut! &nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-pengenalan-java-dan-tipe-data-6466bf24b1686c4.pdf','url_materi' => 'https://www.youtube.com/watch?v=OjY8ByJE_bA','url_kedua_materi' => 'https://youtu.be/watch?v=at27jZTFWe8','critical_status' => '1','created_at' => '2024-08-16 17:06:41','updated_at' => '2024-08-16 17:06:41'),
  array('id' => '107','topik_pembahasan_id' => '64','nama_materi' => 'Pengenalan Java dan Tipe Data','isi_materi' => '<p>Java adalah salah satu bahasa pemrograman yang bersifat <em>opensource</em> yang merupakan produk dari <em>Sun Microsystem</em> dan sekarang dipegang oleh Oracle. Java adalah salah satu bahasa pemrogaman <em>multiplatform</em> (dapat berjalan di berbagai sistem operasi) karena mempunyai JRE (<em>Java Runtime Environment</em>). Untuk bisa bekerja dengan Java, maka kita perlu melakukan instalasi <em>Java Development Kit</em> (JDK) dan Eclipse sebagai editor kode.</p>

<p>File instalasi JDK dan Eclipse dapat diunduh pada <a href="https://bit.ly/3bswtxK">https://bit.ly/3bswtxK</a> atau dapat menggunakan kompiler daring pada alamat <a href="https://www.jdoodle.com/online-java-compiler/">https://www.jdoodle.com/online-java-compiler/</a>.</p>

<p>Video penjelasan pembelajaran dapat diakses pada Chanel <strong>Youtube Rumah Ilmu Raflesia</strong><br />
<a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

<p><a href="http://youtu.be/OjY8ByJE_bA" target="_blank">Video Bagian 1 &ndash; Pengenalan dan Struktur Program Java</a> &nbsp;&nbsp;&nbsp;<a href="https://youtu.be/OjY8ByJE_bA">https://youtu.be/OjY8ByJE_bA</a></p>

<p><a href="https://youtu.be/at27jZTFWe8">Video Bagian 2 &ndash; Tipe Data dan Konversi Java</a> &nbsp;&nbsp;&nbsp;<a href="https://youtu.be/at27jZTFWe8">https://youtu.be/at27jZTFWe8</a></p>

<p><br />
<strong>Unit 1: Deklarasi dasar Java</strong></p>

<p><strong>Contoh 1:&nbsp; </strong>Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

<p><code>public class KelasKu {<br />
&nbsp;&nbsp;&nbsp;&nbsp; private static void main(String[] args) {<br />
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;System.out.println(&quot;Halo Mahasiswa UNIB<br />
} &nbsp;&nbsp;}</code></p>

<p>Luaran:<br />
<code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problem:<br />
&nbsp; &nbsp;String literal is not properly closed by a double-quote<br />
&nbsp; &nbsp;Syntax error, insert &quot;;&quot; to complete BlockStatements</code></p>

<p><strong>Latihan 1</strong><br />
1.1. Evaluasi penyebab kesalahan terjadi dan perbaiki agar program dapat berjalan!<br />
1.2. Susun kode program Java yang menampilkan data pribadi Anda! (min. 5 informasi data diri)</p>

<p>&nbsp;</p>

<p><strong>Unit 2: Variabel dan tipe data</strong></p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Java memiliki 8 tipe data primitif dan non-primitif (baca slide atau video materi).</p>

<p>Contoh 2: Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

<p><code>public class TipeData {<br />
&nbsp; public static void main(String args[]) {<br />
&nbsp;&nbsp;&nbsp; int a = 55555555555;<br />
&nbsp;&nbsp;&nbsp; byte b = 4444444444;<br />
&nbsp;&nbsp;&nbsp; float c = 12.345678910f;<br />
&nbsp;&nbsp;&nbsp; double d = 12.345678910d;<br />
&nbsp;&nbsp;&nbsp; char e = &#39;abc&#39;;<br />
<br />
&nbsp;&nbsp;&nbsp; System.out.println(a);<br />
&nbsp;&nbsp;&nbsp; System.out.println(b);<br />
&nbsp;&nbsp;&nbsp; System.out.println(c);<br />
&nbsp;&nbsp;&nbsp; System.out.println(d);<br />
&nbsp;&nbsp; &nbsp;System.out.println(e);<br />
}&nbsp;&nbsp;&nbsp; }</code></p>

<p>Luaran:<br />
<code>/TipeData.java:3: error: integer number too large<br />
&nbsp;&nbsp; int a = 55555555555;<br />
/TipeData.java:4: error: integer number too large<br />
&nbsp;&nbsp;&nbsp; byte b = 4444444444;<br />
/TipeData.java:7: error: unclosed character literal<br />
&nbsp;&nbsp;&nbsp; char e = abc&#39;;<br />
3 errors</code></p>

<p><strong>Latihan 2:</strong><br />
2.1. Susun kembali sintaks kode untuk memperbaiki pesan kesalahan tersebut! Berikan kesimpulan!</p>

<p><strong>Latihan 3:</strong><br />
3.1. Identifikasi data pribadi Anda (Contohnya nama, umur, jenis kelamin (L / P), rata-rata NEM, dan lainnya) yang mencakup 8 tipe data primitif dan String.<br />
3.2. Susunlah kode program Java berdasarkan tipe data pribadi Anda!</p>

<p>&nbsp;</p>

<p><strong>Unit 3 Konversi Tipe Data</strong></p>

<p><strong>Contoh 3:</strong> Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

<p><code>public class KonversiTipeData {<br />
&nbsp; public static void main(String args[]) {<br />
&nbsp;&nbsp;&nbsp;&nbsp; byte x;<br />
&nbsp;&nbsp;&nbsp;&nbsp; int a = 270;<br />
&nbsp;&nbsp;&nbsp; &nbsp;double b = 128.128;<br />
&nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;int dikonversi ke byte&quot;);<br />
&nbsp;&nbsp;&nbsp;&nbsp; x = (byte) a;<br />
&nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;a dan x &quot; + a + &quot; &quot; + x);<br />
&nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;double dikonversi ke int&quot;);<br />
&nbsp;&nbsp;&nbsp;&nbsp; a = (int) b;<br />
&nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;b dan a &quot; + b + &quot; &quot; + a);<br />
&nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;double dikonversi ke byte&quot;);<br />
&nbsp;&nbsp;&nbsp;&nbsp; x = (byte)b;<br />
&nbsp;&nbsp;&nbsp;&nbsp; System.out.println(&quot;b dan x &quot; + b + &quot; &quot; + x);<br />
}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }</code></p>

<pre>
Luaran:</pre>

<p><code>int dikonversi ke byte<br />
a dan x 270 14<br />
double dikonversi ke int<br />
b dan a 128.128 128<br />
double dikonversi ke byte<br />
b dan x 128.128 -128</code></p>

<p><strong>Latihan 4:</strong></p>

<p>4.1. Konstruksikan kode program konversi tipe data pada Latihan 3 ke bentuk tipe data lain yang kompatibel.<br />
4.2. Simpulkan alasan kode yang disusun, jenis konversi tipe data implisit dan eksplisit!&nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-pengenalan-java-dan-tipe-data-6466bf254972a66.docx','url_materi' => 'https://www.youtube.com/watch?v=OjY8ByJE_bA','url_kedua_materi' => 'https://youtu.be/watch?v=at27jZTFWe8','critical_status' => '2','created_at' => '2024-08-16 17:09:13','updated_at' => '2024-08-16 17:09:13'),
  array('id' => '108','topik_pembahasan_id' => '65','nama_materi' => 'Operator Java','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada Chanel Youtube Rumah Ilmu Raflesia<br />
<a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw" target="_blank">https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a>&nbsp;<br />
<a href="https://www.youtube.com/watch?v=PzCMZObexZM">Video Materi 1 &ndash; Definisi operator, unary, binary, ternary, operasi aritmatika, penugasan, relasional, increment/decrement pada laman</a>&nbsp; &nbsp;<a href="https://www.youtube.com/watch?v=PzCMZObexZM">https://www.youtube.com/watch?v=PzCMZObexZM</a>&nbsp;<br />
<a href="https://www.youtube.com/watch?v=LcFgl0yrKEw">Video Materi 2 &ndash; Operator Logika, Kondisional, Bitwise, dan contoh pembahasan soal pada laman</a> <a href="https://www.youtube.com/watch?v=LcFgl0yrKEw">https://www.youtube.com/watch?v=LcFgl0yrKEw</a>&nbsp;<br />
&nbsp;</p>

<p><strong>Unit 1 Operator</strong><br />
Operator merupakan simbol dalam program untuk melakukan suatu operasi atau memproses data hingga memberikan hasil.<br />
Contoh : a + b&nbsp;&nbsp; &nbsp;<br />
simbol &ldquo; + &ldquo; merupakan operand untuk melakukan penjumlahan dari a dan b. Operator penjumlahan tergolong sebagai operator binary karena melibatkan dua operand,.<br />
Contoh lain : -c<br />
simbol &ldquo; &ndash; &ldquo; (minus) merupakan unary, karena hanya memiliki satu operand (yaitu c).</p>

<p>Ekspresi adalah pernyataan yang melibatkan variabel, data, dan konstanta. Ekspresi sangat penting dalam pemrograman karena perhitungan banyak menggunakan ekspresi. Penyusunan ekspresi memakai lambang-lambang tertentu yang disebut operator.&nbsp;</p>

<p><strong>Unit 2 Jenis Operator</strong><br />
<strong>1.&nbsp;&nbsp; &nbsp;Operator Aritmatika: +, -, *, /</strong><br />
Operator aritmatika digunakan untuk melakukan perhitungan matematika. Jika operator memiliki prioritas yang sama, operator sebelah kiri akan diutamakan untuk dikerjakan terlebih dahulu. Tanda kurung biasa digunakan untuk mengubah urutan pengerjaan.&nbsp;<br />
Misalnya: &nbsp; &nbsp;x = (2 + 3) * 2 ;&nbsp;&nbsp; &nbsp;<br />
Menghasilkan x = 10, sebab 2 + 3 dahulu dan hasilnya dikalikan dengan 2.</p>

<p><br />
<strong>Contoh 1: </strong>Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle<br />
<code>public class OperatorAritmatika{&nbsp;<br />
&nbsp; &nbsp;public static void main(String[] args) &nbsp;{<br />
&nbsp; // deklarasi nilai<br />
&nbsp; int a = 20, b = 3;<br />
&nbsp; //operator aritmatika&nbsp;<br />
&nbsp; System.out.println(&quot;a: &quot; +a);&nbsp;<br />
&nbsp; System.out.println(&quot;b: &quot; +b);&nbsp;<br />
&nbsp; System.out.println(&quot;a + b = &quot; + (a - b));&nbsp;<br />
} &nbsp; }</code><br />
Luaran:<br />
<code>a: 20&nbsp;<br />
b: 3&nbsp;<br />
a - b = 17</code></p>

<p><strong>Latihan 1.</strong><br />
1.1. &nbsp;Tambahkan baris <code>System.out.println(&quot;a + b = &quot;&nbsp; + (a + b));</code> &nbsp;Ubahlah operator ( + ) dengan tanda ( -, *, /, %)<br />
1.2. &nbsp;Analisa perhitungan matematika yang terjadi!</p>

<p>&nbsp;</p>

<p><strong>2.&nbsp;&nbsp; &nbsp;Operator Penugasan&nbsp; ( = )</strong><br />
Operator Penugasan adalah operator yang digunakan untuk memberikan nilai ke dalam variabel tertentu.&nbsp;</p>

<p><strong>Contoh 2</strong>: Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle<br />
<code>public class OperatorPenugasan {<br />
&nbsp; &nbsp; public static void main(String[] args) {<br />
&nbsp; &nbsp; &nbsp; // deklarasi nilai<br />
&nbsp; &nbsp; &nbsp; &nbsp;int a = 20, b = 3;<br />
&nbsp; &nbsp; &nbsp; &nbsp;//operator penugasan&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; b += a;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Penambahan : &quot; + b);</code></p>

<p><code>&nbsp; &nbsp; &nbsp; &nbsp; // pengurangan<br />
&nbsp; &nbsp; &nbsp; &nbsp; b -= a;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Pengurangan : &quot; + b);</code></p>

<p><code>&nbsp; &nbsp; &nbsp; &nbsp; // perkalian<br />
&nbsp; &nbsp; &nbsp; &nbsp; b *= a;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Perkalian : &quot; + b);</code></p>

<p><code>&nbsp; &nbsp; &nbsp; &nbsp; // Pembagian<br />
&nbsp; &nbsp; &nbsp; &nbsp; b /= a;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Pembagian : &quot; + b);</code></p>

<p><code>&nbsp; &nbsp; &nbsp; &nbsp; // Sisa bagi<br />
&nbsp; &nbsp; &nbsp; &nbsp; b %= a;<br />
&nbsp; &nbsp; &nbsp; &nbsp; // sekarang b=0<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Sisa Bagi: &quot; + b);<br />
&nbsp; &nbsp; }<br />
}</code></p>

<p><strong>Luaran:</strong><br />
<code>Penambahan : 23<br />
Pengurangan : 3<br />
Perkalian : 60<br />
Pembagian : 3<br />
Sisa Bagi: 3</code></p>

<p><strong>Latihan 2.</strong><br />
2.1. &nbsp;Bandingkan hasil Contoh 1 dengan Contoh 2!&nbsp;</p>

<p>&nbsp;</p>

<p><strong>3.&nbsp;&nbsp; &nbsp;Operator Relasional: &nbsp; &lt;, &gt;, &lt;=, &gt;=, =, ==, !=&nbsp;</strong></p>

<p>Operator Relasi untuk menguji hubungan antara nilai dan atau variabel dan selalu menghasilkan nilai true atau false.&nbsp;</p>

<p><strong>Contoh 3:</strong> Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle<br />
<code><tt>public class OperatorRealasional {<br />
&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int nilaiA = 12;<br />
&nbsp; &nbsp; &nbsp; &nbsp; int nilaiB = 4;<br />
&nbsp; &nbsp; &nbsp; &nbsp; boolean hasil;</tt></code></p>

<p><code><tt>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot; A = &quot; + nilaiA + &quot;\\n B = &quot; + nilaiB);<br />
&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih besar dari B?<br />
&nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &gt; nilaiB;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil A &gt; B = &quot;+ hasil);</tt></code></p>

<p><code><tt>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih kecil dari B?<br />
&nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &lt; nilaiB;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil A &lt; B = &quot;+ hasil);</tt></code></p>

<p><code><tt>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih besar samadengan B?<br />
&nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &gt;= nilaiB;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil A &gt;= B = &quot;+ hasil);</tt></code></p>

<p><code><tt>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih kecil samadengan B?<br />
&nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &lt;= nilaiB;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil A &lt;= B = &quot;+ hasil);</tt></code></p>

<p><code><tt>&nbsp; &nbsp; &nbsp; &nbsp; // apakah nilai A sama dengan B?<br />
&nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA == nilaiB;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil A == B = &quot;+ hasil);</tt></code></p>

<p><code><tt>&nbsp; &nbsp; &nbsp; &nbsp; // apakah nilai A tidak samadengan B?<br />
&nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA != nilaiB;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Hasil A != B = &quot;+ hasil);<br />
&nbsp;&nbsp; &nbsp;}<br />
}</tt></code></p>

<p><strong>Luaran:</strong>&nbsp;<br />
<code>A = 12<br />
B = 4</code></p>

<p><code>Hasil A &gt; B = true<br />
Hasil A &lt; B = false<br />
Hasil A &gt;= B = true<br />
Hasil A &lt;= B = false<br />
Hasil A == B = false<br />
Hasil A != B = true</code></p>

<p><strong>Latihan 3</strong><br />
3.1.&nbsp;&nbsp;Ubahlah nilai A = 4 dan B = 4. Analisa perubahan yang terjadi!&nbsp;<br />
3.2&nbsp; &nbsp;Bandingkan bagaimana perbedaan nilai A dan B mempengaruhi nilai luaran!<br />
&nbsp;</p>

<p><strong>4.&nbsp;&nbsp; &nbsp;Operator Increment dan Decrement: ++, --</strong><br />
Kedua operator ini digunakan pada operand bertipe bilangan bulat. Operator penaikan digunakan untuk menaikan nilai variabel sebesar satu, sedangkan operator penurunan dipakai untuk menurunkan nilai variabel sebesar satu.&nbsp;</p>

<p><strong>Contoh 4: </strong>Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle<br />
<code>public class operator {<br />
&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int a = 10;&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;# Post Increment #&quot;);&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;==================&quot;);&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel a: &quot; + a);&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel a: &quot; + a++);<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel a: &quot; + a);<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println();<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;int b = 10;&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;# Pre Increment #&quot;);&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;==================&quot;);&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel b: &quot; + b);&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel b: &quot; + ++b);<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel b: &quot; + b);&nbsp;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println();<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;int c = 10;&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;# Post Decrement #&quot;);&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;==================&quot;);&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel c: &quot; + c);&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel c: &quot; + c--);<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel c: &quot; + c);<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println();<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;int d = 10;&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;# Pre Decrement #&quot;);&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;==================&quot;);&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel d: &quot; + d);&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel d: &quot; + --d);<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;Isi variabel d: &quot; + d);&nbsp;<br />
&nbsp;&nbsp; &nbsp;}<br />
}</code><br />
<strong>Luaran:</strong><br />
<code># Post Increment #<br />
==================<br />
Isi variabel a: 10<br />
Isi variabel a: 10<br />
Isi variabel a: 11</code></p>

<p><code># Pre Increment #<br />
==================<br />
Isi variabel b: 10<br />
Isi variabel b: 11<br />
Isi variabel b: 11</code></p>

<p><code># Post Decrement #<br />
==================<br />
Isi variabel c: 10<br />
Isi variabel c: 10<br />
Isi variabel c: 9</code></p>

<p><code># Pre Decrement #<br />
==================<br />
Isi variabel d: 10<br />
Isi variabel d: 9<br />
Isi variabel d: 9</code></p>

<p><strong>Latihan 4.</strong><br />
4.1.&nbsp; Berdasarkan luaran program Contoh 4, bandingkan hasil Post dan Pre untuk Increment dan Decrement!</p>

<p><strong>5.&nbsp;&nbsp; &nbsp;Operator Logika: &nbsp;&amp;&amp;, ||, !&nbsp;</strong><br />
Operator Logika untuk membandingkan dua nilai variabel atau lebih, hasilnya boolean true atau false. Asumsikan variabel a bernilai true, b bernilai false dan c bernilai true. Perbedaan dasar antara operator &amp;&amp; dan &amp; adalah &amp;&amp; mensupports evaluasi per bagian, sementara operator &amp; tidak. Misal pernyataan: exp1 AND exp2 Dengan operator &amp;&amp; akan mengevaluasi pernyataan exp1, dan segera mengembalikan nilai false dan menyatakan bahwa exp1 bernilai false. Jika exp1 bernilai false, operator tidak akan pernah mengevaluasi exp2 karena hasil operasi operator akan menjadi false tanpa memperhatikan nilai dari exp2. Dengan operator &amp; selalu mengevaluasi kedua nilai dari exp1 danexp2 sebelum mengembalikan suatu nilai jawaban. Demikian juga antara operator || dan |.<br />
Tanda &amp;&amp; dan &amp; serta || dan | memiliki arti berbeda. &amp; dan | akan tetap mengevaluasi kondisi apa pun yang terjadi. &amp;&amp; akan menghentikan evaluasi kondisi jika salah satu ekspresi bernilai salah. Jika salah satu kondisi ekspresi salah, dipastikan hasil operasi logika bernilai salah. Sedangkan || akan menghentikan evaluasi kondisi jika salah satu ekspresi bernilai benar. Jika salah satu kondisi ekspresi benar, dipastikan hasil operasi logika bernilai benar.</p>

<p><br />
<strong>Contoh 5</strong>: Salin dan tempel kode berikut:<br />
<code>&nbsp;public class OperatorLogika {<br />
&nbsp; &nbsp; &nbsp;public static void main (String [] args) {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; boolean a = true;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; boolean b = false;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; boolean c;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c = a &amp;&amp; b;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;true &amp;&amp; false = &quot; +c);<br />
}&nbsp; &nbsp; &nbsp; }</code><br />
<br />
<strong>Luaran:</strong><br />
<code>true &amp;&amp; false = false</code><br />
&nbsp;</p>

<p><strong>Latihan 5&nbsp;</strong><br />
5.1.&nbsp; Tambahkan baris kode untuk memeriksa a || b.<br />
5.2.&nbsp; Ubahlah nilai a = false dan b = false. Analisa perubahan dan perbedaan boolean yang terjadi!<br />
5.2. &nbsp;Apabila diketahui pernyataan a || b &amp;&amp; a || !b. Uraikan urutan logika yang akan dikerjakan! Analisa luaran true atau false dari pernyataan tersebut!&nbsp;</p>

<p><strong>6.&nbsp;&nbsp; &nbsp;Operator Kondisional (Ternary): &nbsp;?:</strong><br />
Operator Kondisi merupakan penyederhanaan dari bentuk if..else yang setiap blok dari if dan else hanya terdiri dari satu statement/perintah.<br />
Bentuk umum: &nbsp;(ekspresi) ? (jika benar) : (jika salah);<br />
<strong>Contoh 6:&nbsp;</strong><br />
<code>public class OperatorKondisi{<br />
&nbsp; &nbsp;public static void main( String[] args ){<br />
&nbsp; &nbsp; &nbsp; String status = &quot;&quot;;<br />
&nbsp; &nbsp; &nbsp; int nilai = 80;&nbsp;<br />
&nbsp; &nbsp; &nbsp; status = (nilai &gt; 60)?&quot;Lulus&quot;:&quot;Gagal&quot;;<br />
&nbsp; &nbsp; &nbsp; System.out.println( status );<br />
}&nbsp;&nbsp; &nbsp;}</code><br />
<strong>Luaran: &nbsp;</strong><br />
<code>Lulus</code><br />
<strong>Latihan 6</strong><br />
Berdasarkan Contoh 6, ubahlah nilai = 60. Analisis hasil dan proses yang terjadi!</p>

<p><br />
<strong>7.&nbsp;&nbsp; &nbsp;Operator Bitwise: &amp;, |, ^, ~, &lt;&lt;, &gt;&gt;, &gt;&gt;&gt;</strong><br />
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

<p><strong>Contoh 7:</strong> Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle<br />
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
<code>Hasil dari a &amp; b : 2<br />
Hasil dari a | b : 15<br />
Hasil dari a ^ b : 13<br />
Hasil dari ~a : -11<br />
Hasil dari a &gt;&gt; 1 : 5<br />
Hasil dari b &lt;&lt; 2 : 28</code></p>

<p><strong>Latihan 7</strong><br />
Pilihlah 3 perhitungan Contoh 7, kemudian uraikan perhitungan biner! Simpulkan hasilnya!</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-operator-java-6566c311b187c37.pdf','url_materi' => 'https://www.youtube.com/watch?v=PzCMZObexZM','url_kedua_materi' => 'https://www.youtube.com/watch?v=LcFgl0yrKEw','critical_status' => '0','created_at' => '2024-08-19 16:34:41','updated_at' => '2024-08-19 16:34:41'),
  array('id' => '109','topik_pembahasan_id' => '65','nama_materi' => 'Operator Java','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada Chanel Youtube <strong>Rumah Ilmu Raflesia</strong><br />
<a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw" target="_blank">https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a>&nbsp;<br />
<strong>Video Materi 1</strong> &ndash; Definisi operator, unary, binary, ternary, operasi aritmatika, penugasan, relasional, increment/decrement pada laman&nbsp; &nbsp;<a href="https://www.youtube.com/watch?v=PzCMZObexZM">https://www.youtube.com/watch?v=PzCMZObexZM</a>&nbsp;<br />
<strong>Video Materi 2</strong> &ndash; Operator Logika, Kondisional, Bitwise, dan contoh pembahasan soal pada laman <a href="https://www.youtube.com/watch?v=LcFgl0yrKEw">https://www.youtube.com/watch?v=LcFgl0yrKEw</a>&nbsp;</p>

<h3><strong>Unit 1 Operator</strong></h3>

<p>Operator merupakan simbol dalam program untuk melakukan suatu operasi atau memproses data hingga memberikan hasil.<br />
Contoh :<br />
<code>a + b&nbsp;&nbsp; &nbsp;</code><br />
simbol &ldquo; + &ldquo; merupakan operand untuk melakukan penjumlahan dari a dan b. Operator penjumlahan tergolong sebagai operator binary karena melibatkan dua operand,.</p>

<p>Contoh lain :<br />
-c<br />
simbol &ldquo; &ndash; &ldquo; (minus) merupakan unary, karena hanya memiliki satu operand (yaitu c).</p>

<p><strong>Ekspresi </strong>adalah pernyataan yang melibatkan variabel, data, dan konstanta. Ekspresi sangat penting dalam pemrograman karena perhitungan banyak menggunakan ekspresi. Penyusunan ekspresi memakai lambang-lambang tertentu yang disebut operator.&nbsp;</p>

<h3><strong>Unit 2 Jenis Operator</strong></h3>

<h3><strong>1.&nbsp;&nbsp; &nbsp;Operator Aritmatika: +, -, *, /</strong></h3>

<p>Operator aritmatika digunakan untuk melakukan perhitungan matematika. Jika operator memiliki prioritas yang sama, operator sebelah kiri akan diutamakan untuk dikerjakan terlebih dahulu. Tanda kurung biasa digunakan untuk mengubah urutan pengerjaan.&nbsp;</p>

<p>Misalnya: &nbsp; &nbsp;<br />
<code>x = (2 + 3) * 2 ;&nbsp;&nbsp; &nbsp;</code><br />
Menghasilkan x = 10, sebab 2 + 3 dahulu dan hasilnya dikalikan dengan 2.</p>

<p><strong>Contoh 1: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle<br />
<code>public class OperatorAritmatika{&nbsp;<br />
&nbsp; &nbsp;public static void main(String[] args) &nbsp;{<br />
&nbsp; &nbsp; &nbsp;// deklarasi nilai<br />
&nbsp; &nbsp; &nbsp; int a = 20, b = 3;<br />
<br />
&nbsp; &nbsp; &nbsp; //operator aritmatika&nbsp;<br />
&nbsp; &nbsp; &nbsp; System.out.println(&quot;a: &quot; +a);&nbsp;<br />
&nbsp; &nbsp; &nbsp; System.out.println(&quot;b: &quot; +b);&nbsp;<br />
&nbsp; &nbsp; &nbsp; System.out.println(&quot;a + b = &quot; &nbsp;(a + b));&nbsp; //menampilkan hasil penjumlahan<br />
} &nbsp; }</code></p>

<p><strong>Luaran:</strong><br />
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
&nbsp;&nbsp; &nbsp;Syntax error on token &quot;&quot;a + b = &quot;&quot;, AssignmentOperator expected after this token<br />
&nbsp;&nbsp; &nbsp;The left-hand side of an assignment must be a variable</code></p>

<p><strong>Latihan 1</strong><br />
1.1. Rekomendasikan perbaikan kode agar program Contoh 1 dapat berjalan!<br />
1.2. Tambahkan baris untuk menampilkan perhitungan dengan operator ( -, *, /, %) pada Contoh 1!</p>

<p>&nbsp;</p>

<h3><strong>2.&nbsp;&nbsp; &nbsp;Operator Penugasan: &nbsp;=</strong></h3>

<p>Operator Penugasan adalah operator yang digunakan untuk memberikan nilai ke dalam variabel tertentu.&nbsp;</p>

<p><strong>Contoh 2: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle<br />
<code>public class OperatorPenugasan {<br />
&nbsp; &nbsp; public static void main(String[] args) {<br />
&nbsp; &nbsp; &nbsp; // deklarasi nilai<br />
&nbsp; &nbsp; &nbsp; &nbsp;int a = 20, b = 3;<br />
&nbsp; &nbsp; &nbsp; &nbsp;//operator penugasan&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; b += a;&nbsp; //melakukan perhitungan penjumlahan<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Penambahan : &quot; + b);&nbsp; // menampilkan hasil perhitungan&nbsp;penjumlahan<br />
&nbsp; &nbsp; }<br />
}</code></p>

<p><strong>Luaran:</strong><br />
<code>Penambahan : 23</code></p>

<p><strong>Latihan 2.</strong><br />
2.1. &nbsp;Tambahkan baris Contoh 2 untuk menampilkan perhitungan dengan operator ( -=, *=, &nbsp;/=, %=)!<br />
2.2. &nbsp;Berikan argumentasi tentang perbedaan luaran dan waktu eksekusi Contoh 1 dan Contoh 2!&nbsp;<br />
&nbsp;</p>

<h3><strong>3.&nbsp;&nbsp; &nbsp;Operator Relasional: &nbsp; &lt;, &gt;, &lt;=, &gt;=, =, ==, !=&nbsp;</strong></h3>

<p>Operator Relasi untuk menguji hubungan antara nilai dan atau variabel dan selalu menghasilkan nilai true atau false.&nbsp;</p>

<p><strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle<br />
<code>public class OperatorRelasional {<br />
&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int nilaiA = 12;<br />
&nbsp; &nbsp; &nbsp; &nbsp; int nilaiB = 4;<br />
&nbsp; &nbsp; &nbsp; &nbsp; boolean hasil;</code></p>

<p><code>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot; A = &quot; + nilaiA + &quot;\\n B = &quot; + nilaiB);<br />
&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih besar dari B?<br />
&nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &gt; nilaiB;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &gt; B = &quot;+ hasil);</code></p>

<p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih kecil dari B?<br />
&nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &lt; nilaiB;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &lt; B = &quot;+ hasil);</code></p>

<p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih besar samadengan B?<br />
&nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &gt;= nilaiB;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &gt;= B = &quot;+ hasil);</code></p>

<p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih kecil samadengan B?<br />
&nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &lt;= nilaiB;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &lt;= B = &quot;+ hasil);</code></p>

<p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah nilai A sama dengan B?<br />
&nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA == nilaiB;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A == B = &quot;+ hasil);</code></p>

<p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah nilai A tidak samadengan B?<br />
&nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA != nilaiB;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A != B = &quot;+ hasil);<br />
&nbsp;&nbsp; &nbsp;}<br />
}</code></p>

<p><strong>Luaran:&nbsp;</strong><br />
<code>&nbsp;A = 12<br />
&nbsp;B = 4</code></p>

<p><code>&nbsp;Hasil A &gt; B = true<br />
&nbsp;Hasil A &lt; B = false<br />
&nbsp;Hasil A &gt;= B = true<br />
&nbsp;Hasil A &lt;= B = false<br />
&nbsp;Hasil A == B = false<br />
&nbsp;Hasil A != B = true</code></p>

<p><strong>Latihan 3</strong><br />
3.1. &nbsp;Ubahlah nilai A = 4 dan B = 4 pada Contoh 3. Simpulkan perubahan yang terjadi!&nbsp;</p>

<h3><br />
<strong>4.&nbsp;&nbsp; &nbsp;Operator Increment dan Decrement: ++, --</strong></h3>

<p>Kedua operator ini digunakan pada operand bertipe bilangan bulat. Operator penaikan digunakan untuk menaikan nilai variabel sebesar satu, sedangkan operator penurunan dipakai untuk menurunkan nilai variabel sebesar satu.&nbsp;</p>

<p><strong>Contoh 4: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle<br />
<code>public class operator {<br />
&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// deklarasi nilai<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;int a = 5;&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;a: &quot; +a);&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;b: &quot; + (a++));&nbsp;&nbsp; &nbsp;<br />
}&nbsp;&nbsp; &nbsp;}</code><br />
<strong>Luaran:</strong><br />
<code>a: 5<br />
b: 5</code></p>

<p><strong>Latihan 4.</strong><br />
4.1. Berikan saran operasi apa yang diperlukan (pre/post increment, pre/post decrement) agar&nbsp;Contoh 4 menghasilkan nilai a = 5 dan b = 6?&nbsp;<br />
4.2. Simpulkan hasil eksperimen Anda!</p>

<h3><strong>5.&nbsp;&nbsp; &nbsp;Operator Logika: &nbsp;&amp;&amp;, ||, !&nbsp;</strong></h3>

<p>Operator Logika untuk membandingkan dua nilai variabel atau lebih, hasilnya boolean true atau false. Asumsikan variabel a bernilai true, b bernilai false dan c bernilai true. Perbedaan dasar antara operator &amp;&amp; dan &amp; adalah &amp;&amp; mensupports evaluasi per bagian, sementara operator &amp; tidak.<br />
Misal pernyataan: exp1 AND exp2 Dengan operator &amp;&amp; akan mengevaluasi pernyataan exp1, dan segera mengembalikan nilai false dan menyatakan bahwa exp1 bernilai false. Jika exp1 bernilai false, operator tidak akan pernah mengevaluasi exp2 karena hasil operasi operator akan menjadi false tanpa memperhatikan nilai dari exp2. Dengan operator &amp; selalu mengevaluasi kedua nilai dari exp1 danexp2 sebelum mengembalikan suatu nilai jawaban. Demikian juga antara operator || dan |.<br />
Tanda &amp;&amp; dan &amp; serta || dan | memiliki arti berbeda. &amp; dan | akan tetap mengevaluasi kondisi apa pun yang terjadi. &amp;&amp; akan menghentikan evaluasi kondisi jika salah satu ekspresi bernilai salah. Jika salah satu kondisi ekspresi salah, dipastikan hasil operasi logika bernilai salah. Sedangkan || akan menghentikan evaluasi kondisi jika salah satu ekspresi bernilai benar. Jika salah satu kondisi ekspresi benar, dipastikan hasil operasi logika bernilai benar.</p>

<p><strong>Contoh 5:</strong> Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

<p><code>public class OperatorLogika {<br />
&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// deklarasi nilai<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;boolean a = true;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;boolean b = false;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Hasil logika (a &amp;&amp; b) : &quot; + (a &amp;&amp; b));&nbsp; //menampilkan hasil logika AND<br />
}&nbsp;&nbsp; &nbsp;}</code></p>

<p><strong>Luaran:</strong><br />
<code>Hasil logika (a &amp;&amp; b) : false</code></p>

<p><strong>Latihan 5&nbsp;</strong><br />
5.1. &nbsp;Rekomendasikan berapa nilai a dan b apabila ingin menghasilkan luaran <em>true </em>dengan operator &amp;&amp; dan &nbsp;operator | | ?&nbsp;&nbsp;<br />
5.2. &nbsp;Berikan kesimpulan dari latihan 5.1.&nbsp;<br />
&nbsp;</p>

<h3><strong>6.&nbsp;&nbsp; &nbsp;Operator Kondisional (Ternary): &nbsp;?:</strong></h3>

<p>Operator Kondisi merupakan penyederhanaan dari bentuk if.else yang setiap blok dari if dan else hanya terdiri dari satu statement/perintah.</p>

<p><strong>Bentuk umum: &nbsp;(ekspresi) ? (jika benar) : (jika salah);</strong></p>

<p><strong>Contoh 6:&nbsp;</strong><br />
<code>public class OperatorKondisi{<br />
&nbsp; &nbsp;public static void main( String[] args ){<br />
&nbsp; &nbsp; &nbsp; String status = &quot;&quot;;<br />
&nbsp; &nbsp; &nbsp; int nilai = 80;&nbsp;<br />
&nbsp; &nbsp; &nbsp; status = (nilai &gt; 60)?&quot;Lulus&quot;:&quot;Gagal&quot;;<br />
&nbsp; &nbsp; &nbsp; System.out.println( status );<br />
}&nbsp;&nbsp; &nbsp;}</code></p>

<p><strong>Luaran: &nbsp;</strong><br />
<code>Lulus</code></p>

<p><strong>Latihan 6</strong><br />
Rekomendasikan apa bentuk tanda operator agar nilai = 60 memenuhi untuk Lulus !<br />
&nbsp;</p>

<h3><strong>7.&nbsp;&nbsp; &nbsp;Operator Bitwise: &amp;, |, ^, ~, &lt;&lt;, &gt;&gt;, &gt;&gt;&gt;</strong></h3>

<p>Operator bitwise merupakan operator untuk operasi bit (biner) dan berlaku untuk tipe data int, long, short, char, dan byte, karena akan menghitung dari bit-ke-bit.</p>

<p><strong>Contoh 7: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle<br />
<code>public class OperatorBitwise {<br />
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

<p><strong>Luaran:</strong>&nbsp;<br />
<code>Hasil dari a &amp; b : 2<br />
Hasil dari a | b : 15<br />
Hasil dari a ^ b : 13<br />
Hasil dari ~a : -11<br />
Hasil dari a &gt;&gt; 1 : 5<br />
Hasil dari b &lt;&lt; 2 : 28</code></p>

<p><strong>Latihan 7</strong><br />
Evaluasi penyebab hasil ~a = -11 ? Buktikan jawaban Anda dalam perhitungan biner!</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-operator-6566c312bb48cd4.pdf','url_materi' => 'https://www.youtube.com/watch?v=PzCMZObexZM','url_kedua_materi' => 'https://www.youtube.com/watch?v=LcFgl0yrKEw','critical_status' => '1','created_at' => '2024-08-19 16:39:07','updated_at' => '2024-08-19 16:39:22'),
  array('id' => '110','topik_pembahasan_id' => '65','nama_materi' => 'Operator Java','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada Chanel Youtube <strong>Rumah Ilmu Raflesia</strong><br />
<a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

<p><strong>Video Materi 1 </strong>&ndash; Definisi operator, unary, binary, ternary, operasi aritmatika, penugasan, relasional, increment/decrement pada laman &nbsp; <a href="https://www.youtube.com/watch?v=PzCMZObexZM">https://www.youtube.com/watch?v=PzCMZObexZM</a>&nbsp;</p>

<p><strong>Video Materi 2</strong> &ndash; Operator Logika, Kondisional, Bitwise, dan contoh pembahasan soal pada laman <a href="https://www.youtube.com/watch?v=LcFgl0yrKEw">https://www.youtube.com/watch?v=LcFgl0yrKEw</a>&nbsp;</p>

<h3><br />
<strong>Unit 1 Operator</strong></h3>

<p>Operator merupakan simbol dalam program untuk melakukan suatu operasi atau memproses data hingga memberikan hasil. Ekspresi adalah pernyataan yang melibatkan variabel, data, dan konstanta Penyusunan ekspresi memakai lambang-lambang tertentu yang disebut operator.&nbsp;</p>

<h3><strong>Unit 2 Jenis Operator</strong></h3>

<h3><strong>1.&nbsp;&nbsp; &nbsp;Operator Aritmatika: +, -, *, /</strong></h3>

<p><strong>Contoh 1: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

<p><code>public class OperatorAritmatika{&nbsp;<br />
&nbsp; &nbsp;public static void main(String[] args) &nbsp;{<br />
&nbsp; &nbsp; &nbsp;// deklarasi nilai<br />
&nbsp; &nbsp; &nbsp; &nbsp; int a = 20, b = 3;<br />
&nbsp; &nbsp; &nbsp;//operator aritmatika&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;a: &quot; +a);&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;b: &quot; +b);&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;a + b = &quot; &nbsp;+ (a + b));&nbsp;<br />
} &nbsp; }</code><br />
<strong>Luaran:</strong><br />
<code>a: 20<br />
b: 3<br />
a + b = 23</code></p>

<p><strong>Latihan 1</strong><br />
Susun kode Java untuk perhitungan dengan ekspresi <code>(2*3 + 6 / 2 - &nbsp;4).</code> Simpulkan urutan prioritas operator yang dijalankan ekspresi tersebut!<br />
&nbsp;</p>

<h3><strong>2.&nbsp;&nbsp; &nbsp;Operator Penugasan: &nbsp;=</strong></h3>

<p>Operator Penugasan adalah operator yang digunakan untuk memberikan nilai ke dalam variabel tertentu.&nbsp;</p>

<p><strong>Contoh 2: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

<p><code>public class OperatorPenugasan {<br />
&nbsp; &nbsp; public static void main(String[] args) {<br />
&nbsp; &nbsp; &nbsp; // deklarasi nilai<br />
&nbsp; &nbsp; &nbsp; &nbsp;int a = 20, b = 3;<br />
&nbsp; &nbsp; &nbsp; &nbsp;//operator penugasan&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; b += a;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Penambahan : &quot; + b);<br />
&nbsp; &nbsp; }<br />
}</code></p>

<p><strong>Luaran:</strong><br />
<code>Penambahan : 23</code></p>

<p><strong>Latihan 2.</strong><br />
Susun kode untuk menampilkan perhitungan dengan operator ( -=, *=, &nbsp;/=, %=)! Simpulkan hasilnya!<br />
&nbsp;</p>

<h3><strong>3.&nbsp;&nbsp; &nbsp;Operator Relasional: &nbsp; &lt;, &gt;, &lt;=, &gt;=, =, ==, !=&nbsp;</strong></h3>

<p>Operator Relasi untuk menguji hubungan antara nilai dan atau variabel dan selalu menghasilkan nilai true atau false.&nbsp;</p>

<p><strong>Contoh 3:</strong> Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

<p><code>public class OperatorRelasional {<br />
&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int nilaiA = 12;<br />
&nbsp; &nbsp; &nbsp; &nbsp; int nilaiB = 4;<br />
&nbsp; &nbsp; &nbsp; &nbsp; boolean hasil;</code></p>

<p><code>&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot; A = &quot; + nilaiA + &quot;\\n B = &quot; + nilaiB);<br />
&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih besar dari B?<br />
&nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &gt; nilaiB;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &gt; B = &quot;+ hasil);</code></p>

<p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih kecil dari B?<br />
&nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &lt; nilaiB;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &lt; B = &quot;+ hasil);</code></p>

<p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih besar samadengan B?<br />
&nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &gt;= nilaiB;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &gt;= B = &quot;+ hasil);</code></p>

<p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah A lebih kecil samadengan B?<br />
&nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA &lt;= nilaiB;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A &lt;= B = &quot;+ hasil);</code></p>

<p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah nilai A sama dengan B?<br />
&nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA == nilaiB;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A == B = &quot;+ hasil);</code></p>

<p><code>&nbsp; &nbsp; &nbsp; &nbsp; // apakah nilai A tidak samadengan B?<br />
&nbsp; &nbsp; &nbsp; &nbsp; hasil = nilaiA != nilaiB;<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;\\n Hasil A != B = &quot;+ hasil);<br />
&nbsp;&nbsp; &nbsp;}<br />
}</code></p>

<p><strong>Luaran:&nbsp;</strong><br />
<code>A = 12<br />
B = 4</code></p>

<p><code>Hasil A &gt; B = true<br />
Hasil A &lt; B = false<br />
Hasil A &gt;= B = true<br />
Hasil A &lt;= B = false<br />
Hasil A == B = false<br />
Hasil A != B = true</code></p>

<p><strong>Latihan 3</strong><br />
Susunlah perintah kode dengan operator relasional <code>(&lt;, &gt;, &lt;=, &gt;=, =, ==, !=) </code>untuk nilai a dan b yang menghasilkan luaran TRUE!<br />
&nbsp;</p>

<h3><strong>4.&nbsp;&nbsp; &nbsp;Operator Increment dan Decrement: ++, --</strong></h3>

<p>Kedua operator ini digunakan pada operand bertipe bilangan bulat. Operator penaikan digunakan untuk menaikan nilai variabel sebesar satu, sedangkan operator penurunan dipakai untuk menurunkan nilai variabel sebesar satu.&nbsp;</p>

<p><strong>Contoh 4: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

<p><code>public class operator {<br />
&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// deklarasi nilai<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;int a = 5;&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;a: &quot; +a);&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;b: &quot; + (a++));&nbsp;&nbsp; &nbsp;<br />
}&nbsp;&nbsp; &nbsp;}</code></p>

<p><strong>Luaran:</strong><br />
<code>a: 5<br />
b: 5</code></p>

<p><strong>Latihan 4.</strong><br />
4.1. &nbsp;Susunlah kode program untuk menghasilkan luaran nilai a = 5 dan b = 6 dengan pre/post increment dan pre/post decrement.&nbsp;<br />
4.2.&nbsp; Simpulkan hasil perbandingan Anda (pre/post increment, pre/post decrement)!<br />
&nbsp;</p>

<h3><strong>5.&nbsp;&nbsp; &nbsp;Operator Boolean Logika: &nbsp;&amp;&amp;, ||, !&nbsp;</strong></h3>

<p>Operator Logika untuk membandingkan dua nilai variabel atau lebih, hasilnya boolean true atau false. Asumsikan variabel a bernilai true, b bernilai false dan c bernilai true. Perbedaan dasar antara operator &amp;&amp; dan &amp; adalah &amp;&amp; mensupports evaluasi per bagian, sementara operator &amp; tidak. Misal pernyataan: exp1 AND exp2 Dengan operator &amp;&amp; akan mengevaluasi pernyataan exp1, dan segera mengembalikan nilai false dan menyatakan bahwa exp1 bernilai false. Jika exp1 bernilai false, operator tidak akan pernah mengevaluasi exp2 karena hasil operasi operator akan menjadi false tanpa memperhatikan nilai dari exp2. Dengan operator &amp; selalu mengevaluasi kedua nilai dari exp1 danexp2 sebelum mengembalikan suatu nilai jawaban. Demikian juga antara operator || dan |.<br />
Tanda &amp;&amp; dan &amp; serta || dan | memiliki arti berbeda. &amp; dan | akan tetap mengevaluasi kondisi apa pun yang terjadi. &amp;&amp; akan menghentikan evaluasi kondisi jika salah satu ekspresi bernilai salah. Jika salah satu kondisi ekspresi salah, dipastikan hasil operasi logika bernilai salah. Sedangkan || akan menghentikan evaluasi kondisi jika salah satu ekspresi bernilai benar. Jika salah satu kondisi ekspresi benar, dipastikan hasil operasi logika bernilai benar.</p>

<p>Contoh 5: Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

<p><code>public class operator {<br />
&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// deklarasi nilai<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;boolean a = true;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;boolean b = false;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Hasil logika (a &amp;&amp; b) : &quot; + (a &amp;&amp; b));<br />
}&nbsp;&nbsp; &nbsp;}</code></p>

<p><strong>Luaran:</strong><br />
<code>Hasil logika (a &amp;&amp; b) : false</code></p>

<p><strong>Latihan 5&nbsp;</strong><br />
Susun kode program dengan mengubah nilai <code>a</code> dan <code>b</code> untuk menghasilkan luaran <code>true </code>dengan operator <code>&amp;&amp;</code> dan &nbsp;operator <code>| |</code>. &nbsp;Beri kesimpulan!</p>

<h3>&emsp;<br />
<strong>6.&nbsp;&nbsp; &nbsp;Operator Kondisional (Ternary): &nbsp;?:</strong></h3>

<p>Operator Kondisi merupakan penyederhanaan dari bentuk if.else yang setiap blok dari if dan else hanya terdiri dari satu statement/perintah.</p>

<p><strong>Bentuk umum: &nbsp;(ekspresi) ? (jika benar) : (jika salah);</strong></p>

<p>Contoh 6:&nbsp;<br />
<code>public class OperatorKondisi{<br />
&nbsp; &nbsp;public static void main( String[] args ){<br />
&nbsp; &nbsp; &nbsp; String status = &quot;&quot;;<br />
&nbsp; &nbsp; &nbsp; int nilai = 80;&nbsp;<br />
&nbsp; &nbsp; &nbsp; status = (nilai &gt; 60)?&quot;Lulus&quot;:&quot;Gagal&quot;;<br />
&nbsp; &nbsp; &nbsp; System.out.println( status );<br />
}&nbsp;&nbsp; &nbsp;}</code></p>

<p><strong>Luaran: &nbsp;</strong><br />
<code>Lulus</code></p>

<p><strong>Latihan 6</strong><br />
Susun kode program! Dengan informasi berikut:<br />
Diketahui&nbsp;nama variabel Jam = 12<br />
Apabila jam &lt; 12 maka tampil &quot;Selamat Pagi&quot;, apabila jam &gt; 12 maka tampil &quot;Selamat Malam&quot;.<br />
&nbsp;</p>

<h3><strong>7.&nbsp;&nbsp; &nbsp;Operator Bitwise: &amp;, |, ^, ~, &lt;&lt;, &gt;&gt;, &gt;&gt;&gt;</strong></h3>

<p>Operator bitwise merupakan operator untuk operasi bit (biner) dan berlaku untuk tipe data int, long, short, char, dan byte, karena akan menghitung dari bit-ke-bit.</p>

<p><strong>Contoh 7: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle</p>

<p><code>public class operatorBitwise {<br />
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
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Hasil dari a ^ b : &quot; + hasil ); &nbsp;&nbsp;<br />
} &nbsp; }</code></p>

<p><br />
<strong>Luaran:&nbsp;</strong><br />
<code>Hasil dari a &amp; b : 6<br />
Hasil dari a | b : 7<br />
Hasil dari a ^ b : 1</code></p>

<p><strong>Latihan 7</strong><br />
Susun kode tambahan dari Contoh 7 untuk melakukan perhitungan dengan operator (<code>&gt;&gt;, &lt;&lt;</code>). Hubungkan hasil luaran dengan perhitungan manual bilangan biner!</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-operator-java-6566c312fd44324.pdf','url_materi' => 'https://www.youtube.com/watch?v=PzCMZObexZM','url_kedua_materi' => 'https://www.youtube.com/watch?v=LcFgl0yrKEw','critical_status' => '2','created_at' => '2024-08-19 16:40:13','updated_at' => '2024-08-19 16:40:13'),
  array('id' => '111','topik_pembahasan_id' => '66','nama_materi' => 'Kelas Java','isi_materi' => '<h3>Video penjelasan pembelajaran dapat diakses pada <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw"><strong>Chanel Youtube Rumah Ilmu Raflesia</strong><br />
https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></h3>

<h3><a href="https://www.youtube.com/watch?v=60IdOc8m8Es "><strong>Video Materi 1 tentang Kelas, Objek, Method &ndash; https://www.youtube.com/watch?v=60IdOc8m8Es&nbsp;</strong></a></h3>

<h3><strong><a href="https://www.youtube.com/watch?v=6qULMlcv-eg">Video Materi 2 tentang &ndash; https://www.youtube.com/watch?v=6qULMlcv-eg</a>&nbsp;</strong></h3>

<p>&nbsp;</p>

<h2><strong>Unit 1 Kelas (Class)</strong></h2>

<p>Class adalah entitas yang menggambarkan keadaan dan perilaku dari objek. Sehingga, kelas memiliki kumpulan objek dengan sifat yang umum. Class akan menjalankan data baru sesuai model dari objek yang dibuat berdasarkan karakter objek tersebut.&nbsp;</p>

<p>Contoh deklarasi:<br />
<code>classKelasKu{<br />
&nbsp; &nbsp;//deklarasi field,konstruktor dan method<br />
}</code></p>

<p><strong>Contoh 1:</strong><br />
<code>public class Manusia { &nbsp;// deklarasi kelas<br />
&nbsp;&nbsp; &nbsp;//deklarasi atribut Manusia dalam variabel<br />
&nbsp;&nbsp; &nbsp;String nama, rambut;<br />
&nbsp;&nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;//deklarasi constructor<br />
&nbsp;&nbsp; &nbsp;public Manusia1 (String nama) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot; Nama saya : &quot;+ nama +&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&quot;\\n Warna Rambut : &quot; + rambut);&nbsp;&nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;//deklarasi method utama<br />
&nbsp;&nbsp; &nbsp;public static void main( String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Manusia1 satu = new Manusia1(&quot;Putri&quot;, &quot;hitam&quot;);<br />
&nbsp;&nbsp; &nbsp;}<br />
&nbsp; }</code></p>

<p><br />
<strong>Luaran 1:</strong><br />
<code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problem:&nbsp;<br />
&nbsp;&nbsp; &nbsp;The constructor Manusia1(String, String) is undefined<br />
&nbsp;&nbsp; &nbsp;at Manusia1.main(Manusia1.java:13)</code></p>

<p><strong>Latihan 1:</strong><br />
1.1.&nbsp;&nbsp; &nbsp; Perbaiki pesan kesalahan Contoh 1!<br />
1.2.&nbsp;&nbsp; &nbsp; Analisa ciri-ciri lain Kelas Manusia yang dapat menjadi<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;a.&nbsp;atribut variabel, dan<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;b. perilaku/ behavior!</p>

<p>&nbsp;</p>

<h2><strong>Unit 2 Objek</strong></h2>

<p>Objek adalah bentuk keturunan dari kelas, sehingga otomatis memiliki atribut dan method dari kelas.&nbsp;</p>

<p>Deklarasi objek: <code>NamaKelas &nbsp;NamaObjek = new NamaKelas(parameter);</code></p>

<p><strong>Contoh 2</strong>: Salin dan tempel kode program berikut ke Eclipse atau JDoodle.</p>

<p><code>public class Ortu {<br />
&nbsp;&nbsp; &nbsp;//deklarasi constructor &nbsp;(variabel constructor)<br />
&nbsp;&nbsp; &nbsp;public ortu &nbsp; { &nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; //nama dan rambut adalah variabel constructor<br />
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot; Nama saya : &quot;+ nama +&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&quot;\\n Warna Rambut : &quot; + rambut);&nbsp;&nbsp; &nbsp;<br />
}<br />
&nbsp;&nbsp; &nbsp;public static void main (String[] args) {<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Ortu satu = new Ortu(&quot;Putri&quot;, &quot;hitam&quot;);<br />
&nbsp;&nbsp; &nbsp; }<br />
}</code></p>

<p><strong>Luaran 2:</strong><br />
<code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problem:&nbsp;<br />
&nbsp;&nbsp; &nbsp;The constructor Ortu(String, String) is undefined</code></p>

<p><code>&nbsp;&nbsp; &nbsp;at Ortu.main(Ortu.java:9)</code></p>

<p><strong>Latihan 2:</strong><br />
2.1. &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!<br />
2.2. Apabila Ortu memiliki data variabel umur = 25 dan jenis kelamin = P (untuk Perempuan), rekomendasikan constructor dengan parameter yang baru untuk ditambahkan dalam program!</p>

<h2><br />
<strong>Unit 3 Method</strong></h2>

<p>Method adalah perilaku yang dilakukan objek.&nbsp;</p>

<p>Deklarasi method: <code>void/tipeData NamaMethod (tipedata namaVariabel) { &hellip; }</code></p>

<p><strong>Contoh 3:</strong> Salin dan tempel kode program berikut ke Eclipse atau JDoodle.<br />
<code>public class Manusia {<br />
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
}</code></p>

<p><br />
<strong>Luaran 3:</strong><br />
<code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
&nbsp;&nbsp; &nbsp;The method sukaNonton(String) is undefined for the type Manusia1<br />
&nbsp;&nbsp; &nbsp;The method sukaNonton(int, int) is undefined for the type Manusia1<br />
&nbsp;&nbsp; &nbsp;at Manusia1.main(Manusia1.java:23)</code></p>

<p><strong>Latihan 3:</strong><br />
3.1. &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!<br />
3.2. &nbsp;Ubahlah method dan constructor Contoh 3 sesuai dengan perilaku/ behavior anda<br />
3.3. &nbsp;Berdasarkan Contoh 3 dan Latihan 3.2. simpulkan perbedaan:<br />
&nbsp; &nbsp; &nbsp; &nbsp; a) constructor overloading dan overriding<br />
&nbsp; &nbsp; &nbsp; &nbsp; b) method overloading, dan method overriding<br />
&nbsp; &nbsp; &nbsp; &nbsp; c) method yang mengembalikan nilai dan method tidak mengembalikan nilai</p>

<h2><br />
<strong>Unit 4 Extends</strong></h2>

<p>Extends adalah kata kerja dari keturunan yang merujuk ke kelas induk, sehingga otomatis memiliki atribut dan method dari kelas induk.&nbsp;</p>

<p>Deklarasi objek: <code>class NamaAnak extends NamaInduk { &hellip; }</code></p>

<p><strong>Contoh 4:</strong> Salin dan tempel kode program berikut ke JDoodle. Kemudian catat waktu eksekusinya.</p>

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
&nbsp;&nbsp; &nbsp;<br />
&nbsp; &nbsp;&nbsp;System.out.println(&quot;\\n Sifat Anak :&quot;);&nbsp;&nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;Anak objekA = new Anak();&nbsp;&nbsp; &nbsp;//memanggil objek anak<br />
&nbsp;&nbsp; &nbsp;objekA.sukaMenonton(9, &quot;Film Drakor&quot;);&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//memanggil sifat spesifik anak yang diturunkan induk<br />
&nbsp;&nbsp; &nbsp;objekA.sukaMembaca(&quot;Komik One Piece&quot;); //memanggil method ke induk yang otomatis diturunkan tanpa deklarasi ulang di anak<br />
}&nbsp;&nbsp; &nbsp;}</code></p>

<p><code>class Anak extends Ortu {<br />
&nbsp; void sukaMenonton(int a, String b) {<br />
&nbsp; &nbsp; &nbsp; System.out.println(&quot;Nonton Jam &quot; + a + &quot; Malam &quot; + b);<br />
&nbsp; }&nbsp;&nbsp; &nbsp;<br />
&nbsp; void sukaMenonton(String a) {&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// method induk spesifik<br />
&nbsp; &nbsp; &nbsp; System.out.println(&quot;Nonton &quot; + a);<br />
&nbsp; }<br />
&nbsp; void sukaMembaca(String a) { &nbsp;&nbsp; &nbsp;// method induk umum bisa diubah anak<br />
&nbsp; &nbsp; &nbsp;System.out.println(&quot;Suka Baca &quot; + a);<br />
&nbsp; }<br />
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
}&nbsp; &nbsp;}</code></p>

<p><strong>Luaran 4:</strong><br />
<code>Sifat Orang Tua :<br />
Nonton Berita<br />
Suka Baca Koran</code></p>

<p><code>&nbsp;Sifat Anak :<br />
Nonton Jam 9 Malam Film Drakor<br />
Suka Baca Komik One Piece</code></p>

<p><strong>Latihan 4:</strong><br />
4.1. Evaluasi method yang dimiliki <code>class Anak extends Ortu </code>dengan method di <code>class Ortu</code>!<br />
&nbsp; &nbsp; &nbsp; &nbsp;Apakah penulisan method ini sudah efisien?<br />
4.2. Setelah dirunning di JDoodle, catat waktu eksekusinya.&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;Rekomendasikan perbaikan penulisan kode method untuk dapat mengefisienkan waktu eksekusi!</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-kelas-6666c313c2a84b7.pdf','url_materi' => 'https://www.youtube.com/watch?v=60IdOc8m8Es','url_kedua_materi' => 'https://www.youtube.com/watch?v=6qULMlcv-eg','critical_status' => '1','created_at' => '2024-08-19 16:43:30','updated_at' => '2024-08-19 16:45:01'),
  array('id' => '112','topik_pembahasan_id' => '66','nama_materi' => 'Kelas Java','isi_materi' => '<h3>Video penjelasan pembelajaran dapat diakses pada <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw"><strong>Chanel Youtube Rumah Ilmu Raflesia</strong><br />
https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></h3>

<h3><a href="https://www.youtube.com/watch?v=60IdOc8m8Es "><strong>Video Materi 1 tentang Kelas, Objek, Method &ndash; https://www.youtube.com/watch?v=60IdOc8m8Es&nbsp;</strong></a></h3>

<h3><strong><a href="https://www.youtube.com/watch?v=6qULMlcv-eg">Video Materi 2 tentang &ndash; https://www.youtube.com/watch?v=6qULMlcv-eg</a>&nbsp;</strong></h3>

<p>&nbsp;</p>

<h2><strong>Unit 1 Kelas (Class)</strong></h2>

<p>Class adalah entitas yang menggambarkan keadaan dan perilaku dari objek. Sehingga, kelas memiliki kumpulan objek dengan sifat yang umum. Class akan menjalankan data baru sesuai model dari objek yang dibuat berdasarkan karakter objek tersebut.&nbsp;</p>

<p>Contoh deklarasi:<br />
<code>classKelasKu{<br />
&nbsp; &nbsp;//deklarasi field,konstruktor dan method<br />
}</code></p>

<p><strong>Contoh 1:</strong><br />
<code>public class Manusia { &nbsp;// deklarasi kelas<br />
&nbsp;&nbsp; &nbsp;//deklarasi atribut Manusia dalam variabel<br />
&nbsp;&nbsp; &nbsp;String nama, rambut;<br />
&nbsp;&nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;//deklarasi constructor<br />
&nbsp;&nbsp; &nbsp;public Manusia1 (String nama) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot; Nama saya : &quot;+ nama +&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&quot;\\n Warna Rambut : &quot; + rambut);&nbsp;&nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;//deklarasi method utama<br />
&nbsp;&nbsp; &nbsp;public static void main( String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Manusia1 satu = new Manusia1(&quot;Putri&quot;, &quot;hitam&quot;);<br />
}&nbsp; }</code></p>

<p><br />
<strong>Luaran 1:</strong><br />
<code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problem:&nbsp;<br />
&nbsp;&nbsp; &nbsp;The constructor Manusia1(String, String) is undefined<br />
&nbsp;&nbsp; &nbsp;at Manusia1.main(Manusia1.java:13)</code></p>

<p><strong>Latihan 1:</strong><br />
1.1.&nbsp;&nbsp; &nbsp; Perbaiki pesan kesalahan Contoh 1!<br />
1.2.&nbsp;&nbsp; &nbsp; Cermati contoh 1. susun kode menggunakan constructor dengan parameter data pribadi anda!</p>

<p>&nbsp;</p>

<h2><strong>Unit 2 Objek</strong></h2>

<p>Objek adalah bentuk keturunan dari kelas, sehingga otomatis memiliki atribut dan method dari kelas.&nbsp;</p>

<p>Deklarasi objek: <code>NamaKelas &nbsp;NamaObjek = new NamaKelas(parameter);</code></p>

<p><strong>Contoh 2: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle.</p>

<p><code>public class Ortu {<br />
&nbsp;&nbsp; &nbsp;//deklarasi constructor &nbsp;(variabel constructor)<br />
&nbsp;&nbsp; &nbsp;public ortu &nbsp; { &nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; //nama dan rambut adalah variabel constructor<br />
&nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot; Nama saya : &quot;+ nama +&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&quot;\\n Warna Rambut : &quot; + rambut);&nbsp;&nbsp; &nbsp;<br />
}<br />
&nbsp;&nbsp; &nbsp;public static void main (String[] args) {<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Ortu satu = new Ortu(&quot;Putri&quot;, &quot;hitam&quot;);<br />
}&nbsp; &nbsp;}</code></p>

<p><strong>Luaran 2:</strong><br />
<code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problem:&nbsp;<br />
&nbsp;&nbsp; &nbsp;The constructor Ortu(String, String) is undefined</code></p>

<p><code>&nbsp;&nbsp; &nbsp;at Ortu.main(Ortu.java:9)</code></p>

<p><strong>Latihan 2:</strong><br />
2.1. &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!<br />
2.2. &nbsp;Apabila nanti Anda akan memiliki keturunan, analisa sifat (atribut) dan constructor sebagai Ortu apa yang akan diturunkan (gunakan data karakter pribadi anda) ?<br />
2.3.&nbsp; Rancanglah kode program untuk sifat (atribut) dan constructor overloaded dari Latihan 2.2!</p>

<h2><br />
<strong>Unit 3 Method</strong></h2>

<p>Method adalah perilaku yang dilakukan objek.&nbsp;</p>

<p>Deklarasi method: <code>void/tipeData NamaMethod (tipedata namaVariabel) { &hellip; }</code></p>

<p><strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle.</p>

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
}&nbsp; }</code></p>

<p><strong>Luaran 3:</strong><br />
<code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
&nbsp;&nbsp; &nbsp;The method sukaNonton(String) is undefined for the type Manusia1<br />
&nbsp;&nbsp; &nbsp;The method sukaNonton(int, int) is undefined for the type Manusia1<br />
&nbsp;&nbsp; &nbsp;at Manusia1.main(Manusia1.java:23)</code></p>

<p><strong>Latihan 3:</strong><br />
3.1. &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!<br />
3.2. &nbsp;Berdasarkan Latihan 2.2. Anda sudah punya kode program untuk atribut dan constructor sebagai Ortu.<br />
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Kembangkanlah kode program untuk method dari Ortu dengan data perilaku pribadi Anda yang menggunakan:<br />
&nbsp; &nbsp; &nbsp; &nbsp; a)&nbsp;method overloading,<br />
&nbsp; &nbsp; &nbsp; &nbsp; b) method dengan return value<br />
&nbsp; &nbsp; &nbsp; &nbsp; c) method tanpa return value&nbsp;</p>

<h2><br />
<strong>Unit 4 Extends</strong></h2>

<p>Extends adalah kata kerja dari keturunan yang merujuk ke kelas induk, sehingga otomatis memiliki atribut dan method dari kelas induk.&nbsp;</p>

<p>Deklarasi objek: <code>class NamaAnak extends NamaInduk { &hellip; }</code></p>

<p><strong>Contoh 4: </strong>Salin dan tempel kode program berikut ke JDoodle. Kemudian catat waktu eksekusinya.</p>

<p><code>public class Ortu { &nbsp; &nbsp;&nbsp; &nbsp;// membuat kelas induk<br />
&nbsp; &nbsp; void sukaMenonton(String a) {&nbsp;&nbsp; &nbsp;// method induk spesifik<br />
&nbsp; &nbsp; &nbsp; System.out.println(&quot;Nonton &quot; + a);<br />
&nbsp; &nbsp; }<br />
&nbsp; &nbsp; void sukaMembaca(String a) { &nbsp;&nbsp; &nbsp;// method induk umum bisa diubah anak<br />
&nbsp; &nbsp; &nbsp; System.out.println(&quot;Suka Baca &quot; + a);<br />
&nbsp; &nbsp; }</code></p>

<p><code>public static void main(String [] args) {<br />
&nbsp; &nbsp; System.out.println(&quot;Sifat Orang Tua :&quot;);&nbsp;<br />
&nbsp;&nbsp; &nbsp;Ortu objekO = new Ortu(); &nbsp;&nbsp; &nbsp;// memanggil objek induk<br />
&nbsp;&nbsp; &nbsp;objekO.sukaMenonton(&quot;Berita&quot;);&nbsp;&nbsp; &nbsp;// memanggil sifat spesifik induk<br />
&nbsp;&nbsp; &nbsp;objekO.sukaMembaca(&quot;Koran&quot;); &nbsp;&nbsp; &nbsp;// memanggil method dengan variabel dapat diubah<br />
&nbsp;&nbsp; &nbsp;<br />
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
}&nbsp; &nbsp; }</code></p>

<p><strong>Luaran 4:</strong><br />
<code>Sifat Orang Tua :<br />
Nonton Berita<br />
Suka Baca Koran</code></p>

<p><code>Sifat Anak :<br />
Nonton Jam 9 Malam Film Drakor<br />
Suka Baca Komik One Piece</code></p>

<p><strong>Latihan 4:</strong><br />
4.1. Evaluasi method yang dimiliki Contoh 4&nbsp; pada <code>class Anak extends Ortu </code>dengan method di <code>class Ortu</code>.<br />
&nbsp; &nbsp; &nbsp; &nbsp;Simpulkan hasil evaluasi Anda agar method ini menjadi efisien!<br />
4.2. Setelah dirunning di JDoodle, catat waktu eksekusinya.&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode program yang dapat mengefisienkan waktu eksekusi!</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-kelas-java-6666c313f0b14dd.pdf','url_materi' => 'https://www.youtube.com/watch?v=60IdOc8m8Es','url_kedua_materi' => 'https://www.youtube.com/watch?v=6qULMlcv-eg','critical_status' => '2','created_at' => '2024-08-19 16:44:16','updated_at' => '2024-08-19 16:44:16'),
  array('id' => '113','topik_pembahasan_id' => '66','nama_materi' => 'Kelas Java','isi_materi' => '<h3>Video penjelasan pembelajaran dapat diakses pada <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw"><strong>Chanel Youtube Rumah Ilmu Raflesia</strong><br />
https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></h3>

<h3><a href="https://www.youtube.com/watch?v=60IdOc8m8Es "><strong>Video Materi 1 tentang Kelas, Objek, Method &ndash; https://www.youtube.com/watch?v=60IdOc8m8Es&nbsp;</strong></a></h3>

<h3><strong><a href="https://www.youtube.com/watch?v=6qULMlcv-eg">Video Materi 2 tentang &ndash; https://www.youtube.com/watch?v=6qULMlcv-eg</a>&nbsp;</strong></h3>

<p>&nbsp;</p>

<h2><strong>Unit 1 Kelas (Class)</strong></h2>

<p>Class adalah entitas yang menggambarkan keadaan dan perilaku dari objek. Sehingga, kelas memiliki kumpulan objek dengan sifat yang umum.<br />
Contohnya class kendaraan yang memiliki objek seperti mobil, motor, pesawat, dan lainnya. Class akan menjalankan data baru sesuai model dari objek yang dibuat berdasarkan karakter objek tersebut.&nbsp;</p>

<p>Contoh deklarasi:<br />
<code>class KelasKu{<br />
&nbsp; &nbsp; &nbsp;//deklarasi field,konstruktor dan method<br />
}</code></p>

<p><br />
Secara umum, deklarasi kelas dapat termasuk komponen-komponen<br />
1.&nbsp;&nbsp; &nbsp;Modifier seperti public, private dan protected.<br />
2.&nbsp;&nbsp; &nbsp;Nama kelas,dengan diawali huruf besar ikuti aturan identifier.<br />
3.&nbsp;&nbsp; &nbsp;Nama dari induk kelasnya (superclass), jika ada, diawali dengan kata kunci extends. Sebuah kelas hanya boleh mempunyai satu induk<br />
4.&nbsp;&nbsp; &nbsp;Setiap kelas memiliki behavior sebagai perilaku (kata kerja) program dalam bentuk method dan memiliki keadaan atau atribut dalam bentuk variabel.<br />
5.&nbsp;&nbsp; &nbsp;Isi dari kelas yang diawali dan diakhiri dengan tanda kurung kurawal buka dan tutup { }</p>

<p><strong>Contoh 1:</strong><br />
<code>public class Manusia { &nbsp;// deklarasi kelas<br />
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

<h2><br />
<strong>Unit 2 Objek</strong></h2>

<p>Objek adalah bentuk keturunan dari kelas, sehingga otomatis memiliki atribut dan method dari kelas.&nbsp;<br />
Deklarasi objek: <code>NamaKelas &nbsp;NamaObjek = new NamaKelas(parameter);</code></p>

<p><strong>Contoh 2:</strong> Salin dan tempel kode program berikut ke Eclipse atau JDoodle.</p>

<p><code>public class Ortu {<br />
&nbsp;&nbsp; &nbsp;//deklarasi constructor<br />
&nbsp;&nbsp; &nbsp;public Ortu(String nama, String rambut) &nbsp;{ &nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//nama dan rambut adalah variabel constructor<br />
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot; Nama saya : &quot;+ nama +&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&quot;\\n Warna Rambut : &quot; + rambut);&nbsp;&nbsp; &nbsp;<br />
}<br />
&nbsp;&nbsp; &nbsp;public static void main (String[] args) {<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Ortu satu = new Ortu(&quot;Putri&quot;, &quot;hitam&quot;);<br />
&nbsp;&nbsp; &nbsp; }<br />
}</code></p>

<p><strong>Luaran 2:</strong><br />
<code>Nama saya : Putri<br />
Warna Rambut : hitam</code></p>

<p><strong>Latihan 2:</strong><br />
2.1. Susun kembali kode di contoh 2 dengan menambahkan data ciri-ciri Anda di dalam variabel constructor!<br />
2.2. Apabila nanti Anda akan memiliki keturunan, analisa sifat (atribut), constructor, dan perilaku positif (behavior) apa yang akan diturunkan?</p>

<h2><br />
<strong>Unit 3 Method</strong></h2>

<p>Method adalah perilaku yang dilakukan objek.&nbsp;<br />
Deklarasi method: <code>void/tipeData NamaMethod (tipedata namaVariabel) { &hellip; }</code></p>

<p><strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse atau JDoodle.<br />
<code>public class Manusia {<br />
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

<p><strong>Latihan 3:</strong><br />
3.1. &nbsp;Analisa perbedaan deklarasi constructor, method, dan method utama!<br />
3.2. &nbsp;Tentukan kapan Anda perlu menggunakan constructor dan method?<br />
3.3. &nbsp;Uraikan perbedaan berikut:<br />
&nbsp; &nbsp; &nbsp; &nbsp; a) constructor overloading dan overriding<br />
&nbsp; &nbsp; &nbsp; &nbsp; b) method overloading, dan method overriding<br />
&nbsp; &nbsp; &nbsp; &nbsp; c) method yang mengembalikan nilai dan method tidak mengembalikan nilai</p>

<p>&nbsp;</p>

<h2><strong>Unit 4 Extends</strong></h2>

<p>Extends adalah kata kerja dari keturunan yang merujuk ke kelas induk, sehingga otomatis memiliki atribut dan method dari kelas induk.&nbsp;</p>

<p>Deklarasi objek: <code>class NamaAnak extends NamaInduk { &hellip; }</code></p>

<p>Contoh 4: Salin dan tempel kode program berikut ke JDoodle. Kemudian catat waktu eksekusinya.</p>

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

<p><strong>Latihan 4:</strong><br />
4.1. Bandingkan method yang dimiliki <code>class Anak extends Ortu</code> dengan method di <code>class Ortu</code>!<br />
4.2. Ubahlah Contoh 4 dengan menambahkan objek anak dengan method yang berbeda!</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-kelas-java-6666c31468d488a.pdf','url_materi' => 'https://www.youtube.com/watch?v=60IdOc8m8Es','url_kedua_materi' => 'https://www.youtube.com/watch?v=6qULMlcv-eg','critical_status' => '0','created_at' => '2024-08-19 16:46:16','updated_at' => '2024-08-19 16:46:16'),
  array('id' => '114','topik_pembahasan_id' => '67','nama_materi' => 'IF dan SWITCH Java','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada <strong>Chanel Youtube Rumah Ilmu Raflesia</strong><br />
https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</p>

<h4><strong>Video Materi 1 tentang IF&nbsp; &ndash; <a href="https://www.youtube.com/watch?v=G0dfdAFa9iM">https://www.youtube.com/watch?v=G0dfdAFa9iM</a></strong></h4>

<h4><strong>Video Materi 2 tentang SWITCH &ndash;<a href="http://https://www.youtube.com/watch?v=RB4nz4xkisM"> https://www.youtube.com/watch?v=RB4nz4xkisM</a></strong></h4>

<p>&nbsp;</p>

<h2><strong>Unit 1 IF&nbsp;</strong></h2>

<p>Pada suatu program tidak mungkin hanya membuat pernyatan&ndash; pernyataan yang dijalankan secara urut dari baris pertama sampai terakhir secara bergantian. Program yang baik memerlukan suatu syarat khusus untuk menjalankan suatu pernyataan yang dinamakan percabangan atau branching.<br />
Secara analogi dalam kehidupan sehari &ndash; hari percabangan dapat kita lihat pada saat kita berjalan saat tiba di persimpangan kita akan memilih jalan kemana yang akan kita lewati untuk mencapai tujuankita apakah lurus, belok kekiri, atau belok ke kanan. Apabila tujuan kita lurus maka kita tidak akan mungkin sampai ke tujuan apabila kita belok kiri atau kanan, sama dengan program untuk memperoleh hasil sesuai yang kita inginkan maka harus dilakukan suatu seleksi terhadap kondisi tertentu.&nbsp;<br />
Operasi dasar algoritma percabangan seperti if sederhana (if tunggal), if majemuk (if..else), if dengan dua kondisi if &ndash; else if, dan percabangan switch case. Percabangan if merupakan pernyataan yang digunakan untuk pengambilan keputusan terhadap dua buah kemungkinan. If bisa berdiri sendiri atau dengan menggunakan Else</p>

<p>Contoh Deklarasi:<br />
<code>if(kondisi)<br />
&nbsp;&nbsp; &nbsp;//blok pernyataan yang dijalankan, bila kondisi benar<br />
}</code></p>

<p>Blok instruksi yang terletak setelah if akan dikerjakan jika hasil logika dari kondisi di belakangnya bernilai benar. Hasil logika ini bisa dibentuk dari satu kondisi atau lebih. Sebuah instruksi if hanya bisa mengerjakan satu instruksi saja. Jika Anda menginginkan lebih banyak instruksi, Anda harus menggunakan kurung kurawal.&nbsp;</p>

<p><strong>Contoh 1:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

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

<p><strong>Luaran&nbsp; Contoh 1:</strong><br />
<code>Masukkan Angka Anda : 8<br />
Nilai Bukan Sepuluh</code></p>

<p>&nbsp;</p>

<p><strong>Contoh 2:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

<p><code>import java.util.Scanner;</code></p>

<p><code>public class IfBersarang {<br />
&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner varT = new Scanner(System.in);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Tugas Anda : &quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int nilaiT = &nbsp;varT.nextByte();<br />
&nbsp;&nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Scanner varQ = new Scanner(System.in);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Quiz Anda : &quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int nilaiQ = &nbsp;varQ.nextByte();<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
&nbsp;&nbsp; &nbsp;if (nilaiU &gt;= 80) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(nilaiT &gt;= 80) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Anda mendapatkan nilai A&quot;);<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp;else{<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Anda TIDAK mendapatkan nilai A&quot;);<br />
&nbsp;&nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp;}<br />
}</code></p>

<p><strong>Luaran Contoh 2:</strong><br />
Masukkan Angka Tugas Anda : 70<br />
Masukkan Angka Quiz Anda : 70<br />
Masukkan Angka UTS Anda : 70<br />
Anda TIDAK mendapatkan nilai A</p>

<p><strong>Latihan 1:</strong></p>

<p>1.1.&nbsp;&nbsp; &nbsp;Bilangan genap merupakan bilangan yang habis dibagi 2. Bilangan ganjil adalah bilangan yang tidak habis dibagi 2. Analisa kode program yang tepat untuk menghitung masukan pengguna termasuk bilangan genap atau bilangan ganjil (lihat Contoh 1)?<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (Petunjuk: hitung = nilai % 2 jika hitung = 0 maka bilangan genap, jika hitung = 1 maka bilangan ganjil)</p>

<p>1.2.&nbsp;&nbsp; &nbsp;Cermati contoh 2, analisa kondisi pada <code>IF </code>bersarang! &nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tambahkan satu kondisi <code>IF </code>dengan satu nilai input Quiz (nilaiQ). Jika nilai UTS, Tugas, dan Quiz lebih besar sama dengan 80 maka siswa mendapat nilai A.</p>

<p>1.3.&nbsp;&nbsp; &nbsp;Apakah ketiga kondisi <code>IF </code>pada Contoh 1.2. dapat diringkas menjadi satu kondisi?<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Periksa satu kondisi mana yang paling tepat menggantikan &nbsp;ketiga kondisi itu!<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a.&nbsp;&nbsp; <code>&nbsp;IF (nilaiU &gt;= 80 || nilaiT &gt;= 80 || nilaiQ &gt;= 80)</code><br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b.&nbsp;&nbsp; &nbsp;<code>IF (nilaiU &gt;= 80 || nilaiT &gt;= 80 &amp;&amp; nilaiQ &gt;= 80)</code><br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c.&nbsp;&nbsp; &nbsp;<code>IF (nilaiU &gt;= 80 &amp;&amp; nilaiT &gt;= 80 || nilaiQ &gt;= 80)</code><br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; d.&nbsp;&nbsp; <code>&nbsp;IF (nilaiU &gt;= 80 &amp;&amp; nilaiT &gt;= 80 &amp;&amp; nilaiQ &gt;= 80)</code></p>

<p>1.4.&nbsp;&nbsp; &nbsp;Uraikan gambar diagram flowchart dari Latihan 1.2!</p>

<h2><br />
<strong>Unit 2 SWITCH</strong></h2>

<p>Perintah switch dapat melakukan sejumlah pilihan berbeda terhadap sejumlah kemungkinan nilai. Pada perintah switch terdapat pernyataan break, untukmenghentikan eksekusi ke akhir pernyataan switch. Perintah switch tidak bisa digunakan untuk ekspresi string dan kondisi boolean&nbsp;&nbsp; &nbsp;.&nbsp;</p>

<p>Bentuk umum perintah ini:</p>

<p><code>switch(ekspresi){<br />
case nilaiSatu:<br />
Pernyataan 1<br />
break;<br />
case nilaiDua:<br />
&nbsp;&nbsp;&nbsp; &nbsp;Pernyataan2<br />
break;<br />
default: PernyataanN;</code></p>

<p><code>}</code></p>

<p><strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

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

<p><strong>Luaran Contoh 3:</strong></p>

<p><code>Pilih A atau B : &nbsp;A<br />
Anda sudah rajin belajar</code></p>

<p>&nbsp;</p>

<p><strong>Contoh 4: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

<p><code>import java.util.Scanner;</code></p>

<p><code>public class SwitchBersarang {</code></p>

<p><code>&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;byte bulan;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int tahun = 2022;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int jumlahHari = 0;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan data bulan (dalam angka): &quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner masukData = new Scanner(System.in);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;bulan = masukData.nextByte();<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;switch (bulan) {<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case 1: case 3: &nbsp; //baris 1<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;jumlahHari = 31;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case 4: //baris 2<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;jumlahHari = 30;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case 2:<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;if (tahun % 4 == 0)<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;jumlahHari = 29;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;else<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;jumlahHari = 28;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;default:<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Maaf bulan hanya sampai 12.&quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Jumlah hari = &quot; + jumlahHari);<br />
&nbsp;&nbsp; &nbsp;}<br />
}</code></p>

<p><strong>Luaran Contoh 4:&nbsp;</strong><br />
<code>Masukkan data bulan (dalam angka): 7<br />
Jumlah hari = 31</code></p>

<p><strong>Latihan 2:</strong></p>

<p>2.1.&nbsp;&nbsp; &nbsp;Cermati kode pada Contoh 3.&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Hapuslah kode <code>break</code>; pada //baris 1, eksekusi kembali.&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Kemudian hapuslah kode <code>break</code>; pada //baris 2, eksekusi kembali.<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Analisis perbedaan hasil luaran ketika kode menggunakan <code>break</code>, ketika kode <code>break </code>baris 1 dihapus, dan ketika kode <code>break </code>baris 2 dihapus!&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Analisa kegunaan baris kode dengan <code>break </code>dan kata kunci <code>default</code>!&nbsp;</p>

<p>2.2.&nbsp; &nbsp; Cermati kode pada Contoh 4 yang menampilkan jumlah hari sesuai dengan bulannya. Namun kode tersebut baru sampai bulan ke-4. Tambahkan sampai bulan ke-12 pada baris ke-1 dan baris ke-2.&nbsp;</p>

<p>2.3.&nbsp; &nbsp; Cermati permasalahan yang dipecahkan pada Contoh 3.&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Apakah masalah ini bisa diubah menjadi perintah <code>IF</code>?&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Jika bisa, rincikan analisa Anda!&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Bandingkan masalah yang dapat diselesaikan percabangan dengan <code>IF</code> atau <code>SWITCH </code>!</p>

<p>2.4.&nbsp; &nbsp; Buatlah dokumentasi gambar flowchart dari Latihan 2.1. dan Latihan 2.2!</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-if-dan-switch-java-6766c3ee929c66b.pdf','url_materi' => 'https://www.youtube.com/watch?v=G0dfdAFa9iM','url_kedua_materi' => 'https://www.youtube.com/watch?v=RB4nz4xkisM','critical_status' => '0','created_at' => '2024-08-20 08:17:06','updated_at' => '2024-08-20 08:17:06'),
  array('id' => '115','topik_pembahasan_id' => '67','nama_materi' => 'IF dan SWITCH Java','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada<strong> <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">Chanel Youtube Rumah Ilmu Raflesia</a></strong><br />
https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</p>

<h4><strong>Video Materi 1 tentang IF&nbsp; &ndash; <a href="https://www.youtube.com/watch?v=G0dfdAFa9iM">https://www.youtube.com/watch?v=G0dfdAFa9iM</a></strong></h4>

<h4><strong>Video Materi 2 tentang SWITCH &ndash;<a href="http://https://www.youtube.com/watch?v=RB4nz4xkisM"> https://www.youtube.com/watch?v=RB4nz4xkisM</a></strong></h4>

<p>&nbsp;</p>

<h2><strong>Unit 1 IF&nbsp;</strong></h2>

<p>Blok instruksi yang terletak setelah if akan dikerjakan jika hasil logika dari kondisi di belakangnya bernilai benar. Hasil logika ini bisa dibentuk dari satu kondisi atau lebih. Sebuah instruksi if hanya bisa mengerjakan satu instruksi saja.</p>

<p>Bentuknya seperti:</p>

<p><code>if (ekspresi_boolean1) {<br />
//blok pernyataan yang dijalankan, bila kondisi benar<br />
}<br />
&nbsp;else if (ekspresi_boolean2) {<br />
//blok pernyataan yang dijalankan, bila kondisi benar<br />
}</code></p>

<p>Ketika ekspresi_boolean bernilai <code>false</code>, maka alur program akan menuju ke bagian <code>else</code>. Selanjutnya Pernyataan2 diatas akan dikerjakan kalau ekspresi_boolean2 bernilai <code>true</code>.&nbsp;&nbsp; &nbsp;</p>

<p><strong>Contoh 1:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

<p><code>import java.util.Scanner; //memanggil impor package yang membaca masukan pengguna</code></p>

<p><code>public class PercabanganIf {<br />
&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner input = new Scanner(System.in); &nbsp;// membaca teks yang dimasukkan pengguna<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Anda : &quot;); &nbsp;//pengguna memasukkan data<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;nilai = &nbsp;masuk.nextByte(); &nbsp;//menyimpan masukan pengguna ke tipe data<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (nilai = 1000) { &nbsp;//percabangan yang memeriksa kondisi<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Seribu&quot;); &nbsp;//baris kode yang dieksekusi bila benar<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;else &nbsp;{ &nbsp;//baris kode yang dieksekusi bila kondisi tidak terpenuhi dan salah<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Nilai Bukan Seribu&quot;);<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} &nbsp; &nbsp;}<br />
}</code></p>

<p><strong>Luaran Contoh 1:</strong><br />
<code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp; &nbsp; nilai cannot be resolved to a variable<br />
&nbsp;&nbsp; &nbsp;masuk cannot be resolved<br />
&nbsp;&nbsp; &nbsp;nilai cannot be resolved to a variable</code></p>

<p><code>&nbsp;&nbsp; &nbsp;at PercabanganIf.main(PercabanganIf.java:7)</code></p>

<p>&nbsp;</p>

<p><strong>Contoh 2:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

<p><code>import java.util.Scanner;</code></p>

<p><code>public class IfBersarang {<br />
&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner varT = new Scanner(System.in);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Tugas Anda : &quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int nilaiT = &nbsp;varT.nextByte();<br />
&nbsp;&nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Scanner varQ = new Scanner(System.in);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Quiz Anda : &quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int nilaiQ = &nbsp;varQ.nextByte();<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
&nbsp;&nbsp; &nbsp;if (nilaiU &gt;= 80) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(nilaiT &gt;= 80) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Anda mendapatkan nilai A&quot;);<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp;else{<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Anda TIDAK mendapatkan nilai A&quot;);<br />
&nbsp;&nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp;}<br />
}</code></p>

<p><strong>Luaran Contoh 2:</strong><br />
<code>Masukkan Angka Tugas Anda : 70<br />
Masukkan Angka Quiz Anda : 70<br />
Masukkan Angka UTS Anda : 70<br />
Anda TIDAK mendapatkan nilai A</code></p>

<p>&nbsp;</p>

<p><strong>Latihan 1:</strong></p>

<p>1.1.&nbsp;&nbsp; &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!</p>

<p>1.2.&nbsp;&nbsp; &nbsp;Cermati contoh 2, analisa kondisi pada IF bersarang! &nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tambahkan satu kondisi IF dengan satu nilai input Quiz (nilaiQ). Jika nilai UTS, Tugas, dan Quiz lebih besar sama dengan 80 maka siswa mendapat nilai A.</p>

<p>1.3.&nbsp;&nbsp; &nbsp;Apakah ketiga kondisi IF pada Contoh 1.2. dapat diringkas menjadi satu kondisi?<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Periksa satu kondisi mana yang paling tepat menggantikan &nbsp;ketiga kondisi itu!<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a.&nbsp;&nbsp; <code>IF (nilaiU &gt;= 80 || nilaiT &gt;= 80 || nilaiQ &gt;= 80)</code><br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b.&nbsp;&nbsp; <code>IF (nilaiU &gt;= 80 || nilaiT &gt;= 80 &amp;&amp; nilaiQ &gt;= 80)</code><br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c.&nbsp;&nbsp; &nbsp;<code>IF (nilaiU &gt;= 80 &amp;&amp; nilaiT &gt;= 80 || nilaiQ &gt;= 80)</code><br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; d.&nbsp;&nbsp; <code>IF (nilaiU &gt;= 80 &amp;&amp; nilaiT &gt;= 80 &amp;&amp; nilaiQ &gt;= 80)</code></p>

<p>1.4.&nbsp;&nbsp; &nbsp;Uraikan gambar diagram flowchart dari Latihan 1.2!</p>

<h2><br />
<strong>Unit 2 SWITCH</strong></h2>

<p>Perintah <code>switch </code>memungkinkan untuk melakukan sejumlah pilihan berbeda terhadap sejumlah kemungkinan nilai. Pada perintah <code>switch </code>terdapat pernyataan break, untukmenghentikan eksekusi ke akhir pernyataan <code>switch</code>. Perintah <code>switch </code>tidak bisa digunakan untuk ekspresi string dan kondisi boolean&nbsp;&nbsp; &nbsp;.&nbsp;</p>

<p>Bentuk umum perintah ini:</p>

<p><code>switch(ekspresi){<br />
case nilaiSatu:<br />
Pernyataan 1<br />
break;<br />
case nilaiDua:<br />
&nbsp;&nbsp;&nbsp; &nbsp;Pernyataan2<br />
break;<br />
default: PernyataanN;}</code></p>

<p><br />
<strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

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

<p><strong>Luaran Contoh 3:</strong><br />
<tt>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
&nbsp;&nbsp; &nbsp;Cannot invoke next() on the primitive type char<br />
&nbsp;&nbsp; &nbsp;Syntax error on token &quot;:&quot;, { expected<br />
&nbsp;&nbsp; &nbsp;Syntax error, insert &quot;:: IdentifierOrNew&quot; to complete ReferenceExpression<br />
&nbsp;&nbsp; &nbsp;Syntax error, insert &quot;:&quot; to complete SwitchLabel<br />
&nbsp;&nbsp; &nbsp;A cannot be resolved to a variable<br />
&nbsp;&nbsp; &nbsp;Syntax error on token &quot;default&quot;, } expected</tt></p>

<p><tt>&nbsp;&nbsp; &nbsp;at SwitchBersarang.main(SwitchBersarang.java:8)</tt></p>

<p><br />
<strong>Contoh 4: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

<p><code>import java.util.Scanner;</code></p>

<p><code>public class SwitchBersarang {<br />
&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;byte bulan;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int tahun = 2022;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int jumlahHari = 0;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan data bulan (dalam angka): &quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner masukData = new Scanner(System.in);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;bulan = masukData.nextByte();<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;switch (bulan) {<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 1: jumlahHari = 31; break;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 2: if (tahun % 4 == 0) { &nbsp;jumlahHari = 29; }<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;else { jumlahHari = 28; }<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
case 3: jumlahHari = 31; break;<br />
case 4: jumlahHari = 30; break;<br />
case 5: jumlahHari = 31; break;<br />
case 6: jumlahHari = 30; break;<br />
case 7: jumlahHari = 31; break;<br />
case 8: jumlahHari = 31; break;<br />
case 9: jumlahHari = 30; break;<br />
case 10: jumlahHari = 31; break;<br />
case 11: jumlahHari = 30; break;<br />
case 12: jumlahHari = 31; break;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;default: System.out.println(&quot;Maaf bulan hanya sampai 12.&quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Jumlah hari = &quot; + jumlahHari);<br />
}&nbsp;&nbsp; &nbsp;}</code></p>

<p><br />
<strong>Luaran Contoh 4:&nbsp;</strong></p>

<p>Masukkan data bulan (dalam angka): 7<br />
Jumlah hari = 31</p>

<p><strong>Latihan 2:</strong><br />
2.1. Cermati kode pada Contoh 3.&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!<br />
&nbsp; &nbsp; &nbsp; &nbsp;Hapuslah kode <code>break</code>; pada //baris 1, lalu eksekusi kembali.&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;Kemudian hapuslah kode <code>break</code>; pada //baris 2, lalu eksekusi kembali.<br />
&nbsp; &nbsp; &nbsp; &nbsp;Simpulkan kegunaan <code>break </code>pada <code>switch</code>!</p>

<p>2.2. Cermati kode pada Contoh 4. Evaluasi apakah penulisan kode tersebut sudah efisien?&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;Apakah ada penulisan informasi yang diulangi?&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;Jika ada, rekomendasikan penulisan yang lebih tepat!</p>

<p>2.3.&nbsp; Cermati permasalahan yang dipecahkan pada Contoh 3.&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; Apakah masalah ini bisa diubah menjadi perintah <code>IF</code>?&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; Jika bisa, rekomendasikan bentuk perintah <code>IF </code>dari Contoh 3!&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; Simpulkan perbandingan masalah yang dapat diselesaikan percabangan dengan <code>IF </code>atau&nbsp;<code>SWITCH </code>!</p>

<p>2.4.&nbsp; Desain gambar flowchart dari Latihan 2.2. dan Latihan 2.3!</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-if-dan-switch-java-6766c3eed965639.pdf','url_materi' => 'https://www.youtube.com/watch?v=G0dfdAFa9iM','url_kedua_materi' => 'https://www.youtube.com/watch?v=RB4nz4xkisM','critical_status' => '1','created_at' => '2024-08-20 08:18:17','updated_at' => '2024-08-20 08:18:17'),
  array('id' => '116','topik_pembahasan_id' => '67','nama_materi' => 'IF dan SWITCH Java','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada<strong> <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">Chanel Youtube Rumah Ilmu Raflesia</a></strong><br />
https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</p>

<h4><strong>Video Materi 1 tentang IF&nbsp; &ndash; <a href="https://www.youtube.com/watch?v=G0dfdAFa9iM">https://www.youtube.com/watch?v=G0dfdAFa9iM</a></strong></h4>

<h4><strong>Video Materi 2 tentang SWITCH &ndash;<a href="http://https://www.youtube.com/watch?v=RB4nz4xkisM"> https://www.youtube.com/watch?v=RB4nz4xkisM</a></strong></h4>

<h4>&nbsp;</h4>

<h4>&nbsp;</h4>

<h2><strong>Unit 1 IF&nbsp;</strong></h2>

<p>Blok instruksi yang terletak setelah if akan dikerjakan jika hasil logika dari kondisi di belakangnya bernilai benar. Hasil logika ini bisa dibentuk dari satu kondisi atau lebih. Sebuah instruksi if hanya bisa mengerjakan satu instruksi saja.</p>

<p>Bentuknya seperti:</p>

<p><code>if (ekspresi_boolean1) {<br />
//blok pernyataan yang dijalankan, bila kondisi benar<br />
}<br />
&nbsp;else if (ekspresi_boolean2) {<br />
//blok pernyataan yang dijalankan, bila kondisi benar<br />
}</code></p>

<p>Ketika ekspresi_boolean bernilai <code>false</code>, maka alur program akan menuju ke bagian <code>else</code>. Selanjutnya Pernyataan2 diatas akan dikerjakan kalau ekspresi_boolean2 bernilai <code>true</code>.&nbsp;&nbsp; &nbsp;</p>

<p><strong>Contoh 1:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

<p><code>import java.util.Scanner; //memanggil impor package yang membaca masukan pengguna</code></p>

<p><code>public class PercabanganIf {<br />
&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner input = new Scanner(System.in); &nbsp;// membaca teks yang dimasukkan pengguna<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Anda : &quot;); &nbsp;//pengguna memasukkan data<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;nilai = &nbsp;masuk.nextByte(); &nbsp;//menyimpan masukan pengguna ke tipe data<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (nilai = 1000) { &nbsp;//percabangan yang memeriksa kondisi<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Seribu&quot;); &nbsp;//baris kode yang dieksekusi bila benar<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;else &nbsp;{ &nbsp;//baris kode yang dieksekusi bila kondisi tidak terpenuhi dan salah<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Nilai Bukan Seribu&quot;);<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} &nbsp; &nbsp;}<br />
}</code></p>

<p><strong>Luaran Contoh 1:</strong><br />
<code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp; &nbsp; nilai cannot be resolved to a variable<br />
&nbsp;&nbsp; &nbsp;masuk cannot be resolved<br />
&nbsp;&nbsp; &nbsp;nilai cannot be resolved to a variable</code></p>

<p><code>&nbsp;&nbsp; &nbsp;at PercabanganIf.main(PercabanganIf.java:7)</code></p>

<p>&nbsp;</p>

<p><strong>Contoh 2:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

<p><code>import java.util.Scanner;</code></p>

<p><code>public class IfBersarang {<br />
&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Scanner varT = new Scanner(System.in);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Tugas Anda : &quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int nilaiT = &nbsp;varT.nextByte();<br />
&nbsp;&nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Scanner varQ = new Scanner(System.in);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Angka Quiz Anda : &quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int nilaiQ = &nbsp;varQ.nextByte();<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
&nbsp;&nbsp; &nbsp;if (nilaiU &gt;= 80) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(nilaiT &gt;= 80) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Anda mendapatkan nilai A&quot;);<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp;else{<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Anda TIDAK mendapatkan nilai A&quot;);<br />
&nbsp;&nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp;}<br />
}</code></p>

<p><strong>Luaran Contoh 2:</strong></p>

<p><code>Masukkan Angka Tugas Anda : 70<br />
Masukkan Angka Quiz Anda : 70<br />
Masukkan Angka UTS Anda : 70<br />
Anda TIDAK mendapatkan nilai A</code></p>

<p><br />
<strong>Latihan 1:</strong></p>

<p>1.1. Evaluasi penyebab kesalahan dan perbaiki kode tersebut!</p>

<p>1.2. Cermati contoh 2, analisa kondisi pada <code>IF </code>bersarang! &nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;Tambahkan satu kondisi <code>IF </code>dengan satu nilai input Quiz (nilaiQ). Jika nilai UTS, Tugas, dan Quiz lebih besar sama dengan 80<br />
&nbsp; &nbsp; &nbsp; &nbsp;maka siswa mendapat nilai A.<br />
&nbsp; &nbsp; &nbsp; &nbsp;Apakah ketiga kondisi <code>IF </code>pada Contoh 1.2. dapat diringkas menjadi satu kondisi?<br />
&nbsp; &nbsp; &nbsp; &nbsp;Rancanglah kode yang dapat menggantikan ketiga kondisi tersebut menggunakan &nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;operator boolen ( &amp;&amp; atau ||) !</p>

<p>1.3.&nbsp; Konstruksikan kode program untuk menghasilkan luaran berdasarkan informasi berikut!<br />
&nbsp; &nbsp; &nbsp; &nbsp; Persyaratan kelulusan bagi mahasiswa Informatika dan Sistem Informasi Universitas Bengkulu yaitu:<br />
&nbsp; &nbsp; &nbsp; &nbsp;a)&nbsp;&nbsp; &nbsp;Jumlah sks yang lulus minimum = 144 sks. Jika kurang dari 144 maka perlu mengulang mengambil mata kuliah hingga memenuhi<br />
&nbsp; &nbsp; &nbsp; &nbsp;b)&nbsp;&nbsp; &nbsp;Nilai tes toefl minimum = 430. Jika skor belum mencapai maka ulangi tes toefl maksimal 3x atau hingga skor tercapai<br />
&nbsp; &nbsp; &nbsp; &nbsp;c)&nbsp;&nbsp; &nbsp;Ujian skripsi = Lulus, jika belum lulus maka perlu ujian ulang.&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;d)&nbsp;&nbsp; &nbsp;Menulis artikel ilmiah dari skripsi yang dibuat dalam status = submitted. Jika bukti penerimaan submitted tidak dilampirkan<br />
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;maka persyaratan belum terpenuhi.&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;Jika keempat syarat ini terpenuhi maka Mahasiswa layak lulus dengan gelar S.Kom. (Sarjana Komputer).</p>

<p>1.4.&nbsp;&nbsp; &nbsp;Desain gambar diagram flowchart dari Latihan 1.3!</p>

<h2><br />
<strong>Unit 2 SWITCH</strong></h2>

<p>Perintah <code>switch </code>memungkinkan untuk melakukan sejumlah pilihan berbeda terhadap sejumlah kemungkinan nilai. Pada perintah <code>switch </code>terdapat pernyataan <code>break</code>, untukmenghentikan eksekusi ke akhir pernyataan <code>switch</code>. Perintah switch tidak bisa digunakan untuk ekspresi string dan kondisi <code>boolean&nbsp;&nbsp; &nbsp;</code>.&nbsp;</p>

<p>Bentuk umum perintah ini:</p>

<p><code>switch(ekspresi){<br />
case nilaiSatu:<br />
Pernyataan 1<br />
break;<br />
case nilaiDua:<br />
&nbsp;&nbsp;&nbsp; &nbsp;Pernyataan2<br />
break;<br />
default: PernyataanN;}</code></p>

<p><br />
<strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

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

<p><br />
<strong>Luaran Contoh 3:</strong></p>

<p><code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
&nbsp;&nbsp; &nbsp;Cannot invoke next() on the primitive type char<br />
&nbsp;&nbsp; &nbsp;Syntax error on token &quot;:&quot;, { expected<br />
&nbsp;&nbsp; &nbsp;Syntax error, insert &quot;:: IdentifierOrNew&quot; to complete ReferenceExpression<br />
&nbsp;&nbsp; &nbsp;Syntax error, insert &quot;:&quot; to complete SwitchLabel<br />
&nbsp;&nbsp; &nbsp;A cannot be resolved to a variable<br />
&nbsp;&nbsp; &nbsp;Syntax error on token &quot;default&quot;, } expected</code></p>

<p><code>&nbsp;&nbsp; &nbsp;at SwitchBersarang.main(SwitchBersarang.java:8)</code></p>

<p><br />
<strong>Contoh 4:</strong> Salin dan tempel kode program berikut ke Eclipse.</p>

<p><code>import java.util.Scanner;</code></p>

<p><code>public class SwitchBersarang {<br />
&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;byte bulan;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int tahun = 2022;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int jumlahHari = 0;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan data bulan (dalam angka): &quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner masukData = new Scanner(System.in);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;bulan = masukData.nextByte();<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;switch (bulan) {<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 1: jumlahHari = 31; break;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 2: if (tahun % 4 == 0) { &nbsp;jumlahHari = 29; }<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;else { jumlahHari = 28; }<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
case 3: jumlahHari = 31; break;<br />
case 4: jumlahHari = 30; break;<br />
case 5: jumlahHari = 31; break;<br />
case 6: jumlahHari = 30; break;<br />
case 7: jumlahHari = 31; break;<br />
case 8: jumlahHari = 31; break;<br />
case 9: jumlahHari = 30; break;<br />
case 10: jumlahHari = 31; break;<br />
case 11: jumlahHari = 30; break;<br />
case 12: jumlahHari = 31; break;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;default: System.out.println(&quot;Maaf bulan hanya sampai 12.&quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;Jumlah hari = &quot; + jumlahHari);<br />
}&nbsp;&nbsp; &nbsp;}</code><br />
&nbsp;</p>

<p><strong>Luaran Contoh 4:&nbsp;</strong></p>

<p><code>Masukkan data bulan (dalam angka): 7<br />
Jumlah hari = 31</code><br />
&nbsp;</p>

<p><strong>Latihan 2:</strong></p>

<p>2.1. Cermati kode pada Contoh 3.&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;Evaluasi penyebab kesalahan dan perbaiki kode tersebut!<br />
&nbsp; &nbsp; &nbsp; &nbsp;Hapuslah kode <code>break</code>; pada //baris 1, lalu eksekusi kembali.&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;Kemudian hapuslah kode <code>break</code>; pada //baris 2, lalu eksekusi kembali.<br />
&nbsp; &nbsp; &nbsp; &nbsp;Simpulkan kegunaan break pada <code>switch</code>!</p>

<p>2.2. Cermati kode pada Contoh 4. Evaluasi apakah penulisan kode tersebut sudah efisien?&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;Apakah ada penulisan informasi yang diulangi?&nbsp;<br />
&nbsp; &nbsp; &nbsp; Jika ada, susun kembali penulisan kode yang tepat!&nbsp;<br />
&nbsp; &nbsp; &nbsp; Simpulkan perbedaan antara kode Contoh 4 dengan kode yang kalian susun!&nbsp;</p>

<p>2.3. Cermati permasalahan yang dipecahkan pada Contoh 3.&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;Apakah masalah ini bisa diubah menjadi perintah <code>IF</code>?&nbsp;<br />
&nbsp; &nbsp; &nbsp; Jika bisa, susun kembali kode Contoh 3 dari perintah <code>SWITCH </code>menjadi <code>IF</code>!<br />
&nbsp; &nbsp; &nbsp; Simpulkan perbandingan masalah dan kode program yang dapat diselesaikan percabangan dengan <code>IF </code>atau &nbsp;<code>SWITCH </code>!</p>

<p>2.4. Desain gambar flowchart dari Latihan 2.1. dan Latihan 2.3!<br />
&nbsp;</p>

<p>&nbsp;</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-if-dan-switch-java-6766c3ef173f7db.pdf','url_materi' => 'https://www.youtube.com/watch?v=G0dfdAFa9iM','url_kedua_materi' => 'https://www.youtube.com/watch?v=RB4nz4xkisM','critical_status' => '2','created_at' => '2024-08-20 08:19:19','updated_at' => '2024-08-20 08:19:19'),
  array('id' => '117','topik_pembahasan_id' => '68','nama_materi' => 'FOR dan WHILE Java','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">Chanel Youtube Rumah Ilmu Raflesia<br />
https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

<p><a href="https://www.youtube.com/watch?v=Ij9qLLblxEU">Video Materi 1 tentang FOR &ndash; https://www.youtube.com/watch?v=Ij9qLLblxEU&nbsp;</a></p>

<p><a href="https://www.youtube.com/watch?v=ORA4JyJMFss">Video Materi 2 tentang WHILE &ndash; https://www.youtube.com/watch?v=ORA4JyJMFss</a>&nbsp;</p>

<p>&nbsp;</p>

<h2><strong>UNIT 1 FOR</strong></h2>

<p>Pernyataan for dapat mengendalikan proses berulang dengan jumlah perulangan yang sudah ditentukan.&nbsp;</p>

<p>Bentuk umum For:</p>

<p><code>for (inisialisasi; kondisi; iterasi) {<br />
&nbsp; &nbsp;pernyataan;<br />
}</code></p>

<p>Makna bagian <code>for</code>:<br />
1.&nbsp;&nbsp; &nbsp;inisialisasi untuk memberikan nilai kepada variabel yang digunakan untuk mengontrol pengulangan.&nbsp;<br />
2.&nbsp;&nbsp; &nbsp;kondisi untuk mengontrol pengulangan untuk dilanjutkan atau diakhiri.&nbsp;<br />
3.&nbsp;&nbsp; &nbsp;Penaikan (increment) atau penurunan (decrement) untuk menaikkan atau menurunkan nilai variabel perulangan.&nbsp;</p>

<p><strong>Contoh 1: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

<p><code>public class ContohFor{&nbsp;<br />
public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;for (int y = 0; y &lt;= 10; ++y) { &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//ubah 1<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (y % 2 == 1) &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//ubah 2<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;continue; &nbsp;&nbsp;&nbsp; &nbsp;//baris 1<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;else if (y == 8) &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//ubah 3<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;//baris 2<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;else<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(y + &quot; &quot;);<br />
&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code></p>

<p><strong>Luaran contoh 1:</strong><br />
<code>0&nbsp;<br />
2&nbsp;<br />
4&nbsp;<br />
6</code></p>

<p><strong>Contoh 2:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

<p><code>public class ForBersarang {&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; pertama:<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for( int i = 1; i &lt; 5; i++) {&nbsp;&nbsp; &nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;kedua:<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int j = 1; j &lt; 3; j ++ ) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;i = &quot; + i + &quot;; j = &quot; +j);<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if ( i == 2)<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break kedua; &nbsp; &nbsp; &nbsp;//ubah1<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;} &nbsp; }</code></p>

<p><strong>Luaran Contoh 2:</strong><br />
<code>i = 1; j = 1<br />
i = 1; j = 2<br />
i = 2; j = 1<br />
i = 3; j = 1<br />
i = 3; j = 2<br />
i = 4; j = 1<br />
i = 4; j = 2</code></p>

<p>&nbsp;</p>

<p><strong>Contoh 3:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

<p><code>import java.util.Scanner;</code></p>

<p><code>public class ForBersarang {<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;public static void main(String[] args){<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Instance Input Scanner<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner input = new Scanner(System.in);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukan Input: &quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int tinggi = input.nextInt(); //Mendapatkan Input Dari User<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int t=tinggi; t&gt;=1; t--){<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Menghitung Jumlah Tinggi Piramida<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int s=tinggi; s&gt;=t; s--){<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Menghitung Jumlah Spasi per Baris<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;*&quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); //Membuat Baris Baru<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp;}</code></p>

<p><strong>Luaran contoh 3:</strong></p>

<p><code>Masukan Input: 7</code><br />
<code>*<br />
**<br />
***<br />
****<br />
*****<br />
******<br />
*******</code></p>

<p><strong>Latihan 1</strong></p>

<p>1.1.&nbsp;&nbsp; &nbsp;Analisa tujuan penulisan kata kunci <code>continue </code>dan <code>break </code>pada Contoh 1!&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Buat perubahan nilai angka pada variabel di&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; //Ubah 1 menjadi <code>&nbsp;for (int y = 0; y &lt;= 15; y++)</code> {&nbsp; lalu running, periksa hasilnya<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; //Ubah 2 menjadi<code> &nbsp;if (y % 2 == 0)</code> &nbsp;lalu running, periksa hasilnya<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; //Ubah 3 menjadi <code>else if (y == 9) &nbsp;</code>lalu running, periksa hasilnya<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Analisa dampaknya perubahan ini terhadap luaran setelah running!</p>

<p>1.2.&nbsp;&nbsp; &nbsp;Buat perubahan kode pada Contoh 2 di baris //Ubah1 menjadi<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a. <code>continue </code>pertama;&nbsp; lalu &nbsp;running, periksa hasilnya<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b. <code>break </code>pertama;&nbsp;lalu running, periksa hasilnya<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c. <code>continue </code>kedua;&nbsp;lalu running, periksa hasilnya<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Analisa perbedaan perubahan kode pada Ubah 1 untuk setiap poin (a), (b), dan (c)!&nbsp;</p>

<p>1.3.&nbsp;&nbsp; &nbsp;Cermati kode contoh 3. Apabila ingin menghasilkan luaran berikut:<br />
<code>Luaran:<br />
Masukan Input: 7<br />
*******<br />
******<br />
*****<br />
****<br />
***<br />
**<br />
*</code><br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Susunlah analisa kode untuk menghasilkan luaran tersebut!</p>

<p>1.4.&nbsp;&nbsp; &nbsp; &nbsp;Analisa diagram flowchart dari Latihan 1.2 dan 1.3!</p>

<h2><br />
<strong>UNIT 2 WHILE</strong></h2>

<p>Pernyataan <code>while</code> berguna untuk melakukan proses yang berulang. Pernyataan akan dijalankan terus menerus selama kondisi bernilai true (benar). Oleh karena itu, kita harus membuat kondisi suatu saat ungkapan bernilai salah agar perulangan berakhir.</p>

<p>Bentuk umum <code>While</code> seperti:</p>

<p><code>while (kondisi) {&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; pernyataan;<br />
}</code></p>

<p><strong>Contoh 4:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

<p><code>public class ContohWhile{&nbsp;<br />
public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;int i=1;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while(i&lt;=6){<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(i);<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;i++;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(i==4){ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; &nbsp; &nbsp; &nbsp; &nbsp;//ubah1&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}}}</code></p>

<p>Luaran:<br />
<code>1<br />
2<br />
3</code></p>

<p>&nbsp;</p>

<p><strong>Contoh 5:</strong> Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

<p><code>public class WhileBersarang {<br />
&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int count = 0; &nbsp;//ubah1<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while (count &lt; 20) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (count % 3 == 0) &nbsp;//ubah2<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(count);<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;count++;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp;}</code></p>

<p>Luaran:<br />
<code>0<br />
3<br />
6<br />
9<br />
12<br />
15<br />
18</code></p>

<p><strong>Latihan 2</strong></p>

<p>2.1. &nbsp;Buat perubahan nilai angka pada variabel di Contoh 4<br />
&nbsp; &nbsp; &nbsp; &nbsp; //Ubah 1 menjadi continue;&nbsp; lalu running, periksa hasilnya<br />
&nbsp; &nbsp; &nbsp; &nbsp; Analisa dampaknya perubahan terhadap luaran setelah running dan uraikan kegunaan break dan continue!</p>

<p>2.2. Buat perubahan nilai angka pada variabel di Contoh 5<br />
&nbsp; &nbsp; &nbsp; &nbsp;//Ubah2 menjadi <code>if (count % 5 == 0)&nbsp;</code> lalu running, periksa hasilnya<br />
&nbsp; &nbsp; &nbsp; &nbsp;Analisa dampaknya perubahan terhadap luaran setelah running dan uraikan kegunaan % untuk angka yang berbeda&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;pada perintah tersebut!</p>

<p>2.3. Buat perubahan nilai angka pada variabel di&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;//Ubah1 menjadi <code>while (count &lt; 0) {</code>&nbsp; &nbsp; lalu running, periksa hasilnya<br />
&nbsp; &nbsp; &nbsp; &nbsp;Ubahlah baris kode <code>while </code>pada Contoh 5 menjadi <code>do &hellip; while</code> dengan persyaratan yang sama <code>&nbsp;while (count &lt; 0)</code>.&nbsp; &nbsp;Bandingkan hasil luaran antara menggunakan while dan <code>do &hellip; while</code>!</p>

<p>2.4.&nbsp; Analisa diagram flowchart dari Latihan 2.1, Contoh 5, dan Latihan 2.3!</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-for-dan-while-java-6866c3ef5976c26.pdf','url_materi' => 'https://www.youtube.com/watch?v=Ij9qLLblxEU','url_kedua_materi' => 'https://www.youtube.com/watch?v=Ij9qLLblxEU','critical_status' => '0','created_at' => '2024-08-20 08:20:25','updated_at' => '2024-08-20 08:20:25'),
  array('id' => '118','topik_pembahasan_id' => '68','nama_materi' => 'FOR dan WHILE Java','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">Chanel Youtube Rumah Ilmu Raflesia<br />
https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

<p><a href="https://www.youtube.com/watch?v=Ij9qLLblxEU">Video Materi 1 tentang FOR &ndash; https://www.youtube.com/watch?v=Ij9qLLblxEU&nbsp;</a></p>

<p><a href="https://www.youtube.com/watch?v=ORA4JyJMFss">Video Materi 2 tentang WHILE &ndash; https://www.youtube.com/watch?v=ORA4JyJMFss</a>&nbsp;</p>

<p>&nbsp;</p>

<h2><strong>UNIT 1 FOR</strong></h2>

<p>Pernyataan for dapat mengendalikan proses berulang dengan jumlah perulangan yang sudah ditentukan.&nbsp;</p>

<p>Bentuk umum For:</p>

<p><code>for (inisialisasi; kondisi; iterasi) {<br />
&nbsp; &nbsp;pernyataan;<br />
}</code></p>

<p>Makna bagian <code>for</code>:<br />
1.&nbsp;&nbsp; &nbsp;inisialisasi untuk memberikan nilai kepada variabel yang digunakan untuk mengontrol pengulangan.&nbsp;<br />
2.&nbsp;&nbsp; &nbsp;kondisi untuk mengontrol pengulangan untuk dilanjutkan atau diakhiri.&nbsp;<br />
3.&nbsp;&nbsp; &nbsp;Penaikan (increment) atau penurunan (decrement) untuk menaikkan atau menurunkan nilai variabel perulangan.&nbsp;</p>

<p><strong>Contoh 1: Salin dan tempel kode program berikut ke Eclipse.&nbsp;</strong></p>

<p><code>public class ContohFor{&nbsp;<br />
public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;for (double &nbsp;y &lt;= 15; y = 0; &nbsp;y++) { &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (y % 2 == 1) { &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;//kondisi 1&nbsp;&nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// baris kode kosong 1<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} else if (y == 8) { &nbsp; &nbsp;&nbsp; &nbsp;//kondisi 2&nbsp;&nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// baris kode kosong 2<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} else<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(y + &quot; &quot;);<br />
&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code></p>

<p><strong>Luaran:</strong><br />
<code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
&nbsp;&nbsp; &nbsp;Syntax error on token &quot;&lt;=&quot;, = expected<br />
&nbsp;&nbsp; &nbsp;Type mismatch: cannot convert from double to boolean</code></p>

<p><code>&nbsp;&nbsp; &nbsp;at ContohFor.main(ContohFor.java:5)</code></p>

<p><strong>Contoh 2: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

<p><code>public class ForBersarang {&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;pertama:<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for( int i = 1; i &lt; 5; i++) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;kedua:<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int j = 1; j &lt; 3; j ++ ) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;i = &quot; + i + &quot;; j = &quot; +j);<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if ( i == 2) {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;// kode yang hilang&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} &nbsp;}&nbsp;&nbsp; &nbsp;} &nbsp; }</code></p>

<p><strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

<p><code>import java.util.Scanner;</code></p>

<p><code>public class ForBersarang {<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;public static void main(String[] args){<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Instance Input Scanner<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner input = new Scanner(System.in);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukan Input: &quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int tinggi = input.nextInt(); //Mendapatkan Input Dari User<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int t=tinggi; t&gt;=1; t--){<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Menghitung Jumlah Tinggi Piramida<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int s=tinggi; s&gt;=t; s--){<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Menghitung Jumlah Spasi per Baris<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;*&quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); //Membuat Baris Baru<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp;}</code></p>

<p><strong>Luaran:</strong></p>

<p><code>Masukan Input: 7</code><br />
<strong><code>*<br />
**<br />
***<br />
****<br />
*****<br />
******<br />
*******</code></strong></p>

<p><strong>Latihan 1</strong><br />
1.1.&nbsp;&nbsp; &nbsp; Evaluasi penyebab kesalahan dan perbaiki kode pada Contoh 1!<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Rekomendasikan kata kunci yang tepat diletakkan pada baris kode yang kosong 1 dan 2 untuk dapat menghasilkan luaran berikut:<br />
Luaran contoh 1:<br />
<code>0&nbsp;<br />
2&nbsp;<br />
4&nbsp;<br />
6&nbsp;</code></p>

<p>1.2.&nbsp;&nbsp; &nbsp;Cermati contoh kode 2 pada kode &nbsp;//baris kode kosong.<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Rekomendasikan kode yang tepat menggunakan break atau continue terhadap pertama atau kedua agar menghasilkan luaran berikut:<br />
Luaran Contoh 2:<br />
<code>i = 1; j = 1<br />
i = 1; j = 2<br />
i = 2; j = 1<br />
i = 2; j = 2</code><br />
&nbsp;<br />
1.3.&nbsp;&nbsp; &nbsp;Cermati kode contoh 3. Apabila ingin menghasilkan luaran berikut:<br />
Luaran berbentuk piramida<br />
<code>Masukan Input: 7<br />
&nbsp; &nbsp; &nbsp; &nbsp;*<br />
&nbsp; &nbsp; &nbsp; ***<br />
&nbsp; &nbsp; &nbsp;*****<br />
&nbsp; &nbsp; *******<br />
&nbsp; &nbsp;*********<br />
&nbsp; ***********<br />
&nbsp;*************</code><br />
&nbsp; &nbsp; &nbsp; &nbsp; Rekomendasikan kode untuk menghasilkan luaran tersebut!</p>

<p>1.4. &nbsp;Analisa diagram flowchart dari Latihan 1.2 dan 1.3!</p>

<h2><br />
<strong>UNIT 2 WHILE</strong></h2>

<p>Pernyataan <code>while</code> berguna untuk melakukan proses yang berulang. Pernyataan akan dijalankan terus menerus selama kondisi bernilai true (benar). Oleh karena itu, kita harus membuat kondisi suatu saat ungkapan bernilai salah agar perulangan berakhir.</p>

<p>Bentuk umum <code>While</code> seperti:</p>

<p><code>while (kondisi) {&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; pernyataan;<br />
}</code></p>

<p><strong>Contoh 4:</strong> Salin dan tempel kode program berikut ke Eclipse.</p>

<p><code>public class ContohWhile{&nbsp;<br />
public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;int i=1;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while(i&lt;=6){<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(i);<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;i++;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; if(i==4){ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; &nbsp; &nbsp; &nbsp; &nbsp;//ubah1&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}}}</code></p>

<p><strong>Luaran:</strong><br />
<code>1<br />
2<br />
3</code></p>

<p><strong>Contoh 5: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

<p><code>import java.util.Scanner;</code></p>

<p><code>public class ForBersarang {&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner dataKata = new Scanner(System.in);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Kata yang ingin diulang : &quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;String kata = dataKata.nextLine();<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner dataJumlah = new Scanner(System.in);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Jumlah ingin diulang : &quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int jumlah = dataJumlah.nextInt();<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int i = 0; //Inisialisasi batas dasar<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;while(i &lt; jumlah){<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(kata);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;i++;//Faktor pengulang Increment<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
}&nbsp;</code></p>

<p><strong>Luaran Contoh 5:</strong><br />
<code>Masukkan Kata yang ingin diulang : Fakultas Teknik<br />
Masukkan Jumlah ingin diulang : 5<br />
Fakultas Teknik<br />
Fakultas Teknik<br />
Fakultas Teknik<br />
Fakultas Teknik<br />
Fakultas Teknik</code></p>

<p>&nbsp;</p>

<p><strong>Latihan 2</strong></p>

<p>2.1. &nbsp;Ubahlah baris kode pada Contoh 4<br />
&nbsp; &nbsp; &nbsp; &nbsp; //Ubah1 menjadi &nbsp;if(i % 3 == 0){ &nbsp;  running, periksa hasilnya<br />
&nbsp; &nbsp; &nbsp; &nbsp; //Ubah2 menjadi continue; &nbsp; running, periksa hasilnya<br />
&nbsp; &nbsp; &nbsp; &nbsp; Evaluasi perbandingan luaran sebelum dan setelah diubah! Simpulkan maksud dari perubahan tersebut!</p>

<p>2.2. Cermati Contoh 5. Periksa luaran, bila ketika di eksekusi, jumlah yang diulang = 0!&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;Evaluasi luaran, bila kode diubah menjadi do &hellip; while dengan masukan sama jumlah yang diulang = 0.<br />
&nbsp; &nbsp; &nbsp; &nbsp;Simpulkan perbedaan while dan do &hellip; while!</p>

<p>2.3. Bila diketahui pernyataan pseudocode berikut:<br />
&nbsp; &nbsp; &nbsp; &nbsp;[1]&nbsp;&nbsp; &nbsp;inisiasi idPelajaran<br />
&nbsp; &nbsp; &nbsp; &nbsp;[2]&nbsp;&nbsp; &nbsp;inisiasi nilai pelajaran<br />
&nbsp; &nbsp; &nbsp; &nbsp;[3]&nbsp;&nbsp; &nbsp;inisiasi nilai rata-rata<br />
&nbsp; &nbsp; &nbsp; &nbsp;[4]&nbsp;&nbsp; &nbsp;Minta pengguna untuk menuliskan jumlah pelajaran<br />
&nbsp; &nbsp; &nbsp; &nbsp;[5]&nbsp;&nbsp; &nbsp;Ketika idPelajaran lebih kecil dari jumlah pelajaran<br />
&nbsp; &nbsp; &nbsp; &nbsp;[6]&nbsp;&nbsp; &nbsp;Minta pengguna untuk menuliskan nilai pelajaran<br />
&nbsp; &nbsp; &nbsp; &nbsp;[7]&nbsp;&nbsp; &nbsp;Hitung nilai rata-rata = (nilai pelajaran + nilai rata-rata) / 2&nbsp; &nbsp; &nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp;[8]&nbsp;&nbsp; &nbsp;Tambah satu ke idPelajaran<br />
&nbsp; &nbsp; &nbsp; &nbsp;[9]&nbsp;&nbsp; &nbsp;Tampilkan nilai rata-rata<br />
&nbsp; &nbsp; &nbsp; &nbsp;Rekomendasikan kode untuk menyelesaikan Pseudocode tersebut!</p>

<p>2.4.&nbsp;&nbsp; &nbsp; Rancang diagram flowchart dari Latihan 2.1, Latihan 2.2, dan Latihan 2.3!</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-for-dan-while-java-6866c3ef8b5963d.pdf','url_materi' => 'https://www.youtube.com/watch?v=Ij9qLLblxEU','url_kedua_materi' => 'https://www.youtube.com/watch?v=ORA4JyJMFss','critical_status' => '1','created_at' => '2024-08-20 08:21:15','updated_at' => '2024-08-20 08:21:15'),
  array('id' => '119','topik_pembahasan_id' => '68','nama_materi' => 'FOR dan WHILE Java','isi_materi' => '<p>Video penjelasan pembelajaran dapat diakses pada <a href="https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw">Chanel Youtube Rumah Ilmu Raflesia<br />
https://www.youtube.com/channel/UC8B9rghd3dBiS6OKonLMyIw</a></p>

<p><a href="https://www.youtube.com/watch?v=Ij9qLLblxEU">Video Materi 1 tentang FOR &ndash; https://www.youtube.com/watch?v=Ij9qLLblxEU&nbsp;</a></p>

<p><a href="https://www.youtube.com/watch?v=ORA4JyJMFss">Video Materi 2 tentang WHILE &ndash; https://www.youtube.com/watch?v=ORA4JyJMFss</a>&nbsp;</p>

<p>&nbsp;</p>

<h2><strong>UNIT 1 FOR</strong></h2>

<p>Pernyataan for dapat mengendalikan proses berulang dengan jumlah perulangan yang sudah ditentukan.&nbsp;</p>

<p>Bentuk umum For:</p>

<p><code>for (inisialisasi; kondisi; iterasi) {<br />
&nbsp; &nbsp;pernyataan;<br />
}</code></p>

<p>Makna bagian <code>for</code>:<br />
1.&nbsp;&nbsp; &nbsp;inisialisasi untuk memberikan nilai kepada variabel yang digunakan untuk mengontrol pengulangan.&nbsp;<br />
2.&nbsp;&nbsp; &nbsp;kondisi untuk mengontrol pengulangan untuk dilanjutkan atau diakhiri.&nbsp;<br />
3.&nbsp;&nbsp; &nbsp;Penaikan (increment) atau penurunan (decrement) untuk menaikkan atau menurunkan nilai variabel perulangan.&nbsp;</p>

<p><strong>Contoh 1: Salin dan tempel kode program berikut ke Eclipse.&nbsp;</strong></p>

<p><code>public class ContohFor{&nbsp;<br />
public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;for (double &nbsp;y &lt;= 15; y = 0; &nbsp;y++) { &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (y % 2 == 1) { &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;//kondisi 1&nbsp;&nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// baris kode kosong 1<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} else if (y == 8) { &nbsp; &nbsp;&nbsp; &nbsp;//kondisi 2&nbsp;&nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;// baris kode kosong 2<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} else<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(y + &quot; &quot;);<br />
&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code></p>

<p><strong>Luaran:</strong><br />
<code>Exception in thread &quot;main&quot; java.lang.Error: Unresolved compilation problems:&nbsp;<br />
&nbsp;&nbsp; &nbsp;Syntax error on token &quot;&lt;=&quot;, = expected<br />
&nbsp;&nbsp; &nbsp;Type mismatch: cannot convert from double to boolean</code></p>

<p><code>&nbsp;&nbsp; &nbsp;at ContohFor.main(ContohFor.java:5)</code></p>

<p><strong>Contoh 2: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

<p><code>public class ForBersarang {&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;pertama:<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for( /* kondisi */) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;kedua:<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(/* kondisi */) {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;i = &quot; + i + &quot;; j = &quot; +j);<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (/* kondisi */) {<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;// kode yang hilang break atau continue<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} &nbsp;}&nbsp;&nbsp; &nbsp;} &nbsp; }</code></p>

<p><strong>Contoh 3: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

<p><code>import java.util.Scanner;</code></p>

<p><code>public class ForBersarang {<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;public static void main(String[] args){<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Instance Input Scanner<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner input = new Scanner(System.in);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukan Input: &quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int tinggi = input.nextInt(); //Mendapatkan Input Dari User<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int t=tinggi; t&gt;=1; t--){<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Menghitung Jumlah Tinggi Piramida<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int s=tinggi; s&gt;=t; s--){<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;//Menghitung Jumlah Spasi per Baris<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;*&quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(); //Membuat Baris Baru<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp;}</code></p>

<p><strong>Luaran:</strong></p>

<p><code>Masukan Input: 7</code><br />
<strong><code>*<br />
**<br />
***<br />
****<br />
*****<br />
******<br />
*******</code></strong></p>

<p><strong>Latihan 1</strong><br />
1.1.&nbsp;&nbsp; &nbsp; Evaluasi penyebab kesalahan dan perbaiki kode pada Contoh 1!<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Susun baris kode Contoh 1 untuk dapat menghasilkan luaran<br />
1<br />
3<br />
5<br />
7<br />
9</p>

<p>1.2.&nbsp;&nbsp; &nbsp;Cermati contoh kode 2 pada kode &nbsp;//baris kode kosong.<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode yang tepat untuk menghasilkan luaran berikut:<br />
Luaran Contoh 2:<br />
<code>i = 1; j = 1<br />
i = 1; j = 2<br />
i = 1; j = 3<br />
i = 2; j = 1<br />
i = 2; j = 2<br />
i = 2; j = 3</code></p>

<p>1.3.&nbsp;&nbsp; &nbsp;Cermati kode contoh 3.&nbsp; Susun kembali kode Contoh 3 untuk menghasilkan luaran berikut:<br />
Luaran berbentuk piramida<br />
<code>Masukan Input: 7<br />
&nbsp; &nbsp; &nbsp; &nbsp;*<br />
&nbsp; &nbsp; &nbsp; ***<br />
&nbsp; &nbsp; &nbsp;*****<br />
&nbsp; &nbsp; *******<br />
&nbsp; &nbsp;*********<br />
&nbsp; ***********<br />
&nbsp;*************</code><br />
&nbsp; &nbsp; &nbsp; &nbsp; Rekomendasikan kode untuk menghasilkan luaran tersebut!</p>

<p>1.4. &nbsp;Analisa diagram flowchart dari Latihan 1.2 dan 1.3!</p>

<h2><br />
<strong>UNIT 2 WHILE</strong></h2>

<p>Pernyataan <code>while</code> berguna untuk melakukan proses yang berulang. Pernyataan akan dijalankan terus menerus selama kondisi bernilai true (benar). Oleh karena itu, kita harus membuat kondisi suatu saat ungkapan bernilai salah agar perulangan berakhir.</p>

<p>Bentuk umum <code>While</code> seperti:</p>

<p><code>while (kondisi) {&nbsp;<br />
&nbsp; &nbsp; &nbsp; &nbsp; pernyataan;<br />
}</code></p>

<p><strong>Contoh 4:</strong> Salin dan tempel kode program berikut ke Eclipse.</p>

<p><code>public class ContohWhile{&nbsp;<br />
public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp;int i=1;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while(i&lt;=6){<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(i);<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;i++;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; if(i==4){ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; &nbsp; &nbsp; &nbsp; &nbsp;//ubah1&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}}}</code></p>

<p><strong>Luaran:</strong><br />
<code>1<br />
2<br />
3</code></p>

<p><strong>Contoh 5: </strong>Salin dan tempel kode program berikut ke Eclipse.&nbsp;</p>

<p><code>import java.util.Scanner;</code></p>

<p><code>public class ForBersarang {&nbsp;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner dataKata = new Scanner(System.in);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Kata yang ingin diulang : &quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;String kata = dataKata.nextLine();<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scanner dataJumlah = new Scanner(System.in);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;Masukkan Jumlah ingin diulang : &quot;);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int jumlah = dataJumlah.nextInt();<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;int i = 0; //Inisialisasi batas dasar<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;while(i &lt; jumlah){<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(kata);<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;i++;//Faktor pengulang Increment<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
}&nbsp;</code></p>

<p><strong>Luaran Contoh 5:</strong><br />
<code>Masukkan Kata yang ingin diulang : Fakultas Teknik<br />
Masukkan Jumlah ingin diulang : 5<br />
Fakultas Teknik<br />
Fakultas Teknik<br />
Fakultas Teknik<br />
Fakultas Teknik<br />
Fakultas Teknik</code></p>

<p>&nbsp;</p>

<p><strong>Latihan 2</strong></p>

<p>2.1. &nbsp;Cermati contoh kode 4. Apabila ingin menghasilkan luaran:<br />
&nbsp; &nbsp; &nbsp; &nbsp; 0<br />
&nbsp; &nbsp; &nbsp; &nbsp; 5<br />
&nbsp; &nbsp; &nbsp; &nbsp; 10<br />
&nbsp; &nbsp; &nbsp; &nbsp; 15<br />
&nbsp; &nbsp; &nbsp; &nbsp; Susun kembali kondisi pada kode Contoh 4 untuk menghasilkan luaran tersebut!</p>

<p>2.2. Cermati Contoh 1.<br />
&nbsp; &nbsp; &nbsp; &nbsp;Susun kembali kode dari <code>for </code>menjadi <code>do &ndash; while</code>. &nbsp;Periksa luaran, bila ketika di eksekusi!<br />
&nbsp; &nbsp; &nbsp; &nbsp;Kemudian, ubah jumlah yang ingin diulang = 0, &nbsp;periksa hasil luarannya!<br />
&nbsp; &nbsp; &nbsp; Simpulkan perulangan for dan do &ndash; while!&nbsp;</p>

<p>2.3. Bila diketahui kendaraan bermotor roda dua yang memiliki kapasitas dibawah 250 CC bisa menggunakan Pertalite.<br />
&nbsp; &nbsp; &nbsp; &nbsp;Sedangkan untuk kendaraan beroda dua mulai dari 250 CC ke atas menggunakan Pertamax.<br />
&nbsp; &nbsp; &nbsp; &nbsp;Susun kode untuk menampilkan perhitungan setiap liter (Pertalite atau Pertamax) yang dibeli pengguna sesuai kategori kapasitas CC kendaraan dan jumlah liter yang dimasukkan Pengguna!<br />
&nbsp; &nbsp; &nbsp; &nbsp;(Catatan: Gunakan IF dan While)</p>

<p>2.4.&nbsp;&nbsp; &nbsp; Rancang diagram flowchart dari Latihan 2.1, Latihan 2.2, dan Latihan 2.3!</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-for-dan-while-java-6866c3efca5da0d.pdf','url_materi' => 'https://www.youtube.com/watch?v=Ij9qLLblxEU','url_kedua_materi' => 'https://www.youtube.com/watch?v=ORA4JyJMFss','critical_status' => '2','created_at' => '2024-08-20 08:22:18','updated_at' => '2024-08-20 08:22:18'),
  array('id' => '120','topik_pembahasan_id' => '69','nama_materi' => 'Himpunan dan Fungsi Keanggotaan Fuzzy','isi_materi' => '<p><strong>Capaian Pembelajaran:</strong></p>

<p>Mampu memahami dan menjelaskan pengertian, konsep logika fuzzy dan himpunan terkait logika fuzzy [C2, C3 A3]</p>

<p>Materi:</p>

<ul>
	<li>Pengantar logika fuzzy</li>
	<li>Definisi dan konsep logika fuzzy</li>
	<li>Logika crisp</li>
	<li>Pentingnya logika fuzzy</li>
	<li>Himpunan dan fungsi keanggotaan fuzzy</li>
</ul>','file_materi' => NULL,'url_materi' => 'https://drive.google.com/file/d/1ie9lOl_T7UpR6M5tqaoZzGvQGjbSxdp9/view?usp=share_link','url_kedua_materi' => 'https://drive.google.com/file/d/1ie9lOl_T7UpR6M5tqaoZzGvQGjbSxdp9/view?usp=share_link','critical_status' => '0','created_at' => '2024-08-25 17:34:14','updated_at' => '2024-08-25 17:34:14'),
array('id' => '121','topik_pembahasan_id' => '70','nama_materi' => 'Fuzzy Inference System','isi_materi' => '<p>Materi dapat diunduh</p>','file_materi' => 'storage/file_materi/file_lama/198701272012122001-contentfile-fuzzy-inference-system-7066defe8d42e73.pdf','url_materi' => NULL,'url_kedua_materi' => NULL,'critical_status' => '0','created_at' => '2024-09-09 11:41:18','updated_at' => '2024-09-09 20:56:30'),
array('id' => '122','topik_pembahasan_id' => '70','nama_materi' => 'Fuzzy Inference System','isi_materi' => '<p>Materi dapat diunduh</p>','file_materi' => '198701272012122001-contentfile-fuzzy-inference-system-7067033c4d4fa64.pdf','url_materi' => NULL,'url_kedua_materi' => NULL,'critical_status' => '1','created_at' => '2024-10-07 08:41:33','updated_at' => '2024-10-07 08:41:33'),
array('id' => '123','topik_pembahasan_id' => '70','nama_materi' => 'Fuzzy Inference System','isi_materi' => '<p>Materi dapat diunduh</p>','file_materi' => '198701272012122001-contentfile-fuzzy-inference-system-7067033c664c757.pdf','url_materi' => NULL,'url_kedua_materi' => NULL,'critical_status' => '2','created_at' => '2024-10-07 08:41:58','updated_at' => '2024-10-07 08:41:58')
        );

        foreach ($materis as $materi) {
            DB::table('materis')->insert($materi);
        }
    }
}
