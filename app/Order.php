<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
	
	use SoftDeletes;
    protected $dates = ['deleted_at'];

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
