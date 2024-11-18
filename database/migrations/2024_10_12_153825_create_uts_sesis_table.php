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
        Schema::create('uts_sesis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uts_id');
            $table->string('nama_sesi');
            $table->date('tanggal_dilaksanakan');
            $table->string('waktu_mulai');
            $table->string('waktu_selesai');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('uts_id')->references('id')->on('uts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uts_sesis');
    }
};
