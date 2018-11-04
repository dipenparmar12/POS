<?php 
namespace App\Helper;

class Helper  
{
    public function test_helper(){
        echo "hello Helper class Global Funtion";
    }   

    public function s($s){
        echo "<pre>";
        print_r($s);
        echo "</pre>";
    }

    

}
