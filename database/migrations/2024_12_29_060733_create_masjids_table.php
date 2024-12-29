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
        Schema::create('masjids', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat', 500)->nullable();
            $table->integer('tahun_berdiri')->nullable();
            $table->string('status_tanah_bangunan')->nullable();
            $table->integer('luas_bangunan')->nullable();
            $table->integer('luas_tanah')->nullable();
            $table->boolean('imb')->default(false);
            $table->integer('daya_tampung')->nullable();
            $table->string('fasilitas', 1000)->nullable();
            $table->string('kegiatan', 1000)->nullable();
            $table->string('nama_imam')->nullable();
            $table->string('nama_khatib')->nullable();
            $table->string('website_url', 2000)->nullable();
            $table->string('map_url', 2000)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masjids');
    }
};
