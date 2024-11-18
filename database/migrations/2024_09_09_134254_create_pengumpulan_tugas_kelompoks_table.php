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
        Schema::create('pengumpulan_tugas_kelompoks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tugas_kelompok_id');
            $table->unsignedBigInteger('ketua_kelompok_id');
            $table->text('file_tugas');
            $table->integer('kelompok');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('tugas_kelompok_id')->references('id')->on('tugas_kelompok_materis');
            $table->foreign('ketua_kelompok_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengumpulan_tugas_kelompoks');
    }
};
