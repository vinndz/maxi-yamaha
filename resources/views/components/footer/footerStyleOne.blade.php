<!--Newsletter One Start-->
<section class="newsletter-one">
    <div class="container">
        <div class="newsletter-one__inner">
            <div class="newsletter-one__bg float-bob-y"
                style="background-image: url({{ asset('assets/images/backgrounds/newsletter-one-bg.jpg') }});"></div>
            <h3 class="newsletter-one__title">Newsletter</h3>
            <p class="newsletter-one__sub-title">Stay updated</p>
            <form action="assets/inc/sendemail.php" class="contact-form-validated" novalidate="novalidate">
                <div class="newsletter-one__form">
                    <input type="email" name="email" placeholder="Email address">
                    <button type="submit" class="newsletter-one__btn">
                        <span>
                            Subscribe
                            <i class="icon-arrow"></i>
                        </span>
                    </button>
                </div>
                <div class="result mt-2"></div>
            </form>
        </div>
    </div>
</section>
<!--Newsletter One End-->


<!--Site Footer Start-->
<footer class="site-footer">
    <div class="site-footer__bg-2"
        style="background-image: url({{ asset('assets/images/backgrounds/site-footer-bg-2.jpg') }});"></div>
    <div class="site-footer__bg-3 float-bob-y"
        style="background-image: url({{ asset('assets/images/backgrounds/site-footer-bg-3.png') }});"></div>
    <div class="site-footer__bg"
        style="background-image: url({{ asset('assets/images/backgrounds/site-footer-bg.jpg') }});">
    </div>
    <div class="site-footer__top">
        <div class="container">
            <div class="row">

                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="footer-widget__column footer-widget__contact">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">Contact</h3>
                        </div>
                        <ul class="footer-widget__contact-list list-unstyled">
                            <li>
                                <p>45 Broklyn Street, 78 New York</p>
                            </li>
                            <li><a href="mailto:zeena@gmail.com">zeena@gmail.com</a></li>
                            <li><a href="tel:7778880000">777 888 0000</a></li>
                        </ul>
                        <div class="footer-widget__social">
                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                            <a href="#"><span class="fab fa-twitter"></span></a>
                            <a href="#"><span class="fab fa-linkedin-in"></span></a>
                            <a href="#"><span class="fab fa-youtube"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="site-footer__bottom-inner">
                <p class="site-footer__bottom-text">Copyright © 2025 All Rights Reserved.</p>
                <ul class="list-unstyled site-footer__bottom-links">
                    <li>
                        <a href="">Terms & Condition</a>
                    </li>
                    <li>
                        <a href="">Privacy</a>
                    </li>
                    <li>
                        <a href="">Support</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->


</div><!-- /.page-wrapper -->
