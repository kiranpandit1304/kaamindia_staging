@extends('layouts.master')

@push('form-style')
@include('layouts.partials.form_css')
@endpush

@section('style')
<style>
    .btn-warning {
        background-color: #f25e20 !important;
        border-color: #f25e20 !important;
    }

    .banner {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-position-x: left;
        padding: 95px 0 95px 0 !important;
        padding-bottom: 0 !important;
    }

    .bg1-img {
        background-image: url('../assets/images/bg1.png');
    }
</style>
@endsection

@section('content')

<!--=================================Banner -->
<section class="header-inner bg1-img header-inner-big bg-holder text-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="job-search-field">
                    <div class="job-search-item">
                        <form class="form row">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <div class="position-relative left-icon my-3">
                                        <input type="text" class="form-control border" name="job_title" placeholder="Job title, skill or company">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <div class="position-relative left-icon my-3">
                                        <input type="text" class="border form-control location-input" name="job_title" placeholder="Town, city or postcode">
                                        <i class="far fa-compass"></i>
                                        <a href="#">
                                            <div class="detect">
                                                <span class="d-none d-sm-block">Detect</span>
                                                <i class="fas fa-crosshairs"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-sm-12">
                                <div class="form-group form-action">
                                    <button type="submit" class="text-white btn btn-warning my-3"><i class="fas fa-search-location"></i> Find Job</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
Banner -->
<section class="space-ptb pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="job-list border">
                            <div class=" job-list-logo">
                                <img class="img-fluid" src="https://templates.hibootstrap.com/zoben/default/assets/images/recent-job/recent-job4.jpg" alt="">
                            </div>
                            <div class="job-list-details">
                                <div class="job-list-info">
                                    <div class="job-list-title">
                                        <h5 class="mb-0">Product Designer</h5>
                                    </div>
                                    <div class="job-list-option">
                                        <ul class="list-unstyled">
                                            <li><i class="fas fa-building fa-flip-horizontal fa-fw"></i><span class="ps-2">XEAM Ventures Pvt Ltd</span></li>
                                            <li><i class="fas fa-map-marker-alt pe-1"></i>Mohali, Punjab</li>
                                            <li><i class="fas fa-phone fa-flip-horizontal fa-fw"></i><span class="ps-2">(123) 345-6789</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="job-list-favourite-time">
                                <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                                <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>2W ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border p-4 mt-4 mt-lg-5 bg-warning">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="d-flex">
                                <i class="font-xll text-white align-self-center flaticon-debit-card"></i>
                                <div class="feature-info-content ps-3">
                                    <label class="mb-1 text-white">Offered Salary</label>
                                    <span class="mb-0 fw-bold d-block text-white">£15,000 - £20,000</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="d-flex">
                                <i class="font-xll text-white align-self-center flaticon-love"></i>
                                <div class="feature-info-content ps-3">
                                    <label class="mb-1 text-white">Gender</label>
                                    <span class="mb-0 fw-bold d-block text-white">Female</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="d-flex">
                                <i class="font-xll text-white align-self-center flaticon-bar-chart"></i>
                                <div class="feature-info-content ps-3">
                                    <label class="mb-1 text-white">Career role</label>
                                    <span class="mb-0 fw-bold d-block text-white">Executive</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-md-0 mb-4">
                            <div class="d-flex">
                                <i class="font-xll text-white align-self-center flaticon-apartment"></i>
                                <div class="feature-info-content ps-3">
                                    <label class="mb-1 text-white">Industry</label>
                                    <span class="mb-0 fw-bold d-block text-white">Management</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-sm-0 mb-4">
                            <div class="d-flex">
                                <i class="font-xll text-white align-self-center flaticon-medal"></i>
                                <div class="feature-info-content ps-3">
                                    <label class="mb-1 text-white">Experience</label>
                                    <span class="mb-0 fw-bold d-block text-white">2 Years</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="d-flex">
                                <i class="font-xll text-white align-self-center flaticon-mortarboard"></i>
                                <div class="feature-info-content ps-3">
                                    <label class="mb-1 text-white">Qualification</label>
                                    <span class="mb-0 fw-bold d-block text-white">Bachelor Degree</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-md-0 mb-4">
                            <div class="d-flex">
                                <i class="font-xll text-white align-self-center flaticon-debit-card"></i>
                                <div class="feature-info-content ps-3">
                                    <label class="mb-1 text-white">CTC</label>
                                    <span class="mb-0 fw-bold d-block text-white">$120</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-sm-0 mb-4">
                            <div class="d-flex">
                                <i class="font-xll text-white align-self-center flaticon-users"></i>
                                <div class="feature-info-content ps-3">
                                    <label class="mb-1 text-white">No: of Vacancy</label>
                                    <span class="mb-0 fw-bold d-block text-white">2 Years</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="my-4 my-lg-5">
                    <h5 class="mb-3 mb-md-4">Job Description</h5>
                    <p>One of the main areas that I work on with my clients is shedding these non-supportive beliefs and replacing them with beliefs that will help them to accomplish their desires.</p>
                    <p class="fst-italic">It is truly amazing the damage that we, as parents, can inflict on our children. So why do we do it? For the most part, we don’t do it intentionally or with malice. In the majority of cases, the cause is a well-meaning but unskilled or un-thinking parent, who says the wrong thing at the wrong time, and the message sticks – as simple as that!</p>
                </div>
                <hr>

            </div>
            <!--=================================
      sidebar -->
            <div class="col-lg-4">
                <div class="sidebar mb-0">
                    <div class="widget d-grid">
                        <a class="btn btn-primary" href="#"><i class="far fa-paper-plane"></i>Apply for job</a>
                    </div>

                    <div class="widget">
                        <div class="company-address widget-box">
                            <div class="company-address-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.95373531590414!3d-37.817323442021134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1559039794237!5m2!1sen!2sin" height="230" allowfullscreen=""></iframe>
                            </div>

                        </div>
                    </div>
                    <!-- <div class="widget">
                        <div class="jobber-company-view">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="widget-box">
                                        <div class="d-flex">
                                            <i class="flaticon-clock fa-2x fa-fw text-primary"></i>
                                            <span class="ps-3">35 Days</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-box">
                                        <div class="d-flex">
                                            <i class="flaticon-loupe fa-2x fa-fw text-primary"></i>
                                            <span class="ps-3">35697 Displayed</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-box">
                                        <div class="d-flex">
                                            <i class="flaticon-personal-profile fa-2x fa-fw text-primary"></i>
                                            <span class="ps-3">300-500 Application</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="widget">
                        <div class="widget-title">
                            <h5>Similar Jobs</h5>
                        </div>
                        <div class="similar-jobs-item widget-box">
                            <div class="job-list">
                                <div class="job-list-logo">
                                    <img class="img-fluid" src="https://templates.hibootstrap.com/zoben/default/assets/images/recent-job/recent-job4.jpg" alt="">
                                </div>
                                <div class="job-list-details">
                                    <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h6><a href="#">Designer Required</a></h6>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>via</span>
                                                    <a href="employer-detail.html">Trout Design Ltd</a>
                                                </li>
                                                <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i>Freelance</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-list">
                                <div class="job-list-logo">
                                    <img class="img-fluid" src="https://templates.hibootstrap.com/zoben/default/assets/images/recent-job/recent-job4.jpg" alt="">
                                </div>
                                <div class="job-list-details">
                                    <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h6><a href="#">Post Room Operative</a></h6>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>via</span>
                                                    <a href="employer-detail.html">LawnHopper</a>
                                                </li>
                                                <li><a class="part-time" href="#"><i class="fas fa-suitcase pe-1"></i>Part-Time</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-list">
                                <div class="job-list-logo">
                                    <img class="img-fluid" src="https://templates.hibootstrap.com/zoben/default/assets/images/recent-job/recent-job4.jpg" alt="">
                                </div>
                                <div class="job-list-details">
                                    <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h6><a href="#">Stockroom Assistant</a></h6>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>via</span>
                                                    <a href="employer-detail.html">Rippin LLC</a>
                                                </li>
                                                <li><a class="temporary" href="#"><i class="fas fa-suitcase pe-1"></i>Temporary</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-list">
                                <div class="job-list-logo">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 726 726">
                                        <path fill="#4D4D4D" d="M332.45 400.625l22.501-81.37c.683-2.276 2.039-3.187 4.321-3.187h18.179c2.505 0 3.644.911 4.328 3.187l23.184 81.827 20.223-66.375h-10.908c-2.277 0-3.415-1.128-3.415-3.405v-11.83c0-2.494 1.138-3.405 3.415-3.405h29.084c3.871 0 5.464 2.959 4.553 6.137l-31.37 103.187c-.674 2.277-2.039 3.188-4.315 3.188h-20.453c-2.275 0-3.642-.911-4.325-3.405l-21.591-80.242-22.5 80.459c-.684 2.277-2.05 3.188-4.316 3.188h-20.461c-2.272 0-3.638-.911-4.316-3.188l-24.778-90.684h-11.814c-2.277 0-3.415-1.128-3.415-3.405v-11.83c0-2.494 1.138-3.405 3.415-3.405h29.772c2.271 0 3.638.911 4.326 3.405l20.676 81.153z"></path>
                                        <path fill="#24BAC9" d="M477.723 542.344c-28.339-15.399-46.472-42.319-51.937-71.734-36.432 21.135-82.665 23.536-122.342 1.946-29.927-16.218-67.384-5.133-83.644 24.798-16.26 29.922-5.169 67.356 24.757 83.648 91.365 49.616 200.396 35.634 276.19-26.724-14.976-.891-29.734-4.74-43.024-11.934z"></path>
                                        <path fill="#F03955" d="M554.54 205.553c-.89 14.78-4.927 29.342-12.213 42.735-14.903 27.499-41.036 46.314-71.745 51.945 21.185 36.43 23.575 82.673 2.018 122.313-16.26 29.921-5.165 67.396 24.747 83.678 29.933 16.239 67.398 5.143 83.649-24.777 49.597-91.254 35.665-200.092-26.456-275.894z"></path>
                                        <path fill="#59B89C" d="M183.66 477.732c14.965-27.51 41.058-46.295 71.761-51.967-21.161-36.421-23.567-82.622-2.013-122.345 16.239-29.911 5.169-67.356-24.758-83.595-29.942-16.28-67.383-5.185-83.643 24.736-49.618 91.254-35.655 200.175 26.517 275.957.879-14.584 4.75-29.186 12.136-42.786z"></path>
                                        <path fill="#F09502" d="M481.447 145.018C390.079 95.36 281.052 109.384 205.26 171.72c14.96.9 29.755 4.751 43.024 11.954 28.333 15.4 46.477 42.269 51.957 71.744 36.437-21.195 82.665-23.557 122.316-2.007 29.933 16.249 67.39 5.174 83.649-24.757 16.26-29.963 5.195-67.376-24.759-83.636z"></path>
                                    </svg>
                                </div>
                                <div class="job-list-details mb-0">
                                    <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h6><a href="#">Research Administrator</a></h6>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>via</span>
                                                    <a href="employer-detail.html">Trophy and Sons</a>
                                                </li>
                                                <li><a class="full-time" href="#"><i class="fas fa-suitcase pe-1"></i>Full time</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=================================
      sidebar -->
        </div>
    </div>
</section>

<!--=================================feature-info-->
@endsection

<!-- JS script links only starts here -->
@push('js-scripts')
@include('layouts.partials.form_js')

@endpush
<!-- JS script links only ends here -->


@section('script')
<!-- Custom script links only starts here -->

<!-- Custom script links only ends here -->
@endsection