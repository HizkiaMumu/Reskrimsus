<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themeregion.com/newspress-v2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Apr 2018 03:49:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<!--title-->
    <title>@yield('title')</title>

	<!--CSS-->
  <link href="/news/css/bootstrap.min.css" rel="stylesheet">
  <link href="/news/css/font-awesome.min.css" rel="stylesheet">
	<link href="/news/css/magnific-popup.css" rel="stylesheet">
	<link href="/news/css/owl.carousel.css" rel="stylesheet">
	<link href="/news/css/subscribe-better.css" rel="stylesheet">
	<link href="/news/css/main.css" rel="stylesheet">
	<link id="preset" rel="stylesheet" type="text/css" href="/news/css/presets/preset1.css">
	<link href="/news/css/responsive.css" rel="stylesheet">

	<!--Google Fonts-->
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

  <!--[if lt IE 9]>
    <script src="/news/js/html5shiv.js"></script>
    <script src="/news/js/respond.min.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="images/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
  @yield('style')
</head><!--/head-->
<body>
	<div id="main-wrapper" class="homepage">
		<header id="navigation">
			<div class="navbar" role="banner">
				<div class="container">
					<a class="secondary-logo" href="/tipidkor/news">
					    <img class="img-responsive" src="/images/logo_polda.png" alt="logo" style="height: 40px; width: auto; padding-left: 10px; padding-bottom: 5px;">
					</a>
				</div>
				<div class="topbar">
					<div class="container">
						<div id="topbar" class="navbar-header">
							<a class="navbar-brand" href="/tipidkor/news">
							    <div class="row">
								    <img class="main-logo img-responsive col-md-6" src="/images/logo_polda.png" alt="logo" style="height: 40px; width: auto; padding-left: 10px;">
							        <p class="col-md-6">TIPIDKOR NEWS</p>
							    </div>
							</a>
							<div id="topbar-right">
								<div id="date-time"></div>
								<div id="weather"></div>
							</div>
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
					</div>
				</div>
				<div id="menubar" class="container">
					<nav id="mainmenu" class="navbar-left collapse navbar-collapse">
						<ul class="nav navbar-nav">
              <li class="lifestyle">
                <a href="/tipidkor/news/">Home</a>
              </li>
              @foreach($kategori as $item)
  							<li class="lifestyle">
                  <a href="/tipidkor/news/kategori/{{ $item->kategori }}">{{ $item->kategori }}</a>
                </li>
              @endforeach
            </ul>
					</nav>
					<div class="searchNlogin">
						<ul>
              @if(Request::url() === URL::to('/') . '/tipidkor/news')
                <a href="/tipidkor/news/all">
                 <li class="search-icon"><i class="fa fa-search"></i></li>
                </a>
              @else
                <li class="search-icon"><i class="fa fa-search"></i></li>
              @endif
              <a href="/tipidkor/news">
                <li><i class="fa fa-home"></i></li>
              </a>
						</ul>
            @if(Request::url() === URL::to('/') . '/tipidkor/news')

            @else
              <div class="search">
                <form role="form">
                  <input type="text" class="search-form" autocomplete="off" placeholder="Cari..." id="search">
                </form>
              </div> <!--/.search-->
            @endif
					</div><!-- searchNlogin -->
				</div>
			</div>
		</header><!--/#navigation-->

    @yield('content')

    <div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="widget">
							<h1 class="section-title title">Contact</h1>
							<p>Untuk terhubung dengan kami, silahkan hubungi kontak kontak yang ada di bawah ini.</p>
							<address>
								<p>Address : 123 Gegrit, London, England</p>
								<p>Call : +1234-222-3333</p>
								<p>Email: <a href="#">info@newspress.com</a></p>
							</address>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="widget">
							<h1 class="section-title title">Alamat</h1>
							<ul>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.898659130715!2d116.88351351451226!3d-1.2302215991026881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df146093471fe1d%3A0xf28a49861f17cabe!2sPolda+Kaltim!5e0!3m2!1sid!2sid!4v1524266585243" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="widget news-letter">
							<h1 class="section-title title">Subscribe</h1>
							<p>Jangan sampai ketinggalan artikel dari kami, silahkan masukan alamat email anda agar tetap terhubung.</p>

							<form action="/tipidkor/news/subscribe" method="post" id="subscribe-form" name="subscribe-form">
                {{ csrf_field() }}
								<input type="text" placeholder="Your E-mail" name="email">
								<button type="submit" id="subscribe">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div><!--/#main-wrapper-->

	<footer id="footer">
		<div class="footer-top">
			<div class="container text-center">
				<div class="logo-icon"><img class="img-responsive" src="/images/logo.png" alt="" style="height: 60px; width: auto;"/></div>
			</div>
		</div>
		<div class="footer-menu">
			<div class="container">
				<ul class="nav navbar-nav">
					<li><a href="/tipidkor/news/">Home</a></li>
          @foreach($kategori as $item)
            <li>
              <a href="/tipidkor/news/kategori/{{ $item->kategori }}">{{ $item->kategori }}</a>
            </li>
          @endforeach
				</ul>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container text-center">
				<p><a href="#">TIPIDKOR POLDA KALIMANTAN TIMUR </a>&copy; 2018 </p>
			</div>
		</div>
	</footer>


	<div class="subscribe-me text-center">
		<h1>JANGAN SAMPAI KELEWATAN</h1>
		<h2>Subscribe untuk tetap terhubung</h2>
		<a href="#close" class="sb-close-btn"><img class="<img-responsive></img-responsive>" src="/news/images/others/close-button.png" alt="" /></a>
		<form action="/tipidkor/news/subscribe" method="post" id="popup-subscribe-form" name="subscribe-form">
      {{ csrf_field() }}
			<div class="input-group">
				<span class="input-group-addon"><img src="/news/images/others/icon-message.png" alt="" /></span>
				<input type="text" placeholder="Enter your email" name="email">
				<button type="submit">Go</button>
			</div>
		</form>
	</div>  <!--/.subscribe-me-->

	<!--/#scripts-->
  <script type="text/javascript" src="/news/js/jquery.js"></script>
  <script type="text/javascript" src="/news/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/news/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="/news/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="/news/js/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/locale/id.js"></script>
	<script type="text/javascript" src="/news/js/jquery.simpleWeather.min.js"></script>
	<script type="text/javascript" src="/news/js/jquery.sticky-kit.min.js"></script>
	<script type="text/javascript" src="/news/js/jquery.easy-ticker.min.js"></script>
	<script type="text/javascript" src="/news/js/jquery.subscribe-better.min.js"></script>
  <script type="text/javascript" src="/news/js/main.js"></script>
  <script type="text/javascript" src="/news/js/switcher.js"></script>
  @yield('script')

</body>

<!-- Mirrored from demo.themeregion.com/newspress-v2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Apr 2018 03:49:17 GMT -->
</html>
