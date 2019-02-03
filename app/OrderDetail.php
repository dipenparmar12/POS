<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{

	use SoftDeletes;

	protected $table = 'OrderDetails';

	protected $fillable = [
		'item_id',
		'order_id',
		'table_id',
		'item_qty',
		'remark',
		'status'
	];
    
    public function order(){
    	return $this->belongsTo('App\Order');
    }

    public function item(){
    	return $this->belongsTo('App\Item');
    }

    // public function table(){
    // 	return $this->belongsTo('App\Item');
    // }

    // public function table(){
    // 	return $this->belongsTo('App\Table');
    // }
    

} // # OrderDetail

	
	
	
	
	