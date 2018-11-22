<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	public function subCategory(){
		return $this->belongsTo('App\SubCategory');
	}

	public function order_detail(){
		return $this->hasMany('App\OrderDetail');
	}
	

}
