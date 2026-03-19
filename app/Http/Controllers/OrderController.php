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
        $request->validate([
            'customer_name' => 'required',
            'phone' => 'required',
            'product_name' => 'required',
            'product_price' => 'required|numeric',
        ]);

        Order::create(
            [

                'customer_name' => $request->string('customer_name'),
                'phone' => $request->string('phone'),
                'product_name' => $request->string('product_name'),
                'product_price' => $request->integer('product_price'),


            ]
        );
        return redirect()->back()->with('success', 'Order created successfully!');
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
        return redirect()->back()->with('success', 'Order deleted successfully!');

    }

    public function edit($id)
    {

        $order = Order::find($id);
        return view('orders.edit', compact('order'));


    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_name' => 'required',
            'phone' => 'required',
            'product_name' => 'required',
            'product_price' => 'required|numeric',
        ]);
        $order = Order::find($id);
        $order->update($request->all());
        return redirect('/orders')->with('success', 'Order updated successfully!');

    }
}
