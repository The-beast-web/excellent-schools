@extends('admin.layout.master')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Course Builder / <strong
                                        class="text-primary small">Javascript Full Course</strong></h3>
                            </div>
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt">
                                                <a href="{{ route('admin.course-builder.main') }}"
                                                    class="btn btn-icon btn-primary d-md-none"><em
                                                        class="icon ni ni-arrow-left"></em></a>
                                                <a href="{{ route('admin.course-builder.main') }}"
                                                    class="btn btn-primary d-none d-md-inline-flex"><em
                                                        class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card">
                            <div class="card-aside-wrap">
                                <div class="card-content">
                                    <div class="nk-block">
                                        <div class="nk-block-head-content p-4">
                                            <h4 style="font-family: Cambria;">Create Lesson</h4>
                                        </div>
                                    </div>
                                            <div class="card-inner">
                                                <div class="nk-block">
                                             <div class="row g-4">
                                                <div class="col-xxl-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Lesson</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" placeholder="Lesson's Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Topic <a href="#new-topic" data-bs-toggle="modal" class="btn btn-primary btn-sm" style="font-size: 10px; height: 20px">New Topic</a></label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select js-select2" data-search="on">
                                                                <option value="web">Web Development</option>
                                                                <option value="web2">Web Design</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Lesson Video Source</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select js-select2" id="myselection">
                                                                <option value="Youtube">Youtube</option>
                                                                <option value="Vimeo">Vimeo</option>
                                                                <option value="Local">Local</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 myDiv default" id="showYoutube">
                                                    <div class="form-group">
                                                        <label class="form-label">Youtube URL</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" placeholder="http//youtube.com/jdhuei?">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 myDiv" id="showVimeo">
                                                    <div class="form-group">
                                                        <label class="form-label">Vimeo URL</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" placeholder="http//vimeo.com/jdhuei?">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 myDiv" id="showLocal">
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
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label">About Lesson</label>
                                                        <div class="form-control-wrap">
                                                            <textarea class="form-control" cols="30" rows="10" placeholder="Hello World!"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <button class="btn btn-primary">Create Lesson <em class="ni ni-arrow-right"></em></button>
                                                    </div>
                                                </div>
                                             </div>
                                                </div><!-- .card-inner -->
                                    </div>
                                </div><!-- .card-content -->
                            </div><!-- .card-aside-wrap -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    <!-- New Topic Code -->
    <div class="modal fade" tabindex="-1" id="new-topic">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-header">
                    <h5 class="modal-title">New Topic</h5>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="" class="form-label">Topic Title</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control form-control-lg"
                                    placeholder="Enter Topic Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Create Topic</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">&copy; Excellent Schools. All Rights Reserved</span>
                </div>
            </div>
        </div>
    </div>
@endsection
