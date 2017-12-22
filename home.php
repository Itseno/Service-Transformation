<?php
    session_start();
    if (!isset($_SESSION['login'])) {
        header("Location: /index.php");
    }
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Power Saver | Home</title>
    <link rel="stylesheet" type="text/css" href="/Stylesheets/style.css">
    <link rel="stylesheet" type="text/css" href="/Stylesheets/loggedin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav class="nav" id="nav">
        <div>
            <ul>
                <li class="navright"><a href="/Login-Signup/logout_script.php">Log Out</a></li>
                <li class="navleft"><a href="/home.php">Home</a></li>
                <li class="navleft"><a href="/courses.php">Courses</a></li>
            </ul>
        <div>
    </nav>
    
    <header id="header">
        <div class="content-title">
            <h1>Welcome, <?php echo $_SESSION['username'] ?></h1>
        </div>
    </header>
    
    <main>
        <section id="user-courses" class="grid home-select">
            <h1>Your Courses</h1>
            <ul>
                <li>
                    <div class="card">
                        <div class="card-content">
                            <h3>Course 1</h3>
                            <p>Course content</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <div class="card-content">
                            <h3>Course 2</h3>
                            <p>Course content</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card bottom-card">
                        <div class="card-content">
                            <h3>Course 3</h3>
                            <p>Course content</p>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
        <section id="something" class="grid home-select">
            <h1>Something Else</h1>
            <ul>
                <li>
                    <div class="card">
                        <div class="card-content">
                            <h3>Course 1</h3>
                            <p>Course content</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <div class="card-content">
                            <h3>Course 2</h3>
                            <p>Course content</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <div class="card-content">
                            <h3>Course 3</h3>
                            <p>Course content</p>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="/Scripts/scrollshadow.js"></script>
</html>