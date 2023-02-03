<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Catat Air by Dikomo Indonesia Kreatif">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>@yield('title') - Tugas UAS Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/core-img/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/icons/icon-96x96.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/icons/icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('assets/img/icons/icon-167x167.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/icons/icon-180x180.png') }}">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/baguetteBox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rangeslider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vanilla-dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/apexcharts.css') }}">
    @yield('additionalCSS')
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <!-- Web App Manifest -->
    <link rel="manifest" href="{{ asset('assets/manifest.json') }}">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
    </div>
    <!-- Internet Connection Status -->
    <!-- # This code for showing internet connection status -->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Header Area -->
    <div class="header-area" id="headerArea">
        <div class="container">
            <!-- Header Content -->
            <div
                class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
                <!-- Logo Wrapper -->
                <div class="logo-wrapper"><a href="page-home.html"><img
                            src="{{ asset('assets/img/core-img/logo.png') }}" alt=""></a></div>
                <!-- Navbar Toggler -->
                <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas"
                    data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas"><span class="d-block"></span><span
                        class="d-block"></span><span class="d-block"></span></div>
            </div>
            <!-- # Header Five Layout End -->
        </div>
    </div>
    <!-- # Sidenav Left -->
    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-start" id="affanOffcanvas" data-bs-scroll="true" tabindex="-1"
        aria-labelledby="affanOffcanvsLabel">
        <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        @include('_partials/offCanvas')
    </div>
    <div class="page-content-wrapper">

        @yield('isi')

    </div>
    <!-- Footer Nav -->
    <div class="footer-nav-area" id="footerNav">
        <div class="container px-0">
            <!-- =================================== -->
            <!-- Paste your Footer Content from here -->
            <!-- =================================== -->
            <!-- Footer Content -->
            @include('_partials/bottomNav')
        </div>
    </div>
    <!-- All JavaScript Files -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/slideToggle.min.js') }}"></script>
    <script src="{{ asset('assets/js/internet-status.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/baguetteBox.min.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/rangeslider.min.js') }}"></script>
    <script src="{{ asset('assets/js/vanilla-dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/dark-rtl.js') }}"></script>
    <script src="{{ asset('assets/js/active.js') }}"></script>
    @yield('additionalJS')
    <!-- PWA -->
    <script src="{{ asset('assets/js/pwa.js') }}"></script>
</body>

</html>
