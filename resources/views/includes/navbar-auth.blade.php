<!-- NAVBAR -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="index.html">
      <img src="{{ url('/img/logo-dark.png') }}" width="30" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-sm-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="btn btn-outline-dark tombol my-1" href="{{ route('home') }}">Beranda</a>
        <a class="btn btn-outline-dark tombol my-1" href="{{ route('home') }}#about">Tentang</a>
        <a class="btn btn-outline-dark tombol my-1" href="{{ route('angkot') }}">Angkot</a>
      </div>
    </div>
  </div>
</nav>
<!-- AKHIR NAVBAR -->