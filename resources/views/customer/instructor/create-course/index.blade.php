@extends('customer.layout.master')

@section('content')
<main class="rbt-main-wrapper">

    <div class="rbt-create-course-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-8">
                    <div class="rbt-accordion-style rbt-accordion-01 rbt-accordion-06 accordion">
                        <div class="accordion" id="tutionaccordionExamplea1">
                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="accOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accCollapseOne" aria-expanded="true" aria-controls="accCollapseOne">Course Info
                                    </button>
                                </h2>
                                <div id="accCollapseOne" class="accordion-collapse collapse show" aria-labelledby="accOne" data-bs-parent="#tutionaccordionExamplea1">
                                    <div class="accordion-body card-body">
                                        <!-- Start Course Field Wrapper  -->
                                        <div class="rbt-course-field-wrapper rbt-default-form">
                                            <div class="course-field mb--15">
                                                <label for="field-1">Course Title</label>
                                                <input id="field-1" type="text" placeholder="New Course">
                                                <small class="d-block mt_dec--5"><i class="feather-info"></i> Title should be 30 charecter.</small>
                                            </div>
                                            <div class="course-field mb--15">
                                                <label for="field-2">Course Slug</label>
                                                <input id="field-2" type="text" placeholder="new-course">
                                                <small class="d-block mt_dec--5"><i class="feather-info"></i> Permalink: <a href="https://yourdomain.com/new-course">https://yourdomain.com/new-course</a></small>
                                            </div>

                                            <div class="course-field mb--15">
                                                <label for="aboutCourse">Course Description</label>
                                                <textarea id="aboutCourse" rows="10"></textarea>
                                                <small class="d-block mt_dec--5"><i class="feather-info"></i> HTML or plain text allowed, no emoji This field is used for search, so please be descriptive!</small>
                                            </div>

                                            <div class="course-field mb--15">
                                                <label for="field-4">
                                                    Level</label>
                                                <div class="rbt-modern-select bg-transparent height-45 mb--10">
                                                    <select class="w-100" id="field-4">
                                                        <option>All Levels</option>
                                                        <option>Intermediate</option>
                                                        <option>Beginner</option>
                                                        <option>Advance</option>
                                                        <option>Expert</option>
                                                    </select>
                                                </div>
                                                <small><i class="feather-info"></i> Course
                                                    difficulty level</small>
                                            </div>
                                            <div class="course-field mb--15 edu-bg-gray">
                                                <h6>Course Price</h6>
                                                <div class="rbt-course-settings-content">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="advance-tab-button advance-tab-button-1">
                                                                <ul class="rbt-default-tab-button nav nav-tabs" id="coursePrice" role="tablist">
                                                                    <li class="nav-item w-100" role="presentation">
                                                                        <a href="#" class="active" id="paid-tab" data-bs-toggle="tab" data-bs-target="#paid" role="tab" aria-controls="paid" aria-selected="true">
                                                                            <span>Paid</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item w-100" role="presentation">
                                                                        <a href="#" id="free-tab" data-bs-toggle="tab" data-bs-target="#free" role="tab" aria-controls="free" aria-selected="false">
                                                                            <span>Free</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="tab-content">

                                                                <div class="tab-pane fade advance-tab-content-1 active show" id="paid" role="tabpanel" aria-labelledby="paid-tab">

                                                                    <div class="course-field mb--15">
                                                                        <label for="regularPrice-1">Regular Price ($)</label>
                                                                        <input id="regularPrice-1" type="number" placeholder="$ Regular Price">
                                                                        <small class="d-block mt_dec--5"><i class="feather-info"></i> The Course Price Includes Your Author Fee.</small>
                                                                    </div>

                                                                    <div class="course-field mb--15">
                                                                        <label for="discountedPrice-1">Discounted Price ($)</label>
                                                                        <input id="discountedPrice-1" type="number" placeholder="$ Discounted Price">
                                                                        <small class="d-block mt_dec--5"><i class="feather-info"></i> The Course Price Includes Your Author Fee.</small>
                                                                    </div>

                                                                </div>


                                                                <div class="tab-pane fade advance-tab-content-1" id="free" role="tabpanel" aria-labelledby="free-tab">
                                                                    <div class="course-field">
                                                                        <p class="b3">This Course is free for everyone.</p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="course-field mb--20">
                                                <h6>Choose Categories</h6>
                                                <div class="rbt-modern-select bg-transparent height-45 w-100 mb--10">
                                                    <select class="w-100" data-live-search="true" title="Search Course Category. ex. Design, Development, Business" data-actions-box="true" multiple data-size="7" data-selected-text-format="count > 2">
                                                        <option>Web Developer</option>
                                                        <option>App Developer</option>
                                                        <option>Javascript</option>
                                                        <option>React</option>
                                                        <option>WordPress</option>
                                                        <option>jQuery</option>
                                                        <option>Vue Js</option>
                                                        <option>Angular</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="course-field mb--20">
                                                <h6>Course Thumbnail</h6>
                                                <div class="rbt-create-course-thumbnail upload-area">
                                                    <div class="upload-area">
                                                        <div class="brows-file-wrapper" data-black-overlay="9">
                                                            <!-- actual upload which is hidden -->
                                                            <input name="createinputfile" id="createinputfile" type="file" class="inputfile" />
                                                            <img id="createfileImage" src="{{ asset('assets2/images/others/thumbnail-placeholder.svg') }}" alt="file image">
                                                            <!-- our custom upload button -->
                                                            <label class="d-flex" for="createinputfile">
                                                                <i class="feather-upload"></i>
                                                                <span class="text-center">Choose a File</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <small><i class="feather-info"></i> <b>Size:</b> 700x430 pixels, <b>File
                                                    Support:</b> JPG, JPEG, PNG, GIF, WEBP</small>
                                            </div>


                                        </div>
                                        <!-- End Course Field Wrapper  -->
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="accTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accCollapseTwo" aria-expanded="false" aria-controls="accCollapseTwo">
                                        Course Intro Video
                                    </button>
                                </h2>
                                <div id="accCollapseTwo" class="accordion-collapse collapse" aria-labelledby="accTwo" data-bs-parent="#tutionaccordionExamplea1">
                                    <div class="accordion-body card-body rbt-course-field-wrapper rbt-default-form">

                                        <div class="course-field mb--20">
                                            <div class="rbt-modern-select bg-transparent height-45 mb--10">
                                                <select class="w-100" id="field-5">
                                                    <option value="Youtube">Youtube</option>
                                                    <option value="Vimeo">Vimeo</option>
                                                    <option value="Local">Local</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="course-field mb--15 myDiv default" id="showYoutube">
                                            <label for="videoUrl">Add Your Youtube URL</label>
                                            <input id="videoUrl" type="text" placeholder="Add Your Video URL here.">
                                            <small class="d-block mt_dec--5">Example: <a href="https://www.youtube.com/watch?v=yourvideoid">https://www.youtube.com/watch?v=yourvideoid</a></small>
                                        </div>

                                        <div class="course-field mb--15 myDiv" id="showVimeo">
                                            <label for="videoUrl">Add Your Vimeo URL</label>
                                            <input id="videoUrl" type="text" placeholder="Add Your Video URL here.">
                                            <small class="d-block mt_dec--5">Example: <a href="https://www.youtube.com/watch?v=yourvideoid">https://www.youtube.com/watch?v=yourvideoid</a></small>
                                        </div>

                                        <div class="course-field mb--15 myDiv" id="showLocal">
                                            <h6>Upload Video</h6>
                                            <div class="rbt-create-course-thumbnail upload-area">
                                                <div class="upload-area">
                                                    <div class="brows-file-wrapper" data-black-overlay="9">
                                                        <!-- actual upload which is hidden -->
                                                        <input name="createinputfile" id="createinputfile" type="file" class="inputfile" />
                                                        <img id="createfileImage" src="{{ asset('assets2/images/others/thumbnail-placeholder.svg') }}" alt="file image">
                                                        <!-- our custom upload button -->
                                                        <label class="d-flex" for="createinputfile">
                                                            <i class="feather-upload"></i>
                                                            <span class="text-center">Choose a File</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <small><i class="feather-info"></i> <b>Size:</b> 700x430 pixels, <b>File
                                                Support:</b> JPG, JPEG, PNG, GIF, WEBP</small>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item card rbt-course-field-wrapper">
                                <h2 class="accordion-header card-header" id="accSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accCollapseSix" aria-expanded="false" aria-controls="accCollapseSix">
                                        Additional Information
                                    </button>
                                </h2>
                                <div id="accCollapseSix" class="accordion-collapse collapse" aria-labelledby="accSix" data-bs-parent="#tutionaccordionExamplea1">
                                    <div class="accordion-body card-body rbt-course-field-wrapper rbt-default-form row row-15">

                                        <div class="col-lg-6">
                                            <div class="course-field mb--15">
                                                <label for="startDate">Start Date</label>
                                                <input type="date" id="startDate" name="startDate">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="course-field mb--15">
                                                <label for="language">Language</label>
                                                <div class="rbt-modern-select bg-transparent height-50 mb--10">
                                                    <select class="w-100" data-live-search="true" title="English" multiple data-size="7" data-actions-box="true" data-selected-text-format="count > 2" id="language">
                                                        <option>English</option>
                                                        <option>Bangla</option>
                                                        <option>Japan</option>
                                                        <option>Hindi</option>
                                                        <option>Frence</option>
                                                        <option>Garmani</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-12">
                                            <hr class="mt--10 mb--20">
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="course-field mb--15">
                                                <label>Total Course Duration</label>
                                                <div class="row row--15">
                                                    <div class="col-lg-6">
                                                        <input type="number" placeholder="00">
                                                        <small class="d-block mt_dec--5"><i class="feather-info"></i> Hour.</small>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="number" placeholder="00">
                                                        <small class="d-block mt_dec--5"><i class="feather-info"></i> Minute.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mt--10 row g-5">
                        <div class="col-lg-12">
                            <a class="rbt-btn btn-gradient hover-icon-reverse w-100 text-center" href="#">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Create Course</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="rbt-create-course-sidebar course-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
                        <div class="inner">
                            <div class="section-title mb--30">
                                <h4 class="title">Course Upload Tips</h4>
                            </div>
                            <div class="rbt-course-upload-tips">
                                <ul class="rbt-list-style-1">
                                    <li><i class="feather-check"></i> Set the Course Price option or make it free.
                                    </li>
                                    <li><i class="feather-check"></i> Standard size for the course thumbnail is
                                        700x430.</li>
                                    <li><i class="feather-check"></i> Video section controls the course overview
                                        video.</li>
                                    <li><i class="feather-check"></i> Course Builder is where you create & organize
                                        a course.</li>
                                    <li><i class="feather-check"></i> Add Topics in the Course Builder section to
                                        create lessons, quizzes, and assignments.</li>
                                    <li><i class="feather-check"></i> Prerequisites refers to the fundamental
                                        courses to complete before taking this particular course.</li>
                                    <li><i class="feather-check"></i> Information from the Additional Data section
                                        shows up on the course single page.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Modal Area  -->
    <div class="rbt-default-modal modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close">
                        <i class="feather-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="inner rbt-default-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="modal-title mb--20" id="exampleModalLabel">Add Topic</h5>
                                <div class="course-field mb--20">
                                    <label for="modal-field-1">Topic Name</label>
                                    <input id="modal-field-1" type="text">
                                    <small><i class="feather-info"></i> Topic titles are displayed publicly wherever required. Each topic may contain one or more lessons, quiz and assignments.</small>
                                </div>
                                <div class="course-field mb--20">
                                    <label for="modal-field-2">Topic Summary</label>
                                    <textarea id="modal-field-2"></textarea>
                                    <small><i class="feather-info"></i> Add a summary of short text to prepare students for the activities for the topic. The text is shown on the course page beside the tooltip beside the topic name.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-circle-shape"></div>
                <div class="modal-footer pt--30">
                    <button type="button" class="rbt-btn btn-border btn-md radius-round-10" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Area  -->
</main>
@endsection