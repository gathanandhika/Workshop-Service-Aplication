@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Edit Data Sparepart</h1>
</div>

<div class="col-lg-8">
<form method="post" action="/dashboard/sparepart/{{ $barang->id }}">
  @method('put')
  @csrf
  <div class="mb-3">
    <label for="nama_barang" class="form-label">Nama barang</label>
    <input type="text" class="form-control  @error('nama_barang') is-invalid @enderror" id="nama_barang" name="nama_barang" required autofocus value="{{ old('nama_barang', $barang->nama_barang) }}">
    @error('nama_barang')
      <div class="invalid-feedback"> {{ $message }} </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="harga" class="form-label">Nama barang</label>
    <input type="text" class="form-control  @error('harga') is-invalid @enderror" id="harga" name="harga" required autofocus value="{{ old('harga', $barang->harga) }}">
    @error('harga')
      <div class="invalid-feedback"> {{ $message }} </div>
    @enderror
  </div>

  <div class="mb-3">
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
  </div>

</div>
</main>
@endsection