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
        Schema::create('diskusi_respons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('komentar_id');
            $table->unsignedBigInteger('diskusi_id');
            $table->unsignedBigInteger('mahasiswa_id');
            $table->text('subjek')->nullable();
            $table->text('pesan')->nullable();
            $table->integer('nilai')->nullable();
            $table->string('jenis_penilaian')->nullable();
            $table->timestamp('tanggal_dinilai')->nullable();
            $table->timestamps();
            $table->softDeletes();;

            $table->foreign('diskusi_id')->references('id')->on('diskusis');
            $table->foreign('mahasiswa_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diskusi_respons');
    }
};
