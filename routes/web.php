<?php

use App\Http\Controllers\C_barang;
use App\Http\Controllers\C_pembelian;
use App\Http\Controllers\C_penjualan;
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
    return view('home');
});
Route::get('/penjualan', [C_penjualan::class, 'index']);
Route::resource('pembelian', C_pembelian::class);
Route::resource('barang', C_barang::class);
