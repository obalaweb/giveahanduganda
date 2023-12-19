<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <nav class="menu-box">
        <div class="nav-logo">
            <a href="{{ url("/") }}"><img src="{{ getLogoUrl() }}" alt="logo"></a>
        </div>
        <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>{{ getAddress() }}</li>
                <li><a href="tel:{{ appPhone() }}">{{ appPhone() }}</a></li>
                <li><a href="mailto:{{ getEmail() }}">{{ getEmail() }}</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="{{ getTLink() }}"><span class="fab fa-twitter"></span></a></li>
                <li><a href="{{ getFlink() }}"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="{{ getWLink() }}"><span class="fab fa-whatsapp"></span></a></li>
            </ul>
        </div>
    </nav>
</div>