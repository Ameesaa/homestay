<x-homestay-dashboard-layout>
<h1 class="ml-8 mt-6 font-semibold text-xl text-gray-800 leading-tight">Add Expense</h1>

<form>
            <!-- Name and Amount -->
            <div style="display: flex; gap: 20px; margin-bottom: 20px;">
                <!-- Name -->
                <div style="flex: 1;">
                    <label for="name" style="display: block; font-size: 14px; margin-bottom: 5px;">Name <span style="color: red;">*</span></label>
                    <input type="text" id="name" placeholder="Enter name" 
                        style="width: 100%; padding: 8px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px;">
                </div>

                <!-- Amount -->
                <div style="flex: 1;">
                    <label for="amount" style="display: block; font-size: 14px; margin-bottom: 5px;">Amount <span style="color: red;">*</span></label>
                    <input type="number" id="amount" placeholder="Enter amount" 
                        style="width: 100%; padding: 8px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px;">
                </div>
            </div>

            <!-- Date -->
            <div style="margin-bottom: 20px;">
                <label for="date" style="display: block; font-size: 14px; margin-bottom: 5px;">Date <span style="color: red;">*</span></label>
                <input type="date" id="date" 
                    style="width: 100%; padding: 8px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <!-- Type -->
            <div style="margin-bottom: 20px;">
                <label for="type" style="display: block; font-size: 14px; margin-bottom: 5px;">Type <span style="color: red;">*</span></label>
                <select id="type" 
                    style="width: 100%; padding: 8px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px;">
                    <option value="Grocery">Grocery</option>
                    <option value="Stationary">Stationary</option>
                    <option value="Internet">Internet</option>
                </select>
            </div>

            <!-- Description -->
            <div style="margin-bottom: 20px;">
                <label for="description" style="display: block; font-size: 14px; margin-bottom: 5px;">Description</label>
                <textarea id="description" rows="5" 
                    style="width: 100%; padding: 8px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px;"></textarea>
            </div>

            <!-- Buttons -->
            <div style="display: flex; gap: 10px;">
                <button type="button" 
                    style="padding: 10px 15px; background: #0056b3; color: white; font-size: 14px; border: none; border-radius: 4px; cursor: pointer;">
                    Create
                </button>
                <button type="button" 
                    style="padding: 10px 15px; background: #0056b3; color: white; font-size: 14px; border: none; border-radius: 4px; cursor: pointer;">
                    Create & create another
                </button>
                <button type="button" 
                    style="padding: 10px 15px; background: #ccc; color: black; font-size: 14px; border: none; border-radius: 4px; cursor: pointer;">
                    Cancel
                </button>
            </div>
        </form>
    </div>


<div class="container mx-auto mt-10 bg-white p-6 rounded shadow-md">
    <!-- Title -->
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-xl font-bold">Rooms</h1>
        <!-- Search -->
        <input type="text" id="searchInput" placeholder="Search" class="border border-gray-300 rounded-md p-2 w-1/4">
    </div>

    <!-- Table -->
    <table class="min-w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border border-gray-300">
                    
                </th>
                <th class="px-4 py-2 border border-gray-300">Name</th>
                <th class="px-4 py-2 border border-gray-300">Type</th>
                <th class="px-4 py-2 border border-gray-300">Amount</th>
                <th class="px-4 py-2 border border-gray-300">Date</th>
                <th class="px-4 py-2 border border-gray-300">Actions</th>
            </tr>
        </thead>
        <tbody id="tableBody">
            <!-- Sample Data -->
            <tr class="hover:bg-gray-100">
                <td class="px-4 py-2 border border-gray-300 text-center">
                    <input type="checkbox">
                </td>
                <td class="px-4 py-2 border border-gray-300"></td>
                <td class="px-4 py-2 border border-gray-300"></td>
                <td class="px-4 py-2 border border-gray-300"></td>
                <td class="px-4 py-2 border border-gray-300"></td>
                <td class="px-4 py-2 border border-gray-300 text-center space-x-2">
                    <button class="text-blue-600 hover:underline">View</button>
                    <button class="text-yellow-500 hover:underline">Edit</button>
                    <button class="text-red-500 hover:underline">Delete</button>
                </td>
            </tr>
            <tr class="hover:bg-gray-100">
                <td class="px-4 py-2 border border-gray-300 text-center">
                    <input type="checkbox">
                </td>
                <td class="px-4 py-2 border border-gray-300"></td>
                <td class="px-4 py-2 border border-gray-300"></td>
                <td class="px-4 py-2 border border-gray-300"></td>
                <td class="px-4 py-2 border border-gray-300"></td>
                <td class="px-4 py-2 border border-gray-300 text-center space-x-2">
                    <button class="text-blue-600 hover:underline">View</button>
                    <button class="text-yellow-500 hover:underline">Edit</button>
                    <button class="text-red-500 hover:underline">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
 
</x-homestay-dashboard-layout>