@extends('layouts.produsen')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 cl font-weight-bold">{{ __('Assets') }}</h1>

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group focused">
                                <label class="form-control-label" for="foto">foto</label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group focused">
                                <label class="form-control-label" for="jenis barang">Jenis Barang</label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group focused">
                                <label class="form-control-label" for="harga">Harga</label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group focused">
                                <label class="form-control-label" for="stock">Stock</label>
                            </div>
                        </div>
                        <hr>
                    </div>
                    
                </div>
            </div>

        </div>

    </div>
@endsection
