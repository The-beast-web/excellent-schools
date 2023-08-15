@extends('admin.layout.master')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Laravel Full Course / <strong class="text-primary small text-capitalize">
                                        How to install laravel</strong></h3>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ route('admin.course-detail') }}"
                                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                        class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                <a href="html/ecommerce/customers.html"
                                    class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                        class="icon ni ni-arrow-left"></em></a>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card">
                            <div class="card-aside-wrap">
                                <div class="card-content">
                                    <div class="card-inner">
                                        <div class="nk-block">
                                            <div class="nk-block-head">
                                                <h5 class="title">Topic : Introduction to Laravel</h5>
                                            </div><!-- .nk-block-head -->
                                        </div><!-- .nk-block -->
                                        <div class="nk-divider divider md"></div>
                                        <div class="nk-block">

                                        </div><!-- .nk-block -->
                                        <div class="nk-block">
                                            <div class="bq-note">
                                                <video src="{{ asset('assets/what.mp4') }}" controls style="width: 100%"></video>
                                            </div><!-- .bq-note -->
                                        </div><!-- .nk-block -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card-content -->
                            </div><!-- .card-aside-wrap -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
