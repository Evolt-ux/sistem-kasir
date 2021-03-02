<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Order;
use Carbon\Carbon;
use App\Models\Barang;
use File;

use Illuminate\Http\Request;

class C_barang extends Controller
{
  //lihat barang
  public function index()
  {
    $tambah = Barang::all();
    return view('/barang', compact('tambah'));
  }

  //tambah barang
  public function create()
  {
    return view('tambahbarang');
  }
  public function store(Request $request)
  {
    $tambah = Barang::all();
    $this->validate($request, [
      'NamaBarang'    => ['required'],
      'Jumlah'        => ['required'],
      'Harga'         => ['required'],
      'Diskon'        => ['required'],
      'Kadaluarsa'    => ['required']
    ]);
    Barang::create([
      'NamaBarang'     => $request->NamaBarang,
      'Jumlah'         => $request->Jumlah,
      'Harga'          => $request->Harga,
      'Diskon'         => $request->Diskon / 100,
      'Kadaluarsa'     => $request->Kadaluarsa
    ]);
    return redirect('/barang');
  }

  public function edit($Barang)
  {
    $Barang = Barang::where('id', $Barang)->first();
    return view('ubahbarang', compact('Barang'));
  }
}