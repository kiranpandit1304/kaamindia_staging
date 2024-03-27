@section('employement-style')
<style>

</style>
@endsection

<div class="user-dashboard-info-box">
    <div class="row ">
        <div class="col-lg-12">
            <a href="" class="float-end fw-bold" data-bs-toggle="modal" data-bs-target="#employement-modal">Add Employment</a>
            <h4 class="fw-normal">Employment</h4>
        </div>
        <div class="col-lg-12">
            <h6 class="pt-2 m-0">Project Manager
                <span>
                    <a href="" class="" data-bs-toggle="modal" data-bs-target="#employementEdit-modal"><i class="fas fa-edit fs-6 p-1"></i></a>
                </span>
            </h6>
            <p class="fw-normal m-0"> Xeam Venture Pvt Ltd</p>
            <p class="fw-normal m-0"> Full Time | Jan 2020 to Present</p>
            <!-- <p class="fw-normal m-0"> Job Description</p> -->
            <p class="fw-normal m-0"> <span class="fw-bold"> Job Description: </span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi cumque expedita dolores, incidunt, iusto temporibus vitae dolor quasi, iure ratione animi? Atque laudantium cumque dolore porro quisquam ad odit ducimus!</p>

            <p class="fw-normal m-0"> <span class="fw-bold"> Skills : </span> PHP, CSS, React </p>
        </div>

    </div>

</div>


<!--================================= Employement Modal Popup -->
<div class="modal fade" id="employement-modal" role="dialog" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
        <div class="modal-content scrollbar mx-2 border-0" id="display">
            <div class="modal-header p-3 bg-primary">
                <h4 class="mb-0 text-left text-white">Employment Details</h4>
            </div>
            <div class="modal-body position-relative p-0 customScroll">
                <div class="login-register overflow-hidden">
                    <div class="">
                        <div class="" role="tabpanel">
                            <div class="row m-lg-5">
                                <form action="" class="" role="form" id="employement_details">
                                    <div class="align-items-center modalShadow p-4 row g-2" id="">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-2">
                                                <label class="form-label ms-0">Is this your current employment<em class="text-danger">*</em></label><br>
                                                <div class="d-flex flex-warp">
                                                    <label class="switchBtnCurrEmp switchBtn empYes text-center rounded-start  border-warning fieldActive cursor p-3 py-2">
                                                        <input type="radio" name="" class="radio emp_yes currentEmployment" value="yes">Yes
                                                    </label>
                                                    <label class="switchBtnCurrEmp switchBtn empNo text-center  rounded-end border-warning p-3 cursor py-2">
                                                        <input type="radio" class="radio emp_no currentEmployment" value="no">No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">Company name<em class="text-danger">*</em></label>
                                                    <input type="text" name="company_name" class="border form-control w-100" placeholder="Your company name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <div class="position-relative">
                                                        <label class="form-label ms-0">Designation<em class="text-danger">*</em></label>
                                                        <input type="text" name="designation" class="border form-control w-100" placeholder="Your Designation">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-sm-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">Joining date<em class="text-danger">*</em></label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control border readOnlyLight" placeholder="Select joining year" id="joiningYear" readonly="true" name="joining_year">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 work_till" id="workTillYear">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">Worked till<em class="text-danger">*</em></label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control border readOnlyLight" placeholder="Select worked till year" id="workedTillYear" readonly="true" name="worked_till_year">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-2">
                                                <div class="position-relative">
                                                    <label class="form-label ms-0" for="state">Job profile<em class="text-danger">*</em></label>
                                                    <textarea name="job_description" class="ps-3 w-100 add-height border form-control outline-0" placeholder="Type here ..." style="min-height:71px;"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2" id="noticePeriod">
                                            <div class="col-sm-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">Notice period<em class="text-danger">*</em></label>
                                                    <select class="js-example-placeholder-single web-select2" data-placeholder="select notice" name="notice_period" id="notice">
                                                        <option value="" disabled selected></option>
                                                        <option value="15days">0-15 days</option>
                                                        <option value="1month">15 days to 1 month</option>
                                                        <option value="3months">1 month to 3 months</option>
                                                        <option value="serving notice period">Serving notice period</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6" id="lastDate">
                                                <div class="form-group mb-2">
                                                    <div class="position-relative">
                                                        <label class="form-label ms-0" for="state">Last working date<em class="text-danger">*</em></label>
                                                        <input type="text" class="form-control border readOnlyLight" placeholder="Select last working date" id="lastWorkDate" readonly="true" name="lastDate">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <div class="text-center">
                                                <button type="submit" style="font-weight:400;" class="btn btn-primary btn-sm p-2">Save</button>
                                                <button type="button" name="cancel" onclick="confirmCancelForm($(this), $('#confirmEmployModal'), $('#employement-modal'))" class="bg-overlay-black-20 btn btn-sm p-2 rounded-pill text-body" style="color:#fff; font-weight:400;">Cancel</button>
                                            </div>
                                            <div id="confirmEmployModal" class="text-center confirmcanscel" style="display: none">
                                                <p>Are you really want to cancel this form as it will erase all the filled data?</p>
                                                <button type="button" class="btn btn-sm bg-primary text-white" onclick="closeEduModal($(this))" data-bs-dismiss="modal">Yes</button>
                                                <button type="button" class="btn btn-sm bg-warning text-white" onclick="notCloseEduModal($(this))">No</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute bottom-0 start-0" style="z-index: -1;">
                <img src="{{ asset('assets/images/bg4.svg')}}" class="navbar-brand-img" alt="main_logo">
            </div>
            <button type="button" class="btn-close close-btn abs-position" onclick="confirmCancelForm($(this), $('#confirmEmployModal'), $('#employement-modal'))" aria-label="Close"></button>
        </div>
    </div>
</div>

<!--================================= Edit Employement Modal Popup -->
<div class="modal fade" id="employementEdit-modal" role="dialog" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
        <div class="modal-content scrollbar mx-2 border-0" id="display">
            <div class="modal-header p-3 bg-primary">
                <h4 class="mb-0 text-left text-white">Edit Employment Details</h4>
            </div>
            <div class="modal-body position-relative p-0 ">
                <div class="login-register">
                    <div class="">
                        <div class="" role="tabpanel">
                            <div class="row m-lg-5">
                                <form action="" class="" role="form" id="employement_detailsEdit">
                                    <div class="align-items-center modalShadow p-4 row g-2" id="">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-2">
                                                <label class="form-label ms-0">Is this your current employment<em class="text-danger">*</em></label><br>
                                                <div class="d-flex flex-warp">
                                                    <label class="switchBtnCurrEmpEdit switchBtn empYes text-center rounded-start  border-warning fieldActive cursor p-3 py-2">
                                                        <input type="radio" name="" class="radio emp_yes currentEmployment" value="yes">Yes
                                                    </label>
                                                    <label class="switchBtnCurrEmpEdit switchBtn empNo text-center  rounded-end border-warning p-3 cursor py-2">
                                                        <input type="radio" class="radio emp_no currentEmployment" value="no">No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">Company name<em class="text-danger">*</em></label>
                                                    <input type="text" name="company_name" class="border form-control w-100" placeholder="Your company name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <div class="position-relative">
                                                        <label class="form-label ms-0">Designation<em class="text-danger">*</em></label>
                                                        <input type="text" name="designation" class="border form-control w-100" placeholder="Your Designation">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-sm-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">Joining date<em class="text-danger">*</em></label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control border readOnlyLight" placeholder="Select joining year" id="joiningYearEdit" readonly="true" name="joining_year" value="{{ old('job_expiry') }}">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-sm-6 work_till" id="workTillYearEdit">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">Worked till<em class="text-danger">*</em></label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control border readOnlyLight" placeholder="Select worked till year" id="workedTillYearEdit" readonly="true" name="worked_till_year" value="{{ old('job_expiry') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-2">
                                                <div class="position-relative">
                                                    <label class="form-label ms-0" for="state">Job profile<em class="text-danger">*</em></label>
                                                    <textarea name="job_description" rows="5" class="ps-3 w-100 add-height border form-control outline-0" placeholder="Type here ..." style="min-height:71px;"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2" id="noticePeriodEdit">
                                            <div class="col-sm-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">Notice period<em class="text-danger">*</em></label>
                                                    <select class="js-example-placeholder-single web-select2" data-placeholder="select notice" name="notice_period" id="noticeEdit">
                                                        <option value="" disabled selected></option>
                                                        <option value="15days">0-15 days</option>
                                                        <option value="1month">15 days to 1 month</option>
                                                        <option value="3months">1 month to 3 months</option>
                                                        <option value="serving notice period">Serving notice period</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6" id="lastDateEdit">
                                                <div class="form-group mb-2">
                                                    <div class="position-relative">
                                                        <label class="form-label ms-0" for="state">Last working date<em class="text-danger">*</em></label>
                                                        <input type="text" class="form-control border readOnlyLight" placeholder="Select last working date" id="lastWorkDateEdit" readonly="true" name="lastDateEdit">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-sm-6" id="lastDateEdit">
                                                <div class="form-group mb-2">
                                                    <div class="position-relative">
                                                        <label class="form-label ms-0" for="state">Last working date<em class="text-danger">*</em></label>
                                                        <input type="text" class="form-control border readOnlyLight" placeholder="Select last working date" id="lastWorkDateEdit" readonly="true" name="lastDate" value="{{ old('job_expiry') }}">
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <div class="text-center">
                                                <button type="submit" style="font-weight:400;" class="btn btn-primary btn-sm p-2">Save</button>
                                                <button type="button" name="cancel" onclick="confirmCancelForm($(this), $('#confirmEditEmployModal'), $('#employementEdit-modal'))" class="bg-overlay-black-20 btn btn-sm p-2 rounded-pill text-body" style="color:#fff; font-weight:400;">Cancel</button>
                                            </div>
                                            <div id="confirmEditEmployModal" class="text-center confirmcanscel" style="display: none">
                                                <p>Are you really want to cancel this form as it will erase all the filled data?</p>
                                                <button type="button" class="btn btn-sm bg-primary text-white" onclick="closeEduModal($(this))" data-bs-dismiss="modal">Yes</button>
                                                <button type="button" class="btn btn-sm bg-warning text-white" onclick="notCloseEduModal($(this))">No</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute bottom-0 start-0" style="z-index: -1;">
                <img src="{{ asset('assets/images/bg4.svg')}}" class="navbar-brand-img" alt="main_logo">
            </div>
            <button type="button" class="btn-close close-btn abs-position" onclick="confirmCancelForm($(this), $('#confirmEditEmployModal'), $('#employementEdit-modal'))" aria-label="Close"></button>
        </div>
    </div>
</div>

@section('employment-script')
<script>
    $('.currentEmployment').on('click', function() {
        if ($(this).val() === 'yes') {
            $('#noticePeriod, #noticePeriodEdit').show();
            $('#workTillYear, #workTillYearEdit').hide().attr("disabled", true);
            $('#workTillYear, #workTillYearEdit, #noticePeriod, #noticePeriodEdit').find(':input').val('');
        } else {
            $('#noticePeriod, #noticePeriodEdit').hide().attr("disabled", true);
            $('#workTillYear, #workTillYearEdit').show();
        }
    });

    $("#notice").on('change', function() {
        if ($(this).val() === "serving notice period") {
            $('#lastWorkDate').val('');
            $("#lastDate").show();
        } else {
            $("#lastDate").hide();
        }
    });

    $("#noticeEdit").on('change', function() {
        if ($(this).val() === "serving notice period") {
            $('#lastWorkDateEdit').val('');
            $("#lastDateEdit").show();
        } else {
            $("#lastDateEdit").hide();
        }
    });

    $(".switchBtnCurrEmp").click(function() {
        $(".switchBtnCurrEmp.fieldActive").removeClass('fieldActive')
        $(this).addClass('fieldActive')
    });
    $(".switchBtnCurrEmpEdit").click(function() {
        $(".switchBtnCurrEmpEdit.fieldActive").removeClass('fieldActive')
        $(this).addClass('fieldActive')
    });
    // datepicker start

    $("#workedTillYear, #workedTillYearEdit").datepicker({
        format: 'MM yyyy',
        changeMonth: true,
        changeYear: true,
        endDate: "today",
        clearBtn: true,
        viewMode: "months",
        minViewMode: "months"
    }).on('changeDate', function(selected) {
        var minDate = new Date(selected.date.valueOf());
        $('#joiningYear, #joiningYearEdit').datepicker('setEndDate', minDate);
    });

    $("#joiningYear, #joiningYearEdit").datepicker({
        format: 'MM yyyy',
        changeMonth: true,
        changeYear: true,
        clearBtn: true,
        endDate: "today",
        viewMode: "months",
        minViewMode: "months"
    }).on('changeDate', function(selected) {
        var minDate = new Date(selected.date.valueOf());
        $('#workedTillYear').datepicker('setStartDate', minDate);
    });

    $("#lastWorkDate, #lastWorkDateEdit").datepicker({
        minDate: 0,
        clearBtn: true,
        startDate: "today",
    });

    // datepicker end


    // jquery validation employment

    $("#employement_details").validate({
        rules: {
            company_name: {
                required: true,
            },
            designation: {
                required: true,
            },
            joining_year: {
                required: true
            },
            joining_month: {
                required: true
            },
            worked_till_year: {
                required: true
            },

            worked_till_month: {
                required: true
            },
            job_description: {
                required: true
            },
            notice_period: {
                required: true
            },
            lastDate: {
                required: true
            }
        },
        errorPlacement: function(label, element) {
            if (element.hasClass('web-select2')) {
                label.insertAfter(element.next('.select2-container')).addClass('mt-2 ');
                select2label = label
            } else {
                // label.addClass('mt-2');
                label.insertAfter(element);
            }
        },
        messages: {
            company_name: {
                required: "Enter company name"
            },
            designation: {
                required: "Enter designation"
            },
            joining_year: {
                required: "Select joining year"
            },
            joining_month: {
                required: "Select joining month"
            },
            worked_till_year: {
                required: "Select worked till year"
            },
            worked_till_month: {
                required: "Select worked till month"
            },
            job_description: {
                required: "Enter job profile"
            },
            notice_period: {
                required: "Select notice period"
            },
            lastDate: {
                required: "Select last working date"
            },
        }
    })

    // jquery validation employemntedit

    $("#employement_detailsEdit").validate({
        rules: {
            company_name: {
                required: true,
            },
            designation: {
                required: true,
            },
            joining_year: {
                required: true
            },
            joining_month: {
                required: true
            },
            worked_till_year: {
                required: true
            },

            worked_till_month: {
                required: true
            },
            job_description: {
                required: true
            },
            notice_period: {
                required: true
            },
            lastDate: {
                required: true
            }
        },
        errorPlacement: function(label, element) {
            if (element.hasClass('web-select2')) {
                label.insertAfter(element.next('.select2-container')).addClass('mt-2 ');
                select2label = label
            } else {
                // label.addClass('mt-2');
                label.insertAfter(element);
            }
        },
        messages: {
            company_name: {
                required: "Enter company name"
            },
            designation: {
                required: "Enter designation"
            },
            joining_year: {
                required: "Select joining year"
            },
            joining_month: {
                required: "Select joining month"
            },
            worked_till_year: {
                required: "Select worked till year"
            },
            worked_till_month: {
                required: "Select worked till month"
            },
            job_description: {
                required: "Enter job profile"
            },
            notice_period: {
                required: "Select notice period"
            },
            lastDate: {
                required: "Select last working date"
            },
        }
    })
</script>
@endsection