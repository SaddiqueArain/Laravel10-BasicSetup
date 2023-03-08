<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = User::create($request->all());
        $user->role = $request->input('role');
        $user->save();

        return redirect('/users');
    }

}
