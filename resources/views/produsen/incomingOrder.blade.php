@extends('layouts.produsen')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">{{ __('Incoming Order') }}</h1>

    <div class="row justify-content-center">

        <!-- DataTales Example -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-muted ">Jenis Barang</th>
                            <th class="text-muted ">Nama Pembeli</th>
                            <th class="text-muted ">No HP</th>
                            <th class="text-muted ">Qty</th>
                            <th class="text-muted ">Total Harga</th>
                            <th class="text-muted ">Alamat</th>
                            <th class="text-muted ">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
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
                                <button type="submit" class="btn btn-success btn-info mb-2">Terima</button>
                                <button type="submit" class="btn btn-danger btn-info mb-2">Tolak</button>
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

@endsection
