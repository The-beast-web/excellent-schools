@extends('admin.layout.master')

@section('content')
<div class="nk-content ">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Book Details</h3> 
                        </div>
                        <div class="nk-block-head-content">
                            <a href="{{ route('admin.books') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                            <a href="html/product-list.html" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card">
                        <div class="card-inner">
                            <div class="row pb-5">
                                <div class="col-lg-6">
                                    <div class="product-gallery me-xl-1 me-xxl-5">
                                        <div class="slider-init" id="sliderFor" data-slick='{"arrows": false, "fade": true, "asNavFor":"#sliderNav", "slidesToShow": 1, "slidesToScroll": 1}'>
                                            <div class="slider-item rounded">
                                                <img src="./images/product/lg-a.jpg" class="rounded w-100" alt="">
                                            </div>
                                            <div class="slider-item rounded">
                                                <img src="./images/product/lg-g.jpg" class="rounded w-100" alt="">
                                            </div>
                                            <div class="slider-item rounded">
                                                <img src="./images/product/lg-a.jpg" class="rounded w-100" alt="">
                                            </div>
                                        </div><!-- .slider-init -->
                                        <div class="slider-init slider-nav" id="sliderNav" data-slick='{"arrows": false, "slidesToShow": 5, "slidesToScroll": 1, "asNavFor":"#sliderFor", "centerMode":true, "focusOnSelect": true, 
                "responsive":[ {"breakpoint": 1539,"settings":{"slidesToShow": 4}}, {"breakpoint": 768,"settings":{"slidesToShow": 3}}, {"breakpoint": 420,"settings":{"slidesToShow": 2}} ]
            }'>
                                            <div class="slider-item">
                                                <div class="thumb">
                                                    <img src="./images/product/lg-a.jpg" class="rounded" alt="">
                                                </div>
                                            </div>
                                            <div class="slider-item">
                                                <div class="thumb">
                                                    <img src="./images/product/lg-g.jpg" class="rounded" alt="">
                                                </div>
                                            </div>
                                            <div class="slider-item">
                                                <div class="thumb">
                                                    <img src="./images/product/lg-d.jpg" class="rounded" alt="">
                                                </div>
                                            </div>
                                        </div><!-- .slider-nav -->
                                    </div><!-- .product-gallery -->
                                </div><!-- .col -->
                                <div class="col-lg-6">
                                    <div class="product-info mt-5 me-xxl-5">
                                        <h4 class="product-price text-primary">$78.00 <small class="text-muted fs-14px">$98.00</small></h4>
                                        <h2 class="product-title">Classy Modern Smart watch</h2>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li><em class="icon ni ni-star-fill"></em></li>
                                                <li><em class="icon ni ni-star-fill"></em></li>
                                                <li><em class="icon ni ni-star-fill"></em></li>
                                                <li><em class="icon ni ni-star-fill"></em></li>
                                                <li><em class="icon ni ni-star-half"></em></li>
                                            </ul>
                                            <div class="amount">(2 Reviews)</div>
                                        </div><!-- .product-rating -->
                                        <div class="product-excrept text-soft">
                                            <p class="lead">I must explain to you how all this mistaken idea of denoun cing ple praising pain was born and I will give you a complete account of the system, and expound the actual teaching.</p>
                                        </div>
                                        <div class="product-meta">
                                            <ul class="g-3 gx-5">
                                                <li>
                                                    <div class="fs-14px text-muted">Author</div>
                                                    <div class="fs-16px fw-bold text-secondary">The Beastist</div>
                                                </li>
                                                
                                                <li>
                                                    <div class="fs-14px text-muted">Category</div>
                                                    <div class="fs-16px fw-bold text-secondary">Thriller</div>
                                                </li>
                                                <li>
                                                    <div class="fs-14px text-muted">Sales</div>
                                                    <div class="fs-16px fw-bold text-secondary">1,000</div>
                                                </li>
                                                <li>
                                                    <div class="fs-14px text-muted">Word Count</div>
                                                    <div class="fs-16px fw-bold text-secondary">70,000</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .product-info -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <hr class="hr border-light">
                            <div class="row g-gs flex-lg-row-reverse pt-5">
                                <div class="col-lg-12">
                                    <div class="product-details entry me-xxl-3">
                                        <h3>Description</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem consectetur, adipisci velit.Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
                                        <ul class="list list-sm list-checked">
                                            <li>Meets and/or exceeds performance standards.</li>
                                            <li>Liumbar support.</li>
                                            <li>Made of bonded teather and poiyurethane.</li>
                                            <li>Metal frame.</li>
                                            <li>Anatomically shaped cork-latex</li>
                                            <li>As attractively priced as you look attractive in one</li>
                                        </ul>
                                        <p>Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                                        <h3>Reviews</h3>
                                        <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings. Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                                    </div>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div>
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection