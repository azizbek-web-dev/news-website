@auth
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('About us') }}
            </h2>
        </x-slot>

        <div class="py-6 sm:py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Hero Section -->
                <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg shadow-xl mb-8">
                    <div class="px-4 sm:px-6 py-8 sm:py-12 text-center">
                        <div class="flex justify-center mb-6">
                            <div class="bg-white bg-opacity-20 rounded-full p-3 sm:p-4">
                                <svg class="w-12 h-12 sm:w-16 sm:h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                </svg>
                            </div>
                        </div>
                        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white mb-4">About our news website</h1>
                        <p class="text-base sm:text-lg lg:text-xl text-blue-100 max-w-3xl mx-auto">
                            Your trusted source for accurate, timely, and comprehensive news coverage from around the world.
                        </p>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8">
                    <!-- Main Content -->
                    <div class="lg:col-span-1">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6 lg:mb-8">
                            <div class="p-4 sm:p-6 lg:p-8">
                                <div class="flex items-center mb-4 sm:mb-6">
                                    <div class="bg-blue-100 rounded-full p-2 sm:p-3 mr-3 sm:mr-4">
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-xl sm:text-2xl font-semibold text-gray-800">Our mission</h2>
                                </div>
                                <p class="text-base sm:text-lg text-gray-600 mb-4 sm:mb-6">
                                    We are committed to delivering high-quality journalism that informs, educates, and engages 
                                    our audience. Our team of experienced journalists and editors work around the clock to 
                                    bring you breaking news, in-depth analysis, and comprehensive coverage of the stories 
                                    that matter most.
                                </p>
                                <p class="text-sm sm:text-base text-gray-600">
                                    Welcome to our comprehensive news platform, where we deliver the latest and most relevant news 
                                    from around the world. Our mission is to provide accurate, timely, and unbiased information 
                                    to keep our readers well-informed about current events, politics, sports, technology, and entertainment.
                                </p>
                            </div>
                        </div>

                        <!-- What We Cover -->
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6 lg:mb-8">
                            <div class="p-4 sm:p-6 lg:p-8">
                                <div class="flex items-center mb-4 sm:mb-6">
                                    <div class="bg-green-100 rounded-full p-2 sm:p-3 mr-3 sm:mr-4">
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-xl sm:text-2xl font-semibold text-gray-800">What we cover</h2>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                                    <div class="bg-blue-50 p-4 sm:p-6 rounded-lg hover:shadow-md transition-shadow duration-300">
                                        <div class="flex items-center mb-3 sm:mb-4">
                                            <div class="bg-blue-100 rounded-full p-2 mr-3">
                                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                                </svg>
                                            </div>
                                            <h3 class="text-base sm:text-lg font-semibold text-blue-800">Politics</h3>
                                        </div>
                                        <p class="text-sm sm:text-base text-blue-700">
                                            Stay informed about government policies, elections, and political developments 
                                            that shape our world.
                                        </p>
                                    </div>
                                    <div class="bg-green-50 p-4 sm:p-6 rounded-lg hover:shadow-md transition-shadow duration-300">
                                        <div class="flex items-center mb-3 sm:mb-4">
                                            <div class="bg-green-100 rounded-full p-2 mr-3">
                                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                                </svg>
                                            </div>
                                            <h3 class="text-base sm:text-lg font-semibold text-green-800">Sports</h3>
                                        </div>
                                        <p class="text-sm sm:text-base text-green-700">
                                            Get the latest updates on your favorite sports, athletes, and major sporting events.
                                        </p>
                                    </div>
                                    <div class="bg-purple-50 p-4 sm:p-6 rounded-lg hover:shadow-md transition-shadow duration-300">
                                        <div class="flex items-center mb-3 sm:mb-4">
                                            <div class="bg-purple-100 rounded-full p-2 mr-3">
                                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                </svg>
                                            </div>
                                            <h3 class="text-base sm:text-lg font-semibold text-purple-800">Technology</h3>
                                        </div>
                                        <p class="text-sm sm:text-base text-purple-700">
                                            Discover the latest innovations, tech trends, and digital developments.
                                        </p>
                                    </div>
                                    <div class="bg-yellow-50 p-4 sm:p-6 rounded-lg hover:shadow-md transition-shadow duration-300">
                                        <div class="flex items-center mb-3 sm:mb-4">
                                            <div class="bg-yellow-100 rounded-full p-2 mr-3">
                                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                            <h3 class="text-base sm:text-lg font-semibold text-yellow-800">Entertainment</h3>
                                        </div>
                                        <p class="text-sm sm:text-base text-yellow-700">
                                            Stay updated on movies, music, celebrities, and entertainment industry news.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="space-y-6 lg:space-y-8">
                        <!-- Our Values -->
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-4 sm:p-6">
                                <div class="flex items-center mb-4 sm:mb-6">
                                    <div class="bg-indigo-100 rounded-full p-2 sm:p-3 mr-3 sm:mr-4">
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Our values</h2>
                                </div>
                                <div class="space-y-3 sm:space-y-4">
                                    <div class="flex items-start">
                                        <div class="bg-green-100 rounded-full p-1 mr-3 mt-1">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="text-sm sm:text-base font-semibold text-gray-800">Accuracy</h4>
                                            <p class="text-xs sm:text-sm text-gray-600">We verify all information before publishing</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="bg-green-100 rounded-full p-1 mr-3 mt-1">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="text-sm sm:text-base font-semibold text-gray-800">Integrity</h4>
                                            <p class="text-xs sm:text-sm text-gray-600">We maintain the highest ethical standards</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="bg-green-100 rounded-full p-1 mr-3 mt-1">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="text-sm sm:text-base font-semibold text-gray-800">Transparency</h4>
                                            <p class="text-xs sm:text-sm text-gray-600">We are open about our sources and methods</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="bg-green-100 rounded-full p-1 mr-3 mt-1">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="text-sm sm:text-base font-semibold text-gray-800">Independence</h4>
                                            <p class="text-xs sm:text-sm text-gray-600">Free from political or commercial influence</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="bg-green-100 rounded-full p-1 mr-3 mt-1">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="text-sm sm:text-base font-semibold text-gray-800">Diversity</h4>
                                            <p class="text-xs sm:text-sm text-gray-600">We represent diverse voices and perspectives</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-4 sm:p-6">
                                <div class="flex items-center mb-4 sm:mb-6">
                                    <div class="bg-gray-100 rounded-full p-2 sm:p-3 mr-3 sm:mr-4">
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Contact us</h2>
                                </div>
                                <div class="space-y-3 sm:space-y-4">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        <span class="text-sm sm:text-base text-gray-600">info@newssite.com</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                        <span class="text-sm sm:text-base text-gray-600">+1 (555) 123-4567</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-400 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span class="text-sm sm:text-base text-gray-600">123 News Street, Media City, MC 12345</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-400 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-sm sm:text-base text-gray-600">Monday - Friday, 9:00 AM - 6:00 PM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
@else
    <x-guest-layout>
        <div class="py-6 sm:py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Hero Section -->
                <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg shadow-xl mb-8">
                    <div class="px-4 sm:px-6 py-8 sm:py-12 text-center">
                        <div class="flex justify-center mb-6">
                            <div class="bg-white bg-opacity-20 rounded-full p-3 sm:p-4">
                                <svg class="w-12 h-12 sm:w-16 sm:h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                </svg>
                            </div>
                        </div>
                        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white mb-4">About our news website</h1>
                        <p class="text-base sm:text-lg lg:text-xl text-blue-100 max-w-3xl mx-auto">
                            Your trusted source for accurate, timely, and comprehensive news coverage from around the world.
                        </p>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8">
                    <!-- Main Content -->
                    <div class="lg:col-span-1">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6 lg:mb-8">
                            <div class="p-4 sm:p-6 lg:p-8">
                                <div class="flex items-center mb-4 sm:mb-6">
                                    <div class="bg-blue-100 rounded-full p-2 sm:p-3 mr-3 sm:mr-4">
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-xl sm:text-2xl font-semibold text-gray-800">Our mission</h2>
                                </div>
                                <p class="text-base sm:text-lg text-gray-600 mb-4 sm:mb-6">
                                    We are committed to delivering high-quality journalism that informs, educates, and engages 
                                    our audience. Our team of experienced journalists and editors work around the clock to 
                                    bring you breaking news, in-depth analysis, and comprehensive coverage of the stories 
                                    that matter most.
                                </p>
                                <p class="text-sm sm:text-base text-gray-600">
                                    Welcome to our comprehensive news platform, where we deliver the latest and most relevant news 
                                    from around the world. Our mission is to provide accurate, timely, and unbiased information 
                                    to keep our readers well-informed about current events, politics, sports, technology, and entertainment.
                                </p>
                            </div>
                        </div>

                        <!-- What We Cover -->
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6 lg:mb-8">
                            <div class="p-4 sm:p-6 lg:p-8">
                                <div class="flex items-center mb-4 sm:mb-6">
                                    <div class="bg-green-100 rounded-full p-2 sm:p-3 mr-3 sm:mr-4">
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-xl sm:text-2xl font-semibold text-gray-800">What we cover</h2>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                                    <div class="bg-blue-50 p-4 sm:p-6 rounded-lg hover:shadow-md transition-shadow duration-300">
                                        <div class="flex items-center mb-3 sm:mb-4">
                                            <div class="bg-blue-100 rounded-full p-2 mr-3">
                                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                                </svg>
                                            </div>
                                            <h3 class="text-base sm:text-lg font-semibold text-blue-800">Politics</h3>
                                        </div>
                                        <p class="text-sm sm:text-base text-blue-700">
                                            Stay informed about government policies, elections, and political developments 
                                            that shape our world.
                                        </p>
                                    </div>
                                    <div class="bg-green-50 p-4 sm:p-6 rounded-lg hover:shadow-md transition-shadow duration-300">
                                        <div class="flex items-center mb-3 sm:mb-4">
                                            <div class="bg-green-100 rounded-full p-2 mr-3">
                                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                                </svg>
                                            </div>
                                            <h3 class="text-base sm:text-lg font-semibold text-green-800">Sports</h3>
                                        </div>
                                        <p class="text-sm sm:text-base text-green-700">
                                            Get the latest updates on your favorite sports, athletes, and major sporting events.
                                        </p>
                                    </div>
                                    <div class="bg-purple-50 p-4 sm:p-6 rounded-lg hover:shadow-md transition-shadow duration-300">
                                        <div class="flex items-center mb-3 sm:mb-4">
                                            <div class="bg-purple-100 rounded-full p-2 mr-3">
                                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                </svg>
                                            </div>
                                            <h3 class="text-base sm:text-lg font-semibold text-purple-800">Technology</h3>
                                        </div>
                                        <p class="text-sm sm:text-base text-purple-700">
                                            Discover the latest innovations, tech trends, and digital developments.
                                        </p>
                                    </div>
                                    <div class="bg-yellow-50 p-4 sm:p-6 rounded-lg hover:shadow-md transition-shadow duration-300">
                                        <div class="flex items-center mb-3 sm:mb-4">
                                            <div class="bg-yellow-100 rounded-full p-2 mr-3">
                                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                            <h3 class="text-base sm:text-lg font-semibold text-yellow-800">Entertainment</h3>
                                        </div>
                                        <p class="text-sm sm:text-base text-yellow-700">
                                            Stay updated on movies, music, celebrities, and entertainment industry news.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="space-y-6 lg:space-y-8">
                        <!-- Our Values -->
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-4 sm:p-6">
                                <div class="flex items-center mb-4 sm:mb-6">
                                    <div class="bg-indigo-100 rounded-full p-2 sm:p-3 mr-3 sm:mr-4">
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Our values</h2>
                                </div>
                                <div class="space-y-3 sm:space-y-4">
                                    <div class="flex items-start">
                                        <div class="bg-green-100 rounded-full p-1 mr-3 mt-1">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="text-sm sm:text-base font-semibold text-gray-800">Accuracy</h4>
                                            <p class="text-xs sm:text-sm text-gray-600">We verify all information before publishing</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="bg-green-100 rounded-full p-1 mr-3 mt-1">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="text-sm sm:text-base font-semibold text-gray-800">Integrity</h4>
                                            <p class="text-xs sm:text-sm text-gray-600">We maintain the highest ethical standards</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="bg-green-100 rounded-full p-1 mr-3 mt-1">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="text-sm sm:text-base font-semibold text-gray-800">Transparency</h4>
                                            <p class="text-xs sm:text-sm text-gray-600">We are open about our sources and methods</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="bg-green-100 rounded-full p-1 mr-3 mt-1">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="text-sm sm:text-base font-semibold text-gray-800">Independence</h4>
                                            <p class="text-xs sm:text-sm text-gray-600">Free from political or commercial influence</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="bg-green-100 rounded-full p-1 mr-3 mt-1">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="text-sm sm:text-base font-semibold text-gray-800">Diversity</h4>
                                            <p class="text-xs sm:text-sm text-gray-600">We represent diverse voices and perspectives</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-4 sm:p-6">
                                <div class="flex items-center mb-4 sm:mb-6">
                                    <div class="bg-gray-100 rounded-full p-2 sm:p-3 mr-3 sm:mr-4">
                                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Contact us</h2>
                                </div>
                                <div class="space-y-3 sm:space-y-4">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        <span class="text-sm sm:text-base text-gray-600">info@newssite.com</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                        <span class="text-sm sm:text-base text-gray-600">+1 (555) 123-4567</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-400 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span class="text-sm sm:text-base text-gray-600">123 News Street, Media City, MC 12345</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-400 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-sm sm:text-base text-gray-600">Monday - Friday, 9:00 AM - 6:00 PM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-guest-layout>
@endauth