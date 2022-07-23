@extends('layouts.admin')

@section('title')
  User Admin
@endsection

@section('content')
  <!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb bg-white">
  <div class="row align-items-center">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h4 class="page-title">Edit Admin</h4>
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
    <form action="{{ route('user.update', $item->id) }}" method="POST" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}" required/>
        </div>
      </div>

      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="email" name="email" value="{{ $item->email }}" required/>
        </div>
      </div>

      <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="password" name="password" />
          <small class="form-text text-muted">*Kosongkan jika tidak ingin mengganti password</small>
        </div>
      </div>

      <div class="form-group row">
        <label for="roles" class="col-sm-2 col-form-label">Roles</label>
        <div class="col-sm-10">
          <select class="form-select" name="roles" id="roles" required>
            <option value="{{ $item->roles }}" selected>Tidak diganti</option>
            <option value="ADMIN">Admin</option>
          </select>
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