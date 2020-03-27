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

Route::get('/', function () {
    return view('login/register');
});
Route::get('/index','Admin\LoginController@index');  //首页
Route::get('/login','Admin\LoginController@login'); //登录
Route::post('/login_do','Admin\LoginController@login_do');  //登录执行
Route::get('/register','Admin\LoginController@register');   //注册
Route::post('/register_do','Admin\LoginController@register_do');    //注册执行
Route::get('/wechatout','Admin\LoginController@wechatout');     //微信

Route::prefix('/student')->group(function () {
    Route::any('/show', 'StudentController@show');
    Route::get('/add', 'StudentController@add');
    Route::post('/add_do', 'StudentController@add_do');
    Route::get('/update/{id}', 'StudentController@update');
    Route::post('/update_do/{id}', 'StudentController@update_do');
    Route::get('/delete/{id}', 'StudentController@delete');

});
