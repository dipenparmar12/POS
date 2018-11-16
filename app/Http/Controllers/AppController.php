<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\App;
use DB;
use App\Category;
use Session;

class AppController extends Controller
{

    public function __construct() {
        // $this->middleware('subscribed')->except('store');
        // $this->middleware('Session_Check');
    }

    public function get_table_records(){
        $data['db_records'] =  DB::table(str_plural(Session::get('table')))->get();
        // $data['db_records'] = Category::all();
        return view('crud.category._table')->with($data);
    }// get_table_records() Get HTML Table



    // List out all Records ( Category Table )
    public function index() {

        $data['db_records'] = DB::table(str_plural(Session::get('table')))->get();
        return view('crud.category.index')->with($data);
        // str_plural(Session::get('table'))
        // $data['db_records'] = Category::all();

    } ## index()



    // Fetch Category Form by Ajax Call
    public function create() {
        return view('crud.category.category_form');
    } ## create()


    
    public function store(Request $request) {
        // return dd($request->data['form_mode']);
        // return $request->data['form_mode'];
        foreach (($request->all()) as $key => $field_data) {
            // Category::create($field_data);
            // dd($field_data);

            // Record Update, otherwise Create New_One
            if ($request->data['form_mode'] == 'edit') {
                // return " Edit || Update ";
                unset($field_data['form_mode'],$field_data['_token']);
                $record = Category::findOrFail($field_data['id']);
                $record->update($field_data);

            }else{
                Category::create($field_data);
                return " NEW create insert";
            }

        };
        
        // $data = Category::create($request->all());
        // return view('crud.category.index')->with($data);

    } ## store()
    
    public function show($id) {
        return Category::findOrFail($id);
    } ## show()

    public function delete_record($id) {
        // Category::findOrFail($id)->delete();
        return "Record Deleted: ".$id;
    } ## destroy()



    // public function edit($id) {
    //     $data['categories'] = Category::all();
    //     $data['category'] = Category::findOrFail($id);
    //     return view('crud.category.index')->with($data);
    // } ## edit()

    // public function destroy($id) {
    //     return " Deleting  ".$id;
    // } ## destroy()    

 
}
