<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploaderController extends Controller
{
    public function getIndex()
    {
        $uploader = \App\Uploader::orderBy('created_at', 'desc')->paginate(5);
        return view('/new_index')->with('uploaders', $uploader);
    }
}
