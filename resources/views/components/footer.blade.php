<footer class="bg-gray-800 text-white">
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- About Section -->
            <div>
                <h3 class="text-lg font-semibold mb-4">About news website</h3>
                <p class="text-gray-300 text-sm">
                    Your trusted source for the latest news and updates. Stay informed with our comprehensive coverage of current events.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Quick links</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('posts.index') }}" class="text-gray-300 hover:text-white text-sm">Latest posts</a></li>
                    <li><a href="{{ route('categories.index') }}" class="text-gray-300 hover:text-white text-sm">Categories</a></li>
                    @auth
                        <li><a href="{{ route('dashboard') }}" class="text-gray-300 hover:text-white text-sm">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="text-gray-300 hover:text-white text-sm">Login</a></li>
                        <li><a href="{{ route('register') }}" class="text-gray-300 hover:text-white text-sm">Register</a></li>
                    @endauth
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Contact</h3>
                <div class="text-gray-300 text-sm space-y-2">
                    <p>Email: info@newswebsite.com</p>
                    <p>Phone: (555) 123-4567</p>
                    <p>Address: 123 News Street, City, State 12345</p>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-700 mt-8 pt-8 text-center">
            <p class="text-gray-400 text-sm">
                &copy; {{ date('Y') }} News website. All rights reserved.
            </p>
        </div>
    </div>
</footer>
