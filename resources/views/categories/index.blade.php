@auth
    <x-app-layout>
        <x-slot name="header">
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Categories') }}
                </h2>
                @if(auth()->user()->id === 1)
                    <a href="{{ route('categories.create') }}" 
                       class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Create category
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

                @if (session('error'))
                    <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Categories Grid -->
                @if($categories->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($categories as $category)
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition-shadow duration-300">
                                <div class="p-6">
                                    <!-- Category Name -->
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">
                                        <a href="{{ route('categories.show', $category) }}" 
                                           class="hover:text-blue-600 transition-colors duration-200">
                                            {{ Str::title($category->name) }}
                                        </a>
                                    </h3>

                                    <!-- Post Count -->
                                    <p class="text-gray-600 text-sm mb-4">
                                        {{ $category->posts_count }} {{ Str::plural('post', $category->posts_count) }}
                                    </p>

                                    <!-- Actions (for admin only) -->
                                    @if(auth()->user()->id === 1)
                                        <div class="flex space-x-2">
                                            <a href="{{ route('categories.edit', $category) }}" 
                                               class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded text-sm">
                                                Edit
                                            </a>
                                            <form method="POST" action="{{ route('categories.destroy', $category) }}" 
                                                  onsubmit="return confirm('Are you sure you want to delete this category?')" 
                                                  class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded text-sm">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    @endif

                                    <!-- View Posts Link -->
                                    <div class="mt-4">
                                        <a href="{{ route('categories.show', $category) }}" 
                                           class="text-blue-600 hover:text-blue-800 font-medium text-sm">
                                            View posts →
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="mt-8">
                        {{ $categories->links() }}
                    </div>
                @else
                    <!-- No Categories Message -->
                    <div class="text-center py-12">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">No categories yet</h3>
                        <p class="mt-1 text-sm text-gray-500">Get started by creating a new category.</p>
                        <div class="mt-6">
                            <a href="{{ route('categories.create') }}" 
                               class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                                Create category
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

                @if (session('error'))
                    <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Categories Grid -->
                @if($categories->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($categories as $category)
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition-shadow duration-300">
                                <div class="p-6">
                                    <!-- Category Name -->
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">
                                        <a href="{{ route('categories.show', $category) }}" 
                                           class="hover:text-blue-600 transition-colors duration-200">
                                            {{ Str::title($category->name) }}
                                        </a>
                                    </h3>

                                    <!-- Post Count -->
                                    <p class="text-gray-600 text-sm mb-4">
                                        {{ $category->posts_count }} {{ Str::plural('post', $category->posts_count) }}
                                    </p>

                                    <!-- View Posts Link -->
                                    <div class="mt-4">
                                        <a href="{{ route('categories.show', $category) }}" 
                                           class="text-blue-600 hover:text-blue-800 font-medium text-sm">
                                            View posts →
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="mt-8">
                        {{ $categories->links() }}
                    </div>
                @else
                    <!-- No Categories Message -->
                    <div class="text-center py-12">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">No categories yet</h3>
                        <p class="mt-1 text-sm text-gray-500">Please log in to create categories.</p>
                    </div>
                @endif
            </div>
        </div>
    </x-guest-layout>
@endauth

