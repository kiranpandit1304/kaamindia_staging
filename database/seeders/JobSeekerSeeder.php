<?php

namespace Database\Seeders;

use App\Models\Jobseeker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class JobSeekerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $userArray = [
            [
                'full_name' => 'jobseeker',
                'last_name' => 'Jober',
                'email' => 'jobseeker@gmail.com',
                'mobile_number' => '1234567899',
                'date_of_birth' => '11/08/1998',
                'email' => 'jobseeker@gmail.com',
                'mobile_number' => '1234567899',
                'job_profile' => 'Developer',
                'email_verified_at' => '2022-05-23 00:00:00',
                'password' => Hash::make('jobseeker@123'),
                'experience' => '2',
                'status' => 'active',
                'role' => 'jobseeker',
            ]
        ];
        Jobseeker::insert(
            $userArray
        );
    }
}
