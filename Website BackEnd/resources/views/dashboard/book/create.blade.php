@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Tambah Data Booking</h1>
</div>

<div class="col-lg-8">
<form method="post" action="/dashboard/book">
    @csrf
  {{-- <div class="mb-3">
    <label for="id_barang" class="form-label">Sparepart</label>
    <select name="id_barang" class="form-label">
        <option value="">- Pilih Sparepart -</option>
        @foreach 
    </select>
    @error('id_barang')
      <div class="invalid-feedback"> {{ $message }} </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ old('email') }}">
    @error('email')
      <div class="invalid-feedback"> {{ $message }} </div>
    @enderror
  </div> --}}

  <div class="mb-3">
    <label for="id_user" class="form-label">Customer</label>
    {{-- <input type="text" class="form-control @error('id_user') is-invalid @enderror" id="id_user" name="id_user" value="{{ old('id_user', $item->id_user) }}">
     --}}
     <select name="id_user" class="form-control">
      <option value="">- Pilih Customer -</option>
      @foreach ($opsiuser as $item)
      <option value="{{ $item->id }}">{{ $item->nama }}</option>
      @endforeach
  </select>
    @error('id_user')
      <div class="invalid-feedback"> {{ $message }} </div>
    @enderror
  </div>

  {{-- <div class="mb-3">
    <label for="id_user" class="form-label">Customer ID</label>
    <input type="text" class="form-control @error('id_user') is-invalid @enderror" id="id_user" name="id_user">
    @error('id_user')
      <div class="invalid-feedback"> {{ $message }} </div>
    @enderror
  </div> --}}
  <div class="mb-3">
    <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
    <input type="text" class="form-control @error('jenis_kendaraan') is-invalid @enderror" id="jenis_kendaraan" name="jenis_kendaraan">
    @error('jenis_kendaraan')
      <div class="invalid-feedback"> {{ $message }} </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="nomor_kendaraan" class="form-label">Nomor Kendaraan</label>
    <input type="text" class="form-control @error('nomor_kendaraan') is-invalid @enderror" id="nomor_kendaraan" name="nomor_kendaraan" value="{{ old('nomor_kendaraan') }}">
    @error('nomor_kendaraan')
      <div class="invalid-feedback"> {{ $message }} </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="tanggal" class="form-label">tanggal</label>
    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal') }}">
    @error('tanggal')
      <div class="invalid-feedback"> {{ $message }} </div>
    @enderror
  </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </div>

</div>
</main>

@endsection