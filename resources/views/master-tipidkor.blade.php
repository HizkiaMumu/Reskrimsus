<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />
    @yield('meta')

    <link rel="shortcut icon" href="/images/logo_polda.png">

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
    <link rel="stylesheet" href="/css/getorgchart.css">
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

                <a class="navbar-brand" href="/tipidkor">
                  <img src="/logo-polda/logo2.png" style="height: 1.5em; width: auto; margin-top: -0.3em;">
                  TIPIDKOR
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active menuPilihan">
                            <a href="/tipidkor" class="nav-link" href="#home">HOME</a>
                        </li>

                        <li class="nav- menuPilihan">
                            <a class="nav-link" href="/tipidkor/news">NEWS</a>
                        </li>

                        <li class="nav-item menuPilihan">
                            <a class="nav-link" href="/tipidkor/htck">HTCK</a>
                        </li>

                        <li class="nav-item menuPilihan" id="strukturOrganisasi">
                            <a class="nav-link" href="/tipidkor/struktur-organisasi">STRUKTUR ORGANISASI</a>
                        </li>

                        <li class="nav-item menuPilihan">
                            <a class="nav-link" href="/tipidkor/zona-integritas">ZONA INTEGRITAS</a>
                        </li>

                        <li class="nav-item menuPilihan">
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
        <!-- Start of Async Drift Code -->
        <script>
            "use strict";
            
            !function() {
              var t = window.driftt = window.drift = window.driftt || [];
              if (!t.init) {
                if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
                t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
                t.factory = function(e) {
                  return function() {
                    var n = Array.prototype.slice.call(arguments);
                    return n.unshift(e), t.push(n), t;
                  };
                }, t.methods.forEach(function(e) {
                  t[e] = t.factory(e);
                }), t.load = function(t) {
                  var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
                  o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                  var i = document.getElementsByTagName("script")[0];
                  i.parentNode.insertBefore(o, i);
                };
              }
            }();
            drift.SNIPPET_VERSION = '0.3.1';
            drift.load('ydv8c6kaa9zv');
        </script>
        <!-- End of Async Drift Code -->
        <script src="/js/getorgchart.js"></script>
        @yield('script')
    </body>
</html>
