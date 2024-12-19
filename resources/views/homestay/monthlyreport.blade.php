<x-homestay-dashboard-layout>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monthly Report</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f8f9fa;
        }

        /* Header Style */
        .header-bar {
            background-color: #ffffff; /* White Background */
            color: #000000; /* Black Text */
            text-align: center;
            padding: 15px 0;
            font-size: 1.8rem;
            font-weight: bold;
            border-bottom: 1px solid #ccc;
        }

        /* Main Container */
        .report-container {
            background-color: #ffffff;
            margin: 30px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
        }

        /* Form Elements */
        .form-row {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
            gap: 15px;
        }

        .form-group {
            flex: 1;
            min-width: 200px;
        }

        .form-label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
            transition: border 0.3s;
        }

        .form-control:focus {
            border: 1px solid #28c745;
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
        }

        .btn-custom {
            background-color:rgb(10, 13, 166);
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
            font-weight: bold;
        }

        .btn-custom:hover {
            background-color:rgb(21, 16, 186);
        }

        /* Table Styling */
        .table-responsive {
            overflow-x: auto;
            margin-top: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        /* Table Header with Grey Background and Black Text */
        thead {
            background-color: #dcdcdc; /* Light Grey */
            color: #000000; /* Black Text */
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
        }

        tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header-bar">
     Monthly Report
    </div>

    <!-- Report Section -->
    <div class="report-container">
        <!-- Form Section -->
        <div class="form-row">
            <div class="form-group">
                <label for="homestay_id" class="form-label">Homestay ID:</label>
                <input type="text" id="homestay_id" class="form-control" placeholder="Enter Homestay ID">
            </div>
            <div class="form-group">
                <label for="select_month" class="form-label">Select Month:</label>
                <input type="month" id="select_month" class="form-control">
            </div>
            <div class="form-group">
                <button id="generate_report" class="btn-custom">Generate Report</button>
            </div>
        </div>

        <!-- Table Section -->
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Total Booking</th>
                        <th>Total Profit</th>
                        <th>Total Expenses</th>
                        <th>Date</th>
                        <th>Homestay ID</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody id="report_body">
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
</x-homestay-dashboard-layout>