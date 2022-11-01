<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\Produk;
use App\Models\Pesanan;
use Livewire\Component;

class Navbar extends Component
{
    public $amount = 0;

    protected $listeners = [
        'masukKeranjang' => 'updateKeranjang'
    ];

    public function updateKeranjang(){

        if(Auth::user()){
            $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
            if ($pesanan) { 
                $this->amount = PesananDetail::where('pesanan_id', $pesanan->id)->count();
            }
        }    
    }

    public function mount(){

        if(Auth::user()){
            $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
            if ($pesanan) { 
                $this->amount = PesananDetail::where('pesanan_id', $pesanan->id)->count();
            }
        }
    }

    public function render()
    {
        $produks = Produk::all();
        return view('livewire.navbar', [
            'produks' => $produks,
            'jumlah_pesanan' => $this->amount,
        ]);
    }
}
