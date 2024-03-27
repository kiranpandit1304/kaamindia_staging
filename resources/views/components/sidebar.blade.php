<div class="widget py-3 p-2 user-profile">

    <div class="ms-2" id="dateposted">
        <div class="widget-content">
            <ul class="list-unstyled lh-lg">
                <li><a href="{{ route('jobseeker.profile') }}" class="text-secondary text-uppercase user-prof height">My
                        Profile</a></li>
                <hr>

                <li><a href="{{ route('jobseeker.saveJob') }}" class="text-secondary text-uppercase user-prof height">Saved
                        Jobs</a></li>
                <hr>
                <li><a href="{{ route('jobseeker.appliedJob') }}" class="text-warning text-uppercase user-prof height">Applied Jobs</a></li>
                <hr>
                <li><a href="{{ route('jobseeker.changePassword') }}" class="text-secondary text-uppercase user-prof height">Change Password</a></li>
            </ul>
        </div>
    </div>
</div>