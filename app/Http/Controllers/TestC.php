<?php
namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;
use DB;
use Session;
use Excel;
use URL;
use Route;
use Schema;
use App\Item;
use App\SubCategory;

use App\testTrait;

// Temp Fucntion for testing Purose
function s($str){ echo '<pre>';  print_r($str);  echo '</pre>'; }

class TestC extends Controller
{   
    
    public function href($fun=false,$p1=null,$p2=null){

        if ($p1 && $p2) {
            // echo "P1 , p2";
            return $this->$fun($p1);
        }elseif ($p1) {
            // echo "P1";
            return $this->$fun($p1,$p2);
        }

        return $this->$fun();
    }// #dynamic method Call ( We Dont need to Make New Route for Every Method )


    public function test($paramenter="Test"){
        echo 'Test@test'.'<br>';
        
        // $this->item_by_subCategory($paramenter);
        // $this->drop_tables();
        // $this->get_controller_names();
        // $this->trim_table_name_from_class_name();
        // $this->get_table_from_uri();
        // $this->get_table_name();
        // $this->upload_seeder(); 
        // $this->get_file_list_from_dir();
        // $this->tables();
        // $this->get_table_data($table="items");
        // $this->table_data();

    } ## test() 

    

    public function item_by_subCategory($id=3){

        $test = SubCategory::find($id)->item()->get();

        echo $test;

    }


    public function drop_tables($truncate=null){
        $tables = DB::select('SHOW TABLES');
        $dbName = DB::getdatabaseName();
        foreach($tables as $DBtables){
            foreach ($DBtables as $key => $tableName) {
                if ( $truncate == 'truncate') {
                    DB::table($tableName)->truncate();
                    echo 'Now Table '.$tableName.' is Empty. <br>';
                }else{
                    Schema::drop($tableName);
                    echo 'Table '.$tableName.' Droped. <br>';    
                }
            }
        }
    }

    public function get_controller_names(){
        $controllers = [];

            foreach (Route::getRoutes()->getRoutes() as $route)
            {
                $action = $route->getAction();

                if (array_key_exists('controller', $action))
                {
                    // You can also use explode('@', $action['controller']); here
                    // to separate the class name from the method
                    $controllers[] = $action['controller'];
                }
            }

        s($controllers);
    } ## get_controller_names()
    
    public function trim_table_name_from_class_name(){
        return (str_plural(str_replace( 'Controller','', trim(strrchr($this->get_class_name(),'\\') ,'\\'))));
        
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

        // s(__Class__);
        // s(explode('\\', __Class__));
        // s(max(explode('\\', __Class__)));
        // s(str_replace('Contoller','',max(explode('\\', __Class__))));
    }

    public function get_table_from_uri(){
        // echo URL::current();
        $uri =  \Request::getRequestUri();
        echo $uri;
        echo(explode('/', $uri)[1]);
    }

    public function get_table_name(){

        $arr = ['categories','items'];

        $tables_obj = json_decode(json_encode( DB::select('SHOW TABLES') ), true);
        foreach ($tables_obj as $key => $value) {
            $tables[] =($value['Tables_in_pos']);
        }
        if (in_array('items', $tables)) {
            
        }else{
            
        }
        
        // foreach ($tables as $table) {
            // echo $table->Tables_in_pos," <hr>";
        // }

        // echo s($table);

    }

    public function upload_seeder() {
        $seeder_files = glob(public_path("factories\*.csv"));

        s($seeder_files);
        
        foreach($seeder_files as $file) {

            Session::put('TEMP_T',pathinfo($file)['filename']);
            Excel::load( $file ,function($reader) {
                foreach ($reader->toArray() as $key => $row) {
                    if(!empty($row)) {
                        // s($row);
                        $temp_t = Session::get('TEMP_T');
                        DB::table($temp_t)->insert($row);
                    }
                }#foreach
            }); # excelMethod

        } #foreach
        Session::forget('TEMP_T');
    } ## upload_dump(Request $request)


    public function get_file_list_from_dir(){
        // get_file_list_from_dir
        // s(glob(public_path("factories\*.csv")));

    } ## get_file_list_from_dir()

    public function index(){
        echo "Test Controller";
    } ## index()

    public function tables(){
        $tables = DB::select('SHOW TABLES');
        foreach($tables as $table){
            echo $table->Tables_in_pos;
            echo '<br>';
        }
    } ## tables();

    public function get_table_data($table="items"){
        return DB::table($table)->get();
    } ## get_table_data($table_name)

    public function table_data(){
        $tables = DB::select('SHOW TABLES');

        foreach($tables as $table){
            echo $table->Tables_in_pos;
            echo '<br>';
            echo DB::table($table->Tables_in_pos)->get();
            echo '<hr>';
        }
    } ## table_data()


        // public function index() {} ## index()
        // public function create() {} ## create()
        // public function store(Request $request) {} ## store()
        // public function show($id) {} ## show()
        // public function edit($id) {} ## edit()
        // public function update(Request $request, $id) {} ## update()
        // public function destroy($id) {} ## destroy()           
}