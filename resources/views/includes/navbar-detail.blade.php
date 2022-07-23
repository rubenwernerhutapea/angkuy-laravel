<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="{{ url('/img/logo-dark.png') }}" width="30" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-sm-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="btn btn-outline-dark tombol my-1" href="{{ route('home') }}">Beranda</a>
        <a class="btn btn-outline-dark tombol my-1" href="{{ route('home') }}#about">Tentang</a>
        <a class="btn btn-dark tombol my-1" href="{{ route('angkot') }}">Angkot</a>
        @auth
        @if (Auth()->user()->roles == 'ADMIN')
        <li class="nav-item dropdown">
            <a
                href="#"
                class="btn btn-warning tombol"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
            >
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu">
                <a href="{{ route('admin-dashboard') }}" class="dropdown-item">Halaman Admin</a>
            </div>
        </li>
        @endif
      @endauth
      </div>
      
    </div>
  </div>
</nav>
<!-- AKHIR NAVBAR -->