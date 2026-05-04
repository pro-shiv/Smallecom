@extends('frontend.layouts.app')

@section('content')
<div class="bg-brand-bg min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        
        <!-- Breadcrumb Navigation -->
        <nav class="flex text-sm text-s-text mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-2">
                <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                <li class="text-gray-400">
                    <svg class="w-3 h-3" fill="none" viewBox="0 0 6 10"><path stroke="currentColor" stroke-width="2" d="m1 9 4-4-4-4"/></svg>
                </li>
                <li><span class="text-p-text font-semibold">Shop</span></li>
            </ol>
        </nav>

        <div class="mb-8">
            <h1 class="text-3xl md:text-4xl font-extrabold text-p-text tracking-tight">Explore all products</h1>
            <p class="mt-2 text-s-text">Find the perfect items to elevate your lifestyle with our curated collection.</p>
        </div>

        <!-- Filter & Sort Bar -->
        <div class="mb-10 py-6 border-t border-b border-gray-200">
            <form action="{{ route('shop.index') }}" method="GET" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 items-center">
                
                {{-- Category Filter --}}
                <select name="category" onchange="this.form.submit()" class="bg-white border border-gray-300 text-p-text text-sm rounded-lg block w-full p-2.5 focus:ring-2 focus:ring-primary outline-none">
                    <option value="All">All Categories</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>

                {{-- Price Range Filter --}}
                <select name="price_range" onchange="this.form.submit()" class="bg-white border border-gray-300 text-p-text text-sm rounded-lg block w-full p-2.5 focus:ring-2 focus:ring-primary outline-none">
                    <option value="">Any Price</option>
                    <option value="0-1000" {{ request('price_range') == '0-1000' ? 'selected' : '' }}>Under ₹1,000</option>
                    <option value="1000-5000" {{ request('price_range') == '1000-5000' ? 'selected' : '' }}>₹1,000 - ₹5,000</option>
                    <option value="5000-10000" {{ request('price_range') == '5000-10000' ? 'selected' : '' }}>₹5,000 - ₹10,000</option>
                    <option value="10000-above" {{ request('price_range') == '10000-above' ? 'selected' : '' }}>Over ₹10,000</option>
                </select>

                {{-- Sort Functionality --}}
                <select name="sort" onchange="this.form.submit()" class="bg-white border border-gray-300 text-p-text text-sm rounded-lg block w-full p-2.5 focus:ring-2 focus:ring-primary outline-none">
                    <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest Arrivals</option>
                    <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>Price: Low to High</option>
                    <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>Price: High to Low</option>
                </select>

                {{-- Clear Filters --}}
                <a href="{{ route('shop.index') }}" class="w-full sm:w-auto px-10 py-2.5 text-sm font-medium text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                    Reset Filters
                </a>
            </form>
            
            <div class="mt-4 text-xs font-bold text-s-text text-right uppercase tracking-widest">
                Showing {{ $products->total() }} results
            </div>
        </div>

        <!-- Optimized Product Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @forelse($products as $product)
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow duration-300 group">
                <!-- Image Container -->
                <div class="aspect-w-1 aspect-h-1 w-full h-56 bg-gray-200 overflow-hidden">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    @if($product->created_at && $product->created_at->diffInDays() < 7)
                    
                        <span class="absolute top-4 left-4 bg-success text-white text-[10px] font-black px-2 py-1 rounded shadow-sm">NEW</span>
                    @endif

                </div>

                <!-- Content -->
                <div class="p-6">
                    <span class="text-[10px] font-bold text-s-text uppercase tracking-widest">{{ $product->category->name ?? 'Collection' }}</span>
                    <h3 class="text-p-text font-bold text-lg mt-1 line-clamp-1 group-hover:text-primary transition-colors">
                        {{ $product->name }}
                    </h3>
                    
                    <div class="mt-6 flex items-center justify-between">
                        <span class="text-xl font-black text-p-text">₹{{ number_format($product->price, 0) }}</span>
                        <button class="px-3 py-1.5 text-sm font-medium text-blue-600 bg-blue-50 rounded-md hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                            Buy Now
                        </button>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full py-24 text-center">
                <h3 class="text-xl font-bold text-p-text">No matches found</h3>
                <p class="text-s-text mt-2">Try changing your filters or searching for something else.</p>
                <a href="{{ route('shop.index') }}" class="mt-6 inline-block text-primary font-bold underline">View all products</a>
            </div>
            @endforelse
        </div>

        <!-- Custom Pagination -->
        <div class="mt-16 flex justify-center">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection