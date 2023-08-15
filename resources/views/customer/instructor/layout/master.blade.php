@extends('customer.layout.master')

@section('content')
    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
    </div>
    <!-- Start Card Style -->
    <div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Dashboard Top  -->
                    @include('customer.instructor.layout.dashboard-top')
                    <!-- End Dashboard Top  -->

                    <div class="row g-5">
                        <div class="col-lg-3">
                            <!-- Start Dashboard Sidebar  -->
                            @include('customer.instructor.layout.dashboard-sidebar')
                            <!-- End Dashboard Sidebar  -->
                        </div>

                        @yield('intructor-content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card Style -->
@endsection
