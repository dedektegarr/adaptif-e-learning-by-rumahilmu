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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengampu_id');
            $table->string('nama_kelas');
            $table->string('kode_kelas');
            $table->enum('jenis_kelas',['adaptif','umum']);
            $table->string('waktu_mulai');
            $table->string('waktu_selesai');
            $table->integer('tahun');
            $table->integer('semester');
            $table->integer('jumlah_topik');
            $table->text('url_latihan')->nullable();
            $table->string('thumbnail')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
