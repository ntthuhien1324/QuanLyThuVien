<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\docgia;

class MembersController extends Controller
{
    //
    public function getMembers() {
        $member = docgia::all();
        return view('librarian.docgia.members',['member'=>$member]);

    }

    public function getAddMembers() {
        return view('librarian.docgia.add_member');
    }
   
    public function postAddMembers(Request $request) {
        $this->validate($request,
            [
                'ten' => 'required|min:3|max:100'
            ],
            [
                'ten.required' => 'Ban chua nhap ten',
                'ten.min'=>'Ten the loai phai co do dai 3-100 ky tu',
            ]);
            $member = new docgia;
            $member->ten = $request->ten;
            $member->ho = $request->ho;
            $member->gioitinh = $request->gioitinh;
            $member->diachi = $request->diachi;
            $member->sdt = $request->sdt;
            $member->nguoidung = $request->nguoidung;
            $member->trangthai = "Hoạt động";

            $member->save();
            
            return redirect('librarian/member/addmember')->with('thongbao','Them thanh cong');
    }

    public function getEditMembers($id) {
        $member = docgia::find($id);
        return view('librarian.docgia.edit_member',['member'=>$member]);
    }

    public function postEditMembers(Request $request, $id) {
        $member = docgia::find($id);
        $this->validate($request,[
            'ten' => 'required|min:3|max:100'
        ],
        [
            'ten.required' =>'Ban chua nhap ten',        
            'ten.min'=>'Ten the loai phai co do dai 3-100 ky tu',
            'ten.max'=>'Ten the loai phai co do dai 3-100 ky tu',
        ]);
        $member->ten= $request->ten;
        $member->ho = $request->ho;
        $member->gioitinh = $request->gioitinh;
        $member->diachi = $request->diachi;
        $member->sdt = $request->sdt;
        $member->nguoidung = $request->nguoidung;
        $member->trangthai = $request->trangthai;
        $member->save();

        return redirect('librarian/member/editmember/'.$id)->with('thongbao','Sua thanh cong');
    }

    public function getDelMembers($id) {
        $member = docgia::find($id);
        $member->delete();
        return redirect('librarian/member/listmember')->with('thongbao','Xoa thanh cong');
    }
}
