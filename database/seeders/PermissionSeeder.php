<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entities = ['user', 'role', 'media'];
        $permissions = ['-view-any' => 'can view any ',
            '-view' => 'can view ',
            '-create' => 'can create ',
            '-update' => 'can update ',
            '-delete' => 'can delete ',
            '-restore' => 'can restore deleted ',
        ];
        foreach ($entities as $entity) {
            foreach ($permissions as $code => $description) {
                Permission::updateOrCreate([
                    'code' => $entity . $code,
                    'description' => $description . $entity,
                ]);
            }
        }
//        // Assign all permissions to Company Manager role
        $roles = Role::where('id', 1)->first();


        if ($roles) {
            $roles->permissions()->attach(Permission::all());
        }

    }














    ////////////////////////////////////////
//    public function run()
//    {
//        //
//        $permission = [
//            [
//                'id'=>1,
//                'code' => 'AddData',
//                'description'=> 'Can Add Data',
//                'created_at'=> Carbon::now(),
//                'updated_at'=> Carbon::now(),
//            ],
//            [
//                'id'=>2,
//                'code' => 'can-updata',
//                'description'=> 'Can Update Data',
//                'created_at'=> Carbon::now(),
//                'updated_at'=> Carbon::now(),
//            ],
//            [
//                'id'=>3,
//                'code' => 'can-delete',
//                'description'=> 'Can Delete Data',
//                'created_at'=> Carbon::now(),
//                'updated_at'=> Carbon::now(),
//            ]
//        ];
//        foreach ($permission as $permissions) {
//            DB::table('permissions')->updateOrInsert(['id' => $permissions['id']], $permissions);
//        }
//    }
}
