@section('style')

<style>
    .dropdown-menu.show {
        position: relative;
    }

    .company-logo {
        max-height: 8rem !important;
    }

    /* #sidenav-main {
        transition: transform 3000ms ease-in !important;
    } */
</style>
@endsection

<aside class="g-sidenav-show aside-bar d-xl-block sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl fixed-start  text-dark" id="sidenav-main">
    <div class=" sidenav-header">

        <a class="navbar-brand bg-white m-0" href="{{ route('home') }}" target="_blank">
            <img src="{{ asset('assets/images/kaamindia-logo.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="ms-0 nav-link text-dark {{ Request::routeIs('employer.dashboard') ?  "active" : "" }}" href="{{route('employer.dashboard')}}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1 ">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="ms-0 nav-link text-dark {{ Request::routeIs('employer.profile') ?  "active" : "" }}" href="{{route('employer.profile')}}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="ms-0 nav-link text-dark  {{ Request::routeIs('employer.company.*') ?  "active" : "" }}" href="{{ route('employer.company.show') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Company</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="ms-0 nav-link text-dark  {{ Request::routeIs('employer.job.jopApplications') ?  "active" : "" }}" href="{{ route('employer.job.jopApplications') }}">
                    <div class="text-dark text-center me-2 ms-1 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user-tie" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-2">Applications</span>

                </a>
            </li>
            <li class="nav-item">
                <a class="ms-0 nav-link text-dark  {{ Request::routeIs('employer.job.index') ?  "active" : "" }}" href="{{ route('employer.job.index') }}">
                    <div class="text-dark text-center me-2 ms-1 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user-tie" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-2">Jobs</span>

                </a>
            </li>
            <li class="nav-item">
                <a class="ms-0 nav-link text-dark   {{ Request::routeIs('employer.job.create') ?  "active" : "" }}" href="{{ route('employer.job.create') }}">
                    <div class="text-dark text-center ms-1 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <span class="nav-link-text ms-2">Post Job</span>

                </a>
            </li>
            <li class="nav-item">
                <div class="nav-link text-dark ps-3 ms-0">
                    <div class="text-dark text-center  me-2 ms-1 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">logout</i>
                        <form id="logout_form" action="{{ route('auth.logout') }}" method="post">
                            @csrf
                            <a href="javascript:{}" class="ms-2" onclick="document.getElementById('logout_form').submit();">Logout</a>
                        </form>
                    </div>

                </div>
            </li>
            <hr>
        </ul>
        <div class="text-center p-4 position-fixed bottom-0 mx-4">
            <a href="{{ route('employer.company.show') }}">
                <div><i class="fa fa-building icon"></i></div>
                <div>
                    <div class="fw-bold">{{ Session::get('company_name') }}</div>
                    <div>{{ Session::get('company_email') }}</div>
                </div>
            </a>
        </div>
    </div>
</aside>