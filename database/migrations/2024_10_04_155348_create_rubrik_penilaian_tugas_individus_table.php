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
        Schema::create('rubrik_penilaian_tugas_individus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rubrik_penilaian_id');
            $table->unsignedBigInteger('tugas_individu_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('tugas_individu_id', 'fk_tugas_individu_materi')
                  ->references('id')->on('tugas_individu_materis')
                  ->onDelete('cascade');

            $table->foreign('rubrik_penilaian_id', 'fk_rubrik_penilaian_individu')
                  ->references('id')->on('rubrik_penilaians')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rubrik_penilaian_tugas_individus');
    }
};
