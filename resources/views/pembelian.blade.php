@extends('layout.layout')

@section('title', 'Pembelian')

@section('content')
<div class="row">
    <!-- Column -->
    <div class="col-sm-8">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Transaction</h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Total</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($tambah as $T)
                        <tr>
                            <td>{{$T->id}}</td>
                            <td>{{$T->Tanggal}}</td>
                            <td>{{$T->NamaBarang}}</td>
                            <td>{{$T->Jumlah}}</td>
                            <td>Rp{{$T->Harga}}</td>
                            <td>Rp{{$T->Harga*$T->Jumlah}}</td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <form action="{{ route('pembelian.destroy',$T->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="button1" type="submit" style="border: none; background-color:rgba(255, 0, 0, 0);"><i class="fas fa-trash-alt" style="color: red;"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Pembelian Barang</h3>
                <div class="card-body">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <br>
                    <form action="{{ route('pembelian.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="tambahbarang" style="font-size:12pt;">Nama Barang</label><br>
                            <input type="text" class="form-control" name="NamaBarang">
                        </div>
                        <div class="form-group">
                            <label for="tambahbarang" style="font-size:12pt;">Jumlah</label><br>
                            <input type="number" class="form-control" name="Jumlah">
                        </div>
                        <div class="form-group">
                            <label for="tambahbarang" style="font-size:12pt;">Harga</label><br>
                            <input type="number" class="form-control" name="Harga">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection