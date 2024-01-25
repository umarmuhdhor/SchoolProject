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
        Schema::create('jabatans', function (Blueprint $table) {
            $table->uuid('idJabatan');
            $table->primary('idJabatan');
            $table->string('jabatan', 50);
            $table->year('tahunMenjabat');
            $table->enum('status', ['aktif', 'tidak aktif'])->default('aktif');
            $table->uuid('idGuru');
            $table->foreign('idGuru')->references('idGuru')->on('gurus')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jabatans');
    }
};
