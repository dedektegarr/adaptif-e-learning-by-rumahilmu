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
        Schema::create('nilai_kuis_materis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kuis_materi_id');
            $table->unsignedBigInteger('mahasiswa_id')->nullable();
            $table->unsignedBigInteger('bank_soal_pembahasan_id');
            $table->unsignedBigInteger('jawaban_kuis_materi_id');
            $table->integer('nilai');
            $table->text('alasan')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('kuis_materi_id')->references('id')->on('kuis_materis');
            $table->foreign('mahasiswa_id')->references('id')->on('users');
            $table->foreign('bank_soal_pembahasan_id')->references('id')->on('bank_soal_pembahasans');
            $table->foreign('jawaban_kuis_materi_id')->references('id')->on('jawaban_kuis_materis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_kuis_materis');
    }
};
