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
        Schema::create('murids', function (Blueprint $table) {
            $table->uuid('idMurid');
            $table->primary('idMurid');
            $table->string('nama', 45);
            $table->string('tempatLahir', 15);
            $table->date('tanggalLahir');
            $table->enum('jk', ['lk','pr'])->default('lk');
            $table->enum('agama',['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Khonghucu'])->default('islam');
            $table->string('noHp', 15);
            $table->string('alamat', 100);
            $table->date('tanggalPenerimaan');
            $table->string('foto', 50);
            $table->uuid('idAkun');
            $table->foreign('idAkun')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('murids');
    }
};
