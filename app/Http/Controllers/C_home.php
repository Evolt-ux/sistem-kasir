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
        $cek = DB::table('periode')
            ->where('Awal', $request->Awal)
            ->where('Akhir', $request->Akhir)
            ->get();
        if (count($cek) == 0) {
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
        } elseif (count($cek) > 0) {
            $idPeriode = DB::table('periode')
                ->select('PeriodeID')
                ->where('Awal', $request->Awal)
                ->where('Akhir', $request->Akhir)
                ->first();
            diskon::create([
                'NamaBarang'    => $request->NamaBarang,
                'PeriodeID'     => $idPeriode->PeriodeID,
                'Diskon'        => $request->Diskon / 100

            ]);
        }
        return redirect('/');
    }

    public function show($id)
    {
        //
    }

    //ubah diskon
    public function edit($id)
    {
        $data = DB::table('periode')
            ->join('diskon', 'diskon.PeriodeID', '=', 'periode.PeriodeID')
            ->select('periode.*', 'diskon.*')
            ->where('periode.PeriodeID', '=', $id)
            ->first();
        return view('ubahdiskon', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Awal'          => ['required'],
            'Akhir'         => ['required'],
            'Diskon'        => ['required']
        ]);
        DB::table('periode')
            ->where('PeriodeID', $id)
            ->update([
                'Awal' => $request->Awal,
                'Akhir' => $request->Akhir
            ]);
        return redirect('/')->with('success', 'Home updated successfully');

        // periode::where('PeriodeID', $request->PeriodeID)->update([
        //     'Awal' => $request->Awal,
        //     'Akhir' => $request->Akhir
        // ]);
        // $periode->update($request->all());


    }

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
