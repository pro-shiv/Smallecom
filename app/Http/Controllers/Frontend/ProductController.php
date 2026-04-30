<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(Request $request)
{
    // 1. Fetch categories for the dropdown
    $categories = Category::all();
    // 2. Start the product query
    $query = Product::query();
    
    // 3. Filter by Category
    $query->when($request->filled('category'), function ($q) use ($request) {
        $q->where('category_id', $request->category);
    });


    $products = Product::with('category')->get();
    return view('frontend.shop.index', compact('products'));
}
}
