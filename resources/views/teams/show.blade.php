<x-app-layout>

	<!-- common banner -->
        <section class="common-banner">
            <div class="common-banner-image" style="background: url(assets/images/banner/common-banner-03.png);"></div>

            <div class="common-banner-title">
                <h3>{{ $volunteer->user->name }}</h3>
                <a href="index-2.html">Home </a> <span>/</span>
                <a href="#0">{{ $volunteer->user->name }}</a>
            </div>
        </section>
        <!-- common banner -->

        <!-- volunteer single -->
        <section class="volunteer-single mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="volunteer-single-image">
                            <img src="{{ $volunteer->profile ?? asset('assets/images/team/team-07.jpg') }}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="volunteer-single-right-content">
                            <div class="volunteer-single-right-content-title">
                                <h5>{{ $volunteer->user->name }}</h5>
                                <p>{{ $volunteer->expertise }}</p>
                            </div>
                            <div class="volunteer-single-right-content-title">
                                <h6>About Me</h6>

                                {!! $volunteer->about !!}
                            </div>
                            <div class="volunteer-single-right-content-title">
                                <h6>Follow & Contact</h6>
                                <div class="footer3">
                                    <div class="footer_widget">
                                        <div class="widget_media">
                                            <ul class="social-links">
                                                <li><a href="{{ $volunteer->fb_link }}"> <i class="flaticon-facebook-app-symbol"></i></a></li>
                                                <li><a href="{{ $volunteer->twitter_link }}"><i class="flaticon-twitter"></i></a></li>
                                                <li><a href="{{ $volunteer->whatsapp_no }}"><i class="fa-brands fa-whatsapp"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- volunteer single -->

</x-app-layout>