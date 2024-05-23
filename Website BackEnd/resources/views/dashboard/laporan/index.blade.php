@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Laporan</h1>
  </div>
  <form action="{{ route('laporan.index') }}" method="GET">
    <div class="mb-1">
      <label for="tanggal" class="form-label">tanggal</label>
      <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal') ?? $tanggal }}">
    </div>
    <button type="submit" class="btn btn-primary">Tampilkan</button>
  </form>

  @if(session()->has('success'))
  <div class="alert alert-success " role="alert">
    {{ session ('success') }}
  </div>
  @endif

  <div class="table-responsive col-lg-12">
    {{-- <a href="/dashboard/laporan/create" class="btn btn-primary mb-3">Tambah Data laporan</a> --}}
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kendaraan</th>
                <th scope="col">Nomor Kendaraan</th>
                <th scope="col">Tanggal </th>
                <th scope="col">Sparepart </th>
                <th scope="col">Harga </th>
                <th scope="col">Jumlah </th>
                <th scope="col">Total </th>
              </tr>
            </thead>
            <tbody>

            @foreach ($books as $laporan)
            <tr>
                <td> {{ $loop->iteration }} </td>
                <td> {{ $laporan->nama }} </td>
                <td> {{ $laporan->jenis_kendaraan }} </td>
                <td> {{ $laporan->nomor_kendaraan }} </td>
                <td> {{ $laporan->tanggal }} </td>
                <td> {{ $laporan->sparepart }} </td>
                <td> {{ $laporan->harga }} </td>
                <td> {{ $laporan->jumlahbarang }} </td>
                <td> {{ $laporan->total_harga }} </td>
            </tr>
            @endforeach
            </tbody>
          </table>


          <button class="badge bg-dark border-0" onclick="return window.print()"> PRINT </button>

  </div>
</main>
@endsection