<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{Request::segment(1) == 'dashboard' ? 'active' : ''}}" aria-current="page" href="{{route('dashboard')}}">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Book Data</span>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link {{Request::segment(1) == 'book' ? 'active' : ''}}" href="{{route('book')}}">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Daftar Buku
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::segment(1) == 'add-book' ? 'active' : ''}}" href="{{route('add-book')}}">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Tambah Buku Baru
            </a>
          </li>
        </ul>
      </div>
</nav>