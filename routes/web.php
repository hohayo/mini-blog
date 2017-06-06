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

//TestController
Route::get('test', 'TestController@index');

//TasksController
Route::resource('tasks', 'TasksController');


//Index
Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function() {
	return view('about');
});

Route::get('register', function() {
	return view('register');
});

Route::get('login', function() {
	return view('login');
});

Route::get('forget', function() {
	return view('forget');
});

//BlogController
Route::get('posts/{id}', function($id) {
	//
})->where('id', '[0-9]+');

Route::get('members/{id}', 'MemberController@show')->name('members.show')->where('id', '[0-9]+');


//API
Route::group(['prefix' => 'api'], function() {
	Route::get('/', function() {
		//
	});

	Route::get('users', function() {

	});

	Route::get('posts', function() {

	});

	Route::get('comments', function() {

	});
});