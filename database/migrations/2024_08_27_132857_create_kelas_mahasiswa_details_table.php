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
        Schema::create('kelas_mahasiswa_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kelas_mahasiswa_id')->onDelete('cascade');
            $table->unsignedBigInteger('kelas_id')->onDelete('cascade');
            $table->unsignedBigInteger('topik_id')->onDelete('cascade');
            $table->unsignedBigInteger('materi_id')->onDelete('cascade');
            $table->tinyInteger('critical_status')->default(0)->comment('0: Dasar, 1: Menengah, 2: Lanjut');
            $table->enum('sumber_materi', ['kuisioner', 'fuzzy']);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('kelas_mahasiswa_id')->references('id')->on('kelas_mahasiswas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas_mahasiswas');
    }
};
