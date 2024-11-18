<?php

namespace Database\Seeders;

use App\Models\BankKuisioner;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BankKuisionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // bank questioners
        $data = [
            [
                'id' => 1,
                'jenis_kuisioner_id' => 1,
                'pertanyaan' => 'Saya merasa terganggu ketika orang memiliki ide bagus namun lemah dalam beragumen',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 2,
                'jenis_kuisioner_id' => 1,
                'pertanyaan' => 'Saya hanya berpura-pura logis',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 3,
                'jenis_kuisioner_id' => 1,
                'pertanyaan' => 'Orang lain mengandalkan saya untuk memecahkan masalah',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 4,
                'jenis_kuisioner_id' => 1,
                'pertanyaan' => 'Saya harus memiliki dasar untuk semua keyakinan',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 5,
                'jenis_kuisioner_id' => 1,
                'pertanyaan' => 'Saya orang yang logis',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 6,
                'jenis_kuisioner_id' => 1,
                'pertanyaan' => 'Saya perlu mengetahui secara jelas tentang masalah yang dihadapi',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 7,
                'jenis_kuisioner_id' => 1,
                'pertanyaan' => 'Suatu masalah punya beragam cara penyelesaian',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 8,
                'jenis_kuisioner_id' => 1,
                'pertanyaan' => 'Saya dapat memecahkan masalah kompleks dengan secara 6',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 9,
                'jenis_kuisioner_id' => 1,
                'pertanyaan' => 'Hidup telah mengajari saya untuk tidak terlalu logis',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 10,
                'jenis_kuisioner_id' => 1,
                'pertanyaan' => 'Orang lain meminta pendapat saya untuk pemecahan masalah',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 11,
                'jenis_kuisioner_id' => 2,
                'pertanyaan' => 'Saya bangga bisa berpikir dengan sangat presisi/tepat.',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 12,
                'jenis_kuisioner_id' => 2,
                'pertanyaan' => 'Saya menyukai ujian yang membutuhkan pemikiran, daripada ujian hapalan.',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 13,
                'jenis_kuisioner_id' => 2,
                'pertanyaan' => 'Orang lain mengagumi keingintahuan dan intelektual saya',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 14,
                'jenis_kuisioner_id' => 2,
                'pertanyaan' => 'Orang lain meminta bantuan saya untuk memutuskan sesuatu dengan adil.',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 15,
                'jenis_kuisioner_id' => 2,
                'pertanyaan' => 'Saya senang menawarkan alternatif solusi yang kreatif.',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 16,
                'jenis_kuisioner_id' => 2,
                'pertanyaan' => 'Orang lain memandang saya mampu menetapkan standar yang masuk akal dalam pengambilan keputusan',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 17,
                'jenis_kuisioner_id' => 2,
                'pertanyaan' => 'Saya selalu ingin tahu',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 18,
                'jenis_kuisioner_id' => 2,
                'pertanyaan' => 'Saya mampu memahami dan menghargai pendapat orang lain',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 19,
                'jenis_kuisioner_id' => 2,
                'pertanyaan' => 'Saya terus bekerja menyelesaikan masalah ketika keadaan sulit',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 20,
                'jenis_kuisioner_id' => 3,
                'pertanyaan' => 'Saya senang mempelajari hal-hal baru dalam hidup',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 21,
                'jenis_kuisioner_id' => 3,
                'pertanyaan' => 'Saya mencari semua informasi, ketika harus mengambil keputusan besar',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 22,
                'jenis_kuisioner_id' => 3,
                'pertanyaan' => 'Saya terus berusaha mencoba ketika memecahkan masalah sulit.',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 23,
                'jenis_kuisioner_id' => 3,
                'pertanyaan' => 'Saya berharap dapat mempelajari dari hal-hal menantang',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 24,
                'jenis_kuisioner_id' => 3,
                'pertanyaan' => 'Saya senang memecahkan masalah kompleks',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 25,
                'jenis_kuisioner_id' => 3,
                'pertanyaan' => 'Saya sangat menikmati ketika mencari tahu bagaimana cara kerja segala sesuatu',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 26,
                'jenis_kuisioner_id' => 3,
                'pertanyaan' => 'Saya selalu ingin tahu apapun',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 27,
                'jenis_kuisioner_id' => 3,
                'pertanyaan' => 'Saya senang mempelajari semua yang mungkin berguna suatu saat nanti',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 28,
                'jenis_kuisioner_id' => 4,
                'pertanyaan' => 'Kebenaran itu tergantung pada sudut pandang Anda',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 29,
                'jenis_kuisioner_id' => 4,
                'pertanyaan' => 'Kita tidak pernah bisa benar-benar mengukur kebenaran tentang banyak hal',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 30,
                'jenis_kuisioner_id' => 4,
                'pertanyaan' => 'Saya senang menerima nasihat dan masukan',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 31,
                'jenis_kuisioner_id' => 4,
                'pertanyaan' => 'Berpikiran terbuka berarti Anda tidak tahu mana yang benar dan mana yang tidak',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 32,
                'jenis_kuisioner_id' => 4,
                'pertanyaan' => 'Membaca adalah sesuatu yang saya hindari',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 33,
                'jenis_kuisioner_id' => 4,
                'pertanyaan' => 'Orang yang berkuasa akan memiliki jawaban yang tepat',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 34,
                'jenis_kuisioner_id' => 4,
                'pertanyaan' => 'Cara terbaik untuk memecahkan masalah adalah meminta jawaban orang lain',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 35,
                'jenis_kuisioner_id' => 4,
                'pertanyaan' => 'Argumen terbaik sebuah ide dengan mengutamakan perasaan Anda',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 36,
                'jenis_kuisioner_id' => 5,
                'pertanyaan' => 'Saya kurang mampu mempertimbangkan semua alternatif',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 37,
                'jenis_kuisioner_id' => 5,
                'pertanyaan' => 'Saya mungkin memiliki bias atau keraguan yang tidak disadari',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 38,
                'jenis_kuisioner_id' => 5,
                'pertanyaan' => 'Saya dapat menerima apabila pendapat saya keliru',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 39,
                'jenis_kuisioner_id' => 5,
                'pertanyaan' => 'Penting untuk memahami apa yang orang lain pikirkan tentang berbagai hal',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 40,
                'jenis_kuisioner_id' => 5,
                'pertanyaan' => 'Orang asing harus mempelajari kita daripada kita yang selalu berusaha memahami mereka.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 41,
                'jenis_kuisioner_id' => 5,
                'pertanyaan' => 'Saya berusaha untuk tidak terlalu menghakimi',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 42,
                'jenis_kuisioner_id' => 5,
                'pertanyaan' => 'Saya seharusnya tidak memaksakan pendapat saya sendiri',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 43,
                'jenis_kuisioner_id' => 5,
                'pertanyaan' => 'Saya rasa kurang penting memiliki 5 tentang pandangan dunia yang berbeda',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 44,
                'jenis_kuisioner_id' => 5,
                'pertanyaan' => 'Orang lain berhak berpendapat, tetapi saya tidak perlu mendengarkan mereka',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 45,
                'jenis_kuisioner_id' => 6,
                'pertanyaan' => 'Fokus saya mudah terganggu',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 46,
                'jenis_kuisioner_id' => 6,
                'pertanyaan' => 'Saya selalu memfokuskan pada pertanyaan sebelum mencoba menjawabnya',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 47,
                'jenis_kuisioner_id' => 6,
                'pertanyaan' => 'Sebagian besar kelas di perguruan tinggi tidak menarik dan tidak layak untuk diambil',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 48,
                'jenis_kuisioner_id' => 6,
                'pertanyaan' => 'Saya dapat berbicara tentang masalah saya selama berjam-jam tanpa menyelesaikan apa pun',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 49,
                'jenis_kuisioner_id' => 6,
                'pertanyaan' => 'Saya kesulitan untuk mengatur pikiran diri sendiri',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 50,
                'jenis_kuisioner_id' => 6,
                'pertanyaan' => 'Penting bagi saya untuk menyimpan catatan keuangan pribadi dengan cermat',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 51,
                'jenis_kuisioner_id' => 6,
                'pertanyaan' => 'Orang-orang mengira saya menunda membuat keputusan',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 52,
                'jenis_kuisioner_id' => 6,
                'pertanyaan' => 'Pendapat saya tentang topik-topik kontroversial sangat bergantung pada siapa yang saya ajak bicara',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 53,
                'jenis_kuisioner_id' => 6,
                'pertanyaan' => 'Saya pandai mengembangkan rencana yang teratur untuk mengatasi masalah kompleks',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 54,
                'jenis_kuisioner_id' => 7,
                'pertanyaan' => 'Saya kesulitan untuk mengambil keputusan dengan sudut pandang yang berbeda',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 55,
                'jenis_kuisioner_id' => 7,
                'pertanyaan' => 'Saya selalu memilih keputusan dengan pendukung terbanyak daripada mengikuti satu yang berbeda',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 56,
                'jenis_kuisioner_id' => 7,
                'pertanyaan' => 'Saya akan memegang teguh keyakinan, bahkan bila buktinya berbeda',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 57,
                'jenis_kuisioner_id' => 7,
                'pertanyaan' => 'Saya akan panik bila harus berurusan dengan sesuatu yang sangat kompleks',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 58,
                'jenis_kuisioner_id' => 7,
                'pertanyaan' => 'Saya percaya dengan pilihan apa yang ingin saya percayai',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 59,
                'jenis_kuisioner_id' => 7,
                'pertanyaan' => 'Saya senang mengumpulkan informasi yang mendukung pandangan dan keputusan saya',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 60,
                'jenis_kuisioner_id' => 7,
                'pertanyaan' => 'Saya punya banyak pertanyaan namun terlalu menakutkan untuk ditanyakan',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 61,
                'jenis_kuisioner_id' => 7,
                'pertanyaan' => 'Saya tahu apa yang saya pikirkan, jadi mengapa saya harus berpura-pura merenungkan pilihan saya',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 62,
                'jenis_kuisioner_id' => 7,
                'pertanyaan' => 'Tidak mungkin untuk mengetahui standar jawaban dari untuk seluruh pertanyaan',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 63,
                'jenis_kuisioner_id' => 7,
                'pertanyaan' => 'Saya akan memberikan alasan apa pun, agar orang setuju dengan saya',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 64,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Tugas kuliah yang sangat banyak dan sulit mendorong saya untuk melakukan kecurangan akademik.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 65,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Dalam beberapa kondisi saya tidak bisa mendapatkan nilai yang saya inginkan tanpa berbuat curang.',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 66,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Indeks Prestasi sangat penting bagi saya.',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 67,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Orang tua atau orang-orang terdekat saya menuntut saya untuk memiliki Indeks Prestasi yang bagus.',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 68,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Persaingan nilai dengan teman membuat saya melakukan kecurangan akademik.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 69,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Saya selalu ingin memperoleh nilai yang baik bagaimanapun caranya.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 70,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Kegiatan di kuliah (organisasi, kepanitiaan, dsb) menyebabkan saya tidak mempunyai cukup waktu untuk menyelesaikan tugas jika tanpa berbuat curang.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 71,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Teknologi internet memudahkan saya berbuat kecurangan seperti copy paste tanpa menyebutkan sumbernya.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 72,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Saya memilih posisi yang tepat saat ujian agar leluasa dalam berbuat kecurangan.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 73,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Beberapa pengawas tidak menjaga ujian dengan ketat.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 74,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Saya pernah meminta/mendapatkan jawaban tugas kuliah dari kakak tingkat.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 75,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Saya melakukan kecurangan akademik karena orang lain juga pernah melakukannya.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 76,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Teman terdekat saya tidak suka jika memergoki saya sedang berbuat kecurangan.',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 77,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Saya terbiasa melakukan kecurangan akademik sejak perkuliahan.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 78,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Fakultas tidak memberikan sanksi yang tegas kepada mahasiswa yang melakukan kecurangan akademik.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 79,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Prodi jarang mendeteksi adanya praktik kecurangan akademik.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 80,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Bagi saya kecurangan akademik tidak merugikan orang lain.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 81,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Saya dapat menekan rasa bersalah atau bahkan tidak merasa bersalah setelah melakukan kecurangan akademik.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 82,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Saya memiliki rasa percaya diri saat melakukan tindak kecurangan akademik.',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 83,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Saya dapat dengan mudah mengajak/membujuk teman untuk ikut melakukan tindak kecurangan akademik.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 84,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Saya memahami kriteria penilaian dosen sehingga memudahkan saya untuk mencari celah dalam melakukan tindak kecurangan akademik.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 85,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Saya dapat memikirkan cara melakukan kecurangan akademik berdasarkan peluang yang ada.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 87,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Saya ragu-ragu saat melakukan tindak kecurangan akademik.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 88,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Mencari bocoran soal ujian dari teman di kelas lainnya.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 89,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Menyalin beberapa kalimat dari sumber yang sudah diterbitkan secara resmi tanpa menyebutkan bahwa itu merupakan kutipan.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 90,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Membantu mahasiswa lain berbuat curang dalam mengerjakan tugas/ujian.',
                'tipe_kuisioner' => 'negatif',
            ],
            // [
            //     'id' => 91,
            //     'jenis_kuisioner_id' => 0,
            //     'pertanyaan' => 'Saya mencontek dalam segala kondisi pada saat ujian.',
            //     'tipe_kuisioner' => 'negatif',
            // ],
            [
                'id' => 92,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Saya harus mendapat nilai yang baik agar saya bisa mempertahankan beasiswa dan lulus kuliah dengan cepat.',
                'tipe_kuisioner' => 'positif',
            ],
            [
                'id' => 93,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Saya mempunyai banyak kegiatan diluar jam belajar.',
                'tipe_kuisioner' => 'negatif',
            ],
            [
                'id' => 94,
                'jenis_kuisioner_id' => 8,
                'pertanyaan' => 'Saya tidak dapat membagi waktu belajar dengan waktu untuk kegiatan lain.',
                'tipe_kuisioner' => 'negatif',
            ],

        ];

        foreach ($data as $item) {
            BankKuisioner::create([
                'id'    =>  $item['id'],
                'jenis_kuisioner_id' => $item['jenis_kuisioner_id'],
                'pertanyaan' => $item['pertanyaan'],
                'tipe_kuisioner' => $item['tipe_kuisioner'],
            ]);
        }
    }
}
