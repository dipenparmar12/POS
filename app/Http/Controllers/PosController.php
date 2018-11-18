<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosController extends Controller
{

    public function index($view='pos'){

        $data['categories'] = \App\Category::all();
        $data['subCategories'] = \App\SubCategory::all();
        $data['items'] = \App\Item::all();


        return view('admin.pages.'.$view)->with($data);

    }

    // public function crud(){
    //     return view('admin.pages.crud');
    // }

    // public function Category_display(){}
    
}