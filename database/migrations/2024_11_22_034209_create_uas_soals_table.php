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
        Schema::create('uas_soals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uas_id');
            $table->unsignedBigInteger('bank_soal_pembahasan_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uas_soals');
    }
};
