<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile and Settings</title>
    <style>
         /* Basic Styles for body, background, and font */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #fff;
        }

        /* Add orange background color for header */
        .header-background {
            background-color: #ff9800; /* orange color */
            padding:80px;
            text-align: center;
            color: #fff;
            position: relative;
    z-index: 0;
        }

        .header-background h1 {
    font-size: 3em; /* Adjust this value as needed */
    margin: 0;
}

#personalInfo {
    position: relative;
    z-index: 1;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    margin-top: -130px; /* Move it upwards */
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
            width: 50px;
            height: auto;
        }

        /* General container styling to hold all sections */
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
            padding-top: 80px;
            min-height: 80vh;
        }

        /* Heading styling */
        h2 {
            color: #333;
        }

        /* Section styling for each content area */
        .section {
            background-color: #f9f9f9;
            padding: 15px;
            margin: 15px 0;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Personal information profile image styling */
        .profile-image-container {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .profile-image-container img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-right: 80px;
            margin-left: 20px;
        }

        /* Label styling for input fields */
        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #333;
        }

        /* Input and select field styling */
        input[type="text"], input[type="email"], input[type="password"], select {
            width: calc(100% - 2px); /* Adjusted for alignment next to profile image */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        #sportsList {
            color: #333; /* Dark text for better contrast */
        }

        /* Restrict width for input fields in Login Credentials section */
        #loginCredentials input[type="text"],
        #loginCredentials input[type="password"] {
            width: 80%; /* Set width to 80% of the container */
            max-width: 400px; /* Set maximum width for the input fields */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box; /* Ensures padding is included in width */
        }

        #loginCredentials button {
            width: auto; /* Allows button to fit content without stretching */
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px; /* Space above the button */
        }

        /* Button styling for main action buttons */
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Disabled button styling */
        button:disabled {
            background-color: #888;
        }

        /* Footer styling for flexible positioning */
        .footer {
            background-color: #3f3d56;
            color: white;
            display: flex;
            justify-content: space-around;
            padding: 20px;
            margin-top: 20px;
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

<!-- Header with orange background and title -->
<div class="header-background">
    <br>
    <h1>My Profile</h1>
    <!-- <p>This information will let us know more about you. Let's start with the basic information</p> -->
</div>

<!-- Navigation Bar at the top of the page -->
<div class="navbar">
    <div class="logo">
        <a href="/index">
            <img src="Images/al.png" alt="Logo">
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
            <img src="Images/profile.png" alt="Profile Image">
        </a>
    </div>
</div>

<!-- Main content container -->
<div class="container">
    <!-- 1. Personal Information Section with Profile Image -->
    <div class="section" id="personalInfo">
        <h2>Personal Information</h2>

        <div class="profile-image-container">
            <img src="Images/profile.png" alt="User Profile Image">
            <div>
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" placeholder="Full Name" readonly>

                <label for="companyEmail">Company Email</label>
                <input type="email" id="companyEmail" placeholder="Company Email" readonly>

                <label for="securityQuestion">Security Question</label>
                <select id="securityQuestion">
                    <option value="pet">What was the name of your first pet?</option>
                    <option value="city">What city were you born in?</option>
                    <option value="school">What was the name of your primary school?</option>
                </select>
            </div>
        </div>
    </div>

    <!-- 2. Login Credentials Section -->
    <div class="section" id="loginCredentials">
        <h2>Login Credentials</h2>
        <label for="username">Username</label>
        <input type="text" id="username" placeholder="Username" readonly>

        <label for="oldPassword">Old Password</label>
        <input type="password" id="oldPassword" placeholder="Enter Old Password">

        <label for="newPassword">New Password</label>
        <input type="password" id="newPassword" placeholder="Enter New Password">
        <button onclick="saveNewPassword()">Save New Password</button>
    </div>

    <!-- 3. Edit Sport Interests Section -->
    <div class="section" id="editSportInterests">
        <h2>Edit Sport Interests</h2>
        <div id="sportsList">
            <div>
                <p>Basketball</p>
                <div class="button-group">
                    <button onclick="joinGroup('Basketball')">Join Group</button>
                    <button onclick="exitGroup('Basketball')">Exit Group</button>
                </div>
            </div>
            <div>
                <p>Soccer</p>
                <div class="button-group">
                    <button onclick="joinGroup('Soccer')">Join Group</button>
                    <button onclick="exitGroup('Soccer')">Exit Group</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer at the bottom of the page -->
<div class="footer">
    <button>Complaint</button>
    <button>Requests</button>
    <button>Feedback</button>
</div>

<script>
    document.getElementById("fullName").value = "John Doe";
    document.getElementById("companyEmail").value = "johndoe@company.com";
    document.getElementById("username").value = "johndoe";

    function saveNewPassword() {
        const oldPassword = document.getElementById("oldPassword").value;
        const newPassword = document.getElementById("newPassword").value;
        if (oldPassword && newPassword) {
            alert("Password updated successfully!");
        } else {
            alert("Please fill in both old and new password fields.");
        }
    }

    function joinGroup(sport) {
        alert(`Joining ${sport} group...`);
    }

    function exitGroup(sport) {
        alert(`Exiting ${sport} group...`);
    }
</script>

</body>
</html>
