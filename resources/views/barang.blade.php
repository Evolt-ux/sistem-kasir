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
                <a href="{{ route('barang.create') }}" class="btn btn-info mb-2 ms-2"><i class="fas fa-plus"></i> Tambah Barang</a>
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
                        @foreach($tambah as $T)
                        <tr>
                            <td>{{$T->id}}</td>
                            <td>{{$T->NamaBarang}}</td>
                            <td>{{$T->Jumlah}}</td>
                            <td>Rp{{$T->Harga}}</td>
                            <td>{{$T->Diskon}}</td>
                            <td>{{$T->Kadaluarsa}}</td>
                            <td><a href="{{ route('barang.edit',$T->id) }}"><i class="far fa-edit"></i></a>&nbsp;&nbsp;
                            <form action="{{ route('barang.destroy',$T->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type = "submit"><i class="fas fa-trash-alt" style="color: red"></i></button>
                            </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection