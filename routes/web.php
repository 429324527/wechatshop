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
    return view('index');
});
Route::get('/index','Admin\LoginController@index');  //首页
Route::get('/tel','Admin\LoginController@tel');  //手机号登陆
Route::get('/zhu','Admin\LoginController@zhu');   //手机号注册
Route::get('/login','Admin\LoginController@login'); //登录
Route::post('/insert','Admin\LoginController@insert');    //注册登录
Route::post('/login_do','Admin\LoginController@login_do');  //登录执行
Route::get('/register','Admin\LoginController@register');   //注册
Route::post('/register_do','Admin\LoginController@register_do');    //注册执行
Route::post('/ma','Admin\LoginController@ma');
Route::post('/save','Admin\LoginController@save');
Route::get('/ing','Admin\LoginController@ing');
Route::get('/lists','Admin\LoginController@lists');
Route::get('/wechatout','Admin\LoginController@wechatout');     //微信
Route::get('image','Admin\LoginController@image');   //扫码
Route::get('log','Admin\LoginController@logs');

Route::prefix('/student')->group(function () {
    Route::any('/show', 'StudentController@show');
    Route::get('/add', 'StudentController@add');
    Route::post('/add_do', 'StudentController@add_do');
    Route::get('/update/{id}', 'StudentController@update');
    Route::post('/update_do/{id}', 'StudentController@update_do');
    Route::get('/delete/{id}', 'StudentController@delete');

});
