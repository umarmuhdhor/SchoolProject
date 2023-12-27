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
        Schema::create('gurus', function (Blueprint $table) {
            $table->uuid('idGuru');
            $table->primary('idGuru');
            $table->string('nama', 45);
            $table->string('noHp', 15);
            $table->string('email', 45);
            $table->string('mapel', 45);
            $table->string('deskripsi', 100);
            $table->enum('jk', ['lk','pr'])->default('lk');
            $table->enum('status', ['aktif','nonAktif'])->default('aktif');
            $table->string('foto', 50);
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
        Schema::dropIfExists('gurus');
    }
};
