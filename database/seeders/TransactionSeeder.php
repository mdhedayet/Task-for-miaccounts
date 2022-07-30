<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->delete();
                $data = [
                    [
                        "account_head_id"=>1,
                        "date"=>Carbon::now()->format('Y-m-d'),
                        "debit"=>40,
                        "credit"=>20,
                        ],
                        [
                        "account_head_id"=>2,
                        "date"=>Carbon::now()->format('Y-m-d'),
                        "debit"=>30,
                        "credit"=>15,
                        ],
                        [
                        "account_head_id"=>3,
                        "date"=>Carbon::now()->format('Y-m-d'),
                        "debit"=>80,
                        "credit"=>40,
                        ],
                        [
                        "account_head_id"=>4,
                        "date"=>Carbon::now()->format('Y-m-d'),
                        "debit"=>60,
                        "credit"=>30,
                        ],
                        [
                        "account_head_id"=>5,
                        "date"=>Carbon::now()->format('Y-m-d'),
                        "debit"=>40,
                        "credit"=>20,
                        ],
                        [
                        "account_head_id"=>6,
                        "date"=>Carbon::now()->format('Y-m-d'),
                        "debit"=>10,
                        "credit"=>5,
                        ],
                        [
                        "account_head_id"=>7,
                        "date"=>Carbon::now()->format('Y-m-d'),
                        "debit"=>20,
                        "credit"=>10,
                        ],
                        [
                        "account_head_id"=>8,
                        "date"=>Carbon::now()->format('Y-m-d'),
                        "debit"=>30,
                        "credit"=>15,
                        ],
                ];

                foreach ($data as $key => $record) {
                    \App\Models\Transaction::create($record);
                }
    }
}
