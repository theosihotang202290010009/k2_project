<?php

namespace App\Http\Livewire;

use App\Models\pesanan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Checkout extends Component
{
    public $total_harga, $nohp, $alamat;

    public function mount()
    {
        if(Auth::user())
        {
            // Semacam Middleware Auth
            return redirect()->route('login');
        }

        $this->nohp = Auth::user()->nohp;
        $this->alamat =Auth::user()->alamat;

        $pesanan = pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        if(!empty($pesanan)) 
        {
            $this->total_harga = $pesanan->total_harga+$pesanan;
        }
        else
        {
            return redirect()->route('home');
        }
    }

    public function checkout()
    {
        $this->validate([
            'nohp' => 'required',
            'alamat' => 'required'
        ]);
        
        // Save the phone number and address to user data
        $user = User::where('id', Auth::user()->id)->first();
        $user->nohp = $this->nohp;
        $user->alamat = $this->alamat;
        $user->update();


        // Update order data
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan->status = 1;
        $pesanan->update();

        $this->emit('masukKeranjang');

        session()->flash('message', "Checkout Success!");

        return redirect()->route('history');

    }


    public function render()
    {
        return view('livewire.checkout');
    }
}
