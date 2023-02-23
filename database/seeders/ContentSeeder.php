<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\RoadmapStep;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [
            [
                'id' => 1,
                'roadmap_step_id' => 1,
                'is_editable' => 11,
                'type' => 1,
                'content' => 'HD',
                'sort_order' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'roadmap_step_id' => 2,
                'is_editable' => 22,
                'type' => 2,
                'content' => 'HD',
                'sort_order' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'roadmap_step_id' => 3,
                'is_editable' => 33,
                'type' => 3,
                'content' => 'HD',
                'sort_order' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        foreach ($contents as  $content) {
            Content::query()->updateOrCreate(['id' => $content['id']], $content);
        }
    }
}
