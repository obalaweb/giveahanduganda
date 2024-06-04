<x-app-layout>
    @section('title', 'Teams')
    <!-- common banner -->
    <section class="common-banner">
        <div class="common-banner-image" style="background: url(assets/images/banner/common-banner-01.jpg);"></div>

        <div class="common-banner-title">
            <h3>Volunteer</h3>
            <a href="index-2.html">Home </a> <span>/</span>
            <a href="#0">Volunteer</a>
        </div>
    </section>
    <!-- common banner -->

    <!-- team -->
    <section class="team mb-4">
        <div class="container">
            <div class="row">
                @foreach ($teams as $volunteer)
                    <x-team :volunteer="$volunteer" />
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
    <!-- team -->

</x-app-layout>
