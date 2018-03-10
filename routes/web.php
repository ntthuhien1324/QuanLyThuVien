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
    return view('welcome');
});

Route::get('login',function(){
	return view('librarian.login');
});

Route::get('dashboard',function(){
	return view('librarian.layout.dashboard');
});

Route::group(['prefix'=>'librarian'], function(){
	Route::group(['prefix'=>'user'], function(){
		Route::get('list','UserController@getList');
	});

	Route::group(['prefix'=>'book'], function(){
		Route::get('list','BookController@getList');
		Route::get('newbooks','BookController@getNewBooks');
		Route::get('oldbooks','BookController@getOldBooks');
		Route::get('lostbooks','BookController@getLostBooks');
		Route::get('damagebooks','BookController@getDamageBooks');

		Route::get('addbook','BookController@getAddBook');
		Route::post('addbook','BookController@postAddBook');

		Route::get('editbook/{id}','BookController@getEditBook');
		Route::post('editbook/{id}','BookController@postEditBook');

		Route::get('deletebook/{id}','BookController@getDeleteBook');
	});
});

