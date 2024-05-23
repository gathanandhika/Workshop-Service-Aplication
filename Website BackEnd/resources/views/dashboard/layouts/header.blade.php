<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">PRIMCARS</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <h1 class="form-control form-control-dark rounded-15 border-0 text-center" style="width: 25%; height:45px; font-size:1.3rem ">ADMINISTRATOR PRIMCARS</h1>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <form action="/logout" method="post">
            @csrf 
            <button type="submit" class="nav-link px-3 bg-dark border-0">Logout <span data-feather="log-out"></span> </button>
        </form>
    </div>
  </div>
</header>


 