@extends('layouts.produsen')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">{{ __('Incoming Order') }}</h1>

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
                            @forelse ($order as $ord)
                            <tr>
                                @if ($order->product_id == 1)
                                    <td>Tandan Kosong</td>
                                @elseif($order->product_id == 2)
                                    <td>limbah Sawit</td>
                                @elseif($order->product_id == 3)
                                    <td>Abu Sawit</td>
                                @endif
                                <td>{{ $order->name}}</td>
                                <td>{{ $order->noTelp }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->jumlah }} </td>
                                <td>{{ $order->address }}</td>
                                <td>
                                    <button style="border: 2px solid black" type="submit" class="btn">Selesaikan</button>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Belum ada data order</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
