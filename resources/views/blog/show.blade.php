<x-app-layout>
    @section('title', $post->title)
    <style>
        a {
            color: black;
        }

        a:hover {
            color: #EB1031;
            text-decoration: underline;
        }

        blockquote {
            margin-top: 35px;
            padding: 30px 46px;
            background: rgba(248, 155, 18, 0.1);
            border-radius: 5px;
            border-left: 5px solid #EB1031;
        }
    </style>

    <!-- common banner -->
    <section class="common-banner">
        <div class="common-banner-image" style="background: url(assets/images/banner/common-banner-01.jpg);"></div>

        <div class="common-banner-title blog-single-banner-title">
            <h3>{{ $post->title }}</h3>
            <h6>{{ $post->created_at->format('F d, Y') }} @ {{ $post->created_at->format('H:m A') }}</h6>
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
                            <img src="{{ $post->image }}" alt="image">
                        </div>
                        <div class="blog-single-content">
                            <div class="blog-single-info">
                                <ul>
                                    <li><i class="fa-regular fa-calendar-check"></i>
                                        {{ $post->created_at->format('F d, Y') }}</li>
                                    <li><i class="fa-regular fa-user"></i> {{ $post->author->name }}</li>
                                    <li><i class="fa-regular fa-comments"></i> No Comments</li>
                                </ul>
                            </div>
                            <div class="blog-single-title">
                                <h3>{{ $post->title }}</h3>
                            </div>
                            {!! $post->body !!}
                            <div class="blog-single-media">
                                <div class="blog-single-media-wrapper">
                                    <h6>Tags:</h6>
                                    <div class="blog-single-media-tags">
                                        @forelse($post->tags as $tag)
                                            <a href="#">{{ $tag }}.</a>
                                        @empty
                                            <p>No Tag</p>
                                        @endforelse
                                    </div>
                                </div>
                                <div class="blog-single-media-wrapper">
                                    <h6>Share:</h6>
                                    <ul>
                                        <li><a href="#0"> <i class="flaticon-facebook-app-symbol"></i></a></li>
                                        <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#0"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#0"><i class="fa-brands fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-single-title">
                                <h3>Leave a Reply</h3>
                            </div>
                            <div class="blog-single-form">
                                <div class="bs-form-top">
                                    <input type="text" class="v-form bs-form bs-form-top" name="name"
                                        placeholder="Your Name">
                                    <input type="email" class="v-form bs-form" name="email"
                                        placeholder="Email Adress">
                                </div>
                                <input type="text" class="v-form" name="address" placeholder="Your Address">
                                <textarea name="massege" class="v-form" placeholder="Message"></textarea>
                                <button type="submit" class="submit-btn">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>

                <x-PostSideBar :post="$post" />
            </div>
        </div>
    </section>
    <!-- causes single -->

</x-app-layout>
