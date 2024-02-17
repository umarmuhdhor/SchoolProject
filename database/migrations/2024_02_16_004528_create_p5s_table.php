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
        Schema::create('p5s', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->longText('isi');
            $table->date('tanggal');
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
        Schema::dropIfExists('p5s');
    }
};
