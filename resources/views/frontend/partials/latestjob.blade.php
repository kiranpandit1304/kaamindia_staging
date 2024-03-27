<!-- Jobs Section -->
<section class="py-5 pt-0">
    <div class="container">
        <h3 class="mb-3 text-center py-5">Latest Jobs</h3>
        <div class="row pt-45 justify-content-center">
            <div class="position-relative">
                <div class="position-absolute bg">
                    <img src="{{ asset('assets/images/edg.png')}}" class="navbar-brand-img w-50" alt="main_logo">
                </div>
            </div>

            <!-- Job list for web view starts here -->
            <x-joblist.joblist_card />
            <x-joblist.joblist_card />
            <x-joblist.joblist_card />
            <x-joblist.joblist_card />

            <div class="mx-auto text-center my-5 my-3">
                <a href="{{ route('jobList') }}" class="btn btn-primary text-white mx-auto">View All Jobs</a>

            </div>

        </div>
        <div class="position-relative">
            <div class="position-absolute bg1">
                <img src="{{ asset('assets/images/edg1.png')}}" class="navbar-brand-img w-75" alt="main_logo">
            </div>
        </div>
</section>