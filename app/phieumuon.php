<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phieumuon extends Model
{
    //
    protected $table = "phieumuon";

    public function chitietphieumuon() {
    	return $this->hasMany('App\chitietphieumuon','maphieumuon','id');
    }

    public function docgia(){
    	return $this->belongsTo('App\docgia','madocgia','id');
    }
}
