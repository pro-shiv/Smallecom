@extends('layouts.frontend.app')

@section('content')

<div class="grid md:grid-cols-2 gap-8">

    <img src="{{ $product->image }}" class="rounded-lg">

    <div>
        <h1 class="text-3xl font-bold">{{ $product->name }}</h1>

        <p class="mt-4 text-gray-600">
            {{ $product->description }}
        </p>

        <p class="text-xl font-semibold mt-4">
            ${{ $product->price }}
        </p>

        <form method="POST" action="/cart/add" class="mt-6">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">

            <input type="number" name="qty" value="1"
                   class="border p-2 w-20">

            <button class="bg-blue-600 text-white px-4 py-2 rounded">
                Add to Cart
            </button>
        </form>

    </div>

</div>

@endsection