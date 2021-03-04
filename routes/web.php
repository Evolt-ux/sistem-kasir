<?php

use App\Http\Controllers\C_barang;
use App\Http\Controllers\C_pembelian;
use App\Http\Controllers\C_penjualan;
use Illuminate\Support\Facades\Route;
use App\Models\diskon;

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
    $diskon = diskon::all();
    return view('home', compact('diskon'));
});
// Route::get('/', [C_home::class]);
Route::resource('penjualan', C_penjualan::class);
Route::resource('pembelian', C_pembelian::class);
Route::resource('barang', C_barang::class);
Route::resource('diskon', C_home::class);
