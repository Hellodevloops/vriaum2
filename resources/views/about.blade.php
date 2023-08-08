@extends('layouts.app')
@section('content')
 
<!-- 1st st -->
<div class="ptb-2s0"></div>
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
                    {{-- <ul class="nav justify-content-center feature-tab-list-2 mt-4" id="nav-tab-2" role="tablist">
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
                    </ul> --}}
                    <div class="tab-content" id="nav-tabContent-2">
                        
                        <div class="tab-pane fade pt-60 active show" id="tab-2-4" role="tabpanel">
                            <div class="row justify-content-center align-items-center justify-content-around">
                                <div class="col-lg-5">
                                    <img src="assets/img/usacan1.jpg" alt="feature tab"
                                        class="img-fluid mb-4 mb-lg-0 mb-xl-0">
                                </div>
                                <div class="col-lg-5">
                                    <div class="feature-tab-info">
                                        <h3>About Us</h3>
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
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end -->

   

  

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
