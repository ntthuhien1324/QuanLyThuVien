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
	Route::group(['prefix'=>'member'], function(){
		Route::get('listmember','MembersController@getMembers');

		Route::get('addmember','MembersController@getAddMembers');
		Route::post('addmember','MembersController@postAddMembers');

		Route::get('editmember/{id}','MembersController@getEditMembers');
		Route::post('editmember/{id}','MembersController@postEditMembers');

		Route::get('delmember/{id}','MembersController@getDelMembers');

		
	});
	Route::group(['prefix'=>'user'], function(){
		Route::get('listuser','UserController@getUser');
		Route::post('edituser/{id}','UserController@postEditUser');

		Route::get('adduser','UserController@getAddUser');
		Route::post('adduser','UserController@postAddUser');
		Route::get('delmember/{id}','UserController@getDelUser');
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

	Route::group(['prefix'=>'transaction'], function(){
		Route::get('borrow','TransactionController@getBorrow');
		Route::post('borrow','TransactionController@postBorrow');

		Route::get('return','TransactionController@getReturn');
		Route::get('list','TransactionController@getList');

		Route::get('return/{id}','TransactionController@getReturnBook');
	});
});

