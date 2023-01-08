@extends('layouts.konsumen')

@section('main-content')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">{{ __('Transaction') }}</h1>
    <div class="justify-content-center">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="font-weight-bold text-gray-900">On Process</h6>
                </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-muted ">ID</th>
                  <th class="text-muted ">Jenis Barang</th>
                  <th class="text-muted ">Nomor Hp</th>
                  <th class="text-muted ">Qty</th>
                  <th class="text-muted ">Total Harga</th>
                  <th class="text-muted ">Alamat</th>
                  <th class="text-muted ">Status</th>
                  <th class="text-muted ">Date</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @forelse ($orders as $order)
                <tr>
                  @if ($order->id < 10)
                    <td>00{{ $order->id }}</td>
                  @elseif(($order->id >= 10) &&($order->id < 100))
                    <td>0{{ $order->id }}</td>
                  @else
                    <td>{{ $order->id }}</td>
                  @endif
                  @if ($order->product_id == 1)
                    <td>Tandan Kosong</td>
                  @elseif($order->product_id == 2)
                    <td>limbah Sawit</td>
                  @elseif($order->product_id == 3)
                    <td>Abu Sawit</td>
                  @endif
                  <td>{{ $order->noTelp }}</td>
                  <td>{{ $order->quantity }}</td>
                  <td>{{ $order->jumlah }} </td>
                  <td>{{ $order->address }}</td>
                  @if ($order->status== 0)
                    <td><span class="badge badge-warning">Diproses</span></td>  
                  @elseif ($order->status == 1)
                    <td><span class="badge badge-success">Selesai</span></td>
                  @else
                    <td><span class="badge badge-danger">Ditolak</span></td>
                  @endif
                  <td>{{ $order->created_at }}</td>
                </tr>
                @empty
                  <tr>
                    <td colspan="7" class="text-center">Belum ada data orderan masuk</td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection