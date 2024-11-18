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
        Schema::create('riwayat_fuzzies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mahasiswa_id'); // Alias studentId
            $table->unsignedBigInteger('materi_id_sebelumnya')->nullable(); // Alias pageIdBefore
            $table->unsignedBigInteger('materi_id_setelahnya')->nullable(); // Alias pageIdAfter
            $table->integer('skor_posttest')->default(0); // Alias score_post_test
            $table->integer('skor_tugas_individu')->default(0); // Alias score_individu
            $table->integer('skor_tugas_kelompok')->default(0); // Alias score_kelompok
            $table->integer('skor_diskusi')->default(0); // Alias score_diskusi
            $table->integer('skor_berfikir_kritis')->default(0); // Alias berfikir_kritis
            $table->string('kode_aturan', 10)->nullable(); // Alias kode_aturan
            $table->timestamps();
            $table->softDeletes();

            // Tambahkan foreign key constraints jika diperlukan
            $table->foreign('mahasiswa_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('materi_id_sebelumnya')->references('id')->on('materis')->onDelete('set null');
            $table->foreign('materi_id_setelahnya')->references('id')->on('materis')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_fuzzies');
    }
};
