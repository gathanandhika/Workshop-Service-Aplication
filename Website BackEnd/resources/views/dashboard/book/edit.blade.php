@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Edit Data Booking</h1>
</div>

<div class="col-lg-8">
<form method="post" action="/dashboard/book/{{ $book->id }}">
  @method('put')
  @csrf
  <div class="mb-3">
    <p>Nama Customers: {{ $book->nama }}</p>
    <p>Jenis Kendaraan: {{ $book->jenis_kendaraan }}</p>
    <p>Noomor Kendaraan: {{ $book->nomor_kendaraan }}</p>
    <p>Tanggal Booking: {{ $book->tanggal }}</p>
  </div>
  <div class="mb-3">
    <label for="sparepart" class="form-label">Sparepart</label>
    <select name="sparepart" class="form-control @error('sparepart') is-invalid @enderror" id="sparepart" name="sparepart" value="{{ old('sparepart', $book->sparepart) }}">
    <option value="">- Pilih Sparepart -</option>
    @foreach ($barangs as $item)
    <option>{{ $item->nama_barang }}</option>
    @endforeach
  </select>
  @error('sparepart')
  <div class="invalid-feedback"> {{ $message }} </div>
  @enderror
  </div>
  <div class="mb-3">
    <label for="harga" class="form-label">harga</label>
    <select name="harga" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga', $book->harga) }}">
    <option value="">- Pilih harga -</option>
    @foreach ($barangs as $item)
    <option>{{ $item->harga }}</option>
    @endforeach
  </select>
  @error('harga')
  <div class="invalid-feedback"> {{ $message }} </div>
  @enderror
  </div>
  {{-- <div class="mb-3">
    <label for="harga" class="form-label">Harga Sparepart</label>
    <input type="text" class="form-control  @error('harga') is-invalid @enderror" id="harga" name="harga" autofocus value="{{ old('harga', $book->harga) }}">
    @error('harga')
      <div class="invalid-feedback"> {{ $message }} </div>
    @enderror
  </div> --}}
  <div class="mb-3">
    <label for="jumlahbarang" class="form-label">Jumlah Barang</label>
    <input type="text" class="form-control  @error('jumlahbarang') is-invalid @enderror" id="jumlahbarang" name="jumlahbarang" autofocus value="{{ old('jumlahbarang', $book->jumlahbarang) }}">
    @error('jumlahbarang')
      <div class="invalid-feedback"> {{ $message }} </div>
    @enderror
  </div>

  <div class="mb-3">
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
  </div>  

</div>
</main>
@endsection