@extends('employer.master')
@push('form_style')
@include('layouts.form_css')
<!-- css-cdn -->
@endpush

@section('style')
<!-- add style.css -->

<style>
  ::placeholder {
    /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #d3d2d3ea !important;
    font-size: 14px;
    font-weight: normal !important;
    opacity: 1;
    /* Firefox */
  }
</style>

@endsection
@section('employer-content')
<!--Change Password -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-4">
            <h4>Change Passwordasdfdfad</h4><br>
            @if(session()->has('error'))
            <span class="alert alert-danger text-center">
              <strong>{{ session()->get('error') }}</strong>
            </span>
            @endif
            @if(session()->has('success'))
            <span class="alert alert-success text-center">
              <strong>{{ session()->get('success') }}</strong>
            </span>
            @endif
          </div>
          <div class="row">
            <div class="col-12">
              <form method="POST" action="{{ route('employer.change-password-submit') }}">
                @csrf
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">Current Password</label>
                  <input type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" autocomplete="current_password">
                  @error('current_password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">New Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="form-group col-md-12 mb-0">
                  <label class="form-label">Confirm Password</label>
                  <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" autocomplete="password_confirmation">
                  @error('password_confirmation')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Change Password</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Change Password -->

@endsection

@push('js_scripts')
@include('layouts.form_js')
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- js-cdn -->
@endpush
@section('script')
<!-- scripts.js -->
@endsection