@extends('layout.layout')
@section('title', 'Barang')
@section('content')
<!-- search barang end -->
<div class="row">
  <!-- Column -->
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Tambah Barang</h3>
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
          <form action="{{ route('barang.store') }}" method="POST">
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
            <div class="form-group">
              <label for="tambahbarang" style="font-size:12pt;">Kadaluarsa</label><br>
              <input type="date" class="form-control" name="Kadaluarsa">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{url('/barang')}}" class="btn btn-info">Batal</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection