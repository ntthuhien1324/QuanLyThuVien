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

use App\theloai;
Route::get('thu',function(){
	$theloai = theloai::find(1);
	foreach($theloai->sach as $sach){
		echo $sach->tensach."<br>";
	}
});

Route::get('listuser', function(){
	return view('librarian.user.list_user');
});

Route::get('muonsach', function(){
	return view('librarian.muontrasach.borrow');
});

Route::get('listtrasach', function(){
	return view('librarian.muontrasach.return');
});

Route::get('listborrowed', function(){
	return view('librarian.muontrasach.list_borrowed');
});

Route::get('books', function(){
	return view('librarian.sach.all_books');
});

Route::get('addbook', function(){
	return view('librarian.sach.add_book');
});

Route::get('members', function(){
	return view('librarian.docgia.members');
});

Route::get('addmember', function(){
	return view('librarian.docgia.add_member');
});

Route::get('editmember', function(){
	return view('librarian.docgia.edit_member');
});