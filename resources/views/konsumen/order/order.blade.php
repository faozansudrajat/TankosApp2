@extends('layouts.konsumen')

@section('main-content')

    <!-- Page Heading -->
    <style>
        #p {
            float: left;
        }
        #q {
            width: 33%;
            margin-left: 50%
        }
    </style>

    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">{{ __('Order') }}</h1>

    @if($message = Session::get('pesan'))
        <div class="alert alert-primary">
            <button data-dismiss="alert" class="close">
                <span>&times;</span>
            </button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow mb-4">
                <form action="{{route('order.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="card-body">
                        <div class="form-group" id="p">
                            <label for="product_id" class="font-weight-bold">Product</label>
                            <br>
                            <select name="product_id" id="product_id" class="form-control">
                                <option value="0"> Pilih Produk </option>
                                @foreach ($product as $pr)
                                    <option value="{{ $pr->id }}" data-harga ="{{ $pr->harga }}" data-stock="{{ $pr->stock }}">{{ $pr->nama_barang }} - Rp {{ $pr->harga }} - Stock = {{ $pr->stock}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" id="q">
                            <label class="font-weight-bold">Quantity</label>
                            <input type="number" name="quantity" class="form-control" placeholder="0" required="">
                        </div>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalTotalHarga" id="btnLihatHarga">Lihat harga</button>
                        <br>
    
                        <div class="form-group">
                            <label class="font-weight-bold">Name</label>
                            <input type="text" name="nama" class="form-control" placeholder="Your Name" required="">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Phone Number</label>
                            <input type="text" name="phonenumber" class="form-control" placeholder="08xxxxxxxxxx" required="">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Street X" required="">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Proof Of Payment</label>
                            <input type="file" name="proofofpayment" class="form-control" required="">
                        </div>
                        <br>
                        
                        </div>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-success">Order</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>

        </div>

    </div>
@endsection

<!-- Modal -->
<div class="modal fade" id="modalTotalHarga" tabindex="-1" role="dialog" aria-labelledby="modalTotalHargaLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTotalHargaLabel">Total Harga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <p>Total harga   :  <span id="totalHarga"></span></p>
                    <p>Bank          : <span id="bank"></span></p>
                    <p>Nomor rekening: <span id="nomorRekening"></span></p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function(){
        $('#btnLihatHarga').click(function(){
            var product_id = $('#product_id').val();
            var stock = $('#product_id').find(':selected').data('stock');
            var harga = $('#product_id').find(':selected').data('harga'); 
            var quantity = $('input[name="quantity"]').val();
            if (product_id != 0) {
                if ( quantity > stock) {
                    $('#totalHarga').text('Anda memesan melebihi stock yang tersedia!!');
                    $('#nomorRekening').text('Tidak Valid'); 
                    $('#bank').text('Tidak Valid');
                } else if (quantity == 0) {
                    $('#totalHarga').text('Tolong inputkan quantity barang');
                    $('#nomorRekening').text('Tidak Valid'); 
                    $('#bank').text('Tidak Valid');
                }else{
                    var totalHarga = harga * quantity;
                    $('#totalHarga').text('Rp' + totalHarga);
                    $('#nomorRekening').text('20937192'); 
                    $('#bank').text('BCA'); 
                }
            } else {
                $('#totalHarga').text('Silahkan pilih produk');
                $('#nomorRekening').text('Tidak Valid'); 
                $('#bank').text('Tidak Valid');
            }
        });
    });
</script>

