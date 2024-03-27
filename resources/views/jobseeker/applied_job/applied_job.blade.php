@php $page = "applied_job"; @endphp

@extends('jobseeker.layouts.master')

@push('form_style')
@include('jobseeker.layouts.partials.form_css')

<!-- css-cdn -->

@endpush

@section('style')
<!-- add style.css -->

@endsection

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
                    <!--================================= right-sidebar -->
                    <!-- Job list for web view starts here -->
                    <div class="row pt-45 pe-3 position-relative direction_change">
                        @foreach($jobs as $jobList)
                        <x-appliedjob_card />
                        @endforeach
                        <x-joblist_card_details></x-joblist_card_details>
                    </div>
                    <!-- Job list for web view ends here -->
                    @include('jobseeker.applied_job.partials.mobile_joblist')
                    <!-- Job list for mobile view starts here -->

                    <!-- Job list for mobile view ends here -->
                    <div class="row">
                        <div class="col-12 text-center mt-4 mt-md-5">
                            {!! $jobs->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- My Profile -->

@endSection

@push('js_scripts')

@include('jobseeker.layouts.partials.form_js')


@endPush

@section('script')
<!-- scripts.js -->

<script>
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
        $('#clearButton').click(function() {
            $('#searchJob').val('');
            $("#clearSearchBtn").css("display", "none");
        });

        if ($("#searchJob").val()) {
            $("#clearSearchBtn").css("display", "block");
        } else {
            $("#clearSearchBtn").css("display", "none");
        }

        $(".page-item:first-child .page-link").html("<i class='fas fa-chevron-left text-warning' aria-hidden='true'></i>");
        $(".page-item:last-child .page-link").html("<i class='fas fa-chevron-right text-warning' aria-hidden='true'></i>");

        $('.high').click(function() {
            $('.high').removeClass("job_list_border");
            $(this).addClass("job_list_border");
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