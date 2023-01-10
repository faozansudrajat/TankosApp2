@extends('layouts.produsen')

@section('main-content')

    <!-- Page Heading -->

    <div class="row justify-content-center">

    <!-- DataTales Example -->
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800 font-weight-bold">{{ __('Incoming Order') }}</h1>
        <div class="justify-content-center">
            <div class="col">
                <div class="card shadow mb-4">
    
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
                    <?php $count = 0?>
                    @foreach ($orders as $order)
                        @if ($order->status != 1 && $order->status != 2)
                            <?php $count +=1 ?>
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
                                    <form action="{{ route('incomingOrder.update', $order->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" name="approve" class="btn btn-success btn-info mb-2">Terima</button>
                                        <button type="submit" name="reject" class="btn btn-danger btn-info mb-2">Tolak</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach

        
                    @if($count == 0)
                        <tr>
                            <td colspan="7" class="text-center font-weight-bold">Belum ada data orderan masuk</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection