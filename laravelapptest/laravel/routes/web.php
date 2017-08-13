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
    return view('welcome',['weather'=>'sunny']);
});
Route::get('about', 'AboutController@ShowAbout');
Route::get('menu', 'AboutController@ShowMenu');

Route::get('home',function(){
    return view('index');
});

Route::get('index',function(){
    return view('index1');
});

Route::get('gallery',function(){
    return view('gallery');
});

Route::get('signup',function(){
    return view('signup');
});

Route::post('thanks',function(){

    return view('thanks');
});