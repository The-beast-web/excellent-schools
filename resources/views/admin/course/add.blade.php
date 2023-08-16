@extends('admin.layout.master')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="{{ route('admin.courses') }}"><em
                                            class="icon ni ni-arrow-left"></em><span>Courses</span></a></div>
                                <h2 class="nk-block-title fw-normal">Create Course</h2>
                            </div>
                        </div>
                        <div class="nk-block nk-block-lg">
                            <div class="card card-bordered card-preview">
                                <div class="card-inner">
                                    <div id="accordion-1" class="accordion accordion-s2">
                                        <div class="accordion-item">
                                            <a href="#" class="accordion-head" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-item-1-1">
                                                <h6 class="title">Course Info</h6>
                                                <span class="accordion-icon"></span>
                                            </a>
                                            <div class="accordion-body collapse show" id="accordion-item-1-1"
                                                data-bs-parent="#accordion-1">
                                                <div class="accordion-inner">
                                                    <div class="row g-4">
                                                        <div class="col-xxl-6">
                                                            <div class="form-group">
                                                                <label for="title" class="form-label">Course
                                                                    Title</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="New Course">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-6">
                                                            <div class="form-group">
                                                                <label for="title" class="form-label">Course Slug</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="new-course">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-12">
                                                            <div class="form-group">
                                                                <label for="title" class="form-label">Course
                                                                    Description</label>
                                                                <div class="form-control-wrap">
                                                                    <textarea name="" class="form-control" id="" cols="30" rows="10" placeholder="Hello World!"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Level</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2">
                                                                        <option value="begineer">Begineer</option>
                                                                        <option value="intermediate">Intermediate</option>
                                                                        <option value="advanced">Advanced</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Category</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2">
                                                                        <option value="web-development">Web Development
                                                                        </option>
                                                                        <option value="graphics-design">Graphics Design
                                                                        </option>
                                                                        <option value="cloud-computing">Cloud Computing
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-6 price">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-03">Regular
                                                                    Price</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-sign-kobo"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control"
                                                                        id="default-03" placeholder="00.00">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-6 price">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-03">Discounted
                                                                    Price</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-sign-kobo"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control"
                                                                        id="default-03" placeholder="00.00">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="customCheck1">
                                                                    <label class="custom-control-label"
                                                                        for="customCheck1">Free Course</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="" class="form-label">Course
                                                                    Thumbnail</label>
                                                                <div class="upload-zone">
                                                                    <div class="dz-message" data-dz-message>
                                                                        <span class="dz-message-text">
                                                                            Drag and drop file
                                                                        </span>
                                                                        <span class="dz-message-or">or</span>
                                                                        <button class="btn btn-primary">SELECT</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-item-1-2">
                                                <h6 class="title">Course Intro Video</h6>
                                                <span class="accordion-icon"></span>
                                            </a>
                                            <div class="accordion-body collapse" id="accordion-item-1-2"
                                                data-bs-parent="#accordion-1">
                                                <div class="accordion-inner">
                                                    <div class="row g-4">
                                                        <div class="col-xxl-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Video Source</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2"
                                                                        id="myselection">
                                                                        <option value="One">
                                                                            Youtube
                                                                        </option>
                                                                        <option value="Two">
                                                                            Vimeo
                                                                        </option>
                                                                        <option value="Three">
                                                                            Local
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-12 myDiv" id="showOne">
                                                            <div class="form-group">
                                                                <label class="form-label">Youtube URL</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="e.g https://www.youtube.com/watch?v=yourvideoid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-12 myDiv" id="showTwo">
                                                            <div class="form-group">
                                                                <label class="form-label">Vimeo URL</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="e.g https://www.youtube.com/watch?v=yourvideoid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 myDiv" id="showThree">
                                                            <div class="form-group">
                                                                <label for="" class="form-label">
                                                                    Upload Video</label>
                                                                <div class="upload-zone">
                                                                    <div class="dz-message" data-dz-message>
                                                                        <span class="dz-message-text">
                                                                            Drag and drop file
                                                                        </span>
                                                                        <span class="dz-message-or">or</span>
                                                                        <button class="btn btn-primary">SELECT</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-item-1-3">
                                                <h6 class="title">Additional Information</h6>
                                                <span class="accordion-icon"></span>
                                            </a>
                                            <div class="accordion-body collapse" id="accordion-item-1-3"
                                                data-bs-parent="#accordion-1">
                                                <div class="accordion-inner">
                                                    <div class="row g-4">
                                                        <div class="col-xxl-6">
                                                            <div class="form-group">
                                                                <label for="" class="form-label">Start
                                                                    Date</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text"
                                                                        class="form-control date-picker">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-6">
                                                            <div class="form-group" data-select2-id="13">
                                                                <label class="form-label">Language</label>
                                                                <div class="form-control-wrap" data-select2-id="12">
                                                                    <select class="form-select js-select2 select2-hidden-accessible" data-search="on" data-select2-id="6" tabindex="-1" aria-hidden="true">
                                                                        <option value="english">English</option>
                                                                        <option value="igbo">Igbo</option>
                                                                        <option value="french">French</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-12">
                                                            <div class="form-group">
                                                                <label for="" class="form-label">Total Course Duration</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" placeholder="00hr">
                                                                        <input type="text" class="form-control" placeholder="00mins">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card-preview -->
                            <div class="text-center mt-4">
                                <button class="btn btn-primary p-4" style="border-radius: 50px;">Create Course <em class="ni ni-arrow-right"></em></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
