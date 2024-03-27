@extends('employer.layouts.master')

@push('form_style')
@include('employer.layouts.partials.form_css')
<!-- css-cdn -->

@endpush

@section('style')
<!-- add style.css -->
<style>
    .field_icon {
        top: 37px;
    }

    .error {
        margin-bottom: 0;
    }

    .field_icon_pwd {
        top: 40px;
    }

    .eye-close {
        position: relative;
        /* left: 93%; */
        /* top: -36px; */
        z-index: 2;
        filter: contrast(0.5);
        width: 20px;
        height: 20px;
    }
</style>
@endsection

@section('content')
<!-- My Profile -->
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps-0">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-0 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 ps-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-5 ">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark " aria-current="page">Profile</li>
                </ol>
            </nav>
            <div class="collapse navbar-collapse mt-sm-02 me-md-0" id="navbar">
                <ul class="ms-md-auto navbar-nav  justify-content-end">
                    <li class="nav-item hidden-bar ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav" onclick="hide()">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-3">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <section class="p-2 card-shadow">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="user-dashboard-info-box">
                                    <div class="section-title-02  mt-3">
                                        <h4 class="pb-3 border-bottom">Basic Information</h4>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-lg-12">
                                            <form method="post" action="{{ route('employer.update',$user->id)  }}" id="profileForm">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="role" value="{{ config('constants.roles.employer') }}">
                                                <div class="form-group mb-3">
                                                    <div class="position-relative">
                                                        <label class="form-label">Full Name<em class="text-danger">*</em></label>
                                                        <span class="position-absolute start-0 ps-3 field_icon">
                                                            <i class="fas fa-user opacity-10 pt-2"></i>
                                                        </span>
                                                        <input type="text" name="full_name" class="ps-5 border form-control" value="{{ $user->full_name }}" placeholder="Full Name">
                                                        @if ($errors->has('first_name'))
                                                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="position-relative">
                                                        <span class="position-absolute start-0 ps-3 field_icon">
                                                            <i class="fas fa-envelope opacity-10 pt-2"></i>
                                                        </span>
                                                        <label class="form-label">Email<em class="text-danger">*</em></label>
                                                        <input type="email" name="email" class="ps-5 border form-control" value="{{ $user->email }}" placeholder="Email">
                                                        @if ($errors->has('email'))
                                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="position-relative">
                                                        <span class="position-absolute start-0 ps-3 field_icon">
                                                            <i class="fas fa-phone-alt opacity-10 pt-2"></i>
                                                        </span>
                                                        <label class="form-label">Phone<em class="text-danger">*</em></label>
                                                        <input type="text" name="mobile_number" minlength="10" maxlength="10" onkeypress="return /[0-9]/i.test(event.key)" placeholder="Phone" required class="ps-5 border form-control" value="{{ $user->mobile_number }}">
                                                        @if ($errors->has('mobile_number'))
                                                        <span class="text-danger">{{ $errors->first('mobile_number') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <button type="submit" name="update" value="update" class="btn text-white btn-primary mb-4">Update</button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6">
                <section class="p-2 box card-shadow">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-md-12">
                                <div class="user-dashboard-info-box">
                                    <div class="section-title-02 mt-3">
                                        <h4 class="pb-3 border-bottom text-left">Change Password</h4>
                                    </div>
                                    <div class="row pt-3 justify-content-start">
                                        <div class="col-lg-12 col-12">
                                            <form method="POST" action="{{ route('employer.changePasswordSubmit') }}" id="changePassword">
                                                @csrf
                                                <div class="form-group mb-3 col-md-12 mb-3">
                                                    <div class="position-relative">
                                                        <span class="position-absolute start-0 field_icon ps-3">
                                                            <i class=" fas fa-key opacity-10 pt-2"></i>
                                                        </span>
                                                        <label class="form-label">Current Password<em class="text-danger">*</em></label>
                                                        <input type="password" class="ps-5 border form-control @error('current_password') is-invalid @enderror" name="current_password" placeholder="Current Password">
                                                    </div>
                                                    @if ($errors->has('current_password'))
                                                    <span class="text-danger">{{ $errors->first('current_password') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-12 mb-3">
                                                    <div class="position-relative">
                                                        <span class="position-absolute start-0 field_icon_pwd ps-3">
                                                            <i class=" fas fa-key opacity-10"></i>
                                                        </span>
                                                        <label class="form-label">New Password<em class="text-danger">*</em></label>
                                                        <input type="password" class="ps-5 form-control border @error('password') is-invalid @enderror" id="emp_password" placeholder="New Password" name="password" autocomplete="password">
                                                        <div class="position-absolute field_icon_pwd end-0">
                                                            <img src="{{ asset('assets/images/eyeclose.svg')}}" class="eye-close me-3" id="newPassword">
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-12 mt-4">
                                                    <div class="position-relative conf-pwd">
                                                        <span class="position-absolute start-0 field_icon ps-3">
                                                            <i class=" fas fa-key opacity-10 pt-2"></i>
                                                        </span>
                                                        <label class="form-label">Confirm Password<em class="text-danger">*</em></label>
                                                        <input type="password" disabled="disabled" class="ps-5 border form-control @error('password_confirmation') is-invalid @enderror" id="confirm_psd" placeholder="Confirm Password" name="password_confirmation" autocomplete="password_confirmation">
                                                        <p id="password_confirmation_err" class="position-absolute end-0"></p>
                                                    </div>
                                                    @if ($errors->has('password_confirmation'))
                                                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                                    @endif
                                                </div>
                                                <button type="submit" class="btn text-white mt-3 mb-4 blue-bg-clr">Change Password</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    @include('employer.layouts.partials.footer')
</main><br><br><br>
<!-- My Profile -->
@endSection

@push('js_scripts')

@include('layouts.partials.form_js')

@endPush

@section('script')
<!-- scripts.js -->
<script src=" {{ asset('assets/js/custom.js') }}"></script>

<script>
    $(document).ready(function() {
        $.validator.addMethod("alphaWithSpace", function(value, element) {
            return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
        }, function(params, element) {
            return "Only aplhabets & space allowed";
        });

        $("#changePassword").validate({
            rules: {
                current_password: {
                    required: true
                },
                password: {
                    required: true,
                    minlength: 8
                },
                password_confirmation: {
                    required: true,
                    equalTo: "#emp_password"
                },
            },

            messages: {
                current_password: {
                    required: "Please enter current password"
                },
                password: {
                    required: "Please enter new password"
                },
                password_confirmation: {
                    required: "Please enter new password again"
                }
            }
        });

        $("#profileForm").validate({
            rules: {
                full_name: {
                    required: true,
                    alphaWithSpace: true,
                    // nowhitespace: true
                },
                email: {
                    required: true
                },
                mobile_number: {
                    required: true
                },
            },

            messages: {
                full_name: {
                    required: "Please enter full name"
                },
                email: {
                    required: "Please enter email"
                },
                mobile_number: {
                    required: "Please enter mobile number"
                },
            }
        });
    });

    changePassword.addEventListener('input', () => {
        if (emp_password.value.length > 0 && emp_password.value != '') {
            confirm_psd.removeAttribute('disabled');
        } else {
            confirm_psd.setAttribute('disabled', 'true');
        }
    })

    const newPassword = document.querySelector("#newPassword")
    const password_new = document.querySelector("#emp_password");
    newPassword.addEventListener("click", function(e) {
        // Toggle the type attribute
        const type =
            password_new.getAttribute("type") === "password" ? "text" : "password";
        password_new.setAttribute("type", type);
        // Toggle the eye slash icon
        if (
            newPassword.src.match(
                "{{ asset('assets/images/eyeclose.svg')}}"
            )
        ) {
            newPassword.src =
                "{{ asset('assets/images/eyeopen.svg')}}";
        } else {
            newPassword.src =
                "{{ asset('assets/images/eyeclose.svg')}}";
        }
    });
</script>

@endSection