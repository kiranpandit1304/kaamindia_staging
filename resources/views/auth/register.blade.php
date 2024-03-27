@extends('layouts.master')

@push('form-style')
@include('layouts.partials.form_css')
@endpush

@section('style')
<style>
    .login-block {
        background: url("{{ asset('assets/images/banner-02.jpg') }}");
        background-size: cover;
    }

    .banner-sec {
        background: url("{{ asset('assets/images/pexels-photo.jpg') }}") left bottom;
        background-size: cover;
        background-repeat: no-repeat;
        min-height: 500px;
        border-radius: 0 30px 30px 0;
        /* border-radius: 0 10px 10px 0; */
        padding: 0;

    }

    .login-sec {
        padding: 50px 30px;
        position: relative;
        border-radius: 30px 0 0 30px;
    }
</style>

@endsection

@section('content')
<!-- inner banner -->

<!-- inner banner -->
<section class="login-block space-ptb mb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7 login-sec  bg-white">
                <div class="login-register">
                    <div class="section-title">
                        <h4 class="text-center">Create Your Account</h4>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="candidate_registration" role="tabpanel">
                            <form action="{{ route('auth.store') }}" method="POST" class="mt-4" id="candidate_registration_form">
                                @csrf
                                <input type="hidden" name="role" value="{{ config('constants.roles.jobseeker') }}">
                                <input type="hidden" name="otp_type" value="{{ config('constants.otp_type.registration') }}">
                                <div class="row">                                    
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="candidate_last_name">Full Name</label>
                                        <input type="text" onkeypress="return RestrictSpace()" class="form-control" name="full_name" placeholder="Last Name" value="{{ old('last_name') }}" id="candidate_last_name">
                                    </div>                                    
                                    <div class="mb-3 col-md-6">
                                        <div class="position-relative">
                                            <label class="form-label" for="candidate_mobile_number">Mobile Numberss <em class="text-danger">*</em></label>
                                            <input type="text" maxlength="10" onkeypress="return /[0-9]/i.test(event.key)" class="form-control mobile_number" placeholder="Mobile Number" id="candidate_mobile_number" name="mobile_number" value="{{ old('mobile_number') }}" data-parsley-minlength-message="Mobile number should have 10 digits" data-parsley-maxlength="10" data-parsley-minlength="10" data-parsley-errors-container="#mobile_number_error_1" data-parsley-trigger="keyup" data-parsley-pattern="/^[0-9]+$/" required>
                                            @if ($errors->has('mobile_number'))
                                            <span class="text-danger">{{ $errors->first('mobile_number') }}</span>
                                            @endif
                                        </div>
                                        <span id="mobile_number_error_1"></span>
                                    </div>                                                                      
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                    </div>

                                    <div class="col-md-6 text-md-end mt-2 text-center">
                                        <p>Already registered? <a href="{{ route('auth.login') }}"> Sign up here</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="employer_registration" role="tabpanel">
                            <form action="{{ route('auth.store') }}" method="POST" class="mt-4" id="employer_registration_form">
                                @csrf
                                <input type="hidden" name="role" value="{{ config('constants.roles.employer') }}">
                                <input type="hidden" name="otp_type" value="{{ config('constants.otp_type.registration') }}">
                                <div class="row">                                    
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="candidate_last_name">Full Name</label>
                                        <input type="text" onkeypress="return RestrictSpace()" class="form-control" name="full_name" placeholder="Last Name" value="{{ old('last_name') }}" id="candidate_last_name">
                                    </div>                                    
                                    <div class="mb-3 col-md-6">
                                        <div class="position-relative">
                                            <label class="form-label" for="candidate_mobile_number">Mobile Numberss <em class="text-danger">*</em></label>
                                            <input type="text" maxlength="10" onkeypress="return /[0-9]/i.test(event.key)" class="form-control mobile_number" placeholder="Mobile Number" id="candidate_mobile_number" name="mobile_number" value="{{ old('mobile_number') }}" data-parsley-minlength-message="Mobile number should have 10 digits" data-parsley-maxlength="10" data-parsley-minlength="10" data-parsley-errors-container="#mobile_number_error_1" data-parsley-trigger="keyup" data-parsley-pattern="/^[0-9]+$/" required>
                                            @if ($errors->has('mobile_number'))
                                            <span class="text-danger">{{ $errors->first('mobile_number') }}</span>
                                            @endif
                                        </div>
                                        <span id="mobile_number_error_1"></span>
                                    </div>                                                                      
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                    </div>
                                    <div class="col-md-6 text-md-end mt-2 text-center">
                                        <p>Already registered? <a href="{{ route('auth.login') }}"> Sign up here</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-5 banner-sec"></div>
        </div>
</section>

<!--
feature-info -->

<!--
feature-info-->
@endsection

@push('js-scripts')
<!-- JS script links only starts here -->
@include('layouts.partials.form_js')

<!-- Template Scripts (Do not remove)-->
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- JS script links only ends here -->
@endpush

@section('script')
<!-- Custom script links only starts here -->
<script>
    function resetForm() {
        if (candidate_password.value != '') {
            confirm('Are Your Sure Data will be reset');
            document.getElementById("candidate_registration_form").reset();
            document.getElementById("parsley-id-15").style.display = "none";
            $('#candidate_registration_form').reset();
        }
    }
    candidate_registration_form.addEventListener('input', () => {
        if (candidate_password.value.length > 0 && candidate_password.value != '') {
            candidate_confirm_password.removeAttribute('disabled');
        } else {
            candidate_confirm_password.setAttribute('disabled', 'true');
        }
    })

    employer_registration_form.addEventListener('input', () => {
        if (employer_password.value.length > 0 && employer_password.value != '') {
            employer_confirm_password.removeAttribute('disabled');
        } else {
            employer_confirm_password.setAttribute('disabled', 'true');
        }
    })
</script>
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
    });
    const togglePsd1 = document.querySelector("#togglePsd1")
    const password_emp = document.querySelector("#candidate_password");
    togglePsd1.addEventListener("click", function(e) {
        // Toggle the type attribute
        const type =
            password_emp.getAttribute("type") === "password" ? "text" : "password";
        password_emp.setAttribute("type", type);
        // Toggle the eye slash icon
        if (
            togglePsd1.src.match(
                "{{ asset('assets/images/eyeclose.svg')}}"
            )
        ) {
            togglePsd1.src =
                "{{ asset('assets/images/eyeopen.svg')}}";
        } else {
            togglePsd1.src =
                "{{ asset('assets/images/eyeclose.svg')}}";
        }
    });
    const togglePsd2 = document.querySelector("#togglePsd2")
    const password_emp1 = document.querySelector("#employer_password");
    togglePsd2.addEventListener("click", function(e) {
        // Toggle the type attribute
        const type =
            password_emp1.getAttribute("type") === "password" ? "text" : "password";
        password_emp1.setAttribute("type", type);
        // Toggle the eye slash icon
        if (
            togglePsd2.src.match(
                "{{ asset('assets/images/eyeclose.svg')}}"
            )
        ) {
            togglePsd2.src =
                "{{ asset('assets/images/eyeopen.svg')}}";
        } else {
            togglePsd2.src =
                "{{ asset('assets/images/eyeclose.svg')}}";
        }
    });
</script>
<!-- Custom script links only ends here -->
@endsection