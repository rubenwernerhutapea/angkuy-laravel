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
          Pariwisata di Daerah Istimewa Yogyakarta selalu meningkat setiap tahunnya. Yogya menjadi magnet wisatawan manca dan domestik untuk selalu kangen berlibur ke Yogyakarta. Ada banyak alasan mengapa wisatawan menghabiskan waktu
          liburan di Yogya (Biaya murah, Transportasi mudah, Kuliner enak dan murah, Surganya spot wisata alam, Wisata pantai, Budaya, Education, Sejarah dan masih banyak lagi) ditambah banyak sekali tempat-tempat wisata Yogya terbaru
          2021 yang sedang hits sekarang ini. <br />
          <br />
          Dengan begitu, Explore YOGYA mengajak traveler untuk mengunjungi beberapa tempat wisata yang berada di Yogyakarta. Are you ready to explore Yogyakarta?
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
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta neque laborum perspiciatis iusto optio itaque, earum tempora voluptatibus voluptas vero commodi totam sint molestias esse velit! Animi, commodi, vel, quas exercitationem delectus dolorem ad qui nisi placeat voluptas eveniet quaerat. Inventore perspiciatis quo temporibus iusto? Iste tempore quaerat labore tempora possimus. Laudantium obcaecati neque laborum, dolorem eum repellendus dignissimos exercitationem nam corrupti facere ea fugiat rem quo quisquam maiores perferendis nulla libero molestias temporibus nesciunt! Et corrupti explicabo similique, libero iure consectetur itaque commodi id, aspernatur debitis doloremque voluptatum ipsam, distinctio quis? Ex at illum sequi ratione dicta cum. Magni?</p>
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
            <p>This is some text within a card body.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-12 text-center">
        <div class="card m-2">
          <div class="card-body p-2">
            <img src="{{ url('/img/angkot-light-blue.png') }}" height="50" class="p-2"/>
            <p>This is some text within a card body.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-12 text-center">
        <div class="card m-2">
          <div class="card-body p-2">
            <img src="{{ url('/img/angkot-dark-blur.png') }}" height="50" class="p-2"/>
            <p>This is some text within a card body.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-12 text-center">
        <div class="card m-2">
          <div class="card-body p-2">
            <img src="{{ url('/img/angkot-pink.png') }}" height="50" class="p-2"/>
            <p>This is some text within a card body.</p>
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