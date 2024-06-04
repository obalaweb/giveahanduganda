{{-- <div {{ $attributes->merge(['class' => 'blog-container' ])->except(['post', 'title', 'thumbnail', 'middle']) }}> --}}

@if ($attributes->has('thumbnail'))
    <div class="blog-image{{ $middle ?? '' }}">
        <a href="{{ route('blog.show', $post->slug) }}"><img
                src="{{ asset($post->image) ?? asset('assets/images/gallery/blog-02.jpg') }}" alt="img"></a>
    </div>
@endif
{{-- @dd($title) --}}
<div class="blog-content {{ $title ?? '' }}">
    <span><i class="fa-regular fa-calendar-days"></i> {{ $post->created_at->format('d/m/Y') }}</span><br />
    <a href="{{ route('blog.show', $post->slug) }}" class="blog-title">{{ $post->title }}</a>
    {{ $slot }}
</div>
{{-- </div> --}}
