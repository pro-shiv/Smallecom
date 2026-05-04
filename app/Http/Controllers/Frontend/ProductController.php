<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // 1. Fetch categories for the dropdown
        $categories = Category::select('id', 'name')->get();

        // 2. Build the optimized query
        $products = Product::query()
            ->with('category')
            // Apply Category Filter
            ->when($request->category && $request->category !== 'All', function ($query) use ($request) {
                $query->where('category_id', $request->category);
            })
            // Apply Price Range Logic (Fixed the semicolon here)
            ->when($request->price_range, function ($query) use ($request) {
                match ($request->price_range) {
                    '0-1000'      => $query->where('price', '<', 1000),
                    '1000-5000'   => $query->whereBetween('price', [1000, 5000]),
                    '5000-10000'  => $query->whereBetween('price', [5000, 10000]),
                    '10000-above' => $query->where('price', '>', 10000),
                    default       => null
                };
            })
            // Apply Sorting Logic
            ->when($request->sort, function ($query) use ($request) {
                match ($request->sort) {
                    'price_low'  => $query->orderBy('price', 'asc'),
                    'price_high' => $query->orderBy('price', 'desc'),
                    'newest'     => $query->latest(),
                    default      => $query->latest(),
                };
            }, function ($query) {
                // If no sort is requested, default to latest
                $query->latest();
            })
            // Finalize with pagination
            ->paginate(12)
            ->withQueryString();

        // 3. Return the view with data
        return view('frontend.shop.index', compact('products', 'categories'));
    } // Closing brace for index method
} // Closing brace for class