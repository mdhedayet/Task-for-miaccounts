<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_levels')->delete();
        $data = [
            [
                'name' =>"Group 2",
                'main_level_id' => 1,
            ],
            [
                'name' =>"Group 6",
                'main_level_id' => 3,
            ],
        ];

        foreach ($data as $key => $record) {
            \App\Models\SubLevel::create($record);
        }
    }
}
