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
        Schema::create('prestasi_murids', function (Blueprint $table) {
            $table->uuid('idPrestasi');
            $table->primary('idPrestasi');
            $table->string('judul', 45);
            $table->string('deskripsi');
            $table->longText('isiPrestasi'); 
            $table->date('tanggal');
            $table->string('foto', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasi_murids');
    }
};
