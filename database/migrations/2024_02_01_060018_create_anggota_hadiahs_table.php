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
        Schema::create('anggota_hadiah', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('anggota_id')->nullable(false);
            $table->unsignedBigInteger('hadiah_id')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_hadiah');
    }
};
