@extends('admin.layout.master')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-content">
                                    <h4 class="title nk-block-title">Instructor Payment</h4>
                                </div>
                            </div>
                                <div class="nk-block-head-content">
                                    <a href="{{ route('admin.instructors') }}"
                                        class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                            class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                    <a href="{{ route('admin.instructors') }}"
                                        class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                            class="icon ni ni-arrow-left"></em></a>
                                </div>
                        </div>
                    </div>
                    <!--nk-block head-->
                    <div class="nk-block">
                        <div class="card">
                            <ul class="nav nav-tabs nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#tabItem5"><em
                                            class="icon ni ni-check-circle"></em><span>Completed payment</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tabItem6"><em
                                            class="icon ni ni-loader"></em><span>Pending payment </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content mt-0">
                                <div class="tab-pane active" id="tabItem5">
                                    <div class="nk-tb-list nk-tb-ulist border-bottom border-light">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid">
                                                    <label class="custom-control-label" for="uid"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col"><span class="sub-text">Instructor</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Amount</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Payment Method</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Payment date</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1 my-n1">
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#"
                                                                class="dropdown-toggle btn btn-icon btn-trigger"
                                                                data-bs-toggle="dropdown"><em
                                                                    class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-na"></em><span>Suspend
                                                                                Selected</span></a></li>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-trash"></em><span>Remove
                                                                                Seleted</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid1">
                                                    <label class="custom-control-label" for="uid1"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col">
                                                <a href="html/lms/student-invoice-details.html">
                                                    <div class="user-card">
                                                        <div class="user-avatar bg-primary">
                                                            <span>AB</span>
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="tb-lead">Abu Bin Ishtiyak <span
                                                                    class="dot dot-success d-md-none ms-1"></span></span>
                                                            <span>info@softnio.com</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span>$7000</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>9834/paypal</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span>10-01-21</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="{{ route('admin.instructor-payment-detail') }}"
                                                            class="btn btn-trigger btn-icon" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="View Detail">
                                                            <em class="icon ni ni-eye-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#"
                                                                class="dropdown-toggle btn btn-icon btn-trigger"
                                                                data-bs-toggle="dropdown"><em
                                                                    class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="html/lms/student-invoice-details.html"><em
                                                                                class="icon ni ni-eye"></em><span>View
                                                                                Details</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                    </div>
                                    <!-- .nk-tb-list -->
                                    <div class="card-inner">
                                        <div class="nk-block-between-md g-3">
                                            <div class="g">
                                                <ul class="pagination justify-content-center justify-content-md-start">
                                                    <li class="page-item"><a class="page-link" href="#"><em
                                                                class="icon ni ni-chevrons-left"></em></a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><span class="page-link"><em
                                                                class="icon ni ni-more-h"></em></span></li>
                                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                    <li class="page-item"><a class="page-link" href="#"><em
                                                                class="icon ni ni-chevrons-right"></em></a></li>
                                                </ul>
                                                <!-- .pagination -->
                                            </div>
                                            <div class="g">
                                                <div
                                                    class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                    <div>Page</div>
                                                    <div>
                                                        <select class="form-select js-select2" data-search="on"
                                                            data-dropdown="xs center">
                                                            <option value="page-1">1</option>
                                                            <option value="page-2">2</option>
                                                            <option value="page-4">4</option>
                                                            <option value="page-5">5</option>
                                                            <option value="page-6">6</option>
                                                            <option value="page-7">7</option>
                                                            <option value="page-8">8</option>
                                                            <option value="page-9">9</option>
                                                            <option value="page-10">10</option>
                                                            <option value="page-11">11</option>
                                                            <option value="page-12">12</option>
                                                            <option value="page-13">13</option>
                                                            <option value="page-14">14</option>
                                                            <option value="page-15">15</option>
                                                            <option value="page-16">16</option>
                                                            <option value="page-17">17</option>
                                                            <option value="page-18">18</option>
                                                            <option value="page-19">19</option>
                                                            <option value="page-20">20</option>
                                                        </select>
                                                    </div>
                                                    <div>OF 102</div>
                                                </div>
                                            </div>
                                            <!-- .pagination-goto -->
                                        </div>
                                        <!-- .nk-block-between -->
                                    </div>
                                </div><!--tab pan active-->
                                <div class="tab-pane" id="tabItem6">
                                    <div class="nk-tb-list nk-tb-ulist border-bottom border-light">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid0">
                                                    <label class="custom-control-label" for="uid0"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col"><span class="sub-text">Instructor</span></div>
                                            <div class="nk-tb-col"><span class="sub-text">Due Date</span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Payment Method</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Pending Amount</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1 my-n1">
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#"
                                                                class="dropdown-toggle btn btn-icon btn-trigger"
                                                                data-bs-toggle="dropdown"><em
                                                                    class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-na"></em><span>Suspend
                                                                                Selected</span></a></li>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-trash"></em><span>Remove
                                                                                Seleted</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid20">
                                                    <label class="custom-control-label" for="uid20"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col">
                                                <a href="html/lms/student-invoice-details.html">
                                                    <div class="user-card">
                                                        <div class="user-avatar bg-warning">
                                                            <span>PL</span>
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="tb-lead">Peri larason <span
                                                                    class="dot dot-success d-md-none ms-1"></span></span>
                                                            <span>larason@example.com</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>13th June</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>7850/payoneer</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span>$5684</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Mark As Paid">
                                                            <em class="icon ni ni-check-circle"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-trigger btn-icon"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="View Detail">
                                                            <em class="icon ni ni-eye-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#"
                                                                class="dropdown-toggle btn btn-icon btn-trigger"
                                                                data-bs-toggle="dropdown"><em
                                                                    class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="html/lms/student-invoice-details.html"><em
                                                                                class="icon ni ni-eye"></em><span>View
                                                                                Details</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- nk-tb-item -->
                                    </div>
                                    <!-- .nk-tb-list -->
                                    <div class="card-inner">
                                        <div class="nk-block-between-md g-3">
                                            <div class="g">
                                                <ul class="pagination justify-content-center justify-content-md-start">
                                                    <li class="page-item"><a class="page-link" href="#"><em
                                                                class="icon ni ni-chevrons-left"></em></a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><span class="page-link"><em
                                                                class="icon ni ni-more-h"></em></span></li>
                                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                    <li class="page-item"><a class="page-link" href="#"><em
                                                                class="icon ni ni-chevrons-right"></em></a></li>
                                                </ul>
                                                <!-- .pagination -->
                                            </div>
                                            <div class="g">
                                                <div
                                                    class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                    <div>Page</div>
                                                    <div>
                                                        <select class="form-select js-select2" data-search="on"
                                                            data-dropdown="xs center">
                                                            <option value="page-1">1</option>
                                                            <option value="page-2">2</option>
                                                            <option value="page-4">4</option>
                                                            <option value="page-5">5</option>
                                                            <option value="page-6">6</option>
                                                            <option value="page-7">7</option>
                                                            <option value="page-8">8</option>
                                                            <option value="page-9">9</option>
                                                            <option value="page-10">10</option>
                                                            <option value="page-11">11</option>
                                                            <option value="page-12">12</option>
                                                            <option value="page-13">13</option>
                                                            <option value="page-14">14</option>
                                                            <option value="page-15">15</option>
                                                            <option value="page-16">16</option>
                                                            <option value="page-17">17</option>
                                                            <option value="page-18">18</option>
                                                            <option value="page-19">19</option>
                                                            <option value="page-20">20</option>
                                                        </select>
                                                    </div>
                                                    <div>OF 102</div>
                                                </div>
                                            </div>
                                            <!-- .pagination-goto -->
                                        </div>
                                        <!-- .nk-block-between -->
                                    </div>
                                </div><!--tab pan-->
                            </div><!--tab content-->
                        </div><!--card-->
                    </div><!--nk block-->
                </div>
            </div>
        </div>
    </div>
@endsection
