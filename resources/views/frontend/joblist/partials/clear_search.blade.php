<style>
    .filterMargin {
        margin-top: 3.4rem;
    }

    #jobSearch .error {
        color: white !important;
    }

    .exp_wrapper {
        position: relative;
        width: 100%;
        background-color: #ffffff;
        border-radius: 10px;
    }

    .exp_container-slider {
        position: relative;
        height: 60px;
        width: 80%;
        margin: auto;
    }

    input[type="range"] {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 100%;
        outline: none;
        position: absolute;
        margin: auto;
        top: 7px;
        bottom: 0;
        background-color: transparent;
        pointer-events: none;
        font-size: 10px;
    }

    .exp_slider-track {
        width: 100%;
        height: 5px;
        position: absolute;
        margin: auto;
        top: 0;
        bottom: 0;
        background: linear-gradient(to right, rgb(218, 218, 229) 0%, rgb(242, 94, 32) 0%, rgb(242, 94, 32) 100%, rgb(218, 218, 229) 100%);
        border-radius: 5px;
    }

    input[type="range"]::-webkit-slider-runnable-track {
        -webkit-appearance: none;
        height: 5px;
    }

    input[type="range"]::-moz-range-track {
        -moz-appearance: none;
        height: 5px;
    }

    input[type="range"]::-ms-track {
        appearance: none;
        height: 5px;
    }

    input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        height: 1.7em;
        width: 1.7em;
        background-color: #1374a8;
        cursor: pointer;
        margin-top: -9px;
        pointer-events: auto;
        border-radius: 50%;
    }

    input[type="range"]::-moz-range-thumb {
        -webkit-appearance: none;
        appearance: none;
        height: 1.7em;
        width: 1.7em;
        cursor: pointer;
        border-radius: 50%;
        background-color: #3264fe;
        pointer-events: auto;
        border: none;
    }

    input[type="range"]::-ms-thumb {
        appearance: none;
        height: 1.7em;
        width: 1.7em;
        cursor: pointer;
        border-radius: 50%;
        background-color: #3264fe;
        pointer-events: auto;
    }

    input[type="range"]:active::-webkit-slider-thumb {
        background-color: #ffffff;
        border: 1px solid #3264fe;
    }

    .exp_values {
        background-color: #f25e20;
        width: 40%;
        position: relative;
        margin: auto;
        padding: 4px 0;
        border-radius: 5px;
        text-align: center;
        font-weight: 500;
        /* font-size: 25px; */
        color: #ffffff;
    }

    .exp_values:before {
        content: "";
        position: absolute;
        height: 0;
        width: 0;
        border-top: 10px solid #f25e20;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        margin: auto;
        bottom: -9px;
        left: 0;
        right: 0;
    }

    /* monthly --> */
    .monthly_values {
        background-color: #f25e20;
        width: 50%;
        position: relative;
        margin: auto;
        padding: 4px 0;
        border-radius: 5px;
        text-align: center;
        font-weight: 500;
        /* font-size: 25px; */
        color: #ffffff;
    }

    .monthly_values:before {
        content: "";
        position: absolute;
        height: 0;
        width: 0;
        border-top: 10px solid #f25e20;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        margin: auto;
        bottom: -9px;
        left: 0;
        right: 0;
    }

    .monthly_slider-track {
        width: 100%;
        height: 5px;
        position: absolute;
        margin: auto;
        top: 0;
        bottom: 0;
        border-radius: 5px;
        background: linear-gradient(to right, rgb(218, 218, 229) 0%, rgb(242, 94, 32) 0%, rgb(242, 94, 32) 100%, rgb(218, 218, 229) 100%);
    }

    .monthly_wrapper {
        position: relative;
        width: 100%;
        background-color: #ffffff;
        border-radius: 10px;
    }

    .monthly_container-slider {
        position: relative;
        height: 60px;
        width: 80%;
        margin: auto;
    }

    /* .widget-height:hover {
        background-color: #1275a8;
        color: white;
        transition: .3s ease-in-out;
    }

    .widget-height:hover>h6 {
        color: white;
    } */


    .widget-height {
        height: 65px;
        padding: 1rem;
    }

    .widget-content {
        padding-left: 1rem;
        padding-right: 1rem;
        margin: 5px 0px 10px !important;
    }

    .sidebarJobList {
        z-index: 999;
    }

    .sidebarJobList>div {
        background-color: #fff;
    }

    @media (max-width: 768px) {
        .sidebarJobList {
            display: none;
        }
    }

    .sidebarWidgets {
        z-index: 2;
        background: #fff;
        width: 100%;

    }

    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 99999;
        top: 0;
        left: 0;
        background-color: #fff;
        overflow-x: hidden;
        padding-top: 60px;
        transition: 0.5s;
    }

    .sidenav a {
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }


    /* Position and style the close button (top right corner) */
    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 12px;
        font-size: 36px;
        margin-left: 50px;
    }

    .widget-collapse>i {
        font-size: 14px;
    }


    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #1275a8;
    }

    .nav-link {
        color: #000;
    }

    .addto-playlists {
        height: 170px;
        overflow-y: scroll;
    }
</style>
<div class="row mb-lg-2 mb-0 align-items-center mt-lg-0 py-2 py-lg-0 my-1">
    <div class="col d-none d-xs-block">
        <div class="filter-btn ms-sm-3 ms-2"> <a class="btn btn-outline-primary py-2 px-3 mt-3 collapsed" data-bs-toggle="collapse" href="#collapsefilter" role="button" aria-expanded="false" aria-controls="collapsefilter"><i class="fa fa-filter"></i>Filter </a>
        </div>

    </div>
    <div class="col  d-xs-none">
        <div class="section-title mb-lg-2 mb-0 ms-2">
            <div id="clearSearchBtn" class="m-1 mt-2">
                <span class=" mb-0 pe-2">Showing<span class="text-warning mx-1">4</span>results for "web dev"</span>
                <button type="submit" id="clearButton" class="border-0 outline-0 bg-transparent py-2 ps-0"><a class="btn-outline-primary rounded-pill clear-btn">Clear Search</a></button>
            </div>
        </div>
    </div>
    <div class="col">
        <form class="form-inline" data-select2-id="6">
            <div class="d-sm-flex align-items-center mb-0 mx-2 me-3 justify-content-end" data-select2-id="5">
                <label class="me-2 mb-2 mb-sm-0">Date Posted :</label>
                <div class="short-by">
                    <select class=" form-control basic-select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option>Last hour</option>
                        <option>Last 24 hour</option>
                        <option> Last 7 days</option>
                        <option>Last 14 days</option>
                        <option>Last 30 days</option>
                    </select>
                </div>
            </div>
        </form>
    </div>



</div>
<div class="collapse bg-white d-lg-none position-absolute start-0 w-100 z-index-9" id="collapsefilter" style="">
    <div class="d-flex align-items-start border">
        <div class="nav flex-column nav-pills me-3 w-50 border-end" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link rounded-0 text-start border-bottom active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Job Type</button>
            <button class="nav-link rounded-0 text-start border-bottom" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Experience</button>
            <button class="nav-link rounded-0 text-start border-bottom" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Offered Monthly Salary</button>
            <button class="nav-link rounded-0 text-start border-bottom" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Gender</button>
            <button class="nav-link rounded-0 text-start border-bottom" id="v-pills-qualification-tab" data-bs-toggle="pill" data-bs-target="#v-pills-qualification" type="button" role="tab" aria-controls="v-pills-qualification" aria-selected="false">qualification</button>
            <button class="nav-link rounded-0 text-start" id="v-pills-working-tab" data-bs-toggle="pill" data-bs-target="#v-pills-working" type="button" role="tab" aria-controls="v-pills-working" aria-selected="false">Working type</button>
        </div>
        <div class="tab-content w-50 " id="v-pills-tabContent">
            <div class="tab-pane pt-3 fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="widget">
                    <div class="widget-content p-0">
                        <form>
                            <div class="form-check fulltime-job">
                                <small class="form-check-label user-prof ps-2">
                                    <input type="checkbox" class="form-check-input" name="job_type">
                                    Full Time</small>
                            </div>
                            <div class="form-check parttime-job">
                                <small class="form-check-label user-prof ps-2">
                                    <input type="checkbox" class="form-check-input" name="job_type">
                                    Part-Time</small>
                            </div>
                            <div class="form-check freelance-job">
                                <small class="form-check-label user-prof ps-2">
                                    <input type="checkbox" class="form-check-input" name="job_type">
                                    Freelance</small>
                            </div>
                            <div class="form-check temporary-job">
                                <small class="form-check-label user-prof ps-2">
                                    <input type="checkbox" class="form-check-input" name="job_type">
                                    Temporary</small>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
            <div class="tab-pane pt-3 fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="widget">
                    <div class="widget-content ps-0">
                        <div class="exp_wrapper my-2">
                            <div class="exp_values">
                                <span id="exp_range-1">
                                    0
                                </span>
                                <span> &dash; </span>
                                <span id="exp_range-2">
                                    20
                                </span>
                            </div>
                            <div class="exp_container-slider">
                                <div class="exp_slider-track"></div>
                                <input type="range" min="0" max="20" value="0" id="exp_slider-1" oninput="exp_slideOne()">
                                <input type="range" min="0" max="20" value="20" id="exp_slider-2" oninput="exp_slideTwo()">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane pt-3 fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="widget">
                    <div class="widget-content ps-0">
                        <div class="monthly_wrapper my-2">
                            <div class="monthly_values">
                                <span id="monthly_range1">
                                    0
                                </span>
                                <span> &dash; </span>
                                <span id="monthly_range2">
                                    200k
                                </span>
                            </div>
                            <div class="monthly_container-slider">
                                <div class="monthly_slider-track"></div>
                                <input type="range" min="0" max="200" value="0" id="monthly_slider-1" oninput="monthly_slideOne()">
                                <input type="range" min="0" max="200" value="200" id="monthly_slider-2" oninput="monthly_slideTwo()">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane pt-3 fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <div class="widget">
                    <div class="widget-content p-0">
                        <form>
                            <div class="form-check pt-1">
                                <small class="form-check-label user-prof ps-2">
                                    <input type="checkbox" class="form-check-input gender" name="male">
                                    Male</small>
                            </div>
                            <div class="form-check">
                                <small class="form-check-label user-prof ps-2">
                                    <input type="checkbox" class="form-check-input gender" name="female">
                                    Female</small>
                            </div>
                            <div class="form-check">
                                <small class="form-check-label user-prof ps-2">
                                    <input type="checkbox" class="form-check-input gender" name="any">
                                    Any</small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane pt-3 fade" id="v-pills-qualification" role="tabpanel" aria-labelledby="v-pills-qualification-tab">
                <div class="widget">
                    <div class="widget-content ps-0">
                        <div class="form-check p-0">
                            <form>
                                <div class="form-input">
                                    <input class="keyword form-control h-25" placeholder="Search here..." type="text">
                                </div>
                                <div class="addto-playlists mt-3">
                                    <ul class="list-unstyled">
                                        <li class="my-1">
                                            <label>
                                                <div class="form-check pt-1">
                                                    <small class="form-check-label user-prof ps-2">
                                                        <input type="checkbox" class="form-check-input">
                                                        Primary education
                                                    </small>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="my-1">
                                            <label>
                                                <div class="form-check pt-1">
                                                    <small class="form-check-label user-prof ps-2">
                                                        <input type="checkbox" class="form-check-input">
                                                        High school</small>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="my-1">
                                            <label>
                                                <div class="form-check pt-1">
                                                    <small class="form-check-label user-prof ps-2">
                                                        <input type="checkbox" class="form-check-input">
                                                        GED
                                                    </small>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="my-1">
                                            <label>
                                                <div class="form-check pt-1">
                                                    <small class="form-check-label user-prof ps-2">
                                                        <input type="checkbox" class="form-check-input">
                                                        Vocational qualification
                                                    </small>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="my-1">
                                            <label>
                                                <div class="form-check pt-1">
                                                    <small class="form-check-label user-prof ps-2">
                                                        <input type="checkbox" class="form-check-input">
                                                        Bachelor's degree
                                                    </small>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="my-1">
                                            <label>
                                                <div class="form-check pt-1">
                                                    <small class="form-check-label user-prof ps-2">
                                                        <input type="checkbox" class="form-check-input">
                                                        Master's degree
                                                    </small>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="my-1">
                                            <label>
                                                <div class="form-check pt-1">
                                                    <small class="form-check-label user-prof ps-2">
                                                        <input type="checkbox" class="form-check-input">
                                                        Doctorate or higher
                                                    </small>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane pt-3 fade" id="v-pills-working" role="tabpanel" aria-labelledby="v-pills-working-tab">
                <div class="widget">
                    <div class="widget-content p-0">
                        <form>
                            <div class="form-check pt-1">
                                <small class="form-check-label user-prof ps-2">
                                    <input type="checkbox" class="form-check-input" name="workFromOffice">
                                    Work From office</small>
                            </div>
                            <div class="form-check">
                                <small class="form-check-label user-prof ps-2">
                                    <input type="checkbox" class="form-check-input" name="workFromHome">
                                    Work From Home</small>
                            </div>
                            <div class="form-check">
                                <small class="form-check-label user-prof ps-2">
                                    <input type="checkbox" class="form-check-input" name="fieldJob">
                                    Field Jobs</sma>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <form class="d-flex justify-content-end pb-3 me-2">
        <a class="btn btn-primary btn-sm ">Apply</a>
    </form>
    <hr class="mt-0 bg-warning">

</div>

@section('responsive-fillter-script')
<script>
    // Slider Experience JS -- 

    let exp_sliderOne = document.getElementById("exp_slider-1");
    let exp_sliderTwo = document.getElementById("exp_slider-2");
    let exp_displayValOne = document.getElementById("exp_range-1");
    let exp_displayValTwo = document.getElementById("exp_range-2");
    let exp_minGap = 0;
    let exp_sliderTrack = document.querySelector(".exp_slider-track");
    let exp_sliderMaxValue = document.getElementById("exp_slider-1").max;

    function exp_slideOne() {
        if (parseInt(exp_sliderTwo.value) - parseInt(exp_sliderOne.value) <= exp_minGap) {
            exp_sliderOne.value = parseInt(exp_sliderTwo.value) - exp_minGap;
        }
        exp_displayValOne.textContent = exp_sliderOne.value;
        exp_fillColor();
    }

    function exp_slideTwo() {
        if (parseInt(exp_sliderTwo.value) - parseInt(exp_sliderOne.value) <= exp_minGap) {
            exp_sliderTwo.value = parseInt(exp_sliderOne.value) + exp_minGap;
        }
        exp_displayValTwo.textContent = exp_sliderTwo.value;
        exp_fillColor();
    }

    function exp_fillColor() {
        percent1 = (exp_sliderOne.value / exp_sliderMaxValue) * 100;
        percent2 = (exp_sliderTwo.value / exp_sliderMaxValue) * 100;
        exp_sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , #f25e20 ${percent1}% , #f25e20 ${percent2}%, #dadae5 ${percent2}%)`;
    }

    // Slider monthly JS -- 


    let monthly_sliderOne = document.getElementById("monthly_slider-1");
    let monthly_sliderTwo = document.getElementById("monthly_slider-2");
    let monthly_displayValOne = document.getElementById("monthly_range1");
    let monthly_displayValTwo = document.getElementById("monthly_range2");
    let monthly_minGap = 0;
    let monthly_sliderTrack = document.querySelector(".monthly_slider-track");
    let monthly_sliderMaxValue = document.getElementById("monthly_slider-1").max;

    function monthly_slideOne() {
        if (parseInt(monthly_sliderTwo.value) - parseInt(monthly_sliderOne.value) <= monthly_minGap) {
            monthly_sliderOne.value = parseInt(monthly_sliderTwo.value) - monthly_minGap;
        }
        monthly_displayValOne.textContent = monthly_sliderOne.value + "k";
        monthly_fillColor();
    }

    function monthly_slideTwo() {
        if (parseInt(monthly_sliderTwo.value) - parseInt(monthly_sliderOne.value) <= monthly_minGap) {
            monthly_sliderTwo.value = parseInt(monthly_sliderOne.value) + monthly_minGap;
        }
        monthly_displayValTwo.textContent = monthly_sliderTwo.value + "k";
        monthly_fillColor();
    }

    function monthly_fillColor() {
        percent1 = (monthly_sliderOne.value / monthly_sliderMaxValue) * 100;
        percent2 = (monthly_sliderTwo.value / monthly_sliderMaxValue) * 100;
        monthly_sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , #f25e20 ${percent1}% , #f25e20 ${percent2}%, #dadae5 ${percent2}%)`;
    }



    window.onload = function() {
        // Slider for monthly
        monthly_slideOne();
        monthly_slideTwo();
        // slider for experience 
        exp_slideOne();
        exp_slideTwo();
    };
</script>
@endsection