@extends('employer.layouts.master')

@push('form_style')
@include('employer.layouts.partials.form_css')
<!-- css-cdn -->

@endpush

@section('style')

<!-- add style.css -->
<style>
    @media (min-width: 1200px) {

        .sidenav.fixed-start+.main-content {
            margin-left: 16rem;
        }

        .sidenav.fixed-end+.main-content {
            margin-right: 16rem;
        }
    }

    /* Job Application - Prev Next Button */
    .paginate_button.current {
        display: inline-block;
        width: 40px;
        text-align: center;
        font-size: 14px;
    }

    .point {
        cursor: pointer;
        min-height: 130px;
    }

    .form-control {
        height: 45px;
        font-size: 14px;
    }

    /* Scrollbar horizontal */
    .customScroll::-webkit-scrollbar {
        -webkit-appearance: none;
    }

    .customScroll::-webkit-scrollbar:vertical {
        width: 11px;
    }

    .customScroll::-webkit-scrollbar:horizontal {
        height: 11px;
    }

    .customScroll::-webkit-scrollbar-thumb {
        border-radius: 8px;
        border: 2px solid white;
        /* should match background, can't be transparent */
        background-color: rgba(0, 0, 0, .3);
    }
</style>

@endsection

@section('content')
<main class="main-content position-relative border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-0 shadow-none border-radius-xl px-3" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-5 ">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark " aria-current="page">Job Applications</li>
                </ol>
            </nav>
            <div class="collapse navbar-collapse mt-sm-02 me-md-0" id="navbar">
                <ul class="ms-md-auto pe-md-3 navbar-nav  justify-content-end">
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
    <!-- job application -->
    <section class=" my-2 pb-5 px-3">
        <div class="container-fluid">
            <div class="row mb-3 align-items-center">
                <div class="col ps-0">
                    <div class="section-title-02 mb-0 ">
                        <h4 class="mb-0 ">Job applications</h4>
                    </div>
                </div>
                <div class="col pe-0">
                    <a href="{{ route('employer.job.create') }}" class="btn btn-primary float-end">Post Job</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 card-shadow px-0">
                    <div class="user-dashboard-info-box mb-0 p-3">
                        <form id="filter">
                            <div class="row mb-3 align-items-center gap-3">
                                <div class="col-sm-4">
                                    <label class="ms-0 fw-bold">Job Title<em class=" text-danger">*</em></label>
                                    <input type="text" name="title" class="ps-4 border form-control fields-border" placeholder="Enter title">
                                    <p id="title_err" class="position-absolute"></p>
                                </div>
                                <div class="col-sm-4">
                                    <label class="fw-bold">Job Role<em class=" text-danger">*</em></label>
                                    <select class="js-example-placeholder-single select2-container select2-container--default select2-container--focus ps-5 form-control border" name="job_role">
                                        <option value=""></option>
                                        <option value="Active">Role 1</option>
                                        <option value="Inactive">Role 2</option>
                                    </select>
                                    <p id="job_role_err" class="position-absolute"></p>
                                </div>
                                <div class="col-sm-3 mt-4">
                                    <button type="submit" class="btn btn-primary mb-0 mt-1 filter-btn">Filter</button>
                        </form>
                    </div>
                </div>
                <div class="user-dashboard-table table-responsive pt-3 customScroll">
                    <table id="example" class="table table-bordered">
                        <thead class="text-white blue-bg-clr">
                            <tr>
                                <th scope="col" class="text-center">Job Title</th>
                                <th scope="col" class="text-center">Jobseeker Name</th>
                                <th scope="col" class="text-center">Jobseeker Number</th>
                                <th scope="col" class="text-center">Jobseeker Email</th>
                                <th scope="col" class="text-center">Experience (Yrs)</th>
                                <th scope="col" class="text-center">Resume</th>
                                <th scope="col" class="text-center">Jobseeker Profile</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>Front end developer</td>
                                <td>Manthan Rawat</td>
                                <td>9999888877</td>
                                <td>abc@abc.com</td>
                                <td>6+</td>
                                <td></td>
                                <td>
                                    <ul class="list-unstyled mb-0 d-flex justify-content-center">
                                        <li><a href="{{ route('employer.job.index') }}" class="text-primary" data-bs-toggle="tooltip" title="" data-bs-original-title="view" aria-label="view"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                    </table>
                </div>

            </div>
        </div>
        </div>
        </div>
    </section>

    @include('employer.layouts.partials.footer')
</main>
<!-- End Manage Jobs -->
@endsection

@push('js-scripts')
<script src="{{ asset('assets/dashboard/js/jquery.dataTables.min.js') }}"></script>
<!-- JS script links only starts here -->
@include('employer.layouts.partials.form_js')

<!-- Template Scripts (Do not remove)-->


<!-- JS script links only ends here -->
<!-- Custom script links only starts here -->
@endpush


@section('script')
<script>
    $(document).ready(function() {
        $("#filter").validate({
            rules: {
                title: {
                    required: true
                },
                job_role: {
                    required: true
                },
            },
            errorPlacement: function(error, element) {
                var name = $(element).attr("name");
                error.appendTo($("#" + name + "_err"));
            },
            messages: {
                title: {
                    required: "Enter job title"
                },
                job_role: {
                    required: "Select job role"
                },
            }
        });
    }).on('change', function() {
        $(this).valid();
    });

    $(document).ready(function() {

        $(".js-example-placeholder-single").select2({
            placeholder: "Select a job role",
        }).on('change', function() {
            $(this).valid();
        });

        $('#example').DataTable();
    });
</script>
<!-- Custom script links only ends here -->
@endsection