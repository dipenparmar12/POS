<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosController extends Controller
{
    public function href($view='index'){
        $data['categories'] = \App\Category::all();
        $data['sub_categories'] = \App\Sub_category::all();        
        // return view('admin.pages.'.$view)->with($data);
        return view('admin.pages.'.$view)->with($data);
    }

    public function Category_display()
    {
        
    }
    
}