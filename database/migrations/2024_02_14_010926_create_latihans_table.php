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
        Schema::create('latihans', function (Blueprint $table) {
            $table->uuid('idLatihan');
            $table->primary('idLatihan');
            $table->enum('status', ['1', '0'])->default('1');
            $table->uuid('idMurid');
            $table->foreign('idMurid')->references('idMurid')->on('murids')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('idInformasi');
            $table->foreign('idInformasi')->references('idInformasi')->on('informasimapelperkelas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('latihans');
    }
};
