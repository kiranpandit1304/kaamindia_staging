<style>
    .filterMargin {
        margin-top: 3.4rem;
    }

    #mySidebar {
        box-shadow: 0 0 4px 1px rgba(184, 184, 184, 0.41);
    }

    #jobSearch .error {
        color: white !important;
    }

    .wrapper {
        position: relative;
        width: 100%;
        background-color: #ffffff;
        border-radius: 10px;
    }

    .container-slider {
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

    .slider-track {
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

    .values {
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

    .values:before {
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

    /* Salary --> */
    .salary_values {
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

    .salary_values:before {
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

    .salary_slider-track {
        width: 100%;
        height: 5px;
        position: absolute;
        margin: auto;
        top: 0;
        bottom: 0;
        border-radius: 5px;
        background: linear-gradient(to right, rgb(218, 218, 229) 0%, rgb(242, 94, 32) 0%, rgb(242, 94, 32) 100%, rgb(218, 218, 229) 100%);
    }

    .salary_wrapper {
        position: relative;
        width: 100%;
        background-color: #ffffff;
        border-radius: 10px;
    }

    .salary_container-slider {
        position: relative;
        height: 60px;
        width: 80%;
        margin: auto;
    }



    .widget-height {
        height: 50px !important;
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

    .z-index-9 {
        z-index: 999999;
    }
</style>
<div class="position-relative" id="mySidebar">

    <div class="sidebarWidgets">
        <!-- position-absolute -->

        <div class="border-botttom border-top-0 border-end-0 border-start-0 p-3 m-3 border">
            <h4 class="p-0 m-0">Fillter</h4>
        </div>
        <div class="widget p-3 py-0">
            <a class="ms-auto text-dark click" data-bs-toggle="collapse" href="#jobtype" role="button" aria-expanded="false" aria-controls="jobtype">
                <div class="widget-height widget-collapse justify-content-between">
                    <h6 class="text-capitalize filter-font-size m-0 ">Job Type</h6>
                    <i class="fas fa-chevron-up icon"></i>
                </div>
            </a>
            <div class="collapse show" id="jobtype">
                <div class="widget-content">
                    <form>
                        <div class="form-check fulltime-job">
                            <label class="form-check-label user-prof">
                                <input type="checkbox" class="form-check-input" name="job_type">
                                Full Time</label>
                        </div>
                        <div class="form-check parttime-job">
                            <label class="form-check-label user-prof">
                                <input type="checkbox" class="form-check-input" name="job_type">
                                Part-Time</label>
                        </div>
                        <div class="form-check freelance-job">
                            <label class="form-check-label user-prof">
                                <input type="checkbox" class="form-check-input" name="job_type">
                                Freelance</label>
                        </div>
                        <div class="form-check temporary-job">
                            <label class="form-check-label user-prof">
                                <input type="checkbox" class="form-check-input" name="job_type">
                                Temporary</label>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <hr class="my-0 m-3">
        <div class="widget p-3 py-0">
            <a class="ms-auto text-dark click collapsed" data-bs-toggle="collapse" href="#experience" role="button" aria-expanded="false" aria-controls="experience">
                <div class="widget-height widget-collapse justify-content-between">
                    <h6 class="text-capitalize filter-font-size m-0">Experience (Yrs)</h6>
                    <i class="fas fa-chevron-up icon"></i>
                </div>
            </a>
            <div class="collapse" id="experience">
                <div class="px-2">

                    <div class="wrapper my-2">
                        <div class="values">
                            <span id="range1">
                                0
                            </span>
                            <span> &dash; </span>
                            <span id="range2">
                                20
                            </span>
                        </div>
                        <div class="container-slider">
                            <div class="slider-track"></div>
                            <input type="range" min="0" max="20" value="0" id="slider-1" oninput="slideOne()">
                            <input type="range" min="0" max="20" value="20" id="slider-2" oninput="slideTwo()">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <hr class="my-0 m-3">
        <div class="widget p-3 py-0">
            <a class="ms-auto text-dark  click collapsed" data-bs-toggle="collapse" href="#Offeredsalary" role="button" aria-expanded="false" aria-controls="Offeredsalary">
                <div class="widget-collapse widget-height justify-content-between">
                    <h6 class="text-capitalize filter-font-size m-0">Offered Monthly Salary</h6>
                    <i class="fas fa-chevron-up icon"></i>
                </div>
            </a>

            <div class="collapse" id="Offeredsalary">
                <div class="px-2">
                    <div class="salary_wrapper my-2">
                        <div class="salary_values">
                            <span id="salary_range1">
                                0
                            </span>
                            <span> &dash; </span>
                            <span id="salary_range2">
                                200k
                            </span>
                        </div>
                        <div class="salary_container-slider">
                            <div class="salary_slider-track"></div>
                            <input type="range" min="0" max="200" value="0" id="salary_slider-1" oninput="salary_slideOne()">
                            <input type="range" min="0" max="200" value="200" id="salary_slider-2" oninput="salary_slideTwo()">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <hr class="my-0 m-3">
        <div class="widget py-0 p-3">
            <a class="ms-auto widget text-dark click collapsed" data-bs-toggle="collapse" href="#gender" role="button" aria-expanded="false" aria-controls="gender">
                <div class="widget-height widget-collapse justify-content-between">
                    <h6 class="text-capitalize filter-font-size m-0">Gender</h6>
                    <i class="fas fa-chevron-up icon"></i>
                </div>
            </a>
            <div class="collapse" id="gender">
                <div class="widget-content">
                    <form>
                        <div class="form-check pt-1">
                            <label class="form-check-label user-prof">
                                <input type="checkbox" class="form-check-input gender" name="male">
                                Male</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label user-prof">
                                <input type="checkbox" class="form-check-input gender" name="female">
                                Female</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label user-prof">
                                <input type="checkbox" class="form-check-input gender" name="any">
                                Any</label>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <hr class="my-0 m-3">
        <div class="widget p-3 py-0">
            <a class="ms-auto text-dark click collapsed" data-bs-toggle="collapse" href="#qualification_field" role="button" aria-expanded="false" aria-controls="qualification_field">
                <div class="widget-height widget-collapse justify-content-between">
                    <h6 class="text-capitalize filter-font-size m-0">Qualification</h6>
                    <i class="fas fa-chevron-up icon"></i>
                </div>
            </a>
            <div class="collapse" id="qualification_field">
                <div class="widget-content position-relative">
                    <form>
                        <div class="form-check pt-1">
                            <label class="form-check-label user-prof">
                                <input type="checkbox" class="form-check-input " name="primary" id="select-all">
                                Primary education</label>
                        </div>
                        <div class="form-check pt-1">
                            <label class="form-check-label user-prof">
                                <input type="checkbox" class="form-check-input ">
                                High school</label>
                        </div>
                        <div class="form-check pt-1">
                            <label class="form-check-label user-prof">
                                <input type="checkbox" class="form-check-input ">
                                GED</label>
                        </div>
                        <div class="form-check pt-1">
                            <label class="form-check-label user-prof">
                                <input type="checkbox" class="form-check-input ">
                                Vocational qualification</label>
                        </div>
                        <div class="form-check pt-1">
                            <label class="form-check-label user-prof">
                                <input type="checkbox" class="form-check-input ">
                                Bachelor's degree</label>
                        </div>
                        <a class="btn btn-warning btn-sm text-white my-1" id="toastbtn">View all</a>
                        <div class="toast hide position-absolute top-0 end-0 z-index-9 bg-white">
                            <div class="toast-header">
                                <strong class="me-auto">Qualification</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
                            </div>
                            <div class="toast-body">
                                <form>
                                    <div class="form-input">
                                        <input class="keyword form-control h-25" placeholder="Search here..." type="text">
                                    </div>
                                    <div class="addto-playlists">
                                        <ul class="list-unstyled">
                                            <li class="my-1">
                                                <label>
                                                    <div class="form-check pt-1">
                                                        <label class="form-check-label user-prof">
                                                            <input type="checkbox" name="primary" class="form-check-input ">
                                                            Primary education</label>
                                                    </div>
                                                </label>
                                            </li>
                                            <li class="my-1">
                                                <label>
                                                    <div class="form-check pt-1">
                                                        <label class="form-check-label user-prof">
                                                            <input type="checkbox" class="form-check-input addcheckbox">
                                                            High school</label>
                                                    </div>
                                                </label>
                                            </li>
                                            <li class="my-1">
                                                <label>
                                                    <div class="form-check pt-1">
                                                        <label class="form-check-label user-prof">
                                                            <input type="checkbox" class="form-check-input addcheckbox">
                                                            GED</label>
                                                    </div>
                                                </label>
                                            </li>
                                            <li class="my-1">
                                                <label>
                                                    <div class="form-check pt-1">
                                                        <label class="form-check-label user-prof">
                                                            <input type="checkbox" class="form-check-input addcheckbox">
                                                            Vocational qualification</label>
                                                    </div>
                                                </label>
                                            </li>
                                            <li class="my-1">
                                                <label>
                                                    <div class="form-check pt-1">
                                                        <label class="form-check-label user-prof">
                                                            <input type="checkbox" class="form-check-input addcheckbox">
                                                            Bachelor's degree</label>
                                                    </div>
                                                </label>
                                            </li>
                                            <li class="my-1">
                                                <label>
                                                    <div class="form-check pt-1">
                                                        <label class="form-check-label user-prof">
                                                            <input type="checkbox" class="form-check-input addcheckbox">
                                                            Master's degree</label>
                                                    </div>
                                                </label>
                                            </li>
                                            <li class="my-1">
                                                <label>
                                                    <div class="form-check pt-1">
                                                        <label class="form-check-label user-prof">
                                                            <input type="checkbox" class="form-check-input addcheckbox">
                                                            Doctorate or higher</label>
                                                    </div>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="btn btn-primary btn-sm text-white my-1" id="toastbtn">Apply</a>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr class="my-0 m-3">
        <div class="widget py-0 p-3">
            <a class="ms-auto text-dark click collapsed" data-bs-toggle="collapse" href="#working_type" role="button" aria-expanded="false" aria-controls="working_type">
                <div class="widget-height widget-collapse justify-content-between">
                    <h6 class="text-capitalize filter-font-size m-0">Working Type</h6>
                    <i class="fas fa-chevron-up icon"></i>
                </div>
            </a>
            <div class="collapse" id="working_type">
                <div class="widget-content">
                    <form>
                        <div class="form-check pt-1">
                            <label class="form-check-label user-prof">
                                <input type="checkbox" class="form-check-input" name="workFromOffice">
                                Work From office</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label user-prof">
                                <input type="checkbox" class="form-check-input" name="workFromHome">
                                Work From Home</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label user-prof">
                                <input type="checkbox" class="form-check-input" name="fieldJob">
                                Field Jobs</label>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@section('fillter-script')
<script>
    (function($) {
        $(".keyword").on('keyup', function(e) {
            let $this = $(this);
            let exp = new RegExp($this.val(), 'i');
            $(".addto-playlists li label").each(function() {
                let $self = $(this);
                if (!exp.test($self.text())) {
                    $self.parent().hide();
                } else {
                    $self.parent().show();
                }
            });
        });
    })(jQuery);

    // Slider Experience JS -- 
    document.getElementById("toastbtn").onclick = function() {
        let toastElList = [].slice.call(document.querySelectorAll('.toast'))
        let toastList = toastElList.map(function(toastEl) {
            return new bootstrap.Toast(toastEl)
        })
        toastList.forEach(toast => toast.show())
    }
    let sliderOne = document.getElementById("slider-1");
    let sliderTwo = document.getElementById("slider-2");
    let displayValOne = document.getElementById("range1");
    let displayValTwo = document.getElementById("range2");
    let minGap = 0;
    let sliderTrack = document.querySelector(".slider-track");
    let sliderMaxValue = document.getElementById("slider-1").max;

    function slideOne() {
        if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
            sliderOne.value = parseInt(sliderTwo.value) - minGap;
        }
        displayValOne.textContent = sliderOne.value;
        fillColor();
    }

    function slideTwo() {
        if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
            sliderTwo.value = parseInt(sliderOne.value) + minGap;
        }
        displayValTwo.textContent = sliderTwo.value;
        fillColor();
    }

    function fillColor() {
        percent1 = (sliderOne.value / sliderMaxValue) * 100;
        percent2 = (sliderTwo.value / sliderMaxValue) * 100;
        sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , #f25e20 ${percent1}% , #f25e20 ${percent2}%, #dadae5 ${percent2}%)`;
    }


    // Slider Salary JS -- 


    let salary_sliderOne = document.getElementById("salary_slider-1");
    let salary_sliderTwo = document.getElementById("salary_slider-2");
    let salary_displayValOne = document.getElementById("salary_range1");
    let salary_displayValTwo = document.getElementById("salary_range2");
    let salary_minGap = 0;
    let salary_sliderTrack = document.querySelector(".salary_slider-track");
    let salary_sliderMaxValue = document.getElementById("salary_slider-1").max;

    function salary_slideOne() {
        if (parseInt(salary_sliderTwo.value) - parseInt(salary_sliderOne.value) <= salary_minGap) {
            salary_sliderOne.value = parseInt(salary_sliderTwo.value) - salary_minGap;
        }
        salary_displayValOne.textContent = salary_sliderOne.value + "k";
        salary_fillColor();
    }

    function salary_slideTwo() {
        if (parseInt(salary_sliderTwo.value) - parseInt(salary_sliderOne.value) <= salary_minGap) {
            salary_sliderTwo.value = parseInt(salary_sliderOne.value) + salary_minGap;
        }
        salary_displayValTwo.textContent = salary_sliderTwo.value + "k";
        salary_fillColor();
    }

    function salary_fillColor() {
        percent1 = (salary_sliderOne.value / salary_sliderMaxValue) * 100;
        percent2 = (salary_sliderTwo.value / salary_sliderMaxValue) * 100;
        salary_sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , #f25e20 ${percent1}% , #f25e20 ${percent2}%, #dadae5 ${percent2}%)`;
    }


    window.onload = function() {

        // Slider for salary
        salary_slideOne();
        salary_slideTwo();

        // slider for experience 
        slideOne();
        slideTwo();
    };
</script>
@endsection