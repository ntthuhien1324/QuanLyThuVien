<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getList(){
    	return view('librarian.user.list_user');
    }
}
