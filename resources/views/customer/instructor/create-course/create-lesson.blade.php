@extends('customer.layout.master')

@section('content')
    <div class=" rbt-style-guide-area rbt-section-gap">
        <div class="container">
            <div class="wrapper">
                <div class="section-title mt--30">
                    <h3 class="rbt-title-style-3">JavaScript Full Course</h3>
                    <h4 class="rbt-title-style-3">Create New Lesson</h4>
                </div>
                <div class="row g-5">

                    <div class="col-lg-6">
                        <h5>Lesson</h5>
                        <div class="form-group">
                            <input name="con_name" type="text">
                            <label>Lesson's Name</label>
                            <span class="focus-border"></span>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h5>Topic <a href="{{ route('instructor.create-topic') }}" class="btn btn-primary">New Topic</a></h5>
                        <div class="rbt-modern-select bg-transparent height-50 w-100">
                            <div class="dropdown bootstrap-select show-tick w-100">
                                <select class="w-100" data-live-search="true" title="Select Topic" multiple=""
                                    data-size="7" data-selected-text-format="count > 2">
                                    <option>Janin Afsana</option>
                                    <option>Joe Biden</option>
                                    <option>Fatima Asrafy</option>
                                    <option>Aysha Baby</option>
                                    <option>Mohamad Ali</option>
                                    <option>Jone Li</option>
                                    <option>Alberd Roce</option>
                                    <option>Zeliski Noor</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="course-field mb--20">
                            <h6>Lesson Video</h6>
                            <div class="rbt-create-course-thumbnail upload-area">
                                <div class="upload-area">
                                    <div class="brows-file-wrapper" data-black-overlay="9">
                                        <!-- actual upload which is hidden -->
                                        <input name="createinputfile" id="createinputfile" type="file"
                                            class="inputfile" />
                                        <img id="createfileImage"
                                            src="{{ asset('assets2/images/others/thumbnail-placeholder.svg') }}"
                                            alt="file image">
                                        <!-- our custom upload button -->
                                        <label class="d-flex" for="createinputfile">
                                            <i class="feather-upload"></i>
                                            <span class="text-center">Choose a File</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <h5>About Lesson</h5>
                        <div class="form-group">
                            <textarea></textarea>
                            <label>Lesson's Description</label>
                            <span class="focus-border"></span>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <a class="rbt-moderbt-btn" href="#">
                            <span class="moderbt-btn-text">Create Lesson</span>
                            <i class="feather-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-3">
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
