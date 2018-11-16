<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Session;
use App\Category;
use DB;

class CategoryController extends AppController
{
<<<<<<< HEAD
	
=======
    
    protected $table;

    public function __construct(){
        Session::put('table',"Categories");
        $this->table = Session::get('table');
    }

    // List out all Records ( Category Table )
    
>>>>>>> e70184c5916a29c530198c4878e539d3ca80438b
} // #end of Category Class
