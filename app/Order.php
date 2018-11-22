<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = [
		// 'id',
		'customer_id',
		'table_id',
		'status',
		'paid',
		'amount',
		'discount',
		'bill_printed',
		'type'
	];
    
    public function order_details(){
 		return $this->hasMany('App\OrderDetail');
    }



   
}
