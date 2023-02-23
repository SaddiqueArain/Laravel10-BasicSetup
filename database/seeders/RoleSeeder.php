<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\RoleUser;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = [
            [
                'id'=>1,
                'name' => 'Superadmin',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'=>2,
                'name' => 'Admin',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'=>3,
                'name' => 'customer',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ]

];
        foreach ($role as $roles)
            $newUser = Role::query()->updateOrCreate(['id' => $roles['id']], $roles);
        $newUser->permissions()->sync([1,2, 3]);
    }
}
