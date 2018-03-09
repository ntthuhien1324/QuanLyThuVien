<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class docgia extends Model
{
    //
    protected $table = "docgia";

    public function phieumuon(){
    	return $this->hasMany('App\phieumuon','madocgia','id');
    }

    public function chitietphieumuon(){
    	return $this->hasManyThrough('App\chitietphieumuon','App\phieumuon','maphieumuon','madocgia','id');
    }
}
