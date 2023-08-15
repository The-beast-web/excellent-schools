@extends('customer.layout.master')

@section('content')
    <div class=" rbt-style-guide-area rbt-section-gap">
        <div class="container">
            <div class="wrapper">
                <div class="section-title mt--30">
                    <h4 class="rbt-title-style-3">JavaScript Full Course</h4>
                    <h4 class="rbt-title-style-3">Create New Topic</h4>
                </div>
                <div class="row g-5 justify-content-center">

                    <div class="col-lg-12">
                        <h5 class="mt-4">Topic</h5>
                        <div class="form-group">
                            <input name="con_name" type="text">
                            <label>Topic's Name</label>
                            <span class="focus-border"></span>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <a class="rbt-moderbt-btn" href="#">
                            <span class="moderbt-btn-text">Create Topic</span>
                            <i class="feather-arrow-right"></i>
                        </a>
                    </div>

                    <div class="col-lg-9">
                        <a class="rbt-moderbt-btn" href="{{ route('instructor.course-manager') }}">
                            <i class="feather-arrow-left"></i>
                            <span class="moderbt-btn-text">Go Back</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection