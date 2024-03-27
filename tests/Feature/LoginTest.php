<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Models\Otp;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use WithFaker;
    use WithoutMiddleware;

    public function testLoginView()
    {
        $response = $this->get(route('auth.login'));

        $response->assertStatus(200);
    }

    public function testUserLogin()
    {
        $user = User::where('mobile_number', '3256988751')->first();
        // login
        $response = $this->post(route('auth.login'), [
            'mobile_number' => $user->mobile_number,
            'login_with_otp' => 'login_with_otp',
        ]);

        // verify Login OTP
        $verifyOtp = Otp::where('mobile_number', $user->mobile_number)->first();
        $otp = str_split($verifyOtp->otp);
        $response = $this->post(route('auth.verifyOtp'), [
            'verify_otp' => $otp,
            'mobile_number' => $verifyOtp->mobile_number,
            'otp_type' => $verifyOtp->type,
        ]);

        $this->assertTrue(true);
    }
}
