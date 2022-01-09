<?php

namespace App\Http\Controllers;

use App\Order_and_delivery;

use Illuminate\Http\Request;

class Order_deliveryController extends Controller
{
    public function index()
    {
        return view('order.order_and_delivery');
    }

    public function store(Request $request)
    {
        $data=$request->all();
        $obj=new Order_and_delivery($data);
      
        $obj->save();
      
        // dd($data);

        return redirect()->route("order.home");
       

    }

}
