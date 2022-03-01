<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product;

class ShopController extends Controller
{
    public function index() : View
    {
        $products = Product::get();
        return view('shop.showcase', compact('products'));
    }
}
