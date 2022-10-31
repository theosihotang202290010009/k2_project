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

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <img src="{{ url('assets/produk') }}/{{ $produk->gambar }}" class="img-fluid">
            </div>
        </div>
    </div>
@endsection
