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
        Schema::create('materi_pengayaans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('materi_id');
            $table->string('judul');
            $table->text('isi_materi');
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
        Schema::dropIfExists('materi_pengayaans');
    }
};
