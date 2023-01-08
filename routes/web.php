<?php

use App\Assets;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

use App\Http\Controllers\AssetController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\KonfirmasiPembayaranController;
 
// ----- [ALL USER] -----
// Profile
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');
// About
Route::get('/about', 'AboutController@index')->name('about');

// ----- [ADDITIONAL] -----
Route::middleware('auth')->group(function() {
    Route::resource('basic', BasicController::class);
    Route::resource('asset', AssetController::class);
    Route::resource('order', OrderController::class);
    Route::resource('incomingOrder', IncomingOrderController::class);
    Route::resource('transaction', TransactionController::class);
});
