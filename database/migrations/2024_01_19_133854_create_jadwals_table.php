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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->uuid('idJadwal');
            $table->primary('idJadwal');
            $table->uuid('idMapelGuru');
            $table->foreign('idMapelGuru')->references('idMapelGuru')->on('mapel_gurus')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('idKelas');
            $table->foreign('idKelas')->references('idKelas')->on('kelas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('idGuru');
            $table->foreign('idGuru')->references('idGuru')->on('gurus')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('idPeriode');
            $table->foreign('idPeriode')->references('idPeriode')->on('periodes')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('idJam');
            $table->foreign('idJam')->references('idJam')->on('jam_pelajarans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('hari', ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'])->default('Senin');
            $table->time('lamaBelajar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
