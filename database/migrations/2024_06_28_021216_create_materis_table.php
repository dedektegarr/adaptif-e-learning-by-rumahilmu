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
        Schema::create('materis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('topik_pembahasan_id');
            $table->string('nama_materi');
            $table->text('isi_materi');
            $table->string('file_materi')->nullable();
            $table->string('url_materi')->nullable();
            $table->string('url_kedua_materi')->nullable();
            $table->string('critical_status');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('topik_pembahasan_id')->references('id')->on('topik_pembahasan_kelas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materis');
    }
};
