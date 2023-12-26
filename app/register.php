<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    public function insert(Request $request)
    {
        \DB::table('users')->insert([
            'id' => $request->id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    }

    // public function findAllUsers()
    // {
    //     $query = \DB::table('users')->select('id', 'user_name', 'email')->get();
    //     return $query;
    // }

    // public function InsertUser($request)
    // {
    //     return $this->create([
    //         'id' => $request->id,
    //         'user_name' => $request->user_name,
    //         'email' => $request->email,
    //         'password' => $request->password,
    //     ]);
    // }
}
