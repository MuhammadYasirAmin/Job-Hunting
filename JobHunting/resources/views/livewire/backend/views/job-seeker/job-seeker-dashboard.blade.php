@section('InnerBanner')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('images/banner/1.jpg') }});">
        <div class="overlay-main site-bg-white opacity-01"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">Dashboard</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('JobSeeker.Dashboard') }}">Home</a></li>
                        <li>Dashboard</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
@endsection

<div class="twm-dash-b-blocks mb-5">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
            <div class="panel panel-default">
                <div class="panel-body wt-panel-body dashboard-card-2 block-gradient">
                    <div class="wt-card-wrap-2">
                        <div class="wt-card-icon-2"><i class="flaticon-job"></i></div>
                        <div class="wt-card-right wt-total-active-listing counter ">25
                        </div>
                        <div class="wt-card-bottom-2 ">
                            <h4 class="m-b0">Applied Jobs</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
            <div class="panel panel-default">
                <div class="panel-body wt-panel-body dashboard-card-2 block-gradient-2">
                    <div class="wt-card-wrap-2">
                        <div class="wt-card-icon-2"><i class="flaticon-resume"></i>
                        </div>
                        <div class="wt-card-right  wt-total-listing-view counter ">435
                        </div>
                        <div class="wt-card-bottom-2">
                            <h4 class="m-b0">Total Applications</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
