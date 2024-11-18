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
        Schema::create('indikator_penilaians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rubrik_penilaian_id');
            $table->string('nama_indikator');
            $table->text('keterangan');
            $table->integer('skor_indikator');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indikator_penilaians');
    }
};
