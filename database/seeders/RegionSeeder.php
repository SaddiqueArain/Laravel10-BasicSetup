<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions=[
            [
                'id'=>1,
                'name'=>'SKP'
            ],
            [
                'id'=>2,
                'name'=>'LHR'
            ],
            [
                'id'=>3,
                'name'=>'FSD'
            ]
        ];

        foreach ($regions as $region) {
            DB::table('regions')->updateOrInsert(['id' => $region['id']], $region);
        }
    }
}
