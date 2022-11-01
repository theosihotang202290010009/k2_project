<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

use function GuzzleHttp\Promise\all;

class ProdukDetail extends Component
{
    public $produk;

    public function mount($id)
    {
        $produkDetail = Produk::find($id);

        if($produkDetail) {
            $this->produk = $produkDetail;
        }
    }
    

    public function render()
    {

        return view('livewire.produk-detail');
    }
}
