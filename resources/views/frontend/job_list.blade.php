@extends('layouts.master')

@push('form-style')
@include('layouts.partials.form_css')
@endpush

@section('style')
<style>
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        top: 9px !important;
    }

    .select2-container--default .select2-selection--single {
        height: auto !important;
        padding: 6px 20px !important;
    }

    /* .far {} */

    [type=button]:not(:disabled),
    [type=reset]:not(:disabled),
    [type=submit]:not(:disabled),
    button:not(:disabled) {
        cursor: pointer;
    }

    .swal-button {
        background-color: #1275a8;
        color: #fff;
        border: none;
        box-shadow: none;
        border-radius: 5px;
        font-weight: 600;
        font-size: 14px;
        padding: 10px 24px;
        margin: 0;
        cursor: pointer;
    }

    .swal-button:not([disabled]):hover {
        background-color: #f25e20;
    }

    .swal-icon--success {
        border-color: #1275a8;
    }

    .job_show {
        display: none;
    }

    .job_list_border {
        border: 1px solid #f25e20 !important;

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

    /* .counter-icon {
        border-radius: 50%;
        border: 1px solid red;
        width: 25%;
        height: 25%;
        padding: 11px;
    } */
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



    /* .col_size_change:nth-child(odd) {
        -webkit-box-ordinal-group: 3;
        -webkit-order: 2;
        -ms-flex-order: 2;
        order: 2;
    } */





    .job_type_badge {
        background-color: rgba(242, 94, 32, 0.2);
        color: #f25e20 !important;
    }

    /* Range slider css ends here */



    #heart.red {
        color: #F25E20;
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
        /* transition: .3s ease-in; */
    }

    /* .user-prof:hover {
        color: #F25E20 !important;
    } */



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

        .ms-xs-3 {
            padding-left: 12px;
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


    .bg-img {
        background-image: url('../assets/images/bg1.png');
    }


    .cursor {
        cursor: pointer;
    }

    .accordion-button:not(.collapsed)::after {
        transform: rotate(-180deg);
    }

    .swal2-container.swal2-backdrop-show,
    .swal2-container.swal2-noanimation {
        background: rgb(255 255 255 / 0%) !important;
    }

    .swal2-container.swal2-top-end>.swal2-popup,
    .swal2-container.swal2-top-right>.swal2-popup {

        box-shadow: 0 0 8px 6px rgb(242 94 32 / 15%) !important;
    }

    .swal2-popup.swal2-toast .swal2-title {
        margin: 0 !important;
        font-size: 13px !important;
    }

    .swal2-container {
        top: 70px !important;
        position: fixed;
    }

    .swal2-timer-progress-bar {
        background: rgb(242 94 32) !important;
    }

    /* .col_height_fixed>[class*="col-"] {
        margin-bottom: -99999px;
        padding-bottom: 99999px;
    }

    .row.col_height_fixed {
        overflow: hidden;
    } */
    .pagination {
        margin-top: 12%;
    }

    small {
        font-size: 12px !important;
        color: #000;
    }

    p {
        font-size: 14px !important;
    }
</style>
@endsection

@section('content')

<x-jobseeker_profile.banner />

<!-- Use any element to open the sidenav -->
<section class="pt-3 position-relative" id="job_list">

    <div class="row p-2 col_height_fixed">

        <!-- Sidebar showing on screen size more than 768px -->
        <div id="mySidenav" class="col-md-3 col-lg-3 d-xs-none">
            @include('frontend.joblist.partials.filter')

        </div>
        <div class="col-md-12 col-lg-9">
            <!--================================= right-sidebar -->

            @include('frontend.joblist.partials.clear_search')

            @include('frontend.joblist.partials.job_listing')

            @include('frontend.joblist.partials.job_listing_mobile')

            @include('frontend.joblist.partials.pagination')

        </div>
    </div>
</section>


<!--=================================feature-info-->
@endsection

<!-- JS script links only starts here -->
@push('js-scripts')
<script src="{{ asset('assets/dashboard/js/sweetalert.min.js') }}"></script>
<!-- <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> -->

<script src="{{ asset('assets/plugins/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-validate/additional-methods.min.js') }}"></script>
<script src="{{ asset('assets/plugins/multiselect-dropdown/multiselect-dropdown.js') }}"></script>

@include('layouts.partials.form_js')

@endpush

@section('script')

@endsection