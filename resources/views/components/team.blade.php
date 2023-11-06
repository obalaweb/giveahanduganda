<div class="col-lg-4">
    <div class="team-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
        <div class="team-image">
            <a href="{{ route('teams.show', $volunteer->id) }}">
                <img src="assets/images/team/team-01.png" alt="img">
            </a>
        </div>
        <div class="team-info">
            <a href="{{ route('teams.show', $volunteer->id) }}"><h6>{{ $volunteer->user->name }}</h6></a>
            <p>{{ $volunteer->expertise }}</p>
            <div class="team-media">
                <ul>
                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                    <li><a href="#"> <i class="flaticon-facebook-app-symbol"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>