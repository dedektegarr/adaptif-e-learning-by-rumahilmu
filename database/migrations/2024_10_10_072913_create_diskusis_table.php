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
        Schema::create('diskusis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('materi_id');
            $table->unsignedBigInteger('mahasiswa_id');
            $table->text('judul');
            $table->longText('diskusi');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('materi_id')->references('id')->on('materis');
            $table->foreign('mahasiswa_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diskusis');
    }
};
