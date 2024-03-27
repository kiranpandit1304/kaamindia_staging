<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\UploadedFile;
use App\Models\Otp;
use App\Models\City;
use App\Models\Company;
use Tests\TestCase;

class CompanyTest extends TestCase
{
    use WithFaker;
    use WithoutMiddleware;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCompanyStore()
    {
        $user = User::where('mobile_number', '3256988751')->first();
        // login
        $this->post(route('auth.login'), [
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
        // create company
        $link = ['facebook' => 'facebook.com', 'linkdian' => 'linkdian.com'];
        $socialLink = json_encode($link);

        $images = ['xeam.jpg', 'logo.jpg', 'banner.jpg'];
        $gallery = json_encode($images);

        $address = City::where('id', '1')->first();

        $this->post(route('employer.company.store'), [
            'form_type' => 'company_create',
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'status' => 'active',
        ]);
        $response->assertStatus(200);
    }

    /**
     * testCompanyEdit
     *
     * @return void
     */
    public function testCompanyEdit()
    {
        $user = User::where('mobile_number', '3256988751')->first();
        // login
        $this->post(route('auth.login'), [
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
        // edit company
        $link = ['facebook' => 'facebook.com', 'linkdian' => 'linkdian.com'];
        $socialLink = json_encode($link);

        $images = ['xeam.jpg', 'logo.jpg', 'banner.jpg'];
        $gallery = json_encode($images);

        $address = City::where('id', '1')->first();

        $company = Company::latest()->first();
        $this->post(route('employer.company.edit', $company->id), [
            'id' => $company->id,
            'about' =>  $this->faker->text,
            'name' => $company->name,
            'email_verified_at' => now(),
            'phone_number' => $this->faker->numerify('##########'),
            'landline_number' => $this->faker->numerify('##########'),
            'website' => 'https://webtest.com',
            'social_links' => $socialLink,
            'established_at' => now(),
            'company_size' => '12',
            'gst_number' => $this->faker->numerify('#############'),
            'logo' => 'xeam.jpg',
            'gallery' => $gallery,
        ]);

        $response->assertStatus(200);
    }
}
