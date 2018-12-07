<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoryController extends ModelCrudController
{
    protected $model = 'user';

    public function index( $data = null ){

    	$data['item'] = $this->get_model('item')->all();
    	$data['test'] = $this->get_model('user')->all();

    	return ModelCrudController::index($data);
    }



}

