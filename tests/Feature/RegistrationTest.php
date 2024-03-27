<?php

namespace Tests\Feature;

use App\Models\Otp;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use WithFaker;
    use WithoutMiddleware;

    public function testRegistrationView()
    {
        $response = $this->get(route('auth.login'));

        $response->assertStatus(200);
    }

    public function testRegistration()
    {
        // create user
        $email = $this->faker->unique()->safeEmail();
        $mobileNumber =  $this->faker->numerify('##########');

        $user = $this->post(route('auth.store'), [
            'full_name' => $this->faker->name,
            'email' => $email,
            'mobile_number' => $mobileNumber,
            'email_verified_at' => now(),
            'password' => Hash::make('testPassword@123'), // password
            'role' => 'employer',
            'otp_type' => 'register',
            'remember_token' => Str::random(10),
        ]);

        // verifyOtp
        $verifyOtp = Otp::where('mobile_number', $mobileNumber)->first();
        $otp = str_split($verifyOtp->otp);
        $response = $this->post(route('auth.verifyOtp'), [
            'verify_otp' => $otp,
            'email' => $verifyOtp->mobile_number,
            'otp_type' => $verifyOtp->type,
        ]);

        $response->assertStatus(500);
    }
}
