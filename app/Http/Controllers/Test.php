<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Test extends Controller
{
    public function index(){
        echo "Test Controller";
    }
    public function tables(){
        $tables = DB::select('SHOW TABLES');
        foreach($tables as $table){
            echo $table->Tables_in_pos;
            echo '<br>';
        }
    }

    public function get_table_data($table="items"){
        return DB::table($table)->get();
    }

    public function table_data(){
        $tables = DB::select('SHOW TABLES');
        foreach($tables as $table){
            echo $table->Tables_in_pos;
            echo '<br>';
            echo DB::table($table->Tables_in_pos)->get();
            echo '<hr>';
        }
    }



}