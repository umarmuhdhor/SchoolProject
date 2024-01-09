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
        Schema::create('kelasmurids', function (Blueprint $table) {
            $table->uuid('idKelasMurid');
            $table->primary('idKelasMurid');
            $table->enum('status', ['aktif','nonAktif'])->default('aktif');
            $table->uuid('idMurid');
            $table->foreign('idMurid')->references('idMurid')->on('murids')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('idKelas');
            $table->foreign('idKelas')->references('idKelas')->on('kelas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelasmurids');
    }
};
