<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head Section: Meta and Title -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <style>
        /*----------------------------------------------------------Logo and Button Styles------------------------------------------------------------*/
        .topbar img /* This is for the logo */
        {
            width: 50px;
            height: 50px;
            margin-right: 290px;
            margin-left: 50px;
            justify-content: left;
        }

        .btn, .bt2 {
            align-self: center;
        }

        .btn a, .btn2 a {
            color: white;
            text-decoration: none;
        }

        .btn button {
            background-color: rgba(196, 0, 29, 0.8);
            font-family: Optima;
            border: none;
            padding: 7px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 17px;
            position: absolute;
            right: 1%;
            top: 1.3%;
        }

        .btn2 button {
            background-color: rgb(197, 0, 30, 0.8);
            font-family: Optima;
            border: none;
            padding: 7px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 17px;
            position: absolute;
            right: 8.5%;
            top: 1.3%;
        }

        button:hover {
            opacity: 75%;
        }

        /*----------------------------------------------------------Body-------------------------------------------------------------------------*/
        * {
            font-family: Optima;
        }

        .mainbody {
            background-color: black;
        }

        .heroImg, .loginBg {
            background-image: url('/Images/ChessHome.jpg');
            background-size: cover; /* Makes the image cover the entire screen */
            background-position: center; /* Centers the image */
            background-repeat: no-repeat; /* Prevents the image from repeating */
        }

        .loginBg::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: inherit; /* Same background image */
            background-size: cover;
            background-position: center;
            filter: blur(2px); /* Adjust blur level */
            z-index: -1; /* Position it behind content */
        }

        .heading {
            position: absolute;
            color: white;
            left: 10%;
            animation: fadeIn 1.5s ease-in-out;
        }

        .heading h1 {    
            font-size: 100px;
            text-align: center;
            margin-bottom: 5px;
            animation: fadeInUp 1.5s ease;
        }

        .heading p {
            font-size: 25px;
            text-align: center;
            bottom: 80%;
            animation: fadeInUp 5s ease;
        }

        /*------------------------------------------------------Animations-------------------------------------------------------------------------*/
        @keyframes fadeIn /* Animation for fading in */
        {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }  

        @keyframes fadeInUp /* Smooth upward entrance animation */
        {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        /*--------------------------------------------For the Log In / Sign Up forms----------------------------------------------------------------*/
        .loginContainer, .signup-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            width: 100%;
            bottom: 40%;
        }

        .login-box, .signup-box {
            width: 400px;
            background-color: #0a0a0e;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            text-align: center;
            color: white;
            position: relative;
            top: -50px;
        }

        .login-box h2, .signup-box h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        form label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
            font-size: 0.9em;
            color: #ccc;
        }

        form input {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #ccc;
            font-size: 0.9em;
        }

        form .forgot-password {
            display: block;
            margin: 10px 0 20px;
            font-size: 0.8em;
            color: #a64eff;
            text-decoration: none;
        }

        form .signInBtn, .sign-up-btn {
            width: 75%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #c5001e;
            color: white;
            font-size: 1em;
            cursor: pointer;
            transition: background 0.3s ease;
            font-family: Optima;
        }

        form .signInBtn:hover {
            background-color: #c5001e;
        }

        .sign-up, .login-link {
            margin-top: 20px;
            font-size: 0.85em;
            color: #ccc;
        }

        .sign-up a, .login-link a {
            color: red;
            text-decoration: none;
        }

        .sign-up a:hover {
            text-decoration: underline;
        } 

        .error-message {
            color: red; 
            font-size: 0.9em; 
            margin-top: 5px; 
        }

        .navbar ul, .navbar ul a, .navbar ul li {
            list-style: none;
            color: white;
            font-size: 25px;
            text-decoration: none;
            position: relative;
            float: left;
            margin-right: 50px;
        }

        .navbar ul a:hover {
            color: #BABBBE;
            text-decoration: underline;
        }

        .navigation {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: #252526ff;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            padding-left: 10px 7%;
        }
    </style>
</head>
<body class="loginBg">
  <header>
    <div class="topbar">
        <a href="/index">
            <img src="Images/al.png" alt="Logo" >
        </a>                                 
    </div>
  </header>
    <!-- Main Container for Login -->
    <div class="loginContainer">
        <!-- Login Box Section -->
        <div class="login-box">
            <!-- Greeting Header -->
            <h2>Welcome Back!</h2>
            
            <!-- Form Section for Login -->
            <form class="loginForm" action="home.html" method="get" onsubmit="return validateForm()">
                
                <!-- Email Field -->
                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="Enter your email">
                <span class="error-message" id="emailError"></span> <!-- Email error message -->
                
                <!-- Password Field -->
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter your password">
                <span class="error-message" id="passwordError"></span> <!-- Password error message -->
                
                <!-- Sign In Button -->
<button type="submit" class="signInBtn">Log In</button>



<!-- Sign Up Link as a Button -->
<p class="sign-up">
    New here? 
    <a href="/signup" class="signUpLink">Sign Up instead</a>
</p>

            </form>
        </div>
    </div>

    <script src="script.js"></script> <!-- Link to the external JavaScript file -->
</body>
</html>
