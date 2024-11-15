<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>APIIT Leisure</title>
    <style>
       /* Basic Styles for body, background, and font */
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: black;
            color: #fff;
        }

        
 

       /* Navigation Bar Styles */
       .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #2d2d2d;
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
            background-color: black;
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

        /* Main Content */
        main {
            margin-top: 115px;
            padding: 2rem;
        }

        h2 {
            text-align: center;
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        /* Sport Groups Section */
        .sport-groups .sport-cards {
            display: flex;
            gap: 1rem;
            padding: 1rem;
            background-color: rgba(115, 107, 107, 0.5);
            border-radius: 10px;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
        }

        .sport-cards::-webkit-scrollbar {
            display: none;
        }

        .card {
            background-color: #13131379;
            padding: 1rem;
            border-radius: 10px;
            min-width: 150px;
            height: 150px;
            text-align: center;
            scroll-snap-align: start;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card img {
            width: 80px;
        }

        .card p {
            font-size: 1rem;
            margin-top: 0.5rem;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(23, 23, 23, 0.3);
        }

        /* Training Videos Section */
        .training-videos {
            margin-top: 2rem;
           
        }


        /* Video Cards Section */
        .video-cards {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-left: 0;
            background-color: #2d2d2d; /* Background color for the box */
            padding: 2rem; /* Padding around the content */
            border-radius: 10px; /* Rounded corners for the box */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow for the box */
            border: 2px solid red;
        }

        .videos {
            display: flex;
            align-items: center; /* Align the video and description horizontally */
            gap: 1rem;
        }

        .videos video {
            width: 300px; /* Increased video size */
            height: auto;
        }

        .videos p {
            font-size: 1.2rem;
            color: white;
            max-width: 400px; /* Limit the width of the description */
        }




        /* Coaches Section */
/* Personal Coaches Section */
.personal-coaches {
    margin-top: 2rem;
}

.coach-box-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Creates 2 columns */
    gap: 1rem; /* Space between the coach boxes */
    margin: 0 auto; /* Centers the grid */
    max-width: 1200px; /* Optional: you can adjust this width as needed */
}

.coach-box {
    background-color: #2d2d2d;
    padding: 2rem;
    border-radius: 12px;
    margin-bottom: 1rem;
    text-align: center;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.coach-box p {
    font-size: 1.2rem;
    color: white;
    margin-bottom: 0.5rem;
}

.coach-box:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.3);
}

.coach-box a {
    text-decoration: none;
    color: #ffcc00;
    font-weight: bold;
    font-size: 1.1rem;
}

.coach-box a:hover {
    color: #ffcc66;
}



@media (max-width: 768px) {
    .navbar ul {
        text-align: center;
        margin-top: 10px;
    }
    
    .sport-cards {
        flex-direction: column;
        align-items: center;
    }
    
    .card {
        width: 100%;
        margin-bottom: 10px;
    }

    .video-cards {
        padding: 1rem;
    }

    .videos {
        flex-direction: column;
        align-items: center;
    }
    
    .videos video {
        width: 100%;
    }

    .coach-box-container {
        grid-template-columns: 1fr;
    }
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

<!-- Navigation Bar at the top of the page -->
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

<main>
        <section class="sport-groups">
            <h2>Sport Groups</h2>
            <div class="sport-cards">
                <div class="card">
                    <img src="images/Chess.png" alt="Chess">
                    <p>Chess</p>
                </div>
                <div class="card">
                    <img src="images/Basketball.png" alt="Basketball">
                    <p>Basketball</p>
                </div>
                <div class="card">
                    <img src="images/Checkers.png" alt="Checkers">
                    <p>Checkers</p>
                </div>
                <div class="card">
                    <img src="images/Tennis.png" alt="Tennis">
                    <p>Tennis</p>
                </div>
                <div class="card">
                    <img src="images/Carrom.png" alt="Carrom">
                    <p>Carrom</p>
                </div>
                <div class="card">
                    <img src="images/Cricket.png" alt="Cricket">
                    <p>Cricket</p>
                </div>
                <div class="card">
                    <img src="images/Netball.png" alt="Netball">
                    <p>Netball</p>
                </div>
                <div class="card">
                    <img src="images/Football.png" alt="Football">
                    <p>Football</p>
                </div>
                <div class="card">
                    <img src="images/Badminton.png" alt="Badminton">
                    <p>Badminton</p>
                </div>
                <div class="card">
                    <img src="images/squash.png" alt="squash">
                    <p>squash</p>
                </div>
            </div>
        </section>

        <!-- Training Videos Section (Box added and videos aligned left) -->
        <section class="training-videos">
        
            <h2>Training Videos</h2>
            <div class="video-cards">
                <div class="videos">
                <video src="/vdos/chess.mp4" controls></video>

                    <p>Learn the basics of Chess, including opening strategies and tactics. Perfect for beginners!</p>
                    <a href="https://youtu.be/AshEhLcPHqU?si=odbxILcl74a-XnyM">CLICK</a>
                </div>
                <div class="videos">
                    <video src="/vdos/basketball.mp4" controls></video>
                    <p>This video covers essential Basketball techniques, from dribbling to shooting drills.</p>
                    <a href="https://youtu.be/GYGzu9afduQ?si=qIgIoTPLiHYaxkop">CLICK</a>
                </div>
                <div class="videos">
                    <video src="/vdos/checkers.mp4" controls></video>
                    <p>Master your Checkers gameplay with these strategic tips and tricks.</p>
                    <a href= "https://youtu.be/qKEoPnrTziE?si=5Er4cGYtIU7ikqGp">CLICK</a>
                </div>
                <div class="videos">
                    <video src="/vdos/Tennis.mp4" controls></video>
                    <p>Improve your Tennis serve, volley, and footwork with expert guidance in this video.</p>
                    <a href= "https://youtu.be/1NDXZpbw3qA?si=thxpoMKtwdJ4p46z">CLICK</a>
                </div>
                <div class="videos">
                    <video src="/vdos/carrom.mp4" controls></video>
                    <p>Learn how to play Carrom and improve your skill level with professional tips.</p>
                    <a href= "https://youtu.be/dgMA90Mj5jA?si=T5SSgy9Pk9DxQdUI">CLICK</a>
                </div>
                <div class="videos">
                    <video src="vdos/cricket.mp4" controls></video>
                    <p>Cricket basics: Batting techniques, bowling tips, and game strategies explained.</p>
                    <a href= "https://youtu.be/KcNAG6gemEA?si=klNSBq7FM3AAz_RI">CLICK</a>
                </div>
                <div class="videos">
                    <video src="/vdos/Netball.mp4" controls></video>
                    <p>Improve your Netball shooting, passing, and team strategies with this comprehensive guide.</p>
                    <a href= "https://youtu.be/XIHqHouUHoY?si=FpalLNyrP-VZillX">CLICK</a>
                </div>
                <div class="videos">
                    <video src="vdos/football.mp4" controls></video>
                    <p>Football fundamentals: Passing, shooting, and positioning explained in detail.</p>
                    <a href=" https://youtu.be/bQT3MP5Moq8?si=CWnlXUF64G7w7GOX">CLICK</a>
                </div>
                <div class="videos">
                    <video src="vdos/badminton.mp4" controls></video>
                    <p>Elevate your Badminton skills with footwork drills, serving techniques, and more.</p>
                    <a href="https://youtu.be/2cnbHARo8nI?si=UptcIC_unIhw2pD5">CLICK</a>
                </div>
                <div class="videos">
                    <video src="/vdos/squash.mp4" controls></video>
                    <p>Elevate your Badminton skills with footwork drills, serving techniques, and more.</p>
                    <a href="https://youtu.be/6QeinR2zjbA?si=uMJXHYpW2Pqn5jbj">CLICK</a>
                </div>
                
            </div>
        </section>
        </main>
        <section class="personal-coaches">
    <h2>Personal Coaches</h2>
    <div class="coach-box-container">
        <div class="coach-box">
            <p><b>John Doe</b></p>
            <p>Expert in Football and Basketball. Available for individual and group coaching sessions.</p>
            <a href="https://www.chess.com/coaches">Book a session with John</a>
        </div>
        <div class="coach-box">
            <p><b>Jane Smith</b></p>
            <p>Specialized in Tennis and Cricket. Offering personal training sessions for all levels.</p>
            <a href="/book-coach/jane-smith">Book a session with Jane</a>
        </div>
        <div class="coach-box">
            <p><b>Mark Turner</b></p>
            <p>Football, Basketball, and Netball coach. Available for team coaching.</p>
            <a href="/book-coach/mark-turner">Book a session with Mark</a>
        </div>
        <div class="coach-box">
            <p><b>Lisa Clark</b></p>
            <p>Cricket and Tennis expert. Offering private coaching sessions.</p>
            <a href="/book-coach/lisa-clark">Book a session with Lisa</a>
        </div>
        <div class="coach-box">
            <p><b>Lisa Clark</b></p>
            <p>Cricket and Tennis expert. Offering private coaching sessions.</p>
            <a href="/book-coach/lisa-clark">Book a session with Lisa</a>
        </div>
        <div class="coach-box">
            <p><b>Lisa Clark</b></p>
            <p>Cricket and Tennis expert. Offering private coaching sessions.</p>
            <a href="/book-coach/lisa-clark">Book a session with Lisa</a>
        </div>
        <div class="coach-box">
            <p><b>Jane Smith</b></p>
            <p>Specialized in Tennis and Cricket. Offering personal training sessions for all levels.</p>
            <a href="/book-coach/jane-smith">Book a session with Jane</a>
        </div>
        <div class="coach-box">
            <p><b>Mark Turner</b></p>
            <p>Football, Basketball, and Netball coach. Available for team coaching.</p>
            <a href="/book-coach/mark-turner">Book a session with Mark</a>
        </div>
        <div class="coach-box">
            <p><b>Jane Smith</b></p>
            <p>Specialized in Tennis and Cricket. Offering personal training sessions for all levels.</p>
            <a href="/book-coach/jane-smith">Book a session with Jane</a>
        </div>
        <div class="coach-box">
            <p><b>Mark Turner</b></p>
            <p>Football, Basketball, and Netball coach. Available for team coaching.</p>
            <a href="/book-coach/mark-turner">Book a session with Mark</a>
        </div>
        
    </div>
</section>
<!-- Footer at the bottom of the page -->
<div class="footer">
    <button>Complaint</button>
    <button>Requests</button>
    <button>Feedback</button>
</div>

    <!-- </main> -->
</body>
</html>