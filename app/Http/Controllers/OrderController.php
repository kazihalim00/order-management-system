<?php

namespace App\Http\Controllers;


use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {

        return view('orders.create');
    }
    public function store(Request $request)
    {

        Order::create(
            [

                'customer_name' => $request->string('customer_name'),
                'phone' => $request->string('phone'),
                'product_name' => $request->string('product_name'),
                'product_price' => $request->integer('product_price'),


            ]
        );
        return redirect()->back();
    }

    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->back();

    }

    public function edit($id)
    {

        $order = Order::find($id);
        return view('orders.edit', compact('order'));


    }
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->update($request->all());
        return redirect('/orders');

    }
}
