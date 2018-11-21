<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = [
		'customer_id',
		'table_id',
		'status',
		'paid',
		'amount',
		'discount',
		'bill_printed',
		'type'
	];
    
    public function orderDetails(){
 		return $this->hasMany('App\OrderDetail');
    }

    public function table(){
    	return $this->hasMany('App\Table');
    }


   
}
