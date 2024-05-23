@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container">
            <div class="row justify-content-center my-5 ">
                <div class="col-lg-11">
                    <h1 class="mb-3">Nama: {{ $barang->nama_barang }} </h1>  
                    <p> Harga: {{ $barang->harga }} </p> 
                    <a href="/dashboard/users" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali ke Daftar Users</a>
                    <a href="/dashboard/users/{{ $barang->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                    <form action="/dashboard/users/{{ $barang->id }} " method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger " onclick="return confirm('Are you sure for delete data?')"><span data-feather="x-circle"></span>Delete</button>
                    </form>
    
    
                </div>
            </div>
        </div>
    </main>

@endsection