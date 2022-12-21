@extends('layouts.produsen')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">{{ __('Home') }}</h1>

    <div class="row justify-content-center">
        <div class="col-lg-3 mb-4">
            <div class="card bg-success text-center p-2">
                <h2 class="font-weight-bold text-white mb-0">Our Product</h2>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">      
        <div class="card shadow" style="margin-right: 2%">               
            <div class="card-produk-image m-3 mb-10">
                <img src="img/produk1img.png" height="250" width="250" >
            </div>
            <div class="text-center">
                <h3 class="font-weight-bold">Tandan Kosong</h3>
            </div>
            <div class="text-center">
                <h5 class="font-weight-bold">RP.300.000/Mobil</h5>
            </div>                    
        </div>
        <div class="card shadow" style="margin-right: 2%">               
            <div class="card-produk-image m-3 mb-10">
                <img src="img/produk2img.png" height="250" width="250" >
            </div>
            <div class="text-center">
                <h3 class="font-weight-bold">Limbah Sawit</h3>
            </div>
            <div class="text-center">
                <h5 class="font-weight-bold">RP.350.000/Mobil</h5>
            </div>                     
        </div>
        <div class="card shadow" style="margin-right: 2%">               
            <div class="card-produk-image m-3 mb-10">
                <img src="img/produk3img.png" height="250" width="250" >
            </div>
            <div class="text-center">
                <h3 class="font-weight-bold">Abu Sawit</h3>
            </div> 
            <div class="text-center">
                <h5 class="font-weight-bold">RP.45.000/50kg</h5>
            </div>                    
        </div>
    </div>

@endsection
