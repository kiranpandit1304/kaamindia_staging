<!--=================================
header -->
<header class="header bg-white shadow-sm">
    <nav class="navbar navbar-static-top navbar-expand-lg header-sticky ">
        <div class="container-fluid">
            <button id="nav-icon4" type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class="img-fluid h-auto" src="{{ asset('assets/images/kaamindia-logo.png')}}" alt="logo">
            </a>
            <div class="navbar-collapse collapse justify-content-start">
                <ul class="nav navbar-nav">
                    <!-- <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('home') }}" role="button">Home</a>
                    </li> -->
                    <li class="nav-item dropdown d-xs-none">
                        <a class="nav-link" href="{{ route('jobList') }}" id="navbarDropdown" role="button">Jobs<i class="fas fa-chevron-down fa-xs"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Recommended jobs</a></li>
                            <li><a class="dropdown-item" href="#">Jobs from recruiters</a></li>
                            <li><a class="dropdown-item" href="#">Jobs from alerts</a></li>
                            <li><a class="dropdown-item" href="#">Application status</a></li>
                            <li><a class="dropdown-item" href="#">Saved jobs</a></li>
                        </ul>
                    </li>
                    <ul class="d-none d-xs-block list-unstyled">
                        <li class="nav-item main"><a class="nav-link" href="{{ route('jobList') }}">Jobs</a></li>
                        <li class="nav-item main"><a class="nav-link" href="#">Recommended jobs</a></li>
                        <li class="nav-item main"><a class="nav-link" href="#">Jobs from recruiters</a></li>
                        <li class="nav-item main"><a class="nav-link" href="#">Jobs from alerts</a></li>
                        <li class="nav-item main"><a class="nav-link" href="#">Application status</a></li>
                        <li class="nav-item main"><a class="nav-link" href="#">Saved jobs</a></li>
                        <li class="my-2 ps-3"><a class="px-2 text-dark btn btn-warning btn-sm text-white" href="#" role="button">Apply Jobs</a></li>
                        <li class="my-2 ps-3"><a class="px-2 text-dark btn btn-primary btn-sm text-white" href="{{ route('employer.job.create') }}" role="button">Post Jobs</a></li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-dark" data-bs-toggle="modal" data-bs-target="#sign_in_modal">Sign in</a>
                        </li>
                    </ul>




                </ul>
            </div>
            <div class="add-listing">
                <ul class="nav navbar-nav flex-row-reverse">
                    <li class="nav-item dropdown align-items-center">
                        @if(Auth::guard("web")->check())
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->full_name }}</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ route('employer.profile') }}">Profile</a></li>
                            <li>
                                <form id="logout_form" action="{{ route('auth.logout') }}" method="post">
                                    @csrf
                                    <a href="javascript:{}" onclick="document.getElementById('logout_form').submit();">Logout</a>
                                </form>
                            </li>
                        </ul>
                        @elseif(Auth::guard("jobseeker")->check())
                        <span class=""><i class="fas fa-user text-warning"></i></span>

                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::guard('jobseeker')->user()->full_name }}</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ route('jobseeker.profile') }}">My Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('jobseeker.saveJob') }}">Saved Jobs</a></li>
                            <li><a class="dropdown-item" href="{{ route('jobseeker.appliedJob') }}">Applied Jobs</a></li>
                            <li><a class="dropdown-item pwd-chg" href="{{ route('jobseeker.changePassword') }}">Change Password</a></li>

                            <li>
                                <form id="logout_form" action="{{ route('auth.logout') }}" class="logout" method="post">
                                    @csrf
                                    <a href="javascript:{}" class="form dropdown-item" onclick="document.getElementById('logout_form').submit();">Logout</a>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

            @else
            <div class="add-listing" id="sign1">
                <a class="text-dark btn btn-warning btn-sm text-white" href="#" role="button">Apply Jobs</a>
                <a class="text-dark btn btn-primary btn-sm text-white" href="{{ route('employer.job.create') }}" role="button">Post Jobs</a>
                <a href="#" class="text-dark ps-1" data-bs-toggle="modal" data-bs-target="#sign_in_modal"><i class="far fa-user pe-2 text-dark"></i>Sign in</a>
            </div>
            @endif
        </div>
    </nav>
</header>
<!--=================================
header -->