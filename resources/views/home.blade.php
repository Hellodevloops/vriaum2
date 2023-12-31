
@extends('layouts.app')
@section('content')

        <!--hero section start-->
        <section class="hero-it-solution hero-nine-bg ptb-120"
            style="background: url('assets/img/white2.jpg')no-repeat center center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-10">
                        <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                            <h1 class="fw-bold display-5 mt-5">Immigration Options
                            <span class="fw-bold display-5 dark-red"> Your Pathway to a New Life.</span>
                        </h1>
                            <p class="text-black">
                               

                                "Welcome to our comprehensive platform dedicated to guiding you on your journey to a new life in Canada and the USA. Whether you're seeking better career opportunities, world-class education, or a safe and welcoming environment, our team of immigration experts is here to help you navigate the complexities of immigration processes and make your dream of moving to Canada or the USA a reality."
                            </p>
                            <div class="action-btn mt-5 align-items-center d-block d-sm-flex d-lg-flex d-md-flex">
                                <a href="{{ route('contact.index')}}" class="btn btn-red me-3">Get Started</a>
                                {{-- <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg" class="text-decoration-none popup-youtube d-inline-flex align-items-center watch-now-btn mt-3 mt-lg-0 mt-md-0 text-primary">
                                    <i class="fas fa-play text-primary border-2 border-primary"></i>
                                    Watch Demo
                                </a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                    <div class="bg-light-subtle text-center rounded-custom overflow-hidden p-lg-5 p-3 mx-lg-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                                <img src="assets/img/1h.jpg" alt="" class="img-fluid">
                                <div class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 right--40 top-right">
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section><!--hero section end-->

        <!--About us start-->
        <section class="ptb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                    <div class="bg-light-subtle text-center rounded-custom overflow-hidden p-lg-5 p-3 mx-lg-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                                <img src="assets/img/abouth.jpg" alt="" class="img-fluid">
                                <div class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left">
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="about-right">
                            <h2 class="mb-4">
                                About Us
                            </h2>
                            <h4 class="dark-red h5 mb-3">Our Mission</h4>
                            <p class="text-black">At Your Immigration Hub, our mission is to provide accurate, up-to-date, and reliable information on immigration to Canada and the USA. We understand that the immigration process can be overwhelming, with complex procedures and ever-changing regulations. That's why we are committed to offering comprehensive guidance and support at every step of your immigration journey.</p>
                            <h4 class="dark-red h5 mb-3">Our Expertise</h4>
                            <p class="text-black">Our team of immigration experts brings a wealth of knowledge and expertise in Canadian and US immigration laws, policies, and procedures. Whether you are a skilled worker, international student, entrepreneur, or looking to reunite with family members, we have the expertise to address your unique immigration needs.</p>
                            <h4 class="dark-red h5 mb-3">personalized Approach</h4>
                            <p class="text-black">We believe that each individual's immigration journey is unique, and we take a personalized approach to meet your specific requirements. Our team will carefully assess your qualifications, preferences, and aspirations to recommend the most suitable immigration pathway for you and your family.</p>
                            
                            <a href="http://127.0.0.1:8001/about" class="link-with-icon text-decoration-none mt-3 btn btn-red">
                                Know More
                                <i class="fas fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
            </section>

<!-- services start -->
   <section class="services-icon ptb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="text-center">
                            <h2 class="dark-red">Services We Provide</h2>
                            <p class="text-black">
                            At Your Immigration Journey, we are dedicated to providing comprehensive immigration services tailored to your unique needs:
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-3 p-0">
                        <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom border-end">
                            <div class="service-icon icon-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
  <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
</svg>
                            </div>
                            <div class="service-info-wrap">
                                <h3 class="h5 dark-red">Immigration</h3>
                                <p>
                                Receive personalized advice and explore suitable immigration pathways based on your qualifications and aspirations.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 p-0">
                        <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom border-end">
                            <div class="service-icon icon-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="currentColor" class="bi bi-columns-gap" viewBox="0 0 16 16">
  <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
</svg>
                            </div>
                            <div class="service-info-wrap">
                                <h3 class="h5 dark-red">Application Assistance</h3>
                                <p>
                                Our experts will guide you through the application process, ensuring your submissions are accurate, and timely.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 p-0">
                        <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom border-end">
                            <div class="service-icon icon-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="currentColor" class="bi bi-file-earmark-check-fill" viewBox="0 0 16 16">
  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm1.354 4.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
</svg>
                            </div>
                            <div class="feature-info-wrap">
                                <h3 class="h5 dark-red">Document Review</h3>
                                <p>
                                We meticulously review your documents to make sure eliminate errors and maximize your chances of a successful outcome.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 p-0">
                        <div class="single-service p-lg-5 p-4 text-center border-bottom mt-3">
                            <div class="service-icon icon-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="currentColor" class="bi bi-megaphone" viewBox="0 0 16 16">
  <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z"/>
</svg>
                            </div>
                            <div class="feature-info-wrap">
                                <h3 class="h5 dark-red">Ongoing Support</h3>
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

        <!--3 start-->
        <section class="feature-section " style="background: url('assets/img/white.jpg')no-repeat center center;">
            
            <div class="container">
                
            <div class="row align-items-lg-center justify-content-between">
            
                    <div class="col-lg-5">
                      <div class="bg-light-subtle text-center rounded-custom overflow-hidden p-lg-5 p-3 mx-lg-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                                <img src="assets/img/hl.jpg" alt="" class="img-fluid">
                                <div class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left">
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="mt-5 mt-lg-0">
                            <div class="section-heading mb-5">
                               
                                <h2>
                                The Way for Your International <span class="dark-red">IT Career.</span>
                                </h2>
                                <p>
                                Our team is committed to providing you with a seamless experience, handling all paperwork and procedures while you focus on preparing for your new IT career in Canada and USA. 
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="bg-white p-4 cyber-count-box mb-30 mb-lg-0">
                                    <h4 class="dark-red">Training Programs</h4>
                                        <h5 class="h-6">Includes</h5>
                                        <p>
                                           <ul>
                                            <li class="text-black">IT Skill Enhancement</li>
                                            <li class="text-black">Technical Interview Preparation</li>
                                            <li class="text-black">Language Proficiency Training</li>
                                            <li class="text-black">Canadian Workplace Culture</li>
                                           </ul>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="bg-white p-4 cyber-count-box">
                                    <h4 class="dark-red">Placement Assistance</h4>
                                        <h5 class="h-6">Includes</h5>
                                        <p>
                                           <ul>
                                            <li class="text-black">Job Matching</li>
                                            <li class="text-black">Resume Building and Optimization</li>
                                            <li class="text-black">Interview Coaching</li>
                                            <li class="text-black">Job Offer Negotiation</li>
                                           </ul>
                                       </p>
                                    </div>
                                </div>
                                <div class="section-heading mb-5 pt-5">
                                <h4 class="h4 dark-red">Your Pathway to a New Beginning</h4>
                                <h2>
                                Trusting Our Experts for Your Successful Migration
                                </h2>
                                <p>
                                <ul>
                                            <li class="text-black ">Our team of immigration experts and IT specialists possesses extensive experience in assisting IT professionals with their migration to Canada.</li>
                                            <li class="text-black ">We thoroughly evaluate your educational credentials and work experience to ensure they meet standards. Our team will assist you in obtaining the necessary documents and verifications.</li>
                                            <li class="text-black ">Language proficiency is a critical factor in your Express Entry application. Our language training programs focus on improving your English language skills, particularly in IT-related contexts.</li>
                                            <li class="text-black ">Our meticulous approach includes a comprehensive review of your entire application before submission. We ensure that all documents are accurately compiled and submitted to the authorities.</li>
                                           </ul>
                                </p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3 end -->

        <!-- 4 non st -->
        <section class="feature-section-two pt-60 pb-60 ">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between justify-content-center">
                <h2 class="dark-red">Seamless Training, Placement, and Migration Services for <span class="text-black">Non-IT Professionals</span></h2>
                <div class="section-heading">
                               
                    <p class="dark-text">With our deep expertise in a wide range of technologies, we empower businesses to harness the full potential of digital transformation, driving growth and success in the ever-evolving tech landscape.</p>
                </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="feature-content-wrap">
                           
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-red rounded me-4">
                                        <i class="fas fa-bezier-curve text-white" aria-hidden="true"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h3">Resume Optimization</h3>
                                        <p class="dark-text">Our experts will optimize your resume to showcase your skills and experience effectively, enhancing your chances of getting noticed by recruiters.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-red rounded me-4">
                                <i class="fas fa-layer-group text-white" aria-hidden="true"></i>
                                    </div>
                               
                                    <div class="icon-content">
                                        <h3 class="h3">Job Placement Assistance</h3>
                                        <p class="dark-text">Our dedicated placement team works closely with reputable employers in Canada and the USA, matching your qualifications with available job opportunities.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4 mb-lg-0">
                                <div class="icon-box bg-red rounded me-4">
                                <i class="fas fa-headset text-white" aria-hidden="true"></i>
                                    </div>
                                    
                                    <div class="icon-content">
                                        <h3 class="h3">Immigration Support</h3>
                                        <p class="dark-text">Our licensed immigration consultants will guide you through the various visa options available and help you select the best pathway for your profile.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="pr-lg-4">
                            <div class="bg-light-subtle text-center rounded-custom overflow-hidden p-lg-5 p-3 mx-lg-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                                <img src="assets/img/thewy.jpg" alt="" class="img-fluid">
                                <div class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 right--40 top-right">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- 4 non ed -->

<!-- pnp 4 st st -->
<section class="work-process ptb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center aos-init aos-animate" data-aos="fade-up">
                            
                            <h2>Explore Your Immigration Options.</h2>
                            <!-- <p>We follow a systematic and efficient four-step delivery process to ensure the successful
                                implementation and deployment of your software solutions.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-lg-3">
                        <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                            <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                                <span class="h2 mb-0 dark-red fw-bold">1</span>
                            </div>
                            <h3 class="h5 dark-red">Express Entry to Canada</h3>
                            <p class="mb-0">A popular pathway for skilled workers to obtain PR in Canada.The CRS and for a better chance of receiving an Invitation to Apply.</p>
                        </div>
                    </div>
                    <div class="dots-line first"></div>
                    <div class="col-md-6 col-lg-3">
                        <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                                <span class="h2 mb-0 dark-red fw-bold">2</span>
                            </div>
                            <h5 class="h5 dark-red">PNP </h5>
                            <p class="mb-0">Uncover the various Programs available across Canada, each tailored to address regional labor market needs. Explore the different streams and eligibility.</p>
                        </div>
                    </div>
                    <div class="dots-line first"></div>
                    <div class="col-md-6 col-lg-3">
                        <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
                            <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                                <span class="h2 mb-0 dark-red fw-bold">3</span>
                            </div>
                            <h3 class="h5 dark-red">Family Sponsorship </h3>
                            <p class="mb-0">The process of sponsoring your spouse, partner, children, or parents to join you in Canada, fostering family reunification in a welcoming environment.</p>
                        </div>
                    </div>
                    <div class="dots-line first"></div>
                    <div class="col-md-6 col-lg-3">
                        <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                            <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                                <span class="h2 mb-0 dark-red fw-bold">4</span>
                            </div>
                            <h3 class="h5 dark-red">Work Permits</h3>
                            <p class="mb-0">Understand the different work permit options available for skilled workers, temporary workers, and international graduates seeking employment in Canada.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- pnp 4 st ed -->
        

        


       <!-- test styart -->
        <section class="testimonial-section pb-120 pb-50 bg-light-subtle">
            <div class="container">
                <div class="row justify-content-center align-content-center">
                    <div class="col-md-10 col-lg-6 ">
                        <div class="section-heading text-center" data-aos="fade-up">
                            <h4 class="h4 dark-red">Testimonial</h4>
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
        <!-- end -->