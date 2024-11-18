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
        Schema::create('kelas_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mahasiswa_id');
            $table->unsignedBigInteger('kelas_id');
            $table->double('jumlah_nilai')->nullable();
            $table->double('rata_rata_nilai')->nullable();
            $table->enum('status_kelas',['belum_lulus','lulus'])->default('belum_lulus');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('mahasiswa_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas_user');
    }
};
