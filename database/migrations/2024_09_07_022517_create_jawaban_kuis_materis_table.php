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
        Schema::create('jawaban_kuis_materis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bank_soal_pembahasan_id')->nullable();
            $table->text('jawaban');
            $table->boolean('status_jawaban');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jawaban_kuis_materis');
    }
};
