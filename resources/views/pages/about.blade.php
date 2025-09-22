@extends('layouts.layoutCommon')
@section('title', 'About Us || zeena || Laravel  Template')


@section('content')

    <x-page-header title="About Us" subtitle="About Us" />


        <!--Page Header End-->

        <!--Brand One Start-->
        <section class="brand-one">
            <div class="brand-one__inner">
                <div class="brand-one__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
            "items": 3,
            "margin": 45,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":false,
            "dots":false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive":{
                "0":{
                    "items":1
                },
                "768":{
                    "items":3
                },
                "992":{
                    "items": 4
                },
                "1200":{
                    "items": 6
                }
            }
        }'>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="{{ asset('assets/images/brand/brand-1-3.png') }}" alt="">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="{{ asset('assets/images/brand/brand-1-4.png') }}" alt="">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="{{ asset('assets/images/brand/brand-1-5.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
            </div>
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
                                <h3 class="feature-one__title"><a href="{{ route('services-details') }}">Manage It Services</a>
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
                                <h3 class="feature-one__title"><a href="{{ route('services-details') }}">Digital Experience</a>
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
                                <h3 class="feature-one__title"><a href="{{ route('services-details') }}">Cyber Security</a></h3>
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
                                <h3 class="feature-one__title"><a href="{{ route('services-details') }}">Deployment Service</a>
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

        <!--Services Four Start-->
        <section class="services-four">
            <div class="services-four__bg"
                style="background-image: url({{ asset('assets/images/backgrounds/services-four-bg.png') }});"></div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-icon">
                            <img src="{{ asset('assets/images/icon/section-title-icon-2.png') }}" alt="">
                        </div>
                        <p class="section-title__tagline">What We Offering</p>
                    </div>
                    <h2 class="section-title__title">We Make Bright Agency</h2>
                </div>
                <div class="row">
                    <!--Services Four Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-four__single">
                            <div class="services-four__shape-1"></div>
                            <div class="services-four__shape-2"></div>
                            <div class="services-four__icon">
                                <span class="icon-web-page"></span>
                            </div>
                            <h3 class="services-four__title"><a href="{{ route('services-details') }}">Speed <br> Optimization</a>
                            </h3>
                            <p class="services-four__text">Lorem ipsum is are many variations of
                                pass of majority.</p>
                            <a href="" class="services-four__arrow">
                                <span class="icon-back"></span>
                            </a>
                        </div>
                    </div>
                    <!--Services Four Single End-->
                    <!--Services Four Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-four__single">
                            <div class="services-four__shape-1"></div>
                            <div class="services-four__shape-2"></div>
                            <div class="services-four__icon">
                                <span class="icon-money"></span>
                            </div>
                            <h3 class="services-four__title"><a href="{{ route('services-details') }}">Digital <br> Marketing</a>
                            </h3>
                            <p class="services-four__text">Lorem ipsum is are many variations of
                                pass of majority.</p>
                            <a href="" class="services-four__arrow">
                                <span class="icon-back"></span>
                            </a>
                        </div>
                    </div>
                    <!--Services Four Single End-->
                    <!--Services Four Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-four__single">
                            <div class="services-four__shape-1"></div>
                            <div class="services-four__shape-2"></div>
                            <div class="services-four__icon">
                                <span class="icon-content-management-1"></span>
                            </div>
                            <h3 class="services-four__title"><a href="{{ route('services-details') }}">Content <br> Management</a>
                            </h3>
                            <p class="services-four__text">Lorem ipsum is are many variations of
                                pass of majority.</p>
                            <a href="" class="services-four__arrow">
                                <span class="icon-back"></span>
                            </a>
                        </div>
                    </div>
                    <!--Services Four Single End-->
                    <!--Services Four Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="services-four__single">
                            <div class="services-four__shape-1"></div>
                            <div class="services-four__shape-2"></div>
                            <div class="services-four__icon">
                                <span class="icon-project-management"></span>
                            </div>
                            <h3 class="services-four__title"><a href="{{ route('services-details') }}">Content <br> Marketing</a>
                            </h3>
                            <p class="services-four__text">Lorem ipsum is are many variations of
                                pass of majority.</p>
                            <a href="" class="services-four__arrow">
                                <span class="icon-back"></span>
                            </a>
                        </div>
                    </div>
                    <!--Services Four Single End-->
                </div>
            </div>
        </section>
        <!--Services Four End-->

        <!--FAQ One Start-->
        <section class="faq-one about-page-faq">
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

        <!--Team One Start-->
        <section class="team-one">
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
                                        <h3 class="team-one__name"><a href="{{ route('team-details') }}">Jecika Brown</a></h3>
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
                                        <h3 class="team-one__name"><a href="{{ route('team-details') }}">Jhon Smith</a></h3>
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
                                        <h3 class="team-one__name"><a href="{{ route('team-details') }}">Alisha Martin</a></h3>
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
                                        <h3 class="team-one__name"><a href="{{ route('team-details') }}">David Kapor</a></h3>
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

        <!--Testimonial Four Start-->
        <section class="testimonial-four">
            <div class="testimonial-four__wrap">
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
                    <div class="testimonial-four__inner">
                        <div class="testimonial-four__carousel owl-carousel owl-theme thm-owl__carousel"
                            data-owl-options='{
                            "loop": true,
                            "autoplay": true,
                            "margin": 180,
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
                                    "items": 2
                                },
                                "1200": {
                                    "items": 2
                                }
                            }
                        }'>
                            <!--Testimonial Four Single Start-->
                            <div class="item">
                                <div class="testimonial-four__single">
                                    <div class="testimonial-four__quote">
                                        <span class="icon-left1"></span>
                                    </div>
                                    <p class="testimonial-four__text">Lorem ipsum is to create a natura consectetur in a
                                        looking block of text that doesn'tdistract from the
                                        layout aying out pages with meaningle aute are
                                        in reprehenderit nulla pariatur.</p>
                                    <div class="testimonial-four__client-box">
                                        <div class="testimonial-four__client-img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-1.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-four__client-info">
                                            <h3 class="testimonial-four__client-name">Lames Jhon </h3>
                                            <p class="testimonial-four__client-sub-title">Web Designer</p>
                                            <div class="testimonial-four__client-ratting">
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
                            <!--Testimonial Four Single End-->
                            <!--Testimonial Four Single Start-->
                            <div class="item">
                                <div class="testimonial-four__single">
                                    <div class="testimonial-four__quote">
                                        <span class="icon-left1"></span>
                                    </div>
                                    <p class="testimonial-four__text">Lorem ipsum is to create a natura consectetur in a
                                        looking block of text that doesn'tdistract from the
                                        layout aying out pages with meaningle aute are
                                        in reprehenderit nulla pariatur.</p>
                                    <div class="testimonial-four__client-box">
                                        <div class="testimonial-four__client-img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-2.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-four__client-info">
                                            <h3 class="testimonial-four__client-name">Jessica Smith</h3>
                                            <p class="testimonial-four__client-sub-title">Web Designer</p>
                                            <div class="testimonial-four__client-ratting">
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
                            <!--Testimonial Four Single End-->
                            <!--Testimonial Four Single Start-->
                            <div class="item">
                                <div class="testimonial-four__single">
                                    <div class="testimonial-four__quote">
                                        <span class="icon-left1"></span>
                                    </div>
                                    <p class="testimonial-four__text">Lorem ipsum is to create a natura consectetur in a
                                        looking block of text that doesn'tdistract from the
                                        layout aying out pages with meaningle aute are
                                        in reprehenderit nulla pariatur.</p>
                                    <div class="testimonial-four__client-box">
                                        <div class="testimonial-four__client-img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-1.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-four__client-info">
                                            <h3 class="testimonial-four__client-name">Lames Jhon </h3>
                                            <p class="testimonial-four__client-sub-title">Web Designer</p>
                                            <div class="testimonial-four__client-ratting">
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
                            <!--Testimonial Four Single End-->
                            <!--Testimonial Four Single Start-->
                            <div class="item">
                                <div class="testimonial-four__single">
                                    <div class="testimonial-four__quote">
                                        <span class="icon-left1"></span>
                                    </div>
                                    <p class="testimonial-four__text">Lorem ipsum is to create a natura consectetur in a
                                        looking block of text that doesn'tdistract from the
                                        layout aying out pages with meaningle aute are
                                        in reprehenderit nulla pariatur.</p>
                                    <div class="testimonial-four__client-box">
                                        <div class="testimonial-four__client-img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-2.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-four__client-info">
                                            <h3 class="testimonial-four__client-name">Jessica Smith</h3>
                                            <p class="testimonial-four__client-sub-title">Web Designer</p>
                                            <div class="testimonial-four__client-ratting">
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
                            <!--Testimonial Four Single End-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Four End-->

        <!--Blog One Start-->
        <section class="blog-one">
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
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Easy Yo Use our Software New
                                        Innovation</a></h3>
                                <p class="blog-one__text">Lorem ipsum is simply is text used by copytyping refreshing.
                                </p>
                                <div class="blog-one__btn">
                                    <a href="{{ route('blog-details') }}">Read more<span class="icon-right-arrow1"></span></a>
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
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Ipsum is simply is text used by
                                        copytyping</a></h3>
                                <p class="blog-one__text">Lorem ipsum is simply is text used by copytyping refreshing.
                                </p>
                                <div class="blog-one__btn">
                                    <a href="{{ route('blog-details') }}">Read more<span class="icon-right-arrow1"></span></a>
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
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Simply is text used by
                                        copytyping refreshing.</a></h3>
                                <p class="blog-one__text">Lorem ipsum is simply is text used by copytyping refreshing.
                                </p>
                                <div class="blog-one__btn">
                                    <a href="{{ route('blog-details') }}">Read more<span class="icon-right-arrow1"></span></a>
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