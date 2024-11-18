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
        Schema::create('bank_kuisioners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_kuisioner_id');
            $table->string('pertanyaan');
            $table->enum('tipe_kuisioner',['positif','negatif']);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('jenis_kuisioner_id')->references('id')->on('jenis_kuisioners');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_kuisioners');
    }
};
