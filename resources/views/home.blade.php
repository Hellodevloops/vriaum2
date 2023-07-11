
@extends('layouts.app')
@section('content')

        <!--hero section start-->
        <section class="hero-it-solution hero-nine-bg ptb-120"
            style="background: url('assets/img/hero-9-img.png')no-repeat center center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-10">
                        <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                            <h1 class="fw-bold display-5 mt-5">Driving Growth through Seamless 
                            <span class="fw-bold display-5 text-primary"> IT Solutions and Agile Staffing.</span>
                        </h1>
                            <p class="lead mt-5">
                               

                                "Unleash your business potential with our IT solutions and staffing expertise, igniting growth and surpassing goals."
                            </p>
                            <div class="action-btn mt-5 align-items-center d-block d-sm-flex d-lg-flex d-md-flex">
                                <a href="{{ route('iot')}}" class="btn btn-primary me-3">Explore Solutions</a>
                                {{-- <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg" class="text-decoration-none popup-youtube d-inline-flex align-items-center watch-now-btn mt-3 mt-lg-0 mt-md-0 text-primary">
                                    <i class="fas fa-play text-primary border-2 border-primary"></i>
                                    Watch Demo
                                </a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="hero-img position-relative mt-5 mt-lg-0">
                            <img src="assets/img/banner_image.png" alt="hero hero-it-solution " class="img-fluid">
                            <div class="dots">
                                <img src="assets/img/banner_dot.png" alt="dot" class="dot-1">
                                <img src="assets/img/banner_dot.png" alt="dot" class="dot-2">
                            </div>
                            <div class="bubble">
                                <span class="bubble-1"></span>
                                <span class="bubble-2"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--hero section end-->

        <!--customer section start-->
        <!-- <div class="customer-section pb-80 hero-nine-bg hero-it-solution"
            style="background: url('assets/img/hero-9-img.png')no-repeat center center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-12">
                        <ul class="customer-logos-grid text-center list-unstyled mb-0">
                            <li>
                                <img src="assets/img/clients/client-logo-1.svg" width="150" alt="clients logo"
                                    class="img-fluid customer-logo p-1 p-md-2 p-lg-3 m-auto" data-aos="fade-up"
                                    data-aos-delay="50">
                            </li>
                            <li>
                                <img src="assets/img/clients/client-logo-2.svg" width="150" alt="clients logo"
                                    class="img-fluid customer-logo p-1 p-md-2 p-lg-3 m-auto" data-aos="fade-up"
                                    data-aos-delay="50">
                            </li>
                            <li>
                                <img src="assets/img/clients/client-logo-3.svg" width="150" alt="clients logo"
                                    class="img-fluid customer-logo p-1 p-md-2 p-lg-3 m-auto" data-aos="fade-up"
                                    data-aos-delay="50">
                            </li>
                            <li>
                                <img src="assets/img/clients/client-logo-4.svg" width="150" alt="clients logo"
                                    class="img-fluid customer-logo p-1 p-md-2 p-lg-3 m-auto" data-aos="fade-up"
                                    data-aos-delay="50">
                            </li>
                            <li>
                                <img src="assets/img/clients/client-logo-5.svg" width="150" alt="clients logo"
                                    class="img-fluid customer-logo p-1 p-md-2 p-lg-3 m-auto" data-aos="fade-up"
                                    data-aos-delay="100">
                            </li>
                            <li>
                                <img src="assets/img/clients/client-logo-6.svg" width="150" alt="clients logo"
                                    class="img-fluid customer-logo p-1 p-md-2 p-lg-3 m-auto" data-aos="fade-up"
                                    data-aos-delay="100">
                            </li>
                            <li>
                                <img src="assets/img/clients/client-logo-7.svg" width="150" alt="clients logo"
                                    class="img-fluid customer-logo p-1 p-md-2 p-lg-3 m-auto" data-aos="fade-up"
                                    data-aos-delay="100">
                            </li>
                            <li>
                                <img src="assets/img/clients/client-logo-8.svg" width="150" alt="clients logo"
                                    class="img-fluid customer-logo p-1 p-md-2 p-lg-3 m-auto" data-aos="fade-up"
                                    data-aos-delay="100">
                            </li>
                        </ul>
                        <p class="text-center mt-lg-5 mt-4 mb-0" data-aos="fade-up" data-aos-delay="200">Trusted More
                            than 25,00+ Companies Around the World</p>
                    </div>
                </div>
            </div>
        </div> -->
        <!--customer section end-->
        <!--About us start-->
        <section class="ptb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left text-lg-center mb-32 mb-lg-0">
                            <img src="assets/img/about.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right">
                            <h2 class="mb-4">
                                About Us
                            </h2>
                            <h4 class="text-primary h5 mb-3">Crafting Future-Focused Solutions</h4>
                            <p>
                                At <span class="text-primary">VriAum Technologies LLC</span>, we are passionate about leveraging technology to drive innovation and empower businesses to thrive in the digital age. With a deep understanding of the ever-evolving software landscape and a team of highly skilled professionals,<span class="text-primary"> we are dedicated to delivering cutting-edge solutions that meet our clients' </span>unique needs.
                            </p>
                            <p>
                                Our software solutions span across a wide range of domains, <span class="text-primary">including enterprise applications, web and mobile development, and the Internet of Things </span>. Whether our clients require a simple mobile app or a complex enterprise system, we have the expertise to deliver scalable, secure, and user-friendly software solutions that align with their unique requirements.
                            </p>
                            <p>
                                In addition to our software solutions, we also provide top-notch staffing services. We understand the critical role that talented professionals play in driving business success. With our extensive network and industry expertise, we connect our clients with exceptional candidates who possess the skills and experience necessary to excel in their organizations.
                            </p>
                            {{-- <ul class="list-unstyled d-flex flex-wrap list-two-col mt-4 mb-4">
                                <li class="py-1">
                                    <i class="fas fa-check-circle me-2 text-primary"></i>
                                    Discovery
                                </li>
                                <li class="py-1">
                                    <i class="fas fa-check-circle me-2 text-primary"></i>
                                    Planning
                                </li>
                                <li class="py-1">
                                    <i class="fas fa-check-circle me-2 text-primary"></i>
                                    Event Execute
                                </li>
                                <li class="py-1">
                                    <i class="fas fa-check-circle me-2 text-primary"></i>
                                    Deliver
                                </li>
                            </ul> --}}
                            <a href="{{route('about')}}" class="link-with-icon text-decoration-none mt-3 btn btn-primary">
                                Know More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section> <!--About us end-->
        <!--Why choose us start-->
        <section class="feature-section-two pt-60 "
            style="background: url('assets/img/hero-9-img.png')no-repeat center center;">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="feature-content-wrap">
                            <div class="section-heading">
                                <h2>We are development experts on all technologies</h2>
                                <p>With our deep expertise in a wide range of technologies, we empower businesses to harness the full potential of digital transformation, driving growth and success in the ever-evolving tech landscape.</p>
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-primary rounded me-4">
                                        <i class="fas fa-bezier-curve text-white"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h4">Pixel Perfect Design</h3>
                                        <p class="h6">Expertise lies in maintaining consistency, achieving precision, and ensuring optimal user experience across different browsers and devices.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-primary rounded me-4">
                                <i class="fas fa-layer-group text-white"></i>
                                    </div>
                               
                                    <div class="icon-content">
                                        <h3 class="h4">Unique &amp; Minimal Design</h3>
                                        <p class="h6">Stay updated with the latest developments and experiment with innovative design approaches to create fresh and captivating web experiences.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4 mb-lg-0">
                                <div class="icon-box bg-primary rounded me-4">
                                <i class="fas fa-headset text-white"></i>
                                    </div>
                                    
                                    <div class="icon-content">
                                        <h3 class="h4">24/7 Free Online Support</h3>
                                        <p class="h6">Get peace of mind <span class="text-primary">with our 24/7 free online support</span>, ensuring prompt assistance and uninterrupted service whenever you need it.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="feature-img-wrap">
                            <img src="assets/img/homedev1.jpg" alt="feature image" class="img-fluid rounded-custom">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- why choose us end -->
        <!-- services start -->
        <section class="services-icon ptb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="text-center">
                            <h2>Services We Provide</h2>
                            <p>
                                Our company is delivering innovative software solutions to streamline business
                                operations and enhance productivity.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-3 p-0">
                        <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom border-end">
                            <div class="service-icon icon-center">
                                <img src="assets/img/service/coding.png" alt="service icon" width="65" height="65">
                            </div>
                            <div class="service-info-wrap">
                                <h3 class="h5">Software Development</h3>
                                <p>
                                    Unlocking innovation through custom software solutions tailored to your business
                                    needs.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 p-0">
                        <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom border-end">
                            <div class="service-icon icon-center">
                                <img src="assets/img/service/app-development.png" alt="service icon" width="65"
                                    height="65">
                            </div>
                            <div class="service-info-wrap">
                                <h3 class="h5">App Development</h3>
                                <p>
                                    Transforming ideas into engaging and intuitive mobile applications that captivate
                                    users.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 p-0">
                        <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom border-end">
                            <div class="service-icon icon-center">
                                <img src="assets/img/service/graphic-design.png" alt="service icon" width="65"
                                    height="65">
                            </div>
                            <div class="feature-info-wrap">
                                <h3 class="h5">Internet Of Things</h3>
                                <p>
                                    Connecting the physical and digital worlds through IoT solutions and data-driven
                                    insights.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 p-0">
                        <div class="single-service p-lg-5 p-4 text-center border-bottom mt-3">
                            <div class="service-icon icon-center">
                                <img src="assets/img/service/promotion.png" alt="service icon" width="65" height="65">
                            </div>
                            <div class="feature-info-wrap">
                                <h3 class="h5">Recruitment</h3>
                                <p>
                                    Simplify and streamline your hiring process with our comprehensive recruitment
                                    solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services end -->
        <!-- 2nd features start -->
        <section class="feature-section pt-60 pb-120"
            style="background: url('assets/img/hero-9-img.png')no-repeat center center;">
            <div class="container">
                <div class="row align-items-lg-center justify-content-between">
                    <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                        <div class="mb-4" data-aos="fade-up">
                            <h2>Experience High-Quality Work by Our Software Company</h2>
                            <p>At <span class="text-primary">Vriaum Technologies </span>, we pride ourselves on delivering nothing short of exceptional
                                quality in our work. With a team of<b> highly skilled professionals and a commitment to
                                excellence</b>, we ensure that our clients receive top-notch software solutions tailored to
                                their unique needs.</p>
                        </div>
                        <ul class="list-unstyled d-flex flex-wrap list-two-col mt-5" data-aos="fade-up"
                            data-aos-delay="50">
                            <li>
                                <span class="d-block mb-4"><i class="fas fa-clock fa-2x text-primary"></i></span>
                                <h3 class="h5">High-Quality Deliverables</h3>
                                <p> We are committed to delivering software solutions that are of the highest quality,
                                    meeting and surpassing industry standards.</p>
                            </li>
                            <li>
                                <span class="d-block mb-4"><i class="fas fa-user fa-2x text-primary"></i></span>
                                <h3 class="h5">Expertise and Innovation</h3>
                                <p>Our team of experienced professionals stays up-to-date with the latest technologies
                                    and industry trends
                                    edge. </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="pr-lg-4">
                            <div class="bg-light-subtle text-center rounded-custom overflow-hidden p-lg-5 p-3 mx-lg-auto"
                                data-aos="fade-up" data-aos-delay="50">
                                <img src="assets/img/hsc2n.jpg" alt="" class="img-fluid">
                                <div
                                    class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--2nd feature section end-->



        <!--work process section start-->
        <section class="work-process ptb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center" data-aos="fade-up">
                            <h4 class="h5 text-primary">End To End Support</h4>
                            <h2>We Follow Our Work Process</h2>
                            <p>We follow a systematic and efficient four-step delivery process to ensure the successful
                                implementation and deployment of your software solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-lg-3">
                        <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0"
                            data-aos="fade-up" data-aos-delay="50">
                            <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                                <span class="h2 mb-0 text-primary fw-bold">1</span>
                            </div>
                            <h3 class="h5">Planning</h3>
                            <p class="mb-0">Understanding your goals, defining scope, and creating a roadmap for
                                successful software development.</p>
                        </div>
                    </div>
                    <div class="dots-line first"></div>
                    <div class="col-md-6 col-lg-3">
                        <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0"
                            data-aos="fade-up" data-aos-delay="100">
                            <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                                <span class="h2 mb-0 text-primary fw-bold">2</span>
                            </div>
                            <h3 class="h5">Development</h3>
                            <p class="mb-0">Building robust, scalable software solutions tailored to your needs with
                                iterative feedback and collaboration.</p>
                        </div>
                    </div>
                    <div class="dots-line first"></div>
                    <div class="col-md-6 col-lg-3">
                        <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0 mb-md-0"
                            data-aos="fade-up" data-aos-delay="150">
                            <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                                <span class="h2 mb-0 text-primary fw-bold">3</span>
                            </div>
                            <h3 class="h5">Testing </h3>
                            <p class="mb-0">Ensuring error-free, high-performance software through rigorous testing and
                                adherence to industry standards.</p>
                        </div>
                    </div>
                    <div class="dots-line first"></div>
                    <div class="col-md-6 col-lg-3">
                        <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-0"
                            data-aos="fade-up" data-aos-delay="200">
                            <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                                <span class="h2 mb-0 text-primary fw-bold">4</span>
                            </div>
                            <h3 class="h5">Deployment </h3>
                            <p class="mb-0">Seamlessly deploying and maintaining your software solution for long-term
                                success and customer satisfaction.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--work process section end-->

        <!--integration section start-->
        <!-- <section class="integration-section pt-60 pb-120">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading" data-aos="fade-up">
                            <h4 class="h5 text-primary">Integration</h4>
                            <h2>We Collaborate with Top Software Company</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="text-lg-end mb-5 mb-lg-0" data-aos="fade-up">
                            <a href="integrations.html" class="btn btn-primary">View All Integrations</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="integration-wrapper position-relative w-100">
                            <ul
                                class="position-absolute animate-element parallax-element shape-service z--1 d-none d-lg-none d-xl-block">

                                <li class="layer" data-depth="0.02">
                                    <img src="assets/img/color-shape/feature-2.svg" alt="shape"
                                        class="img-fluid position-absolute color-shape-2 z-5">
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="assets/img/color-shape/feature-3.svg" alt="shape"
                                        class="img-fluid position-absolute color-shape-3">
                                </li>
                            </ul>
                            <ul class="integration-list list-unstyled mb-0">
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/airbnb.png" alt="integration"
                                            class="img-fluid">
                                        <h6 class="mb-0 mt-4">Brand Name</h6>
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/figma.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">Brand Name</h6>
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/facebook.png" alt="integration"
                                            class="img-fluid">
                                        <h6 class="mb-0 mt-4">Brand Name</h6>
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/sales-force.png" alt="integration"
                                            class="img-fluid">
                                        <h6 class="mb-0 mt-4">Brand Name</h6>
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/atlassian.png" alt="integration"
                                            class="img-fluid">
                                        <h6 class="mb-0 mt-4">Brand Name</h6>
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/dropbox-2.png" alt="integration"
                                            class="img-fluid">
                                        <h6 class="mb-0 mt-4">Brand Name</h6>
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="100">
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/dynamic-365.png" alt="integration"
                                            class="img-fluid">
                                        <h6 class="mb-0 mt-4">Brand Name</h6>
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="100">
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/erecruiter.png" alt="integration"
                                            class="img-fluid">
                                        <h6 class="mb-0 mt-4">Brand Name</h6>
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="100">
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/evernote.png" alt="integration"
                                            class="img-fluid">
                                        <h6 class="mb-0 mt-4">Brand Name</h6>
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="100">
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/google-icon.png" alt="integration"
                                            class="img-fluid">
                                        <h6 class="mb-0 mt-4">Brand Name</h6>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="100">
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/slack.png" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">Brand Name</h6>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="100">
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/google-analytics.png" alt="integration"
                                            class="img-fluid">
                                        <h6 class="mb-0 mt-4">Brand Name</h6>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="150">
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/google-drive.png" alt="integration"
                                            class="img-fluid">
                                        <h6 class="mb-0 mt-4">Brand Name</h6>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="150">
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/hubspot.png" alt="integration"
                                            class="img-fluid">
                                        <h6 class="mb-0 mt-4">Brand Name</h6>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="150">
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/instagram.png" alt="integration"
                                            class="img-fluid">
                                        <h6 class="mb-0 mt-4">Brand Name</h6>
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="150">
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/linkedin.png" alt="integration"
                                            class="img-fluid">
                                        <h6 class="mb-0 mt-4">Brand Name</h6>
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="150">
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/mailchimp.png" alt="integration"
                                            class="img-fluid">
                                        <h6 class="mb-0 mt-4">Brand Name</h6>
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="150">
                                    <div class="single-integration bg-white">
                                        <img src="assets/img/integations/marekto.png" alt="integration"
                                            class="img-fluid">
                                        <h6 class="mb-0 mt-4">Brand Name</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>  -->
        <!--integration section end-->

        <!--customer review tab section start-->
        <section class="testimonial-section pb-120 bg-light-subtle">
            <div class="container">
                <div class="row justify-content-center align-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center" data-aos="fade-up">
                            <h4 class="h5 text-primary">Testimonial</h4>
                            <h2>What They Say About Us</h2>
                            <p>Success Stories: Our Clients' Experiences and Feedback</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative w-100" data-aos="fade-up" data-aos-delay="50">
                            <div class="swiper testimonialSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100"
                                                class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/1.jpg" class="img-fluid me-3 rounded"
                                                    width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Mr.Atul Oberoi</h6>
                                                    <!-- <small>Founder and CEO </small> -->
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>One of the best experience ever</h6>
                                                Working with<span class="text-primary"> Vriaum Technologies </span>was a game-changer for our business.
                                                Their expertise and dedication in developing our custom software
                                                solution surpassed our expectations. We experienced improved efficiency,
                                                streamlined processes, and ultimately, significant business growth.
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                            </ul>
                                            <img src="assets/img/testimonial/quotes.svg" alt="quotes"
                                                class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100"
                                                class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/3.jpg" class="img-fluid me-3 rounded"
                                                    width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Mr. Sagar Patel</h6>
                                                    <!-- <small>CEO at Herbs</small> -->
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>BEST IOT SOLUTIONS.</h6>
                                                The IoT solutions provided by <span class="text-primary">VriAum Technologies</span> is renowned for delivering exceptional IoT solutions that seamlessly integrate devices, data analytics, and connectivity to create smart ecosystems. Their innovative approach, combined with a strong focus on security and scalability.



                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                            </ul>
                                            <img src="assets/img/testimonial/quotes.svg" alt="quotes"
                                                class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100"
                                                class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/2.jpg" class="img-fluid me-3 rounded"
                                                    width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Mr.Jayesh Shah</h6>
                                                    <!-- <small>Founder and CEO</small> -->
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Amazing Experience!</h6>
                                                We entrusted <span class="text-primary"> Vriaum Technologies </span> with our recruitment process, and it was the best decision we made. Their comprehensive recruitment solutions simplified our hiring process, resulting in top-tier talent acquisition. Their team went above and beyond to understand our needs and deliver outstanding results.
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                            </ul>
                                            <img src="assets/img/testimonial/quotes.svg" alt="quotes"
                                                class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100"
                                                class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/4.jpg" class="img-fluid me-3 rounded"
                                                    width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Neha Sharma</h6>
                                                    <!-- <small>Founder and CTO</small> -->
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Best Software company in the town</h6>
                                                The app developed by <span class="text-primary"> Vriaum technologies </span> exceeded our expectations. Its intuitive interface and smooth functionality have captivated our users and significantly enhanced our brand's mobile presence. We are thrilled with the end product and the exceptional service we received throughout the development process
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                            </ul>
                                            <img src="assets/img/testimonial/quotes.svg" alt="quotes"
                                                class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100"
                                                class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="assets/img/testimonial/5.jpg" class="img-fluid me-3 rounded"
                                                    width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">Priya Verma</h6>
                                                    <!-- <small>Lead Developer</small> -->
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>It is undeniably good!</h6>
                                                We can't thank <span class="text-primary"> Vriaum Technologies </span> enough for their exceptional service and transformative solutions. Their custom software development empowered us to optimize our operations, improve customer experiences, and achieve substantial growth. The team's professionalism, expertise, and dedication were truly remarkable
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                            </ul>
                                            <img src="assets/img/testimonial/quotes.svg" alt="quotes"
                                                class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
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
        </section> <!--customer review tab section end-->

        <!--cat subscribe start-->
       <!--cat subscribe end-->

        @endsection