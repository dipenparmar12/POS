<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
    	'company_id',
		'name',
		'nick_name',
		'desc',
		'img',
    ];

    public function subCategory(){
    	return $this->hasMany('App\SubCategory');
    }
    

	# // set all data fillabe in model ?
    // protected $fillable = ['*'];

}
