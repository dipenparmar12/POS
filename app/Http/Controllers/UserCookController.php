<?php

namespace App\Http\Controllers;

use App\UserCook;
use Illuminate\Http\Request;
use DB;
use App\OrderDetail;


class UserCookController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function s($s){
        echo "<pre>";
        print_r($s);
        echo "</pre>";
    }

    public function index()
    {   
        // Get pending Orders From OrderDetails ( those are, Status==Null )
        $test = $data['openOrders'] = OrderDetail::where('status','pending')->get();
        return view("user.cook.index")->with($data);
    }

    /**
     * Cancel one Specific Item form OrderDetails ( May this item not available at present )
     *
     * @return \Illuminate\Http\Response
     */
    public function update_not_available_item_id($id)
    {     

        (OrderDetail::find($id)->update(['status'=>"na"]));
        OrderDetail::find($id)->delete();
         return $id;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserCook  $userCook
     * @return \Illuminate\Http\Response
     */
    public function show(UserCook $userCook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserCook  $userCook
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCook $userCook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserCook  $userCook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserCook $userCook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserCook  $userCook
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCook $userCook)
    {
        //
    }
}
