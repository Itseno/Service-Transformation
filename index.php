<?php
session_start();

if (isset($_SESSION['login'])) {
    header("Location: /home.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Power Saver | Home</title>
    <link rel="stylesheet" type="text/css" href="/Stylesheets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav class="nav" id="nav">
        <div class="navitems">
            <ul>
                <li><a href="/Login-Signup/login.php">Log In</a></li>
                <li><a href="/Login-Signup/signup.php">Sign Up</a></li>
            </ul>
        <div>
        <a href="javascript:void(0)" id="nav-reveal" style="color: blue;">&#9776</a>
    </nav>
    
    <header id="showcase" class="grid">
        <div class="bg-image"></div>
        <div class="content-wrap">
<!--             <img src="Images/logo.png" id="showcase-logo"> -->
            <h1 class="content-title">Power Saver</h1>
            <p>Find the cheapest power solution today.</p>
            <a href="#section-b" class="btn" id="showcase-button">Learn More</a>
        </div>
    </header>
    
    <main id="main">
        <section id="section-a" class="grid">
            <div class="content-wrap">
                <h1>Our Mission</h1>
                <p>Our mission is to make you to stop stealing power.</p>
            </div>
        </section>
        <section id="section-b" class="grid">
            <h1>How We Do It</h1>
            <ul>
                <li>
                    <div class="card">
                        <img src="https://static.pexels.com/photos/7059/man-people-space-desk.jpg">
                        <div class="card-content">
                            <h3>Working with companies</h3>
                            <p>We work with companies to provide cheap power that you can easily afford.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <img src="https://static.pexels.com/photos/541522/pexels-photo-541522.jpeg">
                        <div class="card-content">
                            <h3>Lorem Ipsum</h3>
                            <br>
                            <p>something something something something something something.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <img src="https://static.pexels.com/photos/163064/play-stone-network-networked-interactive-163064.jpeg">
                        <div class="card-content">
                            <h3>Lorem Ipsum</h3>
                            <br>
                            <p>something something something something something something.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
        <section id="section-c" class="grid">
            <div class="box">
            	    <h1>About Us</h1>
                    <p>We provide an easy solution to power theft in Africa.</p>
            </div>
            
            <div class="box">
                    <h1>Contact Us</h1>
                    <p>stopstealing@email.com</p>
            </div>
        </section>
        <section id="section-d" class="grid">
            
        </section>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="/Scripts/scrollshadow.js"></script>
<script type="text/javascript">
    $("#showcase-button").click(function() {
    $('html,body').animate({
        scrollTop: $("#section-b").offset().top});
    return false;
    });
</script>
</html>




<!--<div class="nav" id="nav-container">
        <nav class="nav">
            <ul>
                <li>Power Saver</li>
                <li><a href="index.php">Home</a></li>
                <li><a href="courses.php">Courses</a></li>
            </ul>
        </nav>
    </div>
    <!--<div class="content">
        <h1>Join Power Saver Today</h1>
        <form method="post" action="PHP-Login/signup.php">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="nickname" placeholder="Username">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Sign Up">
        </form>
    </div>-->