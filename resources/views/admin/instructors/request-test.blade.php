@extends('admin.layout.master')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="{{ route('admin.instructors') }}"><em
                                            class="icon ni ni-arrow-left"></em><span>Instructors</span></a></div>
                                <h2 class="nk-block-title fw-normal">Become A Teacher Test</h2>
                            </div>
                        </div>
                        <div class="nk-block nk-block-lg">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h4 class="title nk-block-title">Harrison Ehiogu</h4>
                                </div>
                            </div>
                            <div class="card card-bordered card-preview">
                                <div class="card-inner">
                                    <div id="accordion" class="accordion">
                                        <div class="accordion-item">
                                            <a href="#" class="accordion-head" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-item-1">
                                                <h6 class="title">What is Dashlite?</h6>
                                                <span class="accordion-icon"></span>
                                            </a>
                                            <div class="accordion-body collapse show" id="accordion-item-1"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-inner">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-item-2">
                                                <h6 class="title">What are some of the benefits of receiving my bill
                                                    electronically?</h6>
                                                <span class="accordion-icon"></span>
                                            </a>
                                            <div class="accordion-body collapse" id="accordion-item-2"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-inner">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-item-3">
                                                <h6 class="title">What is the relationship between Dashlite and payment?
                                                </h6>
                                                <span class="accordion-icon"></span>
                                            </a>
                                            <div class="accordion-body collapse" id="accordion-item-3"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-inner">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea commodo consequat.</p>
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
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card-preview -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
