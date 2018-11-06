<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosController extends Controller
{
    public function href($view='index'){
        $data['category'] = \App\Category::all();
        
        return view('admin.pages.'.$view)->with($data);
    }

    public function Category_display()
    {
        
    }
    
}