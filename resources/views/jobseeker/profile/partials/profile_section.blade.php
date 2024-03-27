@section('profile-style')
<style>
    /* Profile Image -- */



    .avatar-upload {
        position: relative;
        max-width: 155px;
    }

    .avatar-upload .avatar-edit {
        position: absolute;
        right: 15px;
        z-index: 1;
        top: 2px;
    }

    .avatar-upload .avatar-edit input {
        display: none;
    }

    .avatar-upload .avatar-edit input+label {
        display: inline-block;
        width: 34px;
        height: 34px;
        margin-bottom: 0;
        border-radius: 100%;
        background: #FFFFFF;
        border: 3px solid transparent;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        font-weight: normal;
        transition: all 0.2s ease-in-out;
    }

    .avatar-upload .avatar-edit input+label:hover {
        background: #f1f1f1;
        border-color: #d6d6d6;
    }

    .avatar-upload .avatar-edit input+label:after {
        /* content: "\"; */

        /* font-family: 'FontAwesome'; */
        color: #757575;
        position: absolute;
        top: 10px;
        left: 0;
        right: 0;
        text-align: center;
        margin: auto;
    }

    .avatar-upload .avatar-preview {
        width: 130px;
        height: 130px;
        position: relative;
        border-radius: 100%;
        border: 6px solid #F8F8F8;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
    }

    .avatar-upload .avatar-preview>div {
        width: 100%;
        height: 100%;
        border-radius: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }



    /* Progress -- */

    .progress2-container {
        box-shadow: 0 4px 5px rgb(0, 0, 0, 0.1)
    }

    .progress2-container,
    .progress2 {
        background-color: #eee;
        border-radius: 5px;
        position: relative;
        height: 7px;
        width: 90%;
    }

    .progress2 {
        background-color: #f25e20;
        width: 0;
        transition: width 1s linear;
    }

    .percentage {
        background-color: #f25e20;
        border-radius: 5px;
        box-shadow: 0 4px 5px rgb(0, 0, 0, 0.2);
        color: #fff;
        font-size: 12px;
        padding: 4px;
        position: absolute;
        top: 20px;
        left: 0;
        transform: translateX(-50%);
        width: 40px;
        text-align: center;
        transition: left 1s linear;
    }

    .percentage::after {
        background-color: #f25e20;
        content: '';
        position: absolute;
        top: -5px;
        left: 50%;
        transform: translateX(-50%) rotate(45deg);
        height: 10px;
        width: 10px;
        z-index: -1;
    }

    .verifyEmail {
        background: #ffffff;
        color: #1275a8;
        border-radius: 50rem !important;
        /* border: 2px solid #1275a8; */
    }

    .crossIconEmail,
    .crossIconNumber {
        width: 40px;
        height: 40px;
        font-size: 20px;
        text-align: center;
        cursor: pointer;
        padding-top: 9px;
        color: #fff;
        border-radius: 0 7px 7px 0;
        background: #f25e20;
        border: 1px solid #f25e20 !important;
    }

    .availToJoin {
        background-color: #1275a8;
        color: #fff;
        transition: 0.1s linear;
    }

    .availToJoinBorder {
        border: 1px solid #1275a8 !important;
        border-radius: 4px;
    }



    @media (max-width: 620px) {
        .col-xs-4 {
            flex: 0 0 auto;
            width: 40%;
        }

        .col-xs-8 {
            flex: 0 0 auto;
            width: 60%;
        }
    }
</style>
@endsection
<section class="">
    <div class="container-fluid blue-bg-clr p-3 py-4">
        <div class="row m-0 justify-content-center">
            <div class="avatar-upload">
                <!-- <div class="avatar-edit">
                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                    <div class="bg-white p-3 rounded-circle w-100 h-100 d-flex justify-content-center align-items-center"><i class="fa text-dark"></i></div>
                </div> -->
                <div class="avatar-edit">
                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload"><i class="fas fa-camera p-2"></i></label>
                </div>
                <div class="avatar-preview">
                    @if (file_exists(storage_path('app/public/assets/photo/jobseeker/'.$jobseeker->profile_pic)))
                        <div id="imagePreview" style="background-image: url({{ url("../storage/app/public/assets/photo/jobseeker/".$jobseeker->profile_pic) }});"> </div>
                    @else
                        <div id="imagePreview" style="background-image: url('http://i.pravatar.cc/500?img=7');"> </div>
                    @endif
                </div>
            </div>
            <div class="col-md-5">
                <!-- <div class="d-flex flex-wrap align-items-center mt-2"> -->
                <div class="row">
                    <h2 class="mb-0 title-showJob text-white">{{ $jobseeker->full_name }}
                        <!-- <x-test /> use to create a components -->
                        <span>
                            <a href="" class="ps-2" data-bs-toggle="modal" data-bs-target="#profileEdit-modal" onclick="loadModal()"><i class="fas fa-edit fs-5 text-white"></i></a>
                        </span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="list-unstyled pt-2 text-white">
                            <li class="align-items-center d-flex py-1"><i class="fas fa-map-marker-alt pe-1"></i> <a href="" data-bs-toggle="modal" data-bs-target="#profileEdit-modal"><small class="ps-2 text-white"> Add Location</small></a> </li>
                            <li class="align-items-center d-flex py-1 "><i class="fas fa-briefcase fa-fw"></i><a href="" data-bs-toggle="modal" data-bs-target="#profileEdit-modal"><small class="ps-2  text-white fnt">Fresher</small></a></li>
                            <li class="align-items-center d-flex py-1"><i class="fas fa-calendar fa-flip-horizontal fa-fw"></i>
                                <a href="" data-bs-toggle="modal" data-bs-target="#profileEdit-modal"><small class="ps-2 fnt text-white">Add availability to join</small> </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-6">
                        <ul class="list-unstyled pt-2 text-white">
                            <li class="align-items-center d-flex py-1 "><i class="fas fa-phone fa-flip-horizontal fa-fw"></i><small class="ps-2  text-white fnt">9998887771</small> <i class="fa fa-check ms-5" aria-hidden="true"></i> </li>
                            <li class="align-items-center d-flex py-1"><i class="fas fa-envelope fa-flip-horizontal fa-fw"></i><small class="ps-2 fnt text-white">geek@geek.com</small> <button type="submit" id="clearButton" class="border-0 outline-0 bg-transparent ms-1 p-2"><a class="verifyEmail px-2" id="verifyBtn">Verify</a></button></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="text-white p-0">Profile Completed</div>
                    <div class="progress2-container p-0 mt-1" data-percentage='90'>
                        <div class="progress2"></div>
                        <div class="percentage">0%</div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
            <!-- <div class="col-md-4 my-3 btn-warning d-xs-none">
                <div class="p-3">
                    <h4 class="text-white">7 Pending Action(s)</h4>
                    <ul class="list-unstyled pt-2 text-white mb-0">
                        <li class="pt-1 "><a href="" target="_blank"><span class="text-white fnt">Verify Email</span></a></li>
                        <li class="pt-1 "><a href="" target="_blank"><span class="text-white fnt">Add Resume</span></a></li>
                        <li class="pt-1"><a href=""><span class="fnt text-white">Add Projects</span></a></li>
                        <li><a href="" class="float-end pb-2"><span class="fnt text-white">View All</span></a></li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!--================================= Basic detail Modal Popup -->
<div class="modal fade" id="profileEdit-modal" role="dialog" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
        <div class="modal-content scrollbar mx-2 border-0 " id="display">
            <div class="modal-header p-3 bg-primary">
                <h4 class="mb-0 text-left text-white">Basic Details</h4>
            </div>
            <div class="modal-body  position-relative p-0 basic-details-modal">
                <div class="login-register overflow-hidden">
                    <div class="">
                        <div class="" role="tabpanel">
                            <div class="row m-lg-5 justify-content-center">
                                <form action="" class="" method="POST" id="basic_details" role="form">
                                    @csrf
                                    <div class="row justify-content-center modalShadow p-4 align-items-center g-2" id="">
                                        <div class="row g-2 justify-content-center">
                                            <div class="col-lg-4">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">First name<em class="text-danger">*</em></label>
                                                    <input type="text" value="{{ $jobseeker->first_name }}" id="firstName"
                                                        onkeypress="return /[a-z]/i.test(event.key)" name="first_name"
                                                        class="border form-control w-100" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group mb-2">
                                                    <div class="position-relative">
                                                        <label class="form-label ms-0">Middle name</label>
                                                        <input type="text" name="middle_name"
                                                            onkeypress="return /[a-z]/i.test(event.key)"
                                                            class="border form-control w-100" placeholder="Middle Name"
                                                            value="{{ $jobseeker->middle_name }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group mb-2">
                                                    <div class="position-relative">
                                                        <label class="form-label ms-0">Last name</label>
                                                        <input type="text" name="last_name"
                                                            onkeypress="return /[a-z]/i.test(event.key)"
                                                            class="border form-control w-100" placeholder="Last Name"
                                                            value="{{ $jobseeker->last_name }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-sm-6">
                                                <div class="form-group  mb-2">
                                                    <label class="form-label ms-0" for="mobile_number">Mobile number <span
                                                            onclick="numberEdit();"><i class="ps-1 fa fa-edit cursor"
                                                                id="numberEdit"></i> </span>
                                                        <p class="text-dark mb-0" id="oldNumber">9998887771
                
                                                        </p>
                                                    </label>
                
                                                </div>
                                                <div class="" id="newNumber">
                                                    <div class="form-group">
                                                        <div class="position-relative d-flex">
                                                            <div class="col-10">
                                                                <input type="text" onkeypress="return /[0-9]/i.test(event.key)"
                                                                    maxlength="10" minlength="10" name="mobile_number"
                                                                    value="{{ $jobseeker->mobile_number }}"
                                                                    class=" border-end-0  form-control rounded-0 rounded-start"
                                                                    placeholder="Enter mobile number">
                                                            </div>
                                                            <div class="col-2">
                                                                <i class="fa fa-times w-100 crossIconNumber"
                                                                    id="crossIconNumber"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label ms-0">Email address <span onclick="emailEdit();"><i
                                                                class="ps-1 fa fa-edit cursor" id="emailEdit"></i> </span>
                                                        <p class="text-dark mb-0" id="oldEmail">xeam.php2@gmail.com
                
                                                        </p>
                                                    </label>
                                                    <!-- <div class="btn p-2" > </div> -->
                                                </div>
                                                <div class="" id="newEmail">
                                                    <div class="form-group">
                                                        <div class="position-relative d-flex">
                                                            <div class="col-10">
                                                                <input type="email" name="email"
                                                                    class="border border-end-0  form-control rounded-0 rounded-start"
                                                                    placeholder="Enter your new email"
                                                                    value="{{ $jobseeker->email }}">
                                                            </div>
                                                            <div class="col-2">
                                                                <i class="fa fa-times w-100 crossIconEmail" id="crossIconEmail"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                
                                        <div class="col-sm-12">
                                            <div class="form-group mb-2">
                                                <label class="form-label ms-0"></label><br>
                                                <div class="d-flex flex-warp mt-1">
                                                    <label
                                                        class="switchBtn1 text-center rounded-start border-warning cursor w-100 py-2 @if ($jobseeker->experience_type == 'fresher') fieldActive @endif"
                                                        id="fresher">
                                                        <input type="radio" name="experience_type" class="radio fresher empType"
                                                            value="fresher">Fresher
                                                    </label>
                                                    <label
                                                        class="switchBtn1 text-center  rounded-end border-warning w-100 cursor py-2 @if ($jobseeker->experience_type == 'experienced') fieldActive @endif"
                                                        id="expee">
                                                        <input type="radio" class="radio experience empType"
                                                            name="experience_type" value="experienced">Experienced
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                
                                        <div class="col-lg-12 total_exp" id="noticePeriod1">
                                            <div class="form-group mb-2">
                                                <div class="position-relative">
                                                    <label class="form-label ms-0" for="mobile_number">Total experience<em
                                                            class="text-danger">*</em></label>
                                                    <div class="row g-2">
                                                        <div class="col-6">
                                                            <select id="expYears"
                                                                class="js-example-placeholder-single web-select2"
                                                                data-placeholder="select year" name="exp_years">
                                                                <!-- <select class="form-select" name="project_role"> -->
                                                                <option value="" disabled selected></option>
                                                                <option value="0" @if ($jobseeker->experience_year == '0') selected @endif>0 Years</option>
                                                                <option value="1" @if ($jobseeker->experience_year == '1') selected @endif>1 Year</option>
                                                                <option value="2" @if ($jobseeker->experience_year == '2') selected @endif>2 Years</option>
                                                                <option value="3" @if ($jobseeker->experience_year == '3') selected @endif>3 Years</option>
                                                                <option value="4" @if ($jobseeker->experience_year == '4') selected @endif>4 Years</option>
                                                                <option value="5" @if ($jobseeker->experience_year == '5') selected @endif>5 Years</option>
                                                                <option value="6" @if ($jobseeker->experience_year == '6') selected @endif>5+ Years</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <select class="js-example-placeholder-single web-select2"
                                                                data-placeholder="select month" name="exp_month">
                                                                <option value="" disabled selected></option>
                                                                <option value="0" @if ($jobseeker->experience_month == '0') selected @endif>0 Months</option>
                                                                <option value="1" @if ($jobseeker->experience_month == '1') selected @endif>1 Month</option>
                                                                <option value="2" @if ($jobseeker->experience_month == '2') selected @endif>2 Months</option>
                                                                <option value="3" @if ($jobseeker->experience_month == '3') selected @endif>3 Months</option>
                                                                <option value="4" @if ($jobseeker->experience_month == '4') selected @endif>4 Months</option>
                                                                <option value="5" @if ($jobseeker->experience_month == '5') selected @endif>5 Months</option>
                                                                <option value="6" @if ($jobseeker->experience_month == '6') selected @endif>6 Months</option>
                                                                <option value="7" @if ($jobseeker->experience_month == '7') selected @endif>7 Months</option>
                                                                <option value="8" @if ($jobseeker->experience_month == '8') selected @endif>8 Months</option>
                                                                <option value="9" @if ($jobseeker->experience_month == '9') selected @endif>9 Months</option>
                                                                <option value="10" @if ($jobseeker->experience_month == '10') selected @endif>10 Months</option>
                                                                <option value="11" @if ($jobseeker->experience_month == '11') selected @endif>11 Months</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 total_exp" id="noticePeriod3">
                                            <div class="form-group mb-2">
                                                <div class="position-relative">
                                                    <label class="form-label ms-0" for="mobile_number">Current salary<em
                                                            class="text-danger">*</em></label>
                                                    <div class="row g-2">
                                                        <div class="col-6">
                                                            <select class="js-example-placeholder-single web-select2"
                                                                data-placeholder="select salary" name="salary_type" id="salary_type">
                                                                <option value="" disabled selected></option>
                                                                <option value="yearly" @if ($jobseeker->salary_type == 'yearly') selected @endif>Yearly</option>
                                                                <option value="monthly" @if ($jobseeker->salary_type == 'monthly') selected @endif>Monthly</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="text" onkeypress="return /[0-9]/i.test(event.key)"
                                                                name="salary_amount" class="border form-control w-100"
                                                                id="" placeholder="Eg. 4,50,000" value="{{ $jobseeker->salary }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 m-0 mt-2" id="">
                                            <h6 class="form-label m-0">Current location</h6>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-6" id="">
                                                <label class="form-label ms-0">State<em class="text-danger">*</em></label>
                                                <select class="js-example-placeholder-single web-select2"
                                                    data-placeholder="select state" name="state" id="state">
                                                    <option value="" disabled selected></option>
                                                    @foreach ($states as $state)
                                                        <option value="{{ $state->id }}"
                                                           >{{ $state->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-6" id="">
                                                <label class="form-label ms-0">City<em class="text-danger">*</em></label>
                                                <input type="hidden" id="selectedcity" value="0">
                                                <select class="js-example-placeholder-single web-select2 filter-city"
                                                    data-placeholder="select city" name="city" id="city">
                                                    <option value="" disabled selected></option>
                                                    @foreach ($cities as $city)
                                                        <option value="{{ $city->id }}"
                                                            @if ($jobseeker->city == $city->id) selected @endif>{{ $city->name }}
                                                        </option>
                                                    @endforeach
                                                    {{-- <option value="{{ $value->city->id }}">{{$value->city->name}}</option> --}}
                                                </select>
                                            </div>
                
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-2">
                                                <label class="labeltext form-label">Availability to join</label><br>
                                                <label class="position-relative my-1">
                                                    <div
                                                        class="border fifteendays availToJoinBorder cursor p-2 py-2 w-auto @if ($jobseeker->availability == '15 days or less') availToJoin @endif">
                                                        <input type="radio" name="availability" class="radio"
                                                            value="15 days or less">15 days or less</div>
                                                </label>
                                                <label class="">
                                                    <div
                                                        class="border onemonth availToJoinBorder p-2 cursor py-2 w-auto @if ($jobseeker->availability == '1 month') availToJoin @endif">
                                                        <input type="radio" name="availability" class="radio"
                                                            value="1 month">1 month</div>
                                                </label>
                                                <label class="">
                                                    <div
                                                        class="border twomonth availToJoinBorder p-2 cursor py-2 w-auto @if ($jobseeker->availability == '2 month') availToJoin @endif">
                                                        <input type="radio" name="availability" class="radio"
                                                            value="2 month">2 months</div>
                                                </label>
                                                <label class="">
                                                    <div
                                                        class="border threemonth availToJoinBorder p-2 cursor py-2 w-auto @if ($jobseeker->availability == '3 month') availToJoin @endif">
                                                        <input type="radio" name="availability" class="radio"
                                                            value="3 month">3 months</div>
                                                </label>
                                                <label class="">
                                                    <div
                                                        class="border threeplusmonth availToJoinBorder p-2 cursor py-2 w-auto @if ($jobseeker->availability == '3+ month') availToJoin @endif">
                                                        <input type="radio" name="availability" class="radio"
                                                            value="3+ month">3+ months</div>
                                                </label>
                                            </div>
                                            <!-- <p id="availability_err" class="m-0"></p> -->
                                        </div>
                                        <!-- <div class="col-md-12 mt-2">
                                            <div class="text-center">
                                                <button type="submit" name="" value="" style="font-weight:400;" class="btn btn-primary btn-sm p-2 ">Save</button>
                                                <button type="button" onclick="apply();" name="cancel" data-bs-dismiss="modal" class="bg-overlay-black-20 btn btn-sm p-2 rounded-pill text-body" style="color:#fff; ">Cancel</button>
                                            </div>
                                        </div> -->
                                        <div class="col-md-12 mt-2">
                                            <div class="text-center">
                                                <input type="hidden" name="update" class="border form-control w-100" value="update">
                                                <input type="hidden" name="role" class="border form-control w-100" value="jobseeker">
                                                <button type="submit" style="font-weight:400;"
                                                    class="btn btn-primary btn-sm p-2" id="submit">Save</button>
                                                <button type="button" name="cancel"
                                                    onclick="confirmCancelForm($(this), $('#detailModal'), $('#profileEdit-modal'))"
                                                    class="bg-overlay-black-20 btn btn-sm p-2 rounded-pill text-body cancel"
                                                    style="color:#fff; font-weight:400;">Cancel</button>
                                            </div>
                                            <div id="detailModal" class="text-center confirmcanscel" style="display: none">
                                                <p>Are you really want to cancel this form as it will erase all the filled data?</p>
                                                <button type="button" class="btn btn-sm bg-primary text-white"
                                                    onclick="closeEduModal($(this))" data-bs-dismiss="modal">Yes</button>
                                                <button type="button" class="btn btn-sm bg-warning text-white no"
                                                    onclick="notCloseEduModal($(this))">No</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute bottom-0 start-0" style="z-index: -1;">
                <img src="{{ asset('assets/images/bg4.svg')}}" class="navbar-brand-img" alt="main_logo">
            </div>
            <button type="button" class="btn-close close-btn abs-position cancel" onclick="confirmCancelForm($(this), $('#detailModal'), $('#profileEdit-modal'))" aria-label="Close"></button>
        </div>
    </div>
</div>


@section('profile-script')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    function loadModal() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });
        $.ajax({
            url: "{{ route('jobseeker.loadBasicDetailsModal') }}",
            type: 'GET',
            datatype: 'JSON',
            success: (response) => {
                var result = JSON.parse(response);
                console.log(result.jobseeker);
                $("#newNumber").hide();
                $("#newEmail").hide();
                $("#numberEdit").show();
                $("#emailEdit").show();
                $("#firstName").val(result.jobseeker.first_name);
                $("input[name=\"middle_name\"]").val(result.jobseeker.middle_name);
                $("input[name=\"last_name\"]").val(result.jobseeker.last_name);
                $("#selectedcity").val(result.jobseeker.city);
                $("input[name=\"mobile_number\"]").val(result.jobseeker.mobile_number);
                $("input[name=\"email\"]").val(result.jobseeker.email);
                
                $("#state").val(result.jobseeker.state).trigger('change');
                $(".availToJoinBorder").removeClass('availToJoin');
                if(result.jobseeker.availability == '2 month')
                {
                    $(".twomonth").addClass('availToJoin');
                }
                else if(result.jobseeker.availability == '3 month')
                {
                    $(".threemonth").addClass('availToJoin');
                }
                else if(result.jobseeker.availability == '15 days or less')
                {
                    $(".fifteendays").addClass('availToJoin');
                }
                else if(result.jobseeker.availability == '1 month')
                {
                    $(".onemonth").addClass('availToJoin');
                }
                else if(result.jobseeker.availability == '3+ month')
                {
                    $(".threeplusmonth").addClass('availToJoin');
                }
                if(result.jobseeker.experience_type == 'fresher')
                {
                    $(".fresher").trigger('click');
                }
                else
                {
                    $(".experience").trigger('click');
                    $("#expYears").select2("val",""+result.jobseeker.experience_year+"");
                    $("select[name=\"exp_month\"]").select2("val",""+result.jobseeker.experience_month+"");
                    $("#salary_type").val(result.jobseeker.salary_type).trigger('change');
                    $("input[name=\"salary_amount\"]").val(result.jobseeker.salary); 
                }
                // $('.basic-details-modal').html(result.html);
                // $('.basic-details-modal').find('select').select2();
            },
            // error: (response) => {
            //     console.log('response');
            // },            
        });
    }
     // validation
$("#basic_details").validate({
    // rules: {
    //     first_name: {
    //         required: true,
    //         lettersonly: true
    //     },
    //     middle_name: {
    //         alphaWithSpace: true
    //     },
    //     last_name: {
    //         lettersonly: true
    //     },
    //     email: {
    //         required: true
    //     },

    //     mobile_number: {
    //         required: true
    //     },
    //     exp_years: {
    //         required: true
    //     },
    //     exp_month: {
    //         required: true
    //     },
    //     salary_type: {
    //         required: true
    //     },
    //     salary_amount: {
    //         required: true
    //     },
    //     state: {
    //         required: true
    //     },
    //     city: {
    //         required: true
    //     },
    //     // availability: {
    //     //   required: true
    //     // },
    // },
    // errorPlacement: function(label, element) {
    //     if (element.hasClass('web-select2')) {
    //         label.insertAfter(element.next('.select2-container')).addClass('mt-2 ');
    //         select2label = label
    //     } else {
    //         // label.addClass('mt-2');
    //         label.insertAfter(element);
    //     }
    // },
    // messages: {
    //     first_name: {
    //         required: "Enter first name"
    //     },
    //     middle_name: {
    //         alphaWithSpace: "Only alphabets and space allowed"
    //     },
    //     last_name: {
    //         lettersonly: "Only alphabets allowed"
    //     },
    //     email: {
    //         required: "Enter email"
    //     },
    //     mobile_number: {
    //         required: "Enter mobile number"
    //     },
    //     exp_years: {
    //         required: "Select experience years"
    //     },
    //     exp_month: {
    //         required: "Select experience month"
    //     },
    //     salary_type: {
    //         required: "Select salary type"
    //     },
    //     salary_amount: {
    //         required: "Enter amount"
    //     },
    //     state: {
    //         required: "Select state"
    //     },
    //     city: {
    //         required: "Select city"
    //     },
    //     // availability: {
    //     //   required: "Select availability to join"
    //     // },
    // },
    submitHandler: function(form) {
        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "{{ route('jobseeker.update', ['user'=>$auth_id]) }}",
            type: 'POST',
            datatype: 'JSON',
            data: $(form).serialize(),
            success: function(response) {
                $('#profileEdit-modal').modal('hide');
                Swal.fire({
                    icon: 'success',
                    title: 'Profile updated successfully'
                });
            },
            error: function(xhr){
                console.log('error');
                var data = xhr.responseJSON;
                if($.isEmptyObject(data.errors) == false) {
                    $.each(data.errors, function (key, value) {
                        $('#' + key)
                            .closest('.form-group')
                            .addClass('has-error')
                            .append('<span class="help-block">' + value + '</span>');
                    });
                }
            }
        });
    },
    error: function(e) {
        console.log(e)
    }
})
    $("#imageUpload").change(function() {
        var formData = new FormData();
        let _token = $('meta[name="csrf-token"]').attr('content');
        var photo = $('#imageUpload').prop('files')[0];   
        formData.append('photo', photo);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });
        $.ajax({
            url: "{{ route('jobseeker.updateProfilePic', ['user'=>$auth_id]) }}",
            type: 'POST',
            datatype: 'JSON',
            contentType: 'multipart/form-data',
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: (response) => {
                var result = JSON.parse(response);
                if (result.success) {                    
                    Swal.fire({
                        icon: 'success',
                        title: result.message
                    });
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Something went wrong'
                    });
                }
            },
            error: (response) => {
                console.log(response);
            }
        });
        readURL(this);
    });

    // progress2 Bar Js --
    const progress2Container = document.querySelector('.progress2-container');

    // initial call
    setPercentage();

    function setPercentage() {
        const percentage = progress2Container.getAttribute('data-percentage') + '%';

        const progress2El = progress2Container.querySelector('.progress2');
        const percentageEl = progress2Container.querySelector('.percentage');

        progress2El.style.width = percentage;
        percentageEl.innerText = percentage;
        percentageEl.style.left = percentage;
    }

    function emailEdit() {
        document.getElementById('newEmail').style.display = "block";
        document.getElementById('newEmail').removeAttribute("disabled");
        document.getElementById('emailEdit').style.display = "none";
    }

    function numberEdit() {
        document.getElementById('newNumber').style.display = "block";
        document.getElementById('newNumber').removeAttribute("disabled");
        document.getElementById('numberEdit').style.display = "none";
    }

  


    // $(".empType").on('click', function() {
    //     if ($(this).val() === 'fresher') {
    //         $("#noticePeriod1, #noticePeriod3").find(':input').val('').trigger('change');
    //     } else {
    //         $("#noticePeriod1, #noticePeriod3").find(':input').validate().reset();
    //     }
    // });

    $("#verifyBtn").click(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2200,
            timerProgressBar: true,
            showClass: {
                popup: 'animate__animated animate__bounceInRight'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOut'

            },
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: 'Thank you your email is verify!'
        })
    });

    $(".availToJoinBorder").click(function() {
        $(".availToJoin.availToJoin").removeClass('availToJoin')
        $(this).addClass('availToJoin')
    });

    $(".switchBtn1").click(function() {
        $(".switchBtn1.fieldActive").removeClass('fieldActive')
        $(this).addClass('fieldActive')
    });
    $(".experience").click(function() {
        $(".total_exp").css("display", 'block');
        $("#basic_details").validate().resetForm();
        $('.total_exp').removeAttr("disabled");
    });
    $(".fresher,.cancel").click(function() {
        $(".total_exp").css("display", 'none');
        $('.total_exp').attr("disabled", true);
    });
    $(".cancel").click(function() {
        $('.fieldActive').removeClass('fieldActive');
        $('#fresher').addClass('fieldActive');

    });
    $(".no").click(function() {
        $('#fresher').removeClass('fieldActive');
        $('#expee').addClass('fieldActive');
        $(".total_exp").css("display", 'block');
    })
    $("#crossIconEmail").click(function() {
        $("#newEmail").hide();

        $("#emailEdit").show();
        $("#newEmail").find(':input').val('');
        $("#newEmail").validate().resetForm();
    });
    $("#crossIconNumber").click(function() {
        $("#newNumber").hide();
        $("#numberEdit").show();
        $("#newNumber").find(':input').val('');
        $("#newNumber").validate().resetForm();

    });
    // $(".jkss").click(function() {
    //     $('#basic_details')[0].reset();
    // })

    // function clearRadioGroup(GroupName) {
    //     var ele = document.getElementsByName(GroupName);
    //     for (var i = 0; i < ele.length; i++)
    //         ele[i].checked = false;
    // }
    $("#firstName").on({
        keydown: function(e) {
            if (e.which === 32)
                return false;
        },
        change: function() {
            this.value = this.value.replace(/\s/g, "");
        }
    });
    // city filter by state
    $(document).on('change', '#state', function() {
        let state_id = $(this).val();
        var cityid = $("#selectedcity").val();
        $.ajax({
        type: "GET",
        url: "{{route('jobseeker.filterCity')}}",
        data: {
            'state_id': state_id
        },
        success: function(data) {
            $(".filter-city").html(data);
            // setTimeout(() => {
            //     //$("#city").val(cityid).trigger('change');
            //     alert(cityid);
            //     $("#city").val(cityid).trigger('change');
            // }, 1000);
            $("#city").val(cityid).trigger('change');
        }
        });

    });
    // end city filter by state
</script>
@endsection