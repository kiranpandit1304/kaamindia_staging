@extends('employer.layouts.master')

@push('form_style')
@endpush
@push('style-scripts')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="{{ asset('assets/plugins/summernote/summernote-lite.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/plugins/selectize/selectize.css') }}" rel="stylesheet" />

@endpush

@section('style')
<!-- add style.css -->
<style>
    .cur {
        pointer-events: none;
    }

    .back_btn {
        background-color: #f25e20;
    }

    .back_btn:hover {
        background-color: #1374ab;
    }

    .sec-deposit {
        margin-top: -14px
    }

    /* #start {
        height: 40px;
    } */

    .state-pos {
        margin-left: -6px;
    }

    .salary_dis_pos {
        margin-left: -4px;
    }


    .cross_white {
        color: white;
    }

    .item {
        background-color: #1374ab !important;
        color: white !important;
        border-radius: 4px;
    }

    .selectize-dropdown {
        /* background-color: #1374ab; */
        color: black;
        opacity: 1;
        z-index: 1;
    }

    .options .selectize-input {
        min-height: 45px;
        padding: 10px 5px 0 5px !important;
    }

    .selectize-input {
        z-index: 0;
    }

    .selectize-dropdown .active:not(.selected) {
        background: #1374ab;
        color: #495c68;
    }

    .stepwizard-row {
        display: table-row;
    }

    .stepwizard {
        display: table;
        width: 100%;
        position: relative;
    }

    .stepwizard-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }

    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;

    }

    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }


    .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
    }


    .btn-default {
        background-color: #f25e20;
        color: #fff;
    }

    .btn-secondary {
        box-shadow: none !important;
    }

    .shad {
        box-shadow: 0 0 32px -16px #f25e20;
        border: 0;
        outline: 0;
        border-radius: 16px;
        backdrop-filter: blur(54px);
        /* background: #1374ab; */
    }



    #work {
        display: none;
    }

    .previewBox,
    .sallary,
    .ctc-cih,
    .nego,
    .bon,
    .depo,
    .exp,
    .gender {
        border-radius: 7px;
    }

    #bonus {
        display: none;
    }

    #Recurring {
        display: none;
    }

    #maxexp {
        display: none;
    }

    #amnt {
        display: none;
    }

    #exp {
        display: none;
    }

    #yes {
        display: none;
    }

    .cih,
    .ctc,
    .one,
    .recuring {
        display: none;
    }

    .select2-container .select2-search--inline .select2-search__field {
        margin-top: 10px;
    }
</style>

@endsection

@section('content')
<main class="main-content position-relative  border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-0 shadow-none  border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 ps-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark " aria-current="page">Post jobs</li>
                </ol>
            </nav>
            <div class="collapse navbar-collapse justify-content-end mt-sm-0 mt-2 me-md-0 me-sm-3" id="navbar">
                <ul class="ms-sm-auto pe-md-3  justify-content-end">
                    <li class="nav-item hidden-bar ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav" onclick="hide()">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--================================= Register ----->
    <section class="mt-2 my-4 pb-5">
        <div class="container-fluid">
            <h3 class="pos">Post Job</h3>
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel" id="setup">
                    <div class="stepwizard-step" id="job">
                        <a href="#step-1" type="button" class="btn btn-primary cur btn-circle step_1">1</a>
                        <p></p>
                        <!-- <p>Job Details</p> -->
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default cur btn-circle step_2">2</a>
                        <!-- <p>Job Requirement</p> -->
                    </div>
                </div>
            </div>
            <form method="post" action="{{ route('employer.job.store') }}" role="form" class="p-2 card-shadow" id="job_list">
                @csrf
                <div class="row setup-content justify-content-center" id="step-1">
                    <div class="row my-3">
                        <div class="col-lg-6">
                            <div class="form-group mb-1">
                                <label class="form-label ms-0">Title<em class="text-danger">*</em></label>
                                <input type="text" name="title" value="{{ old('title') }}" class="ps-4 border form-control fields-border" placeholder="Title">
                            </div>
                            <p id="title_err"></p>
                            @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                            <div class="form-group mb-3">
                                <label class="form-label ms-0" for="about_company">Job description <em class="text-danger">*</em></label>
                                <textarea id="about_content" name="description" class="form-control summernote" data-msg="Please write something"> {{ old('description') }}</textarea>
                            </div>
                            <p id="description_err"></p>
                            @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                            <div class="row">
                                <div class="col-xs-12 form-group col-sm-6">
                                    <label class="labeltext form-label">Salary Disclosed<em class="text-danger">*</em></label><br>
                                    <label>
                                        <div id="edit_profile" class="sallary cursor border fields-border p-4 py-2 {{ old('salary.is_disclosed') == '1' ? 'active' : '' }}" onclick="yes()">
                                            <input type="radio" name="salary[is_disclosed]" class="yes-inp radio" value="1" {{ old("salary.is_disclosed") == '1' ? 'checked' : '' }}>Yes
                                        </div>
                                    </label>
                                    <label>
                                        <div id="save_button" class="sallary fields-border cursor border p-4 py-2 {{ old('salary.is_disclosed') == '0' ? 'active' : '' }}" onclick="no()">
                                            <input type="radio" class="no-inp demo radio" name="salary[is_disclosed]" value="0" {{ old("salary.is_disclosed.") == '0' ? 'checked' : '' }}>No
                                        </div>
                                    </label>
                                    <p id="salaryis_disclosed_err"></p>

                                    @if ($errors->has('salary.is_disclosed'))
                                    <span class="text-danger">{{ $errors->first('salary.is_disclosed') }}</span>
                                    @endif
                                </div>
                                <div class="col-xs-12 form-group col-sm-6">
                                    <label class="labeltext form-label">Is Negotiable<em class="text-danger">*</em></label><br>
                                    <label>
                                        <div class="nego border fields-border cursor p-4 py-2 {{ old('salary.negotiable') == '1' ? 'active' : '' }}"><input type="radio" name="salary[negotiable]" class="radio" value="1" {{ old("salary.negotiable") == '1' ? 'checked' : '' }}>Yes</div>
                                    </label>
                                    <label>
                                        <div class="nego border fields-border p-4 cursor py-2 {{ old('salary.negotiable') == '0' ? 'active' : '' }}"><input type="radio" name="salary[negotiable]" class="radio" value="0" {{ old("salary.negotiable") == '0' ? 'checked' : '' }}>No</div>
                                    </label>
                                    <p id="salarynegotiable_err"></p>
                                    @if ($errors->has('salary.negotiable'))
                                    <span class="text-danger">{{ $errors->first('salary.negotiable') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group" id="yes" style="display: {{ old('salary.is_disclosed') == '1' ? 'block' : 'none' }} ">
                                <label class="labeltext form-label">Salary Circle<em class="text-danger">*</em></label><br>
                                <label for="ctc">
                                    <div class="ctc-cih border fields-border cursor p-4 py-2 {{ old('salary.salary_type') == 'ctc' ? 'active' : '' }}">
                                        <input type="radio" name="salary[salary_type]" class="ctc_cih radio" id="ctc" value="ctc" {{ old("salary.salary_type") == 'ctc' ? 'checked' : '' }}>CTC (Yearly)
                                    </div>
                                </label>
                                <label for="cih">
                                    <div class="ctc-cih border fields-border p-4 cursor py-2 {{  old('salary.salary_type') == 'cih' ? 'active' : '' }}">
                                        <input type="radio" name="salary[salary_type]" class="radio ctc_cih " id="cih" value="cih" {{ old("salary.salary_type") == 'cih' ? 'checked' : '' }}>CIH (Monthly)
                                    </div>
                                </label>
                                <p id="salarysalary_type_err"></p>
                                <div class="row pe-0">
                                    <div class="col-md-6 cih" style="display:{{ old('salary.salary_type') != '' ? 'block' : 'none' }}">
                                        <label class=" form-label">Min Amount<em class="text-danger">*</em></label>
                                        <input type="text" name="salary[salary][min]" id="zero" onkeypress="return /[0-9]/i.test(event.key)" class="ps-3 fields-border border form-control ck" value="{{ old('salary.salary.min') }}" placeholder="Enter Amount (in Rs.)">
                                        <p id="min_cih_err"></p>
                                    </div>
                                    <div class="col-md-6 cih" style="display: {{ old('salary.salary_type') != '' ? 'block' : 'none' }}">
                                        <label class=" form-label">Max Amount</label>
                                        <input type="text" name="salary[salary][max]" id="zero1" onkeypress="return /[0-9]/i.test(event.key)" min="1" class="ps-3 border fields-border form-control ck" value="{{ old('salary.salary.max') }}" placeholder="Enter Amount (in Rs.)">
                                    </div>
                                    <p id="salarysalarymin_err"></p>
                                </div>
                            </div>
                            <p id="salary_type_err"> </p>
                        </div>
                        <div class="col-lg-6">
                            <div class="row mb-0 g-2" id="myDIV">
                                <label class="form-label">Working Type<em class="text-danger">*</em></label>
                                <div class="col-xxl-4 col-sm-4 p-1 pt-0 mt-0">
                                    <div onclick="show();" id="work-type" data-bs-toggle="tooltip" title="Candidates would be required to work from a fixed location" class="border point m-0 p-0 pt-2 cursor-pointer previewBox {{ old('job_working_type') == 'full_Time' ? 'active' : '' }}">
                                        <label id="ofc" class="cursor-pointer d-block">
                                            <input type="radio" name="job_working_type" value="full_Time" {{ old("job_working_type") == 'full_Time' ? 'checked' : '' }} class="hidden-vis">
                                            <div class="text-center">
                                                <h3> <i class="fa work-icons fa-building icon"></i></h3>
                                                <h6 class="work-title">Work Form office</h6>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-sm-4 p-1 pt-0 mt-0">
                                    <div onclick="home();" data-bs-toggle="tooltip" title="Candidates would be required to work from home (their own premises)" class="border point m-0 p-0 px-2 pt-2 pt-md-0 p-md-1 previewBox {{ old('job_working_type') == 'work_from_home' ? 'active' : '' }}">
                                        <label id="home" class="cursor-pointer d-block{{ old('job_working_type') == 'work_from_home' ? 'active' : '' }} ">
                                            <input type="radio" class="hidden-vis mt-2" name="job_working_type" value="work_from_home" {{ old("job_working_type") == 'work_from_home' ? 'checked' : '' }}>
                                            <div class="d-block mx-auto text-center">
                                                <h3> <i class="fa work-icons fa-home icon"></i></h3>
                                                <h6 class="work-title" class="">Work Form home</h6>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-sm-4 p-1 pt-0 mt-0">
                                    <div onclick="show();" data-bs-toggle="tooltip" title="Candidates would be required to work in the field, with minimal time spent in the office" class="border point m-0 p-0 px-2 pt-2 pt-md-0 p-md-1 previewBox {{ old('job_working_type') == 'field_job' ? 'active' : '' }}">
                                        <label id="job" class="cursor-pointer d-block pt-2 ">
                                            <input type="radio" class="hidden-vis" name="job_working_type" value="field_job" {{ old("job_working_type") == 'field_job' ? 'checked' : '' }}>
                                            <div class="d-block mx-auto text-center">
                                                <h3> <i class="fas work-icons fa-biking icon"></i></h3>
                                                <h6 class="work-title">Field job</h6>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <p id="job_working_type_err" class="mt-0 pt-0"></p>
                                @if ($errors->has('job_working_type'))
                                <span class="text-danger">{{ $errors->first('job_working_type') }}</span>
                                @endif
                            </div>
                            <div class="" id="work" style="display: {{ old('job_working_type') == 'work_from_home' ? 'none' : 'block' }} ">
                                <div class="row pe-0">
                                    <div class="col-md-6">
                                        <div class="position-relative">
                                            <span class="position-absolute start-0 top-50 ps-2">
                                            </span>
                                            <label class="form-label ms-0" for="state">State<em class="text-danger">*</em></label>
                                            <select class="js-example-placeholder-single ps-5 form-control select2 select_location" multiple="multiple" name="location[state][]" id="state">
                                                @foreach($states as $state)
                                                @if( old('location.state'))
                                                <option value="{{ $state->name }}" {{ in_array($state->name, old('location.state')) ? 'selected' : '' }}>{{ $state->name}} </option>
                                                @else
                                                <option value="{{ $state->name }}">{{ $state->name}} </option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <p id="locationstate_err"> </p>
                                        @if ($errors->has('location.state'))
                                        <span class="text-danger">{{ $errors->first('location.state') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative">
                                            <span class="position-absolute start-0 top-50 ps-2">
                                            </span>
                                            <label class="form-label ms-0" for="city">City<em class="text-danger">*</em></label>
                                            <select multiple class="js-example-placeholder-single form-control border ps-5 job-filter-city select_location" name="location[city][]">
                                                <!-- option use Ajax filter -->
                                            </select>
                                        </div>
                                        <p id="locationcity_err"> </p>
                                        @if ($errors->has('location.city'))
                                        <span class="text-danger">{{ $errors->first('location.city') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-sm-6 form-group pe-01">
                                    <label class="form-label ms-0">Job Type<em class="text-danger">*</em></label>
                                    <select class="js-example-placeholder-single  form-control border" multiple name="job_type[]" id="job_type">
                                        @if(old('job_type'))
                                        @foreach(old('job_type') as $jobType)
                                        <option value="{{ $jobType }}" selected>{{ $jobType }}</option>
                                        @endforeach
                                        @endif
                                        <option value="Part Time">Part Time</option>
                                        <option value="Full Time">Full Time</option>
                                    </select>
                                    <p id="job_type_err"></p>
                                    @if ($errors->has('job_type'))
                                    <span class="text-danger">{{ $errors->first('job_type') }}</span>
                                    @endif
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group  mb-1">
                                        <label class="form-label ms-0">Role<em class="text-danger">*</em></label>
                                        <select class="js-example-basic-single form-control border" name="role" id="role_id" data-placeholder="Select Role">
                                            @foreach($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <p id="role_err"></p>
                                    @if ($errors->has('role'))
                                    <span class="text-danger">{{ $errors->first('role') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-sm-6">
                                    <div class="form-group  mb-1">
                                        <label class="form-label ms-0">No. of Openings<em class="text-danger">*</em></label>
                                        <input type="text" min="1" onkeypress="return /[1-9]/i.test(event.key)" class="fields-border ps-3 form-control border" name="job_openings" value="{{ old('job_openings') }}" placeholder="Enter number">
                                    </div>
                                    <p id="job_openings_err"></p>
                                    @if ($errors->has('job_openings'))
                                    <span class="text-danger">{{ $errors->first('job_openings') }}</span>
                                    @endif
                                </div>
                                <div class="col-sm-6 col-xs-12 form-group">
                                    <div class="form-label ms-0">Incentive<em class="text-danger">*</em></div>
                                    <label class="incentive">
                                        <div id="bonus1" class="cursor fields-border bon border p-4 py-2 {{ old('incentive') == '1' ? 'active' : '' }}" onclick="RecurringY()">
                                            <input type="radio" name="incentive" value="1" class="radio" {{ old('incentive') == '1' ? 'checked' : '' }}>Yes
                                        </div>
                                    </label>
                                    <label class="no incentive">
                                        <div id="bonus2" class="bon  fields-border cursor border p-4 py-2  {{ old('incentive') == '0' ? 'active' : '' }}" onclick="RecurringN()"><input type="radio" class="radio" name="incentive" value="0" {{ old('incentive') == '0' ? 'checked' : '' }}>No</div>
                                    </label>
                                    <!--  <div class="" id="Recurring">
                                        <div class="row mb-2">
                                            <label class="labeltext my-2">Incentive type<em class="text-danger">*</em></label>
                                            <div class="col-md-12 col-sm-8 col-xs-12 form-group">
                                                <label id="recuring">
                                                    <div id="" class="bon border p-4 py-2 cursor">
                                                        <input type="radio" name="incentive_type" value="recurring" class="radio">Recurring
                                                    </div>
                                                </label>
                                                <label id="onetime">
                                                    <div id="" class="bon border p-4 py-2 cursor"><input type="radio" class="radio" name="incentive_type" value="one time">One Time</div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-lg-12 one one_time_fields">
                                                <label class="">One Time <em class="text-danger">*</em></label>
                                                <input type="text" name="bonus_one_time" id="" onkeypress="return /[0-9]/i.test(event.key)" class="ps-3 border form-control" value="" placeholder="One time ">
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="recuring">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="">Recurring <em class="text-danger">*</em></label>
                                                            <select class="js-example-basic-single form-control border" name="recurring" data-placeholder="----Select----">
                                                                <option></option>
                                                                <option value="Monthly">Monthly</option>
                                                                <option value="Yearly">Yearly</option>
                                                                <option value="Quarterly">Quarterly</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="">Min Bonus <em class="text-danger">*</em></label>
                                                            <input type="text" name="min_bonus" id="minbonus" onkeypress="return /[0-9]/i.test(event.key)" class="ps-3 border form-control bonus" value="{{ old('min_bonus') }}" placeholder="Min Bonus ">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="">Max Bonus </label>
                                                            <input type="text" name="max_bonus" id="maxbonus" onkeypress="return /[0-9]/i.test(event.key)" class="bonus ps-3 border form-control" value="{{ old('max_bonus') }}" placeholder="Max Bonus ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <p id="min_bonus_err"></p>
                                                <div class="position-relative mb-2 mt-0 pb-1">
                                                    <p class="text-danger position-absolute top-50 " id="e_bonus"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  -->
                                    <p id="incentive_err"></p>
                                    @if ($errors->has('incentive'))
                                    <span class="text-danger">{{ $errors->first('incentive') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <p class="btn btn-primary nextBtn  pull-right" id="next_btn">Next</p>
                        </div>
                    </div>
                </div>
                <div class="row setup-content justify-content-center" id="step-2">
                    <div class="row my-3">
                        <div class="col-lg-6">
                            <div class="form-group  row">
                                <label class="form-label">Minimum Qualification<em class="text-danger">*</em></label>
                                <div class="d-flex flex-wrap">
                                    <label class="previewBox  border cursor me-1 p-2 text-center {{ old('min_qualification') == '1' ? 'active' : '' }} ">
                                        <input type="radio" class="radio" name="min_qualification" value="1" {{ old('min_qualification') == '1' ? 'checked' : '' }}>
                                        < 10th Pass</label>
                                            <label class="previewBox border cursor p-2 me-1 text-center {{ old('min_qualification') == '2' ? 'active' : '' }}">
                                                <input type="radio" class="radio" name="min_qualification" value="2" {{ old('min_qualification') == '2' ? 'checked' : '' }}>12th Pass
                                            </label>
                                            <label class="previewBox border cursor p-2 me-1 text-center {{ old('min_qualification') == '3' ? 'active' : '' }}">
                                                <input type="radio" class="radio" name="min_qualification" value="3" {{ old('min_qualification') == '3' ? 'checked' : '' }}>Graduate
                                            </label>
                                            <label class="previewBox border cursor p-2 text-center {{ old('min_qualification') == '4' ? 'active' : '' }}">
                                                <input type="radio" class="radio" name="min_qualification" value="4" {{ old('min_qualification') == '4' ? 'checked' : '' }}>Post-Graduate
                                            </label>

                                </div>
                                <p id="min_qualification_err"></p>
                                @if ($errors->has('min_qualification'))
                                <span class="text-danger">{{ $errors->first('min_qualification') }}</span>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="from-group mb-3">
                                        <label class="form-label">Gender<em class="text-danger">*</em></label>
                                        <div class="form-check-inline d-flex flex-wrap">
                                            <label class="gender cursor border me-1 p-2 text-center  {{ old('gender') == 'male' ? 'active' : '' }}">
                                                <input type="radio" class="radio" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>Male

                                            </label>
                                            <label class="gender cursor border me-1 p-2 text-center {{ old('gender') == 'female' ? 'active' : '' }}">
                                                <input type="radio" name="gender" class="radio" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>Female
                                            </label>
                                            <label class="gender cursor border me-1 p-2 text-center {{ old('gender') == 'both' ? 'active' : '' }}">
                                                <input type="radio" name="gender" class="radio" value="both" {{ old('gender') == 'both' ? 'checked' : '' }}>Other
                                            </label>
                                        </div>
                                        <p id="gender_err"></p>
                                        @if ($errors->has('gender'))
                                        <span class="text-danger">{{ $errors->first('gender') }}</span>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="control-group">
                                    <label class="form-label" for="select-perks">Perks</label>
                                    <select id="select-perks" multiple name="perks[]" class="demo-default">
                                        <option value="">Select Perks...</option>
                                        @foreach($perks as $perk)
                                        @if( old('perks'))
                                        <option value="{{ $perk->name }}" {{ in_array($perk->name, old('perks')) ? 'selected' : '' }}>{{ $perk->name}} </option>
                                        @else
                                        <option value="{{ $perk->name }}">{{ $perk->name}} </option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @if ($errors->has('perks'))
                                    <span class="text-danger">{{ $errors->first('perks') }}</span>
                                    @endif
                                </div>
                                <div class="control-group mt-3">
                                    <label class="form-label" for="select-skills">Skills<em class="text-danger">*</em></label>
                                    <select id="select-skills" multiple name="skills[]" class="demo-default">
                                        <option value="">Select Skills...</option>
                                        @foreach($skills as $skill)
                                        @if( old('skills'))
                                        <option value="{{ $skill->name }}" {{ in_array($skill->name, old('skills')) ? 'selected' : '' }}>{{ $skill->name}} </option>
                                        @else
                                        <option value="{{ $skill->name }}">{{ $skill->name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    <p id="skills_err"></p>
                                    @if ($errors->has('skills'))
                                    <span class="text-danger">{{ $errors->first('skills') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="from-group">
                                        <label class="form-label">Interview Type<em class="text-danger">*</em></label>
                                        <div class="form-check-inline d-flex flex-wrap">
                                            <label>
                                                <div class="cursor border rounded interview_type me-1 p-2 {{ old('interview_type') == 'telephonic' ? 'active' : '' }}">
                                                    <input type="radio" class="radio" name="interview_type" value="telephonic" {{ old('interview_type') == 'telephonic' ? 'checked' : '' }}>
                                                    Telephonic
                                                </div>
                                            </label>
                                            <label>
                                                <div class="interview_type cursor border rounded p-2 {{ old('interview_type') == 'in-person' ? 'active' : '' }}">
                                                    <input type="radio" class="radio" name="interview_type" value="in-person" {{ old('interview_type') == 'in-person' ? 'checked' : '' }}>
                                                    In-person
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <p id="interview_type_err"></p>
                                    @if ($errors->has('interview_type'))
                                    <span class="text-danger">{{ $errors->first('interview_type') }}</span>
                                    @endif
                                </div>
                                <div class="from-group">
                                    <label class="form-label">Experience Type<em class="text-danger">*</em></label>
                                    <div class="form-check-inline d-flex flex-wrap">
                                        <label class="exp border me-1 p-2 cursor text-center {{ old('experience.type') == 'fresher' ? 'active' : '' }}" id="fresh" onclick="exphide()">
                                            <input type="radio" class="radio" name="experience[type]" value="fresher" {{ old('experience.type') == 'fresher' ? 'checked' : '' }}>Fresher
                                        </label>
                                        <label class="exp border me-1 p-2 cursor text-center {{ old('experience.type') == 'experience' ? 'active' : '' }}" id="exper" onclick="exp()">
                                            <input type="radio" class="radio" name="experience[type]" value="experience" {{ old('experience.type') == 'experience' ? 'checked' : '' }}>Experience
                                        </label>
                                    </div>
                                    <p id="experiencetype_err"></p>
                                    @if ($errors->has('experience[type]'))
                                    <span class="text-danger">{{ $errors->first('experience[type]') }}</span>
                                    @endif
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="from-group" id="exp" style="display: {{ old('experience.type') == 'experience' ? 'block' : 'none' }} ">
                                                <label class="form-label">Min Experience (in Years)<em class=" text-danger">*</em></label>
                                                <input type="text" name="experience[experience][min]" id="min_exp" onkeypress="return /[0-9]/i.test(event.key)" class="min ps-3 fields-border border form-control" value="{{ old('experience.experience.min') }}" placeholder="Experience in year">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="from-group" id="maxexp" style="display: {{ old('experience.type') == 'experience' ? 'block' : 'none' }} ">
                                                <label class="form-label">Max Experience (in Years)</label>
                                                <input type="text" name="experience[experience][max]" id="max_exp" onkeypress="return /[0-9]/i.test(event.key)" class="min ps-3 border fields-border form-control" value="{{ old('experience.experience.max') }}" placeholder="Experience in year">
                                            </div>
                                        </div>
                                        <p class="m-0" id="experienceexperiencemin_err"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <div class="position-relative">
                                        <span class="position-absolute start-0 top-50 ps-3">
                                            <i class="fas fa-calendar-alt opacity-10 pt-2"></i>
                                        </span>

                                        <label class="form-label ms-0">Job Expiry Date<em class="text-danger">*</em></label>
                                        <input type="text" class="ps-5 form-control border" placeholder="01/01/2023" id="start" readonly="true" name="job_expiry" value="{{ old('job_expiry') }}" requried>
                                    </div>
                                    <p id="job_expiry_err"></p>
                                    @if ($errors->has('job_expiry'))
                                    <span class="text-danger">{{ $errors->first('job_expiry') }}</span>
                                    @endif
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="labeltext form-label">Any security deposit<em class="text-danger">*</em></label>
                                    <div class="d-flex flex-wrap">
                                        <label id="amountY" class="depo border cursor p-2 px-3 text-center me-1 {{ old('security.security_deposite') == 'Yes' ? 'active' : '' }}" onclick="amountY()">
                                            <input type="radio" name="security[security_deposite]" class="radio" value="Yes" {{ old('security.security_deposite') == 'Yes' ? 'checked' : '' }}>Yes
                                        </label>
                                        <label id="amountN" class="depo border cursor p-2  px-3 text-center me-1  {{ old('security.security_deposite') == 'No' ? 'active' : '' }}" onclick="amountN()">
                                            <input type="radio" name="security[security_deposite]" class="radio" des value="No" {{ old('security.security_deposite') == 'No' ? 'checked' : '' }}>No
                                        </label>
                                    </div>
                                    <p id="securitysecurity_deposite_err"></p>
                                    @if ($errors->has('security.security_deposite'))
                                    <span class="text-danger">{{ $errors->first('security.security_deposite') }}</span>
                                    @endif

                                    <div class="row mb-3" id="amnt" style="display: {{ old('security.security_deposite') == 'Yes' ? 'block' : 'none' }} ">
                                        <div class="ps-3">
                                            <div class="me-1">
                                                <label class="form-label">Security Amount <em class="text-danger">*</em></label>
                                                <input type="text" name="security[amount]" id="sec_amount" onkeypress="return /[0-9]/i.test(event.key)" class="ps-3 border fields-border form-control amount" value="{{ old('security.amount') }}" placeholder="Amount">
                                            </div>
                                        </div>
                                        <p id="securityamount_err"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="setup-panel">
                                <div class="stepwizard-step d-flex">
                                    <a href="#step-1" id="back" type="button" class="btn btn-primary me-3 back_btn"><i class="far fa-arrow-alt-circle-left me-2"></i>Back</a>
                                </div>
                            </div>
                            <button class="btn btn-primary nextBtn submitForm" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
        </div>
        </form>
        </div>
    </section>

    @include('employer.layouts.partials.footer')
</main>
<!--=================================Register -->
@endsection

@push('js-scripts')
<!-- JS script links only starts here -->
<script src=" {{asset('assets/plugins/summernote/summernote-lite.min.js')}}"></script>
<script src="{{ asset('assets/plugins/selectize/selectize.min.js') }}"></script>
<!-- JS script links only ends here -->

@endpush


@section('script')
<script>
    $(document).ready(function() {

        var navListItems = $('div.setup-panel  div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');
        allWells.hide();

        navListItems.click(function(e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('')) {
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        $.validator.addMethod("alphaWithSpace", function(value, element) {
            return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
        }, function(params, element) {
            return "Only aplhabets & space allowed";
        });

        $("#job_list").validate({
            ignore: ':hidden:not([class~=selectized]),:hidden > .selectized, .selectize-control .selectize-input input',

            rules: {
                title: {
                    required: true,
                    alphaWithSpace: true
                },
                job_openings: {
                    required: true,
                    digits: true
                },
                'role[]': {
                    required: true
                },
                'job_type[]': {
                    required: true
                },
                'salary[is_disclosed]': {
                    required: true
                },
                'salary[salary_type]': {
                    required: true
                },
                'salary[negotiable]': {
                    required: true
                },
                'salary[salary][min]': {
                    required: true
                },
                'location[state][]': {
                    required: true
                },
                'location[city][]': {
                    required: true
                },
                incentive: {
                    required: true
                },
                job_working_type: {
                    required: true
                },
                min_qualification: {
                    required: true
                },
                gender: {
                    required: true
                },
                interview_type: {
                    required: true
                },
                'experience[type]': {
                    required: true
                },
                'experience[experience][min]': {
                    required: true
                },
                'security[security_deposite]': {
                    required: true
                },
                'skills[]': {
                    required: true
                },
                // 'perks[]': {
                //     required: true
                // },
                job_expiry: {
                    required: true
                },
                'security[amount]': {
                    required: true
                },
            },
            errorPlacement: function(error, element) {
                var name = $(element).attr("name");
                fieldError = name.replace(/[\[\]']+/g, '');
                error.appendTo($("#" + fieldError + "_err"));
            },
            messages: {
                title: {
                    required: "Please enter title"
                },
                job_openings: {
                    required: "Please enter openings"
                },
                'role[]': {
                    required: "Please select role"
                },
                'job_type[]': {
                    required: "Please select job type"
                },
                'salary[is_disclosed]': {
                    required: "Please select any option"
                },
                'salary[salary_type]': {
                    required: "Please select CTC/CIH"
                },
                'salary[negotiable]': {
                    required: "Please select any option"
                },
                'salary[salary][min]': {
                    required: "Please enter min salary"
                },
                'location[state][]': {
                    required: "Please select state(s)"
                },
                'location[city][]': {
                    required: "Please select city(s)"
                },
                incentive: {
                    required: "Please select any option"
                },
                'experience[_type]': {
                    required: "Please select interview type"
                },
                job_working_type: {
                    required: "Please select working type"
                },
                min_qualification: {
                    required: "Please select minimum qualification"
                },
                gender: {
                    required: "Please select gender"
                },
                interview_type: {
                    required: "Please select interview type"
                },
                // min_salary: {
                //     required: "Please enter minimum salary"
                // },
                // min_bonus: {
                //     required: true
                // },
                // min_bonus: {
                //     required: true
                // },
                'experience[type]': {
                    required: "Please select experience type"
                },
                'experience[experience][min]': {
                    required: "Please enter minimum experience"
                },
                'security[security_deposite]': {
                    required: "Please enter security deposit"
                },

                'skills[]': {
                    required: "Please select skill(s)"
                },
                job_expiry: {
                    required: "Please select job expiry date"
                },
                'security[amount]': {
                    required: "Please enter amount"
                }

            }
        })

        $('.nextBtn').click(function() {
            var validData = $("#job_list").valid();
            if (validData == true) {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find(),
                    isValid = true;
                if (isValid) {
                    nextStepWizard.removeAttr('disabled').trigger('click');
                }
            }
        });
        $('div.setup-panel div a.btn-primary').trigger('click');
    });
</script>
<script>
    $(document).ready(function() {
        $("#about_content").summernote({
            styleWithSpan: false,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname'],
                ['color', ['color']],
                ['para', ['ul', 'ol']]
                ['table', ['table']],
                ['paragraph'],
                ['ol'],
                ['ul'],
                ['table'],
            ],
            height: 150, // set editor height           
        });
        $('.dropdown-toggle').dropdown();
    });
    var eventHandler = function(name) {
        return function() {
            // console.log(name, arguments);
            $('#log').append('<div><span class="name">' + name + '</span></div>');
        };
    };
    $('#select-perks, #select-skills').selectize({
        create: true,
        onChange: eventHandler('onChange'),
        onItemAdd: eventHandler('onItemAdd'),
        onItemRemove: eventHandler('onItemRemove'),
        onOptionAdd: eventHandler('onOptionAdd'),
        onOptionRemove: eventHandler('onOptionRemove'),
        onDropdownOpen: eventHandler('onDropdownOpen'),
        onDropdownClose: eventHandler('onDropdownClose'),
        onFocus: eventHandler('onFocus'),
        onBlur: eventHandler('onBlur'),
        onInitialize: eventHandler('onInitialize'),
    }).on('change', function() {
        $(this).valid();
    });



    $(function() {
        $("#zero1, #zero").change(function() {
            var min = parseInt($('#zero').val());
            var max = parseInt($('#zero1').val());
            // var min = parseInt($(this).attr('min'));
            if ($(this).val() < min && $(this).val() != '') {
                $(this).val("");
                alert("Enter value greater than or equal to minimum amount")
            } else if ($(this).val() > max && $(this).val() != '') {
                $(this).val("");
                alert("Enter value lesser than or equal to maximum amount")
            }
        });
    });
    $(function() {
        $("#zero3, #zero2").change(function() {
            var min = parseInt($('#zero2').val());
            var max = parseInt($('#zero3').val());
            // var min = parseInt($(this).attr('min'));
            if ($(this).val() < min && $(this).val() != '') {
                $(this).val("");
                alert("Enter value greater than or equal to minimum amount")
            } else if ($(this).val() > max && $(this).val() != '') {
                $(this).val("");
                alert("Enter value lesser than or equal to maximum amount")
            }
        });
    });
    $(function() {
        $("#max_exp, #min_exp").change(function() {
            var min = parseInt($('#min_exp').val());
            // var min = parseInt($(this).attr('min'));
            if ($(this).val() < min && $(this).val() != '') {
                $(this).val("");
                alert("Enter Value Greater than or equal to Minimum Experience")
            } else if ($(this).val() > max && $(this).val() != '') {
                $(this).val("");
                alert("Enter Value Lesser than or equal to Maximum Experience")
            }
        });
    });

    $("#job_type, #role_id").select2({
        // your options here
    }).on('change', function() {
        $(this).valid();
    });

    $(".step_2").on('click', function() {
        $('.step_2').addClass('btn-default').removeClass('btn-secondary').addClass('btn-primary');
        $('.step_1').removeClass('btn-primary').removeClass('btn-default').addClass('btn-secondary');
    });

    $(".step_1").on('click', function() {
        $('.step_1').addClass('btn-default').removeClass('btn-secondary').addClass('btn-primary');
        $('.step_2').removeClass('btn-primary').removeClass('btn-default').addClass('btn-secondary');
    });
    $("#back").on('click', function() {
        $('.step_1').addClass('btn-default').removeClass('btn-secondary').addClass('btn-primary');
        $('.step_2').removeClass('btn-primary').removeClass('btn-default').addClass('btn-secondary');
    });


    $().click(function() {
        $('.work-icons')(this).css("color", "#fff");
    });

    // $(function() {
    // $("#").datepicker({
    //     minDate: 0
    // });
    $("#start").datepicker({
        minDate: 0,
        clearBtn: true,
        startDate: "today",
    });
    // });

    $(".js-example-placeholder-single").select2({
        placeholder: "---Select---",
        allowClear: true
    }).on('change', function() {
        $(this).valid();
    });

    $('#onetime').click(function() {
        $('.one').show();
        $('.recuring').find(':input').val('');
        $('.recuring').find('select').trigger('change');
        $('.recuring').hide();
    });

    $('.no').click(function() {
        $('.one').hide();
        $('.recuring').hide();
    });

    $('#recuring').click(function() {
        $('.recuring').show();
        $('.one').hide();
        $('.one_time_fields').find(':input').val('');
    });

    $('input[type="checkbox"]').on('change', function() {
        $('input[type="checkbox"]').not(this).prop('checked', false);
    });

    $('.ctc_cih').click(function() {
        if ($('#ctc').is(':checked')) {
            $('.ctc').show();
        } else if ($('#cih').is(':checked')) {
            $('.cih').show();
        }

    });
    $('.ctc_cih').click(function() {
        if ($('#ctc').is(':checked')) {
            $('.cih').show();
        } else if ($('#cih').is(':checked')) {
            $('.cih').show();
        }
    });
    $('#ctc').click(function() {
        $('.ctc').find(':input').val('');

    });

    $('#cih').click(function() {
        $('.cih').find(':input').val('');

    });

    $('body').on('input', '#zero1', function(event) {
        event.preventDefault();
        var min = $('#zero').val();
        var max = $('#zero1').val();
        if (parseInt(min) >= parseInt(max)) {
            $('#error').text('Please fill max grater then min');

        } else {
            $('#error').text('Done');
        }
    });
    $('body').on('input', '#maxbonus', function(event) {
        event.preventDefault();
        var minbonus = $('#minbonus').val();
        var maxbonus = $('#maxbonus').val();
        if (parseInt(minbonus) >= parseInt(maxbonus)) {
            $('#e_bonus').text('Please fill max grater then min');
        } else {
            $('#e_bonus').text('Done');
        }
    });




    function show() {
        document.getElementById('work').style.display = "block";
        $(".js-example-placeholder-single").select2({
            placeholder: "---Select---",
            allowClear: true
        });
        $('.select_location').val('heyy').trigger('change');
        $("#job_list").validate().resetForm();

    }

    function home() {
        document.getElementById('work').style.display = "none";
    }

    function yes() {
        document.getElementById('yes').style.display = "block";
        document.getElementById('yes').removeAttribute("disabled")
    }

    function no() {
        document.getElementById('yes').style.display = "none";
        document.getElementById('yes').setAttribute("disabled", true)
    }

    function exp() {
        document.getElementById('exp').style.display = "block";
        document.getElementById('maxexp').style.display = "block";
        document.getElementById('min_exp').removeAttribute("disabled")
        document.getElementById('max_exp').removeAttribute("disabled")
    }
    $('#fresh').click(function() {
        $('#min_exp').val('');
        $('#max_exp').val('');
        $("#job_list").validate().resetForm();
        // $("#exp").find(':input').validate().reset();
    });
    $('#amountN').click(function() {
        $('#sec_amount').val('');
        $("#job_list").validate().resetForm();
    });

    function exphide() {
        document.getElementById('exp').style.display = "none";
        document.getElementById('min_exp').setAttribute("disabled", true)
        document.getElementById('maxexp').style.display = "none";
        document.getElementById('max_exp').setAttribute("disabled", true);

    }

    // function RecurringY() {
    //     document.getElementById('Recurring').style.display = "block";
    // }

    // function RecurringN() {
    //     document.getElementById('Recurring').style.display = "none";
    //     document.getElementById('bonus').style.display = "none";
    // }

    function amountY() {
        document.getElementById('amnt').style.display = "block";
        document.getElementById('amnt').removeAttribute("disabled")
    }

    function amountN() {
        document.getElementById('amnt').style.display = "none";
        document.getElementById('amnt').setAttribute("disabled", true)
    }

    $(".previewBox").click(function() {
        $(".previewBox.active").removeClass('active');
        $(this).addClass('active');
    });
    $(".sallary").click(function() {
        $(".sallary.active").removeClass('active')
        $(this).addClass('active')
    });
    $(".ctc-cih").click(function() {
        $(".ctc-cih.active").removeClass('active')
        $(this).addClass('active')
    });
    $(".nego").click(function() {
        $(".nego.active").removeClass('active')
        $(this).addClass('active')
    });
    $(".interview_type").click(function() {
        $(".interview_type.active").removeClass('active')
        $(this).addClass('active')
    });
    $(".bon").click(function() {
        $(".bon.active").removeClass('active')
        $(this).addClass('active')
    });
    $(".depo").click(function() {
        $(".depo.active").removeClass('active')
        $(this).addClass('active')
    });
    $(".exp").click(function() {
        $(".exp.active").removeClass('active')
        $(this).addClass('active')
    });
    $(".gender").click(function() {
        $(".gender.active").removeClass('active')
        $(this).addClass('active')
    });
    $("#recurringB").change(function() {
        $("#bonus").show();
    });

    // city filter by state
    $(document).on('change', '#state', function() {
        let state_id = $(this).val();
        // alert(state_id);
        $.ajax({
            type: "GET",
            url: "{{route('employer.job.filterCity')}}",
            data: {
                'state_id': state_id
            },
            success: function(data) {
                $(".job-filter-city").html(data);
            }
        });

    });

    // end city filter by state
</script>
<!-- Custom script links only ends here -->
@endsection