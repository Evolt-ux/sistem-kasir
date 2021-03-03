@extends('layout.layout')

@section('title', 'Penjualan')

@section('content')
<div class="row">
    <div class="col-sm-6">
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
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Transaction</h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col" rowspan="2">ID</th>
                            <th scope="col" colspan="2">Periode</th>
                            <th scope="col" rowspan="2">Qty</th>
                            <th scope="col" rowspan="2">Disc</th>
                            <th scope="col" rowspan="2">Total</th>
                            <th scope="col">-</th>
                        </tr>
                        <tr>
                            <th scope="col">Awal</th>
                            <th scope="col">Akhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Samsung S21 ultra</td>
                            <td>10.000.00</td>
                            <td>1</td>
                            <td>0%</td>
                            <td>10.000.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- search barang end -->
<div class="row">
    <!-- Column -->

    <!-- Column -->
    <!-- Column -->
    <div class="col-sm-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Profit yang diterapkan</h4>
                <div class="text-right">
                    <h2 class="font-light m-b-0"><i class="ti-arrow-up text-info"></i> $5,000</h2>
                    <span class="text-muted">Todays Income</span>
                </div>
                <span class="text-info">30%</span>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 30%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
@endsection