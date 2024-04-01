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
        Schema::create('faixas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->unsignedBigInteger('album_id');
            $table->foreign('album_id')->references('id')->on('albuns');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faixas');
    }
};
