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
        Schema::create('kelas_kuisioner', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kelas_id');
            $table->unsignedBigInteger('bank_kuisioner_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('kelas_id')->references('id')->on('kelas');
            $table->foreign('bank_kuisioner_id')->references('id')->on('bank_kuisioners');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas_kuisioner');
    }
};
