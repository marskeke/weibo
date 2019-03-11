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

Route::get('/','StaticPagesController@home');  //路由去抓一個控制器，然後控制器使用@home方法去抓'/'頁面
Route::get('/help','StaticPagesController@help');
Route::get('/about','StaticPagesController@about');
