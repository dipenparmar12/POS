<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;


class ModelCrudController extends Controller
{

    protected $model = false;  // User, Item, Category
    protected $crud_table = false; // if Table name is diffrent in DB; the set it menualy
    protected $namespace = false; // if Model File/Class stored in different direcotry set namespace
    protected $current_class = false; // Get Called Class (Child Class Name) // ItemContorller,UserController

    public function __construct( ){

        // Class Name without namespace (App\Http\Controllers\ModelCrudController) to ModelCrudController
        // $path = explode('\\', __CLASS__);
        // $this->parent_class = array_pop($path);

        // App\Http\Controllers To [0=>"App", 1 =>"Http", 2=>"Controllers"];
        $path = explode('\\', get_called_class());

        // TableController,ItemController
        $this->current_class = array_pop($path); 
        
        // ItemController to Item
        $this->crud_table = explode('Controller', $this->current_class)[0];  

        // Set Namespace if Model Class stored in some where else ( default is 'App\' )
        $this->namespace = (!$this->namespace)? "App\\" : $this->namespace;

        if (!$this->model) {
            $class = $this->namespace.$this->crud_table;
            $this->model = new $class;
        }else{
            $class = $this->namespace.$this->model;
            $this->crud_table = $this->model;
            $this->model = new $class;
        }

    } // __construct()


    public static function get_model($model_name, $namespace = "App\\" ){

        if (is_null($model_name) || ($model_name=="") || $model_name==false ) { return 0; }        
        $class_name = $namespace.$model_name;

        if (class_exists($class_name)) {
            return new $class_name();
        }else{
            return "Mentioned class not exited";
        }

    } // get_model('m_name','nameSpace');


    // List out all Records ( model )
    public function index( $data=null )
    {
        $data['db_records'] = $this->model->all();
        $data['crud_table'] = $this->crud_table;
        return view('model_crud.index')->with($data);
    } ## index()

    
    // Fetch Category Form by Ajax Call
    public function create( $data=null ) {
        $data['crud_table'] = $this->crud_table;
        return view('model_crud.'.$this->crud_table.'._form')->with($data);
    } ## create()


    public function store(Request $request, $id=false) {
        // return dd($request->data['form_mode']);
        // return $request->data['form_mode'];
        // return dd($request->data);

        // echo "Store..Method.."; // Check Session are Created [in Show()method] after Update Data 
        if ( ( $request->data['form_mode'] == 'edit' ) )  {

            // Check Session are Created [in Show()method] after Update Data 
            // if ( (Session::get('update/'.$request->data['id']) ==  $request->data['id'])  ) {
                $this->model->find($request->data['id'])->update($request->data);
                Session::forget('update/'.$request->data['id']);    
            // }

        }else{
            $this->model->create($request->data);
        }

    } ## store() // if you put return then throw error,while Saving data 
    
    public function show($id) {
        echo Session::put( 'update/'.$id , $this->model->find($id)->id );
        return json_encode($this->model->findOrFail($id));
    } ## show()


    // Working 
    public function destroy($id) {
        $this->model->destroy($id);
        return "Record Deleted: by destroy() method : ".$id;
    } ## destroy()


    public function table_records() {
        return view("model_crud.{$this->crud_table}._table")->with( ['db_records'=>$this->model->all()] );
        // // return $data['db_records'] = $this->model->all();
        // return view("model_crud.{$this->crud_table}._table")->with( $data );
    } //edit() method usring For Refresh table ( Get Table records and Fetch it by Ajax Call )
    

    public function get_data(Request $request){
        return $this->get_model($request->table)->all();
        // return $request->table;
        // return ($request->all());
    } // get_data(table) from Ajaz Request


    // public function validation(Request $request){
    //     $request->validate([
    //         'title' => 'required',
    //         'body' => 'required'
    //     ]);
    // }
    
    
}



// -----------------Example----------------------------
// ---- How TO Make Object of Any Controller ---
// ---------------------------- -----------------------
    // public function index( $data = null ){
        // $cat =  new CategoryController();
        // return $cat->index();
    // }



// -----------------Example----------------------------
// ---- How TO USE Controllers Method in Blade View ---
// ---------------------------- -----------------------
    // @php
    //   $cat =  \App\Http\Controllers\ModelCrudController::get_model('SubCategory')->all();
    //   dd($cat);
    //   $data = \App\Http\Controllers\ModelCrudController::get_model('SubCategory')->where('category_id','=',2)->toArray();
    // @endphp



// -----------------TESTING --------------------------
// -----------------JUST TESTING----------------------
// -------------------------------------------
    // function where($table,$where='id',$value=null){
    //     return \App\Http\Controllers\ModelCrudController::get_model($table)->where($where,$value);
    // }
    // $cates = where('SubCategory', ['category_id'=>1] );
    // dd( $cates->get() );