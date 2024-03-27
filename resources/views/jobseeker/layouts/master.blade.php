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
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css//fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css//flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/select2.css')}}" />
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;1,100&family=Poppins:wght@300&display=swap" rel="stylesheet"> -->


    @stack('form-style')
    @yield('style')
    @yield('profile-style')
    @yield('resume-style')

    <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />


    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
    <style>
      .select2-container .select2-selection--single .select2-selection__rendered {
        padding-left: 3px !important;
      }




      .select2-container .select2-search--inline .select2-search__field {
        margin-top: 9px !important;
        padding-left: 3px;
      }

      body {
        font-family: 'Poppins', sans-serif;
      }

      .border {
        border-color: #918f8f !important;
      }

      label {
        color: #000;
        font-weight: 500 !important;
        font-size: 13px;
      }

      .select2-container--default .select2-selection--single .select2-selection__arrow {
        top: 8px;
      }

      .select2-container .select2-selection--single {
        padding: 8px !important;
        height: 43px !important;
      }

      .select2-container .select2-selection--multiple {
        overflow: auto;
      }

      .select2-container--default .select2-selection--single {
        border: 1px solid #918f8f !important;
        border-radius: 7px;
      }

      .select2-container--default .select2-selection--multiple {
        border: 1px solid #7a7a7a;
        padding: 4px;
        border-radius: 7px;
      }

      .form-control {
        height: 45px;
      }

      .select2-container .select2-selection--single .select2-selection__rendered {
        padding-left: 24px;
        padding-top: 3px;
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

      li.nav-item.main {
        display: none;
      }

      .header .add-listing {
        -ms-flex-item-align: center;
        align-self: center;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 305px;
        flex: 0 0 305px;
        text-align: right;
      }

      @media (max-width: 991px) {

        li.nav-item.main {
          display: block;
        }
      }

      .bg-warning {
        background-color: #f25e20 !important;
      }

      .btn.btn-sm {
        padding: 6px;
        width: 100px;
      }

      .select2-container--default .select2-selection--single .select2-selection__arrow {
        top: 9px !important;
      }

      .select2-container--default .select2-selection--single {
        height: auto !important;
        padding: 6px 20px !important;
      }

      .job_list_border {
        border: 1px solid #f25e20 !important;

      }

      .job-filter-tag ul li a {
        margin-left: 3px;
        font-weight: 500;
        /* padding: 6px 20px !important; */
        font-size: 13px;
        border-radius: 3px;
      }

      .btn-warning {
        background-color: #f25e20 !important;
        border-color: #f25e20 !important;
      }

      .banner {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-position-x: left;
        padding: 95px 0 95px 0 !important;
        padding-bottom: 0 !important;
      }

      .counter .counter-icon i {
        font-size: 30px !important;
      }

      .recent-job-card {
        padding: 15px;
        background-color: white;
        border-radius: 10px;
        margin-bottom: 30px;
        position: relative;
        box-shadow: 0 0 4px 1px rgba(184, 184, 184, 0.41);
      }

      .recent-job-card:hover {
        box-shadow: 0 0 8px 6px rgb(242 94 32 / 15%);
        transition: 0.1s ease-in;
      }

      .recent-job-card .content {
        position: relative;
        padding-left: 70px;
      }

      .recent-job-card .content .recent-job-img {
        position: absolute;
        top: 0;
        left: 0;
      }

      .recent-job-card .content .recent-job-img a {
        display: block;
      }

      .recent-job-card .content .recent-job-img a img {
        border-radius: 50%;
      }

      .recent-job-card .content h3 {
        font-size: 20px;
      }

      .recent-job-card .content .job-list1 {
        list-style-type: none;
        margin: 0;
        padding: 0;
      }

      .recent-job-card .content .job-list1 li {
        display: inline-block;
        margin-right: 4px;
        font-size: 11px;
        color: #000;
        padding: 3px 0;
        font-weight: 500;
      }

      .recent-job-card .content .job-list1 li i {
        position: relative;
        color: #000;
      }

      #job_details {
        display: none;
      }

      #sidebar {
        display: none;
        position: absolute;
        z-index: 1;
        background: #fff;
        top: 77%;
      }

      .recent-job-card .content span {
        font-size: 11px;
        color: #000;
      }

      .recent-job-card .content span i {
        position: relative;
        color: #000;
      }

      .recent-job-card .job-sub-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 2px 0 6px;
        border-bottom: 1px solid #D9D9D9;
      }

      span {
        /* font-size: 13px; */
      }

      .recent-job-card .job-sub-content .job-list2 {
        list-style-type: none;
        margin: 0;
        padding: 0;
      }

      .recent-job-card .job-sub-content .job-list2 li.time {
        color: #000;
        background-color: #E5FAF5;
      }

      .recent-job-card .job-sub-content .job-list2 li {
        display: inline-block;
        padding: 6px 0;
        border-radius: 50px;
        font-size: 13px;
        font-weight: 500;
        margin-right: 10px;
        margin-bottom: 0;
      }

      .recent-job-card .job-sub-content .price {
        font-size: 17px;
        color: #000;
        font-weight: 500;
      }

      .recent-job-card .job-sub-content .price b {
        color: #000;
        font-weight: 400;
        font-size: 15px;
      }

      .recent-job-card .bookmark-btn {
        position: absolute;
        top: 15px;
        right: 15px;
        border: none;
        outline: none;
        width: 35px;
        height: 35px;
        text-align: center;
        line-height: 35px;
        font-size: 20px;
        color: #000;
        -webkit-transition: var(--transition);
        transition: var(--transition);
        border-radius: 50px;
      }

      .accordion-button::after {
        display: none;
      }

      .swal-icon--success {
        border-color: #1275a8;
      }

      .swal-icon--success__ring {
        width: 80px;
        height: 80px;
        border: 4px solid #1275a859;
        border-radius: 50%;
        box-sizing: content-box;
        position: absolute;
        left: -4px;
        top: -4px;
        z-index: 2;
      }

      .swal-button:active {
        background-color: #f25e20;
      }

      .swal-button:focus {
        outline: none;
        box-shadow: none;
      }

      .swal-icon--success__line {
        height: 5px;
        background-color: #f25e20;
        display: block;
        border-radius: 2px;
        position: absolute;
        z-index: 2;
      }


      .job_type_badge {
        background-color: rgba(242, 94, 32, 0.2);
        color: #f25e20 !important;
      }

      .job_show {
        display: none;
      }

      /* Css added by Sameer */

      #heart.red {
        color: #F25E20 !important;
        text-shadow: 0 0 black;

      }

      #heart {
        border-color: #F25E20;
        color: white;
        background: transparent;
        text-shadow: 0 0 3px #f25e20;
      }

      .click.collapsed .icon {
        transform: rotate(180deg);
        transition: .3s ease-in-out;
      }

      .user-prof:hover {
        color: #F25E20 !important;
      }



      @media screen and (max-width:992px) {
        .d-xs-none {
          display: none !important;
        }

        .d-xs-block {
          display: block !important;
        }

      }

      @media screen and (max-width: 992px) {
        .bookmark-btn {
          border: none;
          padding-top: 14px;
        }
      }

      @media screen and (max-width: 420px) {
        .btn {
          margin-top: 10px;
        }
      }

      .clear-btn {
        padding: 5px 12px;
        font-size: 12px;
      }

      .bg1-img {
        background-image: url('../assets/images/bg1.png');
      }


      .swal2-container.swal2-backdrop-show,
      .swal2-container.swal2-noanimation {
        background: rgb(255 255 255 / 0%) !important;
      }


      .swal2-popup.swal2-toast .swal2-title {
        margin: 0 !important;
        font-size: 13px !important;
      }

      .swal2-container {
        position: fixed;
        top: 70px !important;
      }

      .swal2-timer-progress-bar {
        background: rgb(242 94 32) !important;
      }


      .pagination {
        margin-top: 12%;
      }

      .pwd-chg {
        padding-bottom: 0.72rem !important;
      }

      .flex-dir {
        flex-direction: row-reverse !important;
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


      .pwd-chg {
        padding-bottom: 0.72rem !important;
      }

      .flex-dir {
        flex-direction: row-reverse !important;
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

      .dropdown-menu {
        min-width: 12rem;
      }

      .navbar .dropdown>.dropdown-menu li>form:hover {
        padding-left: 10px;
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

      .control-label {
        display: block;
        font-weight: 900;
      }

      .total_exp {
        display: none;
      }

      .organistion {
        display: none;
      }

      .close-btn {
        background-color: white;
        color: #fff;
        opacity: 1;
        margin-right: 2px;
      }

      .modalShadow {
        box-shadow: 0 0 15px -8px !important;
      }

      .selectize-dropdown {
        background-color: #1374ab;
        color: #fff;
        opacity: 1;
        border: 1px solid #1374ab;
      }

      .options .selectize-input {
        min-height: 45px;
        padding: 10px 5px 0 5px !important;
      }

      .selectize-dropdown .active:not(.selected) {
        background: #f25e20;
        color: #fff;
      }


      .item {
        background-color: #1374ab !important;
        color: white !important;
        border-radius: 4px;
      }

      .switchBtn {
        width: 120px;
      }

      .radio {
        visibility: hidden;
        position: absolute;
      }

      .border-warning {
        border: 1px solid #F25E20;
        border-color: #f25e20 !important;
      }

      .fieldActive {
        background-color: #f25e20;
        color: white;
        transition: 0.1s linear;
      }

      #workTillYear,
      #workTillYearEdit,
      #workTillMonth {
        display: none;
      }

      .fields-border {
        border: 1px solid #f25e20 !important;
        border-radius: 4px;
      }

      .cursor {
        cursor: pointer;
      }

      .error {
        color: red;
        font-weight: 400 !important;
        font-size: 12px;
      }

      #availability-error {
        position: absolute;
        top: 90%;
        width: 100%;
      }



      #first_name-error,
      #last_name-error {
        position: absolute;
      }
    </style>


  </head>

  <body>
    @include('jobseeker.layouts.partials.header')

    @if (session('success'))
    <p class="alert alert-success text-center chk">{{ session('success') }}</p>
    @endif
    @if (session('error'))
    <p class="alert alert-danger text-center chk">{{ session('error') }}</p>
    @endif

    @yield('content')

    @include('jobseeker.layouts.partials.footer')


    <!--==== Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{asset('assets/plugins/select2/select2.full.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-validate/additional-methods.min.js') }}"></script>

    @stack('js-scripts')
    @yield('script')
    @yield('profile-script')
    @yield('keyskill-script')
    @yield('employment-script')
    @yield('education-script')
    @yield('resume-script')
    @yield('project-script')
    @yield('login-script')

  </body>

  </html>