@extends('layouts.produsen')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">{{ __('Asset') }}</h1>

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
                                @foreach ($product as $p)
                                    <tr>
                                        <td>
                                            @if($p->nama_barang == "Tandan Kosong")
                                                <img src="img/produk1img.png" width=80 alt="">
                                            @elseif($p->nama_barang=="Limbah Sawit")
                                                <img src="img/produk2img.png" width=80 alt="">
                                            @elseif($p->nama_barang=="Abu Sawit")
                                                <img src="img/produk3img.png" width=80 alt="">
                                            @endif
                                        </td>
                                        <td>{{ $p->nama_barang}}</td>
                                        <td>{{ $p->harga }}</td>
                                        <td>{{ $p->stock }}</td>
                                        <td>
                                            <a href="{{ route('asset.edit', $p->id) }}" class="btn btn-success">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        </div>

    </div>
@endsection
