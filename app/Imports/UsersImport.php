<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withStartRow;
use Anaseqal\NovaImport\Actions\Action;
class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name'=> $row[0],
            'email'=>$row[1],
            'password'=>Hash::make($row[2]),
            'is_admin'=>$row[3]
        ]);
    }

    public function startRow():int{
        return 2;
    }
}
