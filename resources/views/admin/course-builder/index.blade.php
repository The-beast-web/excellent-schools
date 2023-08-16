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
                                                <a href="{{ route('admin.course-category') }}"
                                                    class="btn btn-icon btn-primary d-md-none"><em
                                                        class="icon ni ni-edit-fill"></em></a>
                                                <a href="{{ route('admin.course-category') }}"
                                                    class="btn btn-primary d-none d-md-inline-flex"><em
                                                        class="icon ni ni-edit-fill"></em><span>Edit Course</span></a>
                                            </li>
                                            <li class="nk-block-tools-opt">
                                                <a href="{{ route('admin.course-orders') }}"
                                                    class="btn btn-icon btn-primary d-md-none"><em
                                                        class="icon ni ni-arrow-left"></em></a>
                                                <a href="{{ route('admin.course-orders') }}"
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
                                    <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#personal"><em
                                                    class="icon ni ni-puzzle-fill"></em><span>Lessons</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#orders"><em
                                                    class="icon ni ni-repeat"></em><span>Assignments</span></a>
                                        </li>
                                        <li class="nav-item nav-item-trigger d-xxl-none">
                                            <a href="#" class="toggle btn btn-icon btn-trigger"
                                                data-target="userAside"><em class="icon ni ni-user-list-fill"></em></a>
                                        </li>
                                    </ul><!-- .nav-tabs -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="personal">
                                            <div class="card-inner">
                                                <div class="nk-block">
                                                    <div class="row g-gs">
                                                        <div>
                                                            <h6>Introduction To JavaScript</h6>
                                                        </div>
                                                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                                                            <a href="{{ route('admin.lesson-detail') }}">
                                                                <div class="card card-full lesson">
                                                                    <div class="card-inner-group">
                                                                        <div class="card-inner card-inner-md">
                                                                            <div class="user-card">
                                                                                <div class="user-info">
                                                                                    <span class="lead-text">Abu Bin
                                                                                        Ishtiyak</span>
                                                                                    <span
                                                                                        class="sub-text">info@softnio.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </a>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                                                            <a href="{{ route('admin.lesson-detail') }}">
                                                                <div class="card card-full lesson">
                                                                    <div class="card-inner-group">
                                                                        <div class="card-inner card-inner-md">
                                                                            <div class="user-card">
                                                                                <div class="user-info">
                                                                                    <span class="lead-text">Abu Bin
                                                                                        Ishtiyak</span>
                                                                                    <span
                                                                                        class="sub-text">info@softnio.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </a>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-4 col-lg-4 col-sm-6">
                                                            <a href="{{ route('admin.lesson-detail') }}">
                                                                <div class="card card-full lesson">
                                                                    <div class="card-inner-group">
                                                                        <div class="card-inner card-inner-md">
                                                                            <div class="user-card">
                                                                                <div class="user-info">
                                                                                    <span class="lead-text">Abu Bin
                                                                                        Ishtiyak</span>
                                                                                    <span
                                                                                        class="sub-text">info@softnio.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </a>
                                                        </div><!-- .col -->
                                                    </div>
                                                </div><!-- .card-inner -->
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="orders">
                                            <div class="card-inner">
                                                <div class="nk-block-head">
                                                    <a href="#new-assignment" data-bs-toggle="modal"
                                                        class="btn btn-primary">Add New Assignment</a>
                                                </div>
                                                <div
                                                    class="nk-tb-list border border-light rounded overflow-hidden is-compact">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col">
                                                            <span class="lead-text">#</span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="lead-text">Assignment</span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="lead-text">Participants</span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="lead-text d-none d-sm-inline">Pass Rate</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <span class="lead-text">&nbsp;</span>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col"> 1 </div>
                                                        <div class="nk-tb-col"> Learn Android Development with project
                                                        </div>
                                                        <div class="nk-tb-col"> Learn Android Development with project
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span
                                                                class="badge badge-dot badge-dot-xs bg-success">Active</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li>
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-trigger me-n1"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Edit Assignment"><em
                                                                            class="icon ni ni-edit-fill text-dark"></em></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-trigger me-n1"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Delete Assignment"><em
                                                                            class="icon ni ni-trash-alt text-danger"></em></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col"> 2 </div>
                                                        <div class="nk-tb-col"> Learn Android Development with project
                                                        </div>
                                                        <div class="nk-tb-col"> Learn Android Development with project
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span
                                                                class="badge badge-dot badge-dot-xs bg-warning">Pending</span>
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
                                                        <div class="nk-tb-col"> Learn Android Development with project
                                                        </div>
                                                        <div class="nk-tb-col"> Learn Android Development with project
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span
                                                                class="badge badge-dot badge-dot-xs bg-danger">Canceled</span>
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
                                            </div><!-- .card-inner -->
                                        </div>
                                    </div>
                                </div><!-- .card-content -->
                                <div class="card-aside card-aside-right user-aside toggle-slide toggle-slide-right toggle-break-xxl"
                                    data-content="userAside" data-toggle-screen="xxl" data-toggle-overlay="true"
                                    data-toggle-body="true">
                                    <div class="card-inner-group" data-simplebar>
                                        <div class="card-inner">
                                            <a href="{{ route('admin.course-builder.lesson.create') }}" class="btn btn-primary btn-block"
                                                style="height: 50px; border-radius: 50px;">New Lesson</a>
                                        </div><!-- .card-inner -->
                                        <div class="card-inner">
                                            <a href="#new-topic" data-bs-toggle="modal" class="btn btn-primary btn-block"
                                                style="height: 50px; border-radius: 50px;">New Topic</a>
                                        </div><!-- .card-inner -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card-aside -->
                            </div><!-- .card-aside-wrap -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    <!-- New Assignment Code -->
    <div class="modal fade" tabindex="-1" id="new-assignment">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-header">
                    <h5 class="modal-title">New Assignment</h5>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="" class="form-label">Assignment</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control form-control-lg"
                                    placeholder="Enter Assignment Task">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Create Assignment</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">&copy; Excellent Schools. All Rights Reserved</span>
                </div>
            </div>
        </div>
    </div>
    <!-- New Topic Modal -->
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
