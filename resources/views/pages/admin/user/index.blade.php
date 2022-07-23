@extends('layouts.admin')

@section('title')
  User Admin
@endsection

@section('content')
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb bg-white">
  <div class="row align-items-center">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h4 class="page-title">Daftar Admin</h4>
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
          <h3 class="box-title">Daftar Admin</h3>
          <a href="{{ route('user.create') }}" class="btn btn-primary">+ Tambah Admin</a>
        </div>

        <div class="table-responsive">
          <table class="table text-wrap" id="crudTable">
            <thead>
              <tr>
                <th width="10%" class="border-top-0">ID</th>
                <th width="20%" class="border-top-0">Nama</th>
                <th width="20%" class="border-top-0">Email</th>
                <th width="10%" class="border-top-0">Roles</th>
                <th width="10%" class="border-top-0">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1; ?>
              @foreach ($user as $lomb)
                <tr>
                  <td><?= $i; ?></td>
                  <td width="10%">{{ $lomb->name }}</td>
                  <td>{{ $lomb->email }}</td>
                  <td>{{ $lomb->roles }}</td>
                  <td>
                    <div class="btn-group">
                      <a href="{{ route('user.edit', $lomb->id) }}" class="btn btn-info btn-sm mr-2" style="padding: 0.375rem 0.75rem;font-size: 0.875rem;margin-right:3px">Edit</a>
                      <form action="{{ route('user.destroy', $lomb->id) }}" method="POST">
                        @method('delete')
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">hapus</button>
                      </form>
                    </div>
                  </td>
                </tr>
                <?php $i++; ?>
              @endforeach
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

{{-- @push('addon-script')
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
              { data: 'name', name: 'name' },
              { data: 'email', name: 'email' },
              { data: 'roles', name: 'roles' },
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
@endpush --}}