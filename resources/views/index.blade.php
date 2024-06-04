<x-app-layout :title="$title">
    <!-- banner section starts -->
    <section class="banner home-2-banner home-3-banner">
        <div class="auto-container">
            <div class="outer-box">
                <div class="col-lg-6">
                    <div class="banner-carousel owl-theme owl-carousel">
                        @forelse($slides as $slide)
                            <div class="slide-item">
                                <div class="banner-slide">
                                    <div class="banner-content">
                                        <div class="banner-content-wrapper">
                                            <div class="banner-content-wrapper-inner">
                                                <h6>{{ $slide->slogan }}</h6>
                                                <h2>{{ $slide->title }}</h2>
                                                <p>{{ $slide->description }}</p>
                                                <div class="banner-btn-group">
                                                    <div class="header-link-btn">
                                                        <a href="{{ route('teams.create') }}" target="_blank"
                                                            class="btn-1"> Volunteer<span></span>
                                                        </a>
                                                    </div>
                                                    <div class="header-link-btn">
                                                        <a href="{{ route('contactUs') }}" target="_blank"
                                                            class="btn-1 btn-3">
                                                            Contribute
                                                            <i class="fa-solid fa-arrow-right-long"></i><span></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-right">
                        <div class="banner-right-image">
                            <img src="{{ asset($pageSetting->main_image) }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section ends -->

    <!-- home3 features -->
    <section class="home3-features">
        <div class="flower-shape">
            <img src="assets/images/shape/flower-shape.png" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="common-title">
                        <h6>WHAT WE DO</h6>
                        <h3>{{ $pageSetting->what_we_do_title }}</h3>
                    </div>
                    <div class="home3-features-left-content">
                        <p>{{ $pageSetting->what_we_do_description }}</p>
                        <a href="{{ route('blog.index') }}" class="btn-1 btn-2">View More <span></span></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home3-container">
                        <div class="home3-content home3-content1">
                            @forelse($pageSetting->items as $item)
                                @if ($loop->iteration < 3)
                                    <div
                                        class="home3-wrapper  wow {{ $loop->iteration === 1 ? 'fadeInDown' : 'fadeInUp' }}">
                                        <div class="features3-icon">
                                            <i class="{{ $item['icon'] }}"></i>
                                        </div>
                                        <h6>{{ $item['name'] }}</h6>
                                        <p>{{ $item['description'] }}</p>
                                    </div>
                                @endif
                            @empty
                            @endforelse
                        </div>
                        <div class="home3-content home3-content2 ">
                            @forelse($pageSetting->items as $item)
                                @if ($loop->iteration >= 3 && $loop->iteration < 5)
                                    <div
                                        class="home3-wrapper wow {{ $loop->iteration === 3 ? 'fadeInDown' : 'fadeInUp' }}">
                                        <div class="features3-icon">
                                            <i class="{{ $item['icon'] }}"></i>
                                        </div>
                                        <h6>{{ $item['name'] }}</h6>
                                        <p>{{ $item['description'] }}</p>
                                    </div>
                                @endif
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home3 features -->

    <!-- home3 about -->
    <section class="home3-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="home3-about-left-content">
                        <div class="home3-about-image">
                            <img src="{{ asset($pageSetting->about_us_image) }}" alt="image">
                        </div>
                        <div class="about3-round-shape">
                            <img src="assets/images/shape/round-shape.png" alt="shape">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="home3-about-right-content">
                        <div class="common-title">
                            <h6>ABOUT US</h6>
                            <h3>{{ $pageSetting->about_us_title }}</h3>
                        </div>
                        <div class="home3-about-right-wrapper">
                            {!! $pageSetting->about_us_description !!}
                            <ul>
                                @php
                                    $milestone = json_decode($pageSetting->milestone);
                                @endphp
                                @forelse($milestone as $stone)
                                    <li>
                                        <div class="home3-about-icon">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                        <div class="home3-about-info">
                                            <h6>{{ $stone->title }}</h6>
                                            <p>{{ $stone->description }}</p>
                                        </div>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                            <a href="{{ route('aboutUs') }}" class="btn-1 btn-2"> Learn More <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home3 about -->
    <!-- featured3 -->
    <section class="featured3">
        <div class="f-shape">
            <img src="assets/images/shape/flower-shape.png" alt="shape">
        </div>
        <div class="featured3-container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="featured-left-wrapper">
                            <div class="common-title">
                                <h6>WE LOVE TO HELP POOR</h6>
                                <h3>Check Featured Campaigns</h3>
                            </div>
                            <div class="featured-left-content">
                                <a href="{{ route('course.index') }}" class="btn-1 btn-2">All Caterories
                                    <span></span></a>
                                <ul>
                                    <li><a href="#">Education <i class="fa-solid fa-angle-left"></i></a></li>
                                    <li><a href="#">Medical <i class="fa-solid fa-angle-left"></i></a></li>
                                    <li><a href="#">Health <i class="fa-solid fa-angle-left"></i></a></li>
                                    <li><a href="#">Education <i class="fa-solid fa-angle-left"></i></a></li>
                                    <li><a href="#">Medicine <i class="fa-solid fa-angle-left"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="featured3-inner">
                            <div class="featured3-slider owl-carousel owl-theme">
                                @forelse($courses as $course)
                                    <x-course :course="$course" />
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- featured3 -->

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
                @forelse($team as $volunteer)
                    <x-team :volunteer="$volunteer" />
                @empty
                @endforelse
            </div>
        </div>
    </section>
    <!-- team -->

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

    <!-- volunteer3 -->
    <section class="volunteer3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common-title">
                        <h6>BECOME A VOLUNTEER</h6>
                        <h3>{{ $pageSetting->become_a_volunteer_title }}</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="volunteer-image">
                        @forelse($pageSetting->become_a_volunteer_images as $image)
                            <div
                                class="{{ $loop->iteration === 1 ? 'volunteer-image1' : 'volunteer-image2  wow fadeInUp' }}">
                                <img src="{{ asset($image) }}" alt="image">
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="volunteer-right-content">
                        <div class="volunteer-right-content-inner">
                            <h6>Love us A trusted name for helping the poor <br>
                                We have been working on this project since 2000 to make.</h6>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="volunteer-content">
                                        <h6>Projects</h6>
                                        <span>10,000+</span>
                                        <p>There are many variations of passages <br> of Lorem Ipsum available</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="volunteer-content">
                                        <h6>Volunteers</h6>
                                        <span>20+</span>
                                        <p>There are many variations of passages <br> of Lorem Ipsum available</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="volunteer-button">
                                        <a href="{{ route('teams.create') }}" class="btn-1">Become A Volunteer
                                            <span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- volunteer -->

    <!-- blog -->
    <section class="blog blog3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common-title">
                        <h5>LATEST BLOG</h5>
                        <h3>Latest News and Articles </h3>
                    </div>
                </div>
                <x-posts :posts="$posts" />
            </div>
        </div>
    </section>
    <!-- blog -->

    <!-- instagram -->
    <div class="inastagram-feed pb-7">
        <div class="instagram-carousel-container">
            <div class="instagram-carousel owl-carousel owl-theme">
                @forelse($galleries as $gallery)
                    <x-gallery :gallery="$gallery" />
                @empty
                    <p>No Images</p>
                @endforelse
            </div>
        </div>
    </div>
    <!-- instagram -->
    <!-- brand -->
    <div class="brand mb-3">
        <div class="brand-carousel-container">
            <div class="brand-carousel owl-carousel owl-theme">
                @forelse($brands as $brand)
                    <div class="brand-image">
                        <img src="{{ asset($brand->img_url) }}" alt="brand">
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
    <!-- brand -->
</x-app-layout>
