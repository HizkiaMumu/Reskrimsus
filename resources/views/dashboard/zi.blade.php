@extends('master-dashboard')
@section('title', 'Zona Integritas')
@section('style')

  <style>

  </style>

@endsection
@section('content-header')

  <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">Zona Integritas</h3>
    <div class="row breadcrumbs-top d-inline-block">
      <div class="breadcrumb-wrapper col-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">DITRESKRIMSUS</a>
          </li>
          <li class="breadcrumb-item active">
            TIPIDKOR
          </li>
        </ol>
      </div>
    </div>
  </div>

  <div class="content-header-right col-md-6 col-12 mb-2 breadcrumb-new" style="text-align: right !important;">
    <button type="button" name="button" class="btn btn-outline-info round" id="tombolTambahAprb">Tambah APRB</button>
  </div>

@endsection
@section('content')

  <!-- Modal -->
  <div id="modalAprb" style="display: none;">

    <div class="p-1">

      <form action="" method="POST" enctype="multipart/form-data" id="formTambahAprb">

        {{ csrf_field() }}

        <div class="form-group">
          <label for="title"><b>Title</b></label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Masukan title">
        </div>

        <div class="form-group">
          <label for="icon"><b>Icon</b></label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01 icon" name="icon" accept="image/*">
            <label class="custom-file-label" for="inputGroupFile01">Pilih icon...</label>
          </div>
        </div>

        <div class="form-group">
          <label for="description"><b>Description</b></label>
          <textarea name="description" rows="8" cols="80" class="form-control" id="description" placeholder="Masukan deskripsi"></textarea>
        </div>

        <div class="form-group">
          <label for="content"><b>Content</b></label>
          <textarea name="content" rows="8" cols="80" class="form-control" id="content" placeholder="Masukan content"></textarea>
        </div>

        <div class="form-actions">
          <button type="submit" class="btn btn-outline-primary btn-glow btn-block round">Submit</button>
          <input type="reset" id="tombolResetAprb" style="display: none;">
        </div>

    </div>

  </div>
  <!-- End Modal -->

  <div class="row">

    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title" id="basic-layout-form">Tabel list APRB</h4>
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
            <table class="table" id="aprbTable" width="100%">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $nomor = 1; ?>
                @foreach($aprb as $item)
                  <tr>
                    <td>{{ $nomor++ }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                      <button type="button" class="btn btn-outline-info round tombolEditAprb">
                        <i class="la la-edit"></i>
                        <input type="hidden" class="aprbId" value="{{ $item->id }}">
                      </button>
                      <a href="/admin/zi/aprb/delete-aprb/{{ $item->id }}">
                        <button type="button" class="btn btn-outline-danger round">
                          <i class="la la-trash-o"></i>
                        </button>
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

  <div class="row">

    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title" id="basic-layout-form">Tabel list Laporan WBS</h4>
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
            <table class="table table-responsive" id="wbsTable" width="100%">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>Nama Pelapor</th>
                  <th>Email Pelapor</th>
                  <th>Nomor Telepon</th>
                  <th>Judul Laporan</th>
                  <th>Uraian Pengaduan</th>
                  <th>Dugaan Korupsi</th>
                  <th>Nama Pihak Yang Terlibat</th>
                  <th>Jabatan</th>
                  <th>Klasifikasi Jabatan</th>
                  <th>Pihak Lain Yang Terlibat</th>
                  <th>Lampiran File Pendukung</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $nomor = 1; ?>
                @foreach($wbs as $item)
                  <tr>
                    <td>{{ $nomor++ }}</td>
                    <td>{{ $item->nama_pelapor }}</td>
                    <td>{{ $item->email_pelapor }}</td>
                    <td>{{ $item->nomor_telepon }}</td>
                    <td>{{ $item->judul_laporan }}</td>
                    <td>{{ str_limit($item->uraian_pengaduan, 25) }}</td>
                    <td>{{ $item->dugaan_korupsi }}</td>
                    <td>{{ $item->nama_pihak_terlibat }}</td>
                    <td>{{ $item->jabatan }}</td>
                    <td>{{ $item->klasifikasi_jabatan }}</td>
                    <td>{{ $item->pihak_lain_terlibat }}</td>
                    <td>
                      <a href="{{ $item->lampiran_file_pendukung }}">
                        <button type="button" class="btn btn-outline-info round">
                          <i class="la la-eye"></i> Lihat File
                        </button>
                      </a>
                    </td>
                    <td>
                      <a href="/admin/zi/wbs/hapus-wbs/{{ $item->id }}">
                        <button type="button" class="btn btn-outline-danger round">
                          <i class="la la-trash-o"></i> Hapus Laporan
                        </button>
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
    $('#zonaIntegritas').addClass('active');

    $("#wbsTable").DataTable();
    $("#aprbTable").DataTable();

    var token = $('meta[name="_token"]').attr('content');

    var options = {
      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&responseType=json&_token=' + token,
      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=' + token
    };

    $("#modalAprb").iziModal({
      title: "FORM AREA PERUBAHAN REFORMASI BIROKRASI",
      subtitle: "Silahkan lengkapi form dibawah ini.",
      fullscreen: true,
      zindex: 2000,
      headerColor: "#1E9FF2"
    });

    $(document).ready(function(){

      $("#tombolTambahAprb").on("click", function(){
        $("#tombolResetAprb").click();
        $("#modalAprb").iziModal("open");
        $("#formTambahAprb").attr("action", "/admin/zi/aprb/tambah-aprb");
        CKEDITOR.replace('content', options);
      });

      $(".tombolEditAprb").on("click", function(){

        var aprbId = $(this).children(".aprbId").val();
        $.ajax({
          url: "/admin/zi/aprb/detail-aprb/" + aprbId,
          method: "GET"
        }).done(function(res){

          $("#tombolResetAprb").click();
          $("#formTambahAprb").attr("action", "/admin/zi/aprb/edit-aprb/" + res.id);

          $("#title").val(res.title);
          $("#description").val(res.description);

          if ($("#content").hasClass("alreadyCKE")) {
            CKEDITOR.instances['content'].setData(res.content);
          } else {
            $("#content").addClass("alreadyCKE");
            $("#content").val(res.content);
            CKEDITOR.replace('content', options);
          }

          $("#modalAprb").iziModal("open");

        });

      })

    });

  </script>

  @if(session('OK'))
    <script>
      toastr.success('{{ session("OK") }}', 'Success!');
    </script>
  @endif

@endsection
