<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class PosController extends Controller
{

    public function href($fun=false,$p1=null,$p2=null){

        if ($p1 && $p2) {
            return $this->$fun($p1);
            // echo "P1 , p2 Test";
        }elseif ($p1) {
            return $this->$fun($p1,$p2);
            // echo "P1 Test";
        }

        return $this->$fun();
    }// #dynamic method Call ( We Dont need to Make New Route for Every Method )


    public function index($view='pos'){

        $variables['categories'] = \App\Category::all();
        $variables['subCategories'] = \App\SubCategory::all();
        $variables['items'] = \App\Item::all();
        $variables['tables'] = \App\Table::all();

        return view('pos.'.$view)->with($variables);
    }// #index Page (MAIN PAGE)


    public function get_items(Request $request){
        // echo dd($request->subCategory_id);

        $variables['items'] = \App\SubCategory::find($request->subCategory_id)->item()->get();
        
        // $variables['SubCategory_id'] = $subCategory_id;
        // echo ($variables['items']);
        return view('pos.item_table')->with($variables);

    } // # get_items();


    public function active_table_select(Request $request){
        $table =  \App\Table::find($request->id);
            
        switch ($table->status) {
            case 'empty':
                    $table->status = "hold";
                    $table->save();    
                break;
            case 'hold':
                # code...
                break;
            case 'unpaid':
                # code...
                break;
            default:
                # code...
                break;
        }

        Session::put('active_table',$table->id);
        $variables['tables'] = \App\Table::all();
        return view('pos.layout.table_select_palette')->with($variables);
    }

    public function section_order_items(){
        $variables['active_table_order_items'] = 1;
        return view('pos.layout.order_items')->with($variables);
    }



}