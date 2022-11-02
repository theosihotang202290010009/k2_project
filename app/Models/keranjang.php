<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keranjang extends Model
{
    Protected $fillable = [
        'jumlah_pesanan',
        'total_harga',
        'produk_id',
        'pesananphp_id',
];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id', 'id');
    }

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'pesananphp_id', 'id');
    }
}
