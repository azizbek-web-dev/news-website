<x-admin-layout>
    <x-slot name="header">Categories Management</x-slot>

    <div class="mb-6">
        <a href="{{ route('admin.categories.create') }}" 
           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create New Category
        </a>
    </div>

    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Categories</h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">Manage all categories in the system.</p>
        </div>
        <ul class="divide-y divide-gray-200">
            @forelse($categories as $category)
                <li>
                    <div class="px-4 py-4 flex items-center justify-between">
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <p class="text-sm font-medium text-gray-900">{{ Str::title($category->name) }}</p>
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                    {{ $category->posts_count }} posts
                                </span>
                            </div>
                            <div class="mt-1">
                                <p class="text-sm text-gray-500">Slug: {{ $category->slug }}</p>
                            </div>
                        </div>
                        <div class="ml-4 flex-shrink-0 flex space-x-2">
                            <a href="{{ route('admin.categories.edit', $category) }}" 
                               class="text-yellow-600 hover:text-yellow-900 text-sm font-medium">
                                Edit
                            </a>
                            <form method="POST" action="{{ route('admin.categories.delete', $category) }}" 
                                  onsubmit="return confirm('Are you sure you want to delete this category?')" 
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
                </li>
            @empty
                <li class="px-4 py-4 text-center text-gray-500">No categories found.</li>
            @endforelse
        </ul>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $categories->links() }}
    </div>
</x-admin-layout>
