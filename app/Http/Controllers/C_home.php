<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Order;
use Carbon\Carbon;
use App\Models\diskon;
use App\Models\periode;
use Illuminate\Http\Request;

class C_home extends Controller
{
    //tambah periode dan diskon
    public function create()
    {
        return view('tambahdiskon');
    }

    public function store(Request $request)
    {
        
        $tambah = periode::all();
        $this->validate($request, [
            'Awal'         => ['required'],
            'Akhir'        => ['required']
        ]);
        periode::create([
            'Awal'           => $request->Awal,
            'Akhir'          => $request->Akhir
        ]);
        $tambah = diskon::all();
        $this->validate($request, [
            'NamaBarang'   => ['required'],
            'Diskon'       => ['required']
        ]);
        diskon::create([
            'NamaBarang'     => $request->NamaBarang,
            'Diskon'         => $request->Diskon/100
        ]);
        return redirect('/');
    }

    public function show($id)
    {
        //
    }

    //ubah diskon
    public function edit($home)
    {
        $home = DB::table('periode')
                ->join('diskon','diskon.DiskonID', '=', 'periode.PeriodeID')
                ->select('periode.*', 'diskon.Diskon')
                ->where('periode.PeriodeID', '=', 'diskon.DiskonID')
                ->get();
        return view('ubahdiskon', compact('home'));
    }

    // public function update(Request $request, periode $home, diskon $home)
    // {
    //     $request->validate([
    //         'Awal'          => ['required'],
    //         'Akhir'         => ['required'],
    //         'NamaBarang'    => ['required'],
    //         'Diskon'        => ['required']
    //       ]);
    
    //       $home->update($request->all());
    
    //       return redirect()->route('home.index')
    //                       ->with('success','Home updated successfully');
    // }

    // public function destroy($hapus)
    // {
    //     $hapus = periode::where('id',$hapus)->first();
    //     $hapus = diskon::where('id',$hapus)->first();
    //     $hapus->delete();
 
    //     return redirect()->route('home.index')
    //                     ->with('success','Barang deleted successfully');
    // }
}
