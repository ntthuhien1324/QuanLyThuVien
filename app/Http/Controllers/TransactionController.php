<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sach;
use App\docgia;
use App\chitietphieumuon;
use App\phieumuon;
use DateTime;

class TransactionController extends Controller
{
    //

    public function getBorrow(){
    	$docgia = docgia::all()->where('trangthai','<>','Bị Chặn');
    	$sach = sach::all()->whereIn('tinhtrang',['Mới','Cũ']);
    	
		return view('librarian.muontrasach.borrow',['docgia'=>$docgia, 'sach'=>$sach]);
    }

    public function postBorrow(Request $request){
    	$phieumuon = new phieumuon;
    	$phieumuon->madocgia = $request->id;

    	$now = new DateTime();
    	$phieumuon->ngaymuon = $now;
    	$phieumuon->ngaydaohan = $request->ngaydaohan;
    	$phieumuon->save();

		$idphieumuon =  phieumuon::all()->max('id');
    	
    	$idsach = $request->selector;
    	$n = count($idsach);
    	for ($i=0; $i < $n; $i++) { 
    		# code...
    		$chitietphieumuon = new chitietphieumuon;
    		$chitietphieumuon->masach = $idsach[$i];
    		$chitietphieumuon->maphieumuon = $idphieumuon;
    		$chitietphieumuon->tinhtrang = "đang mượn";
    		$chitietphieumuon->ngaytra = "";
    		$chitietphieumuon->save();
    	}
    	
    	return redirect('librarian/transaction/borrow')->with('thongbao','Bạn đã mượn thành công');
    }

    public function getReturn(){
    	$sach = sach::all()->whereIn('tinhtrang',['Mới','Cũ']);
    	$docgia = docgia::all()->where('trangthai','<>','Bị Chặn');
    	$chitietphieumuon = chitietphieumuon::all()->where('tinhtrang','=','đã trả');
    	$phieumuon = phieumuon::all();
    	return view('librarian.muontrasach.return',['sach'=>$sach, 'docgia'=>$docgia, 'chitietphieumuon'=>$chitietphieumuon, 'phieumuon'=>$phieumuon]);
    }

    public function getList(){
    	$sach = sach::all()->whereIn('tinhtrang',['Mới','Cũ']);
    	$docgia = docgia::all()->where('trangthai','<>','Bị Chặn');
    	$phieumuon = phieumuon::all();
    	$chitietphieumuon = chitietphieumuon::all()->where('tinhtrang','=','đang mượn');
    	return view('librarian.muontrasach.list_borrowed',['sach'=>$sach, 'docgia'=>$docgia, 'chitietphieumuon'=>$chitietphieumuon, 'phieumuon'=>$phieumuon]);
    }

    public function getReturnBook($id){
    	$chitietphieumuon = chitietphieumuon::find($id);
    	$chitietphieumuon->tinhtrang = "đã trả";

    	$now = new DateTime();
    	$chitietphieumuon->ngaytra = $now;
    	$chitietphieumuon->save();

    	return redirect('librarian/transaction/list')->with('thongbao','Bạn đã mượn thành công');
    }
}
