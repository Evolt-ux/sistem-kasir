<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Order;
use Carbon\Carbon;
use App\Models\jual;
use File;
use Illuminate\Http\Request;

class C_penjualan extends Controller
{
    //lihat penjualan
    public function index()
    {
        $tambah = jual::all();
        return view('/penjualan', compact('tambah'));
    }

    //tambah penjualan
    public function store(Request $request)
    {
        $tambah = jual::all();
        $this->validate($request, [
            'NamaBarang'    => ['required'],
            'Jumlah'        => ['required'],
            'Harga'         => ['required'],
            'Diskon'        => ['required']
        ]);
        jual::create([
            'Tanggal'        => date('Y-m-d H:i:s'),
            'NamaBarang'     => $request->NamaBarang,
            'Jumlah'         => $request->Jumlah,
            'Harga'          => $request->Harga,
            'Diskon'         => $request->Diskon/100
        ]);
        return redirect('/penjualan');
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

    //hapus penjualan
    public function destroy($jual)
    {
        $jual = jual::where('id',$jual)->first();
        $jual->delete();
 
        return redirect()->route('penjualan.index')
                        ->with('success','Penjualan deleted successfully');
    }
}
