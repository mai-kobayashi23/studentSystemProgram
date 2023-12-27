<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function insert(Request $request)
    // {
    //     $user = new User();
    //     $user = fill($request->all())->save();
    // }

    public function insert(Request $request)
    {
        \DB::table('users')->insert([
            'id' => $request->id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return view('/welcome');
    }
}
