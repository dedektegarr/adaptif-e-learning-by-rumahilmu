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
        Schema::create('bank_soal_pembahasans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->text('pertanyaan');
            $table->string('level_berfikir');
            $table->text('pembahasan');
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
        Schema::dropIfExists('bank_soal_pembahasans');
    }
};
