<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Order;
use Carbon\Carbon;
use App\Models\diskon;
use Illuminate\Http\Request;

class C_home extends Controller
{
    //lihat diskon
    public function index()
    {
        $tambah = diskon::all();
        return view('home', compact('tambah'));
    }

    //tambah diskon
    public function create()
    {
        return view('tambahdiskon');
    }

    public function store(Request $request)
    {
        $tambah = diskon::all();
        $this->validate($request, [
            'Awal'         => ['required'],
            'Akhir'        => ['required'],
            'NamaBarang'   => ['required'],
            'Diskon'       => ['required']
        ]);
        diskon::create([
            'Awal'           => $request->Awal,
            'Akhir'          => $request->Awal,
            'NamaBarang'     => $request->NamaBarang,
            'Diskon'         => $request->Diskon
        ]);
        return redirect('/');
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
