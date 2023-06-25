<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--meta-->
    <meta name="description"
        content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta name="author" content="ThemeTags">

    <!--favicon icon-->
    <link rel="icon" href="assets/img/Vri_logo_preview.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>Vriaum Technologies</title>

    <!--build:css-->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!--custom css end-->

</head>

<body>

    <!--preloader start-->
    <div id="preloader" class="bg-light-subtle">
        <div class="preloader-wrap">
            <img src="assets/img/Vri_logo_preview.png" alt="logo" class="img-fluid preloader-icon">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">
        <!--header section start-->
        <!--header start-->
        <header class="main-header position-absolute w-100">
            <nav class="navbar navbar-expand-xl navbar-light sticky-header">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="index.html" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="assets/img/Vri_logo.png" alt="logo" class="img-fluid logo-header logo-white" />
                        <img src="assets/img/Vri_logo.png" alt="logo" class="img-fluid logo-header logo-color" />
                    </a>

                    <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop"
                        role="button">
                        <i class="flaticon-menu" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop"
                            aria-controls="offcanvasWithBackdrop"></i>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="nav col-12 col-md-auto justify-content-center main-menu text-black">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{route('home')}}" aria-expanded="false">Home</a>

                            </li>
                            <li><a href="{{route('about')}}" class="nav-link">About Us</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Services</a>
                                <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                    <div class="dropdown-grid rounded-custom width-full">
                                        <div class="dropdown-grid-item bg-white radius-left-side">
                                            <!-- <h6 class="drop-heading">Useful Links</h6> -->
                                            <a href="{{ route('iot')}}" class="dropdown-link px-0">
                                                <span class="me-2">
                                                    <i class="flaticon-fingerprint"></i>
                                                </span>
                                                <div class="drop-title">Software Development</div>
                                            </a>
                                            <a href="{{ route('iot')}}" class="dropdown-link px-0">
                                                <span class="me-2">
                                                    <i class="flaticon-phone-book"></i>
                                                </span>
                                                <div class="drop-title">IOT</div>
                                            </a>

                                        </div>
                                        <div class="dropdown-grid-item radius-right-side bg-light-subtle">
                                            <!-- <h6 class="drop-heading">Utility Pages</h6> -->
                                            <a href="{{ route('iot')}}" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="flaticon-web-programming"></i>
                                                </span>
                                                <div class="drop-title">App Development</div>
                                            </a>
                                            <a href="{{ route('iot')}}" class="dropdown-link">
                                                <span class="me-2">
                                                    <i class="flaticon-headset"></i>
                                                </span>
                                                <div class="drop-title">Recruitment</div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{route('career')}}" class="nav-link">Career</a></li>
                            <li><a href="{{route('contact.index')}}" class="nav-link">Contact Us</a></li>



                        </ul>
                    </div>

                    <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                        {{-- <a href="javascript:void(0)" class="btn btn-link p-1 tt-theme-toggle m-3">
                            <div class="tt-theme-light" data-bs-toggle="tooltip" data-bs-placement="left"
                                data-bs-title="Light"><i class="flaticon-sun-1 fs-lg"></i></div>
                            <div class="tt-theme-dark" data-bs-toggle="tooltip" data-bs-placement="left"
                                data-bs-title="Dark"><i class="flaticon-moon-1 fs-lg"></i></div>
                        </a> --}}
                        <a href="contact.html" class="btn btn-primary">Download Brochure</a>
                    </div>
                </div>
            </nav>
            <!--offcanvas menu start-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                <div class="offcanvas-header d-flex align-items-center mt-4">
                    <a href="index-2.html" class="d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="assets/img/Vri_logo.png" alt="logo" class="img-fluid ps-2" />
                    </a>
                    <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="flaticon-cancel"></i>
                    </button>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                       
                        <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
                        <li><a href="{{route('about')}}" class="nav-link">About us</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Services</a> 
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-full-3">
                                    <div class="dropdown-grid-item bg-white radius-left-side">
                                        <h6 class="drop-heading">IT Consulating</h6>
                                        
                                        <a href="{{route('iot')}}" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-layer"></i>
                                            </span>
                                            <div class="drop-title">Software Devlopment</div>
                                        </a>
                                        <a href="{{route('iot')}}" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-phone-book"></i>
                                            </span>
                                            <div class="drop-title">IOT Devlopment</div>
                                        </a>
                                        <a href="{{route('iot')}}" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-flash"></i>
                                            </span>
                                            <div class="drop-title">App Devlopment</div>
                                        </a>
                                      
                                    </div>
                                    <div class="dropdown-grid-item bg-white">
                                        <h6 class="drop-heading">Learning and Placement</h6>
                                        <a href="{{route('iot')}}" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-clipboard"></i>
                                            </span>
                                            <div class="drop-title">Canada Placement</div>
                                        </a>
                                        <a href="{{route('iot')}}" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-settings"></i>
                                            </span>
                                            <div class="drop-title">Us Placement</div>
                                        </a>
                                     
                                    </div>
                                    <div class="dropdown-grid-item last-item bg-light-subtle radius-right-side">
                                        <a href="#">
                                            <img src="assets/img/feature-img3.jpg" alt="add"
                                                class="img-fluid rounded-custom" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{route('career')}}" class="nav-link">Career</a></li>
                        <li><a href="{{route('contact.index')}}" class="nav-link">Contact us</a></li>
                    </ul>
                    <div class="action-btns mt-4 ps-3">
                        <a href="login.html" class="btn btn-outline-primary me-2">Sign In</a>
                        <a href="request-demo.html" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <!--offcanvas menu end-->
        </header>
        <!--header end-->
        <!--header section end-->
        @yield('content')
        
        <!--footer section start-->
        <footer class="footer-section">
            <!--footer top start-->
            <!--for light footer add .footer-light class and for dark footer add .bg-dark .text-white class-->
            <div class="footer-top footer-light ptb-120 hero-it-solution hero-nine-bg ptb-120"
                style="background: url('assets/img/hero-9-img.png')no-repeat center center">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-8 col-lg-4 mb-md-4 mb-lg-0">
                            <div class="footer-single-col">
                                <div class="footer-single-col mb-4">
                                    <a href="index.html">
                                        <img src="assets/img/Vri_logo.png" alt="logo"
                                            class="img-fluid logo-footer logo-white" style="width: 350px;" />
                                        <img src="assets/img/Vri_logo.png" alt="logo"
                                            class="img-fluid logo-footer logo-color" style="width: 320px;"  />
                                    </a>
                                </div>
                                <p class="text text-black">Our latest news, articles, and resources, we will sent to
                                    your inbox weekly. </p>

                                <form class="newsletter-form position-relative d-block d-lg-flex d-md-flex">
                                    <input type="text" class="input-newsletter form-control me-2"
                                        placeholder="Enter your email" name="email" required="" autocomplete="off">
                                    <input type="submit" value="Subscribe" data-wait="Please wait..."
                                        class="btn btn-primary mt-3 mt-lg-0 mt-md-0">
                                </form>
                                <!-- <div class="ratting-wrap mt-4">
                                    <h6 class="mb-0">10/10 Overall rating</h6>
                                    <ul class="list-unstyled rating-list list-inline mb-0">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7 mt-4 mt-md-0 mt-lg-0">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3 class="text-center">Reach Us</h3><!-- Links -->
                                        <ul class="list-unstyled list-py-1 mb-0">
                                            <li class="d-flex mb-2">
                                                <div class="d-flex ">
                                                    <div class="flex-shrink-0">
                                                        <button type="button" class="btn btn-sm btn-primary btn-icon"><i
                                                                class="fas fa-map-marker-alt"></i></button>

                                                    </div>

                                                    <div class="flex-grow-1 ms-3">
                                                        <a href="https://www.google.com/maps?q=A18 XYZ Street New York 53022 United States"
                                                            class="text-black">A18 XYZ Street
                                                            <br> New York 53022, <br> United States
                                                        </a>
                                                    </div>
                                                </div>

                                            </li>

                                            <li class="d-flex mb-2">

                                                <div class="d-flex ">
                                                    <div class="flex-shrink-0">
                                                        <button type="button" class="btn btn-sm btn-primary btn-icon"><i
                                                                class="fas fa-envelope-open"></i></button>

                                                    </div>

                                                    <div class="flex-grow-1 ms-3 text-center">
                                                        <a class=" text-black"
                                                            href="mailto:info@vriaum.com">info@vriaum.com</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="d-flex mb-2">

                                                <div class="d-flex ">
                                                    <div class="flex-shrink-0">
                                                        <button type="button" class="btn btn-sm btn-primary btn-icon"><i
                                                                class="fas fa-phone"></i></button>

                                                    </div>

                                                    <div class="flex-grow-1 ms-3 text-center">
                                                        <a class=" text-black" href="tel:+155895548855">+1
                                                            5589548855</a>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                        <!-- End Links -->
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Quick Links</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="{{route('about')}}" class="text-decoration-none">About Us</a></li>

                                            <li><a href="{{route('home')}}" class="text-decoration-none">home</a></li>
                                            <li><a href="{{route('career')}}" class="text-decoration-none">Career</a></li>

                                            <li><a href="{{route('contact.index')}}" class="text-decoration-none">Contact</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Services</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="{{route('iot')}}" class="text-decoration-none">Web Devlopement</a></li>
                                            <li><a href="{{route('iot')}}" class="text-decoration-none">Product devlopment</a></li>
                                            <li><a href="{{route('iot')}}" class="text-decoration-none">IOT</a></li>
                                            <li><a href="{{route('iot')}}" class="text-decoration-none">App Devlopment</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--footer top end-->

            <!--footer bottom start-->
            <div class="footer-bottom footer-light py-4  hero-it-solution hero-nine-bg ptb-120"
                style="background: url('assets/img/hero-9-img.png')no-repeat center center">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="copyright-text">
                                <p class="mb-lg-0 mb-md-0">&copy; 2023 Rights Reserved. <a href="index.html"
                                        class="text-decoration-none">VriAum Technologies</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="footer-single-col text-start text-lg-end text-md-end">
                                <ul class="list-unstyled list-inline footer-social-list mb-0">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer bottom end-->
        </footer> <!--footer section end-->


    </div>



    <!--build:js-->
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/swiper-bundle.min.js"></script>
    <script src="assets/js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendors/parallax.min.js"></script>
    <script src="assets/js/vendors/aos.js"></script>
    <script src="assets/js/vendors/massonry.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!--endbuild-->
</body>

</html>