<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ModelCrudController extends Controller
{

    protected $test = false;

    // protected $table = false;
    protected $model = false;
    protected $namespace = false;
    protected $parent_class = false;
    protected $current_class = false;

    public function __construct(){

        //  Class Name without namespace (App\Http\Controllers\ModelCrudController) to ModelCrudController
        // $path = explode('\\', __CLASS__);
        // $this->parent_class = array_pop($path);

        $path = explode('\\', get_called_class());
        $this->current_class = array_pop($path);

        // Set Namespace if Model Class stored in some where else ( default is 'App\' )
        $this->namespace = (!$this->namespace)? "App\\" : $this->namespace;

        if (!$this->model) {
            $class = $this->namespace.explode('Controller', $this->current_class)[0];
            $this->model = new $class;
        }else{
            $class = $this->namespace.$this->model;
            $this->model = new $class;
        }

        dd($this->model);

    } // __construct()


    public function get_model($model_name, $namespace = "App\\" ){

        if (is_null($model_name) || ($model_name=="") || $model_name==false ) { return 0; }

        $class = $namespace.$model_name;

        if (class_exists($class)) {
            return new $class();
        }else{
            return "Mentioned Class not exited";
        }
        
    }

    // List out all Records ( model )
    public function index() {

        // $data['db_records'] = DB::table($this->table_name('plural'))->get();
        // $data['crud_table'] = $this->table_name();
        // return view('crud.index')->with($data);

    } ## index()



    // Fetch Category Form by Ajax Call
    public function create() {
        $data['crud_table'] = $this->table_name();
        return view('crud.'.$this->table_name().'._form')->with($data);
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

                    DB::table($this->table_name('plural'))
                        ->where('id', $field_data['id'] )  // find your user by their email
                        ->limit(1)  // optional - to ensure only one record is updated.
                        ->update($field_data);  // update the record in the DB. 

                return " Data Updated";

                // $record = Category::findOrFail($field_data['id']);
                // $record->update($field_data);

            }else{

                unset($field_data['form_mode'],$field_data['_token']);

                DB::table($this->table_name('plural'))->insert($field_data);

                return " NEW create insert";

                // Category::create($field_data);
            }

        };
        
        // $data = Category::create($request->all());
        // return view('crud.category.index')->with($data);

    } ## store()
    
    public function show($id) {
        
        $result = DB::table($this->table_name('plural'))->where('id',$id)->limit(1)->first();
        // echo $result->name;
        return json_encode($result);

        // return Category::findOrFail($id);
    } ## show()

    public function delete_record($id) {
        DB::table($this->table_name('plural'))->where('id',$id)->delete();
        // Category::findOrFail($id)->delete();
        return "Record Deleted: ".$id;
    } ## destroy()


    public function table_name($str_plural=false){

        // SortHand Method to Get DB table name from current Class
        if ($str_plural == 'plural') {
            return (str_plural(str_replace( 'Controller','', trim(strrchr($this->get_class_name(),'\\') ,'\\'))));    
        }else{
            return ((str_replace( 'Controller','', trim(strrchr($this->get_class_name(),'\\') ,'\\'))));    
        }
        
        # METHOD 1 Optimized
        // $class =  $this->get_class_name() ; // "App\Http\Controllers\TableController"  // Get Current Class name Late::Static Binding
        // $contrller_name =  strrchr($class,'\\'); // \CategoryController
        // $trim_controller = str_replace('\\','', $contrller_name);
        // $table = str_replace('Controller','',$trim_controller);
        // echo $db_table = str_plural($table);

        # METHOD 2 ( LONG time Consuming )
        // $class = $this->get_class_name();// "App\Http\Controllers\TableController"  // Get Current Class name Late::Static Binding 
        // $con = explode('\\', $class); //  array:4 [ 0=>"App", 1=>"Http", 2=>"Controllers", 3=>"TableContrler"];
        // $max = max(array_keys($con)); // Max Key Value 3 (may Alaways return 3)
        // $current_controller = $con[$max]; // AppController,CategoryController etc ( or those who Inherited )
        // $table_name = str_replace('Controller','',$current_controller); // TableName(Category,item etc ) Remove 'Controlelr' Word
        // $db_table = str_plural($table_name); // Get same table name that exited in Database
        // return $db_table;
    } // # table_name(); get Table name from Class

    public function get_class_name(){
        return get_called_class();
    } // # get_class_name() get Current Class Name


    // public function edit($id) {
    //     $data['categories'] = Category::all();
    //     $data['category'] = Category::findOrFail($id);
    //     return view('crud.category.index')->with($data);
    // } ## edit()

    // public function destroy($id) {
    //     return " Deleting  ".$id;
    // } ## destroy()    

}
