<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

trait AuthTrait
{
public function authuser()
{
//    $user=Auth::user();
//    $userId = Auth::id();
//    $user=User::all()->pluck('id');


    $user=User::all();
    return $user;
}

}
