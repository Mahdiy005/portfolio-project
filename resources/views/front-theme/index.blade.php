@extends('front-theme.master')
@section('page-title', 'Home')
@section('home-active', 'active')
@section('hero-type')
    <div class="container-xxl bg-primary hero-header">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="text-center col-lg-6 text-lg-start">
                    <h1 class="mb-4 text-white animated zoomIn">We Help To Push Your Business To The Top Level
                    </h1>
                    <p class="pb-3 text-white animated zoomIn">Tempor rebum no at dolore lorem clita rebum rebum
                        ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit
                        justo amet ipsum vero ipsum clita lorem</p>
                    <a href=""
                        class="px-5 py-3 border-2 btn btn-outline-light rounded-pill animated slideInRight">Learn
                        More</a>
                </div>
                <div class="text-center col-lg-6 text-lg-start">
                    <img class="img-fluid animated zoomIn" src="{{ asset('front_assets') }}/img/hero.png" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- About Start -->
    <div class="py-6 container-xxl">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('front_assets') }}/img/about.png">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="px-4 mb-3 border d-inline-block rounded-pill text-primary">About Us</div>
                    <h2 class="mb-4">Award Wining Consultancy Agency For Your Business</h2>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu
                        diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem
                        sit. Sanctus clita duo justo et tempor eirmod</p>
                    <div class="mb-4 row g-3">
                        <div class="col-12 d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="text-white fa fa-user-tie"></i>
                            </div>
                            <div class="ms-4">
                                <h6>Business Planning</h6>
                                <span>Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem
                                    et sit sed stet lorem sit clita duo</span>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="text-white fa fa-chart-line"></i>
                            </div>
                            <div class="ms-4">
                                <h6>Financial Analaysis</h6>
                                <span>Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem
                                    et sit sed stet lorem sit clita duo</span>
                            </div>
                        </div>
                    </div>
                    <a class="px-5 py-3 mt-2 btn btn-primary rounded-pill" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Newsletter Start -->
    @include('front-theme.partials.subscriber')
    <!-- Newsletter End -->


    <!-- Service Start -->
    <div class="py-6 container-xxl">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="px-4 mb-3 border d-inline-block rounded-pill text-primary">Our Services</div>
                <h2 class="mb-5">We Provide Solutions On Your Business</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded service-item h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-user-tie fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">Business Research</h5>
                            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                                sed stet lorem.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded service-item h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-chart-pie fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">Stretagic Planning</h5>
                            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                                sed stet lorem.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="rounded service-item h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-chart-line fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">Market Analysis</h5>
                            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                                sed stet lorem.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded service-item h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-chart-area fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">Financial Analaysis</h5>
                            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                                sed stet lorem.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded service-item h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-balance-scale fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">legal Advisory</h5>
                            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                                sed stet lorem.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="rounded service-item h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-house-damage fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">Tax & Insurance</h5>
                            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                                sed stet lorem.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Features Start -->
    <div class="py-6 container-xxl">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="px-4 mb-3 border d-inline-block rounded-pill text-primary">Features</div>
                    <h2 class="mb-4">Why People Choose Us? We Are Trusted & Award Wining Agency</h2>
                    <p>Clita nonumy sanctus nonumy et clita tempor, et sea amet ut et sadipscing rebum amet takimata
                        amet, sed accusam eos eos dolores dolore et. Et ea ea dolor rebum invidunt clita eos. Sea
                        accusam stet stet ipsum, sit ipsum et ipsum kasd</p>
                    <p>Et ea ea dolor rebum invidunt clita eos. Sea accusam stet stet ipsum, sit ipsum et ipsum kasd
                    </p>
                    <a class="px-5 py-3 mt-2 btn btn-primary rounded-pill" href="">Read More</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="mb-3 d-flex align-items-center">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="text-white fa fa-cubes"></i>
                                </div>
                                <h6 class="mb-0">Best In Industry</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="mb-3 d-flex align-items-center">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="text-white fa fa-percent"></i>
                                </div>
                                <h6 class="mb-0">99% Success Rate</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="mb-3 d-flex align-items-center">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="text-white fa fa-award"></i>
                                </div>
                                <h6 class="mb-0">Award Winning</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="mb-3 d-flex align-items-center">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="text-white fa fa-smile-beam"></i>
                                </div>
                                <h6 class="mb-0">100% Happy Client</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="mb-3 d-flex align-items-center">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="text-white fa fa-user-tie"></i>
                                </div>
                                <h6 class="mb-0">Professional Advisors</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.6s">
                            <div class="mb-3 d-flex align-items-center">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="text-white fa fa-headset"></i>
                                </div>
                                <h6 class="mb-0">24/7 Customer Support</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Client Start -->
    <div class="py-5 my-6 container-xxl bg-primary wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="owl-carousel client-carousel">
                <a href="#"><img class="img-fluid" src="{{ asset('front_assets') }}/img/logo-1.png"
                        alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('front_assets') }}/img/logo-2.png"
                        alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('front_assets') }}/img/logo-3.png"
                        alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('front_assets') }}/img/logo-4.png"
                        alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('front_assets') }}/img/logo-5.png"
                        alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('front_assets') }}/img/logo-6.png"
                        alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('front_assets') }}/img/logo-7.png"
                        alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('front_assets') }}/img/logo-8.png"
                        alt=""></a>
            </div>
        </div>
    </div>
    <!-- Client End -->


    <!-- Testimonial Start -->
    <div class="py-6 container-xxl">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="px-4 mb-3 border d-inline-block rounded-pill text-primary">Testimonial</div>
                <h2 class="mb-5">What Our Clients Say!</h2>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="p-4 rounded testimonial-item">
                    <i class="mb-3 fa fa-quote-left fa-2x text-primary"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                        diam</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle"
                            src="{{ asset('front_assets') }}/img/testimonial-1.jpg">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="p-4 rounded testimonial-item">
                    <i class="mb-3 fa fa-quote-left fa-2x text-primary"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                        diam</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle"
                            src="{{ asset('front_assets') }}/img/testimonial-2.jpg">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="p-4 rounded testimonial-item">
                    <i class="mb-3 fa fa-quote-left fa-2x text-primary"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                        diam</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle"
                            src="{{ asset('front_assets') }}/img/testimonial-3.jpg">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="p-4 rounded testimonial-item">
                    <i class="mb-3 fa fa-quote-left fa-2x text-primary"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                        diam</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle"
                            src="{{ asset('front_assets') }}/img/testimonial-4.jpg">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="py-6 container-xxl">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="px-4 mb-3 border d-inline-block rounded-pill text-primary">Our Team</div>
                <h2 class="mb-5">Meet Our Team Members</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <h5>Full Name</h5>
                        <p class="mb-4">Designation</p>
                        <img class="mb-4 img-fluid rounded-circle w-100" src="{{ asset('front_assets') }}/img/team-1.jpg"
                            alt="">
                        <div class="d-flex justify-content-center">
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <h5>Full Name</h5>
                        <p class="mb-4">Designation</p>
                        <img class="mb-4 img-fluid rounded-circle w-100" src="{{ asset('front_assets') }}/img/team-2.jpg"
                            alt="">
                        <div class="d-flex justify-content-center">
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <h5>Full Name</h5>
                        <p class="mb-4">Designation</p>
                        <img class="mb-4 img-fluid rounded-circle w-100" src="{{ asset('front_assets') }}/img/team-3.jpg"
                            alt="">
                        <div class="d-flex justify-content-center">
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <h5>Full Name</h5>
                        <p class="mb-4">Designation</p>
                        <img class="mb-4 img-fluid rounded-circle w-100" src="{{ asset('front_assets') }}/img/team-4.jpg"
                            alt="">
                        <div class="d-flex justify-content-center">
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
