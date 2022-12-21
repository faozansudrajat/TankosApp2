@extends('layouts.produsen')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">{{ __('Assets') }}</h1>

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="font-weight-bold" class="text-center"> Halaman Add Data Product</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('asset.store') }}" method="POST">
                            @csrf
                            <table class="table table-bordered">
                                <tr>
                                    <td>Nama Barang</td>
                                    <td> 
                                        <select name="nama_barang" id = "age-group">
                                            <option value="Tandan Kosong"> Tandan Kosong </option>
                                            <option value="Limbah Sawit"> Limbah Sawit </option>
                                            <option value="Abu Sawit"> Abu Sawit </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td><input type="number" name="harga" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>Stock</td>
                                    <td><input type="number" name="stock" class="form-control" id=""></td>
                                </tr>
                                
                            </table>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col text-center">
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
