@extends('frontend.layouts.app')

@section('content')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 min-h-screen">
        
        <nav class="flex text-sm text-gray-500 mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">Home</a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <a href="{{ url('/shop') }}" class="ml-1 hover:text-blue-600 transition-colors md:ml-2">Shop</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ml-1 text-gray-900 font-medium md:ml-2">All Products</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="mb-8">
            <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight text-gray-900">Explore all products</h1>
            <p class="mt-2 text-base text-gray-500">Discover our latest arrivals and find the perfect items to elevate your lifestyle.</p>
        </div>

        <div class="mb-10">
            <div class="py-5 border-t border-b border-gray-200">
                <form action="#" method="GET" class="flex flex-col sm:flex-row flex-wrap items-center gap-4">
                    
                    <div class="w-full sm:w-auto sm:flex-1">
                        <select name="category" class="block w-full text-sm text-gray-700 bg-white border border-blue-300 rounded py-2.5 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 cursor-pointer">
                            <option>Fashion & Accessories</option>
                            <option>Electronics</option>
                            <option>Clothing & Apparel</option>
                            <option>Home & Kitchen</option>
                            <option>Sports & Outdoors</option>
                        </select>
                    </div>

                    <div class="w-full sm:w-auto sm:flex-1">
                        <select name="price" class="block w-full text-sm text-gray-700 bg-white border border-gray-300 rounded py-2.5 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 cursor-pointer">
                            <option>1000 - 5000</option>
                            <option>Under 1000</option>
                            <option>5000 - 10000</option>
                            <option>Over 10000</option>
                        </select>
                    </div>

                    <div class="w-full sm:w-auto sm:flex-1">
                        <select name="sort" class="block w-full text-sm text-gray-700 bg-white border border-gray-300 rounded py-2.5 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 cursor-pointer">
                            <option>Default</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Newest Arrivals</option>
                        </select>
                    </div>

                    <div class="w-full sm:w-auto">
                        <button type="submit" class="w-full sm:w-auto px-10 py-2.5 text-sm font-medium text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                            Apply Filters
                        </button>
                    </div>
                </form>
            </div>
            
            <div class="mt-4 text-sm text-gray-500 flex justify-end">
                Showing 24 results
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow duration-300 group">
                <div class="aspect-w-1 aspect-h-1 w-full h-56 bg-gray-200 overflow-hidden">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-5">
                    <h3 class="text-sm font-medium text-gray-900">{{ $product->name }}</h3>
                    <p class="mt-1 text-sm text-gray-500">{{ $product->category->name ?? 'Category' }}</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-lg font-bold text-gray-900">₹{{ number_format($product->price, 2) }}</span>
                        <button class="px-3 py-1.5 text-sm font-medium text-blue-600 bg-blue-50 rounded-md hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                            Add
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
            
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow duration-300 group">
                <div class="aspect-w-1 aspect-h-1 w-full h-56 bg-gray-200 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1491553895911-0055eca6402d?auto=format&fit=crop&w=400&q=80" alt="Product" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-5">
                    <h3 class="text-sm font-medium text-gray-900">Premium Running Shoes</h3>
                    <p class="mt-1 text-sm text-gray-500">Clothing & Apparel</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-lg font-bold text-gray-900">$129.50</span>
                        <button class="px-3 py-1.5 text-sm font-medium text-blue-600 bg-blue-50 rounded-md hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                            Add
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow duration-300 group">
                <div class="aspect-w-1 aspect-h-1 w-full h-56 bg-gray-200 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1584916201218-f4242ceb4809?auto=format&fit=crop&w=400&q=80" alt="Product" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-5">
                    <h3 class="text-sm font-medium text-gray-900">Ceramic Coffee Mug</h3>
                    <p class="mt-1 text-sm text-gray-500">Home & Kitchen</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-lg font-bold text-gray-900">$24.00</span>
                        <button class="px-3 py-1.5 text-sm font-medium text-blue-600 bg-blue-50 rounded-md hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                            Add
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow duration-300 group">
                <div class="aspect-w-1 aspect-h-1 w-full h-56 bg-gray-200 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=400&q=80" alt="Product" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-5">
                    <h3 class="text-sm font-medium text-gray-900">Wireless Headphones</h3>
                    <p class="mt-1 text-sm text-gray-500">Electronics</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-lg font-bold text-gray-900">$89.99</span>
                        <button class="px-3 py-1.5 text-sm font-medium text-blue-600 bg-blue-50 rounded-md hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                            Add
                        </button>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="mt-12 flex justify-center">
            <nav class="inline-flex rounded-md shadow-sm" aria-label="Pagination">
                <button class="relative inline-flex items-center px-4 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-10 focus:ring-2 focus:ring-blue-500">Previous</button>
                <button aria-current="page" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-blue-50 text-sm font-medium text-blue-600 focus:z-10 focus:ring-2 focus:ring-blue-500">1</button>
                <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:ring-2 focus:ring-blue-500">2</button>
                <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:ring-2 focus:ring-blue-500">3</button>
                <button class="relative inline-flex items-center px-4 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-10 focus:ring-2 focus:ring-blue-500">Next</button>
            </nav>
        </div>

    </div>

@endsection