@extends('layouts.app')
@section('content')
 
<!-- 1st st -->
<section class="promo-section ptb-120 my-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="section-heading text-center">
                            <h2>About Us- Empowering Global Talent and Opportunities</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="promo-single position-relative text-center bg-white custom-shadow rounded-custom p-5 mb-4">
                            <!-- <div class="promo-icon mb-32">
                                <i class="fas fa-wifi text-primary fa-3x"></i>
                            </div> -->
                            <div class="promo-info">
                                <h3 class="h5">Our Vision</h3>
                                <p class="mb-0">Our Vision is we envision a world where talented individuals can explore their full potential, gain valuable cross-cultural experiences, and contribute their expertise to diverse industries across borders.</p>
                            </div>
                            <!--pattern start-->
                            <div class="dot-shape-bg position-absolute z--1 left--40 top--40">
                                <img src="assets/img/shape/dot-big-square.svg" alt="shape">
                            </div>
                            <!--pattern end-->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="promo-single position-relative text-center bg-white custom-shadow rounded-custom p-5 mb-4">
                            <!-- <div class="promo-icon mb-32">
                                <i class="fas fa-user-friends text-success fa-3x"></i>
                            </div> -->
                            <div class="promo-info">
                                <h3 class="h5">Our Mission</h3>
                                <p class="mb-0">Our Mission is To provide exceptional internship opportunities  with practical skills and intercultural competencies, and to facilitate seamless migration staffing for organizations seeking qualified talent from around the globe.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="promo-single position-relative text-center bg-white custom-shadow rounded-custom p-5 mb-4">
                            <!-- <div class="promo-icon mb-32">
                                <i class="fas fa-bezier-curve text-danger fa-3x"></i>
                            </div> -->
                            <div class="promo-info">
                                <h3 class="h5">Our Team</h3>
                                <p class="mb-0">Our multicultural team comprises experts in immigration, talent acquisition, and cross-cultural communication. Together, we work passionately to provide you with the support and guidance you need on your journey to international success.</p>
                            </div>
                            <!--pattern start-->
                            <div class="dot-shape-bg position-absolute z--1 right--40 bottom--40">
                                <img src="assets/img/shape/dot-big-square.svg" alt="shape">
                            </div>
                            <!--pattern end-->
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
<!-- 1sted -->

    <section class="feature-tab-section ptb-120 bg-light-subtle my-section">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="section-heading text-center mb-4">
                        <!-- <h5 class="h6 text-primary">Features</h5> -->
                        <h2>Services We Provides</h2>
                        <!-- <p>Continually promote equity invested process improvements whereas go forward leadership. Completely unleash cross-media methodologies whereas intermandated outsourcing.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="nav justify-content-center feature-tab-list-2 mt-4" id="nav-tab-2" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" href="#tab-2-1" data-bs-toggle="tab" data-bs-target="#tab-2-1"
                                role="tab" aria-selected="true">
                                IOT
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#tab-2-2" data-bs-toggle="tab" data-bs-target="#tab-2-2"
                                role="tab" aria-selected="false" tabindex="-1">
                                Mobile App Development
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#tab-2-3" data-bs-toggle="tab" data-bs-target="#tab-2-3"
                                role="tab" aria-selected="false" tabindex="-1">
                                Web Development
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#tab-2-4" data-bs-toggle="tab" data-bs-target="#tab-2-4"
                                role="tab" aria-selected="false" tabindex="-1">
                                Staffing
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#tab-2-5" data-bs-toggle="tab" data-bs-target="#tab-2-5"
                                role="tab" aria-selected="false" tabindex="-1">
                                Product Developmemt
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="nav-tabContent-2">
                        <div class="tab-pane fade pt-60 active show" id="tab-2-1" role="tabpanel">
                            <div class="row justify-content-center align-items-center justify-content-around">
                                <div class="col-lg-5">
                                    <div class="feature-tab-info">
                                        <h3>IOT</h3>
                                        <p> In today's interconnected world, the Internet of Things (IoT) has emerged as a
                                            game-changer, revolutionizing industries and transforming the way we live and
                                            work.
                                            At <span class="text-primary">VriAum</span>, we are at the forefront of this
                                            technological revolution, offering a wide range of innovative IoT solutions that
                                            empower businesses to thrive in the digital age.</p>
                                        <p> Our IoT services are designed to address the unique challenges faced by various
                                            industries, unlocking new opportunities for growth, efficiency, and enhanced
                                            customer experiences. With our deep expertise in IoT technologies, we deliver
                                            end-to-end solutions that seamlessly integrate devices, collect and analyze
                                            data, and provide actionable insights.</p>
                                        <a href="{{ route('iot') }}"
                                            class="read-more-link text-decoration-none mt-4 d-block">Know More About Us
                                            <i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <img src="assets/img/about_cyber.jpg" alt="feature tab"
                                        class="img-fluid mt-4 mt-lg-0 mt-xl-0">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade pt-60" id="tab-2-2" role="tabpanel">
                            <div class="row justify-content-center align-items-center justify-content-around">
                                <div class="col-lg-5">
                                    <img src="assets/img/smnew.jpg" alt="feature tab"
                                        class="img-fluid mb-4 mb-lg-0 mb-xl-0">
                                </div>
                                <div class="col-lg-5">
                                    <div class="feature-tab-info">
                                        <h3>Mobile App Development</h3>
                                        <p>At <span class="text-primary">VriAum</span>, we specialize in developing
                                            high-quality, scalable, and user-friendly Android applications. Our experienced
                                            team of Android developers is proficient in the latest technologies and
                                            frameworks to deliver exceptional app experiences. Whether you need a <b>native
                                                Android app or a hybrid app</b>, we ensure that your app is optimized for
                                            performance, security, and seamless functionality across various devices and
                                            screen sizes.</p>
                                        <h5 class="h6 text-primary">Unleash the Power of Android</h5>
                                        <p>Contact us today to discuss your Android app development requirements and let us
                                            help you unleash the power of the world's most popular mobile platform.</p>
                                        <a href="{{ route('mobileapp') }}"
                                            class="read-more-link text-decoration-none mt-4 d-block">Know More About Us
                                            <i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade pt-60" id="tab-2-3" role="tabpanel">
                            <div class="row justify-content-center align-items-center justify-content-around">
                                <div class="col-lg-5">
                                    <div class="feature-tab-info">
                                        <h3>Web Development</h3>

                                        <p>A strong online presence is crucial for businesses to succeed in the digital age.
                                            At <span class="text-primary">VriAum</span>, we offer comprehensive web
                                            development services that empower businesses to make their mark on the web.</p>
                                        <p> Our team of experienced web developers combines creativity with technical
                                            expertise to create visually stunning and functional websites. From e-commerce
                                            platforms that drive online sales to dynamic web applications that streamline
                                            business processes, we tailor our solutions to meet your specific goals. With a
                                            focus on responsive design, smooth user experiences, and powerful functionality,
                                            we deliver web solutions that leave a lasting impression.</p>
                                        <a href="{{ route('webapp') }}"
                                            class="read-more-link text-decoration-none mt-4 d-block">Know More About Us
                                            <i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <img src="assets/img/3in11.jpg" alt="feature tab"
                                        class="img-fluid mt-4 mt-lg-0 mt-xl-0">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade pt-60" id="tab-2-4" role="tabpanel">
                            <div class="row justify-content-center align-items-center justify-content-around">
                                <div class="col-lg-5">
                                    <img src="assets/img/usacan1.jpg" alt="feature tab"
                                        class="img-fluid mb-4 mb-lg-0 mb-xl-0">
                                </div>
                                <div class="col-lg-5">
                                    <div class="feature-tab-info">
                                        <h3>Staffing</h3>
                                        <p>With a strong economy and a diverse job market, migrant candidates can find
                                            employment in major cities such as New York, San Francisco, Los Angeles, and
                                            Chicago.</p>
                                        <p>With our guidance and support,Canada offers abundant job opportunities for
                                            migrant candidates, particularly in sectors such as IT, healthcare, engineering,
                                            finance, and skilled trades. </p>
                                        <a href="{{ route('staffing') }}"
                                            class="read-more-link text-decoration-none mt-4 d-block">Know More About Us
                                            <i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade pt-60" id="tab-2-5" role="tabpanel">
                            <div class="row justify-content-center align-items-center justify-content-around">
                                <div class="col-lg-5">
                                    <div class="feature-tab-info">
                                        <h3>Product Development</h3>
                                        <p>Transform your ideas into tangible prototypes with our prototype development
                                            services. We utilize the latest tools and technologies to create functional and
                                            interactive prototypes that demonstrate the core features and user experience of
                                            your product. Our iterative approach allows for feedback and refinement,
                                            ensuring that your prototype aligns with your vision and user requirements.
                                            Whether you are a startup or an established business, our prototype development
                                            services can help you validate your ideas and attract potential investors or
                                            customers.</p>
                                        <h5 class="h6 text-primary">Bring Your Ideas to Life</h5>
                                        <p>Contact us today to discuss your prototype development needs and bring your ideas
                                            to life.</p>
                                        <a href="{{ route('product') }}"
                                            class="read-more-link text-decoration-none mt-4 d-block">Know More About Us
                                            <i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <img src="assets/img/productdev1.jpg" alt="feature tab"
                                        class="img-fluid mt-4 mt-lg-0 mt-xl-0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end -->

    <!--feature section two start-->
    <section class="feature-section-two pt-5 pb-5 "
        style="background: url('assets/img/hero-9-img.png')no-repeat center center;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-md-12">
                    <div class="section-heading" data-aos="fade-up">
                        <h4 class="h5 text-primary">Our Features</h4>
                        <h2>Solutions for Your Business Needs</h2>
                        <p><span class="text-primary">VriAum Technologies LLC </span> deep industry expertise,
                            cost-effective delivery methodology,
                            <span class="text-black">highly skilled engineers and professionals</span> , focus on quality standards, and flexibility
                            in meeting your specific business requirements effectively eliminate risk and provide
                            the foundation for our shared success.
                        </p>
                        <ul class="list-unstyled mt-5">
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-primary rounded me-4">
                                    <i class="fas fa-bezier-curve text-white"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">CUSTOMIZED SOLUTIONS</h3>
                                    <p>Offers tailored virtual reality solutions, catering to specific needs and
                                        requirements, ensuring a personalized and optimized experience for each client.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-danger rounded me-4">
                                    <i class="fas fa-check text-white" aria-hidden="true"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">QUALITY ASSURANCE</h3>
                                    <p>Maintains rigorous quality standards throughout their products and services, ensuring
                                        high-performance, reliability, and a seamless virtual reality experience.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-success rounded me-4">
                                    <i class="fas fa-clock text-white"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">TIMELY DELIVERY</h3>
                                    <p> Vriaum Technologies prides itself on delivering projects within agreed timelines,
                                        ensuring prompt deployment of virtual reality solutions and meeting client
                                        expectations.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-info rounded me-4">
                                    <i class="fas fa-envelope-open text-white"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">END TO END SUPPORT</h3>
                                    <p>Our service provides comprehensive support throughout the entire project lifecycle,
                                        from initial consultation to post-deployment assistance,
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
    {{-- <section id="our-team" class="team-section ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="section-heading text-center">
                        <h5 class="h6 text-primary">Our Team</h5>
                        <h2>The People Behind VriAum</h2>
                        <p>Empowering innovation through the dedication and expertise of the visionary minds behind VriAum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-single-wrap mb-5">
                        <div class="team-img rounded-custom">
                            <img src="assets/img/dummy.jpeg" alt="team" class="img-fluid position-relative">
                            <ul class="list-unstyled team-social-list d-flex flex-column mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
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
                            <img src="assets/img/dummy.jpeg" alt="team" class="img-fluid position-relative">
                            <ul class="list-unstyled team-social-list d-flex flex-column mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
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
                            <img src="assets/img/dummy.jpeg" alt="team" class="img-fluid position-relative">
                            <ul class="list-unstyled team-social-list d-flex flex-column mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
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
                            <img src="assets/img/dummy.jpeg" alt="team" class="img-fluid position-relative">
                            <ul class="list-unstyled team-social-list d-flex flex-column mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
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
    </section> --}}
    <!--team section end-->

    <!--testimonial section start-->
    <section class="testimonial-section ptb-120 my-section ">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-md-10 col-lg-6">
                    <div class="section-heading text-center">
                        <h4 class="h5 text-primary">Testimonial</h4>
                        <h2>What They Say About Us</h2>
                        <p>Enjoy Peace of Mind with Comprehensive Medical Insurance Facilities that Prioritize Your Health
                            and Well-being.</p>
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
                                        <img src="assets/img/testimonial/quotes-dot.svg" alt="quotes" width="100"
                                            class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                        <div class="d-flex mb-32 align-items-center">
                                            <img src="assets/img/testimonial/1.jpg" class="img-fluid me-3 rounded"
                                                width="60" alt="user">
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
                                                <h6 class="mb-0">Oberoi R.</h6>
                                                <small>CEO at Herbs</small>
                                            </div>
                                        </div>
                                        <blockquote>
                                            <h6>Embarrassed by the First Version.</h6>
                                            The Vriaum template is absolutely amazing, offering a stunning blend of
                                            functionality, aesthetics, and user-friendly design.
                                        </blockquote>
                                        <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
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
                                                <h6 class="mb-0">Mr.Rupan Oberoi</h6>
                                                <small>Founder and CEO</small>
                                            </div>
                                        </div>
                                        <blockquote>
                                            <h6>Amazing Vriaum template!</h6>
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
    </section>
    <!--testimonial section end-->

    <!--our location address start-->
    <section class="office-address-section ptb-120 my-section">
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

                <div class="col-lg-6 col-md-6 mt-4 mt-lg-0 mt-xl-0">
                    <div class="rounded-custom border d-block office-address overflow-hidden z-2"
                        style="background: url('assets/img/office-img-2.jpg')no-repeat center center / cover">
                        <div class="office-content text-center p-4">
                            <span class="office-overlay"></span>
                            <div class="office-info">
                                <h5>Canada</h5>
                                <address>
                                    999 Canada Pl, <br>
                                    Vancouver,<br>
                                    BC V6C 3E1,
                                    Canada.
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mt-4 mt-lg-0 mt-xl-0">
                    <div class="rounded-custom border d-block office-address overflow-hidden z-2"
                        style="background: url('assets/img/office-img-3.jpg')no-repeat center center / cover">
                        <div class="office-content text-center p-4">
                            <span class="office-overlay"></span>
                            <div class="office-info">
                                <h5>United States</h5>
                                <address>
                                    230 Sterling Dr., <br>
                                    Mountain House,<br>
                                    California-95391
                                    USA.
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

    <!--cat subscribe end-->
@endsection
