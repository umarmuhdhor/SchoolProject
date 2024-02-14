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
        Schema::create('permintaan_akses', function (Blueprint $table) {
            $table->uuid('idPermintaan');
            $table->primary('idPermintaan');
            $table->longText('alasan');
            $table->enum('status', ['proses', 'terima','tolak'])->default('proses');
            $table->uuid('idMurid');
            $table->foreign('idMurid')->references('idMurid')->on('murids')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('idLatihan');
            $table->foreign('idLatihan')->references('idLatihan')->on('latihans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permintaan_akses');
    }
};
