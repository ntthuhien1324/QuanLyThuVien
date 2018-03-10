<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sach;
use App\theloai;
use DateTime;

class BookController extends Controller
{
    //
    public function getList(){
    	$sach = sach::all();
    	return view('librarian.sach.all_books',['sach'=>$sach]);
    }

    public function getNewBooks(){
    	$sach = sach::all()->where('tinhtrang','=','Mới');
    	return view('librarian.sach.new_books',['sach'=>$sach]);
    }

    public function getOldBooks(){
    	$sach = sach::all()->where('tinhtrang','=','Cũ');
    	return view('librarian.sach.old_books',['sach'=>$sach]);
    }

    public function getLostBooks(){
    	$sach = sach::all()->where('tinhtrang','=','Mất');
    	return view('librarian.sach.lost_books',['sach'=>$sach]);
    }

    public function getDamageBooks(){
    	$sach = sach::all()->where('tinhtrang','=','Hư');
    	return view('librarian.sach.damage_books',['sach'=>$sach]);
    }

    public function getAddBook(){
    	$theloai = theloai::all();
    	return view('librarian.sach.add_book',['theloai'=>$theloai]);
    }

    public function postAddBook(Request $request){
    	$this->validate($request,[
    		'tensach'=>'required|unique:sach,tensach|max:100',
    		'theloai'=>'required',
    		'tacgia'=>'required|max:50',
    		'nhaxuatban'=>'required|max:100',
    		'namtaiban'=>'required',
    		'tinhtrang'=>'required'
    	],[
    		'tensach.required'=>'Bạn chưa nhập tên sách',
    		'tensach.unique'=>'Tên sách đã tồn tại',
    		'tensach.max'=>'Tên sách có độ dài kí tự nhỏ hơn 100',
    		'theloai.required'=>'Bạn chưa chọn thể loại sách',
    		'tacgia,required'=>'Bạn chưa nhập tên tác giả',
    		'tacgia.max'=>'Tên tác giả có độ dài kí tự nhỏ hơn 50',
    		'nhaxuatban.required'=>'Bạn chưa nhập tên nhà xuất bản',
    		'nhaxuatban.max'=>'Tên nhà xuất bản có độ dài kí tự nhỏ hơn 100',
    		'namtaiban.required'=>'Bạn chưa nhập năm tái bản',
    		'tinhtrang.required'=>'Bạn chưa chọn tình trạng sách'
    	]);

    	$sach = new sach;
    	$sach->tensach=$request->tensach;
    	$sach->maloai=$request->theloai;
    	$sach->tacgia=$request->tacgia;
    	$sach->nhaxuatban=$request->nhaxuatban;
    	$sach->namtaiban=$request->namtaiban;

    	$now=new DateTime();
    	$sach->ngaythem=$now;

    	$sach->tinhtrang=$request->tinhtrang;
    	$sach->save();

    	return redirect('librarian/book/addbook')->with('thongbao','Bạn đã thêm thành công');
    }

    public function getEditBook($id){
    	$sach = sach::find($id);
    	$theloai = theloai::all();
    	return view('librarian.sach.edit_book',['sach'=>$sach,'theloai'=>$theloai]);
    }

    public function postEditBook(Request $request, $id){
    	$this->validate($request,[
    		'tensach'=>'required|unique:sach,tensach|max:100',
    		'theloai'=>'required',
    		'tacgia'=>'required|max:50',
    		'nhaxuatban'=>'required|max:100',
    		'namtaiban'=>'required',
    		'tinhtrang'=>'required'
    	],[
    		'tensach.required'=>'Bạn chưa nhập tên sách',
    		'tensach.unique'=>'Tên sách đã tồn tại',
    		'tensach.max'=>'Tên sách có độ dài kí tự nhỏ hơn 100',
    		'theloai.required'=>'Bạn chưa chọn thể loại sách',
    		'tacgia,required'=>'Bạn chưa nhập tên tác giả',
    		'tacgia.max'=>'Tên tác giả có độ dài kí tự nhỏ hơn 50',
    		'nhaxuatban.required'=>'Bạn chưa nhập tên nhà xuất bản',
    		'nhaxuatban.max'=>'Tên nhà xuất bản có độ dài kí tự nhỏ hơn 100',
    		'namtaiban.required'=>'Bạn chưa nhập năm tái bản',
    		'tinhtrang.required'=>'Bạn chưa chọn tình trạng sách'
    	]);

    	$sach = sach::find($id);
    	$sach->tensach=$request->tensach;
    	$sach->maloai=$request->theloai;
    	$sach->tacgia=$request->tacgia;
    	$sach->nhaxuatban=$request->nhaxuatban;
    	$sach->namtaiban=$request->namtaiban;

    	$now=new DateTime();
    	$sach->ngaythem=$now;

    	$sach->tinhtrang=$request->tinhtrang;
    	$sach->save(); 

    	return redirect('librarian/book/editbook/'.$id)->with('thongbao','Bạn đã sửa thành công');
    }

    public function getDeleteBook($id){
    	$sach = sach::find($id);
    	$sach->delete();
    	return redirect('librarian/book/list')->with('thongbao','Xóa thành công');
    }
}
