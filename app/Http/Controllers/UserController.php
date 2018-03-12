<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function postEditUser(Request $request, $id){
        $user = User::find($id);
        $user->userName = $request->username;
        $user->password = $request->password;
        $user->ten = $request->firstname;
        $user->ho = $request->lastname;
        $user->save();
        return redirect('librarian/user/listuser')->with('thongbao','Sửa thành công');
    }

    public function getLogin(){
        return view('librarian.login');
    }

    public function postLogin(Request $request){
        $this->validate($request, [
            'username'=>'required',
            'password'=>'required'
        ],[
            'username.required'=>'Bạn chưa nhập username',
            'password,required'=>'Bạn chưa nhập password'
        ]);

        if(Auth::attempt(['username'=>$request->username, 'password'=>$request->password])){
            return redirect('librarian/dashboard');
        } else {
            return redirect('librarian/login')->with('thongbao','Đăng nhập không thành công');
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect('librarian/login');
    }

    public function dangnhap(){
        if(Auth::check()){
            view()->share('userlogin',Auth::user());
        } else view('librarian/login');
    }
}		
