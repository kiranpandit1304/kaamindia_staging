<section>
    <div class="row">
        <div class="col-lg-6 bg-warning p-5">
            <h3 class="text-white text-center">Companies</h3>
            <div class="row">
                @foreach($company as $compnyList)
                <div class="col-sm-6 p-3 pb-0">

                    <div class="recent-job-card shadow-none comp bg-white">

                        <div class="content">
                            <div class="recent-job-img">
                                <a href="#">
                                    <img src="{{ asset('assets/images/company_default.png')}}" class="img-fluid" width="50" alt="Images">
                                </a>
                            </div>
                            <h5><a href="#">{{ ucfirst($compnyList->name) }}</a></h5>
                            <span class="pt-0 mt-0 d-flex  align-items-center">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <span class="">(42)</span>
                            </span>
                        </div>
                        <div class="job-sub-content mt-4">
                            @foreach ($compnyList->companyAddress as $value)
                            <span><i class="fas fa-map-marker-alt pe-1 text-primary"></i>{{ $value->city->name }} </span>
                            @endforeach
                            <span class="text-end">({{ $compnyList->count()}}) Job Posts</span>

                        </div>
                    </div>
                </div>
                @endforeach
                <div class="mx-auto text-center my-5">
                    <a href="#" class="btn btn-primary text-white mx-auto">View All Companies</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 bg-primary p-5">
            <h3 class="text-white text-center">What clients have to say</h3>

            <div class="row justify-content-center testimonialAlignment">
                <div class="col-lg-10">
                    <div class="owl-carousel owl-nav-top-center" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0">
                        <div class="item">
                            <div class="testimonial-item text-center">
                                <div class="avatar">
                                    <img src="{{ asset('assets/images/04.jpg')}}" class="img-fluid rounded-circle" alt="">

                                </div>
                                <div class="testimonial-content">
                                    <p class="text-white">Their turnaround time for fixing any issue is just a few minutes, and that is appreciable. Their Business Development Team is always there to help at any point in time. Thank you so much for all your effort.</p>
                                </div>
                                <div class="testimonial-name">
                                    <i class="fas fa-quote-left quotes"></i>
                                    <h6 class="mb-1 text-white">Felica Queen</h6>
                                    <span class="text-white">Product Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item text-center">
                                <div class="avatar">
                                    <img src="{{ asset('assets/images/02.jpg')}}" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p class="text-white">Kaam India is an excellent job portal. They value the resumes received through this channel. Magic Search and Power search are handy tools. They are delighted with their service.</p>
                                </div>
                                <div class="testimonial-name">
                                    <i class="fas fa-quote-left quotes"></i>
                                    <h6 class="mb-1 text-white">John Doe</h6>
                                    <span class="text-white">Graphic Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
</section>