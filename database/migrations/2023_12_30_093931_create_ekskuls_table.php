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
        Schema::create('ekskuls', function (Blueprint $table) {
            $table->uuid('idEkskul');
            $table->primary('idEkskul');
            $table->string('nama', 45);
            $table->enum('status', ['aktif', 'tidak aktif'])->default('aktif');
            $table->string('foto', 50);
            $table->string('deskripsi');
            $table->uuid('idGuru');
            $table->foreign('idGuru')->references('idGuru')->on('gurus')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('idMurid');
            $table->foreign('idMurid')->references('idMurid')->on('murids')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('idPeriode');
            $table->foreign('idPeriode')->references('idPeriode')->on('periodes')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekskuls');
    }
};
