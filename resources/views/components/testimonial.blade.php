<div class="testimonial3-slider-content">
    <div class="testimonial3-quetion">
        <img src="assets/images/icons/quetion.svg" alt="svg">
    </div>
    <div class="testimonial3-reting">
        <ul>
            @php
            $i = $testimonial->rate;
            while($i > 0) {
                echo "<li><i class='fa-solid fa-star'></i></li>";
                $i--;
            }
            @endphp
        </ul>
        <p>{{ $testimonial->created_at->format("jS F, Y") }}</p>
    </div>
    <p class="testimonial3-body">{{ $testimonial->content }}</p>
    <div class="testimonial3-info">
        <img src="{{ $testimonial->thumbnail ?? asset('assets/images/gallery/testimonial3-01.png') }}" alt="image">
        <div class="testimonial3-member-info">
            <h6>{{ $testimonial->name }}</h6>
            <p>{{ $testimonial->profession }}</p>
        </div>
    </div>
</div>