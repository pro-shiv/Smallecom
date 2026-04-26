<footer class="bg-brand-primary text-gray-300 py-12 mt-auto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            
            <div class="col-span-1 md:col-span-1">
                <h3 class="text-white text-xl font-bold mb-4 tracking-tight">StoreLogo.</h3>
                <p class="text-sm text-gray-400 mb-4">
                    Your one-stop destination for premium electronics, fashion, and home goods. Quality you can trust.
                </p>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4 uppercase text-sm tracking-wider">Quick Links</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="/about" class="hover:text-brand-cta transition">About Us</a></li>
                    <li><a href="/shop" class="hover:text-brand-cta transition">Shop</a></li>
                    <li><a href="/faq" class="hover:text-brand-cta transition">FAQ</a></li>
                    <li><a href="/contact" class="hover:text-brand-cta transition">Contact Us</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4 uppercase text-sm tracking-wider">Legal</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="/terms" class="hover:text-brand-cta transition">Terms of Service</a></li>
                    <li><a href="/privacy" class="hover:text-brand-cta transition">Privacy Policy</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4 uppercase text-sm tracking-wider">Newsletter</h4>
                <p class="text-sm text-gray-400 mb-4">Subscribe to get special offers and updates.</p>
                <form class="flex">
                    <input type="email" placeholder="Your email" class="w-full px-3 py-2 bg-white text-brand-text rounded-l-md focus:outline-none">
                    <button type="submit" class="bg-brand-cta text-white px-4 py-2 rounded-r-md hover:bg-orange-600 transition">
                        Subscribe
                    </button>
                </form>
            </div>

        </div>
        
        <div class="border-t border-gray-700 mt-10 pt-6 text-sm text-center text-gray-400">
            &copy; {{ date('Y') }} StoreLogo. All rights reserved.
        </div>
    </div>
</footer>