@extends('frontend.layouts.app')

@section('content')

<section class="w-full relative h-[500px] md:h-[600px] lg:h-[70vh] min-h-[500px] m-0 p-0">
    
    <div class="swiper hero-swiper w-full h-full absolute inset-0 z-0">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&q=80" alt="Slide 1" class="w-full h-full object-cover">
            </div>
            <div class="swiper-slide">
                <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&q=80" alt="Slide 2" class="w-full h-full object-cover">
            </div>
            <div class="swiper-slide">
                <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&q=80" alt="Slide 3" class="w-full h-full object-cover">
            </div>
        </div>
        <div class="swiper-pagination !bottom-8 z-30"></div>
    </div>

    <div class="absolute inset-0 z-10 flex items-center">
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent z-10"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-20">
            <div class="w-full md:max-w-xl lg:max-w-2xl">
                <span class="text-brand-cta font-bold tracking-wider uppercase text-sm mb-4 block drop-shadow-md">
                    New Collection
                </span>
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6 drop-shadow-lg">
                    Discover Your Perfect Style Today
                </h1>
                
                <p class="text-gray-200 text-lg md:text-xl mb-8 drop-shadow-md">
                    Explore our curated collection of premium products designed to elevate your everyday life.
                </p>
                
                <div>
                    <a href="/shop" class="inline-block bg-brand-cta hover:bg-orange-600 text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition transform hover:-translate-y-0.5">
                        Shop Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h2 class="text-2xl font-bold text-brand-primary mb-8 text-center md:text-left">Browse by Category</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        @php
            $categories = ['Electronics', 'Fashion', 'Home & Living', 'Books'];
        @endphp
        @foreach($categories as $category)
        <a href="#" class="group block bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
            <div class="h-40 bg-gray-100 flex items-center justify-center">
                <span class="text-gray-400 group-hover:text-brand-primary transition">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                </span>
            </div>
            <div class="p-4 text-center">
                <h3 class="font-semibold text-brand-text">{{ $category }}</h3>
            </div>
        </a>
        @endforeach
    </div>
</section>

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold text-brand-primary">Best Sellers</h2>
        <a href="/shop" class="text-brand-primary hover:text-brand-cta font-medium">View All &rarr;</a>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        @for($i=1; $i<=4; $i++)
        <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition group relative flex flex-col">
            <div class="absolute top-3 left-3 bg-brand-accent text-white text-xs font-bold px-2 py-1 rounded">
                In Stock
            </div>
            <a href="/product/show" class="block h-64 bg-gray-200 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&q=80" alt="Product" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
            </a>
            <div class="p-5 flex flex-col flex-grow">
                <h3 class="text-lg font-semibold text-brand-text mb-1"><a href="/product/show">Premium Smart Watch</a></h3>
                <p class="text-brand-muted text-sm mb-4">Electronics</p>
                
                <div class="mt-auto flex items-center justify-between">
                    <span class="text-xl font-bold text-brand-primary">$199.00</span>
                    <button class="bg-brand-primary hover:bg-brand-cta text-white p-2 rounded-full transition" title="Add to Cart">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    </button>
                </div>
            </div>
        </div>
        @endfor
    </div>
</section>

<section class="bg-white py-16 mt-12 border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-brand-primary mb-12 text-center">Why Choose Us</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 bg-brand-bg rounded-full flex items-center justify-center text-brand-primary mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-brand-text mb-3">Free Shipping</h3>
                <p class="text-brand-muted">Enjoy free shipping on all orders over $50. Delivered safely to your door.</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 bg-brand-bg rounded-full flex items-center justify-center text-brand-accent mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-brand-text mb-3">Premium Quality</h3>
                <p class="text-brand-muted">We partner with top brands to ensure you get only the best quality products.</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 bg-brand-bg rounded-full flex items-center justify-center text-brand-cta mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-brand-text mb-3">24/7 Support</h3>
                <p class="text-brand-muted">Our friendly customer support team is available around the clock to help you.</p>
            </div>
        </div>
    </div>
</section>

@endsection