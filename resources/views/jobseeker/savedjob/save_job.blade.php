@php $page = "saved_job"; @endphp

@extends('jobseeker.layouts.master')

@push('form_style')
@include('jobseeker.layouts.partials.form_css')

<!-- css-cdn -->

@endpush


@section('content')
<!--=================================Banner -->
<x-jobseeker_profile.banner />
<!--=================================
Banner -->

<!--=================================
Category-style -->
<!-- browse jobs -->
<section class="p-2" id="job_list">
    <div class="p-0 p-lg-3">
        <div class="col d-none d-xs-block pb-3">
            <x-jobseeker_profile.sidebar_mobileview :page=$page />

            <div class="row justify-content-center">
                <div class="col-md-3 col-lg-3 d-xs-none">
                    <x-jobseeker_profile.sidebar :page=$page />
                </div>
                <div class="col-md-12 col-lg-9">
                    <!--================================= Right-sidebar -->


                    <!-- Job list for web view starts here -->
                    <div class="row pt-45  position-relative direction_change">
                        @foreach($jobs as $jobList)

                        <x-savedjob_card></x-savedjob_card>

                        @endforeach

                        <x-joblist_card_details></x-joblist_card_details>

                    </div>
                    <!-- Job list for web view end here -->
                    @include('jobseeker.savedjob.partials.mobile_joblist')
                    <div class="row">
                        <div class="col-12 text-center mt-4 mt-md-5">
                            {!! $jobs->links() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endSection

@push('js-scripts')

@include('layouts.partials.form_js')


@endPush

@section('script')
<!-- scripts.js -->

<script>
    function apply() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2200,
            timerProgressBar: true,
            showClass: {
                popup: 'animate__animated animate__bounceInRight'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOut'

            },
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: 'Your job is successfuly applied!'
        })
    }

    $(document).ready(function() {
        $.validator.addMethod("alphaWithSpaceAndDot", function(value, element) {
            return this.optional(element) || value == value.match(/^[a-zA-Z\s.]+$/);
        }, function(params, element) {
            return "Numbers not allowed";
        });


        $("#jobSearch").validate({

            rules: {
                job_title: {
                    required: true,
                    alphaWithSpaceAndDot: true
                },
            },

            messages: {
                job_title: {
                    required: "Enter job title"
                },
            }
        });
    });

    $(document).ready(function() {

        $(".page-item:first-child .page-link").html("<i class='fas fa-chevron-left text-warning' aria-hidden='true'></i>");
        $(".page-item:last-child .page-link").html("<i class='fas fa-chevron-right text-warning' aria-hidden='true'></i>");

        $('.high').click(function() {
            $('.high').removeClass("job_list_border");
            $(this).addClass("job_list_border");
        });

        $(".bookmark-btn").click(function() {
            if ($(".fa-heart", this).hasClass("red")) {
                $(".fa-heart", this).removeClass("red");
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 2200,
                    timerProgressBar: true,
                    showClass: {
                        popup: 'animate__animated animate__bounceInRight'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOut'

                    },
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: 'you have unsaved your job!'
                })
            }
        });
        // job show right side

        $('.job_details_show').click(function() {
            $(".direction_change").css({
                display: 'block',
            });
            $(".direction_change").addClass('d-none d-lg-block');
            $('.col_size_change').removeClass('col-lg-6').addClass('col-lg-5');
            $('.job_show').css("display", "block");
        });
    });
</script>


@endSection