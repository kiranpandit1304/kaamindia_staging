<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Jobseeker;
use App\Services\OtpService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * login
     *
     * @return void
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * empCheck
     *
     * @param  mixed  $request
     * @return void
     */
    public function login(Request $request)
    {
        $userCheck = User::where('mobile_number', $request->mobile_number)->first();
        if (empty($userCheck)) {
            $userCheck = Jobseeker::where('mobile_number', $request->mobile_number)->first();
        }
        if ($request->login == 'login_with_password') {
            $jobSeeker = config('constants.roles.jobseeker');
            $employer = config('constants.roles.employer');
            if (Auth::guard('jobseeker')->attempt(['mobile_number' => $request->mobile_number, 'password' => $request->password, 'role' => $jobSeeker], $request->remember)) {
                return redirect()->route('jobseeker.profile')->withSuccess('You have Successfully loggedin');
            }
            if (Auth::attempt(['mobile_number' => $request->mobile_number, 'password' => $request->password, 'role' => $employer], $request->remember)) {
                return redirect()->route('employer.dashboard')->withSuccess('You have Successfully loggedin');
            }
            return redirect()->back()->withError('Mobile Number and Password Invalid');
        }
        if ($request->login_with_otp == 'login_with_otp') {
            if (!empty($userCheck)) {
                if ($userCheck->mobile_number == $request->mobile_number) {
                    $userDetail = [
                        'email' => $userCheck->email,
                        'mobile_number' => $userCheck->mobile_number,
                        'otp_type' => config('constants.otp_type.login'),
                        'userRole' => $userCheck->role,
                    ];
                    $userObject = (object) $userDetail;
                    OtpService::sendOtp($userObject);
                    return response()->json(['status' => 200, 'userDetail' => $userDetail], 200);
                }
            }
            return response()->json(402);
        }
    }
}
