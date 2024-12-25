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
        Schema::create('vilages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('subdistrict_id');
            $table->foreign('subdistrict_id')->references('id')->on('subdistricts');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vilages');
    }
};
