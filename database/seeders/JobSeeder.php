<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;
use Illuminate\Database\Eloquent\Model;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $jobs = [
            [
                'company_id' => '2',
                'title' => 'PHP Developer',
                'description' => 'Great opportunity for python developer',
                'role' => 'Web Developer',
                'openings' => '18',
                'job_type' => [
                    "Full Time"
                ],
                'salary' => [
                    "negotiable" => "0",
                    "salary_type" => "ctc",
                    "salary_circle" => "monthly",
                    "salary_disclosed" => "1",
                    "salary" => [
                        "max" => "15000",
                        "min" => "18000"
                    ],
                ],
                'job_working_type' => 'Work From Office',
                'locations' => [

                    "city" => [
                        "Arunachal Pradesh",
                        "Lakshadweep"
                    ],
                    "state" => [
                        "Basar",
                        "Tawang",
                        "Agethi"
                    ]
                ],
                'incentive'  => [
                    "incentive" => [
                        "max_bonus" => "18000",
                        "min_bonus" => "15000"
                    ],
                    "bonus_one_time" => "2500",
                    "incentive_type" => "recurring",
                    "recurring_cycle" => "Monthly"
                ],
                'interview_type' => 'telephonic',
                'perks' => [
                    "Food",
                    "Travel"
                ],
                'skills' => [
                    "Php",
                    "Python",
                    "Laravel"
                ],
                'min_qualification'  => 'graduation',
                'gender'  => 'both',
                'experience' => [
                    "type" => "experience",
                    "experience" => [
                        "max" => "5",
                        "min" => "2"
                    ]
                ],
                'security' => [
                    "amount" => "2500",
                    "security_deposit" => "Yes"
                ],
                'job_expiry_date' => '2018-01-01',
                'status' => 'open',
            ],
            [
                'company_id' => '1',
                'title' => 'PHP Developer',
                'description' => 'Great opportunity for python developer',
                'role' => 'Web Designer',
                'openings' => '18',
                'job_type' => [
                    "Full Time"
                ],
                'salary' => [
                    "negotiable" => "0",
                    "salary_type" => "ctc",
                    "salary_circle" => "monthly",
                    "salary_disclosed" => "1",
                    "salary" => [
                        "max" => "15000",
                        "min" => "18000"
                    ],
                ],
                'job_working_type' => 'Work From Home',
                'locations' => null,
                'incentive'  => [
                    "incentive" => "No"
                ],
                'interview_type' => 'telephonic',
                'perks' => [
                    "Food",
                    "Travel"
                ],
                'skills' => [
                    "Php",
                    "Python",
                    "Laravel"
                ],
                'min_qualification'  => 'post graduation',
                'gender'  => 'male',
                'experience' => [
                    "type" => "experience",
                ],
                'security' => [
                    "security_deposit" => "No"
                ],
                'job_expiry_date' => '2018-01-01',
                'status' => 'draft',
            ]
        ];

        foreach ($jobs as $job) {
            Job::create(
                $job
            );
        }
    }
}
