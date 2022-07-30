<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountHeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account_heads')->delete();
        $data = [
            [
                "main_level_id"=>1,
                "sub_level_id"=>1,
                "child_level_id"=>null,
                "name"=>"Account head 1"
                ],
                [
                "main_level_id"=>1,
                "sub_level_id"=>1,
                "child_level_id"=>null,
                "name"=>"Account head 2"
                ],
                [
                "main_level_id"=>2,
                "sub_level_id"=>null,
                "child_level_id"=>null,
                "name"=>"Account head 3"
                ],
                [
                "main_level_id"=>1,
                "sub_level_id"=>null,
                "child_level_id"=>null,
                "name"=>"Account head 4"
                ],
                [
                "main_level_id"=>1,
                "sub_level_id"=>null,
                "child_level_id"=>null,
                "name"=>"Account head 5"
                ],
                [
                "main_level_id"=>3,
                "sub_level_id"=>2,
                "child_level_id"=>1,
                "name"=>"Account head 6"
                ],
                [
                "main_level_id"=>3,
                "sub_level_id"=>2,
                "child_level_id"=>1,
                "name"=>"Account head 7"
                ],
                [
                "main_level_id"=>3,
                "sub_level_id"=>null,
                "child_level_id"=>null,
                "name"=>"Account head 8"
                ],
        ];

        foreach ($data as $key => $record) {
            \App\Models\AccountHead::create($record);
        }
    }
}
