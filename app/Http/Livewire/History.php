<?php

namespace App\Http\Livewire;

use App\Models\pesanan;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class History extends Component
{
    public $pesanans;

    public function render()
    {
        if(Auth::user())
        {
            $this->pesanans = pesanan::where('user_id', Auth::user()->id)->where('status', '!=', 0)->get();
        }
        
        return view('livewire.history');
    }
}
