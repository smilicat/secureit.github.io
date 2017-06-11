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
// Using middleware for authentification
Route::group(['middleware' => ['web']], function () {
// Redirect to main page ,using SecController's function index
Route::get('/', 'SecController@index');
// Redirect to news page ,using NewsController's function index
Route::get('/news' ,'NewsController@index');
// Redirect to specific news page using it's slug ,using NewsController's function show
Route::get('/news/{slug}','NewsController@show');
// Redirect to property page ,using PropertyController's function index
Route::get('/property' ,'PropertyController@index');
// Redirect to specific property page using it's slug ,using PropertyController's function show
Route::get('/property/{slug}','PropertyController@show');
// Redirect to specific page using it's slug ,using PagesController's function show
Route::get('/page/{slug}', 'PagesController@show');

});
// Redirect to admin logging page using set slug ,using VoyagerAuthController's function login
Route::get('/login','VoyagerAuthController@login');
// Shows all routes for Auth, @login / @register 
Auth::routes(); 
// Using the SecController's function index ,redirect if /home slug is used
Route::get('/home', 'SecController@index')->name('home');

// Admin panel slugs
Route::group(['prefix' => 'admin'], function () {
 Voyager::routes();
});
