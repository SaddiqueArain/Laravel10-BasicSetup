<?php

namespace Database\Seeders;

use App\Models\Prospect;
use App\Models\Region;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProspectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prospects = [
            [
                'id' => 1,
                'region_id'=> 1,
                'is_registered' => 1,
                'full_name' => "usman",
                'email' => 1,
                'phone' => 03044555457,
                'gender' => 'male',
                'pronouns' => 'abc',
                'company_name' => 'kodestudio',
                'job_title' => 'junior developer',
                'timezone' => 11,
                'social_linked' => 'usman',
                'social_twitter' => 'usman',
                'social_instagram' => 'usman',
                'social_other' => 'usman',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'id' => 2,
                'region_id'=> 2,
                'is_registered' => 2,
                'full_name' => "Jutt",
                'email' => 1,
                'phone' => 03044555457,
                'gender' => 'male',
                'pronouns' => 'abc',
                'company_name' => 'kodestudio',
                'job_title' => 'junior developer',
                'timezone' => 11,
                'social_linked' => 'usman',
                'social_twitter' => 'usman',
                'social_instagram' => 'usman',
                'social_other' => 'usman',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'id' => 3,
                'region_id'=> 3,
                'is_registered' => 3,
                'full_name' => "Usman Jutt",
                'email' => 1,
                'phone' => 03044555457,
                'gender' => 'male',
                'pronouns' => 'abc',
                'company_name' => 'kodestudio',
                'job_title' => 'junior developer',
                'timezone' => 11,
                'social_linked' => 'usman',
                'social_twitter' => 'usman',
                'social_instagram' => 'usman',
                'social_other' => 'usman',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        foreach ($prospects as $prospect){
            Prospect::query()->updateOrCreate(['id' => $prospect['id']], $prospect);

        }
        }
}
