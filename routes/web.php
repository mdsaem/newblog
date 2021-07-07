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


Route::get('about','HomeController@index');
Route::get('contruct','ContractController@contruct');
Route::get('users','UserController@user');
Route::get('users/{id}','UserController@show');
Route::get('users/{id}/edit','UserController@edit');
Route::get('users/{id}/delete','UserController@delete');
Route::get('create-user','UserController@create');
    


Route::get('test', function () {
    return "Welcome to Laravel ";
});
