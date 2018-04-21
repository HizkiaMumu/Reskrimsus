@extends('master-dashboard')
@section('title', 'HTCK')
@section('style')

  <style>

  </style>

@endsection
@section('content-header')

  <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">List HTCK dari subdit <b>{{ Auth::user()->subdit }}</b></h3>
    <div class="row breadcrumbs-top d-inline-block">
      <div class="breadcrumb-wrapper col-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Subdit {{ Auth::user()->subdit }}</a>
          </li>
          <li class="breadcrumb-item active">
            HTCK
          </li>
        </ol>
      </div>
    </div>
  </div>

  <div class="content-header-right col-md-6 col-12 mb-2 breadcrumb-new" style="text-align: right !important;">
    <button type="button" name="button" class="btn btn-outline-info round" id="tombolTambahHtck">Upload HTCK</button>
    <form action="/admin/htck/tambah-htck" method="POST" enctype="multipart/form-data" style="display: none !important;" id="formHTCK">
      {{ csrf_field() }}
      <input type="file" name="htck" id="inputHtck" accept="application/msword,application/pdf">
      <button type="submit" id="tombolSubmitHtck">Upload</button>
    </form>
  </div>

@endsection
@section('content')

  <div class="row">

    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title" id="basic-layout-form">Tabel list HTCK dari subdit {{ Auth::user()->subdit }}</h4>
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
            <div class="col-md-12">
              <div class="alert bg-primary alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
                <span class="alert-icon"><i class="la la-info-circle"></i></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <strong>Info, </strong> HTCK <u>terbarulah</u> yang akan di tampilkan di <b>website</b>.
              </div>
            </div>
            <table class="table table-responsive" id="htckTable" width="100%">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>Path</th>
                  <th>Nama File (enkripsi untuk alasan keamanan)</th>
                  <th>Tanggal Upload</th>
                  <th class="text-center" width="20%">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($htck as $item)
                  <tr>
                    <td>{{ $no_htck++ }}</td>
                    <td>{{ $item->path }}</td>
                    <td>{{ $item->filename }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td class="text-center">
                      <a class="btn btn-outline-danger" href="/admin/htck/hapus-htck/{{ $item->id }}">
                        <i class="la la-trash"></i>
                      </a>
                      <a class="btn btn-outline-info" href="/admin/htck/lihat-htck/{{ $item->filename }}">
                        <i class="la la-file-text"></i>
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
    $('#htck').addClass('active');

    var htckTable = $("#htckTable").DataTable();

    $(document).ready(function(){

      $("#tombolTambahHtck").on("click", function(){
        $("#inputHtck").click();
      });

      $("#inputHtck").on("change", function(){
        $("#tombolSubmitHtck").click();
      });

    });

  </script>

  @if(session('OK'))
    <script>
      toastr.success('{{ session("OK") }}', 'Success!');
    </script>
  @elseif(session('ERR'))
    <script>
      toastr.danger('{{ session("ERR") }}', 'Failed!');
    </script>
  @endif

@endsection
