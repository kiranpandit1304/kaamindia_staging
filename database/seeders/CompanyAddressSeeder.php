<?php

namespace Database\Seeders;

use App\Models\CompanyAddress;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class CompanyAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $companyAddress = [
            [
                'company_id' => '1',
                'full_address' => 'sector 78',
                'country_id' => '1',
                'state_id' => '24',
                'city_id' => '2541',
            ],
            [
                'company_id' => '2',
                'full_address' => 'sector 44',
                'country_id' => '1',
                'state_id' => '5',
                'city_id' => '2541',
            ],
            [
                'company_id' => '1',
                'full_address' => 'sector 77',
                'country_id' => '1',
                'state_id' => '7',
                'city_id' => '4444',
            ],
        ];
        CompanyAddress::insert(
            $companyAddress
        );
    }
}
