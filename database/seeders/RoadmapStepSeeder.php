<?php

namespace Database\Seeders;

use App\Models\RoadmapStep;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoadmapStepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roadmapsteps = [
            [
                'id' => 1,
                'number' => 99,
                'title' => 'kodestudio',
                'description' => 'done',
                'image' => 00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'number' => 99,
                'title' => 'kodestudio',
                'description' => 'done',
                'image' => 00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'number' => 99,
                'title' => 'kodestudio',
                'description' => 'done',
                'image' => 00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        foreach ($roadmapsteps as  $roadmapstep) {
             RoadmapStep::query()->updateOrCreate(['id' => $roadmapstep['id']], $roadmapstep);
            }
    }
}
