@extends('layout.main')

@section ('container')

<div class="row justify-content-center">
  <div class="col-lg-6">

    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
      </div>
    @endif  

    <br><br><br><br>
    <h1 class="text-center">PRIMCARS ADMISITRATOR</h1>
    <main class="form-signin w-100 m-auto">
      <form action="/login" method="post">
        @csrf
        <h3 class="h3 mb-5 fw-normal text-center">Login</h3>
    
        <div class="form-floating mb-2">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}" >
            <label for="email">Email</label>
            @error('email')
              <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>

        </div>
        <button class="w-100 mt-3 btn btn-lg btn-primary" type="submit">Login</button>
      </form>
    </main>
  </div>
</div>


@endsection