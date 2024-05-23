@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Tambah Data Customers</h1>
</div>

<div class="col-lg-8">
<form method="post" action="/dashboard/users">
    @csrf
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control  @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama') }}">
    @error('nama')
      <div class="invalid-feedback"> {{ $message }} </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ old('email') }}">
    @error('email')
      <div class="invalid-feedback"> {{ $message }} </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
    @error('password')
      <div class="invalid-feedback"> {{ $message }} </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="no_hp" class="form-label">Nomor Telepon</label>
    <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp">
    @error('no_hp')
      <div class="invalid-feedback"> {{ $message }} </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}">
    @error('alamat')
      <div class="invalid-feedback"> {{ $message }} </div>
    @enderror
  </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </div>

</div>
</main>

@endsection