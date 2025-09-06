@auth
    <x-app-layout>
        <x-slot name="header">
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ Str::title($post->title) }}
                </h2>
                @can('update', $post)
                    <div class="flex space-x-2">
                        <a href="{{ route('posts.edit', $post) }}" 
                           class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded text-sm">
                            Edit
                        </a>
                        <form method="POST" action="{{ route('posts.destroy', $post) }}" 
                              onsubmit="return confirm('Are you sure you want to delete this post?')" 
                              class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded text-sm">
                                Delete
                            </button>
                        </form>
                    </div>
                @endcan
            </div>
        </x-slot>

        <div class="py-12">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <!-- Success Message -->
                @if (session('success'))
                    <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <!-- Post Image -->
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" 
                             alt="{{ Str::title($post->title) }}" 
                             class="w-full h-64 md:h-96 object-cover">
                    @endif

                    <!-- Post Content -->
                    <div class="p-6">
                        <!-- Category and Meta -->
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <span class="inline-block bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full">
                                    {{ Str::title($post->category->name) }}
                                </span>
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $post->user->name }}
                                </div>
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $post->created_at->format('F d, Y') }}
                                </div>
                            </div>
                        </div>

                        <!-- Post Title -->
                        <h1 class="text-3xl font-bold text-gray-900 mb-6">
                            {{ Str::title($post->title) }}
                        </h1>

                        <!-- Post Content -->
                        <div class="prose max-w-none">
                            {!! nl2br(e($post->content)) !!}
                        </div>

                        <!-- Comments Section -->
                        <div class="mt-12 border-t pt-8">
                            <h3 class="text-xl font-semibold text-gray-900 mb-6">
                                Comments ({{ $post->comments->count() }})
                            </h3>

                            @if($post->comments->count() > 0)
                                <div class="space-y-4">
                                    @foreach($post->comments as $comment)
                                        <div class="bg-gray-50 p-4 rounded-lg">
                                            <div class="flex items-center justify-between mb-2">
                                                <div class="font-medium text-gray-900">
                                                    {{ $comment->user->name }}
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    {{ $comment->created_at->format('M d, Y g:i A') }}
                                                </div>
                                            </div>
                                            <p class="text-gray-700">{{ $comment->content }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <p class="text-gray-500 italic">No comments yet. Be the first to comment!</p>
                            @endif

                            <!-- Add Comment Form (for authenticated users) -->
                            <div class="mt-8">
                                <form method="POST" action="{{ route('comments.store') }}" class="space-y-4">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    
                                    <div>
                                        <label for="content" class="block text-sm font-medium text-gray-700 mb-2">
                                            Add a comment
                                        </label>
                                        <textarea name="content" id="content" rows="3" 
                                                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                                  placeholder="Write your comment here..."
                                                  required></textarea>
                                        @error('content')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    
                                    <div>
                                        <button type="submit" 
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Post Comment
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
@else
    <x-guest-layout>
        <div class="py-12">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <!-- Success Message -->
                @if (session('success'))
                    <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <!-- Post Image -->
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" 
                             alt="{{ Str::title($post->title) }}" 
                             class="w-full h-64 md:h-96 object-cover">
                    @endif

                    <!-- Post Content -->
                    <div class="p-6">
                        <!-- Category and Meta -->
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <span class="inline-block bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full">
                                    {{ Str::title($post->category->name) }}
                                </span>
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $post->user->name }}
                                </div>
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $post->created_at->format('F d, Y') }}
                                </div>
                            </div>
                        </div>

                        <!-- Post Title -->
                        <h1 class="text-3xl font-bold text-gray-900 mb-6">
                            {{ Str::title($post->title) }}
                        </h1>

                        <!-- Post Content -->
                        <div class="prose max-w-none">
                            {!! nl2br(e($post->content)) !!}
                        </div>

                        <!-- Comments Section -->
                        <div class="mt-12 border-t pt-8">
                            <h3 class="text-xl font-semibold text-gray-900 mb-6">
                                Comments ({{ $post->comments->count() }})
                            </h3>

                            @if($post->comments->count() > 0)
                                <div class="space-y-4">
                                    @foreach($post->comments as $comment)
                                        <div class="bg-gray-50 p-4 rounded-lg">
                                            <div class="flex items-center justify-between mb-2">
                                                <div class="font-medium text-gray-900">
                                                    {{ $comment->user->name }}
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    {{ $comment->created_at->format('M d, Y g:i A') }}
                                                </div>
                                            </div>
                                            <p class="text-gray-700">{{ $comment->content }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <p class="text-gray-500 italic">No comments yet. Be the first to comment!</p>
                            @endif

                            <!-- Login to comment message -->
                            <div class="mt-8 text-center">
                                <p class="text-gray-500 mb-4">Please <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800">login</a> to comment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-guest-layout>
@endauth
