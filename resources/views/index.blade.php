<html>
    <head>
        <meta charset="utf-8">
        <title>
            APIIT Leisure
        </title>
        <style>
            /* Topbar Logo */
            .topbar img {
                width: 50px;
                height: 50px;
                margin-right: 290px;
                margin-left: 50px;
                justify-content: left;
            }

            /* Buttons */
            .btn, .btn2 {
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
                background-color: rgba(197, 0, 30, 0.8);
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

            /* Body Styles */
            * {
                font-family: Optima;
            }

            .mainbody {
                background-color: black;
            }

            .heroImg, .loginBg {
                background-image: url('/Images/ChessHome.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }

            .loginBg::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-image: inherit;
                background-size: cover;
                background-position: center;
                filter: blur(2px);
                z-index: -1;
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

            
            

            /* Animations */
            @keyframes fadeIn {
                0% { opacity: 0; }
                100% { opacity: 1; }
            }  

            @keyframes fadeInUp {
                0% { opacity: 0; transform: translateY(20px); }
                100% { opacity: 1; transform: translateY(0); }
            }
        </style>
    </head>
    <body class="heroImg">
        <header>
    <div class="topbar">
        <a href="/index">
            <img src="Images/al.png" alt="Logo" >
        </a>                                 
    </div>
  
            <div class="btn"><button><a href="/signup">Sign Up</a></button></div>
            <div class="btn2"><button><a href="/login">Log In</a></button></div>
        </header>
        <div class="heading">
            <h1>
                <b>Welcome to APIIT Leisure!</b>
            </h1>
            <p>
                -Connecting Sport Enthusiasts-
            </p>
        </div>
        
    </body>
    <!--<script>
        setTimeout(() => {
          window.location.href = "login.html";
        }, 3000);
    </script>-->
</html>
