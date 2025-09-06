@auth
    <x-app-layout>
        <x-slot name="header">
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ Str::title($category->name) }} Posts
                </h2>
                @if(auth()->user()->id === 1)
                    <a href="{{ route('categories.edit', $category) }}" 
                       class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                        Edit category
                    </a>
                @endif
            </div>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Success Message -->
                @if (session('success'))
                    <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Category Info -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                    <div class="p-6">
                        <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ Str::title($category->name) }}</h1>
                        <p class="text-gray-600">{{ $posts->total() }} {{ Str::plural('post', $posts->total()) }} in this category</p>
                    </div>
                </div>

                <!-- Posts Grid -->
                @if($posts->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($posts as $post)
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition-shadow duration-300">
                                <!-- Post Image -->
                                @if($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" 
                                         alt="{{ Str::title($post->title) }}" 
                                         class="w-full h-48 object-cover">
                                @else
                                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                        <span class="text-gray-500">No image</span>
                                    </div>
                                @endif

                                <!-- Post Content -->
                                <div class="p-6">
                                    <!-- Post Title -->
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">
                                        <a href="{{ route('posts.show', $post) }}" 
                                           class="hover:text-blue-600 transition-colors duration-200">
                                            {{ Str::title($post->title) }}
                                        </a>
                                    </h3>

                                    <!-- Post Excerpt -->
                                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                        {{ Str::limit(strip_tags($post->content), 150) }}
                                    </p>

                                    <!-- Post Meta -->
                                    <div class="flex items-center justify-between text-sm text-gray-500">
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $post->user->name }}
                                        </div>
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $post->created_at->format('M d, Y') }}
                                        </div>
                                    </div>

                                    <!-- Read More Link -->
                                    <div class="mt-4">
                                        <a href="{{ route('posts.show', $post) }}" 
                                           class="text-blue-600 hover:text-blue-800 font-medium text-sm">
                                            Read more →
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

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
                        <h3 class="mt-2 text-sm font-medium text-gray-900">No posts in this category yet</h3>
                        <p class="mt-1 text-sm text-gray-500">Be the first to create a post in this category.</p>
                        <div class="mt-6">
                            <a href="{{ route('posts.create') }}" 
                               class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                                Create post
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </x-app-layout>
@else
    <x-guest-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Success Message -->
                @if (session('success'))
                    <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Category Info -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                    <div class="p-6">
                        <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ Str::title($category->name) }}</h1>
                        <p class="text-gray-600">{{ $posts->total() }} {{ Str::plural('post', $posts->total()) }} in this category</p>
                    </div>
                </div>

                <!-- Posts Grid -->
                @if($posts->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($posts as $post)
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition-shadow duration-300">
                                <!-- Post Image -->
                                @if($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" 
                                         alt="{{ Str::title($post->title) }}" 
                                         class="w-full h-48 object-cover">
                                @else
                                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                        <span class="text-gray-500">No image</span>
                                    </div>
                                @endif

                                <!-- Post Content -->
                                <div class="p-6">
                                    <!-- Post Title -->
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">
                                        <a href="{{ route('posts.show', $post) }}" 
                                           class="hover:text-blue-600 transition-colors duration-200">
                                            {{ Str::title($post->title) }}
                                        </a>
                                    </h3>

                                    <!-- Post Excerpt -->
                                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                        {{ Str::limit(strip_tags($post->content), 150) }}
                                    </p>

                                    <!-- Post Meta -->
                                    <div class="flex items-center justify-between text-sm text-gray-500">
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $post->user->name }}
                                        </div>
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $post->created_at->format('M d, Y') }}
                                        </div>
                                    </div>

                                    <!-- Read More Link -->
                                    <div class="mt-4">
                                        <a href="{{ route('posts.show', $post) }}" 
                                           class="text-blue-600 hover:text-blue-800 font-medium text-sm">
                                            Read more →
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

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
                        <h3 class="mt-2 text-sm font-medium text-gray-900">No posts in this category yet</h3>
                        <p class="mt-1 text-sm text-gray-500">Please log in to create posts in this category.</p>
                    </div>
                @endif
            </div>
        </div>
    </x-guest-layout>
@endauth
