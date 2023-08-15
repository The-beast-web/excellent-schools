@extends('admin.layout.master')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Student/ <strong class="text-primary small">Abu Bin
                                        Ishtiyak</strong></h3>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ route('admin.student.main') }}"
                                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                        class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                <a href="html/ecommerce/customers.html"
                                    class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                        class="icon ni ni-arrow-left"></em></a>
                            </div>
                        </div>

                    </div>
                    <div class="nk-block nk-block-lg">
                        <div class="card card-stretch">
                            <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#personal-info"><em
                                            class="icon ni ni-user-circle-fill"></em><span>Personal information</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile-courses"><em
                                            class="icon ni ni-book-fill"></em><span>Courses</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile-review"><em
                                            class="icon ni ni-star"></em><span>Review</span> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile-orders"><em
                                            class="icon ni ni-bag"></em><span>Orders</span> </a>
                                </li>
                                <li class="nav-item nav-item-trigger">
                                    <a href="#" class="btn btn-icon btn-trigger"><em class="icon ni ni-edit"></em></a>
                                </li>
                            </ul>
                            <div class="card-inner">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="personal-info">
                                        <div class="nk-block">
                                            <div class="profile-ud-list">
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Full Name</span>
                                                        <span class="profile-ud-value">Abu Bin Ishtiyak</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Date of Birth</span>
                                                        <span class="profile-ud-value">10 Aug, 1980</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Mobile Number</span>
                                                        <span class="profile-ud-value">+811 758-756433</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Skill/Occupation</span>
                                                        <span class="profile-ud-value">+811 758-756433</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Email Address</span>
                                                        <span class="profile-ud-value">info@softnio.com</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Status</span>
                                                        <span class="profile-ud-value">Mr.</span>
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
                                                        <span class="profile-ud-label">Joining Date</span>
                                                        <span class="profile-ud-value">08-16-2018 09:04PM</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Certificates</span>
                                                        <span class="profile-ud-value">08-16-2018 09:04PM</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Country</span>
                                                        <span class="profile-ud-value">United State</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Active Courses</span>
                                                        <span class="profile-ud-value">United State</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Total Courses</span>
                                                        <span class="profile-ud-value">United State</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Books Bought</span>
                                                        <span class="profile-ud-value">United State</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Event Tickets Bought</span>
                                                        <span class="profile-ud-value">United State</span>
                                                    </div>
                                                </div>
                                            </div><!-- .profile-ud-list -->
                                        </div><!-- .nk-block -->
                                        <div class="nk-divider divider md"></div>
                                        <div class="nk-block">
                                            <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                <h5 class="title">Biography</h5>
                                            </div><!-- .nk-block-head -->
                                            <div class="bq-note">
                                                <div class="bq-note-item">
                                                    <div class="bq-note-text">
                                                        <p>Aproin at metus et dolor tincidunt feugiat eu id quam.
                                                            Pellentesque habitant morbi tristique senectus et netus et
                                                            malesuada fames ac turpis egestas. Aenean sollicitudin non nunc
                                                            vel pharetra. </p>
                                                    </div>
                                                </div><!-- .bq-note-item -->
                                            </div><!-- .bq-note -->
                                        </div><!-- .nk-block -->
                                    </div><!-- tab pane -->
                                    <div class="tab-pane" id="profile-courses">
                                        <div class="nk-tb-list border border-light rounded overflow-hidden is-compact">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col">
                                                    <span class="lead-text">#</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="lead-text">Courses</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="lead-text">Lessons</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="lead-text d-none d-sm-inline">Status</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <span class="lead-text">&nbsp;</span>
                                                </div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col"> 1 </div>
                                                <div class="nk-tb-col"> Learn Android Development with project </div>
                                                <div class="nk-tb-col"> Learn Android Development with project </div>
                                                <div class="nk-tb-col">
                                                    <span class="badge badge-dot badge-dot-xs bg-success">Active</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li>
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-trigger me-n1"><em
                                                                    class="icon ni ni-trash-alt text-danger"></em></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col"> 2 </div>
                                                <div class="nk-tb-col"> Learn Android Development with project </div>
                                                <div class="nk-tb-col"> Learn Android Development with project </div>
                                                <div class="nk-tb-col">
                                                    <span class="badge badge-dot badge-dot-xs bg-warning">Pending</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li>
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-trigger me-n1"><em
                                                                    class="icon ni ni-trash-alt text-danger"></em></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col"> 3 </div>
                                                <div class="nk-tb-col"> Learn Android Development with project </div>
                                                <div class="nk-tb-col"> Learn Android Development with project </div>
                                                <div class="nk-tb-col">
                                                    <span class="badge badge-dot badge-dot-xs bg-danger">Canceled</span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li>
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-trigger me-n1"><em
                                                                    class="icon ni ni-trash-alt text-danger"></em></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--tab pane-->
                                    <div class="tab-pane" id="profile-review">
                                        <div class="nk-block">
                                            <div class="row">
                                                <div class="col-xxl-12">
                                                    <div class="card card-bordered">
                                                        <div class="card-inner border-bottom bg-lighter py-3">
                                                            <div class="d-flex align-center justify-content-between">
                                                                <div>
                                                                    <h5 class="title">Feature Quality <small style="font-size: 13px">Book</small></h5>
                                                                    <div class="d-sm-flex">
                                                                        <p class="m-0 pe-2">by <a href="#" class="text-capitalize">softnio</a></p>
                                                                        <span>6 days ago</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="rating">
                                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                                    <li><em class="icon ni ni-star-half-fill"></em></li>
                                                                    <li><em class="icon ni ni-star"></em></li>
                                                                </ul><!-- .rating -->
                                                            </div>
                                                        </div>
                                                        <div class="card-inner">
                                                            <p>I've been using Dashlite for months now and with every update, update it's just becoming more and more better it's just becoming better. Thank you for such a great design touch. Further I definitely cooperate with your product . Highly appriciate it.  Really love it</p>
                                                        </div>
                                                    </div><!-- .card -->
                                                    <div class="card card-bordered">
                                                        <div class="card-inner border-bottom bg-lighter py-3">
                                                            <div class="d-flex align-center justify-content-between">
                                                                <div>
                                                                    <h5 class="title">JavaScript Full Course <small style="font-size: 13px">Course</small></h5>
                                                                    <div class="d-sm-flex">
                                                                        <p class="m-0 pe-2">by <a href="#" class="text-capitalize">softnio</a></p>
                                                                        <span>6 days ago</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="rating">
                                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                                    <li><em class="icon ni ni-star-half-fill"></em></li>
                                                                    <li><em class="icon ni ni-star"></em></li>
                                                                </ul><!-- .rating -->
                                                            </div>
                                                        </div>
                                                        <div class="card-inner">
                                                            <p>I've been using Dashlite for months now and with every update, update it's just becoming more and more better it's just becoming better. Thank you for such a great design touch. Further I definitely cooperate with your product . Highly appriciate it.  Really love it</p>
                                                        </div>
                                                    </div><!-- .card -->
                                                    <div class="card card-bordered">
                                                        <div class="card-inner border-bottom bg-lighter py-3">
                                                            <div class="d-flex align-center justify-content-between">
                                                                <div>
                                                                    <h5 class="title">World Education Day <small style="font-size: 13px">Event</small></h5>
                                                                    <div class="d-sm-flex">
                                                                        <p class="m-0 pe-2">by <a href="#" class="text-capitalize">softnio</a></p>
                                                                        <span>6 days ago</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="rating">
                                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                                    <li><em class="icon ni ni-star-half-fill"></em></li>
                                                                    <li><em class="icon ni ni-star"></em></li>
                                                                </ul><!-- .rating -->
                                                            </div>
                                                        </div>
                                                        <div class="card-inner">
                                                            <p>I've been using Dashlite for months now and with every update, update it's just becoming more and more better it's just becoming better. Thank you for such a great design touch. Further I definitely cooperate with your product . Highly appriciate it.  Really love it</p>
                                                        </div>
                                                    </div><!-- .card -->
                                                    <div class="card card-bordered">
                                                        <div class="card-inner border-bottom bg-lighter py-3">
                                                            <div class="d-flex align-center justify-content-between">
                                                                <div>
                                                                    <h5 class="title">World Education Day <small style="font-size: 13px">Event</small></h5>
                                                                    <div class="d-sm-flex">
                                                                        <p class="m-0 pe-2">by <a href="#" class="text-capitalize">softnio</a></p>
                                                                        <span>6 days ago</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="rating">
                                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                                    <li><em class="icon ni ni-star-half-fill"></em></li>
                                                                    <li><em class="icon ni ni-star"></em></li>
                                                                </ul><!-- .rating -->
                                                            </div>
                                                        </div>
                                                        <div class="card-inner">
                                                            <p>I've been using Dashlite for months now and with every update, update it's just becoming more and more better it's just becoming better. Thank you for such a great design touch. Further I definitely cooperate with your product . Highly appriciate it.  Really love it</p>
                                                        </div>
                                                    </div><!-- .card -->
                                                    <div class="card card-bordered">
                                                        <div class="card-inner border-bottom bg-lighter py-3">
                                                            <div class="d-flex align-center justify-content-between">
                                                                <div>
                                                                    <h5 class="title">World Education Day <small style="font-size: 13px">Event</small></h5>
                                                                    <div class="d-sm-flex">
                                                                        <p class="m-0 pe-2">by <a href="#" class="text-capitalize">softnio</a></p>
                                                                        <span>6 days ago</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="rating">
                                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                                    <li><em class="icon ni ni-star-half-fill"></em></li>
                                                                    <li><em class="icon ni ni-star"></em></li>
                                                                </ul><!-- .rating -->
                                                            </div>
                                                        </div>
                                                        <div class="card-inner">
                                                            <p>I've been using Dashlite for months now and with every update, update it's just becoming more and more better it's just becoming better. Thank you for such a great design touch. Further I definitely cooperate with your product . Highly appriciate it.  Really love it</p>
                                                        </div>
                                                    </div><!-- .card -->
                                                    <div class="card card-bordered">
                                                        <div class="card-inner border-bottom bg-lighter py-3">
                                                            <div class="d-flex align-center justify-content-between">
                                                                <div>
                                                                    <h5 class="title">World Education Day <small style="font-size: 13px">Event</small></h5>
                                                                    <div class="d-sm-flex">
                                                                        <p class="m-0 pe-2">by <a href="#" class="text-capitalize">softnio</a></p>
                                                                        <span>6 days ago</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="rating">
                                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                                    <li><em class="icon ni ni-star-fill"></em></li>
                                                                    <li><em class="icon ni ni-star-half-fill"></em></li>
                                                                    <li><em class="icon ni ni-star"></em></li>
                                                                </ul><!-- .rating -->
                                                            </div>
                                                        </div>
                                                        <div class="card-inner">
                                                            <p>I've been using Dashlite for months now and with every update, update it's just becoming more and more better it's just becoming better. Thank you for such a great design touch. Further I definitely cooperate with your product . Highly appriciate it.  Really love it</p>
                                                        </div>
                                                    </div><!-- .card -->
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--tab pane-->
                                    <div class="tab-pane" id="profile-orders">
                                        <div class="card-inner">
                                            <div class="nk-block">
                                                <div class="row g-gs">
                                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                                        <div class="card card-bordered product-card">
                                                            <div class="product-thumb">
                                                                <a href="html/product-details.html">
                                                                    <img class="card-img-top"
                                                                        src="./images/product/lg-a.jpg" alt="">
                                                                </a>
                                                                <ul class="product-badges">
                                                                    <li><span class="badge bg-success">New</span></li>
                                                                </ul>
                                                                <ul class="product-actions">
                                                                    <li><a href="{{ route('admin.book-detail') }}"><em
                                                                                class="icon ni ni-eye"></em></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="card-inner text-center">
                                                                <ul class="product-tags">
                                                                    <li>Smart Watch</li>
                                                                </ul>
                                                                <h5 class="product-title">Classy Modern Smart watch</h5>
                                                                <div class="product-price text-primary h5"><small
                                                                        class="text-muted del fs-13px">$350</small> $324
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                                        <div class="card card-bordered product-card">
                                                            <div class="product-thumb">
                                                                <a href="html/product-details.html">
                                                                    <img class="card-img-top"
                                                                        src="./images/product/lg-b.jpg" alt="">
                                                                </a>
                                                                <ul class="product-actions">
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-cart"></em></a></li>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-heart"></em></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="card-inner text-center">
                                                                <ul class="product-tags">
                                                                    <li><a href="#">Vintage Phone</a></li>
                                                                </ul>
                                                                <h5 class="product-title"><a
                                                                        href="html/product-details.html">White Vintage
                                                                        telephone</a></h5>
                                                                <div class="product-price text-primary h5"><small
                                                                        class="text-muted del fs-13px">$209</small> $119
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                                        <div class="card card-bordered product-card">
                                                            <div class="product-thumb">
                                                                <a href="html/product-details.html">
                                                                    <img class="card-img-top"
                                                                        src="./images/product/lg-c.jpg" alt="">
                                                                </a>
                                                                <ul class="product-badges">
                                                                    <li><span class="badge bg-danger">Hot</span></li>
                                                                </ul>
                                                                <ul class="product-actions">
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-cart"></em></a></li>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-heart"></em></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="card-inner text-center">
                                                                <ul class="product-tags">
                                                                    <li><a href="#">Headphone</a></li>
                                                                </ul>
                                                                <h5 class="product-title"><a
                                                                        href="html/product-details.html">Black Wireless
                                                                        Headphones</a></h5>
                                                                <div class="product-price text-primary h5"><small
                                                                        class="text-muted del fs-13px">$129</small> $89
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                                        <div class="card card-bordered product-card">
                                                            <div class="product-thumb">
                                                                <a href="html/product-details.html">
                                                                    <img class="card-img-top"
                                                                        src="./images/product/lg-d.jpg" alt="">
                                                                </a>
                                                                <ul class="product-actions">
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-cart"></em></a></li>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-heart"></em></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="card-inner text-center">
                                                                <ul class="product-tags">
                                                                    <li><a href="#">Smart Watch</a></li>
                                                                </ul>
                                                                <h5 class="product-title"><a
                                                                        href="html/product-details.html">Modular Smart
                                                                        Watch</a></h5>
                                                                <div class="product-price text-primary h5"><small
                                                                        class="text-muted del fs-13px">$169</small> $120
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                                        <div class="card card-bordered product-card">
                                                            <div class="product-thumb">
                                                                <a href="html/product-details.html">
                                                                    <img class="card-img-top"
                                                                        src="./images/product/lg-e.jpg" alt="">
                                                                </a>
                                                                <ul class="product-actions">
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-cart"></em></a></li>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-heart"></em></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="card-inner text-center">
                                                                <ul class="product-tags">
                                                                    <li><a href="#">Headphones</a></li>
                                                                </ul>
                                                                <h5 class="product-title"><a
                                                                        href="html/product-details.html">White Wireless
                                                                        Headphones</a></h5>
                                                                <div class="product-price text-primary h5"><small
                                                                        class="text-muted del fs-13px">$109</small> $78
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                                        <div class="card card-bordered product-card">
                                                            <div class="product-thumb">
                                                                <a href="html/product-details.html">
                                                                    <img class="card-img-top"
                                                                        src="./images/product/lg-f.jpg" alt="">
                                                                </a>
                                                                <ul class="product-actions">
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-cart"></em></a></li>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-heart"></em></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="card-inner text-center">
                                                                <ul class="product-tags">
                                                                    <li><a href="#">Phone</a></li>
                                                                </ul>
                                                                <h5 class="product-title"><a
                                                                        href="html/product-details.html">Black Android
                                                                        Phone</a></h5>
                                                                <div class="product-price text-primary h5">$329</div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                                        <div class="card card-bordered product-card">
                                                            <div class="product-thumb">
                                                                <a href="html/product-details.html">
                                                                    <img class="card-img-top"
                                                                        src="./images/product/lg-h.jpg" alt="">
                                                                </a>
                                                                <ul class="product-actions">
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-cart"></em></a></li>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-heart"></em></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="card-inner text-center">
                                                                <ul class="product-tags">
                                                                    <li><a href="#">Smart Watch</a></li>
                                                                </ul>
                                                                <h5 class="product-title"><a
                                                                        href="html/product-details.html">Modern Smart
                                                                        watch</a></h5>
                                                                <div class="product-price text-primary h5"><small
                                                                        class="text-muted del fs-13px">$200</small> $178
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                                        <div class="card card-bordered product-card">
                                                            <div class="product-thumb">
                                                                <a href="html/product-details.html">
                                                                    <img class="card-img-top"
                                                                        src="./images/product/lg-g.jpg" alt="">
                                                                </a>
                                                                <ul class="product-badges">
                                                                    <li><span class="badge bg-danger">Hot</span></li>
                                                                </ul>
                                                                <ul class="product-actions">
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-cart"></em></a></li>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-heart"></em></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="card-inner text-center">
                                                                <ul class="product-tags">
                                                                    <li><a href="#">Bundle</a></li>
                                                                </ul>
                                                                <h5 class="product-title"><a
                                                                        href="html/product-details.html">Gadget Bundle</a>
                                                                </h5>
                                                                <div class="product-price text-primary h5"><small
                                                                        class="text-muted del fs-13px">$609</small> $498
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                </div>
                                            </div><!-- .nk-block -->
                                        </div><!-- .card-inner -->
                                    </div>
                                </div><!--tab content-->
                            </div><!--card inner-->
                        </div><!--card-->
                    </div><!--nk block lg-->
                </div>
            </div>
        </div>
    </div>
@endsection