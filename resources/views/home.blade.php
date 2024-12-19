<x-app-layout>
    <section class="relative h-[580px] overflow-hidden bg-no-repeat bg-center bg-cover"
        style="background-image: url({{ asset('/images/hero-home.webp') }});">
        <div class="absolute inset-0 bg-gradient-to-b from-black/95 via-black/50 to-transparent">
        </div>
        <div class="relative container mx-auto h-full flex flex-col items-center justify-center text-center text-white">

            <h1 class="text-3xl text-baalance md:text-7xl font-black mb-4 drop-shadow-sm flex flex-col space-y-4">
                <span>Experience Nepal Like</span> <span>Never Before</span>
            </h1>

            <div class="flex flex-col mt-4 w-full max-w-2xl items-center">
                <p class="drop-shadow-md">Discover charming homestays across Nepal, from the Himalayas to hidden
                    valleys.Immerse yourself in
                    authentic Nepali hospitality and explore the beauty of this incredible country.</p>
                {{-- <input type="search" placeholder="Homestays Name"
                    class="text-gray-900 h-[50px] text-xl flex-1 px-4 py-2  rounded-l-lg border-none focus:outline-none focus:ring-2 focus:ring-blue-500" /> --}}
                <button
                    class="bg-blue-600 h-[50px] hover:bg-blue-700 text-white px-8 py-2 mt-6 font-semibold rounded-lg">
                    Find Your Nepal Homestay
                </button>
            </div>
        </div>
    </section>
   
     <!-- Homestay Listings Section -->
     <div class="container mx-auto py-6 px-4 md:px-6">
        <!-- Just Added Section -->
        <h2 class="text-gray-700 font-semibold text-lg mb-2">Just Added</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-md overflow-hidden">
                <img src="{{ asset('images/s.jpg') }}" alt="Snowland Ghandruk" class="w-full h-64 object-cover">
                <div class="p-4">
                    <div class="flex items-center mb-2 text-yellow-500">★★★★★</div>
                    <h3 class="text-gray-800 font-bold text-lg">Snowland Ghandruk</h3>
                    <button class="text-blue-600 font-semibold text-sm mt-2">View</button>
                </div>
            </div>

            <!-- Other cards with adjusted dimensions -->
            <div class="bg-white shadow-lg rounded-md overflow-hidden">
                <img src="{{ asset('images/lwang.jpg') }}" alt="Lwang" class="w-full h-64 object-cover">
                <div class="p-4">
                    <div class="flex items-center mb-2 text-yellow-500">★★★★★</div>
                    <h3 class="text-gray-800 font-bold text-lg">Lwang</h3>
                    <button class="text-blue-600 font-semibold text-sm mt-2">View</button>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-md overflow-hidden">
                <img src="{{ asset('images/v.jpg') }}" alt="Paudwar" class="w-full h-64 object-cover">
                <div class="p-4">
                    <div class="flex items-center mb-2">
                        <span class="text-yellow-500">★</span>
                        <span class="text-yellow-500">★</span>
                        <span class="text-yellow-400">★</span>
                        <span class="text-gray-300">★</span>
                        <span class="text-gray-300">★</span>
                    </div>
                    <h3 class="text-gray-800 font-bold text-lg">Paudwar</h3>
                    <button class="text-blue-600 font-semibold text-sm mt-2">View</button>
                </div>
            </div>
        </div>

        <!-- Top Rated Section -->
        <h2 class="text-gray-700 font-semibold text-lg mb-2">Top Rated</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-md overflow-hidden">
                <img src="{{ asset('images/puja.jpg') }}" alt="Puja Homestay" class="w-full h-64 object-cover">
                <div class="p-4">
                    <div class="flex items-center mb-2">
                        <span class="text-yellow-500">★</span>
                        <span class="text-yellow-500">★</span>
                        <span class="text-yellow-500">★</span>
                        <span class="text-gray-300">★</span>
                        <span class="text-gray-300">★</span>
                    </div>
                    <h3 class="text-gray-800 font-bold text-lg">Puja Homestay</h3>
                    <button class="text-blue-600 font-semibold text-sm mt-2">View</button>
                </div>
            </div>

            <!-- Other Top Rated cards with adjusted dimensions -->
            <div class="bg-white shadow-lg rounded-md overflow-hidden">
                <img src="{{ asset('images/village.jpg') }}" alt="Newar Homestay" class="w-full h-64 object-cover">
                <div class="p-4">
                    <div class="flex items-center mb-2">
                        <span class="text-yellow-500">★</span>
                        <span class="text-yellow-500">★</span>
                        <span class="text-yellow-500">★</span>
                        <span class="text-gray-500">★</span>
                        <span class="text-gray-300">★</span>
                    </div>
                    <h3 class="text-gray-800 font-bold text-lg">Newar Homestay</h3>
                    <button class="text-blue-600 font-semibold text-sm mt-2">View</button>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-md overflow-hidden">
                <img src="{{ asset('images/n.jpg') }}" alt="Newar Homestay" class="w-full h-64 object-cover">
                <div class="p-4">
                    <div class="flex items-center mb-2">
                        <span class="text-yellow-500">★</span>
                        <span class="text-yellow-500">★</span>
                        <span class="text-yellow-200">★</span>
                        <span class="text-gray-200">★</span>
                        <span class="text-gray-300">★</span>
                    </div>
                    <h3 class="text-gray-800 font-bold text-lg">Newar Homestay</h3>
                    <button class="text-blue-600 font-semibold text-sm mt-2">View</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>