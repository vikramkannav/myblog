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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'PostController@allPost')->name('home');
Route::get('/{id}/edit', "UserController@edit");
Route::put('/{id}/update', "UserController@update")->name('endUserUpdate');
Route::get('/{id}/change-password', "UserController@updatePassword");

/*Route::get('/posts/create', "PostController@create")->name('postCreate');
Route::post('/posts-entry', 'PostController@store')->name('add-post');
Route::post('/my_posts', 'PostController@index');*/


Route::resource('posts', 'PostController');
Route::get('/home', 'PostController@applicationsBlade');
Route::get('/applications-blade',['as' => 'pet.applications', 'uses' =>  'PostController@applications']);
Route::get('/{id}/change-password', "UserController@updatePassword");
Route::get('/{id}/profile-pic', "UserController@editProfilePic");