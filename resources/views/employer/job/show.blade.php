@extends('employer.layouts.master')

@push('form_style')
@include('employer.layouts.partials.form_css')
<!-- css-cdn -->

@endpush

@section('style')
<!-- add style.css -->
<style>
    label {
        font-weight: 600;
        font-size: 15px;
    }

    .widget .widget-box {
        border: 2px solid #eeeeee;
        border-radius: 3px;
        padding: 0px 15px;
        box-shadow: 0 0 15px -8px;
        border-radius: 16px;
    }

    .widget-box1 {
        border: 2px solid #eeeeee;
        border-radius: 3px;
        padding: 8px 17px;
        box-shadow: 0 0 15px -8px;
        border-radius: 16px;
    }

    .job-list .job-list-logo {
        margin-right: 20px;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 80px;
        flex: 0 0 80px;
        border: 1px px solid #eeeeee;
        height: 80px;
        width: 80px;
        text-align: center;
        padding: 10px;
    }

    .job-list .job-list-logo img {
        height: 100%;
    }

    .job-list .job-list-details {
        overflow: hidden;
    }

    .job-list-title {
        margin-bottom: 5px;
    }

    .job-list-details ul {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-bottom: 0px;
    }

    .job-list-details ul li {
        margin: 5px 10px 5px 0px;
        font-size: 13px;
    }

    .job-list .job-list-favourite-time {
        /* margin-left: auto; */
        text-align: center;
        font-size: 13px;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 90px;
        flex: 0 0 90px;
    }


    .job-list-favourite-time .job-list-favourite {
        display: inline-block;
        position: relative;
        height: 40px;
        width: 40px;
        line-height: 40px;
        border: 1px solid #eeeeee;
        border-radius: 100%;
        text-align: center;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        margin-bottom: 20px;
        font-size: 16px;
        color: #969696;
    }

    .job-list-favourite-time span {
        display: block;
        margin: 0 auto;
    }


    @media (max-width: 575px) {
        .job-list {
            display: inline-block;
            text-align: center;
            width: 100%;
            border-bottom: 0;
            padding: 20px 15px;
        }

        .job-list .job-list-logo {
            margin: 0 0 25px 0;
            display: inline-block;
        }

        .job-list .job-list-details {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #eeeeee;
            margin-bottom: 20px;
        }

        .job-list .job-list-details .job-list-title {
            margin-bottom: 10px;
        }

        .job-list ul,
        .job-list.job-list-company ul {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .job-list .job-list-favourite-time {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .job-list .job-list-favourite-time a {
            margin-bottom: 0;
            margin-left: auto;
        }

        .job-list .job-list-favourite-time span {
            display: inline-block;
            margin: 0;
            -ms-flex-item-align: center;
            align-self: center;
        }
    }


    .job-list {
        padding: 22px 20px;
        background: #ffffff;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        border-bottom: 1px solid #eeeeee;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        height: 100%;
    }



    .sidebar .widget {
        padding-bottom: 30px;
    }

    .widget .company-detail-meta ul {
        display: block;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .widget .company-detail-meta ul li {
        margin-right: 15px;
        display: inline-block;
    }

    .widget .company-detail-meta ul li.linkedin a {
        padding: 15px 20px;
        border: 2px solid #eeeeee;
        border-radius: 3px;
        display: inline-block;
    }

    .widget .company-detail-meta ul li a {
        color: #969696;
        font-weight: 600;
        font-size: 12px;
    }

    .widget .company-detail-meta ul li.linkedin a i {
        color: #06cdff;
    }

    .widget .widget-box {
        border: 2px solid #eeeeee;
        border-radius: 3px;
        padding: 20px 15px;
    }


    .widget .jobber-company-view ul li {
        margin-bottom: 20px;
    }

    .border-viewJob {
        /* border: 1px solid #00000085 !important; */
        box-shadow: 0 0 15px -8px;
        border-radius: 16px;
    }
</style>
@endsection

@section('content')
<main class="main-content position-relative  border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-2 pe-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark " aria-current="page">View Job</li>
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
    <section class="space-ptb">
        <div class="container-fluid">
            <div class="row m-0">
                <div class="blue-bg-clr p-3 rounded">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="d-flex flex-wrap align-items-center mt-2">
                                <div class="pe-2">
                                    <img src="{{ asset('storage/assets/photo/company/'.$job->company->logo)}}" class="rounded-circle" alt="Cinque Terre" width="80px" height="80px">
                                </div>
                                <div class="job-list-info">
                                    <div class="job-list-title">
                                        <h2 class="mb-0 title-showJob">{{ $job->title }}</h2>
                                    </div>
                                    <div class="job-list-option">
                                        <ul class="list-unstyled pt-2 text-white">
                                            @if($job->locations)
                                            <li><i class="fas fa-map-marker-alt pe-1 text-warning"></i>{{ implode(',',$job->locations->city) }}</li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="d-flex justify-content-center">
                                <div class="company-address float-left">
                                    <ul class="list-unstyled ">
                                        <li class="py-1 "><a href="{{ $user->company->website }}" target="_blank"><i class="text-warning fas fa-link fa-fw"></i><span class="ps-3  text-white fnt">{{ $user->company->website }}</span></a></li>
                                        <li class="py-1"><a href="tel:+905389635487"><i class="text-warning fas fa-phone fa-flip-horizontal fa-fw"></i><span class="ps-3 fnt text-white">+{{ $user->company->phone_number }}</span></a></li>
                                        <li class="py-1"><a href="mailto:ali.potenza@job.com"><i class="text-warning fas fa-envelope me-2 fa-fw"></i><span mailto:class="ps-2" class="text-white ms-1"> {{ $user->company->email }}</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="job-list-favourite-time text-center">
                                <a class="job-list-favourite order-2 bg-white" href="#"><i class="far fa-heart text-warning"></i></a>
                                <span class="job-list-time text-light order-1"><i class="far fa-clock pe-1"></i>2W ago</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="border-viewJob orange-bg-clr p-4 mt-3">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 mb-3">
                                <div class="d-flex">
                                    <i class="font-xll text-white text-primary align-self-center flaticon-debit-card"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class=" text-white mb-1 ms-n1 h-25">Offered Salary</label>
                                        <span class="mb-0 text-white d-block text-dark fnt">{{ @$job->salary->salary->min }} - {{ @$job->salary->salary->max }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-3">
                                <div class="d-flex">
                                    <i class="font-xll text-white text-primary align-self-center flaticon-love"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class="mb-1 text-white ms-n1 h-25">Gender</label>
                                        <span class="mb-0 text-white d-block text-dark fnt">{{ ucfirst($job->gender) }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-3">
                                <div class="d-flex">
                                    <i class="font-xll text-white text-primary align-self-center flaticon-bar-chart"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class="mb-1 text-white ms-n1 h-25">Working Type</label>
                                        <span class="mb-0 text-white d-block fnt text-dark">{{ ucfirst($job->job_working_type) }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-md-0 mb-4">
                                <div class="d-flex">
                                    <i class="font-xll text-white text-primary align-self-center flaticon-apartment"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class="mb-1 text-white ms-n1 h-25">Role</label>
                                        <span class="mb-0 text-white d-block text-dark fnt">{{ $job->role }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-sm-0 mb-4">
                                <div class="d-flex">
                                    <i class="font-xll text-white text-primary align-self-center flaticon-medal"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class="mb-1 text-white ms-n1 h-25">{{ucfirst($job->experience->type)}}</label>
                                        @if($job->experience->type == 'experience')
                                        <span class="mb-0 text-white d-block text-dark fnt">{{ @$job->experience->experience->min }} - {{ @$job->experience->experience->max }} Years</span>
                                        @else
                                        <span class="mb-0 text-white d-block fnt text-dark">{{ ucfirst($job->experience->type) }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-sm-0 mb-4">
                                <div class="d-flex">
                                    <i class="font-xll text-white text-primary align-self-center flaticon-mortarboard"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class="mb-1 text-white ms-n1 h-25">Qualification</label>
                                        @if($job->min_qualification == 1)
                                        <span class="mb-0 text-white d-block text-dark fnt">10th Pass</span>
                                        @elseif($job->min_qualification == 2)
                                        <span class="mb-0 text-white d-block text-dark fnt">12th Pass</span>
                                        @elseif($job->min_qualification == 3)
                                        <span class="mb-0 text-white d-block text-dark fnt">Graduate</span>
                                        @else
                                        <span class="mb-0 text-white d-block text-dark fnt">Post Gradution</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mt-3">
                                <div class="d-flex">
                                    <i class="font-xll text-white text-primary align-self-center flaticon-job"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class="mb-1 text-white ms-n1 h-25">Openings</label>
                                        <span class="mb-0 text-white d-block text-dark  fnt">{{ $job->openings }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 mt-3">
                                <div class="d-flex">
                                    <i class="font-xll text-white text-primary align-self-center flaticon-recruitment"></i>
                                    <div class="feature-info-content ps-3">
                                        <label class="mb-1 text-white ms-n1 h-25">Job Type</label>
                                        <span class="mb-0 text-white d-block text-dark fnt">{{ implode(',', $job->job_type) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 border-viewJob px-3 pt-3 pb-1">
                        <h5 class="mb-3 mb-md-3">Job Description</h5>
                        {!! $job->description !!}
                        <!-- </div> -->
                        <hr>
                        <h5 class="mb-3 mb-md-3">Perks</h5>
                        <ul class="list-unstyled list-style d-flex">
                            <li class="fw-bold me-2">
                                <i class="far fa-check-circle font-md text-primary me-2"></i>{{ implode(',', $job->perks) }}
                            </li>

                        </ul>
                        <hr>
                        <h5 class="mb-3 mb-md-3">Skills</h5>
                        <ul class="list-unstyled list-style d-flex">
                            <li class="fw-bold me-2">
                                <i class="far fa-check-circle font-md text-primary me-2"></i>{{ implode(',', $job->skills) }}
                            </li>
                        </ul>
                    </div>

                </div>
                <!--================================= sidebar -->
                <div class="col-lg-4 mt-2">
                    <div class="sidebar mb-0">
                        <div class="widget">
                            <div class="jobber-company-view">
                                <ul class="list-unstyled my-2">
                                    <li>
                                        <div class="widget-box1">
                                            <div class="d-flex align-items-center pt-2">
                                                <i class="flaticon-clock fa-2x fa-fw text-primary"></i>
                                                <span class="ps-3 text-dark">35 Days</span>
                                            </div>
                                            <hr>
                                            <div class="d-flex align-items-center">
                                                <i class="flaticon-loupe fa-2x fa-fw text-primary"></i>
                                                <span class="ps-3 text-dark">35697 Displayed</span>
                                            </div>
                                            <hr>
                                            <div class="d-flex align-items-center pb-2">
                                                <i class="flaticon-personal-profile fa-2x fa-fw text-primary"></i>
                                                <span class="ps-3 text-dark">300-500 Application</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--================================= sidebar -->
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
<script>
</script>
<!-- Custom script links only ends here -->
@endsection