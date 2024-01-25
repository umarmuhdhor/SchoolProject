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
        Schema::create('mapel_gurus', function (Blueprint $table) {
            $table->uuid('idMapelGuru');
            $table->primary('idMapelGuru');
            $table->uuid('idMapel');
            $table->foreign('idMapel')->references('idMapel')->on('mapels')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('mapel_gurus');
    }
};
