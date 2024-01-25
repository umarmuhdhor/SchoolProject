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
        Schema::create('tentangsekolahs', function (Blueprint $table) {
            $table->uuid('idSekolah');
            $table->primary('idSekolah');
            $table->string('namaSekolah', 50);
            $table->string('alamat', 100);
            $table->string('kelurahan', 10);
            $table->string('kecamatan', 10);
            $table->string('kota', 30);
            $table->string('provinsi', 30);
            $table->string('kodePos', 10);
            $table->string('nomorTelpon', 17);
            $table->string('email', 40);
            $table->year('tahunBerdiri');
            $table->string('akredetasi', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tentangsekolah');
    }
};
