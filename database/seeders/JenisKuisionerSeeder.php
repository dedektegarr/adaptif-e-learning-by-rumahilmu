<?php

namespace Database\Seeders;

use App\Models\JenisKuisioner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisKuisionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //jenis_questioners
        $jenisKuisioners = [
            'Analisis',
            'Kepercayaan diri',
            'Rasa ingin tahu',
            'Kematangan berpikir',
            'Pikiran Terbuka',
            'Sistematis',
            'Pencarian Kebenaran',
            'Refleksi',
        ];

        foreach ($jenisKuisioners as $jenis) {
            JenisKuisioner::create([
                'jenis_kuisioner' => $jenis,
            ]);
        }
    }
}
