@extends('layouts.app')
@section('content')
        
        <!--page header section start-->
          
        <section class="hero-it-solution hero-nine-bg ptb-120" style="background: url('assets/img/hero-9-img.png')no-repeat center center">
            <div class="px-5">
                <div class="row gx-5">
                    <div class="col-lg-6">
                        <div class="pr-lg-4">
                            <div class="bg-light-subtle text-center rounded-custom overflow-hidden p-lg-5 p-3 mx-lg-auto"
                                data-aos="fade-up" data-aos-delay="50">
                                <img src="assets/img/usarr.jpg" alt="" class="img-fluid">
                                <div
                                    class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 right--40 top-right">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="hero-img position-relative mt-5 mt-lg-0 pt-80">
                            <img src="assets/img/usarr.jpg" alt="hero hero-it-solution " class="img-fluid">
                        </div> --}}
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                            <h4 class="text-primary h5 mb-2"> Turning Wheels of Immigration Fortune</h4>
                            <h2 class="mb-4">About USA Migration Program</h2>
                        
                        <p class=" text-dark" >Welcome to VriAum for USA staffing, your reliable partner in connecting top talent with excellent opportunities. Our mission is to bridge the gap between job seekers and employers, making the recruitment process smooth and efficient.</p>

                         <p  class="">With a proven track record of successful placements and satisfied clients. We pride ourselves on our dedication to excellence, integrity, and personalized services, making us a preferred choice for both employers and job seekers alike.</p>
                           
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <!--page header section end-->
        <!-- start -->
        



        <!-- end -->
<!-- about service start -->


        
<!-- 2 sec -->
<section class=" pb-50 bg-dark ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="text-center">
                            <h2>Our Services</h2>
                            <p>
                                Credibly grow premier ideas rather than bricks-and-clicks strategic
                                theme areas distributed for stand-alone web-readiness.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="row">
                        <div class="service-tabs">
                            <ul class="nav nav-pills d-flex justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active me-4" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                        <i class="fas fa-vector-square me-2"></i>
                                        <span>Temporary </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link me-4" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" tabindex="-1">
                                        <i class="fas fa-vector-square me-2"></i>
                                        <span>Permanent </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" tabindex="-1">
                                        <i class="fas fa-vector-square me-2"></i>
                                        <span>Contract-To-Hire</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="tab-content-wrapper pt-60 pb-60 ">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="text-center mb-5 mb-lg-0 ">
                                            <img src="assets/img/tab_img1.png" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="tab-right-content">
                                            <h2>
                                                Temporary Staffing
                                            </h2>
                                            <p>Qualified temporary employees to meet your short-term staffing needs. We can connect you with skilled professionals to ensure your business runs smoothly.</p>
            <p>Our pool of temporary talent includes administrative staff, skilled laborers, IT professionals and more. Rest assured that our candidates are thoroughly screened and verified to match specific requirements.</p>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Seasonal Staffing Support</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Project-Based Staffing</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Skilled Temporary Employees</span>
                                                </li>
                                            </ul>
                                            <a href="{{ route('staffing')}}" class="text-white link-with-icon text-decoration-none">
                                                Know More About Us
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- t -->
                        <!-- t -->
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="tab-content-wrapper pt-60 pb-60">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="pe-5 mb-5 mb-lg-0">
                                            <img src="assets/img/tab_img2.png" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="tab-right-content">
                                            <h2>Permanent Staffing</h2>
                                            <p>When it comes to building a strong and long-lasting workforce, hiring the right talent is crucial. At VriAum, we understand the significance of finding candidates who not only possess the required skills and experience but also fit seamlessly into some organization's culture.</p>
            <p>Our expert recruiters utilize a rigorous screening process, including behavioral interviews and skill assessments, to present the best candidates for permanent positions. We work closely  to understand  organization's values and goals, ensuring a perfect match for the long term.</p>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Skill-Based Matching</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Tailored Talent Search</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Event Mangement</span>
                                                </li>
                                            </ul>
                                            <a href="{{ route('staffing')}}" class="text-white link-with-icon text-decoration-none">
                                                Know More About Us
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="tab-content-wrapper pt-60 pb-60">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="mb-5 mb-lg-0">
                                            <img src="assets/img/tab_img3.png" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="tab-right-content">
                                            <h2>Contract-To-Hire</h2>
                                            <p>Mitigate hiring risks and evaluate potential permanent employees through our contract-to-hire service. This option allows to assess the candidate's suitability and job performance before making a permanent commitment.</p>
            <p>During the contract period, we get a chance to observe how the candidate fits within the team, their work ethic, and how well they adapt to  company culture.</p>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Try Before You Commit</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Evaluate Cultural Fit</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Permanent Conversion Decision</span>
                                                </li>
                                            </ul>
                                            <a href="{{ route('staffing')}}" class="text-white link-with-icon text-decoration-none">
                                                Know More About Us
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- 2 sec end -->


<!-- about service end -->
        <!--features grid section start--> 
        <section class="feature-promo ptb-120 bg-light-subtle  ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-10">
                        <div class="section-heading text-center">
                            <h5 class="h6 text-primary">Accelerating Aspirations</h5>
                           <h2> USA Migration Program at the Wheel</h2>
                            <p>With a strong focus on empowering minds and embracing diversity, VriAum becomes the catalyst for unlocking potential and seizing success. Whether seeking internships or migrating staffing solutions, VriAum is the ideal guide to navigate the path to a brighter future in the USA.</p>
                            {{-- <p>At VriAum, we believe that every individual and every business is unique. That's why we take a personalized approach to each staffing requirement:</p> --}}

                        </div>
                    </div>
                </div>
               
                <div class="row  pt-3">
                    <div class="col-lg-6 mt-4">
                        <div class="position-relative d-flex flex-column h-100 flex-wrap bg-primary-soft p-5 rounded-custom">
                            <div class="cta-left-info mb-2">
                                <h5>Client-Centric</h5>
                                <p>We take the time to understand your organization's goals, culture, and specific job requirements. Our team works closely with you to ensure we present the most suitable candidates who align with your company's values. </p>
                            </div>
                            <div class="mt-auto">
                                <a href="{{ route('staffing')}}" class="btn btn-outline-primary btn-sm">More Information</a>
                            </div>
                            <div class="cta-img position-absolute right-0 bottom-0">
                                <img src="assets/img/centric.jpg" alt="cta img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <div class="position-relative d-flex flex-column h-100 flex-wrap bg-primary-soft p-5 rounded-custom">
                            <div class="cta-left-info mb-2">
                                <h5>Job Seeker Focused</h5>
                                <p>For job seekers, we go beyond matching skills and experience. We consider your career aspirations, work preferences, and personal interests to find the perfect job fit.</p>
                            </div>
                            <div class="mt-auto">
                                <a href="{{ route('staffing')}}" class="btn btn-outline-primary btn-sm">More Information</a>
                            </div>
                            <div class="cta-img position-absolute right-0 bottom-0">
                                <img src="assets/img/seeker.jpg" alt="cta img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
               
            </section>
        <!--features grid section end-->


        <!-- it non st -->
        <section class="cyber-faq pt-120 pb-60  ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="">
                        <div class="section-heading text-center mb-5">
                            <h5 class="h6 text-primary">What we offer</h5>
                            <h2 class="h2 ">Chance to learn and work in the USA</h2>
                            
                            <p class="">
                            At VriAum, we are committed to empowering individuals in the IT and Non-IT sectors to unlock their true potential by offering an integrated approach that includes enriching internships and seamless migration staffing opportunities to the USA.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row my-section">
                <div class="col-lg-6">
                      <div class="pt-1">
                    
                    <div class="section-heading ">
                        <h4 class="mb-4 dark-text"> Our Approach for<span class="mb-4 text-primary"> IT Sector</span></h4>
                     
                     <p class="dark-text">Our internship program offers a dynamic platform for candidates to gain hands-on experience in their chosen fields. We partner with leading companies in various industries, including IT and non-IT sectors, to provide enriching internship opportunities.Candidates can apply their theoretical knowledge to real-world scenarios, develop industry-relevant skills, and enhance their professional profiles.</p>
                   
                   </div>
                   
                    </div>
                 </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="cyber-faq-wrapper">
                            <div class="accordion faq-accordion" id="accordionExample">
                               
                                <div class="accordion-item border border-2 rounded">
                                    <h5 class="accordion-header" id="faq-2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false">
                                        Career Development
                                        </button>
                                    </h5>
                                    <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        We provide mentorship and guidance to help interns identify their career paths and make informed decisions for their future in the IT industry.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-2 rounded">
                                    <h5 class="accordion-header" id="faq-3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false">
                                        Industry-Specific Opportunities
                                        </button>
                                    </h5>
                                    <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        We specialize in IT staffing, connecting candidates with organizations seeking talent in various IT domains.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-2 rounded">
                                    <h5 class="accordion-header" id="faq-4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false">
                                        Focus on Career Growth
                                        </button>
                                    </h5>
                                    <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Our approach centers on fostering a sustainable and successful IT career in the USA, empowering candidates to thrive in the dynamic IT industry.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6">
                      <div class="pt-1">
                    
                    <div class="section-heading ">
                        <h4 class="mb-4 dark-text"> Our Approach for<span class="mb-4 text-primary"> IT Sector</span></h4>
                     
                     <p class="dark-text">Our internship program offers a dynamic platform for candidates to gain hands-on experience in their chosen fields. We partner with leading companies in various industries, including IT and non-IT sectors, to provide enriching internship opportunities.Candidates can apply their theoretical knowledge to real-world scenarios, develop industry-relevant skills, and enhance their professional profiles.</p>
                   
                   </div>
                   
                    </div>
                 </div> -->
                </div>
            
                <!-- 2start -->
                <div class="row my-section">
                <div class="col-lg-6">
                          <div class="pt-1">
                            
                         <div class="section-heading ">
                            <h4 class="mb-4 dark-text"> Our Approach for<span class="mb-4 text-primary"> Non IT Sector</span></h4>
                          {{-- <h2 class="mb-4 text-primary">Approach for Non IT Sector</h2> --}}
                          <p class="dark-text">Our Non-IT internship program caters to various industries, including finance, healthcare, marketing, engineering, and more. We partner with leading companies in these sectors, offering internships that provide valuable exposure and practical experience.</p>
                      
                       </div>
                   
                     </div>
                 </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="cyber-faq-wrapper">
                            <div class="accordion faq-accordion" id="accordionExample">
                               
                                <div class="accordion-item border border-2 rounded">
                                    <h5 class="accordion-header" id="faq-2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false">
                                        Professional Growth
                                        </button>
                                    </h5>
                                    <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        We aim to equip candidates with the tools they need to succeed in their non-IT careers and make meaningful contributions to their chosen fields.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-2 rounded">
                                    <h5 class="accordion-header" id="faq-3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false">
                                        Personalized Approach
                                        </button>
                                    </h5>
                                    <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Our team understands the unique qualifications of each candidate, ensuring a seamless fit between candidates and employers.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-2 rounded">
                                    <h5 class="accordion-header" id="faq-4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false">
                                        Focus on Career Advancement
                                        </button>
                                    </h5>
                                    <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Our approach is focused on empowering candidates to succeed in their non-IT careers, contributing to the growth of their chosen industries in the USA.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6">
                          <div class="pt-1">
                            
                         <div class="section-heading ">
                            <h4 class="mb-4 dark-text"> Our Approach for<span class="mb-4 text-primary"> Non IT Sector</span></h4>
                          {{-- <h2 class="mb-4 text-primary">Approach for Non IT Sector</h2> --}}
                          <p class="dark-text">Our Non-IT internship program caters to various industries, including finance, healthcare, marketing, engineering, and more. We partner with leading companies in these sectors, offering internships that provide valuable exposure and practical experience.</p>
                      
                       </div>
                   
                     </div>
                 </div> -->
                </div>
                <!-- 2end -->
               
               
            </div>
        </section>
        <!-- it non ed -->


        
<!-- tab features strats -->
<section class="promo-section ptb-120 bg-light-subtle   ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="">
                        <div class="section-heading text-center aos-init aos-animate" data-aos="fade-up">
                            <h5 class="h6 text-primary">Why Vriaum?</h5>
                            <h3 class="">Empowering Dreams, Elevating Careers: VriAum</h3>
                            Learn and work in the USA, unlocking boundless opportunities. Your reliable partner for success, empowering dreams to reality. Embrace growth, seize the American dream with VriAum's guidance.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mt-4 mt-lg-0 mt-md-0">
                        <div class="bg-dark p-5 text-center d-flex flex-column h-40 rounded-custom aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="promo-card-info mb-4">
                                <h3> Extensive <br>Network
                                </h3>
                                <!--class="display-5 fw-bold mb-4"  -->
                                <p>With our wide-ranging network of job seekers and employers, we can connect you with the right people and opportunities. </p>
                            </div>
                            <!-- <div class="mt-auto">
                                <img src="assets/img/clients/client-logo-4.svg" width="120" alt="clients" class="img-fluid me-auto customer-logo">
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4 mt-lg-0 mt-md-0">
                        <div class="bg-dark p-5 text-center d-flex flex-column h-40 rounded-custom aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
                            <div class="promo-card-info mb-4">
                                <h3> Industry<br> Expertise
                                </h3>
                                <p>Our team has in-depth knowledge and expertise in various industries, enabling us to find the best matches for valuable insights. </p>
                            </div>
                            <!-- <div class="mt-auto">
                                <img src="assets/img/clients/client-logo-2.svg" width="120" alt="clients" class="img-fluid me-auto customer-logo">
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4 mt-lg-0">
                        <div class="bg-dark p-5 text-center d-flex flex-column h-40 rounded-custom aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                            <div class="promo-card-info mb-4">
                                <h3>
                                Personalized Approach</h3>
                                <p>We believe in providing personalized services tailored to meet your specific needs and wide range of opportunities.</p>
                            </div>
                            <!-- <div class="mt-auto">
                                <img src="assets/img/clients/client-logo-3.svg" width="120" alt="clients" class="img-fluid me-auto customer-logo">
                            </div> -->
                        </div>
                    </div>

                </div>
            </div>
        </section>
<!-- tab features end -->
<!-- faq start -->
<section class="faq-section ptb-120  ">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-12">
                            <div class="section-heading mb-5 text-center">
                                <h5 class="h6 text-primary">FAQ</h5>
                                <h2>Frequently Asked Questions</h2>
                                <p>It is an excellent opportunity to address common queries and provide valuable information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-12">
                            <div class="accordion faq-accordion" id="accordionExample">
                                <div class="accordion-item border border-2 active">
                                    <h5 class="accordion-header" id="faq-1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false">
                                        What services do you provide for training?
                                        </button>
                                    </h5>
                                    <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                        We offer comprehensive training programs in various industries, focusing on skill development, career guidance, and practical experience. Our training services cover a wide range of subjects, preparing individuals for the demands of their desired professions.
                                        </div>
                                    </div>
                                </div>

                               
                                <div class="accordion-item border border-2">
                                    <h5 class="accordion-header" id="faq-2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false">
                                        How does the migration process to the USA work?
                                        </button>
                                    </h5>
                                    <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        We stay updated with the latest immigration laws and regulations, and our team works closely with applicants to understand their specific circumstances, providing personalized advice and support throughout the entire process.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border border-2">
                                    <h5 class="accordion-header" id="faq-3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false">
                                        What industries do you offer training in?
                                        </button>
                                    </h5>
                                    <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Our industry-focused training curriculums are designed in collaboration with industry experts to ensure that participants gain relevant skills and stay up-to-date with the latest industry trends and practices.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item border border-2">
                                    <h5 class="accordion-header" id="faq-4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false">
                                        Are your training programs suitable for beginners?
                                        </button>
                                    </h5>
                                    <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        We provide a supportive learning environment, where beginners receive foundational knowledge and practical guidance, while experienced participants can delve into more advanced topics and industry-specific skills.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item border border-2">
                                    <h5 class="accordion-header" id="faq-5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false">
                                        Do you provide job placement assistance after completing the training?
                                        </button>
                                    </h5>
                                    <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        we provide job placement assistance to help you find suitable opportunities based on your newly acquired skills and career goals.
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!-- faq end -->
  
<!-- integrate companies  -->
<section class="customer-review-tab ptb-120 bg-light-subtle position-relative z-2  ">
                <div class="container">
                    <div class="row justify-content-center align-content-center">
                        <div class="col-md-10 col-lg-6">
                            <div class="section-heading text-center">
                                <h4 class="h5 text-primary">Testimonial</h4>
                                <h2>What They Say About Us</h2>
                                <p>Uniquely promote adaptive quality vectors rather than stand-alone e-markets. pontificate
                                    alternative architectures whereas iterate.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="testimonial-tabContent">
                                <div class="tab-pane fade active show" id="testimonial-tab-1" role="tabpanel">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0">
                                                <img src="assets/img/testimonial/quotes-left.svg" alt="testimonial quote" width="65" class="img-fluid mb-32">
                                                <!-- <div class="blockquote-title-review mb-4">
                                                    <h3 class="mb-0 h4 fw-semi-bold">The Best Template You Got to Have
                                                        it!</h3>
                                                    <ul class="review-rate mb-0 list-unstyled list-inline">
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
                                                </div> -->

                                                <blockquote class="blockquote">
                                                    <p> VriAum has been instrumental in helping me secure a fantastic job opportunity in the USA. Their dedicated team guided me through the entire immigration process and provided valuable career advice.</p>
                                                </blockquote>
                                                <div class="author-info mt-4">
                                                    <h6 class="mb-0">Joe Richard</h6>
                                                    <!-- <span>Visual Designer</span> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6">
                                            <div class="author-img-wrap pt-5 ps-5">
                                                <div class="testimonial-video-wrapper position-relative">
                                                    <img src="assets/img/dummy.jpeg" class="img-fluid rounded-custom shadow-lg" alt="testimonial author">
                                                    <div class="customer-info text-white d-flex align-items-center">
                                                        <!-- <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg" class="video-icon popup-youtube text-decoration-none"><i class="fas fa-play"></i> <span class="text-white ms-2 small"> Watch Video</span></a> -->
                                                    </div>
                                                    <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="testimonial-tab-2" role="tabpanel">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0">
                                                <img src="assets/img/testimonial/quotes-left.svg" alt="testimonial quote" width="65" class="img-fluid mb-32">
                                                <!-- <div class="blockquote-title-review mb-4">
                                                    <h3 class="mb-0 h4 fw-semi-bold">Embarrassed by the First Version.</h3>
                                                    <ul class="review-rate mb-0 list-unstyled list-inline">
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
                                                </div> -->
                                                <blockquote class="blockquote">
                                                    <p>I had the pleasure of working VriAum for my career move to USA.They matched me with the perfect job that aligned with my skills and aspirations.  </p>
                                                </blockquote>
                                                <div class="author-info mt-4">
                                                    <h6 class="mb-0">Rupan Oberoi</h6>
                                                    <!-- <span>Web Designer</span> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6">
                                            <div class="author-img-wrap pt-5 ps-5">
                                                <div class="testimonial-video-wrapper position-relative">
                                                    <img src="assets/img/dummy.jpeg" class="img-fluid rounded-custom shadow-lg" alt="testimonial author">
                                                    <div class="customer-info text-white d-flex align-items-center">
                                                        <!-- <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg" class="video-icon popup-youtube text-decoration-none"><i class="fas fa-play"></i> <span class="text-white ms-2 small"> Watch Video</span></a> -->
                                                    </div>
                                                    <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="testimonial-tab-3" role="tabpanel">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0">
                                                <img src="assets/img/testimonial/quotes-left.svg" alt="testimonial quote" width="65" class="img-fluid mb-32">
                                                <!-- <div class="blockquote-title-review mb-4">
                                                    <h3 class="mb-0 h4 fw-semi-bold">Amazing Quiety template!</h3>
                                                    <ul class="review-rate mb-0 list-unstyled list-inline">
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
                                                </div> -->
                                                <blockquote class="blockquote">
                                                    <p>
                                                    The training program offered by VriAum transformed my career. Their expert instructors equipped me with the latest industry knowledg.
                                                    </p>
                                                </blockquote>
                                                <div class="author-info mt-4">
                                                    <h6 class="mb-0">Jon Doe</h6>
                                                    <!-- <span>Software Engineer</span> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6">
                                            <div class="author-img-wrap pt-5 ps-5">
                                                <div class="testimonial-video-wrapper position-relative">
                                                    <img src="assets/img/dummy.jpeg" class="img-fluid rounded-custom shadow-lg" alt="testimonial author">
                                                    <div class="customer-info text-white d-flex align-items-center">
                                                        <!-- <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg" class="video-icon popup-youtube text-decoration-none"><i class="fas fa-play"></i> <span class="text-white ms-2 small"> Watch Video</span></a> -->
                                                    </div>
                                                    <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="testimonial-tab-4" role="tabpanel">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0">
                                                <img src="assets/img/testimonial/quotes-left.svg" alt="testimonial quote" width="65" class="img-fluid mb-32">
                                                <!-- <div class="blockquote-title-review mb-4">
                                                    <h3 class="mb-0 h4 fw-semi-bold">Best Template for SAAS Company!</h3>
                                                    <ul class="review-rate mb-0 list-unstyled list-inline">
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
                                                </div> -->
                                                <blockquote class="blockquote">
                                                    <p>Participating in the internship program with VriAum was a game-changer for me. I gained valuable experience and built professional connections. </p>
                                                </blockquote>
                                                <div class="author-info mt-4">
                                                    <h6 class="mb-0">Hanry Luice</h6>
                                                    <!-- <span>App Developer</span> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6">
                                            <div class="author-img-wrap pt-5 ps-5">
                                                <div class="testimonial-video-wrapper position-relative">
                                                    <img src="assets/img/dummy.jpeg" class="img-fluid rounded-custom shadow-lg" alt="testimonial author">
                                                    <div class="customer-info text-white d-flex align-items-center">
                                                        <!-- <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg" class="video-icon popup-youtube text-decoration-none"><i class="fas fa-play"></i> <span class="text-white ms-2 small"> Watch Video</span></a> -->
                                                    </div>
                                                    <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-pills testimonial-tab-menu mt-60" id="testimonial" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link active" data-bs-toggle="pill" data-bs-target="#testimonial-tab-1" role="tab" aria-selected="true">
                                        <div class="testimonial-thumb me-3">
                                            <img src="assets/img/dummy.jpeg" width="50" class="rounded-circle" alt="testimonial thumb">
                                        </div>
                                        <div class="author-info">
                                            <h6 class="mb-0">Joe Richard</h6>
                                            <span>Visual Designer</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link" data-bs-toggle="pill" data-bs-target="#testimonial-tab-2" role="tab" aria-selected="false" tabindex="-1">
                                        <div class="testimonial-thumb me-3">
                                            <img src="assets/img/dummy.jpeg" width="50" class="rounded-circle" alt="testimonial thumb">
                                        </div>
                                        <div class="author-info">
                                            <h6 class="mb-0">Rupan Oberoi</h6>
                                            <span>Web Designer</span>
                                        </div>
                                    </div>

                                </li>
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link" data-bs-toggle="pill" data-bs-target="#testimonial-tab-3" role="tab" aria-selected="false" tabindex="-1">
                                        <div class="testimonial-thumb me-3">
                                            <img src="assets/img/dummy.jpeg" width="50" class="rounded-circle" alt="testimonial thumb">
                                        </div>
                                        <div class="author-info">
                                            <h6 class="mb-0">Jon Doe</h6>
                                            <span>Software Engineer</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link" data-bs-toggle="pill" data-bs-target="#testimonial-tab-4" role="tab" aria-selected="false" tabindex="-1">
                                        <div class="testimonial-thumb me-3">
                                            <img src="assets/img/dummy.jpeg" width="50" class="rounded-circle" alt="testimonial thumb">
                                        </div>
                                        <div class="author-info">
                                            <h6 class="mb-0">Hanry Luice</h6>
                                            <span>App Developer</span>
                                        </div>
                                    </div>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
<!-- integrate end -->
<!-- testimonial start -->

<!-- testimonial end -->
{{-- contact us form start --}}
<section class="contact-us ptb-120 position-relative  ">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-5 col-lg-5 col-md-12">
                <div class="section-heading aos-init aos-animate" data-aos="fade-up">
                    <h4 class="h5 text-primary">Quick Support</h4>
                    <h2>Get in Touch Today!</h2>
                    <p> Consultancy Contact for Career Opportunities and Migration Services.</p>
                </div>
                <div class="row justify-content-between pb-5">
                    <div class="col-sm-6 mb-4 mb-md-0 mb-lg-0 aos-init aos-animate" data-aos="fade-up"
                        data-aos-delay="50">
                        <div class="icon-box d-inline-block rounded-circle bg-primary-soft">
                            <i class="fas fa-phone fa-2x text-primary"></i>
                        </div>
                        <div class="contact-info">
                            <h5>Call Us</h5>
                            <p>Questions about our product or pricing? Call for support</p>
                            <a href="tel:+16464795816" class="read-more-link text-decoration-none"><i
                                    class="fas fa-phone me-2"></i>+1 (646)4795816</a>
                        </div>
                    </div>
                    <div class="col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box d-inline-block rounded-circle bg-danger-soft">
                            <i class="fas fa-headset fa-2x text-danger"></i>
                        </div>
                        <div class="contact-info">
                            <h5>Chat Us</h5>
                            <p>Our support will help you from
                                <strong>9am to 5pm EST.</strong>
                            </p>
                            <a href="#crisp-chatbox" class="read-more-link text-decoration-none"><i
                                    class="fas fa-comment me-2"></i> Live Chat Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-7 col-md-12">
                <!-- Add this in your <head> tag -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                <div class="register-wrap p-5 bg-white shadow rounded-custom position-relative aos-init aos-animate"
                    data-aos="fade-up" data-aos-delay="150">

                    <form class="cons-contact-form" id="contactForm" method="POST"
                        action="{{ route('contact.store') }}">

                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="firstName" class="mb-1">First name <span
                                        class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="name" value=""
                                        id="firstName" required="" placeholder="First name"
                                        aria-label="First name" fdprocessedid="kj2rk">
                                </div>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6 ">
                                <label for="lastName" class="mb-1">Last name</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="subject" class="form-control" value=""
                                        placeholder="Last name" aria-label="Last name" fdprocessedid="deicf">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="phone" class="mb-1">Phone <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="tel" name="phone" class="form-control" value=""
                                        required="" placeholder="Phone" aria-label="Phone"
                                        fdprocessedid="d66hwh">
                                </div>
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <label for="email" class="mb-1">Email<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control" value=""
                                        required="" placeholder="Email" aria-label="Email"
                                        fdprocessedid="xrlb5v">
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="yourMessage" class="mb-1">Message <span
                                        class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <textarea name="message" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4" fdprocessedid="ri7lf">Get in
                            Touch</button>
                    </form>
                    <div id="thankYouMessage" style="display: none;">
                        <h3>Thank you for your message!</h3>
                        <p>We will get in touch with you shortly.</p>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Add this script at the end of your Blade template or in a separate JS file -->
                    <script>
                        $(document).ready(function() {
                            $('#contactForm').submit(function(event) {
                                event.preventDefault(); // Prevent the default form submission

                                var formData = $(this).serialize(); // Serialize the form data

                                // Send the AJAX request
                                $.ajax({
                                    url: "{{ route('contact.store') }}", // The Laravel route to handle the form submission
                                    method: "POST",
                                    data: formData,
                                    success: function(response) {
                                        // On success, display the thank you message
                                        // $('#contactForm').hide(); // Hide the form
                                        $('#thankYouMessage').show(); // Show the thank you message
                                    },
                                    error: function(xhr, status, error) {
                                        // Handle the error if the AJAX request fails
                                        console.error(error);
                                    }
                                });
                            });
                        });
                    </script>


                </div>
            </div>
        </div>
    </div>
    <div class=" bg-dark position-absolute bottom-0 h-25 bottom-0 left-0 right-0 z--1 py-5"
        style="background: url('assets/img/shape/dot-dot-wave-shape.svg')no-repeat center top">
        {{-- <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div> --}}
        <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
    </div>
</section>
 @endsection
