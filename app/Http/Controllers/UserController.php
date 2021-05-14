<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addUser;

class UserController extends Controller
{
    public function newUser()
    {
        return view('users.addUser');
    }

    public function addUser(Request $request)
    {
        addUser::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => $request -> password,
        ]);
    }

    public function getUser()
    {
        return addUser::get();
        
    }
}
