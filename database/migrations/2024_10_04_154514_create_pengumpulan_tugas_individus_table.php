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
        Schema::create('pengumpulan_tugas_individus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tugas_individu_id');
            $table->unsignedBigInteger('mahasiswa_id');
            $table->string('file_tugas');
            $table->integer('nilai')->nullable();
            $table->integer('rata_rata')->nullable();
            $table->timestamp('waktu_dinilai')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('tugas_individu_id')->references('id')->on('tugas_individu_materis');
            $table->foreign('mahasiswa_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengumpulan_tugas_individus');
    }
};
