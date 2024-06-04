<x-app-layout :title="$title">
    <!-- common banner -->
    <section class="common-banner">
        <div class="common-banner-image" style="background: url(assets/images/banner/common-banner-01.jpg);"></div>

        <div class="common-banner-title">
            <h3>{{ $pageSetting->common_title }}</h3>
            <p>{{ $pageSetting->common_description }}</p>
        </div>
    </section>
    <!-- common banner -->

    <!-- about video -->
    <section class="about-video">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="align-title">
                        <h3>{{ $pageSetting->cta_title }}</h3>
                    </div>
                    <div class="about-video-wrapper">
                        <div class="about-video-content">
                            <div class="about-video-image">
                                <img src="{{ asset('storage/' . $pageSetting->cta_image) }}" alt="image">
                            </div>
                            <div class="missiom-video-btn">
                                <a href="{{ $pageSetting->cta_video }}" target="_blank" class="hv-popup-link"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about video -->

    <!-- features -->
    <div class="home-two-features about-features">
        <div class="container">
            <div class="row">
                @php $homeSetting = json_decode($HomeSetting); @endphp
                @foreach ($homeSetting as $home)
                    <div class="col-xl-3 col-md-6 p-0">
                        <div class="features-content features-content-{{ $loop->iteration }} wow fadeInUp">
                            <div class="features-icon features-icon-{{ $loop->iteration }}">
                                {{-- <x-{{ $home->icon }} /> --}}
                                {{-- <x-heroicon-o-academic-cap /> --}}
                                {{-- @dd($home->icon) --}}
                                {{-- @svg($home->icon, 'hero-icon') --}}
                                <x-icon name="{{ $home->icon }}" />
                            </div>
                            <div class="features-info">
                                <a href="{{ route('events.index') }}">{{ $home->name }}</a>
                                <p>{{ $home->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- features -->

    <!-- home tow about -->
    <section class="home-two-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about2-left-container">
                        <div class="common-title">
                            <h6>ABOUT US</h6>
                            <h3>{{ $pageSetting->title }}</h3>
                        </div>
                        <div class="about-right-content about2-left-content">
                            {!! $pageSetting->description !!}
                            <div class="about-left-wrapper">
                                <div class="about-left-wrapper-content">
                                    <h5>{{ $pageSetting->achivement }}</h5>
                                    <img src="assets/images/shape/features-shape.png" alt="shape">
                                </div>
                                <div class="about-right-button-area">
                                    <div class="about-right-mail  wow fadeInDown">
                                        <div class="mail-icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="mail-info">
                                            <span>Call Now!</span>
                                            <a href="tel:{{ appPhone() }}">{{ appPhone() }}</a>
                                        </div>
                                    </div>
                                    <div class="about-right-mail  wow fadeInDown">
                                        <div class="mail-icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="mail-info">
                                            <span>Email Now!</span>
                                            <a href="tel:{{ getEmail() }}">{{ getEmail() }}</a>
                                        </div>
                                    </div>
                                    <a href="{{ route('contactUs') }}" class="btn-1 btn-2  wow fadeInUp">Contact
                                        Us<span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about2-right-container">
                        <div class="about2-image wow fadeInUp">
                            <img src="{{ asset('storage/' . $pageSetting->image) }}" alt="image">
                        </div>
                        <div class="round2-shape">
                            <img src="assets/images/shape/round-shape.png" alt="shape">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home tow about -->

    <!-- about brand -->
    <div class="about-brand">
        <div class="about-brand-container">
            <div class="about-brand-slider owl-carousel owl-theme">
                @foreach ($brands as $brand)
                    <div class="about-brand-image">
                        <img src="{{ asset('storage/' . $brand->img_url) }}" alt="brand">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- about brand -->

    <!-- videoo2 -->
    <section class="video2">
        <div class="video2-shape">
            <img src="assets/images/shape/home-2-banner-shape.png" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video2-title">
                        <h3>{{ $pageSetting->action_title }}</h3>
                        <a href="{{ $pageSetting->action_video }}" target="_blank" class="hv-popup-link">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
                <div class="video2-container">
                    <div class="row">
                        @foreach ($pageSetting->action_items as $item)
                            <div class="col-lg-4">
                                <div class="video2-contant wow fadeInDown">
                                    <div class="video2-contant-icon" style="color: #f89b12">
                                        {{-- <img src="{{ asset('storage/'.$item['icon']) }}" alt="icon"> --}}
                                        @svg($item['icon'], 'hero-icon')
                                    </div>
                                    <div class="video2-icon-content">
                                        <a href="{{ $item['link'] }}">{{ $item['title'] }}</a>
                                        <p>{{ $item['description'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video2 -->

    <!-- testimonial3 -->
    <section class="testimonial_section_home_three">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="testimonials_content_box">
                        <div class="common-title">
                            <h6>{{ $testSection->title ?? '' }}</h6>
                            <h3>{{ $testSection->sub_title ?? '' }}</h3>
                            <p>{{ $testSection->description ?? '' }}</p>
                            <div class="link-btn">
                                <a href="{{ route('contactUs') }}" class="btn-1 btn-2">Learn More<span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="testimonial3-right-content">
                        <div class="testimonial-inner">
                            <div class="testimonial3-slider owl-carousel owl-theme">
                                @forelse($testimonials as $testimonial)
                                    <x-testimonial :testimonial="$testimonial" />
                                @empty
                                    <p>No testimonial per now!</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial3 -->

    <!-- team -->
    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="align-title">
                        <h5>EXPERT TEAM</h5>
                        <h3>Meet Our Volunteer Team</h3>
                    </div>
                </div>
                @foreach ($team as $volunteer)
                    <x-team :volunteer="$volunteer" />
                @endforeach
            </div>
        </div>
    </section>
    <!-- team -->
</x-app-layout>
