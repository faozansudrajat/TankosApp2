<?php

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

use App\Http\Controllers\TransaksiController;
 
// ----- [ALL USER] -----
// Profile
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');
// About
Route::get('/about', 'AboutController@index')->name('about');
// Transaction
Route::get('/transaction', 'TransactionController@index')->name('transaction');



// ----- [KONSUMEN] -----
// Order
Route::get('/order', 'OrderController@index')->name('order');




// ----- [PRODUSEN] -----
// Incoming Order
Route::get('/incomingOrder', 'IncomingOrderController@index')->name('incomingOrder');
// Asset
Route::get('/asset', 'AssetController@index')->name('asset');




// ----- [ADDITIONAL] -----
Route::middleware('auth')->group(function() {
    Route::resource('basic', BasicController::class);
});
