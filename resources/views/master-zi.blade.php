<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from t.commonsupport.com/sakai/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Apr 2018 10:41:48 GMT -->
<head>
<meta charset="utf-8">
<title>@yield('title') | Zona Integritas</title>
<!-- Stylesheets -->
<link href="/css/bootstrap.css" rel="stylesheet">
<link href="/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="/css/styleZi.css" rel="stylesheet">
<link href="/css/responsive.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.css" />


<link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
<link rel="icon" href="/images/favicon.png" type="image/x-icon">
@yield('style')
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="/js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header">

        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="/logo-polda/logo2.png" alt="" style="height: 40px; width: auto;"></a></div>
                    </div>
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                              <ul class="navigation clearfix">
                                <li><a href="/tipidkor/zona-integritas">HOME</a></li>
                                <li><a href="#aprb">APRB</a></li>
                                <li><a href="#" class="tombolWbs">WBS</a></li>
                              </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                    </div>
                    <!--Nav Outer End-->
            	</div>
            </div>
        </div>
    </header>
    <!--End Main Header -->

    @yield('content')

    <!--Main Footer-->
    <footer class="main-footer">
      <!--Footer Bottom-->
      <div class="footer-bottom">
      	<div class="auto-container">
          	<div class="copyright"> Copyright &copy; 2018 Rekayasa Production. All Rights Reserved.</div>
          </div>
      </div>
    </footer>
    <!--End Main Footer-->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<!-- Modal APRB -->

  <div id="modalAprb">

    <div style="padding: 15px;">

      <form action="/tipidkor/zona-integritas/wbs/tambah-wbs" method="POST" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="form-group">
          <label for="nama_pelapor"><b>Nama Pelapor</b></label>
          <input type="text" name="nama_pelapor" class="form-control" id="nama_pelapor" placeholder="Masukan nama pelapor" required>
        </div>

        <div class="form-group">
          <label for="email_pelapor"><b>Email</b></label>
          <input type="email" name="email_pelapor" class="form-control" id="email_pelapor" placeholder="Masukan email" required>
        </div>

        <div class="form-group">
          <label for="nomor_telepon"><b>No.Telp</b></label>
          <input type="number" name="nomor_telepon" class="form-control" id="nomor_telepon" placeholder="Masukan nomor telepon" required>
        </div>

        <div class="form-group">
          <label for="judul_laporan"><b>Judul Laporan</b></label>
          <input type="text" name="judul_laporan" class="form-control" id="judul_laporan" placeholder="Masukan judul laporan" required>
        </div>

        <div class="form-group">
          <label for="uraian_pengaduan"><b>Uraian Pengaduan</b></label>
          <textarea name="uraian_pengaduan" class="form-control" id="uraian_pengaduan" placeholder="Silahkan tuliskan uraian" rows="8" cols="80" required></textarea>
        </div>

        <div class="form-group">
          <label for="dugaan_korupsi"><b>Dugaan Korupsi yang ingin dilaporkan</b></label>
          <select class="form-control" name="dugaan_korupsi" id="dugaan_korupsi" required>
            <option disabled selected>Pilih kategori</option>
            <option value="Pengadaan Barang dan Jasa">Pengadaan Barang dan Jasa</option>
            <option value="Suap Menyuap">Suap Menyuap</option>
            <option value="Pemerasan atau Pungli">Pemerasan atau Pungli</option>
            <option value="Penggelapan Uang (Bendahara)">Penggelapan Uang (Bendahara)</option>
            <option value="Gratifikasi">Gratifikasi</option>
            <option value="BUMN/BUMD">BUMN/BUMD</option>
            <option value="Penyalahgunaan APBN/APBD">Penyalahgunaan APBN/APBD</option>
            <option value="Lainnya">Lainnya</option>
          </select>
        </div>

        <div class="form-group">
          <label for="nama_pihak_terlibat"><b>Nama Pihak yang terlibat</b></label>
          <input type="text" name="nama_pihak_terlibat" class="form-control" id="nama_pihak_terlibat" placeholder="Masukan nama pihak yang terlibat" required>
        </div>

        <div class="form-group">
          <label for="jabatan"><b>Jabatan</b></label>
          <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Masukan jabatan" required>
        </div>

        <div class="form-group">
          <label for="klasifikasi_jabatan"><b>Klasifikasi Jabatan</b></label>
          <select class="form-control" name="klasifikasi_jabatan" id="klasifikasi_jabatan" required>
            <option disabled selected>Pilih kategori</option>
            <option value="Anggota DPR/DPRD/DPD">Anggota DPR/DPRD/DPD</option>
            <option value="BUMN/BUMD">BUMN/BUMD</option>
            <option value="Kepala Daerah">Kepala Daerah</option>
            <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
            <option value="Penegak Hukum">Penegak Hukum</option>
            <option value="Penyelenggara Negara">Penyelenggara Negara</option>
            <option value="Swasta">Swasta</option>
            <option value="Lainnya">Lainnya</option>
          </select>
        </div>

        <div class="form-group">
          <label for="pihak_lain_terlibat"><b>Pihak Lain Yang Terlibat (optional)</b></label>
          <input type="text" name="pihak_lain_terlibat" class="form-control" id="pihak_lain_terlibat" placeholder="Masukan pihak lain yang terlibat">
        </div>

        <div class="form-group">
          <label for="lampiran_file_pendukung"><b>Lampiran (file data/dokumen pendukung)</b></label>
          <input type="file" name="lampiran_file_pendukung" class="form-control" id="lampiran_file_pendukung" placeholder="Pilih file" required>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block"><b>SUBMIT</b></button>
        </div>

      </form>

    </div>

  </div>

<!-- END Modal APRB -->

<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<!--Revolution Slider-->
<script src="/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="/js/main-slider-script.js"></script>
<!--End Revolution Slider-->
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/bxslider.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.js"></script>
@yield('script')
<script>

  $("#modalAprb").iziModal({
    title: "Buat Laporan Pengaduan",
    subtitle: "Silahkan lengkapi form dibawah ini.",
    fullscreen: true,
    headerColor: "#8A9DFC"
  });

  $(document).ready(function(){

    $(".tombolWbs").on("click", function(){
      $("#modalAprb").iziModal("open");
    });

  });

</script>
<!-- Mirrored from t.commonsupport.com/sakai/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Apr 2018 10:46:24 GMT -->
</html>
