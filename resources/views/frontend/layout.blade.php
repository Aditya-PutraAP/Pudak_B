<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Pudak B</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.png') }}" />
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/gijgo.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.css') }}" />
    <link rel="stylesheet"
        href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!-- header-start -->
    <header>
        <div class="header-area">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="/">
                                        <p class="h4 font-weight-bold">Pudak B</p>
                                        <!-- <img src="{{ asset('frontend/img/logo.png') }}" alt="" /> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li>
                                                <a class="active" href="/">Beranda</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('about') }}">Informasi Desa</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('news.index') }}">Berita</a>
                                            </li>
                                            <li>
                                                <a href="travel_destination.html">Layanan</a>
                                            </li>
                                            <li>
                                                <a href="contact.html">Kontak</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="login_wrap d-flex align-items-center justify-content-end">
                                    <div class="login_btn">
                                        @guest
                                            <a href="{{ route('login') }}" class="boxed-btn">Login</a>
                                        @else
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                <button type="submit" class="boxed-btn btn-logout">Logout</button>
                                            </form>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- Main Content -->
    @yield('content')


    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <h3 class="footer_title">Profil</h3>
                            </div>
                            <b>Padukuhan Pudak B - Kel. Girisubo
                                <br>
                                Kab. Gunungkidul - DIY</b>
                            <p>
                                Website desa dibangun sebagai bagian dari SISTEM INFORMASI
                                DESA yang berfungsi sebagai portal informasi<br />
                            </p>
                            <div class="row">
                                <div class="col-xl-4 col-md-6 col-lg-4 mt-10">
                                    <div class="footer_widget">
                                        <h3 class="footer_title">
                                            <i class="fa fa-envelope"></i>
                                            Email
                                        </h3>
                                        <ul class="links">
                                            <li><a href="#">pudakb@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-lg-6 mt-10 ml-5">
                                    <div class="footer_widget">
                                        <h3 class="footer_title">
                                            <i class="fa fa-instagram"></i>
                                            Instagram
                                        </h3>
                                        <ul class="links">
                                            <li><a href="#">@pudak_b</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-md-6 col-lg-7" style="margin: left 50px;">
                        <div class="footer_widget">
                            <iframe class="mb-4 mb-lg-0"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15796.540530373512!2d110.70959326246582!3d-8.189139743476218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bc74cb0b953fb%3A0xff05399f52a76402!2sPudak%2C%20Jepitu%2C%20Kec.%20Girisubo%2C%20Kabupaten%20Gunung%20Kidul%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1719977326993!5m2!1sid!2sid"
                                frameborder="0" style="border:0; width: 100%; height: 384px;"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            Copyright &copy; 2024 by Padukuhan Pudak B
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/ajax-form.js') }}"></script>
    <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/scrollIt.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/js/gijgo.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>

    <!--contact js-->
    <script src="{{ asset('frontend/js/contact.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.form.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend/js/mail-script.js') }}"></script>

    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>',
            },
        });
    </script>
</body>

</html>
