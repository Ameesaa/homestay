<x-admin-dashboard-layout>

<!-- Title -->
<h1 style="font-size: 24px; font-weight: bold; margin-bottom: 20px;">Users List</h1>

<!-- Table Section -->
<div style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2 style="font-size: 18px; font-weight: 600; margin: 0;">Users</h2>
        <button style="background: #007bff; color: white; border: none; border-radius: 4px; padding: 10px 20px; cursor: pointer;">
            New User
        </button>
    </div>

    <!-- Search Bar -->
    <div style="margin-bottom: 20px; display: flex; justify-content: flex-end;">
        <input type="text" placeholder="Search"
            style="padding: 8px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px; width: 200px;">
    </div>

    <!-- Table -->
    <table style="width: 100%; border-collapse: collapse; font-size: 14px;">
        <thead>
            <tr style="border-bottom: 1px solid #ccc;">
                <th style="padding: 10px; text-align: left;"><input type="checkbox"></th>
                <th style="padding: 10px; text-align: left;">Name</th>
                <th style="padding: 10px; text-align: left;">Email</th>
                <th style="padding: 10px; text-align: left;">User type</th>
                <th style="padding: 10px; text-align: center;">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Row 1 -->
            <tr style="border-bottom: 1px solid #eee;">
                <td style="padding: 10px;"><input type="checkbox"></td>
                <td style="padding: 10px;">Pramita Gahatraj</td>
                <td style="padding: 10px;">Admin@example.com</td>
                <td style="padding: 10px;">Admin</td>
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
                <td style="padding: 10px;">user@email.com</td>
                <td style="padding: 10px;">Homestay Owner</td>
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
                <td style="padding: 10px;">homestay@gmail.com</td>
                <td style="padding: 10px;">Guest</td>
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