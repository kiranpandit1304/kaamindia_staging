<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $industry = [
            [
                'name' => 'IT',
                'description' => 'Web & Software development',
            ],
            [
                'name' => 'BPO',
                'description' => ' business process outsourcing, which refers to when companies outsource business processes to a third-party (external) company',
            ],
            [
                'name' => 'Financial services',
                'description' => 'Financial services are the economic services provided by the finance industry',
            ],
        ];
        Industry::insert(
            $industry
        );
    }
}
