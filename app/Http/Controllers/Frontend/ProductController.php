<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
{
    $products = [
        [
            'slug' => 'iphone-14',
            'name' => 'iPhone 14',
            'price' => 70000,
            'image' => 'https://via.placeholder.com/300'
        ],
        [
            'slug' => 'samsung-s23',
            'name' => 'Samsung S23',
            'price' => 65000,
            'image' => 'https://via.placeholder.com/300'
        ],
    ];

    return view('frontend.products.index', compact('products'));
}
}
