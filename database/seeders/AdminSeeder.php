<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usersData = [
            [
                'nama_lengkap' => 'Administrator',
                'email' => 'administrator@mail.com',
                'jenis_kelamin' => 'L',
                'is_active' => 1,
                'password' => bcrypt('password'), // Ganti 'password' dengan kata sandi yang ingin Anda gunakan
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Anda bisa menambahkan entri user lainnya di sini jika diperlukan
        ];

        foreach ($usersData as $userData) {
            User::create($userData);
        }
    }
}
