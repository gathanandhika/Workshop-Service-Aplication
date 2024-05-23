@extends('dashboard.layouts.main')

@section('container')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Tambah Data Sparepart</h1>
</div>

<div class="col-lg-8">
<form method="post" action="/dashboard/sparepart">
    @csrf
  <div class="mb-3">
    <label for="nama_barang" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" id="nama_barang" name="nama_barang">
  </div>
  <div class="mb-3">
    <label for="harga" class="form-label">Harga Barang</label>
    <input type="text" class="form-control" id="harga" name="harga">
  </div>

  <div class="mb-3">
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
  </div>

</div>
</main>

@endsection