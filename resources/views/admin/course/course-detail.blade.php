@extends('admin.layout.master')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Course / <strong class="text-primary small">JavaScript
                                        Full Course
                                    </strong></h3>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ route('admin.courses') }}"
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
                                    <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#personal"><em
                                                    class="icon ni ni-property"></em><span>Course</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#orders"><em
                                                    class="icon ni ni-puzzle"></em><span>Lessons</span></a>
                                        </li>
                                        <li class="nav-item nav-item-trigger d-xxl-none">
                                            <a href="#" class="toggle btn btn-icon btn-trigger"
                                                data-target="userAside"><em class="icon ni ni-user-list-fill"></em></a>
                                        </li>
                                    </ul><!-- .nav-tabs -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="personal">
                                            <div class="card-inner">
                                                <div class="nk-block">
                                                    <div class="nk-block-head">
                                                        <h5 class="title">Course Information</h5>
                                                    </div><!-- .nk-block-head -->
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Course Name</span>
                                                                <span class="profile-ud-value">Mr.</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Instructor</span>
                                                                <span class="profile-ud-value">Abu Bin Ishtiyak</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Price</span>
                                                                <span class="profile-ud-value">10 Aug, 1980</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Lessons</span>
                                                                <span class="profile-ud-value">IO</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Students</span>
                                                                <span class="profile-ud-value">01713040400</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Category</span>
                                                                <span class="profile-ud-value">info@softnio.com</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .profile-ud-list -->
                                                </div><!-- .nk-block -->
                                                <div class="nk-block">
                                                    <div class="nk-block-head nk-block-head-line">
                                                        <h6 class="title overline-title text-base">Additional Information
                                                        </h6>
                                                    </div><!-- .nk-block-head -->
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Rating</span>
                                                                <span class="profile-ud-value">08-16-2018 09:04PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Language</span>
                                                                <span class="profile-ud-value">Email</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Bestseller</span>
                                                                <span class="profile-ud-value">United State</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Status</span>
                                                                <span class="profile-ud-value">United State</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .profile-ud-list -->
                                                </div><!-- .nk-block -->
                                                <div class="nk-divider divider md"></div>
                                                <div class="nk-block">
                                                    <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                        <h5 class="title">What you'll learn</h5>
                                                    </div><!-- .nk-block-head -->
                                                    <div class="bq-note">
                                                        <div class="bq-note-item">
                                                            <div class="bq-note-text">
                                                                <p>Aproin at metus et dolor tincidunt feugiat eu id quam.
                                                                    Pellentesque habitant morbi tristique senectus et netus
                                                                    et
                                                                    malesuada fames ac turpis egestas. Aenean sollicitudin
                                                                    non nunc
                                                                    vel pharetra. </p>
                                                            </div>
                                                            <div class="bq-note-meta">
                                                                <span class="bq-note-added">Added on <span
                                                                        class="date">November
                                                                        18, 2019</span> at <span class="time">5:34
                                                                        PM</span></span>
                                                                <span class="bq-note-sep sep">|</span>
                                                                <span class="bq-note-by">By <span>Softnio</span></span>
                                                                <a href="#" class="link link-sm link-danger">Delete
                                                                    Note</a>
                                                            </div>
                                                        </div><!-- .bq-note-item -->
                                                    </div><!-- .bq-note -->
                                                </div><!-- .nk-block -->
                                                <div class="nk-block">
                                                    <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                        <h5 class="title">Requirements</h5>
                                                    </div><!-- .nk-block-head -->
                                                    <div class="bq-note">
                                                        <div class="bq-note-item">
                                                            <div class="bq-note-text">
                                                                <p>Aproin at metus et dolor tincidunt feugiat eu id quam.
                                                                    Pellentesque habitant morbi tristique senectus et netus
                                                                    et
                                                                    malesuada fames ac turpis egestas. Aenean sollicitudin
                                                                    non nunc
                                                                    vel pharetra. </p>
                                                            </div>
                                                            <div class="bq-note-meta">
                                                                <span class="bq-note-added">Added on <span
                                                                        class="date">November
                                                                        18, 2019</span> at <span class="time">5:34
                                                                        PM</span></span>
                                                                <span class="bq-note-sep sep">|</span>
                                                                <span class="bq-note-by">By <span>Softnio</span></span>
                                                                <a href="#" class="link link-sm link-danger">Delete
                                                                    Note</a>
                                                            </div>
                                                        </div><!-- .bq-note-item -->
                                                    </div><!-- .bq-note -->
                                                </div><!-- .nk-block -->
                                                <div class="nk-block">
                                                    <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                        <h5 class="title">Description</h5>
                                                    </div><!-- .nk-block-head -->
                                                    <div class="bq-note">
                                                        <div class="bq-note-item">
                                                            <div class="bq-note-text">
                                                                <p>Aproin at metus et dolor tincidunt feugiat eu id quam.
                                                                    Pellentesque habitant morbi tristique senectus et netus
                                                                    et
                                                                    malesuada fames ac turpis egestas. Aenean sollicitudin
                                                                    non nunc
                                                                    vel pharetra. </p>
                                                            </div>
                                                            <div class="bq-note-meta">
                                                                <span class="bq-note-added">Added on <span
                                                                        class="date">November
                                                                        18, 2019</span> at <span class="time">5:34
                                                                        PM</span></span>
                                                                <span class="bq-note-sep sep">|</span>
                                                                <span class="bq-note-by">By <span>Softnio</span></span>
                                                                <a href="#" class="link link-sm link-danger">Delete
                                                                    Note</a>
                                                            </div>
                                                        </div><!-- .bq-note-item -->
                                                    </div><!-- .bq-note -->
                                                </div><!-- .nk-block -->
                                            </div><!-- .card-inner -->
                                        </div>
                                        <div class="tab-pane" id="orders">
                                            <div class="card-inner">
                                                <div class="nk-block gy-5 scroll-lesson">
                                                    <div class="row g-gs">
                                                        <div>
                                                            <h6>Introduction To JavaScript</h6>
                                                        </div>
                                                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                                                            <a href="{{ route('admin.lesson-detail') }}">
                                                                <div class="card card-full lesson">
                                                                    <div class="card-inner-group">
                                                                        <div class="card-inner card-inner-md">
                                                                            <div class="user-card">
                                                                                <div class="user-info">
                                                                                    <span class="lead-text">Abu Bin
                                                                                        Ishtiyak</span>
                                                                                    <span
                                                                                        class="sub-text">info@softnio.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </a>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                                                            <a href="{{ route('admin.lesson-detail') }}">
                                                                <div class="card card-full lesson">
                                                                    <div class="card-inner-group">
                                                                        <div class="card-inner card-inner-md">
                                                                            <div class="user-card">
                                                                                <div class="user-info">
                                                                                    <span class="lead-text">Abu Bin
                                                                                        Ishtiyak</span>
                                                                                    <span
                                                                                        class="sub-text">info@softnio.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </a>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                                                            <a href="{{ route('admin.lesson-detail') }}">
                                                                <div class="card card-full lesson">
                                                                    <div class="card-inner-group">
                                                                        <div class="card-inner card-inner-md">
                                                                            <div class="user-card">
                                                                                <div class="user-info">
                                                                                    <span class="lead-text">Abu Bin
                                                                                        Ishtiyak</span>
                                                                                    <span
                                                                                        class="sub-text">info@softnio.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </a>
                                                        </div><!-- .col -->
                                                    </div>
                                                    <div class="row g-gs">
                                                        <div>
                                                            <h6>Introduction To JavaScript</h6>
                                                        </div>
                                                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                                                            <a href="{{ route('admin.lesson-detail') }}">
                                                                <div class="card card-full lesson">
                                                                    <div class="card-inner-group">
                                                                        <div class="card-inner card-inner-md">
                                                                            <div class="user-card">
                                                                                <div class="user-info">
                                                                                    <span class="lead-text">Abu Bin
                                                                                        Ishtiyak</span>
                                                                                    <span
                                                                                        class="sub-text">info@softnio.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </a>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                                                            <a href="{{ route('admin.lesson-detail') }}">
                                                                <div class="card card-full lesson">
                                                                    <div class="card-inner-group">
                                                                        <div class="card-inner card-inner-md">
                                                                            <div class="user-card">
                                                                                <div class="user-info">
                                                                                    <span class="lead-text">Abu Bin
                                                                                        Ishtiyak</span>
                                                                                    <span
                                                                                        class="sub-text">info@softnio.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </a>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                                                            <a href="{{ route('admin.lesson-detail') }}">
                                                                <div class="card card-full lesson">
                                                                    <div class="card-inner-group">
                                                                        <div class="card-inner card-inner-md">
                                                                            <div class="user-card">
                                                                                <div class="user-info">
                                                                                    <span class="lead-text">Abu Bin
                                                                                        Ishtiyak</span>
                                                                                    <span
                                                                                        class="sub-text">info@softnio.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </a>
                                                        </div><!-- .col -->
                                                    </div>
                                                    <div class="row g-gs">
                                                        <div>
                                                            <h6>Introduction To JavaScript</h6>
                                                        </div>
                                                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                                                            <a href="{{ route('admin.lesson-detail') }}">
                                                                <div class="card card-full lesson">
                                                                    <div class="card-inner-group">
                                                                        <div class="card-inner card-inner-md">
                                                                            <div class="user-card">
                                                                                <div class="user-info">
                                                                                    <span class="lead-text">Abu Bin
                                                                                        Ishtiyak</span>
                                                                                    <span
                                                                                        class="sub-text">info@softnio.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </a>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                                                            <a href="{{ route('admin.lesson-detail') }}">
                                                                <div class="card card-full lesson">
                                                                    <div class="card-inner-group">
                                                                        <div class="card-inner card-inner-md">
                                                                            <div class="user-card">
                                                                                <div class="user-info">
                                                                                    <span class="lead-text">Abu Bin
                                                                                        Ishtiyak</span>
                                                                                    <span
                                                                                        class="sub-text">info@softnio.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </a>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                                                            <a href="{{ route('admin.lesson-detail') }}">
                                                                <div class="card card-full lesson">
                                                                    <div class="card-inner-group">
                                                                        <div class="card-inner card-inner-md">
                                                                            <div class="user-card">
                                                                                <div class="user-info">
                                                                                    <span class="lead-text">Abu Bin
                                                                                        Ishtiyak</span>
                                                                                    <span
                                                                                        class="sub-text">info@softnio.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </a>
                                                        </div><!-- .col -->
                                                    </div>
                                                    <div class="row g-gs">
                                                        <div>
                                                            <h6>Introduction To JavaScript</h6>
                                                        </div>
                                                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                                                            <a href="{{ route('admin.lesson-detail') }}">
                                                                <div class="card card-full lesson">
                                                                    <div class="card-inner-group">
                                                                        <div class="card-inner card-inner-md">
                                                                            <div class="user-card">
                                                                                <div class="user-info">
                                                                                    <span class="lead-text">Abu Bin
                                                                                        Ishtiyak</span>
                                                                                    <span
                                                                                        class="sub-text">info@softnio.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </a>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                                                            <a href="{{ route('admin.lesson-detail') }}">
                                                                <div class="card card-full lesson">
                                                                    <div class="card-inner-group">
                                                                        <div class="card-inner card-inner-md">
                                                                            <div class="user-card">
                                                                                <div class="user-info">
                                                                                    <span class="lead-text">Abu Bin
                                                                                        Ishtiyak</span>
                                                                                    <span
                                                                                        class="sub-text">info@softnio.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </a>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                                                            <a href="{{ route('admin.lesson-detail') }}">
                                                                <div class="card card-full lesson">
                                                                    <div class="card-inner-group">
                                                                        <div class="card-inner card-inner-md">
                                                                            <div class="user-card">
                                                                                <div class="user-info">
                                                                                    <span class="lead-text">Abu Bin
                                                                                        Ishtiyak</span>
                                                                                    <span
                                                                                        class="sub-text">info@softnio.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </a>
                                                        </div><!-- .col -->
                                                    </div>
                                                    <div class="row g-gs">
                                                        <div>
                                                            <h6>Introduction To JavaScript</h6>
                                                        </div>
                                                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                                                            <a href="{{ route('admin.lesson-detail') }}">
                                                                <div class="card card-full lesson">
                                                                    <div class="card-inner-group">
                                                                        <div class="card-inner card-inner-md">
                                                                            <div class="user-card">
                                                                                <div class="user-info">
                                                                                    <span class="lead-text">Abu Bin
                                                                                        Ishtiyak</span>
                                                                                    <span
                                                                                        class="sub-text">info@softnio.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </a>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                                                            <a href="{{ route('admin.lesson-detail') }}">
                                                                <div class="card card-full lesson">
                                                                    <div class="card-inner-group">
                                                                        <div class="card-inner card-inner-md">
                                                                            <div class="user-card">
                                                                                <div class="user-info">
                                                                                    <span class="lead-text">Abu Bin
                                                                                        Ishtiyak</span>
                                                                                    <span
                                                                                        class="sub-text">info@softnio.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </a>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                                                            <a href="{{ route('admin.lesson-detail') }}">
                                                                <div class="card card-full lesson">
                                                                    <div class="card-inner-group">
                                                                        <div class="card-inner card-inner-md">
                                                                            <div class="user-card">
                                                                                <div class="user-info">
                                                                                    <span class="lead-text">Abu Bin
                                                                                        Ishtiyak</span>
                                                                                    <span
                                                                                        class="sub-text">info@softnio.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </a>
                                                        </div><!-- .col -->
                                                    </div>
                                                </div><!-- .nk-block -->
                                            </div><!-- .card-inner -->
                                        </div>
                                    </div>
                                </div><!-- .card-content -->
                                <div class="card-aside card-aside-right user-aside toggle-slide toggle-slide-right toggle-break-xxl"
                                    data-content="userAside" data-toggle-screen="xxl" data-toggle-overlay="true"
                                    data-toggle-body="true">
                                    <div class="card-inner-group" data-simplebar>
                                        <div class="card-inner">
                                            <div class="product-gallery">
                                                <img src="{{ asset('images/product/lg-a.jpg') }}" alt=""
                                                    class="rounded w-100">
                                            </div><!-- .product-gallery -->
                                            <div class="text-center mb-4">
                                                <h4 class="title" style="font-family: Cambria;">JavaScript Full Course
                                                </h4>
                                            </div>
                                            <div class="text-center">
                                                <a href="{{ route('admin.course-builder.main') }}" class="btn btn-wider btn-primary"
                                                    style="height: 50px"><span>Open with Course Builder</span><em
                                                        class="icon ni ni-arrow-right"></em></a>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card-aside -->
                            </div><!-- .card-aside-wrap -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    {{--     <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Course / <strong class="text-primary small">JavaScript
                                        Full Course</strong></h3>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ route('admin.courses') }}"
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
                                                <h5 class="title">Course Information</h5>
                                            </div><!-- .nk-block-head -->
                                            <div class="profile-ud-list">
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Course Name</span>
                                                        <span class="profile-ud-value">Mr.</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Instructor</span>
                                                        <span class="profile-ud-value">Abu Bin Ishtiyak</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Price</span>
                                                        <span class="profile-ud-value">10 Aug, 1980</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Lessons</span>
                                                        <span class="profile-ud-value">IO</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Students</span>
                                                        <span class="profile-ud-value">01713040400</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Category</span>
                                                        <span class="profile-ud-value">info@softnio.com</span>
                                                    </div>
                                                </div>
                                            </div><!-- .profile-ud-list -->
                                        </div><!-- .nk-block -->
                                        <div class="nk-block">
                                            <div class="nk-block-head nk-block-head-line">
                                                <h6 class="title overline-title text-base">Additional Information</h6>
                                            </div><!-- .nk-block-head -->
                                            <div class="profile-ud-list">
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Rating</span>
                                                        <span class="profile-ud-value">08-16-2018 09:04PM</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Language</span>
                                                        <span class="profile-ud-value">Email</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Bestseller</span>
                                                        <span class="profile-ud-value">United State</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Status</span>
                                                        <span class="profile-ud-value">United State</span>
                                                    </div>
                                                </div>
                                            </div><!-- .profile-ud-list -->
                                        </div><!-- .nk-block -->
                                        <div class="nk-divider divider md"></div>
                                        <div class="nk-block">
                                            <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                <h5 class="title">What you'll learn</h5>
                                            </div><!-- .nk-block-head -->
                                            <div class="bq-note">
                                                <div class="bq-note-item">
                                                    <div class="bq-note-text">
                                                        <p>Aproin at metus et dolor tincidunt feugiat eu id quam.
                                                            Pellentesque habitant morbi tristique senectus et netus et
                                                            malesuada fames ac turpis egestas. Aenean sollicitudin non nunc
                                                            vel pharetra. </p>
                                                    </div>
                                                    <div class="bq-note-meta">
                                                        <span class="bq-note-added">Added on <span class="date">November
                                                                18, 2019</span> at <span class="time">5:34
                                                                PM</span></span>
                                                        <span class="bq-note-sep sep">|</span>
                                                        <span class="bq-note-by">By <span>Softnio</span></span>
                                                        <a href="#" class="link link-sm link-danger">Delete Note</a>
                                                    </div>
                                                </div><!-- .bq-note-item -->
                                            </div><!-- .bq-note -->
                                        </div><!-- .nk-block -->
                                        <div class="nk-block">
                                            <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                <h5 class="title">Requirements</h5>
                                            </div><!-- .nk-block-head -->
                                            <div class="bq-note">
                                                <div class="bq-note-item">
                                                    <div class="bq-note-text">
                                                        <p>Aproin at metus et dolor tincidunt feugiat eu id quam.
                                                            Pellentesque habitant morbi tristique senectus et netus et
                                                            malesuada fames ac turpis egestas. Aenean sollicitudin non nunc
                                                            vel pharetra. </p>
                                                    </div>
                                                    <div class="bq-note-meta">
                                                        <span class="bq-note-added">Added on <span class="date">November
                                                                18, 2019</span> at <span class="time">5:34
                                                                PM</span></span>
                                                        <span class="bq-note-sep sep">|</span>
                                                        <span class="bq-note-by">By <span>Softnio</span></span>
                                                        <a href="#" class="link link-sm link-danger">Delete Note</a>
                                                    </div>
                                                </div><!-- .bq-note-item -->
                                            </div><!-- .bq-note -->
                                        </div><!-- .nk-block -->
                                        <div class="nk-block">
                                            <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                <h5 class="title">Description</h5>
                                            </div><!-- .nk-block-head -->
                                            <div class="bq-note">
                                                <div class="bq-note-item">
                                                    <div class="bq-note-text">
                                                        <p>Aproin at metus et dolor tincidunt feugiat eu id quam.
                                                            Pellentesque habitant morbi tristique senectus et netus et
                                                            malesuada fames ac turpis egestas. Aenean sollicitudin non nunc
                                                            vel pharetra. </p>
                                                    </div>
                                                    <div class="bq-note-meta">
                                                        <span class="bq-note-added">Added on <span class="date">November
                                                                18, 2019</span> at <span class="time">5:34
                                                                PM</span></span>
                                                        <span class="bq-note-sep sep">|</span>
                                                        <span class="bq-note-by">By <span>Softnio</span></span>
                                                        <a href="#" class="link link-sm link-danger">Delete Note</a>
                                                    </div>
                                                </div><!-- .bq-note-item -->
                                            </div><!-- .bq-note -->
                                        </div><!-- .nk-block -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card-content -->
                                <div class="card-aside card-aside-right user-aside toggle-slide toggle-slide-right toggle-break-xxl"
                                    data-content="userAside" data-toggle-screen="xxl" data-toggle-overlay="true"
                                    data-toggle-body="true">
                                    <div class="card-inner-group" data-simplebar>
                                        <div class="card-inner">
                                            <a href="{{ route('admin.lesson-detail') }}" class="text-decoration-none">
                                                <div class="card p-4 lesson">
                                                    <div class="row g-4 justify-content-between">
                                                        <div class="col-lg-6">
                                                            <h6 class="title" style="font-family: Georgia;">How to
                                                                Install Laravel</h6>
                                                        </div>
                                                        <div class="col-lg-6 text-end">
                                                            <span class="amount text-dark">1hr 20mins</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .card-aside -->
                            </div><!-- .card-aside-wrap -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div> --}}
@endsection
