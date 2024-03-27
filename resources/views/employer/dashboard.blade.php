@extends('employer.layouts.master')

@push('style-scripts')
@include('employer.layouts.partials.form_css')
<!-- css-cdn -->
@endpush

@section('style')
<!-- Add CSS for this page only -->
<style>
    table thead tr th,
    table thead tr td {
        padding: 0.75rem;
        font-size: 12px;
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

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0  shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark " aria-current="page">Dashboard</li>
                </ol>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 me-md-0 pe-2" id="navbar">
                <ul class="ms-md-auto navbar-nav  justify-content-end">
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
    <!-- End Navbar -->
    <div class="px-2 text-end mx-4">
        <a href="{{ route('employer.job.create') }}" class="btn btn-primary">Post Job</a>
    </div>
    <!-- check javascript company create or not for javascript function -->
    <input type="hidden" name="email" id="email" value="{{isset($company) ? 'company->email' : ''}}" class="border ps-5 form-control" readonly>
    <!-- END check javascript company create or not for javascript function -->

    <div class="container-fluid mb-5 mt-3 pb-5 mx-2">
        <div class="row py-3 mb-5 w-100 card-shadow">
            <div class="col-lg-6 col-md-6">
                <h6>Active Jobs</h6>
                <div class="table-responsive customScroll">
                    <table class="table table-bordered text-center table-sm">
                        <thead class="text-white blue-bg-clr">
                            <tr>
                                <th scope="col">job Title</th>
                                <th scope="col">No. of Resume</th>
                                <th scope="col">New Resume</th>
                                <th scope="col">Job Active Till</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">Web</td>
                                <td>12</td>
                                <td>4</td>
                                <td>14-12-2022</td>
                            </tr>
                            <tr>
                                <td scope="row">Web</td>
                                <td>12</td>
                                <td>4</td>
                                <td>14-12-2022</td>
                            </tr>
                            <tr>
                                <td scope="row">Web</td>
                                <td>12</td>
                                <td>4</td>
                                <td>14-12-2022</td>
                            </tr>
                            <tr>
                                <td scope="row">Web</td>
                                <td>12</td>
                                <td>4</td>
                                <td>14-12-2022</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <h6>Inactive Jobs</h6>
                <div class="table-responsive customScroll">
                    <table class="table table-bordered text-center table-sm">
                        <thead class="text-white blue-bg-clr">
                            <tr>
                                <th scope="col">job Title</th>
                                <th scope="col">No. of Resume</th>
                                <th scope="col">New Resume</th>
                                <th scope="col">Job Active Till</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">Web</td>
                                <td>12</td>
                                <td>4</td>
                                <td>14-12-2022</td>
                            </tr>
                            <tr>
                                <td scope="row">Web</td>
                                <td>12</td>
                                <td>4</td>
                                <td>14-12-2022</td>

                            </tr>
                            <tr>
                                <td scope="row">Web</td>
                                <td>12</td>
                                <td>4</td>
                                <td>14-12-2022</td>
                            </tr>
                            <tr>
                                <td scope="row">Web</td>
                                <td>12</td>
                                <td>4</td>
                                <td>14-12-2022</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('employer.layouts.partials.footer')
</main>

@endsection

@push('js_scripts')
<script src="{{ asset('assets/dashboard/js/dataTables.bootstrap5.min.js') }}"></script>
@include('employer.layouts.partials.form_js')
<!-- js-cdn -->
@endpush
@section('script')
<!-- scripts.js -->

<script>
    // Pop up company information logging first time -->
    $(document).ready(function() {
        var companyEmail = $('#email').val();
        if (!companyEmail) {
            $('#simpleModal').show()
            $('#simpleModal').modal({
                backdrop: 'static',
                keyboard: true,
                show: true
            });
        }
    });
</script>
@endsection