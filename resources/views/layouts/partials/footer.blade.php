<footer class="footer  mt-3">

  <div class="container pb-4">
    <div class="row py-3 justify-content-center align-items-baseline">

      <div class="col-lg-3 col-md-6">
        <a class="" href="{{ route('home') }}">
          <img class="img-fluid w-75" src="{{ asset('assets/images/kaamindia-logo.png')}}" alt="logo">
        </a>
        <div class="footer-contact-info bg-holder mt-4" style="background-image: url('../../assets/images/google-map.png')">
          <h6 class="text-dark mb-4">Contact Us</h6>
          <ul class="list-unstyled mb-0">
            <li> <i class="fas fa-map-marker-alt text-primary"></i><span>XEAM Tower,E-202, Phase- 8-B, Industrial Area, Mohali, Chandigarh (Punjab)</span> </li>
            <li> <i class="fas fa-mobile-alt text-primary"></i><span>(+91) 172-4360000</span> </li>
            <li> <i class="far fa-envelope text-primary"></i><span>support@jobber.demo</span> </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="footer-link">
          <ul class="list-unstyled font-md">
            <li><a href="{{ route('home') }}" class="text-dark">Home</a></li>
            <li><a href="{{ route('jobList') }}" class="text-dark">Jobs</a></li>


          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
        <div class="footer-link">
          <ul class="list-unstyled font-md">
            <li><a href="#" class="text-dark">Help center</a></li>
            <li><a href="#" class="text-dark">Summons/Notices</a></li>
            <li><a href="#" class="text-dark">Report issue</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
        <div class="footer-link">
          <ul class="list-unstyled font-md">
            <li><a href="#" class="text-dark">Privacy policy</a></li>
            <li><a href="#" class="text-dark">Terms & conditions</a></li>
            <li><a href="#" class="text-dark">Fraud alert</a></li>
            <li><a href="#" class="text-dark"> Trust & safety</a></li>

          </ul>
        </div>
      </div>


    </div>
  </div>
  </div>
</footer>
<!--=================================
Back To Top-->
<div id="back-to-top" class="back-to-top">
  <i class="fas fa-angle-up"></i>
</div>
<!--=================================
Back To Top-->

<!--================================= Signin Modal Popup -->
<div class="modal fade" id="sign_in_modal" tabindex="-1" role="dialog" aria-hidden="true" style="overflow-y: hidden;">
  <div id="pageloader">
    <div id="top">
      <span class="loader"></span>
    </div>
  </div>
  <div class="modal-dialog modal-dialog-centered modal" role="document">
    <!-- Login Modal starts here -->
    <div class="modal-content border-0" id="display">
      <div class="modal-header p-3 bg-primary">
        <h4 class="mb-0 text-left text-white">Welcome To Kaam India<br><span class="fnt">Login To Your Account</span></h4>
        <button type="button" class="btn-close close-btn me-0" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pt-0 mb-3">
        <div class="login-register">
          @if (session('error'))
          <div class="alert alert-danger" role="alert">
            {{ session('error') }}
          </div>
          @endif
          @if (session('success'))
          <div class="alert alert-success" role="alert">
            {{ session('success') }}
          </div>
          @endif
          <div class="row">
            <form action="{{ route('auth.loginUser') }}" method="POST" id="login_form" class="mt-4">
              @csrf
              <div class="row">
                <div class="form-group mb-3 position-relative">
                  <span class="position-absolute start-0 country_code ps-4 text-secondary">+91</span>
                  <label class="form-label text-dark" for="">Mobile Number<em class="text-danger">*</em></label>
                  <input type="text" name="mobile_number" class="form-control ps-5" placeholder="Enter mobile number">
                  <span class="error-msg position-absolute" id="login_mobile_number"></span>
                </div>
                <div class="form-group mb-3 position-relative">
                  <h5 class="position-absolute start-0 ps-4 text-secondary password_icon"><i class="fa fa-key"></i></h5>
                  <label class="form-label text-dark" for="login_password">Password<em class="text-danger">*</em></label>
                  <input type="password" name="password" class="form-control ps-5" id="login_password" placeholder="Enter password">
                  <img src="{{ asset('assets/images/eyeclose.svg')}}" class="eye-icon" id="togglePassword">
                </div>
                <div class="col-12 d-flex my-1">

                  <label class="form-check-label" for="remember1">
                    <input type="checkbox" name="remember" class="pt-1" id="remember1" value="1"> Remember Me
                  </label>
                </div>
                <div class="row text-left mt-2">
                  <div class="col-md-12 d-flex flex-wrap">
                    <div class="login-div">
                      <button type="submit" name="login" value="login_with_password" class="btn login-btn btn-primary btn-sm mx-auto">Login</button>
                      <button type="button" class="login-otp btn p-2" id="login_with_otp" onclick=" otp()">Login With OTP</button>
                    </div>
                    <div class="signup-div pt-1"><span class="ps-2">Don't Have an Account<a data-bs-toggle="tab" href="#employer" role="tab" aria-selected="false" class="ms-2 fw-bold orange-clr" onclick="signup()">Sign up</a></span>
                      <div class=""><a href="{{ route('auth.forgetPassword') }}" role="tab" class="ms-2 text-primary">Forgot Password</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Login Modal ends here -->

    <!-- Sign up Model starts here -->
    <div class="modal-content border-0" id="sign_up_modal">
      <div class="modal-header p-3 bg-primary">
        <h4 class="mb-0 text-left text-white">Welcome To Kaam India<br><span class="fnt text-center;">Register to your account</span></h4>
        <button type="button" class="close-btn btn-close me-0" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pt-0 mb-3">
        <div class="login-register">
          <div class="tab-content">
            <div class="tab-pane active" id="candidate" role="tabpanel">
              @if (session('error'))
              <div class="alert alert-danger" role="alert">
                {{ session('error') }}
              </div>
              @endif
              @if (session('success'))
              <div class="alert alert-success" role="alert">
                {{ session('success') }}
              </div>
              @endif
              <div class="row">
                <form action="{{ route('auth.store') }}" method="POST" class="mt-4" id="sign_up_form">
                  <div class="row" id="">
                    <div class="form-group col-12  mb-3">
                      <input type="hidden" name="role" value="{{ config('constants.roles.jobseeker') }}">
                      <input type="hidden" name="otp_type" value="{{ config('constants.otp_type.registration') }}">
                      <div class="position-relative">
                        <label class="form-label text-dark" for="l_p_candidate_Number">Your Name<em class="text-danger">*</em></label>
                        <span class="position-absolute start-0 ps-4 top-56"> <i class="flaticon-users text-secondary fw-bold"></i></span>
                        <input type="text" name="full_name" class="form-control ps-5 " placeholder="Enter name" id="l_p_candidate_name">
                        <span class="error-msg position-absolute" id="full_name"></span>
                        <p class="position-absolute" id="full_name_err"></p>
                      </div>
                    </div>
                    <div class="form-group col-12 mt-2 mb-3">
                      <div class="position-relative">
                        <span class="position-absolute start-0 ps-3 top-56 text-secondary">+91</span>
                        <label class="form-label text-dark" for="l_p_candidate_Number">Mobile Number<em class="text-danger">*</em></label>
                        <input type="text" minlength="10" maxlength="10" name="mobile_number" class="form-control ps-5" placeholder="Enter mobile number" required id="l_p_candidate_number" />
                        <span class="error-msg position-absolute" id="mobile_number"></span>
                        <p class="position-absolute" id="mobile_number_err"></p>
                      </div>
                    </div>
                    <ul class="nav nav-tabs justify-content-center mx-auto nav-tabs-border d-flex" role="tablist">
                      <li class="nav-item">
                        <div class="tab-icon text-dark box my-2">
                          <i class="flaticon-users d-flex align-items-center"></i>
                        </div>
                        <a class="nav-link  w-75 mx-auto p-2" data-bs-toggle="tab" href="#candidate" id="jobseeker" value="jobseeker" role="tab" aria-selected="false">
                          <div class="d-flex align-items-center justify-content-center">
                            <div class="text-center">
                              <h6 class="m-0">JobSeeker</h6>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="tab-icon text-dark box my-2">
                          <i class="flaticon-suitcase d-flex align-items-center"></i>
                        </div>
                        <a class="nav-link w-75 mx-auto p-2" data-bs-toggle="tab" href="#employer" value="employer" id="employer" role="tab" aria-selected="false">
                          <div class="d-flex align-items-center justify-content-center">
                            <h6 class="m-0">Employer</h6>
                          </div>
                        </a>
                      </li>
                    </ul>
                    <span class="error-msg" id="role"></span>
                  </div>
                  <div class="row text-left mt-2 ms-2">
                    <div class="col-md-12">
                      <button type="submit" class="btn  btn-sm mx-auto text-white orange-bg-clr register-btn" id="register_form">Register</button>
                      <span class="text-center float-end pt-2 pe-4">I have already account<a data-bs-toggle="tab" role="tab" aria-selected="false" href="#login_form" class="ms-2 fw-bold orange-clr" data-bs-target="#login_form" data-bs-toggle="modal" onclick="login()">Log In</a></span>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sign up Model ends here -->

    <!-- OTP Verification Model starts here -->
    <div class="modal-content border-0" id="otp">
      <div class="modal-header p-4 bg-primary">
        <h4 class="mb-0 text-center text-white">OTP</h4>
        <button type="button" class="btn-close close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="text mt-4 text-center">
        <h6 class="text-white">Verification</h6>
        <img src="{{ asset('assets/images/phonen.png')}}" alt="" class="" width="80">
      </div>
      <div class="modal-body pt-0 mb-3">
        <div class="login-register">
          <div class="tab-content">
            <div class="tab-pane active" id="candidate" role="tabpanel">
              @if (session('error'))
              <div class="alert alert-danger" role="alert">
                {{ session('error') }}
              </div>
              @endif
              @if (session('success'))
              <div class="alert alert-success" role="alert">
                {{ session('success') }}
              </div>
              @endif
              <div class="row">

                <form action="{{ route('auth.verifyOtp') }}" method="POST" class="mt-4 input_formate_otp" id="verify_otp">
                  @csrf
                  <div class="verification-code" id="">
                    <span class="text-secondary">Sent a verification code to verify <br>your mobile number </span>
                    <label class="control-label my-3"><span id="hidden_mobile_num"></span></label>
                    <input type="hidden" name="mobile_number" id="mob_number" value="">
                    <input type="hidden" name="userRole" id="user_role" value="">
                    <input type="hidden" name="otp_type" id="otp_type" value="">
                    <div class="verification-code--inputs border-top-0">
                      <input class="inputs otp-number-input keyword_1" type="text" name="verify_otp[]" maxlength="1" required />
                      <input class="inputs otp-number-input keyword_1" type="text" name="verify_otp[]" maxlength="1" required />
                      <input class="inputs otp-number-input keyword_1" type="text" name="verify_otp[]" maxlength="1" required />
                      <input class="inputs otp-number-input keyword_1" type="text" name="verify_otp[]" maxlength="1" required />

                    </div>
                    <h6 class="text-center mb-0 pb-0 mt-3">expery: <b class="orange-clr" id="timer"></b><b class="orange-clr" id="resend_timer"></b></h6>
                    <input type="hidden" id="verificationCode" />
                  </div>
                  <div class="row text-center mt-3">
                    <div class="col-md-12">
                      <button id="confirm" type="button" name="" value="Verify" class="otp-submit verify_otp_btn btn btn-primary btn-sm">Verify</button>
                      <div class="text-center">
                        <span class="text-danger otp_timer_expired"></span></p>
                        <span class="text-danger otp_resend_expired"></span></p>
                        <span class="text-danger verify_otp_error"></span>
                        <span class="text-danger" id="resend"></span>
                        <a href="#" class="resend_sms"><u>Resend OTP</u></a>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

            </div>

          </div>

        </div>
      </div>
    </div>
    <!-- OTP Verification Model ends here -->

    <!-- Forgot password Modal starts here -->
    <div class="modal-content border-0" id="forget">
      <div class="modal-header p-4 bg-primary">
        <h4 class="mb-0 text-center text-white">Forget Password</h4>
        <button type="button" class="btn-close  close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="text mt-4 text-center">
        <h6 class="text-white">forget Your Password</h6>
        <img src="{{ asset('assets/images/forget.png')}}" alt="" class="" width="80">
      </div>
      <div class="modal-body pt-0 mb-3">
        <div class="login-register">
          <div class="tab-content">
            <div class="tab-pane active" id="candidate" role="tabpanel">
              @if (session('error'))
              <div class="alert alert-danger" role="alert">
                {{ session('error') }}
              </div>
              @endif
              @if (session('success'))
              <div class="alert alert-success" role="alert">
                {{ session('success') }}
              </div>
              @endif
              <div class="row">

                <form class="mt-4" id="" action="#">
                  @csrf
                  <div class=" form-group col-12">
                    <div class="position-relative">
                      <h5 class="position-absolute start-0 ps-3 text-secondary key-icon"><i class="fa fa-key"></i></h5>
                      <label class="form-label text-dark" for="fpass">Enter new password<em class="text-danger">*</em></label>
                      <input type="password" name="password" class="form-control ps-5" id="fpass" required placeholder="Password">
                      <img src="{{ asset('assets/images/eyeclose.svg')}}" class="eye-icon" id="forgetpass">
                    </div>
                  </div>

                  <div class="row text-center mt-2 ms-2">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-primary btn-sm mx-auto">Forget</button>

                    </div>

                  </div>
                </form>
              </div>

            </div>

          </div>

        </div>
      </div>
    </div>
    <!-- Forgot password Modal ends here -->

  </div>
</div>

<!--=================================
Signin Modal Popup -->


@section('login-script')

<script>
  // loder
  $(document).ready(function() {

    $("#sign_in_modal, #sign_up_form, #verify_otp").on('hidden.bs.modal', function() {
      $(this).find('form').trigger('reset');
      $(this).find('form').validate().resetForm();
    });

    // $("#login_form").on("submit", function() {
    //   $("#pageloader").fadeIn();
    // });

    // $.validator.addMethod("strongPassword", function(value, element) {
    //   return this.optional(element) || value == value.match(/((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/);
    // }, function(params, element) {
    //   return "Numbers not allowed";
    // });

    $("#login_form").validate({
      ignore: ':hidden, input[type=hidden], .select2-search__field',
      errorElement: 'div',
      // the errorPlacement has to take the table layout into account
      errorPlacement: function(error, element) {
        if (element.is(":radio"))
          error.appendTo(element.parent().parent());
        else if (element.is(":checkbox"))
          error.appendTo(element.parent().parent());
        else
          error.appendTo(element.parent());
      },

      rules: {
        mobile_number: {
          required: true,
          digits: true,
          minlength: 10,
          maxlength: 10
        },
        password: {
          required: true,
          minlength: 8
        }
      },
      messages: {
        mobile_number: {
          required: "Enter phone number"
        },
        password: {
          required: "Enter password",
          minlength: "Password should be minimum 8 characters"
        }
      }
    });

    $("#sign_up_form").validate({
      rules: {
        full_name: {
          required: true,
        },
        mobile_number: {
          required: true
        }
      },
      errorPlacement: function(error, element) {
        var name = $(element).attr("name");
        fieldError = name.replace(/[\[\]']+/g, '');
        error.appendTo($("#" + fieldError + "_err"));
      },

      messages: {
        full_name: {
          required: "Enter full name"
        },
        mobile_number: {
          required: "Enter mobile number"
        }
      }
    });
  });


  $(function() {
    $(".input_formate_otp input").keyup(function(event) {
      if ($(this).val().length == 1) {
        $(this).nextAll('input').first().focus();
      } else if ($(this).val().length > 1) {
        var new_val = $(this).val().substring(1, 2);
        $(this).val(new_val);
        $(this).nextAll('input').first().focus();
      } else if (event.keyCode == 8) {
        if ($(this).prev('input')) {
          $(this).prev('input').focus();
        }
      }
    });
  });

  function signup() {
    document.getElementById("sign_up_modal").style.display = "block";
    document.getElementById("display").style.display = "none";
  }

  function login() {
    document.getElementById("sign_up_modal").style.display = "none";
    document.getElementById("display").style.display = "block";
  }

  // Registration Form Submit

  $(document).ready(function() {
    $('#jobseeker').click(function() {
      $(this).addClass("roles");
      $("#employer").removeClass("roles");
    });
    $('#employer').click(function() {
      $(this).addClass("roles");
      $("#jobseeker").removeClass("roles");
    });
  });

  $(document).on('click', '#register_form', function() {
    // $("#pageloader").fadeIn();
    var selected_role = $(".roles").attr('value');
    const formData = new FormData(sign_up_form);
    const data = {
      "_token": "{{ csrf_token() }}",
      full_name: formData.get('full_name'),
      mobile_number: formData.get('mobile_number'),
      role: selected_role,
      otp_type: formData.get('otp_type'),
    };
    $.ajax({
      type: "POST",
      url: "{{ route('auth.store') }}",
      data: data,
      success: function(response) {
        $("#pageloader").fadeOut();
        document.getElementById("hide").style.display = "none";
        document.getElementById("otp").style.display = "block";
        var mobileNum = response.userDetail.mobile_number;
        var lastTwoDigit = String(mobileNum).slice(-3);
        var numTest = 'Send To +91********' + lastTwoDigit;
        $('#hidden_mobile_num').text(numTest);
        $('#mob_number').val(response.userDetail.mobile_number);
        $('#user_role').val(response.userDetail.userRole);
        $('#otp_type').val(response.userDetail.otp_type);

        // check OTP Expiration
        let timerOn = true;

        function timer(remaining) {
          var m = Math.floor(remaining / 60);
          var s = remaining % 60;

          m = m < 10 ? '0' + m : m;
          s = s < 10 ? '0' + s : s;
          document.getElementById('timer').innerHTML = m + ':' + s;
          remaining -= 1;

          if (remaining >= 0 && timerOn) {
            setTimeout(function() {
              timer(remaining);
            }, 1000);
            return;
          }

          if (!timerOn) {
            // Do validate stuff here
            return;
          }
          $(".otp_timer_expired").text("OTP expired !");
        }
        timer(120);

      }
      // error: function(response) {
      //   $("#pageloader").fadeOut();
      //   if (response.status === 422) {
      //     var errors = $.parseJSON(response.responseText);
      //     $.each(errors, function(key, val) {
      //       for (let i in val) {
      //         $("#mobile_number").text(val['mobile_number'])
      //         $("#full_name").text(val['full_name'])
      //         $("#role").text(val['role'])
      //       }

      //     });
      //   }
      // }
    });

  });
  // End Registration Form

  // Login With OTP
  $(document).on('click', '#login_with_otp', function() {
    $("#pageloader").fadeIn();
    let login_with_otp = $('#login_with_otp').val();
    const formData = new FormData(login_form);
    const data = {
      "_token": "{{ csrf_token() }}",
      mobile_number: formData.get('mobile_number'),
      login_with_otp: login_with_otp,
    };
    $.ajax({
      type: "POST",
      url: "{{ route('auth.loginUser') }}",
      data: data,
      success: function(response) {
        $("#pageloader").fadeOut();
        if (response == 402) {
          $('#login_mobile_number').text('Enter mobile number')
        } else {
          // document.getElementById("display").style.display = "none";
          document.getElementById("otp").style.display = "block";
          var mobileNum = response.userDetail.mobile_number;
          var lastTwoDigit = String(mobileNum).slice(-3);
          var numTest = 'Send To +91********' + lastTwoDigit;
          $('#hidden_mobile_num').text(numTest);
          $('#mob_number').val(response.userDetail.mobile_number);
          $('#user_role').val(response.userDetail.userRole);
          $('#otp_type').val(response.userDetail.otp_type);
          // check OTP Expiration

          let timerOn = true;

          function timer(remaining) {
            var m = Math.floor(remaining / 60);
            var s = remaining % 60;

            m = m < 10 ? '0' + m : m;
            s = s < 10 ? '0' + s : s;
            document.getElementById('timer').innerHTML = m + ':' + s;
            remaining -= 1;

            if (remaining >= 0 && timerOn) {
              setTimeout(function() {
                timer(remaining);
              }, 1000);
              return;
            }

            if (!timerOn) {
              // Do validate stuff here
              return;
            }
            $(".otp_timer_expired").text("OTP expired !");
          }
          timer(120);

        }

      }
    });

  });

  // End Login With OTP

  // resend OTP
  jQuery(document).on('click', ".resend_sms", function() {
    $("#pageloader").fadeIn();
    let mobile_number = $('#mob_number').val();
    let otp_type = $('#otp_type').val();
    jQuery.ajax({
      type: 'post',
      url: '{{ route("auth.resendOtp") }}',
      data: {
        "_token": "{{ csrf_token() }}",
        "action": "resend_sms",
        'mobile_number': mobile_number,
        'otp_type': otp_type
      },
      success: function(response) {
        $("#pageloader").fadeOut();
        $('#resend').text(response);
        $('#timer').css("display", "none");
        $(".otp_timer_expired").css("display", "none");

        // check OTP Expiration
        let timerOn = true;
        // set Expiration time in second(120)
        let expireTime = 120;

        function timer(remaining) {
          var m = Math.floor(remaining / 60);
          var s = remaining % 60;

          m = m < 10 ? '0' + m : m;
          s = s < 10 ? '0' + s : s;
          document.getElementById('resend_timer').innerHTML = m + ':' + s;
          remaining -= 1;

          if (remaining >= 0 && timerOn) {
            setTimeout(function() {
              timer(remaining);
            }, 1000);
            return;
          }

          if (!timerOn) {
            // Do validate stuff here
            return;
          }
          $(".otp_resend_expired").text("OTP expired !");
        }
        timer(expireTime);
      }
    });
  });

  // Verify OTP
  jQuery(document).on('click', ".verify_otp_btn", function() {
    $("#pageloader").fadeIn();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var verify_otp_1 = $("#verify_otp_1").val();
    var verify_otp_2 = $("#verify_otp_2").val();
    var verify_otp_3 = $("#verify_otp_3").val();
    var verify_otp_4 = $("#verify_otp_4").val();
    if (verify_otp_1 == "" || verify_otp_2 == "" || verify_otp_3 == "" || verify_otp_4 == "") {
      $(".verify_otp_error").text("Please enter your verification code.");
    } else {
      var data = new FormData(verify_otp);
      $.ajax({
        type: "POST",
        url: "{{ route('auth.verifyOtp') }}",
        data: data,
        processData: false,
        contentType: false,
        success: function(response) {
          $("#pageloader").fadeOut();
          if (response.status == 1) {
            window.location.href = response.redirectUrl
          } else if (response.status == 0) {
            $(".verify_otp_error").text("Please enter valid verification code.");
          } else if (response.status == 2) {
            $(".verify_otp_error").text("Your OTP Expired !");
          }
        }
      });
    }

  });

  // End Verify OTP

  // function forget() {

  //   document.getElementById("forget").style.display = "block";
  //   document.getElementById("display").style.display = "none";
  // }

  // function otp() {

  //   document.getElementById("display").style.display = "none";
  //   document.getElementById("otp").style.display = "block";

  // }

  // function login() {
  //   event.preventDefault()
  //   document.getElementById("display").style.display = "block";
  //   document.getElementById("hide").style.display = "none";
  //   document.getElementById("forget").style.display = "none";
  // }

  const togglePassword = document.querySelector("#togglePassword")
  const password_emp1 = document.querySelector("#login_password");
  togglePassword.addEventListener("click", function(e) {
    // Toggle the type attribute
    const type =
      password_emp1.getAttribute("type") === "password" ? "text" : "password";
    password_emp1.setAttribute("type", type);
    // Toggle the eye slash icon
    if (
      togglePassword.src.match(
        "{{ asset('assets/images/eyeclose.svg')}}"
      )
    ) {
      togglePassword.src =
        "{{ asset('assets/images/eyeopen.svg')}}";
    } else {
      togglePassword.src =
        "{{ asset('assets/images/eyeclose.svg')}}";
    }
  });

  const forgetpass = document.querySelector("#forgetpass")
  const fpassword = document.querySelector("#fpass");
  forgetpass.addEventListener("click", function(e) {
    // Toggle the type attribute
    const type =
      fpassword.getAttribute("type") === "password" ? "text" : "password";
    fpassword.setAttribute("type", type);
    // Toggle the eye slash icon
    if (
      forgetpass.src.match(
        "{{ asset('assets/images/eyeclose.svg')}}"
      )
    ) {
      forgetpass.src =
        "{{ asset('assets/images/eyeopen.svg')}}";
    } else {
      forgetpass.src =
        "{{ asset('assets/images/eyeclose.svg')}}";
    }
  });
</script>
@endsection