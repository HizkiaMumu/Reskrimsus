@extends('master-dashboard')
@section('title', 'Kategori Berita')
@section('style')

  <style>

  </style>

@endsection
@section('content-header')

  <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">List Kategori</h3>
    <div class="row breadcrumbs-top d-inline-block">
      <div class="breadcrumb-wrapper col-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Berita</a>
          </li>
          <li class="breadcrumb-item active">
            Kategori
          </li>
        </ol>
      </div>
    </div>
  </div>

  <div class="content-header-right col-md-6 col-12 mb-2 breadcrumb-new" style="text-align: right !important;">
    <button type="button" name="button" class="btn btn-outline-info round" id="tombolTambahKategori">Tambah Kategori</button>
  </div>

@endsection
@section('content')

  <!-- MODAL -->

  <div class="modalKu" id="modalTambahKategori">

    <form action="" method="post" id="formKategori">

      {{ csrf_field() }}

      <div class="col-md-12 mt-1">
        <div class="form-group">
          <label for="judulKategori">Judul Kategori</label>
          <input type="text" name="kategori" class="form-control" id="judulKategori" placeholder="Masukan judul...">
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <button type="submit" class="btn btn-outline-info btn-block round">SUBMIT</button>
        </div>
      </div>

    </form>

  </div>

  <!-- END MODAL -->

  <div class="row">

    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title" id="basic-layout-form">Tabel list Kategori</h4>
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
            <table class="table" id="kategoriTable" width="100%">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>Kategori</th>
                  <th class="text-center" width="20%">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                @foreach($kategori as $item)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>
                      <a class="btn btn-outline-danger btn-sm" href="/admin/berita/kategori/hapus-kategori/{{ $item->id }}">
                        <i class="la la-trash"></i>
                      </a>
                      <a class="btn btn-outline-primary tombolEdit btn-sm">
                        <i class="la la-edit"></i>
                        <input type="hidden" value="{{ $item->id }}" class="idKategori">
                      </a>
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

@endsection
@section('script')

  <script>

    $('.menu-navigasi').removeClass('active');
    $('#kategoriBerita').addClass('active');
    $("#kategoriTable").DataTable();

    $("#modalTambahKategori").iziModal({
      title: "Tambah Kategori",
      subtitle: "Silahkan isi form dibawah untuk menambahkan kategori...",
      headerColor: "#1E9FF2"
    });

    $(document).ready(function(){

      $("#tombolTambahKategori").on("click", function(){
        $("#formKategori").attr("action", "/admin/berita/kategori/tambah-kategori");
        $("#judulKategori").val(""); // pastiin kosong dlu biar ga tabrakan valuenya
        $("#modalTambahKategori").iziModal("open");
      });

      $(".tombolEdit").on("click", function(){
        var idKategori = $(this).children(".idKategori").val();
        $.ajax({
          url: "/admin/berita/kategori/edit-kategori/" + idKategori,
          method: "GET"
        }).done(function(res){
          $("#formKategori").attr("action", "/admin/berita/kategori/edit-kategori/" + res.id);
          $("#judulKategori").val(""); // pastiin kosong dlu biar ga tabrakan valuenya
          $("#judulKategori").val(res.kategori); // baru isi sama value res dari ajax
          $("#modalTambahKategori").iziModal("open");
        });
      });

    });

  </script>

  @if(session('OK'))
    <script>
      toastr.success('{{ session("OK") }}', 'Success!');
    </script>
  @endif

@endsection
