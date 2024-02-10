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
        Schema::create('kegiatanekskuls', function (Blueprint $table) {
            $table->id();
            $table->string('judulKegiatan');
            $table->longText('ringkasan');
            $table->longText('isiKegiatan');
            $table->date('tanggal');
            $table->string('foto1', 50);
            $table->string('foto2', 50)->nullable();
            $table->string('foto3', 50)->nullable();
            $table->string('foto4', 50)->nullable();
            $table->string('foto5', 50)->nullable();
            $table->uuid('idEkskul');
            $table->foreign('idEkskul')->references('idEkskul')->on('ekskuls')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatanekskuls');
    }
};
