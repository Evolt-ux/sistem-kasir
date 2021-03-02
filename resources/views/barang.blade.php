@extends('layout.layout')

@section('title', 'Barang')
@section('content')
<!-- search barang end -->
<div class="row">
    <!-- Column -->
    <div class="col-sm-10">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Kelola Barang</h3>
                <button class="btn btn-info mb-2 ms-2"><i class="fas fa-plus"></i>Tambah Barang</button>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Diskon</th>
                            <th scope="col">Tgl Kadaluarsa</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Beras 25Kg</td>
                            <td>10</td>
                            <td>250.000</td>
                            <td>0%</td>
                            <td>12 Desember 2021</td>
                            <td><a href="/barang/edit"><i class="far fa-edit"></i></a>&nbsp;&nbsp;<a href="http://"><i class="fas fa-trash-alt" style="color: red"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection