<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    //
    protected $table = "theloai";

    public function sach(){
    	return $this->hasMany('App\sach','maloai','id');
    }
}
