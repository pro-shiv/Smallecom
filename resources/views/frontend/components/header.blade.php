<header class="bg-white shadow-sm sticky top-0 z-50 w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="text-2xl font-bold text-brand-primary tracking-tight">
                    StoreLogo.
                </a>
            </div>

            <nav class="max-[990px]:hidden flex space-x-8">
                <a href="/" class="text-brand-text hover:text-brand-primary font-medium transition">Home</a>
                <a href="/shop" class="text-brand-muted hover:text-brand-primary font-medium transition">Shop</a>
                <a href="/about" class="text-brand-muted hover:text-brand-primary font-medium transition">About Us</a>
                <a href="/contact" class="text-brand-muted hover:text-brand-primary font-medium transition">Contact Us</a>
            </nav>

            <div class="flex items-center space-x-4">
                <div class="max-[990px]:hidden relative">
                    <input type="text" placeholder="Search products..." 
                           class="w-64 pl-4 pr-10 py-2 border border-gray-300 rounded-full focus:outline-none focus:border-brand-primary text-sm">
                    <button class="absolute right-3 top-2.5 text-gray-400 hover:text-brand-primary">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                    </button>
                </div>

                <a href="/cart" class="text-brand-text hover:text-brand-primary relative">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63-.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                    <span class="absolute -top-2 -right-2 bg-brand-cta text-white text-xs font-bold px-1.5 py-0.5 rounded-full">3</span>
                </a>

                <a href="/account" class="text-brand-text hover:text-brand-primary">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                </a>

                <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="min-[990px]:hidden p-2 text-brand-text hover:text-brand-primary focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden absolute w-full left-0 bg-white border-t border-gray-100 px-4 pt-2 pb-6 shadow-xl z-50">
        <div class="flex flex-col space-y-2">
            <a href="/" class="block px-3 py-3 text-brand-primary font-medium bg-gray-50 rounded-md">Home</a>
            <a href="/shop" class="block px-3 py-3 text-brand-muted hover:text-brand-primary hover:bg-gray-50 rounded-md">Shop</a>
            <a href="/about" class="block px-3 py-3 text-brand-muted hover:text-brand-primary hover:bg-gray-50 rounded-md">About Us</a>
            <a href="/contact" class="block px-3 py-3 text-brand-muted hover:text-brand-primary hover:bg-gray-50 rounded-md">Contact Us</a>
            
            <div class="mt-4 pt-4 border-t border-gray-100">
                <input type="text" placeholder="Search products..." class="w-full pl-4 pr-10 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-brand-primary text-sm">
            </div>
        </div>
    </div>
</header>