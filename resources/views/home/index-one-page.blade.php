@extends('layouts.layoutStyleOneOnepage')
@section('title', 'MAXI YAMAHA')


@section('content')
<!-- /.stricky-header -->

        <!-- Main Sllider Start -->
        <section class="main-slider" id="home">
            <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": false, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

                <div class="item main-slider__slide-1">
                    <div class="main-slider__bg" style="background-image: url({{ asset('assets/images/home-page/t-max.jpg') }});">
                    </div>
                    <div class="main-slider__shape-1"></div>
                    <div class="main-slider__shape-2 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-2.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-3 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-3.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="main-slider__content">
                            <p class="main-slider__sub-title">Event</p>
                            <h2 class="main-slider__title">MAXI YAMAHA</h2>
                            <p class="main-slider__text">By Yamaha</p>
                            <div class="main-slider__btn-box">
                                <a href="" class="thm-btn main-slider__btn">Discover More<span class="fa fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item main-slider__slide-2">
                    <div class="main-slider__bg" style="background-image: url({{ asset('assets/images/home-page/x-max.png') }});">
                    </div><!-- /.slider-one__bg -->
                    <div class="main-slider__shape-1"></div>
                    <div class="main-slider__shape-2 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-2.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-3 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-3.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="main-slider__content">
                            <p class="main-slider__sub-title">Modern I Business I Consultan</p>
                            <h2 class="main-slider__title">Digital Solution <br> Business</h2>
                            <p class="main-slider__text">We're Best Consultant Agency In Market</p>
                            <div class="main-slider__btn-box">
                                <a href="" class="thm-btn main-slider__btn">Discover More<span class="fa fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item main-slider__slide-3">
                    <div class="main-slider__bg" style="background-image: url({{ asset('assets/images/home-page/n-max.jpg') }});">
                    </div><!-- /.slider-one__bg -->
                    <div class="main-slider__shape-1"></div>
                    <div class="main-slider__shape-2 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-2.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-3 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-3.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="main-slider__content">
                            <p class="main-slider__sub-title">Modern I Business I Consultan</p>
                            <h2 class="main-slider__title">Digital Solution <br> Business</h2>
                            <p class="main-slider__text">We're Best Consultant Agency In Market</p>
                            <div class="main-slider__btn-box">
                                <a href="" class="thm-btn main-slider__btn">Discover More<span class="fa fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item main-slider__slide-3">
                    <div class="main-slider__bg" style="background-image: url({{ asset('assets/images/home-page/aerox.jpg') }});">
                    </div><!-- /.slider-one__bg -->
                    <div class="main-slider__shape-1"></div>
                    <div class="main-slider__shape-2 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-2.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-3 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-3.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="main-slider__content">
                            <p class="main-slider__sub-title">TESTING</p>
                            <h2 class="main-slider__title">Digital Solution <br> Business</h2>
                            <p class="main-slider__text">We're Best Consultant Agency In Market</p>
                            <div class="main-slider__btn-box">
                                <a href="" class="thm-btn main-slider__btn">Discover More<span class="fa fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Sllider Start -->

        <!--Brand One Start-->
        <section class="brand-one">
        </section>
        <!--Brand One End-->

        <!--Feature One Start-->
        <section class="feature-one">
            <div class="container">
                <div class="row">
                    <!--Feature One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <span class="icon-project-management"></span>
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title"><a href="">Manage It Services</a>
                                </h3>
                                <p class="feature-one__text">Complete account of system, and expound the actual</p>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <span class="icon-supply-chain"></span>
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title"><a href="">Digital Experience</a>
                                </h3>
                                <p class="feature-one__text">Complete account of system, and expound the actual</p>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <span class="icon-cyber-security"></span>
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title"><a href="">Cyber Security</a></h3>
                                <p class="feature-one__text">Complete account of system, and expound the actual</p>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <span class="icon-content-management-1"></span>
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title"><a href="">Deployment Service</a>
                                </h3>
                                <p class="feature-one__text">Complete account of system, and expound the actual</p>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                </div>
            </div>
        </section>
        <!--Feature One End-->

        <!--Benefits One Start-->
        <section class="benefits-one">
            <div class="benefits-one__shape-1">
                <div class="benefits-one__shape-bg" style="background-image: url({{ asset('assets/images/backgrounds/benefits-one-shape-bg.png') }});"></div>
            </div>
            <div class="benefits-one__bg-one" style="background-image: url({{ asset('assets/images/backgrounds/benefits-one-bg-one.jpg') }});"></div>
            <div class="benefits-one__overly"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="benefits-one__left">
                            <div class="benefits-one__img wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <img src="{{ asset('assets/images/resources/benefits-one-img-1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="benefits-one__right">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-icon">
                                        <img src="{{ asset('assets/images/icon/section-title-icon.png') }}" alt="">
                                    </div>
                                    <p class="section-title__tagline">About</p>
                                </div>
                                <h2 class="section-title__title">Discover The World Of
                                    Marketing Agency</h2>
                            </div>
                            <p class="benefits-one__text">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                proide sunt in culpa qui officia deserunt mollit anim id est</p>
                            <div class="benefits-one__points-and-mission">
                                <ul class="benefits-one__points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Consulting Agency</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Financial Advice</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="benefits-one__mission">
                                    <h3 class="benefits-one__mission-title">Our Mission</h3>
                                    <p class="benefits-one__mission-text">Duis aute irure dolor in <br> reprehenderit in
                                        voluptate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Benefits One End-->

        <!--Process One Start-->
        <section class="process-one">
            <div class="process-one__inner">
                <div class="process-one__shape-1 float-bob-y-2">
                    <img src="{{ asset('assets/images/shapes/process-one-shape-1.png') }}" alt="">
                </div>
                <div class="container">
                    <ul class="process-one__process-list list-unstyled">
                        <li class="wow fadeInUp" data-wow-delay="100ms">
                            <div class="process-one__single">
                                <div class="process-one__icon">
                                    <span class="icon-zoom-in"></span>
                                </div>
                                <p class="process-one__text">Research</p>
                                <div class="process-one__count"></div>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="200ms">
                            <div class="process-one__single">
                                <div class="process-one__icon">
                                    <span class="icon-test"></span>
                                </div>
                                <p class="process-one__text">Concept</p>
                                <div class="process-one__count"></div>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="300ms">
                            <div class="process-one__single">
                                <div class="process-one__icon">
                                    <span class="icon-self-development"></span>
                                </div>
                                <p class="process-one__text">Take Video</p>
                                <div class="process-one__count"></div>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="400ms">
                            <div class="process-one__single">
                                <div class="process-one__icon">
                                    <span class="icon-growth"></span>
                                </div>
                                <p class="process-one__text">Register Event</p>
                                <div class="process-one__count"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Process One End-->

        <!--Services One Start-->
        <!-- <section class="services-one" id="services">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-icon">
                            <img src="{{ asset('assets/images/icon/section-title-icon.png') }}" alt="">
                        </div>
                        <p class="section-title__tagline">What We Offering</p>
                    </div>
                    <h2 class="section-title__title">We Make Bright Agency</h2>
                </div>
                <div class="services-one__inner">
                    <ul class="services-one__services-list list-unstyled">
                        <li>
                            <div class="services-one__single">
                                <div class="services-one__icon">
                                    <span class="icon-coding"></span>
                                </div>
                                <h3 class="services-one__title"><a href="">Product
                                        <br> Development</a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="services-one__single">
                                <div class="services-one__icon">
                                    <span class="icon-cloud-database"></span>
                                </div>
                                <h3 class="services-one__title"><a href="">Cloud
                                        <br> Computing</a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="services-one__single">
                                <div class="services-one__icon">
                                    <span class="icon-ux-design"></span>
                                </div>
                                <h3 class="services-one__title"><a href="">UI/UX
                                        <br> Designing</a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="services-one__single">
                                <div class="services-one__icon">
                                    <span class="icon-cyber-security"></span>
                                </div>
                                <h3 class="services-one__title"><a href="">Cyber
                                        <br> Security</a></h3>
                            </div>
                        </li>
                    </ul>
                    <ul class="services-one__services-list list-unstyled">
                        <li>
                            <div class="services-one__single">
                                <div class="services-one__icon">
                                    <span class="icon-event-management"></span>
                                </div>
                                <h3 class="services-one__title"><a href="">Event
                                        <br> Processing</a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="services-one__single">
                                <div class="services-one__icon">
                                    <span class="icon-content-management-1"></span>
                                </div>
                                <h3 class="services-one__title"><a href="">Content
                                        <br> Management</a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="services-one__single">
                                <div class="services-one__icon">
                                    <span class="icon-cyber-security"></span>
                                </div>
                                <h3 class="services-one__title"><a href="">Cyber
                                        <br> Security</a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="services-one__single">
                                <div class="services-one__icon">
                                    <span class="icon-backup"></span>
                                </div>
                                <h3 class="services-one__title"><a href="">Backup
                                        <br> & Recovery</a></h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section> -->
        <!--Services One End-->

        <!--About One Start-->
        <section class="about-one" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__img wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <br><br><br>
                                <img src="{{ asset('assets/images/home-page/logo-maxi.png') }}" alt="">
                                <div class="about-one__img-box">
                                    <div class="about-one__img-2 relative">
                                        <!-- Gambar preview -->
                                         
                                        <img src="{{ asset('assets/images/home-page/maxi_yamaha.jpg') }}" alt="Maxi Yamaha" class="w-full h-auto">
                                        <!-- Tombol play di tengah -->
                                        <div class="about-one__video-link absolute inset-0 flex items-center justify-center">
                                            <a href="https://www.youtube.com/watch?v=o-pP_t6sOZY"
                                            class="video-popup"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            aria-label="Play Instagram Video">
                                                <div class="about-one__video-icon">
                                                    <i class="fa fa-play" aria-hidden="true"></i>
                                                    <span class="ripple"></span>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Shape dekorasi -->
                                        <div class="about-one__shape-1"></div>
                                    </div>
                                </div>

                                <div class="about-one__project-complete">
                                    <div class="about-one__count count-box">
                                        <h3 class="count-text" data-stop="100" data-speed="1500">00</h3>
                                        <span> </span>
                                    </div>
                                    <p class="about-one__count-text">Project
                                        <br> Complete</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-icon">
                                        <img src="{{ asset('assets/images/icon/section-title-icon.png') }}" alt="">
                                    </div>
                                    <p class="section-title__tagline">Event</p>
                                </div>
                                <h2 class="section-title__title">Maxi Yamaha
                            </div>
                            <p class="about-one__text">Maxi Yamaha brings premium design, advanced technology, and powerful performance to every ride. Comfort, style, 
                                and innovation come together in every detail, making your journey truly exceptional.
                            </p>
                            <ul class="about-one__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Take a Look at the Maxi World</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>A Legacy of Excellence</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="about-one__it-solution">
                                <div class="about-one__it-solution-img">
                                    <img src="{{ asset('assets/images/resources/about-one-it-solution-img.jpg') }}" alt="">
                                </div>
                                <div class="about-one__it-solution-content">
                                    <p> IT Solutions Services Company
                                        Funded in <span>1998</span></p>
                                </div>
                            </div>
                            <div class="about-one__btn-and-contact">
                                <div class="about-one__btn-box">
                                    <a href="{{ route('form-data') }}" class="about-one__btn thm-btn">Join Event<span class="fa fa-plus"></span></a>
                                </div>
                                <div class="about-one__contact-box">
                                    <div class="about-one__contact-icon">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                    <div class="about-one__contact">
                                        <span>Call Anytime</span>
                                        <p><a href="tel:9288006780"> 92 ( 8800 ) - 6780</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Portfolio One STart-->
        <section class="portfolio-one">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-icon">
                            <img src="{{ asset('assets/images/icon/section-title-icon.png') }}" alt="">
                        </div>
                        <p class="section-title__tagline">MAXI YAMAHA</p>
                    </div>
                    <h2 class="section-title__title">OUR MAXI YAMAHA TYPE</h2>
                </div>
                <ul class="list-unstyled portfolio-one__list">
                    <li>
                        <div class="portfolio-one__single">
                            <div class="portfolio-one__img" style="background-image:url({{ asset('assets/images/home-page/t-max.jpg') }});">
                                <div class="portfolio-one__title-box">
                                    <h4 class="portfolio-one__title"><a href="">T-MAX</a></h4>
                                    <div class="portfolio-one__arrow">
                                        <a href="{{ asset('assets/images/home-page/t-max.jpg') }}" class="img-popup"><span class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="portfolio-one__single">
                            <div class="portfolio-one__img" style="background-image:url({{ asset('assets/images/home-page/x-max.png') }});">
                                <div class="portfolio-one__title-box">
                                    <h4 class="portfolio-one__title"><a href="">XMAX</a></h4>
                                    <div class="portfolio-one__arrow">
                                        <a href="{{ asset('assets/images/home-page/x-max.png') }}" class="img-popup"><span class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="portfolio-one__single">
                            <div class="portfolio-one__img" style="background-image:url({{ asset('assets/images/home-page/n-max.jpg') }});">
                                <div class="portfolio-one__title-box">
                                    <h4 class="portfolio-one__title"><a href="">NMAX</a></h4>
                                    <div class="portfolio-one__arrow">
                                        <a href="{{ asset('assets/images/home-page/n-max.jpg') }}" class="img-popup"><span class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="portfolio-one__single">
                            <div class="portfolio-one__img" style="background-image:url({{ asset('assets/images/home-page/aerox.jpg') }});">
                                <div class="portfolio-one__title-box">
                                    <h4 class="portfolio-one__title"><a href="">AEROX</a></h4>
                                    <div class="portfolio-one__arrow">
                                        <a href="{{ asset('assets/images/home-page/aerox.jpg') }}" class="img-popup"><span class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="portfolio-one__single">
                            <div class="portfolio-one__img" style="background-image:url({{ asset('assets/images/home-page/lexi.jpg') }});">
                                <div class="portfolio-one__title-box">
                                    <h4 class="portfolio-one__title"><a href="">LEXI</a></h4>
                                    <div class="portfolio-one__arrow">
                                        <a href="{{ asset('assets/images/home-page/lexi.jpg') }}" class="img-popup"><span class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--Portfolio One End-->

        <!--FAQ One Start-->
        <section class="faq-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="faq-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-icon">
                                        <img src="{{ asset('assets/images/icon/section-title-icon.png') }}" alt="">
                                    </div>
                                    <p class="section-title__tagline">Technology Solution</p>
                                </div>
                                <h2 class="section-title__title">Latest Software Solutions
                                    <br> Customer</h2>
                            </div>
                            <p class="faq-one__text">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proide
                                sunt in culpa qui officia deserunt mollit anim id est laborum. perspiciatis unde omnis
                                iste natus error sit voluptatem</p>
                            <div class="faq-one__img-and-system">
                                <div class="faq-one__img">
                                    <img src="{{ asset('assets/images/resources/faq-one-img.jpg') }}" alt="">
                                </div>
                                <div class="faq-one__system">
                                    <h3 class="faq-one__system-title">Optimize It System</h3>
                                    <p class="faq-one__system-text">Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse cillum</p>
                                    <div class="faq-one__system-points">
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>The Perfect Business Solutions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="faq-one__right">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>Completely Iterate Covalent Strategic Theme</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Excepteur sint occaecat cupidatat non proide sunt in culpa qui off
                                                deserunt mollit anim id est laborum. omnis iste natus error sit
                                                voluptate audantium, totam rem aperiam,</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion  active">
                                    <div class="accrodion-title">
                                        <h4>Few Resons Why You Should Choose Us</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Excepteur sint occaecat cupidatat non proide sunt in culpa qui off
                                                deserunt mollit anim id est laborum. omnis iste natus error sit
                                                voluptate audantium, totam rem aperiam,</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>How To Update Application New Features</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Excepteur sint occaecat cupidatat non proide sunt in culpa qui off
                                                deserunt mollit anim id est laborum. omnis iste natus error sit
                                                voluptate audantium, totam rem aperiam,</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>How To Connect With The Support To Improve Experience</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Excepteur sint occaecat cupidatat non proide sunt in culpa qui off
                                                deserunt mollit anim id est laborum. omnis iste natus error sit
                                                voluptate audantium, totam rem aperiam,</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--FAQ One End-->

        <!--CTA One Start-->
        <section class="cta-one">
            <div class="container">
                <div class="cta-one__inner wow fadeInUp" data-wow-delay="300ms">
                    <h3 class="cta-one__title">Have Any Question?</h3>
                    <div class="cta-one__icon">
                        <span class="icon-phone"></span>
                    </div>
                    <div class="cta-one__content">
                        <p class="cta-one__text">Lorem ipsum dolor sit am cons sid</p>
                        <p class="cta-one__number"><a href="tel: 13562220077">  1- (356) 222-0077
                            </a></p>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->

        <!--Counter One Start-->
        <section class="counter-one">
            <div class="counter-one__bg img-bounce" style="background-image: url({{ asset('assets/images/backgrounds/counter-one-bg.png') }});">
            </div>
            <div class="counter-one__bg-two" style="background-image: url({{ asset('assets/images/backgrounds/counter-one-bg-two.jpg') }});"></div>
            <div class="counter-one__bg-three" style="background-image: url({{ asset('assets/images/backgrounds/counter-one-bg-three.jpg') }});"></div>
            <div class="container">
                <div class="counter-one__inner">
                    <ul class="counter-one__count-list list-unstyled">
                        <li class="wow fadeInUp" data-wow-delay="100ms">
                            <div class="counter-one__single">
                                <div class="counter-one__icon">
                                    <span class="icon-award"></span>
                                </div>
                                <p class="counter-one__text">Complete Project</p>
                                <div class="counter-one__count count-box">
                                    <h3 class="count-text" data-stop="5684" data-speed="1500">00</h3>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="200ms">
                            <div class="counter-one__single">
                                <div class="counter-one__icon">
                                    <span class="icon-download"></span>
                                </div>
                                <p class="counter-one__text">Total Download</p>
                                <div class="counter-one__count count-box">
                                    <h3 class="count-text" data-stop="5593" data-speed="1500">00</h3>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="300ms">
                            <div class="counter-one__single">
                                <div class="counter-one__icon">
                                    <span class="icon-feedback"></span>
                                </div>
                                <p class="counter-one__text">Positive Review</p>
                                <div class="counter-one__count count-box">
                                    <h3 class="count-text" data-stop="5487" data-speed="1500">00</h3>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="400ms">
                            <div class="counter-one__single">
                                <div class="counter-one__icon">
                                    <span class="icon-management"></span>
                                </div>
                                <p class="counter-one__text">Team Members</p>
                                <div class="counter-one__count count-box">
                                    <h3 class="count-text" data-stop="2474" data-speed="1500">00</h3>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="500ms">
                            <div class="counter-one__single">
                                <div class="counter-one__icon">
                                    <span class="icon-award"></span>
                                </div>
                                <p class="counter-one__text">Cup Of Coffee</p>
                                <div class="counter-one__count count-box">
                                    <h3 class="count-text" data-stop="6497" data-speed="1500">00</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Counter One End-->

        <!--Pricing One Start-->
        <section class="pricing-one" id="pricing">
            <div class="pricing-one__bg" style="background-image: url({{ asset('assets/images/backgrounds/pricing-one-bg.jpg') }});">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-icon">
                            <img src="{{ asset('assets/images/icon/section-title-icon.png') }}" alt="">
                        </div>
                        <p class="section-title__tagline">Our Pricing</p>
                    </div>
                    <h2 class="section-title__title">Select Your Choice Plan</h2>
                </div>
                <div class="row">
                    <!--Pricing One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="pricing-one__single">
                            <div class="pricing-one__inner">
                                <div class="pricing-one__shape-1">
                                    <img src="{{ asset('assets/images/shapes/pricing-one-shape-1.png') }}" alt="">
                                </div>
                                <div class="pricing-one__shape-2">
                                    <img src="{{ asset('assets/images/shapes/pricing-one-shape-2.png') }}" alt="">
                                </div>
                                <div class="pricing-one__price-box">
                                    <h3 class="pricing-one__title">Enterprise</h3>
                                    <p class="pricing-one__price"><span>$</span>35.00</p>
                                    <span class="pricing-one__sub-title">Per Month</span>
                                </div>
                                <ul class="pricing-one__points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Financial Solutions</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>12 Hours Support</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="pricing-one__btn-box">
                                    <a href="" class="pricing-one__btn">Get Started Now<span class="icon-back"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Pricing One Single End-->
                    <!--Pricing One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="pricing-one__single">
                            <div class="pricing-one__inner">
                                <div class="pricing-one__shape-1">
                                    <img src="{{ asset('assets/images/shapes/pricing-one-shape-1.png') }}" alt="">
                                </div>
                                <div class="pricing-one__shape-2">
                                    <img src="{{ asset('assets/images/shapes/pricing-one-shape-2.png') }}" alt="">
                                </div>
                                <div class="pricing-one__price-box">
                                    <h3 class="pricing-one__title">Regular</h3>
                                    <p class="pricing-one__price"><span>$</span>55.00</p>
                                    <span class="pricing-one__sub-title">Per Month</span>
                                </div>
                                <ul class="pricing-one__points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Financial Solutions</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>12 Hours Support</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="pricing-one__btn-box">
                                    <a href="" class="pricing-one__btn">Get Started Now<span class="icon-back"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Pricing One Single End-->
                    <!--Pricing One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="pricing-one__single">
                            <div class="pricing-one__inner">
                                <div class="pricing-one__shape-1">
                                    <img src="{{ asset('assets/images/shapes/pricing-one-shape-1.png') }}" alt="">
                                </div>
                                <div class="pricing-one__shape-2">
                                    <img src="{{ asset('assets/images/shapes/pricing-one-shape-2.png') }}" alt="">
                                </div>
                                <div class="pricing-one__price-box">
                                    <h3 class="pricing-one__title">Professional</h3>
                                    <p class="pricing-one__price"><span>$</span>85.00</p>
                                    <span class="pricing-one__sub-title">Per Month</span>
                                </div>
                                <ul class="pricing-one__points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Financial Solutions</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>12 Hours Support</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="pricing-one__btn-box">
                                    <a href="" class="pricing-one__btn">Get Started Now<span class="icon-back"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Pricing One Single End-->
                </div>
            </div>
        </section>
        <!--Pricing One End-->

        <!--Team One Start-->
        <section class="team-one" id="team">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-icon">
                            <img src="{{ asset('assets/images/icon/section-title-icon.png') }}" alt="">
                        </div>
                        <p class="section-title__tagline">Meet Our Team</p>
                    </div>
                    <h2 class="section-title__title">Meet Our Expart Mambers</h2>
                </div>
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('assets/images/team/team-1-1.jpg') }}" alt="">
                                    <div class="team-one__name-box">
                                        <h3 class="team-one__name"><a href="">Jecika Brown</a></h3>
                                        <p class="team-one__sub-title">Web Designer</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('assets/images/team/team-1-2.jpg') }}" alt="">
                                    <div class="team-one__name-box">
                                        <h3 class="team-one__name"><a href="">Jhon Smith</a></h3>
                                        <p class="team-one__sub-title">Web Designer</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('assets/images/team/team-1-3.jpg') }}" alt="">
                                    <div class="team-one__name-box">
                                        <h3 class="team-one__name"><a href="">Alisha Martin</a></h3>
                                        <p class="team-one__sub-title">Web Designer</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('assets/images/team/team-1-4.jpg') }}" alt="">
                                    <div class="team-one__name-box">
                                        <h3 class="team-one__name"><a href="">David Kapor</a></h3>
                                        <p class="team-one__sub-title">Web Designer</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                </div>
            </div>
        </section>
        <!--Team One End-->

        <!--Video One Start-->
        <section class="video-one">
            <div class="video-one__bg" style="background-image: url({{ asset('assets/images/backgrounds/video-one-bg.jpg') }});"></div>
            <div class="video-one__bg-2" style="background-image: url({{ asset('assets/images/backgrounds/video-one-bg-2.jpg') }});">
            </div>
            <div class="video-one__bg-3" style="background-image: url({{ asset('assets/images/backgrounds/video-one-bg-3.png') }});">
            </div>
            <div class="video-one__bg-4" style="background-image: url({{ asset('assets/images/backgrounds/video-one-bg-4.png') }});">
            </div>
            <div class="container">
                <div class="video-one__inner">
                    <div class="video-one__video-link">
                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                            <div class="video-one__video-icon">
                                <span class="fa fa-play"></span>
                                <i class="ripple"></i>
                            </div>
                        </a>
                    </div>
                    <h3 class="video-one__title">Watch This Video Presentation
                        <br> Our Work And Etc</h3>
                </div>
            </div>
        </section>
        <!--Video One End-->

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one__wrap">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-title__tagline-box">
                            <div class="section-title__tagline-icon">
                                <img src="{{ asset('assets/images/icon/section-title-icon.png') }}" alt="">
                            </div>
                            <p class="section-title__tagline">Our Testimonial</p>
                        </div>
                        <h2 class="section-title__title">Our Sweet Client Feedback</h2>
                    </div>
                    <div class="testimonial-one__inner">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="testimonial-one__left">
                                    <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                                        "loop": true,
                                        "autoplay": true,
                                        "margin": 30,
                                        "nav": true,
                                        "dots": false,
                                        "smartSpeed": 500,
                                        "autoplayTimeout": 10000,
                                        "navText": ["<span class=\"icon-back1\"></span>","<span class=\"icon-back\"></span>"],
                                        "responsive": {
                                            "0": {
                                                "items": 1
                                            },
                                            "768": {
                                                "items": 1
                                            },
                                            "992": {
                                                "items": 1
                                            },
                                            "1200": {
                                                "items": 1
                                            }
                                        }
                                    }'>
                                        <!--Testimonial One Single Start-->
                                        <div class="item">
                                            <div class="testimonial-one__single">
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-left1"></span>
                                                </div>
                                                <p class="testimonial-one__text">Lorem ipsum is to create a natura
                                                    consectetur in a tip
                                                    looking block of text that doesn'tdistract from the largere
                                                    layout aying out pages with meaningle aute are bigiger
                                                    in reprehenderit nulla pariatur at doesn'tdistra gseoert
                                                    loked tips for at busimsgd juge the ateste workseres.</p>
                                                <div class="testimonial-one__client-box">
                                                    <div class="testimonial-one__client-img">
                                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-1.jpg') }}" alt="">
                                                    </div>
                                                    <div class="testimonial-one__client-info">
                                                        <h3 class="testimonial-one__client-name"><span>J</span>ason
                                                            Smith
                                                        </h3>
                                                        <p class="testimonial-one__client-sub-title">Web Designer</p>
                                                        <div class="testimonial-one__client-ratting">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star-half-alt"></span>
                                                            <span class="fa fa-star-half-alt"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Testimonial One Single End-->
                                        <!--Testimonial One Single Start-->
                                        <div class="item">
                                            <div class="testimonial-one__single">
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-left1"></span>
                                                </div>
                                                <p class="testimonial-one__text">Lorem ipsum is to create a natura
                                                    consectetur in a tip
                                                    looking block of text that doesn'tdistract from the largere
                                                    layout aying out pages with meaningle aute are bigiger
                                                    in reprehenderit nulla pariatur at doesn'tdistra gseoert
                                                    loked tips for at busimsgd juge the ateste workseres.</p>
                                                <div class="testimonial-one__client-box">
                                                    <div class="testimonial-one__client-img">
                                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-2.jpg') }}" alt="">
                                                    </div>
                                                    <div class="testimonial-one__client-info">
                                                        <h3 class="testimonial-one__client-name"><span>A</span>lisha
                                                            Martin
                                                        </h3>
                                                        <p class="testimonial-one__client-sub-title">Web Designer</p>
                                                        <div class="testimonial-one__client-ratting">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star-half-alt"></span>
                                                            <span class="fa fa-star-half-alt"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Testimonial One Single End-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="testimonial-one__right">
                                    <div class="testimonial-one__img">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-one-img-1.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        <!--Blog One Start-->
        <section class="blog-one" id="blog">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-icon">
                            <img src="{{ asset('assets/images/icon/section-title-icon.png') }}" alt="">
                        </div>
                        <p class="section-title__tagline">Our Blog</p>
                    </div>
                    <h2 class="section-title__title">Latest Articles & Blogs</h2>
                </div>
                <div class="row">
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="{{ asset('assets/images/blog/blog-1-1.jpg') }}" alt="">
                                </div>
                                <div class="blog-one__date">
                                    <p>20
                                        <br> May</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <p><span class="fa fa-user"></span>Admin</p>
                                    </li>
                                    <li>
                                        <p><span class="fa fa-comments"></span>02 Comment</p>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="">Easy Yo Use our Software New
                                        Innovation</a></h3>
                                <p class="blog-one__text">Lorem ipsum is simply is text used by copytyping refreshing.
                                </p>
                                <div class="blog-one__btn">
                                    <a href="">Read more<span class="icon-right-arrow1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="{{ asset('assets/images/blog/blog-1-2.jpg') }}" alt="">
                                </div>
                                <div class="blog-one__date">
                                    <p>20
                                        <br> May</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <p><span class="fa fa-user"></span>Admin</p>
                                    </li>
                                    <li>
                                        <p><span class="fa fa-comments"></span>02 Comment</p>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="">Ipsum is simply is text used by
                                        copytyping</a></h3>
                                <p class="blog-one__text">Lorem ipsum is simply is text used by copytyping refreshing.
                                </p>
                                <div class="blog-one__btn">
                                    <a href="">Read more<span class="icon-right-arrow1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="{{ asset('assets/images/blog/blog-1-3.jpg') }}" alt="">
                                </div>
                                <div class="blog-one__date">
                                    <p>20
                                        <br> May</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <p><span class="fa fa-user"></span>Admin</p>
                                    </li>
                                    <li>
                                        <p><span class="fa fa-comments"></span>02 Comment</p>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="">Simply is text used by
                                        copytyping refreshing.</a></h3>
                                <p class="blog-one__text">Lorem ipsum is simply is text used by copytyping refreshing.
                                </p>
                                <div class="blog-one__btn">
                                    <a href="">Read more<span class="icon-right-arrow1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                </div>
            </div>
        </section>
        <!--Blog One End-->

        <!--Newsletter One Start-->
        

    <x-footer.footerStyleOne />
@endsection