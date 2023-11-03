{{-- <div class="col-lg-4">
    <div class="blog-container">
        <div class="blog-image">
            <a href="blog-single.html"><img src="assets/images/gallery/blog-01.jpg" alt="img"></a>
        </div>
        <div class="blog-content">
            <span><i class="fa-regular fa-calendar-days"></i> 27/02/2024</span>
            <a href="blog-single.html" class="blog-title">Providing Education Is the most Valuable Gift</a>
        </div>
        <div class="blog-image">
            <a href="blog-single.html"><img src="assets/images/gallery/blog-02.jpg" alt="img"></a>
        </div>
        <div class="blog-content">
            <span><i class="fa-regular fa-calendar-days"></i> 27/02/2023</span>
            <a href="blog-single.html" class="blog-title">Providing Education Is the most Valuable Gift</a>
        </div>
    </div>
</div>
<div class="col-lg-4">
    <div class="blog-container activ-blog">
        <div class="blog-image-middle">
            <a href="blog-single.html"><img src="assets/images/gallery/blog-03.jpg" alt="img"></a>
        </div>
        <div class="blog-content active-blog-content">
            <span><i class="fa-regular fa-calendar-days"></i> 27/02/2025</span>
            <a href="blog-single.html" class="blog-title">Providing Education Is the most Valuable Gift</a>
            <p>Lorem Ipsum nibh vel velit auctor aliqu. Aenean sollic tudin, lorem is that</p>
            <a href="blog-single.html" class="read-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
        </div>
    </div>
</div>
<div class="col-lg-4">
    <div class="blog-content right-blog-content">
        <span><i class="fa-regular fa-calendar-days"></i> 27/02/2022</span>
        <a href="blog-single.html" class="blog-title">Do you know why african people year of year waterless?</a>
        <a href="blog-single.html" class="read-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
    </div>
    <div class="blog-content right-blog-content">
        <span><i class="fa-regular fa-calendar-days"></i> 27/02/2022</span>
        <a href="blog-single.html" class="blog-title">Do you know why african people year of year waterless?</a>
        <a href="blog-single.html" class="read-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
    </div>
    <div class="blog-content right-blog-content">
        <span><i class="fa-regular fa-calendar-days"></i> 27/02/2022</span>
        <a href="blog-single.html" class="blog-title">Do you know why african people year of year waterless?</a>
        <a href="blog-single.html" class="read-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
    </div>
</div> --}}

@foreach($posts as $post)
    @if($loop->iteration <= 2)
        {{-- @if($loop->iteration < 2) --}}
            <div class="col-lg-4">
        {{-- @endif --}}
            <div class="blog-container">
                <div class="blog-image">
                    <a href="blog-single.html"><img src="assets/images/gallery/blog-02.jpg" alt="img"></a>
                </div>
                <div class="blog-content">
                    <span><i class="fa-regular fa-calendar-days"></i> 27/02/2023</span>
                    <a href="blog-single.html" class="blog-title">Providing Education Is the most Valuable Gift</a>
                </div>
            </div>
        {{-- @if($loop->iteration < 2) --}}
            </div>
        {{-- @endif --}}
    @endif

    @if($loop->iteration === 3)
        <div class="col-lg-4">
            <div class="blog-container activ-blog">
                <div class="blog-image-middle">
                    <a href="blog-single.html"><img src="assets/images/gallery/blog-03.jpg" alt="img"></a>
                </div>
                <div class="blog-content active-blog-content">
                    <span><i class="fa-regular fa-calendar-days"></i> 27/02/2025</span>
                    <a href="blog-single.html" class="blog-title">Providing Education Is the most Valuable Gift</a>
                    <p>Lorem Ipsum nibh vel velit auctor aliqu. Aenean sollic tudin, lorem is that</p>
                    <a href="blog-single.html" class="read-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    @endif
    <div class="col-lg-4">
        <div class="blog-content right-blog-content">
            <span><i class="fa-regular fa-calendar-days"></i> 27/02/2022</span>
            <a href="blog-single.html" class="blog-title">Do you know why african people year of year waterless?</a>
            <a href="blog-single.html" class="read-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
        </div>
        <div class="blog-content right-blog-content">
            <span><i class="fa-regular fa-calendar-days"></i> 27/02/2022</span>
            <a href="blog-single.html" class="blog-title">Do you know why african people year of year waterless?</a>
            <a href="blog-single.html" class="read-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
        </div>
        <div class="blog-content right-blog-content">
            <span><i class="fa-regular fa-calendar-days"></i> 27/02/2022</span>
            <a href="blog-single.html" class="blog-title">Do you know why african people year of year waterless?</a>
            <a href="blog-single.html" class="read-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
        </div>
    </div>
@endforeach