@extends('layouts.master')

@push('form-style')
@include('layouts.partials.form_css')
@endpush

@section('style')
<style>
    /* .login-block {
        background: url('../assets/images/banner-02.jpg');
        background-size: cover;
    } */
    /* #varification {
        display: none;
    } */
    .error-msg {
        color: red;
    }

    #verify_email {
        display: none;
    }

    .btn-warning {
        background-color: #f25e20 !important;
        border-color: #f25e20 !important;
    }

    /* .container-fluid {
        padding: 0 180px !important;
    } */
</style>
@endsection

@section('content')
<!--=================================
inner banner -->

<!--=================================
inner banner -->

<!--Register -->
<section class="space-ptb login-block pt-0 pb-0">
    <div id="pageloader">
        <div id="top">
            <span class="loader"></span>
        </div>
    </div>
    <div class="container-fluid my-5">
        <div class="row justify-content-center align-items-center px-5">
            <div class="col-xl-12 col-lg-8 col-md-12 user-dashboard-info-box p-0 m-0">
                <div class="login-register">

                    <form action="{{ route('auth.checkForgotPassword') }}" method="POST" id="forgot_password_form">
                        @csrf
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-6 d-xl-block d-none text-center">
                                <img src="{{ asset('assets/images/fogot1.jpg')}}" alt="" class="w-75" width="">
                            </div>
                            <div class="col-xl-5">
                                <div class="section-title text-left mb-4">
                                    <h3 class="text-primary">Forgot password ?</h3>
                                    <p class="mt-0">Enter your email and we'll send you a link to to get back into your account</p>
                                    <p class=".error-msg "></p>
                                    @if ($message = Session::get('error'))
                                    <div class="alert alert-danger alert-block">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @endif
                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @endif
                                </div>
                                <div id="get">
                                    <label class="form-label" for="email">Email or Phone<em class="text-danger">*</em></label>
                                    <input type="text" name="email_or_phone" id="email" class="form-control w-75" placeholder="Enter email or phone">
                                    <strong id="msg" class="text-success my-2 d-none">Successfull Send</strong>
                                    <p id="email_or_phone_err"></p>
                                </div>
                                @if(!empty($user))
                                <div id="varification" class="mt-3">
                                    <div class="position-relative">
                                        <h3 class="text-primary"><i class="fas fa-mobile-alt position-absolute start-0"></i></h3>
                                        <input type="hidden" name="email" value="{{$user->mobile_number}}" id="forgot_mobile_number">
                                        <span class="ms-4 ps-2"> <a href="#" id="reset_password_mobile_number" class="text-secondary">Get a verification code at +91 {{substr($user->mobile_number, 0, 2) }}******{{substr($user->mobile_number, -2) }} phone number</a></span>
                                    </div><br>
                                    <div class="position-relative">
                                        <h3 class="text-primary"><i class="fa fa-envelope-open-text position-absolute start-0"></i></h3>
                                        <input type="hidden" name="email" value="{{$user->email}}" id="forgot_email">
                                        <span class="ms-4 ps-2"><a href="#" class="text-secondary reset_password_email">Get a verification code at {{substr($user->email, 0, 2) }}*******{{substr($user->email, -12) }} email</a></span>
                                    </div><br>
                                    <div class="position-relative">
                                        <h3 class="text-primary"><i class="far fa-question-circle position-absolute start-0"></i></h3>
                                        <span class="ms-4 ps-2"><a href="#" class="text-secondary">Get help for a security reason</a></span>
                                    </div>
                                </div>
                                @endif
                                <div class="my-4"><button type="submit" class="btn btn-primary btn-sm" id="send">Send</button>
                                </div>


                            </div>

                        </div>
                </div>

                </form>
            </div>
        </div>
    </div>
    <!-- Verification OTP model show -->
    <div id="otpModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div id="pageloader">
            <div id="top">
                <span class="loader"></span>
            </div>
        </div>
        <div class="modal-dialog modal-dialog-centered modal" role="document">

            <div class="modal-content border-0">
                <div class="modal-header p-4 bg-primary">
                    <h4 class="mb-0 text-center text-white">OTP</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="text mt-4 text-center">
                    <h6 class="text-primary">Verification</h6>
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

                                    <form action="{{ route('auth.verifyOtp') }}" method="POST" class="mt-4 input_formate_otp" id="verify_forgot_otp">
                                        @csrf
                                        <div class="verification-code">
                                            <span class="text-secondary">Sent a verification code to verify <br>your mobile number </span>
                                            <label class="control-label my-3"><span id="hidden_forgot_num"></span></label>
                                            <input type="hidden" name="mobile_number" id="mob_number" value="">
                                            <input type="hidden" name="userRole" id="user_role" value="">
                                            <input type="hidden" name="otp_type" id="otp_type" value="">
                                            <div class="verification-code--inputs border-top-0">
                                                <input class="inputs otp-number-input keyword_1" type="text" name="verify_otp[]" maxlength="1" required />
                                                <input class="inputs otp-number-input keyword_1" type="text" name="verify_otp[]" maxlength="1" required />
                                                <input class="inputs otp-number-input keyword_1" type="text" name="verify_otp[]" maxlength="1" required />
                                                <input class="inputs otp-number-input keyword_1" type="text" name="verify_otp[]" maxlength="1" required />

                                            </div>
                                            <h6 class="text-center mb-0 pb-0 mt-3">expery: <b style="color:#f25e20;" id="timer"></b><b style="color:#f25e20;" id="forgot_resend_timer"></b></h6>
                                            <input type="hidden" id="verificationCode" />
                                        </div>
                                        <div class="row text-center mt-3">
                                            <div class="col-md-12">
                                                <button type="button" name="" value="Verify" class="otp-submit verify_otp_btn btn btn-primary btn-sm">Verify</button>
                                                <div class="text-center">
                                                    <span class="text-danger otp_timer_expired"></span></p>
                                                    <span class="text-danger verify_otp_error"></span>
                                                    <span class="text-danger" id="resend"></span>
                                                    <a href="#" class="forgot_resend_sms"><u>Resend OTP</u></a>
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
        </div>
    </div>
    <!-- Email semd success Popup Open -->
    <div id="emailModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal" role="document">
            <div class="modal-content border-0">
                <div class="modal-header p-4 bg-primary">
                    <h4 class="mb-0 text-center text-white">OTP</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="text mt-4 text-center">
                    <h6 class="text-primary">Verification</h6>
                    <img src="{{ asset('assets/images/forgot.png')}}" alt="" class="" width="120">
                </div>
                <div class="modal-body pt-0 mb-3">
                    <div class="login-register">
                        <div class="tab-content">
                            <div class="tab-pane active" id="candidate" role="tabpanel">
                                <div class="row">
                                    <form class="mt-4">
                                        <div class="verification-code">
                                            <h5 class="">Check Your Mail</h5>
                                            <span class="text-secondary">We have sent a password recover<br> instructions to your email.</span><br>
                                            <a href="#" class="btn btn-primary btn-sm mx-auto text-center mt-3">Open email aap</a><br>
                                        </div>

                                        <div class="row text-center">
                                            <div class="col-md-12">
                                                <span class=""><a href="#" class="btn" id="resend_password_email" style="color:#f25e20;">Resend email</a></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- End HTML Code Here -->
@endsection

@push('js_scripts')
<!-- JS script links only starts here -->
@include('layouts.partials.form_js')

<!-- Template Scripts (Do not remove)-->
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{ asset('assets/plugins/jquery-validate/jquery.validate.min.js') }}"></script>

<!-- JS script links only ends here -->
@endpush


@section('script')
<!-- Custom script links only starts here -->
<script>
    // $(document).ready(function() {
    //     $('#forgot_password_form').parsley();
    // });

    // loder
    $(document).ready(function() {
        $("#forgot_password_form").on("submit", function() {
            $("#pageloader").fadeIn();
        });
        //submit

        $("#forgot_password_form").validate({

            rules: {
                email_or_phone: {
                    required: true,
                },
            },
            errorPlacement: function(error, element) {
                var name = $(element).attr("name");
                fieldError = name.replace(/[\[\]']+/g, '');
                error.appendTo($("#" + fieldError + "_err"));
            },

            messages: {
                email_or_phone: {
                    required: "Enter job title"
                },
            }
        }).on('change', function() {
            $(this).valid();
        });

    });
    //  OTP Input Parameter
    // otp
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



    // send reset password link on email
    $(document).on('click', '.reset_password_email', function() {
        $("#pageloader").fadeIn();
        let email = $('#forgot_email').val();
        const data = {
            "_token": "{{ csrf_token() }}",
            email: email,
        };
        $.ajax({
            type: "POST",
            url: "{{ route('auth.submitForgetPassword') }}",
            data: data,
            success: function(response) {
                $("#pageloader").fadeOut();
                if (response == 402) {
                    $('.error-msg ').text('Oops something went wrong !');
                } else {
                    $("#emailModal").modal("show");
                }
            }
        });

    });
    // End Send reset password link
    // resend emailForgot password
    $(document).on('click', '#resend_password_email', function() {
        $("#pageloader").fadeIn();
        let email = $('#forgot_email').val();
        const data = {
            "_token": "{{ csrf_token() }}",
            email: email,
        };
        $.ajax({
            type: "POST",
            url: "{{ route('auth.submitForgetPassword') }}",
            data: data,
            success: function(response) {
                $("#pageloader").fadeOut();
                if (response == 402) {
                    $('.error-msg ').text('Oops something went wrong !');
                } else {
                    $("#emailModal").modal("show");
                }
            }
        });

    });
    // End resend emailForgot password

    // Send OTP For Reset password
    $(document).on('click', '#reset_password_mobile_number', function() {
        $("#pageloader").fadeIn();
        let mobile_number = $('#forgot_mobile_number').val();
        const data = {
            "_token": "{{ csrf_token() }}",
            mobile_number: mobile_number,
            login_with_otp: 'reset_with_mobile_number',
        };
        $.ajax({
            type: "POST",
            url: "{{ route('auth.submitForgetPassword') }}",
            data: data,
            success: function(response) {
                $("#pageloader").fadeOut();
                if (response == 402) {
                    $('#login_mobile_number').text('Oops something went wrong !')
                } else {
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

                    $("#otpModal").modal("show");
                    var mobileNum = response.userDetail.mobile_number;
                    var lastTwoDigit = String(mobileNum).slice(-3);
                    var numTest = 'Send To +91********' + lastTwoDigit;
                    $('#hidden_forgot_num').text(numTest);
                    $('#mob_number').val(response.userDetail.mobile_number);
                    $('#user_role').val(response.userDetail.userRole);
                    $('#otp_type').val(response.userDetail.otp_type);
                }

            }
        });

    });
    // End Send OTp For Reset password

    // Check OTP Vrification
    // resend OTP
    jQuery(document).on('click', ".forgot_resend_sms", function() {
        $("#pageloader").fadeIn();
        // let email = $('#email_sms').val();
        let mobile_number = $('#mob_number').val();
        let otp_type = $('#otp_type').val();
        jQuery.ajax({
            type: 'post',
            url: '{{ route("auth.resendOtp") }}',
            data: {
                "_token": "{{ csrf_token() }}",
                "action": "resend_sms",
                // 'email': email,
                'mobile_number': mobile_number,
                'otp_type': otp_type
            },
            success: function(response) {
                $("#pageloader").fadeOut();
                // console.log("response", response)
                $('#resend').text(response);
                $('#timer').css("display", "none");
                $(".otp_timer_expired").css("display", "none");
                let timerOn = true;

                function timer(remaining) {
                    var m = Math.floor(remaining / 60);
                    var s = remaining % 60;

                    m = m < 10 ? '0' + m : m;
                    s = s < 10 ? '0' + s : s;
                    document.getElementById('forgot_resend_timer').innerHTML = m + ':' + s;
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
            var data = new FormData(verify_forgot_otp);
            var otp_type = 'forgot_password';
            $.ajax({
                type: "POST",
                url: "{{ route('auth.verifyOtp') }}",
                data: data,
                processData: false,
                contentType: false,
                success: function(response) {
                    $("#pageloader").fadeOut();
                    if (response.status == 1) {
                        window.location.href = response.token
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
</script>
<!-- Custom script links only ends here -->
@endsection