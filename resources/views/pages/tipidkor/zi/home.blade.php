@extends('master-zi')
@section('title', 'TIPIDKOR | ZONA INTEGRITAS')
@section('content')
<div class="preloader"><div class="status">&nbsp;</div></div>

<div id="mobilebgfix">
	<div class="mobile-bg-fix-img-wrap">
		<div class="mobile-bg-fix-img"></div>
	</div>
	<div class="mobile-bg-fix-whole-site">


<header id="home" class="header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">


	<div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">

		<div class="container">

<center><a href="#" ><img src="/wp-content/uploads/2017/07/Logo-DIREKTORAT-u6.png" alt="Zona Integritas"></a></center>

			<!-- div class="navbar-header responsive-logo">

<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">

				<span class="sr-only">Toggle navigation</span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				</button>

				<a href="http://zi.tipidkorpolri.info/" class="navbar-brand"><img src="/http://zi.tipidkorpolri.info/wp-content/uploads/2017/07/LOGO-DIREKTORAT-TIPIDKOR-u1.png" alt="Zona Integritas"></a>
			</div -->

		<!--	 	<nav class="navbar-collapse bs-navbar-collapse collapse" id="site-navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
		<a class="screen-reader-text skip-link" href="#content">Skip to content</a>
		<ul class="nav navbar-nav navbar-right responsive-nav main-nav-list"><li class="page_item page-item-22"><a href="http://zi.tipidkorpolri.info/daftar-laporan-pengaduan/">Daftar Laporan Pengaduan</a></li>
<li class="page_item page-item-872"><a href="http://zi.tipidkorpolri.info/kontak/">Kontak</a></li>
<li class="page_item page-item-40"><a href="http://zi.tipidkorpolri.info/manajemen-perubahan/">Manajemen Perubahan</a></li>
<li class="page_item page-item-54"><a href="http://zi.tipidkorpolri.info/mindset-dan-cultural-set-aparatur/">Mindset dan Cultural Set Aparatur</a></li>
<li class="page_item page-item-21"><a href="http://zi.tipidkorpolri.info/open-ticket/">Open Ticket</a></li>
<li class="page_item page-item-1480"><a href="http://zi.tipidkorpolri.info/paparan-pembangunan-zi/">Paparan Pembangunan ZI</a></li>
<li class="page_item page-item-46"><a href="http://zi.tipidkorpolri.info/penataan-sistem-manajemen-sdm/">Penataan Sistem Manajemen SDM</a></li>
<li class="page_item page-item-42"><a href="http://zi.tipidkorpolri.info/penataan-tatalaksana/">Penataan Tatalaksana</a></li>
<li class="page_item page-item-50"><a href="http://zi.tipidkorpolri.info/penguatan-akuntabilitas/">Penguatan Akuntabilitas</a></li>
<li class="page_item page-item-48"><a href="http://zi.tipidkorpolri.info/penguatan-pengawasan/">Penguatan Pengawasan</a></li>
<li class="page_item page-item-52"><a href="http://zi.tipidkorpolri.info/peningkatan-kualitas-pelayanan-publik/">Peningkatan Kualitas Pelayanan Publik</a></li>
<li class="page_item page-item-44"><a href="http://zi.tipidkorpolri.info/peraturan-perundang-undangan/">Peraturan Perundang-undangan</a></li>
<li class="page_item page-item-70"><a href="http://zi.tipidkorpolri.info/upload-dokumen/">Upload Dokumen</a></li>
<li class="page_item page-item-35"><a href="http://zi.tipidkorpolri.info/wbs/">WBS</a></li>
<li class="page_item page-item-24"><a href="http://zi.tipidkorpolri.info/whistleblowers-system/">WhistleBlower&#8217;s System</a></li>
</ul>	</nav>
	    -->

		</div>

	</div>
		<!-- / END TOP BAR --><div class="home-header-wrap">

<ul id="parallax_move"><li class="layer layer1" data-depth="0.10" style="background-image: url(/wp-content/themes/zerif-lite/images/background1.jpg);"></li><li class="layer layer2" data-depth="0.20" style="background-image: url(/wp-content/uploads/2017/04/ZI-Home.png);"></li></ul><div class="header-content-wrap"><div class="container"><h1 class="intro-text">ZONA INTEGRITAS Dittipidkor Bareskrim POLRI</h1><div class="buttons"><a href="#focus" class="btn btn-primary custom-button red-btn">Program</a><a href="#aboutus" class="btn btn-primary custom-button green-btn">Dasar Hukum</a></div></div></div><!-- .header-content-wrap --><div class="clear"></div>
</div>
</header> <!-- / END HOME SECTION  -->
<div id="content" class="site-content">


<section class="focus" id="focus">


	<div class="container">

		<!-- SECTION HEADER -->

		<div class="section-header">

			<!-- SECTION TITLE AND SUBTITLE -->

			<h2 class="dark-text">6 AREA PERUBAHAN REFORMASI BIROKRASI</h2>
		</div>

		<div class="row">

				<span id="text-3" class="">			<div class="textwidget"><p><a href="{{ $paparan->file }}" target="_blank" rel="noopener"><img class="size-full wp-image-1489 aligncenter" src="/wp-content/uploads/2017/12/button_paparan-pembangunan-zi.jpg" alt="" width="342" height="44" /></a></p>
<hr />
</div>
		</span>

    @foreach($aprb as $item)
      <span id="ctup-ads-widget-1" class="">
	      <div class="col-lg-3 col-sm-3 focus-box" data-scrollreveal="enter left after 0.15s over 1s">
          <a href="/tipidkor/zona-integritas/{{ $item->id }}" class="service-icon">
            <span class="sr-only">
	            Go to {{ $item->title }}
            </span>
            <i class="pixeden" style="background:url({{ $item->icon }}) no-repeat center;width:100%; height:100%;"></i>
					</a>
          <h3 class="red-border-bottom">{{ $item->title }}</h3>
		      <!-- FOCUS HEADING -->
          <p>{{ $item->description }}</p>
		    </div>
			</span>
    @endforeach

    </div>

	</div> <!-- / END CONTAINER -->


</section>  <!-- / END FOCUS SECTION -->

<section class="about-us" id="aboutus">


	<div class="container">

		<!-- SECTION HEADER -->

		<div class="section-header">

			<h2 class="white-text">Dasar Hukum</h2>
		</div><!-- / END SECTION HEADER -->

		<!-- 3 COLUMNS OF ABOUT US-->

		<div class="row">

			<!-- COLUMN 1 - BIG MESSAGE ABOUT THE COMPANY-->

		<div class="col-lg-12 col-md-12 column zerif_about_us_center " data-scrollreveal="enter bottom after 0s over 1s"><p><img class="aligncenter" src="/wp-content/uploads/2017/05/dasar-hukum-ZI-1.jpg" width="100%" height="100%" />
<img class="aligncenter" src="/wp-content/uploads/2017/05/dasar-hukum-ZI-2.jpg" width="100%" height="100%" /></p></div>
	</div> <!-- / END 3 COLUMNS OF ABOUT US-->

	<!-- CLIENTS -->

	</div> <!-- / END CONTAINER -->


</section> <!-- END ABOUT US SECTION -->

<section class="purchase-now" id="ribbon_right"><div class="container"><div class="row"><div class="col-md-9" data-scrollreveal="enter left after 0s over 1s"><h3 class="white-text">Ingin Membuat Pengaduan?</h3></div><div class="col-md-3" data-scrollreveal="enter right after 0s over 1s"><a href="/tipidkor/zona-integritas/wbs" class="btn btn-primary custom-button red-btn">WhistleBlower's System</a></div></div></div></section>
</div><!-- .site-content -->


<footer id="footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">


	<div class="container">


		<div class="col-md-3 company-details"><div class="icon-top red-text"><img src="/wp-content/themes/zerif-lite/images/map25-redish.png" alt="" /></div><div class="zerif-footer-address">Gedung ORI Lt. 1 &amp; 2 Jl. HR Rasuna Said
Kav C-19 Kuningan, Jakarta Selatan.</div></div><div class="col-md-3 company-details"><div class="icon-top green-text"><img src="/wp-content/themes/zerif-lite/images/envelope4-green.png" alt="" /></div><div class="zerif-footer-email"><a href="mailto:bagops.tpk@gmail.com">bagops.tpk@gmail.com</a></div></div><div class="col-md-3 company-details"><div class="icon-top blue-text"><img src="/wp-content/themes/zerif-lite/images/telephone65-blue.png" alt="" /></div><div class="zerif-footer-phone"><a href="tel:622122057190">+62-21-2205 7190</a></div></div><div class="col-md-3 copyright"><ul class="social"><li><a target="_blank" href="https://www.facebook.com/Tipidkor-Bareskrim-2096002183959907/"><span class="sr-only">Go to Facebook</span> <i class="fa fa-facebook"></i></a></li><li><a target="_blank" href="https://twitter.com/tipidkor"><span class="sr-only">Go to Twitter</span> <i class="fa fa-twitter"></i></a></li></ul><p id="zerif-copyright">Dit Tipidkor Bareskim</p></div>			</div> <!-- / END CONTAINER -->

</footer> <!-- / END FOOOTER  -->


	</div><!-- mobile-bg-fix-whole-site -->
</div><!-- .mobile-bg-fix-wrap -->


<div style="display:none"><div class="cdm-modal" data-remodal-options="{ 'hashTracking': false }" data-remodal-id="file"> <a data-remodal-action="close" class="remodal-close"></a>
			<div class="view-file-content">

			</div>
		</div></div>
				<div style="display:none">
<div class="remodal" data-remodal-id="cdm-utility">
	<a data-remodal-action="close" class="remodal-close"></a>

	<div class="cdm-utility-modal">
	</div>
</div>
</div><div id="wpsp_front_popup" onclick="wpsp_close_front_popup();" style="display: none;"></div>
<div id="wpsp_front_popup_inner" style="display: none;">
    <div id="wpsp_front_popup_blank"></div>
    <div id="wpsp_front_popup_body" style="display: none;"></div>
</div>
<img id="wpsp_front_popup_close_btn" alt="Close Button" onclick="wpsp_close_front_popup();" style="display: none;" src="/wp-content/plugins/wp-support-plus-responsive-ticket-system/asset/images/close_btn.png"/>
<img id="wpsp_front_popup_loading_img" alt="Loading Image" style="display: none;" src="/wp-content/plugins/wp-support-plus-responsive-ticket-system/asset/images/ajax-loader%402x6a73.gif?ver=8.0.7"/><link rel='stylesheet' id='jquery-remodal-css'  href='/wp-content/plugins/sp-client-document-manager/css/jquery.remodal55fe.css?ver=4.9.5' type='text/css' media='all' />
@endsection
