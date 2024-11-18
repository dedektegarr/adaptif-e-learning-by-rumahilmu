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
        Schema::create('tugas_individu_materis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('materi_id');
            $table->text('tugas');
            $table->text('file_tugas');
            $table->dateTime('waktu_mulai')->nullable();
            $table->dateTime('waktu_selesai')->nullable();
            $table->enum('status_upload',['0','1']);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('materi_id')->references('id')->on('materis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas_individu_materis');
    }
};
