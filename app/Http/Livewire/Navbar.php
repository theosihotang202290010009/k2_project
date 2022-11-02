<?php

namespace App\Http\Livewire;

use App\Models\keranjang;
use App\Models\pesanan;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public $jumlah = 0;
    protected $listeners = [
        'masukKeranjang' => 'updateKeranjang'
    ];

    public function updateKeranjang(){

        if(Auth::user()){
            $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
            if ($pesanan) { 
                $this->jumlah = keranjang::where('pesananphp_id', $pesanan->id)->count();
            }
            else{
                $this->jumlah = 0;
            }
        }    
    }
    public function mount(){
    if(Auth::user()){
        $pesanan = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if ($pesanan) { 
            $this->jumlah = keranjang::where('pesanan_id', $pesanan->id)->count();
        }
    }
}

    public function render()
    {
        $produks = Produk::all();
        return view('livewire.navbar', [
            'produks' => $produks,
            'jumlah_pesanan' =>$this->jumlah,
        ]);
    }
}
