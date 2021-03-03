@extends('layout.layout')

@section('title', 'Penjualan')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="row" style="padding: 2px;">
                    <div class="col-3">
                        <span style="background-color: #e999df;font-size: 80px; border-radius:7px; color: white;vertical-align:middle;">
                            <i class="fas fa-chart-line" style="padding: 6px;"></i>
                        </span>
                    </div>
                    <div class="col-7" style="margin:auto auto auto;">
                        <p>Profit yang diterapkan :</p>
                        <h1>50 %</h1>
                    </div>
                    <div class="col-2">
                        <div class="row">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="row">
                            <i class="far fa-edit"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- search barang end -->
<div class="row">
    <!-- Column -->
    <div class="col-sm-7">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Transaction</h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Disc %</th>
                            <th scope="col">Total</th>
                            <th scope="col">-</th>
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
                            <td><i class="fas fa-trash-alt"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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