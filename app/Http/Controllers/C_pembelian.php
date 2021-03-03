<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Order;
use Carbon\Carbon;
use App\Models\beli;
use File;
use Illuminate\Http\Request;

class C_pembelian extends Controller
{
    //lihat pembelian
    public function index()
    {
        return view('pembelian');
    }

    //tambah pembelian
    public function create()
    {
        return view('pembelian');
    }

    public function store(Request $request)
    {
        $tambah = beli::all();
        $this->validate($request, [
            'NamaBarang'    => ['required'],
            'Jumlah'        => ['required'],
            'Harga'         => ['required']
        ]);
        beli::create([
            'Tanggal'        => $request->date('Y-m-d H:i:s'),
            'NamaBarang'     => $request->NamaBarang,
            'Jumlah'         => $request->Jumlah,
            'Harga'          => $request->Harga
        ]);
        return redirect('/pembelian');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
