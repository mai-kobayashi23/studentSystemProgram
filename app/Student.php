<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // モデルに関連付けるテーブル
    protected $student = 'students';

    // テーブルに関連付ける主キー
    protected $primaryKey = 'id';

    // 登録・更新可能なカラムの指定
    protected $fillable = [
        'id',
        'name',
        'address',
        'img_path',
        'comment',
        'created_at',
        'update_at'
    ];
}
