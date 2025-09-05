<x-admin-layout>
    <x-slot name="header">Users Management</x-slot>

    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Users</h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">Manage all users in the system.</p>
        </div>
        <ul class="divide-y divide-gray-200">
            @forelse($users as $user)
                <li>
                    <div class="px-4 py-4 flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <div class="h-10 w-10 rounded-full bg-gray-300 flex items-center justify-center">
                                    <span class="text-sm font-medium text-gray-700">
                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                    </span>
                                </div>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">{{ $user->name }}</div>
                                <div class="text-sm text-gray-500">{{ $user->email }}</div>
                                <div class="text-xs text-gray-400">
                                    {{ $user->posts_count }} posts • {{ $user->comments_count }} comments
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <a href="{{ route('admin.users.edit', $user) }}" 
                               class="text-blue-600 hover:text-blue-900 text-sm font-medium">
                                Edit
                            </a>
                            @if($user->id !== 1)
                                <form method="POST" action="{{ route('admin.users.delete', $user) }}" 
                                      onsubmit="return confirm('Are you sure you want to delete this user?')" 
                                      class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="text-red-600 hover:text-red-900 text-sm font-medium">
                                        Delete
                                    </button>
                                </form>
                            @else
                                <span class="text-gray-400 text-sm">Admin</span>
                            @endif
                        </div>
                    </div>
                </li>
            @empty
                <li class="px-4 py-4 text-center text-gray-500">No users found.</li>
            @endforelse
        </ul>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $users->links() }}
    </div>
</x-admin-layout>
