<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Product;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;

class OrderController extends Controller
{

    public function index() : View
    {

        $orders = Order::with(['products'])->get();
        return view('shop.list_orders', compact('orders'));
    }

    public function create(Product $product) : View
    {
        return view('shop.create_order',compact('product'));
    }

    public function store(StoreOrderRequest $request)
    {
        $order = Order::create([
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'customer_mobile' => $request->customer_mobile,
            'product_id' => $request->product_id,
        ]);

        return redirect('/order/checkout/'.$order->id);

    }

    public function checkout(Order $order) : View
    {
        return view('shop.checkout', compact('order'));
    }
}
