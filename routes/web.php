<?php

use App\Http\Controllers\C_barang;
use App\Http\Controllers\C_pembelian;
use App\Http\Controllers\C_penjualan;
use App\Http\Controllers\C_home;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\diskon;
use App\Models\periode;

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
    $home = DB::table('periode')
    ->join('diskon','diskon.DiskonID', '=', 'periode.PeriodeID')
    ->select('periode.*', 'diskon.Diskon')
    ->get();
    return view('home', compact('home'));
});
// Route::get('/', [C_home::class]);
Route::resource('penjualan', C_penjualan::class);
Route::resource('pembelian', C_pembelian::class);
Route::resource('barang', C_barang::class);
Route::resource('home', C_home::class);
