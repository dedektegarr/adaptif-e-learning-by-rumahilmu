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
        Schema::create('kuis_materis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('materi_id');
            $table->timestamp('waktu_mulai');
            $table->timestamp('waktu_selesai');
            $table->enum('jenis_kuis',['pretest','posttest']);
            $table->boolean('status_kuis')->nullable();
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
        Schema::dropIfExists('kuis_materis');
    }
};
