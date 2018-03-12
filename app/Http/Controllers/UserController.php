<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function getUser() {
        $user = User::all();
        return view('librarian.user.list_user',['user'=>$user]);

    }
    public function getAddUser(){
        return view('librarian.user.modal_add_user');
    }

    public function postAddUser(Request $request){
        $user = new User();
        $user->userName=$request->username;
        $user->password=$request->password;
        $user->ten=$request->firstname;
        $user->ho=$request->lastname;
        $user->save();
        return redirect('librarian/user/listuser')->with('thongbao','Thêm thanh công');
    }
    public function getDelUser($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('librarian/user/listuser')->with('thongbao','Xóa thành công');
    }
  }