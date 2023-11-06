<div class="featured-container">
    <div class="feature-button">
        <a href="#" class="c-btn blue-btn">Education</a>
    </div>
    <div class="featured-share">
        <a href="#"><i class="fa-solid fa-share"></i></a>
    </div>
    <div class="featured-image">
        <img src="{{ asset('storage/'.$course->thumbnail) ?? asset('assets/images/gallery/featured-02.png') }}" alt="img">
        <div class="featured-shape">
            <img src="assets/images/shape/featured-shape.png" alt="shape">
        </div>
    </div>
    <div class="featured-content">
        <a href="{{ route('course.show', $course->slug) }}">{{ $course->title }}</a>
        <!-- {{ $course->about }} -->
        <div id="skills-section-one">
            <div class="progress">
                <div class="progress-bar progress-bar1" data-progress="89">
                    <span>{{ number_format($course->raised/$course->total*100, 0) }}%</span>
                </div>
            </div>
        </div>
        <div class="featured-info">
            <ul>
                <li>
                    <span>Goals</span>
                    <a href="#">${{ $course->total }}</a>
                </li>
                <li>
                    <span>Raised</span>
                    <a href="#">${{ $course->raised }}</a>
                </li>
                <li>
                    <span>To Go</span>
                    <a href="{{ $course->donate_link }}" class="featured-info-go">${{ $course->total - $course->raised }}</a>
                </li>
            </ul>
        </div>
    </div>
</div>