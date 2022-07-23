@extends('layouts.app-detail')

@section('title')
  Angkuy | Detail Angkot
@endsection

@section('content')
<!-- DETAIL -->
<main>
  <!-- header -->
  <section class="section-details-header"></section>

  <!-- konten -->
  <section class="section-details-content">
    <div class="container">
      <!-- card details -->
      <div class="row">
        <div class="col-lg-7 pl-lg-0">
          <div class="card card-details">
            <h1 class="font-weight-bold">{{ $angkot->nama }}</h1>
            <p>sdfsdf</p>
            <img src="{{ Storage::url($angkot->gambar) }}" />
            <h2 class="font-weight-bold">Deskripsi</h2>
            <p>{!! $angkot->deskripsi !!}</p>
            <iframe src="{{ $angkot->map }}" width="100%" height="400px"></iframe>
          </div>
        </div>

        <!-- side card -->
        <div class="col-lg-5">
          <div class="card card-details card-right">
            <h2>Informasi Terkait Angkot</h2>
            <table class="trip-informations">
              <tr>
                <th width="50%">Nomor Trayek</th>
                <td width="50%" class="text-right">{{ $angkot->nomor }}</td>
              </tr>
              <tr>
                <th width="50%">Jurusan</th>
                <td width="50%" class="text-right">{{ $angkot->jurusan }}</td>
              </tr>
              <tr>
                <th width="50%">Warna</th>
                <td width="50%" class="text-right">{{ $angkot->warna }}</td>
              </tr>
              <tr>
                <th width="50%">Tarif</th>
                <td width="50%" class="text-right">{{ $angkot->harga }}</td>
              </tr>
              <tr>
                <th width="50%">Waktu Operasional</th>
                <td width="50%" class="text-right">{{ $angkot->waktu }}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- AKHIR DETAIL -->
@endsection