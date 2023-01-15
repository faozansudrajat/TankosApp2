<?php

namespace App\Http\Controllers;

use App\User;
use App\Assets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $usertype = Auth::user()->usertype;
        
        $product = Assets::all();

        if($usertype =='0'){
            return view('konsumen.home', ['product' => $product]);
        }else{
            return view('produsen.home', ['product' => $product]);
        }
        
    }
}
