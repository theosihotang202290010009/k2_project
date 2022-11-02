@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">List <strong>Bakery</strong></li>
                </ol>
              </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h2> List <strong>Bakery </strong></h2>
        </div>
    </div>

    <section class="bakeries mb-3">
        <div class="bakerie  row mt-4">
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
                                    <a href="{{ route('products.detail', $produk->id) }}" class="btn btn-dark btn-block"> <i class="fas fa-eye">Detail</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            <div class="col">
                <div class="row">
                    {{$produks->links()}}
                </div>
            </div>
    </section>
</div>

@endsection
