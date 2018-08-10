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

// AUTH MIDDLEWARE
Route::group(['middleware'=> ['auth']], function(){

Route::get('admin/', 'AppController@indexAdmin');

Route::resource('admin/meeting', 'MeetingController', [
	'except' => ['create']
]);

Route::resource('admin/employee', 'EmployeeController', [
	'except' => ['create']
]);

});
