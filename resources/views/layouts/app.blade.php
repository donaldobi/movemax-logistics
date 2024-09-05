<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>@yield('title', 'Movemax | Freight, Moving and Local Logistics Services, Lagos - Nigeria')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="Delivering Excellence, Every Time.">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/responsive.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/logistics.css') }}"/>
</head>
<body data-mobile-nav-style="classic">
    <!-- start header -->
    <header class="header-with-topbar">
        <div class="header-top-bar top-bar-dark bg-dark">
            <div class="container-fluid">
                <div class="row h-45px align-items-center m-0">
                    <div class="col-12 col-lg-7 fw-500 justify-content-lg-start justify-content-center">
                        <span class="me-25px fs-15 md-m-0">
                            <i class="feather icon-feather-phone-call text-base-color me-10px"></i><span class="text-light-gray">Phone: +234 805 906 5288</span>
                        </span>
                        <span class="d-xl-inline-block d-none fs-15"><i class="feather icon-feather-mail text-base-color me-10px"></i><a href="mailto:info@movemax.com.ng" class="widget text-light-gray text-white-hover"><span class="__cf_email__"> info@movemax.com.ng </span></a></span>
                    </div>
                    <div class="col-md-5 text-end d-none d-lg-flex fs-15">
                    </div>
                </div>
            </div>
        </div>
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg header-light bg-white header-reverse" data-header-hover="light">
            <div class="container-fluid"> 
                <div class="col-auto">
                    <a class="navbar-brand" href="/">
                    <img src="{{ asset('images/movemax-blackk.png') }}" data-at2x="{{ asset('images/movemax-blackk@2x.png') }}" alt="" class="default-logo">
                    <img src="{{ asset('images/movemax-blackk.png') }}" data-at2x="{{ asset('images/movemax-blackk@2x.png') }}" alt="" class="alt-logo">
                    <img src="{{ asset('images/movemax-blackk.png') }}" data-at2x="{{ asset('images/movemax-blackk@2x.png') }}" alt="" class="mobile-logo">
                    </a>
                </div>
                <div class="col-auto menu-order left-nav">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="{{ route('about-us') }}" class="nav-link section-link">About us</a></li>
                            <!-- <li class="nav-item"><a href="#about-us" class="nav-link">About us</a></li> -->
                            <li class="nav-item dropdown dropdown-with-icon-style02"><a href="#our-services" class="nav-link">Our services</a>
                            <!-- <li class="nav-item dropdown dropdown-with-icon-style02"><a href="{{ route('our-services') }}" class="nav-link section-link">Our services</a> -->
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                    <li><a href="{{ route('our-services') }}" class="section-link" ><i class="line-icon-Road-3 align-middle text-base-color"></i>Road freight</a></li>
                                    <li><a href="{{ route('our-services') }}" class="section-link" ><i class="line-icon-Plane-2 align-middle text-base-color"></i>Air freight</a></li>
                                    <li><a href="{{ route('our-services') }}" class="section-link" ><i class="line-icon-Home align-middle text-base-color"></i>Warehousing</a></li>
                                    <li><a href="{{ route('our-services') }}" class="section-link" ><i class="line-icon-Car align-middle text-base-color"></i>Local Moving</a></li>
                                </ul> -->
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                    <li><a href="#our-services"><i class="line-icon-Road-3 align-middle text-base-color"></i>Road freight</a></li>
                                    <li><a href="#our-services"><i class="line-icon-Plane-2 align-middle text-base-color"></i>Air freight</a></li>
                                    <li><a href="#our-services"><i class="line-icon-Scooter align-middle text-base-color"></i>Last Mile Delivery</a></li>
                                    <li><a href="#our-services"><i class="line-icon-Truck align-middle text-base-color"></i>Local Moving</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="/contact" class="nav-link">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto ms-auto ps-lg-0 d-none d-sm-flex"> 
                    <div class="header-icon">
                        <div class="d-none d-xl-inline-block"><div class="fw-600"><a href="tel:+2348059065288" class="widget-text"><i class="feather icon-feather-phone-call me-10px"></i>+234 805 906 5288</a></div></div>
                        <div class="header-button ms-25px">
                            <a href="#contact" class="btn btn-small btn-base-color btn-hover-animation-switch btn-round-edge btn-box-shadow fw-700 ls-0px btn-icon-left">
                                <span> 
                                    <span class="btn-text">Get a quote</span>
                                    <span class="btn-icon"><i class="feather icon-feather-mail"></i></span>
                                    <span class="btn-icon"><i class="feather icon-feather-mail"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header -->


    <!-- Main content -->
    <main>
        @yield('content')
    </main>


    <!-- start footer --> 
    <footer class="fs-17 footer-dark p-0 bg-dark-gray"> 
        <div class="container"> 
            <div class="row justify-content-center pt-6 sm-pt-40px text-sm-start text-center">
                <!-- start footer column -->
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 md-mb-30px">
                    <a href="/" class="footer-logo mb-20px d-inline-block"> 
                        <img src="images/movemax-white.png" data-at2x="images/movemax-white.png" alt="">
                    </a>
                    <p class="fs-17 mx-auto xs-w-90">Movemax Logistics Nigeria Limited. We Provide Reliable Logistics Services for Every Move.</p>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-lg-2 col-md-3 col-sm-5 offset-xl-1 offset-md-0 offset-sm-1 md-mb-30px">
                    <span class="fs-18 d-block text-white fw-500 mb-10px">Navigation</span>
                    <ul>
                        <li><a href="{{ route('about-us') }}" class="section-link">About Us</a></li>
                        <li><a href="{{ route('our-services') }}" class="section-link">Services</a></li>
                        <li><a href="{{ route('why-us') }}" class="section-link">Why Choose Us</a></li>
                        <!-- <li><a href="#about-us">About Us</a></li>
                        <li><a href="#our-services">Services</a></li>
                        <li><a href="#why-us">Why Choose Us</a></li> -->
                        <li><a href="/contact">Contact Us</a></li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-lg-3 col-md-4 col-sm-5 offset-md-0 offset-sm-1 order-5 order-md-3 xs-mb-30px">
                    <span class="fs-18 d-block text-white fw-500 mb-10px">Need help?</span>
                    <span class="d-block">Speak with us.</span>
                    <a href="tel:+234 805 906 5288" class="mb-15px d-inline-block">+234 805 906 5288</a>
                    <span class="d-block">Need delivery support?</span>
                    <a href="mailto:info@movemax.com.ng" class="d-sm-inline-block d-block"><span class="__cf_email__">info@movemax.com.ng</span></a>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-lg-3 col-md-10 col-sm-6 text-md-center text-lg-start order-last order-sm-4">
                    <span class="fs-18 d-block text-white fw-500 mb-10px">Our Location</span>
                    <div class="d-flex align-items-center justify-content-lg-start justify-content-md-center justify-content-sm-start justify-content-center">
                        <i class="line-icon-Location align-middle icon-medium me-10px"></i>
                        <span class="fs-16">80 Adeniran Ogunsanya St, Surulere, Lagos, Nigeria.</span>
                    </div>
                </div>
                <!-- end footer column -->
            </div> 
            <div class="row justify-content-center align-items-center pt-5 md-pt-30px">
                <div class="col-12">
                    <div class="divider-style-03 divider-style-03-01 border-color-transparent-white-light"></div>
                </div>
                <div class="col-lg-9 pt-25px pb-25px fs-15 last-paragraph-no-margin text-center order-2 order-sm-1"><p>2023 All rights reserved | Movemax Logistics Nigeria Limited.  | Design &amp; Development by <a href="https://donaldobi.com" class="text-decoration-line-bottom"> Donald O.</a></p></div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->

    <!-- javascript libraries -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/shipping.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/smooth-scroll.js') }}" defer></script>
    @stack('scripts')

</body>
</html>
