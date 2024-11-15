<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page</title>
    <style>
        /* Basic Styles for body, background, and font */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1f1534;
            color: #fff;
        }

        /* Navigation Bar Styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #241542;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        /* Navbar Menu Links */
        .navbar .menu a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        /* Navbar Hover Effect */
        .navbar .menu a:hover {
            background-color: #7b5ead;
        }

        /* Profile Image Styling */
        .navbar .profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 50px;
        }

        .navbar .logo img {
        width: 50px; /* Adjust this value to control the logo size */
        height: auto; /* Keeps the aspect ratio */
        }

        /* Booking Form Section */
        .section {
            display: flex;
            justify-content: center;
            padding-top: 100px;
        }

        /* Container for Booking Form */
        .booking-container {
            width: 90%;
            max-width: 1000px;
            padding: 20px;
            background: #6a4d9a;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        /* Styles for Form Fieldsets */
        fieldset {
            flex: 1;
            background-color: #5a3d8e;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            position: relative;
            max-width: 450px;
            margin: 0 auto;
        }

        /* Legend for Fieldsets */
        legend {
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            padding: 5px 10px;
            margin-bottom: 10px;
        }

        /* Form Group Styling */
        .form-group {
            max-width: 90%;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        /* Label Styling for Form Inputs */
        label {
            font-weight: bold;
            font-size: 14px;
            color: #ddd;
        }

        /* Input and Select Field Styling */
        input[type="text"],
        input[type="date"],
        input[type="time"],
        input[type="number"],
        select {
            padding: 10px;
            font-size: 14px;
            color: #000;
            background-color: #fff;
            border: none;
            border-radius: 5px;
            width: 100%;
            max-width: 300px;
            margin: 0 auto;
        }

        /* Container for Time Inputs */
        .time-container {
            display: flex;
            gap: 30px;
            justify-content: space-between;
        }

        /* Checkbox Styling */
        input[type="checkbox"] {
            margin-right: 10px;
        }

        /* Centered Button Wrapper */
        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            padding-bottom: 20px;
        }

        /* Button Styling */
        .button {
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #241542;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            max-width: 150px;
            text-align: center;
        }

        /* Hover Effect for Button */
        .button:hover {
            background-color: #7b5ead;
        }

        /* Equipment Fee Text */
        #equipmentFee {
            display: none;
        }

        /* History Table Section */
        .history-section {
            width: 90%;
            max-width: 1000px;
            margin: 20px auto;
        }

        /* History Table Title */
        .history-title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #fff;
        }

        /* History Table Styling */
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #5a3d8e;
            border-radius: 10px;
        }

        /* Table Borders */
        table, th, td {
            border: 1px solid #ddd;
        }

        /* Table Header and Data Cells */
        th, td {
            padding: 10px;
            text-align: left;
        }

        /* Table Header Background and Text Color */
        th {
            background-color: #241542;
            color: white;
        }

        /* Table Data Cell Text Color */
        td {
            color: #ddd;
        }

         /* Footer styling for flexible positioning */
         .footer {
            background-color: #3f3d56;
            color: white;
            display: flex;
            justify-content: space-around;
            padding: 20px;
            margin-top: 20px; /* Adds space above footer */
        }

        /* Footer button styling */
        .footer button {
            background-color: #6b5b95;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

    </style>
</head>
<body>

<!-- Navigation Bar -->
<div class="navbar">
    <div class="logo">
    <a href="/index">
            <img src="Images/al.png" alt="Logo" >
        </a>
        </div>
    <div class="menu">
        <a href="/home">Home</a>
        <a href="#news">News</a>
        <a href="#calendar">Calendar</a>
        <a href="/booking">Booking</a>
    </div>
    <div class="profile">
    <a href="/profile">
            <img src="Images/profile.png" alt="Logo" >
        </a>
        </div>
</div>

<!-- Booking Form Section -->
<div class="section" id="bookingFormSection">
    <div class="booking-container">
        <!-- Personal Details Section -->
        <fieldset>
            <legend>Personal Details</legend>
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" required>

                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" required>

                <label for="mobile">Mobile Number</label>
                <input type="text" id="mobile" required>

                <label for="email">Email Address</label>
                <input type="text" id="email" required>
            </div>
        </fieldset>

        <!-- Session Details Section -->
        <fieldset>
            <legend>Session Details</legend>
            <div class="form-group">
                <label for="sport">Sport</label>
                <select id="sport" required>
                    <option value="">Select Sport</option>
                    <option value="football">Football</option>
                    <option value="basketball">Basketball</option>
                    <option value="tennis">Tennis</option>
                    <option value="badminton">Badminton</option>
                    <option value="cricket">Cricket</option>
                </select>

                <label for="people">People</label>
                <input type="number" id="people" min="1" required>

                <label for="date">Date</label>
                <input type="date" id="date" required>

                <div class="time-container">
                    <div>
                        <label for="checkInTime">Check-in Time</label>
                        <input type="time" id="checkInTime" required>
                    </div>
                    <div>
                        <label for="checkOutTime">Check-out Time</label>
                        <input type="time" id="checkOutTime" required>
                    </div>
                </div>

                <!-- Equipment Checkbox and Fee Display -->
                <label>
                    <input type="checkbox" id="equipmentCheckBox">
                    Do you want to borrow company sports equipment?
                </label>

                <p id="equipmentFee">A fee of Rs. <span id="feeAmount">X</span> will be charged upon entrance to the venue</p>
            </div>
        </fieldset>
    </div>
</div>

<!-- Centered Booking Button -->
<div class="button-container">
    <button type="button" class="button" onclick="bookSession()">Book Now</button>
</div>

<!-- Booking History Section -->
<div class="history-section">
    <h2 class="history-title">Booking History</h2>
    <table id="historyTable">
        <thead>
            <tr>
                <th>Sport</th>
                <th>Date</th>
                <th>People</th>
                <th>Check-in Time</th>
                <th>Check-out Time</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody id="historyTableBody">
            <!-- Booking history will be populated here -->
        </tbody>
    </table>
</div>

<!-- Footer at the bottom of the page -->
<div class="footer">
    <button>Complaint</button>
    <button>Requests</button>
    <button>Feedback</button>
</div>


<script>
    // Toggle Equipment Fee Display based on Checkbox and People Input
    document.getElementById('equipmentCheckBox').addEventListener('click', function() {
        var equipmentFee = document.getElementById('equipmentFee');
        var feeAmount = document.getElementById('feeAmount');
        var peopleCount = document.getElementById('people').value || 0;

        if (this.checked && peopleCount) {
            feeAmount.innerText = 50 * peopleCount;
            equipmentFee.style.display = 'block';
        } else {
            equipmentFee.style.display = 'none';
        }
    });

    document.getElementById('people').addEventListener('input', function() {
        var equipmentCheckBox = document.getElementById('equipmentCheckBox');
        var equipmentFee = document.getElementById('equipmentFee');
        var feeAmount = document.getElementById('feeAmount');
        var peopleCount = this.value || 0;

        if (equipmentCheckBox.checked && peopleCount) {
            feeAmount.innerText = 50 * peopleCount;
            equipmentFee.style.display = 'block';
        } else {
            equipmentFee.style.display = 'none';
        }
    });

    // Add a Booking to the Booking History Table
    function bookSession() {
        const sport = document.getElementById('sport').value;
        const date = document.getElementById('date').value;
        const people = document.getElementById('people').value;
        const checkInTime = document.getElementById('checkInTime').value;
        const checkOutTime = document.getElementById('checkOutTime').value;

        const historyTableBody = document.getElementById('historyTableBody');
        const newRow = historyTableBody.insertRow();

        newRow.innerHTML = `
            <td>${sport}</td>
            <td>${date}</td>
            <td>${people}</td>
            <td>${checkInTime}</td>
            <td>${checkOutTime}</td>
            <td>Pending</td>
        `;
    }
</script>
</body>
</html>
