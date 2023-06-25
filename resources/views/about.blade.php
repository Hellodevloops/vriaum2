@extends('layouts.app')
@section('content')

        <!--our story section start-->
        <section class="our-story-section pt-120 pb-120" style="background: url('assets/img/shape/dot-dot-wave-shape.svg')no-repeat left bottom">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5 col-md-12 order-lg-1">
                        <div class="section-heading sticky-sidebar">
                            <h4 class="h5 text-primary">Crafting Future-Focused Solutions</h4>
                            <h2>About Us</h2>
                            <p>
                                VriAum Technologies LLC is passionate about leveraging technology to drive innovation
                                and empower businesses to thrive in the digital age. With a deep understanding of the
                                ever-evolving software landscape and a team of highly skilled professionals, we are
                                dedicated to delivering cutting-edge solutions that meet our clients' unique needs.
                            </p>
                            <p>
                                Vriaum software solutions span across a wide range of domains, including enterprise
                                applications, web and mobile development, internet of things and more. Whether our
                                clients require a simple mobile app or a complex
                                enterprise system, we have the expertise to deliver scalable, secure, and user-friendly
                                software solutions that align with their unique requirements
                            </p>
                            <ul class="list-unstyled d-flex flex-wrap list-two-col mt-4 mb-4">
                                <li class="py-1">
                                    <i class="fas fa-check-circle me-2 text-primary"></i>
                                    Discovery
                                </li>
                                <li class="py-1">
                                    <i class="fas fa-check-circle me-2 text-primary"></i>
                                    Planning
                                </li>
                                <li class="py-1">
                                    <i class="fas fa-check-circle me-2 text-primary"></i>Event
                                    Execute
                                </li>
                                <li class="py-1">
                                    <i class="fas fa-check-circle me-2 text-primary"></i>
                                    Deliver
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order-lg-0">
                        <div class="story-grid-wrapper position-relative mt-5">
                            <!--animated shape start-->
                            <ul class="position-absolute animate-element parallax-element shape-service d-none d-lg-block">
                                <li class="layer" data-depth="0.02">
                                    <img src="assets/img/color-shape/image-2.svg" alt="shape" class="img-fluid position-absolute color-shape-2 z-5">
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="assets/img/color-shape/feature-3.svg" alt="shape" class="img-fluid position-absolute color-shape-3">
                                </li>
                            </ul>
                            <!--animated shape end-->
                            <div class="story-grid rounded-custom bg-dark overflow-hidden position-relative">
                                <div class="story-item bg-light-subtle border">
                                    <h3 class="display-5 fw-bold mb-1 text-success">550K+</h3>
                                    <h6 class="mb-0">Active Users</h6>
                                </div>
                                <div class="story-item bg-white border">
                                    <h3 class="display-5 fw-bold mb-1 text-primary">250+</h3>
                                    <h6 class="mb-0">Team Members</h6>
                                </div>
                                <div class="story-item bg-white border">
                                    <h3 class="display-5 fw-bold mb-1 text-dark">$20M+</h3>
                                    <h6 class="mb-0">Revenue Per/Year</h6>
                                </div>
                                <div class="story-item bg-light-subtle border">
                                    <h3 class="display-5 fw-bold mb-1 text-warning">8 Years</h3>
                                    <h6 class="mb-0">In Business</h6>
                                </div>
                                <div class="story-item bg-light-subtle border">
                                    <h3 class="display-5 fw-bold mb-1 text-danger">425+</h3>
                                    <h6 class="mb-0">Clients Worldwide</h6>
                                </div>
                                <div class="story-item bg-white border">
                                    <h3 class="display-5 fw-bold mb-1 text-primary">855+</h3>
                                    <h6 class="mb-0">Projects Completed</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <p>VriAum Technologies LLC deep industry expertise, cost-effective delivery methodology,
                            highly skilled engineers and professionals, focus on quality standards, and flexibility
                            in meeting your specific business requirements effectively eliminate risk and provide
                            the foundation for our shared success.</p>
                        <ul class="list-unstyled mt-5">
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-primary rounded me-4">
                                    <i class="fas fa-bezier-curve text-white"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">CUSTOMIZED SOLUTIONS</h3>
                                    <p>Unique requirements
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-danger rounded me-4">
                                    <i class="fas fa-check text-white" aria-hidden="true"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">QUALITY ASSURANCE</h3>
                                    <p>Quality standards
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-success rounded me-4">
                                    <i class="fas fa-clock text-white"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">TIMELY DELIVERY</h3>
                                    <p>Projects Within Timelines
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-info rounded me-4">
                                    <i class="fas fa-envelope-open text-white"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">END TO END SUPPORT</h3>
                                    <p>Ensure smooth operations
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
                            <h2>The People Behind Quiety</h2>
                            <p>Intrinsicly strategize cutting-edge before interoperable applications incubate extensive
                                expertise through integrated intellectual capital. </p>
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
                                <h5 class="h6 mb-1">John Sullivan</h5>
                                <p class="text-muted small mb-0">Front End Developer</p>
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
                                <h5 class="h6 mb-1">John Sullivan</h5>
                                <p class="text-muted small mb-0">Front End Developer</p>
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
                                <h5 class="h6 mb-1">John Sullivan</h5>
                                <p class="text-muted small mb-0">Front End Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single-wrap mb-5">
                            <div class="team-img rounded-custom">
                                <img src="assets/img/team/team-5.jpg" alt="team" class="img-fluid position-relative">
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
                                <img src="assets/img/team/team-6.jpg" alt="team" class="img-fluid position-relative">
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
                                <img src="assets/img/team/team-7.jpg" alt="team" class="img-fluid position-relative">
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
                                <img src="assets/img/team/team-8.jpg" alt="team" class="img-fluid position-relative">
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
                            <p>Uniquely promote adaptive quality vectors rather than stand-alone e-markets pontificate alternative architectures with accurate schemas.</p>
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
                                                <img src="assets/img/testimonial/2.jpg" class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Mr.Rupan Oberoi</h6>
                                                    <small>Founder and CEO</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Amazing Quiety template!</h6>
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
                            <p>Dynamically technically sound technologies with parallel task convergence quality vectors
                                through excellent relationships. </p>
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
                                <a href="contact-us.html" class="btn btn-primary">Contact with Us</a>
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