@extends('layouts.konsumen')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">{{ __('Dashboard') }}</h1>

    <div class="row justify-content-center">
        <div class="col-lg-3 mb-4">
            <div class="card bg-success text-center p-2">
                <h2 class="font-weight-bold text-white mb-0">Our Product</h2>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        @foreach ($product as $p)      
            <div class="card shadow" style="margin-right: 2%">             
                <div class="card-produk-image m-3 mb-10">
                    @if($p->nama_barang == "Tandan Kosong")
                        <img src="img/produk1img.png" height="250" width="250" alt="">
                    @elseif($p->nama_barang=="Limbah Sawit")
                        <img src="img/produk2img.png" height="250" width="250" alt="">
                    @elseif($p->nama_barang=="Abu Sawit")
                        <img src="img/produk3img.png" height="250" width="250" alt="">
                    @endif
                </div>
                <div class="text-center">
                    <h3 class="font-weight-bold">{{ $p->nama_barang}}</h3>
                </div>
                <div class="text-center">
                    <h5 class="font-weight-bold">Rp {{ $p->harga}}</h5>
                </div>                    
            </div>
        @endforeach
    </div>

@endsection
