<div class="container">

    <h3 class="section-header text-center">Pre-School Staff</h3>

    <div id="carouselPreSchool" class="carousel slide" data-ride="carousel">

        @if ($agent->isMobile())
            @include('partials.mobile-inner')
        @else
            @include('partials.desktop-inner')
        @endif

        <a class="carousel-control-prev" href="#carouselPreSchool" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselPreSchool" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>

</div>
