<!DOCTYPE html>
<html lang="zxx" class="uk-background-white dark:uk-background-gray-100 dark:uk-text-gray-20 uk-dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign up - Nerko</title>
        <meta name="description" content="This is a sign up page">
        <meta name="theme-color" content="#741ff5">

        <!-- preload head styles -->
        <link rel="preload" href="../assets/fonts/brand-icons/brand-icons.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="../assets/fonts/unicons/Unicons.woff?lkolxg" as="font" type="font/woff" crossorigin>
        <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@8.3.2/swiper-bundle.min.css" as="style">
        <link rel="preload" href="https://cdn.jsdelivr.net/npm/uikit@3.15.1/dist/css/uikit.min.css" as="style">

        <!-- <link rel="preload" href="../assets/css/theme/main.min.css" as="style"> -->

        <!-- preload footer scripts -->
        <link rel="preload" href="../assets/js/uikit.min.js" as="script">
        <link rel="preload" href="../assets/js/uikit-components.js" as="script">
        <link rel="preload" href="../assets/js/jquery.min.js" as="script">
        <link rel="preload" href="../assets/js/swiper-bundle.min.js" as="script">
        <link rel="preload" href="../assets/js/feather.min.js" as="script">
        <link rel="preload" href="../assets/js/typed.min.js" as="script">
        <link rel="preload" href="../assets/js/anime.min.js" as="script">
        <link rel="preload" href="../assets/js/app.js" as="script">
        <link rel="preload" href="../assets/js/data-attr-helper.js" as="script">
        <link rel="preload" href="../assets/js/swiper-helper.js" as="script">
        <link rel="preload" href="../assets/js/typed-helper.js" as="script">
        <link rel="preload" href="../assets/js/anime-helper.js" as="script">

        <!-- <link rel="preload" href="../assets/js/anime-helper-defined-timelines.js" as="script"> -->

        <!-- include styles -->
    <script src="{{ asset('assets/js/app-head.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('assets/css/theme/main.css') }}">

        <!-- include scripts -->
        <script src="../assets/js/uikit.min.js"></script>
        <script src="../assets/js/uikit-components.js"></script>
    </head>
    <body class="uni-body">

        <!-- Dark/Light toggle -->

        <!-- Dark/Light toggle -->
        <div class="darkmode-trigger uk-position-bottom-right uk-position-small uk-position-fixed uk-box-shadow-large uk-radius-circle" data-darkmode-toggle="">
            <label class="switch">
                <span class="sr-only">Dark mode toggle</span>
                <input type="checkbox">
                <span class="slider"></span>
            </label>
        </div>

        <!-- Menu modal -->
        <div id="uni_mobile_menu" class="uni-mobile-menu uk-offcanvas" data-uk-offcanvas="mode: push; overlay: true; flip: true; selPanel: .uk-offcanvas-bar-panel;">
            <div class="uk-offcanvas-bar-panel uk-panel dark:uk-background-gray-100">
                <div class="uni-mobile-menu-wrap uk-flex-column uk-flex-between" data-uk-height-viewport="offset-bottom: true;">
                    <div class="uni-mobile-menu-content">
                        <header class="uk-card uk-card-2xsmall uk-flex-middle uk-flex-between">
                            <div class="uk-flex-1">
                                <button aria-label="Close Menu" class="uk-offcanvas-close uk-button uk-button-small uk-button-icon uk-button-default uk-button-outline uk-radius-circle" type="button">
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

        <!-- Connect wallet modal -->
        <div id="uni_connect_wallet" class="uk-modal-full" data-uk-modal>
            <div class="uk-modal-dialog">
                <div class="uk-position-top uk-position-z-index-negative" data-uk-height-viewport="">
                    <div class="uk-position-cover uk-background-cover uk-opacity-10 dark:uk-hidden" data-src="../assets/images/gradient-01.png" data-uk-img></div>
                    <div class="uk-position-cover uk-background-cover uk-opacity-20 uk-hidden dark:uk-visible" data-src="../assets/images/gradient-01.png" data-uk-img></div>
                </div>
                <button class="uk-modal-close-full uk-close-large uk-position-small" type="button" data-uk-close></button>
                <div class="uk-container">
                    <div class="uk-grid uk-flex-center uk-flex-middle uk-child-width-1-2@m uk-section" data-uk-grid data-uk-height-viewport>
                        <div>
                            <div class="uk-panel uk-text-center">
                                <h2 class="uk-h5 uk-h3@s uk-h2@l uk-margin-remove">Connect your wallet</h2>
                                <div class="uk-grid uk-grid-xsmall uk-grid-small@m uk-child-width-1-2@m uk-margin-medium-top uk-margin-large-top@m" data-uk-grid="">
                                    <div>
                                        <div class="uk-panel uk-card uk-card-small uk-card-medium@m uk-card-border uk-radius-medium uk-radius-large@m uk-box-shadow-hover-small hover:uk-border-primary">
                                            <a href="#metamask" class="uk-position-cover"></a>
                                            <img src="../assets/images/icon-metamask.svg" alt="metamask">
                                            <h4 class="uk-text-bold uk-h5@m uk-margin-small-top uk-margin-medium-top@m">Metamask</h4>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-panel uk-card uk-card-small uk-card-medium@m uk-card-border uk-radius-medium uk-radius-large@m uk-box-shadow-hover-small hover:uk-border-primary">
                                            <a href="#bitgo" class="uk-position-cover"></a>
                                            <img src="../assets/images/icon-bitgo.svg" alt="bitgo">
                                            <h4 class="uk-text-bold uk-h5@m uk-margin-small-top uk-margin-medium-top@m">BitGo</h4>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-panel uk-card uk-card-small uk-card-medium@m uk-card-border uk-radius-medium uk-radius-large@m uk-box-shadow-hover-small hover:uk-border-primary">
                                            <a href="#trustwallet" class="uk-position-cover"></a>
                                            <img src="../assets/images/icon-trustwallet.svg" alt="trustwallet">
                                            <h4 class="uk-text-bold uk-h5@m uk-margin-small-top uk-margin-medium-top@m">Trust Wallet</h4>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-panel uk-card uk-card-small uk-card-medium@m uk-card-border uk-radius-medium uk-radius-large@m uk-box-shadow-hover-small hover:uk-border-primary">
                                            <a href="#coinbase" class="uk-position-cover"></a>
                                            <img src="../assets/images/icon-coinbase.svg" alt="coinbase">
                                            <h4 class="uk-text-bold uk-h5@m uk-margin-small-top uk-margin-medium-top@m">Coinbase</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wrapper start -->
        <div class="wrap">

            <!-- Header start -->
            <header class="uni-header">
                <div class="uni-header-navbar" data-uk-sticky="top: 70; show-on-up: false; animation: uk-animation-slide-top">
                    <div class="uk-container">
                        <nav class="uk-navbar uk-navbar-container uk-navbar-transparent" data-uk-navbar>
                            <div class="uk-navbar-top">
                                <div class="uk-navbar-left">
                                    <a class="uk-logo uk-navbar-item uk-h4 uk-h3@m uk-margin-remove" href="landing-01.html"> <img class="uk-visible dark:uk-hidden" width="120" src="../assets/images/nerko-light.svg" alt="Nerko" loading="lazy"> <img class="uk-hidden dark:uk-visible" width="120" src="../assets/images/nerko-dark.svg" alt="Nerko" loading="lazy"> </a>
                                </div>

                                <div class="uk-navbar-right uk-flex-1 uk-flex-right">
                                    <ul class="uk-navbar-nav dark:uk-text-gray-10 uk-visible@m" data-uk-scrollspy-nav="closest: li; scroll: true; offset: 80" data-uk-navbar-bound>
                                        <li><a href="#uni_minting">Minting</a></li>
                                        <li><a href="#uni_about">About</a></li>
                                        <li><a href="#uni_collection">Collection</a></li>
                                        <li><a href="#uni_roadmap">Roadmap</a></li>
                                        <li><a href="#uni_team">Team</a></li>
                                    </ul>
                                    <div class="uk-navbar-item">
                                        <ul class="uk-subnav uk-subnav-small uk-visible@m">
                                            <li>
                                                <a href="https://twitter.com/unistudioco"><i class="uk-icon uk-icon-medium unicon-logo-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://discord.com/unistudioco"><i class="uk-icon uk-icon-medium unicon-logo-discord"></i></a>
                                            </li>
                                        </ul>

                                        <!-- header: call to actions -->
                                        <a href="#uni_connect_wallet" class="uk-button uk-button-medium@m uk-button-default uk-button-outline uk-margin-left uk-visible@l" data-uk-toggle="">
                                            <span>Connect wallet</span>
                                        </a>
                                    </div>

                                    <div class="uk-navbar-item uk-hidden@m">
                                        <a href="#uni_connect_wallet" class="uk-button uk-button-medium@m uk-button-icon uk-hidden@m uk-margin-small-right" data-uk-toggle="">
                                            <i class="uk-icon unicon-wallet"></i>
                                        </a>
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

            <div class="uni-sign-up uk-section uk-section-large@m uk-panel uk-overflow-hidden uk-border-top">

                <!-- Page header -->
                <header class="uni-page-header">
                    <div class="uk-container">
                        <h1 class="heading uk-h3 uk-h1@m uk-text-uppercase uk-text-center">Sign up</h1>
                    </div>
                </header>
                <div class="uk-margin-top uk-margin-large-top@m">
                    <div class="uk-container">
                        <div class="uk-flex-column uk-flex-center uk-width-medium@m uk-margin-auto">
                            <form class="uk-form-stacked uk-panel uk-width-1-1" action="{{ route('register') }}" method="post" data-uk-margin="margin: uk-margin">
                                @csrf
                                <div>
                                    <label for="name" class="uk-form-label">Your username: <span class="uk-text-danger">*</span></label>
                                    <input id="name" type="text" name="name" class="uk-input uk-form-medium uk-radius-large" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div>
                                    <label for="email" class="uk-form-label">Your email: <span class="uk-text-danger">*</span></label>
                                    <input id="email" type="email" name="email" class="uk-input uk-form-medium uk-radius-large" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div>
                                    <label for="password" class="uk-form-label">Your password: <span class="uk-text-danger">*</span></label>
                                    <input id="password" type="password" name="password" class="uk-input uk-form-medium uk-radius-large" required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div>
                                    <label for="password-confirm" class="uk-form-label">Confirm password: <span class="uk-text-danger">*</span></label>
                                    <input id="password-confirm" type="password" name="password_confirmation" class="uk-input uk-form-medium uk-radius-large" required>
                                </div>
                                <div>
                                    <button type="submit" class="uk-button uk-button-medium@m uk-button-gradient uk-width-expand">{{ __('Register') }}</button>
                                </div>
                                <div class="uk-grid uk-grid-xsmall uk-flex-center uk-text-xlarge uk-margin-medium-top@m" data-uk-grid>
                                    <a aria-label="facebook" href="#facebook"><i class="brand-facebook-alt"></i></a>
                                    <a aria-label="google" href="#google"><i class="brand-google"></i></a>
                                    <a aria-label="twitter" href="#twitter"><i class="brand-twitter"></i></a>
                                </div>
                            </form>
                            <p class="uk-text-small uk-text-bold uk-text-center uk-margin-large-top@m">
                                You already have an account? <a href="sign-in.html" class="uk-link-line uk-text-primary"><span>Log in</span></a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wrapper end -->

    

        <!-- include scripts -->
        <script defer src="../assets/js/jquery.min.js"></script>
        <script defer src="../assets/js/swiper-bundle.min.js"></script>
        <script defer src="../assets/js/feather.min.js"></script>
        <script defer src="../assets/js/typed.min.js"></script>
        <script defer src="../assets/js/anime.min.js"></script>
        <script defer src="../assets/js/app.js"></script>
        <script defer src="../assets/js/data-attr-helper.js"></script>
        <script defer src="../assets/js/swiper-helper.js"></script>
        <script defer src="../assets/js/typed-helper.js"></script>
        <script defer src="../assets/js/anime-helper.js"></script>

        <!-- <script defer src="../assets/js/anime-helper-defined-timelines.js"></script> -->
        <script>
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
