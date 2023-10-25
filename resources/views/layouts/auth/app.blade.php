<!DOCTYPE html>
<html lang="zxx" class="uk-background-white dark:uk-background-gray-100 dark:uk-text-gray-20 uk-dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AkunLaku</title>
    <meta name="description" content="Akun Murah Premium ">
    <meta name="theme-color" content="#741ff5">

    <!-- preload head styles -->
    <link rel="preload" href="{{ asset('assets/fonts/brand-icons/brand-icons.woff2') }}" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('assets/fonts/unicons/Unicons.woff?lkolxg') }}" as="font" type="font/woff"
        crossorigin>
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@8.3.2/swiper-bundle.min.css" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/uikit@3.15.1/dist/css/uikit.min.css" as="style">

    <!-- <link rel="preload" href="../assets/css/theme/main.min.css" as="style"> -->

    <!-- preload footer scripts -->
    <link rel="preload" href="{{ asset('assets/js/uikit.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/uikit-components.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/jquery.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/swiper-bundle.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/feather.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/typed.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/anime.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/app.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/data-attr-helper.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/swiper-helper.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/typed-helper.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/anime-helper.js') }}" as="script">

    <!-- <link rel="preload" href="../assets/js/anime-helper-defined-timelines.js" as="script"> -->

    <!-- include styles -->
    <script src="{{ asset('assets/js/app-head.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/theme/main.css') }}">

    <!-- include scripts -->
    <script src="{{ asset('assets/js/uikit.min.js') }}"></script>
    <script src="{{ asset('assets/js/uikit-components.js') }}"></script>
</head>

<body class="uni-body">

    <!-- Dark/Light toggle -->

    <!-- Dark/Light toggle -->
    <div class="darkmode-trigger uk-position-bottom-right uk-position-small uk-position-fixed uk-box-shadow-large uk-radius-circle"
        data-darkmode-toggle="">
        <label class="switch">
            <span class="sr-only">Dark mode toggle</span>
            <input type="checkbox">
            <span class="slider"></span>
        </label>
    </div>

    <!-- Menu modal -->
    <div id="uni_mobile_menu" class="uni-mobile-menu uk-offcanvas"
        data-uk-offcanvas="mode: push; overlay: true; flip: true; selPanel: .uk-offcanvas-bar-panel;">
        <div class="uk-offcanvas-bar-panel uk-panel dark:uk-background-gray-100">
            <div class="uni-mobile-menu-wrap uk-flex-column uk-flex-between"
                data-uk-height-viewport="offset-bottom: true;">
                <div class="uni-mobile-menu-content">
                    <header class="uk-card uk-card-2xsmall uk-flex-middle uk-flex-between">
                        <div class="uk-flex-1">
                            <button aria-label="Close Menu"
                                class="uk-offcanvas-close uk-button uk-button-small uk-button-icon uk-button-default uk-button-outline uk-radius-circle"
                                type="button">
                                <i class="uk-icon-small" data-feather="arrow-left"></i>
                            </button>
                        </div>
                        <div>
                            <h5 class="uk-h5 uk-text-uppercase uk-margin-remove">Navigation</h5>
                        </div>
                        <div class="uk-flex-1"></div>
                    </header>
                    <hr class="uk-margin-remove">
                    <div class="uk-card uk-card-small">
                        <div class="uk-panel">
                            <ul class="uk-nav uk-nav-default">
                                <li class="uk-nav-header">Homepages</li>
                                <li><a href="landing-01.html">Landing 01</a></li>
                                <li><a href="landing-02.html">Landing 02</a></li>
                                <li><a href="landing-03.html">Landing 03</a></li>
                                <li><a href="landing-04.html">Landing 04</a></li>
                                <li><a href="landing-05.html">Landing 05</a></li>
                                <li class="uk-nav-header">Inner pages</li>
                                <li><a href="base.html">Base components</a></li>
                                <li><a href="connect-wallet.html">Connect wallet</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="404.html">404 page</a></li>
                                <li><a href="coming-soon.html">Coming soon</a></li>
                                <li class="uk-nav-header">Content &amp; Privacy</li>
                                <li><a href="terms.html">Terms of use</a></li>
                                <li><a href="privact.html">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- show qris -->
    <div id="showQris" class="uk-modal" data-uk-modal>
        <div class="uk-modal-dialog">
            <div class="uk-position-top uk-position-z-index-negative" data-uk-height-viewport="">
                <div class="uk-position-cover uk-background-cover uk-opacity-100 dark:uk-hidden"
                    data-src="{{ asset('assets/images/qris/qris1.jpg') }}" data-uk-img></div>
                <div class="uk-position-cover uk-background-cover uk-opacity-100 uk-hidden dark:uk-visible"
                    data-src="{{ asset('assets/images/qris/qris1.jpg') }}" data-uk-img></div>
            </div>
            <button class="uk-modal-close uk-close-large uk-position-small" type="button"
                data-uk-close></button>
            <div class="uk-container">
                {{-- <div class="uk-grid uk-flex-center uk-flex-middle uk-child-width-1-2@m uk-section" data-uk-grid
                    data-uk-height-viewport>
                    <div>
                        <div class="uk-panel uk-text-center">
                            <h2 class="uk-h5 uk-h3@s uk-h2@l uk-margin-remove">Scan</h2>
                            <div class="uk-grid uk-grid-xsmall uk-grid-small@m uk-child-width-1-2@m uk-margin-medium-top uk-margin-large-top@m"
                                data-uk-grid="">
                                <div>
                                    <div class="uk-flex uk-flex-center uk-panel uk-card uk-card-medium@m uk-card-border uk-radius-medium uk-radius-large@m uk-box-shadow-hover-small hover:uk-border-primary" style="width:400px;">

                                        <a href="#metamask" class="uk-position-cover uk-flex uk-flex-center"></a>
                                        <img src="{{ asset('assets/images/qris/qris1.jpg') }}" alt="metamask">
                                     
                                       
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <!-- Wrapper start -->
    <div class="wrap uk-overflow-hidden">

        <!-- Header start -->
        <header class="uni-header uk-position-top">
            <div class="uni-header-navbar"
                data-uk-sticky="top: 70; show-on-up: false; animation: uk-animation-slide-top">
                <div class="uk-container">
                    <nav class="uk-navbar uk-navbar-container uk-navbar-transparent" data-uk-navbar>
                        <div class="uk-navbar-top">
                            <div class="uk-navbar-left uk-flex-1@m">
                                <a class="uk-logo uk-navbar-item uk-h4 uk-margin-remove" href=""> <span
                                        class="uk-text-gradient">AkunLaku.com</span></a>
                            </div>
                            <div class="uk-navbar-center">
                                <ul class="uk-navbar-nav dark:uk-text-gray-10 uk-visible@m"
                                    data-uk-scrollspy-nav="closest: li; scroll: true; offset: 40" data-uk-navbar-bound>
                                    {{-- <li><a href="#uni_collection">Cara Berlangganan</a></li> --}}
                                    {{-- <li><a href="#uni_about">About</a></li>
                                        <li><a href="#uni_process">How it works</a></li>
                                        <li><a href="#uni_roadmap">Product</a></li> --}}
                                </ul>
                            </div>

                            <div class="uk-navbar-right uk-flex-1 uk-flex-right">
                                <div class="uk-navbar-item uk-visible@m">
                                    <ul class="uk-subnav uk-subnav-small">
                                        <li>
                                            <a href="https://twitter.com/"><i
                                                    class="uk-icon uk-icon-medium unicon-logo-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://discord.com/"><i
                                                    class="uk-icon uk-icon-medium unicon-logo-discord"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://instagram.com/"><i
                                                    class="uk-icon uk-icon-medium unicon-logo-instagram"></i></a>
                                        </li>

                                        {{-- @guest
                                            @if (Route::has('login'))
                                                <li>
                                                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                            @endif
                
                                            @if (Route::has('register'))
                                            <li>
                                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            
                                                    <li>
                                                        <a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                            {{ Auth::user()->name }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>
                                                    
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                        </div>
                                                    </li>
                                                    
                                        @endguest --}}
                                    </ul>
                                </div>

                                <div class="uk-navbar-item uk-hidden@m">
                                    <a href="#uni_mobile_menu" data-uk-toggle>
                                        <span class="uk-icon uk-icon-medium material-icons">menu</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Header end -->


        {{-- konten --}}

        @yield('content')

        {{-- end konten --}}

        {{-- 
        <img class="uk-width-2xsmall uk-flex-center uk-margin-auto uk-margin-medium uk-margin-large@m"
            src="../assets/images/divider-01.svg" alt="Divider"
            data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 100;"> --}}



    </div>

    <!-- footer start -->
    <footer class="uni-footer uk-section uk-section-xlarge@m uk-border-top">
        <div class="uk-container">
            <div class="uk-panel uk-position-z-index">
                <div class="uk-grid" data-uk-grid>
                    <div class="uk-width-expand@m">
                        <div class="uk-panel uk-width-medium@m">
                            <a href="" class="uk-logo">
                                {{-- <img class="uk-visible dark:uk-hidden" width="120" src="../assets/images/nerko-light.svg" alt="Nerko"> --}}
                                {{-- <img class="uk-hidden dark:uk-visible" width="120" src="../assets/images/nerko-dark.svg" alt="Nerko"> --}}
                                <h1>
                                    <span class="uk-text-gradient">AkunLaku.com</span>
                                </h1>
                            </a>
                            <p class="uk-margin-medium@m">Solusi Buat Kamu Kaum Mendang Mending
                                Anti Ribet.</p>
                            {{-- <ul class="uk-subnav uk-subnav-small">
                                    <li>
                                        <a href="https://twitter.com/unistudioco"><i class="uk-icon uk-icon-medium unicon-logo-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://discord.com/unistudioco"><i class="uk-icon uk-icon-medium unicon-logo-discord"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/unistudioco"><i class="uk-icon uk-icon-medium unicon-logo-instagram"></i></a>
                                    </li>
                                </ul> --}}
                        </div>
                    </div>
                    <div class="uk-width-2-5@m">
                        <div class="uk-grid" data-uk-grid>
                            <div class="uk-width-1-2 uk-width-expand@m">
                                <ul class="uk-list">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Collection</a></li>
                                    <li><a href="#">Roadmap</a></li>
                                    <li><a href="#">FAQs</a></li>
                                </ul>
                            </div>
                            <div class="uk-width-1-2 uk-width-expand@m">
                                <ul class="uk-list">
                                    <li><a href="#">How it works!</a></li>
                                    <li><a href="#">Community</a></li>
                                    <li><a href="#">Get in touch</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-panel uk-text-small uk-margin-medium-top uk-margin-2xlarge-top@m">
                    <div class="uk-grid uk-child-width-auto@m uk-flex-between" data-uk-grid>
                        <div>
                            <ul class="uk-subnav uk-subnav-small">
                                <li><a href="">Privacy policy</a></li>
                                <li><a href="">Terms of use</a></li>
                                <li class="uk-margin-small-left">
                                    <a href="#" data-uk-totop="" data-uk-scroll><i
                                            class="uk-icon uk-icon-small unicon-chevron-up"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="uk-flex-first@m">
                            <p>© 2023 adamrzkyv </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer end -->

    <!-- include scripts -->
    <script defer src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/feather.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/typed.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/anime.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/app.js') }}"></script>
    <script defer src="{{ asset('assets/js/data-attr-helper.js') }}"></script>
    <script defer src="{{ asset('assets/js/swiper-helper.js') }}"></script>
    <script defer src="{{ asset('assets/js/typed-helper.js') }}"></script>
    <script defer src="{{ asset('assets/js/anime-helper.js') }}"></script>

    <!-- <script defer src="../assets/js/anime-helper-defined-timelines.js"></script> -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const texts = ["#HargaMinimum", "#AntiNgelamun"];
            let index = 0;

            // Fungsi untuk bergantian teks
            function toggleText() {
                const dynamicTextElement = document.getElementById("dynamicText");

                // Menyembunyikan elemen dengan fade out
                dynamicTextElement.style.opacity = 0;

                // Tunggu animasi fade out selesai, lalu ubah teks dan fade in
                setTimeout(() => {
                    index = 1 - index;
                    dynamicTextElement.textContent = texts[index];
                    dynamicTextElement.style.opacity = 1;
                }, 300); // asumsikan animasi membutuhkan waktu 300ms
            }

            // Atur interval untuk menjalankan fungsi setiap 4 detik
            setInterval(toggleText, 4000); // 4000 ms = 4 detik
        });


        // Schema toggle via URL
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const getSchema = urlParams.get("schema");
        if (getSchema === "dark") {
            document.documentElement.classList.add("uk-dark");
            localStorage.setItem("darkMode", "1");
        } else if (getSchema === "light") {
            document.documentElement.classList.remove("uk-dark");
            localStorage.setItem("darkMode", "0");
        }
    </script>
</body>

</html>
