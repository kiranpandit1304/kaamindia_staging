@extends('layouts.master')
<meta name="csrf-token" content="{{ csrf_token() }}">
@push('form_style')
@include('layouts.partials.form_css')
@endpush

@section('style')
<style>
    .otp-wrapper {
        text-align: center;
        margin-top: 20px;
    }

    .otp-container {
        display: inline-block;
    }

    .otp-container .otp-number-input {
        width: 50px;
        height: 33px;
        margin: 0 2px;
        border: none;
        border-bottom: 2px solid rgba(0, 0, 0, 0.2);
        padding: 0;
        color: rgba(0, 0, 0, 0.7);
        margin-bottom: 0;
        padding-bottom: 0;
        font-size: 30px;
        box-shadow: none;
        text-align: center;
        background-color: none;
        font-weight: 600;
        border-radius: 0;
        outline: 0;
        transition: border 0.3s ease;
    }

    .otp-container .otp-number-input:focus {
        border-color: rgba(0, 0, 0, 0.5);
    }

    .otp-container .otp-number-input.otp-filled-active {
        border-color: #ff8a00;
    }

    .otp-submit {
        background: #ff8a00;
        border: 0;
        color: #fff;
        margin-top: 30px;
        padding: 14px 30px;
        font-size: 14px;
        border-radius: 3px;
        font-weight: 500;
        cursor: pointer;
    }

    .otp-submit[disabled] {
        opacity: 0.6;
        cursor: default;
    }
</style>
@endsection

@section('content')
<!--inner banner -->
<div class="header-inner bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-primary">Verify</h2>
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html"> Home </a></li>
                    <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Verify </span></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--inner banner -->

<!--Register -->
<section class="space-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="login-register">
                    <div class="section-title text-center">
                        <h4>Enter Verification Code</h4>
                        <p class="mt-0">We have just sent a verification code to <span class="text-primary fw-bold">+91 {{ substr($userDetail['mobile_number'], 0, 2) }}***
                                ***{{ substr($userDetail['mobile_number'], -2) }}</span></p>
                    </div>
                    <form action="{{ route('auth.verifyOtp') }}" method="POST" class="mt-4" id="verify_otp">
                        @csrf
                        <input type="hidden" name="mobile_number" id="mobile_number" value="{{ $userDetail['mobile_number'] }}">
                        <input type="hidden" name="userRole" id="user_role" value="{{ $userDetail['userRole'] }}">
                        <input type="hidden" name="otp_type" id="otp_type" value="{{ $userDetail['otp_type'] }}">
                        <div class="row">
                            <div class="mb-4 col-md-12 text-center">
                                <label class="form-label" for="otp">Enter OTP *</label>
                                <div class="otp-wrapper otp-event">
                                    <div class="otp-container">
                                        <input type="tel" name="verify_otp[]" id="otp-number-input-1" class="otp-number-input" maxlength="1" autocomplete="off">
                                        <input type="tel" name="verify_otp[]" id="otp-number-input-2" class="otp-number-input" maxlength="1" autocomplete="off">
                                        <input type="tel" name="verify_otp[]" id="otp-number-input-3" class="otp-number-input" maxlength="1" autocomplete="off">
                                        <input type="tel" name="verify_otp[]" id="otp-number-input-4" class="otp-number-input" maxlength="1" autocomplete="off">
                                    </div>
                                    <div>
                                        <button id="confirm" type="button" name="" value="Verify" class="otp-submit verify_otp_btn" disabled>Verify</button>
                                    </div>
                                </div>

                            </div>
                            <div class="text-center">
                                <p class="text-danger">OTP valid for <span id="timer"></span></p>
                                <span class="text-danger otp_timer_expired"></span></p>
                                <span class="text-danger verify_otp_error"></span>
                                <span class="text-danger" id="resend"></span>
                                <a href="#" class="resend_sms"><u>Resend OTP</u></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Register -->

@endsection

<!-- JS script links only starts here -->
@push('js_scripts')
@include('layouts.partials.form_js')

<!-- Template Scripts (Do not remove)-->
@endpush
<!-- JS script links only ends here -->


<!-- Custom script links only starts here -->
@section('script')
<script>
    $(document).ready(function() {
        $('#candidate_registration_form').parsley();
        $('#employer_registration_form').parsley();

        $('#employer_role').on('change', function() {
            if ($(this).val() === 'Company') {
                $('#employer_industry_div').removeClass('d-none');
                $('#employer_industry').prop('required', true);
            } else {
                $('#employer_industry_div').find('select').val('').trigger('change');
                $('#employer_industry').prop('required', false);
                $('#employer_industry_div').addClass('d-none');
            }
        });

        function handlePasteOTP(e) {
            var clipboardData = e.clipboardData || window.clipboardData || e.originalEvent.clipboardData;
            var pastedData = clipboardData.getData('Text');
            var arrayOfText = pastedData.toString().split('');
            /* for number only */
            if (isNaN(parseInt(pastedData, 10))) {
                e.preventDefault();
                return;
            }
            for (var i = 0; i < arrayOfText.length; i++) {
                if (i >= 0) {
                    document.getElementById('otp-number-input-' + (i + 1)).value = arrayOfText[i];
                } else {
                    return;
                }
            }
            e.preventDefault();
        }

        $(document).ready(function() {
            $('.otp-event').each(function() {
                var $input = $(this).find('.otp-number-input');
                var $submit = $(this).find('.otp-submit');
                $input.keydown(function(ev) {
                    otp_val = $(this).val();
                    if (ev.keyCode == 37) {
                        $(this).prev().focus();
                        ev.preventDefault();
                    } else if (ev.keyCode == 39) {
                        $(this).next().focus();
                        ev.preventDefault();
                    } else if (otp_val.length == 1 && ev.keyCode != 8 && ev.keyCode != 46) {
                        otp_next_number = $(this).next();
                        if (otp_next_number.length == 1 && otp_next_number.val().length == 0) {
                            otp_next_number.focus();
                        }
                    } else if (otp_val.length == 0 && ev.keyCode == 8) {
                        $(this).prev().val("");
                        $(this).prev().focus();
                    } else if (otp_val.length == 1 && ev.keyCode == 8) {
                        $(this).val("");
                    } else if (otp_val.length == 0 && ev.keyCode == 46) {
                        next_input = $(this).next();
                        next_input.val("");
                        while (next_input.next().length > 0) {
                            next_input.val(next_input.next().val());
                            next_input = next_input.next();
                            if (next_input.next().length == 0) {
                                next_input.val("");
                                break;
                            }
                        }
                    }

                }).focus(function() {
                    $(this).select();
                    var otp_val = $(this).prev().val();
                    if (otp_val === "") {
                        $(this).prev().focus();
                    } else if ($(this).next().val()) {
                        $(this).next().focus();
                    }
                }).keyup(function(ev) {
                    otpCodeTemp = "";
                    $input.each(function(i) {
                        if ($(this).val().length != 0) {
                            $(this).addClass('otp-filled-active');
                        } else {
                            $(this).removeClass('otp-filled-active');
                        }
                        otpCodeTemp += $(this).val();
                    });
                    if ($(this).val().length == 1 && ev.keyCode != 37 && ev.keyCode != 39) {
                        $(this).next().focus();
                        ev.preventDefault();
                    }
                    $input.each(function(i) {
                        if ($(this).val() != '') {
                            $submit.prop('disabled', false);
                        } else {
                            $submit.prop('disabled', true);
                        }
                    });

                });
                $input.on("paste", function(e) {
                    window.handlePasteOTP(e);
                });
            });

        });

        // resend OTp
        jQuery(document).on('click', ".resend_sms", function() {
            // let email = $('#email_sms').val();
            let mobile_number = $('#mobile_number').val();
            let otp_type = $('#otp_type').val();
            jQuery.ajax({
                type: 'post',
                url: '{{ route("auth.resendOtp") }}',
                data: {
                    "action": "resend_sms",
                    // 'email': email,
                    'mobile_number': mobile_number,
                    'otp_type': otp_type
                },
                success: function(response) {
                    // console.log("response", response)
                    $('#resend').text(response);
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
            });
        });


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

        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(".verify_otp_btn").click(function() {
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
                            console.log(response.status)
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
        });

    });
</script>
@endsection
<!-- Custom script links only ends here -->