<div class="offcanvas-body p-0">
    <!-- Side Nav Wrapper -->
    <div class="sidenav-wrapper">
        <!-- Sidenav Profile -->
        <div class="sidenav-profile bg-gradient">
            <div class="sidenav-style1"></div>
            <!-- User Thumbnail -->
            <div class="user-profile"><img src="{{ asset('assets/img/bg-img/2.jpg') }}" alt=""></div>
            <!-- User Info -->
            <div class="user-info">
                <h6 class="user-name mb-0">{{ session()->get('nama') }}</h6>
                {{-- <span>Administrator</span> --}}

            </div>
        </div>
        <!-- Sidenav Nav -->
        <ul class="sidenav-nav ps-0">
            <li><a href="{{ route('home') }}"><i class="bi bi-house-door"></i>Home</a></li>
            <li><a href="{{ route('tagihan') }}"><i class="bi bi-cash"></i>Tagihan<span
                        class="badge bg-danger rounded-pill ms-2">220+</span></a></li>

            @if (session()->get('role') == '1')
                <li><a href="#"><i class="bi bi-folder"></i>Master Data</a>
                    <ul>
                        <li><a href="{{ route('data-pelanggan') }}">Pelanggan</a></li>
                        <li><a href="page-shop-list.html">Tarif</a></li>
                        <li><a href="page-shop-details.html">Pemakaian</a></li>
                        <li><a href="page-cart.html">Laporan</a></li>
                    </ul>
                </li>
                <li><a href="settings.html"><i class="bi bi-chat"></i>WhatsApp</a></li>
                <li><a href="settings.html"><i class="bi bi-gear"></i>Settings</a></li>
            @endif

            <li>
                <div class="night-mode-nav"><i class="bi bi-moon"></i>Mode Malam
                    <div class="form-check form-switch">
                        <input class="form-check-input form-check-success" id="darkSwitch" type="checkbox">
                    </div>
                </div>
            </li>
            <li><a href="/logout"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
        </ul>
        <!-- Social Info -->
        <div class="social-info-wrap"><a href="#"><i class="bi bi-facebook"></i></a><a href="#"><i
                    class="bi bi-twitter"></i></a><a href="#"><i class="bi bi-linkedin"></i></a></div>
        <!-- Copyright Info -->
        <div class="copyright-info">
            <p>2023 &copy; by<a href="https://www.dikomoindonesia.com/">Dikomo Indonesia Kreatif</a></p>
        </div>
    </div>
</div>
