@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Order') }}</h1>

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="form-group">
                        <label class="font-weight-bold">Name</label>
                        <input type="nama" name="nama" class="form-control" placeholder="Faozan Sudrajat" required="">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Phone Number</label>
                        <input type="phonenumber" name="phonenumber" class="form-control" placeholder="081234567890" required="">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Address</label>
                        <input type="address" name="address" class="form-control" placeholder="JL mawar 25" required="">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Proof Of Payment</label>
                        <input type="file" name="proofofpayment" class="form-control" required="">
                    </div>
                    <hr>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col text-center">
                                <h5 class="font-weight-bold" >Total:</h5>
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
                                <h5 class="font-weight-bold" >Transfer to BCA</h5>
                            </div>
                        </div>
                    </div>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col text-center">
                                <h4 class="font-weight-bold" >20937192</h4>
                            </div>
                        </div>
                    </div>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-success">Save Changes</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>

    </div>
@endsection
