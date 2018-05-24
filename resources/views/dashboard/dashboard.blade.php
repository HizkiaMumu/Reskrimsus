@extends('master-dashboard')
@section('title', 'Home')
@section('style')

  <style>

  </style>

@endsection
@section('content-header')


@endsection
@section('content')

  <div class="row">

    <div class="col-xl-12 col-md-12 col-sm-12">
      <div class="card" style="">
        <div class="card-content">
          <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
            <iframe class="img-thumbnail" src="https://www.youtube.com/embed/RulaXLbNgWM?rel=0&amp;controls=1&amp;showinfo=0" allowfullscreen="true"></iframe>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection
@section('script')

  <script>

    $(".menu-navigasi").removeClass("active");
    $("#home").addClass("active");

    $(document).ready(function(){

    });

  </script>

@endsection
