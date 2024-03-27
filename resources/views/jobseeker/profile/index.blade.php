@extends('jobseeker.layouts.master')
@push('form-style')
<link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/selectize/selectize.css') }}" rel="stylesheet" />
@endpush


@section('style')
<!-- add style.css -->
<style>
    .form-control {
        height: 40px !important;
        line-height: 2.1;
    }

    .blue-bg-clr {
        background-color: #1275a8;
    }

    .selectize-dropdown {
        background-color: #ffffff !important;
        color: #000 !important;
        border: 1px solid #d0d0d0 !important;
    }

    TODO test .btn-warning {
        background-color: #f25e20 !important;
        border-color: #f25e20 !important;
    }

    .ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current {
        display: none;
    }

    .sidebar-font-size {
        font-size: 14px !important;
    }

    .ui-datepicker .ui-icon {
        text-indent: 0px;
    }

    .fa-check:before {
        content: "\f00c";
        border: 2px solid white;
        border-radius: 20px;
        padding: 6px
    }

    TODO board_issue #board,
    #boardEdit {
        display: none;
    }

    .readOnlyLight {
        background-color: #fff !important;
    }

    .abs-position {
        position: absolute;
        top: 16px;
        right: 13px;
    }


    .modal-dialog {
        margin: 2.75rem auto;
    }

    #newEmail,
    #newNumber {
        display: none;
    }

    .select2-container--open .select2-dropdown {
        background: #ffffff !important;
        border: 1px solid #918f8f !important;
        border-top: 0 !important;
        color: #000;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        font-weight: 500 !important;
    }

    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        background: rgb(242 94 32) !important;
        color: #fff !important;
    }

    .select2-container--default .select2-results__option[aria-selected="true"] {
        background: rgb(242 94 32) !important;
        color: #fff !important;
    }

    .select2-container--default .select2-search--dropdown .select2-search__field {
        border: 1px solid #7a7a7a !important;
    }

    /* Cancel message */
    .confirmcanscel {
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        width: 100%;
        padding: 27px 0;
        background-color: rgb(0 0 0 / 39%);
        -webkit-backdrop-filter: blur(5px);
        backdrop-filter: blur(5px);
        color: #fff;
        z-index: 9999;
    }

    .modal-lg {
        max-width: 700px;
    }

    #lastDate,
    #lastDateEdit {
        display: none;
    }

    /* Scrollbar Styling */
    .scrollbar {

        height: 626px;
        background: #F5F5F5 !important;
        overflow-y: scroll;
        overflow-x: hidden;

    }

    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background-color: #f5f5f5;
        -webkit-border-radius: 10px;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
        -webkit-border-radius: 10px;
        border-radius: 10px;
        background: #d9d9d9;
    }

    .form-select {
        font-size: 1rem !important;
        color: #212529 !important;
    }

    .form-select:focus {
        box-shadow: none;
    }
</style>
@endsection

@section('content')

@include('jobseeker.profile.partials.profile_section')
<section class="p-2">
    <div class="container">
        <p class="m-1"> Profile last updated on 10th Mar, 2023 </p>
        <div class="row">
            <div class="col-md-3 mb-3">
                @include('jobseeker.profile.partials.quickLink_section')
                <div class="user-profile  mt-5 d-xl-block d-none">
                    <h5 class="p-3 border-bottom">Latest job</h5>

                    <x-joblist.latestjob />
                    <x-joblist.latestjob />
                    <x-joblist.latestjob />
                    <x-joblist.latestjob />
                </div>
            </div>
            <div class="col-md-9 pe-lg-4">
                <div class="container px-0">
                    @include('jobseeker.profile.partials.resume')

                    @include('jobseeker.profile.partials.Keyskills_section')

                    @include('jobseeker.profile.partials.Employment_section')

                    @include('jobseeker.profile.partials.Education_section')

                    @include('jobseeker.profile.partials.Project_section')
                </div>
            </div>

        </div>
    </div>
</section>
@endSection

@push('js-scripts')
<script src="{{ asset('assets/plugins/selectize/selectize.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush

@section('script')
<script>
    // Do not touch this code --->

    function closeEduModal(closeModal) {
        closeModal.parent().hide();
    }

    function notCloseEduModal(notCloseModal) {
        notCloseModal.parent().hide();
        $('#fresher').removeClass('fieldActive');
        $('#expee').addClass('fieldActive');
        $(".total_exp").css("display", 'block');
    }

    function confirmCancelForm(cancelBtn, confirmBox, modalID, ) {

        let formInputs = cancelBtn.closest('.modal').find('input[type=text],:selected, textarea');

        formInputs.each(function() {
            if ($(this).val()) {
                confirmBox.show();
            }
        });


        let closeModal = true;
        formInputs.each(function() {
            if ($(this).val()) {
                closeModal = false;
                return false;
            }

        });

        if (closeModal === true) {
            modalID.modal('hide');
            confirmBox.hide();

        }
    }
    // Do not touch this code end --->

    $(document).ready(function() {
        // Modals values resetting on confirming close
        $("#project-modal, #projectEdit-modal,#edu-modal, #eduEdit-modal, #employement-modal, #employementEdit-modal, #keyskill-modal, #profileEdit-modal").on('hidden.bs.modal', function() {
            $('.js-example-placeholder-single').select2('val', ' ')
            var selectize1 = $Key_skills[0].selectize;
            selectize1.clear();
            var selectize2 = $skills_used_edit_project[0].selectize;
            selectize2.clear();
            var selectize3 = $skills_used_project[0].selectize;
            selectize3.clear();
            $(this).find('form').trigger('reset');

            $(this).find('form').validate().resetForm();
        });

        $.validator.addMethod("alphaWithSpace", function(value, element) {
            return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
        }, function(params, element) {
            return "Only aplhabets & space allowed";
        });

        $.validator.addMethod("alphaWithSpaceAndDot", function(value, element) {
            return this.optional(element) || value == value.match(/^[a-zA-Z\s.]+$/);
        }, function(params, element) {
            return "Numbers not allowed";
        });
    });
</script>
@endSection