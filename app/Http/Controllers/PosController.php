<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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

        $data['categories'] = \App\Category::all();
        $data['subCategories'] = \App\SubCategory::all();
        $data['items'] = \App\Item::all();

        return view('pos.'.$view)->with($data);
    }// #index Page (MAIN PAGE)


    public function get_items(Request $request){
        // echo dd($request->subCategory_id);

        $variables['items'] = \App\SubCategory::find($request->subCategory_id)->item()->get();
        
        // $variables['SubCategory_id'] = $subCategory_id;
        // echo ($variables['items']);
        return view('pos.item_table')->with($variables);
    }

    // public function crud(){
    //     return view('admin.pages.crud');
    // }

    // public function Category_display(){}    
}