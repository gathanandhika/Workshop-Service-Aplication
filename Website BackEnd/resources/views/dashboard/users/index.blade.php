@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Data Users</h1>
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success " role="alert">
    {{ session ('success') }}
  </div>
  @endif

  <div class="table-responsive col-lg-12">
    <a href="/dashboard/users/create" class="btn btn-primary active mb-3">Tambah Data User</a>
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Alamat</th>
              </tr>
            </thead>
            <tbody>

            @foreach ($users as $user)
            <tr>
                <td> {{ $loop->iteration }} </td>
                <td> {{ $user->nama }} </td>
                <td> {{ $user->email }} </td>
                <td> {{ $user->no_hp }} </td>
                <td> {{ $user->alamat }} </td>
                <td>
                  <a href="/dashboard/users/{{ $user->id }} " class="badge bg-info"><span data-feather="eye"></span></a>
                  <a href="/dashboard/users/{{ $user->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                  <form action="/dashboard/users/{{ $user->id }} " method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure for delete data?')"><span data-feather="x-circle"></span></button>
                  </form>
                </td>
            </tr>
            @endforeach
            </tbody>
          </table>
  </div>
</main>
@endsection