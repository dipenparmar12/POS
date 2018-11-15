<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Session;
use App\Category;
use DB;

class CategoryController extends AppController
{
    
    protected $table;

    public function __construct(){
        Session::put('table',"Categories");
        $this->table = Session::get('table');
    }

    // List out all Records ( Category Table )
    
} // #end of Category Class
