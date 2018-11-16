<?php
namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;
use DB;
use Session;
use Excel;
use URL;

// Temp Fucntion for testing Purose
function s($str){ echo '<pre>';  print_r($str);  echo '</pre>'; }

class TestC extends Controller
{
    public function test($paramenter="Test"){
        echo 'Test@test'.'<br>';

        // echo $paramenter;

        // echo URL::current();
        $uri =  \Request::getRequestUri();
        echo $uri;

        s(.explode('/', $uri)[1]);


        

        // $test = DB::table(str_plural(Session::get('table')))->where('id',55)->get()->first();

        // s($test);
        // $this->get_table_name();
        // $this->upload_seeder(); 
        // $this->get_file_list_from_dir();
        // $this->tables();
        // $this->get_table_data($table="items");
        // $this->table_data();

    } ## test() 
    

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