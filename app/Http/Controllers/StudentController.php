<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    // public function __construct()
    // {
    //     $this->student = new Student();
    // }

    // 学生一覧
    public function index()
    {
        $query = \App\Student::query();
        // 全件取得 +ページネーション
        $students = $query->orderBy('id', 'desc')->paginate(10);
        return view('/studentTop')->with('students', $students);
        // return view('studentTop');
    }

    // 学生新規登録
    public function new(Request $request)
    {
        return view('/new_student');
    }

    // 学生登録処理
    public function add(Request $request)
    {
        $registerStudent = $this->student->insertStudent();
        return redirect()->route('/studentTop');
    }
}
