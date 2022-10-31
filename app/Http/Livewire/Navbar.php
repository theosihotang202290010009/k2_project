<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        $products = Produk::all();
        return view('livewire.navbar', [
            'products' => $products
        ]);
    }
}
