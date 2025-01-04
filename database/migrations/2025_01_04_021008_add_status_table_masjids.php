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
            $table->string('status')->nullable();
            $table->string('nama_verifikator')->nullable();
            $table->timestamp('tanggal_terfarivikasi')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('masjids', function($table) {
            $table->dropColumn('status');
            $table->dropColumn('nama_verifikator');
            $table->dropColumn('tanggal_terfarivikasi');
        });
    }
};
