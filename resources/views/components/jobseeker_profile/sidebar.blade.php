<div class="widget py-3 p-2 user-profile">

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