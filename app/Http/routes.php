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
Route::post('/login','LoginController@doDiscuzLogin');
Route::get('/login',function(){
    return view('login');
});
Route::get('/login/success',function(){
    return view('loginSuccess');
});
Route::get('/logout','LoginController@doLogout');
Route::get('/member','MemberController@doMember');
Route::get('/mailTest','MailController@doSendMail');
Route::get('/shop','ShopController@doShop');
Route::get('/viewProduct/{id}','ShopController@doProductDetails');
Route::get('/image/{id}','ImageController@getImg');
Route::post('/redeemCode','RedeemController@doRedeem');
Route::get('/buyCash','BuyCashController@');
Route::post('/placeOrder','ShopController@doPlaceOrder');
Route::post('/addToCart','ShopController@addToCart');
Route::get('/shoppingCart','ShopController@getShoppingCartPage');
Route::post('/delCartProduct','ShopController@removeFromCart');
Route::post('/updateCart','ShopController@doUpdateCartQuantity');
Route::post('/doCartCheckout','ShopController@doCartCheckout');
Route::get('/viewOrderDetails/{id}','MemberController@getOrderDetails');
Route::get('/games','GamesController@doIndex');
Route::get('/games/{id}','GamesController@doRedirect');
Route::post('/mojangAuthGateway','MemberController@doMojangAuth');
Route::post('/mcHappyVerReg','MemberController@doMcHappyVerAuth');

Route::get('/testController','TestController@showTest');
Route::get('/mcSkinViewer/{username}','McSkinViewController@get_skin');

//----admin----//
Route::get('/admin', function(){
   return view('/adminView/login');
});
Route::post('/admin','Admin\LoginController@doLogin');
Route::get('/admin/index','Admin\IndexController@doIndex');
Route::post('/admin/index','Admin\IndexController@doPostAction');
Route::get('/admin/redeemCode','Admin\RedeemController@showRedeemPage');
Route::post('/admin/redeemCode','Admin\RedeemController@doRedeem');
Route::get('/admin/game','Admin\GameController@showGamePage');
Route::post('/admin/game','Admin\GameController@doModify');
Route::get('/admin/order','Admin\OrderController@showOrderPage');

//----api----//
Route::get('/api/games','Admin\GameController@getGamesByApi');