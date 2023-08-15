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
                        <ul class="page-list mt--30">
                            <li class="rbt-breadcrumb-item"><a href="{{ route('website.home') }}">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item"><a href="{{ route('instructor.dashboard') }}">Instructor</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Course Manager</li>
                        </ul>
                        <!-- End Breadcrumb Area  -->

                        <div class=" title-wrapper">
                            <h1 class="title mb--0">Course Manager</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Content Top  -->
        <!-- Start Course Top  -->
        <div class="rbt-course-top-wrapper mt--40">
            <div class="container">
                <div class="row g-5 float-start">
                    <div class="col-lg-12 col-md-12">
                        <div
                            class="rbt-sorting-list d-flex flex-wrap align-items-center justify-content-start justify-content-lg-end">
                            <div class="rbt-short-item">
                                <div class="filter-select">
                                    <span class="select-label d-block">JavaScript Full Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Course Top  -->
    </div>
</div>

<!-- Start Card Style -->
<div class="rbt-section-overlayping-top rbt-section-gapBottom">
    <div class="container">
        <div class="row row--30 gy-5">
            <div class="col-lg-3 order-2 order-lg-1">
                <aside class="rbt-sidebar-widget-wrapper">

                    <!-- Start Widget Area  -->
                    <div class="rbt-single-widget rbt-widget-search">
                        <div class="buy-now-btn mt--25">
                            <a class="rbt-btn btn-border icon-hover w-100 d-block text-center" href="{{ route('instructor.create-lesson') }}">
                                <span class="btn-text">Create New Lesson</span>
                            </a>
                        </div>
                        <div class="add-to-cart-button mt--25">
                            <a class="rbt-btn btn-gradient icon-hover w-100 d-block text-center" href="{{ route('website.course-checkout') }}">
                                <span class="btn-text">Create New Topic</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                    <!-- End Widget Area  -->

                </aside>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
             <!-- Start Enrole Course  -->
    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
        <div class="content">
            <div class="section-title">
                <h4 class="rbt-title-style-3">Lessons</h4> 
            </div>
            <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                <table class="rbt-table table table-borderless">
                    <thead>
                        <tr>
                            <th>Topic</th>
                            <th>Lesson</th>
                            <th>Duration</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>
                                <span class="h6">Introduction to JavaScript</span>
                            </th>
                            <td>
                                <span class="h6">
                                    <ul>
                                        <li>How to install VS Code</li>
                                    </ul>
                                </span>
                            </td>
                            <td>
                               <span class="h6">1:30:12</span>
                            </td>
                            <td>
                                <div class="rbt-button-group justify-content-end">
                                    <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="#" title="Edit"><i class="feather-edit pl--0"></i></a>
                                    <a class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#" title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>

        </div>
    </div>
    <!-- End Enrole Course  -->

                <div class="row">
                    <div class="col-lg-12 mt--60">
                        <nav>
                            <ul class="rbt-pagination">
                                <li><a href="#" aria-label="Previous"><i class="feather-chevron-left"></i></a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#" aria-label="Next"><i class="feather-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Card Style -->
@endsection