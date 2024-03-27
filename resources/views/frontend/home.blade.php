@extends('layouts.master')

@push('form-style')
@include('layouts.partials.form_css')
@endpush

@section('style')
<style>
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
        font-size: 55px !important;
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
        /* border-bottom: 1px solid #D9D9D9; */
    }

    .testimonial-item .testimonial-content p {
        font-style: normal !important;
        font-size: 13px !important;
        font-weight: 200 !important;
    }

    span {
        font-size: 13px;
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


    .bg {
        z-index: 0;
        /* left: -145px; */
        top: -50px;
    }

    .bg1 {
        z-index: -2;
        /* left: 100%; */
        right: 0;
        bottom: 50px;
    }





    @media (max-width: 991px) {


        .bg1 {
            display: none;
        }

    }

    @media screen and (max-width: 1130px) {
        .comp {
            padding: 20px;
        }

        .comp .content {
            padding-left: 57px;
        }
    }

    .bg-img {
        background-image: url('../assets/images/bg.png')
    }

    .bn-img {
        background-image: url('../assets/images/bn.png');
    }

    .job_type_badge {
        background-color: rgba(242, 94, 32, 0.2);
        color: #f25e20 !important;
    }

    .job-search-item input {
        padding-left: 40px !important;
    }

    .viewJobBtn {
        font-size: 14px;
        font-weight: 600;
        padding: 6px 6px;
        border-radius: 3px;
    }

    @media screen and (max-width: 768px) {
        .banner {
            padding: 10px 0 !important;
            position: relative;
        }
    }



    .errorClr {
        color: red;
        font-size: 13px;
    }

    i.fas.fa-chevron-right,
    i.fas.fa-chevron-left {
        color: white;
    }

    .testimonialAlignment {
        padding-top: 5rem;
        padding-bottom: 4rem;
    }

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



    .swal2-container.swal2-top-end>.swal2-popup,
    .swal2-container.swal2-top-right>.swal2-popup {

        box-shadow: 0 0 8px 6px rgb(242 94 32 / 15%) !important;
    }

    .swal2-popup.swal2-toast .swal2-title {
        margin: 0 !important;
        font-size: 13px !important;
    }

    .swal2-container {
        top: 12% !important;
        position: absolute !important;
        z-index: 9999999999999 !important;
    }

    .swal2-timer-progress-bar {
        background: rgb(242 94 32) !important;
    }
</style>
@endsection

@section('content')

@include('frontend.partials.carousel_banner')

@include('frontend.partials.counter')

@include('frontend.partials.latestjob')

@include('frontend.partials.worksflow')

@include('frontend.partials.testimonials')

@include('frontend.partials.jobsite')

@include('frontend.partials.feature')

@endsection

@push('js-scripts')
<!-- JS script links only starts here -->
<script src="{{ asset('assets/plugins/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-validate/additional-methods.min.js') }}"></script>

@include('layouts.partials.form_js')

@endpush


@section('script')
<!-- JS script links only ends here -->
<!-- Custom script links only starts here -->
<script>
    $(document).ready(function() {
        $.validator.addMethod("alphaWithSpaceAndDot", function(value, element) {
            return this.optional(element) || value == value.match(/^[a-zA-Z\s.]+$/);
        }, function(params, element) {
            return "Numbers not allowed";
        });


        $("#job_search").validate({

            rules: {
                job_title: {
                    required: true,
                    alphaWithSpaceAndDot: true
                },

            },
            errorPlacement: function(error, element) {
                var name = $(element).attr("name");
                fieldError = name.replace(/[\[\]']+/g, '');
                error.appendTo($("#" + fieldError + "_err"));
            },

            messages: {
                job_title: {
                    required: "Enter job title"
                },

            }
        });


    });
</script>
@push('js-scripts')



@endpush
@endsection