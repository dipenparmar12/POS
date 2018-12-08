<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ItemController extends ModelCrudController
{

	// public function index($data=null){
	// 	return $data['subCateogry'] = $this->get_model('SubCategory');
	// }

	public function create($data=null){
		$data['categories'] = $this->get_model('category')->all();
		$data['subCateogry'] = $this->get_model('SubCategory')->all();
		return ModelCrudController::create($data);
	}

	    
}
