<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perk::truncate();
        $perks = [
            ['name' => 'Perk 1'],
            ['name' => 'perk 2'],
        ];
        DB::table('perks')->insert($perks);
    }
}
