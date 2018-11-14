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
        return view('crud.category.category_form');
    } ## create()
    
    public function store(Request $request) {
        // return dd($request->data['form_mode']);
        // return $request->data['form_mode'];

        foreach (($request->all()) as $key => $field_data) {
            Category::create($field_data);
            
            if ($request->data['form_mode'] == 'edit') {
                return " Edit = Update ";
                // Category::update($field_data);
            }else{
                return " NEW create insert";
                // Category::create($field_data);
            }

        };
        
        // $data = Category::create($request->all());
        // return view('crud.category.index')->with($data);

    } ## store()
    
    public function edit($id) {
        $data['categories'] = Category::all();
        $data['category'] = Category::findOrFail($id);
        $data['form_mode'] = "edit";
        return view('crud.category.index')->with($data);
    } ## edit()
    public function show($id) {} ## show()
    public function update(Request $request, $id) {} ## update()
    public function destroy($id) {} ## destroy()
}
