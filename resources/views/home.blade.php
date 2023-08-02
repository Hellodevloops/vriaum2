
@extends('layouts.app')
@section('content')

        <!--hero section start-->
        <section class="hero-it-solution hero-nine-bg ptb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-10">
                        <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                            <h1 class="fw-bold display-5 mt-5">Immigration Options
                            <span class="fw-bold display-5 text-danger"> Your Pathway to a New Life.</span>
                        </h1>
                            <p class="text-black">
                               

                                "Welcome to our comprehensive platform dedicated to guiding you on your journey to a new life in Canada and the USA. Whether you're seeking better career opportunities, world-class education, or a safe and welcoming environment, our team of immigration experts is here to help you navigate the complexities of immigration processes and make your dream of moving to Canada or the USA a reality."
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
                            <img src="assets/img/home.jpg" alt="hero hero-it-solution " class="img-fluid">
                
                        </div>
                    </div>
                </div>
            </div>
        </section><!--hero section end-->

        <!--About us start-->
        <section class="feature-section pt-20 pb-60  bg-light-subtle">
            <div class="container">
                <div class="row justify-content-center">
                <h2 class="text-danger">ABOUT US</h2>
                            <p class="text-black">Welcome to Your Immigration Hub, your trusted partner on your journey to Canada and the USA. We are a team of experienced immigration professionals dedicated to helping individuals and families achieve their immigration goals and build a better future in these two vibrant countries.</p>
                    <div class="col-lg-6 col-md-10">
                        <div class="section-heading text-center aos-init aos-animate" data-aos="fade-up">
        
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="feature-grid">
                            <div class="feature-card bg-white shadow-sm highlight-card rounded-custom p-5 aos-init aos-animate bg-secondary" data-aos="fade-up" data-aos-delay="50">
                                <div class="icon-box d-inline-block rounded-circle bg-dark-soft mb-32">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z"/>
</svg>
                                </div>
                                <div class="feature-content">
                                    <h3 class="h5">Our Mission:</h3>
                                    <p class="text-black">At Your Immigration Hub, our mission is to provide accurate, up-to-date, and reliable information on immigration to Canada and the USA. We understand that the immigration process can be overwhelming, with complex procedures and ever-changing regulations. That's why we are committed to offering comprehensive guidance and support at every step of your immigration journey.</p>
                                    
                                    <h6 class="mt-4">Included with...</h6>
                                    <ul class="list-unstyled mb-0">
                                        <li class="py-1 text-black"><i class="far fa-check-circle me-2 text-danger"></i>Empowering Dreams</li>
                                        <li class="py-1 text-black"><i class="far fa-check-circle me-2 text-danger"></i>Personalized Support</li>
                                        <li class="py-1 text-black"><i class="far fa-check-circle me-2 text-danger"></i>Transparency and Trust</li>
                                        <li class="py-1 text-black"><i class="far fa-check-circle me-2 text-danger"></i>Expertise and Knowledge</li>
                                        <li class="py-1 text-black"><i class="far fa-check-circle me-2 text-danger"></i>Comprehensive Services</li>
                                        <li class="py-1 text-black"><i class="far fa-check-circle me-2 text-danger"></i>Facilitating Success:</li>
                                    </ul>
                                </div>
                                <a href="service-single.html" class="link-with-icon text-decoration-none mt-3">View Details <i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="feature-card bg-white shadow-sm rounded-custom p-5 aos-init aos-animate bg-secondary" data-aos="fade-up" data-aos-delay="50">
                                <div class="icon-box d-inline-block rounded-circle bg-dark-soft mb-32">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-app-indicator" viewBox="0 0 16 16">
  <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"/>
  <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
</svg>
                                </div>
                                <div class="feature-content">
                                    <h3 class="h5">Our Expertise:</h3>
                                    <p class="text-black">Our team of immigration experts brings a wealth of knowledge and expertise in Canadian and US immigration laws, policies, and procedures. Whether you are a skilled worker, international student, entrepreneur, or looking to reunite with family members, we have the expertise to address your unique immigration needs.</p>
                                </div>
                                <a href="service-single.html" class="link-with-icon text-decoration-none mt-3">View Details <i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="feature-card bg-white shadow-sm rounded-custom p-5 aos-init aos-animate bg-secondary" data-aos="fade-up" data-aos-delay="50">
                                <div class="icon-box d-inline-block rounded-circle bg-dark-soft mb-32">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
</svg>
                                </div>
                                <div class="feature-content">
                                    <h3 class="h5">Personalized Approach:</h3>
                                    <p class="text-black">We believe that each individual's immigration journey is unique, and we take a personalized approach to meet your specific requirements. Our team will carefully assess your qualifications, preferences, and aspirations to recommend the most suitable immigration pathway for you and your family.</p>
                                </div>
                                <a href="service-single.html" class="link-with-icon text-decoration-none mt-3">View Details <i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="feature-card bg-white shadow-sm rounded-custom p-5 aos-init aos-animate bg-secondary" data-aos="fade-up" data-aos-delay="50">
                                <div class="icon-box d-inline-block rounded-circle bg-dark-soft mb-32">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
</svg>
                                </div>
                                <div class="feature-content">
                                    <h3 class="h5">Comprehensive Services:</h3>
                                    <p class="text-black">Your Immigration Hub offers a wide range of services, including consultation, application preparation, document review, and support throughout the immigration process. We ensure that your application is accurate, complete, and submitted in a timely manner, giving you the best chance of success.</p>
                                </div>
                                <a href="service-single.html" class="link-with-icon text-decoration-none mt-3">View Details <i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="feature-card bg-white shadow-sm rounded-custom p-5 aos-init aos-animate bg-secondary" data-aos="fade-up" data-aos-delay="50">
                                <div class="icon-box d-inline-block rounded-circle bg-dark-soft mb-32">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-blockquote-right" viewBox="0 0 16 16">
  <path d="M2.5 3a.5.5 0 0 0 0 1h11a.5.5 0 0 0 0-1h-11zm0 3a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6zm0 3a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6zm0 3a.5.5 0 0 0 0 1h11a.5.5 0 0 0 0-1h-11zm10.113-5.373a6.59 6.59 0 0 0-.445-.275l.21-.352c.122.074.272.17.452.287.18.117.35.26.51.428.156.164.289.351.398.562.11.207.164.438.164.692 0 .36-.072.65-.216.873-.145.219-.385.328-.721.328-.215 0-.383-.07-.504-.211a.697.697 0 0 1-.188-.463c0-.23.07-.404.211-.521.137-.121.326-.182.569-.182h.281a1.686 1.686 0 0 0-.123-.498 1.379 1.379 0 0 0-.252-.37 1.94 1.94 0 0 0-.346-.298zm-2.168 0A6.59 6.59 0 0 0 10 6.352L10.21 6c.122.074.272.17.452.287.18.117.35.26.51.428.156.164.289.351.398.562.11.207.164.438.164.692 0 .36-.072.65-.216.873-.145.219-.385.328-.721.328-.215 0-.383-.07-.504-.211a.697.697 0 0 1-.188-.463c0-.23.07-.404.211-.521.137-.121.327-.182.569-.182h.281a1.749 1.749 0 0 0-.117-.492 1.402 1.402 0 0 0-.258-.375 1.94 1.94 0 0 0-.346-.3z"/>
</svg>
                                </div>
                                <div class="feature-content">
                                    <h3 class="h5">Start Your Journey with Us:</h3>
                                    <p class="text-black">Whether you are just beginning to explore immigration options or have specific questions about your application, we are here to assist you. Contact us today to schedule a consultation and take the first step towards a brighter future in Canada or the USA.</p>
                                </div>
                                <a href="service-single.html" class="link-with-icon text-decoration-none mt-3">View Details <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--can or us start-->
        <section class="pt-20 pb-60">
            <div class="container">
                <div class="row justify-content-center">
                <h2 class="text-dark-black mb-4">Why Choose Canada or the USA?</h2>
                            <p class="text-dark-black">
                            Canada and the USA are two of the most sought-after destinations for immigrants worldwide, attracting individuals and families from diverse backgrounds and aspirations. 
                            </p>
                    <div class="col-lg-6">
                        <div class="text-center mb-5">
                           
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="server-left position-relative z-5">
                            <div class="server-list mb-3 z-5  bg-danger">
                               
                                    <div class="d-flex align-items-center">
                                        
                                        <h5 class="m-0 text-white fw-medium">Economic Opportunities</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="server-list mb-3  bg-danger">
                               
                                    <div class="d-flex align-items-center">
                                       
                                        <h5 class="m-0 text-white fw-medium">High-Quality Education</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="server-list mb-3  bg-danger">
                               
                                    <div class="d-flex align-items-center">
                                        
                                        <h5 class="m-0 text-white fw-medium">Quality Healthcare</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="server-list mb-3  bg-danger">
                               
                                    <div class="d-flex align-items-center">
                                        
                                        <h5 class="m-0 text-white fw-medium">Safety and Security</h5>
                                    </div>
                                </a>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="game-card mb-3 mb-lg-0">
                            <div class="card-top">
                                <img src="assets/img/homeuc.jpg" class="img-fluid w-100" alt="game">
                                <h4 class="mt-4 mb-3">
                                Both countries offer unique opportunities and benefits.
                                </h4>
                                <!-- <p class="m-0 text-off-white">
                                Here are some compelling reasons why you might choose Canada or the USA for your immigration journey.
                                </p> -->
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="server-list mb-3  bg-danger">
                           
                                <div class="d-flex align-items-center">
                                    
                                    <h5 class="m-0 text-white fw-medium">Access to Social Benefits</h5>
                                </div>
                            </a>
                        </div>
                        <div class="server-list mb-3  bg-danger">
                           
                                <div class="d-flex align-items-center">
                                    
                                    <h5 class="m-0 text-white fw-medium">Pathway to Citizenship</h5>
                                </div>
                            </a>
                        </div>
                        <div class="server-list mb-3 bg-danger">
                           
                                <div class="d-flex align-items-center">
                                    
                                    <h5 class="m-0 text-white fw-medium">Family Reunification</h5>
                                </div>
                            </a>
                        </div>
                        <div class="server-list mb-3  bg-danger">
                           
                                <div class="d-flex align-items-center">
                                    
                                    <h5 class="m-0 text-white fw-medium">Natural Beauty and Outdoor Activities</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
               
            </div>
        </section>

        <!-- can or usa end -->

        <!-- services start -->
        <section class="services-icon ptb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="text-center">
                            <h2>Services We Provide</h2>
                            <p>
                            At Your Immigration Journey, we are dedicated to providing comprehensive immigration services tailored to your unique needs:
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
                                <h3 class="h5">Immigration</h3>
                                <p>
                                Receive personalized advice and explore suitable immigration pathways based on your qualifications and aspirations.
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
                                <h3 class="h5">Application Assistance</h3>
                                <p>
                                Our experts will guide you through the application process, ensuring your submissions are accurate, and timely.
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
                                <h3 class="h5">Document Review</h3>
                                <p>
                                We meticulously review your documents to make sure eliminate errors and maximize your chances of a successful outcome.
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
                                <h3 class="h5">Ongoing Support</h3>
                                <p>
                                Our commitment does't end with the application. We continue to support until your immigration journey reaches its destination.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services end -->

        <!-- explore start -->
        <section class="game-faq ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                <h2 class="mb-3 text-white">Explore Your Immigration Options.</h2>
                    <div class="col-lg-6">
                        <div class="text-center mb-5">
                            
                            
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="game-faq-img mb-5 mb-lg-0 text-center text-lg-start">
                            <img src="assets/img/questions.png" alt="illustration" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="game-accordion">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Express Entry to Canada
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p class="text-off-white m-0">
                                            Discover the streamlined Express Entry system, a popular pathway for skilled workers to obtain permanent residency in Canada. Learn about the Comprehensive Ranking System (CRS) and how to improve your CRS score for a better chance of receiving an Invitation to Apply (ITA).
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Provincial Nominee Program (PNP)
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p class="text-off-white m-0">
                                            Uncover the various Provincial Nominee Programs available across Canada, each tailored to address regional labor market needs. Explore the different streams and eligibility criteria for provincial nominations.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Family Sponsorship
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample" style="">
                                        <div class="accordion-body">
                                            <p class="text-off-white m-0">
                                            Learn about the process of sponsoring your spouse, partner, children, or parents to join you in Canada, fostering family reunification in a welcoming environment.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        Work Permits
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p class="text-off-white m-0">
                                            Understand the different work permit options available for skilled workers, temporary workers, and international graduates seeking employment in Canada.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--explore end-->


       <!-- test styart -->
        <section class="testimonial-section pb-120 pb-50 bg-light-subtle">
            <div class="container">
                <div class="row justify-content-center align-content-center">
                    <div class="col-md-10 col-lg-6 ">
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
                                                    <h6 class="mb-0">John and Emily</h6>
                                                    <!-- <small>Founder and CEO </small> -->
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Express Entry Success Story</h6>
                                                After months of uncertainty and confusion, we decided to seek professional guidance from Your Immigration Journey. They patiently explained the Express Entry process, assessed our profile, and helped us improve our CRS score. Thanks to their expertise, we received an Invitation to Apply (ITA) within weeks!
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
                                                    <h6 class="mb-0">Maria </h6>
                                                    <!-- <small>CEO at Herbs</small> -->
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Study Permit Approval.</h6>
                                                pplying for a study permit in Canada seemed like a daunting task. Luckily, I came across Your Immigration Journey, and it made all the difference. They provided comprehensive guidance, from selecting the right study program to preparing my application and their attention to detail and prompt responses



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
                                                    <h6 class="mb-0">Michael</h6>
                                                    <!-- <small>Founder and CEO</small> -->
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>USA Green Card Success</h6>
                                                Obtaining a Green Card in the USA was my lifelong dream. Your Immigration Journey made that dream a reality. Their team guided me through the complex process, ensuring I met all the requirements for employment-based immigration. I received my Green Card, and now I am proudly contributing to the growth of the country.
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
                                                    <h6 class="mb-0">Anna </h6>
                                                    <!-- <small>Founder and CTO</small> -->
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Family Sponsorship</h6>
                                                I was overjoyed to reunite with my parents in Canada, all thanks to Your Immigration Journey. The process of sponsoring my parents seemed overwhelming, but their team meticulously prepared our application and guided us through every step and they kept us informed throughout the process.
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
                                                    <h6 class="mb-0">David</h6>
                                                    <!-- <small>Lead Developer</small> -->
                                                </div>
                                            </div>
                                            <blockquote>
                                                <h6>Canada Work Visa</h6>
                                                As an international professional seeking a work visa in the CANADA, I faced challenges in understanding the visa categories and requirements. Your Immigration Journey provided clear explanations and assisted me in preparing my application. Their dedication and knowledge made the process smooth and stress-free. 
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
                            <!-- </section> -->
        <!--cat subscribe start-->
       <!--cat subscribe end-->

        @endsection