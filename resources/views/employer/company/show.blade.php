@extends('employer.layouts.master')

@push('form_style')
@include('employer.layouts.partials.form_css')
<!-- css-cdn -->
@endpush

@section('style')
<!-- add style.css -->
<style>
    .d-grid>a {
        height: 28px;
    }

    .card-height {
        min-height: 330px;
    }

    .d-grid>a>span {
        font-size: 14px;
    }
</style>
@endsection

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-0 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 me-5 ps-1">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark " aria-current="page">Company</li>
                </ol>
            </nav>
            <div class="collapse navbar-collapse mt-sm-02 me-md-0" id="navbar">
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
    <!--=================================Register -->
    <section class="mb-5">
        <div class="container-fluid p-1">
            <div class="section-title my-2">
                <div class="section-title mb-3 d-flex flex-wrap">
                    <h4 class="text-left ps-3">Company Profile Details</h4>
                    <span class="ms-3"><a class="btn btn-primary p-3 pt-1 pb-1" href="{{route('employer.company.index')}}"><i class="fas fa-edit eye-icon-size"></i></a></span>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="login-register user-dashboard-info-box box p-3 mb-4">
                        <div class="row">
                            <div class="col-lg-4 col-12 col-md-6 my-2">
                                <div class="card p-3 card-height">
                                    <h5 class="mb-3 border-bottom p-2  text-dark ps-0">Basic Information</h5>
                                    <h6 class="fnt">Company Name:<span class="text-secondary ps-2 fw-normal">{{ @$company->name  }}</span></h6>
                                    <h6 class="fnt">Company Size:<span class="text-secondary ps-2 fw-normal">{{ @$company->company_size }}</span></h6>
                                    <h6 class="fnt">Incorporated in:<span class="text-secondary ps-2 fw-normal">{{ @$company->established_at }}</span></h6>
                                    <h6 class="fnt">Industry: @if(isset($company->industries))
                                        @foreach ($company->industries as $industryData)
                                        <span class="text-secondary ps-2 fw-normal">{{ @$industryData->name }},</span>
                                        @endforeach
                                        @endif
                                    </h6>
                                    <h6 class="fnt">GST Number:<span class="text-secondary ps-2 fw-normal">{{ @$company->gst_number }}</span></h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 col-md-6 my-2">
                                <div class="card p-3 card-height">
                                    <h5 class="mb-3  border-bottom p-2  text-dark ps-0">Contact Details</h5>
                                    <h6 class="fnt">Email Address: <span class="text-secondary ps-2 fw-normal">{{ @$company->email }}</span></h6>
                                    <h6 class="fnt">Web: <a href="{{ $company-> website }}" target="_blank">
                                            <span class="text-secondary ps-2 fw-normal">{{ $company-> website }}</span></a></h6>
                                    <h6 class="fnt">Phone: <span class="text-secondary ps-2 fw-normal">{{ @$company->phone_number }}</span></h6>
                                    <h6 class="fnt">Landline: <span class="text-secondary ps-2 fw-normal">{{ @$company->landline_number }}</span></h6>
                                    @if(isset($company->social_links))
                                    @php $link = json_decode($company->social_links); @endphp
                                    @endif
                                    <div class="d-grid gap-2 pt-1">
                                        <a href="{{ @$link->facebook }}" target="_blank"><img src="{{ asset('assets/dashboard/img/fb.png')}}" class="navbar-brand-img pb-1 h-100" alt="main_logo" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ @$link->facebook }}"> <span class="text-secondary ps-2 fw-normal">{{ @$company->website }}</span></a>

                                        <a href="{{ @$link->twitter }}" target="_blank"><img src="{{ asset('assets/dashboard/img/twiter.png')}}" class="navbar-brand-img pb-1 pe-1 h-100" alt="main_logo" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ @$link->twitter }}"><span class="text-secondary ps-2 fw-normal">{{ @$company->website }}</span></a>

                                        <a href="{{ @$link->linkdin }}" target="_blank"><img src="{{ asset('assets/dashboard/img/link.png')}}" class="navbar-brand-img pb-1 pe-1 h-100" alt="main_logo" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ @$link->linkdin }}"><span class="text-secondary ps-2 fw-normal">{{ @$company->website }}</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 col-md-12 my-2">
                                <div class="card p-3 card-height">
                                    <h5 class="mb-3 border-bottom p-2  text-dark ps-0">Address</h5>
                                    @if(isset($company->companyAddress))
                                    @foreach ($company->companyAddress as $value)
                                    <h6 class="fnt">State: <span class="text-secondary ps-2 fw-normal">{{ $value->state->name }}</span></h6>
                                    <h6 class="fnt">City:<span class="text-secondary ps-2 fw-normal">{{ $value->city->name }}</span></h6>
                                    <h6 class="fnt">Address:<span class="text-secondary ps-2 fw-normal">{{ @$value->full_address }}</span></h6>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    @include('employer.layouts.partials.footer')

</main>
<!--=================================Register -->
@endsection

@push('js-scripts')
<!-- JS script links only starts here -->
@include('employer.layouts.partials.form_js')

<!-- Template Scripts (Do not remove)-->

<!-- JS script links only ends here -->
<!-- Custom script links only starts here -->
@endpush


@section('script')

<!-- Custom script links only ends here -->
@endsection