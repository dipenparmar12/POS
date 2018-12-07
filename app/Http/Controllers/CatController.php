<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Category;

class CatController extends Controller
{
    
    public function index($table_model = 'Category') {
        
        $class = 'App\\'.$table_model;
        $cat = new $class;

        // $variables['title'] = 'Category';
        // $variables['table_data'] = Category::all();
        // return view("operation.{$variables['title']}.index")->with($variables);

    }

    public function create() {}

    public function store(Request $request) {}

    public function show($id) {}

    public function edit($id) {}

    public function update(Request $request, $id) {}

    public function destroy($id) {}

}
