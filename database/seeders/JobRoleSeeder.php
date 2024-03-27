<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobRole;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JobRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobRole::truncate();
        $jobRoles = [
            ['name' => 'Web Designer'],
            ['name' => 'Project Manager'],
            ['name' => 'Software Developer'],
            ['name' => 'Account Executive'],
            ['name' => 'Computer Scientist'],
            ['name' => 'SQL Developer'],
            ['name' => 'Data Entry'],
            ['name' => 'Accountant'],
            ['name' => 'Hr'],
        ];
        DB::table('job_roles')->insert($jobRoles);
    }
}
