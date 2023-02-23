<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\RoleUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {


       $pivottable =[
            ['id'=>1,'user_id' => 1, 'user_role_id' => 1],
            ['id'=>2, 'user_id' => 2, 'user_role_id' => 2],
            ['id'=>3, 'user_id' => 3, 'user_role_id' => 1],
            ['id'=>4, 'user_id' => 3, 'user_role_id' => 3],
            ['id'=>5, 'user_id' => 3, 'user_role_id' => 1]
        ];
        foreach ($pivottable as $pivottables) {
            DB::table('role_user')->updateOrInsert(['id' => $pivottables['id']], $pivottables);
        }
    }



}
