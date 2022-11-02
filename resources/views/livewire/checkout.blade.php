@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('keranjang') }}" class="text-dark">Keranjang</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><strong>Proceed Check Out</strong></li>

                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
        </div>
    </div>

    <div class="row">
         <div class="col">
            <a href="{{ route('keranjang') }}" class="btn btn-sm btn-dark"><i class="fas fa-arrow-left"></i> Back </a>
         </div>            
    </div>

    <div class="row mt-4">
        <div class="col">
            <h4>Informasi Pembayaran</h4>
            <hr>
            <p>Untuk pembayaran silahkan dapat ditansfer ke rek. dibawah ini sebesar : <strong> Rp. {{ number_format($total_harga)}} </strong></p>
            <div class="media">
                <img class="mr-3" src="{{ url('assets/logo_bca.png') }}" alt="Generic placeholder image" width ="60">
                <div class="media-body">
                  <h5 class="mt-0">Bank BCA</h5>
                  No. Rek 12345678910 atas nama <strong> Octari Nababan</strong>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>Informasi Pengiriman</h4>
            <hr>     
            <form wire:submit.prevent="checkout">

                <div class="form-group">
                    <label for="">No. HP</label>
                    <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" wire:model="nama"
                    value="{{ old('nohp') }}" autocomplete="name" autofocus>

                 @error('nohp')
                    <span class="invalid-feedback" note="alert">
                        <strong>{{ $message }} </strong>
                    </span>
                     @enderror
                </div>

                <div>
                    <label for="">Alamat</label>
                    
                    <textarea wire:moedel="alamat" class="form-control @error('nama') is-invalid @enderror"></textarea>

                      @error('alamat')
                      <span class="invalid-feedback" note="alert">
                            <strong>{{ $message }} </strong>
                      </span>
                      @enderror
                </div>

                <button type="submit" clasas="btn btn-dark btn-block"> <i class="fas fa-arrow-right"></i> Checkout </button>
            </form>
        </div>
    </div>
@endsection
