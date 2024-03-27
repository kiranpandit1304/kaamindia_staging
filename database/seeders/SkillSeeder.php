<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::truncate();
        $skill = [
            ['name' => 'PHP'],
            ['name' => 'Laravel'],
            ['name' => 'CSS'],
            ['name' => 'Java'],
            ['name' => 'Python'],
            ['name' => 'DBMS'],
            ['name' => 'Wordpress'],
            ['name' => 'JavaScript'],
            ['name' => 'Jquery'],
        ];
        DB::table('skills')->insert($skill);
    }
}
