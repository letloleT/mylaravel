<?php

/**
 * --------------------------------------------------------------------------------
 * Application Routes
 * --------------------------------------------------------------------------------
 * 
 * Here's where you can register all of the routes for the application.
 * Simply tell laravel the URLs it should respond to
 * and give it the controller to call when thst URL is resquested.
*/

Route::get('/',function(){
    return view('welcome');
});
route::get("create",'testing@index');
route::post("store",'testing@store');