@extends('layouts.konsumen')

@section('main-content')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">{{ __('Transaction') }}</h1>
    <div class="justify-content-center">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  {{-- <h6 class="m-0 font-weight-bold text-primary">My Account</h6> --}}
                  <a href="#" class="onprocess m-0 font-weight-bold text-gray-900">On Process</a>
                  <a href="#" class="history m-0 font-weight-bold text-gray-900">History</a>
                </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-muted ">ID</th>
                  <th class="text-muted ">Jenis Barang</th>
                  <th class="text-muted ">NO HP</th>
                  <th class="text-muted ">Qty</th>
                  <th class="text-muted ">Total Harga</th>
                  <th class="text-muted ">Alamat</th>
                  <th class="text-muted ">Status</th>
                  <th class="text-muted ">Date</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    001
                  </td>
                  <td>
                    Tandan Kosong
                  </td>
                  <td>
                    081234567899
                  </td>
                  <td>
                    2
                  </td>
                  <td>
                    Rp 350.000
                  </td>
                  <td>
                    jlan mawar No.25
                  </td>
                  <td>
                    <a href="#" class="btn btn-warning btn-info mb-2">
                    {{-- <a href="{{ route('transaksi.show', 1) }}" class="btn btn-sm btn-info mb-2"> --}}
                      Diproses
                    </a>
                  </td>
                  <td>
                    20 Sep, 18:57
                  </td>
                </tr>
                <tr>
                  <td>
                    002
                  </td>
                  <td>
                    Limbah Sawit
                  </td>
                  <td>
                    081234567899
                  </td>
                  <td>
                    2
                  </td>
                  <td>
                    Rp 350.000
                  </td>
                  <td>
                    jlan mawar No.25
                  </td>
                  <td>
                    <a href="#" class="btn btn-warning btn-info mb-2">
                    {{-- <a href="{{ route('transaksi.show', 1) }}" class="btn btn-sm btn-info mb-2"> --}}
                      Diproses
                    </a>
                  </td>
                  <td>
                    20 Sep, 18:57
                  </td>
                </tr>
                <tr>
                  <td>
                    003
                  </td>
                  <td>
                    Abu Sawit
                  </td>
                  <td>
                    081234567899
                  </td>
                  <td>
                    2
                  </td>
                  <td>
                    Rp 350.000
                  </td>
                  <td>
                    jlan mawar No.25
                  </td>
                  <td>
                    <a href="#" class="btn btn-warning btn-info mb-2">
                    {{-- <a href="{{ route('transaksi.show', 1) }}" class="btn btn-sm btn-info mb-2"> --}}
                      Diproses
                    </a>
                  </td>
                  <td>
                    20 Sep, 18:57
                  </td>
                </tr>
                <tr>
                  <td>
                    004
                  </td>
                  <td>
                    Tandan Kosong
                  </td>
                  <td>
                    081234567899
                  </td>
                  <td>
                    2
                  </td>
                  <td>
                    Rp 350.000
                  </td>
                  <td>
                    jlan mawar No.25
                  </td>
                  <td>
                    <a href="#" class="btn btn-warning btn-info mb-2">
                    {{-- <a href="{{ route('transaksi.show', 1) }}" class="btn btn-sm btn-info mb-2"> --}}
                      Diproses
                    </a>
                  </td>
                  <td>
                    20 Sep, 18:57
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