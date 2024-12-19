<x-homestay-dashboard-layout>

<!-- Stats Cards -->
<div class="flex space-x-6 mb-8">
    <div class="p-6 bg-white rounded-full shadow-md text-center flex-1">
        <p class="text-gray-500">Total Bookings</p>
        <h2 class="text-3xl font-bold">0</h2>
    </div>
    <div class="p-6 bg-white rounded-full shadow-md text-center flex-1">
        <p class="text-gray-500">Bookings This Month</p>
        <h2 class="text-3xl font-bold">0</h2>
    </div>
    <div class="p-6 bg-white rounded-full shadow-md text-center flex-1">
        <p class="text-gray-500">Available Rooms</p>
        <h2 class="text-3xl font-bold">0</h2>
    </div>
</div>

            <!-- New Bookings Table -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-lg font-semibold text-gray-700">New Bookings</h2>
                </div>
                <div class="overflow-auto p-6">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-sm text-gray-500 border-b border-gray-200">
                                <th class="pb-3">Booking Date</th>
                                <th class="pb-3">Check-in</th>
                                <th class="pb-3">Check-out</th>
                                <th class="pb-3">Guest Name</th>
                                <th class="pb-3">Phone</th>
                                <th class="pb-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700 text-sm">
                            <tr class="border-b">
                                <td class="py-2"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="flex space-x-2">
                                    <a href="#" class="text-blue-500">View</a>
                                    <a href="#" class="text-orange-500">Edit</a>
                                </td>
                            </tr>
                         
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="flex justify-between items-center mt-4 px-6 py-2">
    <div class="flex items-center justify-center space-x-2 flex-1">
        <span class="text-gray-600 text-sm">Per page</span>
        <select class="border-gray-300 rounded text-gray-700 text-sm">
            <option>5</option>
            <option>10</option>
            <option>15</option>
        </select>
    </div>
    <button class="text-gray-600 text-sm">Next</button>
</div>
        </main>
    </div>
<

</x-homestay-dashboard-layout>