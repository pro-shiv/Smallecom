@extends('layouts.frontend.app')

@section('content')
<div class="container mx-auto px-6 py-10">

    <h1 class="text-2xl font-bold mb-6">Checkout</h1>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        {{-- Billing Details --}}
        <div class="lg:col-span-2 bg-white p-6 rounded shadow">

            <h2 class="text-xl font-semibold mb-4">Shipping Details</h2>

            <form class="space-y-4">

                <div class="grid grid-cols-2 gap-4">
                    <input type="text" placeholder="First Name" class="border p-2 rounded w-full">
                    <input type="text" placeholder="Last Name" class="border p-2 rounded w-full">
                </div>

                <input type="text" placeholder="Address" class="border p-2 rounded w-full">

                <div class="grid grid-cols-2 gap-4">
                    <input type="text" placeholder="City" class="border p-2 rounded w-full">
                    <input type="text" placeholder="Postal Code" class="border p-2 rounded w-full">
                </div>

                <input type="text" placeholder="Phone Number" class="border p-2 rounded w-full">

                <input type="email" placeholder="Email" class="border p-2 rounded w-full">

            </form>

        </div>

        {{-- Order Summary --}}
        <div class="bg-white p-6 rounded shadow h-fit">

            <h2 class="text-xl font-semibold mb-4">Your Order</h2>

            <div class="space-y-2">
                <div class="flex justify-between">
                    <span>iPhone 14</span>
                    <span>₹70,000</span>
                </div>

                <div class="flex justify-between">
                    <span>Samsung S23</span>
                    <span>₹65,000</span>
                </div>

                <div class="flex justify-between border-t pt-2 font-bold">
                    <span>Total</span>
                    <span>₹135,000</span>
                </div>
            </div>

            <button class="w-full mt-6 bg-green-600 text-white py-3 rounded">
                Place Order
            </button>

        </div>

    </div>

</div>
@endsection