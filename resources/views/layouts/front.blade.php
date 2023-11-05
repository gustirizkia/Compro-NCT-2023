<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nusa Cita Teknologi">

    <!-- ========== Page Title ========== -->
    <title>@yield('title', 'Nusa Cita Teknologi')</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="/source/assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="/source/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/source/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/source/assets/css/themify-icons.css" rel="stylesheet">
    <link href="/source/assets/css/elegant-icons.css" rel="stylesheet">
    <link href="/source/assets/css/flaticon-set.css" rel="stylesheet">
    <link href="/source/assets/css/magnific-popup.css" rel="stylesheet">
    <link href="/source/assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="/source/assets/css/animate.css" rel="stylesheet">
    <link href="/source/assets/css/validnavs.css" rel="stylesheet">
    <link href="/source/assets/css/helper.css" rel="stylesheet">
    <link href="/source/assets/css/unit-test.css" rel="stylesheet">
    <link href="/source/assets/css/style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->


    @stack('meta_tag')
    @stack('addStyle')

</head>

<body>



    <!-- Header
    ============================================= -->
    <header>
        @include('includes.navbar')
    </header>
    <!-- End Header -->
    <main>
        @yield('content')
    </main>

    <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <!-- Singel Item -->
                    <div class="col-lg-5 col-md-6 footer-item pr-50 pr-xs-15 pr-md-15">
                        <div class="f-item about">
                            <img class="logo" src="/source/assets/img/logo-blue.png" alt="Logo">

                            <div class="f-item newsletter">
                                <p>
                                    Join our subscribers list to get the instant <br> latest news and special offers.
                                </p>
                                <form action="#">
                                    <input type="email" placeholder="Your Email" class="form-control" name="email">
                                    <button type="submit">Subscribe</button>
                                </form>
                            </div>
                            <div class="copyright-text mt-40">
                                <p>&copy; Copyright 2023. All Rights Reserved by <a href="#">validthemes</a></p>
                            </div>
                            <div class="footer-social mt-20">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Singel Item -->

                    <!-- Singel Item -->
                    <div class="col-lg-2 col-md-6 footer-item">
                        <div class="f-item link">
                            <h4 class="widget-title">Company</h4>
                            <ul>
                                <li>
                                    <a href="about-us.html">Compnay Profile</a>
                                </li>
                                <li>
                                    <a href="about-us.html">About</a>
                                </li>
                                <li>
                                    <a href="faq.html">Help Center</a>
                                </li>
                                <li>
                                    <a href="contact-us.html">Career</a>
                                </li>
                                <li>
                                    <a href="pricing.html">Plans & Pricing</a>
                                </li>
                                <li>
                                    <a href="contact-us.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Singel Item -->

                    <!-- Singel Item -->
                    <div class="col-lg-2 col-md-6 footer-item">
                        <div class="f-item link">
                            <h4 class="widget-title">Community</h4>
                            <ul>
                                <li>
                                    <a href="contact-us.html">Career</a>
                                </li>
                                <li>
                                    <a href="about-us.html">Leadership</a>
                                </li>
                                <li>
                                    <a href="about-us.html">Strategy</a>
                                </li>
                                <li>
                                    <a href="services-details.html">Services</a>
                                </li>
                                <li>
                                    <a href="about-us.html">History</a>
                                </li>
                                <li>
                                    <a href="about-us.html">Components</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Singel Item -->

                    <!-- Singel Item -->
                    <div class="col-lg-3 col-md-6 item">
                        <div class="footer-item contact">
                            <h4 class="widget-title">Contact Info</h4>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-home"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Address:</strong>
                                        5919 Trussville Crossings Pkwy, Birmingham
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Email:</strong>
                                        <a href="mailto:info@validtheme.com">info@validtheme.com</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Phone:</strong>
                                        <a href="tel:2151234567">+123 34598768</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Singel Item -->

                </div>
            </div>
        </div>

        @include('includes._footer')

        <!-- Footer Bottom -->
        <div class="footer-bottom bg-dark text-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>
                            Copyright &copy; 2023 Anaton. All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->

        <div class="foter-shape-right-bottom">
            <img src="/source/assets/img/shape/10.png" alt="Thumb">
        </div>
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
   ============================================= -->
    <script src="/source/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/source/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/source/assets/js/jquery.appear.js"></script>
    <script src="/source/assets/js/jquery.easing.min.js"></script>
    <script src="/source/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/source/assets/js/modernizr.custom.13711.js"></script>
    <script src="/source/assets/js/swiper-bundle.min.js"></script>
    <script src="/source/assets/js/wow.min.js"></script>
    <script src="/source/assets/js/progress-bar.min.js"></script>
    <script src="/source/assets/js/circle-progress.js"></script>
    <script src="/source/assets/js/isotope.pkgd.min.js"></script>
    <script src="/source/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/source/assets/js/jquery.nice-select.min.js"></script>
    <script src="/source/assets/js/count-to.js"></script>
    <script src="/source/assets/js/jquery.scrolla.min.js"></script>
    <script src="/source/assets/js/YTPlayer.min.js"></script>
    <script src="/source/assets/js/TweenMax.min.js"></script>
    <script src="/source/assets/js/validnavs.js"></script>
    <script src="/source/assets/js/main.js"></script>


    @stack('addScript')

</body>

</html>
