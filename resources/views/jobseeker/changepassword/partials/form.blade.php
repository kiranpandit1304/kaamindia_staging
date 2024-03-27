<div class="col-lg-9 my-2">
    <div class="p-3 text-center  bg-warning rounded-top">
        <h3 class="text-white my-1">Change Password</h3>
    </div>
    <div class="user-dashboard-info-box ">
        <div class="row align-items-center">
            <div class="col-md-6">
                <form method="" action="" id="chagepassword" onsubmit="event.preventDefault()">
                    <div class="form-group mb-4">
                        <div class="position-relative">
                            <span class="position-absolute start-0 top-50 ps-3">
                                <i class=" fas fa-key opacity-10 pt-2"></i>
                            </span>
                            <label class="form-label ms-0 ">Current Password<em class="text-danger">*</em></label>
                            <input type="password" class="ps-5 text-dark border form-control @error('current_password') is-invalid @enderror" name="current_password" placeholder="Current Password">
                        </div>
                        @if ($errors->has('current_password'))
                        <span class="text-danger">{{ $errors->first('current_password') }}</span>
                        @endif
                    </div>
                    <div class="form-group  mb-4">
                        <div class="position-relative">
                            <span class="position-absolute top-50 start-0  ps-3">
                                <i class=" fas fa-key opacity-10 pt-2"></i>
                            </span>
                            <label class="form-label ms-0">New Password<em class="text-danger">*</em></label>
                            <input type="password" class="ps-5 text-dark form-control border @error('password') is-invalid @enderror" id="emp_password" placeholder="New Password" name="password" autocomplete="password">
                            <div class="position-absolute top-50 end-0 pe-3">
                                <img src="{{ asset('assets/images/eyeclose.svg')}}" class="eye_close pt-2" id="newPassword">
                            </div>
                        </div>
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3 mt-0 pt-0">
                        <div class="position-relative">
                            <span class="position-absolute start-0 top-50 ps-3">
                                <i class=" fas fa-key opacity-10 pt-2"></i>
                            </span>
                            <label class="form-label ms-0">Confirm Password<em class="text-danger">*</em></label>
                            <input type="password" disabled="disabled" class="ps-5 text-dark border form-control @error('password_confirmation') is-invalid @enderror" id="confirm_psd" placeholder="Confirm Password" name="password_confirmation" autocomplete="password_confirmation">
                        </div>
                        @if ($errors->has('password_confirmation'))
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                        <button type="submit" onclick="changePassword();" class=" btn text-white change_password btn-warning mt-5">Change Password</button>
                    </div>
                </form>

            </div>
            <div class="col-md-6 d-md-block d-none"><img src="{{ asset('assets/images/pass.png')}}" class="img-fluid d-block mx-auto w-100" alt="main_logo">
            </div>
        </div>
    </div>
</div>