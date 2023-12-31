@extends('admin.layout.master')

@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Course Category</h3>
                            <div class="nk-block-des text-soft">
                                <p>You have total 8 Categories</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <div>
                                                <a href="{{ route('admin.courses') }}" class="btn btn-white btn-dim btn-outline-light"><em class="d-none d-sm-inline icon ni ni-arrow-left"></em><span>Back</span></a>
                                            </div>
                                        </li>
                                        <li class="nk-block-tools-opt d-none d-sm-block">
                                            <a class="btn btn-primary" data-bs-toggle="modal" href="#modalCreate"><em class="icon ni ni-plus"></em><span>Add Category</span></a>
                                        </li>
                                        <li class="nk-block-tools-opt d-block d-sm-none">
                                            <a class="btn btn-icon btn-primary" data-bs-toggle="modal" href="#modalCreate"><em class="icon ni ni-plus"></em></a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                                            <div class="user-avatar sq bg-purple"><span>GD</span></div>
                                            <div class="ms-3">
                                                <h6 class="title mb-1">Graphics Design</h6>
                                                <span class="sub-text">4 SubCategories</span>
                                            </div>
                                        </a>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a></li>
                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete Category</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Website Design & Develop the website with web applications</p>
                                    <ul class="d-flex flex-wrap g-1">
                                        <li><span class="badge badge-dim bg-primary">Photoshop</span></li>
                                        <li><span class="badge badge-dim bg-danger">Adobe Illustrator</span></li>
                                        <li><span class="badge badge-dim bg-info">Logo Design</span></li>
                                        <li><span class="badge badge-dim bg-warning">Drawing</span></li>
                                        <li><span class="badge badge-dim bg-secondary">Figma</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                                            <div class="user-avatar sq bg-warning"><span>WD</span></div>
                                            <div class="ms-3">
                                                <h6 class="title mb-1">Web Development</h6>
                                                <span class="sub-text">5 SubCategories</span>
                                            </div>
                                        </a>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a></li>
                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete Category</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Website Design & Develop the website with web applications</p>
                                    <ul class="d-flex flex-wrap g-1">
                                        <li><span class="badge badge-dim bg-primary">Responsive Design</span></li>
                                        <li><span class="badge badge-dim bg-danger">Wordpress Customization</span>
                                        </li>
                                        <li><span class="badge badge-dim bg-info">Theme Development</span></li>
                                        <li><span class="badge badge-dim bg-warning">Bootstrap</span></li>
                                        <li><span class="badge badge-dim bg-secondary">HTML & CSS Grid</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                                            <div class="user-avatar sq bg-info"><span>MA</span></div>
                                            <div class="ms-3">
                                                <h6 class="title mb-1">Mobile Application</h6>
                                                <span class="sub-text">4 SubCategories</span>
                                            </div>
                                        </a>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a></li>
                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete Category</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Website Design & Develop the website with web applications</p>
                                    <ul class="d-flex flex-wrap g-1">
                                        <li><span class="badge badge-dim bg-primary">Mobile App Design</span></li>
                                        <li><span class="badge badge-dim bg-danger">User Interface</span></li>
                                        <li><span class="badge badge-dim bg-info">Design Thinking</span></li>
                                        <li><span class="badge badge-dim bg-warning">Prototyping</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                                            <div class="user-avatar sq bg-purple"><span>GD</span></div>
                                            <div class="ms-3">
                                                <h6 class="title mb-1">Graphics Design</h6>
                                                <span class="sub-text">4 SubCategories</span>
                                            </div>
                                        </a>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a></li>
                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete Category</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Website Design & Develop the website with web applications</p>
                                    <ul class="d-flex flex-wrap g-1">
                                        <li><span class="badge badge-dim bg-primary">Photoshop</span></li>
                                        <li><span class="badge badge-dim bg-danger">Adobe Illustrator</span></li>
                                        <li><span class="badge badge-dim bg-info">Logo Design</span></li>
                                        <li><span class="badge badge-dim bg-warning">Drawing</span></li>
                                        <li><span class="badge badge-dim bg-secondary">Figma</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                                            <div class="user-avatar sq bg-warning"><span>WD</span></div>
                                            <div class="ms-3">
                                                <h6 class="title mb-1">Web Development</h6>
                                                <span class="sub-text">5 SubCategories</span>
                                            </div>
                                        </a>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a></li>
                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete Category</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Website Design & Develop the website with web applications</p>
                                    <ul class="d-flex flex-wrap g-1">
                                        <li><span class="badge badge-dim bg-primary">Responsive Design</span></li>
                                        <li><span class="badge badge-dim bg-danger">Wordpress Customization</span>
                                        </li>
                                        <li><span class="badge badge-dim bg-info">Theme Development</span></li>
                                        <li><span class="badge badge-dim bg-warning">Bootstrap</span></li>
                                        <li><span class="badge badge-dim bg-secondary">HTML & CSS Grid</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                                            <div class="user-avatar sq bg-info"><span>MA</span></div>
                                            <div class="ms-3">
                                                <h6 class="title mb-1">Mobile Application</h6>
                                                <span class="sub-text">4 SubCategories</span>
                                            </div>
                                        </a>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a></li>
                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete Category</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Website Design & Develop the website with web applications</p>
                                    <ul class="d-flex flex-wrap g-1">
                                        <li><span class="badge badge-dim bg-primary">Mobile App Design</span></li>
                                        <li><span class="badge badge-dim bg-danger">User Interface</span></li>
                                        <li><span class="badge badge-dim bg-info">Design Thinking</span></li>
                                        <li><span class="badge badge-dim bg-warning">Prototyping</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                                            <div class="user-avatar sq bg-purple"><span>GD</span></div>
                                            <div class="ms-3">
                                                <h6 class="title mb-1">Graphics Design</h6>
                                                <span class="sub-text">4 SubCategories</span>
                                            </div>
                                        </a>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a></li>
                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete Category</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Website Design & Develop the website with web applications</p>
                                    <ul class="d-flex flex-wrap g-1">
                                        <li><span class="badge badge-dim bg-primary">Photoshop</span></li>
                                        <li><span class="badge badge-dim bg-danger">Adobe Illustrator</span></li>
                                        <li><span class="badge badge-dim bg-info">Logo Design</span></li>
                                        <li><span class="badge badge-dim bg-warning">Drawing</span></li>
                                        <li><span class="badge badge-dim bg-secondary">Figma</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                                            <div class="user-avatar sq bg-warning"><span>WD</span></div>
                                            <div class="ms-3">
                                                <h6 class="title mb-1">Web Development</h6>
                                                <span class="sub-text">5 SubCategories</span>
                                            </div>
                                        </a>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a></li>
                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete Category</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Website Design & Develop the website with web applications</p>
                                    <ul class="d-flex flex-wrap g-1">
                                        <li><span class="badge badge-dim bg-primary">Responsive Design</span></li>
                                        <li><span class="badge badge-dim bg-danger">Wordpress Customization</span></li>
                                        <li><span class="badge badge-dim bg-info">Theme Development</span></li>
                                        <li><span class="badge badge-dim bg-warning">Bootstrap</span></li>
                                        <li><span class="badge badge-dim bg-secondary">HTML & CSS Grid</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalCreate">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="title">Add Category</h5>
                <form action="#" class="pt-2">
                    <div class="form-group">
                        <label class="form-label" for="full-name">Category Name</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="full-name" placeholder="e.g. Web Development">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="description">Description</label>
                        <div class="form-control-wrap">
                            <textarea class="form-control" name="description" id="description" placeholder="Write Category Description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="thumb">Category thumbnail</label>
                        <div class="form-control-wrap">
                            <div class="form-file">
                                <input type="file" multiple class="form-file-input" id="customFile">
                                <label class="form-file-label" for="thumb">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Subcategory</label>
                        <div class="d-flex gx-3 mb-3">
                            <div class="g w-100">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" placeholder="e.g. Web Development">
                                </div>
                            </div>
                            <div class="g">
                                <button class="btn btn-icon btn-outline-light"><em class="icon ni ni-plus"></em></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button data-bs-dismiss="modal" type="submit" class="btn btn-primary">Save Informations</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- .Edit Modal-Content -->
<div class="modal fade" id="modalEdit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="title">Edit Category</h5>
                <form action="#" class="pt-2">
                    <div class="form-group">
                        <label class="form-label" for="edit-full-name">Category Name</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="edit-full-name" value="Web Development">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="edit-description">Description</label>
                        <div class="form-control-wrap">
                            <textarea class="form-control" name="description" id="edit-description" value="Website Design & Develop the website with web applications"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="category-thumb">Category thumbnail</label>
                        <div class="form-control-wrap">
                            <div class="form-file">
                                <input type="file" multiple class="form-file-input" id="edit-customFile">
                                <label class="form-file-label" for="category-thumb">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Subcategory</label>
                        <div class="d-flex gx-3 mb-3">
                            <div class="g w-100">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" value="Figma">
                                </div>
                            </div>
                            <div class="g">
                                <button class="btn btn-icon btn-outline-light"><em class="icon ni ni-cross"></em>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex gx-3 mb-3">
                            <div class="g w-100">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" value="Responsive Design">
                                </div>
                            </div>
                            <div class="g">
                                <button class="btn btn-icon btn-outline-light"><em class="icon ni ni-cross"></em>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex gx-3 mb-3">
                            <div class="g w-100">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" value="Adobe Photoshop">
                                </div>
                            </div>
                            <div class="g">
                                <button class="btn btn-icon btn-outline-light"><em class="icon ni ni-cross"></em>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex gx-3 mb-3">
                            <div class="g w-100">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" placeholder="e.g. Web Development">
                                </div>
                            </div>
                            <div class="g">
                                <button class="btn btn-icon btn-outline-light"><em class="icon ni ni-plus"></em>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button data-bs-dismiss="modal" type="submit" class="btn btn-primary">Save Informations</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- .Edit Modal-Content -->
<div class="modal fade" id="modalDelete">
    <div class="modal-dialog" role="document">
        <div class="modal-content"> <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg text-center">
                <div class="nk-modal py-4"> <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                    <h4 class="nk-modal-title">Are You Sure ?</h4>
                    <div class="nk-modal-text mt-n2">
                        <p class="text-soft">This event data will be removed permanently.</p>
                    </div>
                    <ul class="d-flex justify-content-center gx-4 mt-4">
                        <li>
                            <button data-bs-dismiss="modal" id="deleteEvent" class="btn btn-success">Yes, Delete it</button>
                        </li>
                        <li>
                            <button data-bs-dismiss="modal" class="btn btn-danger btn-dim">Cancel</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection