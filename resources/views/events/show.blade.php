<x-app-layout>

	<!-- common banner -->
        <section class="common-banner">
            <div class="common-banner-image" style="background: url(assets/images/banner/common-banner-01.jpg);"></div>

            <div class="common-banner-title">
                <h3>{{ $event->name }}</h3>
                <h6>April 11, 2040 @ 7:00 am</h6>
            </div>
        </section>
        <!-- common banner -->

        <!-- causes single -->
        <section class="causes-single event-single mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="single-left-container">
                            <div class="causes-single-left-image">
                                <img src="{{ $event->thumbnail ?? asset('assets/images/gallery/event-single.jpg')  }}" alt="image">
                                <a href="#" class="btn-1 btn-2">06 Dec 2022 <span></span></a>
                            </div>
                            <div class="event-single-content">
                                {{ $event->about }}

                                <div class="event-calender">
                                    <div class="datepiker">
                                        <!-- <div id="calen"></div> -->
                                        <input type="text" id="calen" value="Add to Calendar">
                                        <div class="datepiker-icon">
                                            <i class="fa-regular fa-calendar-days"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="event-venue">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="event-venue-content">
                                                <h5>Event Details</h5>
                                                <div class="event-venue-list">
                                                    <ul>
                                                        <li><i class="fa-regular fa-calendar-days"></i> Date: {{ $event->date }}</li>
                                                        <li><i class="fa-regular fa-calendar-days"></i> Time: 8:00 am - 5:00 pm</li>
                                                        <li><i class="fa-regular fa-calendar-days"></i> Event Category: {{ $event->category }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="event-venue-content">
                                                <h5>Venue</h5>
                                                <div class="event-venue-list">
                                                    <ul>
                                                        <li><i class="fa-regular fa-calendar-days"></i> {{ $event->venue }}</li>
                                                        <li><i class="fa-regular fa-calendar-days"></i> {{ $event->venue }} + Google Map</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <x-event-sidebar />
                    </div>
                </div>
            </div>
        </section>
        <!-- causes single -->

</x-app-layout>