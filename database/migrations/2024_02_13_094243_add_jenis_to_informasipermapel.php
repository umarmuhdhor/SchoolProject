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
        Schema::table('informasimapelperkelas', function (Blueprint $table) {
            //
            $table->enum('jenis', ['latihan','informasi'])->default('informasi')->after('link');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('informasimapelperkelas', function (Blueprint $table) {
            //
        });
    }
};
