<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ResendEmailVarification;
use App\Models\User;
use App\Services\OtpService;
use Illuminate\Http\Request;
use Mail;

class OtpController extends Controller
{
    /**
     * resendOtp
     *
     * @param  mixed  $request
     * @return void
     */
    public function resendOtp(Request $request)
    {
        OtpService::sendOtp($request);

        return 'OTP send Successfull !';
    }

    /**
     * Resent Email
     *
     * @param  Request  $request
     * @return void
     */
    public function resendEmail(Request $request)
    {
        $email = $request->email;
        $data = User::where('email', $email)->get();
        foreach ($data as $userData) {
            $userEmail = $userData->email;
            $userName = $userData->name;
        }
        /* Send Email */
        Mail::to($userEmail)->send(new ResendEmailVarification($data));

        return back()->with('success', 'Verification email has been sent !');
    }
}
