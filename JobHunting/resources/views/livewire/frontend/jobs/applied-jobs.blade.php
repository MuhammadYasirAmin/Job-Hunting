<!-- INNER PAGE BANNER -->
<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('images/banner/1.jpg') }});">
    <div class="overlay-main site-bg-white opacity-01"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="wt-title">Apply For This Job</h2>
                </div>
            </div>
            <!-- BREADCRUMB ROW -->

            <div>
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ route('Frontend.index') }}">Home</a></li>
                    <li>Apply For This Job</li>
                </ul>
            </div>

            <!-- BREADCRUMB ROW END -->
        </div>
    </div>
</div>
<!-- INNER PAGE BANNER END -->

<!-- Employer Account START -->
<div class="section-full p-t120  site-bg-white bg-cover twm-ac-fresher-wrap"
    style="background-image:url({{ asset('images/background/pattern.jpg') }})">


    <div class="container">
        <div class="row d-flex justify-content-center">

            <div class="col-lg-8 col-md-12">
                <div class="twm-right-section-panel-wrap2">
                    <!--Filter Short By-->
                    <div class="twm-right-section-panel site-bg-primary">

                        <!--Basic Information-->
                        <div class="panel panel-default">
                            <div class="panel-heading wt-panel-heading p-a20">
                                <h4 class="panel-tittle m-a0">Apply For This Job</h4>
                            </div>
                            <div class="panel-body wt-panel-body p-a20 ">



                                <div class="twm-tabs-style-1">

                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>Your Name</label>
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control" name="company_name" type="text"
                                                        placeholder="Devid Smith">
                                                    <i class="fs-input-icon fa fa-user "></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <div class="ls-inputicon-box">
                                                    <input class="form-control" name="company_Email" type="email"
                                                        placeholder="Devid@example.com">
                                                    <i class="fs-input-icon fas fa-at"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea class="form-control" rows="3" placeholder="Message sent to the employer"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>Upload Resume</label>
                                                <form action="upload.php" class="dropzone"></form>
                                                <small>If you do not have a resume document, you may write your brief
                                                    professional profile <a class="site-text-primary"
                                                        href="javascript:void(0);">here</a></small>
                                            </div>
                                        </div>



                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="text-left">
                                                <button type="submit" class="site-button">Send Application</button>
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
    </div>

    <span class="twm-section-bg-img2">
        <img src="{{ asset('images/apply-job-bg.png') }}" alt="">
    </span>

</div>
<!-- Employer Account START END -->
