@extends('customer.layout.master')

@section('content')
    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Course Checkout</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="{{ route('website.home') }}">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item"><a href="{{ route('website.course') }}">Courses</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Course Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->
    
     <!-- Start Card Style -->
     <div class="rbt-rbt-card-area rbt-section-gap bg-color-white">
        <div class="container">
            <div class="row row--15 align-items-center mb--30">
                <div class="col-lg-11">
                    <div class="section-title">
                        <h2 class="title">Payment Methods</h2>
                    </div>
                </div>                <div class="col-lg-1">
                    <div class="section-title">
                        <h2 class="title">$45</h2>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row row--15">

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-03 rbt-hover">
                        <div class="rbt-card-img">
                            <a class="thumbnail-link" href="course-details.html">
                                <img src="{{ asset('assets2/images/course/language-academy-01.jpg') }}" alt="Card image">
                                <span class="rbt-btn btn-white icon-hover">
                                    <span class="btn-text">Proceed</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title">Flutterwave
                            </h5>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-03 rbt-hover">
                        <div class="rbt-card-img">
                            <a class="thumbnail-link" href="course-details.html">
                                <img src="{{ asset('assets2/images/course/language-academy-02.jpg') }}" alt="Card image">
                                <span class="rbt-btn btn-white icon-hover">
                                    <span class="btn-text">Proceed</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title">Paystack
                            </h5>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-03 rbt-hover">
                        <div class="rbt-card-img">
                            <a class="thumbnail-link" href="course-details.html">
                                <img src="{{ asset('assets2/images/course/language-academy-03.jpg') }}" alt="Card image">
                                <span class="rbt-btn btn-white icon-hover">
                                    <span class="btn-text">Proceed</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="course-details.html">Paypal</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Card Style -->
@endsection