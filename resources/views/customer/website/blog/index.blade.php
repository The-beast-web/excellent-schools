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
                            <li class="rbt-breadcrumb-item active">All Blog</li>
                        </ul>
                        <!-- End Breadcrumb Area  -->

                        <div class=" title-wrapper">
                            <h1 class="title mb--0">All Blog</h1>
                            <a href="#" class="rbt-badge-2">
                                <div class="image">🎉</div> 50 Articles
                            </a>
                        </div>

                        <p class="description">Blog that help beginner designers become true unicorns. </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Content Top  -->
    </div>
</div>

<!-- Start Card Style -->
<div class="rbt-blog-area rbt-section-overlayping-top rbt-section-gapBottom">
    <div class="container">

        <!-- Start Card Area -->
        <div class="row g-5">
            <!-- Start Single Card  -->
            <div class="col-lg-6 col-md-12 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="rbt-card variation-02 height-330 rbt-hover">
                    <div class="rbt-card-img">
                            <img src="{{ asset('assets2/images/blog/blog-card-01.jpg') }}" alt="Card image">
                    </div>
                    <div class="rbt-card-body">
                        <h3 class="rbt-card-title"><a href="blog-details.html">React</a></h3>
                        <p class="rbt-card-text">It is a long established fact that a reader.</p>
                        <div class="rbt-card-bottom">
                            <a class="transparent-button" href="{{ route('website.blog-detail') }}">Learn More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->

            <div class="col-lg-6 col-md-12 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">

                <!-- Start Single Card  -->
                <div class="rbt-card card-list variation-02 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="blog-details.html">
                            <img src="{{ asset('assets2/images/blog/blog-card-02.jpg') }}" alt="Card image"> </a>
                    </div>
                    <div class="rbt-card-body">
                        <h5 class="rbt-card-title"><a href="blog-details.html">Why Is Education So Famous?</a></h5>
                        <div class="rbt-card-bottom">
                            <a class="transparent-button" href="blog-details.html">Read Article<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="rbt-card card-list variation-02 rbt-hover mt--30">
                    <div class="rbt-card-img">
                        <a href="blog-details.html">
                            <img src="{{ asset('assets2/images/blog/blog-card-03.jpg') }}" alt="Card image"> </a>
                    </div>
                    <div class="rbt-card-body">
                        <h5 class="rbt-card-title"><a href="blog-details.html">Difficult Things About Education.</a></h5>
                        <div class="rbt-card-bottom">
                            <a class="transparent-button" href="blog-details.html">Read Article<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="rbt-card card-list variation-02 rbt-hover mt--30">
                    <div class="rbt-card-img">
                        <a href="blog-details.html">
                            <img src="{{ asset('assets2/images/blog/blog-card-04.jpg') }}" alt="Card image"> </a>
                    </div>
                    <div class="rbt-card-body">
                        <h5 class="rbt-card-title"><a href="blog-details.html">Education Is So Famous, But Why?</a></h5>
                        <div class="rbt-card-bottom">
                            <a class="transparent-button" href="blog-details.html">Read Article<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->
            </div>
        </div>
        <!-- End Card Area -->

        <!-- Start Card Area -->
        <div class="row g-5 mt--15">

            <!-- Start Single Card  -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="rbt-card variation-02 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="blog-details.html">
                            <img src="{{ asset('assets2/images/blog/blog-grid-01.jpg') }}" alt="Card image"> </a>
                    </div>
                    <div class="rbt-card-body">
                        <h5 class="rbt-card-title"><a href="blog-details.html">The Latest Trend In Education.</a></h5>
                        <p class="rbt-card-text">It is a long established fact that a reader.</p>
                        <div class="rbt-card-bottom">
                            <a class="transparent-button" href="blog-details.html">Learn
                                More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->

            <!-- Start Single Card  -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="rbt-card variation-02 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="blog-details.html">
                            <img src="{{ asset('assets2/images/blog/blog-grid-02.jpg') }}" alt="Card image"> </a>
                    </div>
                    <div class="rbt-card-body">
                        <h5 class="rbt-card-title"><a href="blog-details.html">The Modern Rules Of Education.</a></h5>
                        <p class="rbt-card-text">It is a long established fact that a reader.</p>
                        <div class="rbt-card-bottom">
                            <a class="transparent-button" href="blog-details.html">Learn
                                More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->

            <!-- Start Single Card  -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="rbt-card variation-02 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="blog-details.html">
                            <img src="{{ asset('assets2/images/blog/blog-grid-03.jpg') }}" alt="Card image"> </a>
                    </div>
                    <div class="rbt-card-body">
                        <h5 class="rbt-card-title"><a href="blog-details.html">Why Is Education So Famous?</a></h5>
                        <p class="rbt-card-text">It is a long established fact that a reader.</p>
                        <div class="rbt-card-bottom">
                            <a class="transparent-button" href="blog-details.html">Learn
                                More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->

            <!-- Start Single Card  -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="rbt-card variation-02 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="blog-details.html">
                            <img src="{{ asset('assets2/images/blog/blog-grid-04.jpg') }}" alt="Card image"> </a>
                    </div>
                    <div class="rbt-card-body">
                        <h5 class="rbt-card-title"><a href="blog-details.html">Industry Insiders Say Education.</a></h5>
                        <p class="rbt-card-text">Industry a long established that a reader.</p>
                        <div class="rbt-card-bottom">
                            <a class="transparent-button" href="blog-details.html">Learn
                                More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->

            <!-- Start Single Card  -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="rbt-card variation-02 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="blog-details.html">
                            <img src="{{ asset('assets2/images/blog/blog-grid-05.jpg') }}" alt="Card image"> </a>
                    </div>
                    <div class="rbt-card-body">
                        <h5 class="rbt-card-title"><a href="blog-details.html">Make You Love And Hate Education.</a></h5>
                        <p class="rbt-card-text">Make a long established fact a reader.</p>
                        <div class="rbt-card-bottom">
                            <a class="transparent-button" href="blog-details.html">Learn
                                More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->

            <!-- Start Single Card  -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="rbt-card variation-02 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="blog-details.html">
                            <img src="{{ asset('assets2/images/blog/blog-grid-06.jpg') }}" alt="Card image"> </a>
                    </div>
                    <div class="rbt-card-body">
                        <h5 class="rbt-card-title"><a href="blog-details.html">Education Only A Handful Of People.</a></h5>
                        <p class="rbt-card-text">Education established fact that a reader.</p>
                        <div class="rbt-card-bottom">
                            <a class="transparent-button" href="blog-details.html">Learn
                                More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->
        </div>
        <!-- End Card Area -->

        <!-- End Card Area -->
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
<!-- End Card Style -->
@endsection