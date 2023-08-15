@extends('admin.layout.master')

@section('content')
    <div class="nk-content ">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Book Order Detail</h3>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="html/product-list.html"
                                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                        class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                <a href="html/product-list.html"
                                    class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                        class="icon ni ni-arrow-left"></em></a>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card">
                            <div class="card-inner">
                                <div class="nk-block">
                                    <div class="nk-block-head">
                                        <h5 class="title">Purchase Information</h5>
                                    </div><!-- .nk-block-head -->
                                    <div class="profile-ud-list">
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Customer</span>
                                                <span class="profile-ud-value">Abu Bin Ishtiyak</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Date</span>
                                                <span class="profile-ud-value">10 Aug, 1980</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Role</span>
                                                <span class="profile-ud-value">IO</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Purchased</span>
                                                <span class="profile-ud-value">01713040400</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Total</span>
                                                <span class="profile-ud-value">info@softnio.com</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Status</span>
                                                <span class="profile-ud-value">info@softnio.com</span>
                                            </div>
                                        </div>
                                    </div><!-- .profile-ud-list -->
                                </div><!-- .nk-block -->
                                <div class="nk-block mt-5">
                                    <div class="nk-block-head">
                                        <h5 class="title">Purchased Books - $500</h5>
                                    </div><!-- .nk-block-head -->
                                    <div class="row pb-5">
                                        <div class="col-lg-12">
                                            <div class="row g-gs">
                                                <div class="col-md-4">
                                                    <ul class="nav link-list-menu border border-light round m-0 p-4">
                                                        <li>
                                                            <a class="active" data-bs-toggle="tab" href="#tabItem13">The
                                                                Coven</a>
                                                        </li>
                                                        <li>
                                                            <a data-bs-toggle="tab" href="#tabItem14">Atlantis
                                                                Revelation</a>
                                                        </li>
                                                        <li>
                                                            <a data-bs-toggle="tab" href="#tabItem15">JavaScript Full
                                                                Course</a>
                                                        </li>
                                                        <li>
                                                            <a data-bs-toggle="tab" href="#tabItem16">Laravel For
                                                                Beginers</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tabItem13">
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <div class="product-gallery me-xl-1 me-xxl-5">
                                                                        <img src="{{ asset('images/product/lg-a.jpg') }}"
                                                                            alt="" class="rounded w-100">
                                                                    </div><!-- .product-gallery -->
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="product-meta">
                                                                        <ul class="g-3 gx-5">
                                                                            <li>
                                                                                <div class="fs-14px text-muted">Price</div>
                                                                                <div class="fs-16px fw-bold text-secondary">
                                                                                    $16.99</div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="fs-14px text-muted">Author</div>
                                                                                <div class="fs-16px fw-bold text-secondary">
                                                                                    The
                                                                                    Beastist</div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="fs-14px text-muted">Category
                                                                                </div>
                                                                                <div class="fs-16px fw-bold text-secondary">
                                                                                    Thriller</div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="fs-14px text-muted">Sales</div>
                                                                                <div class="fs-16px fw-bold text-secondary">
                                                                                    1,000</div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="fs-14px text-muted">Word Count
                                                                                </div>
                                                                                <div class="fs-16px fw-bold text-secondary">
                                                                                    70,000</div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="tabItem14">
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <div class="product-gallery me-xl-1 me-xxl-5">
                                                                        <img src="{{ asset('images/product/lg-g.jpg') }}"
                                                                            alt="" class="rounded w-100">
                                                                    </div><!-- .product-gallery -->
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="product-meta">
                                                                        <ul class="g-3 gx-5">
                                                                            <li>
                                                                                <div class="fs-14px text-muted">Author</div>
                                                                                <div class="fs-16px fw-bold text-secondary">
                                                                                    Robert Greene</div>
                                                                            </li>

                                                                            <li>
                                                                                <div class="fs-14px text-muted">Category
                                                                                </div>
                                                                                <div class="fs-16px fw-bold text-secondary">
                                                                                    Thriller</div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="fs-14px text-muted">Sales</div>
                                                                                <div
                                                                                    class="fs-16px fw-bold text-secondary">
                                                                                    1,000</div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="fs-14px text-muted">Word Count
                                                                                </div>
                                                                                <div
                                                                                    class="fs-16px fw-bold text-secondary">
                                                                                    70,000</div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="tabItem15">
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <div class="product-gallery me-xl-1 me-xxl-5">
                                                                        <img src="{{ asset('images/product/lg-d.jpg') }}"
                                                                            alt="" class="rounded w-100">
                                                                    </div><!-- .product-gallery -->
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="product-meta">
                                                                        <ul class="g-3 gx-5">
                                                                            <li>
                                                                                <div class="fs-14px text-muted">Author
                                                                                </div>
                                                                                <div
                                                                                    class="fs-16px fw-bold text-secondary">
                                                                                    Walter Rodney</div>
                                                                            </li>

                                                                            <li>
                                                                                <div class="fs-14px text-muted">Category
                                                                                </div>
                                                                                <div
                                                                                    class="fs-16px fw-bold text-secondary">
                                                                                    Non Fiction</div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="fs-14px text-muted">Sales</div>
                                                                                <div
                                                                                    class="fs-16px fw-bold text-secondary">
                                                                                    1,000</div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="fs-14px text-muted">Word Count
                                                                                </div>
                                                                                <div
                                                                                    class="fs-16px fw-bold text-secondary">
                                                                                    70,000</div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="tabItem16">
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <div class="product-gallery me-xl-1 me-xxl-5">
                                                                        <img src="{{ asset('images/product/lg-f.jpg') }}"
                                                                            alt="" class="rounded w-100">
                                                                    </div><!-- .product-gallery -->
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="product-meta">
                                                                        <ul class="g-3 gx-5">
                                                                            <li>
                                                                                <div class="fs-14px text-muted">Author
                                                                                </div>
                                                                                <div
                                                                                    class="fs-16px fw-bold text-secondary">
                                                                                    Karl Marx</div>
                                                                            </li>

                                                                            <li>
                                                                                <div class="fs-14px text-muted">Category
                                                                                </div>
                                                                                <div
                                                                                    class="fs-16px fw-bold text-secondary">
                                                                                    History</div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="fs-14px text-muted">Sales</div>
                                                                                <div
                                                                                    class="fs-16px fw-bold text-secondary">
                                                                                    1,000</div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="fs-14px text-muted">Word Count
                                                                                </div>
                                                                                <div
                                                                                    class="fs-16px fw-bold text-secondary">
                                                                                    70,000</div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .row -->
                                </div>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
