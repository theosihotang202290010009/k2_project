<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public function keranjangs()
    {
        return $this->hasMany(Keranjang::class, 'produk_id', 'id');
    }
}
