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
        Schema::create('detail_transaksi_fks', function (Blueprint $table) {
            $table->foreignId('id_product')->references('id_product')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_header_transaksi')->references('id_header_transaksi')->on('header_transaksis')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi_fks');
    }
};
