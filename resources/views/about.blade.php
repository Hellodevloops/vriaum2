@extends('layouts.app')
@section('content')

        <!--our story section start-->
        <section class="about-header-section ptb-120 position-relative overflow-hidden bg-dark" style="background: url('assets/img/page-header-bg.svg')no-repeat center right">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading-wrap d-flex justify-content-between z-5 position-relative">
                            <div class="about-content-left">
                                <div class="about-info mb-5">
                                <div class="col-lg-8 col-md-12">
                <h1 class="display-5 fw-bold"><u>About Us</u></h1>
                <!-- <p class="lead">Seamlessly actualize client-based users after out-of-the-box value. Globally embrace strategic data through frictionless expertise.</p> -->
            </div>
                                    <h1 class="fw-bold display-5">Grow your Business &amp; Customer Satisfaction 
                                       </h1>
                                    <p class="lead">"By prioritizing both business growth and customer satisfaction, you create a winning formula for long-term success."
</p>
                                    <a href="{{route('career')}}" class="btn btn-primary mt-4 me-3">Open Positions</a>
                                    <!-- <a href="{{route('about')}}" class="nav-link">open Positions</a> -->
                                    <a href="#our-team" class="btn btn-soft-primary mt-4">Meet Our Team</a>
                                </div>
                                <img src="assets/img/about-img-1.jpg" alt="about" class="img-fluid about-img-first mt-5 rounded-custom shadow">
                            </div>
                            <div class="about-content-right">
                                <img src="assets/img/about-img-2.jpg" alt="about" class="img-fluid mb-5 rounded-custom shadow">
                                <img src="assets/img/about-img-3.jpg" alt="about" class="rounded-custom about-img-last shadow">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white position-absolute bottom-0 h-25 bottom-0 left-0 right-0 z-2 py-5">
            </div>
        </section>
        <!--our story section end-->

        <!--feature section two start-->
        <section class="feature-section-two pt-120 "
        style="background: url('assets/img/hero-9-img.png')no-repeat center center;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-md-12">
                    <div class="section-heading" data-aos="fade-up">
                        <h4 class="h5 text-primary">Our Features</h4>
                        <h2>Solutions for Your Business Needs</h2>
                        <p><span class="text-primary">VriAum Technologies LLC </span> deep industry expertise, cost-effective delivery methodology,
                            <u>highly skilled engineers and professionals</u> , focus on quality standards, and flexibility
                            in meeting your specific business requirements effectively eliminate risk and provide
                            the foundation for our shared success.</p>
                        <ul class="list-unstyled mt-5">
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-primary rounded me-4">
                                    <i class="fas fa-bezier-curve text-white"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">CUSTOMIZED SOLUTIONS</h3>
                                    <p>Offers tailored virtual reality solutions, catering to specific needs and requirements, ensuring a personalized and optimized experience for each client.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-danger rounded me-4">
                                    <i class="fas fa-check text-white" aria-hidden="true"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">QUALITY ASSURANCE</h3>
                                    <p>Maintains rigorous quality standards throughout their products and services, ensuring high-performance, reliability, and a seamless virtual reality experience.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-success rounded me-4">
                                    <i class="fas fa-clock text-white"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">TIMELY DELIVERY</h3>
                                    <p> Vriaum Technologies prides itself on delivering projects within agreed timelines, ensuring prompt deployment of virtual reality solutions and meeting client expectations.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-info rounded me-4">
                                    <i class="fas fa-envelope-open text-white"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">END TO END SUPPORT</h3>
                                    <p>Our service provides comprehensive support throughout the entire project lifecycle, from initial consultation to post-deployment assistance, 
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="feature-img-wrap position-relative d-flex flex-column align-items-end">
                        <ul class="img-overlay-list list-unstyled position-absolute">
                            <li class="d-flex align-items-center bg-white rounded shadow-sm p-3" data-aos="fade-up"
                                data-aos-delay="50">
                                <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                <h6 class="mb-0">Software Development</h6>
                            </li>
                            <li class="d-flex align-items-center bg-white rounded shadow-sm p-3" data-aos="fade-up"
                                data-aos-delay="100">
                                <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                <h6 class="mb-0">App Development</h6>
                            </li>
                            <li class="d-flex align-items-center bg-white rounded shadow-sm p-3" data-aos="fade-up"
                            data-aos-delay="100">
                            <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                            <h6 class="mb-0">Recruitment</h6>
                        </li>
                            <li class="d-flex align-items-center bg-white rounded shadow-sm p-3" data-aos="fade-up"
                                data-aos-delay="150">
                                <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                <h6 class="mb-0">IOT</h6>
                            </li>
                        </ul>
                        <img src="assets/img/feature-img3.jpg" alt="feature image" class="img-fluid rounded-custom"
                            data-aos="fade-up">
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!--feature section two end-->

        <!--team section start-->
        <section id="our-team" class="team-section ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading text-center">
                            <h5 class="h6 text-primary">Our Team</h5>
                            <h2>The People Behind VriAum</h2>
                            <p>Empowering innovation through the dedication and expertise of the visionary minds behind VriAum. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="team-single-wrap mb-5">
            <div class="team-img rounded-custom">
                <img src="assets/img/team/team-1.jpg" alt="team" class="img-fluid position-relative">
                <ul class="list-unstyled team-social-list d-flex flex-column mb-0">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
            <div class="team-info mt-4 text-center">
                <h5 class="h6 mb-1">John Sullivan</h5>
                <p class="text-muted small mb-0">Front End Developer</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="team-single-wrap mb-5">
            <div class="team-img rounded-custom">
                <img src="assets/img/team/team-2.jpg" alt="team" class="img-fluid position-relative">
                <ul class="list-unstyled team-social-list d-flex flex-column mb-0">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
            <div class="team-info mt-4 text-center">
                <h5 class="h6 mb-1">Emily Smith</h5>
                <p class="text-muted small mb-0">UI Designer</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="team-single-wrap mb-5">
            <div class="team-img rounded-custom">
                <img src="assets/img/team/team-3.jpg" alt="team" class="img-fluid position-relative">
                <ul class="list-unstyled team-social-list d-flex flex-column mb-0">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
            <div class="team-info mt-4 text-center">
                <h5 class="h6 mb-1">Mark Johnson</h5>
                <p class="text-muted small mb-0">Back End Developer</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="team-single-wrap mb-5">
            <div class="team-img rounded-custom">
                <img src="assets/img/team/team-4.jpg" alt="team" class="img-fluid position-relative">
                <ul class="list-unstyled team-social-list d-flex flex-column mb-0">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
            <div class="team-info mt-4 text-center">
                <h5 class="h6 mb-1">Jane doe</h5>
                <p class="text-muted small mb-0">Graphic Designer</p>
            </div>
        </div>
    </div>
</div>

            </div>
        </section>
        <!--team section end-->

        <!--testimonial section start-->
        <section class="testimonial-section ptb-120 ">
            <div class="container">
                <div class="row justify-content-center align-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center">
                            <h4 class="h5 text-primary">Testimonial</h4>
                            <h2>What They Say About Us</h2>
                            <p>Enjoy Peace of Mind with Comprehensive Medical Insurance Facilities that Prioritize Your Health and Well-being.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative w-100">
                            <div class="swiper testimonialSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/1.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Mr.Rupan Oberoi</h6>
                                                    <small>Founder and CEO at Amaara Herbs</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>The Best Template You Got to Have it!</h6>
                                                Globally network long-term high-impact schemas vis-a-vis distinctive e-commerce
                                                cross-media infrastructures rather than ethical
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            </ul>
                                            <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/3.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Oberoi R.</h6>
                                                    <small>CEO at Herbs</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Embarrassed by the First Version.</h6>
                                                The Vriaum template is absolutely amazing, offering a stunning blend of functionality, aesthetics, and user-friendly design.
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            </ul>
                                            <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/2.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Mr.Rupan Oberoi</h6>
                                                    <small>Founder and CEO</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Amazing Vriaum  template!</h6>
                                                Appropriately negotiate interactive niches rather than parallel strategic theme
                                                incubate premium total linkage areas.
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            </ul>
                                            <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/4.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Joan Dho</h6>
                                                    <small>Founder and CTO</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Best Template for SAAS Company!</h6>
                                                Dynamically create innovative core competencies with effective best
                                                practices promote innovative infrastructures.
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            </ul>
                                            <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/5.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Ranu Mondal</h6>
                                                    <small>Lead Developer</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>It is undeniably good!</h6>
                                                Rapidiously supply client-centric e-markets and maintainable processes
                                                progressively engineer
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            </ul>
                                            <img src="assets/img/testimonial/quotes.svg" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-nav-control">
                                <span class="swiper-button-next"></span>
                                <span class="swiper-button-prev"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--testimonial section end-->

        <!--our location address start-->
        <section class="office-address-section ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading text-center">
                            <h4 class="h5 text-primary">Our Office</h4>
                            <h2>Located Around the World</h2>
                            <p>Where Boundaries Dissolve and Work Unites: The Global Office Experience. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 mt-xl-0">
                        <div class="rounded-custom border d-block office-address overflow-hidden z-2" style="background: url('assets/img/office-img-1.jpg')no-repeat center center / cover">
                            <div class="office-content text-center p-4">
                                <span class="office-overlay"></span>
                                <div class="office-info">
                                    <h5>Singapore</h5>
                                    <address>
                                        4636 Bombardier Way <br> Sr,Worthington, <br>California(CA), 94102
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 mt-xl-0">
                        <div class="rounded-custom border d-block office-address overflow-hidden z-2" style="background: url('assets/img/office-img-2.jpg')no-repeat center center / cover">
                            <div class="office-content text-center p-4">
                                <span class="office-overlay"></span>
                                <div class="office-info">
                                    <h5>Los Angeles</h5>
                                    <address>
                                        794 Mcallister <br> St. Oak Harbor, <br>Washington(WA), 98277
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 mt-xl-0">
                        <div class="rounded-custom border d-block office-address overflow-hidden z-2" style="background: url('assets/img/office-img-3.jpg')no-repeat center center / cover">
                            <div class="office-content text-center p-4">
                                <span class="office-overlay"></span>
                                <div class="office-info">
                                    <h5>New York</h5>
                                    <address>
                                        4219 Snowbird Lane <br> St Carthage, <br>New York(NY), 13619
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 mt-xl-0">
                        <div class="rounded-custom border d-block office-address overflow-hidden z-2" style="background: url('assets/img/office-img-5.jpg')no-repeat center center / cover">
                            <div class="office-content text-center p-4">
                                <span class="office-overlay"></span>
                                <div class="office-info">
                                    <h5>Barlin City</h5>
                                    <address>
                                        Brandenburgische Straße <br> DE. Berlin Kreuzberg, <br>Berlin(CA), 10997
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our location address end-->

        <!--cat subscribe start-->
        <section class="cta-subscribe bg-dark text-white ptb-120 position-relative overflow-hidden">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="subscribe-info-wrap text-center position-relative z-2">
                            <div class="section-heading aos-init aos-animate" data-aos="fade-up">
                                <h4 class="h5 text-warning">Get In Touch With Us</h4>
                                <h2>Start Your Journey With Us</h2>
                                <p>Get in touch with us today to discuss your software needs and embark on a journey of digital transformation.</p>
                            </div>
                            <div class="form-block-banner mw-60 m-auto mt-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                                <a href="{{route('contact.index')}}" class="btn btn-primary">Contact with Us</a>
                                <!-- <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg"
                                    class="text-decoration-none popup-youtube d-inline-flex align-items-center watch-now-btn ms-lg-3 ms-md-3 mt-3 mt-lg-0">
                                    <i class="fas fa-play"></i> Watch Demo </a> -->
                            </div>
                            <!-- <ul class="nav justify-content-center subscribe-feature-list mt-4" data-aos="fade-up"
                                data-aos-delay="100">
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Free 14-day trial</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>No credit card
                                        required</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Support 24/7</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Cancel anytime</span>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
                <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
            </div>
        </section>
        <!--cat subscribe end-->

            @endsection