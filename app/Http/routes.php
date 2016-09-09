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

Route::get('/', 'HomeController@index');

Route::get('add', 'AddController@index');

Route::get('home', 'HomeController@index');

Route::post('add/save', 'AddController@save');



// admin board

Route::get('vip-admin', 'AdminController@dashboard');

Route::get('vip-admin/list', 'AdminController@adlist');

Route::get('vip-admin/category', 'AdminController@category');

Route::post('vip-admin/createcategory', 'AdminController@createcategory');

Route::auth();

