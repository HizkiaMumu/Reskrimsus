<!DOCTYPE html>
<html lang="en" class="no-js">


<!-- Mirrored from themesdesign.in/brizzle/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Apr 2018 07:46:20 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />
    @yield('meta')

    <link rel="shortcut icon" href="images/logo_polda.png">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">

    <!-- Magnificpopup Css -->
    <link rel="stylesheet" type="text/css" href="/css/magnific-popup.css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="/css/materialdesignicons.min.css" />

    <!-- themefy icon -->
    <link rel="stylesheet" type="text/css" href="/css/pe-icon-7-stroke.css" />

    <!--Slider-->
    <link rel="stylesheet" href="/css/owl.carousel.css" />
    <link rel="stylesheet" href="/css/owl.theme.css" />
    <link rel="stylesheet" href="/css/owl.transitions.css" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="/css/style-template.css" />
    <link href="/css/colors/default.css" rel="stylesheet" id="color-opt">
    <link rel="stylesheet" href="/css/style.css">
    @yield('style')

</head>

    <body>

        <!-- Header start -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
            <div class="container">

               <!--  <a class="logo" href="#">
                    <img src="images/logo-dark.png" alt="" class="img-fluid logo-dark" >
                    <img src="images/logo-light.png" alt="" class="img-fluid logo-light" >
                </a> -->

                <a class="navbar-brand" href="#">
                  <img src="images/logo_polda.png" style="height: 1.5em; width: auto; margin-top: -0.3em;">
                  TIPIDKOR
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/tipidkor/news">NEWS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#htck">HTCK</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#strukturOrganisasi">STRUKTUR ORGANISASI</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">ZONA INTEGRITAS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://pusiknas.polri.go.id/Home/LandingPage">SP2HP</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- Header end  -->

        <!-- Content start -->
        @yield('content')
        <!-- Content end -->

        <!-- Back to top -->
        <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

        <!-- javascript -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery.easing.min.js"></script>
        <script src="/js/scrollspy.min.js"></script>
        <!-- Owl Carousel -->
        <script src="/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup -->
        <script src="/js/jquery.magnific-popup.min.js"></script>
        <!--Yt Plyer-->
        <script type="text/javascript" src="/js/jquery.mb.YTPlayer.js"></script>
        <!-- switcher js -->
        <script src="/js/switcher.js"></script>
        <!-- Custom js -->
        <script src="/js/app-template.js"></script>
        @yield('script')
    </body>


<!-- Mirrored from themesdesign.in/brizzle/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Apr 2018 07:46:45 GMT -->
</html>
