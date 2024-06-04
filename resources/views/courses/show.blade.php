<x-app-layout>
    @section('title', $course->title)
    <!-- common banner -->
    <section class="common-banner">
        <div class="common-banner-image" style="background: url(assets/images/banner/common-banner-02.jpg);"></div>

        <div class="common-banner-title">
            <h3>{{ $course->title }}</h3>
            <a href="{{ route('home') }}">Home </a> <span>/</span>
            <a href="{{ route('course.index') }}">Compaigns</a> <span></span>
        </div>
    </section>
    <!-- common banner -->

    <!-- causes single -->
    <section class="causes-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="single-left-container">
                        <div class="causes-single-left-image">
                            <img src="{{ asset('storage/' . $course->thumbnail) ?? asset('assets/images/gallery/causes-single.jpg') }}"
                                alt="image">
                        </div>
                        <div class="causes-single-content">
                            <div class="common-title">
                                <h3>{{ $course->title }}</h3>
                            </div>
                            <div id="skills-section">
                                <div class="progress">
                                    <div class="progress-bar"
                                        data-progress="{{ number_format(($course->raised / $course->total) * 100, 0) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="causes-single-raised">
                                <h3>${{ number_format($course->raised) }}</h3>
                                <p><span>of ${{ number_format($course->total) }}</span> raised</p>
                            </div>

                            {!! $course->about !!}

                            <div class="causes-details-tab">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tab-pane1" aria-labelledby="tab1"
                                        tabindex="0">10.00</div>
                                    <div class="tab-pane fade" id="tab-pane2" aria-labelledby="tab2" tabindex="0">
                                        20.00</div>
                                    <div class="tab-pane fade" id="tab-pane3" aria-labelledby="tab3" tabindex="0">
                                        30.00</div>
                                    <div class="tab-pane fade" id="tab-pane4" aria-labelledby="tab4" tabindex="0">
                                        40.00</div>
                                    <div class="tab-pane fade" id="tab-pane5" aria-labelledby="tab5" tabindex="0">
                                        50.00</div>
                                    <div class="tab-pane fade" id="tab-pane6" aria-labelledby="tab6" tabindex="0">
                                        60.00</div>
                                    <div class="tab-pane fade" id="tab-pane7" aria-labelledby="tab7" tabindex="0">
                                        70.00</div>
                                    <div class="tab-pane fade" id="tab-pane8" aria-labelledby="tab8" tabindex="0">...
                                    </div>
                                </div>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="tab1" data-bs-toggle="tab"
                                            data-bs-target="#tab-pane1" type="button" role="tab"
                                            aria-controls="tab-pane1" aria-selected="true">10$</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="tab2" data-bs-toggle="tab"
                                            data-bs-target="#tab-pane2" type="button" role="tab"
                                            aria-controls="tab-pane2" aria-selected="false">20$</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="tab3" data-bs-toggle="tab"
                                            data-bs-target="#tab-pane3" type="button" role="tab"
                                            aria-controls="tab-pane3" aria-selected="false">30$</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="tab4" data-bs-toggle="tab"
                                            data-bs-target="#tab-pane4" type="button" role="tab"
                                            aria-controls="tab-pane4" aria-selected="false">40$</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="tab5" data-bs-toggle="tab"
                                            data-bs-target="#tab-pane5" type="button" role="tab"
                                            aria-controls="tab-pane5" aria-selected="false">50$</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="tab6" data-bs-toggle="tab"
                                            data-bs-target="#tab-pane6" type="button" role="tab"
                                            aria-controls="tab-pane6" aria-selected="false">60$</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="tab7" data-bs-toggle="tab"
                                            data-bs-target="#tab-pane7" type="button" role="tab"
                                            aria-controls="tab-pane7" aria-selected="false">70$</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="tab8" data-bs-toggle="tab"
                                            data-bs-target="#tab-pane8" type="button" role="tab"
                                            aria-controls="tab-pane8" aria-selected="false">Custom</button>
                                    </li>
                                </ul>
                            </div>

                            <div class="causes-details-media">
                                <a href="{{ $course->donate_link }}" class="btn-1 btn-2"> Donate Now<span></span></a>
                                <div class="footer3">
                                    <div class="footer_widget">
                                        <div class="widget_media">
                                            <ul class="social-links">
                                                <li><span>Share Casuse</span></li>
                                                <li><a href="#0"> <i
                                                            class="flaticon-facebook-app-symbol"></i></a></li>
                                                <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                                <li><a href="#0"><i class="flaticon-twitter"></i></a></li>
                                                <li><a href="#0"><i class="fa-brands fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <x-PostSideBar />
            </div>
        </div>
    </section>
    <!-- causes single -->
</x-app-layout>
