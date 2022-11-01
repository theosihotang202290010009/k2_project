@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products') }}" class="text-dark">List Bakery</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><strong>Bakery Detail</strong></li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
            <div class="col-md-6">
                <div class="card gambar-produk">
                    <div class="card-body">
                        <img src="{{ url('assets/produk') }}/{{ $produk->gambar }}" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h2><strong>{{ $produk->nama_pdk }}</strong>
                    @if($produk->ready_or_not == 1)
                <span class="badge badge-success"> <i class="fas fa-check"></i> Stock Ready</span>
                @else
                <span class="badge badge-danger"> <i class="fas fa-times"></i> Stock Habis</span>
                @endif
                <h4>Rp. {{ number_format($produk->harga) }}</h4>
                <hr>
            </div>
    </div>
@endsection
