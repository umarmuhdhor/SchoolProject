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
        Schema::create('kelas', function (Blueprint $table) {
            $table->uuid('idKelas');
            $table->primary('idKelas');
            $table->string('namaKelas', 20);
            $table->enum('tingkat', ['10','11','12'])->default('10');
            $table->uuid('idGuru');
            $table->foreign('idGuru')->references('idGuru')->on('gurus')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('kelas');
    }
};
