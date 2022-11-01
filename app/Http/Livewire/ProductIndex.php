<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
   

    public $search;

    protected $updateQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if($this->search) {
            $produks = Produk::where('nama_pdk', 'like', '%'.$this->search.'%')->paginate(8);
        }else {
            $produks = Produk::paginate(8);
        }

        return view('livewire.product-index', [
            'produks' => $produks
        ]);
    }
}
