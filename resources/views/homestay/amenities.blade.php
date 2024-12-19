<x-homestay-dashboard-layout>


 <!-- Form Section -->
 <div style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin-bottom: 20px;">
            <h1 style="font-size: 20px; margin-bottom: 20px; font-weight: 600;">Add amenities</h1>
            <form>
                <!-- Amenity Name -->
                <div style="margin-bottom: 20px;">
                    <label for="amenity_name" style="display: block; font-size: 14px; margin-bottom: 5px;">Amenity name <span style="color: red;">*</span></label>
                    <input type="text" id="amenity_name" placeholder="Enter amenity name" 
                        style="width: 100%; padding: 8px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px;">
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

        <!-- Table Section -->
        <div style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
            <h2 style="font-size: 18px; margin-bottom: 20px; font-weight: 600;">Rooms</h2>
            <table style="width: 100%; border-collapse: collapse; font-size: 14px;">
                <thead>
                    <tr style="border-bottom: 1px solid #ccc;">
                        <th style="text-align: left; padding: 10px;">Amenity name</th>
                        <th style="text-align: right; padding: 10px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px;">High speed internet</td>
                        <td style="text-align: right; padding: 10px;">
                            <a href="#" style="color: orange; margin-right: 10px;">Edit</a>
                            <a href="#" style="color: red;">Delete</a>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px;">Hot and cold water</td>
                        <td style="text-align: right; padding: 10px;">
                            <a href="#" style="color: orange; margin-right: 10px;">Edit</a>
                            <a href="#" style="color: red;">Delete</a>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px;">Attach bathroom</td>
                        <td style="text-align: right; padding: 10px;">
                            <a href="#" style="color: orange; margin-right: 10px;">Edit</a>
                            <a href="#" style="color: red;">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px;">Swimming pool</td>
                        <td style="text-align: right; padding: 10px;">
                            <a href="#" style="color: orange; margin-right: 10px;">Edit</a>
                            <a href="#" style="color: red;">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            
    </div>
</x-homestay-dashboard-layout>