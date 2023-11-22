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
        Schema::create('Inputs', function (Blueprint $table) {
            $table->String('kb');
            $table->String('nama');
            $table->String('jv');
            $table->String('qty');
            $table->String('hj');
            $table->String('HargaPembelian');
            $table->String('Diskon');
            $table->String('JumlahPembayaran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inputs');
    }
};
