<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

// use Category;
// use SubCategory;
// use Item;

// use Table;
// use Order;
// use OrderDetail;


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
        $variables['order'] = $this->get_order_details_item_details(Session::get('order_id'));

        return view('pos.'.$view)->with($variables);

    }// #index Page (MAIN PAGE)



    public function select_dinner_table_by_id(Request $request)  {  
        
        $table =  \App\Table::find($request->id);
        // dd($request->id);
        
        if ($table->status == "empty") {
            
            $order = \App\Order::create(['table_id'=>$table->id,'status'=>'hold']);

            $table->status = "hold";
            $table->order_id = $order->id;
            $table->save();

            Session::put('active_table',$table->id);
            Session::put('order_id',$table->order_id);
            
        }elseif ($table->status == "hold") {
            // return " ";

            $order = \App\Order::where('table_id', $table->id)->where('status','hold')->first();
            // dd($order->id);
            Session::put('active_table', $table->id);
            Session::put('order_id',$table->order_id);


        }elseif ($table->status == "unpaid") {
            # code...
        }else{

        }


        $variables['tables'] = \App\Table::all();
        return view('pos.layout.section_table_palette')->with($variables);

    } // select_dinner_table_by_id()


    

    public function section_order_cart(){
        $variables['order'] = $this->get_order_details_item_details(Session::get('order_id'));
        return view('pos.layout.section_order_cart')->with($variables);

    } //section_order_items()


    public function add_item_to_section_order_card_table(Request $request){        
        
        $insert_data = [
            'table_id'=>Session::get('active_table'),
            'order_id'=>Session::get('order_id'),
            'item_id'=>$request->item_id
        ];

        try {
            $order_details = \App\OrderDetail::create( $insert_data ) ;
        } catch (Exception $e) {
            return "Errors";
        }

    } // add_item_to_section_order_card_table()



    public function check_out(){
        return "Check_Out for Order_id: ".Session::get('order_id')." table_id :".Session::get('active_table');
        // return \App\Order::find(Session::get('order_id'));
    } // check_out()


    public function abort_order(){

        $table = \App\Table::find(Session::get('active_table'));
        $table->status = "empty";
        $table->order_id = null;
        $table->save();

        $order = \App\Order::where('table_id', $table->id )->where('status','hold')->first();
        $order->status = 'aborted';
        $order->save();



        // 
        // =-----------------------Pending Soft Delete Record
        // 


        // $order_details = \App\OrderDetail::where('order_id',$table->order_id)->where('table_id',$table->id)->delete();

        Session::forget('active_table');
        Session::forget('order_id');

        $variables['tables'] = \App\Table::all();
        return view('pos.layout.section_table_palette')->with($variables);
        // return "Order Abort Done";
    }


    public function get_order_details_item_details($order_id){
        $order = \App\Order::find($order_id);
        return ($order) ? $order->order_details() : [];
    }


    public function get_section_menu_item_table(Request $request){
        // echo dd($request->subCategory_id);

        $variables['items'] = \App\SubCategory::find($request->subCategory_id)->item()->get();
        
        // $variables['SubCategory_id'] = $subCategory_id;
        // echo ($variables['items']);
        return view('pos.ajax_request.menu_item_list_table')->with($variables);

    } // # get_section_menu_item_table();


}