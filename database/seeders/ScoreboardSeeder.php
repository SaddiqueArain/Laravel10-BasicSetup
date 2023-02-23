<?php

namespace Database\Seeders;

use App\Models\AgentAgreement;
use App\Models\Scoreboard;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScoreboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $scoreboards = [
            [
                'id' => 1,
                'user_id' => 1,
                'revenue' => 1,
                'headcount' => 2,
                'revenue_per_employee' => 3,
                'profit_margin' => 4,
                'return_on_equity' => 5,
                'return_on_debt' => 6,
                'gross_net_burn' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'revenue' => 1,
                'headcount' => 2,
                'revenue_per_employee' => 3,
                'profit_margin' => 4,
                'return_on_equity' => 5,
                'return_on_debt' => 6,
                'gross_net_burn' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'revenue' => 1,
                'headcount' => 2,
                'revenue_per_employee' => 3,
                'profit_margin' => 4,
                'return_on_equity' => 5,
                'return_on_debt' => 6,
                'gross_net_burn' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        foreach ($scoreboards as  $scoreboard) {
          Scoreboard::query()->updateOrCreate(['id' => $scoreboard['id']], $scoreboard);

        }
    }
}
