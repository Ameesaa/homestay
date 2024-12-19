<x-admin-dashboard-layout>
    <!-- Statistics Section -->
    <div style="display: flex; gap: 20px; margin-bottom: 30px;">
            <!-- Total Users -->
            <div style="flex: 1; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); text-align: center;">
                <h3 style="font-size: 16px; margin-bottom: 10px;">Total users</h3>
                <p style="font-size: 24px; font-weight: bold;">0</p>
            </div>
            <!-- Total Homestays -->
            <div style="flex: 1; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); text-align: center;">
                <h3 style="font-size: 16px; margin-bottom: 10px;">Total Homestay</h3>
                <p style="font-size: 24px; font-weight: bold;">0</p>
            </div>
            <!-- Total Bookings -->
            <div style="flex: 1; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); text-align: center;">
                <h3 style="font-size: 16px; margin-bottom: 10px;">Total Booking done</h3>
                <p style="font-size: 24px; font-weight: bold;">0</p>
            </div>
        </div>

        <!-- Table Section -->
        <div style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
            <h2 style="font-size: 18px; margin-bottom: 20px; font-weight: 600;">New Homestay</h2>

            <!-- Search Bar -->
            <div style="margin-bottom: 20px; display: flex; justify-content: space-between;">
                <span>Table</span>
                <input type="text" placeholder="Search" 
                    style="padding: 8px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px; width: 200px;">
            </div>

            <!-- Table -->
            <table style="width: 100%; border-collapse: collapse; font-size: 14px;">
                <thead>
                    <tr style="border-bottom: 1px solid #ccc;">
                        <th style="padding: 10px; text-align: left;"><input type="checkbox"></th>
                        <th style="padding: 10px; text-align: left;">Name</th>
                        <th style="padding: 10px; text-align: left;">Home stay name</th>
                        <th style="padding: 10px; text-align: center;">Approve</th>
                        <th style="padding: 10px; text-align: center;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px;"><input type="checkbox"></td>
                        <td style="padding: 10px;">Sita Maya</td>
                        <td style="padding: 10px;">Sita Homestay</td>
                        <td style="padding: 10px; text-align: center;">
                            <input type="checkbox" style="transform: scale(1.2);">
                        </td>
                        <td style="padding: 10px; text-align: center;">
                            <a href="#" style="color: gray; margin-right: 10px;">View</a>
                            <a href="#" style="color: orange; margin-right: 10px;">Edit</a>
                            <a href="#" style="color: red;">Delete</a>
                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px;"><input type="checkbox"></td>
                        <td style="padding: 10px;">Rekha Thapa</td>
                        <td style="padding: 10px;">Manung kot homestay</td>
                        <td style="padding: 10px; text-align: center;">
                            <input type="checkbox" style="transform: scale(1.2);" checked>
                        </td>
                        <td style="padding: 10px; text-align: center;">
                            <a href="#" style="color: gray; margin-right: 10px;">View</a>
                            <a href="#" style="color: orange; margin-right: 10px;">Edit</a>
                            <a href="#" style="color: red;">Delete</a>
                        </td>
                    </tr>
                    <!-- Row 3 -->
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px;"><input type="checkbox"></td>
                        <td style="padding: 10px;">Rajesh Hamal</td>
                        <td style="padding: 10px;">Rukum homestay</td>
                        <td style="padding: 10px; text-align: center;">
                            <input type="checkbox" style="transform: scale(1.2);" checked>
                        </td>
                        <td style="padding: 10px; text-align: center;">
                            <a href="#" style="color: gray; margin-right: 10px;">View</a>
                            <a href="#" style="color: orange; margin-right: 10px;">Edit</a>
                            <a href="#" style="color: red;">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</x-admin-dashboard-layout>
