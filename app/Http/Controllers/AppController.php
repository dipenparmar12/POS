<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\App;
use DB;
use App\Category;
use Session;

// echo "<script> consol.log('{$result}') </script>";

// function s($str){ echo '<pre>';  print_r($str);  echo '</pre>'; }

class AppController extends Controller
{

    protected $table;

    public function get_table_records(){
        $data['db_records'] =  DB::table(str_plural(Session::get('table')))->get();
        return view('crud.'.Session::get('table').'._table')->with($data);

        // $data['db_records'] = Category::all();
    }// get_table_records() Get HTML Table



    // List out all Records ( Category Table )
    public function index() {

        $data['db_records'] = DB::table(str_plural(Session::get('table')))->get();
        return view('crud.index')->with($data);

        // str_plural(Session::get('table'))
        // $data['db_records'] = Category::all();

    } ## index()



    // Fetch Category Form by Ajax Call
    public function create() {
        return view('crud.'.Session::get('table').'._form');
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

                    DB::table(str_plural(Session::get('table')))
                        ->where('id', $field_data['id'] )  // find your user by their email
                        ->limit(1)  // optional - to ensure only one record is updated.
                        ->update($field_data);  // update the record in the DB. 

                return " Data Updated";

                // $record = Category::findOrFail($field_data['id']);
                // $record->update($field_data);

            }else{

                unset($field_data['form_mode'],$field_data['_token']);

                DB::table(str_plural(Session::get('table')))->insert($field_data);

                return " NEW create insert";

                // Category::create($field_data);
            }

        };
        
        // $data = Category::create($request->all());
        // return view('crud.category.index')->with($data);

    } ## store()
    
    public function show($id) {
        
        $result = DB::table(str_plural(Session::get('table')))->where('id',$id)->limit(1)->first();
        // echo $result->name;
        return json_encode($result);

        // return Category::findOrFail($id);
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
