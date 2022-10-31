<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use Livewire\Component;

class ProductDetail extends Component
{
    public $produk;

    public function mount($id)
    {
        $productDetail = Produk::find($id);

        if($productDetail) {
            $this->produk = $productDetail;
        }
    }

    public function render()
    {
        return view('livewire.product-detail');
    }
}
