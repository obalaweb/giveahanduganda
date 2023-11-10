<x-app-layout>
	<!-- common banner -->
    <section class="common-banner">
        <div class="common-banner-image" style="background: url(assets/images/banner/common-banner-01.jpg);"></div>

        <div class="common-banner-title blog-single-banner-title">
            <h3>Contact Us</h3>
            <a href="{{ route('home') }}">Home </a> <span>/</span>
            <a href="#0">Contact</a>
        </div>
    </section>
    <!-- common banner -->

    <!-- contact -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="common-title">
                        <h3>Contact With Us</h3>
                        <p>Give us a call or drop by anytime, we answer all enquiries within 24 hours.</p>
                    </div>
                    <div class="contact-page-form">
                        <div class="bs-form-top">
                            <input type="text" class="v-form bs-form bs-form-top" name="name" placeholder="Your Name">
                            <input type="email" class="v-form bs-form" name="email" placeholder="Email Adress">
                        </div>
                        <input type="text" class="v-form" name="address" placeholder="Your Address">
                        <textarea name="massege" class="v-form" placeholder="Message"></textarea>
                        <button type="submit" class="submit-btn">Send Message</button>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-right-container">
                        <div class="contact-right-container-inner">
                            <div class="contact-info">
                                <div class="contact-icon">
                                    <i class="icon-location"></i>
                                </div>
                                <div class="contact-address">
                                    <h6>Address</h6>
                                    <p>{{ getAddress() }}</p>
                                </div>
                            </div>

                            <div class="contact-info">
                                <div class="contact-icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="contact-address">
                                    <h6>Email Us</h6>
                                    <a href="mailto:{{ getEmail() }}">{{ getEmail() }}</a>
                                    <a href="mailto:info@codprez.com">info@codprez.com</a>
                                </div>
                            </div>

                            <div class="contact-info">
                                <div class="contact-icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="contact-address">
                                    <h6>Call Now</h6>
                                    <a href="tel:1800123456789">{{ appPhone() }}</a>
                                    <a href="tel:1800123789456">+256 77203 2435</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- contact -->

   <!-- contact map -->
   <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.0468741669197!2d-73.96154552352756!3d40.78298363326635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258a29a5e9e99%3A0x4a01c8df6fb3cb8!2sSolomon%20R.%20Guggenheim%20Museum!5e0!3m2!1sen!2sbd!4v1683783036617!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>
   <!-- contact map -->

</x-app-layout>