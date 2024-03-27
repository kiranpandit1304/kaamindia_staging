<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>{{ config('app.name', 'KaamIndia') }}</title>

  <!-- Links that are used in all pages starts here -->
  <link href="{{ asset('assets/dashboard/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/dashboard/css/select2.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/dashboard/css/flaticon.css') }}" rel="stylesheet" />
  <link id="pagestyle" href="{{ asset('assets/dashboard/css/material-dashboard.css?v=3.0.4') }}" rel="stylesheet" />
  <link href="{{ asset('assets/dashboard/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/dashboard/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- <link href="{{ asset('assets/dashboard/css/jquery-ui.css') }}" rel="stylesheet" /> -->
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/dashboard/css/css2.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/dashboard/css/icon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/dashboard/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
  <!-- Links that are used in all pages ends here -->

  <!-- Script that are used in all pages ends here -->
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js" defer></script>
  <script src="{{ asset('assets/dashboard/js/fontawe.js') }}" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/dashboard/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('assets/dashboard/js/dataTables.bootstrap5.min.js') }}"></script>
  <!-- Script that are used in all pages ends here -->


  <!-- CSS Files -->
  <style>
    .select2-container--default .select2-selection--single .select2-selection__arrow {
      top: 4px;
    }

    body {
      font-family: 'Poppins', sans-serif;
    }

    label,
    .form-label {
      color: #000000 !important;
      font-weight: 600;
      font-size: 13px;
    }

    a.MultiFile-remove {
      border-radius: 13%;
      padding: 4px;
      background: #f25e20;
      color: #fff;
      outline: 0;
    }

    .select2-selection__rendered {
      font-size: 14px;
    }

    .select2-container .select2-search--inline .select2-search__field {
      margin-top: 0;
    }

    .select2-container--default .select2-selection--multiple {
      background-color: white;
      border: 1px solid #7a7a7a;
      border-radius: 4px;
      cursor: text;
    }

    .ps--active-x>.ps__rail-x,
    .ps--active-y>.ps__rail-y {
      display: none;

    }

    p {
      font-weight: 400;
    }

    .fnt {
      font-size: 14px;
    }

    .select2-search__field {
      padding-left: 13px !important;
    }

    .select2-container .select2-selection--multiple {
      min-height: 45px;
      overflow: auto;
    }

    .card {
      box-shadow: 0px 0px 22px 1px rgb(0 0 0 / 10%);
    }

    .font-xll {
      font-size: 30px;
      line-height: 30px;
    }

    .space-ptb {
      padding: 40px 0;
    }

    button {
      cursor: pointer;
    }


    @media screen and (max-width: 767px) {

      div.dataTables_wrapper div.dataTables_filter,
      div.dataTables_wrapper div.dataTables_info,
      div.dataTables_wrapper div.dataTables_paginate {
        text-align: center !important;
      }
    }

    @media screen and (max-width: 767px) {
      .dataTables_length {
        position: relative !important;
        text-align: center !important;
      }

    }

    div.dataTables_wrapper div.dataTables_filter input {
      border-radius: 4px;
      outline: 0;
      border: 1px solid #7a7a7a;
    }

    div.dataTables_wrapper div.dataTables_length select {

      padding: 3px;
      border-radius: 4px;
    }

    a.paginate_button {
      margin: 0 8px;
      padding: 8px 8px;
      border-radius: 7px;
      cursor: pointer;
    }

    .paginate_button.current {
      background: #f25e20;
      color: #fff;
    }

    div#example_length {
      position: absolute;
    }

    a#example_next {
      padding: 8px 8px;
      background: #1374ab !important;
      color: #fff;
      margin: 0 3px;
      border-radius: 7px;
      font-size: 14px;
    }

    a#example_previous {
      padding: 8px 8px;
      background: #1374ab !important;
      color: #fff;
      margin: 0 3px;
      border-radius: 7px;
      font-size: 14px;
    }

    div.dataTables_wrapper div.dataTables_paginate {
      margin-bottom: 9px;
    }

    .error {
      color: red !important;
    }

    .form-control:focus {
      color: #212529;
      outline: 0;
      box-shadow: none;
    }

    .radio {
      visibility: hidden;
      position: absolute;
    }

    .ss-main .ss-multi-selected {
      border: 1px solid #7a7a7a;
      padding: 0.375rem 0.75rem;
    }

    .ss-main .ss-multi-selected .ss-values .ss-value {
      background-color: #1374ab;
    }

    /* radio */
    .radiotextsty {
      color: #A5A4BF;
      font-size: 18px;
    }

    .customradio {
      display: block;
      position: relative;
      padding-left: 30px;
      margin-bottom: 0px;
      cursor: pointer;
      font-size: 13px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      transition: all 0.6s ease-in-out;
    }

    .active,
    .btn:hover {
      background-color: #1374ab;
      color: white !important;

    }


    /* Hide the browser's default radio button */
    .customradio input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
    }

    /* Create a custom radio button */
    .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 22px;
      width: 22px;
      background-color: white;
      border-radius: 50%;
      border: 1px solid #BEBEBE;
      transition: all 0.6s ease-in-out;
    }

    /* On mouse-over, add a grey background color */
    .customradio:hover input~.checkmark {
      background-color: transparent;
    }

    /* When the radio button is checked, add a blue background */
    .customradio input:checked~.checkmark {
      background-color: white;
      border: 1px solid #BEBEBE;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .customradio input:checked~.checkmark:after {
      display: block;
    }

    /* Style the indicator (dot/circle) */
    .customradio .checkmark:after {
      top: 4px;
      left: 4px;
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: #1374ab;
      transition: all 0.6s ease-in-out;
    }

    /* radio end */

    .active,
    .btn:hover {
      background-color: #1374ab;
      color: white;
      /* border: 0 !important; */
      transition: 0.1s linear;
    }

    .active .icon {
      color: #fff;
    }



    .active h6 {
      color: #fff;
    }

    .active p {
      color: #fff;
    }



    .select2,
    .select2-container .select2-container--default .select2-container--focus {
      width: 100% !important;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
      background-color: #1374ab;
      border: 1px solid #1374ab;
      color: #fff;

    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
      color: #fff;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
      color: #fff;
    }

    .close {
      font-size: 25px;
      color: #f25e20;
    }

    .point {
      cursor: pointer;
      min-height: 130px;
    }

    .point:hover,
    .point:active {
      box-shadow: 0 0 13px -7px #000;
      border: 0 !important;
      transition: 0.4s linear;
      background-color: #1374ab !important;
    }

    .point:hover h3 i,
    .point:hover h6 {
      color: white;
    }

    #max {
      display: none;
    }

    .modal {
      backdrop-filter: blur(3px);
      background: #00000047;
    }

    .cmp {
      border-radius: 7px;
      box-shadow: 0 0 21px -9px #1374ab;
    }

    .select2-container .select2-selection--single {
      padding: 6px;
      height: 45px !important;
    }

    .select2-container--default .select2-selection--single {
      border: 1px solid #00000085 !important;
    }

    .form-control {
      height: 45px;

    }

    .select2-container .select2-selection--single .select2-selection__rendered {
      padding-left: 10px;
      padding-top: 2px;
    }

    /* Successfull msg when editing company details --> */
    .chk {
      position: absolute;
      border-radius: 10px;
      right: 29px;
      z-index: 1;
      margin: 0 auto;
      transition: all 0.32s ease-in-out;
      transform: scale(0.83);
      top: 100px;
    }

    .chk {
      -webkit-animation: success 1.55s forwards;
      animation: success 1.55s forwards;
    }

    @keyframes success {
      0% {
        opacity: 1;
      }

      90% {
        opacity: 1;
      }

      100% {
        transform: scale(1.09);
        opacity: 0;
      }
    }

    @-webkit-keyframes success {
      0% {
        opacity: 1;
      }

      90% {
        opacity: 1;
      }

      100% {
        transform: scale(1.09);
        opacity: 0;
      }
    }


    /* CSS added by sameer */


    /* Manage Job Row 14px */
    table.dataTable>tbody>tr {
      background-color: transparent;
      font-size: 14px;
    }

    /*  Dashboard Row size 14px */
    .table> :not(:first-child) {
      border-top: 1px solid currentColor;
      font-size: 14px;
    }

    label {
      font-weight: 500;
    }

    .card-shadow {
      box-shadow: 0 0 15px -8px !important;
      border-radius: 16px !important;
    }

    .blue-bg-clr {
      background-color: #1374ab;
    }

    .footer {
      z-index: 10;
    }

    .filter-btn {
      min-height: 40px;
      letter-spacing: 1px;
    }

    .icon-gap {
      grid-gap: 1.4rem;
    }


    .cloud-icon {
      /* z-index: 1; */
      top: -23px !important;
    }

    .add-height {
      min-height: 135px !important;
    }

    .eye-icon-size {
      font-size: 16px;
    }

    .cursor {
      cursor: pointer;
    }

    .fields-border {
      border: 1px solid #00000085 !important;
      border-radius: 4px;
      /* min-height: 45px; */
      line-height: 28px;
    }

    .left-margin {
      margin-left: 4px;
    }

    .hidden-vis {
      visibility: hidden;
    }

    .add-btn {
      padding-bottom: 5px;
      padding-top: 3px;
    }

    .prev-btn {
      width: 300px;
    }



    .landline-icon {
      filter: contrast(0.1);
      width: 20px;
    }

    .orange-clr {
      color: #f25e20;
    }

    .orange-bg-clr {
      background-color: #f25e20;
    }

    .aside-bar {
      box-shadow: rgb(10 4 1) 0px 0px 18px -15px !important;
      background: #fff;
      z-index: 9 !important;

    }

    .conf-pwd {
      margin-top: -10px;
    }

    .key-icon {
      top: 52% !important;
    }

    .title-showJob {
      font-size: 34px;
      color: white;
      font-weight: 100;
    }

    @media (min-width:1200px) {
      .hidden-bar {
        display: none !important;
        /* visibility: hidden; */
      }
    }

    .work-icons {
      color: #f25e20;
    }

    .work-title {
      font-size: 0.9rem;
    }


    @media (min-width: 1200px) {
      .sidenav:hover {
        max-width: 15.625rem;
      }

      .sidenav .sidenav-toggler {
        padding: 1.5rem;
      }

      .sidenav.fixed-start+.main-content {
        margin-left: 16rem;
      }

      .sidenav.fixed-end+.main-content {
        margin-right: 16rem;
      }
    }
  </style>

  @stack('style-scripts')

  @yield('style')
</head>

<body>
  @include('employer.layouts.partials.header')

  @if (session('success'))
  <p class="alert alert-success text-center text-white chk">{{ session('success') }}</p>
  @endif
  @if (session('error'))
  <p class="alert alert-danger text-center text-white chk">{{ session('error') }}</p>
  @endif

  @include('employer.layouts.partials.sidebar')



  @yield('content')


  {{-- @include('employer.layouts.partials.footer') --}}
  <!-- JS Global Compulsory (Do not remove)-->
  <!-- <script src="{{ asset('assets/dashboard/js/jquery-ui.js') }}"></script> -->
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/dashboard/js/select2.full.js') }}"></script>
  <script src="{{ asset('assets/dashboard/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('assets/dashboard/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/dashboard/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/dashboard/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/dashboard/js/material-dashboard.min.js') }}"></script>

  <script>
    function hide() {
      var x = document.getElementById("sidenav-main");
      if (x.style.display === "block") {
        x.style.display = "none";

      } else {
        x.style.display = "block";
      }
    }

    $(document).ready(function() {
      $('.js-example-basic-single').select2();
    });
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

    $('#next_btn').click(function() {
      $('.pos').text("Job Requirement");
    });
    $('#job').click(function() {
      $('.pos').text("Post Job");
    });
  </script>

  @stack('js-scripts')
  @yield('script')
</body>

</html>