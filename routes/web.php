<?php

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
Route::get('/barang', [App\Http\Controllers\C_barang::class, 'index_barang']);
<<<<<<< Updated upstream
Route::get('/tambahbarang',[App\Http\Controllers\C_barang::class, 'tambah_barang']);
Route::post('/tambahbarang/proses',[App\Http\Controllers\C_barang::class, 'store_barang']);
Route::get('/ubahbarang',[App\Http\Controllers\C_barang::class, 'ubah_barang']);
=======
Route::get('/tambahbarang', [App\Http\Controllers\C_barang::class, 'tambah_barang']);
Route::post('/tambahbarang/proses', [App\Http\Controllers\C_barang::class, 'store_barang']);
Route::get('/ubahbarang', [App\Http\Controllers\C_barang::class, 'ubah_barang']);
>>>>>>> Stashed changes
Route::get('/tambahbarang', [App\Http\Controllers\C_barang::class, 'tambah_barang']);
Route::post('/tambahbarang/proses', [App\Http\Controllers\C_barang::class, 'store_barang']);
Route::get('/pembelian', [C_pembelian::class, 'index']);
