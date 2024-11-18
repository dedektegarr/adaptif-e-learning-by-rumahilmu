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
        Schema::create('kelas_mahasiswa_kuisioners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kelas_mahasiswa_id');
            $table->unsignedBigInteger('bank_kuisioner_id');
            $table->string('jawaban')->nullable();
            $table->integer('nilai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas_mahasiswa_kuisioners');
    }
};
