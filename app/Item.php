<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
	
	use SoftDeletes;
    protected $dates = ['deleted_at'];

	public function subCategory(){
		return $this->belongsTo('App\SubCategory');
	}

	public function order_detail(){
		return $this->hasMany('App\OrderDetail');
	}
	

}
