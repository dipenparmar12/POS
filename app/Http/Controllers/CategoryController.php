<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Category;
use DB;

class CategoryController extends Controller
{
    public function index() {
        $data['categories'] = Category::all();
        return view('crud.category.index')->with($data);
    } ## index()

    public function create() {
        return view('crud.category.create');
    } ## create()
    
    public function store(Request $request) {

        foreach (($request->all()) as $key => $field_data) {
            $data = Category::create($field_data);
        };
        
        // $data = Category::create($request->all());
        // return view('crud.category.index')->with($data);

    } ## store()
    public function show($id) {} ## show()
    public function edit($id) {} ## edit()
    public function update(Request $request, $id) {} ## update()
    public function destroy($id) {} ## destroy()
}
