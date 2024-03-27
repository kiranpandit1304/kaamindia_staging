<div class="user-dashboard-info-box">
    <div class="row ">
        <div class="col-lg-12">
            <a href="" class="float-end fw-bold" data-bs-toggle="modal" data-bs-target="#project-modal">Add Project</a>
            <h4 class="fw-normal">Projects</h4>
        </div>
        <div class="col-lg-12">
            <h6 class="pt-2 m-0"> Kaam India | Project Manager
                <span>
                    <a href="" class="" data-bs-toggle="modal" data-bs-target="#projectEdit-modal"><i class="fas fa-edit fs-6 p-1"></i></a>
                </span>
            </h6>
            <p class="fw-normal m-0"> <span class="fw-bold"> Project Description: </span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi cumque expedita dolores, incidunt, iusto temporibus vitae dolor quasi, iure ratione animi? Atque laudantium cumque dolore porro quisquam ad odit ducimus!</p>
            <p class="fw-normal m-0"> <span class="fw-bold"> Skills used: </span> PHP, CSS, React </p>
            <p class="fw-normal m-0"> <span class="fw-bold"> Role Description: </span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi cumque expedita dolores, incidunt, iusto temporibus vitae dolor quasi, iure ratione animi? Atque laudantium cumque dolore porro quisquam ad odit ducimus!</p>
        </div>
    </div>

</div>



<!--================================= Project Modal Popup -->
<div class="modal fade" id="project-modal" role="dialog" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
        <div class="modal-content mx-2 scrollbar border-0" id="display">
            <div class="modal-header p-3 bg-primary">
                <h4 class="mb-0 text-left text-white">Project Details</h4>
            </div>
            <div class="modal-body position-relative p-0 ">
                <div class="login-register overflow-hidden">
                    <div class="tab-content">
                        <div class=" tab-pane active">
                            <div class="row m-lg-5">
                                <form action="" class="" id="projects_detail2" onkeypress="return event.keyCode != 13">
                                    <div class="row modalShadow p-4 g-2">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-2">
                                                <label class="form-label ms-0">Project title<em class="text-danger">*</em></label>
                                                <input type="text" name="project_title" class="border form-control w-100" placeholder="Enter Project title">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-2">
                                                <label class="labeltext form-label">Tag this project your employment/education<em class="text-danger">*</em></label><br>
                                                <label class="my-1">
                                                    <div class="switchBtnProject border fields-border fieldActive cursor text-center p-3 py-2" id=""><input type="radio" name="" class="radio org_hide" value="">Learning</div>
                                                </label>
                                                <label class="my-1">
                                                    <div class="switchBtnProject border fields-border p-3 cursor py-2 text-center"><input type="radio" class="radio org_hide" name="" value="">Freelancer</div>
                                                </label>
                                                <label class="my-1">
                                                    <div class="switchBtnProject border fields-border p-3 cursor py-2 text-center"><input type="radio" class="radio org_show" name="" value="">Organisation</div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 organistion">
                                            <div class="form-group mb-2">
                                                <div class="position-relative">
                                                    <label class="form-label ms-0" for="state">Organisation<em class="text-danger">*</em></label>
                                                    <input id="org" type="text" name="organisation" class="border form-control w-100" placeholder="Organisation">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-2">
                                                <div class="position-relative">
                                                    <label class="form-label ms-0" for="state">Details of project<em class="text-danger">*</em></label>
                                                    <textarea name="project_details" class="ps-3 w-100 add-height border form-control outline-0" placeholder="Type here ..." style="min-height:71px;"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-2">
                                                <label class="form-label ms-0">Role<em class="text-danger">*</em></label>
                                                <!-- <input type="text" name="project_role" class="border form-control w-100" placeholder="Select role"> -->
                                                <select class="js-example-placeholder-single web-select2" data-placeholder="select role" name="project_role">
                                                    <option value="" disabled selected></option>
                                                    <option value="project manager">Project Manager</option>
                                                    <option value="Test Engineer">Test Engineer</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-2">
                                                <div class="position-relative">
                                                    <label class="form-label ms-0" for="">Role description<em class="text-danger">*</em></label>
                                                    <textarea name="role_description" class="ps-3 w-100 add-height border form-control outline-0" placeholder="Type here ..." style="min-height:71px;"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group my-1 position-relative">
                                                <label class="form-label text-dark" for="select-skills">Skills used<em class="text-danger">*</em></label>
                                                <select id="skills_used_project" multiple name="project_skills" class="top-0 position-relative demo-default web-select2">
                                                    <option value="">Select skills...</option>
                                                    <option value="php" selected>PHP </option>
                                                    <option>Laravel </option>
                                                    <option>CSS </option>
                                                    <option>Javascript </option>
                                                    <option>Python </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mt-2">
                                            <div class="text-center">
                                                <button type="submit" style="font-weight:400;" class="btn btn-primary btn-sm p-2">Save</button>
                                                <button type="button" onclick="confirmCancelForm($(this), $('#confirmProjectModal'), $('#project-modal'))" class="bg-overlay-black-20 btn btn-sm p-2 rounded-pill text-body" id="" style="color:#fff; font-weight:400;">Cancel</button>
                                            </div>

                                            <div id="confirmProjectModal" class="confirmcanscel text-center" style="display: none">
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
            <button type="button" class="btn-close close-btn abs-position" onclick="confirmCancelForm($(this), $('#confirmProjectModal'), $('#project-modal'))" aria-label="Close"></button>
        </div>
    </div>
</div>

<!--================================= Edit Project Modal Popup -->
<div class="modal fade" id="projectEdit-modal" role="dialog" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
        <div class="modal-content scrollbar mx-2 border-0" id="display">
            <div class="modal-header p-3 bg-primary">
                <h4 class="mb-0 text-left text-white">Edit Project Details</h4>
            </div>


            <div class="modal-body position-relative p-0">
                <div class="login-register">
                    <div class="tab-content">
                        <div class=" tab-pane active">
                            <div class="row m-lg-5">

                                <form action="" class="" id="projects_detail2Edit" onkeypress="return event.keyCode != 13">
                                    <div class="row modalShadow p-4 g-2">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-2">
                                                <label class="form-label ms-0">Project title<em class="text-danger">*</em></label>
                                                <input type="text" name="project_title" class="border form-control w-100" placeholder="Enter Project title">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-2">
                                                <label class="labeltext form-label">Tag this project your employment/education<em class="text-danger">*</em></label><br>
                                                <label class="my-1">
                                                    <div class="switchBtnProjectEdit border fields-border fieldActive cursor text-center p-3 py-2" id=""><input type="radio" name="" class="radio org_hide" value="">Learning</div>
                                                </label>
                                                <label class="my-1">
                                                    <div class="switchBtnProjectEdit border fields-border p-3 cursor py-2 text-center"><input type="radio" class="radio org_hide" value="">Freelancer</div>
                                                </label>
                                                <label class="my-1">
                                                    <div class="switchBtnProjectEdit border fields-border p-3 cursor py-2 text-center"><input type="radio" class="radio org_show" value="">Organisation</div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 organistion">
                                            <div class="form-group mb-2">
                                                <div class="position-relative">
                                                    <label class="form-label ms-0" for="state">Organisation<em class="text-danger">*</em></label>
                                                    <input type="text" name="organisation" class="border form-control w-100" placeholder="Organisation">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-2">
                                                <div class="position-relative">
                                                    <label class="form-label ms-0" for="state">Details of project<em class="text-danger">*</em></label>
                                                    <textarea name="project_details" class="ps-3 w-100 add-height border form-control outline-0" placeholder="Type here ..." style="min-height:71px;"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-2">
                                                <label class="form-label ms-0">Role<em class="text-danger">*</em></label>
                                                <!-- <input type="text" name="project_role" class="border form-control w-100" placeholder="Select role"> -->
                                                <select class="js-example-placeholder-single web-select2" id="" data-placeholder="select role" name="project_role">
                                                    <option value="" disabled selected></option>
                                                    <option value="project manager">Project Manager</option>
                                                    <option value="Test Engineer">Test Engineer</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-2">
                                                <div class="position-relative">
                                                    <label class="form-label ms-0" for="">Role description<em class="text-danger">*</em></label>
                                                    <textarea name="role_description" class="ps-3 w-100 add-height border form-control outline-0" placeholder="Type here ..." style="min-height:71px;"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group my-1 position-relative">
                                                <label class="form-label text-dark" for="select-skills">Skills used<em class="text-danger">*</em></label>

                                                <select id="skills_used" multiple name="project_skills" class="top-0 position-relative demo-default web-select2">
                                                    <option value="">Select skills...</option>
                                                    <option>PHP </option>
                                                    <option>Laravel </option>
                                                    <option>CSS </option>
                                                    <option>Javascript </option>
                                                    <option>Python </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mt-2">
                                            <div class="text-center">
                                                <button type="submit" style="font-weight:400;" class="btn btn-primary btn-sm p-2">Save</button>
                                                <button type="button" name="cancel" onclick="confirmCancelForm($(this), $('#confirmEditProjectModal'), $('#projectEdit-modal'))" class="bg-overlay-black-20 btn btn-sm p-2 rounded-pill text-body" style="color:#fff; font-weight:400;">Cancel</button>
                                            </div>
                                            <div id="confirmEditProjectModal" class="confirmcanscel  text-center" style="display: none">
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
            <button type="button" class="btn-close close-btn abs-position" onclick="confirmCancelForm($(this), $('#confirmEditProjectModal'), $('#projectEdit-modal'))" aria-label="Close"></button>
        </div>
    </div>
</div>

@section('project-script')
<script>
    $(".switchBtnProject").click(function() {
        $(".switchBtnProject.fieldActive").removeClass('fieldActive')
        $(this).addClass('fieldActive')
    });
    $(".switchBtnProjectEdit").click(function() {
        $(".switchBtnProjectEdit.fieldActive").removeClass('fieldActive')
        $(this).addClass('fieldActive')
    });
    $(".org_show").click(function() {
        $(".organistion").css("display", 'block');
        $(".organistion").find(":input").val('').trigger('change');
        $('#org').removeAttr("disabled");
    });
    $(".org_hide").click(function() {
        $(".organistion").css("display", 'none');
        $(".organistion").find(":input").val('').trigger('change');
        $('#org').attr("disabled", true)
    });


    $("#projects_detail2").validate({
        ignore: ':hidden:not([class~=selectized]),:hidden > .selectized, .selectize-control .selectize-input input',

        rules: {
            project_title: {
                required: true,
                alphaWithSpace: true

            },
            organisation: {
                required: true
            },
            project_details: {
                required: true
            },
            project_role: {
                required: true
            },
            role_description: {
                required: true
            },
            project_skills: {
                required: true
            }
        },
        errorPlacement: function(label, element) {
            if (element.hasClass('web-select2')) {
                label.insertAfter(element.next('.select2-container')).addClass('mt-2 ');
                label.insertAfter(element.next('.selectize-control')).addClass('mt-2 ');
                select2label = label
            } else {
                // label.addClass('mt-2');
                label.insertAfter(element);
            }
        },


        messages: {
            project_title: {
                required: "Enter project title"
            },
            organisation: {
                required: "Enter organisation"
            },
            project_details: {
                required: "Enter project details"
            },
            project_role: {
                required: "Select role"
            },
            role_description: {
                required: "Enter role description"
            },
            project_skills: {
                required: "Select skills"
            },

        }
    })

    $("#projects_detail2Edit").validate({
        ignore: ':hidden:not([class~=selectized]),:hidden > .selectized, .selectize-control .selectize-input input',

        rules: {
            project_title: {
                required: true,
                alphaWithSpace: true

            },
            organisation: {
                required: true
            },
            project_details: {
                required: true
            },
            project_role: {
                required: true
            },
            role_description: {
                required: true
            },
            project_skills: {
                required: true
            }
        },
        errorPlacement: function(label, element) {
            if (element.hasClass('web-select2')) {
                label.insertAfter(element.next('.select2-container')).addClass('mt-2 ');
                label.insertAfter(element.next('.selectize-control')).addClass('mt-2 ');
                select2label = label
            } else {
                // label.addClass('mt-2');
                label.insertAfter(element);
            }
        },


        messages: {
            project_title: {
                required: "Enter project title"
            },
            organisation: {
                required: "Enter organisation"
            },
            project_details: {
                required: "Enter project details"
            },
            project_role: {
                required: "Select role"
            },
            role_description: {
                required: "Enter role description"
            },
            project_skills: {
                required: "Select skills"
            },

        }
    })

    var $skills_used_edit_project = $('#skills_used').selectize({
        persist: false,
        create: true
    }).on('change', function() {
        $(this).valid();
    });
    var $skills_used_project = $('#skills_used_project').selectize({
        persist: false,
        create: true
    }).on('change', function() {
        $(this).valid();
    });

    $(".js-example-placeholder-single").select2({
        placeholder: "Select a state",
        allowClear: true
    });
</script>
@endsection