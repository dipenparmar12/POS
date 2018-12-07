<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends ModelCrudController
{

	protected $model = 'User';

	public function index(){
		 $item = $this->get_model("Item");
		 return $item->all();
	}

}
