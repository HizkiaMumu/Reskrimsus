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
                                      <li><a href="#">APRB</a></li>
                                      <li><a href="#">WBS</a></li>
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
    	<!--footer upper-->
    	<div class="footer-upper" style="background-image:url(images/background/pattern.png)">
        	<div class="auto-container">
                <div class="row clearfix">
                    <!--Big Column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <a href="index.html"><img src="/images/logo-2.png" alt="" /></a>
                                    </div>
                                    <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate</div>
                                    <ul class="contact-info">
                                        <li>sakai@gmail.com</li>
                                        <li>+202-277-3894</li>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
									<h2>QUICK LINKS</h2>
                                    <div class="widget-content">
                                        <ul class="list">
											<li><a href="#">How It Works</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Testimonial</a></li>
                                            <li><a href="#">Pricing</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                            	<div class="footer-widget links-widget">
									<h2>About</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="#">How It Works</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Testimonial</a></li>
                                            <li><a href="#">Pricing</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                                <div class="footer-widget newsletter-widget">
									<h2>SUBSCRIBE US</h2>
                                    <div class="newsletter-form">
                                        <form method="post" action="http://t.commonsupport.com/sakai/contact.html">
                                            <div class="form-group">
                                                <input type="email" name="email" value="" placeholder="Enter Your Email" required="">
                                                <button type="submit" class="theme-btn btn-style-three">Send</button>
                                            </div>
                                        </form>
                                    </div>

                                    <ul class="social-icon-one">
                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-vine"></span></a></li>
                                        <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer Bottom-->
        <div class="footer-bottom">
        	<div class="auto-container">
            	<div class="copyright"> Copyright &copy; 2018 Sakai. All Rights Reserved.</div>
            </div>
        </div>
    </footer>
    <!--End Main Footer-->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

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
@yield('script')
<!-- Mirrored from t.commonsupport.com/sakai/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Apr 2018 10:46:24 GMT -->
</html>
