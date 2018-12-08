<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoryController extends ModelCrudController
{


    public function index( $data = null ){
    	$cat =  new CategoryController();
    	return $cat->index();
    }
		
	// public function create( $data=null ) {
	// 	$data['categories'] = $this->get_model('category')->all();
 //    	return ModelCrudController::create($data);	
	// }

}
