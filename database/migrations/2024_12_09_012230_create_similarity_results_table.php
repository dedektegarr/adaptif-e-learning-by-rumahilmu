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
        Schema::create('similarity_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengumpulan_tugas_id');
            $table->unsignedBigInteger('compared_pengumpulan_tugas_id');
            $table->float('similarity_score', 15, 10);
            $table->timestamps();

            $table->foreign('pengumpulan_tugas_id')->references('id')->on('pengumpulan_tugas_individus')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('compared_pengumpulan_tugas_id')->references('id')->on('pengumpulan_tugas_individus')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('similarity_results');
    }
};
