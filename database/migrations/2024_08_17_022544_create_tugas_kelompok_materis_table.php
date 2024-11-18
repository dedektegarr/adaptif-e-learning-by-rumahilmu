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
        Schema::create('tugas_kelompok_materis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('materi_id');
            $table->string('judul_tugas');
            $table->string('file_tugas');
            $table->text('tugas');
            $table->timestamp('waktu_mulai');
            $table->timestamp('waktu_selesai');
            $table->enum('status_upload',['0','1']);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('materi_id')->references('id')->on('materis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas_kelompok_materis');
    }
};
