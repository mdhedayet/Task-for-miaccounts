<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChildLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('child_levels')->delete();
        $data = [
            [
                "name" => "Group 4",
                "sub_level_id" => 2,
            ]
        ];

        foreach ($data as $key => $record) {
            \App\Models\ChildLevel::create($record);
        }
    }
}
