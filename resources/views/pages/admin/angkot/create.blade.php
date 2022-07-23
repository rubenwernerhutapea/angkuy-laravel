@extends('layouts.admin')

@section('title')
  Admin Angkot
@endsection

@section('content')
  <!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb bg-white">
  <div class="row align-items-center">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h4 class="page-title">Angkot</h4>
    </div>
  </div>
</div>
<!-- End Bread crumb and right sidebar toggle -->

<!-- Container fluid  -->
<div class="container-fluid">
  <!-- Start Page Content -->
  <div class="row white-box">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('angkot.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">nama Angkot</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" name="nama" required/>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Pemilik</label>
        <div class="col-sm-10">
          <select name="user_id" class="form-control">
            @foreach ($user as $pemilik)
              <option value="{{ $pemilik->id }}">{{ $pemilik->name }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="nomor" class="col-sm-2 col-form-label">Nomor</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nomor" name="nomor" required/>
        </div>
      </div>

      <div class="form-group row">
        <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" name="gambar" id="gambar" required />
          <small id="gambar" class="form-text text-muted">*Format .JPG/.PNG</small>
        </div>
      </div>

      <div class="form-group row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="jurusan" name="jurusan" required/>
        </div>
      </div>

      <div class="form-group row">
        <label for="warna" class="col-sm-2 col-form-label">Warna</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="warna" name="warna" required/>
        </div>
      </div>

      <div class="form-group row">
        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="harga" name="harga" required/>
        </div>
      </div>

      <div class="form-group row">
        <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="waktu" name="waktu" required/>
        </div>
      </div>

      <div class="form-group row">
        <label for="deskripsi" class="col-sm-2 col-form-label pt-0">Deskripsi</label>
        <div class="col-sm-10">
          <textarea id="editor" name="deskripsi"></textarea>
          {{-- <div id="editor"></div> --}}
        </div>
      </div>

      <div class="form-group row">
        <label for="map" class="col-sm-2 col-form-label">Map</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="map" name="map" required/>
          <small id="map" class="form-text text-muted">*masukkan link gmaps</small>
        </div>
      </div>
      
      <div class="row">
        <button type="submit" class="btn btn-info col-sm-12">Simpan</button>
      </div>

    </form>
  </div>
  <!-- End PAge Content -->
  <!-- Right sidebar -->
  <!-- .right-sidebar -->
  <!-- End Right sidebar -->
</div>
<!-- End Container Fluid -->
@endsection

@push('addon-script')
  {{-- <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> --}}
  <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
  {{-- <script>
    CKEDITOR.replace('editor');
  </script> --}}
  <script>
      ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .catch( error => {
              console.error( error );
          } );
  </script>
@endpush