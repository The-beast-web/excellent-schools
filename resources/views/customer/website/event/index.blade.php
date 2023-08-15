@extends('customer.layout.master')

@section('content')
<div class="rbt-page-banner-wrapper">
    <!-- Start Banner BG Image  -->
    <div class="rbt-banner-image"></div>
    <!-- End Banner BG Image  -->
    <div class="rbt-banner-content">
        <!-- Start Banner Content Top  -->
        <div class="rbt-banner-content-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Start Breadcrumb Area  -->
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">All Event</li>
                        </ul>
                        <!-- End Breadcrumb Area  -->

                        <div class=" title-wrapper">
                            <h1 class="title mb--0">All Event</h1>
                            <a href="#" class="rbt-badge-2">
                                <div class="image">🎉</div> 99 Events
                            </a>
                        </div>
                        <p class="description">Event that help beginner designers become true unicorns. </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Content Top  -->
    </div>
</div>

<div class="rbt-counterup-area rbt-section-overlayping-top rbt-section-gapBottom">
    <div class="container">
        <div class="row g-5">
            <!-- Start Single Event  -->
            <div class="col-lg-6 col-md-6 col-12">
                <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                            <img src="{{ asset('assets2/images/event/grid-type-01.jpg') }}" alt="Card image">
                    </div>
                    <div class="rbt-card-body">
                        <ul class="rbt-meta">
                            <li><i class="feather-calendar"></i>11 Jan, 2023</li>
                            <li><i class="feather-map-pin"></i>IAC Building</li>
                        </ul>
                        <h4 class="rbt-card-title">International Education Fair 2023</h4>
                        <div class="read-more-btn">
                            <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="{{ route('website.event-detail') }}">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Get Ticket</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Event  -->
            <!-- Start Single Event  -->
            <div class="col-lg-6 col-md-6 col-12">
                <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="course-details.html">
                            <img src="{{ asset('assets2/images/event/grid-type-02.jpg') }}" alt="Card image">
                        </a>
                    </div>
                    <div class="rbt-card-body">
                        <ul class="rbt-meta">
                            <li><i class="feather-map-pin"></i>Vancouver</li>
                            <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                        </ul>
                        <h4 class="rbt-card-title"><a href="course-details.html">Painting Art Contest 2020</a></h4>

                        <div class="read-more-btn">
                            <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="event-details.html">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Get Ticket</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Event  -->

            <!-- Start Single Event  -->
            <div class="col-lg-6 col-md-6 col-12">
                <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="course-details.html">
                            <img src="{{ asset('assets2/images/event/grid-type-03.jpg') }}" alt="Card image">
                        </a>
                    </div>
                    <div class="rbt-card-body">
                        <ul class="rbt-meta">
                            <li><i class="feather-map-pin"></i>Paris</li>
                            <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                        </ul>
                        <h4 class="rbt-card-title"><a href="course-details.html">Histudy Education Fair 2023</a></h4>

                        <div class="read-more-btn">
                            <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="event-details.html">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Get Ticket</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Event  -->

            <!-- Start Single Event  -->
            <div class="col-lg-6 col-md-6 col-12">
                <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="course-details.html">
                            <img src="{{ asset('assets2/images/event/grid-type-04.jpg') }}" alt="Card image">
                        </a>
                    </div>
                    <div class="rbt-card-body">
                        <ul class="rbt-meta">
                            <li><i class="feather-map-pin"></i>IAC Building</li>
                            <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                        </ul>
                        <h4 class="rbt-card-title"><a href="course-details.html"> Elegant Light Box Paper Cut Dioramas</a></h4>

                        <div class="read-more-btn">
                            <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="event-details.html">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Get Ticket</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Event  -->

            <!-- Start Single Event  -->
            <div class="col-lg-6 col-md-6 col-12">
                <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="course-details.html">
                            <img src="{{ asset('assets2/images/event/grid-type-05.jpg') }}" alt="Card image">
                        </a>
                    </div>
                    <div class="rbt-card-body">
                        <ul class="rbt-meta">
                            <li><i class="feather-map-pin"></i>Vancouver</li>
                            <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                        </ul>
                        <h4 class="rbt-card-title"><a href="course-details.html">Most Effective Ways Education's Problem.</a></h4>

                        <div class="read-more-btn">
                            <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="event-details.html">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Get Ticket</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Event  -->

            <!-- Start Single Event  -->
            <div class="col-lg-6 col-md-6 col-12">
                <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="course-details.html">
                            <img src="{{ asset('assets2/images/event/grid-type-06.jpg') }}" alt="Card image">
                        </a>
                    </div>
                    <div class="rbt-card-body">
                        <ul class="rbt-meta">
                            <li><i class="feather-map-pin"></i>Paris</li>
                            <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                        </ul>
                        <h4 class="rbt-card-title">Top 7 Common About Education.</h4>

                        <div class="read-more-btn">
                            <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="{{ route('website.event-detail') }}">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Get Ticket</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Event  -->
        </div>
        <div class="row">
            <div class="col-lg-12 mt--60">
                <nav>
                    <ul class="rbt-pagination">
                        <li><a href="#" aria-label="Previous"><i class="feather-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#" aria-label="Next"><i class="feather-chevron-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection