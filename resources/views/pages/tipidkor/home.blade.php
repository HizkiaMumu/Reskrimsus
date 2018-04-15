@extends('master-tipidkor')
@section('title', 'HOME | TIPIDKOR')
@section('meta')
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('style')

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
                             <img src="images/logo.png" alt="Logo" id="logoLanding">
                             <h1 class="home-title mx-auto mt-4 title-atas">TINDAK PIDANA KORUPSI<br><b>POLDA KALIMANTAN TIMUR</b></h1>
                             <p class="home-subtitle mx-auto pt-2 sub-title-atas">Mewujudkan Kalimantan Timur WBK (Wilayah Bebas Korupsi)</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
  </section>

  <section class="section bg-light" id="features">
    <div class="container">
      <div class="row pt-5 mt-2 vertical-content">
        <div class="col-lg-5">
          <div class="features-content">
            <div class="features-title">
              <h5>TINDAK PIDANA KORUPSI <br> POLDA KALIMANTAN TIMUR</h5>
              <p class="mt-3 text-muted">
                Subdit III Tipidkor adalah salah satu bagian/sub dari Ditreskrimsus yang bertugas melakukan penyelidikan dan penyidikan tindak pidana Perbankan yang terjadi di daerah hukum Polda.
                <br><br>
                Subdit III Tipidkor menyelenggarakan fungsi :
              </p>
            </div>

            <div class="features-desc">
              <div class="features-desc-icon mb-2">
                <i class="mdi mdi-arrow-right text-custom mr-3"></i>
                <p class="text-muted">Penyelidikan dan penyidikan Tindak Pidana Korupsi yang terjadi di daerah hukum Polda</p>
              </div>

              <div class="features-desc-icon mb-2">
                <i class="mdi mdi-arrow-right text-custom mr-3"></i>
                <p class="text-muted">Pemberkasan dan penyelesaian berkas perkara sesuai dengan ketentuan administrasi penyelidikan dan penyidikan Tindak Pidana Korupsi.</p>
              </div>

              <div class="features-desc-icon mb-2">
                <i class="mdi mdi-arrow-right text-custom mr-3"></i>
                <p class="text-muted">Penerapan manajemen anggaran, serta manajemen penyelidikan dan penyidikan Tindak Pidana Korupsi.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 offset-lg-1">
          <div class="Features-img">
            <img src="images/features-1.png" alt="" class="img-fluid mx-auto d-block">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title text-center mx-auto">
            <div class="section-title-icon">
              <i class="pe-7s-star text-custom"></i>
            </div>
            <h5>Unit</h5>
            <p class="mt-3 text-muted">Dalam melaksanakan tugasnya, Subdit III Tipidkor dibantu oleh sejumlah unit yang bertugas membantu pelaksanaan tugas dan fungsinya.</p>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-3">
          <div class="services-box text-center mt-2 p-3">
            <div class="services-icon text-custom mb-3">
              <i class="pe-7s-culture"></i>
            </div>
            <div class="services-desc">
              <h4 class="">Unit I</h4>
              <p class="text-muted  pt-2">Dana Usaha Negara dan Dana Pemerintah</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="services-box text-center mt-2 p-3">
            <div class="services-icon text-custom mb-3">
              <i class="pe-7s-cash"></i>
            </div>
            <div class="services-desc">
              <h4 class="">Unit II</h4>
              <p class="text-muted  pt-2">Dana Kredit Usaha</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="services-box text-center mt-2 p-3">
            <div class="services-icon text-custom mb-3">
              <i class="pe-7s-piggy"></i>
            </div>
            <div class="services-desc">
              <h4 class="">Unit III</h4>
              <p class="text-muted  pt-2">Dana Bantuan</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="services-box text-center mt-2 p-3">
            <div class="services-icon text-custom mb-3">
              <i class="pe-7s-tools"></i>
            </div>
            <div class="services-desc">
              <h4 class="">Unit IV</h4>
              <p class="text-muted  pt-2">Dana Pembangunan dan Proyek</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="contact">
    <div class="container">
      <div class="col-lg-12">
        <div class="section-title text-center mx-auto">
          <div class="section-title-icon">
            <i class="pe-7s-headphones text-custom"></i>
          </div>
          <h5>Kontak Kami</h5>
          <p class="mt-3 text-muted">Jika ada sesuatu yang ingin ditanyakan, silahkan hubungi kami melalui kontak dibawah ini.</p>
        </div>
      </div>

      <div class="row vertical-content mt-5">
        <div class="col-lg-4">
          <div class="contact-info mb-5">
            <i class="pe-7s-phone mr-3 "></i>
            <p class=""> <span class="contact-heading"> Nomor Telepon </span>:<br> <span class="mt-2">0812-1801-6162</span></p>
          </div>

          <div class="contact-info mb-5">
            <i class="pe-7s-map-marker mr-3"></i>
            <p class=""> <span class="contact-heading"> Alamat Kantor </span>:<br> <span class="mt-2">JL.Inpres 1 RT.24 NO.10, Balikpapan</span></p>
          </div>

          <div class="contact-info mb-5">
            <i class=" pe-7s-mail-open mr-3"></i>
            <p class=""> <span class="contact-heading"> Email Address </span> :<br> <span class="mt-2">emailsaya@gmail.com</span></p>
          </div>
        </div>

        <div class="col-lg-8">
          <div class="custom-form mt-4">
            <div id="message"></div>
            <form method="POST" action="/kirim-email" name="contact-form" id="contact-form">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input name="name" id="nameSupportEmailForm" type="text" class="form-control" placeholder="Your name...">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input name="email" id="emailSupportEmailForm" type="email" class="form-control" placeholder="Your email...">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input name="subject" id="subjectSupportEmailForm" type="text" class="form-control" placeholder="Your subject...">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea name="message" id="messageSupportEmailForm" rows="4" class="form-control" placeholder="Your message..."></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <input type="submit" id="tombolKirimEmail" name="send" class="submitBnt btn btn-custom" value="Send Message">
                  <div id="simple-msg"></div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
@section('script')
  <script src="js/kirimEmail.js"></script>
  <script>
    $(".player").mb_YTPlayer();
  </script>
@endsection
