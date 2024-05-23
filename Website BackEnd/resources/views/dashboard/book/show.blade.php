@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container">
            <div class="row justify-content-center my-5 ">
                <div class="col-lg-11">
                    <h1 class="mb-3">Nama: {{ $books->nama }} </h1>  
                    <p> No. Polisi: {{ $books->nomor_kendaraan }} </p> 
                    <p> Jenis kendaraan: {{ $books->jenis_kendaraan }} </p> 
                    <p> Tanggal: {{ $books->tanggal }} </p> 
                    <p> Jenis Sparepart: {{ $books->sparepart }} </p> 
                    <p> Jumlah: {{ $books->jumlahbarang }} </p> 
                    <p> Biaya: {{ $books->total_harga }} </p> 
                    {{-- <p> No. Polisi: {{ $booksings->nomor_kendaraan }} </p>  --}}
                    <a href="/dashboard/book" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali ke Daftar book</a>
                    <a href="/dashboard/book/{{ $books->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                    <form action="/dashboard/book/{{ $books->id }} " method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger " onclick="return confirm('Are you sure for delete data?')"><span data-feather="x-circle"></span>Delete</button>
                    </form>
    
    
                </div>
            </div>
        </div>
    </main>

@endsection