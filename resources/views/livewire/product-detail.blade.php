@extends('layouts.app')
@section('content')
<div>
    <h2>Product Details</h2>
</div>
<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products') }}" class="text-dark">List Bakery</a></li>
                    <li class="breadcrumb-item-active" aria-current="page">Product Detail</li>
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
                <span class="badge badge-success"> <i class="fas fa-check"></i> Ready to Stock</span>
                @else
                <span class="badge badge-danger"> <i class="fas fa-times"></i> Out of Stock</span>
                @endif
                <h4>Rp. {{ number_format($produk->harga) }}</h4>
                <hr>
            </div>
    </div>
@endsection
