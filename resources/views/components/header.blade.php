<header class="main-header style-one style-three">
    <div class="header-lower">
        <!-- header-top -->
        <div class="header_top">
            <div class="auto-container">
                <div class="header-top-content">
                    <div class="header_top_left">
                        <ul class="top_left">
                            <li><a href="tel:12123002700"><i class="flaticon-phone-call"></i>+1 212 300 2700</a></li>
                            <li><a href="mailto:infoyouremail.com"><i class="flaticon-email"></i> Infoyouremail.com</a></li>
                            <li><i class="fa-regular fa-clock"></i> Mon - Fri: 9:00 - 18:00</li>
                        </ul>
                    </div>
                    <div class="header_top_right">
                        <div class="header_right_info">
                            <ul class="top_right">
                                <li><span>Social Links :</span></li>
                                <li><a href="#"> <i class="flaticon-facebook-app-symbol"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top -->

        <div class="header_bottom p_relative">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="index-2.html"><img src="assets/images/logo-3.png" alt=""></a></figure>
                    </div>
                    <div class="menu-area">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li>
                                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('aboutUs') }}">About Us</a>
                                    </li>
                                    <li class="dropdown"><a href="#0">Pages</a>
                                        <ul>
                                            <li><a href="{{ route('events.index') }}">Events</a></li>
                                            <li><a href="{{ route('teams.index') }}">Volunteers</a></li>
                                            <li><a href="{{ route('teams.create') }}">Become a Volunteer</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog.index') }}">Our Blog</a>
                                    </li>
                                    <li><a href="{{ route('contactUs') }}"> Contact </a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="header__right">
                        <div class="header-scarce">
                            <button class="btn primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                <i class="flaticon-search"></i>
                            </button>
                        </div>
                        <div class="blank"></div>
                        <div class="header__right__button">
                            <div class="header-link-btn"><a href="contact.html" target="_blank" class="btn-1 btn-3">Donate Now <span></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto_container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="{{ route('home') }}"><img src="assets/images/logo.png" alt=""></a></figure>
                </div>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>