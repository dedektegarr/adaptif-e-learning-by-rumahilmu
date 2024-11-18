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
        Schema::create('pertanyaan_kuis_materis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kuis_materi_id');
            $table->unsignedBigInteger('bank_soal_pembahasan_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('kuis_materi_id')->references('id')->on('kuis_materis');
            $table->foreign('bank_soal_pembahasan_id')->references('id')->on('bank_soal_pembahasans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertanyaan_kuis_materis');
    }
};
