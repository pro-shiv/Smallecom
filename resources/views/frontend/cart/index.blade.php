@extends('frontend.layouts.app')

@section('content')
<div class="container mx-auto px-6 py-10">

    <h1 class="text-2xl font-bold mb-6">Shopping Cart</h1>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        {{-- Cart Items --}}
        <div class="lg:col-span-2 space-y-4">

            {{-- Item --}}
            <div class="flex items-center bg-white p-4 rounded shadow">
                <img src="https://via.placeholder.com/100" class="w-24 h-24 object-cover rounded">

                <div class="ml-4 flex-1">
                    <h2 class="font-semibold text-lg">iPhone 14</h2>
                    <p class="text-gray-600">₹70,000</p>

                    {{-- Quantity --}}
                    <div class="flex items-center mt-2">
                        <button class="px-3 py-1 bg-gray-200">-</button>
                        <span class="px-4">1</span>
                        <button class="px-3 py-1 bg-gray-200">+</button>
                    </div>
                </div>

                {{-- Remove --}}
                <button class="text-red-500">Remove</button>
            </div>

            {{-- Duplicate items for UI demo --}}
            <div class="flex items-center bg-white p-4 rounded shadow">
                <img src="https://via.placeholder.com/100" class="w-24 h-24 object-cover rounded">
                <div class="ml-4 flex-1">
                    <h2 class="font-semibold text-lg">Samsung S23</h2>
                    <p class="text-gray-600">₹65,000</p>
                    <div class="flex items-center mt-2">
                        <button class="px-3 py-1 bg-gray-200">-</button>
                        <span class="px-4">1</span>
                        <button class="px-3 py-1 bg-gray-200">+</button>
                    </div>
                </div>
                <button class="text-red-500">Remove</button>
            </div>

        </div>

        {{-- Summary --}}
        <div class="bg-white p-6 rounded shadow h-fit">

            <h2 class="text-xl font-semibold mb-4">Order Summary</h2>

            <div class="space-y-2">
                <div class="flex justify-between">
                    <span>Subtotal</span>
                    <span>₹135,000</span>
                </div>

                <div class="flex justify-between">
                    <span>Shipping</span>
                    <span>₹0</span>
                </div>

                <div class="flex justify-between font-bold text-lg border-t pt-2">
                    <span>Total</span>
                    <span>₹135,000</span>
                </div>
            </div>

            <a href="{{ route('checkout.index') }}"
               class="block text-center mt-6 bg-blue-600 text-white py-3 rounded">
                Proceed to Checkout
            </a>

        </div>

    </div>

</div>
@endsection