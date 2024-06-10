<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'produks_id',
        'email_penyewa',
        'nama_penyewa',
        'alamat_penyewa',
        'no_hp_penyewa',
        'lama_sewa',
        'metode_pembayaran',
        'total_harga',
    ];

    // Define relationship with Produk
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produks_id');
    }
}
