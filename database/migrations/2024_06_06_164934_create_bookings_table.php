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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // Referensi ke tabel users
            $table->foreignId('produks_id')->constrained()->onDelete('cascade');  // Referensi ke tabel produk
            $table->timestamp('tanggal_mulai')->useCurrent();  // Tanggal mulai peminjaman diambil dari current timestamp
            $table->timestamp('tanggal_selesai')->nullable();  // Tanggal pengembalian tanpa default value
            $table->enum('status', ['booked', 'ongoing', 'completed', 'cancelled'])->default('booked');  // Status booking
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
