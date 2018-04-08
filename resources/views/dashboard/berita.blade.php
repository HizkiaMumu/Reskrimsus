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
            <a href="index.html">{{ Auth::user()->subdit }}</a>
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
    <div class="col-lg-4 col-md-12">
      <div class="card" style="">
        <div class="card-content">
          <img class="card-img-top img-fluid" src="../../../app-assets/images/carousel/25.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Smart Wearable</h4>
            <p class="card-text">Oat cake ice cream candy chocolate cake chocolate cake cotton
              candy.
            </p>
          </div>
        </div>
        <div class="card-footer text-muted">
          <span class="float-left">$349</span>
          <span class="float-right">Add To Cart <i class="la la-cart-plus"></i></span>
        </div>
      </div>
    </div>
  </div>

@endsection
@section('script')

  <script>

    $(".menu-navigasi").removeClass("active");
    $("#listBerita").addClass("active");

    $(document).ready(function(){
      
    });

  </script>

@endsection
