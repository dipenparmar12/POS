<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosController extends Controller
{
    public function href($view='index'){
        return view('admin.'.$view);
    }
    
}