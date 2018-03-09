<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sach extends Model
{
    //
    protected $table = "sach";

    public function theloai() {
    	return $this->belongsTo('App\theloai','maloai','id');
    }

    public function chitietphieumuon() {
    	return $this->hasMany('App\chitietphieumuon','masach','id');
    }
}
