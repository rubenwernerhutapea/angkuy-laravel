@extends('layouts.admin')

@section('title')
  Data angkot
@endsection

@section('content')
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb bg-white">
  <div class="row align-items-center">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h4 class="page-title">Daftar Angkot</h4>
    </div>
  </div>
</div>
<!-- End Bread crumb and right sidebar toggle -->

<!-- Container fluid  -->
<div class="container-fluid">
  <!-- Start Page Content -->
  <div class="row">
    <div class="col-sm-12">
      <div class="white-box">
        <div class="d-flex justify-content-between mb-3">
          <h3 class="box-title">Daftar Angkot</h3>
          <a href="{{ route('angkot.create') }}" class="btn btn-primary">+ Tambah Angkot</a>
        </div>

        <div class="table-responsive">
          <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
            <thead>
              <tr>
                <th width="10%" class="border-top-0">ID</th>
                <th width="20%" class="border-top-0">Nama</th>
                <th width="20%" class="border-top-0">Pemilik</th>
                <th width="20%" class="border-top-0">Nomor</th>
                <th width="10%" class="border-top-0">Gambar</th>
                <th width="10%" class="border-top-0">Jurusan</th>
                <th width="10%" class="border-top-0">Warna</th>
                <th width="10%" class="border-top-0">Harga</th>
                <th width="10%" class="border-top-0">Waktu</th>
                {{-- <th width="10%" class="border-top-0">Deskripsi</th> --}}
                <th width="10%" class="border-top-0">Map</th>
                <th width="10%" class="border-top-0">Aksi</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Content -->
</div>
<!-- End Container Fluid -->
@endsection

@push('addon-script')
  <script>
      // AJAX DataTable
      var datatable = $('#crudTable').DataTable({
          processing: true,
          serverSide: true,
          ordering: true,
          ajax: {
              url: '{!! url()->current() !!}',
          },
          columns: [
              { data: 'id', name: 'id' },
              { data: 'nama', name: 'nama' },
              { data: 'user.name', name: 'user.name' },
              { data: 'nomor', name: 'nomor' },
              { data: 'gambar', name: 'gambar' },
              { data: 'jurusan', name: 'jurusan' },
              { data: 'warna', name: 'warna' },
              { data: 'harga', name: 'harga' },
              { data: 'waktu', name: 'waktu' },
              { data: 'map', name: 'map' },
              {
                  data: 'action',
                  name: 'action',
                  orderable: false,
                  searcable: false,
                  width: '15%'
              },
          ]
      });
  </script>
@endpush