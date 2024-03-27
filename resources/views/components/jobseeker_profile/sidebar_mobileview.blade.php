<div class="filter-btn ms-sm-3 ms-2"> <a class="btn btn-outline-primary py-2 px-3 mt-3 collapsed" data-bs-toggle="collapse" href="#collapsefilter" role="button" aria-expanded="false" aria-controls="collapsefilter"><i class="fa fa-filter"></i>Filter </a>
</div>

</div>
<div class="collapse d-lg-none" id="collapsefilter" style="">
    <div class="widget py-3 p-2 user-profile ">
        <div class="ms-2" id="dateposted">
            <div class="widget-content">
                <ul class="list-unstyled lh-lg">
                    <li><a href="{{ route('jobseeker.profile') }}" class="{{ $page == 'profile' ? 'text-warning' : 'text-secondary' }} text-uppercase user-prof height">My Profile</a></li>
                    <hr>

                    <li><a href="{{ route('jobseeker.saveJob') }}" class="{{ $page == 'saved_job' ? 'text-warning' : 'text-secondary' }} text-uppercase user-prof height">Saved
                            Jobs</a></li>
                    <hr>
                    <li><a href="{{ route('jobseeker.appliedJob') }}" class="{{ $page == 'applied_job' ? 'text-warning' : 'text-secondary' }} text-uppercase user-prof height">Applied Jobs</a></li>
                    <hr>
                    <li><a href="{{ route('jobseeker.changePassword') }}" class="{{ $page == 'change_password' ? 'text-warning' : 'text-secondary' }} text-uppercase user-prof height">Change Password</a></li>
                </ul>
            </div>
        </div>
    </div>


</div>