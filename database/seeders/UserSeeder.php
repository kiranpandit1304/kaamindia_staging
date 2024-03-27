<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'full_name' => 'Admin',
                'email' => 'admin@gmail.com',
                'mobile_number' => '1234567899',
                'email_verified_at' => '2022-05-23 00:00:00',
                'password' => Hash::make('admin@123'),
                'role' => 'admin',
                'status' => 'active',
            ],
            [
                'full_name' => 'Jober',
                'email' => 'joper@gmail.com',
                'mobile_number' => '1234567890',
                'email_verified_at' => '2022-05-23 00:00:00',
                'password' => Hash::make('joper@123'),
                'role' => 'jobseeker',
                'status' => 'active',
            ],
            [
                'full_name' => 'Employer',
                'email' => 'employer@gmail.com',
                'mobile_number' => '1234567891',
                'email_verified_at' => '2022-05-23 00:00:00',
                'password' => Hash::make('employer@123'),
                'role' => 'employer',
                'status' => 'active',
            ],
        ];
        User::insert(
            $userArray
        );
    }
}
