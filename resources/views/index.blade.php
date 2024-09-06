@extends('layouts.app')

@section('title', 'Movemax Logistics Nig. Ltd - Freight, Moving and Local Logistics Services, Lagos - Nigeria')

@section('content')
<!-- start slider -->
<section class="p-0 top-space-margin full-screen md-h-600px sm-h-650px">
    <div class="swiper h-100 magic-cursor swiper-light-pagination"
        data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-pagination-bullets", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
        <div class="swiper-wrapper">
            <!-- start slider item -->
            <div class="swiper-slide cover-background"
                style="background-image:url('images/movemax-slider-01.jpg');">
                <div class="container h-100">
                    <div class="row align-items-center h-100 xl-ps-10 sm-ps-0">
                        <div class="col-xxl-7 col-xl-10 text-white">
                            <h1 class="fw-600">Trusted freight &amp; logistics services.</h1>
                            <div class="fs-20 opacity-6 mb-40px sm-mb-30px">Providing flexible and reliable delivery
                                nationwide.</div>
                            <div class="lg-mb-8 md-mb-0">
                                <a href="#services"
                                    class="btn btn-white btn-extra-large btn-round-edge fw-700 btn-box-shadow me-35px">Explore
                                    Services</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
            <div class="swiper-slide cover-background"
                style="background-image:url('images/movemax-slider-02.jpg');">
                <div class="container h-100">
                    <div class="row align-items-center h-100 xl-ps-10 sm-ps-0">
                        <div class="col-xxl-7 col-xl-10 text-white">
                            <h1 class="fw-600">Swift & Secure Last Mile Delivery.</h1>
                            <div class="fs-20 opacity-6 mb-40px sm-mb-30px"> Secure courier for small and large
                                shipments across Nigeria.</div>
                            <div class="lg-mb-8 md-mb-0">
                                <a href="#about"
                                    class="btn btn-white btn-extra-large btn-round-edge fw-700 btn-box-shadow me-35px">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
            <div class="swiper-slide cover-background"
                style="background-image:url('images/movemax-slider-033.jpg');">
                <div class="container h-100">
                    <div class="row align-items-center h-100 xl-ps-10 sm-ps-0">
                        <div class="col-xxl-7 col-xl-10 text-white">
                            <h1 class="fw-600">Seamless Local Moving Services.</h1>
                            <div class="fs-20 opacity-6 mb-40px sm-mb-30px">Efficient local moving services for
                                businesses and individuals.</div>
                            <div class="lg-mb-8 md-mb-0">
                                <a href="#contact"
                                    class="btn btn-white btn-extra-large btn-round-edge fw-700 btn-box-shadow me-35px">Speak
                                    To Us</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
        </div>
        <!-- start slider pagination -->
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets d-block d-md-none"></div>
        <!-- end slider pagination -->
        <!-- start slider navigation -->
        <div
            class="slider-one-slide-prev-1 icon-very-medium text-white swiper-button-prev slider-navigation-style-06 bg-black-transparent-medium h-60px w-60px d-none d-sm-flex border-radius-100">
            <i class="bi bi-arrow-left-short"></i>
        </div>
        <div
            class="slider-one-slide-next-1 icon-very-medium text-white swiper-button-next slider-navigation-style-06 bg-black-transparent-medium h-60px w-60px d-none d-sm-flex border-radius-100">
            <i class="bi bi-arrow-right-short"></i>
        </div>
        <!-- end slider navigation -->
    </div>
</section>
<!-- end slider -->
<!-- start section -->
<section class="p-0 lg-pt-8 xs-pt-50px">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-5 outside-box-top-205px lg-mt-0 position-relative z-index-1">
                <div class="border-radius-10px overflow-hidden">
                    <div class="bg-base-color p-50px xs-p-30px position-relative">
                        <span class="text-dark-gray opacity-8 fw-500 d-block mb-5px">Movemax Logistics Nig.
                            Limited</span>
                        <h5 class="mb-0 fw-700 text-dark-gray">Swift, Secure, and Seamless Logistics.</h5>
                        <div class="position-absolute top-0 end-0">
                            <img src="images/demo-logistics-diagonal-line-01.svg" alt="" height="100" width="100">
                        </div>
                    </div>
                    <div class="bg-dark-gray ps-50px pe-50px pt-20px pb-20px sm-ps-30px sm-pe-30px">
                        <a href="#contact" class="fs-19 fw-500 text-white d-flex w-100 align-items-center">Get a Free
                            Estimate<i class="feather icon-feather-plus ms-auto icon-extra-medium"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section id="about-us" class="position-relative">
    <div class="container">
        <img src="images/demo-logistics-home-bg-01.jpg" class="position-absolute bottom-10px right-0px z-index-minus-1"
            data-bottom-top="transform: translateY(150px)" data-top-bottom="transform: translateY(-150px)" alt="" />
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-10 md-mb-50px"
                data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <img src="images/demo-logistics-home-01.jpg" class="w-100"
                    data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" alt="">
            </div>
            <div class="col-xl-5 col-lg-6 col-md-10 offset-xl-1"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="fw-700 ls-minus-1px text-dark-gray mb-20px">About Movemax Logistics Services Limited.</h2>
                <p class="w-90 lg-w-100">Movemax Logistics is a leading provider of freight, moving, and local logistics
                    services based in Lagos, Nigeria. We provide a full range of services in freight transportation,
                    Warehousing, Last mile delivery, and moving.</p>
                <div class="icon-with-text-style-08 mb-10px">
                    <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                        <div
                            class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-light-medium-gray rounded-circle me-15px">
                            <i class="fa-solid fa-check fs-14 text-dark-gray"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="text-dark-gray fw-500">Nationwide coverage with local expertise

                            </span>
                        </div>
                    </div>
                </div>
                <div class="icon-with-text-style-08 mb-10px">
                    <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                        <div
                            class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-light-medium-gray rounded-circle me-15px">
                            <i class="fa-solid fa-check fs-14 text-dark-gray"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="text-dark-gray fw-500">We Deliver reliably, with with Integrity &amp;
                                Excellence</span>
                        </div>
                    </div>
                </div>
                <div class="mt-35px d-flex flex-wrap">
                    <a href="#services"
                        class="btn btn-large btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow btn-icon-right me-30px">
                        <span>
                            <span class="btn-text">Our services</span>
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                        </span>
                    </a>
                    <div class="feature-box feature-box-left-icon-middle xs-mt-20px">
                        <div
                            class="feature-box-icon feature-box-icon-rounded bg-base-color w-60px h-60px rounded-circle me-15px">
                            <i
                                class="feather icon-feather-phone-call align-middle icon-extra-medium text-dark-gray"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block fw-500">Get in touch</span>
                            <a href="tel:+234 805 906 5288" class="d-block text-dark-gray fw-700">+234 805 906 5288</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section id="our-services" class="overflow-hidden bg-very-light-gray mt-5">
    <div class="container">
        <div class="row justify-content-center mb-3 xs-mb-2">
            <div class="col-lg-7 text-center"
                data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [0, 0], "staggervalue": 200, "easing": "easeInOutSine" }'>
                <span
                    class="fs-16 lh-22 fw-700 mb-10px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">What
                    We Do</span>
                <h2 class="text-dark-gray fw-700 mb-0 ls-minus-1px">Our Services</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 position-relative">
                <div class="outside-box-right-50 md-outside-box-right-70 sm-outside-box-right-0 pb-2 mb-20px"
                    data-anime='{ "translateX": [100, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 250, "easing": "easeOutQuad" }'>
                    <div class="swiper magic-cursor ps-30px pe-30px sm-ps-0 sm-pe-0"
                        data-slider-options='{ "slidesPerView": 1, "spaceBetween": 35, "loop": true, "autoplay": { "delay": 300000, "disableOnInteraction": false },  "pagination": { "el": ".slider-four-slide-pagination-1", "clickable": true, "dynamicBullets": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 2, "spaceBetween": 50 }, "768": { "slidesPerView": 2, "spaceBetween": 40 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper pt-30px pb-30px">
                            <!-- start slider item -->
                            <div class="swiper-slide">
                                <div class="row g-0 services-box-style-02">
                                    <div
                                        class="col-sm-6 services-box bg-white p-10 xxl-p-8 xl-p-6 box-shadow-extra-large">
                                        <div class="services-box-icon">
                                            <i class="line-icon-Truck icon-double-large text-base-color mb-25px"></i>
                                        </div>
                                        <div class="services-box-content">
                                            <a href="#contact"
                                                class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">Road
                                                freight</a>
                                            <p class="mb-15px">Efficient and reliable road transportation services
                                                across Nigeria.</p>
                                            <a href="#contact"
                                                class="btn btn-extra-large thin btn-link text-dark-gray p-0">Learn
                                                more</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 services-box-img xs-h-300px">
                                        <div class="h-100 cover-background"
                                            style="background-image: url(images/road.jpg)"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide">
                                <div class="row g-0 services-box-style-02">
                                    <div
                                        class="col-sm-6 services-box bg-white p-10 xxl-p-8 xl-p-6 box-shadow-extra-large">
                                        <div class="services-box-icon">
                                            <i class="line-icon-Plane-2 icon-double-large text-base-color mb-25px"></i>
                                        </div>
                                        <div class="services-box-content">
                                            <a href="#contact"
                                                class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">Air Freight</a>
                                            <p class="mb-15px">Swift air cargo solutions for time-sensitive shipments.
                                            </p>
                                            <a href="#contact"
                                                class="btn btn-extra-large thin btn-link text-dark-gray p-0">Learn
                                                more</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 services-box-img xs-h-300px">
                                        <div class="h-100 cover-background"
                                            style="background-image: url(images/air.jpg)"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide">
                                <div class="row g-0 services-box-style-02">
                                    <div
                                        class="col-sm-6 services-box bg-white p-10 xxl-p-8 xl-p-6 box-shadow-extra-large">
                                        <div class="services-box-icon">
                                            <i class="line-icon-Scooter icon-double-large text-base-color mb-25px"></i>
                                        </div>
                                        <div class="services-box-content">
                                            <a href="#contact"
                                                class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">Last Mile
                                                Delivery</a>
                                            <p class="mb-15px">Timely and convenient delivery to final destinations.</p>
                                            <a href="#contact"
                                                class="btn btn-extra-large thin btn-link text-dark-gray p-0">Learn
                                                more</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 services-box-img xs-h-300px">
                                        <div class="h-100 cover-background"
                                            style="background-image: url(images/last-mile.jpg)"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide">
                                <div class="row g-0 services-box-style-02">
                                    <div
                                        class="col-sm-6 services-box bg-white p-10 xxl-p-8 xl-p-6 box-shadow-extra-large">
                                        <div class="services-box-icon">
                                            <i class="line-icon-Box-Open icon-double-large text-base-color mb-25px"></i>
                                        </div>
                                        <div class="services-box-content">
                                            <a href="#contact"
                                                class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">Moving</a>
                                            <p class="mb-15px">Make your residential or corporate move as smooth as
                                                possible.</p>
                                            <a href="#contact"
                                                class="btn btn-extra-large thin btn-link text-dark-gray p-0">Learn
                                                more</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 services-box-img xs-h-300px">
                                        <div class="h-100 cover-background"
                                            style="background-image: url(images/local-moving.jpg)"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end slider item -->
                        </div>
                    </div>
                </div>
                <!-- start slider pagination -->
                <div
                    class="swiper-pagination slider-four-slide-pagination-1 swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets mt-5 pt-5">
                </div>
                <!-- end slider pagination -->
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="p-0 bg-base-color">
    <div class="container">
        <div class="row align-items-center justify-content-center g-0">
            <div class="col-auto d-flex align-items-center"
                data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <img src="images/demo-data-analysis-08.png" alt="" / class="xs-w-120px">
                <div class="fs-22 last-paragraph-no-margin fw-500 text-dark-gray pt-15px pb-15px">
                    <p>Let us handle your logistics needs efficiently and professionally. <a href="/contact"
                            class="text-decoration-line-bottom fw-700 text-dark-gray">Get in touch today</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section id="why-us">
    <div class="container">
        <div class="row align-items-center mb-8 sm-mb-50px justify-content-md-center">
            <div class="col-xl-5 col-lg-6 col-md-12 md-mb-50px"
                data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <span
                    class="fs-16 lh-22 fw-700 mb-10px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">Why
                    choose us?</span>
                <h2 class="text-dark-gray fw-700 mb-20px ls-minus-1px">Learn why our clients choose us.</h2>
                <div class="row justify-content-center mb-25px">
                    <div class="col-12">
                        <div class="accordion accordion-style-02" id="accordion-style-02"
                            data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                            <!-- start accordion item -->
                            <div class="accordion-item active-accordion">
                                <div class="accordion-header border-bottom">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01"
                                        aria-expanded="true" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title text-dark-gray sm-pe-0">
                                            <img src="images/demo-logistics-home-icon-01.jpg" class="me-10px" alt="">
                                            <span class="fw-600 fs-20">Comprehensive Cargo Insurance </span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-01" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom sm-pe-0">
                                        <p>"Protecting your goods every step of the way with full coverage."</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02"
                                        aria-expanded="false" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title text-dark-gray sm-pe-0">
                                            <img src="images/demo-logistics-home-icon-02.jpg" class="me-10px" alt="">
                                            <span class="fw-600 fs-20">Real-time Online Tracking System</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-02" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom sm-pe-0">
                                        <p>Monitor your shipments anytime, anywhere with up-to-the-minute updates.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-03"
                                        aria-expanded="false" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title text-dark-gray sm-pe-0">
                                            <img src="images/demo-logistics-home-icon-03.jpg" class="me-10px" alt="">
                                            <span class="fw-600 fs-20">Verified Delivery Confirmation</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-03" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin sm-pe-0">
                                        <p>Ensure secure and accurate deliveries with our trusted confirmation process.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                        </div>
                    </div>
                </div>
                <div>
                    <a href="#testimonials"
                        class="btn btn-large btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow me-15px">
                        <span>
                            <span class="btn-text">Testimonials</span>
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                        </span>
                    </a>
                    <a href="#contact"
                        class="btn btn-large btn-transparent-light-gray btn-hover-animation-switch btn-round-edge sm-mb-15px sm-mt-15px">
                        <span>
                            <span class="btn-text">Get a quote</span>
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 offset-xl-1 position-relative">
                <div class="w-80 ms-auto" data-animation-delay="500" data-shadow-animation="true"
                    data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                    <img src="images/movemax-cta-1.jpg" alt="" class="border-radius-10px w-100">
                </div>
                <div class="w-60 overflow-hidden position-absolute left-15px bottom-20px" data-shadow-animation="true"
                    data-animation-delay="500" data-bottom-top="transform: translateY(-20px)"
                    data-top-bottom="transform: translateY(50px)">
                    <img src="images/movemax-man-1.jpg" alt=""
                        class="border-radius-10px box-shadow-quadruple-large" />
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 justify-content-center counter-style-07"
            data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <!-- start counter item -->
            <div class="col text-center md-mb-50px xs-mb-30px">
                <h2 class="vertical-counter d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-3px position-relative z-index-0"
                    data-to="1225">
                    <span class="text-highlight position-absolute bottom-13px w-100"><span
                            class="bg-base-color h-10px opacity-7"></span></span>
                </h2>
                <h2 class="d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-3px position-relative z-index-0">+</h2>
                <span class="d-block fw-600 text-dark-gray">Clients Served</span>
            </div>
            <!-- end counter item -->
            <!-- start counter item -->
            <div class="col text-center md-mb-50px xs-mb-30px">
                <h2 class="vertical-counter d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-1px position-relative z-index-0"
                    data-to="4500">
                    <span class="text-highlight position-absolute bottom-13px w-100"><span
                            class="bg-base-color h-10px opacity-7"></span></span>
                </h2>
                <h2 class="d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-3px position-relative z-index-0">+</h2>
                <span class="d-block fw-600 text-dark-gray">Deliveries Completed</span>
            </div>
            <!-- end counter item -->
            <!-- start counter item -->
            <div class="col text-center xs-mb-30px">
                <h2 class="vertical-counter d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-1px position-relative z-index-0"
                    data-to="655000">
                    <span class="text-highlight position-absolute bottom-13px w-100"><span
                            class="bg-base-color h-10px opacity-7"></span></span>
                </h2>
                <h2 class="d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-3px position-relative z-index-0">+</h2>
                <span class="d-block fw-600 text-dark-gray">Kilometres Covered</span>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section id="testimonials" class="cover-background"
    style="background-image: url('images/testimonials-section-02.jpg')">
    <div class="opacity-extra-medium bg-dark-gray d-xl-none d-block"></div>
    <div class="container position-relative z-index-1">
        <div class="row">
            <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-10"
                data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <span
                    class="fs-16 lh-22 fw-600 mb-15px d-inline-block text-uppercase text-white border-bottom border-2 border-color-base-color xs-border-bottom-0">Testimonials</span>
                <h2 class="fw-600 text-white">What our clients have to say.</h2>
                <div class="swiper position-relative"
                    data-slider-options='{ "autoHeight": true, "loop": true, "allowTouchMove": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "effect": "fade" }'>
                    <div class="swiper-wrapper mb-40px">
                        <!-- start text slider item -->
                        <div class="swiper-slide review-style-08">
                            <p class="text-white opacity-7 w-80 lg-w-100">Movemax Logistics handled our cargo
                                flawlessly. From pick-up to delivery, their communication was clear, and we could track
                                our cargo every step of the way. Highly recommend their reliable service!.</p>
                            <div class="mt-20px">
                                <img class="w-110px me-15px" src="images/demo-corporate-testimonials-01.png" alt="">
                                <div class="d-inline-block align-middle text-start">
                                    <div class="text-white fs-20">Adeola Onifade</div>
                                    <div class="review-star-icon fs-18">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end text slider item -->
                        <!-- start text slider item -->
                        <div class="swiper-slide review-style-08">
                            <p class="text-white opacity-7 w-80 lg-w-100">We recently moved offices within Lagos, and
                                Movemax made the process seamless. Their team was professional, on time, and took great
                                care of our equipment. Excellent service!</p>
                            <div class="mt-20px">
                                <img class="w-110px me-15px" src="images/demo-corporate-testimonials-02.png" alt="">
                                <div class="d-inline-block align-middle text-start">
                                    <div class="text-white fs-20">Okafor Chinedu</div>
                                    <div class="review-star-icon fs-18">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end text slider item -->
                        <!-- start text slider item -->
                        <div class="swiper-slide review-style-08">
                            <p class="text-white opacity-7 w-80 lg-w-100">I have used Movemax Logistics for multiple
                                local deliveries, and they have never let me down. The real-time tracking and delivery
                                confirmation provide peace of mind. Great experience every time!</p>
                            <div class="mt-20px">
                                <img class="w-110px me-15px" src="images/demo-corporate-testimonials-03.png" alt="">
                                <div class="d-inline-block align-middle text-start">
                                    <div class="text-white fs-20">Olumide Ayodele</div>
                                    <div class="review-star-icon fs-18">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end text slider item -->
                    </div>
                    <div class="d-flex">
                        <!-- start slider navigation -->
                        <div
                            class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 bg-white-transparent-extra-light">
                            <i class="bi bi-arrow-left-short text-white icon-very-medium"></i>
                        </div>
                        <div
                            class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 bg-white-transparent-extra-light">
                            <i class="bi bi-arrow-right-short text-white icon-very-medium"></i>
                        </div>
                        <!-- end slider navigation -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 md-mb-30px p-0">
                <div class="h-100 md-h-400px xs-h-300px cover-background background-position-right"
                    style="background-image: url(images/demo-logistics-home-06.jpg)"></div>
            </div>
            <div class="col-xl-5 col-lg-6 ps-70px lg-ps-15px"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span
                    class="fs-16 lh-22 fw-700 mb-15px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">Areas
                    Covered (more states coming)</span>
                <h2 class="fw-700 text-dark-gray ls-minus-1px mb-20px w-80 xxl-w-100">7 States Across Nigeria.</h2>
                <p class="w-75 xxl-w-100 mb-30px">We provide logistics and freight in 7 states in Nigeria. This is made
                    possible through our partnerships with various Last mile and hauling services nationwide.</p>
                <div>
                    <a href="#contact"
                        class="btn btn-large btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow me-15px">
                        <span>
                            <span class="btn-text">See Shipping Costs</span>
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section id="contact" class="ps-8 pe-8 lg-ps-4 lg-pe-4 md-ps-0 md-pe-0 py-10">
    <div class="container-fluid">
        <div
            class="row g-0 bg-very-light-gray justify-content-center border-radius-10px overflow-hidden flex-lg-row flex-column-reverse">
            <div class="col-lg-8 p-6 lg-p-50px xs-ps-30px xs-pe-30px">
                <span
                    class="fs-16 lh-22 fw-700 mb-15px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">Movemax
                    logistics services</span>
                <h2 class="fw-700 text-dark-gray ls-minus-1px mb-45px">Get a Shipping Estimate!</h2>
                
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert fw-bold">
                    <p class="fw-bold">{{ session('success') }}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <p class="fs-16 lh-24 w-80 xxl-w-100">*Rate shown is an estimate only, and may vary depending on item
                    type, handling requirements, value and other factors. We will contact you to confirm the final cost.
                </p>
                <!-- start shipping rate quote form -->

                <form method="POST" action="{{ route('shipping.estimate') }}" id="shippingForm" class="row contact-form-style-01">
                    @csrf
                    <!-- First Row -->
                    <div class="col-md-6 mb-30px">
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="bi bi-person"></i></span>
                            <input class="input-name box-shadow-double-large form-control required" type="text"
                                name="name" placeholder="Your name" value="{{ old('name') }}" required />
                        </div>
                        <div>
                            @error('name')
                                <span class="text-danger fw-bold p-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-30px">
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>
                            <input class="input-name box-shadow-double-large form-control required" type="text"
                                name="mobile" placeholder="Your mobile" value="{{ old('mobile') }}" required />
                        </div>
                        <div>
                            @error('mobile')
                                <span class="text-danger fw-bold p-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Second Row -->
                    <div class="col-md-6 mb-30px">
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="bi bi-envelope"></i></span>
                            <input class="box-shadow-double-large form-control" type="email" name="email"
                                placeholder="Your email" value="{{ old('email') }}"/>
                        </div>
                        <div>
                            @error('email')
                                <span class="text-danger fw-bold p-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-30px">
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="bi bi-speedometer2"></i></span>
                            <input id="weight" class="box-shadow-double-large form-control required" type="number"
                                name="item_weight" min="1" max="1000" placeholder="Item Weight in kg"
                                value="{{ old('item_weight') }}" required />
                        </div>
                        <div>
                            @error('item_weight')
                                <span class="text-danger fw-bold p-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Third Row -->
                    <div class="col-md-6 mb-30px">
                        <div class="position-relative form-group select mb-20px">
                            <span class="form-icon"><i class="bi bi-flag"></i></span>
                            <select id="pickupCity" class="form-control box-shadow-double-large" name="pickup_location"
                                aria-label="select-city-pickup" required>
                                <option value="">Pickup Location (City)</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Abuja">Abuja</option>
                                <option value="Kano">Kano</option>
                                <option value="Port Harcourt">Port Harcourt</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Ibadan">Ibadan</option>
                                <option value="Benin City">Benin City</option>
                            </select>
                        </div>
                        <div>
                            @error('pickup_location')
                                <span class="text-danger fw-bold p-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-30px">
                        <div class="position-relative form-group select mb-20px">
                            <span class="form-icon"><i class="bi bi-flag"></i></span>
                            <select id="deliveryCity" class="form-control box-shadow-double-large"
                                name="delivery_location" aria-label="select-city-delivery" required>
                                <option value="">Delivery Location</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Abuja">Abuja</option>
                                <option value="Kano">Kano</option>
                                <option value="Port Harcourt">Port Harcourt</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Ibadan">Ibadan</option>
                                <option value="Benin City">Benin City</option>
                            </select>
                        </div>
                        <div>
                            @error('delivery_location')
                                <span class="text-danger fw-bold p-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Fourth Row -->
                    <div class="col-md-6 mb-30px">
                        <div class="position-relative form-group form-textarea">
                            <span class="form-icon"><i class="bi bi-globe2"></i></span>
                            <textarea class="box-shadow-double-large form-control" cols="40" rows="3"
                                name="pickup_address"
                                placeholder="Pickup address" required>{{ old('pickup_address') }}</textarea>
                        </div>
                        <div>
                            @error('pickup_address')
                                <span class="text-danger fw-bold p-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-30px">
                        <div class="position-relative form-group form-textarea">
                            <span class="form-icon"><i class="bi bi-globe"></i></span>
                            <textarea class="box-shadow-double-large form-control" cols="40" rows="3"
                                name="delivery_address"
                                placeholder="Delivery address" required>{{ old('delivery_address') }}</textarea>
                        </div>
                        <div>
                            @error('delivery_address')
                                <span class="text-danger fw-bold p-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Full-Width Row for Description -->
                    <div class="col-md-12 mb-30px">
                        <div class="position-relative form-group form-textarea">
                            <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                            <textarea class="form-control" cols="40" rows="3" name="item_description"
                                placeholder="Describe Item(s) | Notes" required>{{ old('item_description') }}</textarea>
                        </div>
                        <div class="p-2">
                            @error('item_description')
                            <span class="text-danger fw-bold">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Full-Width Row for Delivery Cost -->
                    <div class="col-md-12 mb-30px">
                        <div class="position-relative form-group costs-value">
                            <span class="form-icon" style="color: white;"><i class="bi bi-cash"></i></span>
                            <input id="deliveryCost" class="input-name box-shadow-double-large form-control"
                                style="background: #000; color: #fff!important;" type="text" name="delivery_cost"
                                placeholder="Delivery Cost" value="{{ old('delivery_cost') }}" disabled />
                        </div>
                    </div>

                    <!-- Submit Button Row -->
                    <div class="col-auto text-center text-md-end sm-mt-20px lg-mb-15px">
                        <input type="hidden" name="redirect" value="">
                        <button
                            class="btn btn-base-color btn-switch-text btn-medium left-icon btn-round-edge submit btn-box-shadow"
                            type="submit">
                            <span>
                                <span><i class="feather icon-feather-mail"></i></span>
                                <span class="btn-double-text" data-text="Get a quote">Get a quote</span>
                            </span>
                        </button>
                    </div>

                    <!-- Note -->

                    <div class="col-xl-7 align-self-center last-paragraph-no-margin">
                        <p class="fs-16 lh-24 w-80 xxl-w-100">*Rate shown is an estimate only, and may vary depending on
                            item type, handling requirements, value and other factors. We will contact you to confirm
                            the final cost.</p>
                    </div>

                    <div class="col-12">
                        <div class="form-results mt-20px d-none"></div>
                    </div>
                </form>
                <!-- end shipping rate quote form -->

            </div>
            <div class="col-lg-4 md-h-700px sm-h-500px">
                <div class="cover-background background-position-center-top h-100"
                    style="background-image: url('images/demo-logistics-home-07.jpg');">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-base-color pb-35px pt-35px">
    <div class="container position-relative">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8 col-lg-9 col-md-11 icon-with-text-style-08 md-mb-20px">
                <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                    <div
                        class="feature-box-icon feature-box-icon-rounded w-90px h-90px lg-w-75px lg-h-75px sm-w-65px sm-h-65px rounded-circle bg-white me-20px">
                        <a href="/contact"><img src="images/demo-logistics-home-icon-04.png"
                                class="w-50px h-50px lg-w-35px lg-h-35px" alt=""></a>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <h3 class="d-inline-block fw-700 text-dark-gray mb-5px ls-minus-1px">Speak with our experts
                            today.</h3>
                        <p class="fs-19 text-dark-gray opacity-8 fw-500">Trusted by over 1,200 clients across Nigeria
                            since 2019.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 text-center text-lg-end">
                <a href="/contact" class="d-block"><img src="images/demo-logistics-home-10.jpg" alt=""> </a>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@endsection