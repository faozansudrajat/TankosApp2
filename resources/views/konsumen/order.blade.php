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

    <h1 class="h3 mb-4 text-gray-800">{{ __('Order') }}</h1>

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="form-group" id="p">
                        <label class="font-weight-bold">Product</label>
                        <br>
                        <select name="" id = "age-group">
                            <option value="Tandan Kosong"> Tandan Kosong </option>
                            <option value="Limbah Sawit"> Limbah Sawit </option>
                            <option value="Abu Sawit"> Abu Sawit </option>
                        </select>
                        <p>Stock: </p>
                    </div>
                    <div class="form-group" id="q">
                        <label class="font-weight-bold">Quantity</label>
                        <input type="nama" name="nama" class="form-control" placeholder="0" required="">
                    </div>

                    <br>

                    <div class="form-group">
                        <label class="font-weight-bold">Name</label>
                        <input type="nama" name="nama" class="form-control" placeholder="Your Name" required="">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Phone Number</label>
                        <input type="phonenumber" name="phonenumber" class="form-control" placeholder="081234567890" required="">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Address</label>
                        <input type="address" name="address" class="form-control" placeholder="Street 6" required="">
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
            </div>

        </div>

    </div>
@endsection
