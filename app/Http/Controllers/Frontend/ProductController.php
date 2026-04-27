<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
{
    $products = Product::with('category')->get();
    return view('frontend.shop.index', compact('products'));
}
}
