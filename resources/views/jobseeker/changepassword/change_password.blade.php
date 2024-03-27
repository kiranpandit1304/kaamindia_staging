@php $page = "change_password"; @endphp
@extends('jobseeker.layouts.master')

@push('form_style')
@include('jobseeker.layouts.partials.form_css')

<!-- css-cdn -->

@endpush

@section('style')
<!-- add style.css -->
<style>
  .btn-warning {
    background-color: #f25e20 !important;
    border-color: #f25e20 !important;
  }

  .select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #1275a8;
    border: 1px solid #1275a8;
    color: #fff;
  }

  label {
    color: #000;
  }

  .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
    color: #f25e20;
  }

  .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
    color: #f25e20;
  }

  .input-file {
    background-color: #f8f9fc;
    border-radius: 4px;
    color: #565A90;
    position: relative;
  }

  .input-file::file-selector-button {
    border: none;
    border-radius: 7px;
    color: white;
    background-color: #1275a8;
    position: absolute;
    top: 0;
    bottom: 0;
    right: -13px;
    cursor: pointer;
    transition: all .25s ease-in;
  }

  .eye-close {
    position: relative;
    left: 92%;
    top: -33px;
    z-index: 2;
    filter: contrast(0.5);
    height: 20px;
    width: 20px;
  }

  .error {
    color: red;
  }

  .eye_close {
    width: 20px;
    opacity: 0.65;

  }


  #current_password-error {
    position: absolute;
    margin: 4px 0;
    /* right: 0; */
  }

  #emp_password-error {
    position: absolute;
    margin-top: 4px;
    /* right: 0; */
  }

  #confirm_psd-error {
    position: absolute;
    margin-top: 4px;
    /* right: 0; */
  }

  .user-prof:hover {
    color: #F25E20 !important;
  }





  /* @media (max-width: 768px) {} */
</style>
@endsection

@section('content')


<!-- view profile section -->

<!-- <div class="section-title-02 my-2 ps-0">
        <h4>My Profile </h4>
      </div> -->
<x-jobseeker_profile.banner />
<section class="p-2">
  <div class="p-3">
    <div class="col d-none d-xs-block pb-3">
      <x-jobseeker_profile.sidebar_mobileview :page=$page />
      <div class="row justify-content-center align-items-baseline">
        <div class="col-md-3 col-lg-3 d-xs-none">
          <x-jobseeker_profile.sidebar :page=$page />
        </div>

        @include('jobseeker.changepassword.partials.form')

      </div>
    </div>
  </div>
</section>
<!-- My Profile -->

@endSection

@push('js-scripts')
@include('jobseeker.layouts.partials.form_js')

<script src="{{asset('assets/plugins/jquery-validate/jquery.validate.min.js')}}"></script>
<script src="{{ asset('assets/dashboard/js/sweetalert.min.js') }}"></script>


@endpush

@section('script')
<!-- scripts.js -->

<script>
  function changePassword() {
    if ($("#chagepassword").valid()) {
      Swal.fire(
        'Good job!',
        'Your password is changed!',
        'success'
      )
    }
  };

  $(document).ready(function($) {
    $("#chagepassword").validate({
      rules: {
        current_password: {
          required: true
        },
        password: {
          required: true
        },
        password_confirmation: {
          required: true,
          equalTo: "#emp_password"
        }
      },
      messages: {
        current_password: {
          required: "Enter your Password"
        },
        password: {
          required: "Enter Your New Password"
        },
        password_confirmation: {
          required: "Enter Confirm Password"
        }
      },
    });
  });

  chagepassword.addEventListener('input', () => {
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