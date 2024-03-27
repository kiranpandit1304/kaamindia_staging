<!--=================================Banner -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-pause="hover">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <section class="banner bg-img text-white">
                <div class="container-fluid">
                    <div class="row justify-content-start align-items-center">
                        <div class="col-md-6 align-self-center positext-dark tion-relative"><br>
                            <h1 class="text-dark mb-2">Drop <span class="text-primary h1">Resume </span>& <span class="text-warning h1">Get Your</span> Desired Job</h1>
                            <div class="job-search-field my-3">
                                <div class="job-search-item">
                                    <form action="{{ route('jobList') }}" class="form row" id="job_search">
                                        <div class="col-lg-6 my-3">
                                            <div class="form-group">
                                                <div class="position-relative left-icon">
                                                    <input type="text" class="form-control border text-dark" name="job_title" placeholder="Job title, skill or company">
                                                    <i class="fas fa-search"></i>
                                                    <p class="position-absolute errorClr" id="job_title_err"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 my-3">
                                            <div class="form-group">
                                                <div class="position-relative left-icon">
                                                    <input type="text" class="border form-control location-input" name="job_location" placeholder="Town or city">
                                                    <i class="far fa-compass"></i>
                                                    <p class="position-absolute errorClr" id="job_location_err"></p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group form-action mb-3">
                                                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-search"></i> Find Jobs</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-lg-5 p-4 ms-0 ms-md-5 mt-4 mt-md-0">
                                <img src="{{ asset('assets/images/banner1.png')}}" class="w-100" alt="main_logo">
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>