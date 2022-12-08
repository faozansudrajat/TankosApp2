@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Home') }}</h1>

    <div class="row justify-content-center">

            <div class="card shadow mb-4">               
                <div class="card-produk-image m-3 mb-10">
                    <img src="img/produk1img.png" height="250" width="250" >
                </div>
                <div class="title m-b-md">
                    Tandan Kosong
                </div>               
            </div>
            <div class="card shadow mb-4">               
                <div class="card-produk-image m-3 mb-10">
                    <img src="img/produk2img.png" height="250" width="250" >
                </div>
                <div class="title m-b-md">
                    Limbah Sawit
                </div>                   
            </div>
            <div class="card shadow mb-4">               
                <div class="card-produk-image m-3 mb-10">
                    <img src="img/produk3img.png" height="250" width="250" >
                </div>
                <div class="title m-b-md">
                    Abu Sawit
                </div>                   
            </div>
    </div>

@endsection
