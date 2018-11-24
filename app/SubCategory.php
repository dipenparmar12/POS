<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{


    protected $table = 'subCategories';
	
	use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function item(){
    	return $this->hasMany('App\Item');
    }

 	public function Category(){
 		return $this->belongsTo('App\Category');
 	}   

}
