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


//Authentication Routes and Registration Routes
Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
//end of authentication routes and registration routes

//Registration Routes
Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
Route::post('register', 'Auth\RegisterController@register');
//end of registration Routes

//password reset routes
Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
Route::get('password/reset', ['as' => 'password.request', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
Route::post('password/rest', 'Auth\ResetPasswordController@reset');
Route::get('password/reset/{token}', ['as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
//end password reset routes

//Blog and Post Routes
Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+'); //the where clause is an expression w=word d = numbers dash = dashes underscore = underscores 																															//if these arnt valid then the slug will return a 404
Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
Route::resource('/posts', 'PostController');
//end of blog and post routes

//Pages Routes
Route::any('/contact', 'PagesController@getContact');
Route::get('/', 'PagesController@getIndex');
Route::get('/{uri}', 'PagesController@getUri');
//end of pages routes




