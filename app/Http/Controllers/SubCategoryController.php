<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoryController extends ModelCrudController
{
	
	// protected $model = 'SubCategory';

	// public function index($data=null){
	// 	return $data['subCateogry'] = $this->get_model('SubCategory');
	// }

	public function create( $data=null ) {
		$data['categories'] = $this->get_model('category')->all();
    	return ModelCrudController::create($data);	
	}

}
