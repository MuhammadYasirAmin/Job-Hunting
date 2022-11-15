@section('ManageJobs', 'active')
@section('InnerBanner')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('images/banner/1.jpg') }});">
        <div class="overlay-main site-bg-white opacity-01"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">Manage Jobs</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('Employer.Dashboard') }}">Home</a></li>
                        <li>Jobs Manager</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
@endsection
<form>
    <!--Basic Information-->
    <div class="panel panel-default">
        <div class="panel-heading wt-panel-heading p-a20">
            <h4 class="panel-tittle m-a0"><i class="fa fa-suitcase"></i>Manage jobs</h4>
        </div>
        <div class="panel-body wt-panel-body m-b30 ">
            <div class="twm-D_table p-a20 table-responsive">
                <table id="jobs_bookmark_table" class="table table-bordered twm-bookmark-list-wrap">
                    <thead>
                        <tr>
                            <th>Job Title</th>
                            <th>Category</th>
                            <th>Job Types</th>
                            <th>Applications</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--1-->
                        <tr>
                            <td>
                                <div class="twm-bookmark-list">

                                    <div class="twm-mid-content">
                                        <a href="#" class="twm-job-title">
                                            <h4>Senior Web Designer</h4>
                                            <p class="twm-bookmark-address">
                                                <i class="feather-map-pin"></i>Sacramento, California
                                            </p>
                                        </a>

                                    </div>

                                </div>
                            </td>
                            <td>Web Designer</td>
                            <td>
                                <div class="twm-jobs-category"><span class="twm-bg-green">Part Time</span></div>
                            </td>
                            <td><a href="javascript:;" class="site-text-primary">03 Applied</a></td>
                            <td>
                                <span class="text-clr-green2">Active</span>
                            </td>

                            <td>
                                <div class="twm-table-controls">
                                    <ul class="twm-DT-controls-icon list-unstyled">
                                        <li>
                                            <button title="View profile" type="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top">
                                                <span class="fa fa-eye"></span>
                                            </button>
                                        </li>

                                        <li>
                                            <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                <span class="far fa-trash-alt"></span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <!--2-->
                        <tr>
                            <td>
                                <div class="twm-bookmark-list">

                                    <div class="twm-mid-content">
                                        <a href="#" class="twm-job-title">
                                            <h4>Sr. Rolling Stock Technician</h4>
                                            <p class="twm-bookmark-address">
                                                <i class="feather-map-pin"></i>Sacramento, California
                                            </p>
                                        </a>

                                    </div>

                                </div>
                            </td>
                            <td>Product Manager</td>
                            <td>
                                <div class="twm-jobs-category"><span class="twm-bg-brown">Intership</span></div>
                            </td>
                            <td><a href="javascript:;" class="site-text-primary">05 Applied</a></td>
                            <td>
                                <span class="text-clr-green2">Active</span>
                            </td>

                            <td>
                                <div class="twm-table-controls">
                                    <ul class="twm-DT-controls-icon list-unstyled">
                                        <li>
                                            <button title="View profile" type="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top">
                                                <span class="fa fa-eye"></span>
                                            </button>
                                        </li>

                                        <li>
                                            <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                <span class="far fa-trash-alt"></span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <!--3-->
                        <tr>
                            <td>
                                <div class="twm-bookmark-list">

                                    <div class="twm-mid-content">
                                        <a href="#" class="twm-job-title">
                                            <h4>IT Department Manager</h4>
                                            <p class="twm-bookmark-address">
                                                <i class="feather-map-pin"></i>Sacramento, California
                                            </p>
                                        </a>

                                    </div>

                                </div>
                            </td>
                            <td>PHP Developer</td>
                            <td>
                                <div class="twm-jobs-category"><span class="twm-bg-purple">Fulltime</span></div>
                            </td>
                            <td><a href="javascript:;" class="site-text-primary">06 Applied</a></td>
                            <td>
                                <span class="text-clr-red">Reject</span>
                            </td>

                            <td>
                                <div class="twm-table-controls">
                                    <ul class="twm-DT-controls-icon list-unstyled">
                                        <li>
                                            <button title="View profile" type="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top">
                                                <span class="fa fa-eye"></span>
                                            </button>
                                        </li>

                                        <li>
                                            <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                <span class="far fa-trash-alt"></span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <!--4-->
                        <tr>
                            <td>
                                <div class="twm-bookmark-list">

                                    <div class="twm-mid-content">
                                        <a href="#" class="twm-job-title">
                                            <h4>Art Production Specialist</h4>
                                            <p class="twm-bookmark-address">
                                                <i class="feather-map-pin"></i>Sacramento, California
                                            </p>
                                        </a>

                                    </div>

                                </div>
                            </td>
                            <td>Product Designer</td>
                            <td>
                                <div class="twm-jobs-category"><span class="twm-bg-sky">Freelancer</span></div>
                            </td>
                            <td><a href="javascript:;" class="site-text-primary">13 Applied</a></td>
                            <td>
                                <span class="text-clr-green2">Active</span>
                            </td>

                            <td>
                                <div class="twm-table-controls">
                                    <ul class="twm-DT-controls-icon list-unstyled">
                                        <li>
                                            <button title="View profile" type="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top">
                                                <span class="fa fa-eye"></span>
                                            </button>
                                        </li>

                                        <li>
                                            <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                <span class="far fa-trash-alt"></span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <!--5-->
                        <tr>
                            <td>
                                <div class="twm-bookmark-list">

                                    <div class="twm-mid-content">
                                        <a href="#" class="twm-job-title">
                                            <h4>Recreation & Fitness Worker</h4>
                                            <p class="twm-bookmark-address">
                                                <i class="feather-map-pin"></i>Sacramento, California
                                            </p>
                                        </a>

                                    </div>

                                </div>
                            </td>
                            <td>Gym Trainer</td>
                            <td>
                                <div class="twm-jobs-category"><span class="twm-bg-golden">Temporary</span></div>
                            </td>
                            <td><a href="javascript:;" class="site-text-primary">08 Applied</a></td>
                            <td>
                                <span class="text-clr-yellow">Pending</span>
                            </td>

                            <td>
                                <div class="twm-table-controls">
                                    <ul class="twm-DT-controls-icon list-unstyled">
                                        <li>
                                            <button title="View profile" type="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top">
                                                <span class="fa fa-eye"></span>
                                            </button>
                                        </li>

                                        <li>
                                            <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                <span class="far fa-trash-alt"></span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <!--6-->
                        <tr>
                            <td>
                                <div class="twm-bookmark-list">

                                    <div class="twm-mid-content">
                                        <a href="#" class="twm-job-title">
                                            <h4>Senior Web Designer</h4>
                                            <p class="twm-bookmark-address">
                                                <i class="feather-map-pin"></i>Sacramento, California
                                            </p>
                                        </a>

                                    </div>

                                </div>
                            </td>
                            <td>Web Designer</td>
                            <td>
                                <div class="twm-jobs-category"><span class="twm-bg-green">New</span></div>
                            </td>
                            <td><a href="javascript:;" class="site-text-primary">14 Applied</a></td>
                            <td>
                                <span class="text-clr-yellow">Pending</span>
                            </td>

                            <td>
                                <div class="twm-table-controls">
                                    <ul class="twm-DT-controls-icon list-unstyled">
                                        <li>
                                            <button title="View profile" type="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top">
                                                <span class="fa fa-eye"></span>
                                            </button>
                                        </li>

                                        <li>
                                            <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                <span class="far fa-trash-alt"></span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <!--7-->
                        <tr>
                            <td>
                                <div class="twm-bookmark-list">

                                    <div class="twm-mid-content">
                                        <a href="#" class="twm-job-title">
                                            <h4>Sr. Rolling Stock Technician</h4>
                                            <p class="twm-bookmark-address">
                                                <i class="feather-map-pin"></i>Sacramento, California
                                            </p>
                                        </a>

                                    </div>

                                </div>
                            </td>
                            <td>Product Manager</td>
                            <td>
                                <div class="twm-jobs-category"><span class="twm-bg-green">New</span></div>
                            </td>
                            <td><a href="javascript:;" class="site-text-primary">10 Applied</a></td>
                            <td>
                                <span class="text-clr-green2">Active</span>
                            </td>

                            <td>
                                <div class="twm-table-controls">
                                    <ul class="twm-DT-controls-icon list-unstyled">
                                        <li>
                                            <button title="View profile" type="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top">
                                                <span class="fa fa-eye"></span>
                                            </button>
                                        </li>

                                        <li>
                                            <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                <span class="far fa-trash-alt"></span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Job Title</th>
                            <th>Category</th>
                            <th>Job Types</th>
                            <th>Applications</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</form>