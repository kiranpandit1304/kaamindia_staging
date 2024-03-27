<div class="user-dashboard-info-box">
    <div class="row ">
        <div class="col-lg-12">
            <a href="" class="float-end fw-bold" id="addEducation" data-bs-toggle="modal" data-bs-target="#edu-modal">Add Education</a>
            <h4 class="fw-normal">Education</h4>
        </div>
        <div class="col-lg-12">
            <h6 class="pt-2 m-0">B.Tech/ B.E. Computers
                <span>
                    <a href="" class="" data-bs-toggle="modal" data-bs-target="#eduEdit-modal"><i id="editEducationIcon" class="fas fa-edit fs-6 p-1"></i></a>
                </span>
            </h6>
            <p class="fw-normal m-0">Punjab Engineering College <br> August 2020- May 2024 | Full Time</p>
        </div>
        <div class="col-lg-12 my-2">
            <a href="" class="" id="phd" data-bs-toggle="modal" data-bs-target="#edu-modal">Add Doctorate/PhD</a>
        </div>
        <div class="col-lg-12 my-2">
            <a href="" class="" id="masters" data-bs-toggle="modal" data-bs-target="#edu-modal">Add Masters/Post-graduation</a>
        </div>
        <div class="col-lg-12 my-2">
            <a href="" class="" id="graduation" data-bs-toggle="modal" data-bs-target="#edu-modal">Add Graduation/Diploma</a>
        </div>
        <div class="col-lg-12 my-2">
            <a href="" class="" id="classXII" data-bs-toggle="modal" data-bs-target="#edu-modal">Add Class XII</a>
        </div>
        <div class="col-lg-12 my-2">
            <a href="" class="" id="classX" data-bs-toggle="modal" data-bs-target="#edu-modal">Add Class X</a>
        </div>
    </div>

</div>


<!--================================= Education Modal Popup -->
<div class="modal fade" id="edu-modal" role="dialog" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
        <div class="modal-content scrollbar mx-2 border-0 " id="display">
            <div class="modal-header p-3 bg-primary">
                <h4 class="mb-0 text-left text-white">Education Details</h4>
            </div>
            <div class="modal-body position-relative p-0">
                <div class="login-register">
                    <div class="tab-content">
                        <div class=" tab-pane active" role="tabpanel">
                            <div class="row m-lg-5">

                                <form action="" class="" id="education_details">
                                    <div class="row modalShadow p-4 g-2" id="">
                                        <div class="row g-2">

                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">Education<em class="text-danger">*</em></label>
                                                    <select class="js-example-placeholder-single web-select2 jktt" id="educationSelect" data-placeholder="Select Education" name="education">
                                                        <option value="" disabled selected></option>
                                                        <option value="Doctorate/PhD">Doctorate/PhD</option>
                                                        <option value="Masters/Post-Graduation">Masters/Post-Graduation</option>
                                                        <option value="Graduation/Diploma">Graduation/Diploma</option>
                                                        <option value="12th">12th</option>
                                                        <option value="10th">10th</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-lg-6" id="course">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">Course<em class="text-danger">*</em></label>
                                                    <select class="js-example-placeholder-single web-select2" data-placeholder="select course" name=" course">
                                                        <option value="" disabled selected></option>
                                                        <option value="15days">B.Tech</option>
                                                        <option value="1month">M.Tech</option>
                                                        <option value="3months">M.Sc</option>
                                                        <option value="serving notice period">IB</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6" id="board">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">Board<em class="text-danger">*</em></label>
                                                    <select class="js-example-placeholder-single web-select2" data-placeholder="select board" name=" board" id="">
                                                        <option value="" disabled selected></option>
                                                        <option value="15days">CBSE</option>
                                                        <option value="1month">ICSE</option>
                                                        <option value="3months">PSEB</option>
                                                        <option value="serving notice period">IB</option>
                                                    </select>
                                                    <!-- <input type="text" name="" class="border form-control w-100" placeholder="Select Course"> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-lg-12" id="courseType">
                                                <div class="form-group mb-2">
                                                    <label class="labeltext form-label">Course type<em class="text-danger">*</em></label><br>
                                                    <label class="my-1">
                                                        <div class="switchBtnCourse border fields-border fieldActive text-center cursor p-3 py-2"><input type="radio" name="" class="radio" value="full time">Full time</div>
                                                    </label>
                                                    <label class="my-1">
                                                        <div class="switchBtnCourse border fields-border p-3 cursor text-center py-2"><input type="radio" class="radio" value="part time">Part time</div>
                                                    </label>
                                                    <label class="my-1">
                                                        <div class="switchBtnCourse border fields-border p-3 cursor text-center py-2"><input type="radio" class="radio" value="distance learning">Distance learning</div>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row g-2">

                                            <div class="col-lg-12" id="universityName">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">University/Institute<em class="text-danger">*</em></label>
                                                    <input type="text" name="university" class="border form-control w-100" placeholder="Select University/Institute">
                                                </div>
                                            </div>
                                            <div class="col-lg-12" id="schoolName">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">School Name<em class="text-danger">*</em></label>
                                                    <input type="text" name="schoolName" class="border form-control w-100" placeholder="Select University/Institute">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2" id="schoolMedium">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">School Medium<em class="text-danger">*</em></label>
                                                    <select class="form-select" name="schoolMedium" id="">
                                                        <option value="" disabled selected>--Select--</option>
                                                        <option value="15days">English</option>
                                                        <option value="1month">Hindi</option>
                                                        <option value="3months">Punjabi</option>
                                                        <!-- <option value="serving notice period">IB</option> -->
                                                    </select>
                                                    <!-- <input type="text" name="schoolMedium" class="border form-control w-100" placeholder="Select University/Institute"> -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">Passing out year<em class="text-danger">*</em></label>
                                                    <input type="text" class="form-control border readOnlyLight" placeholder="Select passing out year" id="passOutYear" readonly="true" name="passOutYear">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-2">
                                            <div class="col-lg-12" id="courseDuration">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">Course duration<em class="text-danger">*</em></label>
                                                    <div class="row g-2">

                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control border readOnlyLight" placeholder="Course starting year" id="courseStartYear" readonly="true" name="joining_year">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control border readOnlyLight" placeholder="Course ending year" id="courseEndYear" readonly="true" name="ending_year">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-md-12 mt-2">
                                                <div class="text-center">
                                                    <!-- data-bs-dismiss="modal" -->
                                                    <button type="submit" style="font-weight:400;" class="btn btn-primary btn-sm p-2">Save</button>
                                                    <button type="button" onclick="confirmCancelForm($(this), $('#confirmEduModal'), $('#edu-modal'))" class="bg-overlay-black-20 btn btn-sm p-2 rounded-pill text-body" style="color:#fff; font-weight:400;">Cancel</button>
                                                </div>
                                                <div id="confirmEduModal" class="text-center confirmcanscel" style="display: none">
                                                    <p>Are you really want to cancel this form as it will erase all the filled data?</p>
                                                    <button type="button" class="btn btn-sm bg-primary text-white" onclick="closeEduModal($(this))" data-bs-dismiss="modal">Yes</button>
                                                    <button type="button" class="btn btn-sm bg-warning text-white" onclick="notCloseEduModal($(this))">No</button>
                                                </div>
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
            <button type="button" class="btn-close close-btn abs-position" onclick="confirmCancelForm($(this), $('#confirmEduModal'), $('#edu-modal'))" aria-label="Close"></button>
        </div>
    </div>
</div>


<!--================================= Edit Education Modal Popup -->
<div class="modal fade" id="eduEdit-modal" role="dialog" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content mx-2 scrollbar border-0 " id="display">
            <div class="modal-header p-3 bg-primary">
                <h4 class="mb-0 text-left text-white">Edit Education Details</h4>
            </div>
            <div class="modal-body position-relative p-0">
                <div class="login-register overflow-hidden">
                    <div class="tab-content">
                        <div class=" tab-pane active" role="tabpanel">
                            <div class="row m-lg-5">

                                <form action="" class="" id="education_detailsEdit">
                                    <div class="row modalShadow p-4 g-2" id="">
                                        <div class="row g-2">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">Education<em class="text-danger">*</em></label>
                                                    <select class="js-example-placeholder-single web-select2" id="educationSelectEdit" data-placeholder="Select Education" name="education">
                                                        <option value="" disabled selected>--Select-- </option>
                                                        <option value="Doctorate/PhD">Doctorate/PhD</option>
                                                        <option value="Masters/Post-Graduation">Masters/Post-Graduation</option>
                                                        <option value="Graduation/Diploma">Graduation/Diploma</option>
                                                        <option value="12th">12th</option>
                                                        <option value="10th">10th</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- <div class="col-6">
                                                <label>Role</label>
                                                <select class="js-example-placeholder-single web-select2" data-placeholder="Select role" name="project_role">
                                                    <option value=""></option>
                                                    <option value="project manager">Project Manager</option>
                                                    <option value="Test Engineer">Test Engineer</option>
                                                </select>
                                            </div> -->
                                            <!-- <div class="col-lg-6" >
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0"><em class="text-danger">*</em></label>
                                                    <input type="text" name="course" class="border form-control w-100" placeholder="Select Course">
                                                </div>
                                            </div> -->
                                            <div class="col-lg-6" id="courseEdit">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">Course<em class="text-danger">*</em></label>
                                                    <select class="js-example-placeholder-single web-select2" data-placeholder="select course" name="course" id="">
                                                        <option value="" disabled selected></option>
                                                        <option value="15days">B.Tech</option>
                                                        <option value="1month">M.Tech</option>
                                                        <option value="3months">M.Sc</option>
                                                        <option value="serving notice period">IB</option>
                                                    </select>
                                                    <!-- <input type="text" name="" class="border form-control w-100" placeholder="Select Course"> -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6" id="boardEdit">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">Board<em class="text-danger">*</em></label>
                                                    <select class="js-example-placeholder-single web-select2" data-placeholder="select board" name="board" id="">
                                                        <option value="" disabled selected></option>
                                                        <option value="15days">CBSE</option>
                                                        <option value="1month">ICSE</option>
                                                        <option value="3months">PSEB</option>
                                                        <option value="serving notice period">IB</option>
                                                    </select>
                                                    <!-- <input type="text" name="" class="border form-control w-100" placeholder="Select Course"> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-lg-12" id="courseTypeEdit">
                                                <div class="form-group mb-2">
                                                    <label class="labeltext form-label">Course type<em class="text-danger">*</em></label><br>
                                                    <label>
                                                        <div class="switchBtnCourseEdit border fields-border fieldActive text-center cursor p-3 py-2"><input type="radio" name="" class="radio" value="full time">Full time</div>
                                                    </label>
                                                    <label>
                                                        <div class="switchBtnCourseEdit border fields-border p-3 cursor text-center py-2"><input type="radio" class="radio" value="part time">Part time</div>
                                                    </label>
                                                    <label>
                                                        <div class="switchBtnCourseEdit border fields-border p-3 cursor text-center py-2"><input type="radio" class="radio" value="distance learning">Distance learning</div>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row g-2">
                                            <div class="col-lg-12" id="universityNameEdit">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">University/Institute<em class="text-danger">*</em></label>
                                                    <input type="text" name="university" class="border form-control w-100" placeholder="Select University/Institute">
                                                </div>
                                            </div>
                                            <div class="col-lg-12" id="schoolNameEdit">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">School Name<em class="text-danger">*</em></label>
                                                    <input type="text" name="schoolName" class="border form-control w-100" placeholder="Select University/Institute">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-2" id="schoolMediumEdit">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">School Medium<em class="text-danger">*</em></label>
                                                    <select class="form-select" name="schoolMedium" id="">
                                                        <option value="" disabled selected>--Select--</option>
                                                        <option value="15days">English</option>
                                                        <option value="1month">Hindi</option>
                                                        <option value="3months">Punjabi</option>
                                                        <!-- <option value="serving notice period">IB</option> -->
                                                    </select>
                                                    <!-- <input type="text" name="schoolMedium" class="border form-control w-100" placeholder="Select University/Institute"> -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">Passing out year<em class="text-danger">*</em></label>
                                                    <input type="text" class="form-control border readOnlyLight" placeholder="Select passing out year" id="passOutYearEdit" readonly="true" name="passOutYear">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-lg-12" id="courseDurationEdit">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">Course duration<em class="text-danger">*</em></label>
                                                    <div class="row g-2">

                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control border readOnlyLight" placeholder="Course starting year" id="courseStartYearEdit" readonly="true" name="joining_year">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control border readOnlyLight" placeholder="Course ending year" id="courseEndYearEdit" readonly="true" name="ending_year">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <div class="text-center">
                                                    <button type="submit" style="font-weight:400;" class="btn btn-primary btn-sm p-2">Save</button>
                                                    <button type="button" name="cancel" onclick="confirmCancelForm($(this), $('#confirmEditEduModal'), $('#eduEdit-modal'))" class="bg-overlay-black-20 btn btn-sm p-2 rounded-pill text-body" style="color:#fff; font-weight:400;">Cancel</button>
                                                </div>

                                                <div id="confirmEditEduModal" class="text-center confirmcanscel" style="display: none">
                                                    <p>Are you really want to cancel this form as it will erase all the filled data?</p>
                                                    <button type="button" class="btn btn-sm bg-primary text-white" onclick="closeEduModal($(this))" data-bs-dismiss="modal">Yes</button>
                                                    <button type="button" class="btn btn-sm bg-warning text-white" onclick="notCloseEduModal($(this))">No</button>
                                                </div>
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
            <button type="button" class="btn-close close-btn abs-position" onclick="confirmCancelForm($(this), $('#confirmEditEduModal'), $('#eduEdit-modal'))" aria-label="Close"></button>
        </div>
    </div>
</div>


@section('education-script')
<script>
    $(".switchBtnCourse").click(function() {
        $(".switchBtnCourse.fieldActive").removeClass('fieldActive')
        $(this).addClass('fieldActive')
    });

    $(".switchBtnCourseEdit").click(function() {
        $(".switchBtnCourseEdit.fieldActive").removeClass('fieldActive')
        $(this).addClass('fieldActive')
    });

    // Function for Education modal changing fields on selecting 12th 10th --------->
    function changingLabels() {
        if ($(".jktt").val() == '12th' || $(".jktt").val() == '10th') {
            $("#board").css("display", "block");
            $("#course").hide();
            $("#universityName").hide();
            $("#courseDuration").hide();
            $("#courseType").hide()
            $("#schoolName").show();
            $("#schoolMedium").show();
        } else {
            $("#board").css("display", "none");
            $("#course").show();
            $("#universityName").show();
            $("#courseDuration").show();
            $("#courseType").show()
            $("#schoolName").hide();
            $("#schoolMedium").hide();
            $('#schoolName, #universityName, #course, #board, #schoolMedium, #courseDuration, #courseType').find(':input').val('').trigger('change');
        };
    }
    // For edit education modals --> 
    function changingLabelsEdit() {
        if ($("#educationSelectEdit").val() == '12th' || $("#educationSelectEdit").val() == '10th') {
            $("#boardEdit").css("display", "block");
            $("#courseEdit").hide();
            $("#universityNameEdit").hide();
            $("#schoolNameEdit").show();
            $("#schoolMediumEdit").show();
            $("#courseDurationEdit").hide();
            $("#courseTypeEdit").hide()
        } else {
            $("#boardEdit").css("display", "none");
            $("#courseEdit").show();
            $("#universityNameEdit").show();
            $("#schoolNameEdit").hide();
            $("#schoolMediumEdit").hide();
            $("#courseDurationEdit").show();
            $("#courseTypeEdit").show()
            // $('#schoolNameEdit, #universityNameEdit, #courseEdit, #boardEdit, #schoolMediumEdit, #courseDurationEdit, #courseTypeEdit').find(':input').val('').trigger('change').attr("disabled", true);

        };
    }

    //Education modal changing fields on selecting 12th 10th --------->

    $("#educationSelect").on('change', function() {
        changingLabels();
    });
    $("#educationSelectEdit").on('change', function() {
        changingLabelsEdit();
    });

    $("#classXII").click(function() {
        $("#educationSelect").val('12th');
        changingLabels();
    });
    $("#classX").click(function() {
        $("#educationSelect").val('10th');
        changingLabels();
    });
    $("#masters").click(function() {
        $("#educationSelect").val('Masters/Post-Graduation');
        changingLabels();
    });
    $("#phd").click(function() {
        $("#educationSelect").val('Doctorate/PhD');
        changingLabels();
    });
    $("#graduation").click(function() {
        $("#educationSelect").val('Graduation/Diploma');
        changingLabels();
    });
    $("#addEducation").click(function() {
        changingLabels();
    })

    $("#editEducationIcon").click(function() {
        changingLabelsEdit();
    })
    $("#quickLinkEducation").click(function() {
        changingLabels();
    })

    // validation

    $("#education_details").validate({
        rules: {
            education: {
                required: true
            },
            university: {
                required: true,
                alphaWithSpaceAndDot: true
            },
            course: {
                required: true
            },
            board: {
                required: true
            },
            schoolName: {
                required: true,
                alphaWithSpaceAndDot: true
            },
            schoolMedium: {
                required: true
            },
            passOutYear: {
                required: true
            },
            joining_year: {
                required: true
            },
            ending_year: {
                required: true
            },
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
            education: {
                required: "Select education"
            },
            university: {
                required: "Enter institute name"
            },
            course: {
                required: "Select course name"
            },
            board: {
                required: "Select board"
            },
            schoolName: {
                required: "Enter school name"
            },
            schoolMedium: {
                required: "Select school medium"
            },
            passOutYear: {
                required: "Select passout year"
            },
            joining_year: {
                required: "Select joining year"
            },
            ending_year: {
                required: "Select ending year"
            },
        }
    })

    $("#education_detailsEdit").validate({
        rules: {
            education: {
                required: true
            },
            university: {
                required: true,
                alphaWithSpaceAndDot: true
            },
            course: {
                required: true
            },
            board: {
                required: true
            },
            schoolName: {
                required: true,
                alphaWithSpaceAndDot: true
            },
            schoolMedium: {
                required: true
            },
            passOutYear: {
                required: true
            },
            joining_year: {
                required: true
            },
            ending_year: {
                required: true
            },
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
            education: {
                required: "Select education"
            },
            university: {
                required: "Enter institute name"
            },
            course: {
                required: "Select course name"
            },
            board: {
                required: "Select board"
            },
            schoolName: {
                required: "Enter school name"
            },
            schoolMedium: {
                required: "Select school medium"
            },
            passOutYear: {
                required: "Select passout year"
            },
            joining_year: {
                required: "Select joining year"
            },
            ending_year: {
                required: "Select ending year"
            },
        }
    })

    // datepicker

    $("#courseStartYear, #courseStartYearEdit").datepicker({
        format: "yyyy",
        clearBtn: true,
        endDate: "today",
        viewMode: "years",
        minViewMode: "years"
    }).on('changeDate', function(selected) {
        var minDate = new Date(selected.date.valueOf());
        $('#courseEndYear').datepicker('setStartDate', minDate);
    });

    $("#passOutYear, #passOutYearEdit").datepicker({
        format: "yyyy",
        clearBtn: true,
        endDate: "today",
        viewMode: "years",
        minViewMode: "years"
    });

    $("#courseEndYear, #courseEndYearEdit").datepicker({
        format: "yyyy",
        clearBtn: true,
        // endDate: "today",
        viewMode: "years",
        minViewMode: "years"
    }).on('changeDate', function(selected) {
        var minDate = new Date(selected.date.valueOf());
        $('#courseStartYear').datepicker('setEndDate', minDate);
    });
</script>
@endsection