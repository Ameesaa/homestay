<x-homestay-dashboard-layout>
    <h1 class="ml-8 mt-6 font-semibold text-xl text-gray-800 leading-tight">Room List</h1>
    <div class="bg-white rounded-lg shadow-md p-4">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">Rooms</h2>
            <a href="/homestay/room/new" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
    New Room
</a>
</div>

        <!-- Search Bar -->
        <div class="relative mb-4">
            <input 
                type="text" 
                class="w-full border rounded-md pl-10 pr-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                placeholder="Search">
            <span class="absolute left-3 top-2.5 text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.9 14.32a7.4 7.4 0 111.41-1.42l4.36 4.35a1 1 0 01-1.41 1.41l-4.36-4.35zm-5.4-1.02a5.4 5.4 0 100-10.8 5.4 5.4 0 000 10.8z" clip-rule="evenodd" />
                </svg>
            </span>
        </div>

        <!-- Table -->
        <table class="w-full table-auto border-collapse border border-gray-200 rounded-lg">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-200 px-4 py-2 text-left">Room No.</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">No Of Beds</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Capacity</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Price per night</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Availability</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Attach bath room</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Room Row -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-200 px-4 py-2">101</td>
                    <td class="border border-gray-200 px-4 py-2">2</td>
                    <td class="border border-gray-200 px-4 py-2">4</td>
                    <td class="border border-gray-200 px-4 py-2">$600</td>
                    <td class="border border-gray-200 px-4 py-2">Yes</td>
                    <td class="border border-gray-200 px-4 py-2">No</td>
                    <td class="border border-gray-200 px-4 py-2 flex space-x-2">
                        <button class="text-blue-500 hover:underline">View</button>
                        <button class="text-yellow-500 hover:underline">Edit</button>
                        <button class="text-red-500 hover:underline">Delete</button>
                    </td>
                </tr>
                <!-- Add More Rows as Needed -->
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="flex justify-center items-center mt-4 space-x-4">
            <span class="text-gray-600">Per page: 
                <select class="border rounded-md px-2 py-1 focus:ring-2 focus:ring-blue-500">
                    <option>5</option>
                    <option>10</option>
                    <option>15</option>
                </select>
            </span>

            <button class="bg-gray-200 text-gray-600 px-3 py-1 rounded hover:bg-gray-300">Next</button>
        </div>
    </div>
</x-homestay-dashboard-layout>
