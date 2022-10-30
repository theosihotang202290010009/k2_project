@extends('layouts.app')
@section('content')
<div class="container">
    {{-- BANNER --}}
    <div class="banner">
        <img src="{{ url('assets/tof.png') }}" alt="">
    </div>

    {{-- PRODUK --}}
    <section class="pilih-produk">
        <div class="row mt-4 mb-5">
            <h3><strong>Produk Terlaris</strong></h3>
            @foreach ($produks as $produk)
            <div class="col">
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
                            <a href="#" class="btn btn-dark btn-block">Detail</a>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
