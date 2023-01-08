@extends('layouts.konsumen')

@section('main-content')

    <form action="{{route('order.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label class="font-weight-bold">Proof Of Payment</label>
            <input type="file" name="proofofpayment" class="form-control" required="">
        </div>
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
        </div> --}}
        <div class="pl-lg-4">
            <div class="row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-success">Continue</button>
                </div>
            </div>
        </div>