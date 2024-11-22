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
        Schema::create('uas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kelas_id');
            $table->date('tanggal_dilaksanakan');
            $table->string('waktu_mulai');
            $table->string('waktu_selesai');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('kelas_id')->references('id')->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uas');
    }
};
