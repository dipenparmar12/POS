<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;


class ModelCrudController extends Controller
{

    protected $model = false;
    protected $crud_table = false;
    protected $namespace = false;
    protected $current_class = false;

    public function __construct(){

        // Class Name without namespace (App\Http\Controllers\ModelCrudController) to ModelCrudController
        // $path = explode('\\', __CLASS__);
        // $this->parent_class = array_pop($path);

        $path = explode('\\', get_called_class());
        $this->current_class = array_pop($path);

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


    public function get_model($model_name, $namespace = "App\\" ){

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

        // echo "Store..Method..";
        if ( ( $request->data['form_mode'] == 'edit' ) && (Session::get('update/'.$request->data['id']) ==  $request->data['id'])  )  {
            $this->model->find($request->data['id'])->update($request->data);
            Session::forget('update/'.$request->data['id']);
        }else{
            $this->model->create($request->data);
        }

    } ## store()
    
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

}
