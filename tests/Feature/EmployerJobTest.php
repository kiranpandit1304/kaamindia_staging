<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Models\Otp;
use App\Models\City;
use App\Models\JobRole;
use App\Models\User;
use Tests\TestCase;

class EmployerJobTest extends TestCase
{
    use WithFaker;
    use WithoutMiddleware;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testEmployerJobStore()
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
        // create job
        $role = JobRole::latest()->first();
        $perks = ['travell', 'bonous', 'food'];
        $perkName = json_encode($perks);
        $skill = ['2', '4', '3'];
        $this->post(route('employer.job.store'), [
            'company_id' => '3',
            'title' => $this->faker->name,
            'description' => $this->faker->text,
            'role_id' => $role->id,
            'openings' => $this->faker->numerify('##'),
            'job_type' => 'full-time',
            'job_working_type' => 'WFH',
            'country_id' => '1',
            'state_id' => '1',
            'city_id' => '1',
            'address' =>  $this->faker->text,
            'salary_disclosed' => '1',
            'min_salary' => $this->faker->numerify('######'),
            'max_salary' => $this->faker->numerify('######'),
            'interview_type' => 'teliponic',
            'perks' => $perkName,
            'status' => 'active',
            // skills
            'skill_id' => $skill,
            // job requirement
            'min_qualification' => '1',
            'specific_qualification' => '2',
            'gender' => 'both',
            'experience_type' => 'both',
            'min_experience' => '2',
        ]);
        $response->assertSessionHasNoErrors();
        $response->assertStatus(200);
    }
}
