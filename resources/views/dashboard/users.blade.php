@extends('master-dashboard')
@section('title', 'Berita')
@section('style')

  <style>

  </style>

@endsection
@section('content-header')

  <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block text-capitalize">List Users</h3>
    <div class="row breadcrumbs-top d-inline-block">
      <div class="breadcrumb-wrapper col-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Ditreskrimsus</a>
          </li>
          <li class="breadcrumb-item active">
            List Ussers
          </li>
        </ol>
      </div>
    </div>
  </div>

  <div class="content-header-right col-md-6 col-12 mb-2 breadcrumb-new" style="text-align: right !important;">
    <button type="button" name="button" class="btn btn-outline-info round" id="tombolTambahUser">Tambah User</button>
  </div>

@endsection
@section('content')

  <div class="row">

    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title" id="basic-layout-form">Tabel list users</h4>
          <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
              <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
              <li><a data-action="close"><i class="ft-x"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="card-content collapse show">
          <div class="card-body">
            <table class="table" id="usersTable" width="100%">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Level</th>
                  <th class="text-center" width="20%">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $item)
                  <tr>
                    <td>{{ $no_users++ }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->level }}</td>
                    <td class="text-center">
                      <a class="btn btn-outline-danger" href="/admin/users/hapus-user/{{ $item->id }}">
                        <i class="la la-trash"></i>
                      </a>
                      <a class="btn btn-outline-primary editUser">
                        <i class="la la-edit"></i>
                      </a>
                      <input type="hidden" value="{{ $item->id }}">
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- MODALS -->
    <div class="iziModal" id="modalUser">
      <form class="form" action="" method="POST" id="formUser" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-body">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan nama..." required>
          </div>
          <div class="form-group">
            <label for="avatar">Avatar</label>
            <div class="custom-file">
              <input type="file" name="avatar" class="custom-file-input" id="avatar">
              <label class="custom-file-label" for="avatar">Choose file</label>
            </div>
          </div>
          <div class="form-group">
            <label for="bio">Bio</label>
            <textarea name="bio" class="form-control" id="bio" placeholder="Masukan bio..." rows="5"></textarea>
          </div>
          <div class="form-group">
            <label for="subdit">Subdit</label>
            <select name="subdit" class="form-control" id="subdit" required>
              <option value="indagsi">Subdit I (INDAGSI)</option>
              <option value="ppukdm">Subdit II (PPUKDM)</option>
              <option value="tipidkor">Subdit III (TIPIDKOR)</option>
              <option value="tipidter">Subdit IV (TIPIDTER)</option>
            </select>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Masukan email..." required>
          </div>
          <div class="form-group">
            <label for="level">Level</label>
            <select name="level" class="form-control" id="level" required>
              <option value="0">0 (ADMIN)</option>
              <option value="1">1 (INDAGSI)</option>
              <option value="2">2 (PPUKDM)</option>
              <option value="3">3 (TIPIDKOR)</option>
              <option value="4">4 (TIPIDTER)</option>
              <option value="5">5 (DITRESKRIMSUS)</option>
            </select>
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Masukan username..." required>
          </div>
          <div class="form-group" id="inputPassword">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Masukan pasword...">
          </div>
        </div>
        <div class="form-actions">
          <button type="submit" class="btn btn-primary round btn-min-width btn-block">Submit</button>
          <input type="reset" value="Reset" id="reset" style="display: none;">
        </div>
      </form>
    </div>
  <!-- END MODALS -->

@endsection
@section('script')

  <script>

    $('.menu-navigasi').removeClass('active');
    $('#listUsers').addClass('active');
    $('.iziModal').iziModal({
      fullscreen: true,
      title: 'Form User',
      padding: 15,
      zindex: 2000,
      headerColor: "#1E9FF2"
    })
    $(document).on('click', '#tombolTambahUser', function () {
      $('#reset').click();
      $('#formUser').attr('action', '/admin/users/tambah-user');
      $('#inputPassword').show();
      $('#password').attr('name', 'password');
      $('#modalUser').iziModal('open');
    });
    $(document).on('click', '.editUser', function(){
      var id = $(this).next().val();   
      $.ajax({
        method : 'GET',
        url: '/admin/users/edit-user/' + id,
      }).done(function (data) {
        $('#nama').val(data.nama);
        $('#bio').text(data.bio);
        $('#subdit option[value="'+ data.subdit +'"]').attr('selected', true);
        $('#email').val(data.email);
        $('#level option[value="'+ data.level +'"]').attr('selected', true);
        $('#username').val(data.username);
      });
      $('#inputPassword').hide();
      $('#password').attr('name', '');
      $('#formUser').attr('action', '/admin/users/update-user/' + id);
      $('#modalUser').iziModal('open');
    });
  </script>

  @if(session('OK'))
    <script>
      toastr.success('{{ session("OK") }}', 'Success!');
    </script>
  @endif

@endsection
