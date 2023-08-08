@extends('layouts.app')
@section('content')

       

        <!--contact us promo section start-->
        <section class="contact-promo ptb-120">
            <div class="container ptb-40">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <span class="fas fa-comment fa-3x text-danger dark-red"></span>
                            <div class="contact-promo-info mb-4">
                                <h5>Chat with us</h5>
                                <p class="text-black">Chat with Us Live for Real-time Assistance <strong>Monday to Friday</strong> from
                                    <strong>9am to 6pm .</strong>
                                </p>
                            </div>
                            <a href="mailto:info@vriaum.com" class="btn btn-primary mt-auto">Chat with us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <span class="fas fa-envelope fa-3x text-danger dark-red"></span>
                            <div class="contact-promo-info mb-4">
                                <h5>Email Us</h5>
                                <p class="text-black">Simple drop us an email at <strong>admin@vriaum.com</strong>
                                    and you'll receive a reply within 24 hours</p>
                            </div>
                            <a href="mailto:admin@vriaum.com" class="btn btn-primary mt-auto">Email Us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <span class="fas fa-phone fa-3x text-danger dark-red"></span>
                            <div class="contact-promo-info mb-4">
                                <h5>Give us a call</h5>
                                <p class="text-black">Give us a ring.Our Experts are standing by <strong>monday to friday</strong> from
                                    <strong>9am to 6pm.</strong>
                                </p>
                            </div>
                            <a href="tel:+1 646-479-5816" class="btn btn-primary mt-auto">+1 646-479-5816</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us promo section end-->

        <!--contact us form start-->
        <section class="contact-us ptb-120 position-relative ">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-12">
                        <div class="section-heading aos-init aos-animate" data-aos="fade-up">
                            <h4 class="h5 dark-red">Quick Support</h4>
                            <h2>Get in Touch Today!</h2>
                            <p> Consultancy Contact for Career Opportunities and Migration Services.</p>
                        </div>
                        <div class="row justify-content-between pb-5">
                            <div class="col-sm-6 mb-4 mb-md-0 mb-lg-0 aos-init aos-animate" data-aos="fade-up"
                                data-aos-delay="50">
                                <div class="icon-box d-inline-block rounded-circle bg-primary-soft">
                                    <i class="fas fa-phone fa-2x dark-red"></i>
                                </div>
                                <div class="contact-info">
                                    <h5>Call Us</h5>
                                    <p>Questions about our product or pricing? Call for support</p>
                                    <a href="tel:+16464795816" class="read-more-link text-decoration-none dark-red"><i
                                            class="fas fa-phone me-2 danger"></i>+1 (646)4795816</a>
                                </div>
                            </div>
                            <div class="col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon-box d-inline-block rounded-circle bg-danger-soft">
                                    <i class="fas fa-headset fa-2x dark-red"></i>
                                </div>
                                <div class="contact-info">
                                    <h5>Chat Us</h5>
                                    <p>Our support will help you from
                                        <strong>9am to 5pm EST.</strong>
                                    </p>
                                    <a href="#crisp-chatbox" class="read-more-link text-decoration-none dark-red"><i
                                            class="fas fa-comment me-2 "></i> Live Chat Now</a>
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
                                                class="dark-red">*</span></label>
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
                                        <label for="phone" class="mb-1">Phone <span class="dark-red">*</span></label>
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
                                        <label for="email" class="mb-1">Email<span class="dark-red">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="email" name="email" class="form-control" value=""
                                                required="" placeholder="Email" aria-label="Email"
                                                fdprocessedid="xrlb5v">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="yourMessage" class="mb-1">Message <span
                                                class="dark-red">*</span></label>
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
        <!--contact us form end-->


   @endsection
   <!-- end -->
