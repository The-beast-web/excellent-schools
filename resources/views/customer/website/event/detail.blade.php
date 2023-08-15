@extends('customer.layout.master')

@section('content')
        <!-- Start breadcrumb Area -->
        <div class="rbt-breadcrumb-default rbt-breadcrumb-style-3">
            <div class="breadcrumb-inner">
                <img src="{{ asset('assets2/images/bg/bg-image-10.jpg') }}" alt="Education Images">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="content">
                            <div class="content text-start">
                                <ul class="page-list">
                                    <li class="rbt-breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li>
                                        <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                    </li>
                                    <li class="rbt-breadcrumb-item active">Web Development</li>
                                </ul>
                                <h2 class="title mb--0">The Complete Histudy 2023: From Zero to Expert!</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area -->
    
        <div class="rbt-course-details-area rbt-section-gap">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-8">
                        <div class="course-details-content">
    
                            <div class="rbt-feature-box rbt-shadow-box thuumbnail">
                                <img class="w-100" src="{{ asset('assets2/images/course/course-01.jpg') }}" alt="Card image">
                            </div>
    
                            <!-- Start Course Feature Box  -->
                            <div class="rbt-feature-box rbt-shadow-box mt--60">
                                <div class="row g-5">
                                    <div class="col-lg-12">
                                        <div class="section-title">
                                            <h4 class="title mb--0">Event Content</h4>
                                        </div>
                                    </div>
                                    <!-- Start Feture Box  -->
                                    <div class="col-lg-6">
                                        <ul class="rbt-list-style-1">
                                            <li><i class="feather-check"></i>Over 37 lectures and 55.5 hours of content!</li>
                                            <li><i class="feather-check"></i>Have an intermediate skill level of Python
                                                programming.</li>
                                            <li><i class="feather-check"></i>Have a portfolio of various data analysis
                                                projects.</li>
                                            <li><i class="feather-check"></i>Use the numpy library to create and manipulate
                                                arrays.</li>
                                        </ul>
                                    </div>
                                    <!-- End Feture Box  -->
                                    <!-- Start Feture Box  -->
                                    <div class="col-lg-6">
                                        <ul class="rbt-list-style-1">
                                            <li><i class="feather-check"></i>Live project Software Testing Training Included.</li>
                                            <li><i class="feather-check"></i>Use the pandas module with Python to create and
                                                structure data.</li>
                                            <li><i class="feather-check"></i>Have a portfolio of various data analysis
                                                projects.</li>
                                            <li><i class="feather-check"></i>Create data visualizations using.</li>
                                        </ul>
                                    </div>
                                    <!-- End Feture Box  -->
                                </div>
                            </div>
                            <!-- End Course Feature Box  -->
    
                            <!-- Start Course Feature Box  -->
                            <div class="rbt-feature-box rbt-shadow-box mt--60">
                                <div class="row g-5">
                                    <!-- Start Feture Box  -->
                                    <div class="col-lg-12">
                                        <div class="section-title">
                                            <h4 class="title mb--20">Event Description</h4>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod te invidunt. ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam. et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                        <p>Sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <!-- End Feture Box  -->
    
                                    <!-- Start Feture Box  -->
                                    <div class="col-lg-6">
                                        <div class="section-title">
                                            <h4 class="title mb--20">Description</h4>
                                        </div>
                                        <ul class="rbt-list-style-1">
                                            <li><i class="feather-check"></i>Use the Jupyter Notebook Environment.
                                                JavaScript developer from scratch.</li>
                                            <li><i class="feather-check"></i>Use the pandas module with Python to create and
                                                structure data.</li>
                                            <li><i class="feather-check"></i>Have a portfolio of various data analysis
                                                projects.</li>
                                            <li><i class="feather-check"></i>Create data visualizations using matplotlib and
                                                the seaborn.</li>
                                        </ul>
                                    </div>
                                    <!-- End Feture Box  -->
                                </div>
                            </div>
                            <!-- End Course Feature Box  -->
    
                            <!-- Start Course Content  -->
                            <div class="course-content rbt-shadow-box mt--60">
                                <div class="section-title">
                                    <h4 class="title mb--0">Event FAQ</h4>
                                </div>
                                <div class="rbt-accordion-style rbt-accordion-02 accordion mt--45">
                                    <div class="accordion" id="accordionExampleb2">
                                        <div class="accordion-item card">
                                            <h2 class="accordion-header card-header" id="headingTwo1">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo1">
                                                    Intro to Course and Histudy?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo1" class="accordion-collapse collapse show" aria-labelledby="headingTwo1" data-bs-parent="#accordionExampleb2">
                                                <div class="accordion-body card-body">
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis, quisquam qui. Quia, tempore, atque, pariatur eius nobis quas nulla ipsam molestias provident fuga odio cum dolorum maiores minima? Aliquam, sequi.</p>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="accordion-item card">
                                            <h2 class="accordion-header card-header" id="headingTwo2">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                                    Course Fundamentals?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExampleb2">
                                                <div class="accordion-body card-body">
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis, quisquam qui. Quia, tempore, atque, pariatur eius nobis quas nulla ipsam molestias provident fuga odio cum dolorum maiores minima? Aliquam, sequi.</p>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="accordion-item card">
                                            <h2 class="accordion-header card-header" id="headingTwo3">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                                                    You can develop skill and setup?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo3" class="accordion-collapse collapse" aria-labelledby="headingTwo3" data-bs-parent="#accordionExampleb2">
                                                <div class="accordion-body card-body">
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis, quisquam qui. Quia, tempore, atque, pariatur eius nobis quas nulla ipsam molestias provident fuga odio cum dolorum maiores minima? Aliquam, sequi.</p>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="accordion-item card">
                                            <h2 class="accordion-header card-header" id="headingTwo4">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                                                    15 Things To Know About Education?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo4" class="accordion-collapse collapse" aria-labelledby="headingTwo4" data-bs-parent="#accordionExampleb2">
                                                <div class="accordion-body card-body">
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis, quisquam qui. Quia, tempore, atque, pariatur eius nobis quas nulla ipsam molestias provident fuga odio cum dolorum maiores minima? Aliquam, sequi.</p>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="accordion-item card">
                                            <h2 class="accordion-header card-header" id="headingTwo5">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
                                                    Course Description?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo5" class="accordion-collapse collapse" aria-labelledby="headingTwo5" data-bs-parent="#accordionExampleb2">
                                                <div class="accordion-body card-body">
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis, quisquam qui. Quia, tempore, atque, pariatur eius nobis quas nulla ipsam molestias provident fuga odio cum dolorum maiores minima? Aliquam, sequi.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Course Content  -->
    
                            <!-- Start Intructor Area  -->
                            <div class="rbt-participants-area mt--60">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-title text-start mb--20">
                                            <span class="subtitle bg-secondary-opacity">Event Participants</span>
                                            <h2 class="title">Event Participants</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-5">
                                    <!-- Start Single Team  -->
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="rbt-team team-style-default style-two rbt-hover">
                                            <div class="inner">
                                                <div class="thumbnail"><img src="{{ asset('assets2/images/team/team-01.jpg') }}" alt="Corporate Template"></div>
                                                <div class="content">
                                                    <h2 class="title">Alejandro</h2>
                                                    <h6 class="subtitle theme-gradient">Math Teacher</h6>
                                                    <span class="team-form">
                                                        <i class="feather-map-pin"></i>
                                                        <span class="location">CO Miego, AD,USA</span>
                                                    </span>
                                                    <p class="description">Yes, I am a Depertment Teacher. I have a passion for
                                                        learning system.</p>
                                                    <ul class="social-icon social-default icon-naked mt--20">
                                                        <li><a href="https://www.facebook.com/">
                                                                <i class="feather-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li><a href="https://www.twitter.com">
                                                                <i class="feather-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li><a href="https://www.instagram.com/">
                                                                <i class="feather-instagram"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Team  -->
                                    <!-- Start Single Team  -->
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="rbt-team team-style-default style-two rbt-hover">
                                            <div class="inner">
                                                <div class="thumbnail"><img src="{{ asset('assets2/images/team/team-02.jpg') }}" alt="Corporate Template"></div>
                                                <div class="content">
                                                    <h2 class="title">Alejandro</h2>
                                                    <h6 class="subtitle theme-gradient">Math Teacher</h6>
                                                    <span class="team-form">
                                                        <i class="feather-map-pin"></i>
                                                        <span class="location">CO Miego, AD,USA</span>
                                                    </span>
                                                    <p class="description">Yes, I am a Depertment Teacher. I have a passion for
                                                        learning system.</p>
                                                    <ul class="social-icon social-default icon-naked mt--20">
                                                        <li><a href="https://www.facebook.com/">
                                                                <i class="feather-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li><a href="https://www.twitter.com">
                                                                <i class="feather-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li><a href="https://www.instagram.com/">
                                                                <i class="feather-instagram"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Team  -->
                                </div>
                            </div>
                            <!-- End Intructor Area  -->
    
                        </div>
                        <div class="related-course mt--60">
                            <div class="row">
                                <div class="col-lg-12 mb--40">
                                    <div class="section-title text-start">
                                        <span class="subtitle bg-secondary-opacity">Similar Event</span>
                                        <h2 class="title">Similar Event</h2>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row g-5">
                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt--30" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="rbt-card event-grid-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets2/images/event/grid-type-01.jpg') }}" alt="Card image">
                                                <div class="rbt-badge-3 bg-white">
                                                    <span>11 Jan</span>
                                                    <span>2023</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <ul class="rbt-meta">
                                                <li><i class="feather-map-pin"></i>IAC Building</li>
                                                <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                                            </ul>
                                            <h4 class="rbt-card-title"><a href="course-details.html">International Education Fair 2023</a></h4>
    
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
                                <!-- End Single Card  -->
    
                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt--30" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="rbt-card event-grid-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets2/images/event/grid-type-02.jpg') }}" alt="Card image">
                                                <div class="rbt-badge-3 bg-white">
                                                    <span>11 Mar</span>
                                                    <span>2023</span>
                                                </div>
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
                                <!-- End Single Card  -->
                            </div>
    
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="load-more mt--60 text-center">
                                        <a class="rbt-btn rbt-switch-btn btn-border" href="#">
                                            <span data-text="View More Events">View More Events</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-4 mt_md--60 mt_sm--60">
                        <div class="course-sidebar rbt-gradient-border sticky-top rbt-shadow-box course-sidebar-top">
                            <div class="inner">
    
                                <!-- Start Viedo Wrapper  -->
                                <a class="video-popup-with-text video-popup-wrapper text-center popup-video sidebar-video-hidden mb--15" href="https://www.youtube.com/watch?v=nA1Aqp0sPQo">
                                    <div class="video-content">
                                        <img class="w-100 rbt-radius" src="{{ asset('assets2/images/others/video-01.jpg') }}" alt="Video Images">
                                        <div class="position-to-top">
                                            <span class="rbt-btn rounded-player-2 with-animation">
                                                <span class="play-icon"></span>
                                            </span>
                                        </div>
                                        <span class="play-view-text d-block color-white"><i class="feather-eye"></i> Preview this event</span>
                                    </div>
                                </a>
                                <!-- End Viedo Wrapper  -->
    
                                <div class="content pt--30">
                                    <div class="buy-now-btn">
                                        <a class="rbt-btn btn-border icon-hover w-100 d-block text-center" href="{{ route('website.event-ticket') }}">
                                            <span class="btn-text">Get Ticket Now $45</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </a>
                                    </div>
    
                                    <div class="rbt-widget-details has-show-more">
                                        <ul class="has-show-more-inner-content rbt-course-details-list-wrapper">
                                            <li><span>Start Date</span><span class="rbt-feature-value rbt-badge-5">25 Jan, 2023</span>
                                            </li>
                                            <li><span>Start Time</span><span class="rbt-feature-value rbt-badge-5">7.00Pm</span></li>
                                            <li><span>End Date</span><span class="rbt-feature-value rbt-badge-5">25 Jan, 2024</span></li>
                                            <li><span>Ongoing</span><span class="rbt-feature-value rbt-badge-5">1000+</span></li>
                                            <li><span>Location</span><span class="rbt-feature-value rbt-badge-5">USA</span></li>
                                            <li><span>Language</span><span class="rbt-feature-value rbt-badge-5">USA</span></li>
                                        </ul>
                                        <div class="rbt-show-more-btn">Show More</div>
                                    </div>
    
                                    <div class="social-share-wrapper mt--30 text-center">
                                        <div class="rbt-post-share d-flex align-items-center justify-content-center">
                                            <ul class="social-icon social-default transparent-with-border justify-content-center">
                                                <li><a href="https://www.facebook.com/">
                                                        <i class="feather-facebook"></i>
                                                    </a>
                                                </li>
                                                <li><a href="https://www.twitter.com">
                                                        <i class="feather-twitter"></i>
                                                    </a>
                                                </li>
                                                <li><a href="https://www.instagram.com/">
                                                        <i class="feather-instagram"></i>
                                                    </a>
                                                </li>
                                                <li><a href="https://www.linkdin.com/">
                                                        <i class="feather-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr class="mt--20">
                                        <div class="contact-with-us text-center">
                                            <p>For details about the event</p>
                                            <p class="rbt-badge-2 mt--10 justify-content-center w-100"><i class="feather-phone mr--5"></i> Call Us: <a href="#"><strong>+444 555 666 777</strong></a></p>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
@endsection