<?php
namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class TestC extends Controller
{
    public function test(){
        echo 'Test@test'.'<br>';
        echo Category::all()->random();
    }

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
    } #get_table_data`()

    public function table_data(){
        $tables = DB::select('SHOW TABLES');

        foreach($tables as $table){
            echo $table->Tables_in_pos;
            echo '<br>';
            echo DB::table($table->Tables_in_pos)->get();
            echo '<hr>';
        }
    } #table_data()



}