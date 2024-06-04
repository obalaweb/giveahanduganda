<x-app-layout>
    @section('title', 'Blog')

    <!-- common banner -->
    <section class="common-banner">
        <div class="common-banner-image" style="background: url(assets/images/banner/common-banner-01.jpg);"></div>

        <div class="common-banner-title">
            <h3>Our Blog</h3>
            <a href="index-2.html">Home</a> <span>/</span>
            <a href="#00">Blog</a>
        </div>
    </section>
    <!-- common banner -->

    <!-- blog page -->
    <section class="blog-page">
        <div class="container">
            <div class="row">
                @forelse($posts as $post)
                    <div class="col-lg-4">
                        <div class="blog-page-container">
                            <a href="{{ route('blog.show', $post->slug) }}">
                                <div class="blog-page-image"
                                    style="background-image: url('{{ $post->image ?? asset('assets/images/gallery/default.jpg') }}');
            background-size: cover; background-repeat: no-repeat; width:100%; height:280px;">
                                </div>
                            </a>
                            <div class="blog-page-content">
                                <p><i class="fa-regular fa-calendar-days"></i> 27/02/2022</p>
                                <h6><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h6>
                                <p>{{ $post->description }}</p>
                                <a href="{{ route('blog.show', $post->slug) }}">READ MORE <i
                                        class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Check back later, no posts available per now!</p>
                @endforelse
                <div class="col-lg-12">
                    <div class="paigenation">
                        <ul>
                            <li><a href="#0">1</a></li>
                            <li><a href="#0">2</a></li>
                            <li><a href="#0">...</a></li>
                            <li><a href="#0"><i class="fa-solid fa-angles-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog page -->

</x-app-layout>
