@extends('layouts.layoutStyleOneOnepage')
@section('title', 'MAXI YAMAHA')
<link rel="stylesheet" href="assets/fonts/flaticon.css">


@section('content')
<!-- /.stricky-header -->
 <style>

    /* Awards List - jadi 2 kolom */
    .awards-list ul {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    padding: 0;
    margin: 20px 0;
    font-size: 14px;
    line-height: 1.6;
    }

    .awards-list li {
    flex: 0 0 50%; /* 2 kolom */
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    }

    .awards-list li::before {
    content: "•";
    margin-right: 8px;
    color: #ffc107;
    font-weight: bold;
    }

    /* Competition Category */
    .competition-container {
    display: flex;
    align-items: flex-start;
    gap: 40px;
    margin-top: 30px;
    }

    .competition-title h3 {
    font-size: 20px;
    font-weight: bold;
    margin: 0;
    }

    .competition-columns {
    display: flex;
    flex: 1;
    justify-content: space-between;
    gap: 30px;
    }

    .competition-col {
    flex: 1;
    }

    .competition-col h4 {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 10px;
    }

    .competition-col ul {
    list-style: none;
    padding: 0;
    margin: 0;
    }

    .competition-col li {
    margin-bottom: 6px;
    display: flex;
    align-items: center;
    }

    .competition-col li::before {
    content: "•";
    margin-right: 8px;
    color: #ffc107;
    font-weight: bold;
    }

    .section-title__tagline2-box {
        display: flex;
        align-items: center;
        justify-content: center; /* ini biar icon + teks di tengah */
        gap: 10px; /* kasih jarak antara icon dan teks */
    }

    .section-title__tagline2 {
        margin: 0;
        text-align: center;
    }

    #about {
        margin-top: -100px; /* default terlalu besar, bisa diganti */
    }



    .process-one__process-list {
        display: flex;
        justify-content: center; /* semua item rata tengah */
        align-items: stretch;
        gap: 30px; /* jarak antar kotak */
        flex-wrap: wrap; /* biar responsif */
        padding: 0;
        margin: 0 auto;
    }

    .process-one__process-list li {
        list-style: none;
    }

    .process-one__single {
        width: 220px;   /* lebar seragam */
        min-height: 280px; /* tinggi seragam */
        background: #fff;
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        text-align: center;
        padding: 20px;
    }

    .process-one__process-list {
        display: grid;
        grid-template-columns: repeat(4, 1fr); /* 4 kolom sejajar */
        gap: 30px;
        justify-items: center;
    }

    .process-one__single {
        width: 220px;
        min-height: 280px;
        background: #fff;
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        text-align: center;
        padding: 20px;
    }

 </style>

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
        </section><br><br>
        <!--Main Sllider Start -->
        <div class="section-title text-center mt-4">
            <div class="section-title__tagline2-box">
                <div class="section-title__tagline2-icon">
                    <img src="{{ asset('assets/images/icon/section-title-icon.png') }}" alt="">
                </div>
                <p class="section-title__tagline text-center">Competition and Awarding Categories</p>
            </div>
        </div>

        <section class="benefits-one mb-4" id="about">
            
           
            <div class="benefits-one__bg-one" style="background-image: url({{ asset('assets/images/backgrounds/benefits-one-bg-one.jpg') }});"></div>

            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                    <div class="benefits-one__left">
                        <div class="benefits-one__img wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <img src="{{ asset('assets/images/home-page/award.png') }}" alt="">
                        </div>
                        <!-- <div>
                            <h1 class=" nowrap" style="margin-top: 20px;">Competition Category</h1><br>
                        </div>

                        <div>
                            <h4>STREET MAXI</h4>
                            <ul>
                                <li>XMAX</li>
                                <li>NMAX</li>
                                <li>AEROX</li>
                                <li>LEXI</li>
                            </ul>
                        </div>

                        <div>
                            <h4>STREET MAXI</h4>
                            <ul>
                                <li>XMAX</li>
                                <li>NMAX</li>
                                <li>AEROX</li>
                                <li>LEXI</li>
                            </ul>
                        </div> -->

                    </div>
                </div>
                <div class="col-xl-7">  
                    <div class="benefits-one__right">
                        <div class="section-title text-left">
                            <h6 class="section-title__title">Awarding Categories</h6>
                        </div>

                        <!-- Awards List -->
                        <div class="awards-list">
                            <ul>
                                <li>Most Favorite Modification</li>
                                <li>Most Prestigious/Elegant MAXi</li>
                                <li>Most Extraordinary "Hedoon" Style</li>
                                <li>Most Shocking MAXi</li>
                                <li>Best Video Content Creator</li>
                                <li>Best Cinematic Post</li>
                                <li>Best Modification Innovation</li>
                                <li>Best Decal/Sticker</li>
                                <li>Best Thematic Realistic Airbrush Work</li>
                                <li>Best Thematic Graphic Airbrush Work</li>
                                <li>Best Racing Performance Styling</li>
                                <li>Best MAXi Touring Wanderluster</li>
                                <li>The Coolest Thailook</li>
                                <li>The Coolest Vietnam Look</li>
                                <li>Fun & Proper Sunmori Style</li>
                            </ul>
                        </div>

                        <!-- Competition Category -->
                        <div class="competition-container">
                            <!-- Judul kiri -->
                            <div class="competition-title">
                                <h3>Competition Categories</h3>
                            </div>

                            <!-- Kolom kanan -->
                            <div class="competition-columns">
                                <div class="competition-col">
                                    <h4>STREET MAXI</h4>
                                    <ul>
                                        <li>XMAX</li>
                                        <li>NMAX</li>
                                        <li>AEROX</li>
                                        <li>LEXI</li>
                                    </ul>
                                </div>
                                <div class="competition-col">
                                    <h4>SUPER MAXI</h4>
                                    <ul>
                                        <li>XMAX</li>
                                        <li>NMAX</li>
                                        <li>AEROX</li>
                                        <li>LEXI</li>
                                    </ul>
                                </div>
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
                                    <span class="icon-download"></span>
                                </div>
                                <!-- link download rules competition -->
                                <p class="process-one__text">Download Rules Compettion</p>
                                <a href="">click here</a>
                                <div class="process-one__count"></div>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="100ms">
                            <div class="process-one__single">
                                <div class="process-one__icon">
                                    <span class="flaticon-upload"></span>
                                </div>
                                <!-- Posting IG With Twibbon -->
                                <p class="process-one__text">Posting IG With Twibbon</p>
                                <a href="">click here</a>
                                <div class="process-one__count"></div>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="100ms">
                            <div class="process-one__single">
                                <div class="process-one__icon">
                                    <span class="icon-download"></span>
                                </div>
                                <!-- Registration at website -->
                                <p class="process-one__text">Registration at Wesite</p>
                                <a href="">click here</a>
                                <div class="process-one__count"></div>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="100ms">
                            <div class="process-one__single">
                                <div class="process-one__icon">
                                    <span class="icon-download"></span>
                                </div>
                                <!-- Finish -->
                                <p class="process-one__text">Finish</p>
                                <a href="">click here</a>
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
                            <div class="container">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.843336069047!2d106.6342165751506!3d-6.284315061512895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb4030859dfb%3A0xbc8402640a0b831d!2sQBIG%20BSD%20City!5e0!3m2!1sid!2sid!4v1759292923930!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                    Location : QBIG BSD City
                                    <br>
                                    Date : 11 Oktober 2025
                                    <br>
                                    Time : 10.00 AM - 19.00 PM

                                </p>
                                <div class="about-one__btn-and-contact" style="margin-left: 80px;">
                                    <div class="about-one__btn-box">
                                        <a href="{{ route('form-data') }}" class="about-one__btn thm-btn">Join Event<span class="fa fa-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                                <div class="about-one__it-solution-img">
                                    <img src="{{ asset('assets/images/resources/about-one-it-solution-img.jpg') }}" alt="">
                                </div>
                                <div class="about-one__it-solution-content">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Join Event End-->

        <br><br><br>
        <!--Portfolio One STart-->
        <section class="portfolio-one" style="margin-top: -200px;" id="type" >
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-icon">
                            <img src="{{ asset('assets/images/icon/section-title-icon.png') }}" alt="">
                        </div>
                        <p class="section-title__tagline">MAXi YAMAHA</p>
                    </div>
                    <h2 class="section-title__title">CUSTOM MAXi</h2>
                </div>
                <ul class="list-unstyled portfolio-one__list">
                    <li>
                        <div class="portfolio-one__single">
                            <div class="portfolio-one__img" style="background-image:url({{ asset('assets/images/home-page/img2.jpg') }});">
                                <div class="portfolio-one__title-box">
                                    <h4 class="portfolio-one__title"><a href="">XMAX</a></h4>
                                    <div class="portfolio-one__arrow">
                                        <a href="{{ asset('assets/images/home-page/img2.jpg') }}" class="img-popup" width="100%" height="100%"><span class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="portfolio-one__single">
                            <div class="portfolio-one__img" style="background-image:url({{ asset('assets/images/home-page/img3.jpg') }});">
                                <div class="portfolio-one__title-box">
                                    <h4 class="portfolio-one__title"><a href="">NMAX</a></h4>
                                    <div class="portfolio-one__arrow">
                                        <a href="{{ asset('assets/images/home-page/img3.jpg') }}" class="img-popup"><span class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="portfolio-one__single">
                            <div class="portfolio-one__img" style="background-image:url({{ asset('assets/images/home-page/img1.jpg') }});">
                                <div class="portfolio-one__title-box">
                                    <h4 class="portfolio-one__title"><a href="">AEROX</a></h4>
                                    <div class="portfolio-one__arrow">
                                        <a href="{{ asset('assets/images/home-page/img1.jpg') }}" class="img-popup"><span class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    
                    <li>
                        <div class="portfolio-one__single">
                            <div class="portfolio-one__img" style="background-image:url({{ asset('assets/images/home-page/img4.jpg') }});">
                                <div class="portfolio-one__title-box">
                                    <h4 class="portfolio-one__title"><a href="">LEXI</a></h4>
                                    <div class="portfolio-one__arrow">
                                        <a href="{{ asset('assets/images/home-page/img4.jpg') }}" class="img-popup"><span class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--Portfolio One End-->

        <!--Team One End-->
        @include('sweetalert::alert')
    <x-footer.footerStyleOne />
@endsection