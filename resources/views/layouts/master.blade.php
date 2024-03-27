<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="keywords" content="HTML5 Template" />
  <meta name="description" content="Kaam India - Job Board" />
  <meta name="author" content="potenzaglobalsolutions.com" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ config('app.name', 'KaamIndia') }}</title>
  <!-- Favicon -->
  <link href="{{ asset('assets/images/kaamIndiaLogo.png') }}" rel="shortcut icon" />

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

  <!-- CSS Global Compulsory (Do not remove)-->
  <link rel="stylesheet" href="{{ asset('assets/css//fontawesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css//flaticon.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
  <!-- Custom css -->
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
  @stack('form-style')
  <!-- Template Style -->

  <style>
    html {
      overflow-x: hidden;
    }

    body {
      overflow-x: hidden;
    }

    .text-warning {
      color: #f25e20 !important;
    }

    .header .navbar-collapse {
      background: #fff;
    }

    .navbar .navbar-nav .nav-link {
      color: #000 !important;
    }


    .header .add-listing {
      -ms-flex-item-align: center;
      align-self: center;
      -webkit-box-flex: 0;
      -ms-flex: 0 0 305px;
      flex: 0 0 305px;
      text-align: right;
    }

    .select2-container--default.select2-container--open .select2-selection--single {
      border-color: #0c090959;
    }



    .select2-container--default .select2-results__option[aria-selected="true"] {
      color: #000;
    }

    .select2-container--open .select2-dropdown {
      background: #fff;
      border: 1px solid #0c090959;
    }

    .select2-container--default .select2-results__option--highlighted[aria-selected] {
      background: rgb(242 94 32);
      color: #ffffff;
    }

    .short-by {
      width: 170px;
    }

    .z-index-9 {
      z-index: 999999999999;
    }

    .accordion-button::after {
      display: none;
    }

    #apply,
    #post,
    #sign {
      display: none;
    }

    @media (max-width: 991px) {

      #apply,
      #post,
      #sign {
        display: block;
      }

      #sign1 {
        display: none;
      }
    }

    @media screen and (max-width:992px) {
      .d-xs-none {
        display: none !important;
      }

      .d-xs-block {
        display: block !important;
      }

    }

    .bg-warning {
      background-color: #f25e20 !important;
    }

    .btn.btn-sm {
      padding: 6px;
      width: 100px;
    }

    .user-icon {
      padding-top: 0.75rem !important;
    }

    .logout {
      padding-top: 3px;
    }

    .dropdown-menu>li>form:hover:before {
      background: #1275a8;
    }

    .dropdown-menu>li>form:before {
      -webkit-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
    }

    .form {
      padding-left: 0;
    }

    .form:hover {
      color: #1275a8;
    }

    .dropdown-menu>li>form:hover:before {
      position: absolute;
      top: 50%;
      width: 4px;
      left: 7%;
      height: 4px;
      content: "";
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      border-radius: 50px;
    }

    .navbar .dropdown>.dropdown-menu li>form {
      transition: all 0.3s ease-in-out;
    }

    .navbar .dropdown>.dropdown-menu li>form:hover {
      padding-left: 10px;
    }

    .dropdown-menu {
      min-width: 12rem;
    }

    .footer {
      background-image: url('../../assets/images/shape.svg');
      background-repeat: no-repeat;
      background-size: cover;
    }

    @media (max-width: 991px) {
      .footer {
        background-position: 50%;
      }
    }

    #sign_up_modal {
      display: none;
    }

    #forget {
      display: none;
    }

    #otp {
      display: none;
    }

    .box {
      width: 20%;
      display: flex;
      justify-content: center;
      margin: 0 auto;
      border-radius: 50%;
      padding: 33px 33px;
      height: 0;
      background: #1275a8;
      color: #fff !important;
    }

    .verification-code {
      position: relative;
      text-align: center;

    }

    .control-label {
      display: block;
      font-weight: 900;
    }

    .verification-code--inputs input[type=text] {
      /* border: solid #e1e1e1; */
      width: 46px;
      height: 46px;
      padding: 10px;
      text-align: center;
      display: inline-block;
      box-sizing: border-box;
      border-top: 0;
      border-right: 0;
      border-left: 0;
    }

    .error-msg {
      color: red;
    }

    .fnt {
      font-size: 14px;
    }

    .close-btn {
      background-color: white;
      color: #fff;
      opacity: 1;
      margin-right: 2px;
    }

    .country_code {
      top: 44px;
      font-size: 14px;
    }

    .password_icon {
      top: 43px !important;
      left: 3px !important;
    }

    .eye-icon {
      position: absolute;
      left: 90%;
      top: 43px;
      z-index: 999999;
      opacity: 0.6;
      height: 20px;
      width: 20px;
    }

    .login-btn {
      width: 70px !important;
      height: 36px !important;
    }

    .login-div {
      min-width: 200px;
    }

    .login-otp {
      color: #fff;
      background: #f25e20;
      font-size: 12px;
      width: 120px;
    }

    .signup-div {
      margin-right: -13px;
      margin-top: -3px;
    }

    .orange-clr {
      color: #f25e20;
    }

    .orange-bg-clr {
      background: #f25e20;
    }

    .top-56 {
      top: 56%;
    }

    .error {
      color: red;
      font-weight: 400 !important;
      font-size: 12px;
    }

    #password_err {
      top: 80px;
    }
  </style>
  @yield('style')


</head>

<body class="p-0">
  @include('layouts.partials.header')
  @if (session('success'))
  <p class="alert alert-success text-center chk">{{ session('success') }}</p>
  @endif
  @if (session('error'))
  <p class="alert alert-danger text-center chk">{{ session('error') }}</p>
  @endif
  @yield('content')
  @include('layouts.partials.footer')


  <!--=================================
Javascript -->

  <!-- JS Global Compulsory (Do not remove)-->
  <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl-carousel.min.js') }}"></script>


  @stack('js-scripts')

  <script>
    $('.gender').on('change', function() {
      $('.gender').not(this).prop('checked', false);
    });
  </script>
  @yield('script')
  @yield('joblisting-script')
  @yield('banner-script')
  @yield('fillter-script')
  @yield('responsive-fillter-script')
  @yield('login-script')

</body>

</html>