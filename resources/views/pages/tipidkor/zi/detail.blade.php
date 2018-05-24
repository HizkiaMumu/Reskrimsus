@extends('master-zi')
@section('title', 'TIPIDKOR | ' . $aprbDetail->title)
@section('content')

<div id="mobilebgfix">
  <div class="mobile-bg-fix-img-wrap">
    <div class="mobile-bg-fix-img"></div>
  </div>
  <div class="mobile-bg-fix-whole-site">


<header id="home" class="header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">


  <div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">

    <div class="container">

<center><a href="#" ><img src="/logo-polda/logo-zi.png" style="height: 100px; width: auto;" alt="Zona Integritas"></a></center>

      <!-- div class="navbar-header responsive-logo">

<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">

        <span class="sr-only">Toggle navigation</span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        </button>

        <a href="http://zi.tipidkorpolri.info/" class="navbar-brand"><img src="http://zi.tipidkorpolri.info/wp-content/uploads/2017/07/LOGO-DIREKTORAT-TIPIDKOR-u1.png" alt="Zona Integritas"></a>
      </div -->

    <!--	 	<nav class="navbar-collapse bs-navbar-collapse collapse" id="site-navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
    <a class="screen-reader-text skip-link" href="#content">Skip to content</a>
    <ul class="nav navbar-nav navbar-right responsive-nav main-nav-list"><li class="page_item page-item-22"><a href="http://zi.tipidkorpolri.info/daftar-laporan-pengaduan/">Daftar Laporan Pengaduan</a></li>
<li class="page_item page-item-872"><a href="http://zi.tipidkorpolri.info/kontak/">Kontak</a></li>
<li class="page_item page-item-40 current_page_item"><a href="http://zi.tipidkorpolri.info/manajemen-perubahan/">Manajemen Perubahan</a></li>
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
    <!-- / END TOP BAR -->
<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->


<div id="content" class="site-content">

	<div class="container">

				<div class="content-left-wrap col-md-9">				<div id="primary" class="content-area">

			<main itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" id="main" class="site-main">

				<article id="post-40" class="post-40 page type-page status-publish hentry">

	<header class="entry-header">

		<span class="date updated published">{{ $aprbDetail->created_at }}</span>
		<span class="vcard author byline"><a href="#" class="fn">Admin</a></span>

		<h1 class="entry-title" itemprop="headline">{{ $aprbDetail->title }}</h1>
	</header><!-- .entry-header -->

	<div class="entry-content">

    {!! $aprbDetail->content !!}

	</div><!-- .entry-content -->


</article><!-- #post-## -->
			</main><!-- #main -->

		</div><!-- #primary -->

	</div>	<div class="sidebar-wrap col-md-3 content-left-wrap">


	<div id="secondary" class="widget-area" role="complementary">


		<aside id="nav_menu-2" class="widget widget_nav_menu"><h2 class="widget-title">6 AREA PERUBAHAN REFORMASI BIROKRASI</h2><div class="menu-menu-8-area-perubahan-container"><ul id="menu-menu-8-area-perubahan" class="menu">
      @foreach($aprb as $item)
        <li id="menu-item-376" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-40 current_page_item menu-item-376"><a href="/tipidkor/zona-integritas/{{ $item->id }}">{{ $item->title }}</a></li>
      @endforeach

    </ul></div></aside><aside id="sow-editor-4" class="widget widget_sow-editor"><div class="so-widget-sow-editor so-widget-sow-editor-base">
<div class="siteorigin-widget-tinymce textwidget">
  <p><a href="#" target="_blank" rel="noopener"></a></p>
<hr />
<p><a href="#" target="_blank" rel="noopener"><img class="size-full wp-image-848 aligncenter" src="/wp-content/uploads/2017/06/wbs.png" alt="" width="440" height="176" srcset="http://zi.tipidkorpolri.info/wp-content/uploads/2017/06/wbs.png 440w, http://zi.tipidkorpolri.info/wp-content/uploads/2017/06/wbs-300x120.png 300w" sizes="(max-width: 440px) 100vw, 440px" /></a></p>
</div>
</div></aside>

	</div><!-- #secondary -->

		</div><!-- .sidebar-wrap -->


	</div><!-- .container -->


</div><!-- .site-content -->

@endsection
