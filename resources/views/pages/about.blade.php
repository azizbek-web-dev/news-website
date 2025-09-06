@auth
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('About Us') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- About Content -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h1 class="text-3xl font-bold text-gray-900 mb-6">About Our News Website</h1>
                        
                        <div class="prose max-w-none">
                            <p class="text-lg text-gray-600 mb-6">
                                Welcome to our comprehensive news platform, where we deliver the latest and most relevant news 
                                from around the world. Our mission is to provide accurate, timely, and unbiased information 
                                to keep our readers well-informed about current events, politics, sports, technology, and entertainment.
                            </p>

                            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Mission</h2>
                            <p class="text-gray-600 mb-6">
                                We are committed to delivering high-quality journalism that informs, educates, and engages 
                                our audience. Our team of experienced journalists and editors work around the clock to 
                                bring you breaking news, in-depth analysis, and comprehensive coverage of the stories 
                                that matter most.
                            </p>

                            <h2 class="text-2xl font-semibold text-gray-800 mb-4">What We Cover</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div class="bg-blue-50 p-4 rounded-lg">
                                    <h3 class="text-lg font-semibold text-blue-800 mb-2">Politics</h3>
                                    <p class="text-blue-700">
                                        Stay informed about government policies, elections, and political developments 
                                        that shape our world.
                                    </p>
                                </div>
                                <div class="bg-green-50 p-4 rounded-lg">
                                    <h3 class="text-lg font-semibold text-green-800 mb-2">Sports</h3>
                                    <p class="text-green-700">
                                        Get the latest updates on your favorite sports, athletes, and major sporting events.
                                    </p>
                                </div>
                                <div class="bg-purple-50 p-4 rounded-lg">
                                    <h3 class="text-lg font-semibold text-purple-800 mb-2">Technology</h3>
                                    <p class="text-purple-700">
                                        Discover the latest innovations, tech trends, and digital developments.
                                    </p>
                                </div>
                                <div class="bg-yellow-50 p-4 rounded-lg">
                                    <h3 class="text-lg font-semibold text-yellow-800 mb-2">Entertainment</h3>
                                    <p class="text-yellow-700">
                                        Stay updated on movies, music, celebrities, and entertainment industry news.
                                    </p>
                                </div>
                            </div>

                            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Values</h2>
                            <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                                <li><strong>Accuracy:</strong> We verify all information before publishing</li>
                                <li><strong>Integrity:</strong> We maintain the highest ethical standards in journalism</li>
                                <li><strong>Transparency:</strong> We are open about our sources and methods</li>
                                <li><strong>Independence:</strong> We are free from political or commercial influence</li>
                                <li><strong>Diversity:</strong> We represent diverse voices and perspectives</li>
                            </ul>

                            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Contact Information</h2>
                            <div class="bg-gray-50 p-6 rounded-lg">
                                <p class="text-gray-600 mb-2">
                                    <strong>Email:</strong> info@newssite.com
                                </p>
                                <p class="text-gray-600 mb-2">
                                    <strong>Phone:</strong> +1 (555) 123-4567
                                </p>
                                <p class="text-gray-600 mb-2">
                                    <strong>Address:</strong> 123 News Street, Media City, MC 12345
                                </p>
                                <p class="text-gray-600">
                                    <strong>Office Hours:</strong> Monday - Friday, 9:00 AM - 6:00 PM
                                </p>
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
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- About Content -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h1 class="text-3xl font-bold text-gray-900 mb-6">About Our News Website</h1>
                        
                        <div class="prose max-w-none">
                            <p class="text-lg text-gray-600 mb-6">
                                Welcome to our comprehensive news platform, where we deliver the latest and most relevant news 
                                from around the world. Our mission is to provide accurate, timely, and unbiased information 
                                to keep our readers well-informed about current events, politics, sports, technology, and entertainment.
                            </p>

                            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Mission</h2>
                            <p class="text-gray-600 mb-6">
                                We are committed to delivering high-quality journalism that informs, educates, and engages 
                                our audience. Our team of experienced journalists and editors work around the clock to 
                                bring you breaking news, in-depth analysis, and comprehensive coverage of the stories 
                                that matter most.
                            </p>

                            <h2 class="text-2xl font-semibold text-gray-800 mb-4">What We Cover</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div class="bg-blue-50 p-4 rounded-lg">
                                    <h3 class="text-lg font-semibold text-blue-800 mb-2">Politics</h3>
                                    <p class="text-blue-700">
                                        Stay informed about government policies, elections, and political developments 
                                        that shape our world.
                                    </p>
                                </div>
                                <div class="bg-green-50 p-4 rounded-lg">
                                    <h3 class="text-lg font-semibold text-green-800 mb-2">Sports</h3>
                                    <p class="text-green-700">
                                        Get the latest updates on your favorite sports, athletes, and major sporting events.
                                    </p>
                                </div>
                                <div class="bg-purple-50 p-4 rounded-lg">
                                    <h3 class="text-lg font-semibold text-purple-800 mb-2">Technology</h3>
                                    <p class="text-purple-700">
                                        Discover the latest innovations, tech trends, and digital developments.
                                    </p>
                                </div>
                                <div class="bg-yellow-50 p-4 rounded-lg">
                                    <h3 class="text-lg font-semibold text-yellow-800 mb-2">Entertainment</h3>
                                    <p class="text-yellow-700">
                                        Stay updated on movies, music, celebrities, and entertainment industry news.
                                    </p>
                                </div>
                            </div>

                            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Values</h2>
                            <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                                <li><strong>Accuracy:</strong> We verify all information before publishing</li>
                                <li><strong>Integrity:</strong> We maintain the highest ethical standards in journalism</li>
                                <li><strong>Transparency:</strong> We are open about our sources and methods</li>
                                <li><strong>Independence:</strong> We are free from political or commercial influence</li>
                                <li><strong>Diversity:</strong> We represent diverse voices and perspectives</li>
                            </ul>

                            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Contact Information</h2>
                            <div class="bg-gray-50 p-6 rounded-lg">
                                <p class="text-gray-600 mb-2">
                                    <strong>Email:</strong> info@newssite.com
                                </p>
                                <p class="text-gray-600 mb-2">
                                    <strong>Phone:</strong> +1 (555) 123-4567
                                </p>
                                <p class="text-gray-600 mb-2">
                                    <strong>Address:</strong> 123 News Street, Media City, MC 12345
                                </p>
                                <p class="text-gray-600">
                                    <strong>Office Hours:</strong> Monday - Friday, 9:00 AM - 6:00 PM
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-guest-layout>
@endauth
