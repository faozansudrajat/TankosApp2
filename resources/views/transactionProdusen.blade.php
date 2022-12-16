@extends('layouts.produsen')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Transaction') }}</h1>

    <div class="row justify-content-center">

        <div class="col-lg-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Jenis Barang</th>
                                    <th>Nama Pembeli</th>
                                    <th>No HP</th>
                                    <th>Qty</th>
                                    <th>Total Harga</th>
                                    <th>Alamat</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>001</td>
                                    <td>Tandan Kosong</td>
                                    <td>Herman Gemilang</td>
                                    <td>081234456789</td>
                                    <td>5</td>
                                    <td>Rp 350.000 </td>
                                    <td>Jl. Mawar 25</td>
                                    <td>
                                        <div style="background: rgb(21, 188, 57);">
                                            <p class="text-center" style="color:white">Selesai</p>
                                        </div>
                                    </td>
                                    <td>20 Sep, 18:57</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
