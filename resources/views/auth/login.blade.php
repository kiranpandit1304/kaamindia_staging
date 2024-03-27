@extends('layouts.master')

@push('form-style')
@include('layouts.partials.form_css')
@endpush

@section('style')
@endsection

@section('content')
<style>
  .login-block {
    background: url('../assets/images/banner-02.jpg');
    background-size: cover;
  }

  .banner-sec {
    background: url('../assets/images/pexels-photo.jpg') no-repeat left bottom;
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

<!--
Register -->
<section class="login-block space-ptb mb-5">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-xl-6  login-sec  bg-white">
        <div class="login-register">
          <fieldset>
            <!-- <legend class="px-2">Choose your Account Type</legend> -->
            <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
              <li class="nav-item me-4">
                <a class="nav-link active" data-bs-toggle="tab" href="#candidate" role="tab" aria-selected="false">
                  <div class="d-flex">
                    <div class="tab-icon text-dark">
                      <i class="flaticon-users"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0 text-dark">Candidate</h6>
                      <p class="mb-0 text-dark">Log in as Candidate</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#employer" role="tab" aria-selected="false">
                  <div class="d-flex">
                    <div class="tab-icon text-dark">
                      <i class="flaticon-suitcase"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0 text-dark">Employer</h6>
                      <p class="mb-0 text-dark">Log in as Employer</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </fieldset>
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
              <form action="{{ route('auth.loginUser') }}" method="post" class="mt-4" id="candidate_login_form">
                @csrf
                <div class="row">
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="candidate_mobile_number">Mobile Number<em class="text-danger">*</em></label>
                    <input type="text" name="mobile_number" class="form-control" placeholder="mobile_number Address" id="candidate_mobile_number_2" data-parsley-type="mobile_number" data-parsley-error-message="Please enter mobile_number" data-parsley-trigger="keyup" required>
                  </div>
                  <div class="form-group col-12 mb-3">
                    <input type="checkbox" name="remember" id="remember1" value="1">
                    <label class="form-check-label mt-2" for="l_p_remember">Remember Password</label>
                  </div>

                </div>
                <div class="row align-items-center">
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
                  </div>
                  <div class="col-md-6">
                    <div class="mt-3 mt-md-0 forgot-pass">
                      <a href="{{route ('auth.forgetPassword')}}">Forgot Password?</a>
                      <span class="mt-1">Don't have account? <a href="{{route ('auth.signup')}}">Sign Up here</a></span>

                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="employer" role="tabpanel">
              <form action="{{ route('auth.loginUser') }}" method="post" class="mt-4" id="employer_login_form">
                @csrf
                <div class="row">
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="employer_mobile_number">mobile_number<em class="text-danger">*</em></label>
                    <input type="text" name="mobile_number" class="form-control" id="employer_mobile_number_2" data-parsley-type="mobile_number" data-parsley-error-message="Please enter mobile_number" data-parsley-trigger="keyup" required>
                  </div>
                  <div class="form-group col-12 mb-3">
                    <input type="checkbox" name="remember" id="remember2" value="1">
                    <label class="form-check-label mt-2" for="l_p_remember">Remember Password</label>
                  </div>

                </div>
                <div class="row  align-items-center">
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
                  </div>
                  <div class="col-md-6">
                    <div class="mt-3 mt-md-0 forgot-pass">
                      <a href="{{route ('auth.forgetPassword')}}">Forgot Password?</a>
                      <span class="mt-1">Don't have account? <a href="{{route ('auth.signup')}}">Sign Up here</a></span>

                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
      <div class="col-xl-5 banner-sec"></div>
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
    $('#candidate_registration_form').parsley();
    $('#employer_registration_form').parsley();
  });

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

  const togglePsd4 = document.querySelector("#togglePsd4")
  const password_emp4 = document.querySelector("#employer_password_2");
  togglePsd4.addEventListener("click", function(e) {
    // Toggle the type attribute
    const type =
      password_emp4.getAttribute("type") === "password" ? "text" : "password";
    password_emp4.setAttribute("type", type);
    // Toggle the eye slash icon
    if (
      togglePsd4.src.match(
        "{{ asset('assets/images/eyeclose.svg')}}"
      )
    ) {
      togglePsd4.src =
        "{{ asset('assets/images/eyeopen.svg')}}";
    } else {
      togglePsd4.src =
        "{{ asset('assets/images/eyeclose.svg')}}";
    }
  });
</script>
@endsection
<!-- Custom script links only ends here -->