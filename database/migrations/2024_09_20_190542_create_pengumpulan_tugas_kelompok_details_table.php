<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengumpulan_tugas_kelompok_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengumpulan_tugas_kelompok_id');
            $table->unsignedBigInteger('mahasiswa_id');
            $table->string('status_anggota');
            $table->integer('kelompok');
            $table->integer('nilai')->nullable();
            $table->double('rata_rata')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengumpulan_tugas_kelompok_details');
    }
};
