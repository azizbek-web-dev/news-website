<x-admin-layout>
    <x-slot name="header">Comments Management</x-slot>

    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Comments</h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">Manage all comments in the system.</p>
        </div>
        <ul class="divide-y divide-gray-200">
            @forelse($comments as $comment)
                <li>
                    <div class="px-4 py-4">
                        <div class="flex items-start justify-between">
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-gray-900">{{ $comment->user->name }}</p>
                                    <p class="text-sm text-gray-500">{{ $comment->created_at->format('M d, Y g:i A') }}</p>
                                </div>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-900">{{ $comment->content }}</p>
                                </div>
                                <div class="mt-2">
                                    <p class="text-xs text-gray-500">
                                        On post: <a href="{{ route('posts.show', $comment->post) }}" 
                                                   class="text-blue-600 hover:text-blue-800">
                                            {{ Str::limit($comment->post->title, 50) }}
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                                <form method="POST" action="{{ route('admin.comments.delete', $comment) }}" 
                                      onsubmit="return confirm('Are you sure you want to delete this comment?')" 
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
                <li class="px-4 py-4 text-center text-gray-500">No comments found.</li>
            @endforelse
        </ul>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $comments->links() }}
    </div>
</x-admin-layout>
