<div class="mb-6 flex justify-between items-center">
    <!-- Layout Selector - Hidden on mobile -->
    <div class="hidden md:flex items-center space-x-2">
        <span class="text-sm font-medium text-gray-700">Layout:</span>
        <div class="flex space-x-1">
            <!-- Grid Layout -->
            <button onclick="changeLayout('grid')" 
                    class="layout-btn px-3 py-1 text-sm rounded {{ $layout === 'grid' ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                </svg>
            </button>
            
            <!-- List Layout -->
            <button onclick="changeLayout('list')" 
                    class="layout-btn px-3 py-1 text-sm rounded {{ $layout === 'list' ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>
            
            <!-- Masonry Layout -->
            <button onclick="changeLayout('masonry')" 
                    class="layout-btn px-3 py-1 text-sm rounded {{ $layout === 'masonry' ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 4a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h4a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM12 4a1 1 0 011-1h4a1 1 0 011 1v6a1 1 0 01-1 1h-4a1 1 0 01-1-1V4zM12 12a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z"></path>
                </svg>
            </button>
            
            <!-- Card Layout -->
            <button onclick="changeLayout('card')" 
                    class="layout-btn px-3 py-1 text-sm rounded {{ $layout === 'card' ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4zm0 2h12v8H4V6z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Posts Count -->
    <div class="text-sm text-gray-500">
        {{ $posts->total() }} posts found
    </div>
</div>

<script>
function changeLayout(layout) {
    // Update URL with layout parameter
    const url = new URL(window.location);
    url.searchParams.set('layout', layout);
    window.location.href = url.toString();
}
</script>
