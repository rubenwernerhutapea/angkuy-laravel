@extends('layouts.app')

@section('title')
  Angkuy | Naik Angkot Kuy!
@endsection

@section('content')
<!-- JUMBOTRON -->
<div class="jumbotron jumbotron-fluid main">
  <div class="container text-center">
    <div class="row mb-2">
      <div class="col text-center">
        <img src="{{ url('/img/jumbo-pict.png') }}" height="70" />
      </div>
    </div>
    <h1 class="display-1 font-weight-bold">ANGKUY</h1>
    <h4 class="font-italic">Naik Angkot, kuy!</h4>
  </div>
</div>
<!-- AKHIR JUMBOTRON -->

<!-- ABOUT -->
<section class="about" id="about">
  <div class="container py-5">
    <div class="row mt-3">
      <div class="col-md-4 text-center p-2">
        <img src="{{ url('/img/logo-color.png') }}" width="200"/>
      </div>
      <div class="col-md-8 pt-4">
        <h1 class="mb-4 font-weight-light">Tentang <span>Angkuy</span>...</h1>
        <hr>
        <p>
          Angkuy merupakan website informasi seputar angkot. Pengunjung dapat mengetahui berbagai rute angkot yang ada di Kota Bogor. Mulai dari tarif perjalanan, trayek apa saja, hingga peta perjalanan yang tersedia. <br />
          <br />
          Dengan begitu, Angkuy mengajak wisatawan untuk menggunakan angkot dalam perjalanannya di Kota Bogor. Are you ready to explore Bogor menggunakan Angkot?
        </p>
      </div>
    </div>
</section>
<!-- AKHIR ABOUT -->

<!-- SEJARAH -->
<div class="jumbotron jumbotron-fluid history py-4">
  <div class="container text-center my-5 py-0">
    <div class="row justify-content-center">
      <div class="col-md-7 text-center">
        <h1 class="mb-4 font-weight-light">Sejarah <span>Angkot</span> di Kota Bogor</h1>
        <hr>
        <p>Angkutan Kota atau yang biasa disebut angkot adalah transportasi umum jenis minibus dengan rute yang sudah ditentukan. Angkot sudah menjadi ciri khas dan identitas masyarakat Kota Bogor. Berbagai artikel menyebutkan bahwa Kota Bogor adalah kota sejuta angkot, tentunya artikel tersebut bukan ucapan jempol belaka karena faktanya pada tahun 2015 diperkirakan jumlah angkot di Kota Bogor mencapai 3412 unit. Angkot di Kota Bogor juga memiliki keunikan dan ciri khas dibandingkan angkot di kota lain, tidak hanya dibedakan dengan nomor trayek, tapi masing-masing trayek dibedakan dengan warna yang berbeda-beda pada bagian bawah/bumper mobil. </p>
      </div>
    </div>
  </div>
</div>
<!-- AKHIR SEJARAH -->

<!-- REASON -->
<section class="reason" id="reason">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-8 text-center">
        <h1 class="mb-4 font-weight-light">Kenapa Kita Harus Naik <span>Angkot</span> ?</h1>
        <hr>
      </div>

      <div class="col-md-6 col-sm-12 text-center">
        <div class="card m-2">
          <div class="card-body p-2">
            <img src="{{ url('/img/angkot-oren.png') }}" height="50" class="p-2"/>
            <p>Mengurangi polusi berlebihan dari kendaraan pribadi</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-12 text-center">
        <div class="card m-2">
          <div class="card-body p-2">
            <img src="{{ url('/img/angkot-light-blue.png') }}" height="50" class="p-2"/>
            <p>Lebih sehat karena menggunakan transportasi publik</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-12 text-center">
        <div class="card m-2">
          <div class="card-body p-2">
            <img src="{{ url('/img/angkot-dark-blur.png') }}" height="50" class="p-2"/>
            <p>Banyak pilihan rute untuk mengakomodir ke seluruh Kota Bogor</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-12 text-center">
        <div class="card m-2">
          <div class="card-body p-2">
            <img src="{{ url('/img/angkot-pink.png') }}" height="50" class="p-2"/>
            <p>Membantu melestarikan kebudayaan Kota Bogor</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- AKHIR REASON -->

<!-- BANNER -->
<div class="jumbotron jumbotron-fluid banner">
  <div class="container text-center">
    <h2 class="font-weight-bold text mt-2">Apakah kamu ingin mengelilingi Kota Bogor?</h2>
    <h3 class="font-italic text">Yuk, keliling Kota Bogor naik angkot!</h3>
    <a class="btn btn-dark btn-lg tombol my-4 mx-0" href="{{ route('angkot') }}" role="button">Cari Angkot</a>
  </div>
</div>
<!-- AKHIR BANNER -->
@endsection