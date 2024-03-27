<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Qualification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class QualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Qualification::truncate();
        $qualification = [
            ['name' => '10th'],
            ['name' => '12th'],
            ['name' => 'B.sc (IT)'],
            ['name' => 'B.Tech (CS)'],
            ['name' => 'B.Tech (ME)'],
            ['name' => 'BCA'],
            ['name' => 'B.com'],
            ['name' => 'MCA'],
            ['name' => 'M.Tech'],
        ];
        DB::table('qualifications')->insert($qualification);
    }
}
