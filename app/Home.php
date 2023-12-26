<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// 学生表示 //
class Home extends Model
{
    public function selectAll(){
        $query = \DB::table('students') -> select('name') -> get();
        return $query
    }
}
