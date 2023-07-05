@extends('layouts.app')
@section('content')

        <!--page header section start-->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="background: url('assets/img/page-header-bg.svg')no-repeat bottom left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h1 class="display-5 fw-bold"><i class=" flaticon-fingerprint mx-3"></i>We are Development Experts</h1> 
                        <p class="lead">Seamlessly actualize client-based users after out-of-the-box value. Globally embrace strategic data through frictionless expertise.</p>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div>
        </section>
        <!--page header section end-->
<!-- about service start -->
<section class="counter-with-video pt-120 pb-120" id="cyber-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="cyber-about-img text-center mb-30 mb-lg-0">
                    <img src="assets/img/productdev.jpg" alt="VR" class="img-fluid">
                    <div class="row g-0">
                        <div class="col-lg-5">
                            <div class  ="sheild-img">
                                <img src="assets/img/pd2.jpg" alt="Sheild" class="img-fluid d-none d-lg-block">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="pe-2">
                                <div class="cyber-about-count-box d-md-flex bg-white p-3 mt-3 mb-3">
                                    <div class="pe-3">
                                        <h2>10+</h2>
                                    </div>
                                    <div>
                                        <h5 class="h6">Years Experience</h5>
                                        <p class="mb-0">Innovate To Inspire</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="pt-1">
                    <!-- <div class="d-flex about-icon-box-lg align-items-center">
                        <div class="me-3">
                            <img src="assets/img/Vri_logo_preview.png" alt="">
                        </div>
                        <div>
                            <h5>Empowering Businesses with Cutting-Edge</h5>
                        </div>
                    </div> -->
                    <div class="section-heading ">
                        <h4 class="lead mb-2">Driving Innovation and Transformation</h4>
                            <h2 class=" text-primary mb-4">Product Development</h2>
                            <p>Bringing innovative products to market requires a strategic approach and deep technical expertise. At  <span class="text-primary">VriAum</span>, we specialize in product development, helping businesses turn their ideas into reality. Our team of skilled professionals works closely with you to understand your vision, analyze market demands, and develop comprehensive product strategies.</p>
                            <p>
                            From conceptualization and design to prototyping and manufacturing, we guide you through every stage of the product development journey. With a commitment to quality, efficiency, and customer satisfaction, we deliver innovative products that drive growth and transformation in your industry.</p>
                            </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="">
                                <div class="feature-card border border-light border-2 rounded-custom p-3">
                                    <div class="rounded mb-2 d-flex align-items-center">
                                        <i class="fas fa-user-friends fa-2x text-primary me-3"></i>
                                        <h3 class="h5 mb-0"> Consultancy Services</h3>
                                    </div>
                                    <div class="feature-content">
                                        <p class="mb-0">Our experienced consultants will guide you through every step of your  journey, from strategy development to implementation.</p>
                                    </div>
                                    
                                </div>
                            </div></div>
                            <div class="col-6">
                                <div class="feature-card border border-light border-2 rounded-custom p-3">
                                    <div class="rounded mb-2 d-flex align-items-center">
                                        <i class="fas fa-fingerprint fa-2x text-primary me-3"></i>
                                        <h3 class="h5 mb-0"> Security Solutions</h3>
                                    </div>
                                    <div class="feature-content">
                                        <p class="mb-0">Safeguard your connected world with our advanced  security solution,trust us with our multi-layered  cutting-edge techniques.</p>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about service end -->
        <!--features grid section start-->
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="section-heading text-center mb-4">
                        <h5 class="h6 text-primary">Unleashing Innovation, Efficiency, and Growth</h5>
                        <h2>Product Development Services</h2>
                        <p class="lead mt-3">With our expertise and dedication, we help businesses harness the power of Product development to drive innovation, streamline operations, and achieve transformative growth.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="nav justify-content-center feature-tab-list-2 mt-4" id="nav-tab-2" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" href="#tab-2-1" data-bs-toggle="tab" data-bs-target="#tab-2-1" role="tab" aria-selected="true">
                                Prototype Development
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#tab-2-2" data-bs-toggle="tab" data-bs-target="#tab-2-2" role="tab" aria-selected="false" tabindex="-1">
                                Minimum Viable Product (MVP)
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#tab-2-3" data-bs-toggle="tab" data-bs-target="#tab-2-3" role="tab" aria-selected="false" tabindex="-1">
                                Product Scaling and Enhancement
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="nav-tabContent-2">
                        <div class="tab-pane fade pt-60 active show" id="tab-2-1" role="tabpanel">
                            <div class="row justify-content-center align-items-center justify-content-around">
                                <div class="col-lg-5">
                                    <div class="feature-tab-info">
                                        <h3>Prototype Development</h3>
                                        <p>Transform your ideas into tangible prototypes with our prototype development services. We utilize the latest tools and technologies to create functional and interactive prototypes that demonstrate the core features and user experience of your product. Our iterative approach allows for feedback and refinement, ensuring that your prototype aligns with your vision and user requirements. Whether you are a startup or an established business, our prototype development services can help you validate your ideas and attract potential investors or customers.</p>
                                        <h5 class="h6 text-primary">Bring Your Ideas to Life</h5>
                                        <p>Contact us today to discuss your prototype development needs and bring your ideas to life.</p>
                                        <a href="contact.html" class="read-more-link text-decoration-none mt-4 d-block">Contact Us <i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <img src="assets/img/prototype.jpg" alt="feature tab" class="img-fluid mt-4 mt-lg-0 mt-xl-0">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade pt-60" id="tab-2-2" role="tabpanel">
                            <div class="row justify-content-center align-items-center justify-content-around">
                                <div class="col-lg-5">
                                    <img src="assets/img/mvp.jpg" alt="feature tab" class="img-fluid mb-4 mb-lg-0 mb-xl-0">
                                </div>
                                <div class="col-lg-5">
                                    <div class="feature-tab-info">
                                        <h3>Minimum Viable Product (MVP)</h3>
                                        <p>Accelerate your product development process and validate your concept with a Minimum Viable Product (MVP). Our MVP development services focus on creating a scaled-down version of your product with essential features that solve your users' pain points. By launching an MVP, you can gather user feedback, test market viability, and iterate based on real-world data. Our team guides you through the entire MVP development cycle, from idea validation and MVP design to development and launch, helping you reduce time to market and minimize risks.</p>
                                        <h5 class="h6 text-primary">Validate and Launch Your Product Idea</h5>
                                        <p>Contact us today to discuss your MVP development requirements and validate your product idea.</p>
                                        <a href="contact.html" class="read-more-link text-decoration-none mt-4 d-block">Contact Us <i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade pt-60" id="tab-2-3" role="tabpanel">
                            <div class="row justify-content-center align-items-center justify-content-around">
                                <div class="col-lg-5">
                                    <div class="feature-tab-info">
                                        <h3>Product Scaling and Enhancement</h3>
                                        <p>Once your product gains traction and attracts a growing user base, it's crucial to scale and enhance its capabilities. Our product scaling and enhancement services focus on optimizing your product's performance, scalability, and user experience. Whether it's implementing new features, integrating third-party services, or enhancing the overall performance and security of your product, our team has the expertise to ensure a smooth and successful product scaling process. We work closely with you to understand your evolving business needs and align our solutions to meet your growth objectives.</p>
                                        <h5 class="h6 text-primary">Scale and Enhance Your Product's Potential</h5>
                                        <p>Contact us today to discuss how our product scaling and enhancement services can help you take your product to the next level.</p>
                                        <a href="contact.html" class="read-more-link text-decoration-none mt-4 d-block">Contact Us <i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <img src="assets/img/pse.jpg" alt="feature tab" class="img-fluid mt-4 mt-lg-0 mt-xl-0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
        <!--features grid section end-->
<!-- tab features strats -->
<section class="feature-section-two ptb-120">
    <div class="container">
        <div class="section-heading text-center mb-5">
            <h5 class="h6 text-primary">Why Choose Us?</h5>
            <h2>Key Features and Capabilities</h2>
            <p class="lead mt-3">Our product development services offer a wide range of features and capabilities, designed to bring your ideas to life and create innovative and successful products. Here's a glimpse of what we offer.</p>
        </div>
        <div class="row align-items-center justify-content-lg-between justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="feature-img-wrap">
                    <img src="assets/img/keypd.jpg" alt="feature tab" class="img-fluid mt-4 mt-lg-0 mt-xl-0 ">
                </div>
            </div>
            <div class="col-lg-7 col-md-12 mt-4">
                <div class="feature-content-wrap">
 
                <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-start mb-4">
                        <div class="icon-box bg-primary rounded me-4">
                            <i class="fas fa-lightbulb text-white"></i>
                        </div>
                        <div class="icon-content">
                            <h3 class="h5">Innovative Ideation</h3>
                            <p> We excel in generating innovative ideas for products, combining creativity and market insights to develop unique and compelling concepts.
                            </p>
                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-4">
                        <div class="icon-box bg-primary rounded me-4">
                            <i class="fas fa-cogs text-white"></i>
                        </div>
                        <div class="icon-content">
                            <h3 class="h5">End-to-End Development</h3>
                            <p>We offer comprehensive end-to-end product development services, from concept design and prototyping to manufacturing and quality assurance.
                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-4 mb-lg-0">
                        <div class="icon-box bg-primary rounded me-4">
                            <i class="fas fa-line-chart text-white"></i>
                        </div>
                        <div class="icon-content">
                            <h3 class="h5">Market Analysis</h3>
                            <p> We conduct in-depth market analysis to identify trends, target audiences, and competition, ensuring that your product is positioned for success in the market.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
</div>
</section>
<!-- tab features end -->
  
<!-- integrate companies  -->
<section class="integration-section ptb-120">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-3">
                <div class="integration-list-wrap">
                    <a  class="integration-1" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y data-bs-original-title="Y">
                        <img src="assets/img/integations/1.png" alt="integration" class="img-fluid rounded-circle">
                    </a>
                    <a  class="integration-2" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y data-bs-original-title="Y">
                        <img src="assets/img/integations/2.png" alt="integration" class="img-fluid rounded-circle">
                    </a>
                    <a  class="integration-3" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y data-bs-original-title="Y">
                        <img src="assets/img/integations/3.png" alt="integration" class="img-fluid rounded-circle">
                    </a>

                    <a  class="integration-4" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y data-bs-original-title="Y">
                        <img src="assets/img/integations/4.png" alt="integration" class="img-fluid rounded-circle">
                    </a>
                    <a  class="integration-5" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y data-bs-original-title="Y">
                        <img src="assets/img/integations/5.png" alt="integration" class="img-fluid rounded-circle">
                    </a>
                    <a  class="integration-6" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y data-bs-original-title="Y">
                        <img src="assets/img/integations/6.png" alt="integration" class="img-fluid rounded-circle">
                    </a>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="section-heading text-center my-5 my-lg-0 my-xl-0">
                    <h5 class="h6 text-primary">Integration</h5>
                    <h2>We Collaborate with Top Company in World</h2>
                    <p class="lead mt-3">At <span class="text-primary">VriAum</span>, we understand the power of collaboration. That's why we work closely with industry-leading companies to bring you the best innovative and robust solutions that meet the unique needs of your business. Together with our esteemed partners, we aim to drive digital transformation and shape the good future.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="col-lg-4">
                    <div class="integration-list-wrap">
                        <a  class="integration-7" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y data-bs-original-title="">
                            <img src="assets/img/integations/7.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a  class="integration-8" data-bs-toggle="tooltip" data-bs-placement="t aria-label="" data-bs-original-title="">
                            <img src="assets/img/integations/8.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a  class="integration-9" data-bs-toggle="tooltip" data-bs-placement="t aria-label="Y data-bs-original-title="">
                            <img src="assets/img/integations/9.png" alt="integration" class="img-fluid rounded-circle">
                        </a>

                        <a  class="integration-10" data-bs-toggle="tooltip" data-bs-placement="" aria-label="" data-bs-original-title="">
                            <img src="assets/img/integations/10.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a  class="integration-11" data-bs-toggle="tooltip" data-bs-placement="" aria-label="" data-bs-original-title="">
                            <img src="assets/img/integations/11.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                        <a  class="integration-12" data-bs-toggle="tooltip" data-bs-placement="" aria-label="" data-bs-original-title="">
                            <img src="assets/img/integations/12.png" alt="integration" class="img-fluid rounded-circle">
                        </a>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</section>
<!-- integrate end -->
<!-- testimonial start -->
<section class="testimonial-section ptb-120 bg-light-subtle">
    <div class="container">
        <div class="row justify-content-center align-content-center">
            <div class="col-md-10 col-lg-6">
                <div class="section-heading text-center">
                    <h4 class="h5 text-primary">Testimonials</h4>
                    <h2>What Our Clients Say</h2>
                    <!-- <p>Uniquely promote adaptive quality vectors rather than stand-alone e-markets pontificate alternative architectures with accurate schemas.</p> -->
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
                                            <h6 class="mb-0">John Doe</h6>
                                            <small>CEO, Company Xiu</small>
                                        </div>
                                    </div>
                                    <blockquote>
                                        <p>"We partnered with  <span class="text-primary">VriAum</span> for product development, and they exceeded our expectations. Their team displayed deep technical expertise and a thorough understanding of our market. The product they delivered was innovative, user-friendly, and perfectly aligned with our business goals. Its been wonderful to work with them."</p>
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
                                            <h6 class="mb-0">Jane Smith</h6>
                                            <small>Founder, Startup Azyesi</small>
                                        </div>
                                    </div>
                                    <blockquote>
                                        <p>"The product development experience with  <span class="text-primary">VriAum</span> was outstanding. They

 were highly collaborative and responsive throughout the entire process. Their team demonstrated a strong commitment to delivering a high-quality product, and we were impressed with their attention to detail and dedication to customer satisfaction."</p>
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
                                            <h6 class="mb-0">Sarah Williams</h6>
                                            <small>Product Manager, Company Zilu</small>
                                        </div>
                                    </div>
                                    <blockquote>
                                        <p>"Working with  <span class="text-primary">VriAum</span> on product development was a great experience. Their team demonstrated deep expertise in the field and provided valuable insights throughout the development process. The end result was a top-notch product that met all our requirements and delighted our customers."</p>
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
</section>
<!-- testimonial end -->
{{-- contact us form start --}}
<section class="contact-us ptb-120 position-relative ">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-5 col-lg-5 col-md-12">
                <div class="section-heading aos-init aos-animate" data-aos="fade-up">
                    <h4 class="h5 text-primary">Quick Support</h4>
                    <h2>Get in Touch Today!</h2>
                    <p>Proactively deliver seamless core competencies with scalable. Completely fabricate transparent
                        paradigms. </p>
                </div>
                <div class="row justify-content-between pb-5">
                    <div class="col-sm-6 mb-4 mb-md-0 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                        <div class="icon-box d-inline-block rounded-circle bg-primary-soft">
                            <i class="fas fa-phone fa-2x text-primary"></i>
                        </div>
                        <div class="contact-info">
                            <h5>Call Us</h5>
                            <p>Questions about our product or pricing? Call for support</p>
                            <a href="tel:(415)231-59687" class="read-more-link text-decoration-none"><i class="fas fa-phone me-2"></i> (415)231-59687</a>
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
                            <a href="#" class="read-more-link text-decoration-none"><i class="fas fa-comment me-2"></i> Live Chat Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-7 col-md-12">
                <div class="register-wrap p-5 bg-white shadow rounded-custom position-relative aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
                    <form action="#" class="register-form position-relative z-5">
                        <h3 class="mb-5 fw-medium">Fill out the form and we'll be in touch as soon as
                            possible.</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Name" aria-label="name">
                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Company website" aria-label="company-website">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Work email" aria-label="work-Email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <select class="form-control form-select" name="budget" id="budget" required="" data-msg="Please select your budget.">
                                        <option value="" selected="" disabled="">Budget</option>
                                        <option value="budget1">None, just getting started</option>
                                        <option value="budget1">Less than $20,000</option>
                                        <option value="budget1">$20,000 to $50,000</option>
                                        <option value="budget1">$50,000 to $100,000</option>
                                        <option value="budget2">$100,000 to $500,000</option>
                                        <option value="budget3">More than $500,000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <select class="form-control form-select" name="country" id="country" required="" data-msg="Please select your country.">
                                        <option value="" selected="" disabled="">Country</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">Åland Islands</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia, Plurinational State of</option>
                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="BN">Brunei Darussalam</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">Christmas Island</option>
                                        <option value="CC">Cocos (Keeling) Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CD">Congo, the Democratic Republic of the</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">Côte d'Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CW">Curaçao</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="TF">French Southern Territories</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GG">Guernsey</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HM">Heard Island and McDonald Islands</option>
                                        <option value="VA">Holy See (Vatican City State)</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran, Islamic Republic of</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JE">Jersey</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KP">Korea, Democratic People's Republic of</option>
                                        <option value="KR">Korea, Republic of</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Lao People's Democratic Republic</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macao</option>
                                        <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia, Federated States of</option>
                                        <option value="MD">Moldova, Republic of</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PS">Palestinian Territory, Occupied</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Réunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russian Federation</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="BL">Saint Barthélemy</option>
                                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="MF">Saint Martin (French part)</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome and Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SX">Sint Maarten (Dutch part)</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syrian Arab Republic</option>
                                        <option value="TW">Taiwan, Province of China</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania, United Republic of</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks and Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UM">United States Minor Outlying Islands</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                                        <option value="VN">Viet Nam</option>
                                        <option value="VG">Virgin Islands, British</option>
                                        <option value="VI">Virgin Islands, U.S.</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <textarea class="form-control" placeholder="Tell us more about your project, needs and budget" style="height: 120px"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label small" for="flexCheckChecked">
                                        Yes, I'd like to receive occasional marketing emails from us. I have the
                                        right to opt out at any time.
                                        <a href="#"> View privacy policy</a>.
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mt-4 d-block w-100">Get Started
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class=" bg-dark position-absolute bottom-0 h-25 bottom-0 left-0 right-0 z--1 py-5" style="background: url('assets/img/shape/dot-dot-wave-shape.svg')no-repeat center top">
        {{-- <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div> --}}
        <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
    </div>
</section>
{{-- contact us form end --}}
 @endsection
