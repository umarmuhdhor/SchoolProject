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
        Schema::create('ppdbs', function (Blueprint $table) {
            $table->uuid('idPpdb');
            $table->primary('idPpdb');
            $table->string('judul');
            $table->longText('paragraf');
            $table->String('link');
            $table->string('foto1', 50)->nullable();
            $table->string('foto2', 50)->nullable();
            $table->string('foto3', 50)->nullable();
            $table->string('foto4', 50)->nullable();
            $table->string('foto5', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppdbs');
    }
};
