<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use DB;
// use Category;
// use SubCategory;
// use Item;

// use Table;
// use Order;
// use OrderDetail;


class PosController extends Controller
{

    public function href(Request $req){
        return $this->$req->fun();
    }// #dynamic method Call ( We Dont need to Make New Route for Every Method )


    public function index($view='pos'){

        $variables['categories'] = \App\Category::all();
        $variables['subCategories'] = \App\SubCategory::all();
        $variables['items'] = \App\Item::all();
        $variables['tables'] = \App\Table::all();

        // return dd($this->get_order_details(Session::get('order_id')));
        $variables['order'] = $this->get_order_details(Session::get('order_id'));

        $query = DB::table('items')->where('id','=','1');


        // return DB::table('items')->where('id','=','1')->tosql();

        // if (Session::get('order_id')) {
        //     $variables['order'] = \App\Order::find(Session::get('order_id'))->order_details()
        //                             ->groupBy('item_id')
        //                             ->selectRaw('count(*) as qty, item_id');
        //                             ;
        // }
        

        //return $od->get();
        // $od = \App\Order::find(Session::get('order_id'));
        // $od = \App\OrderDetail::where('order_id',Session::get('order_id'))->groupBy('item_id')->count();
        // return $od;
        // $od = \App\Order::find(Session::get('order_id'));
        // dd($od);
        // return $variables['order']->get();

        // echo '<html><head><script type="text/javascript">function submitForm(){document.form1.target = "myActionWin";window.open("","myActionWin","width=500,height=300,toolbar=0");document.form1.submit();}</script></head><body><form name="form1" action="demo_action.cfm" method="post">First name: <input type="text" name="fname" /><br />Last name: <input type="text" name="lname" /><br /><input type="button" name="btnSubmit" value="Submit" onclick="submitForm()" /></form></body></html>';

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
            return " Please Select Proper Table ";
        }


        $variables['tables'] = \App\Table::all();
        return view('pos.layout.section_table_palette')->with($variables);

    } // select_dinner_table_by_id()


    

    public function section_order_cart(){
        $variables['order'] = $this->get_order_details(Session::get('order_id'));
        return view('pos.layout.section_order_cart')->with($variables);

    } //section_order_items()


    public function add_item_to_section_order_card_table(Request $request){        
        
        if ( is_numeric(Session::get('active_table')) && is_numeric(Session::get('order_id')) ) {
            $insert_data = [
                'table_id'=>Session::get('active_table'),
                'order_id'=>Session::get('order_id'),
                'item_id'=>$request->item_id
            ];
            try {
                $order_details = \App\OrderDetail::create( $insert_data );
                return " add_item_to_section_order_card_table Done";
            } catch (Exception $e) {
                return "Errors";
            }

        }else{
            return "<script> alert('please selecte Table ') </script>";
        }

    } // add_item_to_section_order_card_table()



    public function check_out(){
        // return "Hello There check_out";

        $variables['order'] = $this->get_order_details(Session::get('order_id'));
        return view('pos.ajax_request.check_out')->with($variables);

        // return "Check_Out for Order_id: ".Session::get('order_id')." table_id :".Session::get('active_table');
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
        //$order_details= \App\OrderDetail::where('order_id',$table->order_id)->where('table_id',$table->id)->delete();

        Session::forget('active_table');
        Session::forget('order_id');

        $variables['tables'] = \App\Table::all();
        return view('pos.layout.section_table_palette')->with($variables);
        // return "Order Abort Done";
    }


    public function get_order_details($order_id){

        if (Session::has(Session::get('order_id'))) {
            return \App\Order::find(Session::has(Session::get('order_id')))->order_details()
                                    ->groupBy('item_id')
                                    ->selectRaw('count(*) as qty, item_id');
        }else{
            return false;
        }
    }


    public function get_section_menu_item_table(Request $request){
        // echo dd($request->subCategory_id);

        $variables['items'] = \App\SubCategory::find($request->subCategory_id)->item()->get();
        
        // $variables['SubCategory_id'] = $subCategory_id;
        // echo ($variables['items']);
        return view('pos.ajax_request.menu_item_list_table')->with($variables);

    } // # get_section_menu_item_table();


    // public function get_menu_sub_category_table(){
    //     $variables['subCategories'] = \App\SubCategory::all();
    //     return view('pos.ajax_request.menu_sub_category_table')->with($variables);
    // } // get_menu_sub_category_table()

}