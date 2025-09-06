<!-- Masonry Layout -->
<div class="columns-1 md:columns-2 lg:columns-3 xl:columns-4 gap-6 space-y-6">
    @foreach($posts as $post)
        <div class="break-inside-avoid bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition-shadow duration-300">
            <!-- Post Image -->
            @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" 
                     alt="{{ $post->title }}" 
                     class="w-full h-48 object-cover">
            @else
                <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                    <span class="text-gray-500">No Image</span>
                </div>
            @endif

            <!-- Post Content -->
            <div class="p-4">
                <!-- Category Badge -->
                <div class="mb-2">
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">
                        {{ Str::title($post->category->name) }}
                    </span>
                </div>

                <!-- Post Title -->
                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                    <a href="{{ route('posts.show', $post) }}" 
                       class="hover:text-blue-600 transition-colors duration-200">
                        {{ Str::title($post->title) }}
                    </a>
                </h3>

                <!-- Post Excerpt -->
                <p class="text-gray-600 text-sm mb-3 line-clamp-3">
                    {{ Str::limit(strip_tags($post->content), 120) }}
                </p>

                <!-- Post Meta -->
                <div class="flex items-center justify-between text-xs text-gray-500">
                    <div class="flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                        {{ $post->user->name }}
                    </div>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        {{ $post->created_at->format('M d') }}
                    </div>
                </div>

                <!-- Read More Link -->
                <div class="mt-3">
                    <a href="{{ route('posts.show', $post) }}" 
                       class="text-blue-600 hover:text-blue-800 font-medium text-xs">
                        Read More →
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
