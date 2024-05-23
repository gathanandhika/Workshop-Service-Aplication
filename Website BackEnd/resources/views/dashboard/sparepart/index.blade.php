@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <h2 class="mt-3">Daftar Sparepart yang Tersedia </h2>
  <div class="table-responsive">
    <a href="/dashboard/sparepart/create" class="btn btn-primary mb-3">Tambah Data Sparepart</a>
    <table class="table table-striped table-sm table-hover">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Harga</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($barangs as $barang)
        <tr>
            <td> {{ $loop->iteration }} </td>
            <td> {{ $barang->nama_barang }} </td>
            <td>Rp. {{ $barang->harga }} </td>
            <td>
              {{-- <a href="/dashboard/sparepart/{{ $barang->id }} " class="badge bg-info"><span data-feather="eye"></span></a> --}}
              <a href="/dashboard/sparepart/{{ $barang->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="/dashboard/sparepart/{{ $barang->id }} " method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure for delete data?')"><span data-feather="x-circle"></span></button>
              </form>
            </td>
        </tr>
        @endforeach
    </tbody>
      </tbody>
    </table>
  </div>
</main>
@endsection