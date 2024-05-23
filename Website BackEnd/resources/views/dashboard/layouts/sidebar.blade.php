<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse" >
      <div class="position-sticky pt-3 sidebar-sticky" >
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/users') ? 'active' : '' }}" href="/dashboard/users">
              <span data-feather="users" class="align-text-bottom"></span>
              Data Customer
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/book') ? 'active' : '' }}" href="/dashboard/book">
              <span data-feather="book-open" class="align-text-bottom"></span>
              Data Booking
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/sparepart') ? 'active' : '' }}" href="/dashboard/sparepart">
              <span data-feather="settings" class="align-text-bottom"></span>
              Data Sparepart
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/laporan') ? 'active' : '' }}" href="/dashboard/laporan">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Laporan Pembelian
            </a>
          </li>
        </ul>
      </div>
    </nav>
