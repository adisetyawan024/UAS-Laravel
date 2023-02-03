<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Affan - PWA Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Affan - PWA Mobile HTML Template</title>
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
    <!-- Back Button -->
    <div class="login-back-button"><a href="{{ route('index') }}">
            <svg class="bi bi-arrow-left-short" width="32" height="32" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z">
                </path>
            </svg></a></div>
    <!-- Login Wrapper Area -->
    <div class="login-wrapper d-flex align-items-center justify-content-center">
        <div class="custom-container">
            <div class="text-center px-4"><img class="login-intro-img"
                    src="https://img.freepik.com/free-vector/forgot-password-concept-illustration_114360-1123.jpg?w=1380&t=st=1674971410~exp=1674972010~hmac=acc7eed9ebb8a49b5bb050cf8e8831b5748c5427f2c08ca7f1de62b3f3eb4ec9"
                    alt=""></div>
            <!-- Register Form -->
            <div class="register-form mt-4">
                <h6 class="mb-3 text-center">Masuk Sistem Aplikasi CatatAir</h6>

                {{-- @if (session()->hash('loginError'))
                    <div class="alert alert-danger alert-dismisible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif --}}

                <form action="{{ url('login/proses') }}/" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input class="form-control"
                            @error('nama') 
                                is-invalid
                            @enderror
                            name="nama" type="text" placeholder="Username" autofocus required>
                    </div>
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="form-group position-relative">
                        <input
                            class="form-control  
                            @error('password') 
                                is-invalid
                            @enderror"
                            id="psw-input" name="password" type="password" placeholder="Enter Password" required>
                        <div class="position-absolute" id="password-visibility"><i class="bi bi-eye"></i><i
                                class="bi bi-eye-slash"></i></div>
                    </div>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <button class="btn btn-primary w-100" type="submit">Sign In</button>
                </form>
            </div>
            <!-- Login Meta -->
        </div>
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
    <!-- PWA -->
    <script src="{{ asset('assets/js/pwa.js') }}"></script>
</body>

</html>
