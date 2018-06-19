<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|

Route::get('/about',function(){
    return view('pages.about');
});

Route::get('/contact',function(){
    return view('pages.about');
});

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('create');
});

Route::get("create",'testing@index');
Route::post("store",'testing@store');
Route::get("about",'testing@about');
Route::get("form",'testing@form');
Route::get("slider",'testing@slider');
Route::get("subscribe",'testing@subscribe');

//Route::get('about',function(){
   // return "OMG";
   // return view('about');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
