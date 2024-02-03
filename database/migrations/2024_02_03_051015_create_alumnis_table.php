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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->uuid('idAlumni');
            $table->primary('idAlumni');
            $table->string('buktiKelulusan');
            $table->enum('status', ['kuliah', 'kerja', 'tidakdiketahui'])->default('kuliah');
            $table->string('namaKampus')->nullable();
            $table->string('tempatKerja')->nullable();
            $table->uuid('idMurid');
            $table->foreign('idMurid')->references('idMurid')->on('murids')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};
