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
 


Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/profileprodusen', 'ProfileProdusenController@index')->name('profile');
Route::put('/profileprodusen', 'ProfileProdusenController@update')->name('profile.update');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/aboutprodusen', function () {
    return view('aboutprodusen');
})->name('aboutprodusen');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/incomingorder', function () {
    return view('incomingorder');
})->name('incomingorder');

Route::get('/transaction', function () {
    return view('transaction');
})->name('transaction');

Route::get('/transactionProdusen', function () {
    return view('transactionProdusen');
})->name('transactionProdusen');

Route::get('/assets', function () {
    return view('assets');
})->name('assets');

Route::middleware('auth')->group(function() {
    Route::resource('basic', BasicController::class);
});
