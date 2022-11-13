 <!-- Login Section Start -->
 <div class="section-full site-bg-white">

     <div class="container-fluid">
         <div class="row">
             <div class="col-xl-8 col-lg-6 col-md-5 twm-log-reg-media-wrap">
                 <div class="twm-log-reg-media">
                     <div class="twm-l-media">
                         <img src="{{ asset('images/login-bg.png') }}" alt="">
                     </div>
                 </div>
             </div>
             <div class="col-xl-4 col-lg-6 col-md-7">
                 <div class="twm-log-reg-form-wrap">
                     <div class="twm-log-reg-logo-head">
                         <a href="{{ route('Frontend.index') }}">
                             <img src="{{ asset('images/logo-dark.png') }}" alt="" class="logo">
                         </a>
                     </div>

                     <div class="twm-log-reg-inner">
                         <div class="twm-log-reg-head">
                             <div class="twm-log-reg-logo">
                                 <span class="log-reg-form-title">Log In</span>
                             </div>
                         </div>
                         <div class="twm-tabs-style-2">

                             <ul class="nav nav-tabs" id="myTab2" role="tablist">

                                 <!--Login Candidate-->
                                 <li class="nav-item">
                                     <button class="nav-link active" data-bs-toggle="tab"
                                         data-bs-target="#twm-login-candidate" type="button"><i
                                             class="fas fa-user-tie"></i>Login Form</button>
                                 </li>

                             </ul>

                             <div class="tab-content" id="myTab2Content">
                                 <!--Login Candidate Content-->
                                 <div class="tab-pane fade show active" id="twm-login-candidate">
                                     <div class="row">

                                         <form action="{{ route('login.submit') }}" method="POST">
                                             @csrf
                                             <div class="col-lg-12">
                                                 <div class="form-group mb-3">
                                                     <input name="ADM_Email" type="email" required=""
                                                         class="form-control" placeholder="Email Address:">
                                                 </div>
                                             </div>

                                             <div class="col-lg-12">
                                                 <div class="form-group mb-3">
                                                     <input name="ADM_Password" type="password" class="form-control"
                                                         required="" placeholder="Password:">
                                                 </div>
                                             </div>

                                             <div class="col-lg-12">
                                                 <div class="twm-forgot-wrap">
                                                     <div class="form-group mb-3">
                                                         <div class="form-check">
                                                             <input type="checkbox" class="form-check-input"
                                                                 id="Password4">
                                                             <label class="form-check-label rem-forgot"
                                                                 for="Password4">Remember me <a href="javascript:;"
                                                                     class="site-text-primary">Forgot
                                                                     Password</a></label>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <button type="submit" class="site-button">Log in</button>
                                                 </div>
                                             </div>
                                         </form>

                                         <div class="col-md-12">
                                             <div class="form-group">
                                                 <span class="center-text-or">Or</span>
                                             </div>
                                         </div>

                                         <div class="col-md-12">
                                             <div class="form-group">
                                                 <button type="submit" class="log_with_facebook">
                                                     <i class="fab fa-facebook"></i>
                                                     Continue with Facebook
                                                 </button>
                                             </div>
                                         </div>

                                         <div class="col-md-12">
                                             <div class="form-group">
                                                 <button type="submit" class="log_with_google">
                                                     <img src="{{ asset('images/google-icon.png') }}" alt="">
                                                     Continue with Google
                                                 </button>
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
 <!-- Login Section End -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


 @if (Session::has('Error!'))
     <script>
         toastr.error("{!! Session::get('Error!') !!}");
     </script>
 @endif
 @if (Session::has('Success!'))
     <script>
         toastr.error("{!! Session::get('Success!') !!}");
     </script>
 @endif
