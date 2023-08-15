@extends('customer.instructor.layout.master')

@section('intructor-content')
<div class="col-lg-9">
    <!-- Start Enrole Course  -->
    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
        <div class="content">
            <div class="section-title">
                <h4 class="rbt-title-style-3">My Quiz
                </h4>
            </div>


            <!-- Start Filter -->
            <div class="rbt-dashboard-filter-wrapper">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="filter-select rbt-modern-select">
                            <span class="select-label d-block">Courses</span>
                            <select class="w-100" data-live-search="true" title="All" multiple data-size="7" data-actions-box="true" data-selected-text-format="count > 2">
                                <option data-subtext="HTML">Web Design</option>
                                <option data-subtext="Photoshop">Graphic</option>
                                <option data-subtext="Career">English</option>
                                <option data-subtext="Career">Spoken English</option>
                                <option data-subtext="Experts">Art Painting</option>
                                <option data-subtext="Experts">App Development</option>
                                <option data-subtext="Experts">Web Application</option>
                                <option data-subtext="Experts">Php Development</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="filter-select rbt-modern-select">
                            <span class="select-label d-block">Short By</span>
                            <select class="w-100">
                                <option>Default</option>
                                <option>Latest</option>
                                <option>Popularity</option>
                                <option>Trending</option>
                                <option>Price: low to high</option>
                                <option>Price: high to low</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="filter-select rbt-modern-select">
                            <span class="select-label d-block">Short By Offer</span>
                            <select class="w-100">
                                <option>Free</option>
                                <option>Paid</option>
                                <option>Premium</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Filter -->

            <hr class="mt--30">

            <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                <table class="rbt-table table table-borderless">
                    <thead>
                        <tr>
                            <th>Quiz</th>
                            <th>Qus</th>
                            <th>Participants</th>
                            <th>Pass</th>
                            <th>Fail</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>
                                <p class="b3 mb--5">December 26, 2023</p>
                                <span class="h6 mb--5">Write a short essay on yourself using the 5</span>
                                <p class="b3">Course: <a href="#">JavaScript Full Course</a></p>
                            </th>
                            <td>
                                <p class="b3">4</p>
                            </td>
                            <td>
                                <p class="b3">8</p>
                            </td>
                            <td>
                                <p class="b3">4</p>
                            </td>
                            <td>
                                <span class="rbt-badge-5 bg-color-success-opacity color-success">Pass</span>
                            </td>
                            <td>
                                <div class="rbt-button-group justify-content-end">
                                    <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="#" title="Edit"><i class="feather-edit pl--0"></i></a>
                                    <a class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#" title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p class="b3 mb--5">December 26, 2023</p>
                                <span class="h6 mb--5">Write a short essay on yourself using the 5</span>
                                <p class="b3">Student: <a href="#">John Due</a></p>
                            </th>
                            <td>
                                <p class="b3">4</p>
                            </td>
                            <td>
                                <p class="b3">8</p>
                            </td>
                            <td>
                                <p class="b3">4</p>
                            </td>
                            <td>
                                <span class="rbt-badge-5 bg-color-danger-opacity color-danger">Fail</span>
                            </td>
                            <td>
                                <div class="rbt-button-group justify-content-end">
                                    <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="#" title="Edit"><i class="feather-edit pl--0"></i></a>
                                    <a class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#" title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p class="b3 mb--5">December 26, 2023</p>
                                <span class="h6 mb--5">Write a short essay on yourself using the 5</span>
                                <p class="b3">Student: <a href="#">John Due</a></p>
                            </th>
                            <td>
                                <p class="b3">4</p>
                            </td>
                            <td>
                                <p class="b3">8</p>
                            </td>
                            <td>
                                <p class="b3">4</p>
                            </td>
                            <td>
                                <span class="rbt-badge-5 bg-color-success-opacity color-success">Pass</span>
                            </td>
                            <td>
                                <div class="rbt-button-group justify-content-end">
                                    <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="#" title="Edit"><i class="feather-edit pl--0"></i></a>
                                    <a class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#" title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p class="b3 mb--5">December 26, 2023</p>
                                <span class="h6 mb--5">Write a short essay on yourself using the 5</span>
                                <p class="b3">Student: <a href="#">John Due</a></p>
                            </th>
                            <td>
                                <p class="b3">4</p>
                            </td>
                            <td>
                                <p class="b3">8</p>
                            </td>
                            <td>
                                <p class="b3">4</p>
                            </td>
                            <td>
                                <span class="rbt-badge-5 bg-color-danger-opacity color-danger">Fail</span>
                            </td>
                            <td>
                                <div class="rbt-button-group justify-content-end">
                                    <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="#" title="Edit"><i class="feather-edit pl--0"></i></a>
                                    <a class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#" title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                                </div>
                            </td>
                        </tr>


                    </tbody>

                </table>
            </div>

        </div>
    </div>
    <!-- End Enrole Course  -->
</div>
@endsection