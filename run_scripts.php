<?php

$commands = [
    "mkdir -p storage/app/public/thumbnails",
    "mkdir -p storage/app/public/fotos",
    "mkdir -p storage/app/public/file_tugas_kelompok_materi/file_lama",
    "mkdir -p storage/app/public/file_tugas_individu_materi/file_lama",
    "mkdir -p storage/app/public/file_materi/file_lama",
    "mkdir -p storage/app/public/mahasiswa/pengumpulan_tugas_kelompok/file_lama",
    "mkdir -p storage/app/public/mahasiswa/pengumpulan_tugas_individu/file_lama",

    "cp -r public/thumbnail/* storage/app/public/thumbnails",
    "cp -r public/foto/* storage/app/public/fotos",
    "cp -r public/tugas_kelompok_materi/* storage/app/public/file_tugas_kelompok_materi/file_lama",
    "cp -r public/tugas_individu_materi/* storage/app/public/file_tugas_individu_materi/file_lama",
    "cp -r public/file_materi/* storage/app/public/file_materi/file_lama",
    "cp -r public/pengumpulan_tugas_kelompok/* storage/app/public/mahasiswa/pengumpulan_tugas_kelompok/file_lama",
    "cp -r public/pengumpulan_tugas_individu/* storage/app/public/mahasiswa/pengumpulan_tugas_individu/file_lama"
];

foreach ($commands as $command) {
    echo "Executing: $command\n";
    system($command, $returnVar);
    if ($returnVar !== 0) {
        echo "Error executing command: $command\n";
    }
}

echo "Executing: php artisan vendor:publish --tag=laravel-assets --ansi --force\n";
system("php artisan vendor:publish --tag=laravel-assets --ansi --force", $returnVar);
if ($returnVar !== 0) {
    echo "Error executing artisan command\n";
}
