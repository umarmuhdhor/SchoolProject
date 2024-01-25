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
        Schema::create('informasis', function (Blueprint $table) {
            $table->uuid('idInformasi');
            $table->primary('idInformasi');
            $table->string('judul', 70);
            $table->longText('isiInformasi');
            $table->date('tanggal');
            $table->string('file', 100);
            $table->string('foto', 100);
            $table->enum('tujuan', ['murid', 'guru'])->default('murid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasis');
    }
};
