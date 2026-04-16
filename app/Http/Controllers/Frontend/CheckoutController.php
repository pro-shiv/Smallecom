<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function index()
{
    $cart = session()->get('cart', []);

    return view('frontend.checkout.index', compact('cart'));
}
}
