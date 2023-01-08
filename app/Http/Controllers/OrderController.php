<?php

namespace App\Http\Controllers;

use App\Assets;
use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $product = Assets::all();
        return view('konsumen.order.order',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //jika produk belum dipilih
        if(($request->product_id==0)&&($request->quantitty==0)){
            return redirect()->route('order.index')->with('pesan','Anda Belum Memilih Produk');
        }
        $request->validate([
            'quantity' => 'required|numeric',
            'nama' => 'required|string',
            'phonenumber' => 'required|numeric',
            'address' => 'required|string',
            
        ]);
        $product = Assets::where('id', $request->product_id)->first();
        $order = new Order();
        $order -> product_id = $request->input('product_id');
        $order -> quantity = $request->input('quantity');
        $order -> name = $request->input('nama');
        $order -> noTelp = $request->input('phonenumber');
        $order -> address = $request->input('address');
        $order -> proofofpayment = $request->input('proofofpayment');
        $order -> jumlah = $product ->harga * $request->quantity;
        $product ->stock -= $request->input('quantity');
        $order->save();
        $product->save();
        return redirect()->route('order.index')->with('pesan', 'Proses order berhasil');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}