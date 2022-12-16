@extends('layouts.produsen')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Incoming Order') }}</h1>

    <div class="row justify-content-center">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Jenis Barang</th>
                                <th>Nama Pembeli</th>
                                <th>No HP</th>
                                <th>Qty</th>
                                <th>Total Harga</th>
                                <th>Alamat</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tandan Kosong</td>
                                <td>Herman Gemilang</td>
                                <td>081234456789</td>
                                <td>5</td>
                                <td>Rp 350.000 </td>
                                <td>Jl. Mawar 25</td>
                                <td>
                                    <button style="border: 2px solid black" type="submit" class="btn">Selesaikan</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
