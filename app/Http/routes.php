<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/','IndexController@showIndex');
Route::get('/viewNotice/{id}','NoticeController@showNotice');
Route::get('/viewNotice','AllNoticeController@showNotice');

Route::get('/aboutUs',function(){
    return view('aboutUs');
});

Route::post('/register','RegisterController@doReg');
Route::get('/register',function(){
    return view('register');
});
Route::get('/download',function(){
    return view('download');
});
Route::post('/login','LoginController@doLogin');
Route::get('/login',function(){
    return view('login');
});
Route::get('/login/success',function(){
    return view('loginSuccess');
});
Route::get('/logout','LoginController@doLogout');
Route::get('/member','MemberController@doMember');
Route::get('/testController','TestController@showTest');

//----admin----//
Route::get('/admin', function(){
   return view('/adminView/login');
});
Route::post('/admin','Admin\LoginController@doLogin');

