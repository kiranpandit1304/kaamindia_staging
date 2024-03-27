@extends('layouts.master')

@push('form-style')
@include('layouts.partials.form_css')
@endpush

@section('style')
@endsection

@section('content')
<style>
  li.parsley-custom-error-message {
    position: absolute;
    margin-bottom: 7px;

  }
</style>

<!--
Register -->
<section class="space-ptb login-block pt-0 pb-0">
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <div class="col-xl-12 col-lg-8 col-md-12 user-dashboard-info-box pb-0 m-0">
        <div class="login-register">        
        <form action="{{ route('auth.passwordResetSubmit') }}" method="POST" class="mt-4 mb-5" id="reset_password_form">
        @csrf
            <div class="row align-items-center">
              <div class="col-md-6 d-xl-block d-none">
                <img src="{{ asset('assets/images/resetpass.svg')}}" alt="" class="w-75 img-fluid" width="">
              </div>
              <div class="col-xl-5">
                <div class="section-title text-left mb-4">
                  <h3 class="text-primary">Reset password ?</h3>
                  <p class="mt-0">Enter your email and we'll send you a link to to get back into your account</p>
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
                <div class="form-group col-12 mb-3">
                <input type="hidden" name="token" value="{{ $token }}">
                  <div class="position-relative">
                    <img src="{{ asset('assets/images/eyeclose.svg')}}" width="20" height="20" class="" style="position: absolute;filter: contrast(0.5);top: 56%;left:69%;z-index: 2;" id="togglePsd3">

                    <label class="form-label" for="candidate_password">Password<em class="text-danger">*</em></label>
                    <input type="password" name="password" class="form-control w-75" placeholder="Password" id="candidate_password_2" data-parsley-error-message="Enter password" required>

                  </div>

                </div>
                <div class="form-group col-12 mb-3">
                  <div class="position-relative">
                    <label class="form-label" for="candidate_password">Confirm Password<em class="text-danger">*</em></label>
                    <input type="password" name="password" class="form-control w-75" placeholder="Password" disabled="disabled" data-parsley-equalto="#candidate_password_2" id="confirm_password" required>

                  </div>

                </div>
                <div class="my-4"><button type="submit" class="btn btn-primary btn-sm" id="send">Reset</button>
                </div>


              </div>

            </div>
        </div>

        </form>
      </div>
    </div>
  </div>
  </div>
</section>
<!--
Register -->

<!--
feature-info -->

<!--feature-info-->
@endsection

<!-- JS script links only starts here -->
@push('js-scripts')
@include('layouts.partials.form_js')

<!-- Template Scripts (Do not remove)-->
<script src="{{asset('assets/js/custom.js')}}"></script>
@endpush
<!-- JS script links only ends here -->


<!-- Custom script links only starts here -->
@section('script')
<script>
  $(document).ready(function() {
    $('#reset_password_form').parsley();
  });
  reset_password_form.addEventListener('input', () => {
    if (candidate_password_2.value.length > 0 && candidate_password_2.value != '') {
      confirm_password.removeAttribute('disabled');
    } else {
      confirm_password.setAttribute('disabled', 'true');
    }
  })
  const togglePsd3 = document.querySelector("#togglePsd3")
  const password_emp3 = document.querySelector("#candidate_password_2");
  togglePsd3.addEventListener("click", function(e) {
    // Toggle the type attribute
    const type =
      password_emp3.getAttribute("type") === "password" ? "text" : "password";
    password_emp3.setAttribute("type", type);
    // Toggle the eye slash icon
    if (
      togglePsd3.src.match(
        "{{ asset('assets/images/eyeclose.svg')}}"
      )
    ) {
      togglePsd3.src =
        "{{ asset('assets/images/eyeopen.svg')}}";
    } else {
      togglePsd3.src =
        "{{ asset('assets/images/eyeclose.svg')}}";
    }
  });
</script>
@endsection
<!-- Custom script links only ends here -->