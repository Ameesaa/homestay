<x-homestay-dashboard-layout>
    <h1>Bookings </h1>

    <div class="filter-section">
        <div class="filter-item">
            <label for="user_id">User ID:</label>
            <input type="text" id="user_id" placeholder="Enter User ID">
        </div>
        
        <div class="filter-item">
            <label for="booking_date">Booking Date:</label>
            <input type="date" id="booking_date">
        </div>

        <button class="filter-btn">View Bookings</button>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Booking Date</th>
                <th>Check-in Date</th>
                <th>Check-out Date</th>
                <th>No. of Persons</th>
                <th>User ID</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            <table>
        
        <tbody>
            <!-- Sample Data Row 1 -->
            <tr>
                <td>1</td>
                <td>2024-12-18</td>
                <td>2024-12-20</td>
                <td>2024-12-25</td>
                <td>2</td>
                <td>U12345</td>
                <td>2024-12-15</td>
                <td>2024-12-18</td>
            </tr>
            
            
    </table>
        </thead>
        <tbody>
            <!-- Booking data will go here -->
        </tbody>
    </table>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 2rem;
            margin-bottom: 30px;
        }

        .filter-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .filter-item {
            display: flex;
            flex-direction: column;
            margin-right: 20px;
        }

        .filter-item label {
            font-size: 1rem;
            margin-bottom: 5px;
        }

        .filter-item input {
            padding: 8px;
            font-size: 1rem;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .filter-btn {
            padding: 10px 20px;
            font-size: 1rem;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .filter-btn:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        /* Change the background color of the table headers to grey and text to black */
        table th {
            background-color: #dcdcdc; /* Light grey */
            color: black;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        table tbody tr:last-child {
            border-bottom: none;
        }
    </style>
</x-homestay-dashboard-layout>
