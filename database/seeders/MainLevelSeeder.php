<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('main_levels')->delete();
        $data = [
            [
                'name' =>"Group 1",
            ],
            [
                'name' =>"Group 3",
            ],
            [
                'name' =>"Group 5",
            ],
        ];

        foreach ($data as $key => $record) {
            \App\Models\MainLevel::create($record);
        }
    }
}
