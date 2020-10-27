<?php

use Illuminate\Support\Facades\Route;

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
     return view('welcome');
 });
//
//Route::get('index/user', 'IndexController@user');
//Route::get('', 'IndexController@index');
//
//Route::get('user/ty', 'UserController@ty');
////Route::get('user/{id?}', 'UserController@index');
//Route::get('user/{id}', 'UserController@index');
//Route::post('user/testQuery', 'UserController@testQuery');
//
//
//Route::get('/hello', function(){
//	return   ' world1';
//});
//Route::get('/one' , function(){
//	var_dump('one');
//});
//
//Route::get('userty/{id}/{type?}' , 'UserController@userty');

//Route::get('home/one' , 'home\OneController@one');
//Route::get('home/user' , 'Home\UserController@index');

//Route::namespace('home')->prefix('home')->group(function(){
//    Route::get('one' , 'OneController@one');
//});
//
//Route::namespace('home')->group(function(){
//    Route::get('one' , 'OneController@one');
//});

//Route::namespace('home')->prefix('home')->get('one' , 'OneController@one');
//Route::namespace('home')->get('one' , 'OneController@one');

//Route::namespace('home')->prefix('admin')->group(function(){
//    Route::get('one' , 'OneController@one');
//});

//Route::namespace('home')->prefix('admin')->group(function(){
//    Route::get('one' , 'OneController@one');
//});








//Route::namespace('admin')->prefix('admin')->group(function(){
//    Route::get('login' , 'LoginController@index');
//    Route::post('doLogin' , 'LoginController@doLogin');
//    Route::get('testtwo' , 'TesttwoController@index');
//});

//Route::get('useEqualAppClass' , 'UserController@useEqualAppClass');



//Route::namespace('admin')->prefix('admin')->get('testMiddle' , 'UserController@index')
//->middleware('userlogin');

//Route::namespace('admin')->prefix('admin')->get('testMiddle2' , 'UserController@index');

//Route::namespace('admin')->prefix('admin')->get('testMiddle' , 'UserController@index')
//    ->middleware(['ad']);
//Route::namespace('admin')->prefix('admin')->group(['ad' , function(){
//    Route::get('testMiddle' , 'UserController@index');
//}]);

//Route::get('testRedis' , 'IndexController@testRedis3');
//
//
//Route::get('xs' , 'XsController@index');
//Route::get('xss' , 'XsController@test');
//
//Route::get('cookie/add' , 'CookieController@add');
//Route::get('cookie/get_cookie' , 'CookieController@get_cookie');
//
//
//Route::namespace('zzshop')->prefix('zzshop')->group(
//    function(){
//        Route::get('orderlist' , 'OrderlistController@orderList');
//        Route::get('send' , 'OrderlistController@send');
//    }
//);
//

Route::get('test' , 'ArticleController@test');
Route::get('article/{id}' , 'ArticleController@index_g');
Route::post('article' , 'ArticleController@index_p');
Route::put('article' , 'ArticleController@index_put');
//Route::put('article' , 'ArticleController@index_put');
Route::delete('article/{id?}' , 'ArticleController@index_d');