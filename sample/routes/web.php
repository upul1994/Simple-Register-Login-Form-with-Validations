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
    return view('welcome');
});


Route::get("users","UserController@index");

Route::post("register","UserController@RegisterUser")->name("signup");

Route::post("login","UserController@LoginUser")->name("signin");


Route::get("home","UserController@GetHome")->name("home")->middleware("auth");

Route::get("signout","UserController@LogOut")->name("signout");