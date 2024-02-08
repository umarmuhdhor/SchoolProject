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
        Schema::create('beritas', function (Blueprint $table) {
            $table->uuid('idBerita');
            $table->primary('idBerita');
            $table->string('judulBerita');
            $table->longText('sinopsis');
            $table->longText('isiBerita');
            $table->date('tanggal');
            $table->string('thumbnail', 50);
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
        Schema::dropIfExists('beritas');
    }
};
