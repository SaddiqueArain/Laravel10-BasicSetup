<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\RegionContent;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regioncontents = [
            [
                'id' => 1,
                'region_id' => 1,
                'original_content_id' => 1,
                'roadmap_step_id' => 1,
                'type' => 1,
                'content' => 'HD',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'region_id' => 2,
                'original_content_id' => 2,
                'roadmap_step_id' => 2,
                'type' => 2,
                'content' => 'HD',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'region_id' => 3,
                'original_content_id' => 3,
                'roadmap_step_id' => 3,
                'type' => 3,
                'content' => 'HD',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        foreach ($regioncontents as  $regioncontent) {
            RegionContent::query()->updateOrCreate(['id' => $regioncontent['id']], $regioncontent);
        }
    }
}
