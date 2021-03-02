@extends('layout.layout')

@section('title', 'Penjualan')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-row align-items-center">
                        <div class="col">
                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-shopping-cart" aria-hidden="true"></i></div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Cari nama atau kode produk">
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </div>
                </form>
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
                <h4 class="card-title">Nota</h4>
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