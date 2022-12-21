@extends('layouts.produsen')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">{{ __('Assets') }}</h1>

    <div class="row justify-content-center">
        <div class="col-lg-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header">
                    <a href="{{ route('asset.create') }}" class="btn btn-success">Add Product</a>
                    @csrf
                </div>
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
                                @forelse ($product as $p)
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
                                            <form action="{{ route('asset.destroy', $p->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-primary" >Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Belum ada data</td>
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
