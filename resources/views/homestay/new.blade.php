<x-homestay-dashboard-layout>

    <h1 class="ml-8 mt-6 font-semibold text-xl text-gray-800 leading-tight">Add New Room</h1>
    <div class="bg-white rounded-lg shadow-md p-6">
        <form>
            <div class="grid grid-cols-2 gap-4">
                <!-- Room Number -->
                <div>
                    <label for="room_no" class="block font-semibold mb-1">Room No </label>
                    <input type="text" id="room_no" name="room_no" class="border p-2 w-full" placeholder="Enter room number">
                </div>

                <!-- Number of Beds -->
                <div>
                    <label for="no_of_beds" class="block font-semibold mb-1">No of Beds </label>
                    <input type="number" id="no_of_beds" name="no_of_beds" class="border p-2 w-full" placeholder="Enter number of beds">
                </div>

                <!-- Capacity -->
                <div>
                    <label for="capacity" class="block font-semibold mb-1">Capacity </label>
                    <input type="number" id="capacity" name="capacity" class="border p-2 w-full" placeholder="Enter capacity">
                </div>

                <!-- Price Per Night -->
                <div>
                    <label for="price_per_night" class="block font-semibold mb-1">Price per Night </label>
                    <input type="number" id="price_per_night" name="price_per_night" class="border p-2 w-full" placeholder="Enter price per night">
                </div>

                <!-- Availability -->
                <div>
                    <label class="block font-semibold mb-1">Availability</label>
                    <input type="checkbox" id="availability" name="availability">
                    <label for="availability">Available</label>
                </div>

                <!-- Attached Bathroom -->
                <div>
                    <label class="block font-semibold mb-1">Attached Bathroom</label>
                    <input type="checkbox" id="attached_bathroom" name="attached_bathroom">
                    <label for="attached_bathroom">Yes</label>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="mt-6">
                <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save</button>
                <a href="{{ route('homestay.room') }}" class="bg-gray-200 text-black px-4 py-2 rounded hover:bg-gray-300">Cancel</a>
            </div>
        </form>
    </div>


</x-homestay-dashboard-layout>
