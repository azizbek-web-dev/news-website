@auth
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Latest News') }}
            </h2>
        </x-slot>

        <div class="py-6 sm:py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Success Message -->
                @if (session('success'))
                    <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Create Post Button (for admin only) -->
                @if(auth()->user()->id === 1)
                    <div class="mb-6">
                        <a href="{{ route('posts.create') }}" 
                           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Create new post
                        </a>
                    </div>
                @endif

                <!-- Layout Selector -->
                <x-layout-selector :posts="$posts" :layout="$layout" />

                <!-- Posts Display -->
                @if($posts->count() > 0)
                    @switch($layout)
                        @case('list')
                            <x-post-list :posts="$posts" />
                            @break
                        @case('masonry')
                            <x-post-masonry :posts="$posts" />
                            @break
                        @case('card')
                            <x-post-card :posts="$posts" />
                            @break
                        @default
                            <x-post-grid :posts="$posts" />
                    @endswitch

                    <!-- Pagination -->
                    <div class="mt-8">
                        {{ $posts->links() }}
                    </div>
                @else
                    <!-- No Posts Message -->
                    <div class="text-center py-12">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">No posts yet</h3>
                        <p class="mt-1 text-sm text-gray-500">Get started by creating a new post.</p>
                        @if(auth()->user()->id === 1)
                            <div class="mt-6">
                                <a href="{{ route('posts.create') }}" 
                                   class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                                    Create post
                                </a>
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </x-app-layout>
@else
    <x-guest-layout>
        <div class="py-6 sm:py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Success Message -->
                @if (session('success'))
                    <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Layout Selector -->
                <x-layout-selector :posts="$posts" :layout="$layout" />

                <!-- Posts Display -->
                @if($posts->count() > 0)
                    @switch($layout)
                        @case('list')
                            <x-post-list :posts="$posts" />
                            @break
                        @case('masonry')
                            <x-post-masonry :posts="$posts" />
                            @break
                        @case('card')
                            <x-post-card :posts="$posts" />
                            @break
                        @default
                            <x-post-grid :posts="$posts" />
                    @endswitch

                    <!-- Pagination -->
                    <div class="mt-8">
                        {{ $posts->links() }}
                    </div>
                @else
                    <!-- No Posts Message -->
                    <div class="text-center py-12">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">No posts yet</h3>
                        <p class="mt-1 text-sm text-gray-500">Please log in to create posts.</p>
                    </div>
                @endif
            </div>
        </div>
    </x-guest-layout>
@endauth
