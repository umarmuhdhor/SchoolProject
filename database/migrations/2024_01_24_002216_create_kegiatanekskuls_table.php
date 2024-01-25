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
            $table->string('foto', 50);
            $table->date('tanggal');
            $table->String('ringkasan');
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
