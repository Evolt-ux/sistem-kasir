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
    public function index_barang()
    {
      $tambah = Barang::all();
      return view('/barang', compact('tambah'));
    }

    //tambah barang
    public function tambah_barang()
    {
      $tambah = Barang::all();
      return view('/tambahbarang', compact('tambah'));
    }
    public function store_barang(Request $request)
    {
      $tambah = Barang::all();
      $this->validate($request,[
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
          'Diskon'         => $request->Diskon/100,
          'Kadaluarsa'     => $request->Kadaluarsa
      ]);
        return redirect('/barang');
    }

    //update barang
    public function ubah_barang()
    {
      $tambah = Barang::all();
      Barang::where('id', $request->id)->get();
      return view('/ubahbarang/{{$id}}', compact('tambah'));
    }

    public function store_update(Request $request)
    {
      $tambah = Barang::all();
      StokPupuk::where('nama_pupuk', $request->nama_pupuk)->increment(
          'jumlah_stok', $request->jumlah_stok
      );
        return redirect('/StokPupuk');
    }
}
