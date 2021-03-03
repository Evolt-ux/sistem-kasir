@extends('layout.layout')

@section('title', 'Penjualan')

@section('content')
<div class="row">
    <div class="col-sm-5">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <span class="bg-primary" style="font-size: 80px; border-radius:7px; color: white;vertical-align:middle;">
                                <i class="fas fa-chart-line" style="padding: 6px;"></i>
                            </span>
                        </div>
                        <div class="col-7">
                            <div class="row m-auto" style="margin:auto;">
                                <p class="h6 mt-3">Profit yang diterapkan :</p>
                                <h1 class="text-primary font-weight-bold display-3">50 %</h1>
                            </div>
                        </div>
                        <div class="col-2" style="margin: auto;">
                            <div class="row mb-2">
                                <a href=""><i class="text-primary fas fa-plus" style="border: solid 1px;padding:6px 7px;font-size:25px; border-radius: 6px;"></i></a>
                            </div>
                            <div class="row">
                                <a href=""><i class="text-primary far fa-edit" style="border: solid 1px;padding:4px;font-size:25px; border-radius: 6px;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-7">
        <div class="card">
            <div class="card-body ml-5">
                <h4 class="card-title">Diskon</h4>
                <div class="row">
                    <div class="col-10">
                        <table class="table table-sm">
                            <thead>
                                <tr height="" align="center">
                                    <th scope="col" rowspan="2">ID</th>
                                    <th scope="col" colspan="2">Periode</th>
                                    <th scope="col" rowspan="2">Nama Barang</th>
                                    <th scope="col" rowspan="2">Diskon</th>
                                </tr>
                                <tr align="center">
                                    <th scope="col">Awal</th>
                                    <th scope="col">Akhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr align="center">
                                    <th scope="row">1</th>
                                    <td>Tgl 1</td>
                                    <td>Tgl 2</td>
                                    <td>Kopi</td>
                                    <td>0%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-2">
                        <div class="row">
                            <form action="" method="GET">
                                <button type="submit" style="border: none; background-color:rgba(255, 0, 0, 0); width:0.1px; outline:none;"><i class="text-primary mt-1 mr-5 fas fa-plus" style="border: solid 1px;padding:7px;font-size:25px; border-radius: 6px;"></i></button>
                            </form>
                        </div>
                        <div class="row">
                            <form action="" method="GET">
                                <button type="submit" style="border: none; background-color:rgba(255, 0, 0, 0); width:0.1px; outline:none;"><i class="text-primary mt-1 mr-5 fas fa-edit" style="border: solid 1px;padding:4px;font-size:25px; border-radius: 6px;"></i></button>
                            </form>
                        </div>
                        <div class="row">
                            <form action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border: none; background-color:rgba(255, 0, 0, 0); width:0.1px; outline:none;"><i class="text-primary mt-1 mr-5 fas fa-trash-alt" style="border: solid 1px;padding:7px;font-size:25px; border-radius: 6px;"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection