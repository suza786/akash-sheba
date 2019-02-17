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
//Frontend Routes......................
Route::get('/', 'homeController@index');
Route::get('/login', 'homeController@login');


//Services route
Route::get('/services','serviceController@index');


//Backend Routes...............................
Route::get('/admin_login','adminController@index');
Route::get('/admin_dashboard','adminController@dashboard');
Route::resource('service_provider','ServiceProviderController');
Route::view('/dashboard','layout.admin_layout2');
