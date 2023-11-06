<footer class="main__footer p_relative">
    <div class="f-love1">
        <img src="assets/images/shape/f-love-01.png" alt="Love">
    </div>
    <div class="f-love2">
        <img src="assets/images/shape/f-love-02.png" alt="Love">
    </div>
    <div class="f-love3">
        <img src="assets/images/shape/f-love-03.png" alt="Love">
    </div>
    <div class="main__footer__top" style="background-image: url(assets/images/background/footer-bg.jpg);">
        <div class="footer__middle  p_relative d_block">
            <div class="auto_container">
                <div class="footer__middle__content">
                    <div class="row clearfix mb-40">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer_column">
                            <div class="footer_widget logo_widget">
                                <div class="footer__logo mb_25">
                                    <figure>
                                        <img src="{{ getLogoUrl() ?? asset('assets/images/footer-logo.png') }}" alt="">
                                    </figure>
                                </div>
                                <p>Pricom makes it easy to order super soft, stylish custom printed everything that get your message into the world to very ditermind the time.</p>
                                <ul class="social-links mt-40">
                                    <li><a href="#0"> <i class="flaticon-facebook-app-symbol"></i></a></li>
                                    <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#0"><i class="flaticon-twitter"></i></a></li>
                                    <li><a href="#0"><i class="fa-brands fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer_column">
                            <div class="footer_widget about_widget ml_95">
                                <div class="widget_title">
                                    <h4>About Donatee</h4>
                                </div>
                                <ul class="links_list">
                                    <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                                    <li><a href="#">Start a Return</a></li>
                                    <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
                                    <li><a href="#">Shipping FAQ</a></li>
                                    <li><a href="#">Careers</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer_column">
                            <div class="footer_widget resources_widget ml_25">
                                <div class="widget_title">
                                    <h4>Resources</h4>
                                </div>
                                <ul class="links_list">
                                    <li><a href="contact.html">Help Center</a></li>
                                    <li><a href="causes-details.html">Delivery</a></li>
                                    <li><a href="volunteer.html">Return Policy</a></li>
                                    <li><a href="#">Policies</a></li>
                                    <li><a href="#">Gift Cards</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer_column">
                            <div class="footer_widget contact_widget ml_25">
                                <div class="widget_title">
                                    <h4>Contact Us</h4>
                                </div>
                                <ul class="contact_list">
                                    <li><a href="tel:{{ appPhone() }}"><i class="flaticon-phone-call"></i> <span>{{ appPhone() }}</span></a></li>
                                    <li><a href="mailto:{{ getEmail() }}"><i class="flaticon-email"></i> <span>{{ getEmail() }}</span></a></li>
                                    <li><a href="contact.html"><i class="flaticon-pin"></i> <span>{{ getAddress() }}</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-container">
                            <div class="copyright-left">
                                <div class="copyright-reserved">
                                    <p>Copyright - All Rights Reserved.</p>
                                </div>
                                <div class="copyright-terms">
                                    <a href="#0">Terms </a>
                                    <a href="#0">Privacy</a>
                                </div>
                            </div>
                            <div class="copyright-right">
                                <p> Made with ❤️ By <a href="https://codprez.com" target="_blank">Codprez</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>