@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Data Booking</h1>
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success " role="alert">
    {{ session ('success') }}
  </div>
  @endif

  <div class="table-responsive col-lg-12">
    {{-- <a href="/dashboard/book/create" class="btn btn-primary mb-3">Tambah Data book</a> --}}
    <form action="{{ route('book.index') }}" method="GET">
      <div class="mb-1">
        <label for="tanggal" class="form-label">tanggal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal') ?? $tanggal }}">
      </div>
      <button type="submit" class="btn btn-primary">Tampilkan</button>
    </form>
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kendaraan</th>
                <th scope="col">Nomor Kendaraan</th>
                <th scope="col">Tanggal </th>
              </tr>
            </thead>
            <tbody>

            @foreach ($books as $book)
            <tr>
                <td> {{ $loop->iteration }} </td>
                <td> {{ $book->nama }} </td>
                <td> {{ $book->jenis_kendaraan }} </td>
                <td> {{ $book->nomor_kendaraan }} </td>
                <td> {{ $book->tanggal }} </td>
                <td>
                  <a href="/dashboard/book/{{ $book->id }} " class="badge bg-info"><span data-feather="eye"></span></a>
                  <a href="/dashboard/book/{{ $book->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                  <form action="/dashboard/book/{{ $book->id }} " method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    {{-- <button class="badge bg-danger border-0" onclick="return confirm('Are you sure for delete data?')"><span data-feather="x-circle"></span></button> --}}
                  </form>
                </td>
            </tr>
            @endforeach
            </tbody>
          </table>
  </div>
</main>
@endsection