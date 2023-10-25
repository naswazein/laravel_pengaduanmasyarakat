<nav class="navbar navbar-expand-lg"style="background-color: #fbd0d9;">
  <div class="container-fluid">

    <a class="navbar-brand" href="#">Laporan Pengaduan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('isipengaduan')}}">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('tampilpengaduan')}}">Pengaduan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('isipetugas')}}">Isi petugas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('tampilpetugas')}}">Petugas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>