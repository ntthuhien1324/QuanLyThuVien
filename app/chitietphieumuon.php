<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietphieumuon extends Model
{
    //
	protected $table = "chitietphieumuon";

	public function phieumuon() {
		return $this->belongsTo('App\phieumuon','maphieumuon','id');
	}

	public function sach() {
		return $this->belongsTo('App\sach','masach','id');
	}
}
