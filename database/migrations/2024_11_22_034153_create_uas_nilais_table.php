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
        Schema::create('uas_nilais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uas_id')->nullable();
            $table->unsignedBigInteger('mahasiswa_id')->nullable();
            $table->unsignedBigInteger('bank_soal_pembahasan_id')->nullable();
            $table->unsignedBigInteger('jawaban_id')->nullable();
            $table->integer('nilai')->nullable();
            $table->text('alasan')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('uas_id')->references('id')->on('uas');
            $table->foreign('mahasiswa_id')->references('id')->on('users');
            $table->foreign('bank_soal_pembahasan_id')->references('id')->on('bank_soal_pembahasans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uas_nilais');
    }
};
