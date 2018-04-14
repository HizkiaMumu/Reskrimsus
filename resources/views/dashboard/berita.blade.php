@extends('master-dashboard')
@section('title', 'Berita')
@section('style')

  <style>

  </style>

@endsection
@section('content-header')

  <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">List berita dari subdit <b>{{ Auth::user()->subdit }}</b></h3>
    <div class="row breadcrumbs-top d-inline-block">
      <div class="breadcrumb-wrapper col-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Subdit {{ Auth::user()->subdit }}</a>
          </li>
          <li class="breadcrumb-item active">
            Berita
          </li>
        </ol>
      </div>
    </div>
  </div>

@endsection
@section('content')

  <div class="row">

    @foreach($berita as $item)
      <div class="col-lg-4 col-md-12">
        <div class="card" style="">
          <div class="card-content">
            <img class="card-img-top img-fluid" src="../../../app-assets/images/carousel/25.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">{{ $item->title }}</h4>
              <p class="card-text">{{ str_replace('&nbsp;-', ' ', strip_tags(str_limit($item->isi, 100))) }}</p>
              <p class="card-text">Ditulis oleh <b>{{ $item->penulis }}</b></p>
            </div>
          </div>
          <div class="card-footer text-muted">
            <span class="float-left">

            </span>
            <span class="float-right">
              <div class="btn-group">
                <button type="button" class="btn btn-info btn">Tindakan</button>
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(60px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                  <a class="dropdown-item" href="/admin/berita/hapus-berita/{{ $item->id }}">
                    <i class="la la-trash"></i>
                    Hapus
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="/admin/berita/edit-berita/{{ $item->id }}" class="dropdown-item">
                    <i class="la la-edit"></i>
                    Edit
                  </a>
                </div>
              </div>
            </span>
          </div>
        </div>
      </div>
    @endforeach

  </div>

  <div class="row">
    
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3>List Berita dari subdit {{ Auth::user()->subdit }}</h3>
        </div>
        <div class="card-body">
          <table class="table" id="beritaTable" width="100%">
            <thead>
              <tr>
                <th width="5%">No</th>
                <th>Title</th>
                <th class="text-center" width="20%">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($berita as $item)
                <tr>
                  <td>{{ $no_berita++ }}</td>
                  <td>{{ $item->title }}</td>
                  <td class="text-center">
                    <a class="btn btn-outline-primary" href="/admin/berita/hapus-berita/{{ $item->id }}">
                      <i class="la la-trash"></i>
                    </a>
                    <a class="btn btn-outline-danger" href="/admin/berita/edit-berita/{{ $item->id }}">
                      <i class="la la-edit"></i>
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

  <!-- MODALS -->
    <div class="modal" id="modalBerita">
      <form class="form" action="" method="POST" id="formBerita">
        {{ csrf_field() }}
        <div class="form-body">
          <div class="form-group">
            <label for="title">Judul Artikel</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Masukan judul berita...">
          </div>
          <div class="form-group">
            <label for="isi">Isi Artikel</label>
            <textarea name="isi" class="form-control" id="isi" placeholder="Silahkan tulis artikel anda..." rows="8" cols="80"></textarea>
          </div>
        </div>
        <div class="form-actions">
          <button type="submit" class="btn btn-primary round btn-min-width btn-block">Submit</button>
        </div>
      </form>
    </div>
  <!-- END MODALS -->

@endsection
@section('script')

  <script>

    $(".menu-navigasi").removeClass("active");
    $("#listBerita").addClass("active");
    $("#modalBerita").hide();

    $(document).ready(function(){

    });

  </script>

  @if(session('OK'))
    <script>
      console.log("ok");
      toastr.success({{ session('OK') }}, 'Success!');
    </script>
  @endif

@endsection
