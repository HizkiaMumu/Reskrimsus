@extends('master-tipidkor')
@section('title', 'HOME | TIPIDKOR')
@section('style')

@endsection
@section('content')

  <section class="section bg-video bg-home-full" id="home">
     <div class="bg-dark-overlay"></div>
     <a id="video" class="player" data-property="{videoURL:'https://youtu.be/QfURcwx91ug',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>
     <div class="home-center">
         <div class="home-desc-center">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="text-center text-white">
                             <img src="images/logo.png" alt="Logo" id="logoLanding">
                             <h1 class="home-title mx-auto mt-4 title-atas">TINDAK PIDANA KORUPSI<br><b>POLDA KALIMANTAN TIMUR</b></h1>
                             <p class="home-subtitle mx-auto pt-2 sub-title-atas">Bersama mewujudkan pelayanan penyelidikan dan penyidikan yang profesional, prosedural, proposional, transparan, akuntabel, dan dapat dipercaya masyarakat.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
  </section>

@endsection
@section('script')
  <script>
    $(".player").mb_YTPlayer();
  </script>
@endsection
