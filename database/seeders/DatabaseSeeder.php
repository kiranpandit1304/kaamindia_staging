<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(CompanyAddressSeeder::class);
        $this->call(IndustrySeeder::class);
        $this->call(JobRoleSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(JobSeeder::class);
        $this->call(QualificationSeeder::class);
        $this->call(PerkSeeder::class);
        $this->call(JobSeekerSeeder::class);
    }
}
