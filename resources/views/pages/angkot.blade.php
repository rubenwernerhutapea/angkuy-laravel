@extends('layouts.app-angkot')

@section('title')
  Angkuy | Cari Angkotmu
@endsection

@section('content')
<!-- JUMBOTRON -->
<div class="jumbotron jumbotron-fluid jumbotron-angkot">
  <div class="container text-center">
    <h1 class="display-4 font-weight-bold">Hello, Warga Kota Bogor!</h1>
    <h4 class="pb-3">Hari ini mau naik <span>angkot</span> kemana nih?</h4>
    <hr />
  </div>
</div>
<!-- AKHIR JUMBOTRON -->

<!-- ANGKOT -->
<section class="angkot mb-4" id="angkot">
  <div class="container">
    <div class="row justify-content-center">
      @forelse ($angkot as $angkt)
        <div class="col-lg-3 col-lg-3 col-md-4 mb-3">
          <div class="card h-100">
            <img class="card-img-top" style="background-image: url('{{ Storage::url($angkt->gambar) }}')"/>
            <div class="card-body pb-0">
              <h5 class="font-weight-bold">{{ $angkt->nama }}</h5>
              <p class="mb-2">{{ $angkt->jurusan }}</p>
            </div>
            <div class="card-footer pt-0 pb-4">
              <a href="{{ route('detail', $angkt->slug) }}" class="btn btn-dark btn-sm font-weight-bold rounded-pill">Info Selengkapnya <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      @empty
          <div class="col-12 text-center-py-5">
            Tidak ada angkot tersedia
          </div>
      @endforelse
    </div>
    <div class="row">
      <div class="col-12 mt-4">
        {{ $angkot->links() }}
      </div>
    </div>
  </div>
</section>
<!-- AKHIR ANGKOT -->
@endsection