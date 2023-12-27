<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\userController;


// トップページ
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


/** ユーザー  **/
Route::get('/homemenu', 'HomeController@index')->name('user.menu'); //メニュー画面表示
Route::post('/homemenu', 'HomeController@index')->name('user.menu'); //メニュー画面表示
// Route::post('/register', 'registerController@insert')->name('user.show');  //新規登録画面表示
Route::post('/register', 'UserController@insert')->name('user.show');  //新規登録画面表示


/** 学生  **/
Route::get('/studentTop', 'StudentController@index')->name('student.show'); //一覧画面表示
Route::get('/new_student', 'StudentController@new')->name('student.new'); //新規登録画面表示
Route::post('/add_student', 'StudentController@add')->name('student.add'); //登録処理
