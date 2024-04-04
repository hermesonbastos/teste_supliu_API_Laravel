<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('faixas', function (Blueprint $table) {
            Schema::table('faixas', function (Blueprint $table) {
                $table->foreign('album_id')->onDelete('cascade');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('faixas', function (Blueprint $table) {
            Schema::table('faixas', function (Blueprint $table) {
                $table->foreign('album_id')->onDelete('restrict');
            });
        });
    }
};
