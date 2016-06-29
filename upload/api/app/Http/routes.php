<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::group(['middleware' => 'cors', 'prefix' => 'v1/user'], function(){
	Route::get('messages', 'MessagesController@index'); //list 50 last messages
	Route::post('messages', 'MessagesController@store'); //store a message with email if exists
});

Route::group(['middleware' => 'cors', 'prefix' => 'v1/admin'], function(){
	Route::get('messages', 'MessagesController@adminList'); //list all messages
	Route::get('messages/delete/{id}', 'MessagesController@adminDelete'); //delete a message
	Route::get('messages/deleteEmail/{id}', 'MessagesController@adminDeleteEmail'); //delete an email

	Route::get('emails', 'MessagesController@adminEmails'); //get all emails
	Route::get('dash', 'MessagesController@adminDash'); //get all dash details
	Route::get('export', 'MessagesController@adminExport'); //get all dash details
		Route::post('sendMails', 'MessagesController@sendMails'); //send to all emails


	Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
	Route::post('authenticate', 'AuthenticateController@authenticate');
	Route::get('authenticate/user', 'AuthenticateController@getAuthenticatedUser');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

