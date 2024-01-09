<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('materis', function (Blueprint $table) {
            $table->uuid('idMateri');
            $table->primary('idMateri');
            $table->string('namaMateri', 70);
            $table->string('namaFile', 40);
            $table->string('deskripsi', 100);
            $table->string('file', 100);
            $table->uuid('idGuru');
            $table->foreign('idGuru')->references('idGuru')->on('gurus')->onDelete('restrict');
            $table->uuid('idMapel');
            $table->foreign('idMapel')->references('idMapel')->on('mapels')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materis');
    }
};
