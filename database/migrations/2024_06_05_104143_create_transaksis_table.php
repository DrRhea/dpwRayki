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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('produks_id')->constrained()->onDelete('cascade');
            $table->string('email_penyewa');
            $table->string('nama_penyewa');
            $table->integer('lama_sewa');
            $table->text('alamat_penyewa');
            $table->string('no_hp_penyewa');
            $table->enum('metode_pembayaran', ['transfer', 'e-wallet'])->default('transfer');
            $table->integer('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
