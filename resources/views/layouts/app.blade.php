<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--meta-->
    <meta name="description" content="">
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
    <style>
        .whats-app {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 100px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
    right: 25px;
}

.my-float {
    margin-top: 16px;
}
    </style>
    <!--custom css end-->

</head>
<script src="https://kit.fontawesome.com/24479cfe25.js" crossorigin="anonymous"></script>
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
                    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center mb-md-0 text-black">
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
                                <a class="nav-link" href="{{ route('home') }}" aria-expanded="false">Home</a>

                            </li>
                            <li><a href="{{ route('about') }}" class="nav-link">About Us</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                                <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                    <div class="dropdown-grid rounded-custom width-full">
                                        <div class="dropdown-grid-item bg-white radius-left-side">
                                            {{-- <h6 class="drop-heading">IT Development </h6>  --}}

                                            <a href="{{ route('iot') }}" class="dropdown-link px-0">
                                            <span class="me-2">
                                                    <i class=" flaticon-fingerprint"></i>
                                                </span>
                                                <div class="drop-title">Internet Of Things</div>
                                            </a>
                                            <a href="{{ route('webapp') }}" class="dropdown-link px-0">
                                            <span class="me-2">
                                                    <i class="flaticon-web-programming"></i>
                                                </span>
                                                <div class="drop-title">Web Development</div>
                                            </a>
                                            <a href="{{ route('mobileapp') }}" class="dropdown-link px-0">
                                            <span class="me-2">
                                                    <i class="flaticon-layer"></i>
                                                </span>
                                                <div class="drop-title">Mobile App Development</div>
                                            </a>
                                            <a href="{{ route('product') }}" class="dropdown-link px-0">
                                                 <span class="me-2">
                                                    <i class="flaticon-vector"></i>
                                                </span>
                                                <div class="drop-title">Product Development</div>
                                            </a>


                                        </div>
                                        <div class="dropdown-grid-item radius-right-side bg-light-subtle">
                                            {{-- <h6 class="drop-heading textblack">Staffing </h6>  --}}
                                            <a href="{{ route('usa') }}" class="dropdown-link px-0">
                                                <span class="me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-bank"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z" />
                                                    </svg>
                                                </span>
                                                <div class="drop-title">US Migration Program</div>
                                            </a>
                                            <a href="{{ route('canada') }}" class="dropdown-link px-0">
                                                <span class="me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-coin"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z" />
                                                        <path
                                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                        <path
                                                            d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
                                                    </svg>
                                                </span>
                                                <div class="drop-title">Canada Migration Program</div>
                                            </a>

                                            <a href="{{ route('staffing') }}" class="dropdown-link px-0">
                                                <span class="me-2">
                                                    <i class="flaticon-avatar"></i>
                                                </span>
                                                <div class="drop-title">Staffing</div>
                                            </a>

                                            <a href="{{ route('placement') }}" class="dropdown-link px-0">
                                                <span class="me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-check2-circle"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                                        <path
                                                            d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                                    </svg>
                                                </span>
                                                <div class="drop-title">Placement</div>
                                            </a>
                                            <a href="{{ route('recruitment') }}" class="dropdown-link px-0">
                                                <span class="me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755z" />
                                                    </svg>
                                                </span>
                                                <div class="drop-title">Recruitment</div>
                                            </a>
                                          




                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li><a href="{{ route('career') }}" class="nav-link">Career</a></li>
                            <li><a href="{{ route('contact.index') }}" class="nav-link">Contact Us</a></li>



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
                    <a href="{{ route('home') }}" class="d-flex align-items-center mb-md-0 text-black">
                        <img src="assets/img/Vri_logo.png" alt="logo" class="img-fluid ps-2" />
                    </a>
                    <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas"
                        aria-label="Close">
                        <i class="flaticon-cancel"></i>
                    </button>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">

                        <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                        <li><a href="{{ route('about') }}" class="nav-link">About us</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-full-3">
                                    <div class="dropdown-grid-item bg-white radius-left-side">
                                        <h6 class="drop-heading">IT Consulating</h6>

                                        <a href="{{ route('iot') }}" class="dropdown-link">
                                        <span class="me-2">
                                                    <i class=" flaticon-fingerprint"></i>
                                                </span>
                                            <div class="drop-title">Internet Of Things</div>
                                        </a>
                                        <a href="{{ route('webapp') }}" class="dropdown-link">
                                        <span class="me-2">
                                                    <i class="flaticon-web-programming"></i>
                                                </span>
                                            <div class="drop-title">Web Development</div>
                                        </a>
                                        <a href="{{ route('mobileapp') }}" class="dropdown-link">
                                        <span class="me-2">
                                                    <i class="flaticon-layer"></i>
                                                </span>
                                            <div class="drop-title">Mobile App Development</div>
                                        </a>
                                        <a href="{{ route('product') }}" class="dropdown-link">
                                        <span class="me-2">
                                                    <i class="flaticon-vector"></i>
                                                </span>
                                            <div class="drop-title">Product Development</div>
                                        </a>

                                    </div>
                                    <div class="dropdown-grid-item bg-white">
                                        <h6 class="drop-heading">Learning and Placement</h6>
                                        <a href="{{ route('canada') }}" class="dropdown-link">
                                        <span class="me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-coin"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z" />
                                                        <path
                                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                        <path
                                                            d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
                                                    </svg>
                                                </span>
                                            <div class="drop-title">Canada Migration Program</div>
                                        </a>
                                        <a href="{{ route('usa') }}" class="dropdown-link">
                                        <span class="me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-bank"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z" />
                                                    </svg>
                                                </span>
                                            <div class="drop-title">US Migration Program</div>
                                        </a>
                                        <a href="{{ route('staffing') }}" class="dropdown-link">
                                        <span class="me-2">
                                                    <i class="flaticon-avatar"></i>
                                                </span>
                                            <div class="drop-title">Staffing</div>
                                        </a>
                                        <a href="{{ route('placement') }}" class="dropdown-link">
                                        <span class="me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-check2-circle"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                                        <path
                                                            d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                                    </svg>
                                                </span>
                                            <div class="drop-title">Placement</div>
                                        </a>
                                        <a href="{{ route('recruitment') }}" class="dropdown-link">
                                        <span class="me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755z" />
                                                    </svg>
                                                </span>
                                            <div class="drop-title">Recruitment</div>
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
                        <li><a href="{{ route('career') }}" class="nav-link">Career</a></li>
                        <li><a href="{{ route('contact.index') }}" class="nav-link">Contact us</a></li>
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
                                    <a href="{{ route('home') }}">
                                        <img src="assets/img/Vri_logo.png" alt="logo"
                                            class="img-fluid logo-footer logo-white" style="width: 350px;" />
                                        <img src="assets/img/Vri_logo.png" alt="logo"
                                            class="img-fluid logo-footer logo-color" style="width: 320px;" />
                                    </a>
                                </div>
                                <!-- <p class="text text-black">Our latest news, articles, and resources, we will sent to
                                    your inbox weekly. </p> -->
{{-- 
                                <form class="newsletter-form position-relative d-block d-lg-flex d-md-flex">
                                    <input type="text" class="input-newsletter form-control me-2"
                                        placeholder="Enter your email" name="email" required=""
                                        autocomplete="off">
                                    <input type="submit" value="Subscribe" data-wait="Please wait..."
                                        class="btn btn-primary mt-3 mt-lg-0 mt-md-0">
                                </form> --}}
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
                                        <h3 class="footer-single-col">US office</h3><!-- Links -->
                                        <ul class="list-unstyled list-py-1 mb-0">
                                            <li class="d-flex mb-2">

                                                <div class="d-flex ">
                                                    <div class="flex-shrink-0">
                                                        <button type="button"
                                                            class="btn btn-sm btn-primary btn-icon"><i
                                                                class="fas fa-phone"></i></button>

                                                    </div>

                                                    <div class="flex-grow-1 ms-3 text-center">
                                                        <a class=" text-black" href="tel:+1(646)4795816">+1
                                                            (646)4795816</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-2">
                                                <div class="d-flex ">
                                                    <div class="flex-shrink-0">
                                                        <button type="button"
                                                            class="btn btn-sm btn-primary btn-icon"><i
                                                                class="fas fa-map-marker-alt"></i></button>

                                                    </div>

                                                    <div class="flex-grow-1 ms-3">
                                                        <a href="https://www.google.com/maps?q=A18 230 Sterling Dr Mountain House  California-95391 United States"
                                                            class="text-black">230 Sterling Dr.,
                                                            <br>Mountain House, <br> California-95391 <br> USA.
                                                        </a>
                                                    </div>
                                                    
                                                </div>

                                            </li>
                                          
                                          
                                           

                                            <!-- <li class="d-flex mb-2">

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
                                            </li> -->

                                        </ul>
                                        <!-- End Links -->
                                    </div>
                                </div>
                               
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Canada office </h3>
                                        
                                            

                                            
                                       
                                        <ul class="list-unstyled list-py-1 mb-0">
                                            <li class="d-flex mb-2">

                                                <div class="d-flex ">
                                                    <div class="flex-shrink-0">
                                                        <button type="button"
                                                            class="btn btn-sm btn-primary btn-icon"><i
                                                                class="fas fa-envelope-open"></i></button>

                                                    </div>

                                                    <div class="flex-grow-1 ms-3 text-center">
                                                        <a class=" text-black"
                                                            href="mailto:admin@vriaum.com">admin@vriaum.com</a>
                                                    </div>
                                                </div>
                                            </li>
 
                                            <li class="d-flex mb-2">
                                                <div class="d-flex ">
                                                    <div class="flex-shrink-0">
                                                        <button type="button"
                                                            class="btn btn-sm btn-primary btn-icon"><i
                                                                class="fas fa-map-marker-alt"></i></button>

                                                    </div>

                                                    <div class="flex-grow-1 ms-3">
                                                        <a href="https://www.google.com/maps?q=A18 230 Sterling Dr Mountain House  California-95391 United States"
                                                            class="text-black">999 Canada Pl,
                                                            <br>Vancouver, <br> BC V6C 3E1, <br> Canada.
                                                        </a>
                                                    </div>
                                                </div>

                                            </li>
                                           
                                          

                                        </ul>

                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Quick Links</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="{{ route('home') }}" class="text-black">Home</a></li>
                                            <li><a href="{{ route('about') }}" class="text-black">About Us</a></li>


                                            <li><a href="{{ route('career') }}" class="text-black">Career</a></li>

                                            <li><a href="{{ route('contact.index') }}" class="text-black">Contact</a>
                                            </li>

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
                                <p class="mb-lg-0 mb-md-0">&copy; 2023 Rights Reserved. <a href="{{ route('home') }}"
                                        class="text-black">VriAum Technologies</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="footer-single-col text-start text-lg-end text-md-end">
                                <ul class="list-unstyled list-inline footer-social-list mb-0">
                                  
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/company/vriaum-technologies-llc"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer bottom end-->
        </footer>
        <!--footer section end-->

        <a  class="whats-app" href="https://api.whatsapp.com/send?phone=16464795816" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>
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
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="59b8a715-3210-4497-bc12-6e3bcd6a89ed";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    <!--endbuild-->
</body>
<!-- </body> -->

</html>
