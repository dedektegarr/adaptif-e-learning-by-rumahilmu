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
        Schema::create('jawaban_tugas_kelompoks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tugas_kelompok_id');
            $table->unsignedBigInteger('mahasiswa_id');
            $table->string('file_jawaban');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jawaban_tugas_kelompoks');
    }
};
