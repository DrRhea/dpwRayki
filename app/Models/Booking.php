<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'produks_id', 'tanggal_mulai', 'tanggal_selesai', 'status'
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produks_id');
    }
}
