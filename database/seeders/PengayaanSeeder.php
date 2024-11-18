<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengayaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // SELECT id, pageId as materi_id, title as judul, content as isi_materi, created_at, updated_at FROM `pengayaans` WHERE 1;

        $datas = array(
            array('id' => '2','materi_id' => '71','judul' => 'Tipe Data - Materi Tambahan','isi_materi' => '<h2><strong>PENGAYAAN </strong><strong>&nbsp;1</strong></h2>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle. Perhatikan potongan kode berikut:<br />
          <code>public class TipeData{</code><br />
          <code>&nbsp; public static void main(String[] args)</code><code>&nbsp;{</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;byte terkecil= &quot; + Byte.<strong><em>MIN_VALUE</em></strong>);</code> <code>&nbsp;&nbsp;<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;byte terbesar= &quot; + Byte.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n short terkecil= &quot; + Short.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;short terbesar= &quot; + Short.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp;&nbsp;&nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n int terkecil= &quot; + Integer.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp;&nbsp;&nbsp; System.<strong><em>out</em></strong>.println(&quot;int terbesar= &quot; + Integer.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n long terkecil= &quot; + Long.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;long terbesar= &quot; + Long.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n float terkecil= &quot; + Float.<strong><em>MIN_VALUE</em></strong>);<br />
          &nbsp;</code><code>&nbsp; &nbsp;System.<strong><em>out</em></strong>.println(&quot;float terbesar= &quot; + Float.<strong><em>MAX_VALUE</em></strong>);<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n double terkecil= &quot; + Double.<strong><em>MIN_VALUE</em></strong>);<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;double terbesar= &quot; + Double.<strong><em>MAX_VALUE</em></strong>);<br />
          <br />
          &nbsp; &nbsp;&nbsp;int nilai1 = 200;<br />
          &nbsp; &nbsp;&nbsp;byte nilbyte = (byte) 200;<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n Nilai integer = &quot; + nilai1);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;Nilai byte= &quot; + nilbyte);</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<code>int nilai2 = -40000;<br />
          &nbsp; &nbsp;&nbsp;short nilshort = (short) nilai2;<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n Nilai integer = &quot; + nilai2);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;Nilai short= &quot; + nilshort);<br />
          }&nbsp; &nbsp; }</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>byte terkecil= -128<br />
          byte terbesar= 127</code></p>

          <p><code>short terkecil= -32768<br />
          short terbesar= 32767</code></p>

          <p><code>int terkecil= -2147483648<br />
          int terbesar= 2147483647</code></p>

          <p><code>long terkecil= -9223372036854775808<br />
          long terbesar= 9223372036854775807</code></p>

          <p><code>float terkecil= 1.4E-45<br />
          float terbesar= 3.4028235E38</code></p>

          <p><code>double terkecil= 4.9E-324<br />
          double terbesar= 1.7976931348623157E308</code></p>

          <p><code>Nilai integer = 200<br />
          Nilai byte= -56</code></p>

          <p><code>Nilai integer = -40000<br />
          Nilai short= 25536</code></p>

          <p><strong>Ayo berlatih!</strong></p>

          <ol>
              <li>Analisa pengaruh dari ukuran tipe data terhadap data yang akan diolah!</li>
              <li>Ubah nilai integer untuk short dan byte. Simpulkan perubahan yang terjadi!</li>
          </ol>

          <p>&nbsp;</p>

          <p><strong>PENGAYAAN 2</strong></p>

          <p>Setiap tipe data memiliki specifier yang berbeda, seperti berikut</p>

          <table cellspacing="0" style="border-collapse:collapse; width:607px">
              <tbody>
                  <tr>
                      <td style="border-bottom:1px; border-left:3px; border-right:1px; border-top:3px; height:2px; vertical-align:top; width:123px">
                      <p>S<code>pecifier</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:3px solid black; height:2px; vertical-align:top; width:181px">
                      <p><code>Deskripsi</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:3px solid black; height:2px; vertical-align:top; width:139px">
                      <p><code>Contoh</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:3px solid black; height:2px; vertical-align:top; width:164px">
                      <p><code>Luaran</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:25px; vertical-align:top; width:123px">
                      <p><code>%b</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:25px; vertical-align:top; width:181px">
                      <p><code>boolean</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:25px; vertical-align:top; width:139px">
                      <p><code>%6b</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:25px; vertical-align:top; width:164px">
                      <p><code>˽false</code></p>

                      <p><code>˽˽true</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%c</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>character</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%5c</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽˽˽a</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%d</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>integer</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%5d</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽˽69</code></p>

                      <p><code>1234567</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%f</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>Floating-point</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%5.2f</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽3.14</code></p>

                      <p><code>˽20.60</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%e</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>scientific</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%10.2e</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽3.14e+02</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:3px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%s</code></p>
                      </td>
                      <td style="border-bottom:3px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>string</code></p>
                      </td>
                      <td style="border-bottom:3px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%10s</code></p>
                      </td>
                      <td style="border-bottom:3px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽˽˽˽hello</code></p>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>&nbsp;</p>

          <p><strong>PENGAYAAN 3 </strong></p>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p>Perhatikan potongan kode berikut:</p>

          <p><code>public class TipeData{<br />
          &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp;&nbsp;double num = 1974.9215;<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println( &quot;number=1974.9215&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;Format |Position&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;String |01234567890123456789&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;----------+--------------------&quot; );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%-20f:&quot;, num );<br />
          <em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+-20f:&quot;, num );<br />
          &nbsp; &nbsp;&nbsp;<em>printFloatWithFormat</em>( &quot;%,-20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+-,20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%020f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+020f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,020f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,020f:&quot;,num);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;----------+--------------------&quot; );<br />
          }</code></p>

          <p><code>public static void printFloatWithFormat( String fmt, double v)<br />
          {<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.printf( &quot;%-10s|&quot;,fmt);<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.printf( fmt, v );<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.println();<br />
          }&nbsp; &nbsp;}</code></p>

          <p>Luaran:</p>

          <p><code>number=1974.9215<br />
          Format |Position<br />
          String |01234567890123456789<br />
          ----------+--------------------<br />
          %f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |1974.921500:<br />
          %+f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |+1974.921500:<br />
          %,f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |1,974.921500:<br />
          %+,f:&nbsp;&nbsp;&nbsp;&nbsp; |+1,974.921500:<br />
          %20f:&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1974.921500:<br />
          %+20f:&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +1974.921500:<br />
          %,20f:&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1,974.921500:<br />
          %+,20f:&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +1,974.921500:<br />
          %-20f:&nbsp;&nbsp;&nbsp; |1974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %+-20f:&nbsp;&nbsp; |+1974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %,-20f:&nbsp;&nbsp; |1,974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %+-,20f:&nbsp; |+1,974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %020f:&nbsp;&nbsp;&nbsp; |0000000001974.921500:<br />
          %+020f:&nbsp;&nbsp; |+000000001974.921500:<br />
          %,020f:&nbsp;&nbsp; |000000001,974.921500:<br />
          %+,020f:&nbsp; |+00000001,974.921500:<br />
          ----------+--------------------</code></p>

          <p><strong>Ayo berlatih!</strong></p>

          <ol>
              <li>Analisa pengaruh dari specifier terhadap data yang akan ditampung!</li>
              <li>Konstruksikan kode specifier untuk tipe data boolean, integer, string dengan masing-masing 3 contoh format specifier!</li>
          </ol>','created_at' => '2022-08-09 14:19:51','updated_at' => '2022-08-09 14:19:51'),
            array('id' => '4','materi_id' => '77','judul' => 'Tipe Data - Materi Tambahan','isi_materi' => '<h1><strong>PENGAYAAN </strong><strong>&nbsp;1</strong></h1>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle. Perhatikan potongan kode berikut:<br />
          <code>public class TipeData{</code><br />
          <code>&nbsp; public static void main(String[] args)</code><code>&nbsp;{</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;byte terkecil= &quot; + Byte.<strong><em>MIN_VALUE</em></strong>);</code> <code>&nbsp;&nbsp;<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;byte terbesar= &quot; + Byte.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n short terkecil= &quot; + Short.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;short terbesar= &quot; + Short.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp;&nbsp;&nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n int terkecil= &quot; + Integer.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp;&nbsp;&nbsp; System.<strong><em>out</em></strong>.println(&quot;int terbesar= &quot; + Integer.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n long terkecil= &quot; + Long.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;long terbesar= &quot; + Long.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n float terkecil= &quot; + Float.<strong><em>MIN_VALUE</em></strong>);<br />
          &nbsp;</code><code>&nbsp; &nbsp;System.<strong><em>out</em></strong>.println(&quot;float terbesar= &quot; + Float.<strong><em>MAX_VALUE</em></strong>);<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n double terkecil= &quot; + Double.<strong><em>MIN_VALUE</em></strong>);<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;double terbesar= &quot; + Double.<strong><em>MAX_VALUE</em></strong>);<br />
          <br />
          &nbsp; &nbsp;&nbsp;int nilai1 = 200;<br />
          &nbsp; &nbsp;&nbsp;byte nilbyte = (byte) 200;<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n Nilai integer = &quot; + nilai1);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;Nilai byte= &quot; + nilbyte);</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<code>int nilai2 = -40000;<br />
          &nbsp; &nbsp;&nbsp;short nilshort = (short) nilai2;<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n Nilai integer = &quot; + nilai2);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;Nilai short= &quot; + nilshort);<br />
          }&nbsp; &nbsp; }</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>byte terkecil= -128<br />
          byte terbesar= 127</code></p>

          <p><code>short terkecil= -32768<br />
          short terbesar= 32767</code></p>

          <p><code>int terkecil= -2147483648<br />
          int terbesar= 2147483647</code></p>

          <p><code>long terkecil= -9223372036854775808<br />
          long terbesar= 9223372036854775807</code></p>

          <p><code>float terkecil= 1.4E-45<br />
          float terbesar= 3.4028235E38</code></p>

          <p><code>double terkecil= 4.9E-324<br />
          double terbesar= 1.7976931348623157E308</code></p>

          <p><code>Nilai integer = 200<br />
          Nilai byte= -56</code></p>

          <p><code>Nilai integer = -40000<br />
          Nilai short= 25536</code></p>

          <p><strong>Ayo berlatih!</strong></p>

          <ol>
              <li>Analisa pengaruh dari ukuran tipe data terhadap data yang akan diolah!</li>
              <li>Ubah nilai integer untuk short dan byte. Simpulkan perubahan yang terjadi!</li>
          </ol>

          <p>&nbsp;</p>

          <p><strong>PENGAYAAN 2</strong></p>

          <p>Setiap tipe data memiliki specifier yang berbeda, seperti berikut</p>

          <table cellspacing="0" style="border-collapse:collapse; width:607px">
              <tbody>
                  <tr>
                      <td style="border-bottom:1px; border-left:3px; border-right:1px; border-top:3px; height:2px; vertical-align:top; width:123px">
                      <p>S<code>pecifier</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:3px solid black; height:2px; vertical-align:top; width:181px">
                      <p><code>Deskripsi</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:3px solid black; height:2px; vertical-align:top; width:139px">
                      <p><code>Contoh</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:3px solid black; height:2px; vertical-align:top; width:164px">
                      <p><code>Luaran</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:25px; vertical-align:top; width:123px">
                      <p><code>%b</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:25px; vertical-align:top; width:181px">
                      <p><code>boolean</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:25px; vertical-align:top; width:139px">
                      <p><code>%6b</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:25px; vertical-align:top; width:164px">
                      <p><code>˽false</code></p>

                      <p><code>˽˽true</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%c</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>character</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%5c</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽˽˽a</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%d</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>integer</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%5d</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽˽69</code></p>

                      <p><code>1234567</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%f</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>Floating-point</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%5.2f</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽3.14</code></p>

                      <p><code>˽20.60</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%e</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>scientific</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%10.2e</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽3.14e+02</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:3px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%s</code></p>
                      </td>
                      <td style="border-bottom:3px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>string</code></p>
                      </td>
                      <td style="border-bottom:3px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%10s</code></p>
                      </td>
                      <td style="border-bottom:3px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽˽˽˽hello</code></p>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>&nbsp;</p>

          <p><strong>PENGAYAAN 3 </strong></p>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p>Perhatikan potongan kode berikut:</p>

          <p><code>public class TipeData{<br />
          &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp;&nbsp;double num = 1974.9215;<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println( &quot;number=1974.9215&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;Format |Position&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;String |01234567890123456789&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;----------+--------------------&quot; );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%-20f:&quot;, num );<br />
          <em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+-20f:&quot;, num );<br />
          &nbsp; &nbsp;&nbsp;<em>printFloatWithFormat</em>( &quot;%,-20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+-,20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%020f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+020f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,020f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,020f:&quot;,num);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;----------+--------------------&quot; );<br />
          }</code></p>

          <p><code>public static void printFloatWithFormat( String fmt, double v)<br />
          {<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.printf( &quot;%-10s|&quot;,fmt);<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.printf( fmt, v );<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.println();<br />
          }&nbsp; &nbsp;}</code></p>

          <p>Luaran:</p>

          <p><code>number=1974.9215<br />
          Format |Position<br />
          String |01234567890123456789<br />
          ----------+--------------------<br />
          %f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |1974.921500:<br />
          %+f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |+1974.921500:<br />
          %,f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |1,974.921500:<br />
          %+,f:&nbsp;&nbsp;&nbsp;&nbsp; |+1,974.921500:<br />
          %20f:&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1974.921500:<br />
          %+20f:&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +1974.921500:<br />
          %,20f:&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1,974.921500:<br />
          %+,20f:&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +1,974.921500:<br />
          %-20f:&nbsp;&nbsp;&nbsp; |1974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %+-20f:&nbsp;&nbsp; |+1974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %,-20f:&nbsp;&nbsp; |1,974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %+-,20f:&nbsp; |+1,974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %020f:&nbsp;&nbsp;&nbsp; |0000000001974.921500:<br />
          %+020f:&nbsp;&nbsp; |+000000001974.921500:<br />
          %,020f:&nbsp;&nbsp; |000000001,974.921500:<br />
          %+,020f:&nbsp; |+00000001,974.921500:<br />
          ----------+--------------------</code></p>

          <p><strong>Ayo berlatih!</strong></p>

          <ol>
              <li>Analisa pengaruh dari specifier terhadap data yang akan ditampung!</li>
              <li>Konstruksikan kode specifier untuk tipe data boolean, integer, string dengan masing-masing 3 contoh format specifier!</li>
          </ol>

          <p>&quot;</p>','created_at' => '2022-08-11 19:57:21','updated_at' => '2022-08-11 19:57:21'),
            array('id' => '6','materi_id' => '74','judul' => 'Tipe Data - Materi Tambahan','isi_materi' => '<h1><strong>PENGAYAAN </strong><strong>&nbsp;1</strong></h1>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle. Perhatikan potongan kode berikut:<br />
          <code>public class TipeData{</code><br />
          <code>&nbsp; public static void main(String[] args)</code><code>&nbsp;{</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;byte terkecil= &quot; + Byte.<strong><em>MIN_VALUE</em></strong>);</code> <code>&nbsp;&nbsp;<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;byte terbesar= &quot; + Byte.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n short terkecil= &quot; + Short.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;short terbesar= &quot; + Short.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp;&nbsp;&nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n int terkecil= &quot; + Integer.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp;&nbsp;&nbsp; System.<strong><em>out</em></strong>.println(&quot;int terbesar= &quot; + Integer.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n long terkecil= &quot; + Long.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;long terbesar= &quot; + Long.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n float terkecil= &quot; + Float.<strong><em>MIN_VALUE</em></strong>);<br />
          &nbsp;</code><code>&nbsp; &nbsp;System.<strong><em>out</em></strong>.println(&quot;float terbesar= &quot; + Float.<strong><em>MAX_VALUE</em></strong>);<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n double terkecil= &quot; + Double.<strong><em>MIN_VALUE</em></strong>);<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;double terbesar= &quot; + Double.<strong><em>MAX_VALUE</em></strong>);<br />
          <br />
          &nbsp; &nbsp;&nbsp;int nilai1 = 200;<br />
          &nbsp; &nbsp;&nbsp;byte nilbyte = (byte) 200;<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n Nilai integer = &quot; + nilai1);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;Nilai byte= &quot; + nilbyte);</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<code>int nilai2 = -40000;<br />
          &nbsp; &nbsp;&nbsp;short nilshort = (short) nilai2;<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n Nilai integer = &quot; + nilai2);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;Nilai short= &quot; + nilshort);<br />
          }&nbsp; &nbsp; }</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>byte terkecil= -128<br />
          byte terbesar= 127</code></p>

          <p><code>short terkecil= -32768<br />
          short terbesar= 32767</code></p>

          <p><code>int terkecil= -2147483648<br />
          int terbesar= 2147483647</code></p>

          <p><code>long terkecil= -9223372036854775808<br />
          long terbesar= 9223372036854775807</code></p>

          <p><code>float terkecil= 1.4E-45<br />
          float terbesar= 3.4028235E38</code></p>

          <p><code>double terkecil= 4.9E-324<br />
          double terbesar= 1.7976931348623157E308</code></p>

          <p><code>Nilai integer = 200<br />
          Nilai byte= -56</code></p>

          <p><code>Nilai integer = -40000<br />
          Nilai short= 25536</code></p>

          <p><strong>Ayo berlatih!</strong></p>

          <ol>
              <li>Analisa pengaruh dari ukuran tipe data terhadap data yang akan diolah!</li>
              <li>Ubah nilai integer untuk short dan byte. Simpulkan perubahan yang terjadi!</li>
          </ol>

          <p>&nbsp;</p>

          <p><strong>PENGAYAAN 2</strong></p>

          <p>Setiap tipe data memiliki specifier yang berbeda, seperti berikut</p>

          <table cellspacing="0" style="border-collapse:collapse; width:607px">
              <tbody>
                  <tr>
                      <td style="border-bottom:1px; border-left:3px; border-right:1px; border-top:3px; height:2px; vertical-align:top; width:123px">
                      <p>S<code>pecifier</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:3px solid black; height:2px; vertical-align:top; width:181px">
                      <p><code>Deskripsi</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:3px solid black; height:2px; vertical-align:top; width:139px">
                      <p><code>Contoh</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:3px solid black; height:2px; vertical-align:top; width:164px">
                      <p><code>Luaran</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:25px; vertical-align:top; width:123px">
                      <p><code>%b</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:25px; vertical-align:top; width:181px">
                      <p><code>boolean</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:25px; vertical-align:top; width:139px">
                      <p><code>%6b</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:25px; vertical-align:top; width:164px">
                      <p><code>˽false</code></p>

                      <p><code>˽˽true</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%c</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>character</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%5c</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽˽˽a</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%d</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>integer</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%5d</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽˽69</code></p>

                      <p><code>1234567</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%f</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>Floating-point</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%5.2f</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽3.14</code></p>

                      <p><code>˽20.60</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%e</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>scientific</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%10.2e</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽3.14e+02</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:3px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%s</code></p>
                      </td>
                      <td style="border-bottom:3px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>string</code></p>
                      </td>
                      <td style="border-bottom:3px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%10s</code></p>
                      </td>
                      <td style="border-bottom:3px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽˽˽˽hello</code></p>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>&nbsp;</p>

          <p><strong>PENGAYAAN 3 </strong></p>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p>Perhatikan potongan kode berikut:</p>

          <p><code>public class TipeData{<br />
          &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp;&nbsp;double num = 1974.9215;<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println( &quot;number=1974.9215&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;Format |Position&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;String |01234567890123456789&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;----------+--------------------&quot; );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%-20f:&quot;, num );<br />
          <em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+-20f:&quot;, num );<br />
          &nbsp; &nbsp;&nbsp;<em>printFloatWithFormat</em>( &quot;%,-20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+-,20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%020f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+020f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,020f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,020f:&quot;,num);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;----------+--------------------&quot; );<br />
          }</code></p>

          <p><code>public static void printFloatWithFormat( String fmt, double v)<br />
          {<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.printf( &quot;%-10s|&quot;,fmt);<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.printf( fmt, v );<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.println();<br />
          }&nbsp; &nbsp;}</code></p>

          <p>Luaran:</p>

          <p><code>number=1974.9215<br />
          Format |Position<br />
          String |01234567890123456789<br />
          ----------+--------------------<br />
          %f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |1974.921500:<br />
          %+f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |+1974.921500:<br />
          %,f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |1,974.921500:<br />
          %+,f:&nbsp;&nbsp;&nbsp;&nbsp; |+1,974.921500:<br />
          %20f:&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1974.921500:<br />
          %+20f:&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +1974.921500:<br />
          %,20f:&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1,974.921500:<br />
          %+,20f:&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +1,974.921500:<br />
          %-20f:&nbsp;&nbsp;&nbsp; |1974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %+-20f:&nbsp;&nbsp; |+1974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %,-20f:&nbsp;&nbsp; |1,974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %+-,20f:&nbsp; |+1,974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %020f:&nbsp;&nbsp;&nbsp; |0000000001974.921500:<br />
          %+020f:&nbsp;&nbsp; |+000000001974.921500:<br />
          %,020f:&nbsp;&nbsp; |000000001,974.921500:<br />
          %+,020f:&nbsp; |+00000001,974.921500:<br />
          ----------+--------------------</code></p>

          <p><strong>Ayo berlatih!</strong></p>

          <ol>
              <li>Analisa pengaruh dari specifier terhadap data yang akan ditampung!</li>
              <li>Konstruksikan kode specifier untuk tipe data boolean, integer, string dengan masing-masing 3 contoh format specifier!</li>
          </ol>

          <p>&quot;</p>','created_at' => '2022-08-16 17:55:56','updated_at' => '2022-08-16 17:55:56'),
            array('id' => '7','materi_id' => '75','judul' => 'Tipe Data - Materi Tambahan','isi_materi' => '<h1><strong>PENGAYAAN </strong><strong>&nbsp;1</strong></h1>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle. Perhatikan potongan kode berikut:<br />
          <code>public class TipeData{</code><br />
          <code>&nbsp; public static void main(String[] args)</code><code>&nbsp;{</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;byte terkecil= &quot; + Byte.<strong><em>MIN_VALUE</em></strong>);</code> <code>&nbsp;&nbsp;<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;byte terbesar= &quot; + Byte.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n short terkecil= &quot; + Short.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;short terbesar= &quot; + Short.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp;&nbsp;&nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n int terkecil= &quot; + Integer.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp;&nbsp;&nbsp; System.<strong><em>out</em></strong>.println(&quot;int terbesar= &quot; + Integer.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n long terkecil= &quot; + Long.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;long terbesar= &quot; + Long.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n float terkecil= &quot; + Float.<strong><em>MIN_VALUE</em></strong>);<br />
          &nbsp;</code><code>&nbsp; &nbsp;System.<strong><em>out</em></strong>.println(&quot;float terbesar= &quot; + Float.<strong><em>MAX_VALUE</em></strong>);<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n double terkecil= &quot; + Double.<strong><em>MIN_VALUE</em></strong>);<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;double terbesar= &quot; + Double.<strong><em>MAX_VALUE</em></strong>);<br />
          <br />
          &nbsp; &nbsp;&nbsp;int nilai1 = 200;<br />
          &nbsp; &nbsp;&nbsp;byte nilbyte = (byte) 200;<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n Nilai integer = &quot; + nilai1);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;Nilai byte= &quot; + nilbyte);</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<code>int nilai2 = -40000;<br />
          &nbsp; &nbsp;&nbsp;short nilshort = (short) nilai2;<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n Nilai integer = &quot; + nilai2);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;Nilai short= &quot; + nilshort);<br />
          }&nbsp; &nbsp; }</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>byte terkecil= -128<br />
          byte terbesar= 127</code></p>

          <p><code>short terkecil= -32768<br />
          short terbesar= 32767</code></p>

          <p><code>int terkecil= -2147483648<br />
          int terbesar= 2147483647</code></p>

          <p><code>long terkecil= -9223372036854775808<br />
          long terbesar= 9223372036854775807</code></p>

          <p><code>float terkecil= 1.4E-45<br />
          float terbesar= 3.4028235E38</code></p>

          <p><code>double terkecil= 4.9E-324<br />
          double terbesar= 1.7976931348623157E308</code></p>

          <p><code>Nilai integer = 200<br />
          Nilai byte= -56</code></p>

          <p><code>Nilai integer = -40000<br />
          Nilai short= 25536</code></p>

          <p><strong>Ayo berlatih!</strong></p>

          <ol>
              <li>Analisa pengaruh dari ukuran tipe data terhadap data yang akan diolah!</li>
              <li>Ubah nilai integer untuk short dan byte. Simpulkan perubahan yang terjadi!</li>
          </ol>

          <p>&nbsp;</p>

          <p><strong>PENGAYAAN 2</strong></p>

          <p>Setiap tipe data memiliki specifier yang berbeda, seperti berikut</p>

          <table cellspacing="0" style="border-collapse:collapse; width:607px">
              <tbody>
                  <tr>
                      <td style="border-bottom:1px; border-left:3px; border-right:1px; border-top:3px; height:2px; vertical-align:top; width:123px">
                      <p>S<code>pecifier</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:3px solid black; height:2px; vertical-align:top; width:181px">
                      <p><code>Deskripsi</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:3px solid black; height:2px; vertical-align:top; width:139px">
                      <p><code>Contoh</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:3px solid black; height:2px; vertical-align:top; width:164px">
                      <p><code>Luaran</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:25px; vertical-align:top; width:123px">
                      <p><code>%b</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:25px; vertical-align:top; width:181px">
                      <p><code>boolean</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:25px; vertical-align:top; width:139px">
                      <p><code>%6b</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:25px; vertical-align:top; width:164px">
                      <p><code>˽false</code></p>

                      <p><code>˽˽true</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%c</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>character</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%5c</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽˽˽a</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%d</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>integer</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%5d</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽˽69</code></p>

                      <p><code>1234567</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%f</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>Floating-point</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%5.2f</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽3.14</code></p>

                      <p><code>˽20.60</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%e</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>scientific</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%10.2e</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽3.14e+02</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:3px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%s</code></p>
                      </td>
                      <td style="border-bottom:3px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>string</code></p>
                      </td>
                      <td style="border-bottom:3px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%10s</code></p>
                      </td>
                      <td style="border-bottom:3px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽˽˽˽hello</code></p>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>&nbsp;</p>

          <p><strong>PENGAYAAN 3 </strong></p>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p>Perhatikan potongan kode berikut:</p>

          <p><code>public class TipeData{<br />
          &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp;&nbsp;double num = 1974.9215;<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println( &quot;number=1974.9215&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;Format |Position&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;String |01234567890123456789&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;----------+--------------------&quot; );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%-20f:&quot;, num );<br />
          <em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+-20f:&quot;, num );<br />
          &nbsp; &nbsp;&nbsp;<em>printFloatWithFormat</em>( &quot;%,-20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+-,20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%020f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+020f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,020f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,020f:&quot;,num);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;----------+--------------------&quot; );<br />
          }</code></p>

          <p><code>public static void printFloatWithFormat( String fmt, double v)<br />
          {<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.printf( &quot;%-10s|&quot;,fmt);<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.printf( fmt, v );<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.println();<br />
          }&nbsp; &nbsp;}</code></p>

          <p>Luaran:</p>

          <p><code>number=1974.9215<br />
          Format |Position<br />
          String |01234567890123456789<br />
          ----------+--------------------<br />
          %f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |1974.921500:<br />
          %+f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |+1974.921500:<br />
          %,f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |1,974.921500:<br />
          %+,f:&nbsp;&nbsp;&nbsp;&nbsp; |+1,974.921500:<br />
          %20f:&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1974.921500:<br />
          %+20f:&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +1974.921500:<br />
          %,20f:&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1,974.921500:<br />
          %+,20f:&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +1,974.921500:<br />
          %-20f:&nbsp;&nbsp;&nbsp; |1974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %+-20f:&nbsp;&nbsp; |+1974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %,-20f:&nbsp;&nbsp; |1,974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %+-,20f:&nbsp; |+1,974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %020f:&nbsp;&nbsp;&nbsp; |0000000001974.921500:<br />
          %+020f:&nbsp;&nbsp; |+000000001974.921500:<br />
          %,020f:&nbsp;&nbsp; |000000001,974.921500:<br />
          %+,020f:&nbsp; |+00000001,974.921500:<br />
          ----------+--------------------</code></p>

          <p><strong>Ayo berlatih!</strong></p>

          <ol>
              <li>Analisa pengaruh dari specifier terhadap data yang akan ditampung!</li>
              <li>Konstruksikan kode specifier untuk tipe data boolean, integer, string dengan masing-masing 3 contoh format specifier!</li>
          </ol>

          <p>&quot;</p>','created_at' => '2022-08-16 17:56:41','updated_at' => '2022-08-16 17:56:41'),
            array('id' => '8','materi_id' => '73','judul' => 'Tipe Data - Materi Tambahan','isi_materi' => '<h1><strong>PENGAYAAN </strong><strong>&nbsp;1</strong></h1>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle. Perhatikan potongan kode berikut:<br />
          <code>public class TipeData{</code><br />
          <code>&nbsp; public static void main(String[] args)</code><code>&nbsp;{</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;byte terkecil= &quot; + Byte.<strong><em>MIN_VALUE</em></strong>);</code> <code>&nbsp;&nbsp;<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;byte terbesar= &quot; + Byte.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n short terkecil= &quot; + Short.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;short terbesar= &quot; + Short.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp;&nbsp;&nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n int terkecil= &quot; + Integer.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp;&nbsp;&nbsp; System.<strong><em>out</em></strong>.println(&quot;int terbesar= &quot; + Integer.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n long terkecil= &quot; + Long.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;long terbesar= &quot; + Long.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n float terkecil= &quot; + Float.<strong><em>MIN_VALUE</em></strong>);<br />
          &nbsp;</code><code>&nbsp; &nbsp;System.<strong><em>out</em></strong>.println(&quot;float terbesar= &quot; + Float.<strong><em>MAX_VALUE</em></strong>);<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n double terkecil= &quot; + Double.<strong><em>MIN_VALUE</em></strong>);<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;double terbesar= &quot; + Double.<strong><em>MAX_VALUE</em></strong>);<br />
          <br />
          &nbsp; &nbsp;&nbsp;int nilai1 = 200;<br />
          &nbsp; &nbsp;&nbsp;byte nilbyte = (byte) 200;<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n Nilai integer = &quot; + nilai1);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;Nilai byte= &quot; + nilbyte);</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<code>int nilai2 = -40000;<br />
          &nbsp; &nbsp;&nbsp;short nilshort = (short) nilai2;<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n Nilai integer = &quot; + nilai2);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;Nilai short= &quot; + nilshort);<br />
          }&nbsp; &nbsp; }</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>byte terkecil= -128<br />
          byte terbesar= 127</code></p>

          <p><code>short terkecil= -32768<br />
          short terbesar= 32767</code></p>

          <p><code>int terkecil= -2147483648<br />
          int terbesar= 2147483647</code></p>

          <p><code>long terkecil= -9223372036854775808<br />
          long terbesar= 9223372036854775807</code></p>

          <p><code>float terkecil= 1.4E-45<br />
          float terbesar= 3.4028235E38</code></p>

          <p><code>double terkecil= 4.9E-324<br />
          double terbesar= 1.7976931348623157E308</code></p>

          <p><code>Nilai integer = 200<br />
          Nilai byte= -56</code></p>

          <p><code>Nilai integer = -40000<br />
          Nilai short= 25536</code></p>

          <p><strong>Ayo berlatih!</strong></p>

          <ol>
              <li>Analisa pengaruh dari ukuran tipe data terhadap data yang akan diolah!</li>
              <li>Ubah nilai integer untuk short dan byte. Simpulkan perubahan yang terjadi!</li>
          </ol>

          <p>&nbsp;</p>

          <p><strong>PENGAYAAN 2</strong></p>

          <p>Setiap tipe data memiliki specifier yang berbeda, seperti berikut</p>

          <table cellspacing="0" style="border-collapse:collapse; width:607px">
              <tbody>
                  <tr>
                      <td style="border-bottom:1px; border-left:3px; border-right:1px; border-top:3px; height:2px; vertical-align:top; width:123px">
                      <p>S<code>pecifier</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:3px solid black; height:2px; vertical-align:top; width:181px">
                      <p><code>Deskripsi</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:3px solid black; height:2px; vertical-align:top; width:139px">
                      <p><code>Contoh</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:3px solid black; height:2px; vertical-align:top; width:164px">
                      <p><code>Luaran</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:25px; vertical-align:top; width:123px">
                      <p><code>%b</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:25px; vertical-align:top; width:181px">
                      <p><code>boolean</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:25px; vertical-align:top; width:139px">
                      <p><code>%6b</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:25px; vertical-align:top; width:164px">
                      <p><code>˽false</code></p>

                      <p><code>˽˽true</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%c</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>character</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%5c</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽˽˽a</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%d</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>integer</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%5d</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽˽69</code></p>

                      <p><code>1234567</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%f</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>Floating-point</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%5.2f</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽3.14</code></p>

                      <p><code>˽20.60</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%e</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>scientific</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%10.2e</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽3.14e+02</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:3px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%s</code></p>
                      </td>
                      <td style="border-bottom:3px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>string</code></p>
                      </td>
                      <td style="border-bottom:3px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%10s</code></p>
                      </td>
                      <td style="border-bottom:3px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽˽˽˽hello</code></p>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>&nbsp;</p>

          <p><strong>PENGAYAAN 3 </strong></p>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p>Perhatikan potongan kode berikut:</p>

          <p><code>public class TipeData{<br />
          &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp;&nbsp;double num = 1974.9215;<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println( &quot;number=1974.9215&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;Format |Position&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;String |01234567890123456789&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;----------+--------------------&quot; );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%-20f:&quot;, num );<br />
          <em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+-20f:&quot;, num );<br />
          &nbsp; &nbsp;&nbsp;<em>printFloatWithFormat</em>( &quot;%,-20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+-,20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%020f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+020f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,020f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,020f:&quot;,num);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;----------+--------------------&quot; );<br />
          }</code></p>

          <p><code>public static void printFloatWithFormat( String fmt, double v)<br />
          {<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.printf( &quot;%-10s|&quot;,fmt);<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.printf( fmt, v );<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.println();<br />
          }&nbsp; &nbsp;}</code></p>

          <p>Luaran:</p>

          <p><code>number=1974.9215<br />
          Format |Position<br />
          String |01234567890123456789<br />
          ----------+--------------------<br />
          %f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |1974.921500:<br />
          %+f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |+1974.921500:<br />
          %,f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |1,974.921500:<br />
          %+,f:&nbsp;&nbsp;&nbsp;&nbsp; |+1,974.921500:<br />
          %20f:&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1974.921500:<br />
          %+20f:&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +1974.921500:<br />
          %,20f:&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1,974.921500:<br />
          %+,20f:&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +1,974.921500:<br />
          %-20f:&nbsp;&nbsp;&nbsp; |1974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %+-20f:&nbsp;&nbsp; |+1974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %,-20f:&nbsp;&nbsp; |1,974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %+-,20f:&nbsp; |+1,974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %020f:&nbsp;&nbsp;&nbsp; |0000000001974.921500:<br />
          %+020f:&nbsp;&nbsp; |+000000001974.921500:<br />
          %,020f:&nbsp;&nbsp; |000000001,974.921500:<br />
          %+,020f:&nbsp; |+00000001,974.921500:<br />
          ----------+--------------------</code></p>

          <p><strong>Ayo berlatih!</strong></p>

          <ol>
              <li>Analisa pengaruh dari specifier terhadap data yang akan ditampung!</li>
              <li>Konstruksikan kode specifier untuk tipe data boolean, integer, string dengan masing-masing 3 contoh format specifier!</li>
          </ol>

          <p>&quot;</p>','created_at' => '2022-08-16 17:58:49','updated_at' => '2022-08-16 17:58:49'),
            array('id' => '9','materi_id' => '76','judul' => 'Tipe Data - Materi Tambahan','isi_materi' => '<h1><strong>PENGAYAAN </strong><strong>&nbsp;1</strong></h1>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle. Perhatikan potongan kode berikut:<br />
          <code>public class TipeData{</code><br />
          <code>&nbsp; public static void main(String[] args)</code><code>&nbsp;{</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;byte terkecil= &quot; + Byte.<strong><em>MIN_VALUE</em></strong>);</code> <code>&nbsp;&nbsp;<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;byte terbesar= &quot; + Byte.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n short terkecil= &quot; + Short.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;short terbesar= &quot; + Short.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp;&nbsp;&nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n int terkecil= &quot; + Integer.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp;&nbsp;&nbsp; System.<strong><em>out</em></strong>.println(&quot;int terbesar= &quot; + Integer.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n long terkecil= &quot; + Long.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;long terbesar= &quot; + Long.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n float terkecil= &quot; + Float.<strong><em>MIN_VALUE</em></strong>);<br />
          &nbsp;</code><code>&nbsp; &nbsp;System.<strong><em>out</em></strong>.println(&quot;float terbesar= &quot; + Float.<strong><em>MAX_VALUE</em></strong>);<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n double terkecil= &quot; + Double.<strong><em>MIN_VALUE</em></strong>);<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;double terbesar= &quot; + Double.<strong><em>MAX_VALUE</em></strong>);<br />
          <br />
          &nbsp; &nbsp;&nbsp;int nilai1 = 200;<br />
          &nbsp; &nbsp;&nbsp;byte nilbyte = (byte) 200;<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n Nilai integer = &quot; + nilai1);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;Nilai byte= &quot; + nilbyte);</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<code>int nilai2 = -40000;<br />
          &nbsp; &nbsp;&nbsp;short nilshort = (short) nilai2;<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n Nilai integer = &quot; + nilai2);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;Nilai short= &quot; + nilshort);<br />
          }&nbsp; &nbsp; }</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>byte terkecil= -128<br />
          byte terbesar= 127</code></p>

          <p><code>short terkecil= -32768<br />
          short terbesar= 32767</code></p>

          <p><code>int terkecil= -2147483648<br />
          int terbesar= 2147483647</code></p>

          <p><code>long terkecil= -9223372036854775808<br />
          long terbesar= 9223372036854775807</code></p>

          <p><code>float terkecil= 1.4E-45<br />
          float terbesar= 3.4028235E38</code></p>

          <p><code>double terkecil= 4.9E-324<br />
          double terbesar= 1.7976931348623157E308</code></p>

          <p><code>Nilai integer = 200<br />
          Nilai byte= -56</code></p>

          <p><code>Nilai integer = -40000<br />
          Nilai short= 25536</code></p>

          <p><strong>Ayo berlatih!</strong></p>

          <ol>
              <li>Analisa pengaruh dari ukuran tipe data terhadap data yang akan diolah!</li>
              <li>Ubah nilai integer untuk short dan byte. Simpulkan perubahan yang terjadi!</li>
          </ol>

          <p>&nbsp;</p>

          <p><strong>PENGAYAAN 2</strong></p>

          <p>Setiap tipe data memiliki specifier yang berbeda, seperti berikut</p>

          <table cellspacing="0" style="border-collapse:collapse; width:607px">
              <tbody>
                  <tr>
                      <td style="border-bottom:1px; border-left:3px; border-right:1px; border-top:3px; height:2px; vertical-align:top; width:123px">
                      <p>S<code>pecifier</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:3px solid black; height:2px; vertical-align:top; width:181px">
                      <p><code>Deskripsi</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:3px solid black; height:2px; vertical-align:top; width:139px">
                      <p><code>Contoh</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:3px solid black; height:2px; vertical-align:top; width:164px">
                      <p><code>Luaran</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:25px; vertical-align:top; width:123px">
                      <p><code>%b</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:25px; vertical-align:top; width:181px">
                      <p><code>boolean</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:25px; vertical-align:top; width:139px">
                      <p><code>%6b</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:25px; vertical-align:top; width:164px">
                      <p><code>˽false</code></p>

                      <p><code>˽˽true</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%c</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>character</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%5c</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽˽˽a</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%d</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>integer</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%5d</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽˽69</code></p>

                      <p><code>1234567</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%f</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>Floating-point</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%5.2f</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽3.14</code></p>

                      <p><code>˽20.60</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:1px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%e</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>scientific</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%10.2e</code></p>
                      </td>
                      <td style="border-bottom:1px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽3.14e+02</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td style="border-bottom:3px solid black; border-left:3px solid black; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:123px">
                      <p><code>%s</code></p>
                      </td>
                      <td style="border-bottom:3px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:181px">
                      <p><code>string</code></p>
                      </td>
                      <td style="border-bottom:3px solid black; border-left:none; border-right:1px solid black; border-top:none; height:.12px; vertical-align:top; width:139px">
                      <p><code>%10s</code></p>
                      </td>
                      <td style="border-bottom:3px solid black; border-left:none; border-right:3px solid black; border-top:none; height:.12px; vertical-align:top; width:164px">
                      <p><code>˽˽˽˽˽hello</code></p>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>&nbsp;</p>

          <p><strong>PENGAYAAN 3 </strong></p>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p>Perhatikan potongan kode berikut:</p>

          <p><code>public class TipeData{<br />
          &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp;&nbsp;double num = 1974.9215;<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println( &quot;number=1974.9215&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;Format |Position&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;String |01234567890123456789&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;----------+--------------------&quot; );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%-20f:&quot;, num );<br />
          <em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+-20f:&quot;, num );<br />
          &nbsp; &nbsp;&nbsp;<em>printFloatWithFormat</em>( &quot;%,-20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+-,20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%020f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+020f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,020f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,020f:&quot;,num);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;----------+--------------------&quot; );<br />
          }</code></p>

          <p><code>public static void printFloatWithFormat( String fmt, double v)<br />
          {<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.printf( &quot;%-10s|&quot;,fmt);<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.printf( fmt, v );<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.println();<br />
          }&nbsp; &nbsp;}</code></p>

          <p>Luaran:</p>

          <p><code>number=1974.9215<br />
          Format |Position<br />
          String |01234567890123456789<br />
          ----------+--------------------<br />
          %f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |1974.921500:<br />
          %+f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |+1974.921500:<br />
          %,f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |1,974.921500:<br />
          %+,f:&nbsp;&nbsp;&nbsp;&nbsp; |+1,974.921500:<br />
          %20f:&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1974.921500:<br />
          %+20f:&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +1974.921500:<br />
          %,20f:&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1,974.921500:<br />
          %+,20f:&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +1,974.921500:<br />
          %-20f:&nbsp;&nbsp;&nbsp; |1974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %+-20f:&nbsp;&nbsp; |+1974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %,-20f:&nbsp;&nbsp; |1,974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %+-,20f:&nbsp; |+1,974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %020f:&nbsp;&nbsp;&nbsp; |0000000001974.921500:<br />
          %+020f:&nbsp;&nbsp; |+000000001974.921500:<br />
          %,020f:&nbsp;&nbsp; |000000001,974.921500:<br />
          %+,020f:&nbsp; |+00000001,974.921500:<br />
          ----------+--------------------</code></p>

          <p><strong>Ayo berlatih!</strong></p>

          <ol>
              <li>Analisa pengaruh dari specifier terhadap data yang akan ditampung!</li>
              <li>Konstruksikan kode specifier untuk tipe data boolean, integer, string dengan masing-masing 3 contoh format specifier!</li>
          </ol>

          <p>&quot;</p>','created_at' => '2022-08-16 17:59:11','updated_at' => '2022-08-16 17:59:11'),
            array('id' => '10','materi_id' => '81','judul' => 'Materi Tambahan (Tidak Wajib)','isi_materi' => '<h3><strong>PENGAYAAN 1</strong></h3>

          <p>Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p>Perhatikan potongan kode berikut:</p>

          <p><code>class Main{ &nbsp; &nbsp; &nbsp;<br />
          &nbsp; &nbsp; public static boolean F(int a,int b,int c){&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; return !(a&gt;c) &amp;&amp; b &gt; c;<br />
          &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; public static void main(String[] args) { &nbsp; &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(1,2,3));<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(3,2,1));<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(3,3,3));<br />
          &nbsp; &nbsp; } &nbsp; &nbsp; &nbsp;}</code><br />
          <strong>Luaran:</strong><br />
          <code>false<br />
          false<br />
          false</code></p>

          <p><strong>Ayo berlatih!</strong><br />
          1. Uraikan urutan penyelesaian masalah <code>(!(a&gt;c) &amp;&amp; b &gt; c) </code>berdasarkan prioritas operator!<br />
          2. Susun kembali nilai F agar menghasilkan nilai TRUE!<br />
          <br />
          &nbsp;</p>

          <h3><strong>PENGAYAAN 2</strong></h3>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.<br />
          Perhatikan potongan kode berikut:</p>

          <p><code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; System.out.println(3+4*4&gt;1+5*(4-2)||5&lt;7);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:</strong><br />
          <code>True</code></p>

          <p><strong>Ayo berlatih!</strong><br />
          1.&nbsp;&nbsp; &nbsp;Uraikan ekspresi tersebut hingga mendapatkan kesimpulan TRUE!<br />
          2.&nbsp;&nbsp; &nbsp;Susun ekspresi yang berbeda untuk menghasilkan kesimpulan FALSE!<br />
          &nbsp;</p>','created_at' => '2022-08-25 13:53:27','updated_at' => '2022-08-25 13:53:27'),
            array('id' => '11','materi_id' => '83','judul' => 'Materi Tambahan (Tidak Wajib)','isi_materi' => '<h3><strong>PENGAYAAN 1</strong></h3>

          <p>Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p>Perhatikan potongan kode berikut:</p>

          <p><code>class Main{ &nbsp; &nbsp; &nbsp;<br />
          &nbsp; &nbsp; public static boolean F(int a,int b,int c){&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; return !(a&gt;c) &amp;&amp; b &gt; c;<br />
          &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; public static void main(String[] args) { &nbsp; &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(1,2,3));<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(3,2,1));<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(3,3,3));<br />
          &nbsp; &nbsp; } &nbsp; &nbsp; &nbsp;}</code><br />
          <strong>Luaran:</strong><br />
          <code>false<br />
          false<br />
          false</code></p>

          <p><strong>Ayo berlatih!</strong><br />
          1. Uraikan urutan penyelesaian masalah <code>(!(a&gt;c) &amp;&amp; b &gt; c) </code>berdasarkan prioritas operator!<br />
          2. Susun kembali nilai F agar menghasilkan nilai TRUE!<br />
          <br />
          &nbsp;</p>

          <h3><strong>PENGAYAAN 2</strong></h3>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.<br />
          Perhatikan potongan kode berikut:</p>

          <p><code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; System.out.println(3+4*4&gt;1+5*(4-2)||5&lt;7);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:</strong><br />
          <code>True</code></p>

          <p><strong>Ayo berlatih!</strong><br />
          1.&nbsp;&nbsp; &nbsp;Uraikan ekspresi tersebut hingga mendapatkan kesimpulan TRUE!<br />
          2.&nbsp;&nbsp; &nbsp;Susun ekspresi yang berbeda untuk menghasilkan kesimpulan FALSE!<br />
          &nbsp;</p>','created_at' => '2022-08-25 13:54:40','updated_at' => '2022-08-25 13:54:40'),
            array('id' => '12','materi_id' => '85','judul' => 'Materi Tambahan (Tidak Wajib)','isi_materi' => '<h3><strong>PENGAYAAN 1</strong></h3>

          <p>Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p>Perhatikan potongan kode berikut:</p>

          <p><code>class Main{ &nbsp; &nbsp; &nbsp;<br />
          &nbsp; &nbsp; public static boolean F(int a,int b,int c){&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; return !(a&gt;c) &amp;&amp; b &gt; c;<br />
          &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; public static void main(String[] args) { &nbsp; &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(1,2,3));<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(3,2,1));<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(3,3,3));<br />
          &nbsp; &nbsp; } &nbsp; &nbsp; &nbsp;}</code><br />
          <strong>Luaran:</strong><br />
          <code>false<br />
          false<br />
          false</code></p>

          <p><strong>Ayo berlatih!</strong><br />
          1. Uraikan urutan penyelesaian masalah <code>(!(a&gt;c) &amp;&amp; b &gt; c) </code>berdasarkan prioritas operator!<br />
          2. Susun kembali nilai F agar menghasilkan nilai TRUE!<br />
          <br />
          &nbsp;</p>

          <h3><strong>PENGAYAAN 2</strong></h3>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.<br />
          Perhatikan potongan kode berikut:</p>

          <p><code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; System.out.println(3+4*4&gt;1+5*(4-2)||5&lt;7);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:</strong><br />
          <code>True</code></p>

          <p><strong>Ayo berlatih!</strong><br />
          1.&nbsp;&nbsp; &nbsp;Uraikan ekspresi tersebut hingga mendapatkan kesimpulan TRUE!<br />
          2.&nbsp;&nbsp; &nbsp;Susun ekspresi yang berbeda untuk menghasilkan kesimpulan FALSE!<br />
          &nbsp;</p>','created_at' => '2022-08-25 13:55:16','updated_at' => '2022-08-25 13:55:16'),
            array('id' => '13','materi_id' => '82','judul' => 'Materi Tambahan (Tidak Wajib)','isi_materi' => '<h3><strong>PENGAYAAN 1</strong></h3>

          <p>Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p>Perhatikan potongan kode berikut:</p>

          <p><code>class Main{ &nbsp; &nbsp; &nbsp;<br />
          &nbsp; &nbsp; public static boolean F(int a,int b,int c){&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; return !(a&gt;c) &amp;&amp; b &gt; c;<br />
          &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; public static void main(String[] args) { &nbsp; &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(1,2,3));<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(3,2,1));<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(3,3,3));<br />
          &nbsp; &nbsp; } &nbsp; &nbsp; &nbsp;}</code><br />
          <strong>Luaran:</strong><br />
          <code>false<br />
          false<br />
          false</code></p>

          <p><strong>Ayo berlatih!</strong><br />
          1. Uraikan urutan penyelesaian masalah <code>(!(a&gt;c) &amp;&amp; b &gt; c) </code>berdasarkan prioritas operator!<br />
          2. Susun kembali nilai F agar menghasilkan nilai TRUE!<br />
          <br />
          &nbsp;</p>

          <h3><strong>PENGAYAAN 2</strong></h3>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.<br />
          Perhatikan potongan kode berikut:</p>

          <p><code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; System.out.println(3+4*4&gt;1+5*(4-2)||5&lt;7);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:</strong><br />
          <code>True</code></p>

          <p><strong>Ayo berlatih!</strong><br />
          1.&nbsp;&nbsp; &nbsp;Uraikan ekspresi tersebut hingga mendapatkan kesimpulan TRUE!<br />
          2.&nbsp;&nbsp; &nbsp;Susun ekspresi yang berbeda untuk menghasilkan kesimpulan FALSE!<br />
          &nbsp;</p>','created_at' => '2022-08-25 13:55:50','updated_at' => '2022-08-25 13:55:50'),
            array('id' => '14','materi_id' => '84','judul' => 'Materi Tambahan (tidak wajib)','isi_materi' => '<h3><strong>PENGAYAAN 1</strong></h3>

          <p>Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p>Perhatikan potongan kode berikut:</p>

          <p><code>class Main{ &nbsp; &nbsp; &nbsp;<br />
          &nbsp; &nbsp; public static boolean F(int a,int b,int c){&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; return !(a&gt;c) &amp;&amp; b &gt; c;<br />
          &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; public static void main(String[] args) { &nbsp; &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(1,2,3));<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(3,2,1));<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(3,3,3));<br />
          &nbsp; &nbsp; } &nbsp; &nbsp; &nbsp;}</code><br />
          <strong>Luaran:</strong><br />
          <code>false<br />
          false<br />
          false</code></p>

          <p><strong>Ayo berlatih!</strong><br />
          1. Uraikan urutan penyelesaian masalah <code>(!(a&gt;c) &amp;&amp; b &gt; c) </code>berdasarkan prioritas operator!<br />
          2. Susun kembali nilai F agar menghasilkan nilai TRUE!<br />
          <br />
          &nbsp;</p>

          <h3><strong>PENGAYAAN 2</strong></h3>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.<br />
          Perhatikan potongan kode berikut:</p>

          <p><code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; System.out.println(3+4*4&gt;1+5*(4-2)||5&lt;7);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:</strong><br />
          <code>True</code></p>

          <p><strong>Ayo berlatih!</strong><br />
          1.&nbsp;&nbsp; &nbsp;Uraikan ekspresi tersebut hingga mendapatkan kesimpulan TRUE!<br />
          2.&nbsp;&nbsp; &nbsp;Susun ekspresi yang berbeda untuk menghasilkan kesimpulan FALSE!<br />
          &nbsp;</p>','created_at' => '2022-08-25 13:56:07','updated_at' => '2022-08-25 13:56:07'),
            array('id' => '15','materi_id' => '86','judul' => 'Materi Tambahan (Tidak Wajib)','isi_materi' => '<h3><strong>PENGAYAAN 1</strong></h3>

          <p>Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p>Perhatikan potongan kode berikut:</p>

          <p><code>class Main{ &nbsp; &nbsp; &nbsp;<br />
          &nbsp; &nbsp; public static boolean F(int a,int b,int c){&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; return !(a&gt;c) &amp;&amp; b &gt; c;<br />
          &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; public static void main(String[] args) { &nbsp; &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(1,2,3));<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(3,2,1));<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(3,3,3));<br />
          &nbsp; &nbsp; } &nbsp; &nbsp; &nbsp;}</code><br />
          <strong>Luaran:</strong><br />
          <code>false<br />
          false<br />
          false</code></p>

          <p><strong>Ayo berlatih!</strong><br />
          1. Uraikan urutan penyelesaian masalah <code>(!(a&gt;c) &amp;&amp; b &gt; c) </code>berdasarkan prioritas operator!<br />
          2. Susun kembali nilai F agar menghasilkan nilai TRUE!<br />
          <br />
          &nbsp;</p>

          <h3><strong>PENGAYAAN 2</strong></h3>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.<br />
          Perhatikan potongan kode berikut:</p>

          <p><code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; System.out.println(3+4*4&gt;1+5*(4-2)||5&lt;7);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:</strong><br />
          <code>True</code></p>

          <p><strong>Ayo berlatih!</strong><br />
          1.&nbsp;&nbsp; &nbsp;Uraikan ekspresi tersebut hingga mendapatkan kesimpulan TRUE!<br />
          2.&nbsp;&nbsp; &nbsp;Susun ekspresi yang berbeda untuk menghasilkan kesimpulan FALSE!<br />
          &nbsp;</p>','created_at' => '2022-08-25 13:56:32','updated_at' => '2022-08-25 13:56:32'),
            array('id' => '16','materi_id' => '87','judul' => 'Pengenalan Sifat Pemrograman Berorientasi Objek','isi_materi' => '<h2><strong>Materi Pengayaan</strong>&nbsp;</h2>

          <p><br />
          Java sebagai bahasa berorientasi objek memiliki sifat pewarisan (inheritance), enkapsulasi (encapsulation), dan polimorfisme (polimorfism).</p>

          <h3><strong>Enkapsulasi&nbsp;</strong></h3>

          <p>Enkapsulasi (encapsulation) merupakan cara untuk melindungi property (atribut)/ method tertentu dari sebuah kelas agar tidak sembarangan diakses dan dimodifikasi oleh suatu bagian program. Cara untuk melindungi data yaitu dengan menggunakan access modifiers (hak akses). Ada 4 hak akses yang tersedia, yaitu default, public, protected, private.</p>
          <img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture1.png" style="width:100% !important; max-width:500px !important; height:auto !important;margin-right:10px !important"  />
          <br />

          <p>&nbsp;</p>

          <h3><strong>Inheritance&nbsp;</strong></h3>

          <p>Inheritance merupakan proses pewarisan data dan method dari suatu class yang telah ada kepada suatu class baru. Class yang mewariskan disebut dengan super class/ parent class/ base class, sedangkan class yang mewarisi (class yang baru) disebut dengan sub class/ child class/ derived class. Sub class tidak dapat mewarisi anggota private dari super class. Dengan inheritance, class yang baru (sub class) akan mirip dengan class yang lama (super class) namun memiliki karakteristik yang baru. Dalam Java, sub class hanya bisa memiliki satu super class (single inheritance) sedangkan super class bisa memiliki satu sub class atau lebih. Untuk menerapkan inheritance, gunakan statement&ldquo;extends&rdquo;.&nbsp;<br />
          Keyword &ldquo;super&rdquo; digunakan oleh sub class untuk memanggil constructor, atribut dan method yang ada pada super class.</p>


          <h3><strong>Polimorfisme&nbsp;</strong></h3>

          <p>Polimorfisme mempunyai makna sesuatu yang memiliki banyak bentuk, yaitu memiliki nama sama, tetapi memiliki kelakuan (behaviour) yang berbeda.&nbsp;<br />
          &nbsp;</p>

          <p>Class Bentuk merupakan class induk (super class) dari class Lingkaran, Elips, dan Segitiga mempunyai method gambar() dan hapus(). Class-class anak (sub class) juga mempunyai method gambar() dan hapus(). Meskipun keempat class tersebut mempunyai nama method yang sama, tetapi isi (source code/ yang dilakukan/ output) dari masing-masing method berbeda. Jika kita menginginkan sebuah objek yang dapat memanggil setiap method (yaitu method gambar &amp; hapus) yang ada pada setiap class (pada super class maupun subclass), maka gunakanlah teknik Polimorfisme. Polimorfisme hanya berlaku pada method dan tidak berlaku untuk atribut.</p>
          <img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture2.png" style="width:100% !important; max-width:500px !important; height:auto !important;margin-right:10px !important"  />
          <br />

          <p><strong>Contoh Pengayaan:</strong></p>

          <p>1.&nbsp;&nbsp; &nbsp;Buatlah package superKendaraan<br />
          2.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Kendaraan.java &nbsp;dengan menggunakan package superKendaraan<br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>class Kendaraan {<br />
          &nbsp; &nbsp; private int jumlahRoda,tahun;<br />
          &nbsp;&nbsp; &nbsp;private String warna,jenis;<br />
          &nbsp;&nbsp; &nbsp;Kendaraan(){</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;Kendaraan (int jumlahRoda,int tahun, String warna, String jenis){<br />
          &nbsp;&nbsp; &nbsp;this.jumlahRoda=jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;this.tahun=tahun;<br />
          &nbsp;&nbsp; &nbsp;this.warna=warna;<br />
          &nbsp;&nbsp; &nbsp;this.jenis=jenis;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengisi atribut kendaraan<br />
          &nbsp;&nbsp; &nbsp;void setJumlahRoda(int jumlahRoda){<br />
          &nbsp;&nbsp; &nbsp;this.jumlahRoda=jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setTahun(int tahun){<br />
          &nbsp;&nbsp; &nbsp;this.tahun=tahun;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setWarna(String warna){<br />
          &nbsp;&nbsp; &nbsp;this.warna=warna;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setJenis(String jenis){<br />
          &nbsp;&nbsp; &nbsp;this.jenis=jenis;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengambil atribut kendaraan<br />
          &nbsp;&nbsp; &nbsp;int getJumlahRoda(){<br />
          &nbsp;&nbsp; &nbsp;return jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;int getTahun(){<br />
          &nbsp;&nbsp; &nbsp;return tahun;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;String getWarna(){<br />
          &nbsp;&nbsp; &nbsp;return warna;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;String getJenis(){<br />
          &nbsp;&nbsp; &nbsp;return jenis;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Jumlah Roda : &quot;+getJumlahRoda());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Tahun : &quot;+getTahun());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Warna : &quot;+getWarna());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Jenis : &quot;+getJenis());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>3.&nbsp;&nbsp; &nbsp;Buatlah dokumen class F1.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class F1 extends Kendaraan {<br />
          &nbsp;&nbsp; &nbsp;private int kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;private boolean spoiler;</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;F1(){</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;F1(int jumlahRoda,int tahun, String warna, String jenis, int kecepatanMax, boolean spoiler){<br />
          &nbsp;&nbsp; &nbsp;super(jumlahRoda,tahun,warna,jenis);<br />
          &nbsp;&nbsp; &nbsp;this.kecepatanMax=kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;this.spoiler=spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengisi atribut F1<br />
          &nbsp;&nbsp; &nbsp;void kecepatanMax(int kecepatanMax){<br />
          &nbsp;&nbsp; &nbsp;this.kecepatanMax=kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setSpoiler(boolean spoiler){<br />
          &nbsp;&nbsp; &nbsp;this.spoiler=spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengambil atribut F1<br />
          &nbsp;&nbsp; &nbsp;int getKecepatanMax(){<br />
          &nbsp;&nbsp; &nbsp;return kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;boolean getSpoiler(){<br />
          &nbsp;&nbsp; &nbsp;return spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;super.info();<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Kecepatan Maksimal : &quot;+getKecepatanMax());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Memakai Spoiler : &quot;+getSpoiler());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>4.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Truk.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class Truk extends Kendaraan {<br />
          &nbsp;&nbsp; &nbsp;private int muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;private boolean gandengan;</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;Truk(){<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;Truk(int jumlahRoda,int tahun, String warna, String jenis, int muatanMaksimal, boolean gandengan){<br />
          &nbsp;&nbsp; &nbsp;super(jumlahRoda,tahun,warna,jenis);<br />
          &nbsp;&nbsp; &nbsp;this.muatanMaksimal=muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;this.gandengan=gandengan;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengisi atribut truk<br />
          &nbsp;&nbsp; &nbsp;void setMuatanMaksimal(int muatanMaksimal){<br />
          &nbsp;&nbsp; &nbsp;this.muatanMaksimal=muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setGandengan(boolean gandengan){<br />
          &nbsp;&nbsp; &nbsp;this.gandengan=gandengan;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengambil atribut truk<br />
          &nbsp;&nbsp; &nbsp;int getMuatanMaksimal(){<br />
          &nbsp;&nbsp; &nbsp;return muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;boolean getGandengan(){<br />
          &nbsp;&nbsp; &nbsp;return gandengan;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;super.info();<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Muatan Maksimal : &quot;+getMuatanMaksimal());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Gandengan : &quot;+getGandengan());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>5.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Utama.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class Utama {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Kendaraan myRide=new Kendaraan(4,1998,&quot;Hitam&quot;,&quot;Muscle&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myRide.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Truk myTruk=new Truk(8,2005,&quot;Silver&quot;,&quot;Tuner&quot;,30000,true);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myTruk.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;F1 myF1=new F1(4,2011,&quot;Lime&quot;,&quot;Exotic&quot;,320,true);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myF1.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          1.&nbsp;&nbsp; &nbsp;Buka dokumen Utama.java&nbsp;<br />
          2.&nbsp;&nbsp; &nbsp;Klik Run program, menghasilkan luaran berikut:</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture3.png" style="width:100% !important; max-width:800px !important; height:auto !important;margin-right:10px !important"  /></p>
          <br />

          <h3><br />
          <strong>Latihan Pengayaan:</strong></h3>

          <p>1.&nbsp;&nbsp; &nbsp;Berdasarkan keempat potongan kode tersebut, setiap kode memiliki variabel, constructor, method yang berbeda. <br /> Analisa potongan kode yang menunjukkan sifat pewarisan, enkapsulasi, dan polimorfisme dari keempat dokumen Java tersebut!<br />
          2.&nbsp;&nbsp; &nbsp;Simpulkan perbedaan sifat pewarisan, enkapsulasi, dan polimorfisme berdasarkan keempat dokumen Java tersebut!<br />
          3.&nbsp;&nbsp; &nbsp;Susunlah diagram yang mengkonstruksikan sifat pewarisan, enkapsulasi, dan polimorfisme berdasarkan keempat dokumen Java tersebut (lihat contoh diagram class Bentuk)!<br />
          &nbsp;</p>
          ','created_at' => '2022-09-11 22:23:49','updated_at' => '2022-09-11 22:23:49'),
            array('id' => '17','materi_id' => '88','judul' => 'Pengenalan Sifat Pemrograman Berorientasi Objek','isi_materi' => '<h2><strong>Materi Pengayaan</strong>&nbsp;</h2>

          <p><br />
          Java sebagai bahasa berorientasi objek memiliki sifat pewarisan (inheritance), enkapsulasi (encapsulation), dan polimorfisme (polimorfism).</p>

          <h3><strong>Enkapsulasi&nbsp;</strong></h3>

          <p>Enkapsulasi (encapsulation) merupakan cara untuk melindungi property (atribut)/ method tertentu dari sebuah kelas agar tidak sembarangan diakses dan dimodifikasi oleh suatu bagian program. Cara untuk melindungi data yaitu dengan menggunakan access modifiers (hak akses). Ada 4 hak akses yang tersedia, yaitu default, public, protected, private.</p>
          <img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture1.png" style="width:100% !important; max-width:500px !important; height:auto !important;margin-right:10px !important"  />
          <br />

          <p>&nbsp;</p>

          <h3><strong>Inheritance&nbsp;</strong></h3>

          <p>Inheritance merupakan proses pewarisan data dan method dari suatu class yang telah ada kepada suatu class baru. Class yang mewariskan disebut dengan super class/ parent class/ base class, sedangkan class yang mewarisi (class yang baru) disebut dengan sub class/ child class/ derived class. Sub class tidak dapat mewarisi anggota private dari super class. Dengan inheritance, class yang baru (sub class) akan mirip dengan class yang lama (super class) namun memiliki karakteristik yang baru. Dalam Java, sub class hanya bisa memiliki satu super class (single inheritance) sedangkan super class bisa memiliki satu sub class atau lebih. Untuk menerapkan inheritance, gunakan statement&ldquo;extends&rdquo;.&nbsp;<br />
          Keyword &ldquo;super&rdquo; digunakan oleh sub class untuk memanggil constructor, atribut dan method yang ada pada super class.</p>


          <h3><strong>Polimorfisme&nbsp;</strong></h3>

          <p>Polimorfisme mempunyai makna sesuatu yang memiliki banyak bentuk, yaitu memiliki nama sama, tetapi memiliki kelakuan (behaviour) yang berbeda.&nbsp;<br />
          &nbsp;</p>

          <p>Class Bentuk merupakan class induk (super class) dari class Lingkaran, Elips, dan Segitiga mempunyai method gambar() dan hapus(). Class-class anak (sub class) juga mempunyai method gambar() dan hapus(). Meskipun keempat class tersebut mempunyai nama method yang sama, tetapi isi (source code/ yang dilakukan/ output) dari masing-masing method berbeda. Jika kita menginginkan sebuah objek yang dapat memanggil setiap method (yaitu method gambar &amp; hapus) yang ada pada setiap class (pada super class maupun subclass), maka gunakanlah teknik Polimorfisme. Polimorfisme hanya berlaku pada method dan tidak berlaku untuk atribut.</p>
          <img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture2.png" style="width:100% !important; max-width:500px !important; height:auto !important;margin-right:10px !important"  />
          <br />

          <p><strong>Contoh Pengayaan:</strong></p>

          <p>1.&nbsp;&nbsp; &nbsp;Buatlah package superKendaraan<br />
          2.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Kendaraan.java &nbsp;dengan menggunakan package superKendaraan<br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>class Kendaraan {<br />
          &nbsp; &nbsp; private int jumlahRoda,tahun;<br />
          &nbsp;&nbsp; &nbsp;private String warna,jenis;<br />
          &nbsp;&nbsp; &nbsp;Kendaraan(){</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;Kendaraan (int jumlahRoda,int tahun, String warna, String jenis){<br />
          &nbsp;&nbsp; &nbsp;this.jumlahRoda=jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;this.tahun=tahun;<br />
          &nbsp;&nbsp; &nbsp;this.warna=warna;<br />
          &nbsp;&nbsp; &nbsp;this.jenis=jenis;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengisi atribut kendaraan<br />
          &nbsp;&nbsp; &nbsp;void setJumlahRoda(int jumlahRoda){<br />
          &nbsp;&nbsp; &nbsp;this.jumlahRoda=jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setTahun(int tahun){<br />
          &nbsp;&nbsp; &nbsp;this.tahun=tahun;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setWarna(String warna){<br />
          &nbsp;&nbsp; &nbsp;this.warna=warna;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setJenis(String jenis){<br />
          &nbsp;&nbsp; &nbsp;this.jenis=jenis;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengambil atribut kendaraan<br />
          &nbsp;&nbsp; &nbsp;int getJumlahRoda(){<br />
          &nbsp;&nbsp; &nbsp;return jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;int getTahun(){<br />
          &nbsp;&nbsp; &nbsp;return tahun;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;String getWarna(){<br />
          &nbsp;&nbsp; &nbsp;return warna;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;String getJenis(){<br />
          &nbsp;&nbsp; &nbsp;return jenis;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Jumlah Roda : &quot;+getJumlahRoda());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Tahun : &quot;+getTahun());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Warna : &quot;+getWarna());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Jenis : &quot;+getJenis());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>3.&nbsp;&nbsp; &nbsp;Buatlah dokumen class F1.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class F1 extends Kendaraan {<br />
          &nbsp;&nbsp; &nbsp;private int kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;private boolean spoiler;</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;F1(){</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;F1(int jumlahRoda,int tahun, String warna, String jenis, int kecepatanMax, boolean spoiler){<br />
          &nbsp;&nbsp; &nbsp;super(jumlahRoda,tahun,warna,jenis);<br />
          &nbsp;&nbsp; &nbsp;this.kecepatanMax=kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;this.spoiler=spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengisi atribut F1<br />
          &nbsp;&nbsp; &nbsp;void kecepatanMax(int kecepatanMax){<br />
          &nbsp;&nbsp; &nbsp;this.kecepatanMax=kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setSpoiler(boolean spoiler){<br />
          &nbsp;&nbsp; &nbsp;this.spoiler=spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengambil atribut F1<br />
          &nbsp;&nbsp; &nbsp;int getKecepatanMax(){<br />
          &nbsp;&nbsp; &nbsp;return kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;boolean getSpoiler(){<br />
          &nbsp;&nbsp; &nbsp;return spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;super.info();<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Kecepatan Maksimal : &quot;+getKecepatanMax());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Memakai Spoiler : &quot;+getSpoiler());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>4.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Truk.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class Truk extends Kendaraan {<br />
          &nbsp;&nbsp; &nbsp;private int muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;private boolean gandengan;</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;Truk(){<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;Truk(int jumlahRoda,int tahun, String warna, String jenis, int muatanMaksimal, boolean gandengan){<br />
          &nbsp;&nbsp; &nbsp;super(jumlahRoda,tahun,warna,jenis);<br />
          &nbsp;&nbsp; &nbsp;this.muatanMaksimal=muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;this.gandengan=gandengan;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengisi atribut truk<br />
          &nbsp;&nbsp; &nbsp;void setMuatanMaksimal(int muatanMaksimal){<br />
          &nbsp;&nbsp; &nbsp;this.muatanMaksimal=muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setGandengan(boolean gandengan){<br />
          &nbsp;&nbsp; &nbsp;this.gandengan=gandengan;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengambil atribut truk<br />
          &nbsp;&nbsp; &nbsp;int getMuatanMaksimal(){<br />
          &nbsp;&nbsp; &nbsp;return muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;boolean getGandengan(){<br />
          &nbsp;&nbsp; &nbsp;return gandengan;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;super.info();<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Muatan Maksimal : &quot;+getMuatanMaksimal());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Gandengan : &quot;+getGandengan());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>5.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Utama.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class Utama {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Kendaraan myRide=new Kendaraan(4,1998,&quot;Hitam&quot;,&quot;Muscle&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myRide.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Truk myTruk=new Truk(8,2005,&quot;Silver&quot;,&quot;Tuner&quot;,30000,true);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myTruk.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;F1 myF1=new F1(4,2011,&quot;Lime&quot;,&quot;Exotic&quot;,320,true);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myF1.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          1.&nbsp;&nbsp; &nbsp;Buka dokumen Utama.java&nbsp;<br />
          2.&nbsp;&nbsp; &nbsp;Klik Run program, menghasilkan luaran berikut:</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture3.png" style="width:100% !important; max-width:800px !important; height:auto !important;margin-right:10px !important"  /></p>
          <br />

          <h3><br />
          <strong>Latihan Pengayaan:</strong></h3>

          <p>1.&nbsp;&nbsp; &nbsp;Berdasarkan keempat potongan kode tersebut, setiap kode memiliki variabel, constructor, method yang berbeda. <br /> Analisa potongan kode yang menunjukkan sifat pewarisan, enkapsulasi, dan polimorfisme dari keempat dokumen Java tersebut!<br />
          2.&nbsp;&nbsp; &nbsp;Simpulkan perbedaan sifat pewarisan, enkapsulasi, dan polimorfisme berdasarkan keempat dokumen Java tersebut!<br />
          3.&nbsp;&nbsp; &nbsp;Susunlah diagram yang mengkonstruksikan sifat pewarisan, enkapsulasi, dan polimorfisme berdasarkan keempat dokumen Java tersebut (lihat contoh diagram class Bentuk)!<br />
          &nbsp;</p>
          ','created_at' => '2022-09-11 22:26:12','updated_at' => '2022-09-11 22:26:12'),
            array('id' => '18','materi_id' => '89','judul' => 'Pengenalan Sifat Pemrograman Berorientasi Objek','isi_materi' => '<h2><strong>Materi Pengayaan</strong>&nbsp;</h2>

          <p><br />
          Java sebagai bahasa berorientasi objek memiliki sifat pewarisan (inheritance), enkapsulasi (encapsulation), dan polimorfisme (polimorfism).</p>

          <h3><strong>Enkapsulasi&nbsp;</strong></h3>

          <p>Enkapsulasi (encapsulation) merupakan cara untuk melindungi property (atribut)/ method tertentu dari sebuah kelas agar tidak sembarangan diakses dan dimodifikasi oleh suatu bagian program. Cara untuk melindungi data yaitu dengan menggunakan access modifiers (hak akses). Ada 4 hak akses yang tersedia, yaitu default, public, protected, private.</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture1.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <h3><strong>Inheritance&nbsp;</strong></h3>

          <p>Inheritance merupakan proses pewarisan data dan method dari suatu class yang telah ada kepada suatu class baru. Class yang mewariskan disebut dengan super class/ parent class/ base class, sedangkan class yang mewarisi (class yang baru) disebut dengan sub class/ child class/ derived class. Sub class tidak dapat mewarisi anggota private dari super class. Dengan inheritance, class yang baru (sub class) akan mirip dengan class yang lama (super class) namun memiliki karakteristik yang baru. Dalam Java, sub class hanya bisa memiliki satu super class (single inheritance) sedangkan super class bisa memiliki satu sub class atau lebih. Untuk menerapkan inheritance, gunakan statement&ldquo;extends&rdquo;.&nbsp;<br />
          Keyword &ldquo;super&rdquo; digunakan oleh sub class untuk memanggil constructor, atribut dan method yang ada pada super class.</p>

          <h3><strong>Polimorfisme&nbsp;</strong></h3>

          <p>Polimorfisme mempunyai makna sesuatu yang memiliki banyak bentuk, yaitu memiliki nama sama, tetapi memiliki kelakuan (behaviour) yang berbeda.&nbsp;<br />
          &nbsp;</p>

          <p>Class Bentuk merupakan class induk (super class) dari class Lingkaran, Elips, dan Segitiga mempunyai method gambar() dan hapus(). Class-class anak (sub class) juga mempunyai method gambar() dan hapus(). Meskipun keempat class tersebut mempunyai nama method yang sama, tetapi isi (source code/ yang dilakukan/ output) dari masing-masing method berbeda. Jika kita menginginkan sebuah objek yang dapat memanggil setiap method (yaitu method gambar &amp; hapus) yang ada pada setiap class (pada super class maupun subclass), maka gunakanlah teknik Polimorfisme. Polimorfisme hanya berlaku pada method dan tidak berlaku untuk atribut.</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture2.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p>&nbsp;</p>

          <p><strong>Contoh Pengayaan:</strong></p>

          <p>&nbsp;</p>

          <p>1.&nbsp;&nbsp; &nbsp;Buatlah package superKendaraan<br />
          2.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Kendaraan.java &nbsp;dengan menggunakan package superKendaraan<br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>class Kendaraan {<br />
          &nbsp; &nbsp; private int jumlahRoda,tahun;<br />
          &nbsp;&nbsp; &nbsp;private String warna,jenis;<br />
          &nbsp;&nbsp; &nbsp;Kendaraan(){</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;Kendaraan (int jumlahRoda,int tahun, String warna, String jenis){<br />
          &nbsp;&nbsp; &nbsp;this.jumlahRoda=jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;this.tahun=tahun;<br />
          &nbsp;&nbsp; &nbsp;this.warna=warna;<br />
          &nbsp;&nbsp; &nbsp;this.jenis=jenis;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengisi atribut kendaraan<br />
          &nbsp;&nbsp; &nbsp;void setJumlahRoda(int jumlahRoda){<br />
          &nbsp;&nbsp; &nbsp;this.jumlahRoda=jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setTahun(int tahun){<br />
          &nbsp;&nbsp; &nbsp;this.tahun=tahun;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setWarna(String warna){<br />
          &nbsp;&nbsp; &nbsp;this.warna=warna;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setJenis(String jenis){<br />
          &nbsp;&nbsp; &nbsp;this.jenis=jenis;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengambil atribut kendaraan<br />
          &nbsp;&nbsp; &nbsp;int getJumlahRoda(){<br />
          &nbsp;&nbsp; &nbsp;return jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;int getTahun(){<br />
          &nbsp;&nbsp; &nbsp;return tahun;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;String getWarna(){<br />
          &nbsp;&nbsp; &nbsp;return warna;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;String getJenis(){<br />
          &nbsp;&nbsp; &nbsp;return jenis;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Jumlah Roda : &quot;+getJumlahRoda());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Tahun : &quot;+getTahun());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Warna : &quot;+getWarna());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Jenis : &quot;+getJenis());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>3.&nbsp;&nbsp; &nbsp;Buatlah dokumen class F1.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class F1 extends Kendaraan {<br />
          &nbsp;&nbsp; &nbsp;private int kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;private boolean spoiler;</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;F1(){</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;F1(int jumlahRoda,int tahun, String warna, String jenis, int kecepatanMax, boolean spoiler){<br />
          &nbsp;&nbsp; &nbsp;super(jumlahRoda,tahun,warna,jenis);<br />
          &nbsp;&nbsp; &nbsp;this.kecepatanMax=kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;this.spoiler=spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengisi atribut F1<br />
          &nbsp;&nbsp; &nbsp;void kecepatanMax(int kecepatanMax){<br />
          &nbsp;&nbsp; &nbsp;this.kecepatanMax=kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setSpoiler(boolean spoiler){<br />
          &nbsp;&nbsp; &nbsp;this.spoiler=spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengambil atribut F1<br />
          &nbsp;&nbsp; &nbsp;int getKecepatanMax(){<br />
          &nbsp;&nbsp; &nbsp;return kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;boolean getSpoiler(){<br />
          &nbsp;&nbsp; &nbsp;return spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;super.info();<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Kecepatan Maksimal : &quot;+getKecepatanMax());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Memakai Spoiler : &quot;+getSpoiler());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>4.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Truk.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class Truk extends Kendaraan {<br />
          &nbsp;&nbsp; &nbsp;private int muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;private boolean gandengan;</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;Truk(){<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;Truk(int jumlahRoda,int tahun, String warna, String jenis, int muatanMaksimal, boolean gandengan){<br />
          &nbsp;&nbsp; &nbsp;super(jumlahRoda,tahun,warna,jenis);<br />
          &nbsp;&nbsp; &nbsp;this.muatanMaksimal=muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;this.gandengan=gandengan;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengisi atribut truk<br />
          &nbsp;&nbsp; &nbsp;void setMuatanMaksimal(int muatanMaksimal){<br />
          &nbsp;&nbsp; &nbsp;this.muatanMaksimal=muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setGandengan(boolean gandengan){<br />
          &nbsp;&nbsp; &nbsp;this.gandengan=gandengan;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengambil atribut truk<br />
          &nbsp;&nbsp; &nbsp;int getMuatanMaksimal(){<br />
          &nbsp;&nbsp; &nbsp;return muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;boolean getGandengan(){<br />
          &nbsp;&nbsp; &nbsp;return gandengan;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;super.info();<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Muatan Maksimal : &quot;+getMuatanMaksimal());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Gandengan : &quot;+getGandengan());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>5.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Utama.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class Utama {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Kendaraan myRide=new Kendaraan(4,1998,&quot;Hitam&quot;,&quot;Muscle&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myRide.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Truk myTruk=new Truk(8,2005,&quot;Silver&quot;,&quot;Tuner&quot;,30000,true);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myTruk.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;F1 myF1=new F1(4,2011,&quot;Lime&quot;,&quot;Exotic&quot;,320,true);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myF1.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          1.&nbsp;&nbsp; &nbsp;Buka dokumen Utama.java&nbsp;<br />
          2.&nbsp;&nbsp; &nbsp;Klik Run program, menghasilkan luaran berikut:</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture3.png" style="height:auto !important; margin-right:10px !important; max-width:800px !important; width:100% !important" /></p>

          <p>&nbsp;</p>

          <h3><br />
          <strong>Latihan Pengayaan:</strong></h3>

          <p>&nbsp;</p>

          <p>1.&nbsp;&nbsp; &nbsp;Berdasarkan keempat potongan kode tersebut, setiap kode memiliki variabel, constructor, method yang berbeda.<br />
          Analisa potongan kode yang menunjukkan sifat pewarisan, enkapsulasi, dan polimorfisme dari keempat dokumen Java tersebut!<br />
          2.&nbsp;&nbsp; &nbsp;Simpulkan perbedaan sifat pewarisan, enkapsulasi, dan polimorfisme berdasarkan keempat dokumen Java tersebut!<br />
          3.&nbsp;&nbsp; &nbsp;Susunlah diagram yang mengkonstruksikan sifat pewarisan, enkapsulasi, dan polimorfisme berdasarkan keempat dokumen Java tersebut (lihat contoh diagram class Bentuk)!<br />
          &nbsp;</p>','created_at' => '2022-09-11 22:38:52','updated_at' => '2022-09-11 22:38:52'),
            array('id' => '19','materi_id' => '91','judul' => 'Pengenalan Sifat Pemrograman Berorientasi Objek','isi_materi' => '<h2><strong>Materi Pengayaan</strong>&nbsp;</h2>

          <p><br />
          Java sebagai bahasa berorientasi objek memiliki sifat pewarisan (inheritance), enkapsulasi (encapsulation), dan polimorfisme (polimorfism).</p>

          <h3><strong>Enkapsulasi&nbsp;</strong></h3>

          <p>Enkapsulasi (encapsulation) merupakan cara untuk melindungi property (atribut)/ method tertentu dari sebuah kelas agar tidak sembarangan diakses dan dimodifikasi oleh suatu bagian program. Cara untuk melindungi data yaitu dengan menggunakan access modifiers (hak akses). Ada 4 hak akses yang tersedia, yaitu default, public, protected, private.</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture1.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <h3><strong>Inheritance&nbsp;</strong></h3>

          <p>Inheritance merupakan proses pewarisan data dan method dari suatu class yang telah ada kepada suatu class baru. Class yang mewariskan disebut dengan super class/ parent class/ base class, sedangkan class yang mewarisi (class yang baru) disebut dengan sub class/ child class/ derived class. Sub class tidak dapat mewarisi anggota private dari super class. Dengan inheritance, class yang baru (sub class) akan mirip dengan class yang lama (super class) namun memiliki karakteristik yang baru. Dalam Java, sub class hanya bisa memiliki satu super class (single inheritance) sedangkan super class bisa memiliki satu sub class atau lebih. Untuk menerapkan inheritance, gunakan statement&ldquo;extends&rdquo;.&nbsp;<br />
          Keyword &ldquo;super&rdquo; digunakan oleh sub class untuk memanggil constructor, atribut dan method yang ada pada super class.</p>

          <h3><strong>Polimorfisme&nbsp;</strong></h3>

          <p>Polimorfisme mempunyai makna sesuatu yang memiliki banyak bentuk, yaitu memiliki nama sama, tetapi memiliki kelakuan (behaviour) yang berbeda.&nbsp;<br />
          &nbsp;</p>

          <p>Class Bentuk merupakan class induk (super class) dari class Lingkaran, Elips, dan Segitiga mempunyai method gambar() dan hapus(). Class-class anak (sub class) juga mempunyai method gambar() dan hapus(). Meskipun keempat class tersebut mempunyai nama method yang sama, tetapi isi (source code/ yang dilakukan/ output) dari masing-masing method berbeda. Jika kita menginginkan sebuah objek yang dapat memanggil setiap method (yaitu method gambar &amp; hapus) yang ada pada setiap class (pada super class maupun subclass), maka gunakanlah teknik Polimorfisme. Polimorfisme hanya berlaku pada method dan tidak berlaku untuk atribut.</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture2.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p>&nbsp;</p>

          <p><strong>Contoh Pengayaan:</strong></p>

          <p>&nbsp;</p>

          <p>1.&nbsp;&nbsp; &nbsp;Buatlah package superKendaraan<br />
          2.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Kendaraan.java &nbsp;dengan menggunakan package superKendaraan<br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>class Kendaraan {<br />
          &nbsp; &nbsp; private int jumlahRoda,tahun;<br />
          &nbsp;&nbsp; &nbsp;private String warna,jenis;<br />
          &nbsp;&nbsp; &nbsp;Kendaraan(){</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;Kendaraan (int jumlahRoda,int tahun, String warna, String jenis){<br />
          &nbsp;&nbsp; &nbsp;this.jumlahRoda=jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;this.tahun=tahun;<br />
          &nbsp;&nbsp; &nbsp;this.warna=warna;<br />
          &nbsp;&nbsp; &nbsp;this.jenis=jenis;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengisi atribut kendaraan<br />
          &nbsp;&nbsp; &nbsp;void setJumlahRoda(int jumlahRoda){<br />
          &nbsp;&nbsp; &nbsp;this.jumlahRoda=jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setTahun(int tahun){<br />
          &nbsp;&nbsp; &nbsp;this.tahun=tahun;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setWarna(String warna){<br />
          &nbsp;&nbsp; &nbsp;this.warna=warna;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setJenis(String jenis){<br />
          &nbsp;&nbsp; &nbsp;this.jenis=jenis;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengambil atribut kendaraan<br />
          &nbsp;&nbsp; &nbsp;int getJumlahRoda(){<br />
          &nbsp;&nbsp; &nbsp;return jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;int getTahun(){<br />
          &nbsp;&nbsp; &nbsp;return tahun;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;String getWarna(){<br />
          &nbsp;&nbsp; &nbsp;return warna;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;String getJenis(){<br />
          &nbsp;&nbsp; &nbsp;return jenis;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Jumlah Roda : &quot;+getJumlahRoda());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Tahun : &quot;+getTahun());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Warna : &quot;+getWarna());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Jenis : &quot;+getJenis());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>3.&nbsp;&nbsp; &nbsp;Buatlah dokumen class F1.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class F1 extends Kendaraan {<br />
          &nbsp;&nbsp; &nbsp;private int kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;private boolean spoiler;</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;F1(){</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;F1(int jumlahRoda,int tahun, String warna, String jenis, int kecepatanMax, boolean spoiler){<br />
          &nbsp;&nbsp; &nbsp;super(jumlahRoda,tahun,warna,jenis);<br />
          &nbsp;&nbsp; &nbsp;this.kecepatanMax=kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;this.spoiler=spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengisi atribut F1<br />
          &nbsp;&nbsp; &nbsp;void kecepatanMax(int kecepatanMax){<br />
          &nbsp;&nbsp; &nbsp;this.kecepatanMax=kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setSpoiler(boolean spoiler){<br />
          &nbsp;&nbsp; &nbsp;this.spoiler=spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengambil atribut F1<br />
          &nbsp;&nbsp; &nbsp;int getKecepatanMax(){<br />
          &nbsp;&nbsp; &nbsp;return kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;boolean getSpoiler(){<br />
          &nbsp;&nbsp; &nbsp;return spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;super.info();<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Kecepatan Maksimal : &quot;+getKecepatanMax());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Memakai Spoiler : &quot;+getSpoiler());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>4.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Truk.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class Truk extends Kendaraan {<br />
          &nbsp;&nbsp; &nbsp;private int muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;private boolean gandengan;</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;Truk(){<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;Truk(int jumlahRoda,int tahun, String warna, String jenis, int muatanMaksimal, boolean gandengan){<br />
          &nbsp;&nbsp; &nbsp;super(jumlahRoda,tahun,warna,jenis);<br />
          &nbsp;&nbsp; &nbsp;this.muatanMaksimal=muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;this.gandengan=gandengan;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengisi atribut truk<br />
          &nbsp;&nbsp; &nbsp;void setMuatanMaksimal(int muatanMaksimal){<br />
          &nbsp;&nbsp; &nbsp;this.muatanMaksimal=muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setGandengan(boolean gandengan){<br />
          &nbsp;&nbsp; &nbsp;this.gandengan=gandengan;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengambil atribut truk<br />
          &nbsp;&nbsp; &nbsp;int getMuatanMaksimal(){<br />
          &nbsp;&nbsp; &nbsp;return muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;boolean getGandengan(){<br />
          &nbsp;&nbsp; &nbsp;return gandengan;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;super.info();<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Muatan Maksimal : &quot;+getMuatanMaksimal());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Gandengan : &quot;+getGandengan());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>5.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Utama.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class Utama {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Kendaraan myRide=new Kendaraan(4,1998,&quot;Hitam&quot;,&quot;Muscle&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myRide.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Truk myTruk=new Truk(8,2005,&quot;Silver&quot;,&quot;Tuner&quot;,30000,true);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myTruk.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;F1 myF1=new F1(4,2011,&quot;Lime&quot;,&quot;Exotic&quot;,320,true);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myF1.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          1.&nbsp;&nbsp; &nbsp;Buka dokumen Utama.java&nbsp;<br />
          2.&nbsp;&nbsp; &nbsp;Klik Run program, menghasilkan luaran berikut:</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture3.png" style="height:auto !important; margin-right:10px !important; max-width:800px !important; width:100% !important" /></p>

          <p>&nbsp;</p>

          <h3><br />
          <strong>Latihan Pengayaan:</strong></h3>

          <p>&nbsp;</p>

          <p>1.&nbsp;&nbsp; &nbsp;Berdasarkan keempat potongan kode tersebut, setiap kode memiliki variabel, constructor, method yang berbeda.<br />
          Analisa potongan kode yang menunjukkan sifat pewarisan, enkapsulasi, dan polimorfisme dari keempat dokumen Java tersebut!<br />
          2.&nbsp;&nbsp; &nbsp;Simpulkan perbedaan sifat pewarisan, enkapsulasi, dan polimorfisme berdasarkan keempat dokumen Java tersebut!<br />
          3.&nbsp;&nbsp; &nbsp;Susunlah diagram yang mengkonstruksikan sifat pewarisan, enkapsulasi, dan polimorfisme berdasarkan keempat dokumen Java tersebut (lihat contoh diagram class Bentuk)!<br />
          &nbsp;</p>','created_at' => '2022-09-11 22:39:19','updated_at' => '2022-09-11 22:39:19'),
            array('id' => '20','materi_id' => '90','judul' => 'Pengenalan Sifat Pemrograman Berorientasi Objek','isi_materi' => '<h2><strong>Materi Pengayaan</strong>&nbsp;</h2>

          <p><br />
          Java sebagai bahasa berorientasi objek memiliki sifat pewarisan (inheritance), enkapsulasi (encapsulation), dan polimorfisme (polimorfism).</p>

          <h3><strong>Enkapsulasi&nbsp;</strong></h3>

          <p>Enkapsulasi (encapsulation) merupakan cara untuk melindungi property (atribut)/ method tertentu dari sebuah kelas agar tidak sembarangan diakses dan dimodifikasi oleh suatu bagian program. Cara untuk melindungi data yaitu dengan menggunakan access modifiers (hak akses). Ada 4 hak akses yang tersedia, yaitu default, public, protected, private.</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture1.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <h3><strong>Inheritance&nbsp;</strong></h3>

          <p>Inheritance merupakan proses pewarisan data dan method dari suatu class yang telah ada kepada suatu class baru. Class yang mewariskan disebut dengan super class/ parent class/ base class, sedangkan class yang mewarisi (class yang baru) disebut dengan sub class/ child class/ derived class. Sub class tidak dapat mewarisi anggota private dari super class. Dengan inheritance, class yang baru (sub class) akan mirip dengan class yang lama (super class) namun memiliki karakteristik yang baru. Dalam Java, sub class hanya bisa memiliki satu super class (single inheritance) sedangkan super class bisa memiliki satu sub class atau lebih. Untuk menerapkan inheritance, gunakan statement&ldquo;extends&rdquo;.&nbsp;<br />
          Keyword &ldquo;super&rdquo; digunakan oleh sub class untuk memanggil constructor, atribut dan method yang ada pada super class.</p>

          <h3><strong>Polimorfisme&nbsp;</strong></h3>

          <p>Polimorfisme mempunyai makna sesuatu yang memiliki banyak bentuk, yaitu memiliki nama sama, tetapi memiliki kelakuan (behaviour) yang berbeda.&nbsp;<br />
          &nbsp;</p>

          <p>Class Bentuk merupakan class induk (super class) dari class Lingkaran, Elips, dan Segitiga mempunyai method gambar() dan hapus(). Class-class anak (sub class) juga mempunyai method gambar() dan hapus(). Meskipun keempat class tersebut mempunyai nama method yang sama, tetapi isi (source code/ yang dilakukan/ output) dari masing-masing method berbeda. Jika kita menginginkan sebuah objek yang dapat memanggil setiap method (yaitu method gambar &amp; hapus) yang ada pada setiap class (pada super class maupun subclass), maka gunakanlah teknik Polimorfisme. Polimorfisme hanya berlaku pada method dan tidak berlaku untuk atribut.</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture2.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p>&nbsp;</p>

          <p><strong>Contoh Pengayaan:</strong></p>

          <p>&nbsp;</p>

          <p>1.&nbsp;&nbsp; &nbsp;Buatlah package superKendaraan<br />
          2.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Kendaraan.java &nbsp;dengan menggunakan package superKendaraan<br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>class Kendaraan {<br />
          &nbsp; &nbsp; private int jumlahRoda,tahun;<br />
          &nbsp;&nbsp; &nbsp;private String warna,jenis;<br />
          &nbsp;&nbsp; &nbsp;Kendaraan(){</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;Kendaraan (int jumlahRoda,int tahun, String warna, String jenis){<br />
          &nbsp;&nbsp; &nbsp;this.jumlahRoda=jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;this.tahun=tahun;<br />
          &nbsp;&nbsp; &nbsp;this.warna=warna;<br />
          &nbsp;&nbsp; &nbsp;this.jenis=jenis;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengisi atribut kendaraan<br />
          &nbsp;&nbsp; &nbsp;void setJumlahRoda(int jumlahRoda){<br />
          &nbsp;&nbsp; &nbsp;this.jumlahRoda=jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setTahun(int tahun){<br />
          &nbsp;&nbsp; &nbsp;this.tahun=tahun;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setWarna(String warna){<br />
          &nbsp;&nbsp; &nbsp;this.warna=warna;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setJenis(String jenis){<br />
          &nbsp;&nbsp; &nbsp;this.jenis=jenis;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengambil atribut kendaraan<br />
          &nbsp;&nbsp; &nbsp;int getJumlahRoda(){<br />
          &nbsp;&nbsp; &nbsp;return jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;int getTahun(){<br />
          &nbsp;&nbsp; &nbsp;return tahun;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;String getWarna(){<br />
          &nbsp;&nbsp; &nbsp;return warna;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;String getJenis(){<br />
          &nbsp;&nbsp; &nbsp;return jenis;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Jumlah Roda : &quot;+getJumlahRoda());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Tahun : &quot;+getTahun());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Warna : &quot;+getWarna());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Jenis : &quot;+getJenis());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>3.&nbsp;&nbsp; &nbsp;Buatlah dokumen class F1.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class F1 extends Kendaraan {<br />
          &nbsp;&nbsp; &nbsp;private int kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;private boolean spoiler;</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;F1(){</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;F1(int jumlahRoda,int tahun, String warna, String jenis, int kecepatanMax, boolean spoiler){<br />
          &nbsp;&nbsp; &nbsp;super(jumlahRoda,tahun,warna,jenis);<br />
          &nbsp;&nbsp; &nbsp;this.kecepatanMax=kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;this.spoiler=spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengisi atribut F1<br />
          &nbsp;&nbsp; &nbsp;void kecepatanMax(int kecepatanMax){<br />
          &nbsp;&nbsp; &nbsp;this.kecepatanMax=kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setSpoiler(boolean spoiler){<br />
          &nbsp;&nbsp; &nbsp;this.spoiler=spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengambil atribut F1<br />
          &nbsp;&nbsp; &nbsp;int getKecepatanMax(){<br />
          &nbsp;&nbsp; &nbsp;return kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;boolean getSpoiler(){<br />
          &nbsp;&nbsp; &nbsp;return spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;super.info();<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Kecepatan Maksimal : &quot;+getKecepatanMax());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Memakai Spoiler : &quot;+getSpoiler());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>4.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Truk.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class Truk extends Kendaraan {<br />
          &nbsp;&nbsp; &nbsp;private int muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;private boolean gandengan;</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;Truk(){<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;Truk(int jumlahRoda,int tahun, String warna, String jenis, int muatanMaksimal, boolean gandengan){<br />
          &nbsp;&nbsp; &nbsp;super(jumlahRoda,tahun,warna,jenis);<br />
          &nbsp;&nbsp; &nbsp;this.muatanMaksimal=muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;this.gandengan=gandengan;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengisi atribut truk<br />
          &nbsp;&nbsp; &nbsp;void setMuatanMaksimal(int muatanMaksimal){<br />
          &nbsp;&nbsp; &nbsp;this.muatanMaksimal=muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setGandengan(boolean gandengan){<br />
          &nbsp;&nbsp; &nbsp;this.gandengan=gandengan;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengambil atribut truk<br />
          &nbsp;&nbsp; &nbsp;int getMuatanMaksimal(){<br />
          &nbsp;&nbsp; &nbsp;return muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;boolean getGandengan(){<br />
          &nbsp;&nbsp; &nbsp;return gandengan;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;super.info();<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Muatan Maksimal : &quot;+getMuatanMaksimal());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Gandengan : &quot;+getGandengan());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>5.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Utama.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class Utama {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Kendaraan myRide=new Kendaraan(4,1998,&quot;Hitam&quot;,&quot;Muscle&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myRide.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Truk myTruk=new Truk(8,2005,&quot;Silver&quot;,&quot;Tuner&quot;,30000,true);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myTruk.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;F1 myF1=new F1(4,2011,&quot;Lime&quot;,&quot;Exotic&quot;,320,true);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myF1.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          1.&nbsp;&nbsp; &nbsp;Buka dokumen Utama.java&nbsp;<br />
          2.&nbsp;&nbsp; &nbsp;Klik Run program, menghasilkan luaran berikut:</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture3.png" style="height:auto !important; margin-right:10px !important; max-width:800px !important; width:100% !important" /></p>

          <p>&nbsp;</p>

          <h3><br />
          <strong>Latihan Pengayaan:</strong></h3>

          <p>&nbsp;</p>

          <p>1.&nbsp;&nbsp; &nbsp;Berdasarkan keempat potongan kode tersebut, setiap kode memiliki variabel, constructor, method yang berbeda.<br />
          Analisa potongan kode yang menunjukkan sifat pewarisan, enkapsulasi, dan polimorfisme dari keempat dokumen Java tersebut!<br />
          2.&nbsp;&nbsp; &nbsp;Simpulkan perbedaan sifat pewarisan, enkapsulasi, dan polimorfisme berdasarkan keempat dokumen Java tersebut!<br />
          3.&nbsp;&nbsp; &nbsp;Susunlah diagram yang mengkonstruksikan sifat pewarisan, enkapsulasi, dan polimorfisme berdasarkan keempat dokumen Java tersebut (lihat contoh diagram class Bentuk)!<br />
          &nbsp;</p>','created_at' => '2022-09-11 22:39:58','updated_at' => '2022-09-11 22:39:58'),
            array('id' => '21','materi_id' => '92','judul' => 'Pengenalan Sifat Pemrograman Berorientasi Objek','isi_materi' => '<h2><strong>Materi Pengayaan</strong>&nbsp;</h2>

          <p><br />
          Java sebagai bahasa berorientasi objek memiliki sifat pewarisan (inheritance), enkapsulasi (encapsulation), dan polimorfisme (polimorfism).</p>

          <h3><strong>Enkapsulasi&nbsp;</strong></h3>

          <p>Enkapsulasi (encapsulation) merupakan cara untuk melindungi property (atribut)/ method tertentu dari sebuah kelas agar tidak sembarangan diakses dan dimodifikasi oleh suatu bagian program. Cara untuk melindungi data yaitu dengan menggunakan access modifiers (hak akses). Ada 4 hak akses yang tersedia, yaitu default, public, protected, private.</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture1.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <h3><strong>Inheritance&nbsp;</strong></h3>

          <p>Inheritance merupakan proses pewarisan data dan method dari suatu class yang telah ada kepada suatu class baru. Class yang mewariskan disebut dengan super class/ parent class/ base class, sedangkan class yang mewarisi (class yang baru) disebut dengan sub class/ child class/ derived class. Sub class tidak dapat mewarisi anggota private dari super class. Dengan inheritance, class yang baru (sub class) akan mirip dengan class yang lama (super class) namun memiliki karakteristik yang baru. Dalam Java, sub class hanya bisa memiliki satu super class (single inheritance) sedangkan super class bisa memiliki satu sub class atau lebih. Untuk menerapkan inheritance, gunakan statement&ldquo;extends&rdquo;.&nbsp;<br />
          Keyword &ldquo;super&rdquo; digunakan oleh sub class untuk memanggil constructor, atribut dan method yang ada pada super class.</p>

          <h3><strong>Polimorfisme&nbsp;</strong></h3>

          <p>Polimorfisme mempunyai makna sesuatu yang memiliki banyak bentuk, yaitu memiliki nama sama, tetapi memiliki kelakuan (behaviour) yang berbeda.&nbsp;<br />
          &nbsp;</p>

          <p>Class Bentuk merupakan class induk (super class) dari class Lingkaran, Elips, dan Segitiga mempunyai method gambar() dan hapus(). Class-class anak (sub class) juga mempunyai method gambar() dan hapus(). Meskipun keempat class tersebut mempunyai nama method yang sama, tetapi isi (source code/ yang dilakukan/ output) dari masing-masing method berbeda. Jika kita menginginkan sebuah objek yang dapat memanggil setiap method (yaitu method gambar &amp; hapus) yang ada pada setiap class (pada super class maupun subclass), maka gunakanlah teknik Polimorfisme. Polimorfisme hanya berlaku pada method dan tidak berlaku untuk atribut.</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture2.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p>&nbsp;</p>

          <p><strong>Contoh Pengayaan:</strong></p>

          <p>&nbsp;</p>

          <p>1.&nbsp;&nbsp; &nbsp;Buatlah package superKendaraan<br />
          2.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Kendaraan.java &nbsp;dengan menggunakan package superKendaraan<br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>class Kendaraan {<br />
          &nbsp; &nbsp; private int jumlahRoda,tahun;<br />
          &nbsp;&nbsp; &nbsp;private String warna,jenis;<br />
          &nbsp;&nbsp; &nbsp;Kendaraan(){</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;Kendaraan (int jumlahRoda,int tahun, String warna, String jenis){<br />
          &nbsp;&nbsp; &nbsp;this.jumlahRoda=jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;this.tahun=tahun;<br />
          &nbsp;&nbsp; &nbsp;this.warna=warna;<br />
          &nbsp;&nbsp; &nbsp;this.jenis=jenis;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengisi atribut kendaraan<br />
          &nbsp;&nbsp; &nbsp;void setJumlahRoda(int jumlahRoda){<br />
          &nbsp;&nbsp; &nbsp;this.jumlahRoda=jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setTahun(int tahun){<br />
          &nbsp;&nbsp; &nbsp;this.tahun=tahun;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setWarna(String warna){<br />
          &nbsp;&nbsp; &nbsp;this.warna=warna;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setJenis(String jenis){<br />
          &nbsp;&nbsp; &nbsp;this.jenis=jenis;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengambil atribut kendaraan<br />
          &nbsp;&nbsp; &nbsp;int getJumlahRoda(){<br />
          &nbsp;&nbsp; &nbsp;return jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;int getTahun(){<br />
          &nbsp;&nbsp; &nbsp;return tahun;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;String getWarna(){<br />
          &nbsp;&nbsp; &nbsp;return warna;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;String getJenis(){<br />
          &nbsp;&nbsp; &nbsp;return jenis;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Jumlah Roda : &quot;+getJumlahRoda());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Tahun : &quot;+getTahun());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Warna : &quot;+getWarna());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Jenis : &quot;+getJenis());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>3.&nbsp;&nbsp; &nbsp;Buatlah dokumen class F1.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class F1 extends Kendaraan {<br />
          &nbsp;&nbsp; &nbsp;private int kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;private boolean spoiler;</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;F1(){</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;F1(int jumlahRoda,int tahun, String warna, String jenis, int kecepatanMax, boolean spoiler){<br />
          &nbsp;&nbsp; &nbsp;super(jumlahRoda,tahun,warna,jenis);<br />
          &nbsp;&nbsp; &nbsp;this.kecepatanMax=kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;this.spoiler=spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengisi atribut F1<br />
          &nbsp;&nbsp; &nbsp;void kecepatanMax(int kecepatanMax){<br />
          &nbsp;&nbsp; &nbsp;this.kecepatanMax=kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setSpoiler(boolean spoiler){<br />
          &nbsp;&nbsp; &nbsp;this.spoiler=spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengambil atribut F1<br />
          &nbsp;&nbsp; &nbsp;int getKecepatanMax(){<br />
          &nbsp;&nbsp; &nbsp;return kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;boolean getSpoiler(){<br />
          &nbsp;&nbsp; &nbsp;return spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;super.info();<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Kecepatan Maksimal : &quot;+getKecepatanMax());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Memakai Spoiler : &quot;+getSpoiler());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>4.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Truk.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class Truk extends Kendaraan {<br />
          &nbsp;&nbsp; &nbsp;private int muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;private boolean gandengan;</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;Truk(){<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;Truk(int jumlahRoda,int tahun, String warna, String jenis, int muatanMaksimal, boolean gandengan){<br />
          &nbsp;&nbsp; &nbsp;super(jumlahRoda,tahun,warna,jenis);<br />
          &nbsp;&nbsp; &nbsp;this.muatanMaksimal=muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;this.gandengan=gandengan;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengisi atribut truk<br />
          &nbsp;&nbsp; &nbsp;void setMuatanMaksimal(int muatanMaksimal){<br />
          &nbsp;&nbsp; &nbsp;this.muatanMaksimal=muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setGandengan(boolean gandengan){<br />
          &nbsp;&nbsp; &nbsp;this.gandengan=gandengan;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengambil atribut truk<br />
          &nbsp;&nbsp; &nbsp;int getMuatanMaksimal(){<br />
          &nbsp;&nbsp; &nbsp;return muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;boolean getGandengan(){<br />
          &nbsp;&nbsp; &nbsp;return gandengan;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;super.info();<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Muatan Maksimal : &quot;+getMuatanMaksimal());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Gandengan : &quot;+getGandengan());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>5.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Utama.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class Utama {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Kendaraan myRide=new Kendaraan(4,1998,&quot;Hitam&quot;,&quot;Muscle&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myRide.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Truk myTruk=new Truk(8,2005,&quot;Silver&quot;,&quot;Tuner&quot;,30000,true);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myTruk.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;F1 myF1=new F1(4,2011,&quot;Lime&quot;,&quot;Exotic&quot;,320,true);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myF1.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          1.&nbsp;&nbsp; &nbsp;Buka dokumen Utama.java&nbsp;<br />
          2.&nbsp;&nbsp; &nbsp;Klik Run program, menghasilkan luaran berikut:</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture3.png" style="height:auto !important; margin-right:10px !important; max-width:800px !important; width:100% !important" /></p>

          <p>&nbsp;</p>

          <h3><br />
          <strong>Latihan Pengayaan:</strong></h3>

          <p>&nbsp;</p>

          <p>1.&nbsp;&nbsp; &nbsp;Berdasarkan keempat potongan kode tersebut, setiap kode memiliki variabel, constructor, method yang berbeda.<br />
          Analisa potongan kode yang menunjukkan sifat pewarisan, enkapsulasi, dan polimorfisme dari keempat dokumen Java tersebut!<br />
          2.&nbsp;&nbsp; &nbsp;Simpulkan perbedaan sifat pewarisan, enkapsulasi, dan polimorfisme berdasarkan keempat dokumen Java tersebut!<br />
          3.&nbsp;&nbsp; &nbsp;Susunlah diagram yang mengkonstruksikan sifat pewarisan, enkapsulasi, dan polimorfisme berdasarkan keempat dokumen Java tersebut (lihat contoh diagram class Bentuk)!<br />
          &nbsp;</p>','created_at' => '2022-09-11 22:40:18','updated_at' => '2022-09-11 22:40:18'),
            array('id' => '22','materi_id' => '94','judul' => 'Materi Pengayaan IF dan SWITCH','isi_materi' => '<h3><strong>Unit 1 Kombinasi IF dan SWITCH</strong></h3>

          <p>&nbsp;</p>

          <p><strong>Contoh Pengayaan 1: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

          <p>Diketahui: Mahasiswa yang memiliki KTM akan mendapatkan diskon setiap pembelanjaan di Koperasi. Ketentuannya:<br />
          a)&nbsp;&nbsp; &nbsp;Perbelanjaan lebih dari Rp. 500.000 maka akan mendapatkan diskon sebesar Rp. 50.000.<br />
          b)&nbsp;&nbsp; &nbsp;Perbelanjaan antara Rp. 500.000 hingga Rp. 100.000 maka mendapatkan diskon sebesar Rp. 15.000<br />
          c)&nbsp;&nbsp; &nbsp; Perbelanjaan dibawah Rp. 100.000 maka tidak mendapatkan diskon.</p>

          <p><strong>Solusi program:</strong></p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class IfSwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;// deklarasi variabel dan Scanner<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int belanjaan, diskon, bayar;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; byte kartu;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Scanner scan = new Scanner(System.in);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // mengambil input<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Apakah Anda memiliki kartu mahasiswa? &nbsp;(tulis angka 1 / 2)&quot;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;+ &quot;\\n 1. Ya \\n 2. Tidak &quot;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;+ &quot;\\n Jawaban: &nbsp;&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; kartu = scan.nextByte();<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Total belanjaan: &quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; belanjaan = scan.nextInt();</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // proses<br />
          &nbsp; &nbsp; &nbsp; &nbsp; switch(kartu) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; case 1:&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (belanjaan &gt;= 500000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 50000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else if (belanjaan &gt; 100000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 15000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 0;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bayar = belanjaan - diskon;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Total Bayar: Rp &quot; + bayar);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; case 2:<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (belanjaan &gt; 100000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 5000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 0;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bayar = belanjaan - diskon;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Total Bayar: Rp &quot; + bayar);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>Apakah Anda memiliki kartu mahasiswa? &nbsp;(tulis angka 1 / 2)<br />
          &nbsp;1. Ya&nbsp;<br />
          &nbsp;2. Tidak&nbsp;<br />
          &nbsp;Jawaban: &nbsp;1<br />
          Total belanjaan: 500000<br />
          Total Bayar: Rp 450000</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan 1</strong></p>

          <p>1.&nbsp;&nbsp; &nbsp;Susunlah kode program untuk menghitung besarnya gaji dengan pilihan antara pegawai tetap dan pegawai kontrak. Kedua pegawai memiliki jam lembur kerja.<br />
          Bila pegawai tetap maka besar gaji per bulan Rp. 4.000.000 dengan besar uang lembur Rp. 50.000/jam. Bila jam lembur lebih dari 20 jam maka mendapat bonus&nbsp;<br />
          Rp. 300.000. Jam lembur antara 10 sampai 20 jam mendapat bonus Rp. 150.000, sedangkan dibawah 10 jam tidak mendapatkan bonus.<br />
          Bila pegawai kontrak besar gaji per bulan Rp. 2.500.000 dengan besar uang lembur sebesar Rp. 40.000/jam. Bila jam lembur lebih dari 20 jam maka mendapat bonus Rp. 200.000.<br />
          Jam lembur antara 10 sampai 20 jam mendapat bonus Rp. 100.000, sedangkan dibawah 10 jam tidak mendapatkan bonus.<br />
          Rancang susunan kode program untuk menyelesaikan permasalahan tersebut dan menghitung jumlah total gaji yang diterima!</p>

          <p>&nbsp;</p>

          <h3><strong>Unit 2 &nbsp;Java GUI</strong></h3>

          <p>Java memiliki 2 paket untuk mengembangkan GUI, yaitu AWT (Abstract Window Toolkit) dan swing.</p>

          <p>1.&nbsp; AWT&nbsp;<br />
          &nbsp; &nbsp; &nbsp;AWT digunakan untuk implementasi User Interface. Kompoenen AWT seperti java.awt.window atau java.awt.panel harus digambar menggunakan GUI (Graphical User Interface)</p>

          <p>2.&nbsp; Swing&nbsp;<br />
          &nbsp; &nbsp; &nbsp;Swing pengembangan dari AWT dengan menambahkan komponen GUI. Komponen swing secara langsung diletakkan dilayar menggunakan kode Java.<br />
          &nbsp; &nbsp; &nbsp;Dibanding dg AWT penggunaan komponen-komponen Swing lebih memakan sumber daya yang lebih sedikit</p>

          <p><br />
          <strong>Komponen interface Swing&nbsp;</strong><br />
          &nbsp;<br />
          <img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if1.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p><strong>Contoh pemanggilan Swing:</strong></p>

          <p><code>import javax.swing.JOptionPane;<br />
          //tuliskan di paling atas sebelum class untuk memasukkan Pustaka swing</code></p>

          <p><code>JOptionPane.showInputDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p><code>JOptionPane.showMessageDialog(null, &ldquo;Informasi Mahasiswa&rdquo;); &nbsp;<br />
          // untuk menampilkan informasi atau luaran (output)</code></p>

          <p><code>JOptionPane.showConfirmDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p><code>JOptionPane.showOptionDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p>&nbsp;</p>

          <h3><strong>Contoh Pengayaan 2 GUI:</strong></h3>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//private void btnConfirmDialogActionPerformed(java.awt.event.ActionEvent evt) { &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int jawab = JOptionPane.showConfirmDialog(null, &quot;Silahkan Konfirmasi?&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 0 : yes<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 1 : no<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 2 : cancel<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;switch(jawab){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.YES_OPTION:&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab ya&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.NO_OPTION:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab tidak&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.CANCEL_OPTION:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab batal&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh Pengayaan 2:</strong></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if2.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <h3>&nbsp;<br />
          <strong>Contoh Pengayaan 3 GUI:</strong></h3>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int jawab = JOptionPane.showOptionDialog(null,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;Ingin Keluar?&quot;,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;Keluar&quot;,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; JOptionPane.YES_NO_OPTION,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; JOptionPane.QUESTION_MESSAGE, null, null, null);</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(jawab == JOptionPane.YES_OPTION){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Program Akan Keluar&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.exit(0);<br />
          } &nbsp; } &nbsp;}</code></p>

          <p>&nbsp;</p>

          <p><strong>Luaran Contoh Pengayaan 3:</strong></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if3.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p>&nbsp;<br />
          <strong>Contoh Pengayaan 3 GUI:</strong></p>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String masukData = JOptionPane.showInputDialog(&quot;Pilih Nilai (A - B - C)&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; char data = masukData.charAt(0);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;switch(data) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;A&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanA = &quot;Nilai A memiliki rentang nilai 80 - 100&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanA);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;B&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanB = &quot;Nilai B memiliki rentang nilai 65 - 79&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanB);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;C&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanC = &quot;Nilai C memiliki rentang nilai 55 - 64&quot;;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanC);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 3&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;default:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanD = &quot;Anda tidak lulus nilai dibawah 54 &quot;;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanD);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          &nbsp;</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if4.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if5.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan 2</strong></p>

          <p>2.&nbsp; Diketahui nama mata kuliah berikut:<br />
          &nbsp; &nbsp; &nbsp;a)&nbsp; &nbsp;Pengantar Teknologi Informasi dan Komunikasi (2 sks)<br />
          &nbsp; &nbsp; &nbsp;b)&nbsp; &nbsp;Sistem Digital (3 sks)<br />
          &nbsp; &nbsp; &nbsp;c)&nbsp; &nbsp;Komputer dan Pemrograman (3 sks)<br />
          &nbsp; &nbsp; &nbsp;d)&nbsp; &nbsp;Pengantar Sistem multimedia (2 sks)<br />
          &nbsp; &nbsp; &nbsp;Rancang kode program yang dapat menerima input nilai dari setiap mata kuliah ini!<br />
          &nbsp; &nbsp; &nbsp;Hitunglah nilai IPK berdasarkan input nilai yang dimasukkan pengguna!<br />
          &nbsp; &nbsp; &nbsp;Tampilkan hasil perhitungan IPK!</p>','created_at' => '2022-09-17 23:19:56','updated_at' => '2022-09-17 23:19:56'),
            array('id' => '23','materi_id' => '93','judul' => 'Materi Pengayaan IF dan SWITCH','isi_materi' => '<h3><strong>Unit 1 Kombinasi IF dan SWITCH</strong></h3>

          <p>&nbsp;</p>

          <p><strong>Contoh Pengayaan 1: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

          <p>Diketahui: Mahasiswa yang memiliki KTM akan mendapatkan diskon setiap pembelanjaan di Koperasi. Ketentuannya:<br />
          a)&nbsp;&nbsp; &nbsp;Perbelanjaan lebih dari Rp. 500.000 maka akan mendapatkan diskon sebesar Rp. 50.000.<br />
          b)&nbsp;&nbsp; &nbsp;Perbelanjaan antara Rp. 500.000 hingga Rp. 100.000 maka mendapatkan diskon sebesar Rp. 15.000<br />
          c)&nbsp;&nbsp; &nbsp; Perbelanjaan dibawah Rp. 100.000 maka tidak mendapatkan diskon.</p>

          <p><strong>Solusi program:</strong></p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class IfSwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;// deklarasi variabel dan Scanner<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int belanjaan, diskon, bayar;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; byte kartu;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Scanner scan = new Scanner(System.in);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // mengambil input<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Apakah Anda memiliki kartu mahasiswa? &nbsp;(tulis angka 1 / 2)&quot;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;+ &quot;\\n 1. Ya \\n 2. Tidak &quot;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;+ &quot;\\n Jawaban: &nbsp;&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; kartu = scan.nextByte();<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Total belanjaan: &quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; belanjaan = scan.nextInt();</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // proses<br />
          &nbsp; &nbsp; &nbsp; &nbsp; switch(kartu) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; case 1:&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (belanjaan &gt;= 500000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 50000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else if (belanjaan &gt; 100000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 15000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 0;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bayar = belanjaan - diskon;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Total Bayar: Rp &quot; + bayar);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; case 2:<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (belanjaan &gt; 100000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 5000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 0;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bayar = belanjaan - diskon;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Total Bayar: Rp &quot; + bayar);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>Apakah Anda memiliki kartu mahasiswa? &nbsp;(tulis angka 1 / 2)<br />
          &nbsp;1. Ya&nbsp;<br />
          &nbsp;2. Tidak&nbsp;<br />
          &nbsp;Jawaban: &nbsp;1<br />
          Total belanjaan: 500000<br />
          Total Bayar: Rp 450000</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan 1</strong></p>

          <p>1.&nbsp;&nbsp; &nbsp;Susunlah kode program untuk menghitung besarnya gaji dengan pilihan antara pegawai tetap dan pegawai kontrak. Kedua pegawai memiliki jam lembur kerja.<br />
          Bila pegawai tetap maka besar gaji per bulan Rp. 4.000.000 dengan besar uang lembur Rp. 50.000/jam. Bila jam lembur lebih dari 20 jam maka mendapat bonus&nbsp;<br />
          Rp. 300.000. Jam lembur antara 10 sampai 20 jam mendapat bonus Rp. 150.000, sedangkan dibawah 10 jam tidak mendapatkan bonus.<br />
          Bila pegawai kontrak besar gaji per bulan Rp. 2.500.000 dengan besar uang lembur sebesar Rp. 40.000/jam. Bila jam lembur lebih dari 20 jam maka mendapat bonus Rp. 200.000.<br />
          Jam lembur antara 10 sampai 20 jam mendapat bonus Rp. 100.000, sedangkan dibawah 10 jam tidak mendapatkan bonus.<br />
          Rancang susunan kode program untuk menyelesaikan permasalahan tersebut dan menghitung jumlah total gaji yang diterima!</p>

          <p>&nbsp;</p>

          <h3><strong>Unit 2 &nbsp;Java GUI</strong></h3>

          <p>Java memiliki 2 paket untuk mengembangkan GUI, yaitu AWT (Abstract Window Toolkit) dan swing.</p>

          <p>1.&nbsp; AWT&nbsp;<br />
          &nbsp; &nbsp; &nbsp;AWT digunakan untuk implementasi User Interface. Kompoenen AWT seperti java.awt.window atau java.awt.panel harus digambar menggunakan GUI (Graphical User Interface)</p>

          <p>2.&nbsp; Swing&nbsp;<br />
          &nbsp; &nbsp; &nbsp;Swing pengembangan dari AWT dengan menambahkan komponen GUI. Komponen swing secara langsung diletakkan dilayar menggunakan kode Java.<br />
          &nbsp; &nbsp; &nbsp;Dibanding dg AWT penggunaan komponen-komponen Swing lebih memakan sumber daya yang lebih sedikit</p>

          <p><br />
          <strong>Komponen interface Swing&nbsp;</strong><br />
          &nbsp;<br />
          <img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if1.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p><strong>Contoh pemanggilan Swing:</strong></p>

          <p><code>import javax.swing.JOptionPane;<br />
          //tuliskan di paling atas sebelum class untuk memasukkan Pustaka swing</code></p>

          <p><code>JOptionPane.showInputDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p><code>JOptionPane.showMessageDialog(null, &ldquo;Informasi Mahasiswa&rdquo;); &nbsp;<br />
          // untuk menampilkan informasi atau luaran (output)</code></p>

          <p><code>JOptionPane.showConfirmDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p><code>JOptionPane.showOptionDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p>&nbsp;</p>

          <h3><strong>Contoh Pengayaan 2 GUI:</strong></h3>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//private void btnConfirmDialogActionPerformed(java.awt.event.ActionEvent evt) { &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int jawab = JOptionPane.showConfirmDialog(null, &quot;Silahkan Konfirmasi?&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 0 : yes<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 1 : no<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 2 : cancel<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;switch(jawab){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.YES_OPTION:&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab ya&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.NO_OPTION:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab tidak&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.CANCEL_OPTION:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab batal&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh Pengayaan 2:</strong></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if2.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <h3>&nbsp;<br />
          <strong>Contoh Pengayaan 3 GUI:</strong></h3>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int jawab = JOptionPane.showOptionDialog(null,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;Ingin Keluar?&quot;,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;Keluar&quot;,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; JOptionPane.YES_NO_OPTION,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; JOptionPane.QUESTION_MESSAGE, null, null, null);</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(jawab == JOptionPane.YES_OPTION){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Program Akan Keluar&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.exit(0);<br />
          } &nbsp; } &nbsp;}</code></p>

          <p>&nbsp;</p>

          <p><strong>Luaran Contoh Pengayaan 3:</strong></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if3.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p>&nbsp;<br />
          <strong>Contoh Pengayaan 3 GUI:</strong></p>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String masukData = JOptionPane.showInputDialog(&quot;Pilih Nilai (A - B - C)&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; char data = masukData.charAt(0);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;switch(data) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;A&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanA = &quot;Nilai A memiliki rentang nilai 80 - 100&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanA);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;B&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanB = &quot;Nilai B memiliki rentang nilai 65 - 79&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanB);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;C&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanC = &quot;Nilai C memiliki rentang nilai 55 - 64&quot;;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanC);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 3&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;default:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanD = &quot;Anda tidak lulus nilai dibawah 54 &quot;;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanD);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          &nbsp;</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if4.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if5.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan 2</strong></p>

          <p>2.&nbsp; Diketahui nama mata kuliah berikut:<br />
          &nbsp; &nbsp; &nbsp;a)&nbsp; &nbsp;Pengantar Teknologi Informasi dan Komunikasi (2 sks)<br />
          &nbsp; &nbsp; &nbsp;b)&nbsp; &nbsp;Sistem Digital (3 sks)<br />
          &nbsp; &nbsp; &nbsp;c)&nbsp; &nbsp;Komputer dan Pemrograman (3 sks)<br />
          &nbsp; &nbsp; &nbsp;d)&nbsp; &nbsp;Pengantar Sistem multimedia (2 sks)<br />
          &nbsp; &nbsp; &nbsp;Rancang kode program yang dapat menerima input nilai dari setiap mata kuliah ini!<br />
          &nbsp; &nbsp; &nbsp;Hitunglah nilai IPK berdasarkan input nilai yang dimasukkan pengguna!<br />
          &nbsp; &nbsp; &nbsp;Tampilkan hasil perhitungan IPK!</p>','created_at' => '2022-09-17 23:20:45','updated_at' => '2022-09-17 23:20:45'),
            array('id' => '24','materi_id' => '96','judul' => 'Materi Pengayaan IF dan SWITCH','isi_materi' => '<h3><strong>Unit 1 Kombinasi IF dan SWITCH</strong></h3>

          <p>&nbsp;</p>

          <p><strong>Contoh Pengayaan 1: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

          <p>Diketahui: Mahasiswa yang memiliki KTM akan mendapatkan diskon setiap pembelanjaan di Koperasi. Ketentuannya:<br />
          a)&nbsp;&nbsp; &nbsp;Perbelanjaan lebih dari Rp. 500.000 maka akan mendapatkan diskon sebesar Rp. 50.000.<br />
          b)&nbsp;&nbsp; &nbsp;Perbelanjaan antara Rp. 500.000 hingga Rp. 100.000 maka mendapatkan diskon sebesar Rp. 15.000<br />
          c)&nbsp;&nbsp; &nbsp; Perbelanjaan dibawah Rp. 100.000 maka tidak mendapatkan diskon.</p>

          <p><strong>Solusi program:</strong></p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class IfSwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;// deklarasi variabel dan Scanner<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int belanjaan, diskon, bayar;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; byte kartu;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Scanner scan = new Scanner(System.in);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // mengambil input<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Apakah Anda memiliki kartu mahasiswa? &nbsp;(tulis angka 1 / 2)&quot;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;+ &quot;\\n 1. Ya \\n 2. Tidak &quot;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;+ &quot;\\n Jawaban: &nbsp;&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; kartu = scan.nextByte();<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Total belanjaan: &quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; belanjaan = scan.nextInt();</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // proses<br />
          &nbsp; &nbsp; &nbsp; &nbsp; switch(kartu) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; case 1:&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (belanjaan &gt;= 500000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 50000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else if (belanjaan &gt; 100000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 15000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 0;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bayar = belanjaan - diskon;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Total Bayar: Rp &quot; + bayar);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; case 2:<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (belanjaan &gt; 100000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 5000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 0;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bayar = belanjaan - diskon;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Total Bayar: Rp &quot; + bayar);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>Apakah Anda memiliki kartu mahasiswa? &nbsp;(tulis angka 1 / 2)<br />
          &nbsp;1. Ya&nbsp;<br />
          &nbsp;2. Tidak&nbsp;<br />
          &nbsp;Jawaban: &nbsp;1<br />
          Total belanjaan: 500000<br />
          Total Bayar: Rp 450000</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan 1</strong></p>

          <p>1.&nbsp;&nbsp; &nbsp;Susunlah kode program untuk menghitung besarnya gaji dengan pilihan antara pegawai tetap dan pegawai kontrak. Kedua pegawai memiliki jam lembur kerja.<br />
          Bila pegawai tetap maka besar gaji per bulan Rp. 4.000.000 dengan besar uang lembur Rp. 50.000/jam. Bila jam lembur lebih dari 20 jam maka mendapat bonus&nbsp;<br />
          Rp. 300.000. Jam lembur antara 10 sampai 20 jam mendapat bonus Rp. 150.000, sedangkan dibawah 10 jam tidak mendapatkan bonus.<br />
          Bila pegawai kontrak besar gaji per bulan Rp. 2.500.000 dengan besar uang lembur sebesar Rp. 40.000/jam. Bila jam lembur lebih dari 20 jam maka mendapat bonus Rp. 200.000.<br />
          Jam lembur antara 10 sampai 20 jam mendapat bonus Rp. 100.000, sedangkan dibawah 10 jam tidak mendapatkan bonus.<br />
          Rancang susunan kode program untuk menyelesaikan permasalahan tersebut dan menghitung jumlah total gaji yang diterima!</p>

          <p>&nbsp;</p>

          <h3><strong>Unit 2 &nbsp;Java GUI</strong></h3>

          <p>Java memiliki 2 paket untuk mengembangkan GUI, yaitu AWT (Abstract Window Toolkit) dan swing.</p>

          <p>1.&nbsp; AWT&nbsp;<br />
          &nbsp; &nbsp; &nbsp;AWT digunakan untuk implementasi User Interface. Kompoenen AWT seperti java.awt.window atau java.awt.panel harus digambar menggunakan GUI (Graphical User Interface)</p>

          <p>2.&nbsp; Swing&nbsp;<br />
          &nbsp; &nbsp; &nbsp;Swing pengembangan dari AWT dengan menambahkan komponen GUI. Komponen swing secara langsung diletakkan dilayar menggunakan kode Java.<br />
          &nbsp; &nbsp; &nbsp;Dibanding dg AWT penggunaan komponen-komponen Swing lebih memakan sumber daya yang lebih sedikit</p>

          <p><br />
          <strong>Komponen interface Swing&nbsp;</strong><br />
          &nbsp;<br />
          <img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if1.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p><strong>Contoh pemanggilan Swing:</strong></p>

          <p><code>import javax.swing.JOptionPane;<br />
          //tuliskan di paling atas sebelum class untuk memasukkan Pustaka swing</code></p>

          <p><code>JOptionPane.showInputDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p><code>JOptionPane.showMessageDialog(null, &ldquo;Informasi Mahasiswa&rdquo;); &nbsp;<br />
          // untuk menampilkan informasi atau luaran (output)</code></p>

          <p><code>JOptionPane.showConfirmDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p><code>JOptionPane.showOptionDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p>&nbsp;</p>

          <h3><strong>Contoh Pengayaan 2 GUI:</strong></h3>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//private void btnConfirmDialogActionPerformed(java.awt.event.ActionEvent evt) { &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int jawab = JOptionPane.showConfirmDialog(null, &quot;Silahkan Konfirmasi?&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 0 : yes<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 1 : no<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 2 : cancel<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;switch(jawab){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.YES_OPTION:&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab ya&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.NO_OPTION:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab tidak&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.CANCEL_OPTION:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab batal&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh Pengayaan 2:</strong></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if2.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <h3>&nbsp;<br />
          <strong>Contoh Pengayaan 3 GUI:</strong></h3>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int jawab = JOptionPane.showOptionDialog(null,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;Ingin Keluar?&quot;,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;Keluar&quot;,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; JOptionPane.YES_NO_OPTION,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; JOptionPane.QUESTION_MESSAGE, null, null, null);</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(jawab == JOptionPane.YES_OPTION){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Program Akan Keluar&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.exit(0);<br />
          } &nbsp; } &nbsp;}</code></p>

          <p>&nbsp;</p>

          <p><strong>Luaran Contoh Pengayaan 3:</strong></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if3.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p>&nbsp;<br />
          <strong>Contoh Pengayaan 3 GUI:</strong></p>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String masukData = JOptionPane.showInputDialog(&quot;Pilih Nilai (A - B - C)&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; char data = masukData.charAt(0);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;switch(data) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;A&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanA = &quot;Nilai A memiliki rentang nilai 80 - 100&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanA);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;B&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanB = &quot;Nilai B memiliki rentang nilai 65 - 79&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanB);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;C&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanC = &quot;Nilai C memiliki rentang nilai 55 - 64&quot;;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanC);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 3&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;default:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanD = &quot;Anda tidak lulus nilai dibawah 54 &quot;;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanD);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          &nbsp;</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if4.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if5.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan 2</strong></p>

          <p>2.&nbsp; Diketahui nama mata kuliah berikut:<br />
          &nbsp; &nbsp; &nbsp;a)&nbsp; &nbsp;Pengantar Teknologi Informasi dan Komunikasi (2 sks)<br />
          &nbsp; &nbsp; &nbsp;b)&nbsp; &nbsp;Sistem Digital (3 sks)<br />
          &nbsp; &nbsp; &nbsp;c)&nbsp; &nbsp;Komputer dan Pemrograman (3 sks)<br />
          &nbsp; &nbsp; &nbsp;d)&nbsp; &nbsp;Pengantar Sistem multimedia (2 sks)<br />
          &nbsp; &nbsp; &nbsp;Rancang kode program yang dapat menerima input nilai dari setiap mata kuliah ini!<br />
          &nbsp; &nbsp; &nbsp;Hitunglah nilai IPK berdasarkan input nilai yang dimasukkan pengguna!<br />
          &nbsp; &nbsp; &nbsp;Tampilkan hasil perhitungan IPK!</p>','created_at' => '2022-09-17 23:21:03','updated_at' => '2022-09-17 23:21:03'),
            array('id' => '25','materi_id' => '97','judul' => 'Materi Pengayaan IF dan SWITCH','isi_materi' => '<h3><strong>Unit 1 Kombinasi IF dan SWITCH</strong></h3>

          <p>&nbsp;</p>

          <p><strong>Contoh Pengayaan 1: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

          <p>Diketahui: Mahasiswa yang memiliki KTM akan mendapatkan diskon setiap pembelanjaan di Koperasi. Ketentuannya:<br />
          a)&nbsp;&nbsp; &nbsp;Perbelanjaan lebih dari Rp. 500.000 maka akan mendapatkan diskon sebesar Rp. 50.000.<br />
          b)&nbsp;&nbsp; &nbsp;Perbelanjaan antara Rp. 500.000 hingga Rp. 100.000 maka mendapatkan diskon sebesar Rp. 15.000<br />
          c)&nbsp;&nbsp; &nbsp; Perbelanjaan dibawah Rp. 100.000 maka tidak mendapatkan diskon.</p>

          <p><strong>Solusi program:</strong></p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class IfSwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;// deklarasi variabel dan Scanner<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int belanjaan, diskon, bayar;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; byte kartu;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Scanner scan = new Scanner(System.in);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // mengambil input<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Apakah Anda memiliki kartu mahasiswa? &nbsp;(tulis angka 1 / 2)&quot;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;+ &quot;\\n 1. Ya \\n 2. Tidak &quot;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;+ &quot;\\n Jawaban: &nbsp;&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; kartu = scan.nextByte();<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Total belanjaan: &quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; belanjaan = scan.nextInt();</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // proses<br />
          &nbsp; &nbsp; &nbsp; &nbsp; switch(kartu) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; case 1:&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (belanjaan &gt;= 500000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 50000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else if (belanjaan &gt; 100000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 15000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 0;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bayar = belanjaan - diskon;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Total Bayar: Rp &quot; + bayar);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; case 2:<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (belanjaan &gt; 100000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 5000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 0;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bayar = belanjaan - diskon;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Total Bayar: Rp &quot; + bayar);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>Apakah Anda memiliki kartu mahasiswa? &nbsp;(tulis angka 1 / 2)<br />
          &nbsp;1. Ya&nbsp;<br />
          &nbsp;2. Tidak&nbsp;<br />
          &nbsp;Jawaban: &nbsp;1<br />
          Total belanjaan: 500000<br />
          Total Bayar: Rp 450000</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan 1</strong></p>

          <p>1.&nbsp;&nbsp; &nbsp;Susunlah kode program untuk menghitung besarnya gaji dengan pilihan antara pegawai tetap dan pegawai kontrak. Kedua pegawai memiliki jam lembur kerja.<br />
          Bila pegawai tetap maka besar gaji per bulan Rp. 4.000.000 dengan besar uang lembur Rp. 50.000/jam. Bila jam lembur lebih dari 20 jam maka mendapat bonus&nbsp;<br />
          Rp. 300.000. Jam lembur antara 10 sampai 20 jam mendapat bonus Rp. 150.000, sedangkan dibawah 10 jam tidak mendapatkan bonus.<br />
          Bila pegawai kontrak besar gaji per bulan Rp. 2.500.000 dengan besar uang lembur sebesar Rp. 40.000/jam. Bila jam lembur lebih dari 20 jam maka mendapat bonus Rp. 200.000.<br />
          Jam lembur antara 10 sampai 20 jam mendapat bonus Rp. 100.000, sedangkan dibawah 10 jam tidak mendapatkan bonus.<br />
          Rancang susunan kode program untuk menyelesaikan permasalahan tersebut dan menghitung jumlah total gaji yang diterima!</p>

          <p>&nbsp;</p>

          <h3><strong>Unit 2 &nbsp;Java GUI</strong></h3>

          <p>Java memiliki 2 paket untuk mengembangkan GUI, yaitu AWT (Abstract Window Toolkit) dan swing.</p>

          <p>1.&nbsp; AWT&nbsp;<br />
          &nbsp; &nbsp; &nbsp;AWT digunakan untuk implementasi User Interface. Kompoenen AWT seperti java.awt.window atau java.awt.panel harus digambar menggunakan GUI (Graphical User Interface)</p>

          <p>2.&nbsp; Swing&nbsp;<br />
          &nbsp; &nbsp; &nbsp;Swing pengembangan dari AWT dengan menambahkan komponen GUI. Komponen swing secara langsung diletakkan dilayar menggunakan kode Java.<br />
          &nbsp; &nbsp; &nbsp;Dibanding dg AWT penggunaan komponen-komponen Swing lebih memakan sumber daya yang lebih sedikit</p>

          <p><br />
          <strong>Komponen interface Swing&nbsp;</strong><br />
          &nbsp;<br />
          <img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if1.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p><strong>Contoh pemanggilan Swing:</strong></p>

          <p><code>import javax.swing.JOptionPane;<br />
          //tuliskan di paling atas sebelum class untuk memasukkan Pustaka swing</code></p>

          <p><code>JOptionPane.showInputDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p><code>JOptionPane.showMessageDialog(null, &ldquo;Informasi Mahasiswa&rdquo;); &nbsp;<br />
          // untuk menampilkan informasi atau luaran (output)</code></p>

          <p><code>JOptionPane.showConfirmDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p><code>JOptionPane.showOptionDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p>&nbsp;</p>

          <h3><strong>Contoh Pengayaan 2 GUI:</strong></h3>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//private void btnConfirmDialogActionPerformed(java.awt.event.ActionEvent evt) { &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int jawab = JOptionPane.showConfirmDialog(null, &quot;Silahkan Konfirmasi?&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 0 : yes<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 1 : no<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 2 : cancel<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;switch(jawab){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.YES_OPTION:&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab ya&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.NO_OPTION:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab tidak&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.CANCEL_OPTION:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab batal&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh Pengayaan 2:</strong></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if2.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <h3>&nbsp;<br />
          <strong>Contoh Pengayaan 3 GUI:</strong></h3>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int jawab = JOptionPane.showOptionDialog(null,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;Ingin Keluar?&quot;,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;Keluar&quot;,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; JOptionPane.YES_NO_OPTION,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; JOptionPane.QUESTION_MESSAGE, null, null, null);</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(jawab == JOptionPane.YES_OPTION){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Program Akan Keluar&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.exit(0);<br />
          } &nbsp; } &nbsp;}</code></p>

          <p>&nbsp;</p>

          <p><strong>Luaran Contoh Pengayaan 3:</strong></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if3.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p>&nbsp;<br />
          <strong>Contoh Pengayaan 3 GUI:</strong></p>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String masukData = JOptionPane.showInputDialog(&quot;Pilih Nilai (A - B - C)&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; char data = masukData.charAt(0);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;switch(data) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;A&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanA = &quot;Nilai A memiliki rentang nilai 80 - 100&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanA);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;B&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanB = &quot;Nilai B memiliki rentang nilai 65 - 79&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanB);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;C&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanC = &quot;Nilai C memiliki rentang nilai 55 - 64&quot;;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanC);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 3&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;default:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanD = &quot;Anda tidak lulus nilai dibawah 54 &quot;;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanD);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          &nbsp;</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if4.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if5.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan 2</strong></p>

          <p>2.&nbsp; Diketahui nama mata kuliah berikut:<br />
          &nbsp; &nbsp; &nbsp;a)&nbsp; &nbsp;Pengantar Teknologi Informasi dan Komunikasi (2 sks)<br />
          &nbsp; &nbsp; &nbsp;b)&nbsp; &nbsp;Sistem Digital (3 sks)<br />
          &nbsp; &nbsp; &nbsp;c)&nbsp; &nbsp;Komputer dan Pemrograman (3 sks)<br />
          &nbsp; &nbsp; &nbsp;d)&nbsp; &nbsp;Pengantar Sistem multimedia (2 sks)<br />
          &nbsp; &nbsp; &nbsp;Rancang kode program yang dapat menerima input nilai dari setiap mata kuliah ini!<br />
          &nbsp; &nbsp; &nbsp;Hitunglah nilai IPK berdasarkan input nilai yang dimasukkan pengguna!<br />
          &nbsp; &nbsp; &nbsp;Tampilkan hasil perhitungan IPK!</p>','created_at' => '2022-09-17 23:21:21','updated_at' => '2022-09-17 23:21:21'),
            array('id' => '26','materi_id' => '95','judul' => 'Materi Pengayaan IF dan SWITCH','isi_materi' => '<h3><strong>Unit 1 Kombinasi IF dan SWITCH</strong></h3>

          <p>&nbsp;</p>

          <p><strong>Contoh Pengayaan 1: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

          <p>Diketahui: Mahasiswa yang memiliki KTM akan mendapatkan diskon setiap pembelanjaan di Koperasi. Ketentuannya:<br />
          a)&nbsp;&nbsp; &nbsp;Perbelanjaan lebih dari Rp. 500.000 maka akan mendapatkan diskon sebesar Rp. 50.000.<br />
          b)&nbsp;&nbsp; &nbsp;Perbelanjaan antara Rp. 500.000 hingga Rp. 100.000 maka mendapatkan diskon sebesar Rp. 15.000<br />
          c)&nbsp;&nbsp; &nbsp; Perbelanjaan dibawah Rp. 100.000 maka tidak mendapatkan diskon.</p>

          <p><strong>Solusi program:</strong></p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class IfSwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;// deklarasi variabel dan Scanner<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int belanjaan, diskon, bayar;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; byte kartu;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Scanner scan = new Scanner(System.in);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // mengambil input<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Apakah Anda memiliki kartu mahasiswa? &nbsp;(tulis angka 1 / 2)&quot;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;+ &quot;\\n 1. Ya \\n 2. Tidak &quot;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;+ &quot;\\n Jawaban: &nbsp;&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; kartu = scan.nextByte();<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Total belanjaan: &quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; belanjaan = scan.nextInt();</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // proses<br />
          &nbsp; &nbsp; &nbsp; &nbsp; switch(kartu) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; case 1:&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (belanjaan &gt;= 500000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 50000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else if (belanjaan &gt; 100000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 15000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 0;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bayar = belanjaan - diskon;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Total Bayar: Rp &quot; + bayar);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; case 2:<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (belanjaan &gt; 100000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 5000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 0;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bayar = belanjaan - diskon;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Total Bayar: Rp &quot; + bayar);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>Apakah Anda memiliki kartu mahasiswa? &nbsp;(tulis angka 1 / 2)<br />
          &nbsp;1. Ya&nbsp;<br />
          &nbsp;2. Tidak&nbsp;<br />
          &nbsp;Jawaban: &nbsp;1<br />
          Total belanjaan: 500000<br />
          Total Bayar: Rp 450000</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan 1</strong></p>

          <p>1.&nbsp;&nbsp; &nbsp;Susunlah kode program untuk menghitung besarnya gaji dengan pilihan antara pegawai tetap dan pegawai kontrak. Kedua pegawai memiliki jam lembur kerja.<br />
          Bila pegawai tetap maka besar gaji per bulan Rp. 4.000.000 dengan besar uang lembur Rp. 50.000/jam. Bila jam lembur lebih dari 20 jam maka mendapat bonus&nbsp;<br />
          Rp. 300.000. Jam lembur antara 10 sampai 20 jam mendapat bonus Rp. 150.000, sedangkan dibawah 10 jam tidak mendapatkan bonus.<br />
          Bila pegawai kontrak besar gaji per bulan Rp. 2.500.000 dengan besar uang lembur sebesar Rp. 40.000/jam. Bila jam lembur lebih dari 20 jam maka mendapat bonus Rp. 200.000.<br />
          Jam lembur antara 10 sampai 20 jam mendapat bonus Rp. 100.000, sedangkan dibawah 10 jam tidak mendapatkan bonus.<br />
          Rancang susunan kode program untuk menyelesaikan permasalahan tersebut dan menghitung jumlah total gaji yang diterima!</p>

          <p>&nbsp;</p>

          <h3><strong>Unit 2 &nbsp;Java GUI</strong></h3>

          <p>Java memiliki 2 paket untuk mengembangkan GUI, yaitu AWT (Abstract Window Toolkit) dan swing.</p>

          <p>1.&nbsp; AWT&nbsp;<br />
          &nbsp; &nbsp; &nbsp;AWT digunakan untuk implementasi User Interface. Kompoenen AWT seperti java.awt.window atau java.awt.panel harus digambar menggunakan GUI (Graphical User Interface)</p>

          <p>2.&nbsp; Swing&nbsp;<br />
          &nbsp; &nbsp; &nbsp;Swing pengembangan dari AWT dengan menambahkan komponen GUI. Komponen swing secara langsung diletakkan dilayar menggunakan kode Java.<br />
          &nbsp; &nbsp; &nbsp;Dibanding dg AWT penggunaan komponen-komponen Swing lebih memakan sumber daya yang lebih sedikit</p>

          <p><br />
          <strong>Komponen interface Swing&nbsp;</strong><br />
          &nbsp;<br />
          <img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if1.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p><strong>Contoh pemanggilan Swing:</strong></p>

          <p><code>import javax.swing.JOptionPane;<br />
          //tuliskan di paling atas sebelum class untuk memasukkan Pustaka swing</code></p>

          <p><code>JOptionPane.showInputDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p><code>JOptionPane.showMessageDialog(null, &ldquo;Informasi Mahasiswa&rdquo;); &nbsp;<br />
          // untuk menampilkan informasi atau luaran (output)</code></p>

          <p><code>JOptionPane.showConfirmDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p><code>JOptionPane.showOptionDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p>&nbsp;</p>

          <h3><strong>Contoh Pengayaan 2 GUI:</strong></h3>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//private void btnConfirmDialogActionPerformed(java.awt.event.ActionEvent evt) { &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int jawab = JOptionPane.showConfirmDialog(null, &quot;Silahkan Konfirmasi?&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 0 : yes<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 1 : no<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 2 : cancel<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;switch(jawab){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.YES_OPTION:&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab ya&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.NO_OPTION:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab tidak&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.CANCEL_OPTION:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab batal&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh Pengayaan 2:</strong></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if2.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <h3>&nbsp;<br />
          <strong>Contoh Pengayaan 3 GUI:</strong></h3>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int jawab = JOptionPane.showOptionDialog(null,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;Ingin Keluar?&quot;,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;Keluar&quot;,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; JOptionPane.YES_NO_OPTION,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; JOptionPane.QUESTION_MESSAGE, null, null, null);</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(jawab == JOptionPane.YES_OPTION){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Program Akan Keluar&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.exit(0);<br />
          } &nbsp; } &nbsp;}</code></p>

          <p>&nbsp;</p>

          <p><strong>Luaran Contoh Pengayaan 3:</strong></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if3.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p>&nbsp;<br />
          <strong>Contoh Pengayaan 3 GUI:</strong></p>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String masukData = JOptionPane.showInputDialog(&quot;Pilih Nilai (A - B - C)&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; char data = masukData.charAt(0);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;switch(data) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;A&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanA = &quot;Nilai A memiliki rentang nilai 80 - 100&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanA);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;B&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanB = &quot;Nilai B memiliki rentang nilai 65 - 79&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanB);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;C&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanC = &quot;Nilai C memiliki rentang nilai 55 - 64&quot;;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanC);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 3&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;default:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanD = &quot;Anda tidak lulus nilai dibawah 54 &quot;;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanD);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          &nbsp;</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if4.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if5.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan 2</strong></p>

          <p>2.&nbsp; Diketahui nama mata kuliah berikut:</p>

          <ol style="list-style-type:lower-alpha">
              <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Manajemen &amp; Organisasi<span style="color:black"> (2 sks)</span></span></span></span></li>
              <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Bahasa Pemrograman<span style="color:black"> (4 sks)</span></span></span></span></li>
              <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Komputer dan Pemrograman (3 sks)</span></span></span></span></li>
              <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Sistem dan Teknologi Informasi (2 sks)</span></span></span></span></li>
          </ol>

          <p>&nbsp; &nbsp; &nbsp;Rancang kode program yang dapat menerima input nilai dari setiap mata kuliah ini!<br />
          &nbsp; &nbsp; &nbsp;Hitunglah nilai IPK berdasarkan input nilai yang dimasukkan pengguna!<br />
          &nbsp; &nbsp; &nbsp;Tampilkan hasil perhitungan IPK!</p>','created_at' => '2022-09-17 23:22:24','updated_at' => '2022-09-17 23:22:24'),
            array('id' => '27','materi_id' => '98','judul' => 'Materi Pengayaan IF dan SWITCH','isi_materi' => '<h3><strong>Unit 1 Kombinasi IF dan SWITCH</strong></h3>

          <p>&nbsp;</p>

          <p><strong>Contoh Pengayaan 1: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

          <p>Diketahui: Mahasiswa yang memiliki KTM akan mendapatkan diskon setiap pembelanjaan di Koperasi. Ketentuannya:<br />
          a)&nbsp;&nbsp; &nbsp;Perbelanjaan lebih dari Rp. 500.000 maka akan mendapatkan diskon sebesar Rp. 50.000.<br />
          b)&nbsp;&nbsp; &nbsp;Perbelanjaan antara Rp. 500.000 hingga Rp. 100.000 maka mendapatkan diskon sebesar Rp. 15.000<br />
          c)&nbsp;&nbsp; &nbsp; Perbelanjaan dibawah Rp. 100.000 maka tidak mendapatkan diskon.</p>

          <p><strong>Solusi program:</strong></p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class IfSwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;// deklarasi variabel dan Scanner<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int belanjaan, diskon, bayar;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; byte kartu;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Scanner scan = new Scanner(System.in);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // mengambil input<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Apakah Anda memiliki kartu mahasiswa? &nbsp;(tulis angka 1 / 2)&quot;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;+ &quot;\\n 1. Ya \\n 2. Tidak &quot;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;+ &quot;\\n Jawaban: &nbsp;&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; kartu = scan.nextByte();<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Total belanjaan: &quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; belanjaan = scan.nextInt();</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // proses<br />
          &nbsp; &nbsp; &nbsp; &nbsp; switch(kartu) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; case 1:&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (belanjaan &gt;= 500000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 50000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else if (belanjaan &gt; 100000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 15000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 0;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bayar = belanjaan - diskon;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Total Bayar: Rp &quot; + bayar);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; case 2:<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (belanjaan &gt; 100000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 5000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 0;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bayar = belanjaan - diskon;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Total Bayar: Rp &quot; + bayar);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>Apakah Anda memiliki kartu mahasiswa? &nbsp;(tulis angka 1 / 2)<br />
          &nbsp;1. Ya&nbsp;<br />
          &nbsp;2. Tidak&nbsp;<br />
          &nbsp;Jawaban: &nbsp;1<br />
          Total belanjaan: 500000<br />
          Total Bayar: Rp 450000</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan 1</strong></p>

          <p>1.&nbsp;&nbsp; &nbsp;Susunlah kode program untuk menghitung besarnya gaji dengan pilihan antara pegawai tetap dan pegawai kontrak. Kedua pegawai memiliki jam lembur kerja.<br />
          Bila pegawai tetap maka besar gaji per bulan Rp. 4.000.000 dengan besar uang lembur Rp. 50.000/jam. Bila jam lembur lebih dari 20 jam maka mendapat bonus&nbsp;<br />
          Rp. 300.000. Jam lembur antara 10 sampai 20 jam mendapat bonus Rp. 150.000, sedangkan dibawah 10 jam tidak mendapatkan bonus.<br />
          Bila pegawai kontrak besar gaji per bulan Rp. 2.500.000 dengan besar uang lembur sebesar Rp. 40.000/jam. Bila jam lembur lebih dari 20 jam maka mendapat bonus Rp. 200.000.<br />
          Jam lembur antara 10 sampai 20 jam mendapat bonus Rp. 100.000, sedangkan dibawah 10 jam tidak mendapatkan bonus.<br />
          Rancang susunan kode program untuk menyelesaikan permasalahan tersebut dan menghitung jumlah total gaji yang diterima!</p>

          <p>&nbsp;</p>

          <h3><strong>Unit 2 &nbsp;Java GUI</strong></h3>

          <p>Java memiliki 2 paket untuk mengembangkan GUI, yaitu AWT (Abstract Window Toolkit) dan swing.</p>

          <p>1.&nbsp; AWT&nbsp;<br />
          &nbsp; &nbsp; &nbsp;AWT digunakan untuk implementasi User Interface. Kompoenen AWT seperti java.awt.window atau java.awt.panel harus digambar menggunakan GUI (Graphical User Interface)</p>

          <p>2.&nbsp; Swing&nbsp;<br />
          &nbsp; &nbsp; &nbsp;Swing pengembangan dari AWT dengan menambahkan komponen GUI. Komponen swing secara langsung diletakkan dilayar menggunakan kode Java.<br />
          &nbsp; &nbsp; &nbsp;Dibanding dg AWT penggunaan komponen-komponen Swing lebih memakan sumber daya yang lebih sedikit</p>

          <p><br />
          <strong>Komponen interface Swing&nbsp;</strong><br />
          &nbsp;<br />
          <img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if1.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p><strong>Contoh pemanggilan Swing:</strong></p>

          <p><code>import javax.swing.JOptionPane;<br />
          //tuliskan di paling atas sebelum class untuk memasukkan Pustaka swing</code></p>

          <p><code>JOptionPane.showInputDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p><code>JOptionPane.showMessageDialog(null, &ldquo;Informasi Mahasiswa&rdquo;); &nbsp;<br />
          // untuk menampilkan informasi atau luaran (output)</code></p>

          <p><code>JOptionPane.showConfirmDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p><code>JOptionPane.showOptionDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p>&nbsp;</p>

          <h3><strong>Contoh Pengayaan 2 GUI:</strong></h3>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//private void btnConfirmDialogActionPerformed(java.awt.event.ActionEvent evt) { &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int jawab = JOptionPane.showConfirmDialog(null, &quot;Silahkan Konfirmasi?&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 0 : yes<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 1 : no<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 2 : cancel<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;switch(jawab){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.YES_OPTION:&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab ya&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.NO_OPTION:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab tidak&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.CANCEL_OPTION:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab batal&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh Pengayaan 2:</strong></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if2.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <h3>&nbsp;<br />
          <strong>Contoh Pengayaan 3 GUI:</strong></h3>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int jawab = JOptionPane.showOptionDialog(null,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;Ingin Keluar?&quot;,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;Keluar&quot;,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; JOptionPane.YES_NO_OPTION,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; JOptionPane.QUESTION_MESSAGE, null, null, null);</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(jawab == JOptionPane.YES_OPTION){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Program Akan Keluar&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.exit(0);<br />
          } &nbsp; } &nbsp;}</code></p>

          <p>&nbsp;</p>

          <p><strong>Luaran Contoh Pengayaan 3:</strong></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if3.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p>&nbsp;<br />
          <strong>Contoh Pengayaan 3 GUI:</strong></p>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String masukData = JOptionPane.showInputDialog(&quot;Pilih Nilai (A - B - C)&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; char data = masukData.charAt(0);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;switch(data) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;A&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanA = &quot;Nilai A memiliki rentang nilai 80 - 100&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanA);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;B&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanB = &quot;Nilai B memiliki rentang nilai 65 - 79&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanB);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;C&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanC = &quot;Nilai C memiliki rentang nilai 55 - 64&quot;;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanC);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 3&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;default:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanD = &quot;Anda tidak lulus nilai dibawah 54 &quot;;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanD);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          &nbsp;</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if4.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if5.png" style="height:auto !important; margin-right:10px !important; max-width:500px !important; width:100% !important" /></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan 2</strong></p>

          <p>2.&nbsp; Diketahui nama mata kuliah berikut:</p>

          <ol style="list-style-type:lower-alpha">
              <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Manajemen &amp; Organisasi<span style="color:black"> (2 sks)</span></span></span></span></li>
              <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Bahasa Pemrograman<span style="color:black"> (4 sks)</span></span></span></span></li>
              <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Komputer dan Pemrograman (3 sks)</span></span></span></span></li>
              <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="color:black">Sistem dan Teknologi Informasi (2 sks)</span></span></span></span></li>
          </ol>

          <p>&nbsp; &nbsp; &nbsp;Rancang kode program yang dapat menerima input nilai dari setiap mata kuliah ini!<br />
          &nbsp; &nbsp; &nbsp;Hitunglah nilai IPK berdasarkan input nilai yang dimasukkan pengguna!<br />
          &nbsp; &nbsp; &nbsp;Tampilkan hasil perhitungan IPK!</p>','created_at' => '2022-09-17 23:22:45','updated_at' => '2022-09-17 23:22:45'),
            array('id' => '28','materi_id' => '100','judul' => 'Pengayaan FOR dan WHILE','isi_materi' => '<h2><strong>PENGAYAAN 1 ARRAY</strong></h2>

          <p>Array adalah sebuah variabel yang bisa menyimpan banyak data dalam satu variabel.</p>

          <p>Array menggunakan indeks untuk memudahkan akses terhadap data yang disimpannya<br />
          Indeks array selalu dimulai dari 0</p>

          <p><strong>Cara Membuat Array di Java</strong><br />
          Cara membuat array kosong:<br />
          <code>// cara pertama<br />
          String[] nama;</code></p>

          <p><code>// cara kedua<br />
          String nama[];</code></p>

          <p><code>// cara ketiga dengan kata kunci new<br />
          String[] nama = new String[5];</code></p>

          <p>Perhatikan:<br />
          &bull;&nbsp;&nbsp; &nbsp;Kita menggunakan kurung siku [] untuk membuat array;<br />
          &bull;&nbsp;&nbsp; &nbsp;Kurung siku bisa diletakkan setelah tipe data atau nama array;<br />
          &bull;&nbsp;&nbsp; &nbsp;Angka 5 dalam kurung artinya batas atau ukuran array-nya.</p>

          <p>Array yang kosong siap diisi dengan data. Pastikan mengisinya dengan data yang sesuai dengan tipe datanya.</p>

          <p>Kita bisa mengisinya seperti ini:<br />
          <code>NPM[0] = &quot;G1A022001&quot;;<br />
          NPM[1] = &quot;G1A022002&quot;;<br />
          NPM[2] = &quot;G1A022003&quot;;<br />
          NPM[3] = &quot;G1A022004&quot;;<br />
          NPM[4] = &quot;G1A022005&quot;;</code></p>

          <p>Atau dapat dituliskan dalam satu baris kode.<br />
          <code>String[] NPM = {&quot;G1A022001&quot;, &quot;G1A022002&quot;, &quot;G1A022003&quot;, &quot;G1A022004&quot;, &quot; G1A022005&quot;}</code></p>

          <p>Pemanggilan data array dengan cara:<br />
          <code>System.out.println(NPM[2]);<br />
          Luarannya adalah G1A022003</code></p>

          <p>Pemanggilan dengan perulangan FOR menggunakan kata kerja length untuk mengambil panjang data array.<br />
          <code>for (int i = 0; i &lt;= NPM.length; i++){<br />
          System.out.println(&ldquo;NPM Teman Sekelompok &ldquo; + i &nbsp;+ &ldquo; adalah &ldquo; + NPM[i]);</code></p>

          <p><strong>Contoh:</strong></p>

          <p><code>public class ArraySatuDimensi {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;String [] NPM = {&quot;G1A022001&quot;, &quot;G1A022002&quot;, &quot;G1A022003&quot;, &quot;G1A022004&quot;, &quot; G1A022005&quot;};<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;for (int i = 0; i &lt;= NPM.length; i++){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;NPM Teman Sekelompok &quot; + i &nbsp;+ &quot; adalah &quot; + NPM[i]);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;} &nbsp;&nbsp;&nbsp; &nbsp;</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>NPM Teman Sekelompok 0 adalah G1A022001<br />
          NPM Teman Sekelompok 1 adalah G1A022002<br />
          NPM Teman Sekelompok 2 adalah G1A022003<br />
          NPM Teman Sekelompok 3 adalah G1A022004<br />
          NPM Teman Sekelompok 4 adalah &nbsp;G1A022005</code></p>

          <p>&nbsp;</p>

          <h2><strong>PENGAYAAN 2&nbsp; -&nbsp; ARRAY MULTIDIMENSI</strong></h2>

          <p>Array multi dimensi artinya array yang memiliki lebih dari satu dimensi.<br />
          Atau kita bisa sebut, array di dalam array.<br />
          Jumlah dimensinya tidak terbatas.&nbsp;</p>

          <p>Contoh:</p>

          <p><code>String[][] identitas = {<br />
          &nbsp; &nbsp; {&quot;G1A022001&quot;,&quot;Budi&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022002&quot;,&quot;Lala&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022003&quot;,&quot;Putri&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022004&quot;,&quot;Putra&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022005&quot;,&quot;Bunga&quot;}<br />
          };</code></p>

          <p>Artinya indeks identitas ke [0] &ndash; [0] &nbsp;adalah data &quot;G1A022001&quot;,&quot;Budi&quot;.<br />
          Cara membaca array berdimensi dua yaitu:</p>

          <table border="1" cellpadding="1" cellspacing="1" style="width:500px">
              <tbody>
                  <tr>
                      <td style="text-align:center">Indeks</td>
                      <td style="text-align:center">0</td>
                      <td style="text-align:center">1</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">0</td>
                      <td style="text-align:center">G1A022001</td>
                      <td style="text-align:center">Budi</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">1</td>
                      <td style="text-align:center">G1A022002</td>
                      <td style="text-align:center">Lala</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">2</td>
                      <td style="text-align:center">G1A022003</td>
                      <td style="text-align:center">Putri</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">3</td>
                      <td style="text-align:center">G1A022004</td>
                      <td style="text-align:center">Putra</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">4</td>
                      <td style="text-align:center">G1A022005</td>
                      <td style="text-align:center">Bunga</td>
                  </tr>
              </tbody>
          </table>

          <p><strong>Contoh:</strong></p>

          <p><code>public class ArrayDuaDimensi {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;String[][] identitas ={<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022001&quot;,&quot;Budi&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022002&quot;,&quot;Lala&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022003&quot;,&quot;Putri&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022004&quot;,&quot;Putra&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022005&quot;,&quot;Bunga&quot;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;};</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;for (int a = 0; a &lt;= identitas.length; a++){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;NPM Teman Sekelompok &quot; + a &nbsp;+ &quot; adalah &quot; + identitas[a][0] + &quot; Namanya &quot; + identitas[a][1]);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>NPM Teman Sekelompok 0 adalah G1A022001 Namanya Budi<br />
          NPM Teman Sekelompok 1 adalah G1A022002 Namanya Lala<br />
          NPM Teman Sekelompok 2 adalah G1A022003 Namanya Putri<br />
          NPM Teman Sekelompok 3 adalah G1A022004 Namanya Putra<br />
          NPM Teman Sekelompok 4 adalah G1A022005 Namanya Bunga</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan:</strong></p>

          <p>1. Susun kembali kode identitas teman satu kelompok pada Tugas Kelompok Tipe Data dengan menggunakan Array!</p>

          <p>2. Susun kembali perhitungan SPP dan UKT pada Tugas Kelompok Operator dengan menggunakan Array Multi Dimensi!</p>','created_at' => '2022-09-24 22:33:19','updated_at' => '2022-09-24 22:33:19'),
            array('id' => '29','materi_id' => '102','judul' => 'Pengayaan FOR dan WHILE','isi_materi' => '<h2><strong>PENGAYAAN 1 ARRAY</strong></h2>

          <p>Array adalah sebuah variabel yang bisa menyimpan banyak data dalam satu variabel.</p>

          <p>Array menggunakan indeks untuk memudahkan akses terhadap data yang disimpannya<br />
          Indeks array selalu dimulai dari 0</p>

          <p><strong>Cara Membuat Array di Java</strong><br />
          Cara membuat array kosong:<br />
          <code>// cara pertama<br />
          String[] nama;</code></p>

          <p><code>// cara kedua<br />
          String nama[];</code></p>

          <p><code>// cara ketiga dengan kata kunci new<br />
          String[] nama = new String[5];</code></p>

          <p>Perhatikan:<br />
          &bull;&nbsp;&nbsp; &nbsp;Kita menggunakan kurung siku [] untuk membuat array;<br />
          &bull;&nbsp;&nbsp; &nbsp;Kurung siku bisa diletakkan setelah tipe data atau nama array;<br />
          &bull;&nbsp;&nbsp; &nbsp;Angka 5 dalam kurung artinya batas atau ukuran array-nya.</p>

          <p>Array yang kosong siap diisi dengan data. Pastikan mengisinya dengan data yang sesuai dengan tipe datanya.</p>

          <p>Kita bisa mengisinya seperti ini:<br />
          <code>NPM[0] = &quot;G1A022001&quot;;<br />
          NPM[1] = &quot;G1A022002&quot;;<br />
          NPM[2] = &quot;G1A022003&quot;;<br />
          NPM[3] = &quot;G1A022004&quot;;<br />
          NPM[4] = &quot;G1A022005&quot;;</code></p>

          <p>Atau dapat dituliskan dalam satu baris kode.<br />
          <code>String[] NPM = {&quot;G1A022001&quot;, &quot;G1A022002&quot;, &quot;G1A022003&quot;, &quot;G1A022004&quot;, &quot; G1A022005&quot;}</code></p>

          <p>Pemanggilan data array dengan cara:<br />
          <code>System.out.println(NPM[2]);<br />
          Luarannya adalah G1A022003</code></p>

          <p>Pemanggilan dengan perulangan FOR menggunakan kata kerja length untuk mengambil panjang data array.<br />
          <code>for (int i = 0; i &lt;= NPM.length; i++){<br />
          System.out.println(&ldquo;NPM Teman Sekelompok &ldquo; + i &nbsp;+ &ldquo; adalah &ldquo; + NPM[i]);</code></p>

          <p><strong>Contoh:</strong></p>

          <p><code>public class ArraySatuDimensi {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;String [] NPM = {&quot;G1A022001&quot;, &quot;G1A022002&quot;, &quot;G1A022003&quot;, &quot;G1A022004&quot;, &quot; G1A022005&quot;};<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;for (int i = 0; i &lt;= NPM.length; i++){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;NPM Teman Sekelompok &quot; + i &nbsp;+ &quot; adalah &quot; + NPM[i]);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;} &nbsp;&nbsp;&nbsp; &nbsp;</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>NPM Teman Sekelompok 0 adalah G1A022001<br />
          NPM Teman Sekelompok 1 adalah G1A022002<br />
          NPM Teman Sekelompok 2 adalah G1A022003<br />
          NPM Teman Sekelompok 3 adalah G1A022004<br />
          NPM Teman Sekelompok 4 adalah &nbsp;G1A022005</code></p>

          <p>&nbsp;</p>

          <h2><strong>PENGAYAAN 2&nbsp; -&nbsp; ARRAY MULTIDIMENSI</strong></h2>

          <p>Array multi dimensi artinya array yang memiliki lebih dari satu dimensi.<br />
          Atau kita bisa sebut, array di dalam array.<br />
          Jumlah dimensinya tidak terbatas.&nbsp;</p>

          <p>Contoh:</p>

          <p><code>String[][] identitas = {<br />
          &nbsp; &nbsp; {&quot;G1A022001&quot;,&quot;Budi&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022002&quot;,&quot;Lala&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022003&quot;,&quot;Putri&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022004&quot;,&quot;Putra&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022005&quot;,&quot;Bunga&quot;}<br />
          };</code></p>

          <p>Artinya indeks identitas ke [0] &ndash; [0] &nbsp;adalah data &quot;G1A022001&quot;,&quot;Budi&quot;.<br />
          Cara membaca array berdimensi dua yaitu:</p>

          <table border="1" cellpadding="1" cellspacing="1" style="width:500px">
              <tbody>
                  <tr>
                      <td style="text-align:center">Indeks</td>
                      <td style="text-align:center">0</td>
                      <td style="text-align:center">1</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">0</td>
                      <td style="text-align:center">G1A022001</td>
                      <td style="text-align:center">Budi</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">1</td>
                      <td style="text-align:center">G1A022002</td>
                      <td style="text-align:center">Lala</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">2</td>
                      <td style="text-align:center">G1A022003</td>
                      <td style="text-align:center">Putri</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">3</td>
                      <td style="text-align:center">G1A022004</td>
                      <td style="text-align:center">Putra</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">4</td>
                      <td style="text-align:center">G1A022005</td>
                      <td style="text-align:center">Bunga</td>
                  </tr>
              </tbody>
          </table>

          <p><strong>Contoh:</strong></p>

          <p><code>public class ArrayDuaDimensi {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;String[][] identitas ={<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022001&quot;,&quot;Budi&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022002&quot;,&quot;Lala&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022003&quot;,&quot;Putri&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022004&quot;,&quot;Putra&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022005&quot;,&quot;Bunga&quot;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;};</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;for (int a = 0; a &lt;= identitas.length; a++){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;NPM Teman Sekelompok &quot; + a &nbsp;+ &quot; adalah &quot; + identitas[a][0] + &quot; Namanya &quot; + identitas[a][1]);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>NPM Teman Sekelompok 0 adalah G1A022001 Namanya Budi<br />
          NPM Teman Sekelompok 1 adalah G1A022002 Namanya Lala<br />
          NPM Teman Sekelompok 2 adalah G1A022003 Namanya Putri<br />
          NPM Teman Sekelompok 3 adalah G1A022004 Namanya Putra<br />
          NPM Teman Sekelompok 4 adalah G1A022005 Namanya Bunga</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan:</strong></p>

          <p>1. Susun kembali kode identitas teman satu kelompok pada Tugas Kelompok Tipe Data dengan menggunakan Array!</p>

          <p>2. Susun kembali perhitungan SPP dan UKT pada Tugas Kelompok Operator dengan menggunakan Array Multi Dimensi!</p>','created_at' => '2022-09-24 22:33:44','updated_at' => '2022-09-24 22:33:44'),
            array('id' => '30','materi_id' => '104','judul' => 'Pengayaan FOR dan WHILE','isi_materi' => '<h2><strong>PENGAYAAN 1 ARRAY</strong></h2>

          <p>Array adalah sebuah variabel yang bisa menyimpan banyak data dalam satu variabel.</p>

          <p>Array menggunakan indeks untuk memudahkan akses terhadap data yang disimpannya<br />
          Indeks array selalu dimulai dari 0</p>

          <p><strong>Cara Membuat Array di Java</strong><br />
          Cara membuat array kosong:<br />
          <code>// cara pertama<br />
          String[] nama;</code></p>

          <p><code>// cara kedua<br />
          String nama[];</code></p>

          <p><code>// cara ketiga dengan kata kunci new<br />
          String[] nama = new String[5];</code></p>

          <p>Perhatikan:<br />
          &bull;&nbsp;&nbsp; &nbsp;Kita menggunakan kurung siku [] untuk membuat array;<br />
          &bull;&nbsp;&nbsp; &nbsp;Kurung siku bisa diletakkan setelah tipe data atau nama array;<br />
          &bull;&nbsp;&nbsp; &nbsp;Angka 5 dalam kurung artinya batas atau ukuran array-nya.</p>

          <p>Array yang kosong siap diisi dengan data. Pastikan mengisinya dengan data yang sesuai dengan tipe datanya.</p>

          <p>Kita bisa mengisinya seperti ini:<br />
          <code>NPM[0] = &quot;G1A022001&quot;;<br />
          NPM[1] = &quot;G1A022002&quot;;<br />
          NPM[2] = &quot;G1A022003&quot;;<br />
          NPM[3] = &quot;G1A022004&quot;;<br />
          NPM[4] = &quot;G1A022005&quot;;</code></p>

          <p>Atau dapat dituliskan dalam satu baris kode.<br />
          <code>String[] NPM = {&quot;G1A022001&quot;, &quot;G1A022002&quot;, &quot;G1A022003&quot;, &quot;G1A022004&quot;, &quot; G1A022005&quot;}</code></p>

          <p>Pemanggilan data array dengan cara:<br />
          <code>System.out.println(NPM[2]);<br />
          Luarannya adalah G1A022003</code></p>

          <p>Pemanggilan dengan perulangan FOR menggunakan kata kerja length untuk mengambil panjang data array.<br />
          <code>for (int i = 0; i &lt;= NPM.length; i++){<br />
          System.out.println(&ldquo;NPM Teman Sekelompok &ldquo; + i &nbsp;+ &ldquo; adalah &ldquo; + NPM[i]);</code></p>

          <p><strong>Contoh:</strong></p>

          <p><code>public class ArraySatuDimensi {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;String [] NPM = {&quot;G1A022001&quot;, &quot;G1A022002&quot;, &quot;G1A022003&quot;, &quot;G1A022004&quot;, &quot; G1A022005&quot;};<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;for (int i = 0; i &lt;= NPM.length; i++){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;NPM Teman Sekelompok &quot; + i &nbsp;+ &quot; adalah &quot; + NPM[i]);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;} &nbsp;&nbsp;&nbsp; &nbsp;</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>NPM Teman Sekelompok 0 adalah G1A022001<br />
          NPM Teman Sekelompok 1 adalah G1A022002<br />
          NPM Teman Sekelompok 2 adalah G1A022003<br />
          NPM Teman Sekelompok 3 adalah G1A022004<br />
          NPM Teman Sekelompok 4 adalah &nbsp;G1A022005</code></p>

          <p>&nbsp;</p>

          <h2><strong>PENGAYAAN 2&nbsp; -&nbsp; ARRAY MULTIDIMENSI</strong></h2>

          <p>Array multi dimensi artinya array yang memiliki lebih dari satu dimensi.<br />
          Atau kita bisa sebut, array di dalam array.<br />
          Jumlah dimensinya tidak terbatas.&nbsp;</p>

          <p>Contoh:</p>

          <p><code>String[][] identitas = {<br />
          &nbsp; &nbsp; {&quot;G1A022001&quot;,&quot;Budi&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022002&quot;,&quot;Lala&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022003&quot;,&quot;Putri&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022004&quot;,&quot;Putra&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022005&quot;,&quot;Bunga&quot;}<br />
          };</code></p>

          <p>Artinya indeks identitas ke [0] &ndash; [0] &nbsp;adalah data &quot;G1A022001&quot;,&quot;Budi&quot;.<br />
          Cara membaca array berdimensi dua yaitu:</p>

          <table border="1" cellpadding="1" cellspacing="1" style="width:500px">
              <tbody>
                  <tr>
                      <td style="text-align:center">Indeks</td>
                      <td style="text-align:center">0</td>
                      <td style="text-align:center">1</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">0</td>
                      <td style="text-align:center">G1A022001</td>
                      <td style="text-align:center">Budi</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">1</td>
                      <td style="text-align:center">G1A022002</td>
                      <td style="text-align:center">Lala</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">2</td>
                      <td style="text-align:center">G1A022003</td>
                      <td style="text-align:center">Putri</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">3</td>
                      <td style="text-align:center">G1A022004</td>
                      <td style="text-align:center">Putra</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">4</td>
                      <td style="text-align:center">G1A022005</td>
                      <td style="text-align:center">Bunga</td>
                  </tr>
              </tbody>
          </table>

          <p><strong>Contoh:</strong></p>

          <p><code>public class ArrayDuaDimensi {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;String[][] identitas ={<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022001&quot;,&quot;Budi&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022002&quot;,&quot;Lala&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022003&quot;,&quot;Putri&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022004&quot;,&quot;Putra&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022005&quot;,&quot;Bunga&quot;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;};</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;for (int a = 0; a &lt;= identitas.length; a++){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;NPM Teman Sekelompok &quot; + a &nbsp;+ &quot; adalah &quot; + identitas[a][0] + &quot; Namanya &quot; + identitas[a][1]);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>NPM Teman Sekelompok 0 adalah G1A022001 Namanya Budi<br />
          NPM Teman Sekelompok 1 adalah G1A022002 Namanya Lala<br />
          NPM Teman Sekelompok 2 adalah G1A022003 Namanya Putri<br />
          NPM Teman Sekelompok 3 adalah G1A022004 Namanya Putra<br />
          NPM Teman Sekelompok 4 adalah G1A022005 Namanya Bunga</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan:</strong></p>

          <p>1. Susun kembali kode identitas teman satu kelompok pada Tugas Kelompok Tipe Data dengan menggunakan Array!</p>

          <p>2. Susun kembali perhitungan SPP dan UKT pada Tugas Kelompok Operator dengan menggunakan Array Multi Dimensi!</p>','created_at' => '2022-09-24 22:34:16','updated_at' => '2022-09-24 22:34:16'),
            array('id' => '31','materi_id' => '99','judul' => 'Pengayaan FOR dan WHILE','isi_materi' => '<h2><strong>PENGAYAAN 1 ARRAY</strong></h2>

          <p>Array adalah sebuah variabel yang bisa menyimpan banyak data dalam satu variabel.</p>

          <p>Array menggunakan indeks untuk memudahkan akses terhadap data yang disimpannya<br />
          Indeks array selalu dimulai dari 0</p>

          <p><strong>Cara Membuat Array di Java</strong><br />
          Cara membuat array kosong:<br />
          <code>// cara pertama<br />
          String[] nama;</code></p>

          <p><code>// cara kedua<br />
          String nama[];</code></p>

          <p><code>// cara ketiga dengan kata kunci new<br />
          String[] nama = new String[5];</code></p>

          <p>Perhatikan:<br />
          &bull;&nbsp;&nbsp; &nbsp;Kita menggunakan kurung siku [] untuk membuat array;<br />
          &bull;&nbsp;&nbsp; &nbsp;Kurung siku bisa diletakkan setelah tipe data atau nama array;<br />
          &bull;&nbsp;&nbsp; &nbsp;Angka 5 dalam kurung artinya batas atau ukuran array-nya.</p>

          <p>Array yang kosong siap diisi dengan data. Pastikan mengisinya dengan data yang sesuai dengan tipe datanya.</p>

          <p>Kita bisa mengisinya seperti ini:<br />
          <code>NPM[0] = &quot;G1A022001&quot;;<br />
          NPM[1] = &quot;G1A022002&quot;;<br />
          NPM[2] = &quot;G1A022003&quot;;<br />
          NPM[3] = &quot;G1A022004&quot;;<br />
          NPM[4] = &quot;G1A022005&quot;;</code></p>

          <p>Atau dapat dituliskan dalam satu baris kode.<br />
          <code>String[] NPM = {&quot;G1A022001&quot;, &quot;G1A022002&quot;, &quot;G1A022003&quot;, &quot;G1A022004&quot;, &quot; G1A022005&quot;}</code></p>

          <p>Pemanggilan data array dengan cara:<br />
          <code>System.out.println(NPM[2]);<br />
          Luarannya adalah G1A022003</code></p>

          <p>Pemanggilan dengan perulangan FOR menggunakan kata kerja length untuk mengambil panjang data array.<br />
          <code>for (int i = 0; i &lt;= NPM.length; i++){<br />
          System.out.println(&ldquo;NPM Teman Sekelompok &ldquo; + i &nbsp;+ &ldquo; adalah &ldquo; + NPM[i]);</code></p>

          <p><strong>Contoh:</strong></p>

          <p><code>public class ArraySatuDimensi {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;String [] NPM = {&quot;G1A022001&quot;, &quot;G1A022002&quot;, &quot;G1A022003&quot;, &quot;G1A022004&quot;, &quot; G1A022005&quot;};<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;for (int i = 0; i &lt;= NPM.length; i++){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;NPM Teman Sekelompok &quot; + i &nbsp;+ &quot; adalah &quot; + NPM[i]);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;} &nbsp;&nbsp;&nbsp; &nbsp;</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>NPM Teman Sekelompok 0 adalah G1A022001<br />
          NPM Teman Sekelompok 1 adalah G1A022002<br />
          NPM Teman Sekelompok 2 adalah G1A022003<br />
          NPM Teman Sekelompok 3 adalah G1A022004<br />
          NPM Teman Sekelompok 4 adalah &nbsp;G1A022005</code></p>

          <p>&nbsp;</p>

          <h2><strong>PENGAYAAN 2&nbsp; -&nbsp; ARRAY MULTIDIMENSI</strong></h2>

          <p>Array multi dimensi artinya array yang memiliki lebih dari satu dimensi.<br />
          Atau kita bisa sebut, array di dalam array.<br />
          Jumlah dimensinya tidak terbatas.&nbsp;</p>

          <p>Contoh:</p>

          <p><code>String[][] identitas = {<br />
          &nbsp; &nbsp; {&quot;G1A022001&quot;,&quot;Budi&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022002&quot;,&quot;Lala&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022003&quot;,&quot;Putri&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022004&quot;,&quot;Putra&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022005&quot;,&quot;Bunga&quot;}<br />
          };</code></p>

          <p>Artinya indeks identitas ke [0] &ndash; [0] &nbsp;adalah data &quot;G1A022001&quot;,&quot;Budi&quot;.<br />
          Cara membaca array berdimensi dua yaitu:</p>

          <table border="1" cellpadding="1" cellspacing="1" style="width:500px">
              <tbody>
                  <tr>
                      <td style="text-align:center">Indeks</td>
                      <td style="text-align:center">0</td>
                      <td style="text-align:center">1</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">0</td>
                      <td style="text-align:center">G1A022001</td>
                      <td style="text-align:center">Budi</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">1</td>
                      <td style="text-align:center">G1A022002</td>
                      <td style="text-align:center">Lala</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">2</td>
                      <td style="text-align:center">G1A022003</td>
                      <td style="text-align:center">Putri</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">3</td>
                      <td style="text-align:center">G1A022004</td>
                      <td style="text-align:center">Putra</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">4</td>
                      <td style="text-align:center">G1A022005</td>
                      <td style="text-align:center">Bunga</td>
                  </tr>
              </tbody>
          </table>

          <p><strong>Contoh:</strong></p>

          <p><code>public class ArrayDuaDimensi {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;String[][] identitas ={<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022001&quot;,&quot;Budi&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022002&quot;,&quot;Lala&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022003&quot;,&quot;Putri&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022004&quot;,&quot;Putra&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022005&quot;,&quot;Bunga&quot;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;};</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;for (int a = 0; a &lt;= identitas.length; a++){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;NPM Teman Sekelompok &quot; + a &nbsp;+ &quot; adalah &quot; + identitas[a][0] + &quot; Namanya &quot; + identitas[a][1]);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>NPM Teman Sekelompok 0 adalah G1A022001 Namanya Budi<br />
          NPM Teman Sekelompok 1 adalah G1A022002 Namanya Lala<br />
          NPM Teman Sekelompok 2 adalah G1A022003 Namanya Putri<br />
          NPM Teman Sekelompok 3 adalah G1A022004 Namanya Putra<br />
          NPM Teman Sekelompok 4 adalah G1A022005 Namanya Bunga</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan:</strong></p>

          <p>1. Susun kembali kode identitas teman satu kelompok pada Tugas Kelompok Tipe Data dengan menggunakan Array!</p>

          <p>2. Susun kembali perhitungan SPP dan UKT pada Tugas Kelompok Operator dengan menggunakan Array Multi Dimensi!</p>','created_at' => '2022-09-24 22:34:21','updated_at' => '2022-09-24 22:34:21'),
            array('id' => '32','materi_id' => '101','judul' => 'Pengayaan FOR dan WHILE','isi_materi' => '<h2><strong>PENGAYAAN 1 ARRAY</strong></h2>

          <p>Array adalah sebuah variabel yang bisa menyimpan banyak data dalam satu variabel.</p>

          <p>Array menggunakan indeks untuk memudahkan akses terhadap data yang disimpannya<br />
          Indeks array selalu dimulai dari 0</p>

          <p><strong>Cara Membuat Array di Java</strong><br />
          Cara membuat array kosong:<br />
          <code>// cara pertama<br />
          String[] nama;</code></p>

          <p><code>// cara kedua<br />
          String nama[];</code></p>

          <p><code>// cara ketiga dengan kata kunci new<br />
          String[] nama = new String[5];</code></p>

          <p>Perhatikan:<br />
          &bull;&nbsp;&nbsp; &nbsp;Kita menggunakan kurung siku [] untuk membuat array;<br />
          &bull;&nbsp;&nbsp; &nbsp;Kurung siku bisa diletakkan setelah tipe data atau nama array;<br />
          &bull;&nbsp;&nbsp; &nbsp;Angka 5 dalam kurung artinya batas atau ukuran array-nya.</p>

          <p>Array yang kosong siap diisi dengan data. Pastikan mengisinya dengan data yang sesuai dengan tipe datanya.</p>

          <p>Kita bisa mengisinya seperti ini:<br />
          <code>NPM[0] = &quot;G1A022001&quot;;<br />
          NPM[1] = &quot;G1A022002&quot;;<br />
          NPM[2] = &quot;G1A022003&quot;;<br />
          NPM[3] = &quot;G1A022004&quot;;<br />
          NPM[4] = &quot;G1A022005&quot;;</code></p>

          <p>Atau dapat dituliskan dalam satu baris kode.<br />
          <code>String[] NPM = {&quot;G1A022001&quot;, &quot;G1A022002&quot;, &quot;G1A022003&quot;, &quot;G1A022004&quot;, &quot; G1A022005&quot;}</code></p>

          <p>Pemanggilan data array dengan cara:<br />
          <code>System.out.println(NPM[2]);<br />
          Luarannya adalah G1A022003</code></p>

          <p>Pemanggilan dengan perulangan FOR menggunakan kata kerja length untuk mengambil panjang data array.<br />
          <code>for (int i = 0; i &lt;= NPM.length; i++){<br />
          System.out.println(&ldquo;NPM Teman Sekelompok &ldquo; + i &nbsp;+ &ldquo; adalah &ldquo; + NPM[i]);</code></p>

          <p><strong>Contoh:</strong></p>

          <p><code>public class ArraySatuDimensi {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;String [] NPM = {&quot;G1A022001&quot;, &quot;G1A022002&quot;, &quot;G1A022003&quot;, &quot;G1A022004&quot;, &quot; G1A022005&quot;};<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;for (int i = 0; i &lt;= NPM.length; i++){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;NPM Teman Sekelompok &quot; + i &nbsp;+ &quot; adalah &quot; + NPM[i]);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;} &nbsp;&nbsp;&nbsp; &nbsp;</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>NPM Teman Sekelompok 0 adalah G1A022001<br />
          NPM Teman Sekelompok 1 adalah G1A022002<br />
          NPM Teman Sekelompok 2 adalah G1A022003<br />
          NPM Teman Sekelompok 3 adalah G1A022004<br />
          NPM Teman Sekelompok 4 adalah &nbsp;G1A022005</code></p>

          <p>&nbsp;</p>

          <h2><strong>PENGAYAAN 2&nbsp; -&nbsp; ARRAY MULTIDIMENSI</strong></h2>

          <p>Array multi dimensi artinya array yang memiliki lebih dari satu dimensi.<br />
          Atau kita bisa sebut, array di dalam array.<br />
          Jumlah dimensinya tidak terbatas.&nbsp;</p>

          <p>Contoh:</p>

          <p><code>String[][] identitas = {<br />
          &nbsp; &nbsp; {&quot;G1A022001&quot;,&quot;Budi&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022002&quot;,&quot;Lala&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022003&quot;,&quot;Putri&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022004&quot;,&quot;Putra&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022005&quot;,&quot;Bunga&quot;}<br />
          };</code></p>

          <p>Artinya indeks identitas ke [0] &ndash; [0] &nbsp;adalah data &quot;G1A022001&quot;,&quot;Budi&quot;.<br />
          Cara membaca array berdimensi dua yaitu:</p>

          <table border="1" cellpadding="1" cellspacing="1" style="width:500px">
              <tbody>
                  <tr>
                      <td style="text-align:center">Indeks</td>
                      <td style="text-align:center">0</td>
                      <td style="text-align:center">1</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">0</td>
                      <td style="text-align:center">G1A022001</td>
                      <td style="text-align:center">Budi</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">1</td>
                      <td style="text-align:center">G1A022002</td>
                      <td style="text-align:center">Lala</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">2</td>
                      <td style="text-align:center">G1A022003</td>
                      <td style="text-align:center">Putri</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">3</td>
                      <td style="text-align:center">G1A022004</td>
                      <td style="text-align:center">Putra</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">4</td>
                      <td style="text-align:center">G1A022005</td>
                      <td style="text-align:center">Bunga</td>
                  </tr>
              </tbody>
          </table>

          <p><strong>Contoh:</strong></p>

          <p><code>public class ArrayDuaDimensi {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;String[][] identitas ={<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022001&quot;,&quot;Budi&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022002&quot;,&quot;Lala&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022003&quot;,&quot;Putri&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022004&quot;,&quot;Putra&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022005&quot;,&quot;Bunga&quot;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;};</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;for (int a = 0; a &lt;= identitas.length; a++){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;NPM Teman Sekelompok &quot; + a &nbsp;+ &quot; adalah &quot; + identitas[a][0] + &quot; Namanya &quot; + identitas[a][1]);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>NPM Teman Sekelompok 0 adalah G1A022001 Namanya Budi<br />
          NPM Teman Sekelompok 1 adalah G1A022002 Namanya Lala<br />
          NPM Teman Sekelompok 2 adalah G1A022003 Namanya Putri<br />
          NPM Teman Sekelompok 3 adalah G1A022004 Namanya Putra<br />
          NPM Teman Sekelompok 4 adalah G1A022005 Namanya Bunga</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan:</strong></p>

          <p>1. Susun kembali kode identitas teman satu kelompok pada Tugas Kelompok Tipe Data dengan menggunakan Array!</p>

          <p>2. Susun kembali perhitungan SPP dan UKT pada Tugas Kelompok Operator dengan menggunakan Array Multi Dimensi!</p>','created_at' => '2022-09-24 22:34:26','updated_at' => '2022-09-24 22:34:26'),
            array('id' => '33','materi_id' => '103','judul' => 'Pengayaan FOR dan WHILE','isi_materi' => '<h2><strong>PENGAYAAN 1 ARRAY</strong></h2>

          <p>Array adalah sebuah variabel yang bisa menyimpan banyak data dalam satu variabel.</p>

          <p>Array menggunakan indeks untuk memudahkan akses terhadap data yang disimpannya<br />
          Indeks array selalu dimulai dari 0</p>

          <p><strong>Cara Membuat Array di Java</strong><br />
          Cara membuat array kosong:<br />
          <code>// cara pertama<br />
          String[] nama;</code></p>

          <p><code>// cara kedua<br />
          String nama[];</code></p>

          <p><code>// cara ketiga dengan kata kunci new<br />
          String[] nama = new String[5];</code></p>

          <p>Perhatikan:<br />
          &bull;&nbsp;&nbsp; &nbsp;Kita menggunakan kurung siku [] untuk membuat array;<br />
          &bull;&nbsp;&nbsp; &nbsp;Kurung siku bisa diletakkan setelah tipe data atau nama array;<br />
          &bull;&nbsp;&nbsp; &nbsp;Angka 5 dalam kurung artinya batas atau ukuran array-nya.</p>

          <p>Array yang kosong siap diisi dengan data. Pastikan mengisinya dengan data yang sesuai dengan tipe datanya.</p>

          <p>Kita bisa mengisinya seperti ini:<br />
          <code>NPM[0] = &quot;G1A022001&quot;;<br />
          NPM[1] = &quot;G1A022002&quot;;<br />
          NPM[2] = &quot;G1A022003&quot;;<br />
          NPM[3] = &quot;G1A022004&quot;;<br />
          NPM[4] = &quot;G1A022005&quot;;</code></p>

          <p>Atau dapat dituliskan dalam satu baris kode.<br />
          <code>String[] NPM = {&quot;G1A022001&quot;, &quot;G1A022002&quot;, &quot;G1A022003&quot;, &quot;G1A022004&quot;, &quot; G1A022005&quot;}</code></p>

          <p>Pemanggilan data array dengan cara:<br />
          <code>System.out.println(NPM[2]);<br />
          Luarannya adalah G1A022003</code></p>

          <p>Pemanggilan dengan perulangan FOR menggunakan kata kerja length untuk mengambil panjang data array.<br />
          <code>for (int i = 0; i &lt;= NPM.length; i++){<br />
          System.out.println(&ldquo;NPM Teman Sekelompok &ldquo; + i &nbsp;+ &ldquo; adalah &ldquo; + NPM[i]);</code></p>

          <p><strong>Contoh:</strong></p>

          <p><code>public class ArraySatuDimensi {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;String [] NPM = {&quot;G1A022001&quot;, &quot;G1A022002&quot;, &quot;G1A022003&quot;, &quot;G1A022004&quot;, &quot; G1A022005&quot;};<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;for (int i = 0; i &lt;= NPM.length; i++){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;NPM Teman Sekelompok &quot; + i &nbsp;+ &quot; adalah &quot; + NPM[i]);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;} &nbsp;&nbsp;&nbsp; &nbsp;</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>NPM Teman Sekelompok 0 adalah G1A022001<br />
          NPM Teman Sekelompok 1 adalah G1A022002<br />
          NPM Teman Sekelompok 2 adalah G1A022003<br />
          NPM Teman Sekelompok 3 adalah G1A022004<br />
          NPM Teman Sekelompok 4 adalah &nbsp;G1A022005</code></p>

          <p>&nbsp;</p>

          <h2><strong>PENGAYAAN 2&nbsp; -&nbsp; ARRAY MULTIDIMENSI</strong></h2>

          <p>Array multi dimensi artinya array yang memiliki lebih dari satu dimensi.<br />
          Atau kita bisa sebut, array di dalam array.<br />
          Jumlah dimensinya tidak terbatas.&nbsp;</p>

          <p>Contoh:</p>

          <p><code>String[][] identitas = {<br />
          &nbsp; &nbsp; {&quot;G1A022001&quot;,&quot;Budi&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022002&quot;,&quot;Lala&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022003&quot;,&quot;Putri&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022004&quot;,&quot;Putra&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022005&quot;,&quot;Bunga&quot;}<br />
          };</code></p>

          <p>Artinya indeks identitas ke [0] &ndash; [0] &nbsp;adalah data &quot;G1A022001&quot;,&quot;Budi&quot;.<br />
          Cara membaca array berdimensi dua yaitu:</p>

          <table border="1" cellpadding="1" cellspacing="1" style="width:500px">
              <tbody>
                  <tr>
                      <td style="text-align:center">Indeks</td>
                      <td style="text-align:center">0</td>
                      <td style="text-align:center">1</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">0</td>
                      <td style="text-align:center">G1A022001</td>
                      <td style="text-align:center">Budi</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">1</td>
                      <td style="text-align:center">G1A022002</td>
                      <td style="text-align:center">Lala</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">2</td>
                      <td style="text-align:center">G1A022003</td>
                      <td style="text-align:center">Putri</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">3</td>
                      <td style="text-align:center">G1A022004</td>
                      <td style="text-align:center">Putra</td>
                  </tr>
                  <tr>
                      <td style="text-align:center">4</td>
                      <td style="text-align:center">G1A022005</td>
                      <td style="text-align:center">Bunga</td>
                  </tr>
              </tbody>
          </table>

          <p><strong>Contoh:</strong></p>

          <p><code>public class ArrayDuaDimensi {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;String[][] identitas ={<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022001&quot;,&quot;Budi&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022002&quot;,&quot;Lala&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022003&quot;,&quot;Putri&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022004&quot;,&quot;Putra&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022005&quot;,&quot;Bunga&quot;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;};</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;for (int a = 0; a &lt;= identitas.length; a++){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;NPM Teman Sekelompok &quot; + a &nbsp;+ &quot; adalah &quot; + identitas[a][0] + &quot; Namanya &quot; + identitas[a][1]);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>NPM Teman Sekelompok 0 adalah G1A022001 Namanya Budi<br />
          NPM Teman Sekelompok 1 adalah G1A022002 Namanya Lala<br />
          NPM Teman Sekelompok 2 adalah G1A022003 Namanya Putri<br />
          NPM Teman Sekelompok 3 adalah G1A022004 Namanya Putra<br />
          NPM Teman Sekelompok 4 adalah G1A022005 Namanya Bunga</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan:</strong></p>

          <p>1. Susun kembali kode identitas teman satu kelompok pada Tugas Kelompok Tipe Data dengan menggunakan Array!</p>

          <p>2. Susun kembali perhitungan SPP dan UKT pada Tugas Kelompok Operator dengan menggunakan Array Multi Dimensi!</p>','created_at' => '2022-09-24 22:34:31','updated_at' => '2022-09-24 22:34:31'),
            array('id' => '34','materi_id' => '105','judul' => 'Pengayaan Tipe Data','isi_materi' => '<h1><strong>PENGAYAAN </strong><strong>&nbsp;1</strong></h1>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle. Perhatikan potongan kode berikut:<br />
          <code>public class TipeData{</code><br />
          <code>&nbsp; public static void main(String[] args)</code><code>&nbsp;{</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;byte terkecil= &quot; + Byte.<strong><em>MIN_VALUE</em></strong>);</code> <code>&nbsp;&nbsp;<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;byte terbesar= &quot; + Byte.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n short terkecil= &quot; + Short.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;short terbesar= &quot; + Short.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp;&nbsp;&nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n int terkecil= &quot; + Integer.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp;&nbsp;&nbsp; System.<strong><em>out</em></strong>.println(&quot;int terbesar= &quot; + Integer.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n long terkecil= &quot; + Long.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;long terbesar= &quot; + Long.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n float terkecil= &quot; + Float.<strong><em>MIN_VALUE</em></strong>);<br />
          &nbsp;</code><code>&nbsp; &nbsp;System.<strong><em>out</em></strong>.println(&quot;float terbesar= &quot; + Float.<strong><em>MAX_VALUE</em></strong>);<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n double terkecil= &quot; + Double.<strong><em>MIN_VALUE</em></strong>);<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;double terbesar= &quot; + Double.<strong><em>MAX_VALUE</em></strong>);<br />
          <br />
          &nbsp; &nbsp;&nbsp;int nilai1 = 200;<br />
          &nbsp; &nbsp;&nbsp;byte nilbyte = (byte) 200;<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n Nilai integer = &quot; + nilai1);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;Nilai byte= &quot; + nilbyte);</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<code>int nilai2 = -40000;<br />
          &nbsp; &nbsp;&nbsp;short nilshort = (short) nilai2;<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n Nilai integer = &quot; + nilai2);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;Nilai short= &quot; + nilshort);<br />
          }&nbsp; &nbsp; }</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>byte terkecil= -128<br />
          byte terbesar= 127</code></p>

          <p><code>short terkecil= -32768<br />
          short terbesar= 32767</code></p>

          <p><code>int terkecil= -2147483648<br />
          int terbesar= 2147483647</code></p>

          <p><code>long terkecil= -9223372036854775808<br />
          long terbesar= 9223372036854775807</code></p>

          <p><code>float terkecil= 1.4E-45<br />
          float terbesar= 3.4028235E38</code></p>

          <p><code>double terkecil= 4.9E-324<br />
          double terbesar= 1.7976931348623157E308</code></p>

          <p><code>Nilai integer = 200<br />
          Nilai byte= -56</code></p>

          <p><code>Nilai integer = -40000<br />
          Nilai short= 25536</code></p>

          <p><strong>Ayo berlatih!</strong></p>

          <ol>
              <li>Analisa pengaruh dari ukuran tipe data terhadap data yang akan diolah!</li>
              <li>Ubah nilai integer untuk short dan byte. Simpulkan perubahan yang terjadi!</li>
          </ol>

          <p>&nbsp;</p>

          <p><strong>PENGAYAAN 2</strong></p>

          <p>Setiap tipe data memiliki specifier yang berbeda, seperti berikut</p>

          <table cellspacing="0">
              <tbody>
                  <tr>
                      <td>
                      <p>S<code>pecifier</code></p>
                      </td>
                      <td>
                      <p><code>Deskripsi</code></p>
                      </td>
                      <td>
                      <p><code>Contoh</code></p>
                      </td>
                      <td>
                      <p><code>Luaran</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td>
                      <p><code>%b</code></p>
                      </td>
                      <td>
                      <p><code>boolean</code></p>
                      </td>
                      <td>
                      <p><code>%6b</code></p>
                      </td>
                      <td>
                      <p><code>˽false</code></p>

                      <p><code>˽˽true</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td>
                      <p><code>%c</code></p>
                      </td>
                      <td>
                      <p><code>character</code></p>
                      </td>
                      <td>
                      <p><code>%5c</code></p>
                      </td>
                      <td>
                      <p><code>˽˽˽˽a</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td>
                      <p><code>%d</code></p>
                      </td>
                      <td>
                      <p><code>integer</code></p>
                      </td>
                      <td>
                      <p><code>%5d</code></p>
                      </td>
                      <td>
                      <p><code>˽˽˽69</code></p>

                      <p><code>1234567</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td>
                      <p><code>%f</code></p>
                      </td>
                      <td>
                      <p><code>Floating-point</code></p>
                      </td>
                      <td>
                      <p><code>%5.2f</code></p>
                      </td>
                      <td>
                      <p><code>˽˽3.14</code></p>

                      <p><code>˽20.60</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td>
                      <p><code>%e</code></p>
                      </td>
                      <td>
                      <p><code>scientific</code></p>
                      </td>
                      <td>
                      <p><code>%10.2e</code></p>
                      </td>
                      <td>
                      <p><code>˽˽3.14e+02</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td>
                      <p><code>%s</code></p>
                      </td>
                      <td>
                      <p><code>string</code></p>
                      </td>
                      <td>
                      <p><code>%10s</code></p>
                      </td>
                      <td>
                      <p><code>˽˽˽˽˽hello</code></p>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>&nbsp;</p>

          <p><strong>PENGAYAAN 3 </strong></p>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p>Perhatikan potongan kode berikut:</p>

          <p><code>public class TipeData{<br />
          &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp;&nbsp;double num = 1974.9215;<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println( &quot;number=1974.9215&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;Format |Position&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;String |01234567890123456789&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;----------+--------------------&quot; );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%-20f:&quot;, num );<br />
          <em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+-20f:&quot;, num );<br />
          &nbsp; &nbsp;&nbsp;<em>printFloatWithFormat</em>( &quot;%,-20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+-,20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%020f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+020f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,020f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,020f:&quot;,num);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;----------+--------------------&quot; );<br />
          }</code></p>

          <p><code>public static void printFloatWithFormat( String fmt, double v)<br />
          {<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.printf( &quot;%-10s|&quot;,fmt);<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.printf( fmt, v );<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.println();<br />
          }&nbsp; &nbsp;}</code></p>

          <p>Luaran:</p>

          <p><code>number=1974.9215<br />
          Format |Position<br />
          String |01234567890123456789<br />
          ----------+--------------------<br />
          %f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |1974.921500:<br />
          %+f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |+1974.921500:<br />
          %,f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |1,974.921500:<br />
          %+,f:&nbsp;&nbsp;&nbsp;&nbsp; |+1,974.921500:<br />
          %20f:&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1974.921500:<br />
          %+20f:&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +1974.921500:<br />
          %,20f:&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1,974.921500:<br />
          %+,20f:&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +1,974.921500:<br />
          %-20f:&nbsp;&nbsp;&nbsp; |1974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %+-20f:&nbsp;&nbsp; |+1974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %,-20f:&nbsp;&nbsp; |1,974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %+-,20f:&nbsp; |+1,974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %020f:&nbsp;&nbsp;&nbsp; |0000000001974.921500:<br />
          %+020f:&nbsp;&nbsp; |+000000001974.921500:<br />
          %,020f:&nbsp;&nbsp; |000000001,974.921500:<br />
          %+,020f:&nbsp; |+00000001,974.921500:<br />
          ----------+--------------------</code></p>

          <p><strong>Ayo berlatih!</strong></p>

          <ol>
              <li>Analisa pengaruh dari specifier terhadap data yang akan ditampung!</li>
              <li>Konstruksikan kode specifier untuk tipe data boolean, integer, string dengan masing-masing 3 contoh format specifier!</li>
          </ol>

          <p>&quot;</p>','created_at' => '2024-08-20 08:24:22','updated_at' => '2024-08-20 08:24:22'),
            array('id' => '35','materi_id' => '106','judul' => 'Pengayaan Tipe Data','isi_materi' => '<h1><strong>PENGAYAAN </strong><strong>&nbsp;1</strong></h1>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle. Perhatikan potongan kode berikut:<br />
          <code>public class TipeData{</code><br />
          <code>&nbsp; public static void main(String[] args)</code><code>&nbsp;{</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;byte terkecil= &quot; + Byte.<strong><em>MIN_VALUE</em></strong>);</code> <code>&nbsp;&nbsp;<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;byte terbesar= &quot; + Byte.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n short terkecil= &quot; + Short.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;short terbesar= &quot; + Short.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp;&nbsp;&nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n int terkecil= &quot; + Integer.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp;&nbsp;&nbsp; System.<strong><em>out</em></strong>.println(&quot;int terbesar= &quot; + Integer.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n long terkecil= &quot; + Long.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;long terbesar= &quot; + Long.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n float terkecil= &quot; + Float.<strong><em>MIN_VALUE</em></strong>);<br />
          &nbsp;</code><code>&nbsp; &nbsp;System.<strong><em>out</em></strong>.println(&quot;float terbesar= &quot; + Float.<strong><em>MAX_VALUE</em></strong>);<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n double terkecil= &quot; + Double.<strong><em>MIN_VALUE</em></strong>);<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;double terbesar= &quot; + Double.<strong><em>MAX_VALUE</em></strong>);<br />
          <br />
          &nbsp; &nbsp;&nbsp;int nilai1 = 200;<br />
          &nbsp; &nbsp;&nbsp;byte nilbyte = (byte) 200;<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n Nilai integer = &quot; + nilai1);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;Nilai byte= &quot; + nilbyte);</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<code>int nilai2 = -40000;<br />
          &nbsp; &nbsp;&nbsp;short nilshort = (short) nilai2;<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n Nilai integer = &quot; + nilai2);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;Nilai short= &quot; + nilshort);<br />
          }&nbsp; &nbsp; }</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>byte terkecil= -128<br />
          byte terbesar= 127</code></p>

          <p><code>short terkecil= -32768<br />
          short terbesar= 32767</code></p>

          <p><code>int terkecil= -2147483648<br />
          int terbesar= 2147483647</code></p>

          <p><code>long terkecil= -9223372036854775808<br />
          long terbesar= 9223372036854775807</code></p>

          <p><code>float terkecil= 1.4E-45<br />
          float terbesar= 3.4028235E38</code></p>

          <p><code>double terkecil= 4.9E-324<br />
          double terbesar= 1.7976931348623157E308</code></p>

          <p><code>Nilai integer = 200<br />
          Nilai byte= -56</code></p>

          <p><code>Nilai integer = -40000<br />
          Nilai short= 25536</code></p>

          <p><strong>Ayo berlatih!</strong></p>

          <ol>
              <li>Analisa pengaruh dari ukuran tipe data terhadap data yang akan diolah!</li>
              <li>Ubah nilai integer untuk short dan byte. Simpulkan perubahan yang terjadi!</li>
          </ol>

          <p>&nbsp;</p>

          <p><strong>PENGAYAAN 2</strong></p>

          <p>Setiap tipe data memiliki specifier yang berbeda, seperti berikut</p>

          <table cellspacing="0">
              <tbody>
                  <tr>
                      <td>
                      <p>S<code>pecifier</code></p>
                      </td>
                      <td>
                      <p><code>Deskripsi</code></p>
                      </td>
                      <td>
                      <p><code>Contoh</code></p>
                      </td>
                      <td>
                      <p><code>Luaran</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td>
                      <p><code>%b</code></p>
                      </td>
                      <td>
                      <p><code>boolean</code></p>
                      </td>
                      <td>
                      <p><code>%6b</code></p>
                      </td>
                      <td>
                      <p><code>˽false</code></p>

                      <p><code>˽˽true</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td>
                      <p><code>%c</code></p>
                      </td>
                      <td>
                      <p><code>character</code></p>
                      </td>
                      <td>
                      <p><code>%5c</code></p>
                      </td>
                      <td>
                      <p><code>˽˽˽˽a</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td>
                      <p><code>%d</code></p>
                      </td>
                      <td>
                      <p><code>integer</code></p>
                      </td>
                      <td>
                      <p><code>%5d</code></p>
                      </td>
                      <td>
                      <p><code>˽˽˽69</code></p>

                      <p><code>1234567</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td>
                      <p><code>%f</code></p>
                      </td>
                      <td>
                      <p><code>Floating-point</code></p>
                      </td>
                      <td>
                      <p><code>%5.2f</code></p>
                      </td>
                      <td>
                      <p><code>˽˽3.14</code></p>

                      <p><code>˽20.60</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td>
                      <p><code>%e</code></p>
                      </td>
                      <td>
                      <p><code>scientific</code></p>
                      </td>
                      <td>
                      <p><code>%10.2e</code></p>
                      </td>
                      <td>
                      <p><code>˽˽3.14e+02</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td>
                      <p><code>%s</code></p>
                      </td>
                      <td>
                      <p><code>string</code></p>
                      </td>
                      <td>
                      <p><code>%10s</code></p>
                      </td>
                      <td>
                      <p><code>˽˽˽˽˽hello</code></p>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>&nbsp;</p>

          <p><strong>PENGAYAAN 3 </strong></p>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p>Perhatikan potongan kode berikut:</p>

          <p><code>public class TipeData{<br />
          &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp;&nbsp;double num = 1974.9215;<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println( &quot;number=1974.9215&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;Format |Position&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;String |01234567890123456789&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;----------+--------------------&quot; );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%-20f:&quot;, num );<br />
          <em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+-20f:&quot;, num );<br />
          &nbsp; &nbsp;&nbsp;<em>printFloatWithFormat</em>( &quot;%,-20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+-,20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%020f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+020f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,020f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,020f:&quot;,num);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;----------+--------------------&quot; );<br />
          }</code></p>

          <p><code>public static void printFloatWithFormat( String fmt, double v)<br />
          {<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.printf( &quot;%-10s|&quot;,fmt);<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.printf( fmt, v );<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.println();<br />
          }&nbsp; &nbsp;}</code></p>

          <p>Luaran:</p>

          <p><code>number=1974.9215<br />
          Format |Position<br />
          String |01234567890123456789<br />
          ----------+--------------------<br />
          %f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |1974.921500:<br />
          %+f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |+1974.921500:<br />
          %,f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |1,974.921500:<br />
          %+,f:&nbsp;&nbsp;&nbsp;&nbsp; |+1,974.921500:<br />
          %20f:&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1974.921500:<br />
          %+20f:&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +1974.921500:<br />
          %,20f:&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1,974.921500:<br />
          %+,20f:&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +1,974.921500:<br />
          %-20f:&nbsp;&nbsp;&nbsp; |1974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %+-20f:&nbsp;&nbsp; |+1974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %,-20f:&nbsp;&nbsp; |1,974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %+-,20f:&nbsp; |+1,974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %020f:&nbsp;&nbsp;&nbsp; |0000000001974.921500:<br />
          %+020f:&nbsp;&nbsp; |+000000001974.921500:<br />
          %,020f:&nbsp;&nbsp; |000000001,974.921500:<br />
          %+,020f:&nbsp; |+00000001,974.921500:<br />
          ----------+--------------------</code></p>

          <p><strong>Ayo berlatih!</strong></p>

          <ol>
              <li>Analisa pengaruh dari specifier terhadap data yang akan ditampung!</li>
              <li>Konstruksikan kode specifier untuk tipe data boolean, integer, string dengan masing-masing 3 contoh format specifier!</li>
          </ol>

          <p>&quot;</p>','created_at' => '2024-08-20 08:24:57','updated_at' => '2024-08-20 08:24:57'),
            array('id' => '36','materi_id' => '107','judul' => 'Pengayaan Tipe Data','isi_materi' => '<h1><strong>PENGAYAAN </strong><strong>&nbsp;1</strong></h1>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle. Perhatikan potongan kode berikut:<br />
          <code>public class TipeData{</code><br />
          <code>&nbsp; public static void main(String[] args)</code><code>&nbsp;{</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;byte terkecil= &quot; + Byte.<strong><em>MIN_VALUE</em></strong>);</code> <code>&nbsp;&nbsp;<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;byte terbesar= &quot; + Byte.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n short terkecil= &quot; + Short.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;short terbesar= &quot; + Short.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp;&nbsp;&nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n int terkecil= &quot; + Integer.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp;&nbsp;&nbsp; System.<strong><em>out</em></strong>.println(&quot;int terbesar= &quot; + Integer.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n long terkecil= &quot; + Long.<strong><em>MIN_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;long terbesar= &quot; + Long.<strong><em>MAX_VALUE</em></strong>);</code><br />
          <code>&nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n float terkecil= &quot; + Float.<strong><em>MIN_VALUE</em></strong>);<br />
          &nbsp;</code><code>&nbsp; &nbsp;System.<strong><em>out</em></strong>.println(&quot;float terbesar= &quot; + Float.<strong><em>MAX_VALUE</em></strong>);<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;\\n double terkecil= &quot; + Double.<strong><em>MIN_VALUE</em></strong>);<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println(&quot;double terbesar= &quot; + Double.<strong><em>MAX_VALUE</em></strong>);<br />
          <br />
          &nbsp; &nbsp;&nbsp;int nilai1 = 200;<br />
          &nbsp; &nbsp;&nbsp;byte nilbyte = (byte) 200;<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n Nilai integer = &quot; + nilai1);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;Nilai byte= &quot; + nilbyte);</code><br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<code>int nilai2 = -40000;<br />
          &nbsp; &nbsp;&nbsp;short nilshort = (short) nilai2;<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;\\n Nilai integer = &quot; + nilai2);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println(&quot;Nilai short= &quot; + nilshort);<br />
          }&nbsp; &nbsp; }</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>byte terkecil= -128<br />
          byte terbesar= 127</code></p>

          <p><code>short terkecil= -32768<br />
          short terbesar= 32767</code></p>

          <p><code>int terkecil= -2147483648<br />
          int terbesar= 2147483647</code></p>

          <p><code>long terkecil= -9223372036854775808<br />
          long terbesar= 9223372036854775807</code></p>

          <p><code>float terkecil= 1.4E-45<br />
          float terbesar= 3.4028235E38</code></p>

          <p><code>double terkecil= 4.9E-324<br />
          double terbesar= 1.7976931348623157E308</code></p>

          <p><code>Nilai integer = 200<br />
          Nilai byte= -56</code></p>

          <p><code>Nilai integer = -40000<br />
          Nilai short= 25536</code></p>

          <p><strong>Ayo berlatih!</strong></p>

          <ol>
              <li>Analisa pengaruh dari ukuran tipe data terhadap data yang akan diolah!</li>
              <li>Ubah nilai integer untuk short dan byte. Simpulkan perubahan yang terjadi!</li>
          </ol>

          <p>&nbsp;</p>

          <p><strong>PENGAYAAN 2</strong></p>

          <p>Setiap tipe data memiliki specifier yang berbeda, seperti berikut</p>

          <table cellspacing="0">
              <tbody>
                  <tr>
                      <td>
                      <p>S<code>pecifier</code></p>
                      </td>
                      <td>
                      <p><code>Deskripsi</code></p>
                      </td>
                      <td>
                      <p><code>Contoh</code></p>
                      </td>
                      <td>
                      <p><code>Luaran</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td>
                      <p><code>%b</code></p>
                      </td>
                      <td>
                      <p><code>boolean</code></p>
                      </td>
                      <td>
                      <p><code>%6b</code></p>
                      </td>
                      <td>
                      <p><code>˽false</code></p>

                      <p><code>˽˽true</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td>
                      <p><code>%c</code></p>
                      </td>
                      <td>
                      <p><code>character</code></p>
                      </td>
                      <td>
                      <p><code>%5c</code></p>
                      </td>
                      <td>
                      <p><code>˽˽˽˽a</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td>
                      <p><code>%d</code></p>
                      </td>
                      <td>
                      <p><code>integer</code></p>
                      </td>
                      <td>
                      <p><code>%5d</code></p>
                      </td>
                      <td>
                      <p><code>˽˽˽69</code></p>

                      <p><code>1234567</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td>
                      <p><code>%f</code></p>
                      </td>
                      <td>
                      <p><code>Floating-point</code></p>
                      </td>
                      <td>
                      <p><code>%5.2f</code></p>
                      </td>
                      <td>
                      <p><code>˽˽3.14</code></p>

                      <p><code>˽20.60</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td>
                      <p><code>%e</code></p>
                      </td>
                      <td>
                      <p><code>scientific</code></p>
                      </td>
                      <td>
                      <p><code>%10.2e</code></p>
                      </td>
                      <td>
                      <p><code>˽˽3.14e+02</code></p>
                      </td>
                  </tr>
                  <tr>
                      <td>
                      <p><code>%s</code></p>
                      </td>
                      <td>
                      <p><code>string</code></p>
                      </td>
                      <td>
                      <p><code>%10s</code></p>
                      </td>
                      <td>
                      <p><code>˽˽˽˽˽hello</code></p>
                      </td>
                  </tr>
              </tbody>
          </table>

          <p>&nbsp;</p>

          <p><strong>PENGAYAAN 3 </strong></p>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p>Perhatikan potongan kode berikut:</p>

          <p><code>public class TipeData{<br />
          &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp;&nbsp;double num = 1974.9215;<br />
          &nbsp; &nbsp; System.<strong><em>out</em></strong>.println( &quot;number=1974.9215&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;Format |Position&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;String |01234567890123456789&quot; );<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;----------+--------------------&quot; );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%-20f:&quot;, num );<br />
          <em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+-20f:&quot;, num );<br />
          &nbsp; &nbsp;&nbsp;<em>printFloatWithFormat</em>( &quot;%,-20f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+-,20f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%020f:&quot;,num);</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+020f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%,020f:&quot;, num );</code><br />
          <code><em>&nbsp; &nbsp;&nbsp;printFloatWithFormat</em>( &quot;%+,020f:&quot;,num);<br />
          &nbsp; &nbsp;&nbsp;System.<strong><em>out</em></strong>.println( &quot;----------+--------------------&quot; );<br />
          }</code></p>

          <p><code>public static void printFloatWithFormat( String fmt, double v)<br />
          {<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.printf( &quot;%-10s|&quot;,fmt);<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.printf( fmt, v );<br />
          &nbsp; &nbsp;System.<strong><em>out</em></strong>.println();<br />
          }&nbsp; &nbsp;}</code></p>

          <p>Luaran:</p>

          <p><code>number=1974.9215<br />
          Format |Position<br />
          String |01234567890123456789<br />
          ----------+--------------------<br />
          %f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |1974.921500:<br />
          %+f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |+1974.921500:<br />
          %,f:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |1,974.921500:<br />
          %+,f:&nbsp;&nbsp;&nbsp;&nbsp; |+1,974.921500:<br />
          %20f:&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1974.921500:<br />
          %+20f:&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +1974.921500:<br />
          %,20f:&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1,974.921500:<br />
          %+,20f:&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +1,974.921500:<br />
          %-20f:&nbsp;&nbsp;&nbsp; |1974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %+-20f:&nbsp;&nbsp; |+1974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %,-20f:&nbsp;&nbsp; |1,974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %+-,20f:&nbsp; |+1,974.921500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br />
          %020f:&nbsp;&nbsp;&nbsp; |0000000001974.921500:<br />
          %+020f:&nbsp;&nbsp; |+000000001974.921500:<br />
          %,020f:&nbsp;&nbsp; |000000001,974.921500:<br />
          %+,020f:&nbsp; |+00000001,974.921500:<br />
          ----------+--------------------</code></p>

          <p><strong>Ayo berlatih!</strong></p>

          <ol>
              <li>Analisa pengaruh dari specifier terhadap data yang akan ditampung!</li>
              <li>Konstruksikan kode specifier untuk tipe data boolean, integer, string dengan masing-masing 3 contoh format specifier!</li>
          </ol>

          <p>&quot;</p>','created_at' => '2024-08-20 08:25:25','updated_at' => '2024-08-20 08:25:25'),
            array('id' => '37','materi_id' => '116','judul' => 'Materi Pengayaan IF dan SWITCH','isi_materi' => '<h3><strong>Unit 1 Kombinasi IF dan SWITCH</strong></h3>

          <p>&nbsp;</p>

          <p><strong>Contoh Pengayaan 1: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

          <p>Diketahui: Mahasiswa yang memiliki KTM akan mendapatkan diskon setiap pembelanjaan di Koperasi. Ketentuannya:<br />
          a)&nbsp;&nbsp; &nbsp;Perbelanjaan lebih dari Rp. 500.000 maka akan mendapatkan diskon sebesar Rp. 50.000.<br />
          b)&nbsp;&nbsp; &nbsp;Perbelanjaan antara Rp. 500.000 hingga Rp. 100.000 maka mendapatkan diskon sebesar Rp. 15.000<br />
          c)&nbsp;&nbsp; &nbsp; Perbelanjaan dibawah Rp. 100.000 maka tidak mendapatkan diskon.</p>

          <p><strong>Solusi program:</strong></p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class IfSwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;// deklarasi variabel dan Scanner<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int belanjaan, diskon, bayar;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; byte kartu;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Scanner scan = new Scanner(System.in);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // mengambil input<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Apakah Anda memiliki kartu mahasiswa? &nbsp;(tulis angka 1 / 2)&quot;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;+ &quot;\\n 1. Ya \\n 2. Tidak &quot;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;+ &quot;\\n Jawaban: &nbsp;&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; kartu = scan.nextByte();<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Total belanjaan: &quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; belanjaan = scan.nextInt();</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // proses<br />
          &nbsp; &nbsp; &nbsp; &nbsp; switch(kartu) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; case 1:&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (belanjaan &gt;= 500000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 50000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else if (belanjaan &gt; 100000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 15000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 0;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bayar = belanjaan - diskon;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Total Bayar: Rp &quot; + bayar);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; case 2:<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (belanjaan &gt; 100000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 5000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 0;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bayar = belanjaan - diskon;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Total Bayar: Rp &quot; + bayar);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>Apakah Anda memiliki kartu mahasiswa? &nbsp;(tulis angka 1 / 2)<br />
          &nbsp;1. Ya&nbsp;<br />
          &nbsp;2. Tidak&nbsp;<br />
          &nbsp;Jawaban: &nbsp;1<br />
          Total belanjaan: 500000<br />
          Total Bayar: Rp 450000</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan 1</strong></p>

          <p>1.&nbsp;&nbsp; &nbsp;Susunlah kode program untuk menghitung besarnya gaji dengan pilihan antara pegawai tetap dan pegawai kontrak. Kedua pegawai memiliki jam lembur kerja.<br />
          Bila pegawai tetap maka besar gaji per bulan Rp. 4.000.000 dengan besar uang lembur Rp. 50.000/jam. Bila jam lembur lebih dari 20 jam maka mendapat bonus&nbsp;<br />
          Rp. 300.000. Jam lembur antara 10 sampai 20 jam mendapat bonus Rp. 150.000, sedangkan dibawah 10 jam tidak mendapatkan bonus.<br />
          Bila pegawai kontrak besar gaji per bulan Rp. 2.500.000 dengan besar uang lembur sebesar Rp. 40.000/jam. Bila jam lembur lebih dari 20 jam maka mendapat bonus Rp. 200.000.<br />
          Jam lembur antara 10 sampai 20 jam mendapat bonus Rp. 100.000, sedangkan dibawah 10 jam tidak mendapatkan bonus.<br />
          Rancang susunan kode program untuk menyelesaikan permasalahan tersebut dan menghitung jumlah total gaji yang diterima!</p>

          <p>&nbsp;</p>

          <h3><strong>Unit 2 &nbsp;Java GUI</strong></h3>

          <p>Java memiliki 2 paket untuk mengembangkan GUI, yaitu AWT (Abstract Window Toolkit) dan swing.</p>

          <p>1.&nbsp; AWT&nbsp;<br />
          &nbsp; &nbsp; &nbsp;AWT digunakan untuk implementasi User Interface. Kompoenen AWT seperti java.awt.window atau java.awt.panel harus digambar menggunakan GUI (Graphical User Interface)</p>

          <p>2.&nbsp; Swing&nbsp;<br />
          &nbsp; &nbsp; &nbsp;Swing pengembangan dari AWT dengan menambahkan komponen GUI. Komponen swing secara langsung diletakkan dilayar menggunakan kode Java.<br />
          &nbsp; &nbsp; &nbsp;Dibanding dg AWT penggunaan komponen-komponen Swing lebih memakan sumber daya yang lebih sedikit</p>

          <p><br />
          <strong>Komponen interface Swing&nbsp;</strong><br />
          &nbsp;<br />
          <img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if1.png" /></p>

          <p><strong>Contoh pemanggilan Swing:</strong></p>

          <p><code>import javax.swing.JOptionPane;<br />
          //tuliskan di paling atas sebelum class untuk memasukkan Pustaka swing</code></p>

          <p><code>JOptionPane.showInputDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p><code>JOptionPane.showMessageDialog(null, &ldquo;Informasi Mahasiswa&rdquo;); &nbsp;<br />
          // untuk menampilkan informasi atau luaran (output)</code></p>

          <p><code>JOptionPane.showConfirmDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p><code>JOptionPane.showOptionDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p>&nbsp;</p>

          <h3><strong>Contoh Pengayaan 2 GUI:</strong></h3>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//private void btnConfirmDialogActionPerformed(java.awt.event.ActionEvent evt) { &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int jawab = JOptionPane.showConfirmDialog(null, &quot;Silahkan Konfirmasi?&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 0 : yes<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 1 : no<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 2 : cancel<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;switch(jawab){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.YES_OPTION:&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab ya&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.NO_OPTION:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab tidak&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.CANCEL_OPTION:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab batal&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh Pengayaan 2:</strong></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if2.png" /></p>

          <h3>&nbsp;<br />
          <strong>Contoh Pengayaan 3 GUI:</strong></h3>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int jawab = JOptionPane.showOptionDialog(null,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;Ingin Keluar?&quot;,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;Keluar&quot;,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; JOptionPane.YES_NO_OPTION,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; JOptionPane.QUESTION_MESSAGE, null, null, null);</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(jawab == JOptionPane.YES_OPTION){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Program Akan Keluar&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.exit(0);<br />
          } &nbsp; } &nbsp;}</code></p>

          <p>&nbsp;</p>

          <p><strong>Luaran Contoh Pengayaan 3:</strong></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if3.png" /></p>

          <p>&nbsp;<br />
          <strong>Contoh Pengayaan 3 GUI:</strong></p>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String masukData = JOptionPane.showInputDialog(&quot;Pilih Nilai (A - B - C)&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; char data = masukData.charAt(0);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;switch(data) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;A&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanA = &quot;Nilai A memiliki rentang nilai 80 - 100&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanA);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;B&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanB = &quot;Nilai B memiliki rentang nilai 65 - 79&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanB);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;C&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanC = &quot;Nilai C memiliki rentang nilai 55 - 64&quot;;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanC);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 3&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;default:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanD = &quot;Anda tidak lulus nilai dibawah 54 &quot;;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanD);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          &nbsp;</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if4.png" /></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if5.png" /></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan 2</strong></p>

          <p>2.&nbsp; Diketahui nama mata kuliah berikut:<br />
          &nbsp; &nbsp; &nbsp;a)&nbsp; &nbsp;Pengantar Teknologi Informasi dan Komunikasi (2 sks)<br />
          &nbsp; &nbsp; &nbsp;b)&nbsp; &nbsp;Sistem Digital (3 sks)<br />
          &nbsp; &nbsp; &nbsp;c)&nbsp; &nbsp;Komputer dan Pemrograman (3 sks)<br />
          &nbsp; &nbsp; &nbsp;d)&nbsp; &nbsp;Pengantar Sistem multimedia (2 sks)<br />
          &nbsp; &nbsp; &nbsp;Rancang kode program yang dapat menerima input nilai dari setiap mata kuliah ini!<br />
          &nbsp; &nbsp; &nbsp;Hitunglah nilai IPK berdasarkan input nilai yang dimasukkan pengguna!<br />
          &nbsp; &nbsp; &nbsp;Tampilkan hasil perhitungan IPK!</p>','created_at' => '2024-08-20 09:48:44','updated_at' => '2024-08-20 09:48:44'),
            array('id' => '38','materi_id' => '115','judul' => 'Materi Pengayaan IF dan SWITCH','isi_materi' => '<h3><strong>Unit 1 Kombinasi IF dan SWITCH</strong></h3>

          <p>&nbsp;</p>

          <p><strong>Contoh Pengayaan 1: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

          <p>Diketahui: Mahasiswa yang memiliki KTM akan mendapatkan diskon setiap pembelanjaan di Koperasi. Ketentuannya:<br />
          a)&nbsp;&nbsp; &nbsp;Perbelanjaan lebih dari Rp. 500.000 maka akan mendapatkan diskon sebesar Rp. 50.000.<br />
          b)&nbsp;&nbsp; &nbsp;Perbelanjaan antara Rp. 500.000 hingga Rp. 100.000 maka mendapatkan diskon sebesar Rp. 15.000<br />
          c)&nbsp;&nbsp; &nbsp; Perbelanjaan dibawah Rp. 100.000 maka tidak mendapatkan diskon.</p>

          <p><strong>Solusi program:</strong></p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class IfSwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;// deklarasi variabel dan Scanner<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int belanjaan, diskon, bayar;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; byte kartu;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Scanner scan = new Scanner(System.in);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // mengambil input<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Apakah Anda memiliki kartu mahasiswa? &nbsp;(tulis angka 1 / 2)&quot;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;+ &quot;\\n 1. Ya \\n 2. Tidak &quot;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;+ &quot;\\n Jawaban: &nbsp;&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; kartu = scan.nextByte();<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Total belanjaan: &quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; belanjaan = scan.nextInt();</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // proses<br />
          &nbsp; &nbsp; &nbsp; &nbsp; switch(kartu) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; case 1:&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (belanjaan &gt;= 500000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 50000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else if (belanjaan &gt; 100000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 15000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 0;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bayar = belanjaan - diskon;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Total Bayar: Rp &quot; + bayar);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; case 2:<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (belanjaan &gt; 100000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 5000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 0;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bayar = belanjaan - diskon;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Total Bayar: Rp &quot; + bayar);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>Apakah Anda memiliki kartu mahasiswa? &nbsp;(tulis angka 1 / 2)<br />
          &nbsp;1. Ya&nbsp;<br />
          &nbsp;2. Tidak&nbsp;<br />
          &nbsp;Jawaban: &nbsp;1<br />
          Total belanjaan: 500000<br />
          Total Bayar: Rp 450000</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan 1</strong></p>

          <p>1.&nbsp;&nbsp; &nbsp;Susunlah kode program untuk menghitung besarnya gaji dengan pilihan antara pegawai tetap dan pegawai kontrak. Kedua pegawai memiliki jam lembur kerja.<br />
          Bila pegawai tetap maka besar gaji per bulan Rp. 4.000.000 dengan besar uang lembur Rp. 50.000/jam. Bila jam lembur lebih dari 20 jam maka mendapat bonus&nbsp;<br />
          Rp. 300.000. Jam lembur antara 10 sampai 20 jam mendapat bonus Rp. 150.000, sedangkan dibawah 10 jam tidak mendapatkan bonus.<br />
          Bila pegawai kontrak besar gaji per bulan Rp. 2.500.000 dengan besar uang lembur sebesar Rp. 40.000/jam. Bila jam lembur lebih dari 20 jam maka mendapat bonus Rp. 200.000.<br />
          Jam lembur antara 10 sampai 20 jam mendapat bonus Rp. 100.000, sedangkan dibawah 10 jam tidak mendapatkan bonus.<br />
          Rancang susunan kode program untuk menyelesaikan permasalahan tersebut dan menghitung jumlah total gaji yang diterima!</p>

          <p>&nbsp;</p>

          <h3><strong>Unit 2 &nbsp;Java GUI</strong></h3>

          <p>Java memiliki 2 paket untuk mengembangkan GUI, yaitu AWT (Abstract Window Toolkit) dan swing.</p>

          <p>1.&nbsp; AWT&nbsp;<br />
          &nbsp; &nbsp; &nbsp;AWT digunakan untuk implementasi User Interface. Kompoenen AWT seperti java.awt.window atau java.awt.panel harus digambar menggunakan GUI (Graphical User Interface)</p>

          <p>2.&nbsp; Swing&nbsp;<br />
          &nbsp; &nbsp; &nbsp;Swing pengembangan dari AWT dengan menambahkan komponen GUI. Komponen swing secara langsung diletakkan dilayar menggunakan kode Java.<br />
          &nbsp; &nbsp; &nbsp;Dibanding dg AWT penggunaan komponen-komponen Swing lebih memakan sumber daya yang lebih sedikit</p>

          <p><br />
          <strong>Komponen interface Swing&nbsp;</strong><br />
          &nbsp;<br />
          <img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if1.png" /></p>

          <p><strong>Contoh pemanggilan Swing:</strong></p>

          <p><code>import javax.swing.JOptionPane;<br />
          //tuliskan di paling atas sebelum class untuk memasukkan Pustaka swing</code></p>

          <p><code>JOptionPane.showInputDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p><code>JOptionPane.showMessageDialog(null, &ldquo;Informasi Mahasiswa&rdquo;); &nbsp;<br />
          // untuk menampilkan informasi atau luaran (output)</code></p>

          <p><code>JOptionPane.showConfirmDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p><code>JOptionPane.showOptionDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p>&nbsp;</p>

          <h3><strong>Contoh Pengayaan 2 GUI:</strong></h3>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//private void btnConfirmDialogActionPerformed(java.awt.event.ActionEvent evt) { &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int jawab = JOptionPane.showConfirmDialog(null, &quot;Silahkan Konfirmasi?&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 0 : yes<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 1 : no<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 2 : cancel<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;switch(jawab){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.YES_OPTION:&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab ya&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.NO_OPTION:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab tidak&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.CANCEL_OPTION:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab batal&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh Pengayaan 2:</strong></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if2.png" /></p>

          <h3>&nbsp;<br />
          <strong>Contoh Pengayaan 3 GUI:</strong></h3>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int jawab = JOptionPane.showOptionDialog(null,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;Ingin Keluar?&quot;,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;Keluar&quot;,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; JOptionPane.YES_NO_OPTION,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; JOptionPane.QUESTION_MESSAGE, null, null, null);</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(jawab == JOptionPane.YES_OPTION){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Program Akan Keluar&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.exit(0);<br />
          } &nbsp; } &nbsp;}</code></p>

          <p>&nbsp;</p>

          <p><strong>Luaran Contoh Pengayaan 3:</strong></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if3.png" /></p>

          <p>&nbsp;<br />
          <strong>Contoh Pengayaan 3 GUI:</strong></p>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String masukData = JOptionPane.showInputDialog(&quot;Pilih Nilai (A - B - C)&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; char data = masukData.charAt(0);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;switch(data) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;A&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanA = &quot;Nilai A memiliki rentang nilai 80 - 100&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanA);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;B&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanB = &quot;Nilai B memiliki rentang nilai 65 - 79&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanB);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;C&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanC = &quot;Nilai C memiliki rentang nilai 55 - 64&quot;;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanC);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 3&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;default:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanD = &quot;Anda tidak lulus nilai dibawah 54 &quot;;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanD);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          &nbsp;</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if4.png" /></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if5.png" /></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan 2</strong></p>

          <p>2.&nbsp; Diketahui nama mata kuliah berikut:<br />
          &nbsp; &nbsp; &nbsp;a)&nbsp; &nbsp;Pengantar Teknologi Informasi dan Komunikasi (2 sks)<br />
          &nbsp; &nbsp; &nbsp;b)&nbsp; &nbsp;Sistem Digital (3 sks)<br />
          &nbsp; &nbsp; &nbsp;c)&nbsp; &nbsp;Komputer dan Pemrograman (3 sks)<br />
          &nbsp; &nbsp; &nbsp;d)&nbsp; &nbsp;Pengantar Sistem multimedia (2 sks)<br />
          &nbsp; &nbsp; &nbsp;Rancang kode program yang dapat menerima input nilai dari setiap mata kuliah ini!<br />
          &nbsp; &nbsp; &nbsp;Hitunglah nilai IPK berdasarkan input nilai yang dimasukkan pengguna!<br />
          &nbsp; &nbsp; &nbsp;Tampilkan hasil perhitungan IPK!</p>','created_at' => '2024-08-20 09:48:51','updated_at' => '2024-08-20 09:48:51'),
            array('id' => '39','materi_id' => '114','judul' => 'Materi Pengayaan IF dan SWITCH','isi_materi' => '<h3><strong>Unit 1 Kombinasi IF dan SWITCH</strong></h3>

          <p>&nbsp;</p>

          <p><strong>Contoh Pengayaan 1: </strong>Salin dan tempel kode program berikut ke Eclipse.</p>

          <p>Diketahui: Mahasiswa yang memiliki KTM akan mendapatkan diskon setiap pembelanjaan di Koperasi. Ketentuannya:<br />
          a)&nbsp;&nbsp; &nbsp;Perbelanjaan lebih dari Rp. 500.000 maka akan mendapatkan diskon sebesar Rp. 50.000.<br />
          b)&nbsp;&nbsp; &nbsp;Perbelanjaan antara Rp. 500.000 hingga Rp. 100.000 maka mendapatkan diskon sebesar Rp. 15.000<br />
          c)&nbsp;&nbsp; &nbsp; Perbelanjaan dibawah Rp. 100.000 maka tidak mendapatkan diskon.</p>

          <p><strong>Solusi program:</strong></p>

          <p><code>import java.util.Scanner;</code></p>

          <p><code>public class IfSwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;// deklarasi variabel dan Scanner<br />
          &nbsp; &nbsp; &nbsp; &nbsp; int belanjaan, diskon, bayar;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; byte kartu;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; Scanner scan = new Scanner(System.in);</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // mengambil input<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Apakah Anda memiliki kartu mahasiswa? &nbsp;(tulis angka 1 / 2)&quot;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;+ &quot;\\n 1. Ya \\n 2. Tidak &quot;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;+ &quot;\\n Jawaban: &nbsp;&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; kartu = scan.nextByte();<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;Total belanjaan: &quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; belanjaan = scan.nextInt();</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; // proses<br />
          &nbsp; &nbsp; &nbsp; &nbsp; switch(kartu) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; case 1:&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (belanjaan &gt;= 500000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 50000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else if (belanjaan &gt; 100000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 15000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 0;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bayar = belanjaan - diskon;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Total Bayar: Rp &quot; + bayar);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;</code></p>

          <p><code>&nbsp; &nbsp; &nbsp; &nbsp; case 2:<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (belanjaan &gt; 100000) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 5000;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; diskon = 0;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bayar = belanjaan - diskon;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(&quot;Total Bayar: Rp &quot; + bayar);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>Apakah Anda memiliki kartu mahasiswa? &nbsp;(tulis angka 1 / 2)<br />
          &nbsp;1. Ya&nbsp;<br />
          &nbsp;2. Tidak&nbsp;<br />
          &nbsp;Jawaban: &nbsp;1<br />
          Total belanjaan: 500000<br />
          Total Bayar: Rp 450000</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan 1</strong></p>

          <p>1.&nbsp;&nbsp; &nbsp;Susunlah kode program untuk menghitung besarnya gaji dengan pilihan antara pegawai tetap dan pegawai kontrak. Kedua pegawai memiliki jam lembur kerja.<br />
          Bila pegawai tetap maka besar gaji per bulan Rp. 4.000.000 dengan besar uang lembur Rp. 50.000/jam. Bila jam lembur lebih dari 20 jam maka mendapat bonus&nbsp;<br />
          Rp. 300.000. Jam lembur antara 10 sampai 20 jam mendapat bonus Rp. 150.000, sedangkan dibawah 10 jam tidak mendapatkan bonus.<br />
          Bila pegawai kontrak besar gaji per bulan Rp. 2.500.000 dengan besar uang lembur sebesar Rp. 40.000/jam. Bila jam lembur lebih dari 20 jam maka mendapat bonus Rp. 200.000.<br />
          Jam lembur antara 10 sampai 20 jam mendapat bonus Rp. 100.000, sedangkan dibawah 10 jam tidak mendapatkan bonus.<br />
          Rancang susunan kode program untuk menyelesaikan permasalahan tersebut dan menghitung jumlah total gaji yang diterima!</p>

          <p>&nbsp;</p>

          <h3><strong>Unit 2 &nbsp;Java GUI</strong></h3>

          <p>Java memiliki 2 paket untuk mengembangkan GUI, yaitu AWT (Abstract Window Toolkit) dan swing.</p>

          <p>1.&nbsp; AWT&nbsp;<br />
          &nbsp; &nbsp; &nbsp;AWT digunakan untuk implementasi User Interface. Kompoenen AWT seperti java.awt.window atau java.awt.panel harus digambar menggunakan GUI (Graphical User Interface)</p>

          <p>2.&nbsp; Swing&nbsp;<br />
          &nbsp; &nbsp; &nbsp;Swing pengembangan dari AWT dengan menambahkan komponen GUI. Komponen swing secara langsung diletakkan dilayar menggunakan kode Java.<br />
          &nbsp; &nbsp; &nbsp;Dibanding dg AWT penggunaan komponen-komponen Swing lebih memakan sumber daya yang lebih sedikit</p>

          <p><br />
          <strong>Komponen interface Swing&nbsp;</strong><br />
          &nbsp;<br />
          <img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if1.png" /></p>

          <p><strong>Contoh pemanggilan Swing:</strong></p>

          <p><code>import javax.swing.JOptionPane;<br />
          //tuliskan di paling atas sebelum class untuk memasukkan Pustaka swing</code></p>

          <p><code>JOptionPane.showInputDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p><code>JOptionPane.showMessageDialog(null, &ldquo;Informasi Mahasiswa&rdquo;); &nbsp;<br />
          // untuk menampilkan informasi atau luaran (output)</code></p>

          <p><code>JOptionPane.showConfirmDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p><code>JOptionPane.showOptionDialog(&ldquo;teks&rdquo;); &nbsp;<br />
          //untuk menampilkan jendela GUI untuk input</code></p>

          <p>&nbsp;</p>

          <h3><strong>Contoh Pengayaan 2 GUI:</strong></h3>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//private void btnConfirmDialogActionPerformed(java.awt.event.ActionEvent evt) { &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;int jawab = JOptionPane.showConfirmDialog(null, &quot;Silahkan Konfirmasi?&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 0 : yes<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 1 : no<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;// 2 : cancel<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;switch(jawab){<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.YES_OPTION:&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab ya&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.NO_OPTION:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab tidak&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;case JOptionPane.CANCEL_OPTION:<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Kamu menjawab batal&quot;);<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran Contoh Pengayaan 2:</strong></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if2.png" /></p>

          <h3>&nbsp;<br />
          <strong>Contoh Pengayaan 3 GUI:</strong></h3>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int jawab = JOptionPane.showOptionDialog(null,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;Ingin Keluar?&quot;,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &quot;Keluar&quot;,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; JOptionPane.YES_NO_OPTION,&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; JOptionPane.QUESTION_MESSAGE, null, null, null);</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(jawab == JOptionPane.YES_OPTION){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, &quot;Program Akan Keluar&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.exit(0);<br />
          } &nbsp; } &nbsp;}</code></p>

          <p>&nbsp;</p>

          <p><strong>Luaran Contoh Pengayaan 3:</strong></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if3.png" /></p>

          <p>&nbsp;<br />
          <strong>Contoh Pengayaan 3 GUI:</strong></p>

          <p><code>import javax.swing.JOptionPane;</code></p>

          <p><code>public class SwitchBersarang {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String masukData = JOptionPane.showInputDialog(&quot;Pilih Nilai (A - B - C)&quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; char data = masukData.charAt(0);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;switch(data) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;A&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanA = &quot;Nilai A memiliki rentang nilai 80 - 100&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanA);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;B&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanB = &quot;Nilai B memiliki rentang nilai 65 - 79&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanB);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case &#39;C&#39;:&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanC = &quot;Nilai C memiliki rentang nilai 55 - 64&quot;;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanC);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break; // baris 3&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;default:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String pesanD = &quot;Anda tidak lulus nilai dibawah 54 &quot;;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;JOptionPane.showMessageDialog(null, pesanD);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          &nbsp;</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if4.png" /></p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/if5.png" /></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan 2</strong></p>

          <p>2.&nbsp; Diketahui nama mata kuliah berikut:<br />
          &nbsp; &nbsp; &nbsp;a)&nbsp; &nbsp;Pengantar Teknologi Informasi dan Komunikasi (2 sks)<br />
          &nbsp; &nbsp; &nbsp;b)&nbsp; &nbsp;Sistem Digital (3 sks)<br />
          &nbsp; &nbsp; &nbsp;c)&nbsp; &nbsp;Komputer dan Pemrograman (3 sks)<br />
          &nbsp; &nbsp; &nbsp;d)&nbsp; &nbsp;Pengantar Sistem multimedia (2 sks)<br />
          &nbsp; &nbsp; &nbsp;Rancang kode program yang dapat menerima input nilai dari setiap mata kuliah ini!<br />
          &nbsp; &nbsp; &nbsp;Hitunglah nilai IPK berdasarkan input nilai yang dimasukkan pengguna!<br />
          &nbsp; &nbsp; &nbsp;Tampilkan hasil perhitungan IPK!</p>','created_at' => '2024-08-20 09:48:57','updated_at' => '2024-08-20 09:48:57'),
            array('id' => '40','materi_id' => '110','judul' => 'Materi Tambahan (Tidak Wajib)','isi_materi' => '<h3><strong>PENGAYAAN 1</strong></h3>

          <p>Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p>Perhatikan potongan kode berikut:</p>

          <p><code>class Main{ &nbsp; &nbsp; &nbsp;<br />
          &nbsp; &nbsp; public static boolean F(int a,int b,int c){&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; return !(a&gt;c) &amp;&amp; b &gt; c;<br />
          &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; public static void main(String[] args) { &nbsp; &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(1,2,3));<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(3,2,1));<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(3,3,3));<br />
          &nbsp; &nbsp; } &nbsp; &nbsp; &nbsp;}</code><br />
          <strong>Luaran:</strong><br />
          <code>false<br />
          false<br />
          false</code></p>

          <p><strong>Ayo berlatih!</strong><br />
          1. Uraikan urutan penyelesaian masalah <code>(!(a&gt;c) &amp;&amp; b &gt; c) </code>berdasarkan prioritas operator!<br />
          2. Susun kembali nilai F agar menghasilkan nilai TRUE!<br />
          <br />
          &nbsp;</p>

          <h3><strong>PENGAYAAN 2</strong></h3>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.<br />
          Perhatikan potongan kode berikut:</p>

          <p><code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; System.out.println(3+4*4&gt;1+5*(4-2)||5&lt;7);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:</strong><br />
          <code>True</code></p>

          <p><strong>Ayo berlatih!</strong><br />
          1.&nbsp;&nbsp; &nbsp;Uraikan ekspresi tersebut hingga mendapatkan kesimpulan TRUE!<br />
          2.&nbsp;&nbsp; &nbsp;Susun ekspresi yang berbeda untuk menghasilkan kesimpulan FALSE!</p>','created_at' => '2024-08-20 09:49:58','updated_at' => '2024-08-20 09:49:58'),
            array('id' => '41','materi_id' => '109','judul' => 'Materi Tambahan (Tidak Wajib)','isi_materi' => '<h3><strong>PENGAYAAN 1</strong></h3>

          <p>Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p>Perhatikan potongan kode berikut:</p>

          <p><code>class Main{ &nbsp; &nbsp; &nbsp;<br />
          &nbsp; &nbsp; public static boolean F(int a,int b,int c){&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; return !(a&gt;c) &amp;&amp; b &gt; c;<br />
          &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; public static void main(String[] args) { &nbsp; &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(1,2,3));<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(3,2,1));<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(3,3,3));<br />
          &nbsp; &nbsp; } &nbsp; &nbsp; &nbsp;}</code><br />
          <strong>Luaran:</strong><br />
          <code>false<br />
          false<br />
          false</code></p>

          <p><strong>Ayo berlatih!</strong><br />
          1. Uraikan urutan penyelesaian masalah <code>(!(a&gt;c) &amp;&amp; b &gt; c) </code>berdasarkan prioritas operator!<br />
          2. Susun kembali nilai F agar menghasilkan nilai TRUE!<br />
          <br />
          &nbsp;</p>

          <h3><strong>PENGAYAAN 2</strong></h3>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.<br />
          Perhatikan potongan kode berikut:</p>

          <p><code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; System.out.println(3+4*4&gt;1+5*(4-2)||5&lt;7);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:</strong><br />
          <code>True</code></p>

          <p><strong>Ayo berlatih!</strong><br />
          1.&nbsp;&nbsp; &nbsp;Uraikan ekspresi tersebut hingga mendapatkan kesimpulan TRUE!<br />
          2.&nbsp;&nbsp; &nbsp;Susun ekspresi yang berbeda untuk menghasilkan kesimpulan FALSE!</p>','created_at' => '2024-08-20 09:50:03','updated_at' => '2024-08-20 09:50:03'),
            array('id' => '42','materi_id' => '108','judul' => 'Materi Tambahan (Tidak Wajib)','isi_materi' => '<h3><strong>PENGAYAAN 1</strong></h3>

          <p>Salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.</p>

          <p>Perhatikan potongan kode berikut:</p>

          <p><code>class Main{ &nbsp; &nbsp; &nbsp;<br />
          &nbsp; &nbsp; public static boolean F(int a,int b,int c){&nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; return !(a&gt;c) &amp;&amp; b &gt; c;<br />
          &nbsp; &nbsp; }<br />
          &nbsp; &nbsp; public static void main(String[] args) { &nbsp; &nbsp;<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(1,2,3));<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(3,2,1));<br />
          &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(F(3,3,3));<br />
          &nbsp; &nbsp; } &nbsp; &nbsp; &nbsp;}</code><br />
          <strong>Luaran:</strong><br />
          <code>false<br />
          false<br />
          false</code></p>

          <p><strong>Ayo berlatih!</strong><br />
          1. Uraikan urutan penyelesaian masalah <code>(!(a&gt;c) &amp;&amp; b &gt; c) </code>berdasarkan prioritas operator!<br />
          2. Susun kembali nilai F agar menghasilkan nilai TRUE!<br />
          <br />
          &nbsp;</p>

          <h3><strong>PENGAYAAN 2</strong></h3>

          <p>Silahkan salin dan tempel potongan kode ini ke Eclipse atau Jdoodle.<br />
          Perhatikan potongan kode berikut:</p>

          <p><code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; System.out.println(3+4*4&gt;1+5*(4-2)||5&lt;7);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p><strong>Luaran:</strong><br />
          <code>True</code></p>

          <p><strong>Ayo berlatih!</strong><br />
          1.&nbsp;&nbsp; &nbsp;Uraikan ekspresi tersebut hingga mendapatkan kesimpulan TRUE!<br />
          2.&nbsp;&nbsp; &nbsp;Susun ekspresi yang berbeda untuk menghasilkan kesimpulan FALSE!</p>','created_at' => '2024-08-20 09:50:09','updated_at' => '2024-08-20 09:50:09'),
            array('id' => '43','materi_id' => '113','judul' => 'Pengenalan Sifat Pemrograman Berorientasi Objek','isi_materi' => '<h2><strong>Materi Pengayaan</strong>&nbsp;</h2>

          <p><br />
          Java sebagai bahasa berorientasi objek memiliki sifat pewarisan (inheritance), enkapsulasi (encapsulation), dan polimorfisme (polimorfism).</p>

          <h3><strong>Enkapsulasi&nbsp;</strong></h3>

          <p>Enkapsulasi (encapsulation) merupakan cara untuk melindungi property (atribut)/ method tertentu dari sebuah kelas agar tidak sembarangan diakses dan dimodifikasi oleh suatu bagian program. Cara untuk melindungi data yaitu dengan menggunakan access modifiers (hak akses). Ada 4 hak akses yang tersedia, yaitu default, public, protected, private.</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture1.png" /></p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <h3><strong>Inheritance&nbsp;</strong></h3>

          <p>Inheritance merupakan proses pewarisan data dan method dari suatu class yang telah ada kepada suatu class baru. Class yang mewariskan disebut dengan super class/ parent class/ base class, sedangkan class yang mewarisi (class yang baru) disebut dengan sub class/ child class/ derived class. Sub class tidak dapat mewarisi anggota private dari super class. Dengan inheritance, class yang baru (sub class) akan mirip dengan class yang lama (super class) namun memiliki karakteristik yang baru. Dalam Java, sub class hanya bisa memiliki satu super class (single inheritance) sedangkan super class bisa memiliki satu sub class atau lebih. Untuk menerapkan inheritance, gunakan statement&ldquo;extends&rdquo;.&nbsp;<br />
          Keyword &ldquo;super&rdquo; digunakan oleh sub class untuk memanggil constructor, atribut dan method yang ada pada super class.</p>

          <h3><strong>Polimorfisme&nbsp;</strong></h3>

          <p>Polimorfisme mempunyai makna sesuatu yang memiliki banyak bentuk, yaitu memiliki nama sama, tetapi memiliki kelakuan (behaviour) yang berbeda.&nbsp;<br />
          &nbsp;</p>

          <p>Class Bentuk merupakan class induk (super class) dari class Lingkaran, Elips, dan Segitiga mempunyai method gambar() dan hapus(). Class-class anak (sub class) juga mempunyai method gambar() dan hapus(). Meskipun keempat class tersebut mempunyai nama method yang sama, tetapi isi (source code/ yang dilakukan/ output) dari masing-masing method berbeda. Jika kita menginginkan sebuah objek yang dapat memanggil setiap method (yaitu method gambar &amp; hapus) yang ada pada setiap class (pada super class maupun subclass), maka gunakanlah teknik Polimorfisme. Polimorfisme hanya berlaku pada method dan tidak berlaku untuk atribut.</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture2.png" /></p>

          <p>&nbsp;</p>

          <p><strong>Contoh Pengayaan:</strong></p>

          <p>&nbsp;</p>

          <p>1.&nbsp;&nbsp; &nbsp;Buatlah package superKendaraan<br />
          2.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Kendaraan.java &nbsp;dengan menggunakan package superKendaraan<br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>class Kendaraan {<br />
          &nbsp; &nbsp; private int jumlahRoda,tahun;<br />
          &nbsp;&nbsp; &nbsp;private String warna,jenis;<br />
          &nbsp;&nbsp; &nbsp;Kendaraan(){</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;Kendaraan (int jumlahRoda,int tahun, String warna, String jenis){<br />
          &nbsp;&nbsp; &nbsp;this.jumlahRoda=jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;this.tahun=tahun;<br />
          &nbsp;&nbsp; &nbsp;this.warna=warna;<br />
          &nbsp;&nbsp; &nbsp;this.jenis=jenis;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengisi atribut kendaraan<br />
          &nbsp;&nbsp; &nbsp;void setJumlahRoda(int jumlahRoda){<br />
          &nbsp;&nbsp; &nbsp;this.jumlahRoda=jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setTahun(int tahun){<br />
          &nbsp;&nbsp; &nbsp;this.tahun=tahun;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setWarna(String warna){<br />
          &nbsp;&nbsp; &nbsp;this.warna=warna;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setJenis(String jenis){<br />
          &nbsp;&nbsp; &nbsp;this.jenis=jenis;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengambil atribut kendaraan<br />
          &nbsp;&nbsp; &nbsp;int getJumlahRoda(){<br />
          &nbsp;&nbsp; &nbsp;return jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;int getTahun(){<br />
          &nbsp;&nbsp; &nbsp;return tahun;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;String getWarna(){<br />
          &nbsp;&nbsp; &nbsp;return warna;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;String getJenis(){<br />
          &nbsp;&nbsp; &nbsp;return jenis;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Jumlah Roda : &quot;+getJumlahRoda());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Tahun : &quot;+getTahun());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Warna : &quot;+getWarna());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Jenis : &quot;+getJenis());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>3.&nbsp;&nbsp; &nbsp;Buatlah dokumen class F1.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class F1 extends Kendaraan {<br />
          &nbsp;&nbsp; &nbsp;private int kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;private boolean spoiler;</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;F1(){</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;F1(int jumlahRoda,int tahun, String warna, String jenis, int kecepatanMax, boolean spoiler){<br />
          &nbsp;&nbsp; &nbsp;super(jumlahRoda,tahun,warna,jenis);<br />
          &nbsp;&nbsp; &nbsp;this.kecepatanMax=kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;this.spoiler=spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengisi atribut F1<br />
          &nbsp;&nbsp; &nbsp;void kecepatanMax(int kecepatanMax){<br />
          &nbsp;&nbsp; &nbsp;this.kecepatanMax=kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setSpoiler(boolean spoiler){<br />
          &nbsp;&nbsp; &nbsp;this.spoiler=spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengambil atribut F1<br />
          &nbsp;&nbsp; &nbsp;int getKecepatanMax(){<br />
          &nbsp;&nbsp; &nbsp;return kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;boolean getSpoiler(){<br />
          &nbsp;&nbsp; &nbsp;return spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;super.info();<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Kecepatan Maksimal : &quot;+getKecepatanMax());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Memakai Spoiler : &quot;+getSpoiler());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>4.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Truk.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class Truk extends Kendaraan {<br />
          &nbsp;&nbsp; &nbsp;private int muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;private boolean gandengan;</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;Truk(){<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;Truk(int jumlahRoda,int tahun, String warna, String jenis, int muatanMaksimal, boolean gandengan){<br />
          &nbsp;&nbsp; &nbsp;super(jumlahRoda,tahun,warna,jenis);<br />
          &nbsp;&nbsp; &nbsp;this.muatanMaksimal=muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;this.gandengan=gandengan;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengisi atribut truk<br />
          &nbsp;&nbsp; &nbsp;void setMuatanMaksimal(int muatanMaksimal){<br />
          &nbsp;&nbsp; &nbsp;this.muatanMaksimal=muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setGandengan(boolean gandengan){<br />
          &nbsp;&nbsp; &nbsp;this.gandengan=gandengan;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengambil atribut truk<br />
          &nbsp;&nbsp; &nbsp;int getMuatanMaksimal(){<br />
          &nbsp;&nbsp; &nbsp;return muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;boolean getGandengan(){<br />
          &nbsp;&nbsp; &nbsp;return gandengan;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;super.info();<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Muatan Maksimal : &quot;+getMuatanMaksimal());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Gandengan : &quot;+getGandengan());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>5.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Utama.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class Utama {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Kendaraan myRide=new Kendaraan(4,1998,&quot;Hitam&quot;,&quot;Muscle&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myRide.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Truk myTruk=new Truk(8,2005,&quot;Silver&quot;,&quot;Tuner&quot;,30000,true);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myTruk.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;F1 myF1=new F1(4,2011,&quot;Lime&quot;,&quot;Exotic&quot;,320,true);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myF1.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          1.&nbsp;&nbsp; &nbsp;Buka dokumen Utama.java&nbsp;<br />
          2.&nbsp;&nbsp; &nbsp;Klik Run program, menghasilkan luaran berikut:</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture3.png" /></p>

          <p>&nbsp;</p>

          <h3><br />
          <strong>Latihan Pengayaan:</strong></h3>

          <p>&nbsp;</p>

          <p>1.&nbsp;&nbsp; &nbsp;Berdasarkan keempat potongan kode tersebut, setiap kode memiliki variabel, constructor, method yang berbeda.<br />
          Analisa potongan kode yang menunjukkan sifat pewarisan, enkapsulasi, dan polimorfisme dari keempat dokumen Java tersebut!<br />
          2.&nbsp;&nbsp; &nbsp;Simpulkan perbedaan sifat pewarisan, enkapsulasi, dan polimorfisme berdasarkan keempat dokumen Java tersebut!<br />
          3.&nbsp;&nbsp; &nbsp;Susunlah diagram yang mengkonstruksikan sifat pewarisan, enkapsulasi, dan polimorfisme berdasarkan keempat dokumen Java tersebut (lihat contoh diagram class Bentuk)!</p>','created_at' => '2024-08-20 09:50:56','updated_at' => '2024-08-20 09:50:56'),
            array('id' => '44','materi_id' => '112','judul' => 'Pengenalan Sifat Pemrograman Berorientasi Objek','isi_materi' => '<h2><strong>Materi Pengayaan</strong>&nbsp;</h2>

          <p><br />
          Java sebagai bahasa berorientasi objek memiliki sifat pewarisan (inheritance), enkapsulasi (encapsulation), dan polimorfisme (polimorfism).</p>

          <h3><strong>Enkapsulasi&nbsp;</strong></h3>

          <p>Enkapsulasi (encapsulation) merupakan cara untuk melindungi property (atribut)/ method tertentu dari sebuah kelas agar tidak sembarangan diakses dan dimodifikasi oleh suatu bagian program. Cara untuk melindungi data yaitu dengan menggunakan access modifiers (hak akses). Ada 4 hak akses yang tersedia, yaitu default, public, protected, private.</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture1.png" /></p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <h3><strong>Inheritance&nbsp;</strong></h3>

          <p>Inheritance merupakan proses pewarisan data dan method dari suatu class yang telah ada kepada suatu class baru. Class yang mewariskan disebut dengan super class/ parent class/ base class, sedangkan class yang mewarisi (class yang baru) disebut dengan sub class/ child class/ derived class. Sub class tidak dapat mewarisi anggota private dari super class. Dengan inheritance, class yang baru (sub class) akan mirip dengan class yang lama (super class) namun memiliki karakteristik yang baru. Dalam Java, sub class hanya bisa memiliki satu super class (single inheritance) sedangkan super class bisa memiliki satu sub class atau lebih. Untuk menerapkan inheritance, gunakan statement&ldquo;extends&rdquo;.&nbsp;<br />
          Keyword &ldquo;super&rdquo; digunakan oleh sub class untuk memanggil constructor, atribut dan method yang ada pada super class.</p>

          <h3><strong>Polimorfisme&nbsp;</strong></h3>

          <p>Polimorfisme mempunyai makna sesuatu yang memiliki banyak bentuk, yaitu memiliki nama sama, tetapi memiliki kelakuan (behaviour) yang berbeda.&nbsp;<br />
          &nbsp;</p>

          <p>Class Bentuk merupakan class induk (super class) dari class Lingkaran, Elips, dan Segitiga mempunyai method gambar() dan hapus(). Class-class anak (sub class) juga mempunyai method gambar() dan hapus(). Meskipun keempat class tersebut mempunyai nama method yang sama, tetapi isi (source code/ yang dilakukan/ output) dari masing-masing method berbeda. Jika kita menginginkan sebuah objek yang dapat memanggil setiap method (yaitu method gambar &amp; hapus) yang ada pada setiap class (pada super class maupun subclass), maka gunakanlah teknik Polimorfisme. Polimorfisme hanya berlaku pada method dan tidak berlaku untuk atribut.</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture2.png" /></p>

          <p>&nbsp;</p>

          <p><strong>Contoh Pengayaan:</strong></p>

          <p>&nbsp;</p>

          <p>1.&nbsp;&nbsp; &nbsp;Buatlah package superKendaraan<br />
          2.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Kendaraan.java &nbsp;dengan menggunakan package superKendaraan<br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>class Kendaraan {<br />
          &nbsp; &nbsp; private int jumlahRoda,tahun;<br />
          &nbsp;&nbsp; &nbsp;private String warna,jenis;<br />
          &nbsp;&nbsp; &nbsp;Kendaraan(){</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;Kendaraan (int jumlahRoda,int tahun, String warna, String jenis){<br />
          &nbsp;&nbsp; &nbsp;this.jumlahRoda=jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;this.tahun=tahun;<br />
          &nbsp;&nbsp; &nbsp;this.warna=warna;<br />
          &nbsp;&nbsp; &nbsp;this.jenis=jenis;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengisi atribut kendaraan<br />
          &nbsp;&nbsp; &nbsp;void setJumlahRoda(int jumlahRoda){<br />
          &nbsp;&nbsp; &nbsp;this.jumlahRoda=jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setTahun(int tahun){<br />
          &nbsp;&nbsp; &nbsp;this.tahun=tahun;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setWarna(String warna){<br />
          &nbsp;&nbsp; &nbsp;this.warna=warna;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setJenis(String jenis){<br />
          &nbsp;&nbsp; &nbsp;this.jenis=jenis;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengambil atribut kendaraan<br />
          &nbsp;&nbsp; &nbsp;int getJumlahRoda(){<br />
          &nbsp;&nbsp; &nbsp;return jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;int getTahun(){<br />
          &nbsp;&nbsp; &nbsp;return tahun;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;String getWarna(){<br />
          &nbsp;&nbsp; &nbsp;return warna;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;String getJenis(){<br />
          &nbsp;&nbsp; &nbsp;return jenis;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Jumlah Roda : &quot;+getJumlahRoda());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Tahun : &quot;+getTahun());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Warna : &quot;+getWarna());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Jenis : &quot;+getJenis());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>3.&nbsp;&nbsp; &nbsp;Buatlah dokumen class F1.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class F1 extends Kendaraan {<br />
          &nbsp;&nbsp; &nbsp;private int kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;private boolean spoiler;</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;F1(){</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;F1(int jumlahRoda,int tahun, String warna, String jenis, int kecepatanMax, boolean spoiler){<br />
          &nbsp;&nbsp; &nbsp;super(jumlahRoda,tahun,warna,jenis);<br />
          &nbsp;&nbsp; &nbsp;this.kecepatanMax=kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;this.spoiler=spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengisi atribut F1<br />
          &nbsp;&nbsp; &nbsp;void kecepatanMax(int kecepatanMax){<br />
          &nbsp;&nbsp; &nbsp;this.kecepatanMax=kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setSpoiler(boolean spoiler){<br />
          &nbsp;&nbsp; &nbsp;this.spoiler=spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengambil atribut F1<br />
          &nbsp;&nbsp; &nbsp;int getKecepatanMax(){<br />
          &nbsp;&nbsp; &nbsp;return kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;boolean getSpoiler(){<br />
          &nbsp;&nbsp; &nbsp;return spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;super.info();<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Kecepatan Maksimal : &quot;+getKecepatanMax());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Memakai Spoiler : &quot;+getSpoiler());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>4.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Truk.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class Truk extends Kendaraan {<br />
          &nbsp;&nbsp; &nbsp;private int muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;private boolean gandengan;</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;Truk(){<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;Truk(int jumlahRoda,int tahun, String warna, String jenis, int muatanMaksimal, boolean gandengan){<br />
          &nbsp;&nbsp; &nbsp;super(jumlahRoda,tahun,warna,jenis);<br />
          &nbsp;&nbsp; &nbsp;this.muatanMaksimal=muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;this.gandengan=gandengan;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengisi atribut truk<br />
          &nbsp;&nbsp; &nbsp;void setMuatanMaksimal(int muatanMaksimal){<br />
          &nbsp;&nbsp; &nbsp;this.muatanMaksimal=muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setGandengan(boolean gandengan){<br />
          &nbsp;&nbsp; &nbsp;this.gandengan=gandengan;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengambil atribut truk<br />
          &nbsp;&nbsp; &nbsp;int getMuatanMaksimal(){<br />
          &nbsp;&nbsp; &nbsp;return muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;boolean getGandengan(){<br />
          &nbsp;&nbsp; &nbsp;return gandengan;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;super.info();<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Muatan Maksimal : &quot;+getMuatanMaksimal());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Gandengan : &quot;+getGandengan());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>5.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Utama.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class Utama {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Kendaraan myRide=new Kendaraan(4,1998,&quot;Hitam&quot;,&quot;Muscle&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myRide.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Truk myTruk=new Truk(8,2005,&quot;Silver&quot;,&quot;Tuner&quot;,30000,true);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myTruk.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;F1 myF1=new F1(4,2011,&quot;Lime&quot;,&quot;Exotic&quot;,320,true);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myF1.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          1.&nbsp;&nbsp; &nbsp;Buka dokumen Utama.java&nbsp;<br />
          2.&nbsp;&nbsp; &nbsp;Klik Run program, menghasilkan luaran berikut:</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture3.png" /></p>

          <p>&nbsp;</p>

          <h3><br />
          <strong>Latihan Pengayaan:</strong></h3>

          <p>&nbsp;</p>

          <p>1.&nbsp;&nbsp; &nbsp;Berdasarkan keempat potongan kode tersebut, setiap kode memiliki variabel, constructor, method yang berbeda.<br />
          Analisa potongan kode yang menunjukkan sifat pewarisan, enkapsulasi, dan polimorfisme dari keempat dokumen Java tersebut!<br />
          2.&nbsp;&nbsp; &nbsp;Simpulkan perbedaan sifat pewarisan, enkapsulasi, dan polimorfisme berdasarkan keempat dokumen Java tersebut!<br />
          3.&nbsp;&nbsp; &nbsp;Susunlah diagram yang mengkonstruksikan sifat pewarisan, enkapsulasi, dan polimorfisme berdasarkan keempat dokumen Java tersebut (lihat contoh diagram class Bentuk)!</p>','created_at' => '2024-08-20 09:51:02','updated_at' => '2024-08-20 09:51:02'),
            array('id' => '45','materi_id' => '111','judul' => 'Pengenalan Sifat Pemrograman Berorientasi Objek','isi_materi' => '<h2><strong>Materi Pengayaan</strong>&nbsp;</h2>

          <p><br />
          Java sebagai bahasa berorientasi objek memiliki sifat pewarisan (inheritance), enkapsulasi (encapsulation), dan polimorfisme (polimorfism).</p>

          <h3><strong>Enkapsulasi&nbsp;</strong></h3>

          <p>Enkapsulasi (encapsulation) merupakan cara untuk melindungi property (atribut)/ method tertentu dari sebuah kelas agar tidak sembarangan diakses dan dimodifikasi oleh suatu bagian program. Cara untuk melindungi data yaitu dengan menggunakan access modifiers (hak akses). Ada 4 hak akses yang tersedia, yaitu default, public, protected, private.</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture1.png" /></p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <h3><strong>Inheritance&nbsp;</strong></h3>

          <p>Inheritance merupakan proses pewarisan data dan method dari suatu class yang telah ada kepada suatu class baru. Class yang mewariskan disebut dengan super class/ parent class/ base class, sedangkan class yang mewarisi (class yang baru) disebut dengan sub class/ child class/ derived class. Sub class tidak dapat mewarisi anggota private dari super class. Dengan inheritance, class yang baru (sub class) akan mirip dengan class yang lama (super class) namun memiliki karakteristik yang baru. Dalam Java, sub class hanya bisa memiliki satu super class (single inheritance) sedangkan super class bisa memiliki satu sub class atau lebih. Untuk menerapkan inheritance, gunakan statement&ldquo;extends&rdquo;.&nbsp;<br />
          Keyword &ldquo;super&rdquo; digunakan oleh sub class untuk memanggil constructor, atribut dan method yang ada pada super class.</p>

          <h3><strong>Polimorfisme&nbsp;</strong></h3>

          <p>Polimorfisme mempunyai makna sesuatu yang memiliki banyak bentuk, yaitu memiliki nama sama, tetapi memiliki kelakuan (behaviour) yang berbeda.&nbsp;<br />
          &nbsp;</p>

          <p>Class Bentuk merupakan class induk (super class) dari class Lingkaran, Elips, dan Segitiga mempunyai method gambar() dan hapus(). Class-class anak (sub class) juga mempunyai method gambar() dan hapus(). Meskipun keempat class tersebut mempunyai nama method yang sama, tetapi isi (source code/ yang dilakukan/ output) dari masing-masing method berbeda. Jika kita menginginkan sebuah objek yang dapat memanggil setiap method (yaitu method gambar &amp; hapus) yang ada pada setiap class (pada super class maupun subclass), maka gunakanlah teknik Polimorfisme. Polimorfisme hanya berlaku pada method dan tidak berlaku untuk atribut.</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture2.png" /></p>

          <p>&nbsp;</p>

          <p><strong>Contoh Pengayaan:</strong></p>

          <p>&nbsp;</p>

          <p>1.&nbsp;&nbsp; &nbsp;Buatlah package superKendaraan<br />
          2.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Kendaraan.java &nbsp;dengan menggunakan package superKendaraan<br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>class Kendaraan {<br />
          &nbsp; &nbsp; private int jumlahRoda,tahun;<br />
          &nbsp;&nbsp; &nbsp;private String warna,jenis;<br />
          &nbsp;&nbsp; &nbsp;Kendaraan(){</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;Kendaraan (int jumlahRoda,int tahun, String warna, String jenis){<br />
          &nbsp;&nbsp; &nbsp;this.jumlahRoda=jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;this.tahun=tahun;<br />
          &nbsp;&nbsp; &nbsp;this.warna=warna;<br />
          &nbsp;&nbsp; &nbsp;this.jenis=jenis;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengisi atribut kendaraan<br />
          &nbsp;&nbsp; &nbsp;void setJumlahRoda(int jumlahRoda){<br />
          &nbsp;&nbsp; &nbsp;this.jumlahRoda=jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setTahun(int tahun){<br />
          &nbsp;&nbsp; &nbsp;this.tahun=tahun;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setWarna(String warna){<br />
          &nbsp;&nbsp; &nbsp;this.warna=warna;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setJenis(String jenis){<br />
          &nbsp;&nbsp; &nbsp;this.jenis=jenis;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengambil atribut kendaraan<br />
          &nbsp;&nbsp; &nbsp;int getJumlahRoda(){<br />
          &nbsp;&nbsp; &nbsp;return jumlahRoda;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;int getTahun(){<br />
          &nbsp;&nbsp; &nbsp;return tahun;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;String getWarna(){<br />
          &nbsp;&nbsp; &nbsp;return warna;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;String getJenis(){<br />
          &nbsp;&nbsp; &nbsp;return jenis;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Jumlah Roda : &quot;+getJumlahRoda());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Tahun : &quot;+getTahun());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Warna : &quot;+getWarna());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Jenis : &quot;+getJenis());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>3.&nbsp;&nbsp; &nbsp;Buatlah dokumen class F1.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class F1 extends Kendaraan {<br />
          &nbsp;&nbsp; &nbsp;private int kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;private boolean spoiler;</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;F1(){</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;F1(int jumlahRoda,int tahun, String warna, String jenis, int kecepatanMax, boolean spoiler){<br />
          &nbsp;&nbsp; &nbsp;super(jumlahRoda,tahun,warna,jenis);<br />
          &nbsp;&nbsp; &nbsp;this.kecepatanMax=kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;this.spoiler=spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengisi atribut F1<br />
          &nbsp;&nbsp; &nbsp;void kecepatanMax(int kecepatanMax){<br />
          &nbsp;&nbsp; &nbsp;this.kecepatanMax=kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setSpoiler(boolean spoiler){<br />
          &nbsp;&nbsp; &nbsp;this.spoiler=spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengambil atribut F1<br />
          &nbsp;&nbsp; &nbsp;int getKecepatanMax(){<br />
          &nbsp;&nbsp; &nbsp;return kecepatanMax;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;boolean getSpoiler(){<br />
          &nbsp;&nbsp; &nbsp;return spoiler;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;super.info();<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Kecepatan Maksimal : &quot;+getKecepatanMax());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Memakai Spoiler : &quot;+getSpoiler());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>4.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Truk.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class Truk extends Kendaraan {<br />
          &nbsp;&nbsp; &nbsp;private int muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;private boolean gandengan;</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;Truk(){<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;Truk(int jumlahRoda,int tahun, String warna, String jenis, int muatanMaksimal, boolean gandengan){<br />
          &nbsp;&nbsp; &nbsp;super(jumlahRoda,tahun,warna,jenis);<br />
          &nbsp;&nbsp; &nbsp;this.muatanMaksimal=muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;this.gandengan=gandengan;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;// mengisi atribut truk<br />
          &nbsp;&nbsp; &nbsp;void setMuatanMaksimal(int muatanMaksimal){<br />
          &nbsp;&nbsp; &nbsp;this.muatanMaksimal=muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;void setGandengan(boolean gandengan){<br />
          &nbsp;&nbsp; &nbsp;this.gandengan=gandengan;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;// mengambil atribut truk<br />
          &nbsp;&nbsp; &nbsp;int getMuatanMaksimal(){<br />
          &nbsp;&nbsp; &nbsp;return muatanMaksimal;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;boolean getGandengan(){<br />
          &nbsp;&nbsp; &nbsp;return gandengan;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void info(){<br />
          &nbsp;&nbsp; &nbsp;super.info();<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Muatan Maksimal : &quot;+getMuatanMaksimal());<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&quot;Gandengan : &quot;+getGandengan());<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code></p>

          <p>5.&nbsp;&nbsp; &nbsp;Buatlah dokumen class Utama.java &nbsp;dengan menggunakan <code>package superKendaraan</code><br />
          Salin dan tempel kode berikut:</p>

          <p><code>package superKendaraan;</code></p>

          <p><code>public class Utama {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Kendaraan myRide=new Kendaraan(4,1998,&quot;Hitam&quot;,&quot;Muscle&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myRide.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Truk myTruk=new Truk(8,2005,&quot;Silver&quot;,&quot;Tuner&quot;,30000,true);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myTruk.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;F1 myF1=new F1(4,2011,&quot;Lime&quot;,&quot;Exotic&quot;,320,true);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;myF1.info();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println();</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><strong>Luaran:</strong><br />
          1.&nbsp;&nbsp; &nbsp;Buka dokumen Utama.java&nbsp;<br />
          2.&nbsp;&nbsp; &nbsp;Klik Run program, menghasilkan luaran berikut:</p>

          <p><img alt="" src="https://adaptif.rumahilmu.org/upload/pengayaan_image/Picture3.png" /></p>

          <p>&nbsp;</p>

          <h3><br />
          <strong>Latihan Pengayaan:</strong></h3>

          <p>&nbsp;</p>

          <p>1.&nbsp;&nbsp; &nbsp;Berdasarkan keempat potongan kode tersebut, setiap kode memiliki variabel, constructor, method yang berbeda.<br />
          Analisa potongan kode yang menunjukkan sifat pewarisan, enkapsulasi, dan polimorfisme dari keempat dokumen Java tersebut!<br />
          2.&nbsp;&nbsp; &nbsp;Simpulkan perbedaan sifat pewarisan, enkapsulasi, dan polimorfisme berdasarkan keempat dokumen Java tersebut!<br />
          3.&nbsp;&nbsp; &nbsp;Susunlah diagram yang mengkonstruksikan sifat pewarisan, enkapsulasi, dan polimorfisme berdasarkan keempat dokumen Java tersebut (lihat contoh diagram class Bentuk)!</p>','created_at' => '2024-08-20 09:51:07','updated_at' => '2024-08-20 09:51:07'),
            array('id' => '46','materi_id' => '117','judul' => 'Pengayaan FOR dan WHILE','isi_materi' => '<h2><strong>PENGAYAAN 1 ARRAY</strong></h2>

          <p>Array adalah sebuah variabel yang bisa menyimpan banyak data dalam satu variabel.</p>

          <p>Array menggunakan indeks untuk memudahkan akses terhadap data yang disimpannya<br />
          Indeks array selalu dimulai dari 0</p>

          <p><strong>Cara Membuat Array di Java</strong><br />
          Cara membuat array kosong:<br />
          <code>// cara pertama<br />
          String[] nama;</code></p>

          <p><code>// cara kedua<br />
          String nama[];</code></p>

          <p><code>// cara ketiga dengan kata kunci new<br />
          String[] nama = new String[5];</code></p>

          <p>Perhatikan:<br />
          &bull;&nbsp;&nbsp; &nbsp;Kita menggunakan kurung siku [] untuk membuat array;<br />
          &bull;&nbsp;&nbsp; &nbsp;Kurung siku bisa diletakkan setelah tipe data atau nama array;<br />
          &bull;&nbsp;&nbsp; &nbsp;Angka 5 dalam kurung artinya batas atau ukuran array-nya.</p>

          <p>Array yang kosong siap diisi dengan data. Pastikan mengisinya dengan data yang sesuai dengan tipe datanya.</p>

          <p>Kita bisa mengisinya seperti ini:<br />
          <code>NPM[0] = &quot;G1A022001&quot;;<br />
          NPM[1] = &quot;G1A022002&quot;;<br />
          NPM[2] = &quot;G1A022003&quot;;<br />
          NPM[3] = &quot;G1A022004&quot;;<br />
          NPM[4] = &quot;G1A022005&quot;;</code></p>

          <p>Atau dapat dituliskan dalam satu baris kode.<br />
          <code>String[] NPM = {&quot;G1A022001&quot;, &quot;G1A022002&quot;, &quot;G1A022003&quot;, &quot;G1A022004&quot;, &quot; G1A022005&quot;}</code></p>

          <p>Pemanggilan data array dengan cara:<br />
          <code>System.out.println(NPM[2]);<br />
          Luarannya adalah G1A022003</code></p>

          <p>Pemanggilan dengan perulangan FOR menggunakan kata kerja length untuk mengambil panjang data array.<br />
          <code>for (int i = 0; i &lt;= NPM.length; i++){<br />
          System.out.println(&ldquo;NPM Teman Sekelompok &ldquo; + i &nbsp;+ &ldquo; adalah &ldquo; + NPM[i]);</code></p>

          <p><strong>Contoh:</strong></p>

          <p><code>public class ArraySatuDimensi {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;String [] NPM = {&quot;G1A022001&quot;, &quot;G1A022002&quot;, &quot;G1A022003&quot;, &quot;G1A022004&quot;, &quot; G1A022005&quot;};<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;for (int i = 0; i &lt;= NPM.length; i++){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;NPM Teman Sekelompok &quot; + i &nbsp;+ &quot; adalah &quot; + NPM[i]);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;} &nbsp;&nbsp;&nbsp; &nbsp;</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>NPM Teman Sekelompok 0 adalah G1A022001<br />
          NPM Teman Sekelompok 1 adalah G1A022002<br />
          NPM Teman Sekelompok 2 adalah G1A022003<br />
          NPM Teman Sekelompok 3 adalah G1A022004<br />
          NPM Teman Sekelompok 4 adalah &nbsp;G1A022005</code></p>

          <p>&nbsp;</p>

          <h2><strong>PENGAYAAN 2&nbsp; -&nbsp; ARRAY MULTIDIMENSI</strong></h2>

          <p>Array multi dimensi artinya array yang memiliki lebih dari satu dimensi.<br />
          Atau kita bisa sebut, array di dalam array.<br />
          Jumlah dimensinya tidak terbatas.&nbsp;</p>

          <p>Contoh:</p>

          <p><code>String[][] identitas = {<br />
          &nbsp; &nbsp; {&quot;G1A022001&quot;,&quot;Budi&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022002&quot;,&quot;Lala&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022003&quot;,&quot;Putri&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022004&quot;,&quot;Putra&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022005&quot;,&quot;Bunga&quot;}<br />
          };</code></p>

          <p>Artinya indeks identitas ke [0] &ndash; [0] &nbsp;adalah data &quot;G1A022001&quot;,&quot;Budi&quot;.<br />
          Cara membaca array berdimensi dua yaitu:</p>

          <table border="1" cellpadding="1" cellspacing="1">
              <tbody>
                  <tr>
                      <td>Indeks</td>
                      <td>0</td>
                      <td>1</td>
                  </tr>
                  <tr>
                      <td>0</td>
                      <td>G1A022001</td>
                      <td>Budi</td>
                  </tr>
                  <tr>
                      <td>1</td>
                      <td>G1A022002</td>
                      <td>Lala</td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>G1A022003</td>
                      <td>Putri</td>
                  </tr>
                  <tr>
                      <td>3</td>
                      <td>G1A022004</td>
                      <td>Putra</td>
                  </tr>
                  <tr>
                      <td>4</td>
                      <td>G1A022005</td>
                      <td>Bunga</td>
                  </tr>
              </tbody>
          </table>

          <p><strong>Contoh:</strong></p>

          <p><code>public class ArrayDuaDimensi {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;String[][] identitas ={<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022001&quot;,&quot;Budi&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022002&quot;,&quot;Lala&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022003&quot;,&quot;Putri&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022004&quot;,&quot;Putra&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022005&quot;,&quot;Bunga&quot;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;};</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;for (int a = 0; a &lt;= identitas.length; a++){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;NPM Teman Sekelompok &quot; + a &nbsp;+ &quot; adalah &quot; + identitas[a][0] + &quot; Namanya &quot; + identitas[a][1]);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>NPM Teman Sekelompok 0 adalah G1A022001 Namanya Budi<br />
          NPM Teman Sekelompok 1 adalah G1A022002 Namanya Lala<br />
          NPM Teman Sekelompok 2 adalah G1A022003 Namanya Putri<br />
          NPM Teman Sekelompok 3 adalah G1A022004 Namanya Putra<br />
          NPM Teman Sekelompok 4 adalah G1A022005 Namanya Bunga</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan:</strong></p>

          <p>1. Susun kembali kode identitas teman satu kelompok pada Tugas Kelompok Tipe Data dengan menggunakan Array!</p>

          <p>2. Susun kembali perhitungan SPP dan UKT pada Tugas Kelompok Operator dengan menggunakan Array Multi Dimensi!</p>','created_at' => '2024-08-20 10:01:42','updated_at' => '2024-08-20 10:01:42'),
            array('id' => '47','materi_id' => '118','judul' => 'Pengayaan FOR dan WHILE','isi_materi' => '<h2><strong>PENGAYAAN 1 ARRAY</strong></h2>

          <p>Array adalah sebuah variabel yang bisa menyimpan banyak data dalam satu variabel.</p>

          <p>Array menggunakan indeks untuk memudahkan akses terhadap data yang disimpannya<br />
          Indeks array selalu dimulai dari 0</p>

          <p><strong>Cara Membuat Array di Java</strong><br />
          Cara membuat array kosong:<br />
          <code>// cara pertama<br />
          String[] nama;</code></p>

          <p><code>// cara kedua<br />
          String nama[];</code></p>

          <p><code>// cara ketiga dengan kata kunci new<br />
          String[] nama = new String[5];</code></p>

          <p>Perhatikan:<br />
          &bull;&nbsp;&nbsp; &nbsp;Kita menggunakan kurung siku [] untuk membuat array;<br />
          &bull;&nbsp;&nbsp; &nbsp;Kurung siku bisa diletakkan setelah tipe data atau nama array;<br />
          &bull;&nbsp;&nbsp; &nbsp;Angka 5 dalam kurung artinya batas atau ukuran array-nya.</p>

          <p>Array yang kosong siap diisi dengan data. Pastikan mengisinya dengan data yang sesuai dengan tipe datanya.</p>

          <p>Kita bisa mengisinya seperti ini:<br />
          <code>NPM[0] = &quot;G1A022001&quot;;<br />
          NPM[1] = &quot;G1A022002&quot;;<br />
          NPM[2] = &quot;G1A022003&quot;;<br />
          NPM[3] = &quot;G1A022004&quot;;<br />
          NPM[4] = &quot;G1A022005&quot;;</code></p>

          <p>Atau dapat dituliskan dalam satu baris kode.<br />
          <code>String[] NPM = {&quot;G1A022001&quot;, &quot;G1A022002&quot;, &quot;G1A022003&quot;, &quot;G1A022004&quot;, &quot; G1A022005&quot;}</code></p>

          <p>Pemanggilan data array dengan cara:<br />
          <code>System.out.println(NPM[2]);<br />
          Luarannya adalah G1A022003</code></p>

          <p>Pemanggilan dengan perulangan FOR menggunakan kata kerja length untuk mengambil panjang data array.<br />
          <code>for (int i = 0; i &lt;= NPM.length; i++){<br />
          System.out.println(&ldquo;NPM Teman Sekelompok &ldquo; + i &nbsp;+ &ldquo; adalah &ldquo; + NPM[i]);</code></p>

          <p><strong>Contoh:</strong></p>

          <p><code>public class ArraySatuDimensi {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;String [] NPM = {&quot;G1A022001&quot;, &quot;G1A022002&quot;, &quot;G1A022003&quot;, &quot;G1A022004&quot;, &quot; G1A022005&quot;};<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;for (int i = 0; i &lt;= NPM.length; i++){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;NPM Teman Sekelompok &quot; + i &nbsp;+ &quot; adalah &quot; + NPM[i]);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;} &nbsp;&nbsp;&nbsp; &nbsp;</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>NPM Teman Sekelompok 0 adalah G1A022001<br />
          NPM Teman Sekelompok 1 adalah G1A022002<br />
          NPM Teman Sekelompok 2 adalah G1A022003<br />
          NPM Teman Sekelompok 3 adalah G1A022004<br />
          NPM Teman Sekelompok 4 adalah &nbsp;G1A022005</code></p>

          <p>&nbsp;</p>

          <h2><strong>PENGAYAAN 2&nbsp; -&nbsp; ARRAY MULTIDIMENSI</strong></h2>

          <p>Array multi dimensi artinya array yang memiliki lebih dari satu dimensi.<br />
          Atau kita bisa sebut, array di dalam array.<br />
          Jumlah dimensinya tidak terbatas.&nbsp;</p>

          <p>Contoh:</p>

          <p><code>String[][] identitas = {<br />
          &nbsp; &nbsp; {&quot;G1A022001&quot;,&quot;Budi&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022002&quot;,&quot;Lala&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022003&quot;,&quot;Putri&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022004&quot;,&quot;Putra&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022005&quot;,&quot;Bunga&quot;}<br />
          };</code></p>

          <p>Artinya indeks identitas ke [0] &ndash; [0] &nbsp;adalah data &quot;G1A022001&quot;,&quot;Budi&quot;.<br />
          Cara membaca array berdimensi dua yaitu:</p>

          <table border="1" cellpadding="1" cellspacing="1">
              <tbody>
                  <tr>
                      <td>Indeks</td>
                      <td>0</td>
                      <td>1</td>
                  </tr>
                  <tr>
                      <td>0</td>
                      <td>G1A022001</td>
                      <td>Budi</td>
                  </tr>
                  <tr>
                      <td>1</td>
                      <td>G1A022002</td>
                      <td>Lala</td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>G1A022003</td>
                      <td>Putri</td>
                  </tr>
                  <tr>
                      <td>3</td>
                      <td>G1A022004</td>
                      <td>Putra</td>
                  </tr>
                  <tr>
                      <td>4</td>
                      <td>G1A022005</td>
                      <td>Bunga</td>
                  </tr>
              </tbody>
          </table>

          <p><strong>Contoh:</strong></p>

          <p><code>public class ArrayDuaDimensi {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;String[][] identitas ={<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022001&quot;,&quot;Budi&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022002&quot;,&quot;Lala&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022003&quot;,&quot;Putri&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022004&quot;,&quot;Putra&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022005&quot;,&quot;Bunga&quot;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;};</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;for (int a = 0; a &lt;= identitas.length; a++){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;NPM Teman Sekelompok &quot; + a &nbsp;+ &quot; adalah &quot; + identitas[a][0] + &quot; Namanya &quot; + identitas[a][1]);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>NPM Teman Sekelompok 0 adalah G1A022001 Namanya Budi<br />
          NPM Teman Sekelompok 1 adalah G1A022002 Namanya Lala<br />
          NPM Teman Sekelompok 2 adalah G1A022003 Namanya Putri<br />
          NPM Teman Sekelompok 3 adalah G1A022004 Namanya Putra<br />
          NPM Teman Sekelompok 4 adalah G1A022005 Namanya Bunga</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan:</strong></p>

          <p>1. Susun kembali kode identitas teman satu kelompok pada Tugas Kelompok Tipe Data dengan menggunakan Array!</p>

          <p>2. Susun kembali perhitungan SPP dan UKT pada Tugas Kelompok Operator dengan menggunakan Array Multi Dimensi!</p>','created_at' => '2024-08-20 10:01:48','updated_at' => '2024-08-20 10:01:48'),
            array('id' => '48','materi_id' => '119','judul' => 'Pengayaan FOR dan WHILE','isi_materi' => '<h2><strong>PENGAYAAN 1 ARRAY</strong></h2>

          <p>Array adalah sebuah variabel yang bisa menyimpan banyak data dalam satu variabel.</p>

          <p>Array menggunakan indeks untuk memudahkan akses terhadap data yang disimpannya<br />
          Indeks array selalu dimulai dari 0</p>

          <p><strong>Cara Membuat Array di Java</strong><br />
          Cara membuat array kosong:<br />
          <code>// cara pertama<br />
          String[] nama;</code></p>

          <p><code>// cara kedua<br />
          String nama[];</code></p>

          <p><code>// cara ketiga dengan kata kunci new<br />
          String[] nama = new String[5];</code></p>

          <p>Perhatikan:<br />
          &bull;&nbsp;&nbsp; &nbsp;Kita menggunakan kurung siku [] untuk membuat array;<br />
          &bull;&nbsp;&nbsp; &nbsp;Kurung siku bisa diletakkan setelah tipe data atau nama array;<br />
          &bull;&nbsp;&nbsp; &nbsp;Angka 5 dalam kurung artinya batas atau ukuran array-nya.</p>

          <p>Array yang kosong siap diisi dengan data. Pastikan mengisinya dengan data yang sesuai dengan tipe datanya.</p>

          <p>Kita bisa mengisinya seperti ini:<br />
          <code>NPM[0] = &quot;G1A022001&quot;;<br />
          NPM[1] = &quot;G1A022002&quot;;<br />
          NPM[2] = &quot;G1A022003&quot;;<br />
          NPM[3] = &quot;G1A022004&quot;;<br />
          NPM[4] = &quot;G1A022005&quot;;</code></p>

          <p>Atau dapat dituliskan dalam satu baris kode.<br />
          <code>String[] NPM = {&quot;G1A022001&quot;, &quot;G1A022002&quot;, &quot;G1A022003&quot;, &quot;G1A022004&quot;, &quot; G1A022005&quot;}</code></p>

          <p>Pemanggilan data array dengan cara:<br />
          <code>System.out.println(NPM[2]);<br />
          Luarannya adalah G1A022003</code></p>

          <p>Pemanggilan dengan perulangan FOR menggunakan kata kerja length untuk mengambil panjang data array.<br />
          <code>for (int i = 0; i &lt;= NPM.length; i++){<br />
          System.out.println(&ldquo;NPM Teman Sekelompok &ldquo; + i &nbsp;+ &ldquo; adalah &ldquo; + NPM[i]);</code></p>

          <p><strong>Contoh:</strong></p>

          <p><code>public class ArraySatuDimensi {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;String [] NPM = {&quot;G1A022001&quot;, &quot;G1A022002&quot;, &quot;G1A022003&quot;, &quot;G1A022004&quot;, &quot; G1A022005&quot;};<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;for (int i = 0; i &lt;= NPM.length; i++){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;NPM Teman Sekelompok &quot; + i &nbsp;+ &quot; adalah &quot; + NPM[i]);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;} &nbsp;&nbsp;&nbsp; &nbsp;</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>NPM Teman Sekelompok 0 adalah G1A022001<br />
          NPM Teman Sekelompok 1 adalah G1A022002<br />
          NPM Teman Sekelompok 2 adalah G1A022003<br />
          NPM Teman Sekelompok 3 adalah G1A022004<br />
          NPM Teman Sekelompok 4 adalah &nbsp;G1A022005</code></p>

          <p>&nbsp;</p>

          <h2><strong>PENGAYAAN 2&nbsp; -&nbsp; ARRAY MULTIDIMENSI</strong></h2>

          <p>Array multi dimensi artinya array yang memiliki lebih dari satu dimensi.<br />
          Atau kita bisa sebut, array di dalam array.<br />
          Jumlah dimensinya tidak terbatas.&nbsp;</p>

          <p>Contoh:</p>

          <p><code>String[][] identitas = {<br />
          &nbsp; &nbsp; {&quot;G1A022001&quot;,&quot;Budi&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022002&quot;,&quot;Lala&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022003&quot;,&quot;Putri&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022004&quot;,&quot;Putra&quot;},<br />
          &nbsp; &nbsp; {&quot;G1A022005&quot;,&quot;Bunga&quot;}<br />
          };</code></p>

          <p>Artinya indeks identitas ke [0] &ndash; [0] &nbsp;adalah data &quot;G1A022001&quot;,&quot;Budi&quot;.<br />
          Cara membaca array berdimensi dua yaitu:</p>

          <table border="1" cellpadding="1" cellspacing="1">
              <tbody>
                  <tr>
                      <td>Indeks</td>
                      <td>0</td>
                      <td>1</td>
                  </tr>
                  <tr>
                      <td>0</td>
                      <td>G1A022001</td>
                      <td>Budi</td>
                  </tr>
                  <tr>
                      <td>1</td>
                      <td>G1A022002</td>
                      <td>Lala</td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>G1A022003</td>
                      <td>Putri</td>
                  </tr>
                  <tr>
                      <td>3</td>
                      <td>G1A022004</td>
                      <td>Putra</td>
                  </tr>
                  <tr>
                      <td>4</td>
                      <td>G1A022005</td>
                      <td>Bunga</td>
                  </tr>
              </tbody>
          </table>

          <p><strong>Contoh:</strong></p>

          <p><code>public class ArrayDuaDimensi {<br />
          &nbsp;&nbsp; &nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;String[][] identitas ={<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022001&quot;,&quot;Budi&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022002&quot;,&quot;Lala&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022003&quot;,&quot;Putri&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022004&quot;,&quot;Putra&quot;},<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;{&quot;G1A022005&quot;,&quot;Bunga&quot;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;};</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;for (int a = 0; a &lt;= identitas.length; a++){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;System.out.println(&quot;NPM Teman Sekelompok &quot; + a &nbsp;+ &quot; adalah &quot; + identitas[a][0] + &quot; Namanya &quot; + identitas[a][1]);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;</code></p>

          <p><strong>Luaran:</strong></p>

          <p><code>NPM Teman Sekelompok 0 adalah G1A022001 Namanya Budi<br />
          NPM Teman Sekelompok 1 adalah G1A022002 Namanya Lala<br />
          NPM Teman Sekelompok 2 adalah G1A022003 Namanya Putri<br />
          NPM Teman Sekelompok 3 adalah G1A022004 Namanya Putra<br />
          NPM Teman Sekelompok 4 adalah G1A022005 Namanya Bunga</code></p>

          <p>&nbsp;</p>

          <p><strong>Latihan Pengayaan:</strong></p>

          <p>1. Susun kembali kode identitas teman satu kelompok pada Tugas Kelompok Tipe Data dengan menggunakan Array!</p>

          <p>2. Susun kembali perhitungan SPP dan UKT pada Tugas Kelompok Operator dengan menggunakan Array Multi Dimensi!</p>','created_at' => '2024-08-20 10:01:53','updated_at' => '2024-08-20 10:01:53')
        );

        foreach ($datas as $data) {
            DB::table('materi_pengayaans')->insert($data);
        }
    }
}
