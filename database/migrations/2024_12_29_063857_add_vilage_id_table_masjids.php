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
        Schema::table('masjids', function($table) {
            $table->unsignedBigInteger('vilage_id')->default(3);
            $table->foreign('vilage_id')->references('id')->on('vilages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('masjids', function($table) {
            $table->dropColumn('vilage_id');
        });
    }
};
