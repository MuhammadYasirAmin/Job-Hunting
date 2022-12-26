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
<div class="section-full p-t120  p-b90 site-bg-white bg-cover twm-ac-fresher-wrap"
    style="background-image:url({{ asset('images/background/pattern.jpg') }})">
    <span class="twm-section-bg-img">
        <img src="{{ asset('images/reg-bg2.png') }}" alt="">
    </span>

    <div class="container">
        <div class="row d-flex justify-content-center">

            <div class="col-lg-10 col-md-12">
                <div class="twm-right-section-panel-wrap2">
                    <!--Filter Short By-->
                    <div class="twm-right-section-panel site-bg-primary">

                        <!--Basic Information-->
                        <div class="panel panel-default">
                            <div class="panel-heading wt-panel-heading p-a20">
                                <h4 class="panel-tittle m-a0">Register as Professional</h4>
                            </div>
                            <div class="panel-body wt-panel-body p-a20 ">



                                <div class="twm-tabs-style-1">
                                    <ul class="nav nav-tabs" id="myTab3" role="tablist">

                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab"
                                                data-bs-target="#Personal" type="button"
                                                role="tab">Personal</button>
                                        </li>

                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Employment"
                                                type="button" role="tab">Employment</button>
                                        </li>

                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Education"
                                                type="button" role="tab">Education</button>
                                        </li>

                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Test"
                                                type="button" role="tab">Interview Questions</button>
                                        </li>

                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Subjective"
                                                type="button" role="tab">Interview Questions II</button>
                                        </li>

                                    </ul>
                                    <div class="tab-content" id="myTab3Content">
                                        <div class="tab-pane fade show active" id="Personal">

                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Your Name</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" name="Applicant_Name"
                                                                type="text" placeholder="Devid Smith" required>
                                                            <i class="fs-input-icon fa fa-user "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Email Address</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" name="Applicant_Email"
                                                                type="email" placeholder="Devid@example.com" required>
                                                            <i class="fs-input-icon fas fa-at"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Create Password</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" name="Applicant_Password"
                                                                type="email" placeholder="Create Password" required>
                                                            <i class="fs-input-icon fas fa-asterisk"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Phone Number</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" name="Applicant_Phone"
                                                                type="text" placeholder="(251) 1234-456-7890"
                                                                required>
                                                            <i class="fs-input-icon fa fa-phone-alt"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" name="Applicant_Address"
                                                                type="text"
                                                                placeholder="Tell us about your current city" required>
                                                            <i class="fs-input-icon fa fa-globe-americas"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="form-group city-outer-bx has-feedback">
                                                        <label>Upload Your Resume</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" name="Applicant_Resume"
                                                                type="file" accept="application/pdf" required>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-xl-12 col-lg-12">
                                                    <div class="form-group">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="flexRadioDefault" id="flexRadioDefault2" checked
                                                            required>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            I agree to the Terms and Conditions and Privacy Policy.
                                                        </label>
                                                    </div>
                                                </div>

                                                {{-- <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="text-left nav-item">
                                                        <a href="#Employment" data-bs-toggle="tab" data-bs-target="#Employment" class="site-button">Open
                                                            Employment Tab</a>
                                                    </div>
                                                </div> --}}

                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="Employment">
                                            <div class="row">

                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Current Desination*</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" name="Applicant_Designation"
                                                                type="text" placeholder="Your Job Title">
                                                            <i class="fs-input-icon fa fa-address-card "></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Current Company*</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" name="Applicant_CMP_Address"
                                                                type="text"
                                                                placeholder="Where you are currently working">
                                                            <i class="fs-input-icon fas fa-building"></i>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Working_Since</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control datepicker"
                                                                data-provide="datepicker" name="Job_SDate" required
                                                                type="text" placeholder="mm/dd/yyyy">
                                                            <i class="fs-input-icon fa fa-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label>Duration of Notice Period</label>
                                                        <div class="ls-inputicon-box">
                                                            <select class="wt-select-box selectpicker"
                                                                data-live-search="true" title="" id="s-Days_1"
                                                                data-bv-field="size">
                                                                <option class="bs-title-option" value="">Days
                                                                </option>
                                                                <option>05 Days</option>
                                                                <option>10 Days</option>
                                                                <option>15 Days</option>
                                                                <option>30 Days</option>
                                                                <option>2 Months</option>
                                                                <option>3 Months</option>
                                                            </select>
                                                            <i class="fs-input-icon fa fa-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Skills</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" type="text"
                                                                value="Finance, Sales, Retail, Engineering">
                                                            <i class="fs-input-icon fas fa-asterisk"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Your Role</label>
                                                        <div class="ls-inputicon-box input_fields_custom">
                                                            <input class="form-control" name="Applicant_Role"
                                                                type="text"
                                                                placeholder="Your Role in Current Company">
                                                            <i class="fs-input-icon fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--
                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="text-left">
                                                        <button type="submit" class="site-button">Continue</button>
                                                    </div>
                                                </div> --}}

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="Education">

                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Highest Qualification</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" name="Applicant_Qualification"
                                                                type="text"
                                                                placeholder="Your Highest Qualification">
                                                            <i class="fs-input-icon fa fa-user-graduate"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Specialization</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" name="Applicant_Specilization"
                                                                type="email" placeholder="Your Specialization">
                                                            <i class="fs-input-icon fas fa-asterisk"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>University/College</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" name="Applicant_College"
                                                                type="text" placeholder="University/College">
                                                            <i class="fs-input-icon fa fa-building"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Passing Year</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control datepicker"
                                                                data-provide="datepicker" name="Applicant_Passing"
                                                                required type="text" placeholder="mm/dd/yyyy">
                                                            <i class="fs-input-icon fa fa-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="text-left">
                                                        <button type="submit" class="site-button">Continue</button>
                                                    </div>
                                                </div> --}}

                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="Test">

                                            <div class="row">

                                                @foreach ($JobsList->job_questions as $Job)
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="form-group">
                                                            <label>{{ $Job->Questions }}</label>
                                                            <div class="row twm-form-radio-inline">

                                                                <div class="col-md-12">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="Answer[{{ $Job->id }}]"
                                                                        id="Answer1" value="{{ $Job->Option_A }}">
                                                                    <label class="form-check-label" for="Answer1">
                                                                        {{ $Job->Option_A }}
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="Answer[{{ $Job->id }}]"
                                                                        id="Answer2" value="{{ $Job->Option_B }}">
                                                                    <label class="form-check-label" for="Answer2">
                                                                        {{ $Job->Option_B }}
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="Answer[{{ $Job->id }}]"
                                                                        id="Answer3" value="{{ $Job->Option_C }}">
                                                                    <label class="form-check-label" for="Answer3">
                                                                        {{ $Job->Option_C }}
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="Answer[{{ $Job->id }}]"
                                                                        id="Answer4" value="{{ $Job->Option_D }}">
                                                                    <label class="form-check-label" for="Answer4">
                                                                        {{ $Job->Option_D }}
                                                                    </label>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                                {{-- <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="text-left">
                                                        <button type="submit" class="site-button">Continue</button>
                                                    </div>
                                                </div> --}}

                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="Subjective">

                                            <div class="row">

                                                <div class="col-xl-12 col-lg-12">
                                                        <!--Description-->
                                                        <div class="form-group">
                                                            <label>Introduced Yourself</label>
                                                            <textarea class="form-control" row="3" name="Job_Subjective_Answers[]"></textarea>
                                                        </div>
                                                    </div>

                                                @foreach ($JobsList->subjective as $Job)
                                                    <div class="col-xl-12 col-lg-12">
                                                        <!--Description-->
                                                        <div class="form-group">
                                                            <label>{{ $Job->Sub_Questions }}</label>
                                                            <textarea class="form-control" row="3" name="Job_Subjective_Answers[]"></textarea>
                                                        </div>
                                                    </div>
                                                @endforeach

                                                {{-- <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="text-left">
                                                        <button type="submit" class="site-button">Continue</button>
                                                    </div>
                                                </div> --}}

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
</div>
<!-- Employer Account START END -->
