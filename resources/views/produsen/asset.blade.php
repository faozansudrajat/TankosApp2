@extends('layouts.produsen')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Assets') }}</h1>

    <div class="row justify-content-center">
        <div class="col-lg-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Jenis Barang</th>
                                    <th>Harga</th>
                                    <th>Stock</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="img/produk1img.png"  width=80 alt="">
                                    </td>
                                    <td>Tandan Kosong</td>
                                    <td>350.000</td>
                                    <td>10</td>
                                    <td>
                                        <a href="">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        </div>

    </div>
@endsection
