<x-app-layout>
    @section('title', 'Events')

    <!-- common banner -->
    <section class="common-banner">
        <div class="common-banner-image" style="background: url(assets/images/banner/common-banner-01.jpg);"></div>

        <div class="common-banner-title">
            <h3>Events</h3>
            <a href="index-2.html">Home </a> <span>/</span>
            <a href="#0">Events</a>
        </div>
    </section>
    <!-- common banner -->
    <!-- events -->
    <section class="events event-page mb-4">
        <div class="container">
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-lg-6">
                        <div class="event-content wow fadeInUp">
                            <div class="event-image">
                                <img src="{{ $event->image ?? asset('assets/images/gallery/event-01.jpg') }}"
                                    alt="image">
                            </div>
                            <div class="event-wrapper">
                                <div class="event-location">
                                    <ul>
                                        <li><i class="icon-location"></i> {{ $event->venue }}</li>
                                        <li><i class="fa-regular fa-clock"></i> 10 AM- 11 AM</li>
                                    </ul>
                                </div>
                                <a href="{{ route('events.show', $event->id) }}">
                                    <h5>{{ $event->name }}</h5>
                                </a>
                                <div class="event-info">
                                    <a href="{{ route('events.show', $event->id) }}" class="btn-1 btn-2">View Events
                                        <span></span></a>
                                    <div class="event-member-info">
                                        <img src="assets/images/gallery/event-member-01.png" alt="image">
                                        <h6>Michle Clark</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
    <!-- events -->
</x-app-layout>
