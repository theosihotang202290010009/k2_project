<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    }

    public function render()
    {

        return view('livewire.produk-detail');
    }
}
