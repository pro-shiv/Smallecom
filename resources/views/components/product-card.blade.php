<div class="bg-white rounded-lg shadow hover:shadow-lg transition p-4">

    <img src="{{ $product->image }}" class="h-40 w-full object-cover rounded">

    <h2 class="mt-3 font-semibold">
        {{ $product->name }}
    </h2>

    <p class="text-gray-600">
        ${{ $product->price }}
    </p>

    <a href="/products/{{ $product->slug }}"
       class="mt-3 inline-block bg-blue-600 text-white px-4 py-2 rounded">
        View
    </a>

</div>