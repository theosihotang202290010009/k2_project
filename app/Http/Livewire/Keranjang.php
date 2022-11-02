<?php

namespace App\Http\Livewire;

use App\Models\pesanan;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Keranjang extends Component
{
    protected $pesanan;
    protected $keranjangs = [];

    public function destroy($id)
    {
       $keranjang = Keranjang::find($id);
       if(!empty($keranjang)) {
           
           $pesanan = Pesanan::where('id', $keranjang->pesanan_id)->first();
           $jumlah_keranjang = Keranjang::where('pesanan_id', $pesanan->id)->count();
           if($jumlah_keranjang == 1) 
           {
               $pesanan->delete();
           }else {
               $pesanan->total_harga = $pesanan->total_harga-$keranjang->total_harga;
               $pesanan->update();
           }

           $keranjang->delete();
       }

       $this->emit('masukKeranjang');

       session()->flash('message', 'Pesanan Dihapus');
    }

    public function render()
    {
        if(Auth::user()) {
            $this->pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
            if($this->pesanan)
            {
                $this->keranjangs = Keranjang::where('pesanan_id', $this->pesanan->id)->get();
            }
        }

        return view('livewire.keranjang',[
            'pesanan' => $this->pesanan,
            'keranjangs' => $this->keranjangs
        ]);
    }
}
