<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    protected $fillable = [
            'kd_pesanan',
            'status',
            'total_harga',
            'kd_unik',
            'user_id',
    ];
    public function keranjangs()
    {
        return $this->hasMany(Keranjang::class, 'pesananphp_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
