<x-admin-layout>
    <x-slot name="header">Posts Management</x-slot>

    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Posts</h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">Manage all posts in the system.</p>
        </div>
        <ul class="divide-y divide-gray-200">
            @forelse($posts as $post)
                <li>
                    <div class="px-4 py-4">
                        <div class="flex items-center justify-between">
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-blue-600 truncate">
                                        {{ $post->title }}
                                    </p>
                                    <div class="ml-2 flex-shrink-0 flex">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                            {{ $post->category->name }}
                                        </span>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div class="text-sm text-gray-900">
                                        {{ Str::limit(strip_tags($post->content), 100) }}
                                    </div>
                                </div>
                                <div class="mt-2 flex items-center text-sm text-gray-500">
                                    <p>by {{ $post->user->name }} • {{ $post->created_at->format('M d, Y') }}</p>
                                </div>
                            </div>
                            <div class="ml-4 flex-shrink-0 flex space-x-2">
                                <a href="{{ route('posts.show', $post) }}" 
                                   class="text-blue-600 hover:text-blue-900 text-sm font-medium">
                                    View
                                </a>
                                <a href="{{ route('admin.posts.edit', $post) }}" 
                                   class="text-yellow-600 hover:text-yellow-900 text-sm font-medium">
                                    Edit
                                </a>
                                <form method="POST" action="{{ route('admin.posts.delete', $post) }}" 
                                      onsubmit="return confirm('Are you sure you want to delete this post?')" 
                                      class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="text-red-600 hover:text-red-900 text-sm font-medium">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            @empty
                <li class="px-4 py-4 text-center text-gray-500">No posts found.</li>
            @endforelse
        </ul>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $posts->links() }}
    </div>
</x-admin-layout>
