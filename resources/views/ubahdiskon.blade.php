@extends('layout.layout')
@section('title')
@section('content')
<!-- search diskon end -->
<div class="row">
  <!-- Column -->
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Update Diskon</h3>
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
          <form action="" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="ubahdiskon" style="font-size:12pt;">Awal</label><br>
              <input type="date" class="form-control" value="{{$home->Awal}}" name="Awal">
            </div>
            <div class="form-group">
              <label for="ubahdiskon" style="font-size:12pt;">Akhir</label><br>
              <input type="date" class="form-control" value="{{$home->Akhir}}" name="Akhir">
            </div>
            <div class="form-group">
              <label for="ubahdiskon" style="font-size:12pt;">Nama Barang</label><br>
              <input type="text" class="form-control" value="{{$home->NamaBarang}}" name="NamaBarang">
            </div>
            <div class="form-group">
              <label for="ubahdiskon" value="$home->NamaBarang" style="font-size:12pt;">Diskon</label><br>
              <input type="number" class="form-control" value="{{$home->Diskon}}" name="Diskon">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{url('/')}}" class="btn btn-info">Batal</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection