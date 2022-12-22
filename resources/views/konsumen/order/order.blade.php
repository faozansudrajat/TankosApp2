@extends('layouts.konsumen')

@section('main-content')

    <!-- Page Heading -->
    <style>
        #p {
            float: left;
        }

        #q {
            width: 33%;
            margin-left: 40%
        }
    </style>

    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">{{ __('Order') }}</h1>

    @if($message = Session::get('pesan'))
        <div class="alert alert-primary">
            <button class="close">
                <span>&times;</span>
            </button>
            <strong>{{ $message }}</strong>
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
                            <label class="font-weight-bold">Product</label>
                            <br>
                            <select name="product_id" class="form-control">
                                <option value="0"> Pilih Produk </option>
                                @foreach ($product as $pr)
                                    <option value="{{ $pr->id }}">{{ $pr->nama_barang }} - Rp {{ $pr->harga }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" id="q">
                            <label class="font-weight-bold">Quantity</label>
                            <input type="number" name="quantity" class="form-control" placeholder="0" required="">
                        </div>
                        
    
    
                        <br>
    
                        <div class="form-group">
                            <label class="font-weight-bold">Name</label>
                            <input type="text" name="nama" class="form-control" placeholder="Your Name" required="">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Phone Number</label>
                            <input type="text" name="phonenumber" class="form-control" placeholder="081234567890" required="">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Street 6" required="">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Proof Of Payment</label>
                            <input type="file" name="proofofpayment" class="form-control" required="">
                        </div>
                        <br>
                        <hr style="border-style: dashed solid; border-width: 3px 0px 0px;">
                        <br>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <h5 class="font-weight" >Total:</h5>
                                </div>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <h4 class="font-weight-bold" >Rp</h4>
                                </div>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <h5 class="font-weight">Transfer to:</h5>
                                </div>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <h4 class="font-weight-bold" >BCA: 20937192</h4>
                                </div>
                            </div>
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
