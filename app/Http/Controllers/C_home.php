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
        $this->validate($request, [
            'Awal'         => ['required'],
            'Akhir'        => ['required'],
            'NamaBarang'   => ['required'],
            'Diskon'       => ['required']
        ]);
        $idPeriode = DB::table('periode')->orderBy('PeriodeID', 'desc')->value('PeriodeID');
        periode::create([
            'Awal'           => $request->Awal,
            'Akhir'          => $request->Akhir
        ]);
        $idPeriode = DB::table('periode')->orderBy('PeriodeID', 'desc')->value('PeriodeID');
        diskon::create([
            'NamaBarang'    => $request->NamaBarang,
            'PeriodeID'     => $idPeriode,
            'Diskon'        => $request->Diskon / 100

        ]);
        return redirect('/');
    }

    public function show($id)
    {
        //
    }

    //ubah diskon
    public function edit($id)
    {
        $home = DB::table('periode')
            ->join('diskon', 'diskon.DiskonID', '=', 'periode.PeriodeID')
            ->select('periode.*', 'diskon.*')
            ->where('periode.PeriodeID', '=', $id)
            ->first();
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

    public function destroy($hapus)
    {
        // $periode = periode::where('PeriodeID', $hapus)->first();
        periode::where('PeriodeID', $hapus)->delete();
        // $periode->delete();
        // $diskon = diskon::where('PeriodeID', $hapus)->first();
        // $diskon->delete();
        return redirect('/')
            ->with('success', 'Barang deleted successfully');
    }
}
