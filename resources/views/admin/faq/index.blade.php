@extends('admin.layout.master')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">FAQs</h3>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt">
                                                <a href="#" data-target="addProduct"
                                                    class="toggle btn btn-icon btn-primary d-md-none"><em
                                                        class="icon ni ni-plus"></em></a>
                                                <a href="#" data-target="addProduct"
                                                    class="toggle btn btn-primary d-none d-md-inline-flex"><em
                                                        class="icon ni ni-plus"></em><span>Add FAQ</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block mt-5">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <h4 style="font-family: Cambria;">Making Courses</h4>
                                    </div>
                                </div>
                                <div id="accordion" class="accordion">
                                    <div class="accordion-item">
                                        <a href="#" class="accordion-head" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-item-1">
                                            <h6 class="title">What is Dashlite?                                            
                                            </h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <button data-bs-toggle="modal" data-bs-target="#editFAQ" class="btn btn-primary float-end mx-4 btn-sm faq-edit">
                                            <em class="ni ni-edit-fill"></em>
                                            <small>Edit</small>
                                        </button>
                                        <div class="accordion-body collapse show" id="accordion-item-1"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-inner">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                    dolore eu
                                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                                    sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-item-2">
                                            <h6 class="title">What are some of the benefits of receiving my bill
                                                electronically?
                                            </h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <div class="accordion-body collapse" id="accordion-item-2"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-inner">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                    dolore eu
                                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                                    sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-item-3">
                                            <h6 class="title">What is the relationship between Dashlite and payment?</h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <div class="accordion-body collapse" id="accordion-item-3"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-inner">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                    dolore eu
                                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                                    sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-item-4">
                                            <h6 class="title">What are the benefits of using Dashlite?</h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <div class="accordion-body collapse" id="accordion-item-4"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-inner">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                    dolore eu
                                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                                    sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <h4 style="font-family: Cambria;">Payment & Refund</h4>
                                    </div>
                                </div>
                                <div id="accordion" class="accordion">
                                    <div class="accordion-item">
                                        <a href="#" class="accordion-head" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-item-a">
                                            <h6 class="title">What is Dashlite?</h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <div class="accordion-body collapse show" id="accordion-item-a"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-inner">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                    dolore eu
                                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                                    sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-item-2">
                                            <h6 class="title">What are some of the benefits of receiving my bill
                                                electronically?
                                            </h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <div class="accordion-body collapse" id="accordion-item-2"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-inner">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                    dolore eu
                                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                                    sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-item-3">
                                            <h6 class="title">What is the relationship between Dashlite and payment?</h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <div class="accordion-body collapse" id="accordion-item-3"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-inner">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                    dolore eu
                                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                                    sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-item-4">
                                            <h6 class="title">What are the benefits of using Dashlite?</h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <div class="accordion-body collapse" id="accordion-item-4"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-inner">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                    dolore eu
                                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                                    sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                    <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct"
                        data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">New FAQ</h5>
                                <div class="nk-block-des">
                                    <p>Add information and add new event.</p>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="product-title">FAQ Question</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="product-title">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-mb-6">
                                    <div class="form-group">
                                        <label class="form-label">Topic <a href="#" class="btn btn-primary btn-sm" style="font-size: 10px;">New Topic</a></label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2">
                                                <option value="security">Security</option>
                                                <option value="payment">Payment & Refund</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-mb-6">
                                    <div class="form-group">
                                        <label class="form-label" for="regular-price">FAQ Answer</label>
                                        <div class="form-control-wrap">
                                            <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add
                                            New</span></button>
                                </div>
                            </div>
                        </div><!-- .nk-block -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Content Code -->
<div class="modal fade" tabindex="-1" id="editFAQ">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Edit FAQ</h5>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label" for="product-title">FAQ Question</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="product-title">
                            </div>
                        </div>
                    </div>
                    <div class="col-mb-6">
                        <div class="form-group">
                            <label class="form-label">Topic <a href="#" class="btn btn-primary btn-sm" style="font-size: 10px;">New Topic</a></label>
                            <div class="form-control-wrap">
                                <select class="form-select js-select2">
                                    <option value="security">Security</option>
                                    <option value="payment">Payment & Refund</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-mb-6">
                        <div class="form-group">
                            <label class="form-label" for="regular-price">FAQ Answer</label>
                            <div class="form-control-wrap">
                                <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add
                                New</span></button>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text">&copy; Copyright, The Beastist. All rights reserved</span>
            </div>
        </div>
    </div>
</div>
@endsection
