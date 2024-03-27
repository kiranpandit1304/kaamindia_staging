@extends('employer.layouts.master')

@push('form_style')
@include('employer.layouts.partials.form_css')
@endpush
@push('style-scripts')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="{{ asset('assets/plugins/summernote/summernote-lite.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/plugins/selectize/selectize.css') }}" rel="stylesheet" />

<!-- css-cdn -->
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

    #start {
        height: 40px;
    }

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
        z-index: 0;

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

    .selectize-input {
        z-index: 0;
    }
</style>
@endsection

@section('content')
@include('employer.layouts.partials.sidebar')
<main class="main-content position-relative  border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 ps-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark " aria-current="page">Edit Job</li>
                </ol>
            </nav>
            <div class="collapse navbar-collapse  justify-content-end mt-sm-0 mt-2 me-md-0 me-sm-3" id="navbar">

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


                </ul>
            </div>
        </div>
    </nav>
    <!--=================================Register -->
    <section class="mt-2 my-4 pb-5">
        <div class="container-fluid">
            <h3>Edit Job</h3>
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel" id="setup">
                    <div class="stepwizard-step" id="job">
                        <a href="#step-1" type="button" class="btn btn-primary cur btn-circle step_1">1</a>
                        <p></p>
                        <!-- <p>Job Details</p> -->
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-secondary cur btn-circle step_2">2</a>
                        <!-- <p>Job Requirement</p> -->
                    </div>

                </div>
            </div>
            <form method="post" action="{{ route('employer.job.update', $job->id) }}" role="form" class="p-2 card-shadow" id="job_list">
                @csrf
                <div class="row setup-content justify-content-center" id="step-1" id="first">
                    <div class="row my-3">
                        <div class="col-lg-6">
                            <div class="form-group mb-1">
                                <label class="form-label">Title<em class="text-danger">*</em></label>
                                <input type="text" name="title" value="{{ $job->title }}" class="ps-4 border form-control fields-border" placeholder="Title">
                            </div>
                            <p id="title_err"></p>
                            @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                            <div class="form-group mb-3">
                                <label class="form-label " for="about_company">Job description<em class="text-danger">*</em></label>
                                <textarea id="about_content" name="description" class="form-control">{{ $job->description }}</textarea>
                            </div>
                            <p id="description_err"></p>
                            @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif

                            <div class="row">

                                <div class="col-xs-12 form-group col-sm-6">
                                    <label class="labeltext form-label">Salary Disclosed<em class="text-danger">*</em></label><br>
                                    <label>
                                        <div id="edit_profile" class="sallary cursor border fields-border p-4 py-2 {{ $job->salary->is_disclosed == '1' ? 'active' : '' }}" onclick="yes()">
                                            <input type="radio" name="salary[is_disclosed]" class="yes-inp radio" value="1" {{ $job->salary->is_disclosed == '1' ? 'checked' : '' }}>Yes
                                        </div>
                                    </label>
                                    <label>
                                        <div id="save_button" class="sallary fields-border cursor border p-4 py-2 {{ $job->salary->is_disclosed == '0' ? 'active' : '' }}" onclick="no()">
                                            <input type="radio" class="no-inp demo radio" name="salary[is_disclosed]" value="0" {{ $job->salary->is_disclosed == '0' ? 'checked' : '' }}>No
                                        </div>
                                    </label>
                                    <p id="salaryis_disclosed_err"></p>

                                    @if ($errors->has('salary[is_disclosed]'))
                                    <span class="text-danger">{{ $errors->first('salary[is_disclosed]') }}</span>
                                    @endif
                                </div>
                                <div class="col-xs-12 form-group col-sm-6">
                                    <label class="labeltext form-label">Is Negotiable<em class="text-danger">*</em></label><br>
                                    <label>
                                        <div class="nego border fields-border cursor p-4 py-2 {{ $job->salary->negotiable == '1' ? 'active' : '' }}"><input type="radio" name="salary[negotiable]" class="radio" value="1" {{ $job->salary->negotiable =='1' ? 'checked' : '' }}>Yes</div>
                                    </label>
                                    <label>
                                        <div class="nego border fields-border p-4 cursor py-2 {{ $job->salary->negotiable == '0' ? 'active' : '' }}"><input type="radio" name="salary[negotiable]" class="radio" value="0" {{ $job->salary->negotiable == '0' ? 'checked' : '' }}>No</div>
                                    </label>
                                    <p id="salarynegotiable_err"></p>
                                </div>
                            </div>

                            <div class="form-group" id="yes" style="display: '{{ $job->salary->is_disclosed == '1' ? 'block' : 'none' }}'">
                                <label class="labeltext form-label">Salary Circle<em class="text-danger">*</em></label><br>
                                <label for="ctc">
                                    <div class="ctc-cih border fields-border cursor p-4 py-2 {{ @$job->salary->salary_type == 'ctc' ? 'active' : '' }}">
                                        <input type="radio" name="salary[salary_type]" class="ctc_cih radio" id="ctc" value="ctc" {{ @$job->salary->salary_type == 'ctc' ? 'checked' : '' }}>CTC (Yearly)
                                    </div>
                                </label>
                                <label for="cih">
                                    <div class="ctc-cih border fields-border p-4 cursor py-2 {{ @$job->salary->salary_type == 'cih' ? 'active' : '' }}">
                                        <input type="radio" name="salary[salary_type]" class="radio ctc_cih " id="cih" value="cih" {{ @$job->salary->salary_type == 'cih' ? 'checked' : '' }}>CIH (Monthly)
                                    </div>
                                </label>
                                <p id="salarysalary_type_err" class="m-0"></p>
                                <div class="row pe-0">
                                    <div class="col-md-6 cih pe-0" style="display: '{{ @$job->salary->salary_type != '' ? 'block' : 'none' }}'">
                                        <label class=" form-label">Min Amount<em class="text-danger">*</em></label>
                                        <input type="text" name="salary[salary][min]" value="{{ $job->salary->salary->min }}" id="zero" onkeypress="return /[0-9]/i.test(event.key)" class="ps-3 fields-border border form-control ck" placeholder="Enter Amount (in Rs.)">
                                        <p id="min_cih_err"></p>
                                    </div>
                                    <div class="col-md-6 cih pe-0" style="display: '{{ @$job->salary->salary_type != '' ? 'block' : 'none' }}'">
                                        <label class="form-label">Max Amount</label>
                                        <input type="text" name="salary[salary][max]" value="{{ $job->salary->salary->max }}" id="zero1" onkeypress="return /[0-9]/i.test(event.key)" min="1" class="ps-3 border fields-border form-control ck" placeholder="Enter Amount (in Rs.)">
                                    </div>
                                    <p id="salarysalarymin_err"></p>
                                </div>
                                <p id="salary_type_err"> </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row mb-0 g-4" id="myDIV">
                                <label class="form-label ps-0">Working Type<em class="text-danger">*</em></label>
                                <div class="col-xxl-4 col-sm-4 p-1  pt-0 mt-0">
                                    <div onclick="show();" id="work-type" data-bs-toggle="tooltip" title="Candidates would be required to work from a fixed location" class="border point m-0 p-0 ps-2 pt-2 cursor-pointer pe-2 previewBox {{ $job->job_working_type == 'full_Time' ? 'active' : '' }}">
                                        <label id="ofc" class="cursor-pointer d-block">
                                            <input type="radio" name="job_working_type" value="full_Time" class="hidden-vis" {{ $job->job_working_type == 'full_Time' ? 'checked' : '' }}>
                                            <div class="text-center">
                                                <h3> <i class="fa work-icons work-icons2 fa-building icon"></i></h3>
                                                <h6 class="work-title">Work Form office</h6>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-sm-4 p-1  pt-0 mt-0">
                                    <div onclick="home();" data-bs-toggle="tooltip" title="Candidates would be required to work from home (their own premises)" class="border point m-0 p-0 ps-2 pt-2 pt-md-0 p-md-1 pe-2 previewBox">
                                        <label id="home" class="cursor-pointer d-block">
                                            <input type="radio" class="mt-2 hidden-vis" name="job_working_type" value="work_from_home" {{ $job->job_working_type == 'work_from_home' ? 'checked' : '' }}>
                                            <div class="d-block mx-auto text-center">
                                                <h3> <i class="fa work-icons fa-home icon"></i></h3>
                                                <h6 class="work-title" class="">Work Form home</h6>

                                            </div>

                                        </label>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-sm-4 p-1  pt-0 mt-0">
                                    <div onclick="show();" data-bs-toggle="tooltip" title="Candidates would be required to work in the field, with minimal time spent in the office" class="border point m-0 p-0 ps-2 pt-2 pt-md-0 p-md-1 pe-2 previewBox">
                                        <label id="job" class="cursor-pointer d-block pt-2 {{ $job->job_working_type == 'field_job' ? 'active' : '' }}">
                                            <input type="radio" class="hidden-vis" name="job_working_type" value="field_job" {{ $job->job_working_type == 'field_job' ? 'checked' : '' }}>
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

                            <div class="" id="work" style="display: '{{ $job->job_working_type == 'work_from_home' ? 'none' : 'block' }}'">
                                <div class="row pe-0">
                                    <div class="state-pos col-md-6 mb-3 pe-0">
                                        <div class="position-relative">
                                            <span class="position-absolute start-0 top-50 ps-3">
                                            </span>
                                            <label class="form-label ms-0" for="state">State<em class="text-danger">*</em></label>
                                            <select class="js-example-placeholder-single ps-5 form-control select2 select_location" multiple="multiple" name="location[state][]" id="state">
                                                @if($job->locations)
                                                @foreach($job->locations->state as $selectedState)
                                                @foreach($states as $state)
                                                <option value="{{ $state->name }}" {{ $state->name == $selectedState ? 'selected' : $state->name }}>{{ $state->name == $selectedState ? $selectedState : $state->name }}</option>
                                                @endforeach
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <p id="locationstate_err"> </p>
                                        @if ($errors->has('state_id'))
                                        <span class="text-danger">{{ $errors->first('state_id') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 mb-3 pe-0">
                                        <div class="position-relative">
                                            <span class="position-absolute start-0 top-50 ps-2">
                                            </span>
                                            <label class="form-label ms-0" for="city">City<em class="text-danger">*</em></label>

                                            <select multiple class="js-example-placeholder-single select_location form-control border ps-5 job-filter-city" name="location[city][]" required>
                                                @if($job->locations)
                                                @foreach($job->locations->city as $city)
                                                <option value=" {{ $city }}" selected>{{ $city }}</option>
                                                @endforeach
                                                @endif

                                            </select>
                                        </div>
                                        <p id="locationcity_err"> </p>
                                        @if ($errors->has('city'))
                                        <span class="text-danger">{{ $errors->first('city') }}</span>
                                        @endif
                                    </div>
                                </div>


                            </div>
                            <div class="row justify-content-center">

                                <div class="col-sm-6 form-group">
                                    <label class="form-label">Job Type<em class="text-danger">*</em></label>
                                    <select class="js-example-placeholder-single  form-control border" multiple name="job_type[]" id="job_type" required>
                                        @foreach($job->job_type as $jobType)
                                        <option value="{{ $jobType }}" selected>{{ $jobType }}</option>
                                        @endforeach
                                    </select>
                                    <p id="job_type_err"></p>
                                    @if ($errors->has('job_type'))
                                    <span class="text-danger">{{ $errors->first('job_type') }}</span>
                                    @endif
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group  mb-1">
                                        <label class="form-label">Role<em class="text-danger">*</em></label>
                                        <select class="js-example-basic-single form-control border" name="role" id="role_id">
                                            <option value="{{ $job->role }}">{{ $job->role }}</option>
                                            @foreach($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                        <p id="role_id_err"></p>
                                        @if ($errors->has('role'))
                                        <span class="text-danger">{{ $errors->first('role') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="row justify-content-center">
                                <div class="col-sm-6">
                                    <div class="form-group  mb-1">
                                        <label class="form-label ms-0">No. of Openings<em class="text-danger">*</em></label>
                                        <input type="text" min="1" onkeypress="return /[1-9]/i.test(event.key)" class="fields-border ps-3 form-control border" name="job_openings" value="{{ $job->openings }}" placeholder="Enter number" required>
                                    </div>
                                    <p id="job_openings_err"></p>
                                </div>
                                <div class="col-sm-6 col-xs-12 form-group">
                                    <label class="form-label labeltext mb-2">Incentive<em class="text-danger">*</em></label><br>
                                    <label class="">
                                        <div id="bonus1" class="bon cursor fields-border border p-4 py-2  {{ $job->incentive == '1' ? 'active' : '' }}" onclick="RecurringY()">
                                            <input type="radio" name="incentive" value="1" class="radio" {{ $job->incentive == '1' ? 'checked' : '' }}>Yes
                                        </div>
                                    </label>
                                    <label class="no">
                                        <div id="bonus2" class="bon fields-border border cursor p-4 py-2  {{ $job->incentive == '0' ? 'active' : '' }}" onclick="RecurringN()"><input type="radio" class="radio" name="incentive" value="0" {{ $job->incentive == '0' ? 'checked' : '' }}>No</div>
                                    </label>

                                    <!--  <div class="" id="Recurring" style="display: {{ $job->incentive == '1' ? 'block' : 'none' }} ">
                                        <div class="row mb-2">
                                            <label class="labeltext my-2">Incentive type<em class="text-danger">*</em></label>
                                            <div class="col-md-12 col-sm-8 col-xs-12 form-group">
                                                <label id="recuring">
                                                    <div id="" class="bon border cursor p-4 py-2 {{ $job->incentive_type == 'recurring' ? 'active' : '' }}">
                                                        <input type="radio" name="incentive_type" value="recurring" class="radio" {{ $job->incentive == 'recurring' ? 'checked' : '' }}>Recurring
                                                    </div>
                                                </label>
                                                <label id="onetime">
                                                    <div id="" class="bon cursor border p-4 py-2 {{ $job->incentive_type == 'on time' ? 'active' : '' }}"><input type="radio" class="radio" name="incentive_type" value="on time" {{ $job->incentive == 'on time' ? 'checked' : '' }}>On Time</div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-lg-12 one" style="display: {{ $job->incentive_type == 'on time' ? 'block' : 'none' }} ">
                                                <label class="">One Time <em class="text-danger">*</em></label>
                                                <input type="text" name="bonus_one_time" id="" onkeypress="return /[0-9]/i.test(event.key)" class="ps-3 border form-control" value="{{ $job->bonus_one_time }}" placeholder="One time ">
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="recuring" style="display: {{ $job->incentive_type == 'recurring' ? 'block' : 'none' }} ">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="">Recurring <em class="text-danger">*</em></label>
                                                            <select class="js-example-basic-single form-control border" name="recurring">
                                                                <option value="{{ $job->recurring }}">{{ $job->recurring }}</option>
                                                                <option value="Monthly">Monthly</option>
                                                                <option value="Yearly">Yearly</option>
                                                                <option value="Quarterly">Quarterly</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="">Min Bonus <em class="text-danger">*</em></label>
                                                            <input type="text" name="min_bonus" id="minbonus" onkeypress="return /[0-9]/i.test(event.key)" class="ps-3 border form-control bonus" value="{{ $job->min_bonus }}" placeholder="Min Bonus ">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="">Max Bonus </label>
                                                            <input type="text" name="max_bonus" id="maxbonus" class="bonus ps-3 border form-control" value="{{ $job->max_bonus }}" placeholder="Max Bonus ">
                                                        </div>
                                                    </div>

                                                </div>
                                                <p id="min_bonus_err"></p>
                                                <div class="position-relative mb-2 mt-0 pb-1">
                                                    <p class="text-danger position-absolute top-50 " id="e_bonus"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <p id="incentive_err">
                                    </p>
                                </div>
                            </div>
                            @if ($errors->has('openings'))
                            <span class="text-danger">{{ $errors->first('openings') }}</span>
                            @endif
                            <!-- <div class="col-md-6 col-sm-4 col-xs-12 form-group">
                                <label class="labeltext">Status<em class="text-danger">*</em></label>
                                <div class="row">
                                    <div class="col-6 my-3">
                                        <label>
                                            <span class="nego border p-4 py-2 {{ $job->Status == '1' ? 'active' : '' }}" style="cursor:pointer"><input type="radio" name="Status" class="radio" value="1" {{ $job->Status == '1' ? 'checked' : '' }}>Yes</span>
                                        </label>
                                    </div>
                                    <div class="col-6 my-3" style="margin-left: -45px;">
                                        <label>
                                            <span class="nego border p-4 py-2 {{ $job->Status == '0' ? 'active' : '' }}" style="cursor:pointer "><input type="radio" name="Status" class="radio" value="0" {{ $job->Status == '0' ? 'checked' : '' }}>No</span>
                                        </label>
                                    </div> -->
                            <!-- <p id="negotiable_err"></p> -->
                            <!-- </div>
                            </div> -->
                        </div>
                        <div class="col-2">
                            <p class="btn btn-primary nextBtn  pull-right" id="next_btn">Next</p>
                        </div>
                    </div>
                </div>
                <div class="row setup-content justify-content-center" id="step-2">
                    <div class="row my-3">
                        <div class="col-lg-6">
                            <div class="form-group  mb-3 row">
                                <label class="form-label">Minimum Qualification<em class="text-danger">*</em></label>
                                <div class="d-flex flex-wrap">
                                    <label class="previewBox cursor border p-2 me-1 text-center {{ $job->min_qualification == '1' ? 'active' : '' }} ">
                                        <input type="radio" class="radio" name="min_qualification" value="1" {{ $job->min_qualification == '1' ? 'checked' : '' }}>
                                        < 10th Pass</label>
                                            <label class="previewBox border cursor p-2 me-1 text-center {{ $job->min_qualification == '2' ? 'active' : '' }}">
                                                <input type="radio" class="radio" name="min_qualification" value="2" {{ $job->min_qualification == '2' ? 'checked' : '' }}>12th Pass
                                            </label>
                                            <label class="previewBox border cursor p-2 me-1 text-center {{ $job->min_qualification == '3' ? 'active' : '' }}">
                                                <input type="radio" class="radio" name="min_qualification" value="3" {{ $job->min_qualification == '3' ? 'checked' : '' }}>Graduate
                                            </label>
                                            <label class="previewBox border cursor p-2 text-center {{ $job->min_qualification == '4' ? 'active' : '' }}">
                                                <input type="radio" class="radio" name="min_qualification" value="3" {{ $job->min_qualification == '4' ? 'checked' : '' }}>Post-Graduate
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
                                            <label class="gender border cursor me-1 p-2 text-center  {{ $job->gender == 'male' ? 'active' : '' }}">
                                                <input type="radio" class="radio" name="gender" value="male" {{ $job->gender == 'male' ? 'checked' : '' }}>Male
                                            </label>
                                            <label class="gender border cursor me-1 p-2 text-center {{ $job->gender == 'female' ? 'active' : '' }}">
                                                <input type="radio" name="gender" class="radio" value="female" {{ $job->gender == 'female' ? 'checked' : '' }}>Female
                                            </label>
                                            <label class="gender border cursor me-1 p-2 text-center {{ $job->gender == 'both' ? 'active' : '' }}">
                                                <input type="radio" name="gender" class="radio" value="both" {{ $job->gender == 'both' ? 'checked' : '' }}>Any
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
                                        @foreach($job->perks as $perk)
                                        <option value="{{ $perk }}" selected>{{ $perk }}</option>
                                        @endforeach
                                        @foreach($perks as $val)
                                        <option value="{{ $val->name }}">{{ $val->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="control-group mt-3">
                                    <label class="form-label" for="select-skills">Skills<em class="text-danger">*</em></label>
                                    <select id="select-skills" multiple name="skills[]" class="demo-default">
                                        <option value="">Select a state...</option>
                                        @foreach($job->skills as $skill)
                                        <option value="{{ $skill }}" selected>{{ $skill }}</option>
                                        @endforeach
                                        @foreach($skills as $val)
                                        <option value="{{ $val->name }}">{{ $val->name }}</option>
                                        @endforeach
                                    </select>
                                    <p id="skills_err"></p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-12">
                                <div class="from-group mb-4">
                                    <label class="form-label">Interview Type<em class="text-danger">*</em></label>
                                    <div class="form-check-inline d-flex flex-wrap">
                                        <label>
                                            <div class="cursor  border rounded interview_type me-1 p-2 {{ $job->interview_type == 'telephonic' ? 'active' : '' }}">
                                                <input type="radio" class="radio" name="interview_type" value="telephonic" {{ $job->interview_type == 'telephonic' ? 'checked' : '' }}>
                                                Telephonic
                                            </div>
                                        </label>
                                        <label>
                                            <div class="interview_type cursor border rounded p-2 {{ $job->interview_type == 'in-person' ? 'active' : '' }}">
                                                <input type="radio" class="radio" name="interview_type" value="in-person" {{ $job->interview_type == 'in-person' ? 'checked' : '' }}>
                                                In-person
                                            </div>
                                        </label>
                                    </div>
                                    <p id="interview_type_err"></p>
                                </div>

                            </div>
                            <div class="from-group mb-3">
                                <label class="form-label">Experience Type<em class="text-danger">*</em></label>
                                <div class="form-check-inline d-flex flex-wrap">
                                    <label class="exp border me-1 p-2 cursor text-center {{ $job->experience->type == 'fresher' ? 'active' : '' }}" id="fresh" onclick="exphide()">
                                        <input type="radio" class="radio" name="experience[type]" value="fresher" {{ $job->experience->type == 'fresher' ? 'checked' : '' }}>Fresher
                                    </label>
                                    <label class="exp border me-1 p-2 cursor text-center {{ $job->experience->type == 'experience' ? 'active' : '' }}" id="exper" onclick="exp()">
                                        <input type="radio" class="radio" name="experience[type]" value="experience" {{ $job->experience->type == 'experience' ? 'checked' : '' }}>Experience
                                    </label>
                                </div>
                                <p id="type_err"></p>
                                @if ($errors->has('type'))
                                <span class="text-danger">{{ $errors->first('experience[type]') }}</span>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="from-group" id="exp" style="display: '{{ $job->experience->type == 'experience' ? 'block' : 'none' }}' ">
                                        <label class="form-label">Min Experience (in Years)<em class=" text-danger">*</em></label>
                                        <input type="text" name="experience[experience][min]" value="{{ @$job->experience->experience->min }}" id="min_exp" onkeypress="return /[0-9]/i.test(event.key)" class="min ps-3 fields-border border form-control" value="{{ $job->min_experience }}" placeholder="Experience in year">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="from-group" id="maxexp" style="display: '{{ $job->experience->type == 'experience' ? 'block' : 'none' }}' ">
                                        <label class="form-label">Max Experience (in Years)</label>
                                        <input type="text" name="experience[experience][max]" value="{{ @$job->experience->experience->max }}" id="max_exp" onkeypress="return /[0-9]/i.test(event.key)" class="min ps-3 fields-border border form-control" value="{{ $job->max_experience }}" placeholder="Experience in year">
                                    </div>
                                </div>
                                <p class="m-0" id="experienceexperiencemin_err"></p>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6 mb-3 datetimepickers">
                                    <div class="position-relative">
                                        <span class="position-absolute start-0 top-50 ps-3">
                                            <i class="fas fa-calendar-alt opacity-10 pt-2"></i>
                                        </span>

                                        <label class="form-label ms-0">Job Expiry Date<em class="text-danger">*</em></label>
                                        <input type="text" value="{{ $job->job_expiry_date }}" class="ps-5 form-control border" placeholder="01/01/2023" readonly="true" id="start" name="job_expiry">
                                    </div>
                                    <p id="job_expiry_err"></p>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="labeltext form-label">Any security deposit<em class="text-danger">*</em></label>
                                    <div class="d-flex flex-wrap">
                                        <label id="amountY" class="depo border cursor p-2 px-3 text-center me-1 {{ $job->security->security_deposite == 'Yes' ? 'active' : '' }}" onclick="amountY()">
                                            <input type="radio" name="security[security_deposite]" class="radio" value="Yes" {{ $job->security->security_deposite == 'Yes' ? 'checked' : '' }}>Yes
                                        </label>
                                        <label id="amountN" class="depo border cursor p-2 px-3 text-center me-1 {{ $job->security->security_deposite == 'No' ? 'active' : '' }}" onclick="amountN()">
                                            <input type="radio" name="security[security_deposite]" class="radio" des value="No" {{ $job->security->security_deposite == 'No' ? 'checked' : '' }}>No
                                        </label>
                                    </div>
                                    <p id="securitysecurity_deposite_err"></p>

                                    <div class="row mb-3" id="amnt" style="display: '{{ $job->security->security_deposite == 'Yes' ? 'block' : 'none' }}' ">
                                        <div class="ps-3">
                                            <div class="me-1">
                                                <label class="form-label">Security Amount <em class="text-danger">*</em></label>
                                                <input type="text" name="security[amount]" id="sec_amount" onkeypress="return /[0-9]/i.test(event.key)" class="ps-3 border fields-border form-control amount" value="{{ @$job->security->amount }}" placeholder="Amount">
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
                            <button class="btn btn-primary nextBtn" type="submit">Submit</button>

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
    var eventHandler = function(name) {
        return function() {
            $('#log').append('<div><span class="name">' + name + '</span></div>');
        };
    };
    var $select = $('#select-perks, #select-skills').selectize({
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
    var $select = $('#select-perks, #select-skills').selectize({
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
    $('#perks-input-tags, #skills-input-tags').selectize({
        delimiter: ',',
        persist: false,
        create: function(input) {
            return {
                value: input,
                text: input
            }
        }
    }).on('change', function() {
        $(this).valid();
    });

    // Min-Max CTC/CIH alert function starts -->

    $(function() {
        $("#zero1, #zero").change(function() {
            var min = parseInt($('#zero').val());
            var max = parseInt($('#zero1').val());
            // var min = parseInt($(this).attr('min'));
            if ($(this).val() < min && $(this).val() != '') {
                $(this).val("");
                alert("Enter Value Greater than or equal to Minimum CIH")
            } else if ($(this).val() > max && $(this).val() != '') {
                $(this).val("");
                alert("Enter Value Lesser than or equal to Maximum CIH")
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
                alert("Enter Value Greater than or equal to Minimum CTC")
            } else if ($(this).val() > max && $(this).val() != '') {
                $(this).val("");
                alert("Enter Value Lesser than or equal to Maximum CTC")
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

    $("#job_type, #role_id").select2({}).on('change', function() {
        $(this).valid();
    });

    $(".step_2").on('click', function() {
        $('.step_2').addClass('btn-default').removeClass('btn-secondary').addClass('btn-primary');
        $('.step_1').removeClass('btn-primary').removeClass('btn-default').addClass('btn-secondary');
    });

    $(".step_1").on('click', function() {
        $('.step_1').addClass('btn-default').removeClass('btn-secondary').addClass('btn-primary');
        $('.step_2').removeClass('btn-primary').removeClass('btn-default').addClass('btn-secondary');
    })
    $("#back").on('click', function() {
        $('.step_1').addClass('btn-default').removeClass('btn-secondary').addClass('btn-primary');
        $('.step_2').removeClass('btn-primary').removeClass('btn-default').addClass('btn-secondary');
    });


    $().hover(function() {
        $('work-icons')(this).css("color", "#fff")
    });

    $(function() {
        $("#start").datepicker({
            minDate: 0,
        });
    });

    $(".js-example-placeholder-single").select2({
        placeholder: "---Select---",
        allowClear: true
    }).on('change', function() {
        $(this).valid();
    });

    $('#onetime').click(function() {
        $('.one').show();
        $('.recuring').hide();
    });

    $('.no').click(function() {
        $('.one').hide();
        $('.recuring').hide();
    });

    $('#recuring').click(function() {
        $('.recuring').show();
        $('.one').hide();
    });

    $('input[type="checkbox"]').on('change', function() {
        $('input[type="checkbox"]').not(this).prop('checked', false);
    });

    // $('body').on('input', '#maxbonus', function(event) {
    //     event.preventDefault();
    //     var minbonus = $('#minbonus').val();
    //     var maxbonus = $('#maxbonus').val();
    //     if (parseInt(minbonus) >= parseInt(maxbonus)) {
    //         $('#e_bonus').text('Please fill max greter then min');
    //     } else {
    //         $('#e_bonus').css("display", "none");
    //     }
    // });


    $("#zero").on("input", function() {
        if (/^0/.test(this.value)) {
            this.value = this.value.replace(/^0/, "")
        }
    })
    $("#zero1").on("input", function() {
        if (/^0/.test(this.value)) {
            this.value = this.value.replace(/^0/, "")
        }
    })

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


    function show() {
        document.getElementById('work').style.display = "block";
        $(".js-example-placeholder-single").select2({
            placeholder: "---Select---",
            allowClear: true,
        });
        $('.select_location').val('heyy').trigger('change');

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

    function exphide() {
        document.getElementById('exp').style.display = "none";
        document.getElementById('min_exp').setAttribute("disabled", true);
        document.getElementById('maxexp').style.display = "none";
        document.getElementById('max_exp').setAttribute("disabled", true);
        document.getElementById('min_exp').attr("value", "");
    }
    $('#fresh').click(function() {
        $('#min_exp').val('');
        $('#max_exp').val('');
        $("#job_list").validate().resetForm();
    });
    $('#amountN').click(function() {
        $('#sec_amount').val('');
    });

    // Incentive -- Recurring Y/N --> 

    function RecurringY() {
        document.getElementById('Recurring').style.display = "block";
    }

    function RecurringN() {
        document.getElementById('Recurring').style.display = "none";
        document.getElementById('bonus').style.display = "none";
    }

    function amountY() {
        document.getElementById('amnt').style.display = "block";
        document.getElementById('amnt').removeAttribute("disabled")
    }

    function amountN() {
        document.getElementById('amnt').style.display = "none";
        document.getElementById('amnt').setAttribute("disabled", true)
    }


    $(".previewBox").click(function() {
        $(".previewBox.active").removeClass('active')
        $(this).addClass('active')
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