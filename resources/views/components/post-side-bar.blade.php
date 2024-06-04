<div class="col-lg-3">
    <div class="causes-details-right-content">
        <div class="causes-details-right-title">
            <h4>Search Here</h4>
        </div>
        <div class="causes-details-right-search">
            <input type="search" name="search" placeholder="Search Keywords">
            <div class="causes-icon">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </div>

    <div class="causes-details-right-content">
        <div class="causes-details-right-title">
            <h4>Categories</h4>
        </div>
        <div class="causes-details-right-list">
            <ul>
                @forelse ($categories as $category)
                    <li><a href="#"><span>{{ $category->name }}</span> <i class="fa-solid fa-angle-right"></i></a>
                    </li>
                @empty
                    <p>No Category found!</p>
                @endforelse
            </ul>
        </div>
    </div>
    <div class="causes-details-right-content">
        <div class="causes-details-right-title">
            <h4>Recent Posts</h4>
        </div>
        @forelse ($recentPosts as $post)
            <div class="causes-details-right-recent">
                <div class="causes-recent-image">
                    <img src="{{ $post->image }}" alt="image">
                </div>
                <div class="causes-recent-info">
                    <h6><a class="text-dark" href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                    </h6>
                    <p>{{ $post->created_at->format('F d, Y') }}</p>
                </div>
            </div>
        @empty
        @endforelse
    </div>

    <div class="causes-details-right-content">
        <div class="causes-details-right-title">
            <h4>Tags</h4>
        </div>
        <div class="events-tag">
            <a href="#">Design</a>
            <a href="#">Daily Inspiration</a>
            <a href="#">Daily Inspiration</a>
            <a href="#">Trend</a>
            <a href="#">Garden</a>
            <a href="#">Tree Planting</a>
        </div>
    </div>
</div>
