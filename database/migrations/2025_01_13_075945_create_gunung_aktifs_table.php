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
        Schema::create('gunung_aktifs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->double('latitude');
            $table->double('longitude');
            $table->double('tinggi_meter');
            $table->double('estimasi_letusan_terakhir');
            $table->double('geolokasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gunung_aktifs');
    }
};
