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
        Schema::create('sub_cpmks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('topik_pembahasan_id');
            $table->string('sub_cpmk');
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
        Schema::dropIfExists('sub_cpmks');
    }
};
