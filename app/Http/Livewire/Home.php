<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'produks' => Produk::take(4)->get()
        ]);
    }
}
