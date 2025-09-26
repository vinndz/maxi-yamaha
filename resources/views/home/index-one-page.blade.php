@extends('layouts.layoutStyleOneOnepage')
@section('title', 'MAXI YAMAHA')


@section('content')
<!-- /.stricky-header -->

        <!-- Main Sllider Start -->
        <section class="main-slider" id="home">
            <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": false, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

                <div class="item main-slider__slide-1">
                    <div class="main-slider__bg" style="background-image: url({{ asset('assets/images/home-page/background1.png') }}); width: 1894px; height:980px;">
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
                                <a href="{{ route('form-data') }}" class="about-one__btn thm-btn" style="background-color:#cdcb00;">Join Event<span class="fa fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Main Sllider Start -->

        <!--Benefits One Start-->
        <section class="benefits-one" id="about">
            <div class="benefits-one__shape-1">
                <div class="benefits-one__shape-bg" style="background-image: url({{ asset('assets/images/backgrounds/benefits-one-shape-bg.png') }});"></div>
            </div>
            <div class="benefits-one__bg-one" style="background-image: url({{ asset('assets/images/backgrounds/benefits-one-bg-one.jpg') }});"></div>
            <div class="benefits-one__overly"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="benefits-one__left">
                            <!-- <h1>MAXI YAMAHA</h1>
                            <p>TEST</p> -->
                            <div class="benefits-one__img wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <img src="{{ asset('assets/images/home-page/award.png') }}" alt="">
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
                                    <p class="section-title__tagline">Competition and Awarding Catgories</p>
                                </div>
                                <h2 class="section-title__title">MAXI YAMAHA</h2>
                            </div>
                            <div class="benefits-one__points-and-mission">
                                <ul class="benefits-one__points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Most Favorite Modification</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Most Prestigious/Elegant MAXi</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Most Extraordinary "Hedoon" Style</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Most Shocking MAXi</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Best Video Content Creator</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Best Cinematic Post</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Best Modication Innovation</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Best Decal/Sticker</p>
                                        </div>
                                    </li>
                                </ul>
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
                                <!-- link download rules competition -->
                                <p class="process-one__text">Download Rules Compettion</p>
                                <a href="">click here</a>
                                <div class="process-one__count"></div>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="200ms">
                            <div class="process-one__single">
                                <div class="process-one__icon">
                                    <span class="icon-test"></span>
                                </div>
                                <p class="process-one__text">Posting IG With Twibbon</p>
                                <a href="">click here</a>
                                <div class="process-one__count"></div>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="300ms">
                            <div class="process-one__single">
                                <div class="process-one__icon">
                                    <span class="icon-self-development"></span>
                                </div>
                                <p class="process-one__text">Registration at Wesite</p>
                                <div class="process-one__count"></div>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="400ms">
                            <div class="process-one__single">
                                <div class="process-one__icon">
                                    <span class="icon-growth"></span>
                                </div>
                                <p class="process-one__text">Finish</p>
                                <div class="process-one__count"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Process One End-->

        <br><br>
        <!--Join Event Start-->
        <section class="about-one" id="join-event">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <!-- <div class="about-one__img wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <br><br><br>
                                <img src="{{ asset('assets/images/home-page/logo-maxi.png') }}" alt="">
                                <div class="about-one__img-box">
                                    <div class="about-one__img-2 relative">
                                         
                                        <img src="{{ asset('assets/images/home-page/maxi_yamaha.jpg') }}" alt="Maxi Yamaha" class="w-full h-auto">
                                
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
                            </div> -->

                            <div class="container">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8943174593132!2d106.71673227499086!3d-6.277623193711227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb2b2ccb23a5%3A0x926ebc155da9bfdc!2sTranspark%20Mall%20Bintaro!5e0!3m2!1sid!2sid!4v1758524446983!5m2!1sid!2sid"
                                        class="google-map__one" allowfullscreen style="width: 500px; height: 500px;">
                                    </iframe>
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
                                    <p class="section-title__tagline">Event and Location</p>
                                </div>
                                <h2 class="section-title__title">Maxi Yamaha
                            </div>
                            <p class="benefits-one__text">
                                MAXI Yamaha adalah event yang diadakan oleh Yamaha Motor Indonesia untuk memperkenalkan Yamaha Motor Indonesia kepada masyarakat luas. MAXI Yamaha akan diadakan di Transpark Mall Bintaro, Jakarta dan akan berlangsung pada tanggal 11 Oktober 2025.

                            </p>
                            <ul class="about-one__points list-unstyled">
                                <li>
                                    <div class="icon">
                                    </div>
                                    <div class="text">
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        
                                    </div>
                                    <div class="text">
                                    </div>
                                </li>
                            </ul>
                            <div class="about-one__it-solution">
                                <p class="about-one__text">
                                    Location : Transpark Mall Bintaro
                                    <br>
                                    Date : 11 Oktober 2025
                                    <br>
                                    Time : 10.00 AM - 19.00 PM

                                </p>
                                <div class="about-one__btn-and-contact" style="margin-left: 80px;">
                                    <!-- <div class="about-one__btn-box">
                                        <a href="{{ route('form-data') }}" class="about-one__btn thm-btn">Join Event<span class="fa fa-plus"></span></a>
                                    </div> -->
                            </div>
                                <div class="about-one__it-solution-img">
                                    <img src="{{ asset('assets/images/resources/about-one-it-solution-img.jpg') }}" alt="">
                                </div>
                                <div class="about-one__it-solution-content">
                                </div>
                            </div>
                            <!-- <div class="about-one__btn-and-contact">
                                <div class="about-one__btn-box">
                                    <a href="{{ route('form-data') }}" class="about-one__btn thm-btn">Join Event<span class="fa fa-plus"></span></a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Join Event End-->

        <br><br><br>
        <!--Portfolio One STart-->
        <section class="portfolio-one" id="type">
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

        <!--Team One Start-->
        <!-- <section class="team-one" id="last-event" style="margin-bottom:10px;">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-icon">
                            <img src="{{ asset('assets/images/icon/section-title-icon.png') }}" alt="">
                        </div>
                        <p class="section-title__tagline">Last Event</p>
                    </div>
                    <h2 class="section-title__title">Last Event Maxi Yamaha</h2>
                </div>
                <div class="row">
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
                </div>
            </div>
        </section> -->
        <!--Team One End-->
        @include('sweetalert::alert')
    <x-footer.footerStyleOne />
@endsection