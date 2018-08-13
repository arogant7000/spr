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
    return view('home');
});

Auth::routes();

Route::group(['middleware'=> ['auth','web','admin']], function(){

	Route::resource('admin/employee', 'EmployeeController', [
		'except' => ['create']
	]);

	Route::resource('admin/user', 'UserController', [
		'except' => ['create']
	]);
	Route::post('admin/user/updaterole', 'UserController@updaterole');

	Route::get('admin/user/editpassword/{id}','UserController@editpassword');
    Route::post('admin/user/updatepassword', 'UserController@updatepassword');
	
});

// AUTH MIDDLEWARE
Route::group(['middleware'=> ['auth']], function(){

	Route::get('admin/', 'AppController@indexAdmin');

	Route::resource('admin/meeting', 'MeetingController', [
		'except' => ['create']
	]);

	Route::get('admin/user/editpassword/{id}','UserController@editpassword');
    Route::post('admin/user/updatepassword', 'UserController@updatepassword');

});
