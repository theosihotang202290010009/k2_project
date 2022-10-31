@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item-active" aria-current="page">List Bakery</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h2> List <strong>Bakery </strong></h2>
        </div>
        <div class="col-md-3">
            <div class="input-group mb-3">
                <input wire:model="searcg" type="text" class="form-control" placeholder="Search . . ." aria-label="Search" aria-describedby="basic-addon1">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>

        </div>

    </div>

    <section class="bakeries mb-3">
        <div class="row mt-4">
            @foreach ($produks as $produk)
                <div class="col-md-3 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <img src="{{ url('assets/produk') }}/{{ $produk->gambar }}" class="img-fluid">
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <h5><strong>{{ $produk->nama_pdk }}</strong></h5>
                                    <h5>Rp.{{number_format ($produk->harga) }}</h5>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <a href="{{route('products.detail', $produk->id)}}" class="btn btn-dark btn-block">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="row">
                <div class="col">
                    {{ $produks->links() }}
                </div>
            </div>
        </div>
    </section>
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@endsection
