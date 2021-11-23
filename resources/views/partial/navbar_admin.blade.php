
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <img style="height:30px;" src="img/logo.png" alt="">
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title==="Admin") ? 'active' : '' }}" href="/admin">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title==="Customer") ? 'active' : '' }}" href="/cs_admin">Customer</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="/login" ><i class="bi bi-box-arrow-left"></i> Logout</a>
          </li>
        </ul>
        {{-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </nav>