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
        Schema::create('metadata', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengumpulan_tugas_id');
            $table->string('title', 100)->nullable();
            $table->string('subject', 100)->nullable();
            $table->string('author', 100)->nullable();
            $table->string('creator', 80)->nullable();
            $table->string('producer', 80)->nullable();
            $table->integer('pages')->nullable();
            $table->timestamp('creation_date')->nullable();
            $table->timestamp('mod_date')->nullable();
            $table->text('word_tokens');
            $table->timestamps();

            $table->foreign('pengumpulan_tugas_id')->references('id')->on('pengumpulan_tugas_individus')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metadata');
    }
};
