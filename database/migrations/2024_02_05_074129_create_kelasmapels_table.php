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
        Schema::create('kelasmapels', function (Blueprint $table) {
            $table->uuid('idKelasMapel')->primary();
            $table->uuid('idKelas');
            $table->foreign('idKelas')->references('idKelas')->on('kelas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('idMapelGuru');
            $table->foreign('idMapelGuru')->references('idMapelGuru')->on('mapel_gurus')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelasmapels');
    }
};
