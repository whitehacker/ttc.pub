<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses' => 'HomeController@hello', 'as' => 'home'));
Route::get('/help', 'UserController@getHelp');
Route::get('/contact', 'UserController@getContact');
Route::group(array('before' => 'guest'), function()
{
Route::get('/user/create', array('uses' => 'UserController@getCreate', 'as' => 'getCreate'));
Route::get('/user/login', array('uses' => 'UserController@getLogin', 'as' => 'getLogin'));
//Cross Site Reference
Route::group(array('before' => 'csrf'), function() {
	Route::post('/user/create', array('uses' => 'UserController@postCreate', 'as' => 'postCreate'));
	Route::post('/user/login', array('uses' => 'UserController@postLogin', 'as' => 'postLogin'));
	});
});

Route::get('/user/student', array('uses' => 'StudentController@getStudent', 'as' => 'getStudent'));


Route::post('/user/student', array('uses' => 'StudentController@postStudent', 'as' => 'postStudent'));

Route::group(array('before' => 'auth'), function(){
	Route::get('/user/logout', array('uses' => 'UserController@getLogout', 'as' => 'getLogout'));
});


Route::get('/user/teacher_in', array('uses' => 'UserController@getTeacherinIndex', 'as' => 'getTeachin'));

Route::post('/user/teacher_in', array('uses' => 'TeacherController@postTeacherin', 'as' => 'postTeacherin'));

Route::get('/user/teachersob', array('uses' => 'TeacherController@getTeacherhsob', 'as' => 'getTeacherhsob'));

Route::get('/user/adminint', array('uses' => 'AdminController@getAdminInt', 'as' => 'getAdminInt'));

Route::get('/user/reports', array('uses' => 'UserController@view_users', 'as' => 'view_users'));

Route::get('/user/{id}', array('uses' => 'UserController@get_view', 'as' => 'get_view'));

Route::get('/userreport/{id}', array('uses' => 'HomeController@user_report', 'as' => 'user_report'));

HTML::macro('clever_link', function($route, $text) {
	if( Request::path() == $route ) {
		$active = "class = 'active'";
	}
	else {
		$active = '';
	}

  return '<li ' . $active . '>' . link_to($route, $text) . '</li>';
});
