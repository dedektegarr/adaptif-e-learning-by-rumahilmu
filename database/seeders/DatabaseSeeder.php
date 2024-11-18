<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\JawabanKuisMateri;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(JenisKuisionerSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(BankKuisionerSeeder::class);
        $this->call(BankCapaianLulusanSeeder::class);
        $this->call(BankPenilaianKelompokSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(BankCapaianLulusanKelasSeeder::class);
        $this->call(TopikPembahasanKelasSeeder::class);
        $this->call(KelasMahasiswaSeeder::class);
        $this->call(KelasKuisionerSeeder::class);
        $this->call(KelasKuisionerPenilaianKelompokSeeder::class);
        $this->call(MateriSeeder::class);
        $this->call(TugasKelompokMateriSeeder::class);
        $this->call(RubrikPenilaianUserSeeder::class);
        $this->call(IndikatorPenilaianSeeder::class);
        $this->call(BankSoalPembahasanSeeder::class);
        $this->call(RubrikPenilaianTugasKelompokMateri::class);
        $this->call(KelasMahasiswaDetailSeeder::class);
        $this->call(KelasMahasiswaKuisionerSeeder::class);
        $this->call(KuisMateriSeeder::class);
        $this->call(PertanyaanKuisMateriSeeder::class);
        $this->call(JawabanKuisMateriSeeder::class);
        $this->call(NilaiKuisMateriSeeder::class);
        $this->call(PengumpulanTugasKelompokSeedeer::class);
        $this->call(PengumpulanTugasKelompokDetailSeeder::class);
        $this->call(TugasIndividuMateriSeeder::class);
        $this->call(PengumpulanTugasIndividuSeeder::class);
        $this->call(PengumpulanTugasIndividuDetailSeeder::class);
        $this->call(PengumpulanTugasKelompokDetailNilai::class);
        $this->call(PenilaianKelompokSeeder::class);
        $this->call(PenilaianKelompokDetailSeeder::class);
        $this->call(PengayaanSeeder::class);
        $this->call(DiskusiSeeder::class);
        $this->call(DiskusiDetailSeeder::class);
        $this->call(RiwayatFuzzySeeder::class);
        $this->call(UtsSeeder::class);
        $this->call(UtsSesiSeeder::class);
        $this->call(UtsSoalSeeder::class);
        $this->call(UtsPesertaSeeder::class);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
