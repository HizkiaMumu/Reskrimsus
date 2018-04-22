@extends('master-tipidkor')
@section('title', 'Struktur Organisasi | TIPIDKOR')
@section('meta')
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('style')
    <style>
        .get-oc-tb, .get-up{
            display: none;
        }
    </style>
@endsection
@section('content')
    <section class="section bg-video bg-home-full" id="home">
        <div class="bg-dark-overlay"></div>
        <a id="video" class="player" data-property="{videoURL:'https://youtu.be/GXM838nBLuw',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center text-white">
                                <img src="/images/logo.png" alt="Logo" id="logoLanding">
                                <h1 class="home-title mx-auto mt-4 title-atas">TINDAK PIDANA KORUPSI<br><b>POLDA KALIMANTAN TIMUR</b></h1>
                                <p class="home-subtitle mx-auto pt-2 sub-title-atas">Mewujudkan Kalimantan Timur WBK (Wilayah Bebas Korupsi)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="strukturOrganisasiChart"></div>
@endsection
@section('script')
    <script>
        $.ajax({
            method: 'GET',
            url: '/admin/struktur-organisasi/ajax/get-struktur-organisasi'
        }).done(function (data) {
            var orgchart = new getOrgChart(document.getElementById("strukturOrganisasiChart"), {
            enableEdit: false,
            enableZoom: false,
            enableMove: false,
            enableSearch: false,
            color: "neutralgrey",
            idField: "id",
            parentIdField: "parent_id",
            primaryFields: ["jabatan", "nama"],
            photoFields: ["link_gambar"],
            dataSource: data
            });
        });
    </script>
    <script>
        $(".player").mb_YTPlayer();
    </script>
@endsection
