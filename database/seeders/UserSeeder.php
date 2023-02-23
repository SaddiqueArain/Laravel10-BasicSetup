<?php

namespace Database\Seeders;

use App\Models\Region;
use App\Models\User;
use App\Models\RoleUser;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'=> 1,
                'region_id' => 1,
                'stripe_account_id' => 1,
                'stripe_onboarded'=> 1,
                'account_status'=> 1,
                'current_roadmap_step'=>1,
                'photo'=> 1,
                'full_name' => 'Usman Jutt',
                'phone'=>  03044555457,
                'email' => 'usman@gmail.com',
                'password' => Hash::make('password'),
                'gender'=> 'male',
                'pronouns'=> 'abc',
                'company_name'=> 'kodestudio',
                'job_title'=> 'junior developer',
                'timezone'=> 11,
                'tfa_enabled'=> 1,
                'social_linked'=> 'usman',
                'social_twitter'=> 'usman',
                'social_instagram'=> 'usman',
                'social_other'=> 'usman',
                'availability_settings'=> 'anyime',
                'logo'=> 121,
                'primary_colour'=> 'yellow',
                'secondary_colour'=> 'black',
                'billing_address'=> 'skp',
                'last_login'=> Carbon::now(),
            ],
            [
                'id'=> 2,
                'region_id' => 2,
                'stripe_account_id' => 1,
                'stripe_onboarded'=> 1,
                'account_status'=> 1,
                'current_roadmap_step'=>1,
                'photo'=> 1,
                'full_name' => 'Usman skp',
                'phone'=>  03044555457,
                'email' => 'usmanskp@gmail.com',
                'password' => Hash::make('password'),
                'gender'=> 'male',
                'pronouns'=> 'abc',
                'company_name'=> 'kodestudio',
                'job_title'=> 'junior developer',
                'timezone'=> 12,
                'tfa_enabled'=> 1,
                'social_linked'=> 'usman',
                'social_twitter'=> 'usman',
                'social_instagram'=> 'usman',
                'social_other'=> 'usman',
                'availability_settings'=> 'anyime',
                'logo'=> 121,
                'primary_colour'=> 'yellow',
                'secondary_colour'=> 'black',
                'billing_address'=> 'skp',
                'last_login'=> Carbon::now(),
            ],
            [
                'id'=> 3,
                'region_id' => 3,
                'stripe_account_id' => 1,
                'stripe_onboarded'=> 1,
                'account_status'=> 1,
                'current_roadmap_step'=>1,
                'photo'=> 1,
                'full_name' => 'Usman sheikhupura',
                'phone'=>  03044555457,
                'email' => 'usmanskp@gmail.com',
                'password' => Hash::make('password'),
                'gender'=> 'male',
                'pronouns'=> 'abc',
                'company_name'=> 'kodestudio',
                'job_title'=> 'junior developer',
                'timezone'=> 13,
                'tfa_enabled'=> 1,
                'social_linked'=> 'usman',
                'social_twitter'=> 'usman',
                'social_instagram'=> 'usman',
                'social_other'=> 'usman',
                'availability_settings'=> 'anyime',
                'logo'=> 121,
                'primary_colour'=> 'yellow',
                'secondary_colour'=> 'black',
                'billing_address'=> 'skp',
                'last_login'=> Carbon::now(),
            ],

        ];

        foreach ($users as $user) {
            $newUser = User::query()->updateOrCreate(['id' => $user['id']], $user);
            $newUser->roleusers()->sync([1, 2]);
        }
 }
}
