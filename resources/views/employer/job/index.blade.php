@extends('employer.layouts.master')

@push('style-scripts')
@include('employer.layouts.partials.form_css')
<!-- css-cdn -->

@endpush

@section('style')
<!-- add style.css -->
<style>
    /* / Filters CSS -- /  */
    .select2-container .select2-selection--single {
        height: 40px !important;
        padding: 0;
    }

    .select2-container .select2-selection--single .select2-selection__rendered {
        padding-left: 10px;
        padding-top: 4px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        top: 6px;
    }

    /*Employer Manage Job Page Toggle CSS Start */

    .toggle {
        --width: 80px;
        --height: calc(var(--width) / 3);

        position: relative;
        display: inline-block;
        width: var(--width);
        height: var(--height);
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
        border-radius: var(--height);
        cursor: pointer;
    }

    .toggle input {
        display: none;
    }

    .toggle .slider {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: var(--height);
        background-color: #f44335;
        transition: all 0.4s ease-in-out;
    }

    .toggle .slider::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: calc(var(--height));
        height: calc(var(--height));
        border-radius: calc(var(--height) / 2);
        background-color: #fff;
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
        transition: all 0.4s ease-in-out;
    }

    .toggle input:checked+.slider {
        background-color: #4caf50;
    }

    .toggle input:checked+.slider::before {
        transform: translateX(calc(var(--width) - var(--height)));
    }

    .toggle .labels {
        position: absolute;
        top: 8px;
        left: 0;
        width: 100%;
        height: 100%;
        font-size: 13px;
        font-family: sans-serif;
        transition: all 0.4s ease-in-out;
        font-weight: 100;
    }

    .toggle .labels::after {
        content: attr(data-off);
        position: absolute;
        right: 5px;
        color: #ffffff;
        opacity: 1;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.4);
        transition: all 0.4s ease-in-out;
    }

    .toggle .labels::before {
        content: attr(data-on);
        position: absolute;
        left: 5px;
        color: #ffffff;
        opacity: 0;
        text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.4);
        transition: all 0.4s ease-in-out;
    }

    .toggle input:checked~.labels::after {
        opacity: 0;
    }

    .toggle input:checked~.labels::before {
        opacity: 1;
    }

    /* / Toggle Css End / / Sidebar Css /  */
    @media (min-width: 1200px) {

        .sidenav.fixed-start+.main-content {
            margin-left: 16rem;
        }

        .sidenav.fixed-end+.main-content {
            margin-right: 16rem;
        }
    }

    /* / Job Application - Prev Next  */
    Button / .paginate_button.current {
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
    <nav class="navbar navbar-main navbar-expand-lg px-3 mx-0 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-5 ">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark " aria-current="page">Manage Job</li>
                </ol>
            </nav>
            <div class="collapse navbar-collapse mt-sm-02 me-md-0" id="navbar">
                <ul class="ms-md-auto navbar-nav  justify-content-end">
                    <li class="nav-item hidden-bar ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link  text-body p-0" id="iconNavbarSidenav" onclick="hide()">
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
    <!-- Manage Jobs -->
    <div class="row px-4 align-items-center">
        <div class="col my-1 px-3 mx-2">
            <div class="section-title-02 mb-0 ">
                <h4 class="mb-0">Manage Jobs</h4>
            </div>
        </div>
        <div class="col my-1 mx-2">
            <div class="">
                <a href="{{ route('employer.job.create') }}" class="float-end btn btn-primary">Post Job</a>
            </div>
        </div>
    </div>
    <section class="my-1 pb-2 px-3">
        <div class="container-fluid ps-4">
            <div class="row justify-content-center">
                <div class="col-md-12 p-3 card-shadow">
                    <div class="user-dashboard-info-box mb-0">
                        <!--  Filter for Employer Job -->
                        <form action="{{ route('employer.job.employerJobFilter') }}" id="manage_job_filter_form">
                            <div class="row mb-4 justify-content-start">
                                <div class="col-sm-6 col-12 col-lg-3">
                                    <label class="form-label" for="">Job Role</label>
                                    <select class="js-example-basic-single p-0 ps-5 form-control border" data-placeholder="Select Job Role" name="job_role">
                                        <option></option>
                                        @foreach($roles as $role)
                                        <option value="{{ $role->name }}" {{ Request::get('job_role') == $role->name ? 'selected' : '' }}>
                                            {{ $role->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <p id="job_role_err" class="position-relative m-0"></p>
                                </div>
                                <div class="col-sm-6 col-12 col-lg-3">
                                    <label class="form-label">State</label>
                                    <select class="js-example-placeholder-single ps-5 form-control border" id="stateCity" name="state" data-placeholder="Select State">
                                        <option></option>
                                        @foreach($states as $state)
                                        <option value="{{ $state->name }}" {{ Request::get('state') == $state->name ? 'selected' : '' }}>
                                            {{ $state->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <p id="state_err" class="position-relative m-0"></p>
                                </div>
                                <div class="col-sm-6 col-12 col-lg-2">
                                    <label class="form-label">City</label>
                                    <select class="js-example-placeholder-single ps-5 form-control border job-filter-city" name="city" data-placeholder="Select City">
                                        <option value="{{ Request::get('city') }}" selected>
                                            {{ Request::get('city') }}
                                        </option>
                                    </select>
                                    <p id="city_err" class="position-relative m-0"></p>
                                </div>
                                <div class="col-sm-6 col-12 col-lg-2">
                                    <label class="form-label">Working type</label>
                                    <select class="js-example-placeholder-single form-control border" name="working_type" data-placeholder="Select working type"> <!-- <option value="--select--"></option> -->
                                        <option></option>
                                        <option value="{{ Request::get('working_type') }}" selected>
                                            {{ Request::get('working_type') }}
                                        </option>
                                        <option value="full_Time">Work from Office</option>
                                        <option value="work_from_home">Work from Home</option>
                                        <option value="field_job">Field Jobs</option>
                                    </select>
                                    <p id="working_type_err" class="position-relative m-0"></p>
                                </div>
                                <div class="col-1 text-end mt-4 position-relative">
                                    <button type="submit" class="btn btn-primary mb-0 mt-1 filter-btn">Filter</button>
                                </div>
                            </div>
                        </form>
                        <!-- End Filter for Employer Job -->
                        <div class="user-dashboard-table table-responsive pt-3 customScroll">
                            <table id="example" class="table table-bordered">
                                <thead class="text-white blue-bg-clr">
                                    <tr class="">
                                        <th scope="col" class="text-center">S No</th>
                                        <th scope="col" class="text-center">Job Title</th>
                                        <th scope="col" class="text-center">Job Role</th>
                                        <th scope="col" class="text-center">Date Posted</th>
                                        <th scope="col" class="text-center">Applications</th>
                                        <th scope="col" class="text-center">Status</th>
                                        <th scope="col" class="text-center">Job Expiry</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jobs as $job)

                                    <tr>
                                        <td class="text-center"> {{$loop->iteration}} </td>
                                        <th class="text-center" scope="row">{{ $job->title }}
                                        </th>
                                        <td class="text-center">{{ $job->role }}</td>
                                        <td class="text-center">{{ $job->created_at->format('Y-m-d') }}</td>
                                        <td class="text-center">Applications (2)</td>
                                        <td class="text-center ">
                                            <label class="toggle badge bg-success rounded-pill text-capitalize switch">
                                                <input class="switchBtn" type="checkbox" onclick="confirmClick(this)" checked>
                                                <span class="slider round"></span>
                                                <span class="labels" data-on="Active" data-off="Inactive"></span>
                                            </label>
                                        </td>
                                        <td class="text-center">{{ $job->job_expiry_date }}</td>
                                        <td>
                                            <ul class="list-unstyled mb-0 d-flex justify-content-center icon-gap">
                                                <li><a href="{{ route('employer.job.show',$job->id) }}" class="text-primary" data-bs-toggle="tooltip" title="" data-bs-original-title="view" aria-label="view"><i class="far fa-eye"></i></a></li>
                                                <li><a href="{{ route('employer.job.edit',$job->id) }}" class="text-info" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                                                <li><a href="{{ route('employer.job.delete',$job->id) }}" class="text-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="far fa-trash-alt"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- JS script links only starts here -->
@include('employer.layouts.partials.form_js')

@endpush

<!-- Custom script links only starts here -->
@section('script')
<script>
    // $(document).ready(function() {
    //     $('#manage_job_filter_form').validate({
    //         rules: {
    //             job_role: {
    //                 required: true
    //             },
    //             state: {
    //                 required: true
    //             },
    //             city: {
    //                 required: true
    //             },
    //             working_type: {
    //                 required: true
    //             },
    //         },
    //         errorPlacement: function(error, element) {
    //             var name = $(element).attr("name");
    //             error.appendTo($("#" + name + "_err"));
    //         },
    //         messages: {
    //             job_role: {
    //                 required: "Select job role"
    //             },
    //             state: {
    //                 required: "Select state"
    //             },
    //             city: {
    //                 required: "Select city"
    //             },
    //             working_type: {
    //                 required: "Select working type"
    //             }
    //         },
    //     }).on('change', function() {
    //         $(this).valid();
    //     });
    // });
    $(".js-example-placeholder-single").select2({
        placeholder: "---Select---",
        allowClear: true
    });

    $(document).ready(function() {
        $('.js-example-basic-single').select2();
        $('#example').DataTable();
    });

    // Status Active/Inactive Job Toggle
    function confirmClick(element) {

        Swal.fire({
            title: 'Are you sure?',
            text: "You want to change job status",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, change it!'
        }).then((result) => {
            if (result.isConfirmed) {
                element.checked = element.checked;
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                element.checked = !element.checked;
            }
        })

        // var r = confirm("You sure want to change status");
        // if (r !== true) {
        // }
    }

    // city filter by state
    $(document).on('change', '#stateCity', function() {
        let stateName = $(this).val();
        // alert(state_id);
        $.ajax({
            type: "GET",
            url: "{{route('employer.job.employerLocationFilter')}}",
            data: {
                'stateName': stateName
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