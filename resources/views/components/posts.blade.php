<div class="col-lg-4">
    <div class="blog-container">
        @foreach($posts as $post)
            @if($loop->iteration <= 2)
                <x-post :post="$post" thumbnail="yes" />
            @endif
        @endforeach
    </div>
</div>
<div class="col-lg-4">
    <div class="blog-container activ-blog">
        @foreach($posts as $post)
        @if($loop->iteration === 3)
            <x-post :post="$post" title="active-blog-content" thumbnail="yes" middle="-middle" >
                <p>Lorem Ipsum nibh vel velit auctor aliqu. Aenean sollic tudin, lorem is that</p>
                <a href="{{ route('blog.show', $post->slug) }}" class="read-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
            </x-post>
        @endif
        @endforeach
    </div>
</div>
<div class="col-lg-4">
        @foreach($posts as $post)
            @if($loop->iteration > 3)
                <x-post :post="$post" title="right-blog-content">

                </x-post>
            @endif
        @endforeach
</div>