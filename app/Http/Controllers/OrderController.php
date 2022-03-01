<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product;

class OrderController extends Controller
{
    public function create($product_id) : View
    {
        $product = Product::find($product_id);
        return view('shop.create_order',compact('product'));
    }
}
