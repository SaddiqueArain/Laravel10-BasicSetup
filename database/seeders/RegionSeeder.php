<?php

namespace Database\Seeders;

use App\Models\Region;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            [
                'id'=>1,
                'name' => 'Asia',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'=>2,
                'name' => 'Africa',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'=>3,
                'name' => 'USA',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ]

        ];


        foreach ($regions as $key => $region)
        {
            $newUser = Region::query()->updateOrCreate(['id' => $region['id']], $region);

        }
    }
}
