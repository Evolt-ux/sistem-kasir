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

  //update barang
  // public function edit($id)
  // {
  //   $tambah = Barang::where('id', $id)->get();
  //   return view('/barang/$id/edit', compact('tambah'));
  // }
  public function edit($Barang)
  {
    $Barang = Barang::where('id', $Barang)->first();
    return view('ubahbarang', compact('Barang'));
  }

  public function store_update(Request $request)
  {
    $tambah = Barang::all();
    StokPupuk::where('nama_pupuk', $request->nama_pupuk)->increment(
      'jumlah_stok',
      $request->jumlah_stok
    );
    return redirect('/StokPupuk');
  }
}
