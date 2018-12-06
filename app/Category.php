<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

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
