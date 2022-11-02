<?php

namespace App\Http\Livewire;

use App\Models\keranjang;
use App\Models\pesanan;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use function GuzzleHttp\Promise\all;

class ProdukDetail extends Component
{
    public $produk, $jumlah_pesanan;

    public function mount($id)
    {
        $produkDetail = Produk::find($id);

        if($produkDetail) {
            $this->produk = $produkDetail;
        }
    }

    public function masukkanKeranjang()
    {
        $this->validate([
            'jumlah_pesanan' => 'required'
        ]);

        //Validasi Jika Belum Login
        if(!Auth::user()) {
            return redirect()->route('login');
        }
         //Menghitung Total Harga
            $total_harga = $this->jumlah_pesanan*$this->product->harga;

        //apakah user punya data pada pesanan yang statusnya 0
            $pesanan = pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        //Menyimpan / Update Data Pesanan Utama
        if(empty($pesanan))
        {
            Pesanan::create([
                'user_id' => Auth::user()->id,
                'total_harga' => $total_harga,
                'status' => 0,
                'kode_unik' => mt_rand(100, 999),
            ]);

            $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
            $pesanan->kode_pemesanan = 'TOF-'.$pesanan->id;
            $pesanan->update();
        }else {
            $pesanan->total_harga = $pesanan->total_harga+$total_harga;
            $pesanan->update();
        }

        //Meyimpanan Pesanan Detail
        keranjang::create([
            'produk_id' => $this->produk->id,
            'pesananphp_id' => $pesanan->id,
            'jumlah_pesanan' => $this->jumlah_pesanan,
            'total_harga'=> $total_harga
        ]);

        $this->emit('masukKeranjang');

        session()->flash('message', 'Sukses Masuk Keranjang');

        return redirect()->back();
        
    }
    public function render()
    {

        return view('livewire.produk-detail');
    }
}
