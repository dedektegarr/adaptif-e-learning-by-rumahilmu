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
        Schema::create('pengumpulan_tugas_individu_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengumpulan_tugas_individu_id');
            $table->unsignedBigInteger('rubrik_penilaian_id');
            $table->integer('nilai')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengumpulan_tugas_individu_details');
    }
};
